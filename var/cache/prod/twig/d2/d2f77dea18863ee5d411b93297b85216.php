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
class __TwigTemplate_03af7039a885d458e3603e1536238b51 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Post";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container d-flex flex-column justify-content-center align-items-center pt-3\">
<div class=\"card mb-3 col-md-6 my-3 shadow-lg mb-5 bg-body rounded-3\">
  <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["post"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "imageName", [], "any", false, false, false, 9), "html", null, true);
        echo "\" >
  <div class=\"card-body p-5 bckcolprim \">
<h5 class=\"card-title fw-bold bckcolslightt\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getUserId", [], "method", false, false, false, 11), "getUsername", [], "method", false, false, false, 11), "html", null, true);
        echo "</h5>
    <p class=\"card-text\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le ";
        // line 14
        ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "createdAt", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "createdAt", [], "any", false, false, false, 14), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</small></p>
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getUserId", [], "method", false, false, false, 15), "id", [], "any", false, false, false, 15) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15))) {
            // line 16
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"btn btn-outline-dark\">Modifier</a>
        ";
        }
        // line 18
        echo "\t<hr>

    <h4>Commentaires :</h4>
<hr>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 23
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getPostId", [], "method", false, false, false, 23), "id", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 23))) {
                echo " 
                    ";
                // line 25
                echo "                    ";
                // line 26
                echo "                    
\t\t\t\t\t<figure>
\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t<p>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<figcaption class=\"blockquote-footer\">
\t\t\t\t\t\t\tDe : ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getUserId", [], "method", false, false, false, 32), "getUsername", [], "method", false, false, false, 32), "html", null, true);
                echo " <cite title=\"Source Title\"> le ";
                ((twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 32), "Y-m-d H:i"), "html", null, true))) : (print ("")));
                echo "</cite>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>

                        ";
                // line 36
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getUserId", [], "method", false, false, false, 36), "id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getUserId", [], "method", false, false, false, 36), "id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)))) {
                    // line 37
                    echo "                            <p>
                                <a href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "\" class=\"link-danger\">Retirer</a>
                            </p>
                            
                      ";
                }
                // line 42
                echo "                </tr>
            ";
            }
            // line 44
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                <tr>
                    <td colspan=\"4\">Aucun commentaire.</td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    
    </div>

";
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
        return array (  159 => 49,  150 => 45,  145 => 44,  141 => 42,  134 => 38,  131 => 37,  129 => 36,  120 => 32,  114 => 29,  109 => 26,  107 => 25,  102 => 23,  97 => 22,  91 => 18,  85 => 16,  83 => 15,  79 => 14,  74 => 12,  70 => 11,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Post{% endblock %}

{% block body %}

    <div class=\"container d-flex flex-column justify-content-center align-items-center pt-3\">
<div class=\"card mb-3 col-md-6 my-3 shadow-lg mb-5 bg-body rounded-3\">
  <img src=\"{{ vich_uploader_asset(post) }}\" alt=\"{{ post.imageName }}\" >
  <div class=\"card-body p-5 bckcolprim \">
<h5 class=\"card-title fw-bold bckcolslightt\">{{ post.getUserId().getUsername() }}</h5>
    <p class=\"card-text\">{{ post.description }}</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le {{ post.createdAt ? post.createdAt|date('Y-m-d H:i') : '' }}</small></p>
        {% if post.getUserId().id  == app.user.id %}
\t\t\t<a href=\"{{ path('app_post_edit', {'id': post.id}) }}\" class=\"btn btn-outline-dark\">Modifier</a>
        {% endif %}
\t<hr>

    <h4>Commentaires :</h4>
<hr>
        {% for comment in comments %}
            {% if comment.getPostId().id == post.id  %} 
                    {# <p>{{ comment.id }}</p> #}
                    {# <p> {{post.id }}</p> #}
                    
\t\t\t\t\t<figure>
\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t<p>{{ comment.comment }}</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<figcaption class=\"blockquote-footer\">
\t\t\t\t\t\t\tDe : {{ comment.getUserId().getUsername()  }} <cite title=\"Source Title\"> le {{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i') : '' }}</cite>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>

                        {% if (comment.getUserId().id  == app.user.id) or (post.getUserId().id  == app.user.id) %}
                            <p>
                                <a href=\"{{ path('app_comment_delete', {'id': comment.id}) }}\" class=\"link-danger\">Retirer</a>
                            </p>
                            
                      {% endif %}
                </tr>
            {% endif %}
            {% else %}
                <tr>
                    <td colspan=\"4\">Aucun commentaire.</td>
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
