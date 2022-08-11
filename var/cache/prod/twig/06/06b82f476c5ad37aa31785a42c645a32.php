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

/* registration/register.html.twig */
class __TwigTemplate_3dbd27fd6391fd3d3a696652da81e049 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<div class=\"container mt-4\"> 


<h1 class=\"col-md-12 text-center py-5\">Créer un compte</h1>
        <hr>
    
<div class=\"container d-flex justify-content-center pt-5\">
<div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 \">


    <h1 class=\"h3 mb-3 font-weight-normal\">S'enregistrer</h1>

        <form method=\"post\">
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        // line 24
        echo "
        ";
        // line 31
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control"]]);
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 34), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control mb-3"]]);
        // line 37
        echo "

        <button type=\"submit\" class=\"btn btn-primary\">Register</button>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "

    </div>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  91 => 37,  89 => 34,  86 => 33,  83 => 31,  80 => 24,  78 => 22,  74 => 21,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}


{% block body %}

<div class=\"container mt-4\"> 


<h1 class=\"col-md-12 text-center py-5\">Créer un compte</h1>
        <hr>
    
<div class=\"container d-flex justify-content-center pt-5\">
<div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 \">


    <h1 class=\"h3 mb-3 font-weight-normal\">S'enregistrer</h1>

        <form method=\"post\">
            {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.email, {
            'attr': {'class': 'form-control'}
        }) }}
        {# 
        {{ form_row(form.imageFile, { 
        label: 'Logo',
        'attr': {'class': 'form-control'}
    }) }}
         #}
        {{ form_row(registrationForm.username,  {
            'attr': {'class': 'form-control'}
        }) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Mot de passe',
            'attr': {'class': 'form-control mb-3'}
        }) }}

        <button type=\"submit\" class=\"btn btn-primary\">Register</button>
    {{ form_end(registrationForm) }}

    </div>
    </div>
    </div>

{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\registration\\register.html.twig");
    }
}
