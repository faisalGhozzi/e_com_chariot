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

/* livreur/addlivreur.html.twig */
class __TwigTemplate_0c2fb8d4832f212434ae6a7df85273b178b746d6ace6749da635c67863f38b2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/addlivreur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/addlivreur.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livreur/addlivreur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"row justify-content-center\">

    <div class=\"col-lg-8\">

        <!-- Default Card Example -->
        <div class=\"card mb-6\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-secondary\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Livreurs");
        echo "\"><i
                            class=\"fa fa-arrow-left\"></i> Retourner a la liste</a>

                <h1>Ajouter un livreur</h1>
            </div>
            <div class=\"card-body\">
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <form>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputname\">Nom de livreur</label>
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 20, $this->source); })()), "nomlivreur", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 21, $this->source); })()), "nomlivreur", [], "any", false, false, false, 21), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputEmail2\">Numero de telephone</label>
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 25, $this->source); })()), "numtel", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Numero"]]);
        echo "
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 26, $this->source); })()), "numtel", [], "any", false, false, false, 26), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputPassword2\">Prenom du livreur</label>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prenom"]]);
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputPassword2\">Email</label>
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Email"]]);
        echo "
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'errors');
        echo "
                            </div>

                            <div class=\"form-group mb-4 text-center\">
                                <div class=\"checkbox checkbox-secondary\">
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 41, $this->source); })()), 'widget');
        echo "
                                    <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Ajouter</button>
                                </div>
                            </div>
                        </form>
                    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["livreurform"]) || array_key_exists("livreurform", $context) ? $context["livreurform"] : (function () { throw new RuntimeError('Variable "livreurform" does not exist.', 46, $this->source); })()), 'form_end');
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
        return "livreur/addlivreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  138 => 41,  130 => 36,  126 => 35,  119 => 31,  115 => 30,  108 => 26,  104 => 25,  97 => 21,  93 => 20,  86 => 16,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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
                <a class=\"btn btn-outline-secondary\" href=\"{{ path('Livreurs') }}\"><i
                            class=\"fa fa-arrow-left\"></i> Retourner a la liste</a>

                <h1>Ajouter un livreur</h1>
            </div>
            <div class=\"card-body\">
                    {{ form_start(livreurform,{attr:{novalidate:'novalidate'}}) }}
                        <form>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputname\">Nom de livreur</label>
                                {{ form_widget(livreurform.nomlivreur , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                                {{ form_errors(livreurform.nomlivreur) }}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputEmail2\">Numero de telephone</label>
                                {{ form_widget(livreurform.numtel , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Numero'}} ) }}
                                {{ form_errors(livreurform.numtel) }}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputPassword2\">Prenom du livreur</label>
                                {{ form_widget(livreurform.prenom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Prenom'}} ) }}
                                {{ form_errors(livreurform.prenom) }}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"exampleInputPassword2\">Email</label>
                                {{ form_widget(livreurform.email , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Email'}} ) }}
                                {{ form_errors(livreurform.email) }}
                            </div>

                            <div class=\"form-group mb-4 text-center\">
                                <div class=\"checkbox checkbox-secondary\">
                                    {{ form_widget(livreurform) }}
                                    <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Ajouter</button>
                                </div>
                            </div>
                        </form>
                    {{ form_end(livreurform) }}
                </div>
            </div>
        </div>
    </div>

    {% endblock %}

", "livreur/addlivreur.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livreur\\addlivreur.html.twig");
    }
}
