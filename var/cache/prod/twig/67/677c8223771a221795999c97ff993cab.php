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

/* post/index.html.twig */
class __TwigTemplate_790582f4603097e9fe73d2ea20005999 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<h1 class=\"col-md-12 text-center py-5\">Derniers posts ajoutés</h1>
\t
\t<hr>
<div class=\"container d-flex flex-column justify-content-center align-items-center pt-5\">
<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\" class=\"btn btn-outline-dark p-3\" >Nouvelle publication + </a>

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo "<div class=\"card mb-3 col-md-6 my-5 shadow-lg mb-5 bg-body rounded-3\">
  <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "imageFile"), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "imageName", [], "any", false, false, false, 15), "html", null, true);
            echo "\" >
  <div class=\"card-body p-5 bckcolprim \">
<h5 class=\"card-title fw-bold bckcolslightt\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUserId", [], "method", false, false, false, 17), "getUsername", [], "method", false, false, false, 17), "html", null, true);
            echo "</h5>
    <p class=\"card-text fs-5\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le ";
            // line 20
            ((twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 20), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "</small></p>
\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-dark\" >Voir le post</a>
                        ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUserId", [], "method", false, false, false, 22), "id", [], "any", false, false, false, 22) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22))) {
                // line 23
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"btn btn-outline-dark ml-2\">Modifier</a>
                        ";
            }
            // line 25
            echo "\t<hr class=\"mt-4\">
\t<h4 >Poster un commentaire :</h4>
\t
\t\t\t<form method=\"POST\" action=";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_new");
            echo ">
\t\t\t\t<textarea name=\"comment\" class=\"form-control my-2\"></textarea>
\t\t\t\t<input hidden name=\"postId\" value=";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo " />
\t\t\t\t<button class=\"btn btn-dark\">";
            // line 31
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Publier")) : ("Publier")), "html", null, true);
            echo "</button>
\t\t\t</form>

\t\t\t<hr class=\"mt-4\">

\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 37
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getPostId", [], "method", false, false, false, 37), "id", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 37))) {
                    echo " 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t<p class=\"fs-6\">";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 40), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<figcaption class=\"blockquote-footer\">
\t\t\t\t\t\t\tDe : ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getUserId", [], "method", false, false, false, 43), "getUsername", [], "method", false, false, false, 43), "html", null, true);
                    echo " <cite title=\"Source Title\"> le ";
                    ((twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 43), "Y-m-d H:i"), "html", null, true))) : (print ("")));
                    echo "</cite>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t\t";
                    // line 56
                    echo "\t\t\t\t\t\t</tr>
                    ";
                }
                // line 58
                echo "\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 59
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "  \t\t\t</div>
\t\t
\t\t\t
\t\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 70,  175 => 63,  166 => 59,  161 => 58,  157 => 56,  149 => 43,  143 => 40,  136 => 37,  131 => 36,  123 => 31,  119 => 30,  114 => 28,  109 => 25,  103 => 23,  101 => 22,  97 => 21,  93 => 20,  88 => 18,  84 => 17,  77 => 15,  74 => 14,  70 => 13,  65 => 11,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
\t<h1 class=\"col-md-12 text-center py-5\">Derniers posts ajoutés</h1>
\t
\t<hr>
<div class=\"container d-flex flex-column justify-content-center align-items-center pt-5\">
<a href=\"{{ path('app_post_new')}}\" class=\"btn btn-outline-dark p-3\" >Nouvelle publication + </a>

{% for post in posts %}
<div class=\"card mb-3 col-md-6 my-5 shadow-lg mb-5 bg-body rounded-3\">
  <img src=\"{{ vich_uploader_asset(post, 'imageFile') }}\" class=\"card-img-top\" alt=\"{{ post.imageName }}\" >
  <div class=\"card-body p-5 bckcolprim \">
<h5 class=\"card-title fw-bold bckcolslightt\">{{ post.getUserId().getUsername() }}</h5>
    <p class=\"card-text fs-5\">{{ post.description }}</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le {{ post.createdAt ? post.createdAt|date('Y-m-d H:i') : '' }}</small></p>
\t<a href=\"{{ path('app_post_show', {'id': post.id}) }}\" class=\"btn btn-dark\" >Voir le post</a>
                        {% if post.getUserId().id  == app.user.id %}
\t\t\t\t\t\t<a href=\"{{ path('app_post_edit', {'id': post.id}) }}\" class=\"btn btn-outline-dark ml-2\">Modifier</a>
                        {% endif %}
\t<hr class=\"mt-4\">
\t<h4 >Poster un commentaire :</h4>
\t
\t\t\t<form method=\"POST\" action={{path('app_comment_new')}}>
\t\t\t\t<textarea name=\"comment\" class=\"form-control my-2\"></textarea>
\t\t\t\t<input hidden name=\"postId\" value={{post.id}} />
\t\t\t\t<button class=\"btn btn-dark\">{{ button_label|default('Publier') }}</button>
\t\t\t</form>

\t\t\t<hr class=\"mt-4\">

\t\t\t{% for comment in comments %}
                    {% if comment.getPostId().id == post.id  %} 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t<p class=\"fs-6\">{{ comment.comment }}</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<figcaption class=\"blockquote-footer\">
\t\t\t\t\t\t\tDe : {{ comment.getUserId().getUsername()  }} <cite title=\"Source Title\"> le {{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i') : '' }}</cite>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t\t{# 
\t\t\t\t\t\t\t<p>{{ comment.id }}</p>
                            <p> {{post.id }}</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t <p class=\"fst-italic\">{{ comment.comment }}
\t\t\t\t\t\t\t <p class=\"fw-light\">{{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i') : '' }}</p></p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_comment_delete', {'id': comment.id}) }}\">Retirer</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t #}
\t\t\t\t\t\t</tr>
                    {% endif %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
  \t\t\t</div>
\t\t
\t\t\t
\t\t</div>


{% endfor %}
</div>
{% endblock %}
\t
{# 
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>CreatedAt</th>
\t\t\t\t<th>UpdatedAt</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for post in posts %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ post.id }}</td>
\t\t\t\t\t<td><img src=\"{{ vich_uploader_asset(post, 'imageFile') }}\" alt=\"{{ post.imageName }}\" height=\"300\" width=\"300\"></td>
\t\t\t\t\t<td>{{ post.description }}</td>
\t\t\t\t\t<td>{{ post.createdAt ? post.createdAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t<td>{{ post.updatedAt ? post.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_post_show', {'id': post.id}) }}\">show</a>
                        {% if post.getUserId().id  == app.user.id %}
\t\t\t\t\t\t<a href=\"{{ path('app_post_edit', {'id': post.id}) }}\">edit</a>
                        {% endif %}
\t\t\t\t\t</td>
                    <td>
                    <h1>Create new Comment</h1>
                    <form method=\"POST\" action={{path('app_comment_new')}}>
                        <textarea name=\"comment\"></textarea>
                        <input hidden name=\"postId\" value={{post.id}} />
                        <button class=\"btn\">{{ button_label|default('Save') }}</button>
                    </form>
                     </td>
\t\t\t\t</tr>
                \t\t\t\t
\t\t\t\t<tbody>
\t\t\t\t\t{% for comment in comments %}
                    {% if comment.getPostId().id == post.id  %} 
                        <tr>
\t\t\t\t\t\t\t<td>{{ comment.id }}</td>
                            <td>{{ comment.comment }}</td>
                            <td> {{ comment.getPostId() }}</td>
                            <td> {{post.id }}</td>
\t\t\t\t\t\t\t<td>{{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ comment.updatedAt ? comment.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_comment_show', {'id': comment.id}) }}\">show</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_comment_edit', {'id': comment.id}) }}\">edit</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
                    {% endif %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t</tr>


\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_post_new') }}\">Create new</a>
{% endblock %}

 #}", "post/index.html.twig", "C:\\xampp\\htdocs\\festivapp\\templates\\post\\index.html.twig");
    }
}
