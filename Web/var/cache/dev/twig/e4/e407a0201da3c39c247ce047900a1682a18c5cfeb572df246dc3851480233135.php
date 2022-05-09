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

/* article/afficheArticle.html.twig */
class __TwigTemplate_26329ff9867d759d464895717b29cbe0da8d6830356eeda36cf70d5f1cf7ca85 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/afficheArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/afficheArticle.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "article/afficheArticle.html.twig", 1);
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
        echo "     ";
        // line 29
        echo "
       <!-- Begin Page Content -->
       <div class=\"container-fluid\">

           <!-- Page Heading -->
           <h1 class=\"h3 mb-2 text-gray-800\">Articles</h1>
           <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
               For more information about DataTables, please visit the <a target=\"_blank\"
                                                                          href=\"https://datatables.net\">official DataTables documentation</a>.</p>

           <!-- DataTales Example -->
           <div class=\"card shadow mb-4\">
               <div class=\"card-header py-3\">
                   <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
               </div>
               <div class=\"card-body\">
                   <div class=\"table-responsive\">
                       <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                           <thead>
                           <tr>
                               <th>contenu</th>
                               <th>titre</th>
                               <th>image</th>
                               <th>nbr react</th>
                               <th>See More</th>
                               <th>Update</th>
                               <th>Delete</th>
                           </tr>
                           </thead>
                           <tbody>
                           <tr>
                               ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 61
            echo "                           <tr>
                               <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                               <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                               <td><img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/articles/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 64))), "html", null, true);
            echo "\" alt=\"\" width=\"200\" height=\"200\"></td>
                               <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nbrreact", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                               <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articledetailadmin", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idarticle", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-circle btn-lg\"><i class=\"fas fa-info-circle\"></i></a></td>
                               <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idarticle", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-circle btn-lg\"><i class=\"fas fa-exclamation-triangle\"></i></a></td>
                               <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idarticle", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-circle btn-lg\"><i class=\"fas fa-trash\"></i></a>
                           </tr>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                           ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 71, $this->source); })()), "paginator/pagination.html.twig");
        echo "
                           </tbody>
                           <tfoot>
                           </tfoot>
                       </table>
                       <br>
                       <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDFArticles");
        echo "\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Pdf</a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addArticle");
        echo "\" class=\"btn btn-success btn-icon-split\"><span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span><span class=\"text\">Add Article</span></a>
                   </div>
               </div>
           </div>

       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/afficheArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 79,  153 => 77,  143 => 71,  134 => 68,  130 => 67,  126 => 66,  122 => 65,  118 => 64,  114 => 63,  110 => 62,  107 => 61,  103 => 60,  70 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

   {% block content %}
     {#   <table border=\"1\">
           <tr>
               <td>Id</td>
               <td>contenu</td>
               <td>titre</td>
               <td>image</td>
               <td>nbr react</td>
               <td>Supprimer</td>
               <td>update</td>
           </tr>
           {% for c in articles %}
               <tr>
                   <td>{{c.idarticle}}</td>
                   <td>{{c.contenu}}</td>
                   <td>{{c.titre}}</td>
                   <td>{{c.image}}</td>
                   <td>{{c.nbrreact}}</td>
                   <td><a href=\"{{ path('deleteArticle',{'id':c.idarticle}) }}\">Supprimer</a></td>
                   <td><a href=\"{{ path('updateArticle',{'id':c.idarticle}) }}\">update</a></td>
               </tr>
           {% endfor %}

       </table>
       <td><a class=\"btn btn-success\" href=\"{{ path('addArticle') }}\">Ajouter Article</a></td>
     #}

       <!-- Begin Page Content -->
       <div class=\"container-fluid\">

           <!-- Page Heading -->
           <h1 class=\"h3 mb-2 text-gray-800\">Articles</h1>
           <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
               For more information about DataTables, please visit the <a target=\"_blank\"
                                                                          href=\"https://datatables.net\">official DataTables documentation</a>.</p>

           <!-- DataTales Example -->
           <div class=\"card shadow mb-4\">
               <div class=\"card-header py-3\">
                   <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
               </div>
               <div class=\"card-body\">
                   <div class=\"table-responsive\">
                       <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                           <thead>
                           <tr>
                               <th>contenu</th>
                               <th>titre</th>
                               <th>image</th>
                               <th>nbr react</th>
                               <th>See More</th>
                               <th>Update</th>
                               <th>Delete</th>
                           </tr>
                           </thead>
                           <tbody>
                           <tr>
                               {% for c in articles %}
                           <tr>
                               <td>{{c.contenu}}</td>
                               <td>{{c.titre}}</td>
                               <td><img src=\"{{ asset('uploads/articles/' ~ c.image ) }}\" alt=\"\" width=\"200\" height=\"200\"></td>
                               <td>{{c.nbrreact}}</td>
                               <td><a href=\"{{ path('articledetailadmin',{'id':c.idarticle}) }}\" class=\"btn btn-info btn-circle btn-lg\"><i class=\"fas fa-info-circle\"></i></a></td>
                               <td><a href=\"{{ path('updateArticle',{'id':c.idarticle}) }}\" class=\"btn btn-warning btn-circle btn-lg\"><i class=\"fas fa-exclamation-triangle\"></i></a></td>
                               <td><a href=\"{{ path('deleteArticle',{'id':c.idarticle}) }}\" class=\"btn btn-danger btn-circle btn-lg\"><i class=\"fas fa-trash\"></i></a>
                           </tr>
                           {% endfor %}
                           {{ knp_pagination_render(articles,('paginator/pagination.html.twig')) }}
                           </tbody>
                           <tfoot>
                           </tfoot>
                       </table>
                       <br>
                       <a href=\"{{ path('PDFArticles') }}\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Pdf</a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href=\"{{ path('addArticle') }}\" class=\"btn btn-success btn-icon-split\"><span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span><span class=\"text\">Add Article</span></a>
                   </div>
               </div>
           </div>

       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->
   {% endblock %}
", "article/afficheArticle.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\article\\afficheArticle.html.twig");
    }
}
