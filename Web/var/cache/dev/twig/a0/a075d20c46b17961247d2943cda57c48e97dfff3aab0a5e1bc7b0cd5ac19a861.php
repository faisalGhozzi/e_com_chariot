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

/* categorie/listcategories.html.twig */
class __TwigTemplate_f4627fee1e92c22bee100868df3551cc32a89a69c247bd86be46fab2ebe64116 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/listcategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/listcategories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/listcategories.html.twig", 1);
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
        echo "<section class=\"section page-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <!-- Page Title -->
                <h1>Catégories</h1>
                <!-- Page Description -->
                <p>Découvrez des produits de diverses catégories</p>
            </div>
        </div>
    </div>
</section>
<section class=\"job-list section pt-0\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-10 m-auto\">
                <div class=\"block\">
                    <div class=\"title text-center\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\" id=\"rech\">
                    </div>
                    <div id=\"result\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 25
            echo "                            <div class=\"job col-lg-12\">
                                <div class=\"content\">
                                    <h3>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomcateg", [], "any", false, false, false, 27), "html", null, true);
            echo "</h3>
                                    <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"apply-button\">
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Produits", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idcateg", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-main-sm\">Voir les produits</a>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#rech\").keyup(function() {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/rechercheCategorie\",
                    dataType: \"text\",
                    data:{
                        'valeur':value
                    },
                    success: function(msg){
                        if (value===\$(that).val()) {
                            var result = JSON.parse(msg);
                            console.log(msg)
                            \$.each(result, function(key, arr) {
                                \$.each(arr, function(id, value) {
                                    if (key === 'categories') {
                                        if (id !== 'error') {
                                            var img='";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/articles/"), "html", null, true);
        echo "'+value[3];
                                            entitySelector.append(
                                            '<div class=\"job col-lg-12\">'+
                                                '<div class=\"row\">'+
                                                '<div class=\"content col-lg-6\">'+
                                                '<h3>'+value[0]+'</h3>'+
                                                '<p>'+value[1]+'</p>'+
                                                '</div>'+
                                                '<div class=\"col-lg-6\">'+
                                                '<div class=\"apply-button text-right\">'+
                                                '<a href=\"/produits/'+id+'\" class=\"btn btn-main-sm\">Voir les produits</a>'+
                                            '</div>'+
                                            '</div>'+
                                            '</div>'+
                                            '</div>'
                                            );
                                        } else {
                                            entitySelector.append('<div class=\"error\">'+value+'</div>');
                                        }
                                    }
                                });
                            });
                        }
                    }
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/listcategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 68,  121 => 37,  110 => 32,  103 => 28,  99 => 27,  95 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
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
                <h1>Catégories</h1>
                <!-- Page Description -->
                <p>Découvrez des produits de diverses catégories</p>
            </div>
        </div>
    </div>
</section>
<section class=\"job-list section pt-0\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-10 m-auto\">
                <div class=\"block\">
                    <div class=\"title text-center\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\" id=\"rech\">
                    </div>
                    <div id=\"result\">
                        {% for c in categories %}
                            <div class=\"job col-lg-12\">
                                <div class=\"content\">
                                    <h3>{{c.nomcateg}}</h3>
                                    <p>{{c.description}}</p>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"apply-button\">
                                        <a href=\"{{ path('Produits',{'id':c.idcateg}) }}\" class=\"btn btn-main-sm\">Voir les produits</a>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#rech\").keyup(function() {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/rechercheCategorie\",
                    dataType: \"text\",
                    data:{
                        'valeur':value
                    },
                    success: function(msg){
                        if (value===\$(that).val()) {
                            var result = JSON.parse(msg);
                            console.log(msg)
                            \$.each(result, function(key, arr) {
                                \$.each(arr, function(id, value) {
                                    if (key === 'categories') {
                                        if (id !== 'error') {
                                            var img='{{ asset(\"uploads/articles/\") }}'+value[3];
                                            entitySelector.append(
                                            '<div class=\"job col-lg-12\">'+
                                                '<div class=\"row\">'+
                                                '<div class=\"content col-lg-6\">'+
                                                '<h3>'+value[0]+'</h3>'+
                                                '<p>'+value[1]+'</p>'+
                                                '</div>'+
                                                '<div class=\"col-lg-6\">'+
                                                '<div class=\"apply-button text-right\">'+
                                                '<a href=\"/produits/'+id+'\" class=\"btn btn-main-sm\">Voir les produits</a>'+
                                            '</div>'+
                                            '</div>'+
                                            '</div>'+
                                            '</div>'
                                            );
                                        } else {
                                            entitySelector.append('<div class=\"error\">'+value+'</div>');
                                        }
                                    }
                                });
                            });
                        }
                    }
                });
            });
        });
    </script>
{% endblock %}
", "categorie/listcategories.html.twig", "C:\\Users\\Insaf Ghozzi\\Desktop\\Faycal\\e_com_chariot\\Web\\templates\\categorie\\listcategories.html.twig");
    }
}
