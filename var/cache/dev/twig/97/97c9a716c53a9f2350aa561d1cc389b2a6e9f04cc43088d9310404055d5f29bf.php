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

/* base.html.twig */
class __TwigTemplate_e205d81826005fbf1bcb23bee86d79bb38d77ec98501c3b1d7eb56c79607c599 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!-- Title -->
    <title>1xbet Code Promotionnel - D555 -</title>

    <!-- Favicon -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo_p.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo_p.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <meta name=\"author\" content=\"Marc Tatchou\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Code Promotionnel D555 ! \">
    <meta property=\"og:site_name\" content=\"Stéphane\">

    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Stéphane - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel D555 vous fera recevoir une multitude de bonus après inscription sur 1xbet, betWinner, LineBet, 1Win, melbet.\">


    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext\" rel=\"stylesheet\">
    ";
        // line 24
        echo "
    <!-- Core Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/css/main.css"), "html", null, true);
        echo "\">
    ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    <!-- JS -->
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/js/vendor/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "</head>
<body>
";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "
    <div class=\"site\" id=\"page\">
        <a class=\"skip-link sr-only\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
        echo "#\">#</a>

        <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
        <section class=\"hero-section hero-section--image clearfix clip\">
            <div class=\"hero-section__wrap\">
                <div class=\"hero-section__option\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/images/bg_1.jpg"), "html", null, true);
        echo "\" alt=\"Hero section image\">
                </div>
                <!-- .hero-section__option -->

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"offset-lg-2 col-lg-8\">
                            <div class=\"title-01 title-01--11 text-center\">
                                <h2 class=\"title__heading\">
                                    <span>Bookmakers</span><br>
                                    <strong class=\"hero-section__words\">
                                        <span class=\"title__effect is-visible\">1xBet</span>
                                        <span class=\"title__effect\">1Win</span>
                                        <span class=\"title__effect\">LineBet</span>
                                        <span class=\"title__effect\">BetWinner</span>
                                        <span class=\"title__effect\">MelBet</span>
                                    </strong>
                                </h2>
                                <div class=\"title__description\">Notre <strong>code promotionnel D555</strong> vous fera recevoir une multitude de bonus après inscriptions chez nos différents bookmakers! Inscrivez-vous pour voir et recevoir les notifications sur les coupons disponibles. </div>

                                <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                <div class=\"title__action\"><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn btn-success\" style=\"font-size: 10px\">Se connecter</a></div>
                                <br><br>
                                <div align=\"center\" class=\"title__action\">
                                    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\" class=\"btn btn-outline-success button-sm\">Continuer<i class=\"fa fa-whatsapp\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"btn btn-outline-success button-sm\">S'incrire<i class=\"fa fa-telegram\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                </div>
                            </div> <!-- .title-01 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <!-- JS -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/js/plugins/animate-headline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 88,  234 => 87,  217 => 73,  213 => 72,  207 => 69,  183 => 48,  174 => 42,  170 => 40,  160 => 39,  149 => 35,  139 => 34,  128 => 28,  118 => 27,  106 => 90,  104 => 39,  100 => 37,  98 => 34,  94 => 33,  90 => 32,  86 => 30,  84 => 27,  80 => 26,  76 => 24,  60 => 10,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!-- Title -->
    <title>1xbet Code Promotionnel - D555 -</title>

    <!-- Favicon -->
    <link href=\"{{ asset(\"./assets/img/logo_p.png\") }}\" rel=\"icon\">
    <link href=\"{{ asset(\"./assets/img/logo_p.png\") }}\" rel=\"apple-touch-icon\">

    <meta name=\"author\" content=\"Marc Tatchou\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Code Promotionnel D555 ! \">
    <meta property=\"og:site_name\" content=\"Stéphane\">

    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Stéphane - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel D555 vous fera recevoir une multitude de bonus après inscription sur 1xbet, betWinner, LineBet, 1Win, melbet.\">


    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext\" rel=\"stylesheet\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using  Symfony UX #}

    <!-- Core Stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/base/css/main.css\") }}\">
    {% block stylesheets %}

    {% endblock %}

    <!-- JS -->
    <script src=\"{{ asset(\"assets/base/js/vendor/modernizr-2.8.3.min.js\") }}\"></script>
    <script src=\"{{ asset(\"assets/base/js/vendor/jquery-1.12.0.min.js\") }}\"></script>
    {% block javascripts %}

    {% endblock %}
</head>
<body>
{% block body %}

    <div class=\"site\" id=\"page\">
        <a class=\"skip-link sr-only\" href=\"{{ path(\"base\") }}#\">#</a>

        <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
        <section class=\"hero-section hero-section--image clearfix clip\">
            <div class=\"hero-section__wrap\">
                <div class=\"hero-section__option\">
                    <img src=\"{{ asset(\"assets/base/images/bg_1.jpg\") }}\" alt=\"Hero section image\">
                </div>
                <!-- .hero-section__option -->

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"offset-lg-2 col-lg-8\">
                            <div class=\"title-01 title-01--11 text-center\">
                                <h2 class=\"title__heading\">
                                    <span>Bookmakers</span><br>
                                    <strong class=\"hero-section__words\">
                                        <span class=\"title__effect is-visible\">1xBet</span>
                                        <span class=\"title__effect\">1Win</span>
                                        <span class=\"title__effect\">LineBet</span>
                                        <span class=\"title__effect\">BetWinner</span>
                                        <span class=\"title__effect\">MelBet</span>
                                    </strong>
                                </h2>
                                <div class=\"title__description\">Notre <strong>code promotionnel D555</strong> vous fera recevoir une multitude de bonus après inscriptions chez nos différents bookmakers! Inscrivez-vous pour voir et recevoir les notifications sur les coupons disponibles. </div>

                                <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                <div class=\"title__action\"><a href=\"{{ path(\"login\") }}\" class=\"btn btn-success\" style=\"font-size: 10px\">Se connecter</a></div>
                                <br><br>
                                <div align=\"center\" class=\"title__action\">
                                    <a href=\"{{ path('1xbet') }}\" class=\"btn btn-outline-success button-sm\">Continuer<i class=\"fa fa-whatsapp\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"{{ path('register') }}\" class=\"btn btn-outline-success button-sm\">S'incrire<i class=\"fa fa-telegram\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                </div>
                            </div> <!-- .title-01 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <!-- JS -->
    <script src=\"{{ asset(\"assets/base/js/plugins/animate-headline.js\") }}\"></script>
    <script src=\"{{ asset(\"assets/base/js/main.js\") }}\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\laragon\\www\\D555\\templates\\base.html.twig");
    }
}
