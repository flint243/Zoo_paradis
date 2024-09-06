<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_349a22a588e33c028fb04ab602b26bf8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "


 <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"/\" class=\"logo\">
                            <img src=\"assets/images/logo.png\">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Accueil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#men\">Men's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#women\">Women's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#kids\">Kid's</a></li>
                            <li class=\"submenu\">
                                <a href=\"javascript:;\">Pages</a>
                                <ul>
                                    <li><a href=\"/about\">A propos</a></li>
                                    <li><a href=\"/products\">Produits</a></li>
                                    <li><a href=\"/single/product\">Produit</a></li>
                                    <li><a href=\"/contact/us\">Contact</a></li>
                                </ul>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:;\">Features</a>
                                <ul>
                                    <li><a href=\"#\">Features Page 1</a></li>
                                    <li><a href=\"#\">Features Page 2</a></li>
                                    <li><a href=\"#\">Features Page 3</a></li>
                                    <li><a rel=\"nofollow\" href=\"https://templatemo.com/page/4\" target=\"_blank\">Template Page 4</a></li>
                                </ul>
                            </li>
                            <li class=\"scroll-to-section\"><a href=\"#explore\">Explore</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class=\"main-banner\" id=\"top\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 leftSide\">
                    <div class=\"left-content p-1\">
                        <div class=\"thumb\">
                            <div class=\"inner-content\">
                                <h4>Bienvenus</br> chez Zoo paradis</h4>
                                <span>Awesome, clean &amp; creative HTML5 Template</span>
                                
                            </div>
                            <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/felins/lions.jpeg"), "html", null, true);
        yield "\" height=\"673pxpx\" alt=\"\">
                        </div>
                    </div>
                    ";
        // line 95
        yield "                </div>
                <div class=\"col-lg-6 rightSide\">
                    <div class=\"right-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>L'habitat marin</h4>
                                            <span>le monde en bleu</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>L'habitat marin</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/poissons/dauphin.jpg"), "html", null, true);
        yield "\" height=\"322px\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>L'habitat terrestre</h4>
                                            <span>Bien ancré sur ses positions</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Men</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/felins/tigre.jpeg"), "html", null, true);
        yield "\" height=\"322px\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>L'habitat celeste</h4>
                                            <span>La tête dans les étoiles</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Kids</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/oiseaux/vautour.jpg"), "html", null, true);
        yield "\" height=\"322px\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            ";
        // line 179
        yield "                        </div>
                    </div>
                    ";
        // line 265
        yield "                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class=\"section\" id=\"men\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h2>Men's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"men-item-carousel\">
                        <div class=\"owl-men-item owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-02.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Air Force 1 X</h4>
                                    <span>\$90.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-03.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Love Nana ‘20</h4>
                                    <span>\$150.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class=\"section\" id=\"women\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h2>Women's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"women-item-carousel\">
                        <div class=\"owl-women-item owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>New Green Jacket</h4>
                                    <span>\$75.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-02.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Dress</h4>
                                    <span>\$45.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-03.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Spring Collection</h4>
                                    <span>\$130.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class=\"section\" id=\"kids\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h2>Kid's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"kid-item-carousel\">
                        <div class=\"owl-kid-item owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>School Collection</h4>
                                    <span>\$80.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-02.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Summer Cap</h4>
                                    <span>\$12.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-03.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Kid</h4>
                                    <span>\$30.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class=\"section\" id=\"explore\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"left-content\">
                        <h2>Explore Our Products</h2>
                        <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
                        <div class=\"quote\">
                            <i class=\"fa fa-quote-left\"></i><p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                        </div>
                        <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
                        <p>If this template is beneficial for your website or business, please kindly <a rel=\"nofollow\" href=\"https://paypal.me/templatemo\" target=\"_blank\">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
                        <div class=\"main-border-button\">
                            <a href=\"products.html\">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"right-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"leather\">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"first-image\">
                                    <img src=\"assets/images/explore-image-01.jpg\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"second-image\">
                                    <img src=\"assets/images/explore-image-02.jpg\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"types\">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class=\"section\" id=\"social\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Social Media</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row images\">
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Fashion</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-01.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>New</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-02.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Brand</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-03.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Makeup</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-04.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Leather</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-05.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Bag</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-06.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class=\"subscribe\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"section-heading\">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id=\"subscribe\" action=\"\" method=\"get\">
                        <div class=\"row\">
                          <div class=\"col-lg-5\">
                            <fieldset>
                              <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name\" required=\"\">
                            </fieldset>
                          </div>
                          <div class=\"col-lg-5\">
                            <fieldset>
                              <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email Address\" required=\"\">
                            </fieldset>
                          </div>
                          <div class=\"col-lg-2\">
                            <fieldset>
                              <button type=\"submit\" id=\"form-submit\" class=\"main-dark-button\"><i class=\"fa fa-paper-plane\"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class=\"col-6\">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href=\"#\">Facebook</a>, <a href=\"#\">Instagram</a>, <a href=\"#\">Behance</a>, <a href=\"#\">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"first-item\">
                        <div class=\"logo\">
                            <img src=\"assets/images/white-logo.png\" alt=\"hexashop ecommerce templatemo\">
                        </div>
                        <ul>
                            <li><a href=\"#\">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href=\"#\">hexashop@company.com</a></li>
                            <li><a href=\"#\">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href=\"#\">Men’s Shopping</a></li>
                        <li><a href=\"#\">Women’s Shopping</a></li>
                        <li><a href=\"#\">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href=\"#\">Homepage</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3\">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"#\">FAQ's</a></li>
                        <li><a href=\"#\">Shipping</a></li>
                        <li><a href=\"#\">Tracking ID</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"under-footer\">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href=\"https://templatemo.com\" target=\"_parent\" title=\"free css templates\">TemplateMo</a>

                        <br>Distributed By: <a href=\"https://themewagon.com\" target=\"_blank\" title=\"free & premium responsive templates\">ThemeWagon</a></p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
    
    
</div>

";
        // line 873
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 874
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  886 => 874,  866 => 873,  256 => 265,  252 => 179,  245 => 155,  222 => 135,  199 => 115,  177 => 95,  171 => 82,  95 => 8,  85 => 7,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}



{% block body %}



 <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"/\" class=\"logo\">
                            <img src=\"assets/images/logo.png\">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Accueil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#men\">Men's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#women\">Women's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#kids\">Kid's</a></li>
                            <li class=\"submenu\">
                                <a href=\"javascript:;\">Pages</a>
                                <ul>
                                    <li><a href=\"/about\">A propos</a></li>
                                    <li><a href=\"/products\">Produits</a></li>
                                    <li><a href=\"/single/product\">Produit</a></li>
                                    <li><a href=\"/contact/us\">Contact</a></li>
                                </ul>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:;\">Features</a>
                                <ul>
                                    <li><a href=\"#\">Features Page 1</a></li>
                                    <li><a href=\"#\">Features Page 2</a></li>
                                    <li><a href=\"#\">Features Page 3</a></li>
                                    <li><a rel=\"nofollow\" href=\"https://templatemo.com/page/4\" target=\"_blank\">Template Page 4</a></li>
                                </ul>
                            </li>
                            <li class=\"scroll-to-section\"><a href=\"#explore\">Explore</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class=\"main-banner\" id=\"top\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 leftSide\">
                    <div class=\"left-content p-1\">
                        <div class=\"thumb\">
                            <div class=\"inner-content\">
                                <h4>Bienvenus</br> chez Zoo paradis</h4>
                                <span>Awesome, clean &amp; creative HTML5 Template</span>
                                
                            </div>
                            <img src=\"{{ asset('/assets/images/felins/lions.jpeg') }}\" height=\"673pxpx\" alt=\"\">
                        </div>
                    </div>
                    {#<div class=\"left-content p-1\">
                        <div class=\"thumb\">
                            <div class=\"inner-content\">
                                <h4>We Are Hexashop</h4>
                                <span>Awesome, clean &amp; creative HTML5 Template</span>
                                
                            </div>
                            <img src=\"{{ asset('/assets/images/felins/lions.jpeg') }}\" alt=\"\">
                        </div>
                    </div>#}
                </div>
                <div class=\"col-lg-6 rightSide\">
                    <div class=\"right-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>L'habitat marin</h4>
                                            <span>le monde en bleu</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>L'habitat marin</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"{{ asset('/assets/images/poissons/dauphin.jpg') }}\" height=\"322px\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>L'habitat terrestre</h4>
                                            <span>Bien ancré sur ses positions</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Men</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"{{ asset('/assets/images/felins/tigre.jpeg') }}\" height=\"322px\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>L'habitat celeste</h4>
                                            <span>La tête dans les étoiles</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Kids</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"{{ asset('/assets/images/oiseaux/vautour.jpg') }}\" height=\"322px\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            {#<div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>Accessories</h4>
                                            <span>Best Trend Accessories</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Accessories</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"assets/images/baner-right-image-04.jpg\">
                                    </div>
                                </div>
                            </div>#}
                        </div>
                    </div>
                    {#<div class=\"right-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>Women</h4>
                                            <span>Best Clothes For Women</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Women</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"{{ asset('/assets/images/felins/tigre.jpeg') }}\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>Men</h4>
                                            <span>Best Clothes For Men</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Men</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"{{ asset('/assets/images/felins/tigre.jpeg') }}\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>Kids</h4>
                                            <span>Best Clothes For Kids</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Kids</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"{{ asset('/assets/images/felins/tigre.jpeg') }}\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"right-first-image\">
                                    <div class=\"thumb\">
                                        <div class=\"inner-content\">
                                            <h4>Accessories</h4>
                                            <span>Best Trend Accessories</span>
                                        </div>
                                        <div class=\"hover-content\">
                                            <div class=\"inner\">
                                                <h4>Accessories</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class=\"main-border-button\">
                                                    <a href=\"#\">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=\"assets/images/baner-right-image-04.jpg\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>#}
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class=\"section\" id=\"men\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h2>Men's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"men-item-carousel\">
                        <div class=\"owl-men-item owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-02.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Air Force 1 X</h4>
                                    <span>\$90.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-03.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Love Nana ‘20</h4>
                                    <span>\$150.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/men-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class=\"section\" id=\"women\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h2>Women's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"women-item-carousel\">
                        <div class=\"owl-women-item owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>New Green Jacket</h4>
                                    <span>\$75.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-02.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Dress</h4>
                                    <span>\$45.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-03.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Spring Collection</h4>
                                    <span>\$130.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/women-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class=\"section\" id=\"kids\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h2>Kid's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"kid-item-carousel\">
                        <div class=\"owl-kid-item owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>School Collection</h4>
                                    <span>\$80.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-02.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Summer Cap</h4>
                                    <span>\$12.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-03.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Kid</h4>
                                    <span>\$30.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <div class=\"hover-content\">
                                        <ul>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-eye\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-star\"></i></a></li>
                                            <li><a href=\"single-product.html\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=\"assets/images/kid-01.jpg\" alt=\"\">
                                </div>
                                <div class=\"down-content\">
                                    <h4>Classic Spring</h4>
                                    <span>\$120.00</span>
                                    <ul class=\"stars\">
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class=\"section\" id=\"explore\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"left-content\">
                        <h2>Explore Our Products</h2>
                        <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
                        <div class=\"quote\">
                            <i class=\"fa fa-quote-left\"></i><p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                        </div>
                        <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
                        <p>If this template is beneficial for your website or business, please kindly <a rel=\"nofollow\" href=\"https://paypal.me/templatemo\" target=\"_blank\">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
                        <div class=\"main-border-button\">
                            <a href=\"products.html\">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"right-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"leather\">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"first-image\">
                                    <img src=\"assets/images/explore-image-01.jpg\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"second-image\">
                                    <img src=\"assets/images/explore-image-02.jpg\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"types\">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class=\"section\" id=\"social\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Social Media</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row images\">
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Fashion</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-01.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>New</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-02.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Brand</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-03.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Makeup</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-04.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Leather</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-05.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-2\">
                    <div class=\"thumb\">
                        <div class=\"icon\">
                            <a href=\"http://instagram.com\">
                                <h6>Bag</h6>
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </div>
                        <img src=\"assets/images/instagram-06.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class=\"subscribe\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"section-heading\">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id=\"subscribe\" action=\"\" method=\"get\">
                        <div class=\"row\">
                          <div class=\"col-lg-5\">
                            <fieldset>
                              <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name\" required=\"\">
                            </fieldset>
                          </div>
                          <div class=\"col-lg-5\">
                            <fieldset>
                              <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email Address\" required=\"\">
                            </fieldset>
                          </div>
                          <div class=\"col-lg-2\">
                            <fieldset>
                              <button type=\"submit\" id=\"form-submit\" class=\"main-dark-button\"><i class=\"fa fa-paper-plane\"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class=\"col-6\">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href=\"#\">Facebook</a>, <a href=\"#\">Instagram</a>, <a href=\"#\">Behance</a>, <a href=\"#\">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"first-item\">
                        <div class=\"logo\">
                            <img src=\"assets/images/white-logo.png\" alt=\"hexashop ecommerce templatemo\">
                        </div>
                        <ul>
                            <li><a href=\"#\">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href=\"#\">hexashop@company.com</a></li>
                            <li><a href=\"#\">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href=\"#\">Men’s Shopping</a></li>
                        <li><a href=\"#\">Women’s Shopping</a></li>
                        <li><a href=\"#\">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href=\"#\">Homepage</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3\">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"#\">FAQ's</a></li>
                        <li><a href=\"#\">Shipping</a></li>
                        <li><a href=\"#\">Tracking ID</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"under-footer\">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href=\"https://templatemo.com\" target=\"_parent\" title=\"free css templates\">TemplateMo</a>

                        <br>Distributed By: <a href=\"https://themewagon.com\" target=\"_blank\" title=\"free & premium responsive templates\">ThemeWagon</a></p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
    
    
</div>

{% block javascripts %}

{% endblock %}
{% endblock %}
", "home/index.html.twig", "/Users/limay/Desktop/CLASSROOM_DEV/SITES_WDM4/SYMFONY/zooparadis/templates/home/index.html.twig");
    }
}
