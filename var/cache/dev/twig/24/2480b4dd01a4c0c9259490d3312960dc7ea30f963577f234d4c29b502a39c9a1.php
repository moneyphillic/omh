<?php

/* template/profile.html.twig */
class __TwigTemplate_c13a9bec49ce7a69200ded7cdb36d9bbd0b233a0c38a289107e1c3cbc0364f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "template/profile.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/profile.html.twig"));

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
    <section class=\"mb-xl\">
      <div class=\"hero behind-header small\">
        <div style=\"background-image: url(";
        // line 6
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "backgroundImg", array())), "html", null, true);
        echo ");\" class=\"bg faded\"></div>
        <div class=\"vbottom\">
          <div class=\"container\">
            <div class=\"grid mb-md\">
              <div class=\"col-8\">
                <h1 class=\"animatedText\">I'm Omar Hamza</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"mb-xl\">
      <div class=\"container\">
        <div class=\"grid\">
          <div class=\"col-3\">
            <div class=\"content-block\">
              <h2>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "headline", array()), "html", null, true);
        echo "</h2>
              <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "text", array()), "html", null, true);
        echo "</p>
            </div>
            ";
        // line 31
        echo "            <div class=\"content-block\">
              ";
        // line 33
        echo "              <div class=\"grid\">
                <div class=\"col-2-3\">
                  <h3>Hobbies</h3>
                  ";
        // line 37
        echo "                  <ul class=\"no-style no-underline\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hobbies"] ?? $this->getContext($context, "hobbies")));
        foreach ($context['_seq'] as $context["_key"] => $context["hobbie"]) {
            // line 39
            echo "                      <li><a href=\"javascript:;\">";
            echo twig_escape_filter($this->env, $context["hobbie"], "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobbie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                  </ul>
                </div>
                <div class=\"col-1-3\">
                  <h3>Social Media</h3>
                  ";
        // line 46
        echo "                  <ul class=\"no-style\">
                    ";
        // line 47
        if (($this->getAttribute(($context["profile"] ?? null), "facebook", array(), "any", true, true) && $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "facebook", array()))) {
            // line 48
            echo "                      ";
            // line 49
            echo "                    ";
        }
        // line 50
        echo "                    ";
        if (($this->getAttribute(($context["profile"] ?? null), "instagram", array(), "any", true, true) && $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "instagram", array()))) {
            // line 51
            echo "                      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "instagram", array()), "html", null, true);
            echo "\" target=\"_blank\">Instagram</a></li>
                    ";
        }
        // line 53
        echo "                    ";
        if (($this->getAttribute(($context["profile"] ?? null), "linkedin", array(), "any", true, true) && $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "linkedin", array()))) {
            // line 54
            echo "                      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "linkedin", array()), "html", null, true);
            echo "\" target=\"_blank\">Linkedin</a></li>
                    ";
        }
        // line 56
        echo "                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-2 col-offset-1\">
            <div class=\"list-block\">
              <h3 class=\"stripe\">Clients</h3>
              <span class=\"label\">My precious</span>
              <ul class=\"striped\">
                ";
        // line 66
        if ((array_key_exists("clients", $context) && ($context["clients"] ?? $this->getContext($context, "clients")))) {
            // line 67
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
            foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
                // line 68
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["cl"], "html", null, true);
                echo "</li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
        }
        // line 71
        echo "              </ul>
            </div>
          </div>
          <div class=\"col-2\">
            <div class=\"list-block\">
              <h3 class=\"stripe\">Tools</h3>
              <span class=\"label\">Master of</span>
              <ul class=\"striped\">
                ";
        // line 79
        if ((array_key_exists("tools", $context) && ($context["tools"] ?? $this->getContext($context, "tools")))) {
            // line 80
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? $this->getContext($context, "tools")));
            foreach ($context['_seq'] as $context["_key"] => $context["tls"]) {
                // line 81
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["tls"], "html", null, true);
                echo "</li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                ";
        }
        // line 84
        echo "              </ul>
              ";
        // line 86
        echo "            </div>
            <div class=\"list-block\">
              <h3 class=\"stripe\">Studios</h3>
              <span class=\"label\">I work with them</span>
              <ul class=\"striped\">
                  ";
        // line 91
        if ((array_key_exists("studios", $context) && ($context["studios"] ?? $this->getContext($context, "studios")))) {
            // line 92
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["studios"] ?? $this->getContext($context, "studios")));
            foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                // line 93
                echo "                        <li>";
                echo twig_escape_filter($this->env, $context["st"], "html", null, true);
                echo "</li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                  ";
        }
        // line 96
        echo "              </ul>
            </div>
            ";
        // line 118
        echo "          </div>
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
        return "template/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 118,  230 => 96,  227 => 95,  218 => 93,  213 => 92,  211 => 91,  204 => 86,  201 => 84,  198 => 83,  189 => 81,  184 => 80,  182 => 79,  172 => 71,  169 => 70,  160 => 68,  155 => 67,  153 => 66,  141 => 56,  135 => 54,  132 => 53,  126 => 51,  123 => 50,  120 => 49,  118 => 48,  116 => 47,  113 => 46,  107 => 41,  98 => 39,  94 => 38,  91 => 37,  86 => 33,  83 => 31,  78 => 24,  74 => 23,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
    <section class=\"mb-xl\">
      <div class=\"hero behind-header small\">
        <div style=\"background-image: url({{ asset('upload/') ~ profile.backgroundImg }});\" class=\"bg faded\"></div>
        <div class=\"vbottom\">
          <div class=\"container\">
            <div class=\"grid mb-md\">
              <div class=\"col-8\">
                <h1 class=\"animatedText\">I'm Omar Hamza</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"mb-xl\">
      <div class=\"container\">
        <div class=\"grid\">
          <div class=\"col-3\">
            <div class=\"content-block\">
              <h2>{{ profile.headline }}</h2>
              <p>{{ profile.text }}</p>
            </div>
            {# <div class=\"content-block\">
              <h4>Agencies &amp; Clients</h4>
              <h3>I don't work for clients, but with them</h3>
              <p>If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that nice big screen, and the sound quality is surprisingly good too. Now imagine if you knew how to download Iphone movies without having to pay.</p>
            </div> #}
            <div class=\"content-block\">
              {# <h4>External links</h4> #}
              <div class=\"grid\">
                <div class=\"col-2-3\">
                  <h3>Hobbies</h3>
                  {# <span class=\"label\">Tips 'n Tools</span> #}
                  <ul class=\"no-style no-underline\">
                    {% for hobbie in hobbies %}
                      <li><a href=\"javascript:;\">{{ hobbie }}</a></li>
                    {% endfor %}
                  </ul>
                </div>
                <div class=\"col-1-3\">
                  <h3>Social Media</h3>
                  {# <span class=\"label\">For the artists</span> #}
                  <ul class=\"no-style\">
                    {% if profile.facebook is defined and profile.facebook %}
                      {#<li><a href=\"{{ profile.facebook }}\" target=\"_blank\">Facebook</a></li>#}
                    {% endif %}
                    {% if profile.instagram is defined and profile.instagram %}
                      <li><a href=\"{{ profile.instagram }}\" target=\"_blank\">Instagram</a></li>
                    {% endif %}
                    {% if profile.linkedin is defined and profile.linkedin %}
                      <li><a href=\"{{ profile.linkedin }}\" target=\"_blank\">Linkedin</a></li>
                    {% endif %}
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-2 col-offset-1\">
            <div class=\"list-block\">
              <h3 class=\"stripe\">Clients</h3>
              <span class=\"label\">My precious</span>
              <ul class=\"striped\">
                {% if clients is defined and clients %}
                  {% for cl in clients %}
                    <li>{{ cl }}</li>
                  {% endfor %}
                {% endif %}
              </ul>
            </div>
          </div>
          <div class=\"col-2\">
            <div class=\"list-block\">
              <h3 class=\"stripe\">Tools</h3>
              <span class=\"label\">Master of</span>
              <ul class=\"striped\">
                {% if tools is defined and tools %}
                  {% for tls in tools %}
                    <li>{{ tls }}</li>
                  {% endfor %}
                {% endif %}
              </ul>
              {# <span class=\"label\">Site of the month</span> #}
            </div>
            <div class=\"list-block\">
              <h3 class=\"stripe\">Studios</h3>
              <span class=\"label\">I work with them</span>
              <ul class=\"striped\">
                  {% if studios is defined and studios %}
                      {% for st in studios %}
                        <li>{{ st }}</li>
                      {% endfor %}
                  {% endif %}
              </ul>
            </div>
            {# <div class=\"list-block\">
              <h3 class=\"stripe\">Studios</h3><span class=\"label\">Across the globe</span>
              <ul class=\"striped\">
                <li>Lords of Digital</li>
                <li>Ben &amp; Jane</li>
                <li>Studio Gibli</li>
                <li>Studio Gorilla</li>
                <li>Zen Studio</li>
              </ul>
            </div>
            <div class=\"list-block\">
              <h3 class=\"stripe\">Tools</h3><span class=\"label\">Software I use</span>
              <ul class=\"striped\">
                <li>Affinity Designer</li>
                <li>Adobe Indesign</li>
                <li>Adobe Illustrator</li>
                <li>Adobe Photoshop</li>
                <li>Sketch     </li>
              </ul>
            </div> #}
          </div>
        </div>
      </div>
    </section>
  </div>
{% endblock %}", "template/profile.html.twig", "/Users/kamenovivan/Documents/Projects/Web/omh/app/Resources/views/template/profile.html.twig");
    }
}
