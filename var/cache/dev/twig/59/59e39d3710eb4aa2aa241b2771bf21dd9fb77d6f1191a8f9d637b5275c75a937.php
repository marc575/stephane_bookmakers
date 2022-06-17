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

/* ./index.html.twig */
class __TwigTemplate_485be5a9534c432d41c99948ff9297cd571fea01babb5ed4491139d20efafaa9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'inscription' => [$this, 'block_inscription'],
            'bookmakers' => [$this, 'block_bookmakers'],
            'image_bookmaker' => [$this, 'block_image_bookmaker'],
            'bookmaker' => [$this, 'block_bookmaker'],
            'start' => [$this, 'block_start'],
            'content' => [$this, 'block_content'],
            'footer_bookmakers' => [$this, 'block_footer_bookmakers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <meta name=\"author\" content=\"Marc Tatchou\">

    <meta name=\"description\" content=\"Code Promotionel D555 ! \">
    <meta property=\"og:site_name\" content=\"SetphSport\">
    <meta property=\"og:image\" itemprop=\"image primaryImageOfPage\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo_p.png"), "html", null, true);
        echo "\">
    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Setphsport - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel * D555 * vous fera recevoir une multitude de bonus après inscriptions sur 1xbet, betWinner, LineBet, 1Win, Melbet.\">

    <title>Setphsport - Code Promo D555</title>
    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo_p.png"), "html", null, true);
        echo "\">

    <!-- Core Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/style.css"), "html", null, true);
        echo "\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700\" rel=\"stylesheet\">

    <!-- Bootstrap CSS File -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Libraries CSS Files -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/lightbox/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Main Stylesheet File -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>
<!-- Preloader -->
<div id=\"preloader\">
    <i class=\"circle-preloader\"></i>
    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo_s.png"), "html", null, true);
        echo "\" alt=\"\">
</div>

<!-- Search Wrapper -->
<div class=\"search-wrapper\">
    <!-- Close Btn -->
    <div class=\"close-btn\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
</div>


<!--==========================
  Header
============================-->
<header id=\"header\">
    <div class=\"container-fluid\">

        <div id=\"logo\" class=\"pull-left\">
            <h1><a href=\"#intro\" class=\"scrollto\">Code D555</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
        </div>

        <nav id=\"nav-menu-container\">
            <ul class=\"nav-menu\">
                <li class=\"menu-active\"><a href=\"#intro\">Accueil</a></li>
                <li><a href=\"#promo\">Bonus</a></li>
                <li><a href=\"#ap\">Procédure d'inscription</a></li>
                <li>";
        // line 76
        $this->displayBlock('inscription', $context, $blocks);
        echo "</li>
                ";
        // line 77
        $this->displayBlock('bookmakers', $context, $blocks);
        // line 80
        echo "                <li><a href=\"#footer\">Contacts</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id=\"intro\">
    <div class=\"intro-container\">
        <div id=\"introCarousel\" class=\"carousel  slide carousel-fade\" data-ride=\"carousel\">

            <ol class=\"carousel-indicators\"></ol>

            <div class=\"carousel-inner\" role=\"listbox\">

                ";
        // line 97
        $this->displayBlock('image_bookmaker', $context, $blocks);
        // line 98
        echo "                <div class=\"carousel-container\">
                    <div class=\"carousel-content\">
                        <h2>";
        // line 100
        $this->displayBlock('bookmaker', $context, $blocks);
        echo "</h2>
                        ";
        // line 101
        $this->displayBlock('start', $context, $blocks);
        // line 102
        echo "                    </div>
                </div>
            </div>

        </div>

        <a class=\"carousel-control-prev\" href=\"#introCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon ion-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>

        <a class=\"carousel-control-next\" href=\"#introCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon ion-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>

    </div>
</section><!-- #intro -->

<br><br>
<!-- ##### Hero Area End ##### -->
";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "
<!-- ##### Footer Area Start ##### -->

<!--==========================
  Footer
============================-->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-4 col-md-6 footer-info\">
                    <h3>Code D555</h3>
                    <p>Notre code promotionnel vous fera recevoir une multitude de bonus après inscriptions chez nos différents bookmakers!</p>
                </div>

                <div class=\"col-lg-4 col-md-6 footer-links\">
                    <h4>Liens rapides</h4>
                    <ul>
                        ";
        // line 145
        $this->displayBlock('footer_bookmakers', $context, $blocks);
        // line 148
        echo "                    </ul>
                </div>

                <div class=\"col-lg-4 col-md-6 footer-contact\">
                    <h4>Contacts</h4>
                    <p>
                        <strong>Ville:</strong> Douala<br>
                        <strong>Pays:</strong> Cameroun <br>
                        <strong>Téléphone:</strong> +237 691636830<br>
                    </p>

                    <div class=\"social-links\">
                        <a href=\"https://chat.whatsapp.com/EejgdxvVoi79vk3TQjBrm9\" class=\"whatsapp\"><i class=\"fa fa-whatsapp\"></i></a>
                        <a href=\"https://www.facebook.com/STEPHDIDIDIER/\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"https://youtube.com/channel/UCVGtWecZbd_Anzl3F172Ydg\" class=\"youtube\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"https://t.me/coupons_gratuit_des_pro\" class=\"telegram\"><i class=\"fa fa-telegram\"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright, Tous droits reservés !
        </div>
        <div class=\"credits\">
            Réalisé par <a href=\"https://wa.me/23756450734\"> Marc Analytica </a>
        </div>
    </div>
</footer><!-- #footer -->

<!-- JavaScript Libraries -->
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/superfish/hoverIntent.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/superfish/superfish.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/touchSwipe/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>
<!-- Contact Form JavaScript File -->
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/contactform/contactform.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main Javascript File -->
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/js/main.js"), "html", null, true);
        echo "\"></script>

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popper js -->
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap js -->
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- All Plugins js -->
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/plugins/plugins.js"), "html", null, true);
        echo "\"></script>
<!-- Active js -->
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/active.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_inscription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmakers"));

        // line 78
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_image_bookmaker($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_bookmaker"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_bookmaker"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_bookmaker($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 124
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_footer_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        // line 146
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "./index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 146,  500 => 145,  489 => 124,  479 => 123,  460 => 101,  441 => 100,  422 => 97,  411 => 78,  401 => 77,  382 => 76,  368 => 212,  363 => 210,  358 => 208,  353 => 206,  348 => 204,  341 => 200,  335 => 197,  330 => 195,  326 => 194,  322 => 193,  318 => 192,  314 => 191,  310 => 190,  306 => 189,  302 => 188,  298 => 187,  294 => 186,  290 => 185,  286 => 184,  282 => 183,  245 => 148,  243 => 145,  222 => 126,  220 => 123,  197 => 102,  195 => 101,  191 => 100,  187 => 98,  185 => 97,  166 => 80,  164 => 77,  160 => 76,  130 => 49,  119 => 41,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  91 => 31,  82 => 25,  76 => 22,  67 => 16,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <meta name=\"author\" content=\"Marc Tatchou\">

    <meta name=\"description\" content=\"Code Promotionel D555 ! \">
    <meta property=\"og:site_name\" content=\"SetphSport\">
    <meta property=\"og:image\" itemprop=\"image primaryImageOfPage\" content=\"{{ asset('./assets/img/logo_p.png') }}\">
    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Setphsport - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel * D555 * vous fera recevoir une multitude de bonus après inscriptions sur 1xbet, betWinner, LineBet, 1Win, Melbet.\">

    <title>Setphsport - Code Promo D555</title>
    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ asset(\"./assets/img/logo_p.png\") }}\">

    <!-- Core Stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"./assets/style.css\") }}\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700\" rel=\"stylesheet\">

    <!-- Bootstrap CSS File -->
    <link href=\"{{ asset(\"assets/index/lib/bootstrap/css/bootstrap.min.css\") }}\" rel=\"stylesheet\">

    <!-- Libraries CSS Files -->
    <link href=\"{{ asset(\"assets/index/lib/font-awesome/css/font-awesome.min.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"assets/index/lib/animate/animate.min.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"assets/index/lib/ionicons/css/ionicons.min.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"assets/index/lib/owlcarousel/assets/owl.carousel.min.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"assets/index/lib/lightbox/css/lightbox.min.css\") }}\" rel=\"stylesheet\">

    <!-- Main Stylesheet File -->
    <link href=\"{{ asset(\"assets/index/css/style.css\") }}\" rel=\"stylesheet\">

</head>

<body>
<!-- Preloader -->
<div id=\"preloader\">
    <i class=\"circle-preloader\"></i>
    <img src=\"{{ asset(\"./assets/img/logo_s.png\") }}\" alt=\"\">
</div>

<!-- Search Wrapper -->
<div class=\"search-wrapper\">
    <!-- Close Btn -->
    <div class=\"close-btn\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
</div>


<!--==========================
  Header
============================-->
<header id=\"header\">
    <div class=\"container-fluid\">

        <div id=\"logo\" class=\"pull-left\">
            <h1><a href=\"#intro\" class=\"scrollto\">Code D555</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
        </div>

        <nav id=\"nav-menu-container\">
            <ul class=\"nav-menu\">
                <li class=\"menu-active\"><a href=\"#intro\">Accueil</a></li>
                <li><a href=\"#promo\">Bonus</a></li>
                <li><a href=\"#ap\">Procédure d'inscription</a></li>
                <li>{% block inscription %}  {% endblock %}</li>
                {% block bookmakers %}

                {% endblock %}
                <li><a href=\"#footer\">Contacts</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id=\"intro\">
    <div class=\"intro-container\">
        <div id=\"introCarousel\" class=\"carousel  slide carousel-fade\" data-ride=\"carousel\">

            <ol class=\"carousel-indicators\"></ol>

            <div class=\"carousel-inner\" role=\"listbox\">

                {% block image_bookmaker %}  {% endblock %}
                <div class=\"carousel-container\">
                    <div class=\"carousel-content\">
                        <h2>{% block bookmaker %}  {% endblock %}</h2>
                        {% block start %} {% endblock %}
                    </div>
                </div>
            </div>

        </div>

        <a class=\"carousel-control-prev\" href=\"#introCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon ion-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>

        <a class=\"carousel-control-next\" href=\"#introCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon ion-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>

    </div>
</section><!-- #intro -->

<br><br>
<!-- ##### Hero Area End ##### -->
{% block content %}

{% endblock %}

<!-- ##### Footer Area Start ##### -->

<!--==========================
  Footer
============================-->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-4 col-md-6 footer-info\">
                    <h3>Code D555</h3>
                    <p>Notre code promotionnel vous fera recevoir une multitude de bonus après inscriptions chez nos différents bookmakers!</p>
                </div>

                <div class=\"col-lg-4 col-md-6 footer-links\">
                    <h4>Liens rapides</h4>
                    <ul>
                        {% block footer_bookmakers %}

                        {% endblock %}
                    </ul>
                </div>

                <div class=\"col-lg-4 col-md-6 footer-contact\">
                    <h4>Contacts</h4>
                    <p>
                        <strong>Ville:</strong> Douala<br>
                        <strong>Pays:</strong> Cameroun <br>
                        <strong>Téléphone:</strong> +237 691636830<br>
                    </p>

                    <div class=\"social-links\">
                        <a href=\"https://chat.whatsapp.com/EejgdxvVoi79vk3TQjBrm9\" class=\"whatsapp\"><i class=\"fa fa-whatsapp\"></i></a>
                        <a href=\"https://www.facebook.com/STEPHDIDIDIER/\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"https://youtube.com/channel/UCVGtWecZbd_Anzl3F172Ydg\" class=\"youtube\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"https://t.me/coupons_gratuit_des_pro\" class=\"telegram\"><i class=\"fa fa-telegram\"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright, Tous droits reservés !
        </div>
        <div class=\"credits\">
            Réalisé par <a href=\"https://wa.me/23756450734\"> Marc Analytica </a>
        </div>
    </div>
</footer><!-- #footer -->

<!-- JavaScript Libraries -->
<script src=\"{{ asset(\"assets/index/lib/jquery/jquery.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/jquery/jquery-migrate.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/bootstrap/js/bootstrap.bundle.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/easing/easing.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/superfish/hoverIntent.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/superfish/superfish.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/wow/wow.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/waypoints/waypoints.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/counterup/counterup.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/owlcarousel/owl.carousel.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/isotope/isotope.pkgd.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/lightbox/js/lightbox.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/index/lib/touchSwipe/jquery.touchSwipe.min.js\") }}\"></script>
<!-- Contact Form JavaScript File -->
<script src=\"{{ asset(\"assets/index/contactform/contactform.js\") }}\"></script>

<!-- Template Main Javascript File -->
<script src=\"{{ asset(\"assets/index/js/main.js\") }}\"></script>

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src=\"{{ asset(\"./assets/js/jquery/jquery-2.2.4.min.js\") }}\"></script>
<!-- Popper js -->
<script src=\"{{ asset(\"./assets/js/bootstrap/popper.min.js\") }}\"></script>
<!-- Bootstrap js -->
<script src=\"{{ asset(\"./assets/js/bootstrap/bootstrap.min.js\") }}\"></script>
<!-- All Plugins js -->
<script src=\"{{ asset(\"./assets/js/plugins/plugins.js\") }}\"></script>
<!-- Active js -->
<script src=\"{{ asset(\"./assets/js/active.js\") }}\"></script>
</body>

</html>", "./index.html.twig", "C:\\laragon\\www\\setphSport2-main\\templates\\index.html.twig");
    }
}
