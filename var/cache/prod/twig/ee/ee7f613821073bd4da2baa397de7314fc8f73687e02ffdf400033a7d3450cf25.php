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

/* home/index.html.twig */
class __TwigTemplate_900fe5a7246a6c8062a34052f5f2e61ce672f44cf829cb82febd8c60b4653fcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_p.png"), "html", null, true);
        echo "\">
    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Setphsport - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel * D555 * vous fera recevoir une multitude de bonus après inscriptions sur 1xbet, betWinner, LineBet, 1Win, Melbet.\">

    <title>Setphsport - Code Promo D555</title>
    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_p.png"), "html", null, true);
        echo "\">

    <!-- Core Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">

</head>

<body>
<!-- Preloader -->
<div id=\"preloader\">
    <i class=\"circle-preloader\"></i>
    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_s.png"), "html", null, true);
        echo "\" alt=\"\">
</div>

<!-- Search Wrapper -->
<div class=\"search-wrapper\">
    <!-- Close Btn -->
    <div class=\"close-btn\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
</div>

<!-- ##### Header Area Start ##### -->
<header class=\"header-area\">

    <!-- Top Header Area -->
    <div class=\"top-header-area\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center justify-content-between\">
                <!-- Breaking News -->
                <div class=\"col-12 col-sm-6\">
                    <div class=\"breaking-news\">
                        <div id=\"breakingNewsTicker\" class=\"ticker\">
                            <ul>
                                <li><a href=\"#\">Bienvenue Ami Parieur !</a></li>
                                <li><a href=\"#\">Code D555 !</a></li>
                                <li><a href=\"#\">Code Promotionnel !</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Top Social Info -->
                <div class=\"col-12 col-sm-6\">
                    <div class=\"top-social-info text-right\">
                        <a href=\"https://t.me/coupons_gratuit_des_pro\"><i class=\"fa fa-telegram\" style=\"font-size: 30px\" aria-hidden=\"true\"></i></a>
                        <a href=\"https://www.facebook.com/STEPHDIDIDIER/\"><i style=\"font-size: 30px\" class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                        <a href=\"https://chat.whatsapp.com/EejgdxvVoi79vk3TQjBrm9\"><i class=\"fa fa-whatsapp\" style=\"font-size: 30px\" aria-hidden=\"true\"></i></a>
                        <a href=\"https://youtube.com/channel/UCVGtWecZbd_Anzl3F172Ydg\"><i class=\"fa fa-youtube-play\" style=\"font-size: 30px\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class=\"delicious-main-menu\">
        <div class=\"classy-nav-container breakpoint-off\">
            <div class=\"container\">
                <!-- Menu -->
                <nav class=\"classy-navbar justify-content-between\" id=\"deliciousNav\">

                    <!-- Logo -->
                    <a class=\"nav-brand\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_pp.png"), "html", null, true);
        echo "\" alt=\"\"></a>

                    <!-- Navbar Toggler -->
                    <div class=\"classy-navbar-toggler\">
                        <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class=\"classy-menu\">

                        <!-- close btn -->
                        <div class=\"classycloseIcon\">
                            <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class=\"classynav\">
                            <ul>
                                <li class=\"active\"><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#\">Accueil</a></li>
                                <li><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1xbet\">1xBet</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1xbet_promo\">Promotion</a></li>
                                        <li><a href=\"https://cutt.ly/OjksHoJ\">Inscription</a></li>
                                        <li><a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1xbet_ap\">Procédure</a></li>
                                        <li><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1xbet_ip\">1xbet sur Iphone</a></li>
                                        <li><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1xbet_et\">1xbet Europe</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#betwinner\">BET Winner</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#betwinner_promo\">Promotion</a></li>
                                        <li><a href=\"https://bwredir.com/1bY0?p=/user/registration/\">Inscription</a></li>
                                        <li><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#betwinner_ap\">Procédure</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1win\">1Win</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1win_promo\">Promotion</a></li>
                                        <li><a href=\"https://1wvua.top/#hzlt\">Inscription</a></li>
                                        <li><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#1win_ap\">Procédure</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#linebet\">LineBet</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#linebet_promo\">Promotion</a></li>
                                        <li><a href=\"https://m.Linebet.com/fr/?whn=desctop\">Inscription</a></li>
                                        <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#linebet_ap\">Procédure</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#melbet\">MelBet</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#melbet_promo\">Promotion</a></li>
                                        <li><a href=\"https://m.melbet.com/\">Inscription</a></li>
                                        <li><a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#melbet_ap\">Procédure</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class=\"hero-area\">
    <div class=\"hero-slides owl-carousel\">
        <!-- Single Hero Slide -->
        <div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"hero-slides-content\" data-animation=\"fadeInUp\" data-delay=\"100ms\">
                            <h2 data-animation=\"fadeInUp\" data-delay=\"300ms\">1xBet</h2>
                            <p data-animation=\"fadeInUp\" data-delay=\"500ms\">1xBet opère sur Internet depuis 2011, accepte les paris sportifs sur la base d’une licence internationale obtenue sur l’île de Curaçao. Il est le premier bookmaker qui a offert un tel bon assortiment des marchés sportifs et le bonus célèbre de 200% pour la 1ere recharge.</p>
                            <a href=\"https://cutt.ly/OjksHoJ\" class=\"btn delicious-btn\" data-animation=\"fadeInUp\" data-delay=\"1200ms\">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Single Hero Slide -->
        <div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"hero-slides-content\" data-animation=\"fadeInUp\" data-delay=\"100ms\">
                            <h2 data-animation=\"fadeInUp\" data-delay=\"300ms\">Bet Winner</h2>
                            <p data-animation=\"fadeInUp\" data-delay=\"500ms\">Betwinner est un bookmaker de nouvelle génération qui travaille depuis 2018. Le site officiel est fait dans des couleurs agréables, dispose d’une interface moderne et compréhensible.</p>
                            <a href=\"https://bwredir.com/1bY0?p=/user/registration/\" class=\"btn delicious-btn\" data-animation=\"fadeInUp\" data-delay=\"1200ms\">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"hero-slides-content\" data-animation=\"fadeInUp\" data-delay=\"100ms\">
                            <h2 data-animation=\"fadeInUp\" data-delay=\"300ms\">1Win</h2>
                            <p data-animation=\"fadeInUp\" data-delay=\"500ms\">1win est un bookmaker assez jeune. La société a été fondée en 2016, jusqu’en 2018, elle était FirstBet.1win accepte des joueurs  du monde entier, y compris du continent africain, le site est traduit et adapté en 9 langues dont le français.</p>
                            <a href=\"https://1wzrn.top/\" class=\"btn delicious-btn\" data-animation=\"fadeInUp\" data-delay=\"1200ms\">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet/linebet.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"hero-slides-content\" data-animation=\"fadeInUp\" data-delay=\"100ms\">
                            <h2 data-animation=\"fadeInUp\" data-delay=\"300ms\">LineBet</h2>
                            <p data-animation=\"fadeInUp\" data-delay=\"500ms\">LINEBET est titulaire de la licence internationale de Curaçao n° 8048 / JAZ.

                                Faites des paris sur tous les événements dans l'application mobile LINEBET !</p>
                            <a href=\"https://www.Linebet.com\" class=\"btn delicious-btn\" data-animation=\"fadeInUp\" data-delay=\"1200ms\">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"hero-slides-content\" data-animation=\"fadeInUp\" data-delay=\"100ms\">
                            <h2 data-animation=\"fadeInUp\" data-delay=\"300ms\">MelBet</h2>
                            <p data-animation=\"fadeInUp\" data-delay=\"500ms\">La société de paris Melbet propose une vaste offre de paris sportif en ligne.</p>
                            <a href=\"https://cutt.ly/bjeUyxw\" class=\"btn delicious-btn\" data-animation=\"fadeInUp\" data-delay=\"1200ms\">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->
<br>
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"1xbet\">
                    <h2 style=\"color: darkblue\">1xBet</h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_cre.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Création d'un compte 1xBet</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr_er.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>1xBet en france et en europe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_ip.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>1xbet sur Iphone</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr2.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>1xbet france</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_1.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"1xbet_promo\">
                    <h2>Promotion</h2>
                    <p>👋 Les paris sportifs n'ont jamais été aussi pratiques et simples. Il suffit de télécharger l'application 1xBet et vous êtes dans un grand jeu! Pour tous les nouveaux joueurs sur l'application mobile: Bonus jusqu'à 65 000 FCFA  lors de l'inscription.  Utilisez notre  code promo officiel D555 pour recevoir le bonus dès aujourd'hui.
                        Suivez tutoriel d'inscription chez 1xbet qui vous permet d'avoir tous vos bonus et d'avoir un compte certifié et de profiter des meilleures cotes, et cela quelque soit votre pays de résidence.
                        Je vais vous demander d'être attentif, 10 minutes qui vont être très bien investies et rentables sur le long terme.✊💪💪💪</p>
                    <a href=\"https://cutt.ly/OjksHoJ\" class=\"btn delicious-btn\">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### CTA Area End ##### -->

<!-- ##### Best Receipe Area Start ##### -->
<br><section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"1xbet_ap\">
                    <h3>Procédure d'inscription</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Il faut télécharger l'application, la version Android 1xbet via le lien ci-dessus</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Entrer dans l'application <br>
                                👉 Choisir inscriptions <br>
                                👉 Ensuite sur \"complète\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Pays: votre pays <br>
                                👉 Devise: votre devise <br>
                                👉 Code promo: D555 <br>
                                👉 Bonus: sport <br>
                                👉 Votre nom et prénom, votre adresse email <br>
                                🎁 Le code promo vous donne droit au 1er dépôt doublé jusqu'à 130€, c'est un bonus exclusif pour notre communauté.<br>
                                NB:le mot de passe doit commencer par une lettre majuscule et doit contenir les chiffres et les lettres et doit être d'au moins 8 caractères.

                                <br>Comme exemple=Didier2344</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Après avoir tout rempli,  appuyez sur le bouton en vert du bas <br>
                                👉 Un SMS doit être envoyé sur votre numéro pour vous permettre de confirmer votre inscription <br><br>
                                Vous allez recevoir Votre identifiant qui doit s'afficher. <br>
                                👉 Enregistrez bien votre n° d'identifiant et votre mot de passe </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous remplissez votre ID et votre mot de passe et vous appuyez sur se connecter.<br>
                                Vous serez connecter directement dans votre compte 1xbet qui vous permettra de recevoir les bonus chaque lundi et vendredi a votre première recharge.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Pour se recharger, c'est simple <br>
                                👉 Vous entrez là haut <br>
                                👉 Vous choisissez rechargez le compte <br>
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea14.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Vous trouverez içi les moyens de recharge de votre pays qui sont disponibles</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"1xbet_ip\">
                    <h3>1xBet sur Iphone</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Rendez-vous dans iTunes Store et AppStore</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Sélectionnez identifiant Apple</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Sélectionnez Affichez l’identifiant Apple et rentrez votre mot de passe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Sélectionnez Pays/Région</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Appuyez sur modifier un pays ou une région.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Choisissez un pays (Pays-Bas)</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Acceptez les conditions d'utilisations</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Remplissez les champs</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Rendez-vous dans l’AppStore et chercher 1xBet</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://appleid.apple.com/\">
                            <h5>Si un message d’erreur apparaît comme: votre moyen de paiement actuel n’est pas valide dans ce store ou tout autre message, vous devez alors créer un nouveau compte.
                                Cliquez sur ce texte pour créer un nouveau compte et indiquez Pays-Bas comme votre pays</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Allez a l’étape 3 et cliquez sur Déconnexion</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_ip12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Connectez vous avec votre nouveau compte et allez à l’étape 9 <br>
                                👉 Code promo Bonus= D555</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_pb1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Pour activer le bonus tu entres dans ton profil et tu choisis \"changer de compte\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_pb2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Ensuite tu cliques sur solde de bonus et le compte bonus devient actif</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>⚠️ L'équipe, petit message par rapport au bonus 1xbet. <br>


                                ▪️1er point important léquipe, le bonus n'est pas rétirable immediatment, bien évidemment, ce serait trop facile.
                                Avant que le bonus soit rétirable il faut miser 5 fois le montant du depot et sur des combinés de 3 matchs minimum (à savoir que 5 fois c'est correct car la moyenne pour les bookmakers qui offre ce type de bonus c'est de devoir jouer entre 6 et 10 fois le montant du dépot).
                                Sur votre compte vous voyez aussi une jauge de remplissage du bonus, elle se remplit petit à petit et quand elle arrivera a 100% le bonus devient rétirable donc vous pouvez voir l'avancée en direct.</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"1xbet_et\">
                    <h3>1xBet en France et en Europe</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_fr1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Il faut télécharger un VPN. Téléchargez l'application \"YogaVPN\" qui fera parfaitement l'affaire.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_fr2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>1️⃣ Telechargez YogaVpn <br>
                                2️⃣ Choisir comme pays: Canada <br>
                                3️⃣ Tapez sur: GO <br>
                                4️⃣ Nous sommes connectés sur le serveur du Canada <br></h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://cutt.ly/GTyKZD8\">
                            <h5>📱 Cliquez sur ce texte et sivez les instructions suivantes: <br>

                                👉 Inscription en un clic <br>
                                👉 Pays: Monaco (si votre pays n'est pas dans la liste) <br>
                                👉 Devise: Euro <br>
                                👉 Code promo: D555 <br>
                                🎁 Le code promo vous donne droit au 1er dépôt doublé jusqu'à 130€, c'est un bonus exclusif pour notre communauté.
                                <br>

                                👉 Enregistrez bien votre n° d'identifiant et votre mot de passe et c'est parti‼️</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet_crea11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>📱Allez dans mon profil personnel: <br>
                                👉 N° de téléphone, on laisse vide. <br>
                                👉 Entrez votre mail, nom, prénom, n° de carte d'identité ou de passeport, date de délivrance, et adresse.
                                <br>
                                👉 Le pays, vous laissez Monaco. <br>

                                ⚠️ Entrez bien l'adresse qui est présente sur votre document d'identité, même si vous avez déménagé depuis, ce n'est pas grave, 1xbet n'envoie pas de courrier postal, mais faites bien correspondre l'adresse sur 1xbet avec celle présente sur votre document d'identité.
                                <br>

                                👉 Puis vous validez les infos‼️</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"betwinner\">
                    <h2 style=\"color: darkgreen\">BetWinner</h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_betwinner_crea.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Création d'un compte BetWinner</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_betwinner_crea1.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Recharge BetWinner</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_2.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"betwinner_promo\">
                    <h2>Promotion</h2>
                    <p>👋 Salut l'équipe, on se retrouve pour notre nouveau tutoriel d'inscription qui va vous permettre de parier sur BETWINNER et de profiter des meilleures cotes, et cela quel que soit votre pays de résidence.
                        Je vais vous demander d'être attentif, l'inscription vous prendra même pas 10 minutes, 10 minutes qui vont être très bien investies et rentables sur le long terme.
                        Le bonus pour les nouveaux membres (jusqu’à 100€), ainsi que le support 24 heures sur 24 font de Betwinner l’un des meilleurs jeunes bookmakers sur le marché.
                        Utilisez notre  code promo officiel D555 pour recevoir le bonus dès aujourd'hui.</p>
                    <a href=\"https://bwredir.com/1bY0?p=/user/registration/\" class=\"btn delicious-btn\">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### CTA Area End ##### -->

<!-- ##### Best Receipe Area Start ##### -->
<br><section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"betwinner_ap\">
                    <h3>Procédure d'inscription</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 797
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"http://Betwinner.com\">
                            <h5>Télécharger l'application BET WINNER en cliquantsur ce texte et l'installer dans votre appareil
                                <br>
                                Cliquez sur application mobile pour le télécharger <br>
                                Enfin téléchargez <br>
                                L'ouvrir</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Entrez dans les paramètres (3 traits horizontaux) situés à votre gauche</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>choisissez inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>choisissez full qui veut dire complète</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 849
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Ici vous remplissez votre nom, prénom, adresse mail, numéro de téléphone et mot de passe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Plus bas vous remplissez le code promo bonus D555 qui vous permettra de doubler votre premier dépôt et sélectionnez bonus pour le sport.
                                <br> <br>
                                NB: Le mot de passe doit avoir des lettres majuscules , des lettres minuscules et des chiffres et avoir au moins 8 caractères
                                Exemple : Emma1234</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Après avoir tout rempli, vous appuyez ici pour valider votre inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>vous allez appuyez sur send code et on va vous envoyer un code sur votre numéro pour que vous puissiez voir vos coordonnées et se connecter.
                                <br>
                                Votre identifiant et votre mot de passe doivent s'afficher <br>
                                .👉 Enregistrez bien votre n° d'identifiant et votre mot de passe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Mettez vos identifiants et mot de passe pour vous connecter et votre compte est prêt à être utilisé.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner_crea3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://play.google.com/store/apps/details?id=com.gbs.clapay.wallet\">
                            <h5>✅ Vous êtes en CÔTE D'IVOIRE ? Et vous souhaitez faire librement vos Paris Sur BETWINNER ?
                                <br>

                                🔥🔥 📲 Cliquez sur ce texte et téléchargez gratuitement la version android de CLAPAY et rechargez vous par ORANGE,  MTN et MOOV.
                                <br>

                                🔘 IOS : bientôt!! <br>

                                Code promo : ✅ D555</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"1win\">
                    <h2 style=\"color: midnightblue\">1Win</h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 951
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_crea.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Comment faire des depots sur 1Win</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_crea2.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Comment parier sur 1Win</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_crea3.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Création d'un compte 1Win bonus.</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 990
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_1.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"1win_promo\">
                    <h2>Promotion</h2>
                    <p>Le site propose non seulement des paris sportifs et eSports mais aussi le casino, poker, loteries et sport virtuel.
                        Cette entreprise en ligne est populaire, surtout grâce au bonus généreux sur le premier dépôt de 500%.
                        Utilisez notre notre code promo officiel D555 pour recevoir le bonus dès aujourd'hui.</p>
                    <a href=\"https://1wvua.top/#hzlt\" class=\"btn delicious-btn\">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### CTA Area End ##### -->

<!-- ##### Best Receipe Area Start ##### -->
<br><section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"1win_ap\">
                    <h3>Procédure d'inscription</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1023
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://1wzrn.top/\">
                            <h5>cliquez ici pour allez sur le site </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1035
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>choisissez enregistrement où inscriptions</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1047
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>choisissez inscriptions</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1059
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>choisissez rapide ou par réseau sociaux. <br>
                                Après avoir rempli votre numéro, votre mail et votre mot de passe, vous appuyez sur ajouter un code promo et vous mettez le D555</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Ajoutez le code promo D555 en appuyant sur s'inscrire. <br>
                                NB:le mot de passe doit commencer par une lettre majuscule et va renfermé les chiffres,les lettres et les symboles.

                                <br>Comme exemple=Didier2345@#</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Votre compte est definitivement prêt à être utilisé et vous pouvez recharger et parier</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Les moyens de recharge: Perfect money, Visa, mybux voucher et les crypto monaie</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Voici les crypto-monnaies</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Small Receipe Area Start ##### -->
<br>
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"linebet\">
                    <h2 style=\"color: #1c8314\">LineBet</h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <div class=\"receipe-content\">
                        <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 1141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_linebet_crea.mp4"), "html", null, true);
        echo "\"  controls></video>
                        <a href=\"#\">
                            <h5>Création d'un compte bonus lineBet.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 1152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_linebet_b1.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>LinBet</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 1167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_2.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"linebet_promo\">
                    <h2>Promotion</h2>
                    <p>Programmes de bonus spéciaux exclusivement avec LINEBET : <br>
                        - Bonus tous les lundis <br>
                        - Paris gratuits <br>
                        - Bonus d'anniversaire <br>
                        - Une large gamme de jeux <br>
                        - Retransmission en ligne de tous les matchs <br>
                        - Un casino en ligne <br>
                        - Paiements et recharges instantanés <br>
                        - Un grand nombre de systèmes de paiement <br>
                        Toujours pas de compte? Alors inscrivez-vous en cliquant sur le lien ci-dessous et en utilisant le code promo : D555
                        <br>
                        Recevez un Bonus jusqu'à 100\$ pour commencer</p>
                    <a href=\"https://m.Linebet.com/fr/?whn=desctop\" class=\"btn delicious-btn\">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### CTA Area End ##### -->

<!-- ##### Best Receipe Area Start ##### -->
<br><section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"linebet_ap\">
                    <h3>Procédure d'inscription</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://cutt.ly/1Efq6WD\">
                            <h5>📱 Cliquez içi sur le lien LINEBET ci-dessous pour télécharger l'application: </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet_crea1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Entrez dans l'application <br>
                                👉 Choisissez inscriptions <br>
                                👉 Cliquez complète</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet_crea4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Pays: votre pays <br>
                                👉 Devise: votre devise <br>
                                👉 Code promo: D555 <br>
                                Et choisir Bonus pour le sport <br>
                                NB:le mot de passe doit commencer par une lettre majuscule et doit renfermer les chiffres et les lettres et avoir au moins 8 caractères

                                Comme exemple=Henry2344 <br>
                                🎁 Le code promo vous donne droit au 1er dépôt doublé jusqu'à 130€, c'est un bonus exclusif pour notre communauté.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet_crea6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Après avoir tout rémplir,  appuyez sur le bouton en vert dus bas <br>
                                Vous allez recevoir Votre identifiant qui doit s'afficher. <br>
                                👉 Enregistrez bien votre n° d'identifiant et votre mot de passe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet_crea7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous remplissez votre ID et votre mot de passe et vous appuyez sur se connecter</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Vous serez connecter directement dans votre compte LINEBET✅✅💪</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/linebet_crea9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Vous trouverez içi les moyens de recharge de votre pays qui sont disponibles✅✅✅</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"melbet\">
                    <h2 style=\"color: yellow\">MelBet</h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\" style=\"align-content : center\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 1319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_melbet_crea.mp4"), "html", null, true);
        echo "\"  frameborder=\"0\" allow=\"accelerometer; clipboard-write; encrypted-media;\" allowfullscreen></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Création d'un compte bonus melbet.</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 1334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_1.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"melbet_promo\">
                    <h2>Promotion</h2>
                    <p>Son offre de bienvenue de 100% jusqu’à 130 euros est conséquente ! C’est un bonus exclusif que nous proposons avec le code promo D555.</p>
                    <a href=\"https://m.melbet.com/\" class=\"btn delicious-btn\">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### CTA Area End ##### -->

<!-- ##### Best Receipe Area Start ##### -->
<br><section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"melbet_ap\">
                    <h3>Procédure d'inscription</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Si vous entrez dans le site et que ça affiche cette image, suivez la procédure suivante</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Il faut télécharger un VPN. Téléchargez l'application \"Cyber VPN\" qui fera parfaitement l'affaire.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>1️⃣ Telechargez CyberVpn <br>
                                2️⃣ Sur la page d'accueil, tapez sur GO <br>
                                3️⃣ Choisir comme pays: \"Canada\" <br>
                                4️⃣ Nous sommes connectés sur le serveur \"Toronto, Canada\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://cutt.ly/bjeUyxw\">
                            <h5>📱 Cliquez içi sur le lien Melbet ci-dessous pour télécharger l'application et téléchargez la version Android✅✅</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Entrez dans l'application <br>
                                👉 Choisir \"inscriptions\" <br>
                                👉 Enfin sur \"complète\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Pays: votre pays <br>
                                👉 Devise: votre devise <br>
                                👉 Code promo: D555 <br>
                                choisissez Bonus pour le sport✅✅ <br>
                                NB:le mot de passe doit commencer par une lettre majuscule et va renfermé les chiffres et les lettres.et va être d'au moins 8 caractères

                                Comme exemple=Henry2344 <br>
                                🎁 Le code promo vous donne droit au 1er dépôt doublé jusqu'à 130€, c'est un bonus exclusif pour notre communauté.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Après avoir tout remplit, appuyez sur le bouton en vert du bas <br>
                                Vous allez recevoir Votre identifiant qui doit s'afficher. <br>
                                👉 Enregistrez bien votre n° d'identifiant et votre mot de passe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous remplissez votre ID et votre mot de passe et vous appuyez sur se connecter. <br>
                                Vous serez connecter directement dans votre compte Melbet💪</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea13.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Pour se recharger, c'est simple et c'est la même procédure que 1xbet <br>
                                Vous entrez là haut</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea14.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Vous choisissez rechargez le compte. <br>
                                Vous serez connecter directement dans votre compte Melbet💪</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 1502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet_crea15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Vous trouverez içi les moyens de recharge de votre pays qui sont disponibles !</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\">
                    <h3>Bonus</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 1529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>1xBet international</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 1541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr3.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>Les coupons 1xBet</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 1553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_linebet_b2.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>LineBet</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"400\" src=\"";
        // line 1565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_b1.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>1win</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class=\"footer-area\">
    <div class=\"container h-100\">
        <div class=\"row h-100\">
            <div class=\"col-12 h-100 d-flex flex-wrap align-items-center justify-content-between\">
                <!-- Footer Social Info -->
                <div class=\"footer-social-info text-right\">
                    <a href=\"https://t.me/coupons_gratuit_des_pro\"><i class=\"fa fa-telegram\" style=\"font-size: 30px\" aria-hidden=\"true\"></i></a>
                    <a href=\"https://www.facebook.com/STEPHDIDIDIER/\"><i style=\"font-size: 30px\" class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                    <a href=\"https://chat.whatsapp.com/EejgdxvVoi79vk3TQjBrm9\"><i class=\"fa fa-whatsapp\" style=\"font-size: 30px\" aria-hidden=\"true\"></i></a>
                    <a href=\"https://youtube.com/channel/UCVGtWecZbd_Anzl3F172Ydg\"><i class=\"fa fa-youtube-play\" style=\"font-size: 30px\" aria-hidden=\"true\"></i></a>
                </div>
                <!-- Footer Logo -->
                <div class=\"footer-logo\">
                    <a href=\"#\"><img width=\"150\" height=\"100\" src=\"";
        // line 1592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gif.gif"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
                <!-- Copywrite -->
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Droits reservés | <a href=\"https://wa.me/23756450734\" target=\"_blank\">Marc Analytica</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src=\"";
        // line 1606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popper js -->
<script src=\"";
        // line 1608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap js -->
<script src=\"";
        // line 1610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- All Plugins js -->
<script src=\"";
        // line 1612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/plugins.js"), "html", null, true);
        echo "\"></script>
<!-- Active js -->
<script src=\"";
        // line 1614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/active.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2002 => 1614,  1997 => 1612,  1992 => 1610,  1987 => 1608,  1982 => 1606,  1965 => 1592,  1935 => 1565,  1920 => 1553,  1905 => 1541,  1890 => 1529,  1860 => 1502,  1844 => 1489,  1828 => 1476,  1812 => 1463,  1795 => 1449,  1773 => 1430,  1756 => 1416,  1741 => 1404,  1723 => 1389,  1708 => 1377,  1693 => 1365,  1659 => 1334,  1641 => 1319,  1611 => 1292,  1596 => 1280,  1581 => 1268,  1564 => 1254,  1542 => 1235,  1525 => 1221,  1510 => 1209,  1465 => 1167,  1447 => 1152,  1433 => 1141,  1400 => 1111,  1385 => 1099,  1370 => 1087,  1352 => 1072,  1336 => 1059,  1321 => 1047,  1306 => 1035,  1291 => 1023,  1255 => 990,  1237 => 975,  1222 => 963,  1207 => 951,  1168 => 915,  1153 => 903,  1135 => 888,  1120 => 876,  1102 => 861,  1087 => 849,  1072 => 837,  1057 => 825,  1042 => 813,  1023 => 797,  986 => 763,  969 => 749,  954 => 737,  914 => 700,  890 => 679,  872 => 664,  857 => 652,  822 => 620,  807 => 608,  792 => 596,  776 => 583,  761 => 571,  745 => 558,  730 => 546,  715 => 534,  700 => 522,  685 => 510,  670 => 498,  655 => 486,  640 => 474,  625 => 462,  610 => 450,  579 => 422,  561 => 407,  545 => 394,  527 => 379,  504 => 359,  487 => 345,  472 => 333,  436 => 300,  419 => 286,  404 => 274,  389 => 262,  374 => 250,  339 => 218,  319 => 201,  301 => 186,  283 => 171,  264 => 155,  242 => 136,  237 => 134,  232 => 132,  226 => 129,  221 => 127,  216 => 125,  210 => 122,  205 => 120,  200 => 118,  194 => 115,  189 => 113,  184 => 111,  178 => 108,  174 => 107,  170 => 106,  165 => 104,  160 => 102,  156 => 101,  133 => 83,  80 => 33,  69 => 25,  63 => 22,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\laragon\\www\\setphSport2-main\\templates\\home\\index.html.twig");
    }
}
