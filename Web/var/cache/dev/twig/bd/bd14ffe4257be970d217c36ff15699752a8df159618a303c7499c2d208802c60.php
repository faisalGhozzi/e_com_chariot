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

/* salle/updateSalle.html.twig */
class __TwigTemplate_57771df7c5413727345651a2f8d5d0239bb02ed988c87a2239376c55492c70c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/updateSalle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/updateSalle.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "salle/updateSalle.html.twig", 1);
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

                    <h1>Modifier salle</h1>
                </div>
                <div class=\"card-body\">
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Nom de la salle</label>
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Prix de la salle</label>
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 25, $this->source); })()), "prixsalle", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prix"]]);
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 26, $this->source); })()), "prixsalle", [], "any", false, false, false, 26), 'errors');
        echo "
                        </div>
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/salles/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28))), "html", null, true);
        echo "\" alt=\"\" width=\"200\" height=\"200\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Image</label>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 31, $this->source); })()), "img", [], "any", false, false, false, 31), 'widget');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Capacite</label>
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 35, $this->source); })()), "capacite", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Capacite"]]);
        echo "
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 36, $this->source); })()), "capacite", [], "any", false, false, false, 36), 'errors');
        echo "
                        </div>

                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 41, $this->source); })()), 'widget');
        echo "
                                <button type=\"SubmitType\" class=\"btn btn-primary \">Modifier</button>
                            </div>
                        </div>
                    </form>
                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["S"]) || array_key_exists("S", $context) ? $context["S"] : (function () { throw new RuntimeError('Variable "S" does not exist.', 46, $this->source); })()), 'form_end');
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
        return "salle/updateSalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  138 => 41,  130 => 36,  126 => 35,  119 => 31,  113 => 28,  108 => 26,  104 => 25,  97 => 21,  93 => 20,  86 => 16,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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

                    <h1>Modifier salle</h1>
                </div>
                <div class=\"card-body\">
                    {{ form_start(S) }}
                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Nom de la salle</label>
                            {{ form_widget(S.nom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                            {{ form_errors(S.nom) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Prix de la salle</label>
                            {{ form_widget(S.prixsalle , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Prix'}} ) }}
                            {{ form_errors(S.prixsalle) }}
                        </div>
                        <img src=\"{{ asset('uploads/salles/' ~ salle.image ) }}\" alt=\"\" width=\"200\" height=\"200\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Image</label>
                            {{ form_widget(S.img) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Capacite</label>
                            {{ form_widget(S.capacite , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Capacite'}} ) }}
                            {{ form_errors(S.capacite) }}
                        </div>

                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                {{ form_widget(S) }}
                                <button type=\"SubmitType\" class=\"btn btn-primary \">Modifier</button>
                            </div>
                        </div>
                    </form>
                {{ form_end(S) }}
            </div>
        </div>
    </div>

    </div>


    </div>
{% endblock %}
", "salle/updateSalle.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\salle\\updateSalle.html.twig");
    }
}
