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

/* registration/register.html.twig */
class __TwigTemplate_b14ff33907967793ce1f7cb852f836a64a38f4fdd2349c4a631ac8458897a294 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->loadTemplate("header.html.twig", "registration/register.html.twig", 5)->display($context);
        // line 6
        echo "<br>
<section class=\"vh-100\" style=\"background-color: #eee;\">
  <div class=\"col-md-10 col-lg-6 col-xl-5 mx-auto h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div>
        <div class=\"card text-black\" style=\"border-radius: 25px;\">
          <div class=\"card-body p-md-5\">
            <div class=\"row justify-content-center\">
              <div>

                <p class=\"text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4\">Sign up</p>

                <form class=\"mx-1 mx-md-4\" method=\"POST\">
                  ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                  <select class=\"form-select mb-3\" aria-label=\"Default select example\">
                    <option selected>Vous êtes </option>
                     <option value=\"2\">Vendeur</option>

                    <option value=\"1\">Acheteur</option>
                  </select>
                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-user fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      <input type=\"text\" placeholder=\"votre nom\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"d-flex flex-row align-items-center mb-4\">
                  <i class=\"fa-solid fa-envelope fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre email"]]);
        // line 36
        echo "
                    </div>
                  </div>



                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-lock fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre mot de passe"]]);
        // line 46
        echo "
                    </div>
                  </div>



                  <div class=\"d-flex justify-content-center mx-4 mb-3 mb-lg-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg\"
                      style=\"background-color:#58b58d;border-color:#58b58d\">Register</button>
                  </div>

                  ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
                </form>


              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  110 => 46,  108 => 45,  97 => 36,  95 => 35,  76 => 19,  61 => 6,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
{% include 'header.html.twig' %}
<br>
<section class=\"vh-100\" style=\"background-color: #eee;\">
  <div class=\"col-md-10 col-lg-6 col-xl-5 mx-auto h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div>
        <div class=\"card text-black\" style=\"border-radius: 25px;\">
          <div class=\"card-body p-md-5\">
            <div class=\"row justify-content-center\">
              <div>

                <p class=\"text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4\">Sign up</p>

                <form class=\"mx-1 mx-md-4\" method=\"POST\">
                  {{ form_start(registrationForm) }}
                  <select class=\"form-select mb-3\" aria-label=\"Default select example\">
                    <option selected>Vous êtes </option>
                     <option value=\"2\">Vendeur</option>

                    <option value=\"1\">Acheteur</option>
                  </select>
                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-user fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      <input type=\"text\" placeholder=\"votre nom\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"d-flex flex-row align-items-center mb-4\">
                  <i class=\"fa-solid fa-envelope fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Votre email'}})
                      }}
                    </div>
                  </div>



                  <div class=\"d-flex flex-row align-items-center mb-4\">
                    <i class=\"fas fa-lock fa-lg me-3 fa-fw\"></i>
                    <div class=\"form-outline flex-fill mb-0\">
                      {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Votre mot de passe'}})
                      }}
                    </div>
                  </div>



                  <div class=\"d-flex justify-content-center mx-4 mb-3 mb-lg-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg\"
                      style=\"background-color:#58b58d;border-color:#58b58d\">Register</button>
                  </div>

                  {{ form_end(registrationForm) }}
                </form>


              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}", "registration/register.html.twig", "C:\\Users\\Ouissal Derraz\\OneDrive\\Documents\\entretien\\aprs soutenance\\Developpement\\symfony\\last_project\\toutou\\templates\\registration\\register.html.twig");
    }
}
