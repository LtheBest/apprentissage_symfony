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

/* homepage/news_single.html.twig */
class __TwigTemplate_15b006be2be57f2987679e854587c9da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/news_single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/news_single.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "homepage/news_single.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " 
    ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["single_news"]) || array_key_exists("single_news", $context) ? $context["single_news"] : (function () { throw new RuntimeError('Variable "single_news" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "
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
        echo "    <section class=\"site-section py-lg\">
      <div class=\"container\">
        
        <div class=\"row blog-entries element-animate\">

          <div class=\"col-md-12 col-lg-8 main-content\">
            
            <div class=\"post-content-body\">
              <img class=\"img-fluid rounded\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["single_news"]) || array_key_exists("single_news", $context) ? $context["single_news"] : (function () { throw new RuntimeError('Variable "single_news" does not exist.', 15, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
              <h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["single_news"]) || array_key_exists("single_news", $context) ? $context["single_news"] : (function () { throw new RuntimeError('Variable "single_news" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
              <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["single_news"]) || array_key_exists("single_news", $context) ? $context["single_news"] : (function () { throw new RuntimeError('Variable "single_news" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
            ";
        // line 108
        echo "              <!-- END comment-list -->
              
              <div class=\"comment-form-wrap pt-5\">
                <h3 class=\"mb-5\">Leave a comment</h3>
             
                ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) {
            // line 114
            echo "                  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_start');
            echo "
                    ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "content", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form form-control", "placeholder" => "comment"]]);
            echo "<br>
                    <input type='submit' value='save' class='btn btn-primary'><br><br>
                  ";
            // line 117
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
            echo "
                  ";
        } else {
            // line 119
            echo "                    You be must logged in to leave a comment - <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">login</a>
                ";
        }
        // line 121
        echo "
                  <ul class=\"comment-list\">

                  ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 125
            echo "                    <li class=\"comment\">
                      ";
            // line 129
            echo "                      <div class=\"comment-body\">
                        <h3>";
            // line 130
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 130), "firstName", [], "any", false, false, false, 130) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 130), "lastName", [], "any", false, false, false, 130)), "html", null, true);
            echo "</h3>
                        <div class=\"meta\">";
            // line 131
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 131));
            echo "</div>
                        <p>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 132), "html", null, true);
            echo "</p>
                        <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                      </div>
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                  </ul>
              
              
                ";
        // line 234
        echo "
            
          <!-- END sidebar -->

        </div>
      </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homepage/news_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 234,  179 => 137,  168 => 132,  164 => 131,  160 => 130,  157 => 129,  154 => 125,  150 => 124,  145 => 121,  139 => 119,  134 => 117,  129 => 115,  124 => 114,  122 => 113,  115 => 108,  111 => 17,  107 => 16,  103 => 15,  93 => 7,  83 => 6,  71 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/base.html.twig\" %}
{% block title %} 
    {{single_news.title}}
{% endblock %}

{% block body %}
    <section class=\"site-section py-lg\">
      <div class=\"container\">
        
        <div class=\"row blog-entries element-animate\">

          <div class=\"col-md-12 col-lg-8 main-content\">
            
            <div class=\"post-content-body\">
              <img class=\"img-fluid rounded\" src=\"{{ vich_uploader_asset(single_news, 'imageFile') }}\">
              <h1>{{ single_news.title }}</h1>
              <p>{{ single_news.description}}</p>
            {# </div>

            
            <div class=\"pt-5\">
              <p>Categories:  <a href=\"#\">Food</a>, <a href=\"#\">Travel</a>  Tags: <a href=\"#\">#manila</a>, <a href=\"#\">#asia</a></p>
            </div>


            <div class=\"pt-5\">
              <h3 class=\"mb-5\">6 Comments</h3>
              <ul class=\"comment-list\">
                <li class=\"comment\">
                  <div class=\"vcard\">
                    <img src=\"{{asset('assets/images/person_1.jpg')}}\" alt=\"Image placeholder\">
                  </div>
                  <div class=\"comment-body\">
                    <h3>Jean Doe</h3>
                    <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                  </div>
                </li>

                <li class=\"comment\">
                  <div class=\"vcard\">
                    <img src=\"{{asset('assets/images/person_1.jpg')}}\" alt=\"Image placeholder\">
                  </div>
                  <div class=\"comment-body\">
                    <h3>Jean Doe</h3>
                    <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                  </div>

                  <ul class=\"children\">
                    <li class=\"comment\">
                      <div class=\"vcard\">
                        <img src=\"{{asset('assets/images/person_1.jpg')}}\" alt=\"Image placeholder\">
                      </div>
                      <div class=\"comment-body\">
                        <h3>Jean Doe</h3>
                        <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                      </div>


                      <ul class=\"children\">
                        <li class=\"comment\">
                          <div class=\"vcard\">
                            <img src=\"{{asset('assets/images/person_1.jpg')}}\" alt=\"Image placeholder\">
                          </div>
                          <div class=\"comment-body\">
                            <h3>Jean Doe</h3>
                            <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                          </div>

                            <ul class=\"children\">
                              <li class=\"comment\">
                                <div class=\"vcard\">
                                  <img src=\"{{asset('assets/images/person_1.jpg')}}\" alt=\"Image placeholder\">
                                </div>
                                <div class=\"comment-body\">
                                  <h3>Jean Doe</h3>
                                  <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class=\"comment\">
                  <div class=\"vcard\">
                    <img src=\"{{asset('assets/images/person_1.jpg')}}\" alt=\"Image placeholder\">
                  </div>
                  <div class=\"comment-body\">
                    <h3>Jean Doe</h3>
                    <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                  </div>
                </li>
              </ul> #}
              <!-- END comment-list -->
              
              <div class=\"comment-form-wrap pt-5\">
                <h3 class=\"mb-5\">Leave a comment</h3>
             
                {% if app.user %}
                  {{ form_start (form) }}
                    {{ form_widget (form.content, {'attr':{'class':'form form-control', 'placeholder':'comment'}}) }}<br>
                    <input type='submit' value='save' class='btn btn-primary'><br><br>
                  {{ form_end (form) }}
                  {% else %}
                    You be must logged in to leave a comment - <a href=\"{{path('app_login')}}\">login</a>
                {% endif %}

                  <ul class=\"comment-list\">

                  {% for comment in comments %}
                    <li class=\"comment\">
                      {# <div class=\"vcard\">
                        <img src=\"{{asset('assets/images/person_1.jpg')}}\" alt=\"Image placeholder\">
                      </div> #}
                      <div class=\"comment-body\">
                        <h3>{{comment.author.firstName ~ ' ' ~ comment.author.lastName}}</h3>
                        <div class=\"meta\">{{comment.createdAt| ago}}</div>
                        <p>{{comment.content}}</p>
                        <p><a href=\"#\" class=\"reply rounded\">Reply</a></p>
                      </div>
                    </li>
                  {% endfor %}
                  </ul>
              
              
                {# <form action=\"#\" class=\"p-5 bg-light\">
                  <div class=\"form-group\">
                    <label for=\"name\">Name *</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"email\">Email *</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"website\">Website</label>
                    <input type=\"url\" class=\"form-control\" id=\"website\">
                  </div>

                  <div class=\"form-group\">
                    <label for=\"message\">Message</label>
                    <textarea name=\"\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"form-group\">
                    <input type=\"submit\" value=\"Post Comment\" class=\"btn btn-primary\">
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class=\"col-md-12 col-lg-4 sidebar\">
            <div class=\"sidebar-box search-form-wrap\">
              <form action=\"#\" class=\"search-form\">
                <div class=\"form-group\">
                  <span class=\"icon fa fa-search\"></span>
                  <input type=\"text\" class=\"form-control\" id=\"s\" placeholder=\"Type a keyword and hit enter\">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
          
            <div class=\"sidebar-box\">
              <h3 class=\"heading\">Popular Posts</h3>
              <div class=\"post-entry-sidebar\">
                <ul>
                  <li>
                    <a href=\"\">
                      <img src=\"images/img_1.jpg\" alt=\"Image placeholder\" class=\"mr-4\">
                      <div class=\"text\">
                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                        <div class=\"post-meta\">
                          <span class=\"mr-2\">March 15, 2018 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href=\"\">
                      <img src=\"images/img_2.jpg\" alt=\"Image placeholder\" class=\"mr-4\">
                      <div class=\"text\">
                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                        <div class=\"post-meta\">
                          <span class=\"mr-2\">March 15, 2018 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href=\"\">
                      <img src=\"images/img_3.jpg\" alt=\"Image placeholder\" class=\"mr-4\">
                      <div class=\"text\">
                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                        <div class=\"post-meta\">
                          <span class=\"mr-2\">March 15, 2018 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

            <div class=\"sidebar-box\">
              <h3 class=\"heading\">Categories</h3>
              <ul class=\"categories\">
                <li><a href=\"#\">Food <span>(12)</span></a></li>
                <li><a href=\"#\">Travel <span>(22)</span></a></li>
                <li><a href=\"#\">Lifestyle <span>(37)</span></a></li>
                <li><a href=\"#\">Business <span>(42)</span></a></li>
                <li><a href=\"#\">Adventure <span>(14)</span></a></li>
              </ul>
            </div>
            <!-- END sidebar-box --> #}

            
          <!-- END sidebar -->

        </div>
      </div>
    </section>
{% endblock %}", "homepage/news_single.html.twig", "/Applications/MAMP/htdocs/projet/news-application/templates/homepage/news_single.html.twig");
    }
}
