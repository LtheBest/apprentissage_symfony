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

/* homepage/index.html.twig */
class __TwigTemplate_b708b4e5dabe3a43bc5958d3069d7f2a extends Template
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
        return "layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "homepage/index.html.twig", 1);
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

        echo "Home";
        
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
        echo "    
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h2>Recent Posts</h2>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 16
            echo "                        <div class=\"col-lg-4 mb-4\">
                            <div class=\"entry2\">
                                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news_show", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">
                                    <img class=\"img-fluid rounded\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["new"], "imageFile"), "html", null, true);
            echo "\">
                                    
                                    ";
            // line 22
            echo "                                </a>
                                <div class=\"excerpt\">
                                    <span class=\"post-category text-white bg-success mb-3\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "category", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>

                                    <h2><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news_show", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></h2>
                                    <div class=\"post-meta align-items-center text-left clearfix\">
                                        <figure class=\"author-figure mb-0 mr-3 float-left\">
                                        

                                            ";
            // line 32
            echo "
                                        </figure>
                                        <span class=\"d-inline-block mt-1\">By <a href=\"#\">Carrol Atkinson</a></span>
                                        <span>";
            // line 35
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["new"], "createdAt", [], "any", false, false, false, 35));
            echo "</span>
                                    </div>
                                
                                    <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 38), 0, 150), "html", null, true);
            echo "...</p>
                                    <p><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news_show", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Read More</a></p>
                                </div>
                            </div>
                        </div>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
 
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 44,  150 => 39,  146 => 38,  140 => 35,  135 => 32,  125 => 26,  120 => 24,  116 => 22,  111 => 19,  107 => 18,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
    
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h2>Recent Posts</h2>
                </div>
            </div>
            <div class=\"row\">
                {% for new in news %}
                        <div class=\"col-lg-4 mb-4\">
                            <div class=\"entry2\">
                                <a href=\"{{ path('app_news_show', {'id':new.id}) }}\">
                                    <img class=\"img-fluid rounded\" src=\"{{ vich_uploader_asset(new, 'imageFile') }}\">
                                    
                                    {# <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid rounded\"> #}
                                </a>
                                <div class=\"excerpt\">
                                    <span class=\"post-category text-white bg-success mb-3\">{{new.category.name}}</span>

                                    <h2><a href=\"{{ path('app_news_show', {'id':new.id}) }}\">{{new.title}}</a></h2>
                                    <div class=\"post-meta align-items-center text-left clearfix\">
                                        <figure class=\"author-figure mb-0 mr-3 float-left\">
                                        

                                            {# <img src=\"images/person_1.jpg\" alt=\"Image\" class=\"img-fluid\"> #}

                                        </figure>
                                        <span class=\"d-inline-block mt-1\">By <a href=\"#\">Carrol Atkinson</a></span>
                                        <span>{{new.createdAt|ago}}</span>
                                    </div>
                                
                                    <p>{{new.description|slice(0,150)}}...</p>
                                    <p><a href=\"{{ path('app_news_show', {'id':new.id}) }}\">Read More</a></p>
                                </div>
                            </div>
                        </div>  
                {% endfor %}
            </div>
 
        </div>
    </div>

{% endblock %}
", "homepage/index.html.twig", "/Applications/MAMP/htdocs/projet/news-application/templates/homepage/index.html.twig");
    }
}
