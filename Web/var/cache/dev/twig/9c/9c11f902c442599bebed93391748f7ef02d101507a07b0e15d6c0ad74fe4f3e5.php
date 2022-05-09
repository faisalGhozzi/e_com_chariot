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

/* card/index.html.twig */
class __TwigTemplate_074b96699197c1054addaf4ccbf2463c756ca2e85d37dd538652b09ac6c77e14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/index.html.twig", 1);
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
                <h1>Votre panier</h1>
            </div>
        </div>
        <br>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <div id=\"result\" class=\"row\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context["array"] = [];
        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 30
            echo "                    <tr>";
            if (twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 30)) {
                // line 31
                echo "                            ";
                $context["array"] = twig_array_merge((isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 31, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 31), "idproduit", [], "any", false, false, false, 31), "qte" => twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 31)]]);
                // line 32
                echo "                            <td>";
                ((twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 32), "nomproduit", [], "any", false, false, false, 32), "html", null, true))) : (print ("")));
                echo "</td>
                            <td class=\"text-end\">";
                // line 33
                ((twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 33), "prix", [], "any", false, false, false, 33), "html", null, true))) : (print ("")));
                echo " €</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                            <td class=\"text-end\">
                                ";
                // line 36
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 36), "prix", [], "any", false, false, false, 36)), "html", null, true);
                echo "
                                €
                            </td>
                            <td>
                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 40), "idproduit", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-success\">
                                <i class=\"bi bi-cart-plus\"></i>
                            </a>
                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 43), "idproduit", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\"
                               class=\"btn btn-warning\">
                                <i class=\"bi bi-cart-dash\"></i>
                            </a>
                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 47), "idproduit", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                                <i class=\"bi bi-cart-x\"></i>
                            </a>
                            </td>";
            }
            // line 51
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
                <tfoot>
                ";
        // line 59
        if ((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "                <tr>
                    <td colspan=\"3\">Total</td>
                    <td class=\"text-end\">";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()), "html", null, true);
            echo " €</td>
                    <td>
                        <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
            echo "\" class=\"btn btn-danger\">
                            <i class=\"bi bi-cart-x\"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"></td>
                    <td class=\"text-end\"></td>
                    <td>
                        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addLivraison", ["arr" => (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 73, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-success\">Acheter & Livrer</a>
                    </td>
                </tr>
                ";
        }
        // line 77
        echo "                </tfoot>
            </table>
            <a href=\"/categories\">Voir les categories</a>
        </div>
    </div>
</section>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "card/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 77,  191 => 73,  179 => 64,  174 => 62,  170 => 60,  168 => 59,  164 => 57,  155 => 53,  149 => 51,  142 => 47,  135 => 43,  129 => 40,  122 => 36,  117 => 34,  113 => 33,  108 => 32,  105 => 31,  102 => 30,  96 => 29,  94 => 28,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<section class=\"section page-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <h1>Votre panier</h1>
            </div>
        </div>
        <br>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <div id=\"result\" class=\"row\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% set array = [] %}
                {% for element in dataPanier %}
                    <tr>{% if element.produit %}
                            {% set array = array|merge([{ id: element.produit.idproduit, qte: element.quantite }]) %}
                            <td>{{ element.produit ? element.produit.nomproduit }}</td>
                            <td class=\"text-end\">{{ element.produit ? element.produit.prix }} €</td>
                            <td>{{ element.quantite }}</td>
                            <td class=\"text-end\">
                                {{ element.quantite*element.produit.prix }}
                                €
                            </td>
                            <td>
                            <a href=\"{{ path(\"cart_add\", {id: element.produit.idproduit}) }}\" class=\"btn btn-success\">
                                <i class=\"bi bi-cart-plus\"></i>
                            </a>
                            <a href=\"{{ path(\"cart_remove\", {id: element.produit.idproduit}) }}\"
                               class=\"btn btn-warning\">
                                <i class=\"bi bi-cart-dash\"></i>
                            </a>
                            <a href=\"{{ path(\"cart_delete\", {id: element.produit.idproduit}) }}\" class=\"btn btn-danger\">
                                <i class=\"bi bi-cart-x\"></i>
                            </a>
                            </td>{% endif %}
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                {% if dataPanier %}
                <tr>
                    <td colspan=\"3\">Total</td>
                    <td class=\"text-end\">{{ total }} €</td>
                    <td>
                        <a href=\"{{ path(\"cart_delete_all\") }}\" class=\"btn btn-danger\">
                            <i class=\"bi bi-cart-x\"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"></td>
                    <td class=\"text-end\"></td>
                    <td>
                        <a href=\"{{ path('addLivraison', {arr:array}) }}\" class=\"btn btn-success\">Acheter & Livrer</a>
                    </td>
                </tr>
                {% endif %}
                </tfoot>
            </table>
            <a href=\"/categories\">Voir les categories</a>
        </div>
    </div>
</section>
            {% endblock %}
", "card/index.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\card\\index.html.twig");
    }
}
