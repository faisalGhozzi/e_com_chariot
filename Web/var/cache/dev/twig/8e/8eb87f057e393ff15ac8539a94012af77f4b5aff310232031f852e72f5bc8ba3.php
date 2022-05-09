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

/* livreur/Emaillivreur.html.twig */
class __TwigTemplate_9372793304959df7bd4c1414cd92d9551ff767b373abb116b6e44bbdaa33788e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/Emaillivreur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/Emaillivreur.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <title>
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <script src=\"https://kit.fontawesome.com/293caa18a5.js\" crossorigin=\"anonymous\"></script>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <style type=\"text/css\">
        #outlook a{padding: 0;}
        .ReadMsgBody{width: 100%;}
        .ExternalClass{width: 100%;}
        .ExternalClass *{line-height: 100%;}
        body{margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
        table, td{border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;}
        img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
        p{display: block; margin: 13px 0;}
    </style>
    <!--[if !mso]><!-->
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            @-ms-viewport {width: 320px;}
            @viewport {\twidth: 320px; }
        }
    </style>
    <!--<![endif]-->
    <!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <!--[if lte mso 11]>
    <style type=\"text/css\">
        .outlook-group-fix{width:100% !important;}
    </style>
    <![endif]-->
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {

            table.full-width-mobile { width: 100% !important; }
            td.full-width-mobile { width: auto !important; }

        }
        @media only screen and (min-width:480px) {
            .dys-column-per-100 {
                width: 100.000000% !important;
                max-width: 100.000000%;
            }
        }
    </style>
</head>
<body>
<div>
    <!--[if mso | IE]>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:600px;\" width=\"600\"><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style='background:#22427c;background-color:#22427c !important;margin:0px auto;max-width:600px !important; ' >
        <table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background:#22427c;background-color:#22427c;width:100%;'>
            <tbody>
            <tr>
                <td style='direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;'>
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"vertical-align:top;width:600px;\">
                    <![endif]-->
                    <div class='dys-column-per-100 outlook-group-fix' style='direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;'>
                        <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' width='100%'>
                            <tr>
                                <td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
                                    <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='border-collapse:collapse;border-spacing:0px;'>
                                        <tbody>
                                        <tr>
                                            <td style='width:216px;'>

                                         <img  height='189'  src=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 89, $this->source); })()), "image", [0 => "@img/logoo.png"], "method", false, false, false, 89), "html", null, true);
        echo "\"  style='border:none;display:block;font-size:13px;height:189px;outline:none;text-decoration:none;width:100%;' width='216' />

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
                                    <div style=\"color:#FFFFFF;font-family:'Droid Sans', 'Helvetica Neue', Arial, sans-serif;font-size:36px;line-height:1;text-align:center;\">
                                        Salut !
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
                                    <div style=\"color:#ddbd83;font-family:'Droid Sans', 'Helvetica Neue', Arial, sans-serif;font-size:16px;line-height:20px;text-align:center;\">
                                        Nous vous souhaitons un bon travail avec nous !!
                                    </div>
                                    <div style=\"color:#ddbd83;font-family:'Droid Sans', 'Helvetica Neue', Arial, sans-serif;font-size:16px;line-height:20px;text-align:center;\">
                                        Nous allons commencé à vous affecter des livraisons
                                        on compte sur vous!!
                                    </div>


                                </td>
                            </tr>

                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td></tr></table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td></tr></table>
    <![endif]-->
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "livreur/Emaillivreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 89,  66 => 19,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <title>
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <script src=\"https://kit.fontawesome.com/293caa18a5.js\" crossorigin=\"anonymous\"></script>

    <!-- Custom fonts for this template-->
    <link href=\"{{asset('backoffice/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{asset('backoffice/css/sb-admin-2.min.css')}}\" rel=\"stylesheet\">

    <style type=\"text/css\">
        #outlook a{padding: 0;}
        .ReadMsgBody{width: 100%;}
        .ExternalClass{width: 100%;}
        .ExternalClass *{line-height: 100%;}
        body{margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
        table, td{border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;}
        img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
        p{display: block; margin: 13px 0;}
    </style>
    <!--[if !mso]><!-->
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            @-ms-viewport {width: 320px;}
            @viewport {\twidth: 320px; }
        }
    </style>
    <!--<![endif]-->
    <!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <!--[if lte mso 11]>
    <style type=\"text/css\">
        .outlook-group-fix{width:100% !important;}
    </style>
    <![endif]-->
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {

            table.full-width-mobile { width: 100% !important; }
            td.full-width-mobile { width: auto !important; }

        }
        @media only screen and (min-width:480px) {
            .dys-column-per-100 {
                width: 100.000000% !important;
                max-width: 100.000000%;
            }
        }
    </style>
</head>
<body>
<div>
    <!--[if mso | IE]>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:600px;\" width=\"600\"><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style='background:#22427c;background-color:#22427c !important;margin:0px auto;max-width:600px !important; ' >
        <table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background:#22427c;background-color:#22427c;width:100%;'>
            <tbody>
            <tr>
                <td style='direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;'>
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"vertical-align:top;width:600px;\">
                    <![endif]-->
                    <div class='dys-column-per-100 outlook-group-fix' style='direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;'>
                        <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' width='100%'>
                            <tr>
                                <td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
                                    <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='border-collapse:collapse;border-spacing:0px;'>
                                        <tbody>
                                        <tr>
                                            <td style='width:216px;'>

                                         <img  height='189'  src=\"{{ email.image('@img/logoo.png') }}\"  style='border:none;display:block;font-size:13px;height:189px;outline:none;text-decoration:none;width:100%;' width='216' />

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
                                    <div style=\"color:#FFFFFF;font-family:'Droid Sans', 'Helvetica Neue', Arial, sans-serif;font-size:36px;line-height:1;text-align:center;\">
                                        Salut !
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
                                    <div style=\"color:#ddbd83;font-family:'Droid Sans', 'Helvetica Neue', Arial, sans-serif;font-size:16px;line-height:20px;text-align:center;\">
                                        Nous vous souhaitons un bon travail avec nous !!
                                    </div>
                                    <div style=\"color:#ddbd83;font-family:'Droid Sans', 'Helvetica Neue', Arial, sans-serif;font-size:16px;line-height:20px;text-align:center;\">
                                        Nous allons commencé à vous affecter des livraisons
                                        on compte sur vous!!
                                    </div>


                                </td>
                            </tr>

                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td></tr></table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td></tr></table>
    <![endif]-->
</div>
</body>
</html>", "livreur/Emaillivreur.html.twig", "C:\\Users\\Faycal Ghozzi\\Desktop\\ProjetsMoney\\e_com_chariot\\Web\\templates\\livreur\\Emaillivreur.html.twig");
    }
}
