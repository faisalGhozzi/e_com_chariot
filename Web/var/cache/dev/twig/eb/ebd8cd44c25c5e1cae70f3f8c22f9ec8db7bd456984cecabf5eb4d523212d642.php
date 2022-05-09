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

/* salle/afficheSalle.html.twig */
class __TwigTemplate_1047b892caa9b95a914b5fe4b8c4cf6807c7010a55d807e170e7a8d263ef7e2e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/afficheSalle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/afficheSalle.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "salle/afficheSalle.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col order-last text-right\">
                <br>
                <a class=\"btn btn-outline-info\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addSalle");
        echo "\">Ajouter Salle</a>
            </div>
            <div class=\"col\">
            </div>
            <div class=\"col order-first\">
            </div>
        </div>
    </div>
    <br>
    <div class=\"card shadow mb-4\">
    <div class=\"card-body\">
    <div class=\"table-responsive\">
    <table class=\"table\">

    <tr>
        <th>NomSalle</th>
        <th>prixSalle</th>
        <th>image</th>
        <th>capacite</th>

    </tr>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "prixSalle", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/salles/" . twig_get_attribute($this->env, $this->source, $context["s"], "image", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" alt=\"\" width=\"200\" height=\"200\"></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "capacite", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>

                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SalledetailAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idSalle", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Reservations</a>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateSalle", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idSalle", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Modifier</a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("d", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idSalle", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">Supprimer</a>
                </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 45, $this->source); })()), "paginator/pagination.html.twig");
        echo "
        </tbody>

</table>
    </div>
    </div>
    </div>

    <br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salle/afficheSalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  132 => 40,  128 => 39,  124 => 38,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  103 => 31,  99 => 30,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{#{% extends 'base.html.twig' %}#}
{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col order-last text-right\">
                <br>
                <a class=\"btn btn-outline-info\" href=\"{{ path('addSalle') }}\">Ajouter Salle</a>
            </div>
            <div class=\"col\">
            </div>
            <div class=\"col order-first\">
            </div>
        </div>
    </div>
    <br>
    <div class=\"card shadow mb-4\">
    <div class=\"card-body\">
    <div class=\"table-responsive\">
    <table class=\"table\">

    <tr>
        <th>NomSalle</th>
        <th>prixSalle</th>
        <th>image</th>
        <th>capacite</th>

    </tr>
        <tbody>
        {% for s in salles %}
            <tr>
                <td>{{s.nom}}</td>
                <td>{{s.prixSalle}}</td>
                <td><img src=\"{{ asset('uploads/salles/' ~ s.image ) }}\" alt=\"\" width=\"200\" height=\"200\"></td>
                <td>{{s.capacite}}</td>

                <td>
                    <a href=\"{{ path('SalledetailAdmin',{'id':s.idSalle}) }}\" class=\"btn btn-outline-primary\">Reservations</a>
                    <a href=\"{{ path('updateSalle',{'id':s.idSalle}) }}\" class=\"btn btn-outline-primary\">Modifier</a>
                    <a href=\"{{ path('d',{'id':s.idSalle}) }}\" class=\"btn btn-outline-danger\">Supprimer</a>
                </td>
            </tr>

        {% endfor %}
        {{ knp_pagination_render(salles,('paginator/pagination.html.twig')) }}
        </tbody>

</table>
    </div>
    </div>
    </div>

    <br>

{% endblock %}
", "salle/afficheSalle.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\salle\\afficheSalle.html.twig");
    }
}
