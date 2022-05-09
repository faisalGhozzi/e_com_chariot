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

/* salle/salleAdmin.html.twig */
class __TwigTemplate_03f0bd7a2f2061d18299526ee99a5d184f5159a69a5ea4e741bb3aa954239ed3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/salleAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/salleAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "salle/salleAdmin.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col order-last\">
                <div class=\"feature-image\">
                    <img class=\"img-fluid\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/salles/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 7, $this->source); })()), "image", [], "any", false, false, false, 7))), "html", null, true);
        echo "\" alt=\"feature-image\">
                </div>
                <h4><strong>Capacité:</strong></h4>
                <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 10, $this->source); })()), "capacite", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
                <h4><strong>Prix:</strong></h4>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 12, $this->source); })()), "prixSalle", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
    <br>
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
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
                            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDFReservation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "idreservation", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"text-dark\"><i class=\"ti-download\"></i></a></td>
                            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateReservation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "idreservation", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"text-dark\"><i class=\"ti-reload\"></i></a></td>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteReservation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "idreservation", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"text-danger\"><i class=\"ti-trash\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>
    <div id=\"calendrier\">
    </div>

    <script>
        window.onload = () => {
            let calendarElt = document.querySelector(\"#calendrier\")

            let calendar = new FullCalendar.Calendar(calendarElt, {
                initialView: 'timeGridWeek',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek'
                },
                events: ";
        // line 60
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })());
        echo ",
                editable: true,
                eventResizableFromStart: true
            })

            calendar.render()
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salle/salleAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  141 => 37,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  110 => 29,  107 => 28,  103 => 27,  85 => 12,  80 => 10,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col order-last\">
                <div class=\"feature-image\">
                    <img class=\"img-fluid\" src=\"{{ asset('uploads/salles/' ~ salle.image ) }}\" alt=\"feature-image\">
                </div>
                <h4><strong>Capacité:</strong></h4>
                <p>{{salle.capacite}}</p>
                <h4><strong>Prix:</strong></h4>
                <p>{{salle.prixSalle}}</p>
            </div>
        </div>
    </div>
    <br>
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
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
                            <td><a href=\"{{ path('PDFReservation',{'id':r.idreservation}) }}\" class=\"text-dark\"><i class=\"ti-download\"></i></a></td>
                            <td><a href=\"{{ path('updateReservation',{'id':r.idreservation}) }}\" class=\"text-dark\"><i class=\"ti-reload\"></i></a></td>
                            <td><a href=\"{{ path('deleteReservation',{'id':r.idreservation}) }}\" class=\"text-danger\"><i class=\"ti-trash\"></i></a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>
    <div id=\"calendrier\">
    </div>

    <script>
        window.onload = () => {
            let calendarElt = document.querySelector(\"#calendrier\")

            let calendar = new FullCalendar.Calendar(calendarElt, {
                initialView: 'timeGridWeek',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek'
                },
                events: {{ data|raw }},
                editable: true,
                eventResizableFromStart: true
            })

            calendar.render()
        }
    </script>

{% endblock %}
", "salle/salleAdmin.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\salle\\salleAdmin.html.twig");
    }
}
