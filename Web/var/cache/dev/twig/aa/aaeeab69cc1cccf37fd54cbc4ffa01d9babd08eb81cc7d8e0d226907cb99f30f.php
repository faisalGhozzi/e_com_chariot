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

/* article/affichearticlesfront.html.twig */
class __TwigTemplate_1c5147c6bb130f45ea6569dc52bc6a45c64ba66584a220570f19a6d0187e9570 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/affichearticlesfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/affichearticlesfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/affichearticlesfront.html.twig", 1);
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
                <h1>Articles & Actualités</h1>
            </div>
        </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search...\">
        <br>
        <div class=\"row\" id=\"result\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 19
            echo "                <div class=\"col-lg-4 col-md-6\">
                    <article class=\"post-sm\">
                        <div class=\"post-thumb\">
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articledetail", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idarticle", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" ><img class=\"w-100\" height=\"250\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/articles/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"Post-Image\"></a>
                        </div>
                        <div class=\"post-title\">
                            <h3><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articledetail", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idarticle", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></h3>
                        </div>
                        <div class=\"post-meta\">
                            <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"post-details\">
                            <p style=\"color: #000;\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                        </div>
                    </article>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
</section>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/searchArticle\",
                    dataType: \"text\",
                    data:{
                        'val':value
                    },
                    success: function(msg){
                        if (value===\$(that).val()) {
                            var result = JSON.parse(msg);
                            \$.each(result, function(key, arr) {
                                \$.each(arr, function(id, value) {
                                    if (key === 'articles') {
                                        if (id !== 'error') {
                                            var img='";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/articles/"), "html", null, true);
        echo "'+value[3];
                                            entitySelector.append(
                                                '<div class=\"col-lg-4 col-md-6\">'+
                                                '<article class=\"post-sm\">'+
                                                '<div class=\"post-thumb\">'+
                                                '<a href=\"/article/'+id+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                                '</div>'+
                                                '<div class=\"post-title\">'+
                                                '<h3><a href=\"/article/'+id+'\" >'+value[0]+'</a></h3>'+
                                                '</div>'+
                                                '<div class=\"post-meta\">'+
                                                '<ul class=\"list-inline post-tag\">'+
                                                '<li class=\"list-inline-item\">'+
                                                '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                                '</li>'+
                                                '<li class=\"list-inline-item\">'+
                                                '<a href=\"#\">'+value[4]+'</a>'+
                                                '</li>'+
                                                '<li class=\"list-inline-item\">'+
                                                'April 8, 2022'+
                                                '</li>'+
                                                '</ul>'+
                                                '</div>'+
                                                '<div class=\"post-details\">'+
                                                '<p>'+value[1]+'</p>'+
                                                '</div>'+
                                                '</article>'+
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
        // line 105
        $this->loadTemplate("chat/index3.html.twig", "article/affichearticlesfront.html.twig", 105)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/affichearticlesfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 105,  159 => 64,  129 => 36,  118 => 31,  110 => 28,  102 => 25,  94 => 22,  89 => 19,  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
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
                <h1>Articles & Actualités</h1>
            </div>
        </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search...\">
        <br>
        <div class=\"row\" id=\"result\">
            {% for c in articles %}
                <div class=\"col-lg-4 col-md-6\">
                    <article class=\"post-sm\">
                        <div class=\"post-thumb\">
                            <a href=\"{{ path('articledetail',{'id':c.idarticle}) }}\" ><img class=\"w-100\" height=\"250\" src=\"{{ asset('uploads/articles/' ~ c.image ) }}\" alt=\"Post-Image\"></a>
                        </div>
                        <div class=\"post-title\">
                            <h3><a href=\"{{ path('articledetail',{'id':c.idarticle}) }}\" >{{c.titre}}</a></h3>
                        </div>
                        <div class=\"post-meta\">
                            <p>{{ c.auteur.nom }} {{ c.auteur.prenom }}</p>
                        </div>
                        <div class=\"post-details\">
                            <p style=\"color: #000;\">{{c.contenu}}</p>
                        </div>
                    </article>
                </div>
            {% endfor %}
        </div>
    </div>
</section>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/searchArticle\",
                    dataType: \"text\",
                    data:{
                        'val':value
                    },
                    success: function(msg){
                        if (value===\$(that).val()) {
                            var result = JSON.parse(msg);
                            \$.each(result, function(key, arr) {
                                \$.each(arr, function(id, value) {
                                    if (key === 'articles') {
                                        if (id !== 'error') {
                                            var img='{{ asset(\"uploads/articles/\") }}'+value[3];
                                            entitySelector.append(
                                                '<div class=\"col-lg-4 col-md-6\">'+
                                                '<article class=\"post-sm\">'+
                                                '<div class=\"post-thumb\">'+
                                                '<a href=\"/article/'+id+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                                '</div>'+
                                                '<div class=\"post-title\">'+
                                                '<h3><a href=\"/article/'+id+'\" >'+value[0]+'</a></h3>'+
                                                '</div>'+
                                                '<div class=\"post-meta\">'+
                                                '<ul class=\"list-inline post-tag\">'+
                                                '<li class=\"list-inline-item\">'+
                                                '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                                '</li>'+
                                                '<li class=\"list-inline-item\">'+
                                                '<a href=\"#\">'+value[4]+'</a>'+
                                                '</li>'+
                                                '<li class=\"list-inline-item\">'+
                                                'April 8, 2022'+
                                                '</li>'+
                                                '</ul>'+
                                                '</div>'+
                                                '<div class=\"post-details\">'+
                                                '<p>'+value[1]+'</p>'+
                                                '</div>'+
                                                '</article>'+
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
    {% include \"chat/index3.html.twig\" %}
{% endblock %}
", "article/affichearticlesfront.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\article\\affichearticlesfront.html.twig");
    }
}
