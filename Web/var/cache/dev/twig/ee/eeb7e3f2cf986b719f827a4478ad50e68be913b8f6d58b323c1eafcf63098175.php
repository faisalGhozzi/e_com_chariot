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

/* article/articleAdmin.html.twig */
class __TwigTemplate_f2883a95992e80b6353e273501ed1ab739497c27c6da805ab9033c66985637bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/articleAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/articleAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "article/articleAdmin.html.twig", 1);
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
        echo "       <div class=\"row justify-content-center\">

           <div class=\"col-lg-8\">

               <!-- Default Card Example -->
               <div class=\"card mb-6\">
                   <div class=\"card-header\">
                       <a class=\"btn btn-outline-secondary\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getarticles");
        echo "\"><i
                                   class=\"fa fa-arrow-left\"></i> Retourner aux articles</a>

                       <h1>Modifier article</h1>
                   </div>
                   <div class=\"card-body\">

                       <div class=\"container-fluid\">
                           <h3>Auteur</h3>
                           <p>
                               ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "auteur", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "
                           </p><br>
                           <h3>Contenu</h3>
                           <p>
                               ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "contenu", [], "any", false, false, false, 25), "html", null, true);
        echo "
                           </p><br>
                           <h3>Image</h3>
                           <div>
                               <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/articles/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29))), "html", null, true);
        echo "\" alt=\"\" width=\"200\"
                                    height=\"200\">
                           </div>
                           <br>
                           <div class=\"table-responsive\">
                               <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                   <thead>
                                   <tr>
                                       <th>contenu</th>
                                       <th>date publication</th>
                                       <th>auteur</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 44
            echo "                                       <tr>
                                           <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenuC", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                           <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "datepub", [], "any", false, false, false, 46)), "html", null, true);
            echo "</td>
                                           <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "auteurC", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                           <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCommentAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idcommentaire", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"
                                                  class=\"btn btn-primary \">Supprimer</a></td>
                                       </tr>
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/articleAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  125 => 44,  121 => 43,  104 => 29,  97 => 25,  90 => 21,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

   {% block content %}
       <div class=\"row justify-content-center\">

           <div class=\"col-lg-8\">

               <!-- Default Card Example -->
               <div class=\"card mb-6\">
                   <div class=\"card-header\">
                       <a class=\"btn btn-outline-secondary\" href=\"{{ path('getarticles') }}\"><i
                                   class=\"fa fa-arrow-left\"></i> Retourner aux articles</a>

                       <h1>Modifier article</h1>
                   </div>
                   <div class=\"card-body\">

                       <div class=\"container-fluid\">
                           <h3>Auteur</h3>
                           <p>
                               {{ article.auteur.nom }}
                           </p><br>
                           <h3>Contenu</h3>
                           <p>
                               {{ article.contenu }}
                           </p><br>
                           <h3>Image</h3>
                           <div>
                               <img src=\"{{ asset('uploads/articles/' ~ article.image ) }}\" alt=\"\" width=\"200\"
                                    height=\"200\">
                           </div>
                           <br>
                           <div class=\"table-responsive\">
                               <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                   <thead>
                                   <tr>
                                       <th>contenu</th>
                                       <th>date publication</th>
                                       <th>auteur</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   {% for c in commentaires %}
                                       <tr>
                                           <td>{{ c.contenuC }}</td>
                                           <td>{{ c.datepub|date }}</td>
                                           <td>{{ c.auteurC.nom }}</td>
                                           <td><a href=\"{{ path('deleteCommentAdmin',{'id':c.idcommentaire}) }}\"
                                                  class=\"btn btn-primary \">Supprimer</a></td>
                                       </tr>
                                   {% endfor %}
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   {% endblock %}
", "article/articleAdmin.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\article\\articleAdmin.html.twig");
    }
}
