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

/* includes/starRating.html.twig */
class __TwigTemplate_09a6fdff942ab7848d56ceadb5eb1f8ed4558a475db139307f6fa50061d3a171 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/starRating.html.twig"));

        // line 1
        echo "
<div
\tclass=\"rating\">
\t";
        // line 4
        $context["start"] = 5;
        // line 5
        echo "\t";
        $context["end"] = 1;
        // line 6
        echo "\t";
        $context["step"] =  -0.5;
        // line 7
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 7, $this->source); })()), (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 7, $this->source); })()), (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 7, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "\t\t<input type=\"radio\" id=\"star";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"rating\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            if (((isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 8, $this->source); })()) == $context["i"])) {
                echo " checked ";
            }
            echo "/>
\t\t<label for=\"star";
            // line 9
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"";
            if (($context["i"] === twig_round($context["i"]))) {
                echo "full";
            } else {
                echo "half";
            }
            echo "\" 
\t\t";
            // line 10
            if (($context["i"] <= (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 10, $this->source); })()))) {
                echo "style=\"color:#ffd932\" ";
            }
            echo " ></label>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/starRating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 12,  79 => 10,  69 => 9,  58 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div
\tclass=\"rating\">
\t{% set start = 5 %}
\t{% set end = 1 %}
\t{% set step = -0.5 %}
\t{% for i in range(start, end, step) %}
\t\t<input type=\"radio\" id=\"star{{i}}\" name=\"rating\" value=\"{{i}}\" {% if note == i %} checked {% endif%}/>
\t\t<label for=\"star{{i}}\" class=\"{% if i is same as (i|round) %}full{% else %}half{% endif %}\" 
\t\t{% if i <= note%}style=\"color:#ffd932\" {% endif %} ></label>
\t{% endfor %}
</div>



", "includes/starRating.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\includes\\starRating.html.twig");
    }
}
