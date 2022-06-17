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
    <!-- Favicons -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/img/logo9.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/img/logo9.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <meta name=\"author\" content=\"Marc Tatchou\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Code Promotionnel D555 ! \">
    <meta property=\"og:site_name\" content=\"Stéphane\">

    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Stéphane - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel D555 vous fera recevoir une multitude de bonus après inscription sur 1xbet, betWinner, LineBet, 1Win, melbet.\">


    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext\" rel=\"stylesheet\">
    ";
        // line 25
        echo "
    <!-- Core Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/css/main.css"), "html", null, true);
        echo "\">
    ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
    <!-- JS -->
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/js/vendor/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</head>
<body>
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "
    <div class=\"site\" id=\"page\">
        <a class=\"skip-link sr-only\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
        echo "#\">#</a>

        <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
        <section class=\"hero-section hero-section--image clearfix clip\">
            <div class=\"hero-section__wrap\">
                <div class=\"hero-section__option\">
                    <img src=\"";
        // line 49
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
                                <div class=\"title__description\">Notre <strong>code promotionnel D555</strong> vous fera recevoir une multitude de bonus après inscriptions chez nos différents bookmakers! </div>

                                <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                <div class=\"title__action\"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\" class=\"btn btn-success\" style=\"font-size: 10px\">Cliquer içi</a></div>
                                <br><br>
                                <div align=\"center\" class=\"title__action\">
                                    <a href=\"https://chat.whatsapp.com/EejgdxvVoi79vk3TQjBrm9\" class=\"btn btn-outline-success button-sm\">Wathsapp<i class=\"fa fa-whatsapp\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"https://t.me/coupons_gratuit_des_pro\" class=\"btn btn-outline-success button-sm\">Telegram<i class=\"fa fa-telegram\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"https://www.facebook.com/STEPHDIDIDIER/\" class=\"btn btn-outline-success button-sm\">facebook<i class=\"fa fa-facebook\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"https://youtube.com/channel/UCVGtWecZbd_Anzl3F172Ydg\" class=\"btn btn-outline-success button-sm\">YouTube<i class=\"fa fa-youtube\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
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
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/base/js/plugins/animate-headline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
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
        return array (  235 => 91,  231 => 90,  208 => 70,  184 => 49,  175 => 43,  171 => 41,  161 => 40,  150 => 36,  140 => 35,  129 => 29,  119 => 28,  107 => 93,  105 => 40,  101 => 38,  99 => 35,  95 => 34,  91 => 33,  87 => 31,  85 => 28,  81 => 27,  77 => 25,  61 => 11,  57 => 10,  46 => 1,);
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
    <!-- Favicons -->
    <link href=\"{{ asset(\"assets/index/img/logo9.png\") }}\" rel=\"icon\">
    <link href=\"{{ asset(\"assets/index/img/logo9.png\") }}\" rel=\"apple-touch-icon\">

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
                                <div class=\"title__description\">Notre <strong>code promotionnel D555</strong> vous fera recevoir une multitude de bonus après inscriptions chez nos différents bookmakers! </div>

                                <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                <div class=\"title__action\"><a href=\"{{ path(\"1xbet\") }}\" class=\"btn btn-success\" style=\"font-size: 10px\">Cliquer içi</a></div>
                                <br><br>
                                <div align=\"center\" class=\"title__action\">
                                    <a href=\"https://chat.whatsapp.com/EejgdxvVoi79vk3TQjBrm9\" class=\"btn btn-outline-success button-sm\">Wathsapp<i class=\"fa fa-whatsapp\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"https://t.me/coupons_gratuit_des_pro\" class=\"btn btn-outline-success button-sm\">Telegram<i class=\"fa fa-telegram\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"https://www.facebook.com/STEPHDIDIDIER/\" class=\"btn btn-outline-success button-sm\">facebook<i class=\"fa fa-facebook\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
                                    <a href=\"https://youtube.com/channel/UCVGtWecZbd_Anzl3F172Ydg\" class=\"btn btn-outline-success button-sm\">YouTube<i class=\"fa fa-youtube\" style=\"font-size: 10px\" aria-hidden=\"true\"></i></a>
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
", "base.html.twig", "C:\\laragon\\www\\setphSport2-main\\templates\\base.html.twig");
    }
}
