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

/* produit/listproduitfront.html.twig */
class __TwigTemplate_8fdadbb20873adb385ba0339c967374d1d7fd8dcdd515fec0c9f88bfd9eafcdf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listproduitfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listproduitfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/listproduitfront.html.twig", 1);
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
                <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 8, $this->source); })()), "nomcateg", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
                <!-- Page Description -->
                <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
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
                <button class=\"btn btn-info\" id=\"down\">Croissant <span class=\"ti-arrow-up\"></span></button>
                <button class=\"btn btn-secondary\" id=\"up\">Décroissant <span class=\"ti-arrow-down\"></span></button>
            </div>
            </div>
        </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <div id=\"result\" class=\"row\" >
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 32
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "quantite", [], "any", false, false, false, 32) > 0)) {
                // line 33
                echo "            <div class=\"col-lg-4 col-md-6\" >
                <article class=\"post-sm\" style=\"border:1px\">
                    <div class=\"post-thumb\" style=\"border:1px\">
                        <a href=\"#\" ><img class=\"w-100\" height=\"250\" src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 36))), "html", null, true);
                echo "\" alt=\"Post-Image\"></a>
                    </div>
                    <div class=\"post-title\">
                        <h3>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomproduit", [], "any", false, false, false, 39), "html", null, true);
                echo "</h3>
                    </div>
                    <div class=\"post-meta\">
                        <ul class=\"list-inline post-tag\">
                            <li class=\"list-inline-item\">
                                <strong>Quantité:</strong>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantite", [], "any", false, false, false, 44), "html", null, true);
                echo "
                            </li>
                            <li class=\"list-inline-item\">
                                <strong>Prix:</strong>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 47), "html", null, true);
                echo "
                            </li>
                        </ul>
                    </div>
                    <div class=\"post-details\">
                        <p>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 52), "html", null, true);
                echo "</p>
                        <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "idproduit", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-success\">
                            <i class=\"bi bi-cart-plus\"></i> Ajouter
                        </a>
                    </div>
                </article>
            </div>
                ";
            }
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>
        ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 62, $this->source); })()), "paginator/pagination.html.twig");
        echo "
    </div>
</section>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#up\").click(function() {
                var that = this;
                var val = ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 72, $this->source); })()), "idcateg", [], "any", false, false, false, 72), "html", null, true);
        echo ";
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triProduits\",
                    dataType: \"text\",
                    data:{
                        'type':1,
                        'idCateg':val
                    },
                    success: function(msg){
                        var result = JSON.parse(msg);
                        console.log(result)
                        if(result.length!==0){
                            for(let i = 0; i < result.length; i++){
                                var img=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/produits/"), "html", null, true);
        echo "\"+result[i].image;
                                entitySelector.append(
                                '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"#\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"#\" >'+result[i].nomproduit+'</a></h3>'+
                                '</div>'+
                                '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Quantité:</strong>'+result[i].quantite+
                                '</li>'+
                                '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+result[i].prix+
                                '</li>'+
                                '</ul>'+
                                '</div>'+
                                '<div class=\"post-details\">'+
                                    '<p>'+result[i].description+'</p>'+
                                    '<a href=\"/cart/add/'+result[i].idproduit+'\" class=\"btn btn-success\">'+
                                    '<i class=\"bi bi-cart-plus\"></i> Ajouter'+
                                    '</a>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucun Produit trouvé</div>');
                        }
                    }
                });
            });
            \$(\"#down\").click(function() {
                var that = this;
                var val = ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 128, $this->source); })()), "idcateg", [], "any", false, false, false, 128), "html", null, true);
        echo ";
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triProduits\",
                    dataType: \"text\",
                    data:{
                        'type':2,
                        'idCateg':val
                    },
                    success: function(msg){
                        var result = JSON.parse(msg);
                        if(result.length!==0){
                            for(let i = 0; i < result.length; i++){
                                var img=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/produits/"), "html", null, true);
        echo "\"+result[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"#\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"#\" >'+result[i].nomproduit+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Quantité:</strong>'+result[i].quantite+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+result[i].prix+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p>'+result[i].description+'</p>'+
                                    '<a href=\"/cart/add/'+result[i].idproduit+'\" class=\"btn btn-success\">'+
                                    '<i class=\"bi bi-cart-plus\"></i> Ajouter'+
                                    '</a>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucun Produit trouvé</div>');
                        }
                    }
                });
            });
        });
    </script>
     ";
        // line 183
        $this->loadTemplate("chat/index3.html.twig", "produit/listproduitfront.html.twig", 183)->display($context);
        // line 184
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/listproduitfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 184,  303 => 183,  261 => 144,  242 => 128,  200 => 89,  180 => 72,  167 => 62,  164 => 61,  158 => 60,  148 => 53,  144 => 52,  136 => 47,  130 => 44,  122 => 39,  116 => 36,  111 => 33,  108 => 32,  104 => 31,  80 => 10,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
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
                <h1>{{ categorie.nomcateg }}</h1>
                <!-- Page Description -->
                <p>{{ categorie.description }}</p>
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
                <button class=\"btn btn-info\" id=\"down\">Croissant <span class=\"ti-arrow-up\"></span></button>
                <button class=\"btn btn-secondary\" id=\"up\">Décroissant <span class=\"ti-arrow-down\"></span></button>
            </div>
            </div>
        </div>
    </div>
</section>
<section class=\"post-grid section pt-0\">
    <div class=\"container\">
        <div id=\"result\" class=\"row\" >
            {% for p in produits %}
                {% if p.quantite > 0 %}
            <div class=\"col-lg-4 col-md-6\" >
                <article class=\"post-sm\" style=\"border:1px\">
                    <div class=\"post-thumb\" style=\"border:1px\">
                        <a href=\"#\" ><img class=\"w-100\" height=\"250\" src=\"{{ asset('uploads/produits/' ~ p.image ) }}\" alt=\"Post-Image\"></a>
                    </div>
                    <div class=\"post-title\">
                        <h3>{{p.nomproduit}}</h3>
                    </div>
                    <div class=\"post-meta\">
                        <ul class=\"list-inline post-tag\">
                            <li class=\"list-inline-item\">
                                <strong>Quantité:</strong>{{p.quantite}}
                            </li>
                            <li class=\"list-inline-item\">
                                <strong>Prix:</strong>{{p.prix}}
                            </li>
                        </ul>
                    </div>
                    <div class=\"post-details\">
                        <p>{{p.description}}</p>
                        <a href=\"{{path(\"cart_add\", {id: p.idproduit})}}\" class=\"btn btn-success\">
                            <i class=\"bi bi-cart-plus\"></i> Ajouter
                        </a>
                    </div>
                </article>
            </div>
                {% endif %}
            {% endfor %}
        </div>
        {{ knp_pagination_render(produits,('paginator/pagination.html.twig')) }}
    </div>
</section>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#up\").click(function() {
                var that = this;
                var val = {{ categorie.idcateg }};
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triProduits\",
                    dataType: \"text\",
                    data:{
                        'type':1,
                        'idCateg':val
                    },
                    success: function(msg){
                        var result = JSON.parse(msg);
                        console.log(result)
                        if(result.length!==0){
                            for(let i = 0; i < result.length; i++){
                                var img=\"{{ asset('uploads/produits/') }}\"+result[i].image;
                                entitySelector.append(
                                '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"#\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"#\" >'+result[i].nomproduit+'</a></h3>'+
                                '</div>'+
                                '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Quantité:</strong>'+result[i].quantite+
                                '</li>'+
                                '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+result[i].prix+
                                '</li>'+
                                '</ul>'+
                                '</div>'+
                                '<div class=\"post-details\">'+
                                    '<p>'+result[i].description+'</p>'+
                                    '<a href=\"/cart/add/'+result[i].idproduit+'\" class=\"btn btn-success\">'+
                                    '<i class=\"bi bi-cart-plus\"></i> Ajouter'+
                                    '</a>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucun Produit trouvé</div>');
                        }
                    }
                });
            });
            \$(\"#down\").click(function() {
                var that = this;
                var val = {{ categorie.idcateg }};
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"/triProduits\",
                    dataType: \"text\",
                    data:{
                        'type':2,
                        'idCateg':val
                    },
                    success: function(msg){
                        var result = JSON.parse(msg);
                        if(result.length!==0){
                            for(let i = 0; i < result.length; i++){
                                var img=\"{{ asset('uploads/produits/') }}\"+result[i].image;
                                entitySelector.append(
                                    '<div class=\"col-lg-4 col-md-6\">'+
                                    '<article class=\"post-sm\">'+
                                    '<div class=\"post-thumb\">'+
                                    '<a href=\"#\" ><img class=\"w-100\" src=\"'+img+'\" alt=\"Post-Image\"></a>'+
                                    '</div>'+
                                    '<div class=\"post-title\">'+
                                    '<h3><a href=\"#\" >'+result[i].nomproduit+'</a></h3>'+
                                    '</div>'+
                                    '<div class=\"post-meta\">'+
                                    '<ul class=\"list-inline post-tag\">'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Quantité:</strong>'+result[i].quantite+
                                    '</li>'+
                                    '<li class=\"list-inline-item\">'+
                                    '<strong>Prix:</strong>'+result[i].prix+
                                    '</li>'+
                                    '</ul>'+
                                    '</div>'+
                                    '<div class=\"post-details\">'+
                                    '<p>'+result[i].description+'</p>'+
                                    '<a href=\"/cart/add/'+result[i].idproduit+'\" class=\"btn btn-success\">'+
                                    '<i class=\"bi bi-cart-plus\"></i> Ajouter'+
                                    '</a>'+
                                    '</div>'+
                                    '</article>'+
                                    '</div>'
                                );
                            }
                        }
                        else{
                            entitySelector.append('<div class=\"error\">Aucun Produit trouvé</div>');
                        }
                    }
                });
            });
        });
    </script>
     {% include \"chat/index3.html.twig\" %}


{% endblock %}
", "produit/listproduitfront.html.twig", "C:\\Users\\Insaf Ghozzi\\Desktop\\Faycal\\e_com_chariot\\Web\\templates\\produit\\listproduitfront.html.twig");
    }
}
