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

/* livraison/listlivraison.html.twig */
class __TwigTemplate_4087bf3519186dc1a8aa9e61b6b48ff8f7dc73d1d9d4ffc64d22ab62b36f8488 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/listlivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/listlivraison.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livraison/listlivraison.html.twig", 1);
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
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 6
            echo "    <div class=\"container align-items-center\">
<div class=\"row align-items-center \">
    <div class=\"col-md-3\">
    </div>
    <div class=\"col-md-6 align-items-center \">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row  align-items-center\">
                    <div class=\"col mr-2 align-items-center\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Livraison N ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "idlivraison", [], "any", false, false, false, 16), "html", null, true);
            echo " </div>
                        <br>
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Type: </div>

                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "type", [], "any", false, false, false, 22), "html", null, true);
            echo "
                        </div>
                        <br>
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Etat: </div>


                            ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["l"], "etat", [], "any", false, false, false, 29) == 0)) {
                // line 30
                echo "                                <h1 class=\"h5 mb-0 font-weight-bold text-gray-800\">valide non affecte</h1>
                                <br>
                                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affecter", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "idlivraison", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" type=\"SubmitType\" class=\"btn btn-primary \">Affecter un livreur</a>
                            ";
            }
            // line 34
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["l"], "etat", [], "any", false, false, false, 34) == 1)) {
                // line 35
                echo "                                <h1  class=\"h5 mb-0 font-weight-bold text-gray-800\"> affecte en cours de livraison</h1>
                            ";
            }
            // line 37
            echo "
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fa-solid fa-truck-ramp-box\"></i>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
    </div>
    <div class=\"col-md-3\">
    </div>
</div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    <div class=\"justify-content-center\">
        <div class=\"navigation \">
            ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 55, $this->source); })()));
        echo "
        </div>
    </div>
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Flashy default partial -->
    ";
        // line 62
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livraison/listlivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  159 => 60,  151 => 55,  147 => 53,  126 => 37,  122 => 35,  119 => 34,  114 => 32,  110 => 30,  108 => 29,  98 => 22,  89 => 16,  77 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
    {% for l in livraisons %}
    <div class=\"container align-items-center\">
<div class=\"row align-items-center \">
    <div class=\"col-md-3\">
    </div>
    <div class=\"col-md-6 align-items-center \">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row  align-items-center\">
                    <div class=\"col mr-2 align-items-center\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Livraison N {{l.idlivraison}} </div>
                        <br>
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Type: </div>

                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                            {{l.type}}
                        </div>
                        <br>
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Etat: </div>


                            {% if l.etat == 0 %}
                                <h1 class=\"h5 mb-0 font-weight-bold text-gray-800\">valide non affecte</h1>
                                <br>
                                <a href=\"{{ path('affecter',{'id':l.idlivraison}) }}\" type=\"SubmitType\" class=\"btn btn-primary \">Affecter un livreur</a>
                            {% endif %}
                            {% if l.etat == 1 %}
                                <h1  class=\"h5 mb-0 font-weight-bold text-gray-800\"> affecte en cours de livraison</h1>
                            {% endif %}

                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fa-solid fa-truck-ramp-box\"></i>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
    </div>
    <div class=\"col-md-3\">
    </div>
</div>
    </div>
    {% endfor %}
    <div class=\"justify-content-center\">
        <div class=\"navigation \">
            {{ knp_pagination_render(livraisons) }}
        </div>
    </div>
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <!-- Include Flashy default partial -->
    {{ include('@MercurySeriesFlashy/flashy.html.twig') }}
{% endblock %}", "livraison/listlivraison.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livraison\\listlivraison.html.twig");
    }
}
