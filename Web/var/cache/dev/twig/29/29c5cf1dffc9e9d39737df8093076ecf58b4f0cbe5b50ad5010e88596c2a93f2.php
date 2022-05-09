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

/* security/changePassword.html.twig */
class __TwigTemplate_e07d5ed9ccac0e1f7a4dfebb4e7962662eb6795d7ae478e262d4447ce83d65c0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/changePassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/changePassword.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/changePassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Changer mot de passe!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"frontoffice/plugins/bootstrap/bootstrap.min.css\">
    <style>

        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #B0BEC5;
            background-repeat: no-repeat
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px
        }

        .card2 {
            margin: 0px 40px
        }

        .logo {
            width: 200px;
            height: 100px;
            margin-top: 20px;
            margin-left: 35px
        }

        .image {
            width: 360px;
            height: 280px
        }

        .border-line {
            border-right: 1px solid #EEEEEE
        }

        .facebook {
            background-color: #3b5998;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .twitter {
            background-color: #1DA1F2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .linkedin {
            background-color: #2867B2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

        .or {
            width: 10%;
            font-weight: bold
        }

        .text-sm {
            font-size: 14px !important
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 2px
        }

        .btn-blue:hover {
            background-color: #000;
            cursor: pointer
        }

        .bg-blue {
            color: #fff;
            background-color: #1A237E
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px
            }

            .image {
                width: 300px;
                height: 220px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px
            }
        }
    </style>

    <div class=\"container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto\">
        <div class=\"card card0 border-0\">
            <div class=\"row d-flex\">
                <div class=\"col-lg-6\">
                    <div class=\"card1 pb-5\">
                        <div class=\"row\"> <img src=\"https://i.imgur.com/CXQmsmF.png\" class=\"logo\"> </div>
                        <div class=\"row px-3 justify-content-center mt-4 mb-5 border-line\"> <img src=\"https://i.imgur.com/uNGdWHi.png\" class=\"image\"> </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"card2 card border-0 px-4 py-5\">
                        <div class=\"row px-3 mb-4\">
                            <div class=\"line\"></div> <small class=\"or text-center\">Changer le mot de passe</small>
                            <div class=\"line\"></div>
                        </div>
                        <form method=\"post\">
                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword\">
                                    <h6 class=\"mb-0 text-sm\">";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 198, $this->source); })()), "html", null, true);
        echo " </h6>
                                </label>
                            </div>

                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword\">
                                    <h6 class=\"mb-0 text-sm\">Nouveau mot de passe </h6>
                                </label>
                                <input type=\"password\" value=\"\" name=\"newPassword\" id=\"newPassword\" class=\"mb-4\" autocomplete=\"email\" required autofocus>
                            </div>

                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword\">
                                    <h6 class=\"mb-0 text-sm\">Confirmer mot de passe </h6>
                                </label>
                                <input type=\"password\" value=\"\" name=\"newPassword\" id=\"newPassword\" class=\"mb-4\" autocomplete=\"email\" required autofocus>
                            </div>

                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword_\">
                                    <h6 class=\"mb-0 text-sm\">Confirmer </h6>
                                </label>
                                <input type=\"password\" value=\"\" name=\"newPassword_\" id=\"newPassword_\" class=\"mb-4\" autocomplete=\"email\" required autofocus>
                            </div>

                            <div class=\"row px-3 mb-4\">
                            </div>


                            <div class=\"row mb-3 px-3\"> <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Valider
                                </button> </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"bg-blue py-4\">
                <div class=\"row px-3\"> <small class=\"ml-4 ml-sm-5 mb-2\">Copyright &copy; 2019. All rights reserved.</small>
                    <div class=\"social-contact ml-4 ml-sm-auto\"> <span class=\"fa fa-facebook mr-4 text-sm\"></span> <span class=\"fa fa-google-plus mr-4 text-sm\"></span> <span class=\"fa fa-linkedin mr-4 text-sm\"></span> <span class=\"fa fa-twitter mr-4 mr-sm-5 text-sm\"></span> </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 198,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Changer mot de passe!{% endblock %}

{% block body %}
    <link rel=\"stylesheet\" href=\"frontoffice/plugins/bootstrap/bootstrap.min.css\">
    <style>

        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #B0BEC5;
            background-repeat: no-repeat
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px
        }

        .card2 {
            margin: 0px 40px
        }

        .logo {
            width: 200px;
            height: 100px;
            margin-top: 20px;
            margin-left: 35px
        }

        .image {
            width: 360px;
            height: 280px
        }

        .border-line {
            border-right: 1px solid #EEEEEE
        }

        .facebook {
            background-color: #3b5998;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .twitter {
            background-color: #1DA1F2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .linkedin {
            background-color: #2867B2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

        .or {
            width: 10%;
            font-weight: bold
        }

        .text-sm {
            font-size: 14px !important
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 2px
        }

        .btn-blue:hover {
            background-color: #000;
            cursor: pointer
        }

        .bg-blue {
            color: #fff;
            background-color: #1A237E
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px
            }

            .image {
                width: 300px;
                height: 220px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px
            }
        }
    </style>

    <div class=\"container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto\">
        <div class=\"card card0 border-0\">
            <div class=\"row d-flex\">
                <div class=\"col-lg-6\">
                    <div class=\"card1 pb-5\">
                        <div class=\"row\"> <img src=\"https://i.imgur.com/CXQmsmF.png\" class=\"logo\"> </div>
                        <div class=\"row px-3 justify-content-center mt-4 mb-5 border-line\"> <img src=\"https://i.imgur.com/uNGdWHi.png\" class=\"image\"> </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"card2 card border-0 px-4 py-5\">
                        <div class=\"row px-3 mb-4\">
                            <div class=\"line\"></div> <small class=\"or text-center\">Changer le mot de passe</small>
                            <div class=\"line\"></div>
                        </div>
                        <form method=\"post\">
                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword\">
                                    <h6 class=\"mb-0 text-sm\">{{ error }} </h6>
                                </label>
                            </div>

                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword\">
                                    <h6 class=\"mb-0 text-sm\">Nouveau mot de passe </h6>
                                </label>
                                <input type=\"password\" value=\"\" name=\"newPassword\" id=\"newPassword\" class=\"mb-4\" autocomplete=\"email\" required autofocus>
                            </div>

                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword\">
                                    <h6 class=\"mb-0 text-sm\">Confirmer mot de passe </h6>
                                </label>
                                <input type=\"password\" value=\"\" name=\"newPassword\" id=\"newPassword\" class=\"mb-4\" autocomplete=\"email\" required autofocus>
                            </div>

                            <div class=\"row px-3\">
                                <label class=\"mb-1\" for=\"newPassword_\">
                                    <h6 class=\"mb-0 text-sm\">Confirmer </h6>
                                </label>
                                <input type=\"password\" value=\"\" name=\"newPassword_\" id=\"newPassword_\" class=\"mb-4\" autocomplete=\"email\" required autofocus>
                            </div>

                            <div class=\"row px-3 mb-4\">
                            </div>


                            <div class=\"row mb-3 px-3\"> <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Valider
                                </button> </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"bg-blue py-4\">
                <div class=\"row px-3\"> <small class=\"ml-4 ml-sm-5 mb-2\">Copyright &copy; 2019. All rights reserved.</small>
                    <div class=\"social-contact ml-4 ml-sm-auto\"> <span class=\"fa fa-facebook mr-4 text-sm\"></span> <span class=\"fa fa-google-plus mr-4 text-sm\"></span> <span class=\"fa fa-linkedin mr-4 text-sm\"></span> <span class=\"fa fa-twitter mr-4 mr-sm-5 text-sm\"></span> </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "security/changePassword.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\security\\changePassword.html.twig");
    }
}
