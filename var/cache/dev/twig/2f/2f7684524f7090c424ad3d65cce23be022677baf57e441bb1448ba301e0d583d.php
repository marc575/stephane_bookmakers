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

/* home/betwinner.html.twig */
class __TwigTemplate_1298e148215fe6b450aa38f02f4110bd4c379fbb98edb6e4cd671399f10a982c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bookmaker' => [$this, 'block_bookmaker'],
            'inscription' => [$this, 'block_inscription'],
            'bookmakers' => [$this, 'block_bookmakers'],
            'nav' => [$this, 'block_nav'],
            'footer_bookmakers' => [$this, 'block_footer_bookmakers'],
            'image_bookmaker' => [$this, 'block_image_bookmaker'],
            'start' => [$this, 'block_start'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/betwinner.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/betwinner.html.twig"));

        $this->parent = $this->loadTemplate("./index.html.twig", "home/betwinner.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bookmaker($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        echo " BetWinner ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_inscription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        // line 6
        echo "    <li><a href=\"https://bwredir.com/1bY0?p=/user/registration/\">Inscription</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmakers"));

        // line 10
        echo "    <li class=\"menu-has-children\"><a href=\"\">Bookmakers</a>
        <ul class=\"dropdown\">
            <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\">1xBet</a></li>
            <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1win");
        echo "\">1Win</a></li>
            <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linebet");
        echo "\">LineBet</a></li>
            <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("melbet");
        echo "\">MelBet</a></li>
        </ul>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        echo "BetWinner";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_footer_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        // line 23
        echo "
    <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1win");
        echo "\">1Win</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\">1xBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linebet");
        echo "\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("melbet");
        echo "\">MelBet</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_image_bookmaker($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_bookmaker"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_bookmaker"));

        echo " <div class=\"carousel-item active\"  style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index/img/betwinner/betwinner.jpg"), "html", null, true);
        echo ")\" > ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start"));

        // line 33
        echo "    <p>Betwinner est un bookmaker de nouvelle génération qui travaille depuis 2018. Le site officiel est fait dans des couleurs agréables, dispose d’une interface moderne et compréhensible. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
    <a href=\"https://bwredir.com/1bY0?p=/user/registration/\" class=\"btn-get-started scrollto\">S'inscrire</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_betwinner_crea.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Création d'un compte BetWinner</h5>

                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_betwinner_crea1.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Recharge BetWinner</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_2.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"promo\">
                    <h2>Promotion</h2>
                    <p>👋 Salut l'équipe, on se retrouve pour notre nouveau tutoriel d'inscription qui va vous permettre de parier sur BETWINNER et de profiter des meilleures cotes, et cela quel que soit votre pays de résidence.
                        Je vais vous demander d'être attentif, l'inscription vous prendra même pas 10 minutes, 10 minutes qui vont être très bien investies et rentables sur le long terme.
                        Le bonus pour les nouveaux membres (jusqu’à 100€), ainsi que le support 24 heures sur 24 font de Betwinner l’un des meilleurs jeunes bookmakers sur le marché.
                        Utilisez notre  code promo officiel D555 pour recevoir le bonus dès aujourd'hui.</p>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!-- ##### CTA Area End ##### -->


<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"ap\">
                    <h3>Procédure d'inscription</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"http://Betwinner.com\">
                            <h5>👉 Télécharger l'application BET WINNER en cliquant içi et installer<br>
                                👉 Cliquez sur application mobile pour le télécharger</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Entrez dans les paramètres (3 traits horizontaux) situés à votre gauche</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Choisir inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 choisir \"full\" ou \"complet\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Completer votre nom, prénom, adresse mail, numéro de téléphone et mot de passe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Plus bas vous remplissez le code promo bonus \"D555\" qui vous permettra de doubler votre premier dépôt et sélectionnez bonus pour le sport.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Après avoir tout rempli, vous appuyez ici pour valider votre inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous allez appuyez sur \"send code\" et vous recevrez un code sur votre numéro.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Remplisser votre identifiant et mot de passe pour vous connecter !</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/betwinner/betwinner_crea3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://play.google.com/store/apps/details?id=com.gbs.clapay.wallet\">
                            <h5>👉 Vous êtes en CÔTE D'IVOIRE ? Et vous souhaitez faire librement vos Paris Sur BETWINNER ?
                                <br>👉 Cliquez sur ce texte et téléchargez gratuitement la version android de CLAPAY et rechargez vous par ORANGE,  MTN et MOOV.</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/betwinner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 217,  456 => 205,  440 => 192,  425 => 180,  409 => 167,  394 => 155,  379 => 143,  364 => 131,  349 => 119,  333 => 106,  296 => 72,  279 => 58,  264 => 46,  254 => 38,  244 => 37,  232 => 33,  222 => 32,  201 => 30,  189 => 27,  185 => 26,  181 => 25,  177 => 24,  174 => 23,  164 => 22,  145 => 20,  131 => 15,  127 => 14,  123 => 13,  119 => 12,  115 => 10,  105 => 9,  94 => 6,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './index.html.twig' %}

{% block bookmaker %} BetWinner {% endblock %}

{% block inscription %}
    <li><a href=\"https://bwredir.com/1bY0?p=/user/registration/\">Inscription</a></li>
{% endblock %}

{% block bookmakers %}
    <li class=\"menu-has-children\"><a href=\"\">Bookmakers</a>
        <ul class=\"dropdown\">
            <li><a href=\"{{ path('1xbet') }}\">1xBet</a></li>
            <li><a href=\"{{ path('1win') }}\">1Win</a></li>
            <li><a href=\"{{ path('linebet') }}\">LineBet</a></li>
            <li><a href=\"{{ path('melbet') }}\">MelBet</a></li>
        </ul>
    </li>
{% endblock %}

{% block nav %}BetWinner{% endblock %}

{% block footer_bookmakers %}

    <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('1win') }}\">1Win</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('1xbet') }}\">1xBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('linebet') }}\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('melbet') }}\">MelBet</a></li>
{% endblock %}

{% block image_bookmaker %} <div class=\"carousel-item active\"  style=\"background-image: url({{ asset(\"assets/index/img/betwinner/betwinner.jpg\") }})\" > {% endblock %}

{% block start %}
    <p>Betwinner est un bookmaker de nouvelle génération qui travaille depuis 2018. Le site officiel est fait dans des couleurs agréables, dispose d’une interface moderne et compréhensible. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
    <a href=\"https://bwredir.com/1bY0?p=/user/registration/\" class=\"btn-get-started scrollto\">S'inscrire</a>
{% endblock %}

{% block content %}
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_betwinner_crea.mp4') }}\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Création d'un compte BetWinner</h5>

                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_betwinner_crea1.mp4') }}\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Recharge BetWinner</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url({{ asset(\"assets/img/bg-img/bg_2.jpg\") }});\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"promo\">
                    <h2>Promotion</h2>
                    <p>👋 Salut l'équipe, on se retrouve pour notre nouveau tutoriel d'inscription qui va vous permettre de parier sur BETWINNER et de profiter des meilleures cotes, et cela quel que soit votre pays de résidence.
                        Je vais vous demander d'être attentif, l'inscription vous prendra même pas 10 minutes, 10 minutes qui vont être très bien investies et rentables sur le long terme.
                        Le bonus pour les nouveaux membres (jusqu’à 100€), ainsi que le support 24 heures sur 24 font de Betwinner l’un des meilleurs jeunes bookmakers sur le marché.
                        Utilisez notre  code promo officiel D555 pour recevoir le bonus dès aujourd'hui.</p>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!-- ##### CTA Area End ##### -->


<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"ap\">
                    <h3>Procédure d'inscription</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea1.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"http://Betwinner.com\">
                            <h5>👉 Télécharger l'application BET WINNER en cliquant içi et installer<br>
                                👉 Cliquez sur application mobile pour le télécharger</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea4.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Entrez dans les paramètres (3 traits horizontaux) situés à votre gauche</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea5.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Choisir inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea6.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 choisir \"full\" ou \"complet\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea7.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Completer votre nom, prénom, adresse mail, numéro de téléphone et mot de passe</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea8.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Plus bas vous remplissez le code promo bonus \"D555\" qui vous permettra de doubler votre premier dépôt et sélectionnez bonus pour le sport.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea9.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Après avoir tout rempli, vous appuyez ici pour valider votre inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea10.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous allez appuyez sur \"send code\" et vous recevrez un code sur votre numéro.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea11.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Remplisser votre identifiant et mot de passe pour vous connecter !</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/betwinner/betwinner_crea3.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://play.google.com/store/apps/details?id=com.gbs.clapay.wallet\">
                            <h5>👉 Vous êtes en CÔTE D'IVOIRE ? Et vous souhaitez faire librement vos Paris Sur BETWINNER ?
                                <br>👉 Cliquez sur ce texte et téléchargez gratuitement la version android de CLAPAY et rechargez vous par ORANGE,  MTN et MOOV.</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
{% endblock %}", "home/betwinner.html.twig", "C:\\laragon\\www\\setphSport2-main\\templates\\home\\betwinner.html.twig");
    }
}
