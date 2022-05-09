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

/* adresse/updateadresse.html.twig */
class __TwigTemplate_59c06cc5c52d0b99d45474b72d50378e0e33891c945047c23a83c2170e6d48ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adresse/updateadresse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adresse/updateadresse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adresse/updateadresse.html.twig", 1);
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
        echo "    <section class=\"section page-title\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 m-auto\">
                    <!-- Page Title -->
                    <h1>Modifiez votre adresse</h1>
                    <!-- Page Description -->
                </div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-sm-8 m-auto\">

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8 m-auto\">
                    <a class=\"btn btn-outline-info\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adresses");
        echo "\"><i class=\"ti-arrow-left\"></i>
                        Retourner</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class=\"app-content\">

        <div class=\"side-app\">
            <div class=\"col-md-12 \">
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    <div class=\"card m-b-20\">
                        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"card-body\">

                            <form>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputname\">Ville</label>
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "ville", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Ville"]]);
        echo "
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "ville", [], "any", false, false, false, 42), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputEmail2\">Rue</label>
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "rue", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Rue"]]);
        echo "
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "rue", [], "any", false, false, false, 47), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputPassword2\">Numero de maison</label>
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nummaison", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Numero de maison"]]);
        echo "
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nummaison", [], "any", false, false, false, 52), 'errors');
        echo "
                                </div>
                                <div class=\"form-group mb-4 text-center\">
                                    <div class=\"checkbox checkbox-secondary\">
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'widget');
        echo "
                                        <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Modifier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adresse/updateadresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 62,  147 => 56,  140 => 52,  136 => 51,  129 => 47,  125 => 46,  118 => 42,  114 => 41,  105 => 35,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <section class=\"section page-title\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 m-auto\">
                    <!-- Page Title -->
                    <h1>Modifiez votre adresse</h1>
                    <!-- Page Description -->
                </div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-sm-8 m-auto\">

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8 m-auto\">
                    <a class=\"btn btn-outline-info\" href=\"{{ path('adresses') }}\"><i class=\"ti-arrow-left\"></i>
                        Retourner</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class=\"app-content\">

        <div class=\"side-app\">
            <div class=\"col-md-12 \">
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    <div class=\"card m-b-20\">
                        {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                        <div class=\"card-body\">

                            <form>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputname\">Ville</label>
                                    {{ form_widget(form.ville , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Ville'}} ) }}
                                    {{ form_errors(form.ville) }}
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputEmail2\">Rue</label>
                                    {{ form_widget(form.rue , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Rue'}} ) }}
                                    {{ form_errors(form.rue) }}
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputPassword2\">Numero de maison</label>
                                    {{ form_widget(form.nummaison , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Numero de maison'}} ) }}
                                    {{ form_errors(form.nummaison) }}
                                </div>
                                <div class=\"form-group mb-4 text-center\">
                                    <div class=\"checkbox checkbox-secondary\">
                                        {{ form_widget(form) }}
                                        <button type=\"SubmitType\" class=\"btn btn-outline-primary \">Modifier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>

{% endblock %}", "adresse/updateadresse.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\adresse\\updateadresse.html.twig");
    }
}
