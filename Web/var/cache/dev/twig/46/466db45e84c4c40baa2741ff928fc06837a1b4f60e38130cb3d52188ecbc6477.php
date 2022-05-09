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

/* livraison/listlivraisonclient.html.twig */
class __TwigTemplate_b8e5e6e789c88fe90054c017713a1dc9b2c27606f5281f9b5e17d534b3caf945 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/listlivraisonclient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/listlivraisonclient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "livraison/listlivraisonclient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"section page-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <!-- Page Title -->
                <h1>Mes livraisons</h1>
                <!-- Page Description -->
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <h3>Filtrer par type</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filtres", ["type" => "rapide"]);
        echo "\" class=\"btn btn-outline-primary\">rapide</a>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filtres", ["type" => "normal"]);
        echo "\" class=\"btn btn-outline-primary\">normal</a>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
        <div class=\"container\">
            <br>
            <div id=\"result\" class=\"row\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 33
            echo "                    <div class=\"container align-items-center\">
                        <div class=\"row align-items-center \">
                            <div class=\"col-md-3\">
                            </div>
                            <div class=\"col-md-6 align-items-center \">
                                <div class=\"card border-left-primary shadow h-100 py-2\">
                                    <div class=\"card-body  align-items-center\">
                                        <div class=\"row  align-items-center\">
                                            <div class=\"col mr-2 align-items-center\">
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Livraison N ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "idlivraison", [], "any", false, false, false, 43), "html", null, true);
            echo " </div>
                                                <br>
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Type:
                                                </div>

                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "type", [], "any", false, false, false, 50), "html", null, true);
            echo "
                                                </div>
                                                <br>
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Etat:
                                                </div>


                                                ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["l"], "etat", [], "any", false, false, false, 58) == 0)) {
                // line 59
                echo "                                                    <h1 class=\"h5 mb-0 font-weight-bold text-gray-800\">valide non
                                                        affecte</h1>
                                                    <br>

                                                ";
            }
            // line 64
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["l"], "etat", [], "any", false, false, false, 64) == 1)) {
                // line 65
                echo "                                                    <h1 class=\"h5 mb-0 font-weight-bold text-gray-800\"> affecte en cours
                                                        de livraison</h1>
                                                ";
            }
            // line 68
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
        // line 85
        echo "                <div class=\"justify-content-center\">
                    <div class=\"navigation \">
                        ";
        // line 87
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 87, $this->source); })()));
        echo "
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
        return "livraison/listlivraisonclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  180 => 85,  158 => 68,  153 => 65,  150 => 64,  143 => 59,  141 => 58,  130 => 50,  120 => 43,  108 => 33,  104 => 32,  91 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<section class=\"section page-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <!-- Page Title -->
                <h1>Mes livraisons</h1>
                <!-- Page Description -->
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <h3>Filtrer par type</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <a href=\"{{ path('filtres',{'type': \"rapide\" }) }}\" class=\"btn btn-outline-primary\">rapide</a>
                <a href=\"{{ path('filtres',{'type': \"normal\" }) }}\" class=\"btn btn-outline-primary\">normal</a>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
        <div class=\"container\">
            <br>
            <div id=\"result\" class=\"row\">
                {% for l in livraisons %}
                    <div class=\"container align-items-center\">
                        <div class=\"row align-items-center \">
                            <div class=\"col-md-3\">
                            </div>
                            <div class=\"col-md-6 align-items-center \">
                                <div class=\"card border-left-primary shadow h-100 py-2\">
                                    <div class=\"card-body  align-items-center\">
                                        <div class=\"row  align-items-center\">
                                            <div class=\"col mr-2 align-items-center\">
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Livraison N {{ l.idlivraison }} </div>
                                                <br>
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Type:
                                                </div>

                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                                    {{ l.type }}
                                                </div>
                                                <br>
                                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Etat:
                                                </div>


                                                {% if l.etat == 0 %}
                                                    <h1 class=\"h5 mb-0 font-weight-bold text-gray-800\">valide non
                                                        affecte</h1>
                                                    <br>

                                                {% endif %}
                                                {% if l.etat == 1 %}
                                                    <h1 class=\"h5 mb-0 font-weight-bold text-gray-800\"> affecte en cours
                                                        de livraison</h1>
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
            </div>
        </div>
    </section>

{% endblock %}", "livraison/listlivraisonclient.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livraison\\listlivraisonclient.html.twig");
    }
}
