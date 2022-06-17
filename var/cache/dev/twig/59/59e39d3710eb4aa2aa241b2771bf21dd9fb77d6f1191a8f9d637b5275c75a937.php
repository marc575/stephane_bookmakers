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
            'title' => [$this, 'block_title'],
            'inscription' => [$this, 'block_inscription'],
            'bookmakers' => [$this, 'block_bookmakers'],
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

    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "- Code Promo D555</title>
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

                <div class=\"carousel-item active\" style=\"background-image: url(";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/img/1xbet/1xbet.png"), "html", null, true);
        echo ")\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>1xBet</h2>
                            <p>1xBet est actif sur Internet depuis 2011 et accepte les paris sportifs sur la base d'une licence internationale obtenue sur l'île de Curaçao. C'est le premier bookmaker à avoir proposé une aussi bonne sélection de marchés sportifs et le fameux bonus de 200% pour la première recharge. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url(";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/img/1win/1win.jpg"), "html", null, true);
        echo ")\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>1Win</h2>
                            <p>1win est un bookmaker assez jeune. La société a été fondée en 2016, jusqu’en 2018, elle était FirstBet.1win accepte des joueurs  du monde entier, y compris du continent africain, le site est traduit et adapté en 9 langues dont le français. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://1wvua.top/#hzlt\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url(";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/img/linebet/linebet.jpg"), "html", null, true);
        echo ")\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>LineBet</h2>
                            <p>LINEBET est titulaire de la licence internationale de Curaçao n° 8048 / JAZ. Faites des paris sur tous les événements dans l'application mobile LINEBET! Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://m.Linebet.com/fr/?whn=desctop\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url(";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/img/betwinner/betwinner.jpg"), "html", null, true);
        echo ")\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>BetWinner</h2>
                            <p>Betwinner est un bookmaker de nouvelle génération qui travaille depuis 2018. Le site officiel est fait dans des couleurs agréables, dispose d’une interface moderne et compréhensible. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://bwredir.com/1bY0?p=/user/registration/\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url(";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet.jpg"), "html", null, true);
        echo ")\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>MelBet</h2>
                            <p>La société de paris Melbet propose une vaste offre de paris sportif en ligne. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://m.melbet.com/\" class=\"btn-get-started scrollto\">S'inscrire</a>
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
    </div>
</section><!-- #intro -->

<br><br>
<!-- ##### Hero Area End ##### -->
";
        // line 165
        $this->displayBlock('content', $context, $blocks);
        // line 168
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
        // line 187
        $this->displayBlock('footer_bookmakers', $context, $blocks);
        // line 190
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
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/superfish/hoverIntent.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/superfish/superfish.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/lib/touchSwipe/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>
<!-- Contact Form JavaScript File -->
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/contactform/contactform.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main Javascript File -->
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/js/main.js"), "html", null, true);
        echo "\"></script>

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popper js -->
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap js -->
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- All Plugins js -->
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/plugins/plugins.js"), "html", null, true);
        echo "\"></script>
<!-- Active js -->
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/active.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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

    // line 165
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 166
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 187
    public function block_footer_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        // line 188
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
        return array (  521 => 188,  511 => 187,  500 => 166,  490 => 165,  479 => 78,  469 => 77,  450 => 76,  431 => 20,  417 => 254,  412 => 252,  407 => 250,  402 => 248,  397 => 246,  390 => 242,  384 => 239,  379 => 237,  375 => 236,  371 => 235,  367 => 234,  363 => 233,  359 => 232,  355 => 231,  351 => 230,  347 => 229,  343 => 228,  339 => 227,  335 => 226,  331 => 225,  294 => 190,  292 => 187,  271 => 168,  269 => 165,  238 => 137,  225 => 127,  212 => 117,  199 => 107,  186 => 97,  167 => 80,  165 => 77,  161 => 76,  131 => 49,  120 => 41,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  92 => 31,  83 => 25,  77 => 22,  72 => 20,  65 => 16,  48 => 1,);
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

    <title>{% block title %} {% endblock %}- Code Promo D555</title>
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

                <div class=\"carousel-item active\" style=\"background-image: url({{ asset(\"assets/index/img/1xbet/1xbet.png\") }})\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>1xBet</h2>
                            <p>1xBet est actif sur Internet depuis 2011 et accepte les paris sportifs sur la base d'une licence internationale obtenue sur l'île de Curaçao. C'est le premier bookmaker à avoir proposé une aussi bonne sélection de marchés sportifs et le fameux bonus de 200% pour la première recharge. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url({{ asset(\"assets/index/img/1win/1win.jpg\") }})\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>1Win</h2>
                            <p>1win est un bookmaker assez jeune. La société a été fondée en 2016, jusqu’en 2018, elle était FirstBet.1win accepte des joueurs  du monde entier, y compris du continent africain, le site est traduit et adapté en 9 langues dont le français. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://1wvua.top/#hzlt\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url({{ asset(\"assets/index/img/linebet/linebet.jpg\") }})\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>LineBet</h2>
                            <p>LINEBET est titulaire de la licence internationale de Curaçao n° 8048 / JAZ. Faites des paris sur tous les événements dans l'application mobile LINEBET! Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://m.Linebet.com/fr/?whn=desctop\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url({{ asset(\"assets/index/img/betwinner/betwinner.jpg\") }})\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>BetWinner</h2>
                            <p>Betwinner est un bookmaker de nouvelle génération qui travaille depuis 2018. Le site officiel est fait dans des couleurs agréables, dispose d’une interface moderne et compréhensible. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://bwredir.com/1bY0?p=/user/registration/\" class=\"btn-get-started scrollto\">S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class=\"carousel-item\" style=\"background-image: url({{ asset(\"assets/img/melbet/melbet.jpg\") }})\">
                    <div class=\"carousel-container\">
                        <div class=\"carousel-content\">
                            <h2>MelBet</h2>
                            <p>La société de paris Melbet propose une vaste offre de paris sportif en ligne. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
                            <a href=\"https://m.melbet.com/\" class=\"btn-get-started scrollto\">S'inscrire</a>
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

</html>", "./index.html.twig", "C:\\laragon\\www\\D555\\templates\\index.html.twig");
    }
}
