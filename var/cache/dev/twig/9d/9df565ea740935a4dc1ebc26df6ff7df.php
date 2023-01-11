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

/* layout/partials/footer.html.twig */
class __TwigTemplate_4c8db5e689ed122ffbd8cfb62ed8de68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/partials/footer.html.twig"));

        // line 1
        echo " <div class=\"site-footer\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-4\">
            <h3 class=\"footer-heading mb-4\">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class=\"col-md-3 ml-auto\">
            <!-- <h3 class=\"footer-heading mb-4\">Navigation</h3> -->
            <ul class=\"list-unstyled float-left mr-5\">
              <li><a href=\"#\">About Us</a></li>
              <li><a href=\"#\">Advertise</a></li>
              <li><a href=\"#\">Careers</a></li>
              <li><a href=\"#\">Subscribes</a></li>
            </ul>
            <ul class=\"list-unstyled float-left\">
              <li><a href=\"#\">Travel</a></li>
              <li><a href=\"#\">Lifestyle</a></li>
              <li><a href=\"#\">Sports</a></li>
              <li><a href=\"#\">Nature</a></li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            

            <div>
              <h3 class=\"footer-heading mb-4\">Connect With Us</h3>
              <p>
                <a href=\"#\"><span class=\"icon-facebook pt-2 pr-2 pb-2 pl-0\"></span></a>
                <a href=\"#\"><span class=\"icon-twitter p-2\"></span></a>
                <a href=\"#\"><span class=\"icon-instagram p-2\"></span></a>
                <a href=\"#\"><span class=\"icon-rss p-2\"></span></a>
                <a href=\"#\"><span class=\"icon-envelope p-2\"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12 text-center\">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart text-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib---</a>Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"site-footer\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-4\">
            <h3 class=\"footer-heading mb-4\">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class=\"col-md-3 ml-auto\">
            <!-- <h3 class=\"footer-heading mb-4\">Navigation</h3> -->
            <ul class=\"list-unstyled float-left mr-5\">
              <li><a href=\"#\">About Us</a></li>
              <li><a href=\"#\">Advertise</a></li>
              <li><a href=\"#\">Careers</a></li>
              <li><a href=\"#\">Subscribes</a></li>
            </ul>
            <ul class=\"list-unstyled float-left\">
              <li><a href=\"#\">Travel</a></li>
              <li><a href=\"#\">Lifestyle</a></li>
              <li><a href=\"#\">Sports</a></li>
              <li><a href=\"#\">Nature</a></li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            

            <div>
              <h3 class=\"footer-heading mb-4\">Connect With Us</h3>
              <p>
                <a href=\"#\"><span class=\"icon-facebook pt-2 pr-2 pb-2 pl-0\"></span></a>
                <a href=\"#\"><span class=\"icon-twitter p-2\"></span></a>
                <a href=\"#\"><span class=\"icon-instagram p-2\"></span></a>
                <a href=\"#\"><span class=\"icon-rss p-2\"></span></a>
                <a href=\"#\"><span class=\"icon-envelope p-2\"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12 text-center\">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart text-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib---</a>Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>", "layout/partials/footer.html.twig", "/Applications/MAMP/htdocs/projet/news-application/templates/layout/partials/footer.html.twig");
    }
}
