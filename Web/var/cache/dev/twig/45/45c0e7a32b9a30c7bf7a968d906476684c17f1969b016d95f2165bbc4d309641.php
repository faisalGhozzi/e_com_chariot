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

/* adresse/listadresse.html.twig */
class __TwigTemplate_850140b30fb48a7ce22a52a96529177cb353548a5640e9f0db99dceaddde4d93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adresse/listadresse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adresse/listadresse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adresse/listadresse.html.twig", 1);
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
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col order-last text-right\">
                <br>
                <pre>
                <a class=\"btn btn-outline-info\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addAdresse");
        echo "\">Ajouter Adresse</a>
                <a class=\"btn btn-outline-info\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("villes");
        echo "\">Trier par ville</a>
            </div>
            <div class=\"col\">
            </div>
            <div class=\"col order-first\">
                <h1 class=\"h3 mb-2 text-gray-800\">Mes adresses</h1>
            </div>
        </div>
    </div>
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adresses"]) || array_key_exists("adresses", $context) ? $context["adresses"] : (function () { throw new RuntimeError('Variable "adresses" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 22
            echo "<div class=\"container align-items-center\">
    <div class=\"row align-items-center \">
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-6 align-items-center \">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row  align-items-center text-center\">
                        <div class=\"col mr-2 align-items-center\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Adresse N ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "idAdresse", [], "any", false, false, false, 32), "html", null, true);
            echo " </div>
                            <br>
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                              Ville : </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 37), "html", null, true);
            echo "
                            </div>
                                <br>
                                <br>
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Rue : </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "rue", [], "any", false, false, false, 44), "html", null, true);
            echo "
                        </div>
                                <br>
                                <br>
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Numero de maison : </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nummaison", [], "any", false, false, false, 51), "html", null, true);
            echo "
                    </div>
                                <br>
                                <br>
                                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteAdresse", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "idAdresse", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">Supprimer</a>
                                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateAdresse", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "idAdresse", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Modifier</a>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    <div class=\"justify-content-center\">
        <div class=\"navigation \">
            ";
        // line 75
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["adresses"]) || array_key_exists("adresses", $context) ? $context["adresses"] : (function () { throw new RuntimeError('Variable "adresses" does not exist.', 75, $this->source); })()));
        echo "
        </div>
    </div>
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Flashy default partial -->
    ";
        // line 82
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adresse/listadresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 82,  187 => 80,  179 => 75,  175 => 73,  152 => 56,  148 => 55,  141 => 51,  131 => 44,  121 => 37,  113 => 32,  101 => 22,  97 => 21,  85 => 12,  81 => 11,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col order-last text-right\">
                <br>
                <pre>
                <a class=\"btn btn-outline-info\" href=\"{{ path('addAdresse') }}\">Ajouter Adresse</a>
                <a class=\"btn btn-outline-info\" href=\"{{ path('villes') }}\">Trier par ville</a>
            </div>
            <div class=\"col\">
            </div>
            <div class=\"col order-first\">
                <h1 class=\"h3 mb-2 text-gray-800\">Mes adresses</h1>
            </div>
        </div>
    </div>
{% for a in adresses %}
<div class=\"container align-items-center\">
    <div class=\"row align-items-center \">
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-6 align-items-center \">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row  align-items-center text-center\">
                        <div class=\"col mr-2 align-items-center\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Adresse N {{a.idAdresse}} </div>
                            <br>
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                              Ville : </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                {{a.ville}}
                            </div>
                                <br>
                                <br>
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Rue : </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                {{a.rue}}
                        </div>
                                <br>
                                <br>
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Numero de maison : </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                {{a.nummaison}}
                    </div>
                                <br>
                                <br>
                                <a href=\"{{ path('deleteAdresse',{'id':a.idAdresse}) }}\" class=\"btn btn-outline-danger\">Supprimer</a>
                                <a href=\"{{ path('updateAdresse',{'id':a.idAdresse}) }}\" class=\"btn btn-outline-primary\">Modifier</a>

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
            {{ knp_pagination_render(adresses) }}
        </div>
    </div>
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <!-- Include Flashy default partial -->
    {{ include('@MercurySeriesFlashy/flashy.html.twig') }}
{% endblock %}", "adresse/listadresse.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\adresse\\listadresse.html.twig");
    }
}
