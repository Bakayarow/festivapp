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

/* user/show.html.twig */
class __TwigTemplate_20551966168034407aeb41cb25b66376 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "User";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container d-flex justify-content-center pt-5\">
        <div class=\"card shadow-lg mb-5 bg-body rounded-5\" style=\"width: 30rem;\">
            <div class=\"card-body p-5 text-center\">
                <h1 class=\"card-title \">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
                <hr>
                
                <dl class=\"row mt-5\">
                    <dt class=\"col-12 text-start\">Email :</dt>
                    <dd class=\"col-sm-12 text-start\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</dd>
                    <dt class=\"col-sm-12 text-start\">Nom d'utilisateur :</dt>
                    <dd class=\"col-sm-12 text-start\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 16), "html", null, true);
        echo "</dd>
                </dl>

                ";
        // line 23
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"btn btn-outline-dark mt-3\">Modifier le profil</a>
            </div>
        </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  76 => 16,  71 => 14,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

    {% block body %}
    <div class=\"container d-flex justify-content-center pt-5\">
        <div class=\"card shadow-lg mb-5 bg-body rounded-5\" style=\"width: 30rem;\">
            <div class=\"card-body p-5 text-center\">
                <h1 class=\"card-title \">{{ user.username }}</h1>
                <hr>
                
                <dl class=\"row mt-5\">
                    <dt class=\"col-12 text-start\">Email :</dt>
                    <dd class=\"col-sm-12 text-start\">{{ user.email }}</dd>
                    <dt class=\"col-sm-12 text-start\">Nom d'utilisateur :</dt>
                    <dd class=\"col-sm-12 text-start\">{{ user.username }}</dd>
                </dl>

                {#  
                <p class=\"card-text fw_light text-start mt-5\">Email : {{ user.email }}</p>
                <p class=\"card-text fw_light text-start\">Nom d'utilisateur : {{ user.username }}</p>
                #}
                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-outline-dark mt-3\">Modifier le profil</a>
            </div>
        </div>
    </div>

    {% endblock %}

{#  
    <h1>User</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_user_index') }}\">back to list</a>

    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>

    {{ include('user/_delete_form.html.twig') }}
{% endblock %}
#}", "user/show.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\user\\show.html.twig");
    }
}
