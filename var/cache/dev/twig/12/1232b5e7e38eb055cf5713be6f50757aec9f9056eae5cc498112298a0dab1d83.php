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

/* header.html.twig */
class __TwigTemplate_4c5e8f824e4b93307b1e7dae96427b06c9995bbc66613afcc2db37e150e0245b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<div class=\"header\">
    <div>
    <a href=\"#\">
        La crème de l'occasion 
                    
    </a>
    <label for=\"\">💛</label>
    </div>

 </div>  
<div class=\"nav\">
<img  src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nav.png"), "html", null, true);
        echo "\" alt=\"\">
</div>  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\">
    <div>
    <a href=\"#\">
        La crème de l'occasion 
                    
    </a>
    <label for=\"\">💛</label>
    </div>

 </div>  
<div class=\"nav\">
<img  src=\"{{asset(\"assets/images/nav.png\")}}\" alt=\"\">
</div>  ", "header.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\header.html.twig");
    }
}
