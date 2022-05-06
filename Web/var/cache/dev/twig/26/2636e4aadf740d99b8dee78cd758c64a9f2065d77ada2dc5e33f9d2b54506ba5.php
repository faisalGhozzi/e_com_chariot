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

/* article/article.html.twig */
class __TwigTemplate_0e14b4626c1ce705c9b0e35bf6b42e36871b9ec7834115da86d2c4c177bc13d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/article.html.twig", 1);
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
        if ((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "<section class=\"section blog-single\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 m-auto\">

                <article class=\"single-post\">
                    <div class=\"post-title text-center\">
                        <h1>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
            echo "</h1>
                        <ul class=\"list-inline post-tag\">
                            <li class=\"list-inline-item\">
                                <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "auteur", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "auteur", [], "any", false, false, false, 14), "prenom", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                            </li>
                            <li class=\"list-inline-item\"  >
                                <p>";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "/5<i class=\"ti-star\"></i></p>
                            </li>
                        </ul>
                    </div>
                    <div class=\"post-body\">
                        <div class=\"feature-image\">
                            <img class=\"img-fluid\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/articles/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" alt=\"feature-image\">
                        </div>
                        <p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "contenu", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                        <hr>
                        <div>
                            ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRating"]) || array_key_exists("formRating", $context) ? $context["formRating"] : (function () { throw new RuntimeError('Variable "formRating" does not exist.', 28, $this->source); })()), 'form_start');
            echo "
                            <div class=\"form-group\">
                                <h4>Give us your feedback</h4>
                                ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRating"]) || array_key_exists("formRating", $context) ? $context["formRating"] : (function () { throw new RuntimeError('Variable "formRating" does not exist.', 31, $this->source); })()), "note", [], "any", false, false, false, 31), 'widget');
            echo "
                            </div>
                                ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRating"]) || array_key_exists("formRating", $context) ? $context["formRating"] : (function () { throw new RuntimeError('Variable "formRating" does not exist.', 33, $this->source); })()), "Submit", [], "any", false, false, false, 33), 'widget');
            echo "
                            ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRating"]) || array_key_exists("formRating", $context) ? $context["formRating"] : (function () { throw new RuntimeError('Variable "formRating" does not exist.', 34, $this->source); })()), 'form_end');
            echo "
                        </div>

                    </div>
                </article>
                <div class=\"about-author\">
                    <div class=\"col-lg-8\">
                        <h2>Comments</h2>
                        <div class=\"col-lg-12 row\">
                            <div class=\"col-lg-4\">
                                Trier par:
                            </div>
                            <div class=\"col-lg-4\">
                                <button class=\"btn btn-info\" id=\"recentes\">Les plus récentes</button>
                            </div>
                            <div class=\"col-lg-4\">
                                <button class=\"btn btn-secondary\" id=\"anciens\">les plus anciens</button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id=\"result\">
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 57
                echo "                            <div class=\"media\">
                                <div class=\"image\">
                                    <img class=\"d-flex justify-content-center align-self-center\" src=\"images/team/marketing-team-03.jpg\" alt=\"author-image\">
                                </div>
                                <div class=\"media-body align-self-center\">
                                    <h3>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "auteurC", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
                echo "</h3>
                                    <h6>";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "datepub", [], "any", false, false, false, 63)), "html", null, true);
                echo "</h6>
                                    <p>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenuC", [], "any", false, false, false, 64), "html", null, true);
                echo "</p>
                                    <ul class=\"list-inline social-links\">
                                        <li class=\"list-inline-item\">
                                            <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comm_react", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idcommentaire", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\" class =\"btn btn-link js-like\">
                                            ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "auteurC", [], "any", false, false, false, 68) && twig_get_attribute($this->env, $this->source, $context["c"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, $context["c"], "auteurC", [], "any", false, false, false, 68)], "method", false, false, false, 68))) {
                    // line 69
                    echo "                                                <i class=\"fas fa-thumbs-up\"></i>
                                            ";
                } else {
                    // line 71
                    echo "                                                <i class=\"far fa-thumbs-up\"></i>
                                            ";
                }
                // line 73
                echo "                                           <span class =\"js-likes\"> ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "reacts", [], "any", false, false, false, 73)), "html", null, true);
                echo " </span></a>

                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-8 text-right\">
                                    <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateComment", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idcommentaire", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"text-dark\"><i class=\"ti-reload\"></i></a>
                                    <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idcommentaire", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" class=\"text-danger\"><i class=\"ti-trash\"></i></a>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                    </div>

                    ";
            // line 86
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
                        <div class=\"form-group\">
                            <label>Comment</label>
                            ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "contenuC", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "contenu"]]);
            echo "
                            ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "contenuC", [], "any", false, false, false, 90), 'errors', ["attr" => ["class" => "text-danger"]]);
            echo "
                        </div>
                        ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "Submit", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "btn btn-info"]]);
            echo "

                    ";
            // line 94
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
            echo "

                </div>
            </div>
        </div>
    </div>
</section>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        var searchRequest = null;
        \$(\"#recentes\").click(function() {
            var that = this;
            var val = ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 107, $this->source); })()), "idArticle", [], "any", false, false, false, 107), "html", null, true);
            echo ";
            var entitySelector = \$(\"#result\").html('');
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"POST\",
                url: \"/triComments\",
                dataType: \"text\",
                data:{
                    'type':1,
                    'idarticle':val
                },
                success: function(msg){
                    var result = JSON.parse(msg);
                    if(result.length!==0){
                        for(let i = 0; i < result.length; i++){
                            console.log(result[i]);
                            entitySelector.append(
                                '<div class=\"media\">'+
                                '<div class=\"image\">'+
                                '<img class=\"d-flex justify-content-center align-self-center\" src=\"images/team/marketing-team-03.jpg\" alt=\"author-image\">'+
                                '</div>'+
                                '<div class=\"media-body align-self-center\">'+
                                '<h3>'+result[i].auteurC.nom+'</h3>'+
                                '<h6>'+result[i].datepub+'</h6>'+
                                '<p>'+result[i].contenuC+'</p>'+
                                '<ul class=\"list-inline social-links\">'+
                                '<li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ti-heart\"></i> 2</a></li>'+
                                '</ul>'+
                                '</div>'+
                                '<div class=\"col-8 text-right\">'+
                                '<a href=\"/updateComment/'+result[i].idcommentaire+'\" class=\"text-dark\"><i class=\"ti-reload\"></i></a>'+
                                '<a href=\"/deleteComment/'+result[i].idcommentaire+'\" class=\"text-danger\"><i class=\"ti-trash\"></i></a>'+
                                '</div>'+
                                '</div>'
                            );
                        }
                    }
                    else{
                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                    }
                }
            });
        });

        \$(\"#anciens\").click(function() {
            var that = this;
            var val = ";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 154, $this->source); })()), "idArticle", [], "any", false, false, false, 154), "html", null, true);
            echo ";
            var entitySelector = \$(\"#result\").html('');
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"POST\",
                url: \"/triComments\",
                dataType: \"text\",
                data:{
                    'type':2,
                    'idarticle':val
                },
                success: function(msg){
                    console.log(msg);
                    var result = JSON.parse(msg);
                    console.log(result)
                    if(result.length!==0){
                        for(let i = 0; i < result.length; i++){
                            entitySelector.append(
                                '<div class=\"media\">'+
                                '<div class=\"image\">'+
                                '<img class=\"d-flex justify-content-center align-self-center\" src=\"images/team/marketing-team-03.jpg\" alt=\"author-image\">'+
                                '</div>'+
                                '<div class=\"media-body align-self-center\">'+
                                '<h3>'+result[i].auteurC.nom+'</h3>'+
                                '<h6>'+result[i].datepub+'</h6>'+
                                '<p>'+result[i].contenuC+'</p>'+
                                '<ul class=\"list-inline social-links\">'+
                                '<li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ti-heart\"></i> 2</a></li>'+
                                '</ul>'+
                                '</div>'+
                                '<div class=\"col-8 text-right\">'+
                                '<a href=\"/updateComment/'+result[i].idcommentaire+'\" class=\"text-dark\"><i class=\"ti-reload\"></i></a>'+
                                '<a href=\"/deleteComment/'+result[i].idcommentaire+'\" class=\"text-danger\"><i class=\"ti-trash\"></i></a>'+
                                '</div>'+
                                '</div>'
                            );
                        }
                    }
                    else{
                        entitySelector.append('<div class=\"error\">Aucun commentaire trouvé</div>');
                    }
                }
            });
        });
    });
</script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onclickBtnLike(event){
        event.preventDefault();
        const url = this.href;
        const spanCount = this.querySelector('span.js-likes');
        const icon = this.querySelector('i');
        axios.get(url).then(function(response){
           const reacts = response.data.react;
           spanCount.textContent = reacts;
           if(icon.classList.contains('fas')) {
               icon.classList.replace('fas', 'far');
           }
            else{
               icon.classList.replace('far', 'fas');
           }

        })
    }
    document.querySelectorAll('a.js-like').forEach(function (link){
        link.addEventListener('click',onclickBtnLike);
    })
</script>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 154,  256 => 107,  240 => 94,  235 => 92,  230 => 90,  226 => 89,  220 => 86,  216 => 84,  206 => 80,  202 => 79,  192 => 73,  188 => 71,  184 => 69,  182 => 68,  178 => 67,  172 => 64,  168 => 63,  164 => 62,  157 => 57,  153 => 56,  128 => 34,  124 => 33,  119 => 31,  113 => 28,  107 => 25,  102 => 23,  93 => 17,  85 => 14,  79 => 11,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% if article %}
<section class=\"section blog-single\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 m-auto\">

                <article class=\"single-post\">
                    <div class=\"post-title text-center\">
                        <h1>{{article.titre}}</h1>
                        <ul class=\"list-inline post-tag\">
                            <li class=\"list-inline-item\">
                                <p>{{article.auteur.nom}} {{ article.auteur.prenom }}</p>
                            </li>
                            <li class=\"list-inline-item\"  >
                                <p>{{ rating }}/5<i class=\"ti-star\"></i></p>
                            </li>
                        </ul>
                    </div>
                    <div class=\"post-body\">
                        <div class=\"feature-image\">
                            <img class=\"img-fluid\" src=\"{{ asset('uploads/articles/' ~ article.image ) }}\" alt=\"feature-image\">
                        </div>
                        <p>{{article.contenu}}</p>
                        <hr>
                        <div>
                            {{ form_start(formRating) }}
                            <div class=\"form-group\">
                                <h4>Give us your feedback</h4>
                                {{ form_widget(formRating.note) }}
                            </div>
                                {{ form_widget(formRating.Submit) }}
                            {{ form_end(formRating) }}
                        </div>

                    </div>
                </article>
                <div class=\"about-author\">
                    <div class=\"col-lg-8\">
                        <h2>Comments</h2>
                        <div class=\"col-lg-12 row\">
                            <div class=\"col-lg-4\">
                                Trier par:
                            </div>
                            <div class=\"col-lg-4\">
                                <button class=\"btn btn-info\" id=\"recentes\">Les plus récentes</button>
                            </div>
                            <div class=\"col-lg-4\">
                                <button class=\"btn btn-secondary\" id=\"anciens\">les plus anciens</button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id=\"result\">
                        {% for c in commentaires %}
                            <div class=\"media\">
                                <div class=\"image\">
                                    <img class=\"d-flex justify-content-center align-self-center\" src=\"images/team/marketing-team-03.jpg\" alt=\"author-image\">
                                </div>
                                <div class=\"media-body align-self-center\">
                                    <h3>{{ c.auteurC.nom }}</h3>
                                    <h6>{{ c.datepub|date }}</h6>
                                    <p>{{ c.contenuC }}</p>
                                    <ul class=\"list-inline social-links\">
                                        <li class=\"list-inline-item\">
                                            <a href=\"{{ path('comm_react', {'id' : c.idcommentaire}) }}\" class =\"btn btn-link js-like\">
                                            {% if c.auteurC and c.isLikedByUser(c.auteurC) %}
                                                <i class=\"fas fa-thumbs-up\"></i>
                                            {% else %}
                                                <i class=\"far fa-thumbs-up\"></i>
                                            {% endif %}
                                           <span class =\"js-likes\"> {{  c.reacts|length }} </span></a>

                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-8 text-right\">
                                    <a href=\"{{ path('updateComment',{'id':c.idcommentaire}) }}\" class=\"text-dark\"><i class=\"ti-reload\"></i></a>
                                    <a href=\"{{ path('deleteComment',{'id':c.idcommentaire}) }}\" class=\"text-danger\"><i class=\"ti-trash\"></i></a>
                                </div>
                            </div>
                        {% endfor %}
                    </div>

                    {{ form_start(form,{attr:{novalidate:'novalidate'}})}}
                        <div class=\"form-group\">
                            <label>Comment</label>
                            {{ form_widget(form.contenuC , {'attr': {'class': 'form-control' , 'placeholder' : 'contenu'}} ) }}
                            {{ form_errors(form.contenuC,{'attr':{'class':'text-danger'}}) }}
                        </div>
                        {{ form_widget(form.Submit , {'attr': {'class': 'btn btn-info'}} ) }}

                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>
</section>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        var searchRequest = null;
        \$(\"#recentes\").click(function() {
            var that = this;
            var val = {{ article.idArticle }};
            var entitySelector = \$(\"#result\").html('');
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"POST\",
                url: \"/triComments\",
                dataType: \"text\",
                data:{
                    'type':1,
                    'idarticle':val
                },
                success: function(msg){
                    var result = JSON.parse(msg);
                    if(result.length!==0){
                        for(let i = 0; i < result.length; i++){
                            console.log(result[i]);
                            entitySelector.append(
                                '<div class=\"media\">'+
                                '<div class=\"image\">'+
                                '<img class=\"d-flex justify-content-center align-self-center\" src=\"images/team/marketing-team-03.jpg\" alt=\"author-image\">'+
                                '</div>'+
                                '<div class=\"media-body align-self-center\">'+
                                '<h3>'+result[i].auteurC.nom+'</h3>'+
                                '<h6>'+result[i].datepub+'</h6>'+
                                '<p>'+result[i].contenuC+'</p>'+
                                '<ul class=\"list-inline social-links\">'+
                                '<li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ti-heart\"></i> 2</a></li>'+
                                '</ul>'+
                                '</div>'+
                                '<div class=\"col-8 text-right\">'+
                                '<a href=\"/updateComment/'+result[i].idcommentaire+'\" class=\"text-dark\"><i class=\"ti-reload\"></i></a>'+
                                '<a href=\"/deleteComment/'+result[i].idcommentaire+'\" class=\"text-danger\"><i class=\"ti-trash\"></i></a>'+
                                '</div>'+
                                '</div>'
                            );
                        }
                    }
                    else{
                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                    }
                }
            });
        });

        \$(\"#anciens\").click(function() {
            var that = this;
            var val = {{ article.idArticle }};
            var entitySelector = \$(\"#result\").html('');
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"POST\",
                url: \"/triComments\",
                dataType: \"text\",
                data:{
                    'type':2,
                    'idarticle':val
                },
                success: function(msg){
                    console.log(msg);
                    var result = JSON.parse(msg);
                    console.log(result)
                    if(result.length!==0){
                        for(let i = 0; i < result.length; i++){
                            entitySelector.append(
                                '<div class=\"media\">'+
                                '<div class=\"image\">'+
                                '<img class=\"d-flex justify-content-center align-self-center\" src=\"images/team/marketing-team-03.jpg\" alt=\"author-image\">'+
                                '</div>'+
                                '<div class=\"media-body align-self-center\">'+
                                '<h3>'+result[i].auteurC.nom+'</h3>'+
                                '<h6>'+result[i].datepub+'</h6>'+
                                '<p>'+result[i].contenuC+'</p>'+
                                '<ul class=\"list-inline social-links\">'+
                                '<li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ti-heart\"></i> 2</a></li>'+
                                '</ul>'+
                                '</div>'+
                                '<div class=\"col-8 text-right\">'+
                                '<a href=\"/updateComment/'+result[i].idcommentaire+'\" class=\"text-dark\"><i class=\"ti-reload\"></i></a>'+
                                '<a href=\"/deleteComment/'+result[i].idcommentaire+'\" class=\"text-danger\"><i class=\"ti-trash\"></i></a>'+
                                '</div>'+
                                '</div>'
                            );
                        }
                    }
                    else{
                        entitySelector.append('<div class=\"error\">Aucun commentaire trouvé</div>');
                    }
                }
            });
        });
    });
</script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onclickBtnLike(event){
        event.preventDefault();
        const url = this.href;
        const spanCount = this.querySelector('span.js-likes');
        const icon = this.querySelector('i');
        axios.get(url).then(function(response){
           const reacts = response.data.react;
           spanCount.textContent = reacts;
           if(icon.classList.contains('fas')) {
               icon.classList.replace('fas', 'far');
           }
            else{
               icon.classList.replace('far', 'fas');
           }

        })
    }
    document.querySelectorAll('a.js-like').forEach(function (link){
        link.addEventListener('click',onclickBtnLike);
    })
</script>
{% endif %}
{% endblock %}
", "article/article.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\article\\article.html.twig");
    }
}
