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

/* home/index.html.twig */
class __TwigTemplate_47084d00e98a4ce0733bcab3da8e110eaee58e907a1903ce52aca39e483b781e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section class=\"section gradient-banner\">
        <div class=\"shapes-container\">
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"zoom-in\" data-aos-duration=\"1000\" data-aos-delay=\"300\"></div>
            <div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"zoom-out\" data-aos-duration=\"2000\" data-aos-delay=\"500\"></div>
            <div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
            <div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
            <div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
        </div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6 order-2 order-md-1 text-center text-md-left\">
                    <h1 class=\"text-white font-weight-bold mb-4\">I-Chariot, Achats en ligne et plus encore</h1>
                    <p class=\"text-white mb-5\">Bienvenue dans votre boutique en ligne et votre source d'actualité</p>
                    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"btn btn-main-md\">Découvrez-en</a>
                </div>
";
        // line 32
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  94 => 27,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <section class=\"section gradient-banner\">
        <div class=\"shapes-container\">
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"zoom-in\" data-aos-duration=\"1000\" data-aos-delay=\"300\"></div>
            <div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"zoom-out\" data-aos-duration=\"2000\" data-aos-delay=\"500\"></div>
            <div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
            <div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
            <div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
            <div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
        </div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6 order-2 order-md-1 text-center text-md-left\">
                    <h1 class=\"text-white font-weight-bold mb-4\">I-Chariot, Achats en ligne et plus encore</h1>
                    <p class=\"text-white mb-5\">Bienvenue dans votre boutique en ligne et votre source d'actualité</p>
                    <a href=\"{{ path('categories') }}\" class=\"btn btn-main-md\">Découvrez-en</a>
                </div>
{#                <div class=\"col-md-6 text-center order-1 order-md-2\">#}
{#                    <img class=\"img-fluid\" src=\"images/mobile.png\" alt=\"screenshot\">#}
{#                </div>#}
            </div>
        </div>
    </section>
{% endblock %}", "home/index.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\home\\index.html.twig");
    }
}
