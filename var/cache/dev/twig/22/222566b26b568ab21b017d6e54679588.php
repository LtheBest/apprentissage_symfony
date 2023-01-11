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

/* contact/index.html.twig */
class __TwigTemplate_ac887711d7bacc0229390bc307324c2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact";
        
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
        echo "
    <div class=\"site-section bg-light\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7 mb-5\">
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "  

                        <div class=\"row form-group\">
                            <div class=\"col-md-6 mb-3 mb-md-0\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form form-control"]]);
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "lastName", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "message", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <input type=\"submit\" class=\"btn btn-primary \" >
                            </div>
                        </div>
                        
            
                    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
                </div>
                <div class=\"col-md-5\">
                    <div class=\"p-4 mb-3 bg-white\">
                        <p class=\"mb-0 font-weight-bold\">Address</p>
                        <p class=\"mb-4\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["contact_address"]) || array_key_exists("contact_address", $context) ? $context["contact_address"] : (function () { throw new RuntimeError('Variable "contact_address" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</p>
                        <p class=\"mb-0 font-weight-bold\">Phone               </p>
                        <p class=\"mb-4\"><a href=\"#\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["contact_phone"]) || array_key_exists("contact_phone", $context) ? $context["contact_phone"] : (function () { throw new RuntimeError('Variable "contact_phone" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " </a></p>
                        <p class=\"mb-0 font-weight-bold\">Email Address</p>
                        <p class=\"mb-0\"><a href=\"#\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  150 => 46,  145 => 44,  137 => 39,  124 => 29,  116 => 24,  108 => 19,  102 => 16,  95 => 12,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/base.html.twig' %}

{% block title %}Contact{% endblock %}


{% block body %}

    <div class=\"site-section bg-light\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7 mb-5\">
                    {{ form_start (form) }}  

                        <div class=\"row form-group\">
                            <div class=\"col-md-6 mb-3 mb-md-0\">
                                {{ form_row (form.firstName, {'attr':{'class':'form form-control'}}) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row (form.lastName, {'attr':{'class':'form form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                {{ form_row (form.email, {'attr':{'class':'form form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                {{ form_row (form.message, {'attr':{'class':'form form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <input type=\"submit\" class=\"btn btn-primary \" >
                            </div>
                        </div>
                        
            
                    {{ form_end (form) }}
                </div>
                <div class=\"col-md-5\">
                    <div class=\"p-4 mb-3 bg-white\">
                        <p class=\"mb-0 font-weight-bold\">Address</p>
                        <p class=\"mb-4\">{{ contact_address }}</p>
                        <p class=\"mb-0 font-weight-bold\">Phone               </p>
                        <p class=\"mb-4\"><a href=\"#\">{{ contact_phone }} </a></p>
                        <p class=\"mb-0 font-weight-bold\">Email Address</p>
                        <p class=\"mb-0\"><a href=\"#\">{{contact_email}} </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "contact/index.html.twig", "/Applications/MAMP/htdocs/projet/news-application/templates/contact/index.html.twig");
    }
}
