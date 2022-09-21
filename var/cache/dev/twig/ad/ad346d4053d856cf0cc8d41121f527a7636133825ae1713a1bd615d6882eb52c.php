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

/* security/reset_password.html.twig */
class __TwigTemplate_425b8923d6f83aecf7a87d5db60dd51c076802f567aafeba28b555892a6bf058 extends Template
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
        return "security/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("security/login.html.twig", "security/reset_password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h6 class=\"font-weight-light\">Changer votre mot de passe.</h6>
    <form class=\"pt-3\" method=\"post\">
        ";
        // line 7
        if ( !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "        ";
        if ( !(null === (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "            <div class=\"alert alert-primary\">";
            echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control form-control-lg\" id=\"password\" name=\"password\" required placeholder=\"Mot de passe actuel\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control form-control-lg\" id=\"newPassword\" name=\"newPassword\" required placeholder=\"Nouveau mot de passe\">
        </div>
        <div class=\"mt-3\">
            <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">Modifier</button>
        </div>
        <br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\" style=\"color:white;\">Accueil</a>
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  98 => 20,  89 => 13,  83 => 11,  80 => 10,  74 => 8,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/login.html.twig' %}


{% block body %}
    <h6 class=\"font-weight-light\">Changer votre mot de passe.</h6>
    <form class=\"pt-3\" method=\"post\">
        {% if error is not null %}
            <div class=\"alert alert-danger\">{{ error }}</div>
        {% endif %}
        {% if success is not null %}
            <div class=\"alert alert-primary\">{{ success }}</div>
        {% endif %}
        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control form-control-lg\" id=\"password\" name=\"password\" required placeholder=\"Mot de passe actuel\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control form-control-lg\" id=\"newPassword\" name=\"newPassword\" required placeholder=\"Nouveau mot de passe\">
        </div>
        <div class=\"mt-3\">
            <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">Modifier</button>
        </div>
        <br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"{{ path('1xbet') }}\" style=\"color:white;\">Accueil</a>
            </button>
        </div>
    </form>
{% endblock %}", "security/reset_password.html.twig", "C:\\laragon\\www\\D555\\templates\\security\\reset_password.html.twig");
    }
}
