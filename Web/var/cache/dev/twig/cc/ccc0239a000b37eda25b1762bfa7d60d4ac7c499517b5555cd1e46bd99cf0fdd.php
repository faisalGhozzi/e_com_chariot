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

/* salle/addSalle.html.twig */
class __TwigTemplate_54a4217d5849bea30fd39d88a2134b30d836a0ca0acf461fb88cadfb2c66e592 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/addSalle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/addSalle.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "salle/addSalle.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salles");
        echo "\"><i
                                class=\"fa fa-arrow-left\"></i> Retourner aux salles</a>

                    <h1>Ajouter salle</h1>
                </div>
                <div class=\"card-body\">

                </div>
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                <form>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">Nom de la salle</label>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Prix de la salle</label>
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 28, $this->source); })()), "prixsalle", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prix"]]);
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 29, $this->source); })()), "prixsalle", [], "any", false, false, false, 29), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Image</label>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 33, $this->source); })()), "img", [], "any", false, false, false, 33), 'widget');
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Capacite</label>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 38, $this->source); })()), "capacite", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Capacite"]]);
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 39, $this->source); })()), "capacite", [], "any", false, false, false, 39), 'errors');
        echo "
                    </div>

                    <div class=\"form-group mb-4\">
                        <div class=\"checkbox checkbox-secondary\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 44, $this->source); })()), 'widget');
        echo "
                            <button type=\"SubmitType\" class=\"btn btn-primary \">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SalleForm"]) || array_key_exists("SalleForm", $context) ? $context["SalleForm"] : (function () { throw new RuntimeError('Variable "SalleForm" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salle/addSalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  138 => 44,  130 => 39,  126 => 38,  118 => 33,  111 => 29,  107 => 28,  100 => 24,  96 => 23,  88 => 18,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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
                    <a class=\"btn btn-outline-secondary\" href=\"{{ path('salles') }}\"><i
                                class=\"fa fa-arrow-left\"></i> Retourner aux salles</a>

                    <h1>Ajouter salle</h1>
                </div>
                <div class=\"card-body\">

                </div>
                {{ form_start(SalleForm, {attr:{novalidate:'novalidate' }}) }}

                <form>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">Nom de la salle</label>
                        {{ form_widget(SalleForm.nom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                        {{ form_errors(SalleForm.nom) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Prix de la salle</label>
                        {{ form_widget(SalleForm.prixsalle , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Prix'}} ) }}
                        {{ form_errors(SalleForm.prixsalle) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Image</label>
                        {{ form_widget(SalleForm.img) }}

                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputPassword2\">Capacite</label>
                        {{ form_widget(SalleForm.capacite , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Capacite'}} ) }}
                        {{ form_errors(SalleForm.capacite) }}
                    </div>

                    <div class=\"form-group mb-4\">
                        <div class=\"checkbox checkbox-secondary\">
                            {{ form_widget(SalleForm) }}
                            <button type=\"SubmitType\" class=\"btn btn-primary \">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
            {{ form_end(SalleForm) }}
        </div>
    </div>

{% endblock %}
", "salle/addSalle.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\salle\\addSalle.html.twig");
    }
}
