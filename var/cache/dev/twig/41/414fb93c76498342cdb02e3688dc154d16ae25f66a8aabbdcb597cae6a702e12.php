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
         ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "             <div class=\"alert alert-success\">
                 ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
             </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                  
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 17, $this->source); })()), "filename", [], "any", false, false, false, 17)) {
            // line 18
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 18, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 100%; height: auto\">
                ";
        } else {
            // line 20
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/properties/empty.jpg", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" class=\"width: 100%; height: auto\">
                ";
        }
        // line 22
        echo "            </div>
        
            <div class=\"col-md-4\"> 
                <h1>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</h1>
                <h2>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 26, $this->source); })()), "rooms", [], "any", false, false, false, 26), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 26, $this->source); })()), "surface", [], "any", false, false, false, 26), "html", null, true);
        echo " m²</h2>
                <div class=\"text-primary\" style=\"font-size: 4rem; font-weight: bold;\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 27, $this->source); })()), "formattedPrice", [], "any", false, false, false, 27), "html", null, true);
        echo " €</div>
                <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>
                <div id=\"\"contactForm\" clas=\"mt-4\">
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstname", [], "any", false, false, false, 32), 'row');
        echo "</div>
                    <div class=\"col\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lastname", [], "any", false, false, false, 33), 'row');
        echo "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "phone", [], "any", false, false, false, 36), 'row');
        echo "</div>
                    <div class=\"col\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'row');
        echo "</div>
                </div>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'rest');
        echo "
                <div class=\"form-group\">
                    <button class=\"btn btn-primary\">Envoyer</button>
                </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class=\"container mt-4\">
       
           
        <p>
            ";
        // line 53
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true));
        echo "
        </p>
        

        <div class=\"row\">
            <div class=\"col-md-8\">
            
                <h2>Caractéristiques</h2>

                <table class=\"table table-striped\">
            
                   <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 66, $this->source); })()), "surface", [], "any", false, false, false, 66), "html", null, true);
        echo " m²</td>
                   </tr>
                   <tr>
                        <td>Pièces</td>
                        <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 70, $this->source); })()), "rooms", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 74, $this->source); })()), "bedrooms", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Etage</td>
                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 78, $this->source); })()), "floor", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 82, $this->source); })()), "heatType", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                    </tr>
                </table>         
            </div>
            <div class=\"col-md-4\">

                <h2>Spécificités</h2>
                <ul class=\"list-grou\">
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 90, $this->source); })()), "options", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 91
            echo "                    <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return array (  260 => 93,  251 => 91,  247 => 90,  236 => 82,  229 => 78,  222 => 74,  215 => 70,  208 => 66,  192 => 53,  179 => 43,  172 => 39,  167 => 37,  163 => 36,  157 => 33,  153 => 32,  148 => 30,  142 => 27,  136 => 26,  132 => 25,  127 => 22,  121 => 20,  115 => 18,  113 => 17,  108 => 14,  99 => 11,  96 => 10,  92 => 9,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}


{% block body %}
    <div class=\"jumbotron jumbotron-fluid\">
     <div class=\"container\">
         {% for message in app.flashes('success') %}
             <div class=\"alert alert-success\">
                 {{ message }}
             </div>
         {% endfor %}
                  
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
                <div id=\"\"contactForm\" clas=\"mt-4\">
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col\">{{ form_row(form.firstname) }}</div>
                    <div class=\"col\">{{ form_row(form.lastname) }}</div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">{{ form_row(form.phone) }}</div>
                    <div class=\"col\">{{ form_row(form.email) }}</div>
                </div>
                {{ form_rest(form) }}
                <div class=\"form-group\">
                    <button class=\"btn btn-primary\">Envoyer</button>
                </div>
                {{ form_end(form) }}
                </div>
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
