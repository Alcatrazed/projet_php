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

/* base.html.twig */
class __TwigTemplate_1ebd732d4a413abe76aab4878e694f15 extends Template
{
    private $source;
    private $macros = [];

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
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <style>
        /* Styles for navigation */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .navbar-right {
            float: right;
        }

        @media screen and (max-width: 600px) {
            .navbar a {
                float: none;
                display: block;
                text-align: left;
            }

            .navbar-right {
                float: none;
            }
        }
    </style>
    ";
        // line 50
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 52
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 54
        yield "</head>
<body>

<div class=\"navbar\">
    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"";
        if ((array_key_exists("block", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58) == "home"))) {
            yield "active";
        }
        yield "\">Home</a>
    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"";
        if ((array_key_exists("block", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59) == "about"))) {
            yield "active";
        }
        yield "\">Evenement</a>
    <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        yield "\" class=\"";
        if ((array_key_exists("block", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60) == "inscription"))) {
            yield "active";
        }
        yield "\">Inscription</a>
    ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            yield "        <div class=\"navbar-right\">
            <a href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"";
            if ((array_key_exists("block", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63) == "profile"))) {
                yield "active";
            }
            yield "\">Profile</a>
            <a href=\"";
            // line 64
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        </div>
    ";
        } else {
            // line 67
            yield "        <div class=\"navbar-right\">
            <a href=\"";
            // line 68
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
            <a href=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
        </div>
    ";
        }
        // line 72
        yield "</div>

";
        // line 74
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 75
        yield "
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 50
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 51
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  227 => 74,  219 => 53,  212 => 52,  204 => 51,  197 => 50,  183 => 5,  172 => 75,  170 => 74,  166 => 72,  160 => 69,  156 => 68,  153 => 67,  147 => 64,  139 => 63,  136 => 62,  134 => 61,  126 => 60,  118 => 59,  110 => 58,  104 => 54,  101 => 52,  99 => 50,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <style>
        /* Styles for navigation */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .navbar-right {
            float: right;
        }

        @media screen and (max-width: 600px) {
            .navbar a {
                float: none;
                display: block;
                text-align: left;
            }

            .navbar-right {
                float: none;
            }
        }
    </style>
    {% block stylesheets %}
    {% endblock %}
    {% block javascripts %}
    {% endblock %}
</head>
<body>

<div class=\"navbar\">
    <a href=\"{{ path('app_admin') }}\" class=\"{% if block is defined and block.name == 'home' %}active{% endif %}\">Home</a>
    <a href=\"{{ path('app_evenement_index') }}\" class=\"{% if block is defined and block.name == 'about' %}active{% endif %}\">Evenement</a>
    <a href=\"{{ path('app_inscription') }}\" class=\"{% if block is defined and block.name == 'inscription' %}active{% endif %}\">Inscription</a>
    {% if app.user %}
        <div class=\"navbar-right\">
            <a href=\"{{ path('app_profile') }}\" class=\"{% if block is defined and block.name == 'profile' %}active{% endif %}\">Profile</a>
            <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% else %}
        <div class=\"navbar-right\">
            <a href=\"{{ path('app_login') }}\">Login</a>
            <a href=\"{{ path('app_register') }}\">Register</a>
        </div>
    {% endif %}
</div>

{% block body %}{% endblock %}

</body>
</html>
", "base.html.twig", "/home/redha/Documents/web/phpAvanceS6/php_project/templates/base.html.twig");
    }
}
