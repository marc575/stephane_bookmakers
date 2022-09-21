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

/* home/1win.html.twig */
class __TwigTemplate_f960d06d20ec4e5d50b8287fd7a8981a702091c75feb749ac3c2a66a0dcedd12 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/1win.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/1win.html.twig"));

        $this->parent = $this->loadTemplate("./index.html.twig", "home/1win.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "1Win";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_bookmaker($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bookmaker"));

        echo " 1Win ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_inscription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inscription"));

        // line 9
        echo "    <li><a href=\"https://1wvua.top/#hzlt\">Inscription</a></li>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\">1xBet</a></li>
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

    // line 24
    public function block_footer_bookmakers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bookmakers"));

        // line 25
        echo "
    <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1xbet");
        echo "\">1xBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("betwinner");
        echo "\">BetWinner</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linebet");
        echo "\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("melbet");
        echo "\">MelBet</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    <!-- ##### Best Receipe Area Start ##### -->
    <section class=\"best-receipe-area\">
        <div class=\"container\">

            <div class=\"row\">

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\" ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_crea3.mp4"), "html", null, true);
        echo " \"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Création d'un compte 1Win bonus.</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_crea.mp4"), "html", null, true);
        echo " \"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Comment faire des depots sur 1Win</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_crea2.mp4"), "html", null, true);
        echo " \"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Comment parier sur 1Win</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/video_1win_b1.mp4"), "html", null, true);
        echo "\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Bonus 1win</h5>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><br>
    <!-- ##### Best Receipe Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url( ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-img/bg_1.jpg"), "html", null, true);
        echo " );\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <!-- Cta Content -->
                    <div class=\"cta-content text-center\" id=\"promo\">
                        <h2>Promotion</h2>
                        <p>Le site propose non seulement des paris sportifs et eSports mais aussi le casino, poker, loteries et sport virtuel.
                            Cette entreprise en ligne est populaire, surtout grâce au bonus généreux sur le premier dépôt de 500%.
                            Utilisez notre notre code promo officiel D555 pour recevoir le bonus dès aujourd'hui.</p>
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
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea6.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://1wzrn.top/\">
                            <h5>👉 Cliquez/appuyer sur \"inscription\". </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea1.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Enregistrement ou inscription.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea2.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea3.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 choisissez rapide ou par réseau sociaux. <br>
                                👉 Appuyez sur ajouter un code promo et vous mettez le D555</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea4.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 S'inscrire. <br>
                                👉 Le mot de passe doit commencer par une lettre majuscule et doit renfermer les chiffres.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea6.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Votre compte est definitivement prêt à être utilisé et vous pouvez recharger et parier</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea7.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Les moyens de recharge: Perfect money, Visa, mybux voucher et les crypto monaie</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1win/1win_crea8.jpg"), "html", null, true);
        echo " \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Les différentes crypto-monnaies</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><br>
    <!-- ##### Small Receipe Area Start ##### -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/1win.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 212,  411 => 200,  396 => 188,  379 => 174,  363 => 161,  348 => 149,  333 => 137,  318 => 125,  283 => 93,  265 => 78,  250 => 66,  235 => 54,  220 => 42,  209 => 33,  199 => 32,  187 => 29,  183 => 28,  179 => 27,  175 => 26,  172 => 25,  162 => 24,  148 => 18,  144 => 17,  140 => 16,  136 => 15,  132 => 13,  122 => 12,  111 => 9,  101 => 8,  82 => 6,  63 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './index.html.twig' %}


{% block title %}1Win{% endblock %}

{% block bookmaker %} 1Win {% endblock %}

{% block inscription %}
    <li><a href=\"https://1wvua.top/#hzlt\">Inscription</a></li>
{% endblock %}

{% block bookmakers %}
    <li class=\"menu-has-children\"><a href=\"\">Bookmakers</a>
        <ul class=\"dropdown\">
            <li><a href=\"{{ path('1xbet') }}\">1xBet</a></li>
            <li><a href=\"{{ path('betwinner') }}\">BetWinner</a></li>
            <li><a href=\"{{ path('linebet') }}\">LineBet</a></li>
            <li><a href=\"{{ path('melbet') }}\">MelBet</a></li>
        </ul>
    </li>
{% endblock %}


{% block footer_bookmakers %}

    <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('1xbet') }}\">1xBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('betwinner') }}\">BetWinner</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('linebet') }}\">LineBet</a></li>
                            <li><i class=\"ion-ios-arrow-right\"></i> <a href=\"{{ path('melbet') }}\">MelBet</a></li>
{% endblock %}

{% block content %}
    <!-- ##### Best Receipe Area Start ##### -->
    <section class=\"best-receipe-area\">
        <div class=\"container\">

            <div class=\"row\">

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\" {{ asset('./assets/img/video_1win_crea3.mp4') }} \"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Création d'un compte 1Win bonus.</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1win_crea.mp4') }} \"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Comment faire des depots sur 1Win</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1win_crea2.mp4') }} \"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Comment parier sur 1Win</h5>

                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-best-receipe-area mb-30\">
                        <video class=\"col-12 title-section\" height=\"350\" src=\"{{ asset('./assets/img/video_1win_b1.mp4') }}\"  controls></video>
                        <div class=\"receipe-content\">

                                <h5>Bonus 1win</h5>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><br>
    <!-- ##### Best Receipe Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section class=\"cta-area bg-img bg-overlay\" style=\"background-image: url( {{ asset('assets/img/bg-img/bg_1.jpg') }} );\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <!-- Cta Content -->
                    <div class=\"cta-content text-center\" id=\"promo\">
                        <h2>Promotion</h2>
                        <p>Le site propose non seulement des paris sportifs et eSports mais aussi le casino, poker, loteries et sport virtuel.
                            Cette entreprise en ligne est populaire, surtout grâce au bonus généreux sur le premier dépôt de 500%.
                            Utilisez notre notre code promo officiel D555 pour recevoir le bonus dès aujourd'hui.</p>
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
                    <img src=\"{{ asset('assets/img/1win/1win_crea6.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"https://1wzrn.top/\">
                            <h5>👉 Cliquez/appuyer sur \"inscription\". </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset('assets/img/1win/1win_crea1.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Enregistrement ou inscription.</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset('assets/img/1win/1win_crea2.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Inscription</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset('assets/img/1win/1win_crea3.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 choisissez rapide ou par réseau sociaux. <br>
                                👉 Appuyez sur ajouter un code promo et vous mettez le D555</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset('assets/img/1win/1win_crea4.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 S'inscrire. <br>
                                👉 Le mot de passe doit commencer par une lettre majuscule et doit renfermer les chiffres.
                            </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset('assets/img/1win/1win_crea6.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Votre compte est definitivement prêt à être utilisé et vous pouvez recharger et parier</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset('assets/img/1win/1win_crea7.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Les moyens de recharge: Perfect money, Visa, mybux voucher et les crypto monaie</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single Best Receipe Area -->
            <div class=\"col-12 col-sm-6 col-lg-3\">
                <div class=\"single-best-receipe-area mb-30\">
                    <img src=\"{{ asset('assets/img/1win/1win_crea8.jpg') }} \" alt=\"\">
                    <div class=\"receipe-content\">
                        <a href=\"#\">
                            <h5>👉 Les différentes crypto-monnaies</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><br>
    <!-- ##### Small Receipe Area Start ##### -->
{% endblock %}", "home/1win.html.twig", "C:\\laragon\\www\\D555\\templates\\home\\1win.html.twig");
    }
}
