<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_a9a2fe9de31de8211108bb16e432ebf55d33d5842b1e96e6f99d747cbaa5442d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Bootstrap App Landing Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
    <meta name=\"author\" content=\"Themefisher\">
    <meta name=\"generator\" content=\"Themefisher Small Apps Template v1.0\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/images/logo1.png"), "html", null, true);
        echo "\" />

    ";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 30
        echo "
</head>

<body class=\"body-wrapper\" data-spy=\"scroll\" data-target=\".privacy-nav\">

<nav class=\"navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/images/logo1.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"ti-menu\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item @@articles\">
                    <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">Articles</a>
                </li>
                <li class=\"nav-item @@contact\">
                    <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Categories</a>
                </li>
                <li class=\"nav-item @@contact\">
                    <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sallesfront");
        echo "\">Salles</a>
                </li>
                <li class=\"nav-item @@about\">
                    <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">Panier</a>
                </li>
                ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Profile <i class=\"ti-arrow-down\"></i></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                            <a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            echo "\">Profile</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adresses");
            echo "\">Mes adresses</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraisonsUsers");
            echo "\">Livraisons</a>
                            ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                                <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home2");
                echo "\">Tableau de bord</a>
                            ";
            }
            // line 66
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </div>
                    </li>
                ";
        } else {
            // line 70
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                ";
        }
        // line 72
        echo "            </ul>
        </div>
    </div>
</nav>

";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "<footer>
    <div class=\"footer-main\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 m-md-auto align-self-center\">
                    <div class=\"block\">
                        <a href=\"index.html\"><img src=\"frontoffice/images/logotr_50.png\" alt=\"footer-logo\"></a>
                        <!-- Social Site Icons -->
                        <ul class=\"social-icon list-inline\">
                            <li class=\"list-inline-item\">
                                <a href=\"https://www.facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter\"></i></a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"https://www.instagram.com/themefisher/\"><i class=\"ti-instagram\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Product</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"team.html\">Teams</a></li>
                            <li><a href=\"blog.html\">Blogs</a></li>
                            <li><a href=\"FAQ.html\">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Resources</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"sign-up.html\">Singup</a></li>
                            <li><a href=\"sign-in.html\">Login</a></li>
                            <li><a href=\"blog.html\">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Company</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"career.html\">Career</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"team.html\">Investor</a></li>
                            <li><a href=\"privacy.html\">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Company</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"team.html\">Team</a></li>
                            <li><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-center bg-dark py-4\">
        <small class=\"text-secondary\">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href=\"https://themefisher.com/\">Groupe</a></small>
    </div>
</footer>
<!-- To Top -->
<div class=\"scroll-top-to\">
    <i class=\"ti-angle-up\"></i>
</div>

";
        // line 162
        $this->displayBlock('javascripts', $context, $blocks);
        // line 179
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "I-chariot";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/slick/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/slick/slick-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/fancybox/jquery.fancybox.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/aos/aos.css"), "html", null, true);
        echo "\">

        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/fancybox/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/syotimer/jquery.syotimer.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/script.js"), "html", null, true);
        echo "\"></script>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 177,  402 => 173,  397 => 171,  391 => 168,  387 => 167,  383 => 166,  379 => 165,  375 => 164,  370 => 163,  360 => 162,  342 => 77,  330 => 28,  324 => 25,  319 => 23,  315 => 22,  311 => 21,  307 => 20,  303 => 19,  299 => 18,  296 => 17,  286 => 16,  267 => 6,  254 => 179,  252 => 162,  167 => 79,  165 => 77,  158 => 72,  152 => 70,  144 => 66,  138 => 64,  136 => 63,  132 => 62,  128 => 61,  124 => 60,  119 => 57,  117 => 56,  112 => 54,  106 => 51,  100 => 48,  94 => 45,  81 => 37,  72 => 30,  70 => 16,  65 => 14,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <title>{% block title %}I-chariot{% endblock %}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Bootstrap App Landing Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
    <meta name=\"author\" content=\"Themefisher\">
    <meta name=\"generator\" content=\"Themefisher Small Apps Template v1.0\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('frontoffice/images/logo1.png')}}\" />

    {% block css%}
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\"/>
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/plugins/bootstrap/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/plugins/themify-icons/themify-icons.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/plugins/slick/slick.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/plugins/slick/slick-theme.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/plugins/fancybox/jquery.fancybox.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/plugins/aos/aos.css')}}\">

        <link href=\"{{ asset('frontoffice/css/style.css') }}\" rel=\"stylesheet\">

        <link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
    {% endblock %}

</head>

<body class=\"body-wrapper\" data-spy=\"scroll\" data-target=\".privacy-nav\">

<nav class=\"navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\"><img src=\"{{ asset('frontoffice/images/logo1.png') }}\" alt=\"logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"ti-menu\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item @@articles\">
                    <a class=\"nav-link\" href=\"{{ path('articles') }}\">Articles</a>
                </li>
                <li class=\"nav-item @@contact\">
                    <a class=\"nav-link\" href=\"{{ path('categories') }}\">Categories</a>
                </li>
                <li class=\"nav-item @@contact\">
                    <a class=\"nav-link\" href=\"{{ path('sallesfront') }}\">Salles</a>
                </li>
                <li class=\"nav-item @@about\">
                    <a class=\"nav-link\" href=\"{{ path('cart') }}\">Panier</a>
                </li>
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Profile <i class=\"ti-arrow-down\"></i></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                            <a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\">Profile</a>
                            <a class=\"dropdown-item\" href=\"{{ path('adresses') }}\">Mes adresses</a>
                            <a class=\"dropdown-item\" href=\"{{ path('livraisonsUsers') }}\">Livraisons</a>
                            {% if is_granted(\"ROLE_ADMIN\") %}
                                <a class=\"dropdown-item\" href=\"{{ path('app_home2') }}\">Tableau de bord</a>
                            {% endif %}
                            <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                        </div>
                    </li>
                {% else %}
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

{% block body %}
{% endblock %}
<footer>
    <div class=\"footer-main\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 m-md-auto align-self-center\">
                    <div class=\"block\">
                        <a href=\"index.html\"><img src=\"frontoffice/images/logotr_50.png\" alt=\"footer-logo\"></a>
                        <!-- Social Site Icons -->
                        <ul class=\"social-icon list-inline\">
                            <li class=\"list-inline-item\">
                                <a href=\"https://www.facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter\"></i></a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"https://www.instagram.com/themefisher/\"><i class=\"ti-instagram\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Product</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"team.html\">Teams</a></li>
                            <li><a href=\"blog.html\">Blogs</a></li>
                            <li><a href=\"FAQ.html\">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Resources</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"sign-up.html\">Singup</a></li>
                            <li><a href=\"sign-in.html\">Login</a></li>
                            <li><a href=\"blog.html\">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Company</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"career.html\">Career</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"team.html\">Investor</a></li>
                            <li><a href=\"privacy.html\">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                    <div class=\"block-2\">
                        <!-- heading -->
                        <h6>Company</h6>
                        <!-- links -->
                        <ul>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"team.html\">Team</a></li>
                            <li><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-center bg-dark py-4\">
        <small class=\"text-secondary\">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href=\"https://themefisher.com/\">Groupe</a></small>
    </div>
</footer>
<!-- To Top -->
<div class=\"scroll-top-to\">
    <i class=\"ti-angle-up\"></i>
</div>

{% block javascripts %}
<script src=\"{{ asset('frontoffice/plugins/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('frontoffice/plugins/bootstrap/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('frontoffice/plugins/slick/slick.min.js') }}\"></script>
<script src=\"{{ asset('frontoffice/plugins/fancybox/jquery.fancybox.min.js') }}\"></script>
<script src=\"{{ asset('frontoffice/plugins/syotimer/jquery.syotimer.min.js') }}\"></script>
<script src=\"{{ asset('frontoffice/plugins/aos/aos.js') }}\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g\"></script>
<script src=\"{{ asset('frontoffice/plugins/google-map/gmap.js') }}\"></script>

<script src=\"{{ asset('frontoffice/js/script.js')}}\"></script>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>
{% endblock %}
</body>

</html>
", "base.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\base.html.twig");
    }
}
