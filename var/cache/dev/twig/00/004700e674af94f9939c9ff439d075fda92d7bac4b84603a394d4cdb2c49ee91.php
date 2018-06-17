<?php

/* template/contactme.html.twig */
class __TwigTemplate_79c97dac33402f4ddb1fe920dc03b853aa81b786020871f0910faff341223182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "template/contactme.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/contactme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/contactme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div id=\"inner\">
    <section class=\"behind-header desktop\">
      <div style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/contact/01.jpg"), "html", null, true);
        echo ");\" class=\"bg faded\"></div>
      <div class=\"vbottom desktop fh\">
        <div class=\"container\">
          <div class=\"grid mb-xl\">
            <div class=\"col-4\">
              <h3 class=\"mt-0\">Let's create</h3>
            </div>
            <div class=\"col-2\"><a href=\"mailto:";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "mail", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "mail", array()), "html", null, true);
        echo "</a></div>
            <div class=\"col-2\"><span class=\"label label-white\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "phone", array()), "html", null, true);
        echo "</span></div>
          </div>
          <form id=\"form\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("send_contact_mail");
        echo "\" class=\"vbottom-desktop grid default-form no-spacing lined-form mb-xl\" method=\"post\">
            <div class=\"col-2\">
              <input required type=\"text\" placeholder=\"Name\" name=\"name\" class=\"form-control\">
            </div>
            <div class=\"col-2\">
              <input required type=\"email\" placeholder=\"Email address\" name=\"email\" class=\"form-control\">
            </div>
            <div class=\"col-2\">
              <textarea required placeholder=\"Message\" name=\"message\" class=\"small form-control\"></textarea>
            </div>
            <div class=\"col-2\">
              <input id=\"send\" type=\"submit\" value=\"Send\" name=\"submit\" class=\"btn btn-primary\">
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template/contactme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  69 => 13,  63 => 12,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
  <div id=\"inner\">
    <section class=\"behind-header desktop\">
      <div style=\"background-image: url({{ asset('images/contact/01.jpg') }});\" class=\"bg faded\"></div>
      <div class=\"vbottom desktop fh\">
        <div class=\"container\">
          <div class=\"grid mb-xl\">
            <div class=\"col-4\">
              <h3 class=\"mt-0\">Let's create</h3>
            </div>
            <div class=\"col-2\"><a href=\"mailto:{{ profile.mail }}\">{{ profile.mail }}</a></div>
            <div class=\"col-2\"><span class=\"label label-white\">{{ profile.phone }}</span></div>
          </div>
          <form id=\"form\" action=\"{{ path('send_contact_mail') }}\" class=\"vbottom-desktop grid default-form no-spacing lined-form mb-xl\" method=\"post\">
            <div class=\"col-2\">
              <input required type=\"text\" placeholder=\"Name\" name=\"name\" class=\"form-control\">
            </div>
            <div class=\"col-2\">
              <input required type=\"email\" placeholder=\"Email address\" name=\"email\" class=\"form-control\">
            </div>
            <div class=\"col-2\">
              <textarea required placeholder=\"Message\" name=\"message\" class=\"small form-control\"></textarea>
            </div>
            <div class=\"col-2\">
              <input id=\"send\" type=\"submit\" value=\"Send\" name=\"submit\" class=\"btn btn-primary\">
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
{% endblock %}", "template/contactme.html.twig", "/Users/kamenovivan/Documents/Projects/Web/omh/app/Resources/views/template/contactme.html.twig");
    }
}
