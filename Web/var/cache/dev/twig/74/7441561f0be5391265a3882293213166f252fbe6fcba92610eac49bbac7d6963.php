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

/* Salle/sallefront.html.twig */
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Salle/sallefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Salle/sallefront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Salle/sallefront.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-10 m-auto\">
            <article class=\"single-post\">
                <div class=\"post-title text-center\">
                    <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"post-body\">
                    <div class=\"feature-image\">
                        <img class=\"img-fluid\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/salles/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11))), "html", null, true);
        echo "\" alt=\"feature-image\">
                    </div>
                    <h4><strong>Capacité:</strong></h4>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 14, $this->source); })()), "capacite", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                    <h4><strong>Prix:</strong></h4>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 16, $this->source); })()), "prixSalle", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                </div>
            </article>
            <div class=\"about-author\">
                <table class=\"table\">
                    <tr>
                        <th>Client</th>
                        <th>Nombre des personnes</th>
                        <th>Date</th>
                    </tr>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idClient", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idClient", [], "any", false, false, false, 29), "prenom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "nbrp", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 31)), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </tbody>
                </table>
                ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                <div class=\"form-group\">
                    <label>Nombre des personnes</label>
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nbrp", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre"]]);
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nbrp", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    <div class=\"text-danger\">";
        // line 42
        if (array_key_exists("errNbr", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["errNbr"]) || array_key_exists("errNbr", $context) ? $context["errNbr"] : (function () { throw new RuntimeError('Variable "errNbr" does not exist.', 42, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "</div>
                </div>
                <div class=\"form-group\">
                    <label>Date</label>
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "date", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date", [], "any", false, false, false, 47), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    <div class=\"text-danger\">";
        // line 48
        if (array_key_exists("err", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["err"]) || array_key_exists("err", $context) ? $context["err"] : (function () { throw new RuntimeError('Variable "err" does not exist.', 48, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "</div>
                </div>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Submit", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "btn btn-info"]]);
        echo "

                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Salle/sallefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 52,  179 => 50,  170 => 48,  166 => 47,  162 => 46,  151 => 42,  147 => 41,  143 => 40,  136 => 36,  132 => 34,  123 => 31,  119 => 30,  113 => 29,  110 => 28,  106 => 27,  92 => 16,  87 => 14,  81 => 11,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-md-10 m-auto\">
            <article class=\"single-post\">
                <div class=\"post-title text-center\">
                    <h1>{{salle.nom}}</h1>
                </div>
                <div class=\"post-body\">
                    <div class=\"feature-image\">
                        <img class=\"img-fluid\" src=\"{{ asset('uploads/salles/' ~ salle.image ) }}\" alt=\"feature-image\">
                    </div>
                    <h4><strong>Capacité:</strong></h4>
                    <p>{{salle.capacite}}</p>
                    <h4><strong>Prix:</strong></h4>
                    <p>{{salle.prixSalle}}</p>
                </div>
            </article>
            <div class=\"about-author\">
                <table class=\"table\">
                    <tr>
                        <th>Client</th>
                        <th>Nombre des personnes</th>
                        <th>Date</th>
                    </tr>
                    <tbody>
                    {% for r in reservations %}
                        <tr>
                            <td>{{ r.idClient.nom }} {{ r.idClient.prenom }}</td>
                            <td>{{ r.nbrp }}</td>
                            <td>{{ r.date|date }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
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
            </div>
        </div>
    </div>
{% endblock %}
", "Salle/sallefront.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\salle\\sallefront.html.twig");
    }
}
