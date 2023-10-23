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

/* default/index.html.twig */
class __TwigTemplate_dc478212cdd306342123b4eab0d5134aed435593424b92cef0b5d7c2c915734b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DefaultController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div  style=\"margin: 2em auto; max-width: 900px;\" class=\"example-wrapper\">
    <h1 style=\"  font-size: calc(1.375rem + 1vw)\">Page de test de la fonctionnalité d'ajout des avis  ✅</h1>
    <br>
    ";
        // line 14
        if ( !twig_test_empty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "
        Liste des vendeurs disponibles dans la base de données
        <br>
  
        <div style=\"padding-left:30px ;margin-top:20px\" class=\"users\">
        <ul >
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 22
                echo "            ";
                if (twig_in_filter("VENDEUR", twig_get_attribute($this->env, $this->source, $context["user"], "getRoles", [], "method", false, false, false, 22))) {
                    // line 23
                    echo "                 <li style=\"margin-bottom:10px\">Vendeur ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 23), "html", null, true);
                    echo " : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 23), "html", null, true);
                    echo "  <code><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce", ["userId" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\">Page d'annonce</a></code></li>
            ";
                }
                // line 25
                echo "               

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "          </ul>
        <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-primary confirm\">Créer d'autres</a>

        </div>
    ";
        } else {
            // line 33
            echo "        <p>Aucun vendeur n'est disponible.</p>
        <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-primary confirm\">Register</a>
    ";
        }
        // line 36
        echo "        

   
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 36,  131 => 34,  128 => 33,  121 => 29,  118 => 28,  110 => 25,  100 => 23,  97 => 22,  93 => 21,  85 => 15,  83 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DefaultController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div  style=\"margin: 2em auto; max-width: 900px;\" class=\"example-wrapper\">
    <h1 style=\"  font-size: calc(1.375rem + 1vw)\">Page de test de la fonctionnalité d'ajout des avis  ✅</h1>
    <br>
    {% if users is not empty %}

        Liste des vendeurs disponibles dans la base de données
        <br>
  
        <div style=\"padding-left:30px ;margin-top:20px\" class=\"users\">
        <ul >
            {% for user in users %}
            {% if 'VENDEUR' in user.getRoles() %}
                 <li style=\"margin-bottom:10px\">Vendeur {{ user.id }} : {{ user.email }}  <code><a href=\"{{ path('app_annonce', {'userId': user.id}) }}\">Page d'annonce</a></code></li>
            {% endif %}
               

            {% endfor %}
          </ul>
        <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary confirm\">Créer d'autres</a>

        </div>
    {% else %}
        <p>Aucun vendeur n'est disponible.</p>
        <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary confirm\">Register</a>
    {% endif %}
        

   
</div>
{% endblock %}
", "default/index.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\default\\index.html.twig");
    }
}
