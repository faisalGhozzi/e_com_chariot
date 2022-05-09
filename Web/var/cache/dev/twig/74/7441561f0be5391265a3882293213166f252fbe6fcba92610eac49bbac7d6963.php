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

/* salle/sallefront.html.twig */
class __TwigTemplate_cf4d11e724d358681d5a2b77e5109a8043c072bba1eba33de8b71a3f94c96084 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/sallefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/sallefront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salle/sallefront.html.twig", 1);
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
        echo "    <section class=\"section blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 m-auto\">

                    <article class=\"single-post\">
                        <div class=\"post-title text-center\">
                            <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                            <ul class=\"list-inline post-tag\">
                                <li class=\"list-inline-item\">
                                    <h4>Capacité :</h4>
                                    <h4>Prix :</h4>
                                </li>
                                <li class=\"list-inline-item\">
                                    <h4>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 17, $this->source); })()), "capacite", [], "any", false, false, false, 17), "html", null, true);
        echo " Presonnes</h4>
                                    <h4>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 18, $this->source); })()), "prixSalle", [], "any", false, false, false, 18), "html", null, true);
        echo " €</h4>
                                </li>
                            </ul>
                        </div>
                        <div class=\"post-body\">
                            <div class=\"feature-image\">
                                <img class=\"img-fluid\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/salles/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24))), "html", null, true);
        echo "\"
                                     alt=\"feature-image\">
                            </div>
                            <table class=\"table justify-content-center col-lg-12\">
                                <tr>
                                    <th style=\"text-align: center\">Salle indisponible Le</th>
";
        // line 33
        echo "                                </tr>
                                <tbody>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 36
            echo "                                    <tr>
";
            // line 39
            echo "                                        <td style=\"text-align: center\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 39), "d-M-y"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                </tbody>
                            </table>
                            ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "                            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "

                            <div class=\"form-group\">
                                <label>Nombre des personnes</label>
                                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "nbrp", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre"]]);
            echo "
                                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nbrp", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "text-danger"]]);
            echo "
                                <div class=\"text-danger\">";
            // line 51
            if (array_key_exists("errNbr", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["errNbr"]) || array_key_exists("errNbr", $context) ? $context["errNbr"] : (function () { throw new RuntimeError('Variable "errNbr" does not exist.', 51, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo "</div>
                            </div>
                            <div class=\"form-group\">
                                <label>Date</label>
                                ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "date", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "date", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "text-danger"]]);
            echo "
                                <div class=\"text-danger\">";
            // line 57
            if (array_key_exists("err", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["err"]) || array_key_exists("err", $context) ? $context["err"] : (function () { throw new RuntimeError('Variable "err" does not exist.', 57, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo "</div>
                            </div>
                            ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Submit", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "btn btn-info"]]);
            echo "

                            ";
            // line 61
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
            echo "
                            ";
        }
        // line 63
        echo "                        </div>
                    </article>

                    <div class=\"about-author\">

                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salle/sallefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 63,  185 => 61,  180 => 59,  171 => 57,  167 => 56,  163 => 55,  152 => 51,  148 => 50,  144 => 49,  136 => 45,  134 => 44,  130 => 42,  120 => 39,  117 => 36,  113 => 35,  109 => 33,  100 => 24,  91 => 18,  87 => 17,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <section class=\"section blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 m-auto\">

                    <article class=\"single-post\">
                        <div class=\"post-title text-center\">
                            <h1>{{ salle.nom }}</h1>
                            <ul class=\"list-inline post-tag\">
                                <li class=\"list-inline-item\">
                                    <h4>Capacité :</h4>
                                    <h4>Prix :</h4>
                                </li>
                                <li class=\"list-inline-item\">
                                    <h4>{{ salle.capacite }} Presonnes</h4>
                                    <h4>{{ salle.prixSalle }} €</h4>
                                </li>
                            </ul>
                        </div>
                        <div class=\"post-body\">
                            <div class=\"feature-image\">
                                <img class=\"img-fluid\" src=\"{{ asset('uploads/salles/' ~ salle.image ) }}\"
                                     alt=\"feature-image\">
                            </div>
                            <table class=\"table justify-content-center col-lg-12\">
                                <tr>
                                    <th style=\"text-align: center\">Salle indisponible Le</th>
{#                                    <th>Client</th>#}
{#                                    <th>Nombre des personnes</th>#}
{#                                    <th>Date</th>#}
                                </tr>
                                <tbody>
                                {% for r in reservations %}
                                    <tr>
{#                                        <td>{{ r.idClient.nom }} {{ r.idClient.prenom }}</td>#}
{#                                        <td>{{ r.nbrp }}</td>#}
                                        <td style=\"text-align: center\">{{ r.date|date('d-M-y') }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            {% if app.user %}
                            {{ form_start(form, {attr:{novalidate:'novalidate' }}) }}

                            <div class=\"form-group\">
                                <label>Nombre des personnes</label>
                                {{ form_widget(form.nbrp , {'attr': {'class': 'form-control' , 'placeholder' : 'Nombre'}} ) }}
                                {{ form_errors(form.nbrp,{'attr':{'class':'text-danger'}}) }}
                                <div class=\"text-danger\">{% if errNbr is defined %} {{ errNbr }} {% endif %}</div>
                            </div>
                            <div class=\"form-group\">
                                <label>Date</label>
                                {{ form_widget(form.date , {'attr': {'class': 'form-control' }} ) }}
                                {{ form_errors(form.date,{'attr':{'class':'text-danger'}}) }}
                                <div class=\"text-danger\">{% if err is defined %} {{ err }} {% endif %}</div>
                            </div>
                            {{ form_widget(form.Submit , {'attr': {'class': 'btn btn-info'}} ) }}

                            {{ form_end(form) }}
                            {% endif %}
                        </div>
                    </article>

                    <div class=\"about-author\">

                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "salle/sallefront.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\salle\\sallefront.html.twig");
    }
}
