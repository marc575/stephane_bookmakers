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

/* security/login.html.twig */
class __TwigTemplate_9ba3d2f8fa9d5cdf04215f154e4b7d8e6117be12008fa4da3c91b6c800584807 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Authentification</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/base/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logoSetphProno.png"), "html", null, true);
        echo "\" />
</head>

<body>
<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
            <div class=\"row w-100 mx-0\">
                <div class=\"col-lg-4 mx-auto\">
                    <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                        <div class=\"brand-logo\">
                            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\">
                        </div>
                        <h4>Code Promo Bonus D555</h4>
                        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/base/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- inject:js -->
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/template.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "                            <h6 class=\"font-weight-light\">Saisir vos paramètres pour voir les coupons.</h6>
                            <form class=\"pt-3\" method=\"post\">
                                ";
        // line 35
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 38
        echo "                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-lg\" id=\"email\" name=\"email\" required placeholder=\"Entrer votre email\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control form-control-lg\" id=\"password\" name=\"password\" required placeholder=\"Entrer votre mot de passe\">
                                </div>
                                <div class=\"mt-3\">
                                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">Se Connecter</button>
                                </div>
                            </form>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  171 => 45,  162 => 38,  156 => 36,  154 => 35,  150 => 33,  140 => 32,  124 => 65,  120 => 64,  116 => 63,  109 => 60,  107 => 59,  95 => 49,  93 => 32,  87 => 29,  73 => 18,  68 => 16,  60 => 11,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Authentification</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('asset/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/vendors/base/vendor.bundle.base.css') }}\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('asset/css/style.css') }}\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset('asset/images/logoSetphProno.png') }}\" />
</head>

<body>
<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
            <div class=\"row w-100 mx-0\">
                <div class=\"col-lg-4 mx-auto\">
                    <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                        <div class=\"brand-logo\">
                            <img src=\"{{ asset('asset/images/logo.svg') }}\" alt=\"logo\">
                        </div>
                        <h4>Code Promo Bonus D555</h4>
                        {% block body %}
                            <h6 class=\"font-weight-light\">Saisir vos paramètres pour voir les coupons.</h6>
                            <form class=\"pt-3\" method=\"post\">
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-lg\" id=\"email\" name=\"email\" required placeholder=\"Entrer votre email\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control form-control-lg\" id=\"password\" name=\"password\" required placeholder=\"Entrer votre mot de passe\">
                                </div>
                                <div class=\"mt-3\">
                                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">Se Connecter</button>
                                </div>
                            </form>
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
{% block javascripts %} {% endblock %}
<script src=\"{{ asset('asset/vendors/base/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->
<!-- inject:js -->
<script src=\"{{ asset('asset/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('asset/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('asset/js/template.js') }}\"></script>
<!-- endinject -->
</body>

</html>
", "security/login.html.twig", "C:\\laragon\\www\\D555\\templates\\security\\login.html.twig");
    }
}
