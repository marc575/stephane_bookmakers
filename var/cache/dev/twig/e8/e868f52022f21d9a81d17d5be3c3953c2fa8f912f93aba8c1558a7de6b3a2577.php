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

/* home/1xbet.html.twig */
class __TwigTemplate_faec9dde262cbb10eecab7165959d3e5b81ca33049c6b626342d2df2ef200e59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bookmaker' => [$this, 'block_bookmaker'],
            'inscription' => [$this, 'block_inscription'],
            'bookmakers' => [$this, 'block_bookmakers'],
            'xbet' => [$this, 'block_xbet'],
            'footer_bookmakers' => [$this, 'block_footer_bookmakers'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/1xbet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/1xbet.html.twig"));

        $this->parent = $this->loadTemplate("./index.html.twig", "home/1xbet.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "1xBet";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_bookmaker($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        echo "1xBet";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_inscription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        // line 8
        echo "    <li><a href=\"https://cutt.ly/OjksHoJ\">Inscription</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmakers"));

        // line 13
        echo "    <li class=\"menu-has-children\"><a href=\"\">Bookmakers</a>
        <ul class=\"dropdown\">
            <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1win");
        echo "\">1Win</a></li>
            <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("betwinner");
        echo "\">BetWinner</a></li>
            <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linebet");
        echo "\">LineBet</a></li>
            <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("melbet");
        echo "\">MelBet</a></li>
        </ul>
    </li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_xbet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "xbet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "xbet"));

        // line 26
        echo "<ul class=\"dropdown\">
    <li><a href=\"#ap\">1xbet Afrique</a></li>
    <li><a href=\"#ip\">1xbet sur Iphone</a></li>
    <li><a href=\"#et\">1xbet Europe</a></li>
</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_footer_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        // line 34
        echo "
    <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1win");
        echo "\">1Win</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("betwinner");
        echo "\">BetWinner</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linebet");
        echo "\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("melbet");
        echo "\">MelBet</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "    <!-- ##### CTA Area Start ##### -->
    <section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_1.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <!-- Cta Content -->
                    <div class=\"cta-content text-center\" id=\"promo\">
                        <h2>Promotion</h2>
                        <p>👋 Les paris sportifs n'ont jamais été aussi pratiques et simples. Il suffit de télécharger l'application 1xBet et vous êtes dans un grand jeu! Pour tous les nouveaux joueurs sur l'application mobile: Bonus jusqu'à 65 000 FCFA  lors de l'inscription.  Utilisez notre  code promo officiel D555 pour recevoir le bonus dès aujourd'hui.
                            Suivez tutoriel d'inscription chez 1xbet qui vous permet d'avoir tous vos bonus et d'avoir un compte certifié et de profiter des meilleures cotes, et cela quelque soit votre pays de résidence.
                            Je vais vous demander d'être attentif, 10 minutes qui vont être très bien investies et rentables sur le long terme.✊💪💪💪</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->
    <br>

<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_cre.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Création d'un compte 1xBet</h5>

                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr_er.mp4"), "html", null, true);
        echo "\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>1xBet en france</h5>

                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_ip.mp4"), "html", null, true);
        echo "\"  controls></video>
                    <div class=\"receipe-content\">

                            <h5>1xbet sur Iphone</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!-- ##### Best Receipe Area End ##### -->

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
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_crea1.jpg"), "html", null, true);
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
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_crea3.jpg"), "html", null, true);
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
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_crea6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 le mot de passe doit commencer par une lettre majuscule et doit contenir les chiffres et les lettres et doit être d'au moins 8 caractères.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_crea8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Valider! Un SMS doit être envoyé sur votre numéro pour vous permettre de confirmer votre inscription.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_crea10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Après connexion, vous pourrez recevoir les bonus chaque lundi et vendredi à votre première recharge.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_crea12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Cliquer sur votre profil puis recherger le compte, au besoin.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_crea14.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous trouverez içi les moyens de recharge de votre pays qui sont disponibles</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_pb1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Pour activer le bonus tu entres dans ton profil et tu choisis \"changer de compte\"</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><br>

<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"ip\">
                    <h3>1xBet sur Iphone</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1xbet/1xbet_ip12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

        </div>
    </div>
</section><br>

    <!-- ##### Best Receipe Area Start ##### -->
    <section class=\"best-receipe-area\">
        <div class=\"container\">

            <div class=\"row\">
                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-4\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr2.mp4"), "html", null, true);
        echo "\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>1xbet france</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-4\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr.mp4"), "html", null, true);
        echo "\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>1xBet international</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1xbet_fr3.mp4"), "html", null, true);
        echo "\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Les coupons 1xBet</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- ##### Best Receipe Area End ##### -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/1xbet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 353,  611 => 341,  596 => 329,  577 => 313,  567 => 306,  557 => 299,  547 => 292,  537 => 285,  527 => 278,  517 => 271,  507 => 264,  497 => 257,  487 => 250,  477 => 243,  467 => 236,  436 => 208,  421 => 196,  406 => 184,  391 => 172,  376 => 160,  361 => 148,  344 => 134,  329 => 122,  298 => 94,  283 => 82,  268 => 70,  239 => 44,  236 => 43,  226 => 42,  214 => 38,  210 => 37,  206 => 36,  202 => 35,  199 => 34,  189 => 33,  174 => 26,  164 => 25,  149 => 18,  145 => 17,  141 => 16,  137 => 15,  133 => 13,  123 => 12,  112 => 8,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './index.html.twig' %}

{% block title %}1xBet{% endblock %}

{% block bookmaker %}1xBet{% endblock %}

{% block inscription %}
    <li><a href=\"https://cutt.ly/OjksHoJ\">Inscription</a></li>
{% endblock %}


{% block bookmakers %}
    <li class=\"menu-has-children\"><a href=\"\">Bookmakers</a>
        <ul class=\"dropdown\">
            <li><a href=\"{{ path('1win') }}\">1Win</a></li>
            <li><a href=\"{{ path('betwinner') }}\">BetWinner</a></li>
            <li><a href=\"{{ path('linebet') }}\">LineBet</a></li>
            <li><a href=\"{{ path('melbet') }}\">MelBet</a></li>
        </ul>
    </li>

{% endblock %}


{% block xbet %}
<ul class=\"dropdown\">
    <li><a href=\"#ap\">1xbet Afrique</a></li>
    <li><a href=\"#ip\">1xbet sur Iphone</a></li>
    <li><a href=\"#et\">1xbet Europe</a></li>
</ul>
{% endblock %}

{% block footer_bookmakers %}

    <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('1win') }}\">1Win</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('betwinner') }}\">BetWinner</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('linebet') }}\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('melbet') }}\">MelBet</a></li>
{% endblock %}


{% block content %}
    <!-- ##### CTA Area Start ##### -->
    <section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url({{ asset(\"assets/img/bg-img/bg_1.jpg\") }});\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <!-- Cta Content -->
                    <div class=\"cta-content text-center\" id=\"promo\">
                        <h2>Promotion</h2>
                        <p>👋 Les paris sportifs n'ont jamais été aussi pratiques et simples. Il suffit de télécharger l'application 1xBet et vous êtes dans un grand jeu! Pour tous les nouveaux joueurs sur l'application mobile: Bonus jusqu'à 65 000 FCFA  lors de l'inscription.  Utilisez notre  code promo officiel D555 pour recevoir le bonus dès aujourd'hui.
                            Suivez tutoriel d'inscription chez 1xbet qui vous permet d'avoir tous vos bonus et d'avoir un compte certifié et de profiter des meilleures cotes, et cela quelque soit votre pays de résidence.
                            Je vais vous demander d'être attentif, 10 minutes qui vont être très bien investies et rentables sur le long terme.✊💪💪💪</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->
    <br>

<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1xbet_cre.mp4') }}\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>Création d'un compte 1xBet</h5>

                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1xbet_fr_er.mp4') }}\" controls></video>
                    <div class=\"receipe-content\">

                            <h5>1xBet en france</h5>

                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-4\">
                <div class=\"single-best-receipe-area mb-30\">
                    <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1xbet_ip.mp4') }}\"  controls></video>
                    <div class=\"receipe-content\">

                            <h5>1xbet sur Iphone</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!-- ##### Best Receipe Area End ##### -->

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
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_crea1.jpg\") }}\" alt=\"\">
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
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_crea3.jpg\") }}\" alt=\"\">
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
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_crea6.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 le mot de passe doit commencer par une lettre majuscule et doit contenir les chiffres et les lettres et doit être d'au moins 8 caractères.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_crea8.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Valider! Un SMS doit être envoyé sur votre numéro pour vous permettre de confirmer votre inscription.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_crea10.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Après connexion, vous pourrez recevoir les bonus chaque lundi et vendredi à votre première recharge.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_crea12.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Cliquer sur votre profil puis recherger le compte, au besoin.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_crea14.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Vous trouverez içi les moyens de recharge de votre pays qui sont disponibles</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_pb1.jpg\") }}\" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Pour activer le bonus tu entres dans ton profil et tu choisis \"changer de compte\"</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><br>

<!-- ##### Best Receipe Area Start ##### -->
<section class=\"best-receipe-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\" id=\"ip\">
                    <h3>1xBet sur Iphone</h3>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip1.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip2.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip3.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip4.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip5.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip6.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip7.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip8.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip9.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip10.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip11.jpg\") }}\" alt=\"\">
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset(\"assets/img/1xbet/1xbet_ip12.jpg\") }}\" alt=\"\">
                </div>
            </div>

        </div>
    </div>
</section><br>

    <!-- ##### Best Receipe Area Start ##### -->
    <section class=\"best-receipe-area\">
        <div class=\"container\">

            <div class=\"row\">
                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-4\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1xbet_fr2.mp4') }}\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>1xbet france</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-4\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1xbet_fr.mp4') }}\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>1xBet international</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1xbet_fr3.mp4') }}\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Les coupons 1xBet</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- ##### Best Receipe Area End ##### -->
{% endblock %}", "home/1xbet.html.twig", "C:\\laragon\\www\\D555\\templates\\home\\1xbet.html.twig");
    }
}
