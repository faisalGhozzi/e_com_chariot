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

/* article/pdf.html.twig */
class __TwigTemplate_c5f409c912489427f86d456c2e283966bcc37bc8a0d245708798e5ab2705a8cd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'Entry' => [$this, 'block_Entry'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/pdf.html.twig"));

        // line 1
        $this->displayBlock('Entry', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_Entry($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <style type=\"text/css\">
        img.head {
            position: absolute;
            height: 40pt;
            left: 30pt;
            top: 20pt;
        }
        .header {
            text-align: center;
            position: absolute;
            left: 0pt;
            top: 20pt;
            width: 553pt;

        }
        .header h1 {
            margin: 0pt;
            font-size: 80pt;
            font-family: Arial, Helvetica, sans-serif;
        }
        .header h2 {
            text-decoration: underline;
            text-transform: uppercase;
            background-color: #FFFF99;
            margin: 10pt 0pt 0pt 0pt;
        }
        .nip1 td {
            width: 20%;
        }
        .result {
            color: blue;
        }
        .nip-width1 {
            width: 170pt;
        }
        .nip-width2 {
            width: 130pt;
        }

        .nip-width3 {
            width: 155pt;
        }
        .nip-width4 {
            width: 145pt;
        }
        h2 {
            text-align: center;
            font-size: 14pt;
            margin: 10pt 0pt 0pt 0pt;
        }
        h1 {
            text-align: center;
            font-size: 20pt;
            margin: 10pt 0pt 0pt 0pt;
        }
        table.border, div.border table {
            margin-top: 0pt;
            border-collapse: collapse;
        }
        div.border table {
            margin-top: 0px;
        }
        .border {
            border: 2px solid black;
        }
        .th25 {
            width: 25%;
        }
        .head-tab {
            background-color: #FFFF99;
        }
        .unstyled {
            list-style-type: none;
            margin: 0px;
            padding: 0px;
        }
        .unstyled li {
            margin: 0px;
            background-color: blue;
        }

        .content {
            position: absolute;
            top: 60pt;
            left: 00pt;
        }
        .row .span6 {
            width: 250pt;
            margin: 100pt;
        }
        table tr {
            width: 100%;
        }
        .table-bordered, .table-bordered td, .table-bordered th {
            border-collapse: collapse;
            border: 1px solid black;
        }

        td, th {
            padding: 3pt;
        }


        .col1 {
            width: 10pt;
        }
        .col2 {
            width: 60pt;
        }
        .col3 {
            width: 60pt;
        }
        .col4 {
            width: 100pt;
        }
        .col5 {
            width: 120pt;
        }


        table {
            margin-top: 20pt;
            width:100%;
        }
        thead {
            background-color: #20c997;
        }

    </style>
    <h1 align=\"center\" style=\"color:black;\">
        Liste des articles
    </h1>
    <div align=\"center\" >
    <img  src=\"C:\\Users\\chaab\\Documents\\GitHub\\i_chariot_symfony\\public\\backoffice\\img\\logo1.png\" class=\"logo\"  style=\"width:200px;  \">
    </div>
    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
        <tr align=\"Center\">
            <th>contenu</th>
            <th>titre</th>
            <th>image</th>
            <th>nbr react</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 152
            echo "            <tr align=\"Center\">
                <td align=\"center\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
                <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
                <td><img src=\"uploads/articles/";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 155), "html", null, true);
            echo "\" alt=\"\" width=\"200\" height=\"200\"></td>
                <td align=\"center\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nbrreact", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </tbody>
    </table>
    <br>
    <br>
    <div align=\"Center\">
        <img src=\"C:\\Users\\chaab\\Documents\\GitHub\\i_chariot_symfony\\public\\backoffice\\img\\pdf.png\" class=\"logo\" width=\"100\" height=\"100\">
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 159,  233 => 156,  229 => 155,  225 => 154,  221 => 153,  218 => 152,  214 => 151,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block Entry %}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <style type=\"text/css\">
        img.head {
            position: absolute;
            height: 40pt;
            left: 30pt;
            top: 20pt;
        }
        .header {
            text-align: center;
            position: absolute;
            left: 0pt;
            top: 20pt;
            width: 553pt;

        }
        .header h1 {
            margin: 0pt;
            font-size: 80pt;
            font-family: Arial, Helvetica, sans-serif;
        }
        .header h2 {
            text-decoration: underline;
            text-transform: uppercase;
            background-color: #FFFF99;
            margin: 10pt 0pt 0pt 0pt;
        }
        .nip1 td {
            width: 20%;
        }
        .result {
            color: blue;
        }
        .nip-width1 {
            width: 170pt;
        }
        .nip-width2 {
            width: 130pt;
        }

        .nip-width3 {
            width: 155pt;
        }
        .nip-width4 {
            width: 145pt;
        }
        h2 {
            text-align: center;
            font-size: 14pt;
            margin: 10pt 0pt 0pt 0pt;
        }
        h1 {
            text-align: center;
            font-size: 20pt;
            margin: 10pt 0pt 0pt 0pt;
        }
        table.border, div.border table {
            margin-top: 0pt;
            border-collapse: collapse;
        }
        div.border table {
            margin-top: 0px;
        }
        .border {
            border: 2px solid black;
        }
        .th25 {
            width: 25%;
        }
        .head-tab {
            background-color: #FFFF99;
        }
        .unstyled {
            list-style-type: none;
            margin: 0px;
            padding: 0px;
        }
        .unstyled li {
            margin: 0px;
            background-color: blue;
        }

        .content {
            position: absolute;
            top: 60pt;
            left: 00pt;
        }
        .row .span6 {
            width: 250pt;
            margin: 100pt;
        }
        table tr {
            width: 100%;
        }
        .table-bordered, .table-bordered td, .table-bordered th {
            border-collapse: collapse;
            border: 1px solid black;
        }

        td, th {
            padding: 3pt;
        }


        .col1 {
            width: 10pt;
        }
        .col2 {
            width: 60pt;
        }
        .col3 {
            width: 60pt;
        }
        .col4 {
            width: 100pt;
        }
        .col5 {
            width: 120pt;
        }


        table {
            margin-top: 20pt;
            width:100%;
        }
        thead {
            background-color: #20c997;
        }

    </style>
    <h1 align=\"center\" style=\"color:black;\">
        Liste des articles
    </h1>
    <div align=\"center\" >
    <img  src=\"C:\\Users\\chaab\\Documents\\GitHub\\i_chariot_symfony\\public\\backoffice\\img\\logo1.png\" class=\"logo\"  style=\"width:200px;  \">
    </div>
    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
        <tr align=\"Center\">
            <th>contenu</th>
            <th>titre</th>
            <th>image</th>
            <th>nbr react</th>
        </tr>
        </thead>
        <tbody>
        {% for c in articles %}
            <tr align=\"Center\">
                <td align=\"center\">{{c.contenu}}</td>
                <td>{{c.titre}}</td>
                <td><img src=\"uploads/articles/{{ c.image }}\" alt=\"\" width=\"200\" height=\"200\"></td>
                <td align=\"center\">{{ c.nbrreact }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <br>
    <br>
    <div align=\"Center\">
        <img src=\"C:\\Users\\chaab\\Documents\\GitHub\\i_chariot_symfony\\public\\backoffice\\img\\pdf.png\" class=\"logo\" width=\"100\" height=\"100\">
    </div>

{% endblock %}", "article/pdf.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\article\\pdf.html.twig");
    }
}
