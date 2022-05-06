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

/* livraison/addlivraison.html.twig */
class __TwigTemplate_0ba4e8a5bd6f69b47f7f8a7e8c6450a83790e6a6c8d47d591e798fb878e9b79f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/addlivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/addlivraison.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "livraison/addlivraison.html.twig", 1);
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
        echo "<div class=\"app-content align-items-center\">

    <div class=\"side-app align-items-center\">
        <div class=\"col-md-12 \">
        </div>
        <br>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 align-items-center\">
                <div class=\"card m-b-20 \">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Valider la commande</h3>

                    </div>
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"card-body align-items-center\">

                        <form>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputname\">Type</label>
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "type", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "type"]]);
        echo "
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputEmail2\">Adresse</label>
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "adresse", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Adresse"]]);
        echo "
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "adresse", [], "any", false, false, false, 28), 'errors');
        echo "
                            </div>

                            <div class=\"form-group mb-4 text-center\">
                                <div class=\"checkbox checkbox-secondary\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'widget');
        echo "
                                    <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
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
        return "livraison/addlivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  115 => 33,  107 => 28,  103 => 27,  96 => 23,  92 => 22,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"app-content align-items-center\">

    <div class=\"side-app align-items-center\">
        <div class=\"col-md-12 \">
        </div>
        <br>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 align-items-center\">
                <div class=\"card m-b-20 \">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Valider la commande</h3>

                    </div>
                    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                    <div class=\"card-body align-items-center\">

                        <form>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputname\">Type</label>
                                {{ form_widget(form.type , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'type'}} ) }}
                                {{ form_errors(form.type ) }}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputEmail2\">Adresse</label>
                                {{ form_widget(form.adresse , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Adresse'}} ) }}
                                {{ form_errors(form.adresse) }}
                            </div>

                            <div class=\"form-group mb-4 text-center\">
                                <div class=\"checkbox checkbox-secondary\">
                                    {{ form_widget(form) }}
                                    <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>

    </div>

    {% endblock %}

", "livraison/addlivraison.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livraison\\addlivraison.html.twig");
    }
}
