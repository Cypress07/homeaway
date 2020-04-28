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

/* property/show.html.twig */
class __TwigTemplate_081171a55bb70d1a5d7db93ee4a17f53d691d68d440552feea32ede24492d1e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"jumbotron jumbotron-fluid\">
     <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 12, $this->source); })()), "filename", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 13, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 100%; height: auto\">
                ";
        } else {
            // line 15
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/properties/empty.jpg", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" class=\"width: 100%; height: auto\">
                ";
        }
        // line 17
        echo "           </div>
        
            <div class=\"col-md-4\"> 
                <h1>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>
                <h2>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 21, $this->source); })()), "rooms", [], "any", false, false, false, 21), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 21, $this->source); })()), "surface", [], "any", false, false, false, 21), "html", null, true);
        echo " m²</h2>
                <div class=\"text-primary\" style=\"font-size: 4rem; font-weight: bold;\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 22, $this->source); })()), "formattedPrice", [], "any", false, false, false, 22), "html", null, true);
        echo " €</div>
                <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>     
            </div>
        </div>
    </div>
    </div>
    <div class=\"container mt-4\">
       
           
        <p>
            ";
        // line 32
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true));
        echo "
        </p>
        

        <div class=\"row\">
            <div class=\"col-md-8\">
            
                <h2>Caractéristiques</h2>

                <table class=\"table table-striped\">
            
                   <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 45, $this->source); })()), "surface", [], "any", false, false, false, 45), "html", null, true);
        echo " m²</td>
                   </tr>
                   <tr>
                        <td>Pièces</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 49, $this->source); })()), "rooms", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 53, $this->source); })()), "bedrooms", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Etage</td>
                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 57, $this->source); })()), "floor", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 61, $this->source); })()), "heatType", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                    </tr>
                </table>         
            </div>
            <div class=\"col-md-4\">

                <h2>Spécificités</h2>
                <ul class=\"list-grou\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 69, $this->source); })()), "options", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 70
            echo "                    <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </ul>
            </div>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 72,  196 => 70,  192 => 69,  181 => 61,  174 => 57,  167 => 53,  160 => 49,  153 => 45,  137 => 32,  124 => 22,  118 => 21,  114 => 20,  109 => 17,  103 => 15,  97 => 13,  95 => 12,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}


{% block body %}
    <div class=\"jumbotron jumbotron-fluid\">
     <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-8\">
                {% if property.filename %}
                    <img src=\"{{ vich_uploader_asset(property, 'imageFile')  | imagine_filter('medium') }}\" class=\"card-img-top\" style=\"width: 100%; height: auto\">
                {% else %}
                    <img src=\"{{ '/images/properties/empty.jpg'  | imagine_filter('medium') }}\" alt=\"card-img-top\" class=\"width: 100%; height: auto\">
                {% endif %}
           </div>
        
            <div class=\"col-md-4\"> 
                <h1>{{ property.title }}</h1>
                <h2>{{ property.rooms }} pièces - {{ property.surface }} m²</h2>
                <div class=\"text-primary\" style=\"font-size: 4rem; font-weight: bold;\">{{ property.formattedPrice }} €</div>
                <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>     
            </div>
        </div>
    </div>
    </div>
    <div class=\"container mt-4\">
       
           
        <p>
            {{ property.description | nl2br }}
        </p>
        

        <div class=\"row\">
            <div class=\"col-md-8\">
            
                <h2>Caractéristiques</h2>

                <table class=\"table table-striped\">
            
                   <tr>
                        <td>Surface habitable</td>
                        <td>{{ property.surface }} m²</td>
                   </tr>
                   <tr>
                        <td>Pièces</td>
                        <td>{{ property.rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ property.bedrooms }}</td>
                   </tr>
                   <tr>
                        <td>Etage</td>
                        <td>{{ property.floor }}</td>
                   </tr>
                   <tr>
                        <td>Chauffage</td>
                        <td>{{ property.heatType }}</td>
                    </tr>
                </table>         
            </div>
            <div class=\"col-md-4\">

                <h2>Spécificités</h2>
                <ul class=\"list-grou\">
                    {%  for option in property.options %}
                    <li class=\"list-group-item\">{{  option.name }}</li>
                    {% endfor %}
                </ul>
            </div>

        </div>

    </div>

{% endblock %}


", "property/show.html.twig", "C:\\workspace\\homeaway\\templates\\property\\show.html.twig");
    }
}
