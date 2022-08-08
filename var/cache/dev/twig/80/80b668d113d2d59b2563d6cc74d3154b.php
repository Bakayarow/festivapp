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

/* post/show.html.twig */
class __TwigTemplate_02c2b7ed9590062cd0cda7235530fff8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Post</h1>

    <div class=\"container d-flex flex-column justify-content-center align-items-center pt-3\">
<div class=\"card mb-3 col-md-6 my-3 shadow-lg mb-5 bg-body rounded-3\">
  <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "imageName", [], "any", false, false, false, 10), "html", null, true);
        echo "\" >
  <div class=\"card-body p-5 bckcolprim \">
    <p class=\"card-text\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le ";
        // line 14
        ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</small></p>
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "getUserId", [], "method", false, false, false, 15), "id", [], "any", false, false, false, 15) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15))) {
            // line 16
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"btn bckcolsslight\">Modifier</a>
        ";
        }
        // line 18
        echo "\t<hr>

    <h4>Commentaires :</h4>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 23
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getPostId", [], "method", false, false, false, 23), "id", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23))) {
                echo " 
                    ";
                // line 25
                echo "                    ";
                // line 26
                echo "                    
                        <p class=\"fst-italic\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 27), "html", null, true);
                echo "
                        <p class=\"fw-light\">";
                // line 28
                ((twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 28), "Y-m-d H:i"), "html", null, true))) : (print ("")));
                echo "</p></p>
                    <p>
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">Retirer</a>
                    </p>
                </tr>
            ";
            }
            // line 34
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 39,  160 => 35,  155 => 34,  148 => 30,  143 => 28,  139 => 27,  136 => 26,  134 => 25,  129 => 23,  124 => 22,  118 => 18,  112 => 16,  110 => 15,  106 => 14,  101 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Post{% endblock %}

{% block body %}
    <h1>Post</h1>

    <div class=\"container d-flex flex-column justify-content-center align-items-center pt-3\">
<div class=\"card mb-3 col-md-6 my-3 shadow-lg mb-5 bg-body rounded-3\">
  <img src=\"{{ vich_uploader_asset(post) }}\" alt=\"{{ post.imageName }}\" >
  <div class=\"card-body p-5 bckcolprim \">
    <p class=\"card-text\">{{ post.description }}</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le {{ post.createdAt ? post.createdAt|date('Y-m-d H:i') : '' }}</small></p>
        {% if post.getUserId().id  == app.user.id %}
\t\t\t<a href=\"{{ path('app_post_edit', {'id': post.id}) }}\" class=\"btn bckcolsslight\">Modifier</a>
        {% endif %}
\t<hr>

    <h4>Commentaires :</h4>

        {% for comment in comments %}
            {% if comment.getPostId().id == post.id  %} 
                    {# <p>{{ comment.id }}</p> #}
                    {# <p> {{post.id }}</p> #}
                    
                        <p class=\"fst-italic\">{{ comment.comment }}
                        <p class=\"fw-light\">{{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i') : '' }}</p></p>
                    <p>
                        <a href=\"{{ path('app_comment_delete', {'id': comment.id}) }}\">Retirer</a>
                    </p>
                </tr>
            {% endif %}
            {% else %}
                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
        {% endfor %}
    
    </div>

{# 
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <img src=\"{{ vich_uploader_asset(post) }}\" alt=\"{{ post.imageName }}\">
                </td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ post.description }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ post.createdAt ? post.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ post.updatedAt ? post.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_post_index') }}\">back to list</a>

    <a href=\"{{ path('app_post_edit', {'id': post.id}) }}\">edit</a>

    {{ include('post/_delete_form.html.twig') }}

     #}
{% endblock %}
", "post/show.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\post\\show.html.twig");
    }
}
