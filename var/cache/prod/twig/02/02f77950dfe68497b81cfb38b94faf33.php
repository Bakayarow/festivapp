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

/* post/new.html.twig */
class __TwigTemplate_dcd875ce45ffa93938d6ad2bd8b629c5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "New Post";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 7
        echo "
    <h1 class=\"col-md-12 text-center py-5\">Nouvelle publication</h1>
        <hr>

    ";
        // line 11
        echo twig_include($this->env, $context, "post/_form.html.twig");
        echo "

    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_index");
        echo "\" class=\"btn btn-dark\">Revenir à l'accueil</a>
";
    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  66 => 11,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Post{% endblock %}

{% block body %}
{% form_theme form 'bootstrap_5_layout.html.twig' %}

    <h1 class=\"col-md-12 text-center py-5\">Nouvelle publication</h1>
        <hr>

    {{ include('post/_form.html.twig') }}

    <a href=\"{{ path('app_post_index') }}\" class=\"btn btn-dark\">Revenir à l'accueil</a>
{% endblock %}
", "post/new.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\post\\new.html.twig");
    }
}
