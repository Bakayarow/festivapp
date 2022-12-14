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

/* user/index.html.twig */
class __TwigTemplate_335fbcbe3e6633f9d1864ae225ed575f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "User index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container d-flex justify-content-center pt-5\">
        <div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 mt-5 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"56\" height=\"56\" fill=\"currentColor\" class=\"bi bi-check-circle-fill text-success m-5\" viewBox=\"0 0 16 16\">
                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
                </svg>
                <h1 class=\"h3 mb-3 font-weight-normal \">Profil modifi?? !</h1>
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"btn btn-outline-dark my-3\">
                    Mon profil
                </a>


        </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    <div class=\"container d-flex justify-content-center pt-5\">
        <div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 mt-5 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"56\" height=\"56\" fill=\"currentColor\" class=\"bi bi-check-circle-fill text-success m-5\" viewBox=\"0 0 16 16\">
                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
                </svg>
                <h1 class=\"h3 mb-3 font-weight-normal \">Profil modifi?? !</h1>
                <a href=\"{{ path('app_user_show', {'id': app.user.id}) }}\" class=\"btn btn-outline-dark my-3\">
                    Mon profil
                </a>


        </div>
    </div>

    {% endblock %}
{#  
    <table class=\"table\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Username</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ app.user.email }}</td>
                <td>{{ app.user.username }}</td>
                <td>
                    <a href=\"{{ path('app_user_show', {'id': app.user.id}) }}\">show</a>
                    <a href=\"{{ path('app_user_edit', {'id': app.user.id}) }}\">edit</a>
                </td>
            </tr>
        </tbody>
    </table>
#}

", "user/index.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\user\\index.html.twig");
    }
}
