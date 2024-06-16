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

/* admin/modifMdp.html.twig */
class __TwigTemplate_ebf7cd832f620af8f024020864fcd861 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modifMdp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/modifMdp.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <h1>Register</h1>


    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifMdpForm"]) || array_key_exists("modifMdpForm", $context) ? $context["modifMdpForm"] : (function () { throw new RuntimeError('Variable "modifMdpForm" does not exist.', 10, $this->source); })()), 'form_start');
        yield "

    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modifMdpForm"]) || array_key_exists("modifMdpForm", $context) ? $context["modifMdpForm"] : (function () { throw new RuntimeError('Variable "modifMdpForm" does not exist.', 12, $this->source); })()), "plainPassword", [], "any", false, false, false, 12), 'row');
        yield "
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modifMdpForm"]) || array_key_exists("modifMdpForm", $context) ? $context["modifMdpForm"] : (function () { throw new RuntimeError('Variable "modifMdpForm" does not exist.', 13, $this->source); })()), "confirmPassword", [], "any", false, false, false, 13), 'row');
        yield "


    <button type=\"submit\" class=\"btn\">Modifier</button>
    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifMdpForm"]) || array_key_exists("modifMdpForm", $context) ? $context["modifMdpForm"] : (function () { throw new RuntimeError('Variable "modifMdpForm" does not exist.', 17, $this->source); })()), 'form_end');
        yield "

    <p><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">Retour</a></p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/modifMdp.html.twig";
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
        return array (  102 => 19,  97 => 17,  90 => 13,  86 => 12,  81 => 10,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

    <h1>Register</h1>


    {{ form_start(modifMdpForm) }}

    {{ form_row(modifMdpForm.plainPassword) }}
    {{ form_row(modifMdpForm.confirmPassword) }}


    <button type=\"submit\" class=\"btn\">Modifier</button>
    {{ form_end(modifMdpForm) }}

    <p><a href=\"{{ path(\"app_profile\") }}\">Retour</a></p>
{% endblock %}
", "admin/modifMdp.html.twig", "/home/redha/Documents/web/phpAvanceS6/php_project/templates/admin/modifMdp.html.twig");
    }
}
