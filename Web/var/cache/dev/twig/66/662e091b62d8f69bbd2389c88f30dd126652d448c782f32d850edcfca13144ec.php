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

/* livreur/statistique.html.twig */
class __TwigTemplate_a531150bb1a7909ef3b9ddf02ca580ef2242a4ef04c12f4c9d1c9733fa5fb7c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/statistique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/statistique.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livreur/statistique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <h1 class=\"h3 mb-2 text-gray-800\">Statistiques</h1>

        <!-- Content Row -->
        <div class=\"row\">

            <div class=\"col-xl-8 col-lg-7\">

                <!-- Area Chart -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Nombre livraison par adresse</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-bar\">
                            <canvas id=\"nbrlivparadresse\"></canvas>
                        </div>
                        <hr>
                    </div>
                </div>

                <!-- Bar Chart -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Nombre de livraison affecté chaque livreur</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-bar\">
                            <canvas id=\"nbrlivparlivreur\"></canvas>
                        </div>
                        <hr>

                    </div>
                </div>

            </div>

            <!-- Donut Chart -->
            <div class=\"col-xl-4 col-lg-5\">
                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Dropdown -->
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Nombre de livraison par type</h6>
                    </div>
                    <!-- Card Body -->
                    <div class=\"card-body\">
                        <div class=\"chart-pie pt-4\">
                            <canvas id=\"liv\"></canvas>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.3\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level custom scripts -->

    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/demo/chart-bar-demo.js"), "html", null, true);
        echo "\"></script>
    <script>

  window.onload = () => {
            var mychart = document.getElementById(\"liv\").getContext('2d');
            let liv = new Chart(mychart, {
                type:'doughnut',
                data:{
                    labels: [\"rapide\", \"Normal\"],
                    datasets:[{
                        lable:'Samples',
                        data : [";
        // line 83
        echo (isset($context["numrapide"]) || array_key_exists("numrapide", $context) ? $context["numrapide"] : (function () { throw new RuntimeError('Variable "numrapide" does not exist.', 83, $this->source); })());
        echo ",";
        echo (isset($context["numnormal"]) || array_key_exists("numnormal", $context) ? $context["numnormal"] : (function () { throw new RuntimeError('Variable "numnormal" does not exist.', 83, $this->source); })());
        echo "],
                        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                        hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                    }]
                }

            })

        };
  /*
  let livreur = [];
  let livraison =[];
  var obj = ;
  for (i = 0; i < obj.length; i++) {
      livreur.push(Object.keys(obj[i]));
      livraison.push(Object.values(obj[i]));
}
  console.log(livreur);
  */
      var chart = document.getElementById(\"nbrlivparlivreur\");
      let nbrlivparlivreur = new Chart(chart, {
          type: 'bar',
          data: {
              labels: ";
        // line 107
        echo (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 107, $this->source); })());
        echo ",
              datasets: [{
                  label: \"nombres de livraison\",
                  backgroundColor: \"#4e73df\",
                  hoverBackgroundColor: \"#2e59d9\",
                  borderColor: \"#4e73df\",
                  data: ";
        // line 113
        echo (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 113, $this->source); })());
        echo ",
                  responsive: true,
                  hidden: false,
              }],
          },
      });


  var chart2 = document.getElementById(\"nbrlivparadresse\");
  let nbrlivparadresse = new Chart(chart2, {
      type: 'bar',
      data: {
          labels: ";
        // line 125
        echo (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 125, $this->source); })());
        echo ",
          datasets: [{
              label: \"nombres de livraison\",
              backgroundColor: \"#4e73df\",
              hoverBackgroundColor: \"#2e59d9\",
              borderColor: \"#4e73df\",
              data:";
        // line 131
        echo (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 131, $this->source); })());
        echo ",
          }],
      },})


    </script>

    <br>
    <br>
    <br>
    <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livreur/statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 131,  215 => 125,  200 => 113,  191 => 107,  162 => 83,  148 => 72,  144 => 71,  140 => 70,  133 => 66,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block content %}

    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <h1 class=\"h3 mb-2 text-gray-800\">Statistiques</h1>

        <!-- Content Row -->
        <div class=\"row\">

            <div class=\"col-xl-8 col-lg-7\">

                <!-- Area Chart -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Nombre livraison par adresse</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-bar\">
                            <canvas id=\"nbrlivparadresse\"></canvas>
                        </div>
                        <hr>
                    </div>
                </div>

                <!-- Bar Chart -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Nombre de livraison affecté chaque livreur</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-bar\">
                            <canvas id=\"nbrlivparlivreur\"></canvas>
                        </div>
                        <hr>

                    </div>
                </div>

            </div>

            <!-- Donut Chart -->
            <div class=\"col-xl-4 col-lg-5\">
                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Dropdown -->
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Nombre de livraison par type</h6>
                    </div>
                    <!-- Card Body -->
                    <div class=\"card-body\">
                        <div class=\"chart-pie pt-4\">
                            <canvas id=\"liv\"></canvas>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.3\"></script>
    <script src=\"{{asset('backoffice/vendor/chart.js/Chart.min.js')}}\"></script>

<!-- Page level custom scripts -->

    <script src=\"{{asset('backoffice/js/demo/chart-area-demo.js')}}\"></script>
    <script src=\"{{asset('backoffice/js/demo/chart-pie-demo.js')}}\"></script>
    <script src=\"{{asset('backoffice/js/demo/chart-bar-demo.js')}}\"></script>
    <script>

  window.onload = () => {
            var mychart = document.getElementById(\"liv\").getContext('2d');
            let liv = new Chart(mychart, {
                type:'doughnut',
                data:{
                    labels: [\"rapide\", \"Normal\"],
                    datasets:[{
                        lable:'Samples',
                        data : [{{ numrapide | raw }},{{ numnormal | raw }}],
                        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                        hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                    }]
                }

            })

        };
  /*
  let livreur = [];
  let livraison =[];
  var obj = ;
  for (i = 0; i < obj.length; i++) {
      livreur.push(Object.keys(obj[i]));
      livraison.push(Object.values(obj[i]));
}
  console.log(livreur);
  */
      var chart = document.getElementById(\"nbrlivparlivreur\");
      let nbrlivparlivreur = new Chart(chart, {
          type: 'bar',
          data: {
              labels: {{ l | raw}},
              datasets: [{
                  label: \"nombres de livraison\",
                  backgroundColor: \"#4e73df\",
                  hoverBackgroundColor: \"#2e59d9\",
                  borderColor: \"#4e73df\",
                  data: {{ num | raw }},
                  responsive: true,
                  hidden: false,
              }],
          },
      });


  var chart2 = document.getElementById(\"nbrlivparadresse\");
  let nbrlivparadresse = new Chart(chart2, {
      type: 'bar',
      data: {
          labels: {{ville |  raw}},
          datasets: [{
              label: \"nombres de livraison\",
              backgroundColor: \"#4e73df\",
              hoverBackgroundColor: \"#2e59d9\",
              borderColor: \"#4e73df\",
              data:{{nbr |  raw}},
          }],
      },})


    </script>

    <br>
    <br>
    <br>
    <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br>
{% endblock %}
", "livreur/statistique.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livreur\\statistique.html.twig");
    }
}
