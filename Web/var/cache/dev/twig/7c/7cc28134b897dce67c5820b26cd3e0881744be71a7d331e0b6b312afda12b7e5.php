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

/* livreur/listlivreur.html.twig */
class __TwigTemplate_f5f283e946e6be145c9461964cbd9a9f26036380bd12e2aab6751aad1564b00e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/listlivreur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/listlivreur.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livreur/listlivreur.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col order-last text-right\">
                <br>
                <a class=\"btn btn-outline-info\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addLivreur");
        echo "\"><i class=\"fa-solid fa-circle-plus\"></i>Ajouter livreur</a>
            </div>
            <div class=\"col\">
                <div class=\"sidebar-search\">
                    <div class=\"input-group custom-search-form\">
                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Chercher..\">
                    </div>
                    <!-- /input-group -->
                </div>
                <ul class=\"nav\" id=\"side-menu\">
                    <li>
                        <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                        </ul>
                    </li>
                </ul>
                <!-- jQuery is necessary -->
                <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                <script type=\"text/javascript\">
                    jQuery(document).ready(function() {
                        var searchRequest = null;
                        \$(\"#search\").keyup(function() {
                            var minlength = 2;
                            var that = this;
                            var value = \$(this).val();
                            var entitySelector = \$(\"#entitiesNav\").html('');
                            if (value.length >= minlength ) {
                                if (searchRequest != null)
                                    searchRequest.abort();
                                searchRequest = \$.ajax({
                                    type: \"GET\",
                                    url: \"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_search");
        echo "\",
                                    data: {
                                        'q' : value
                                    },
                                    dataType: \"text\",
                                    success: function(msg){
                                        //we need to check if the value is the same
                                        if (value==\$(that).val()) {
                                            var result = JSON.parse(msg);
                                            \$.each(result, function(key, arr) {
                                                \$.each(arr, function(id, value) {
                                                    if (key == 'livreurs') {
                                                        if (id != 'error') {
                                                            entitySelector.append('<li><a href=\"/details/'+id+'\">'+  value +'</a></li>');
                                                        } else {
                                                            entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                        }
                                                    }
                                                });
                                            });
                                        }
                                    }
                                });
                            }
                        });
                    });
                </script>
            </div>
            <div class=\"col order-first\">
                <h1 class=\"h3 mb-2 text-gray-800\">La liste des livreurs</h1>
            </div>

        </div>
    </div>
<br>

<div class=\"card shadow mb-4\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
    <table border=\"1\"  class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <tr>
            <td>Id</td>
            <td>Nom de livreur</td>
            <td>Numero telephone</td>
            <td>Prenom de livreur</td>
            <td>Email</td>
            <td>Action</td>

        </tr>
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livreurs"]) || array_key_exists("livreurs", $context) ? $context["livreurs"] : (function () { throw new RuntimeError('Variable "livreurs" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 91
            echo "            <tr>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "idlivreur", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "nomlivreur", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "numtel", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prenom", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "email", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteLivreur", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "idlivreur", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-trash-can\"></i>Supprimer</a>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateLivreur", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "idlivreur", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-pen\"></i>Modifier</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </table>
            </div>
        </div>
    </div>

    <div class=\"justify-content-center\">
        <div class=\"navigation \">
            ";
        // line 109
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livreurs"]) || array_key_exists("livreurs", $context) ? $context["livreurs"] : (function () { throw new RuntimeError('Variable "livreurs" does not exist.', 109, $this->source); })()));
        echo "
        </div>
    </div>
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Flashy default partial -->
    ";
        // line 116
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livreur/listlivreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 116,  222 => 114,  214 => 109,  205 => 102,  195 => 98,  191 => 97,  187 => 96,  183 => 95,  179 => 94,  175 => 93,  171 => 92,  168 => 91,  164 => 90,  112 => 41,  78 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col order-last text-right\">
                <br>
                <a class=\"btn btn-outline-info\" href=\"{{ path('addLivreur') }}\"><i class=\"fa-solid fa-circle-plus\"></i>Ajouter livreur</a>
            </div>
            <div class=\"col\">
                <div class=\"sidebar-search\">
                    <div class=\"input-group custom-search-form\">
                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Chercher..\">
                    </div>
                    <!-- /input-group -->
                </div>
                <ul class=\"nav\" id=\"side-menu\">
                    <li>
                        <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                        </ul>
                    </li>
                </ul>
                <!-- jQuery is necessary -->
                <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                <script type=\"text/javascript\">
                    jQuery(document).ready(function() {
                        var searchRequest = null;
                        \$(\"#search\").keyup(function() {
                            var minlength = 2;
                            var that = this;
                            var value = \$(this).val();
                            var entitySelector = \$(\"#entitiesNav\").html('');
                            if (value.length >= minlength ) {
                                if (searchRequest != null)
                                    searchRequest.abort();
                                searchRequest = \$.ajax({
                                    type: \"GET\",
                                    url: \"{{ path('ajax_search') }}\",
                                    data: {
                                        'q' : value
                                    },
                                    dataType: \"text\",
                                    success: function(msg){
                                        //we need to check if the value is the same
                                        if (value==\$(that).val()) {
                                            var result = JSON.parse(msg);
                                            \$.each(result, function(key, arr) {
                                                \$.each(arr, function(id, value) {
                                                    if (key == 'livreurs') {
                                                        if (id != 'error') {
                                                            entitySelector.append('<li><a href=\"/details/'+id+'\">'+  value +'</a></li>');
                                                        } else {
                                                            entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                        }
                                                    }
                                                });
                                            });
                                        }
                                    }
                                });
                            }
                        });
                    });
                </script>
            </div>
            <div class=\"col order-first\">
                <h1 class=\"h3 mb-2 text-gray-800\">La liste des livreurs</h1>
            </div>

        </div>
    </div>
<br>

<div class=\"card shadow mb-4\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
    <table border=\"1\"  class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <tr>
            <td>Id</td>
            <td>Nom de livreur</td>
            <td>Numero telephone</td>
            <td>Prenom de livreur</td>
            <td>Email</td>
            <td>Action</td>

        </tr>
        {% for l in livreurs %}
            <tr>
                <td>{{l.idlivreur}}</td>
                <td>{{l.nomlivreur}}</td>
                <td>{{l.numtel}}</td>
                <td>{{l.prenom}}</td>
                <td>{{l.email}}</td>
                <td><a href=\"{{ path('deleteLivreur',{'id':l.idlivreur}) }}\" class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-trash-can\"></i>Supprimer</a>
                    <a href=\"{{ path('updateLivreur',{'id':l.idlivreur}) }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-pen\"></i>Modifier</a>
                </td>
            </tr>
        {% endfor %}
    </table>
            </div>
        </div>
    </div>

    <div class=\"justify-content-center\">
        <div class=\"navigation \">
            {{ knp_pagination_render(livreurs) }}
        </div>
    </div>
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <!-- Include Flashy default partial -->
    {{ include('@MercurySeriesFlashy/flashy.html.twig') }}
{% endblock %}
", "livreur/listlivreur.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livreur\\listlivreur.html.twig");
    }
}
