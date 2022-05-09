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

/* livreur/affecterlivreur.html.twig */
class __TwigTemplate_0c245bcbfca5c9ec91699d41a960336501a6b0efba9bc4b7a5927baf5edacf75 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/affecterlivreur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/affecterlivreur.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livreur/affecterlivreur.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livreurs"]) || array_key_exists("livreurs", $context) ? $context["livreurs"] : (function () { throw new RuntimeError('Variable "livreurs" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 5
            echo "        <div class=\"container align-items-center\">
            <div class=\"row align-items-center \">
                <div class=\"col-md-3\">
                </div>
                <div class=\"col-md-6 align-items-center \">
                    <div class=\"card border-left-primary shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row  align-items-center\">
                                <div class=\"col mr-2 align-items-center\">
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Livreur N ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "idlivreur", [], "any", false, false, false, 15), "html", null, true);
            echo " </div>
                                    <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Nom Livreur: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "nomlivreur", [], "any", false, false, false, 20), "html", null, true);
            echo "
                                    </div>
                                        <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Numero de telephone: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "numtel", [], "any", false, false, false, 26), "html", null, true);
            echo "
                                    </div>
                                    <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Prenom: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prenom", [], "any", false, false, false, 32), "html", null, true);
            echo "
                                    </div>
                                        <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Email: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "email", [], "any", false, false, false, 38), "html", null, true);
            echo "
                                    </div>
                                        <br>
                                        <br>
                                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choisirlivreur", ["id" => (isset($context["idlivraison"]) || array_key_exists("idlivraison", $context) ? $context["idlivraison"] : (function () { throw new RuntimeError('Variable "idlivraison" does not exist.', 42, $this->source); })()), "idlivreur" => twig_get_attribute($this->env, $this->source, $context["l"], "idlivreur", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" id=\"submit\" type=\"SubmitType\" class=\"btn btn-primary justify-content-center\" \">selectionner</a>

                                </div>
                                <div class=\"col-auto\">

                                    <i class=\"fa-solid fa-person\"></i>
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
        // line 60
        echo "    <script>
        \$(function(){
            document.getElementById(\"submit\").onclick = function() {
                this.disabled = true;
            }
        });
    </script>
    <div class=\"justify-content-center\">
        <div class=\"navigation \">
            ";
        // line 69
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livreurs"]) || array_key_exists("livreurs", $context) ? $context["livreurs"] : (function () { throw new RuntimeError('Variable "livreurs" does not exist.', 69, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livreur/affecterlivreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 69,  151 => 60,  127 => 42,  120 => 38,  111 => 32,  102 => 26,  93 => 20,  85 => 15,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}
    {% for l in livreurs %}
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
                                        Livreur N {{l.idlivreur}} </div>
                                    <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Nom Livreur: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        {{l.nomlivreur}}
                                    </div>
                                        <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Numero de telephone: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        {{l.numtel}}
                                    </div>
                                    <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Prenom: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        {{l.prenom}}
                                    </div>
                                        <br>
                                    <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                        Email: </div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                        {{l.email}}
                                    </div>
                                        <br>
                                        <br>
                                        <a href=\"{{ path('choisirlivreur',{'id':idlivraison,'idlivreur':l.idlivreur}) }}\" id=\"submit\" type=\"SubmitType\" class=\"btn btn-primary justify-content-center\" \">selectionner</a>

                                </div>
                                <div class=\"col-auto\">

                                    <i class=\"fa-solid fa-person\"></i>
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
    <script>
        \$(function(){
            document.getElementById(\"submit\").onclick = function() {
                this.disabled = true;
            }
        });
    </script>
    <div class=\"justify-content-center\">
        <div class=\"navigation \">
            {{ knp_pagination_render(livreurs) }}
        </div>
    </div>
{% endblock %}", "livreur/affecterlivreur.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livreur\\affecterlivreur.html.twig");
    }
}
