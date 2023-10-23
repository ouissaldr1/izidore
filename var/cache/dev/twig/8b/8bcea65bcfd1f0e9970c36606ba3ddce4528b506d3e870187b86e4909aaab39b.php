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

/* avis/new.html.twig */
class __TwigTemplate_ae0d2b3b01bed363bdc2fc182315d177e3d373f46a1ffd6ca58fca03cbc20894 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Avis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/annonce.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/avis.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/starRating.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/starRating.js"), "html", null, true);
        echo "\" defer></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ajouterAvis.js"), "html", null, true);
        echo "\" defer></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("header.html.twig", "avis/new.html.twig", 11)->display($context);
        // line 12
        echo "
<div class=\"main new-avis\">
  <div style=\"margin-top:200px\"class=\"container\">
    <div class=\"avis new\">
      <h2>Page de paiement</h2>
      <!-- Button trigger modal -->
      <button type=\"button\" class=\"btn btn-primary confirm js-ajouter-avis-button\" data-bs-toggle=\"modal\"
        data-bs-target=\"#staticBackdrop\">
        Bouton de confirmation d'achat
      </button>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
      aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header new\">
            <button type=\"button\" class=\"btn-close new\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body new\">
            <div class=\"flex new relative\">
              <span class=\"underline\"></span>
              <span class=\"modal-title fs-5\">Merci pour votre achat chez Izidore! 😊</span>
            </div>
            <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new", ["userId" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 37, $this->source); })())]), "html", null, true);
        echo "\" method=\"POST\">
              <div class=\"add-review flex\">
                <p>Votre feedback nous guide</p>
                <p>En évaluant le vendeur, vous nous guidez vers l'excellence.</p>
                <p>Username</p>

                ";
        // line 43
        $this->loadTemplate("includes/starRating.html.twig", "avis/new.html.twig", 43)->display(twig_array_merge($context, ["note" => 0]));
        // line 44
        echo "                <p class=\"error js-error-rating\">";
        echo twig_escape_filter($this->env, (isset($context["errorNote"]) || array_key_exists("errorNote", $context) ? $context["errorNote"] : (function () { throw new RuntimeError('Variable "errorNote" does not exist.', 44, $this->source); })()), "html", null, true);
        echo " </p>
                <textarea placeholder=\"Partagez votre expérience d'achat...\" name=\"contenu\" cols=\"45\"
                  rows=\"5\"></textarea>
                <input class=\"hidden-rating\" type=\"hidden\" name=\"note\" />


                <p class=\"appreciation\">
                  Qu'est-ce que vous appréciez le plus ? 💛
                </p>
                <div class=\"avis\">
                  <div class=\"compl new\">
                    <div class=\"compl-child\">
                      <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/communicate.png"), "html", null, true);
        echo "\" alt=\"\">
                      <p>Communication facile</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["compliment"]) || array_key_exists("compliment", $context) ? $context["compliment"] : (function () { throw new RuntimeError('Variable "compliment" does not exist.', 58, $this->source); })()), 0, [], "array", false, false, false, 58), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"compl-child\">
                      <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pay.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                      <p>Rapport qualité-prix</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["compliment"]) || array_key_exists("compliment", $context) ? $context["compliment"] : (function () { throw new RuntimeError('Variable "compliment" does not exist.', 63, $this->source); })()), 1, [], "array", false, false, false, 63), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"compl-child\">
                      <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/livraison.png"), "html", null, true);
        echo "\" alt=\"image\">
                      <p>Rapidité de la livraison</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["compliment"]) || array_key_exists("compliment", $context) ? $context["compliment"] : (function () { throw new RuntimeError('Variable "compliment" does not exist.', 68, $this->source); })()), 2, [], "array", false, false, false, 68), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"compl-child\">
                      <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/quality-check.png"), "html", null, true);
        echo "\" alt=\"image\">
                      <p>Conformité aux attentes</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["compliment"]) || array_key_exists("compliment", $context) ? $context["compliment"] : (function () { throw new RuntimeError('Variable "compliment" does not exist.', 73, $this->source); })()), 3, [], "array", false, false, false, 73), "html", null, true);
        echo "\">
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"modal-footer new\">
                <button type=\"submit\" data-bs-dismiss=\"modal\" class=\"btn btn-primary confirm\">
                  Donner mon avis
                </button>
              </div>
          </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 73,  211 => 71,  205 => 68,  200 => 66,  194 => 63,  189 => 61,  183 => 58,  178 => 56,  162 => 44,  160 => 43,  151 => 37,  124 => 12,  115 => 11,  105 => 9,  100 => 8,  93 => 7,  85 => 6,  81 => 5,  77 => 4,  73 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}New Avis{% endblock %} {% block
stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/annonce.css\") }}\">
<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/avis.css\") }}\">
<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/starRating.css\") }}\"> {% endblock %}
{% block javascripts %}
<script src=\"{{asset(\"assets/js/starRating.js\")}}\" defer></script>
<script src=\"{{asset(\"assets/js/ajouterAvis.js\")}}\" defer></script>

{% endblock %} {% block body %} {% include 'header.html.twig' %}

<div class=\"main new-avis\">
  <div style=\"margin-top:200px\"class=\"container\">
    <div class=\"avis new\">
      <h2>Page de paiement</h2>
      <!-- Button trigger modal -->
      <button type=\"button\" class=\"btn btn-primary confirm js-ajouter-avis-button\" data-bs-toggle=\"modal\"
        data-bs-target=\"#staticBackdrop\">
        Bouton de confirmation d'achat
      </button>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
      aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header new\">
            <button type=\"button\" class=\"btn-close new\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body new\">
            <div class=\"flex new relative\">
              <span class=\"underline\"></span>
              <span class=\"modal-title fs-5\">Merci pour votre achat chez Izidore! 😊</span>
            </div>
            <form action=\"{{path('app_avis_new',{'userId':userId})}}\" method=\"POST\">
              <div class=\"add-review flex\">
                <p>Votre feedback nous guide</p>
                <p>En évaluant le vendeur, vous nous guidez vers l'excellence.</p>
                <p>Username</p>

                {% include 'includes/starRating.html.twig' with {'note': 0} %}
                <p class=\"error js-error-rating\">{{ errorNote }} </p>
                <textarea placeholder=\"Partagez votre expérience d'achat...\" name=\"contenu\" cols=\"45\"
                  rows=\"5\"></textarea>
                <input class=\"hidden-rating\" type=\"hidden\" name=\"note\" />


                <p class=\"appreciation\">
                  Qu'est-ce que vous appréciez le plus ? 💛
                </p>
                <div class=\"avis\">
                  <div class=\"compl new\">
                    <div class=\"compl-child\">
                      <img src=\"{{ asset(\"assets/images/communicate.png\") }}\" alt=\"\">
                      <p>Communication facile</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"{{compliment[0]}}\">
                    </div>
                    <div class=\"compl-child\">
                      <img src=\"{{ asset(\"assets/images/pay.jpg\") }}\" alt=\"image\">
                      <p>Rapport qualité-prix</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"{{compliment[1]}}\">
                    </div>
                    <div class=\"compl-child\">
                      <img src=\"{{ asset(\"assets/images/livraison.png\") }}\" alt=\"image\">
                      <p>Rapidité de la livraison</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"{{compliment[2]}}\">
                    </div>
                    <div class=\"compl-child\">
                      <img src=\"{{ asset(\"assets/images/quality-check.png\") }}\" alt=\"image\">
                      <p>Conformité aux attentes</p>
                      <input type=\"radio\" class=\"hidden\" name=\"compliment\" value=\"{{compliment[3]}}\">
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"modal-footer new\">
                <button type=\"submit\" data-bs-dismiss=\"modal\" class=\"btn btn-primary confirm\">
                  Donner mon avis
                </button>
              </div>
          </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  {% endblock %}", "avis/new.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\avis\\new.html.twig");
    }
}
