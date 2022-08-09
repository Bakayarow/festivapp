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
class __TwigTemplate_c559b70d831807a4adf1680d3c46af9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Bienvenue sur Festiv'App !</h1>

<div class=\"container d-flex flex-column justify-content-center align-items-center pt-5\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "<div class=\"card mb-3 col-md-6 my-5 shadow-lg mb-5 bg-body rounded-5\">
  <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "imageFile"), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "imageName", [], "any", false, false, false, 12), "html", null, true);
            echo "\" >
  <div class=\"card-body p-5 bckcolprim \">
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 15
                echo "\t\t<h5 class=\"card-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 15), "html", null, true);
                echo "</h5>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le ";
            // line 19
            ((twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 19), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "</small></p>
\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-dark\" >Voir le post</a>
                        ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUserId", [], "method", false, false, false, 21), "id", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21))) {
                // line 22
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" class=\"btn btn-outline-dark ml-2\">Modifier</a>
                        ";
            }
            // line 24
            echo "\t<hr class=\"mt-4\">
\t<h4 >Poster un commentaire :</h4>
\t\t\t<form method=\"POST\" action=";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_new");
            echo ">
\t\t\t\t<textarea name=\"comment\" class=\"form-control my-2\"></textarea>
\t\t\t\t<input hidden name=\"postId\" value=";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo " />
\t\t\t\t<button class=\"btn btn-dark\">";
            // line 29
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 29, $this->source); })()), "Publier")) : ("Publier")), "html", null, true);
            echo "</button>
\t\t\t</form>

\t\t\t<hr class=\"mt-4\">

\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 34, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 35
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getPostId", [], "method", false, false, false, 35), "id", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35))) {
                    echo " 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t<p>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 38), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<figcaption class=\"blockquote-footer\">
\t\t\t\t\t\t\tDe : ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 41), "html", null, true);
                    echo " <cite title=\"Source Title\"> le ";
                    ((twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 41), "Y-m-d H:i"), "html", null, true))) : (print ("")));
                    echo "</cite>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t\t";
                    // line 54
                    echo "\t\t\t\t\t\t</tr>
                    ";
                }
                // line 56
                echo "\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 57
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "  \t\t\t</div>
\t\t
\t\t\t
\t\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  220 => 68,  208 => 61,  199 => 57,  194 => 56,  190 => 54,  182 => 41,  176 => 38,  169 => 35,  164 => 34,  156 => 29,  152 => 28,  147 => 26,  143 => 24,  137 => 22,  135 => 21,  131 => 20,  127 => 19,  121 => 17,  112 => 15,  108 => 14,  101 => 12,  98 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
\t<h1>Bienvenue sur Festiv'App !</h1>

<div class=\"container d-flex flex-column justify-content-center align-items-center pt-5\">
{% for post in posts %}
<div class=\"card mb-3 col-md-6 my-5 shadow-lg mb-5 bg-body rounded-5\">
  <img src=\"{{ vich_uploader_asset(post, 'imageFile') }}\" class=\"card-img-top\" alt=\"{{ post.imageName }}\" >
  <div class=\"card-body p-5 bckcolprim \">
    {% for user in users %}
\t\t<h5 class=\"card-title\">{{ user.username }}</h5>
\t{% endfor %}
    <p class=\"card-text\">{{ post.description }}</p>

    <p class=\"card-text\"><small class=\"text-muted\">Publié le {{ post.createdAt ? post.createdAt|date('Y-m-d H:i') : '' }}</small></p>
\t<a href=\"{{ path('app_post_show', {'id': post.id}) }}\" class=\"btn btn-dark\" >Voir le post</a>
                        {% if post.getUserId().id  == app.user.id %}
\t\t\t\t\t\t<a href=\"{{ path('app_post_edit', {'id': post.id}) }}\" class=\"btn btn-outline-dark ml-2\">Modifier</a>
                        {% endif %}
\t<hr class=\"mt-4\">
\t<h4 >Poster un commentaire :</h4>
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
\t\t\t\t\t\t\t<p>{{ comment.comment }}</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<figcaption class=\"blockquote-footer\">
\t\t\t\t\t\t\tDe : {{ comment.id }} <cite title=\"Source Title\"> le {{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i') : '' }}</cite>
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
