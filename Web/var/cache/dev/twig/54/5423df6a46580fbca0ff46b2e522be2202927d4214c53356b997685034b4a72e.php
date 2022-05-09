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

/* categorie/updateCategorie.html.twig */
class __TwigTemplate_c58e7a79cb8be90174b3b712f55c037fdfaeebfd3b7de4bf9de54e234a640aba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/updateCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/updateCategorie.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "categorie/updateCategorie.html.twig", 1);
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
        echo "
    <div class=\"form\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"exampleInputPassword2\">Nom Categorie</label>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 9, $this->source); })()), "nomcateg", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 10, $this->source); })()), "nomcateg", [], "any", false, false, false, 10), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"exampleInputPassword2\">Description</label>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), 'errors');
        echo "
        </div>
        <div class=\"form-group mb-4\">
            <div class=\"checkbox checkbox-secondary\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 19, $this->source); })()), "Modifier", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
            </div>
        </div>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/updateCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  100 => 19,  93 => 15,  89 => 14,  82 => 10,  78 => 9,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}

    <div class=\"form\">
        {{ form_start(categform,{attr:{novalidate:'novalidate'}}) }}
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"exampleInputPassword2\">Nom Categorie</label>
            {{ form_widget(categform.nomcateg , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
            {{ form_errors(categform.nomcateg) }}
        </div>
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"exampleInputPassword2\">Description</label>
            {{ form_widget(categform.description , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Description'}} ) }}
            {{ form_errors(categform.description) }}
        </div>
        <div class=\"form-group mb-4\">
            <div class=\"checkbox checkbox-secondary\">
                {{ form_widget(categform.Modifier , {'attr': {'class': 'btn btn-primary'}} ) }}
            </div>
        </div>
        {{ form_end(categform) }}
    </div>

{% endblock %}
", "categorie/updateCategorie.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\categorie\\updateCategorie.html.twig");
    }
}
