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

/* products/products.html.twig */
class __TwigTemplate_f5a9f6cce8c2ab18dd5a3c418f9ed4df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/products.html.twig", 1);
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

        yield "Animaux";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!-- ***** Preloader Start ***** -->
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
                            <li class=\"scroll-to-section\"><a href=\"/\" class=\"active\">Accueil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Men's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Women's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Kid's</a></li>
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
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Explore</a></li>
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
    <div class=\"page-heading\" id=\"top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"inner-content\">
                        <h2>Check Our Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class=\"section\" id=\"products\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
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
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"pagination\">
                        <ul>
                            <li>
                                <a href=\"#\">1</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\">2</a>
                            </li>
                            <li>
                                <a href=\"#\">3</a>
                            </li>
                            <li>
                                <a href=\"#\">4</a>
                            </li>
                            <li>
                                <a href=\"#\">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    
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
        </div>
    </footer>
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
        return "products/products.html.twig";
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
        return array (  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Animaux{% endblock %}

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
                            <li class=\"scroll-to-section\"><a href=\"/\" class=\"active\">Accueil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Men's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Women's</a></li>
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Kid's</a></li>
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
                            <li class=\"scroll-to-section\"><a href=\"index.html\">Explore</a></li>
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
    <div class=\"page-heading\" id=\"top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"inner-content\">
                        <h2>Check Our Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class=\"section\" id=\"products\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
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
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-4\">
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
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"pagination\">
                        <ul>
                            <li>
                                <a href=\"#\">1</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\">2</a>
                            </li>
                            <li>
                                <a href=\"#\">3</a>
                            </li>
                            <li>
                                <a href=\"#\">4</a>
                            </li>
                            <li>
                                <a href=\"#\">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    
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
        </div>
    </footer>
{% endblock %}
", "products/products.html.twig", "/Users/limay/Desktop/CLASSROOM_DEV/SITES_WDM4/SYMFONY/zooparadis/templates/products/products.html.twig");
    }
}
