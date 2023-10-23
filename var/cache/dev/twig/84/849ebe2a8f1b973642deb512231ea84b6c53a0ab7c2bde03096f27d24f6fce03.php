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

/* avis/avis.html.twig */
class __TwigTemplate_1719f0a78606143d116501fc80eb5d91af36d23fa60635673b0eeb8c61d5bf7a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/avis.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/avis.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Avis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/annonce.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/avis.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/starsWithoutHover.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        $this->loadTemplate("header.html.twig", "avis/avis.html.twig", 14)->display($context);
        // line 15
        echo "<div class=\"main\">
    <div class=\"container\">
        <div class=\"right-content avis-page\">

            <div class=\"box-section\">
                <div class=\"head\">
                    <img src=\"https://izidore.com/img/icons/map-pin.svg\" alt=\"\" />
                    <p class=\"title-black-light\">Challans, 85300</p>
                </div>
                <div class=\"body\">
                    <div class=\"profil\">
                        <div class=\"picture\">
                            <img src=\"https://cdn.izidore.com/media/cache/profile_picture/6fc85d0ec6a3c7dca04ae7aee980ae12.jpg\" alt=\"\">

                        </div>

                        <div class=\"information\">
                            <p class=\"title-black-light p-20\">
                                ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "username", [], "any", false, false, false, 33), "html", null, true);
        echo "
                            </p>
                                <a href=\"\" class=\"review-link\">
                                <div class=\"score\">
                                    ";
        // line 37
        $this->loadTemplate("includes/starRating.html.twig", "avis/avis.html.twig", 37)->display(twig_array_merge($context, ["note" => (isset($context["average"]) || array_key_exists("average", $context) ? $context["average"] : (function () { throw new RuntimeError('Variable "average" does not exist.', 37, $this->source); })())]));
        // line 38
        echo "                                    <p class=\"semi-bold\">";
        echo twig_escape_filter($this->env, (isset($context["average"]) || array_key_exists("average", $context) ? $context["average"] : (function () { throw new RuntimeError('Variable "average" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</p>
                                    <p class=\"avis\">(";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["nombreAvis"]) || array_key_exists("nombreAvis", $context) ? $context["nombreAvis"] : (function () { throw new RuntimeError('Variable "nombreAvis" does not exist.', 39, $this->source); })()), "html", null, true);
        echo " ";
        if (((isset($context["nombreAvis"]) || array_key_exists("nombreAvis", $context) ? $context["nombreAvis"] : (function () { throw new RuntimeError('Variable "nombreAvis" does not exist.', 39, $this->source); })()) > 1)) {
            // line 40
            echo "                                        avis
                                        ";
        } else {
            // line 42
            echo "                                        avi
                                    ";
        }
        // line 43
        echo " )</p>
                                
                                </div>
                                </a>
                            <span class=\"evaluation-content\">75 annonces publiées</span>

                         </div>
                    </div>

                    <br>

                <div class=\"info-vendeur \">
                    <p classe=\"title\">Promotion</p>
                        <div class=\"details\">
                            <i class=\"fa-solid fa-tags\"></i>
                            <p>\t\t\t\t-10% à partir du 2ème article
                            </p>
                        </div>
                </div>
                <div class=\"info-vendeur \">
                    <p classe=\"title\">Meubles descendus</p>
                        <div class=\"details\">
                        <i class=\"fa-solid fa-arrow-down\"></i>
                            <p>\tUser
                    s'engage à descendre ses meubles au rez-de-chaussée !
                                        </p>
                        </div>
                </div>
                <div class=\"info-vendeur \">
                    <p classe=\"title\">Promotion</p>
                        <div class=\"details\">
                        <i class=\"fa-regular fa-calendar-days\"></i>
                        <div class=\"calender\">
                        <p>Semaine: <strong>de 8h à 20h</strong></p>
                        <p>Weekend: <strong>de 8h à 20h</strong></p>
                </div>
                        
                        
            </div>
            <div class=\"primary-button\">Entrer en contact</div>
                </div>
                

                </div>

            </div>
        </div>
        <div class=\"avis-container\">
        <div class=\"avis\">
                <h2 class=\"bold\">Compliments reçus (100)</h2>
                <div class=\"compl\">
                    <div class=\"compl-child\">
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/communicate.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Communication facile</p>
                        <div class=\"compl-chil-number\">35</div>
                    </div>
                    <div class=\"compl-child\">
                        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pay.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                        <p>Rapport qualité-prix</p>
                        <div class=\"compl-chil-number\">40</div>

                    </div>
                    <div class=\"compl-child\">
                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/livraison.png"), "html", null, true);
        echo "\" alt=\"image\">
                        <p>Rapidité de la livraison</p>
                        <div class=\"compl-chil-number\">10</div>

                    </div>
                    <div class=\"compl-child\">
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/quality-check.png"), "html", null, true);
        echo "\" alt=\"image\">
                        <p>Conformité aux attentes</p>
                      <div class=\"compl-chil-number\">25</div>
                       
                 </div>

            </div>
            
                <h2 class=\"bold\">Avis et commentaires</h2>
                <div class=\"avis-resume\">
                    <div class=\"avis-resume-chiffre\">
                        <h1>";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["average"]) || array_key_exists("average", $context) ? $context["average"] : (function () { throw new RuntimeError('Variable "average" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "</h1>
                        <div class=\"stars\">";
        // line 124
        $this->loadTemplate("includes/starRating.html.twig", "avis/avis.html.twig", 124)->display(twig_array_merge($context, ["note" => (isset($context["average"]) || array_key_exists("average", $context) ? $context["average"] : (function () { throw new RuntimeError('Variable "average" does not exist.', 124, $this->source); })())]));
        echo "</div>
                        <p>(";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["nombreAvis"]) || array_key_exists("nombreAvis", $context) ? $context["nombreAvis"] : (function () { throw new RuntimeError('Variable "nombreAvis" does not exist.', 125, $this->source); })()), "html", null, true);
        echo " ";
        if (((isset($context["nombreAvis"]) || array_key_exists("nombreAvis", $context) ? $context["nombreAvis"] : (function () { throw new RuntimeError('Variable "nombreAvis" does not exist.', 125, $this->source); })()) > 1)) {
            // line 126
            echo "                            avis
                            ";
        } else {
            // line 128
            echo "                            avi
                        ";
        }
        // line 129
        echo " )</p>
                    </div>
                    <div class=\"avis-resume-progress_bar\">

                    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 133, $this->source); })())) - 1), 0));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 134
            echo "                        <div class=\"flex\">
                          <p class=\"number\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 135, $this->source); })()), $context["index"], [], "array", false, false, false, 135), "html", null, true);
            echo "</p>
                            <div class=\"progress\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <div class=\"progress-bar\" style=\"width: ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pourcentages"]) || array_key_exists("pourcentages", $context) ? $context["pourcentages"] : (function () { throw new RuntimeError('Variable "pourcentages" does not exist.', 137, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 137, $this->source); })()), $context["index"], [], "array", false, false, false, 137), [], "array", false, false, false, 137), "html", null, true);
            echo "%\"></div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                       
                      
                    
                        
                    
                            
                   
                           
            
                    </div>

                </div>
        <br>
                ";
        // line 155
        echo "                <div class=\"evaluations\">
                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 156, $this->source); })())));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 157
            echo "                            <div class=\"evaluations-child\">
                    <div class=\"profil user\">
                        <div class=\"picture user\">
                            <img src=\"https://cdn.izidore.com/media/cache/profile_picture/6fc85d0ec6a3c7dca04ae7aee980ae12.jpg\" alt=\"\">

                        </div>

                        <div class=\"information\">
                            <p class=\"title-black-light p-20 acheteur\">
                                ";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avi"], "acheteurField", [], "any", false, false, false, 166), "username", [], "any", false, false, false, 166), "html", null, true);
            echo "
                            </p>
                            <div  class=\"review-link\">
                                <div class=\"score\">
                                   ";
            // line 170
            $this->loadTemplate("includes/starRating.html.twig", "avis/avis.html.twig", 170)->display(twig_array_merge($context, ["note" => twig_get_attribute($this->env, $this->source, $context["avi"], "note", [], "any", false, false, false, 170)]));
            // line 171
            echo "
                                
                                </div>
                            </div>
                             <span class=\"evaluation-content\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "contenu", [], "any", false, false, false, 175), "html", null, true);
            echo " </span>
                        </div>
                    </div>
                    <span class=\"creation-date\">";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "dateCreation", [], "any", false, false, false, 178), "H:i, d-m-Y"), "html", null, true);
            echo "</span>
                  </div>
                  <div class=\"devider\"></div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                    </div>
                ";
        // line 184
        echo "


               


    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 193
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 194
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/starRating.js"), "html", null, true);
        echo "\" defer></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 194,  398 => 193,  383 => 184,  380 => 182,  362 => 178,  356 => 175,  350 => 171,  348 => 170,  341 => 166,  330 => 157,  313 => 156,  310 => 155,  295 => 141,  285 => 137,  280 => 135,  277 => 134,  273 => 133,  267 => 129,  263 => 128,  259 => 126,  255 => 125,  251 => 124,  247 => 123,  233 => 112,  224 => 106,  215 => 100,  207 => 95,  153 => 43,  149 => 42,  145 => 40,  141 => 39,  136 => 38,  134 => 37,  127 => 33,  107 => 15,  105 => 14,  98 => 13,  88 => 9,  84 => 8,  80 => 7,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avis{% endblock %}

{% block stylesheets %}
    {{ parent() }} 
    <link rel=\"stylesheet\" href=\"{{asset(\"assets/css/annonce.css\")}}\">
    <link rel=\"stylesheet\" href=\"{{asset(\"assets/css/avis.css\")}}\">
    <link rel=\"stylesheet\" href=\"{{asset(\"assets/css/starsWithoutHover.css\")}}\">

{% endblock %}

{% block body %}
{% include 'header.html.twig' %}
<div class=\"main\">
    <div class=\"container\">
        <div class=\"right-content avis-page\">

            <div class=\"box-section\">
                <div class=\"head\">
                    <img src=\"https://izidore.com/img/icons/map-pin.svg\" alt=\"\" />
                    <p class=\"title-black-light\">Challans, 85300</p>
                </div>
                <div class=\"body\">
                    <div class=\"profil\">
                        <div class=\"picture\">
                            <img src=\"https://cdn.izidore.com/media/cache/profile_picture/6fc85d0ec6a3c7dca04ae7aee980ae12.jpg\" alt=\"\">

                        </div>

                        <div class=\"information\">
                            <p class=\"title-black-light p-20\">
                                {{user.username}}
                            </p>
                                <a href=\"\" class=\"review-link\">
                                <div class=\"score\">
                                    {% include 'includes/starRating.html.twig' with {'note': average} %}
                                    <p class=\"semi-bold\">{{average}}</p>
                                    <p class=\"avis\">({{nombreAvis}} {% if nombreAvis >1 %}
                                        avis
                                        {% else %}
                                        avi
                                    {% endif %} )</p>
                                
                                </div>
                                </a>
                            <span class=\"evaluation-content\">75 annonces publiées</span>

                         </div>
                    </div>

                    <br>

                <div class=\"info-vendeur \">
                    <p classe=\"title\">Promotion</p>
                        <div class=\"details\">
                            <i class=\"fa-solid fa-tags\"></i>
                            <p>\t\t\t\t-10% à partir du 2ème article
                            </p>
                        </div>
                </div>
                <div class=\"info-vendeur \">
                    <p classe=\"title\">Meubles descendus</p>
                        <div class=\"details\">
                        <i class=\"fa-solid fa-arrow-down\"></i>
                            <p>\tUser
                    s'engage à descendre ses meubles au rez-de-chaussée !
                                        </p>
                        </div>
                </div>
                <div class=\"info-vendeur \">
                    <p classe=\"title\">Promotion</p>
                        <div class=\"details\">
                        <i class=\"fa-regular fa-calendar-days\"></i>
                        <div class=\"calender\">
                        <p>Semaine: <strong>de 8h à 20h</strong></p>
                        <p>Weekend: <strong>de 8h à 20h</strong></p>
                </div>
                        
                        
            </div>
            <div class=\"primary-button\">Entrer en contact</div>
                </div>
                

                </div>

            </div>
        </div>
        <div class=\"avis-container\">
        <div class=\"avis\">
                <h2 class=\"bold\">Compliments reçus (100)</h2>
                <div class=\"compl\">
                    <div class=\"compl-child\">
                        <img src=\"{{asset(\"assets/images/communicate.png\")}}\" alt=\"\">
                        <p>Communication facile</p>
                        <div class=\"compl-chil-number\">35</div>
                    </div>
                    <div class=\"compl-child\">
                        <img src=\"{{asset(\"assets/images/pay.jpg\")}}\" alt=\"image\">
                        <p>Rapport qualité-prix</p>
                        <div class=\"compl-chil-number\">40</div>

                    </div>
                    <div class=\"compl-child\">
                        <img src=\"{{asset(\"assets/images/livraison.png\")}}\" alt=\"image\">
                        <p>Rapidité de la livraison</p>
                        <div class=\"compl-chil-number\">10</div>

                    </div>
                    <div class=\"compl-child\">
                        <img src=\"{{asset(\"assets/images/quality-check.png\")}}\" alt=\"image\">
                        <p>Conformité aux attentes</p>
                      <div class=\"compl-chil-number\">25</div>
                       
                 </div>

            </div>
            
                <h2 class=\"bold\">Avis et commentaires</h2>
                <div class=\"avis-resume\">
                    <div class=\"avis-resume-chiffre\">
                        <h1>{{average}}</h1>
                        <div class=\"stars\">{% include 'includes/starRating.html.twig' with {'note': average} %}</div>
                        <p>({{nombreAvis}} {% if nombreAvis >1 %}
                            avis
                            {% else %}
                            avi
                        {% endif %} )</p>
                    </div>
                    <div class=\"avis-resume-progress_bar\">

                    {% for index in (notes|length - 1)..0 %}
                        <div class=\"flex\">
                          <p class=\"number\">{{notes[index]}}</p>
                            <div class=\"progress\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <div class=\"progress-bar\" style=\"width: {{ pourcentages[notes[index]] }}%\"></div>
                            </div>
                        </div>
                    {% endfor %}
                       
                      
                    
                        
                    
                            
                   
                           
            
                    </div>

                </div>
        <br>
                {# boucle sur les avis reçus #}
                <div class=\"evaluations\">
                    {% for avi  in avis | reverse  %}
                            <div class=\"evaluations-child\">
                    <div class=\"profil user\">
                        <div class=\"picture user\">
                            <img src=\"https://cdn.izidore.com/media/cache/profile_picture/6fc85d0ec6a3c7dca04ae7aee980ae12.jpg\" alt=\"\">

                        </div>

                        <div class=\"information\">
                            <p class=\"title-black-light p-20 acheteur\">
                                {{avi.acheteurField.username}}
                            </p>
                            <div  class=\"review-link\">
                                <div class=\"score\">
                                   {% include 'includes/starRating.html.twig' with {'note': avi.note } %}

                                
                                </div>
                            </div>
                             <span class=\"evaluation-content\">{{avi.contenu}} </span>
                        </div>
                    </div>
                    <span class=\"creation-date\">{{avi.dateCreation|date('H:i, d-m-Y') }}</span>
                  </div>
                  <div class=\"devider\"></div>
                {% endfor %}
                    </div>
                {# end boucle #}



               


    </div>
</div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{asset(\"assets/js/starRating.js\")}}\" defer></script>
{% endblock %}

   
", "avis/avis.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\avis\\avis.html.twig");
    }
}
