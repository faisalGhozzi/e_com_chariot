<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     * @param CategorieRepository $categorieRepository
     * @return Response
     */
    public function index(CategorieRepository $categorieRepository): Response
    {

        $categories = $categorieRepository->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'categories' => $categories,
        ]);
    }
}
