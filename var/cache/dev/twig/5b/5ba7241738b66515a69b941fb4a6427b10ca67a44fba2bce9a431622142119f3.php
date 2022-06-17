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

/* home/melbet.html.twig */
class __TwigTemplate_349f11d4b49e105a3bfba6e4f84e3de369c89106e5a846d1fbbcd5b64b50ea6a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/melbet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/melbet.html.twig"));

        $this->parent = $this->loadTemplate("./index.html.twig", "home/melbet.html.twig", 1);
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

        echo " MelBet ";
        
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
        echo "    <li><a href=\"https://m.melbet.com/\">Inscription</a></li>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("betwinner");
        echo "\">BetWinner</a></li>
            <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linebet");
        echo "\">LineBet</a></li>
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

        echo "MelBet";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("betwinner");
        echo "\">BetWinner</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linebet");
        echo "\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\">1xBet</a></li>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet.jpg"), "html", null, true);
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
        echo "    <p>La société de paris Melbet propose une vaste offre de paris sportif en ligne. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
    <a href=\"https://m.melbet.com/\" class=\"btn-get-started scrollto\">S'inscrire</a>
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
            <div class=\"col-12 col-sm-6 col-lg-6\" style=\"align-content : center\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_melbet_crea.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Création d'un compte bonus melbet.</h5>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section><br>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_1.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"promo\">
                    <h2>Promotion</h2>
                    <p>Son offre de bienvenue de 100% jusqu’à 130 euros est conséquente ! C’est un bonus exclusif que nous proposons avec le code promo D555.</p>
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
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Si vous entrez dans le site et que ça affiche cette image, suivez la procédure suivante:</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea2.jpg"), "html", null, true);
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
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Telechargez CyberVpn <br>
                                👉 Sur la page d'accueil, tapez sur GO <br>
                                👉 Choisir comme pays: \"Canada\" <br>
                                👉 Nous sommes connectés sur le serveur \"Toronto, Canada\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://cutt.ly/bjeUyxw\">
                            <h5>👉 Cliquez içi sur le lien Melbet ci-dessous pour télécharger l'application et téléchargez la version Android✅</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea5.jpg"), "html", null, true);
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
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Code promo: D555 <br>
                                👉 Choisir Bonus pour le sport✅ <br>
                                Le mot de passe doit commencer par une lettre majuscule et doit contenir les chiffres.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Validez! Vous allez recevoir votre identifiant qui doit s'afficher.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Remplissez votre ID et votre mot de passe et appuyez sur se connecter.💪</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea13.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Pour recharger, c'est la même procédure que 1xbet</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea14.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Cliquer rechargez le compte.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/melbet/melbet_crea15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous trouverez içi les moyens de recharge de votre pays qui sont disponibles !</h5>
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
        return "home/melbet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 220,  459 => 208,  444 => 196,  429 => 184,  414 => 172,  396 => 157,  379 => 143,  364 => 131,  346 => 116,  331 => 104,  316 => 92,  282 => 61,  264 => 46,  254 => 38,  244 => 37,  232 => 33,  222 => 32,  201 => 30,  189 => 27,  185 => 26,  181 => 25,  177 => 24,  174 => 23,  164 => 22,  145 => 20,  131 => 15,  127 => 14,  123 => 13,  119 => 12,  115 => 10,  105 => 9,  94 => 6,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './index.html.twig' %}

{% block bookmaker %} MelBet {% endblock %}

{% block inscription %}
    <li><a href=\"https://m.melbet.com/\">Inscription</a></li>
{% endblock %}

{% block bookmakers %}
    <li class=\"menu-has-children\"><a href=\"\">Bookmakers</a>
        <ul class=\"dropdown\">
            <li><a href=\"{{ path('1xbet') }}\">1xBet</a></li>
            <li><a href=\"{{ path('1win') }}\">1Win</a></li>
            <li><a href=\"{{ path('betwinner') }}\">BetWinner</a></li>
            <li><a href=\"{{ path('linebet') }}\">LineBet</a></li>
        </ul>
    </li>
{% endblock %}

{% block nav %}MelBet{% endblock %}

{% block footer_bookmakers %}

    <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('1win') }}\">1Win</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('betwinner') }}\">BetWinner</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('linebet') }}\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('1xbet') }}\">1xBet</a></li>
{% endblock %}

{% block image_bookmaker %} <div class=\"carousel-item active\"  style=\"background-image: url({{ asset(\"assets/img/melbet/melbet.jpg\") }})\" > {% endblock %}

{% block start %}
    <p>La société de paris Melbet propose une vaste offre de paris sportif en ligne. Inscrivez-vous avec notre <strong>code promotionnel</strong> pour benéficiez de la multitude bonus offerte aux nouveaux !</p>
    <a href=\"https://m.melbet.com/\" class=\"btn-get-started scrollto\">S'inscrire</a>
{% endblock %}

{% block content %}
<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-6\" style=\"align-content : center\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_melbet_crea.mp4') }}\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Création d'un compte bonus melbet.</h5>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section><br>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url({{ asset(\"assets/img/bg-img/bg_1.jpg\") }});\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <!-- Cta Content -->
                <div class=\"cta-content text-center\" id=\"promo\">
                    <h2>Promotion</h2>
                    <p>Son offre de bienvenue de 100% jusqu’à 130 euros est conséquente ! C’est un bonus exclusif que nous proposons avec le code promo D555.</p>
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
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea1.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Si vous entrez dans le site et que ça affiche cette image, suivez la procédure suivante:</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea2.jpg\") }}\" alt=\"\">
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
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea3.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Telechargez CyberVpn <br>
                                👉 Sur la page d'accueil, tapez sur GO <br>
                                👉 Choisir comme pays: \"Canada\" <br>
                                👉 Nous sommes connectés sur le serveur \"Toronto, Canada\"</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea4.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://cutt.ly/bjeUyxw\">
                            <h5>👉 Cliquez içi sur le lien Melbet ci-dessous pour télécharger l'application et téléchargez la version Android✅</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea5.jpg\") }}\" alt=\"\">
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
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea8.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Code promo: D555 <br>
                                👉 Choisir Bonus pour le sport✅ <br>
                                Le mot de passe doit commencer par une lettre majuscule et doit contenir les chiffres.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea10.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Validez! Vous allez recevoir votre identifiant qui doit s'afficher.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea11.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Remplissez votre ID et votre mot de passe et appuyez sur se connecter.💪</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea13.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Pour recharger, c'est la même procédure que 1xbet</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea14.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Cliquer rechargez le compte.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/melbet/melbet_crea15.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous trouverez içi les moyens de recharge de votre pays qui sont disponibles !</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
{% endblock %}", "home/melbet.html.twig", "C:\\laragon\\www\\setphSport2-main\\templates\\home\\melbet.html.twig");
    }
}
