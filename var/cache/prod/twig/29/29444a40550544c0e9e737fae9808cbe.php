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

/* my_post/index.html.twig */
class __TwigTemplate_a5caae9c0a3511256e6f04b64b6cb0c9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "my_post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello MyPostController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<h1 class=\"col-md-12 text-center py-5\">Mes publications</h1>
    <hr class=\" pb-5\">

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


   
    <div class=\"container d-flex flex-wrap justify-content-around \">

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            <div class=\"card mb-3 col-md-5 shadow-lg mb-5 bg-body rounded-3\">
            
                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "imageFile"), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "imageName", [], "any", false, false, false, 21), "html", null, true);
            echo "\" >
                    <div class=\"card-body p-5 bckcolprim \">
                        <h5 class=\"card-title fw-bold bckcolslightt\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUserId", [], "method", false, false, false, 23), "getUsername", [], "method", false, false, false, 23), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Publié le ";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 25), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "</small></p>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-dark\" >Voir le post</a>
                            ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUserId", [], "method", false, false, false, 27), "id", [], "any", false, false, false, 27) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27))) {
                // line 28
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" class=\"btn btn-outline-dark ml-2\">Modifier</a>
                            ";
            }
            // line 30
            echo "                                            
                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
    
    

";
    }

    public function getTemplateName()
    {
        return "my_post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  111 => 30,  105 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  80 => 21,  76 => 19,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MyPostController!{% endblock %}

{% block body %}
\t<h1 class=\"col-md-12 text-center py-5\">Mes publications</h1>
    <hr class=\" pb-5\">

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


   
    <div class=\"container d-flex flex-wrap justify-content-around \">

        {% for post in myPosts %}
            <div class=\"card mb-3 col-md-5 shadow-lg mb-5 bg-body rounded-3\">
            
                <img src=\"{{ vich_uploader_asset(post, 'imageFile') }}\" class=\"card-img-top\" alt=\"{{ post.imageName }}\" >
                    <div class=\"card-body p-5 bckcolprim \">
                        <h5 class=\"card-title fw-bold bckcolslightt\">{{ post.getUserId().getUsername() }}</h5>
                        <p class=\"card-text\">{{ post.description }}</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Publié le {{ post.createdAt ? post.createdAt|date('Y-m-d H:i') : '' }}</small></p>
                        <a href=\"{{ path('app_post_show', {'id': post.id}) }}\" class=\"btn btn-dark\" >Voir le post</a>
                            {% if post.getUserId().id  == app.user.id %}
                                <a href=\"{{ path('app_post_edit', {'id': post.id}) }}\" class=\"btn btn-outline-dark ml-2\">Modifier</a>
                            {% endif %}
                                            
                    </div>
                </div>
        {% endfor %}
    </div>
    
    

{% endblock %}
", "my_post/index.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\my_post\\index.html.twig");
    }
}
