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

/* livreur/detailslivreur.html.twig */
class __TwigTemplate_a23bf332552acc87cda1bbfb229c8f158251ddbd144db42c65900894c2a27ff8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/detailslivreur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/detailslivreur.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livreur/detailslivreur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col order-last text-right\">
                <br>
            </div>
            <div class=\"col\">
            </div>
            <div class=\"col order-first\">
                <h1 class=\"h3 mb-2 text-gray-800\">Details du livreur</h1>
            </div>

        </div>
    </div>
    <br>
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Nom Livreur: </div>
                            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 24, $this->source); })()), "nomlivreur", [], "any", false, false, false, 24), "html", null, true);
        echo "
            <br>
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Numero de telephone: </div>
                            ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 28, $this->source); })()), "numtel", [], "any", false, false, false, 28), "html", null, true);
        echo "
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Prenom: </div>
                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), "html", null, true);
        echo "
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Email: </div>
                            ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "


            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livreur/detailslivreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  103 => 31,  97 => 28,  90 => 24,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col order-last text-right\">
                <br>
            </div>
            <div class=\"col\">
            </div>
            <div class=\"col order-first\">
                <h1 class=\"h3 mb-2 text-gray-800\">Details du livreur</h1>
            </div>

        </div>
    </div>
    <br>
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Nom Livreur: </div>
                            {{l.nomlivreur}}
            <br>
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Numero de telephone: </div>
                            {{l.numtel}}
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Prenom: </div>
                            {{l.prenom}}
            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                Email: </div>
                            {{l.email}}


            </div>
        </div>
    </div>


{% endblock %}", "livreur/detailslivreur.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livreur\\detailslivreur.html.twig");
    }
}
