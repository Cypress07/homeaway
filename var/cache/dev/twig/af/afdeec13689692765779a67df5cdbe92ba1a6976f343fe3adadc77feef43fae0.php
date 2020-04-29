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

/* emails/contact.html.twig */
class __TwigTemplate_ba79ea6c389eea896fbf4bc0e3ede1fcc0fddadabde79d3bd5d1f020f0cdc93b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <title> </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }
        .ReadMsgBody {
            width: 100%;
        }
        .ExternalClass {
            width: 100%;
        }
        .ExternalClass * {
            line-height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        table,
        td {
            border-collapse: collapse;

        }
        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <!--[if !mso]><!-->
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            table.full-width-mobile {
                width: 100% !important;
            }
            td.full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>
<body>
<h1>Demande de contact</h1>
<p>
    Une personne souhaiterait avoir des renseignements à propos de ce bien =>
    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("property.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 71, $this->source); })()), "property", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 71, $this->source); })()), "property", [], "any", false, false, false, 71), "slug", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 71, $this->source); })()), "property", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), "html", null, true);
        echo "</a>
</p>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:collapse;border-spacing:0px;\">
    <tbody>
    <tr>
        <td>Titre du bien : ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 76, $this->source); })()), "property", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Prénom : ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 79, $this->source); })()), "firstname", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Nom : ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 82, $this->source); })()), "lastname", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Téléphone : ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 85, $this->source); })()), "phone", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Email : ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Message : ";
        // line 91
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 91, $this->source); })()), "message", [], "any", false, false, false, 91), "html", null, true));
        echo "</td>
    </tr>
    </tbody>
</table>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 91,  149 => 88,  143 => 85,  137 => 82,  131 => 79,  125 => 76,  115 => 71,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <title> </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }
        .ReadMsgBody {
            width: 100%;
        }
        .ExternalClass {
            width: 100%;
        }
        .ExternalClass * {
            line-height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        table,
        td {
            border-collapse: collapse;

        }
        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <!--[if !mso]><!-->
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            table.full-width-mobile {
                width: 100% !important;
            }
            td.full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>
<body>
<h1>Demande de contact</h1>
<p>
    Une personne souhaiterait avoir des renseignements à propos de ce bien =>
    <a href=\"{{ url('property.show', {id: contact.property.id, slug: contact.property.slug }) }}\">{{ contact.property.title }}</a>
</p>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:collapse;border-spacing:0px;\">
    <tbody>
    <tr>
        <td>Titre du bien : {{ contact.property.title }}</td>
    </tr>
    <tr>
        <td>Prénom : {{ contact.firstname }}</td>
    </tr>
    <tr>
        <td>Nom : {{ contact.lastname }}</td>
    </tr>
    <tr>
        <td>Téléphone : {{ contact.phone }}</td>
    </tr>
    <tr>
        <td>Email : {{ contact.email }}</td>
    </tr>
    <tr>
        <td>Message : {{ contact.message | nl2br }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
", "emails/contact.html.twig", "C:\\workspace\\homeaway\\templates\\emails\\contact.html.twig");
    }
}
