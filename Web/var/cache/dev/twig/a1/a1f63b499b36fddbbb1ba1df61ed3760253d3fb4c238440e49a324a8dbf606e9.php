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

/* base2.html.twig */
class __TwigTemplate_5306d6b9495e67208f88824dc2662c46e1fbf3c6d2d6d2d3d7bb9c941c6a6317 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'Bootstrap' => [$this, 'block_Bootstrap'],
            'plugins' => [$this, 'block_plugins'],
            'scripts' => [$this, 'block_scripts'],
            'levels' => [$this, 'block_levels'],
            'levscripts' => [$this, 'block_levscripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>


    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>I_chariot Dashboard</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/img/favicon.png"), "html", null, true);
        echo "\">

    <script src=\"https://kit.fontawesome.com/293caa18a5.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>


<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home2");
        echo "\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/img/logo.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" />
            </div>
            <div class=\"sidebar-brand-text mx-3\">I_chariot</div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span></a>
        </li>


        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Gestionnaires
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fa fa-user\"></i>
                <span>User</span>
            </a>

        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorieAdmin");
        echo "\">
                <i class=\"fa-solid fa-shop\"></i>
                <span>Produits</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapselivraison\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fa-solid fa-truck-ramp-box\"></i>
                <span>Livraison</span>
            </a>
            <div id=\"collapselivraison\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Livraison avance:</h6>
                    <a class=\"collapse-item\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Livraisons");
        echo "\">Livraisons</a>
                    <a class=\"collapse-item\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Livreurs");
        echo "\">Livreurs</a>
                    <a class=\"collapse-item\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("LivreursStat");
        echo "\">Stat Livreurs</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getarticles");
        echo "\">
                <i class=\"fa-solid fa-newspaper\"></i>
                <span>Articles</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salles");
        echo "\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fa-solid fa-building\"></i>
                <span>Salles</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Al9aw fekra
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
               aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Login Screens:</h6>
                    <a class=\"collapse-item\" href=\"login.html\">Login</a>
                    <a class=\"collapse-item\" href=\"register.html\">Register</a>
                    <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                    <div class=\"collapse-divider\"></div>
                    <h6 class=\"collapse-header\">Other Pages:</h6>
                    <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                    <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"charts.html\">
                <i class=\"fas fa-fw fa-chart-area\"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"tables.html\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                <!-- Topbar Search -->
                <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                               aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                             aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                           placeholder=\"Search for...\" aria-label=\"Search\"
                                           aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-bell fa-fw\"></i>
                            <!-- Counter - Alerts -->
                            <span class=\"badge badge-danger badge-counter\">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"alertsDropdown\">
                            <h6 class=\"dropdown-header\">
                                Alerts Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-primary\">
                                        <i class=\"fas fa-file-alt text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 12, 2019</div>
                                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success\">
                                        <i class=\"fas fa-donate text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 7, 2019</div>
                                    \$290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-warning\">
                                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-envelope fa-fw\"></i>
                            <!-- Counter - Messages -->
                            <span class=\"badge badge-danger badge-counter\">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"messagesDropdown\">
                            <h6 class=\"dropdown-header\">
                                Message Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"backoffice/img/undraw_profile_1.svg\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div class=\"font-weight-bold\">
                                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"backoffice/img/undraw_profile_2.svg\"
                                         alt=\"...\">
                                    <div class=\"status-indicator\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"backoffice/img/undraw_profile_3.svg\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-warning\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                        </div>
                    </li>

                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 346, $this->source); })()), "user", [], "any", false, false, false, 346), "nom", [], "any", false, false, false, 346), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 346, $this->source); })()), "user", [], "any", false, false, false, 346), "prenom", [], "any", false, false, false, 346), "html", null, true);
        echo "</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/img/undraw_profile.svg"), "html", null, true);
        echo "\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"";
        // line 353
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
        // line 358
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            ";
        // line 369
        $this->displayBlock('content', $context, $blocks);
        // line 370
        echo "            <!-- Footer -->
                <footer class=\"sticky-footer bg-white\">
                    <div class=\"container my-auto\">
                        <div class=\"copyright text-center my-auto\">
                            <span>Copyright &copy; Daydreamers 2022</span>
                        </div>
                    </div>
                </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 405
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    ";
        // line 412
        $this->displayBlock('Bootstrap', $context, $blocks);
        // line 416
        echo "    <!-- Core plugin JavaScript-->
    ";
        // line 417
        $this->displayBlock('plugins', $context, $blocks);
        // line 420
        echo "    <!-- Custom scripts for all pages-->
    ";
        // line 421
        $this->displayBlock('scripts', $context, $blocks);
        // line 424
        echo "    <!-- Page level plugins -->
    ";
        // line 425
        $this->displayBlock('levels', $context, $blocks);
        // line 428
        echo "    <!-- Page level custom scripts -->
    ";
        // line 429
        $this->displayBlock('levscripts', $context, $blocks);
        // line 433
        echo "</div>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">

        <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 369
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 412
    public function block_Bootstrap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bootstrap"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bootstrap"));

        // line 413
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 417
    public function block_plugins($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "plugins"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "plugins"));

        // line 418
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 421
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 422
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 425
    public function block_levels($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "levels"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "levels"));

        // line 426
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 429
    public function block_levscripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "levscripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "levscripts"));

        // line 430
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 431,  702 => 430,  692 => 429,  679 => 426,  669 => 425,  656 => 422,  646 => 421,  633 => 418,  623 => 417,  611 => 414,  606 => 413,  596 => 412,  578 => 369,  566 => 26,  556 => 19,  552 => 18,  549 => 17,  539 => 16,  527 => 433,  525 => 429,  522 => 428,  520 => 425,  517 => 424,  515 => 421,  512 => 420,  510 => 417,  507 => 416,  505 => 412,  495 => 405,  458 => 370,  456 => 369,  442 => 358,  434 => 353,  426 => 348,  419 => 346,  177 => 107,  167 => 100,  158 => 94,  154 => 93,  150 => 92,  131 => 76,  120 => 68,  91 => 42,  86 => 40,  72 => 28,  70 => 16,  64 => 13,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>


    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>I_chariot Dashboard</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('backoffice/img/favicon.png') }}\">

    <script src=\"https://kit.fontawesome.com/293caa18a5.js\" crossorigin=\"anonymous\"></script>
    {% block stylesheets %}
    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('backoffice/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/plugins/themify-icons/themify-icons.css')}}\">

        <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('backoffice/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>


<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('app_home2') }}\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <img src=\"{{ asset('backoffice/img/logo.png') }}\" alt=\"Symfony!\" />
            </div>
            <div class=\"sidebar-brand-text mx-3\">I_chariot</div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span></a>
        </li>


        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Gestionnaires
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_user_index') }}\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fa fa-user\"></i>
                <span>User</span>
            </a>

        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('categorieAdmin') }}\">
                <i class=\"fa-solid fa-shop\"></i>
                <span>Produits</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapselivraison\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fa-solid fa-truck-ramp-box\"></i>
                <span>Livraison</span>
            </a>
            <div id=\"collapselivraison\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Livraison avance:</h6>
                    <a class=\"collapse-item\" href=\"{{ path('Livraisons') }}\">Livraisons</a>
                    <a class=\"collapse-item\" href=\"{{ path('Livreurs') }}\">Livreurs</a>
                    <a class=\"collapse-item\" href=\"{{ path('LivreursStat') }}\">Stat Livreurs</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('getarticles') }}\">
                <i class=\"fa-solid fa-newspaper\"></i>
                <span>Articles</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('salles') }}\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fa-solid fa-building\"></i>
                <span>Salles</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Al9aw fekra
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
               aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Login Screens:</h6>
                    <a class=\"collapse-item\" href=\"login.html\">Login</a>
                    <a class=\"collapse-item\" href=\"register.html\">Register</a>
                    <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                    <div class=\"collapse-divider\"></div>
                    <h6 class=\"collapse-header\">Other Pages:</h6>
                    <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                    <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"charts.html\">
                <i class=\"fas fa-fw fa-chart-area\"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"tables.html\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                <!-- Topbar Search -->
                <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                               aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                             aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                           placeholder=\"Search for...\" aria-label=\"Search\"
                                           aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-bell fa-fw\"></i>
                            <!-- Counter - Alerts -->
                            <span class=\"badge badge-danger badge-counter\">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"alertsDropdown\">
                            <h6 class=\"dropdown-header\">
                                Alerts Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-primary\">
                                        <i class=\"fas fa-file-alt text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 12, 2019</div>
                                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success\">
                                        <i class=\"fas fa-donate text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 7, 2019</div>
                                    \$290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-warning\">
                                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-envelope fa-fw\"></i>
                            <!-- Counter - Messages -->
                            <span class=\"badge badge-danger badge-counter\">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"messagesDropdown\">
                            <h6 class=\"dropdown-header\">
                                Message Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"backoffice/img/undraw_profile_1.svg\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div class=\"font-weight-bold\">
                                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"backoffice/img/undraw_profile_2.svg\"
                                         alt=\"...\">
                                    <div class=\"status-indicator\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"backoffice/img/undraw_profile_3.svg\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-warning\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                        </div>
                    </li>

                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.nom }} {{ app.user.prenom }}</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"{{ asset('backoffice/img/undraw_profile.svg') }}\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"{{ path('app_user_index') }}\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            {% block content %}{% endblock %}
            <!-- Footer -->
                <footer class=\"sticky-footer bg-white\">
                    <div class=\"container my-auto\">
                        <div class=\"copyright text-center my-auto\">
                            <span>Copyright &copy; Daydreamers 2022</span>
                        </div>
                    </div>
                </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    {% block Bootstrap %}
        <script src=\"{{ asset('backoffice/vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('backoffice/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    {% endblock %}
    <!-- Core plugin JavaScript-->
    {% block plugins %}
        <script src=\"{{ asset('backoffice/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
    {% endblock %}
    <!-- Custom scripts for all pages-->
    {% block scripts %}
        <script src=\"{{ asset('backoffice/js/sb-admin-2.min.js') }}\"></script>
    {% endblock %}
    <!-- Page level plugins -->
    {% block levels %}
        <script src=\"{{ asset('backoffice/vendor/chart.js/Chart.min.js') }}\"></script>
    {% endblock  %}
    <!-- Page level custom scripts -->
    {% block levscripts %}
        <script src=\"{{ asset('backoffice/js/demo/chart-area-demo.js') }}\"></script>
        <script src=\"{{ asset('backoffice/js/demo/chart-pie-demo.js') }}\"></script>
    {% endblock  %}
</div>

</html>", "base2.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\base2.html.twig");
    }
}
