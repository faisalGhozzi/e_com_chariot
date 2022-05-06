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

/* security/login2.html.twig */
class __TwigTemplate_9bb2f661b6a1b57730dc6e20e5f1a63de19df4b318a1b5d8c9c2ccc82f7041e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login2.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "<link rel=\"stylesheet\" href=\"frontoffice/plugins/bootstrap/bootstrap.min.css\">
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
                        <div class=\"row mb-4 px-3\">
                            <h6 class=\"mb-0 mr-4 mt-2\">Sign in with</h6>
                            <div class=\"facebook text-center mr-3\">
                                <div class=\"fa fa-facebook\"></div>
                            </div>
                            <div class=\"twitter text-center mr-3\">
                                <div class=\"fa fa-twitter\"></div>
                            </div>
                            <div class=\"linkedin text-center mr-3\">
                                <div class=\"fa fa-linkedin\"></div>
                            </div>
                        </div>
                        <div class=\"row px-3 mb-4\">
                            <div class=\"line\"></div> <small class=\"or text-center\">Or</small>
                            <div class=\"line\"></div>
                        </div>
                        <form method=\"post\">
                            ";
        // line 208
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 208, $this->source); })())) {
            // line 209
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 209, $this->source); })()), "messageKey", [], "any", false, false, false, 209), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 209, $this->source); })()), "messageData", [], "any", false, false, false, 209), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 211
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211)) {
            // line 212
            echo "                                <div class=\"mb-3\">
                                    You are logged in as ";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213), "username", [], "any", false, false, false, 213), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                </div>
                            ";
        }
        // line 216
        echo "                        <div class=\"row px-3\"> <label class=\"mb-1\" for=\"inputEmail\">
                                <h6 class=\"mb-0 text-sm\">Email Address</h6>
                            </label> <input type=\"email\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 218, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"mb-4\" autocomplete=\"email\" required autofocus> </div>
                        <div class=\"row px-3\"> <label class=\"mb-1\" for=\"inputPassword\">
                                <h6 class=\"mb-0 text-sm\">Password</h6>
                            </label> <input  type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required> </div>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            >

                            <div class=\"row px-3 mb-4\">
                            <div class=\"custom-control custom-checkbox custom-control-inline\"> <input id=\"chk1\" type=\"checkbox\" name=\"chk\" class=\"custom-control-input\"> <label for=\"chk1\" class=\"custom-control-label text-sm\">Remember me</label> </div> <a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgetPassword");
        echo "\" class=\"ml-auto mb-0 text-sm\">Forgot Password?</a>
                        </div>


                        <div class=\"row mb-3 px-3\"> <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                Sign in
                            </button> </div>
                        </form>
                        <div class=\"row mb-4 px-3\"> <small class=\"font-weight-bold\">Don't have an account? <a class=\"text-danger \" href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a></small> </div>
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
        return "security/login2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 235,  333 => 227,  326 => 223,  318 => 218,  314 => 216,  306 => 213,  303 => 212,  300 => 211,  294 => 209,  292 => 208,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

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
                        <div class=\"row mb-4 px-3\">
                            <h6 class=\"mb-0 mr-4 mt-2\">Sign in with</h6>
                            <div class=\"facebook text-center mr-3\">
                                <div class=\"fa fa-facebook\"></div>
                            </div>
                            <div class=\"twitter text-center mr-3\">
                                <div class=\"fa fa-twitter\"></div>
                            </div>
                            <div class=\"linkedin text-center mr-3\">
                                <div class=\"fa fa-linkedin\"></div>
                            </div>
                        </div>
                        <div class=\"row px-3 mb-4\">
                            <div class=\"line\"></div> <small class=\"or text-center\">Or</small>
                            <div class=\"line\"></div>
                        </div>
                        <form method=\"post\">
                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}
                            {% if app.user %}
                                <div class=\"mb-3\">
                                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                </div>
                            {% endif %}
                        <div class=\"row px-3\"> <label class=\"mb-1\" for=\"inputEmail\">
                                <h6 class=\"mb-0 text-sm\">Email Address</h6>
                            </label> <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"mb-4\" autocomplete=\"email\" required autofocus> </div>
                        <div class=\"row px-3\"> <label class=\"mb-1\" for=\"inputPassword\">
                                <h6 class=\"mb-0 text-sm\">Password</h6>
                            </label> <input  type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required> </div>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('authenticate') }}\"
                            >

                            <div class=\"row px-3 mb-4\">
                            <div class=\"custom-control custom-checkbox custom-control-inline\"> <input id=\"chk1\" type=\"checkbox\" name=\"chk\" class=\"custom-control-input\"> <label for=\"chk1\" class=\"custom-control-label text-sm\">Remember me</label> </div> <a href=\"{{ path(\"forgetPassword\") }}\" class=\"ml-auto mb-0 text-sm\">Forgot Password?</a>
                        </div>


                        <div class=\"row mb-3 px-3\"> <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                Sign in
                            </button> </div>
                        </form>
                        <div class=\"row mb-4 px-3\"> <small class=\"font-weight-bold\">Don't have an account? <a class=\"text-danger \" href=\"{{ path('app_register') }}\">Register</a></small> </div>
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
{% endblock %}", "security/login2.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\security\\login2.html.twig");
    }
}
