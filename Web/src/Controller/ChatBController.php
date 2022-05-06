<?php

namespace App\Controller;

use App\ChatBot\Conversation\OnBoardingConversation;
use App\ChatBot\Conversation\QuestionConversation;


use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\SymfonyCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Web\WebDriver;
use ReceiveMiddleware;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatBController extends AbstractController
{
    /**
     * @Route("/chat", name="chat_index")
     */
    public function index(): Response
    {
        return $this->render('chat/index3.html.twig');
    }



    /**
     * @Route("/chat/message", name="chat_message")
     */
    public function message(): Response
    {
        // Load the driver(s) you want to use
        DriverManager::loadDriver(WebDriver::class);

        // Create an instance
        $botman = BotManFactory::create([
            'web' => [
                'matchingData' => [
                    'driver' => 'web',
                ],
            ]
        ]);



        // basic
        // --------------------------------
        $botman->hears(
            'Bonjour',
            function (BotMan $bot) {
                $bot->reply('Bienvenue dans I-CHARIOT');
            }
        );

        // remote API
        // --------------------------------
        $botman->hears(
            'weather in {location}',
            function (BotMan $bot, string $location) {
                $response = $this->fetchWeatherData($location);
                $bot->reply(sprintf('<img src="%s" alt="icon"/>', $response->current->weather_icons[0]));
                $bot->reply(sprintf('Weather in %s is %s!', $response->location->name, $response->current->weather_descriptions[0]));
            }
        );

        // attachment
        // --------------------------------
        $botman->hears(
            '/gif {name}',
            function (BotMan $bot, string $name) {
                $bot->reply(
                    OutgoingMessage::create('this is your gif')
                        ->withAttachment($this->fetchGiphyGif($name))
                );
            }
        );

        // data provider: user info
        // --------------------------------
        $botman->hears(
            'ahla ena {name}',
            function (BotMan $bot, string $name) {
                $bot->userStorage()->save(['name' => $name]);
                $bot->reply('marhbe bik hdhena, ' . $name);
            }
        );

        $botman->hears(
            'chnawa esmi',
            function (BotMan $bot) {
                $bot->reply('haka tawa bech nensek  ' . $bot->userStorage()->get('name'));
            }
        );

        // User information:
        // botman will provide the user information by passing user object implemented UserInterface
        // --------------------------------
        $botman->hears(
            'information',
            function (BotMan $bot) {
                $user = $bot->getUser();
                $bot->reply('First name: ' . $user->getFirstName());
            }
        );

        // conversation
        // --------------------------------
        $botman->hears(
            'survey',
            function (BotMan $bot) {
                $bot->reply('I am going to start the on-boarding conversation');
                $bot->startConversation(new OnBoardingConversation());
            }
        );

        $botman->hears(
            'help',
            function (BotMan $bot) {
                $bot->reply('This is the help information.');
            }
        )->skipsConversation();

        $botman->hears(
            'bye',
            function (BotMan $bot) {
                $bot->reply('YALLA RABI MAAK');
            }
        )->stopsConversation();

        // question with buttons
        // --------------------------------
        $botman->hears(
            'question',
            function (BotMan $bot) {
                $bot->startConversation(new QuestionConversation());

            }
        );

        // fallback, nothing matched
        // --------------------------------
        $botman->fallback(
            function (BotMan $bot) {
                $bot->reply('Sorry, FHEMTEKCH :( .');
            }
        );

        return new Response($botman->listen());
    }


    /**
     * @Route("/chat/frame", name="chat_frame")
     */
    public function chatframe(): Response
    {
        return $this->render('chat/frame.html.twig');
    }
    private function fetchWeatherData(string $location): stdClass
    {
        //😀 dirty, but simple and fine for me in POC
        $url = 'https://api.weatherstack.com/current?access_key=18895c6bcedd7b4a6194ffd07400025a&query=' . urlencode($location);

        return json_decode(file_get_contents($url));
    }

    private function fetchGiphyGif(string $name): Image
    {
        $url = sprintf('https://api.giphy.com/v1/gifs/search?api_key=zlPPjtJejAAj56KPc5iCjIDqeMsgiD2m&q=%s&limit=1', urlencode($name));
        $response = json_decode(file_get_contents($url));

        return new Image($response->data[0]->images->downsized_large->url);
    }
}
