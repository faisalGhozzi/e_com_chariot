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

/* article/formAddarticle.html.twig */
class __TwigTemplate_13a86e98d05dfcb34f773e37b7f45d76dc12809a74767ce5404a9180b44e2508 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/formAddarticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/formAddarticle.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "article/formAddarticle.html.twig", 1);
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
        echo "    ";
        // line 13
        echo "    <div class=\"row justify-content-center\">

        <div class=\"col-lg-8\">

            <!-- Default Card Example -->
            <div class=\"card mb-6\">
                <div class=\"card-header\">
                    <a class=\"btn btn-outline-secondary\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getarticles");
        echo "\"><i
                                class=\"fa fa-arrow-left\"></i> Retourner aux articles</a>

                    <h1>Ajouter un article</h1>
                </div>
                <div class=\"card-body\">
                </div>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"card-body\">
                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Contenu</label>
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 32, $this->source); })()), "contenu", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "contenu"]]);
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 33, $this->source); })()), "contenu", [], "any", false, false, false, 33), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Titre</label>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 38, $this->source); })()), "titre", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "titre"]]);
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">image</label>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "image"]]);
        echo "
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 45, $this->source); })()), "image", [], "any", false, false, false, 45), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">nbr_react</label>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 49, $this->source); })()), "nbrreact", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "reacts"]]);
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 50, $this->source); })()), "nbrreact", [], "any", false, false, false, 50), 'errors');
        echo "
                        </div>

                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 55, $this->source); })()), 'widget');
        echo "
                                <button type=\"SubmitType\" class=\"btn btn-primary \">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
                ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleform"]) || array_key_exists("articleform", $context) ? $context["articleform"] : (function () { throw new RuntimeError('Variable "articleform" does not exist.', 61, $this->source); })()), 'form_end');
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
        return "article/formAddarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 61,  144 => 55,  136 => 50,  132 => 49,  125 => 45,  121 => 44,  113 => 39,  109 => 38,  101 => 33,  97 => 32,  89 => 27,  79 => 20,  70 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}
    {#
    {{ form_start(articleform) }}
    <h1> Ajouter un Article </h1>
    {{ form_errors(articleform.contenu) }}
    {{ form_label(articleform.contenu,\"Contenu\") }}
    {{ form_widget(articleform.contenu) }}
    {{ form_widget(articleform.titre, {'attr': {'placeholder': 'Titre'}}) }}
    {{ form_end(articleform) }}
    #}
    <div class=\"row justify-content-center\">

        <div class=\"col-lg-8\">

            <!-- Default Card Example -->
            <div class=\"card mb-6\">
                <div class=\"card-header\">
                    <a class=\"btn btn-outline-secondary\" href=\"{{ path('getarticles') }}\"><i
                                class=\"fa fa-arrow-left\"></i> Retourner aux articles</a>

                    <h1>Ajouter un article</h1>
                </div>
                <div class=\"card-body\">
                </div>
                {{ form_start(articleform,{attr:{novalidate:'novalidate'}}) }}
                <div class=\"card-body\">
                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Contenu</label>
                            {{ form_widget(articleform.contenu , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'contenu'}} ) }}
                            {{ form_errors(articleform.contenu,{'attr':{'class':'text-danger'}}) }}
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Titre</label>
                            {{ form_widget(articleform.titre , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'titre'}} ) }}
                            {{ form_errors(articleform.titre,{'attr':{'class':'text-danger'}}) }}
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">image</label>
                            {{ form_widget(articleform.image, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'image'}} ) }}
                            {{ form_errors(articleform.image) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">nbr_react</label>
                            {{ form_widget(articleform.nbrreact , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'reacts'}} ) }}
                            {{ form_errors(articleform.nbrreact) }}
                        </div>

                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                {{ form_widget(articleform) }}
                                <button type=\"SubmitType\" class=\"btn btn-primary \">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{ form_end(articleform) }}
            </div>
        </div>
    </div>

    </div>
{% endblock %}
", "article/formAddarticle.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\article\\formAddarticle.html.twig");
    }
}
