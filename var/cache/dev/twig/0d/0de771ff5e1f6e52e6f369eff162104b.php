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

/* single_product/singleProduct.html.twig */
class __TwigTemplate_db68f55d4571538bee4586ca908e5983 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single_product/singleProduct.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single_product/singleProduct.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "single_product/singleProduct.html.twig", 1);
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

        yield "Animal";
        
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
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class=\"section\" id=\"product\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                <div class=\"left-images\">
                    <img src=\"assets/images/single-product-01.jpg\" alt=\"\">
                    <img src=\"assets/images/single-product-02.jpg\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"right-content\">
                    <h4>New Green Jacket</h4>
                    <span class=\"price\">\$75.00</span>
                    <ul class=\"stars\">
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                    </ul>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                    <div class=\"quote\">
                        <i class=\"fa fa-quote-left\"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                    </div>
                    <div class=\"quantity-content\">
                        <div class=\"left-content\">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class=\"right-content\">
                            <div class=\"quantity buttons_added\">
                                <input type=\"button\" value=\"-\" class=\"minus\"><input type=\"number\" step=\"1\" min=\"1\" max=\"\" name=\"quantity\" value=\"1\" title=\"Qty\" class=\"input-text qty text\" size=\"4\" pattern=\"\" inputmode=\"\"><input type=\"button\" value=\"+\" class=\"plus\">
                            </div>
                        </div>
                    </div>
                    <div class=\"total\">
                        <h4>Total: \$210.00</h4>
                        <div class=\"main-border-button\"><a href=\"#\">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
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
        return "single_product/singleProduct.html.twig";
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

{% block title %}Animal{% endblock %}

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
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class=\"section\" id=\"product\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                <div class=\"left-images\">
                    <img src=\"assets/images/single-product-01.jpg\" alt=\"\">
                    <img src=\"assets/images/single-product-02.jpg\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"right-content\">
                    <h4>New Green Jacket</h4>
                    <span class=\"price\">\$75.00</span>
                    <ul class=\"stars\">
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                    </ul>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                    <div class=\"quote\">
                        <i class=\"fa fa-quote-left\"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                    </div>
                    <div class=\"quantity-content\">
                        <div class=\"left-content\">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class=\"right-content\">
                            <div class=\"quantity buttons_added\">
                                <input type=\"button\" value=\"-\" class=\"minus\"><input type=\"number\" step=\"1\" min=\"1\" max=\"\" name=\"quantity\" value=\"1\" title=\"Qty\" class=\"input-text qty text\" size=\"4\" pattern=\"\" inputmode=\"\"><input type=\"button\" value=\"+\" class=\"plus\">
                            </div>
                        </div>
                    </div>
                    <div class=\"total\">
                        <h4>Total: \$210.00</h4>
                        <div class=\"main-border-button\"><a href=\"#\">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
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
", "single_product/singleProduct.html.twig", "/Users/limay/Desktop/CLASSROOM_DEV/SITES_WDM4/SYMFONY/zooparadis/templates/single_product/singleProduct.html.twig");
    }
}
