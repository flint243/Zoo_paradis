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

/* base.html.twig */
class __TwigTemplate_7869ae9d97dc442597399e930cbb30f5 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>



            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/fontawesome.css"), "html", null, true);
        yield "\">

            <link rel=\"preload\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/templatemo-hexashop.css"), "html", null, true);
        yield "\" as=\"style\" onload=\"this.rel='stylesheet'\">

            <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/owl-carousel.css"), "html", null, true);
        yield "\">

            <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/lightbox.css"), "html", null, true);
        yield "\">
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "

";
        // line 21
        yield "

        <!-- jQuery -->
    <script src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/jquery-2.1.0.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Bootstrap -->
    <script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/popper.js"), "html", null, true);
        yield "\"></script>

    <!-- Plugins -->
    <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/owl-carousel.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/accordions.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/datepicker.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/scrollreveal.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/imgfix.min.js"), "html", null, true);
        yield "\"></script> 
    <script src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/slick.js"), "html", null, true);
        yield "\"></script> 
    <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/lightbox.js"), "html", null, true);
        yield "\"></script> 
    <script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/isotope.js"), "html", null, true);
        yield "\"></script> 
    
    <!-- Global Init -->
    <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/custom.js"), "html", null, true);
        yield "\"></script>

    <script>

        \$(function() {
            var selectedClass = \"\";
            \$(\"p\").click(function(){
            selectedClass = \$(this).attr(\"data-rel\");
            \$(\"#portfolio\").fadeTo(50, 0.1);
                \$(\"#portfolio div\").not(\".\"+selectedClass).fadeOut();
            setTimeout(function() {
              \$(\".\"+selectedClass).fadeIn();
              \$(\"#portfolio\").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

        ";
        // line 62
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 63
        yield "
        
    </head>
    <body>
        ";
        // line 67
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 68
        yield "        
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  258 => 67,  239 => 62,  220 => 17,  200 => 5,  186 => 68,  184 => 67,  178 => 63,  176 => 62,  153 => 42,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  105 => 27,  99 => 24,  94 => 21,  90 => 18,  88 => 17,  84 => 16,  79 => 14,  74 => 12,  69 => 10,  65 => 9,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>



            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/fontawesome.css') }}\">

            <link rel=\"preload\" href=\"{{ asset('/assets/css/templatemo-hexashop.css') }}\" as=\"style\" onload=\"this.rel='stylesheet'\">

            <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/owl-carousel.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/lightbox.css') }}\">
        {% block stylesheets %}{% endblock %}


{#}--------------{#}


        <!-- jQuery -->
    <script src=\"{{ asset('/assets/js/jquery-2.1.0.min.js') }}\"></script>

    <!-- Bootstrap -->
    <script src=\"{{ asset('/assets/js/popper.js') }}\"></script>

    <!-- Plugins -->
    <script src=\"{{ asset('/assets/js/owl-carousel.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/accordions.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/datepicker.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/scrollreveal.min.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/imgfix.min.js') }}\"></script> 
    <script src=\"{{ asset('/assets/js/slick.js') }}\"></script> 
    <script src=\"{{ asset('/assets/js/lightbox.js') }}\"></script> 
    <script src=\"{{ asset('/assets/js/isotope.js') }}\"></script> 
    
    <!-- Global Init -->
    <script src=\"{{ asset('/assets/js/custom.js') }}\"></script>

    <script>

        \$(function() {
            var selectedClass = \"\";
            \$(\"p\").click(function(){
            selectedClass = \$(this).attr(\"data-rel\");
            \$(\"#portfolio\").fadeTo(50, 0.1);
                \$(\"#portfolio div\").not(\".\"+selectedClass).fadeOut();
            setTimeout(function() {
              \$(\".\"+selectedClass).fadeIn();
              \$(\"#portfolio\").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

        {% block javascripts %}{% endblock %}

        
    </head>
    <body>
        {% block body %}{% endblock %}
        
    </body>
</html>
", "base.html.twig", "/Users/limay/Desktop/CLASSROOM_DEV/SITES_WDM4/SYMFONY/zooparadis/templates/base.html.twig");
    }
}
