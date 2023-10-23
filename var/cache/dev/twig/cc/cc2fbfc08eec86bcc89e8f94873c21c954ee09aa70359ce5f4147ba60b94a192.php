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

/* includes/box-section.html.twig */
class __TwigTemplate_c16f428278985451fc09cb00d6bbde30acdf2d9c36ab69f76c2aa8596a7de978 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/box-section.html.twig"));

        // line 1
        echo "
<div class=\"box-section\">
  <div class=\"head\">
    <img src=\"https://izidore.com/img/icons/map-pin.svg\" alt=\"\" />
    <p class=\"title-black-light\">Challans, 85300</p>
  </div>
  <div class=\"body\">
    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/buy-section-header.png"), "html", null, true);
        echo "\" alt=\"img\">
\t <a class=\"cart-add\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new", ["userId" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\">
\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t<p>J'achète</p>
\t</a>

    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/buy-section-footer.png"), "html", null, true);
        echo "\" alt=\"img\">
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/box-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"box-section\">
  <div class=\"head\">
    <img src=\"https://izidore.com/img/icons/map-pin.svg\" alt=\"\" />
    <p class=\"title-black-light\">Challans, 85300</p>
  </div>
  <div class=\"body\">
    <img src=\"{{ asset(\"assets/images/buy-section-header.png\") }}\" alt=\"img\">
\t <a class=\"cart-add\" href=\"{{ path('app_avis_new',{'userId': userId }) }}\">
\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t<p>J'achète</p>
\t</a>

    <img src=\"{{ asset(\"assets/images/buy-section-footer.png\") }}\" alt=\"img\">
  </div>
</div>

", "includes/box-section.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\includes\\box-section.html.twig");
    }
}
