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

/* article/updateArticle.html.twig */
class __TwigTemplate_fd5a181c6add795ea36952d831b2d6b8c35858dcd71d566b4f9cc5fc65dac152 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/updateArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/updateArticle.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "article/updateArticle.html.twig", 1);
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

                    <h1>Modifier article</h1>
                </div>
                <div class=\"card-body\">
                </div>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"card-body\">

                </div>
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"card-body\">

                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Contenu</label>
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 37, $this->source); })()), "contenu", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "contenu"]]);
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 38, $this->source); })()), "contenu", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Titre</label>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 42, $this->source); })()), "titre", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "titre"]]);
        echo "
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 43, $this->source); })()), "titre", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">image</label>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 47, $this->source); })()), "image", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "image"]]);
        echo "
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">nbr_react</label>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 52, $this->source); })()), "nbrreact", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "reacts"]]);
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 53, $this->source); })()), "nbrreact", [], "any", false, false, false, 53), 'errors');
        echo "
                        </div>

                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 58, $this->source); })()), 'widget');
        echo "
                                <button type=\"SubmitType\" class=\"btn btn-primary \">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
                ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleformi"]) || array_key_exists("articleformi", $context) ? $context["articleformi"] : (function () { throw new RuntimeError('Variable "articleformi" does not exist.', 64, $this->source); })()), 'form_end');
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
        return "article/updateArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  150 => 58,  142 => 53,  138 => 52,  131 => 48,  127 => 47,  120 => 43,  116 => 42,  109 => 38,  105 => 37,  96 => 31,  89 => 27,  79 => 20,  70 => 13,  68 => 4,  58 => 3,  35 => 1,);
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

                    <h1>Modifier article</h1>
                </div>
                <div class=\"card-body\">
                </div>
                {{ form_start(articleformi,{attr:{novalidate:'novalidate'}}) }}
                <div class=\"card-body\">

                </div>
                {{ form_start(articleformi,{attr:{novalidate:'novalidate'}}) }}
                <div class=\"card-body\">

                    <form>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Contenu</label>
                            {{ form_widget(articleformi.contenu , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'contenu'}} ) }}
                            {{ form_errors(articleformi.contenu,{'attr':{'class':'text-danger'}}) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputEmail2\">Titre</label>
                            {{ form_widget(articleformi.titre , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'titre'}} ) }}
                            {{ form_errors(articleformi.titre,{'attr':{'class':'text-danger'}}) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">image</label>
                            {{ form_widget(articleformi.image, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'image'}} ) }}
                            {{ form_errors(articleformi.image) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">nbr_react</label>
                            {{ form_widget(articleformi.nbrreact , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'reacts'}} ) }}
                            {{ form_errors(articleformi.nbrreact) }}
                        </div>

                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                {{ form_widget(articleformi) }}
                                <button type=\"SubmitType\" class=\"btn btn-primary \">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{ form_end(articleformi) }}
            </div>
        </div>
    </div>

    </div>
{% endblock %}
", "article/updateArticle.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\article\\updateArticle.html.twig");
    }
}
