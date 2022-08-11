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

/* security/login.html.twig */
class __TwigTemplate_d15d9ed9d3e93c418e3dd27598bc7150 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container mt-4\"> 
<h1 class=\"col-md-12 text-center py-5\">Se connecter</h1>
\t<hr>
    <div class=\"container d-flex justify-content-center pt-5\">
    
    <div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 mt-5\">
        <form method=\"post\">
            ";
        // line 13
        if (($context["error"] ?? null)) {
            // line 14
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 16
        echo "
            

            <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control my-2\" autocomplete=\"email\" required autofocus>
            <label for=\"inputPassword\">Mot de passe</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control  my-2\" autocomplete=\"current-password\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >

            ";
        // line 39
        echo "
            <button class=\"btn btn-lg btn-primary my-3\" type=\"submit\">
                Se connecter
            </button>
        </form>

        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                <div class=\"mb-3\">
                    Vous êtes connecté en tant que ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "userIdentifier", [], "any", false, false, false, 47), "html", null, true);
            echo ", <a class=\"btn btn-outline-danger my-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
                </div>
            ";
        }
        // line 50
        echo "
    </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 50,  109 => 47,  106 => 46,  104 => 45,  96 => 39,  90 => 26,  82 => 21,  75 => 16,  69 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<div class=\"container mt-4\"> 
<h1 class=\"col-md-12 text-center py-5\">Se connecter</h1>
\t<hr>
    <div class=\"container d-flex justify-content-center pt-5\">
    
    <div class=\"col-md-5 p-5 shadow-lg p-3 mb-5 bg-body rounded-5 mt-5\">
        <form method=\"post\">
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            

            <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control my-2\" autocomplete=\"email\" required autofocus>
            <label for=\"inputPassword\">Mot de passe</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control  my-2\" autocomplete=\"current-password\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                value=\"{{ csrf_token('authenticate') }}\"
            >

            {#
                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                See https://symfony.com/doc/current/security/remember_me.html

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                    </label>
                </div>
            #}

            <button class=\"btn btn-lg btn-primary my-3\" type=\"submit\">
                Se connecter
            </button>
        </form>

        {% if app.user %}
                <div class=\"mb-3\">
                    Vous êtes connecté en tant que {{ app.user.userIdentifier }}, <a class=\"btn btn-outline-danger my-2\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                </div>
            {% endif %}

    </div>
    </div>
    </div>
{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\security\\login.html.twig");
    }
}
