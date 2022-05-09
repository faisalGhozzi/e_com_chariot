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

/* produit/addproduit.html.twig */
class __TwigTemplate_0ead3d694ebe39e555a1a0a415b6507ae58d6845d9b37ce3ceb8c47addadb1d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/addproduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/addproduit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "produit/addproduit.html.twig", 1);
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
        echo "    <div class=\"row justify-content-center\">

        <div class=\"col-lg-8\">

            <!-- Default Card Example -->
            <div class=\"card mb-6\">
                <div class=\"card-header\">
                    <a class=\"btn btn-outline-secondary\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorieAdmin");
        echo "\"><i
                                class=\"fa fa-arrow-left\"></i> Retourner aux catégories</a>

                    <h1>Ajouter un produit</h1>
                </div>
                <div class=\"card-body\">

                    <div class=\"form\">
                        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Contenu</label>
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 22, $this->source); })()), "nomproduit", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nom de produit"]]);
        echo "
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 23, $this->source); })()), "nomproduit", [], "any", false, false, false, 23), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Quantité</label>
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 27, $this->source); })()), "quantite", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Quantité"]]);
        echo "
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 28, $this->source); })()), "quantite", [], "any", false, false, false, 28), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Prix</label>
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 32, $this->source); })()), "prix", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "prix"]]);
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 33, $this->source); })()), "prix", [], "any", false, false, false, 33), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Description</label>
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Image</label>
                            <br>
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 43, $this->source); })()), "img", [], "any", false, false, false, 43), 'widget');
        echo "
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 44, $this->source); })()), "img", [], "any", false, false, false, 44), 'errors');
        echo "
                        </div>
                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 48, $this->source); })()), "Ajouter", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                            </div>
                        </div>
                        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["produitform"]) || array_key_exists("produitform", $context) ? $context["produitform"] : (function () { throw new RuntimeError('Variable "produitform" does not exist.', 51, $this->source); })()), 'form_end');
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
        return "produit/addproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 51,  150 => 48,  143 => 44,  139 => 43,  131 => 38,  127 => 37,  120 => 33,  116 => 32,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  88 => 19,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
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
                                class=\"fa fa-arrow-left\"></i> Retourner aux catégories</a>

                    <h1>Ajouter un produit</h1>
                </div>
                <div class=\"card-body\">

                    <div class=\"form\">
                        {{ form_start(produitform,{attr:{novalidate:'novalidate'}}) }}
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputname\">Contenu</label>
                            {{ form_widget(produitform.nomproduit , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'nom de produit'}} ) }}
                            {{ form_errors(produitform.nomproduit,{'attr':{'class':'text-danger'}}) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Quantité</label>
                            {{ form_widget(produitform.quantite , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Quantité'}} ) }}
                            {{ form_errors(produitform.quantite) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Prix</label>
                            {{ form_widget(produitform.prix , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'prix'}} ) }}
                            {{ form_errors(produitform.prix) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Description</label>
                            {{ form_widget(produitform.description , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Description'}} ) }}
                            {{ form_errors(produitform.description) }}
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"exampleInputPassword2\">Image</label>
                            <br>
                            {{ form_widget(produitform.img ) }}
                            {{ form_errors(produitform.img) }}
                        </div>
                        <div class=\"form-group mb-4\">
                            <div class=\"checkbox checkbox-secondary\">
                                {{ form_widget(produitform.Ajouter , {'attr': {'class': 'btn btn-primary'}} ) }}
                            </div>
                        </div>
                        {{ form_end(produitform) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "produit/addproduit.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\produit\\addproduit.html.twig");
    }
}
