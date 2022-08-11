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

/* user/edit.html.twig */
class __TwigTemplate_9b12cd618162fd0401bf9af038aae318 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit User";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 8
        echo "<h1 class=\"col-md-12 text-center py-5\">Modifier mon profil</h1>
        <hr>
<div class=\"container d-flex justify-content-center pt-5\">
    <div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 mt-5\">
        

        ";
        // line 14
        echo twig_include($this->env, $context, "user/_form.html.twig", ["button_label" => "Mettre à jour"]);
        echo "

       

        ";
        // line 18
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
         <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"btn btn-outline-dark my-3\">Retour au profil</a>

        </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  75 => 18,  68 => 14,  60 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}


{% block body %}
{% form_theme form 'bootstrap_5_layout.html.twig' %}
<h1 class=\"col-md-12 text-center py-5\">Modifier mon profil</h1>
        <hr>
<div class=\"container d-flex justify-content-center pt-5\">
    <div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 mt-5\">
        

        {{ include('user/_form.html.twig', {'button_label': 'Mettre à jour'}) }}

       

        {{ include('user/_delete_form.html.twig') }}
         <a href=\"{{ path('app_user_show', {'id': app.user.id}) }}\" class=\"btn btn-outline-dark my-3\">Retour au profil</a>

        </div>
    </div>

    {% endblock %}", "user/edit.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\user\\edit.html.twig");
    }
}
