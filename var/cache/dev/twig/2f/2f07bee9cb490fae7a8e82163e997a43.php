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

/* about/about.html.twig */
class __TwigTemplate_85c58123eafc44b70f47b271c623b0a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/about.html.twig", 1);
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

        yield "A propos";
        
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
    <div class=\"page-heading about-page-heading\" id=\"top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"inner-content\">
                        <h2>About Our Company</h2>
                        <span>Awesome, clean &amp; creative HTML5 Template</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class=\"about-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"left-image\">
                        <img src=\"assets/images/about-left-image.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"right-content\">
                        <h4>About Us &amp; Our Skills</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                        <div class=\"quote\">
                            <i class=\"fa fa-quote-left\"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod kon tempor incididunt ut labore.</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
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
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class=\"our-team\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Our Amazing Team</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"team-item\">
                        <div class=\"thumb\">
                            <div class=\"hover-effect\">
                                <div class=\"inner-content\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src=\"assets/images/team-member-01.jpg\">
                        </div>
                        <div class=\"down-content\">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"team-item\">
                        <div class=\"thumb\">
                            <div class=\"hover-effect\">
                                <div class=\"inner-content\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src=\"assets/images/team-member-02.jpg\">
                        </div>
                        <div class=\"down-content\">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"team-item\">
                        <div class=\"thumb\">
                            <div class=\"hover-effect\">
                                <div class=\"inner-content\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src=\"assets/images/team-member-03.jpg\">
                        </div>
                        <div class=\"down-content\">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class=\"our-services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Our Services</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"service-item\">
                        <h4>Synther Vaporware</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        <img src=\"assets/images/service-01.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"service-item\">
                        <h4>Locavore Squidward</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        <img src=\"assets/images/service-02.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"service-item\">
                        <h4>Health Gothfam</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        <img src=\"assets/images/service-03.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

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
        return "about/about.html.twig";
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

{% block title %}A propos{% endblock %}

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
    <div class=\"page-heading about-page-heading\" id=\"top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"inner-content\">
                        <h2>About Our Company</h2>
                        <span>Awesome, clean &amp; creative HTML5 Template</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class=\"about-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"left-image\">
                        <img src=\"assets/images/about-left-image.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"right-content\">
                        <h4>About Us &amp; Our Skills</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                        <div class=\"quote\">
                            <i class=\"fa fa-quote-left\"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod kon tempor incididunt ut labore.</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
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
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class=\"our-team\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Our Amazing Team</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"team-item\">
                        <div class=\"thumb\">
                            <div class=\"hover-effect\">
                                <div class=\"inner-content\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src=\"assets/images/team-member-01.jpg\">
                        </div>
                        <div class=\"down-content\">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"team-item\">
                        <div class=\"thumb\">
                            <div class=\"hover-effect\">
                                <div class=\"inner-content\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src=\"assets/images/team-member-02.jpg\">
                        </div>
                        <div class=\"down-content\">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"team-item\">
                        <div class=\"thumb\">
                            <div class=\"hover-effect\">
                                <div class=\"inner-content\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src=\"assets/images/team-member-03.jpg\">
                        </div>
                        <div class=\"down-content\">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class=\"our-services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <h2>Our Services</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"service-item\">
                        <h4>Synther Vaporware</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        <img src=\"assets/images/service-01.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"service-item\">
                        <h4>Locavore Squidward</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        <img src=\"assets/images/service-02.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"service-item\">
                        <h4>Health Gothfam</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        <img src=\"assets/images/service-03.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

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
        </div>
    </footer>

{% endblock %}
", "about/about.html.twig", "/Users/limay/Desktop/CLASSROOM_DEV/SITES_WDM4/SYMFONY/zooparadis/templates/about/about.html.twig");
    }
}