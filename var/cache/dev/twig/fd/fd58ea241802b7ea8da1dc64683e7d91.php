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

/* layout/partials/header.html.twig */
class __TwigTemplate_4a99b693bb7e3854e3be9943da043a4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/partials/header.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [0 => [0 => "success", 1 => "danger", 2 => "info"]], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " text-center mb-0\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo " 
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "

<div class=\"site-mobile-menu\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close mt-3\">
          <span class=\"icon-close2 js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>
    
    <header class=\"site-navbar\" role=\"banner\">
      <div class=\"container-fluid\">
        <div class=\"row align-items-center\">
          
          <div class=\"col-12 search-form-wrap js-search-form\">
            <form method=\"get\" action=\"#\">
              <input type=\"text\" id=\"s\" class=\"form-control\" placeholder=\"Search...\">
              <button class=\"search-btn\" type=\"submit\"><span class=\"icon-search\"></span></button>
            </form>
          </div>

          <div class=\"col-4 site-logo\">
            <a href=\"index.html\" class=\"text-black h2 mb-0\">Mini Blog</a>
          </div>

          <div class=\"col-8 text-right\">
            <nav class=\"site-navigation\" role=\"navigation\">
              <ul class=\"site-menu js-clone-nav mr-auto d-none d-lg-block mb-0\">
                <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Home</a></li>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            echo "                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_by_category_show", ["id" => twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                
                
                <li class=\"d-none d-lg-inline-block\"><a href=\"#\" class=\"js-search-toggle\"><span class=\"icon-search\"></span></a></li>
              </ul>
            </nav>
            <a href=\"#\" class=\"site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none\"><span class=\"icon-menu h3\"></span></a></div>
          </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  110 => 40,  106 => 39,  102 => 38,  71 => 9,  55 => 5,  50 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# message flash #}

{% for type, messages in app.flashes(['success','danger','info' ]) %}
  {% for message in messages %}
    <div class=\"alert alert-{{ type }} text-center mb-0\">{{ message }} 
    </div>
  {% endfor %}
{% endfor %}


<div class=\"site-mobile-menu\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close mt-3\">
          <span class=\"icon-close2 js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>
    
    <header class=\"site-navbar\" role=\"banner\">
      <div class=\"container-fluid\">
        <div class=\"row align-items-center\">
          
          <div class=\"col-12 search-form-wrap js-search-form\">
            <form method=\"get\" action=\"#\">
              <input type=\"text\" id=\"s\" class=\"form-control\" placeholder=\"Search...\">
              <button class=\"search-btn\" type=\"submit\"><span class=\"icon-search\"></span></button>
            </form>
          </div>

          <div class=\"col-4 site-logo\">
            <a href=\"index.html\" class=\"text-black h2 mb-0\">Mini Blog</a>
          </div>

          <div class=\"col-8 text-right\">
            <nav class=\"site-navigation\" role=\"navigation\">
              <ul class=\"site-menu js-clone-nav mr-auto d-none d-lg-block mb-0\">
                <li><a href=\"{{ path('app_homepage') }}\">Home</a></li>
                {% for link in categoryList %}
                  <li><a href=\"{{path('app_new_by_category_show', {'id':link.id}) }}\">{{ link.name }}</a></li>
                {% endfor %}
                
                
                <li class=\"d-none d-lg-inline-block\"><a href=\"#\" class=\"js-search-toggle\"><span class=\"icon-search\"></span></a></li>
              </ul>
            </nav>
            <a href=\"#\" class=\"site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none\"><span class=\"icon-menu h3\"></span></a></div>
          </div>
", "layout/partials/header.html.twig", "/Users/loic/Documents/GitHub/apprentissage_symfony/templates/layout/partials/header.html.twig");
    }
}
