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

/* annonce.html.twig */
class __TwigTemplate_7abdaffb4b0dcc5b975b30e671620d1c3a0e4d717d07ee8bf7108d25cff483d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonce page 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/annonce.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        $this->loadTemplate("header.html.twig", "annonce.html.twig", 12)->display($context);
        // line 13
        echo "<div class=\"main\">
<div class=\"container\">
    <div class=\"left-content\">
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main-left-content.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"description-container\">
\t\t\t<p class=\"description-container__title\">Description</p>
\t\t\t<p class=\"description-container__text\">Caractéristiques du produit :Canapé avec méridienne droite L261 x H79 x P167 (cm) Hauteur de pieds 17,5 cm. 
                Hauteur têtière relevée 89 cm Fabrication italienne Cuir Elite, colori jaune Pied en métal brillant 
                Produit exposé dans notre magasin depuis maintenant 6 mois.
            </p>
            <br>
\t\t</div>
    </div>
    <div class=\"right-content\">
        ";
        // line 27
        $this->loadTemplate("includes/box-section.html.twig", "annonce.html.twig", 27)->display($context);
        // line 28
        echo "
         <div class=\"review\">
            <div class=\"profil\">
                <div class=\"picture\">
                    <img src=\"https://cdn.izidore.com/media/cache/profile_picture/6fc85d0ec6a3c7dca04ae7aee980ae12.jpg\" alt=\"\">
                </div>
                <div class=\"information\">
                    <p class=\"title-black-light p-20\">
                        ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), "html", null, true);
        echo "
                    </p>
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index", ["userId" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 38, $this->source); })())]), "html", null, true);
        echo "\" class=\"review-link\">
                     <div class=\"score\">
                        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p class=\"score__number\"> ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["average"]) || array_key_exists("average", $context) ? $context["average"] : (function () { throw new RuntimeError('Variable "average" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</p>
                        <p class=\"avis\">(";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nombreAvis"]) || array_key_exists("nombreAvis", $context) ? $context["nombreAvis"] : (function () { throw new RuntimeError('Variable "nombreAvis" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " ";
        if (((isset($context["nombreAvis"]) || array_key_exists("nombreAvis", $context) ? $context["nombreAvis"] : (function () { throw new RuntimeError('Variable "nombreAvis" does not exist.', 42, $this->source); })()) > 1)) {
            // line 43
            echo "                            avis
                            ";
        } else {
            // line 45
            echo "                            avi
                        ";
        }
        // line 46
        echo " )</p>
                      
                    </div></a>
                   
                      <a href=\"#\" class=\"localisation\">Où se trouve Username ?</a>
                </div>
            </div>
         </div>
    </div>
</div>
</div>


    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 46,  156 => 45,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  135 => 38,  130 => 36,  120 => 28,  118 => 27,  104 => 16,  99 => 13,  97 => 12,  90 => 11,  81 => 9,  76 => 8,  69 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Annonce page 
{% endblock %}

{% block stylesheets %}
    {{ parent() }} 
    <link rel=\"stylesheet\" href=\"{{asset(\"assets/css/annonce.css\")}}\">
{% endblock %}
{% block body %}
{% include 'header.html.twig' %}
<div class=\"main\">
<div class=\"container\">
    <div class=\"left-content\">
        <img src=\"{{asset(\"assets/images/main-left-content.png\")}}\" alt=\"\">
        <div class=\"description-container\">
\t\t\t<p class=\"description-container__title\">Description</p>
\t\t\t<p class=\"description-container__text\">Caractéristiques du produit :Canapé avec méridienne droite L261 x H79 x P167 (cm) Hauteur de pieds 17,5 cm. 
                Hauteur têtière relevée 89 cm Fabrication italienne Cuir Elite, colori jaune Pied en métal brillant 
                Produit exposé dans notre magasin depuis maintenant 6 mois.
            </p>
            <br>
\t\t</div>
    </div>
    <div class=\"right-content\">
        {% include 'includes/box-section.html.twig' %}

         <div class=\"review\">
            <div class=\"profil\">
                <div class=\"picture\">
                    <img src=\"https://cdn.izidore.com/media/cache/profile_picture/6fc85d0ec6a3c7dca04ae7aee980ae12.jpg\" alt=\"\">
                </div>
                <div class=\"information\">
                    <p class=\"title-black-light p-20\">
                        {{user.username}}
                    </p>
                    <a href=\"{{path('app_avis_index',{'userId':userId})}}\" class=\"review-link\">
                     <div class=\"score\">
                        <img src=\"{{asset(\"assets/images/stars.png\")}}\" alt=\"\">
                        <p class=\"score__number\"> {{average}}</p>
                        <p class=\"avis\">({{nombreAvis}} {% if nombreAvis >1 %}
                            avis
                            {% else %}
                            avi
                        {% endif %} )</p>
                      
                    </div></a>
                   
                      <a href=\"#\" class=\"localisation\">Où se trouve Username ?</a>
                </div>
            </div>
         </div>
    </div>
</div>
</div>


    
{% endblock %}", "annonce.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\annonce.html.twig");
    }
}
