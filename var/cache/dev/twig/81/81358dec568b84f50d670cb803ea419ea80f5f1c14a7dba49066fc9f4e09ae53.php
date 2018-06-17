<?php

/* template/projects.html.twig */
class __TwigTemplate_d34a8040d75762252c2c59c61a1668dc2bcce12ba3d9767d11b415f8c2e08255 extends Twig_Template
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
            echo "                        <li>
                            <a href=\"#\" data-filter=\"";
            // line 16
            if (($this->getAttribute($context["cat"], "name", array()) == "UX/UI")) {
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array("/" => "")), "html", null, true);
            } elseif (($this->getAttribute($context["cat"], "name", array()) == "Mix 'n' Trix")) {
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array("Mix 'n' Trix" => "MixnTrix")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array(" " => "")), "html", null, true);
            }
            echo "\" class=\"filter
                                ";
            // line 17
            if ((($context["type"] ?? $this->getContext($context, "type")) && ($this->getAttribute($context["cat"], "id", array()) == ($context["type"] ?? $this->getContext($context, "type"))))) {
                echo "active";
            }
            // line 18
            echo "                            \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class=\"container\">
            <div id=\"project-grid\" class=\"masonry-grid\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("singleproject", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 31
                echo "                            ";
                if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute($context["p"], "category", array()))) {
                    // line 32
                    echo "                                ";
                    if (($this->getAttribute($context["cat"], "name", array()) == "UX/UI")) {
                        // line 33
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array("/" => "")), "html", null, true);
                        echo "
                                ";
                    } elseif (($this->getAttribute(                    // line 34
$context["cat"], "name", array()) == "Mix 'n' Trix")) {
                        // line 35
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array("Mix 'n' Trix" => "MixnTrix")), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 37
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["cat"], "name", array()), array(" " => "")), "html", null, true);
                        echo "
                                ";
                    }
                    // line 39
                    echo "                            ";
                }
                // line 40
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        grid-item col-4\"
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 43
                echo "                            ";
                if ((((($context["type"] ?? $this->getContext($context, "type")) != null) && ($this->getAttribute($context["p"], "category", array()) == $this->getAttribute($context["cat"], "id", array()))) && (($context["type"] ?? $this->getContext($context, "type")) != $this->getAttribute($context["cat"], "id", array())))) {
                    // line 44
                    echo "                                style=\"display: none\"
                            ";
                }
                // line 46
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                        >
                        <div class=\"thumb\"><img src=\"";
            // line 48
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute($context["p"], "thumbnailImg", array())), "html", null, true);
            echo "\"></div>
                        <div class=\"caption\">
                            <div class=\"title\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</div>
                            <div class=\"subtitle\">
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 53
                echo "                                    ";
                if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute($context["p"], "category", array()))) {
                    // line 54
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                    echo "
                                    ";
                }
                // line 56
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </div>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return array (  215 => 61,  206 => 57,  200 => 56,  194 => 54,  191 => 53,  187 => 52,  182 => 50,  177 => 48,  174 => 47,  168 => 46,  164 => 44,  161 => 43,  157 => 42,  154 => 41,  148 => 40,  145 => 39,  139 => 37,  133 => 35,  131 => 34,  126 => 33,  123 => 32,  120 => 31,  116 => 30,  111 => 29,  107 => 28,  98 => 21,  88 => 18,  84 => 17,  74 => 16,  71 => 15,  67 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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
                        <li>
                            <a href=\"#\" data-filter=\"{% if cat.name == 'UX/UI' %}{{ cat.name|replace({'/': ''}) }}{% elseif cat.name == \"Mix 'n' Trix\" %}{{ cat.name|replace({\"Mix 'n' Trix\": 'MixnTrix'}) }}{% else %}{{ cat.name|replace({' ': ''}) }}{% endif %}\" class=\"filter
                                {% if type and cat.id == type %}active{% endif %}
                            \">{{ cat.name }}</a>
                        </li>
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
                                {% if cat.name == 'UX/UI' %}
                                    {{ cat.name|replace({'/': ''}) }}
                                {% elseif cat.name == \"Mix 'n' Trix\" %}
                                    {{ cat.name|replace({\"Mix 'n' Trix\": 'MixnTrix'}) }}
                                {% else %}
                                    {{ cat.name|replace({' ': ''}) }}
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                        grid-item col-4\"
                        {% for cat in categories %}
                            {% if type != null and p.category == cat.id and type != cat.id %}
                                style=\"display: none\"
                            {% endif %}
                        {% endfor %}
                        >
                        <div class=\"thumb\"><img src=\"{{ asset('upload/') ~ p.thumbnailImg }}\"></div>
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
{% endblock %}", "template/projects.html.twig", "/Users/kamenovivan/Documents/Projects/Web/omh/app/Resources/views/template/projects.html.twig");
    }
}
