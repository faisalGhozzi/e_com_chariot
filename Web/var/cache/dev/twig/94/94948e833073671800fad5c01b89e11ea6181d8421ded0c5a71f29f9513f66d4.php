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

/* categorie/addCategorie.html.twig */
class __TwigTemplate_5e82750a9ecd18dba79da3b3ac87bdeff033582890a3f64720a511e332d529bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/addCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/addCategorie.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "categorie/addCategorie.html.twig", 1);
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
        echo "<div class=\"row justify-content-center\">

    <div class=\"col-lg-8\">

        <!-- Default Card Example -->
        <div class=\"card mb-6\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-secondary\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorieAdmin");
        echo "\"><i
                            class=\"fa fa-arrow-left\"></i> Retourner a la list</a>

                <h1>Ajouter une catégorie</h1>
            </div>
            <div class=\"card-body\">

                <div class=\"form\">
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Nom Categorie</label>
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 22, $this->source); })()), "nomcateg", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                        <div class=\"text-danger\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 23, $this->source); })()), "nomcateg", [], "any", false, false, false, 23), 'errors');
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Description</label>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "
                        <div class=\"text-danger\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'errors');
        echo "</div>
                    </div>
                    <div class=\"form-group mb-4\">
                        <div class=\"checkbox checkbox-secondary\">
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 32, $this->source); })()), "Ajouter", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                        </div>
                    </div>
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categform"]) || array_key_exists("categform", $context) ? $context["categform"] : (function () { throw new RuntimeError('Variable "categform" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
                </div>
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
        return "categorie/addCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  116 => 32,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  88 => 19,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}
<div class=\"row justify-content-center\">

    <div class=\"col-lg-8\">

        <!-- Default Card Example -->
        <div class=\"card mb-6\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-secondary\" href=\"{{ path('categorieAdmin') }}\"><i
                            class=\"fa fa-arrow-left\"></i> Retourner a la list</a>

                <h1>Ajouter une catégorie</h1>
            </div>
            <div class=\"card-body\">

                <div class=\"form\">
                    {{ form_start(categform,{attr:{novalidate:'novalidate'}}) }}
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Nom Categorie</label>
                        {{ form_widget(categform.nomcateg , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                        <div class=\"text-danger\">{{ form_errors(categform.nomcateg) }}</div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Description</label>
                        {{ form_widget(categform.description , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Description'}} ) }}
                        <div class=\"text-danger\">{{ form_errors(categform.description) }}</div>
                    </div>
                    <div class=\"form-group mb-4\">
                        <div class=\"checkbox checkbox-secondary\">
                            {{ form_widget(categform.Ajouter , {'attr': {'class': 'btn btn-primary'}} ) }}
                        </div>
                    </div>
                    {{ form_end(categform) }}
                </div>
            </div>
        </div>
    </div>
</div>
                {% endblock %}
", "categorie/addCategorie.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\categorie\\addCategorie.html.twig");
    }
}
