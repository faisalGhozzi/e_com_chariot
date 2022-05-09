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

/* livreur/updatelivreur.html.twig */
class __TwigTemplate_1831ddef0b30dfd4ba899b285594c8f029ba00fb367a9fe31cb9cb7b83ba6f55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/updatelivreur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/updatelivreur.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livreur/updatelivreur.html.twig", 1);
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
        echo "    <div class=\"row justify-content-center\">

        <div class=\"col-lg-8\">

            <!-- Default Card Example -->
            <div class=\"card mb-6\">
                <div class=\"card-header\">
                    <a class=\"btn btn-outline-secondary\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Livreurs");
        echo "\"><i
                                class=\"fa fa-arrow-left\"></i> Retourner a la liste</a>

                    <h1>Modifier livreur</h1>
                </div>
                <div class=\"card-body\">
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Nom de livreur</label>
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nomlivreur", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nomlivreur", [], "any", false, false, false, 22), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Numero de telephone</label>
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "numtel", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Numero"]]);
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "numtel", [], "any", false, false, false, 27), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Prenom du livreur</label>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prenom"]]);
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Email</label>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Email"]]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'errors');
        echo "
                        </div>

                        <div class=\"form-group mb-4 text-center\">
                            <div class=\"checkbox checkbox-secondary\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'widget');
        echo "
                                <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Modifier</button>
                            </div>
                        </div>
                    </form>
                    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
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
        return "livreur/updatelivreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 47,  139 => 42,  131 => 37,  127 => 36,  120 => 32,  116 => 31,  109 => 27,  105 => 26,  98 => 22,  94 => 21,  86 => 16,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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

                    <h1>Modifier livreur</h1>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}

                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Nom de livreur</label>
                            {{ form_widget(form.nomlivreur , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                            {{ form_errors(form.nomlivreur) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Numero de telephone</label>
                            {{ form_widget(form.numtel , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Numero'}} ) }}
                            {{ form_errors(form.numtel) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Prenom du livreur</label>
                            {{ form_widget(form.prenom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Prenom'}} ) }}
                            {{ form_errors(form.prenom) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Email</label>
                            {{ form_widget(form.email , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Email'}} ) }}
                            {{ form_errors(form.email) }}
                        </div>

                        <div class=\"form-group mb-4 text-center\">
                            <div class=\"checkbox checkbox-secondary\">
                                {{ form_widget(form) }}
                                <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Modifier</button>
                            </div>
                        </div>
                    </form>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "livreur/updatelivreur.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livreur\\updatelivreur.html.twig");
    }
}
