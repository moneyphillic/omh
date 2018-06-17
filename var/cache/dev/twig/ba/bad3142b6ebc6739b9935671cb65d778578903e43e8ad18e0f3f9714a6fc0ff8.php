<?php

/* template/projects.html.twig */
class __TwigTemplate_2c5feda20eb26852f4824af97dec5ca72a44dd74ce6173b9e6ff728f1af05605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "template/projects.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/projects.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/projects.html.twig"));

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
        echo "    <div id=\"inner\">
        <section class=\"mb-xl\">
          <div class=\"container mb-md\">
            <div class=\"grid\">
              <div class=\"col-3\">
                <h2 class=\"grid-title\">Projects</h2>
              </div>
              <div class=\"col-5 text-right\">
                <nav id=\"filters\">
                  <ul class=\"filters\">
                    <li><a href=\"#\" data-filter=\"grid-item\" class=\"";
        // line 13
        if ((($context["type"] ?? $this->getContext($context, "type")) == null)) {
            echo "active";
        }
        echo " filter\">All</a></li>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 15
            echo "                        <li><a href=\"#\" data-filter=\"";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array(" " => "")), "html", null, true);
            echo "\" class=\"filter 
                                ";
            // line 16
            if ((($context["type"] ?? $this->getContext($context, "type")) && ($this->getAttribute($context["cat"], "id", array()) == ($context["type"] ?? $this->getContext($context, "type"))))) {
                echo "active";
            }
            // line 17
            echo "                            \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class=\"container\">
            <div id=\"project-grid\" class=\"masonry-grid\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("singleproject", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 29
                echo "                            ";
                if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute($context["p"], "category", array()))) {
                    // line 30
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array(" " => "")), "html", null, true);
                    echo "
                            ";
                }
                // line 32
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                        grid-item col-4\"
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 35
                echo "                            ";
                if ((((($context["type"] ?? $this->getContext($context, "type")) != null) && ($this->getAttribute($context["p"], "category", array()) == $this->getAttribute($context["cat"], "id", array()))) && (($context["type"] ?? $this->getContext($context, "type")) != $this->getAttribute($context["cat"], "id", array())))) {
                    // line 36
                    echo "                                style=\"display: none\"
                            ";
                }
                // line 38
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        >
                        <div class=\"thumb\"><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute($context["p"], "backgroundImg", array())), "html", null, true);
            echo "\"></div>
                        <div class=\"caption\">
                            <div class=\"title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</div>
                            <div class=\"subtitle\">
                                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 45
                echo "                                    ";
                if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute($context["p"], "category", array()))) {
                    // line 46
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                    echo "
                                    ";
                }
                // line 48
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                            </div>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          </div>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template/projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 53,  178 => 49,  172 => 48,  166 => 46,  163 => 45,  159 => 44,  154 => 42,  149 => 40,  146 => 39,  140 => 38,  136 => 36,  133 => 35,  129 => 34,  126 => 33,  120 => 32,  114 => 30,  111 => 29,  107 => 28,  102 => 27,  98 => 26,  89 => 19,  80 => 17,  76 => 16,  71 => 15,  67 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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
          <div class=\"container mb-md\">
            <div class=\"grid\">
              <div class=\"col-3\">
                <h2 class=\"grid-title\">Projects</h2>
              </div>
              <div class=\"col-5 text-right\">
                <nav id=\"filters\">
                  <ul class=\"filters\">
                    <li><a href=\"#\" data-filter=\"grid-item\" class=\"{% if type == null %}active{% endif %} filter\">All</a></li>
                    {% for cat in categories %}
                        <li><a href=\"#\" data-filter=\"{{ cat.name|replace({' ': ''}) }}\" class=\"filter 
                                {% if type and cat.id == type %}active{% endif %}
                            \">{{ cat.name }}</a></li>
                    {% endfor %}
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class=\"container\">
            <div id=\"project-grid\" class=\"masonry-grid\">
                {% for p in projects %}
                    <a href=\"{{ path('singleproject', {'id': p.id}) }}\" class=\"
                        {% for cat in categories %}
                            {% if cat.id == p.category %}
                                {{ cat.name|replace({' ': ''}) }}
                            {% endif %}
                        {% endfor %}
                        grid-item col-4\"
                        {% for cat in categories %}
                            {% if type != null and p.category == cat.id and type != cat.id %}
                                style=\"display: none\"
                            {% endif %}
                        {% endfor %}
                        >
                        <div class=\"thumb\"><img src=\"{{ asset('upload/') ~ p.backgroundImg }}\"></div>
                        <div class=\"caption\">
                            <div class=\"title\">{{ p.name }}</div>
                            <div class=\"subtitle\">
                                {% for cat in categories %}
                                    {% if cat.id == p.category %}
                                        {{ cat.name }}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </a>
                {% endfor %}
          </div>
        </section>
    </div>
{% endblock %}", "template/projects.html.twig", "C:\\wamp64\\www\\omh\\app\\Resources\\views\\template\\projects.html.twig");
    }
}
