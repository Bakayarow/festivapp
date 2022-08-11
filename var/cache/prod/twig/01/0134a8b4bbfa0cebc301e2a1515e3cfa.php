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

/* base.html.twig */
class __TwigTemplate_ec9581a2655134116887fd2972314421 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');</style> 
        <style>@import url(\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\");</style> 
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>

    
    <div class=\"container mt-4\">    
    

        <header class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom\">
       <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "        
            <li>
                <a class=\"nav-link px-2 link-secondary\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_index");
            echo "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-house-fill mx-2\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z\"/>
                </svg>
                Accueil</a>
            </li>
            <li>
                <a class=\"nav-link px-3 link-secondary\" href=";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_post");
            echo ">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-grid-1x2-fill mx-2\" viewBox=\"0 0 16 16\">
                    <path d=\"M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z\"/>
                </svg>
                Mes publications</a>
            </li>
       </ul>

      <div class=\"col-md-5 text-end\">
      
            
        <ul class=\"nav nav-pills align-items-center justify-content-end\">
                <div nav-item px-2>
                <a class=\"btn btn-outline-dark\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "username", [], "any", false, false, false, 44), "html", null, true);
            echo " 
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                        <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                        <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                    </svg> 
                </a>
                    
<a class=\"btn btn-outline-danger mx-2\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                </div>
            ";
        } else {
            // line 54
            echo "
            <li class=\"nav-item px-2\">
                <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-dark\">
                    <span class=\"menu-label\">Se connecter</span>
                </a>
            </li>
            ";
        }
        // line 61
        echo "            <li class=\"nav-item\">
                <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-dark\">
                    <span class=\"menu-label\">S'inscrire</span>
                </a>
            </li>

        </ul>
      </div>

    </header>

            ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"></script>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 73,  173 => 72,  166 => 10,  159 => 5,  152 => 74,  149 => 73,  147 => 72,  134 => 62,  131 => 61,  123 => 56,  119 => 54,  113 => 51,  101 => 44,  85 => 31,  74 => 23,  70 => 21,  68 => 20,  57 => 11,  55 => 10,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');</style> 
        <style>@import url(\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\");</style> 
        {% block stylesheets %}{{ encore_entry_link_tags('app') }}{% endblock %}
    </head>
    <body>

    
    <div class=\"container mt-4\">    
    

        <header class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom\">
       <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
        {% if app.user %}
        
            <li>
                <a class=\"nav-link px-2 link-secondary\" href=\"{{ path('app_post_index') }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-house-fill mx-2\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z\"/>
                </svg>
                Accueil</a>
            </li>
            <li>
                <a class=\"nav-link px-3 link-secondary\" href={{ path('app_my_post') }}>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-grid-1x2-fill mx-2\" viewBox=\"0 0 16 16\">
                    <path d=\"M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z\"/>
                </svg>
                Mes publications</a>
            </li>
       </ul>

      <div class=\"col-md-5 text-end\">
      
            
        <ul class=\"nav nav-pills align-items-center justify-content-end\">
                <div nav-item px-2>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('app_user_show', {'id': app.user.id}) }}\">{{ app.user.username }} 
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                        <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                        <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                    </svg> 
                </a>
                    
<a class=\"btn btn-outline-danger mx-2\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </div>
            {% else %}

            <li class=\"nav-item px-2\">
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-dark\">
                    <span class=\"menu-label\">Se connecter</span>
                </a>
            </li>
            {% endif %}
            <li class=\"nav-item\">
                <a href=\"{{ path('app_register') }}\" class=\"btn btn-dark\">
                    <span class=\"menu-label\">S'inscrire</span>
                </a>
            </li>

        </ul>
      </div>

    </header>

            {% block body %}{% endblock %}
            {% block javascripts %}{{ encore_entry_script_tags('app') }}{% endblock %}
    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"></script>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\base.html.twig");
    }
}
