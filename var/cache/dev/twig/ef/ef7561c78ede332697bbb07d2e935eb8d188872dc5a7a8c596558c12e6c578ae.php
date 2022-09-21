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

/* security/register.html.twig */
class __TwigTemplate_ef472e2bf8376624704346fd0c070014a7a921b165cc841ba2af0af654e6e505 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->loadTemplate("security/login.html.twig", "security/register.html.twig", 1);
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
        echo "    <h6 class=\"font-weight-light\">Ajouter un nouvel administrateur !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"form\">
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
            <label for=\"exampleInputUsername1\">Nom d'utilisateur</label>
            <input type=\"text\" required class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Entrer votre nom d'utilisateur...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Adresse Email</label>
            <input type=\"email\" class=\"form-control\" required name=\"email\" id=\"email\" placeholder=\"exemple@gmail.com...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"mot de passe...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputConfirmPassword1\">Confirmer le mot de passe</label>
            <input type=\"password\" class=\"form-control\" name=\"confirmPassword\" id=\"confirmPassword\" placeholder=\"Confirmer le mot de passe...\">
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnRegister\">Enregistrer</button>
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\" style=\"color:white;\">Accueil</a>
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script>
        \$('#form').on('submit', function (e) {
            e.preventDefault();
            var url = \$(\"#form\").attr('action');
            var data = \$(this).serialize();
            \$.ajax({
                url: url,
                data: data,
                type: 'post',
                beforeSend: function () {
                    \$(\"#message\").html(\"\");
                    \$(\"#btnRegister\").text(\"Patientez ...\").prop({disabled: true});
                },
                complete: function () {
                    \$('#btnRegister').text(\"Connexion\").prop({disabled: false});
                },
                success: function (data) {
                    if(data.status === 1){
                        \$(\"#message\").html(\"<div class='alert alert-success'>\" + data.mes + \"</div>\");
                        setTimeout(function () {
                            window.location.assign(data.url);
                        }, 2000);
                    }else{
                        \$(\"#message\").html(\"<div class='alert alert-danger'>\" + data.mes + \"</div>\");
                    }
                },
                error: function () {
                    \$(\"#message\").html(\"<div class='alert alert-danger'>Une erreur est survenue, reessayez !</div>\");
                }
            })
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  131 => 40,  116 => 34,  108 => 29,  90 => 13,  84 => 11,  81 => 10,  75 => 8,  73 => 7,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/login.html.twig' %}


{% block body %}
    <h6 class=\"font-weight-light\">Ajouter un nouvel administrateur !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"form\">
        {% if error is not null %}
            <div class=\"alert alert-danger\">{{ error }}</div>
        {% endif %}
        {% if success is not null %}
            <div class=\"alert alert-primary\">{{ success }}</div>
        {% endif %}
        <div class=\"form-group\">
            <label for=\"exampleInputUsername1\">Nom d'utilisateur</label>
            <input type=\"text\" required class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Entrer votre nom d'utilisateur...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Adresse Email</label>
            <input type=\"email\" class=\"form-control\" required name=\"email\" id=\"email\" placeholder=\"exemple@gmail.com...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"mot de passe...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputConfirmPassword1\">Confirmer le mot de passe</label>
            <input type=\"password\" class=\"form-control\" name=\"confirmPassword\" id=\"confirmPassword\" placeholder=\"Confirmer le mot de passe...\">
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnRegister\">Enregistrer</button>
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"{{ path('1xbet') }}\" style=\"color:white;\">Accueil</a>
            </button>
        </div>
    </form>
{% endblock %}

{% block javascripts %}
    <script>
        \$('#form').on('submit', function (e) {
            e.preventDefault();
            var url = \$(\"#form\").attr('action');
            var data = \$(this).serialize();
            \$.ajax({
                url: url,
                data: data,
                type: 'post',
                beforeSend: function () {
                    \$(\"#message\").html(\"\");
                    \$(\"#btnRegister\").text(\"Patientez ...\").prop({disabled: true});
                },
                complete: function () {
                    \$('#btnRegister').text(\"Connexion\").prop({disabled: false});
                },
                success: function (data) {
                    if(data.status === 1){
                        \$(\"#message\").html(\"<div class='alert alert-success'>\" + data.mes + \"</div>\");
                        setTimeout(function () {
                            window.location.assign(data.url);
                        }, 2000);
                    }else{
                        \$(\"#message\").html(\"<div class='alert alert-danger'>\" + data.mes + \"</div>\");
                    }
                },
                error: function () {
                    \$(\"#message\").html(\"<div class='alert alert-danger'>Une erreur est survenue, reessayez !</div>\");
                }
            })
        });
    </script>
{% endblock %}", "security/register.html.twig", "C:\\laragon\\www\\D555\\templates\\security\\register.html.twig");
    }
}
