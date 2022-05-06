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

/* salle/afficheSallesFront.html.twig */
class __TwigTemplate_b1548c48ba3609108a7739d26ad3cd10075e78e799458642903156ccffd0af44 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/afficheSallesFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/afficheSallesFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salle/afficheSallesFront.html.twig", 1);
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
                <h1>Location des salles</h1>
                <!-- Page Description -->
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <h3>Tri par prix</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <button class=\"btn btn-secondary\" id=\"croissant\" >Croissant <span class=\"ti-arrow-up\"></button>
                <button class=\"btn btn-info\"id=\"decroissant\" >Décroissant <span class=\"ti-arrow-down\"></button>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche...\" id=\"recherche\">
        <br>
        <div id=\"result\" class=\"row\" >
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 33
            echo "                    <div class=\"col-lg-4 col-md-6\">
                        <article class=\"post-sm\">
                            <div class=\"post-thumb\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SalledetailFront", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idSalle", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" ><img class=\"w-100\" height=\"250\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/salles/" . twig_get_attribute($this->env, $this->source, $context["s"], "image", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" alt=\"Post-Image\"></a>
                            </div>
                            <div class=\"post-title\">
                                <h3><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SalledetailFront", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idSalle", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></h3>
                            </div>
                            <div class=\"post-meta\">
                                <ul class=\"list-inline post-tag\">
                                    <li class=\"list-inline-item\">
                                        <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/salles/" . twig_get_attribute($this->env, $this->source, $context["s"], "image", [], "any", false, false, false, 44))), "html", null, true);
            echo "\" alt=\"author-thumb\">
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <strong>Prix:</strong>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "prixSalle", [], "any", false, false, false, 47), "html", null, true);
            echo "
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <strong>Capacité:</strong>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "capacite", [], "any", false, false, false, 50), "html", null, true);
            echo "
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-details\">
                                <p></p>
                            </div>
                        </article>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
    </div>
</section>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#recherche\").keyup(function() {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#affichage\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/rechercheSalle\",
                    dataType: \"text\",
                    data:{
                        'valeur':value
                    },
                    success: function(msg){
                        var data = JSON.parse(msg);
                        console.log(data)
                        if(data.length!==0){
                            for(let i = 0; i < data.length; i++){
                                var img=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/salles/"), "html", null, true);
        echo "\"+data[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"/salle/'+data[i].idsalle+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"/salle/'+data[i].idsalle+'\" >'+data[i].nom+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+data[i].prixsalle+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Capacité:</strong>'+data[i].capacite+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p></p>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucune Salle trouvée</div>');
                        }
                    }
                });
            });
            \$(\"#croissant\").click(function() {
                var that = this;
                var entitySelector = \$(\"#affichage\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triSalle\",
                    dataType: \"text\",
                    data:{
                        'tri':1
                    },
                    success: function(msg){
                        var data = JSON.parse(msg);
                        console.log(data)
                        if(data.length!==0){
                            for(let i = 0; i < data.length; i++){
                                var img=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/salles/"), "html", null, true);
        echo "\"+data[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"/salle/'+data[i].idsalle+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"/salle/'+data[i].idsalle+'\" >'+data[i].nom+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+data[i].prixsalle+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Capacité:</strong>'+data[i].capacite+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p></p>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucune Salle trouvée</div>');
                        }
                    }
                });
            });
            \$(\"#decroissant\").click(function() {
                var that = this;
                var entitySelector = \$(\"#affichage\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triSalle\",
                    dataType: \"text\",
                    data:{
                        'tri':2
                    },
                    success: function(msg){
                        var data = JSON.parse(msg);
                        console.log(data)
                        if(data.length!==0){
                            for(let i = 0; i < data.length; i++){
                                var img=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/salles/"), "html", null, true);
        echo "\"+data[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"/salle/'+data[i].idsalle+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"/salle/'+data[i].idsalle+'\" >'+data[i].nom+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+data[i].prixsalle+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Capacité:</strong>'+data[i].capacite+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p></p>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucune Salle trouvée</div>');
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
        return "salle/afficheSallesFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 194,  239 => 140,  182 => 86,  154 => 60,  138 => 50,  132 => 47,  126 => 44,  116 => 39,  108 => 36,  103 => 33,  99 => 32,  68 => 3,  58 => 2,  35 => 1,);
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
                <h1>Location des salles</h1>
                <!-- Page Description -->
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <h3>Tri par prix</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-8 m-auto\">
                <button class=\"btn btn-secondary\" id=\"croissant\" >Croissant <span class=\"ti-arrow-up\"></button>
                <button class=\"btn btn-info\"id=\"decroissant\" >Décroissant <span class=\"ti-arrow-down\"></button>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche...\" id=\"recherche\">
        <br>
        <div id=\"result\" class=\"row\" >
                {% for s in salles %}
                    <div class=\"col-lg-4 col-md-6\">
                        <article class=\"post-sm\">
                            <div class=\"post-thumb\">
                                <a href=\"{{ path('SalledetailFront',{'id':s.idSalle}) }}\" ><img class=\"w-100\" height=\"250\" src=\"{{ asset('uploads/salles/' ~ s.image ) }}\" alt=\"Post-Image\"></a>
                            </div>
                            <div class=\"post-title\">
                                <h3><a href=\"{{ path('SalledetailFront',{'id':s.idSalle}) }}\" >{{s.nom}}</a></h3>
                            </div>
                            <div class=\"post-meta\">
                                <ul class=\"list-inline post-tag\">
                                    <li class=\"list-inline-item\">
                                        <img src=\"{{ asset('uploads/salles/' ~ s.image ) }}\" alt=\"author-thumb\">
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <strong>Prix:</strong>{{s.prixSalle}}
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <strong>Capacité:</strong>{{s.capacite}}
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-details\">
                                <p></p>
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
            \$(\"#recherche\").keyup(function() {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#affichage\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/rechercheSalle\",
                    dataType: \"text\",
                    data:{
                        'valeur':value
                    },
                    success: function(msg){
                        var data = JSON.parse(msg);
                        console.log(data)
                        if(data.length!==0){
                            for(let i = 0; i < data.length; i++){
                                var img=\"{{ asset('uploads/salles/') }}\"+data[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"/salle/'+data[i].idsalle+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"/salle/'+data[i].idsalle+'\" >'+data[i].nom+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+data[i].prixsalle+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Capacité:</strong>'+data[i].capacite+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p></p>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucune Salle trouvée</div>');
                        }
                    }
                });
            });
            \$(\"#croissant\").click(function() {
                var that = this;
                var entitySelector = \$(\"#affichage\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triSalle\",
                    dataType: \"text\",
                    data:{
                        'tri':1
                    },
                    success: function(msg){
                        var data = JSON.parse(msg);
                        console.log(data)
                        if(data.length!==0){
                            for(let i = 0; i < data.length; i++){
                                var img=\"{{ asset('uploads/salles/') }}\"+data[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"/salle/'+data[i].idsalle+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"/salle/'+data[i].idsalle+'\" >'+data[i].nom+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+data[i].prixsalle+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Capacité:</strong>'+data[i].capacite+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p></p>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucune Salle trouvée</div>');
                        }
                    }
                });
            });
            \$(\"#decroissant\").click(function() {
                var that = this;
                var entitySelector = \$(\"#affichage\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triSalle\",
                    dataType: \"text\",
                    data:{
                        'tri':2
                    },
                    success: function(msg){
                        var data = JSON.parse(msg);
                        console.log(data)
                        if(data.length!==0){
                            for(let i = 0; i < data.length; i++){
                                var img=\"{{ asset('uploads/salles/') }}\"+data[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"/salle/'+data[i].idsalle+'\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"/salle/'+data[i].idsalle+'\" >'+data[i].nom+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<img src=\"'+img+'\" alt=\"author-thumb\">'+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+data[i].prixsalle+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Capacité:</strong>'+data[i].capacite+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p></p>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucune Salle trouvée</div>');
                        }
                    }
                });
            });
        });
    </script>
{% endblock %}
", "salle/afficheSallesFront.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\salle\\afficheSallesFront.html.twig");
    }
}
