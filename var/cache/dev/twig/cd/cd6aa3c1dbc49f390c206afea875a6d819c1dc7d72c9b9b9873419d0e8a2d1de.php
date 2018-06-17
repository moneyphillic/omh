<?php

/* template/index.html.twig */
class __TwigTemplate_6c6d98a74857aa883717f64b35a74000a4470786b72d29c6aa91ef19198b6e43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "template/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/index.html.twig"));

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
        <section class=\"behind-header\">
            <div id=\"home-slider\" class=\"titanSlider fh fw\">
                <ul class=\"slides\">
                    ";
        // line 7
        if ((array_key_exists("projects", $context) && ($context["projects"] ?? $this->getContext($context, "projects")))) {
            // line 8
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                echo "                    <li class=\"slide dark\">
                        <div class=\"hero fs\">
                            <div style=\"background-image: url(";
                // line 11
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute($context["p"], "backgroundImg", array())), "html", null, true);
                echo ");\" class=\"bg faded\"></div>
                            <div class=\"vcenter\">
                                <div class=\"container\">
                                    <div class=\"grid\">
                                        <div class=\"col-1\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "year", array()), "html", null, true);
                echo "</div>
                                        <div class=\"col-7\">
                                            <div class=\"label\"></div><a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("singleproject", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
                echo "\" class=\"project-link\">
                                            <h1 class=\"stripe animatedText\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
                echo "</h1></a>
                                            ";
                // line 19
                $context["types"] = twig_split_filter($this->env, $this->getAttribute($context["p"], "types", array()), ",");
                // line 20
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 21
                    echo "                                                <div class=\"label\">";
                    echo twig_escape_filter($this->env, $context["t"], "html", null, true);
                    echo "</div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    ";
        }
        // line 31
        echo "                </ul>
            </div>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  114 => 30,  102 => 23,  93 => 21,  88 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 15,  66 => 11,  62 => 9,  57 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
        <section class=\"behind-header\">
            <div id=\"home-slider\" class=\"titanSlider fh fw\">
                <ul class=\"slides\">
                    {% if projects is defined and projects %}
                    {% for p in projects %}
                    <li class=\"slide dark\">
                        <div class=\"hero fs\">
                            <div style=\"background-image: url({{ asset('upload/') ~ p.backgroundImg }});\" class=\"bg faded\"></div>
                            <div class=\"vcenter\">
                                <div class=\"container\">
                                    <div class=\"grid\">
                                        <div class=\"col-1\">{{ p.year }}</div>
                                        <div class=\"col-7\">
                                            <div class=\"label\"></div><a href=\"{{ path('singleproject', {'id': p.id}) }}\" class=\"project-link\">
                                            <h1 class=\"stripe animatedText\">{{ p.name }}</h1></a>
                                            {% set types = p.types|split(',') %}
                                            {% for t in types %}
                                                <div class=\"label\">{{ t }}</div>
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                    {% endif %}
                </ul>
            </div>
        </section>
    </div>
{% endblock %}", "template/index.html.twig", "C:\\wamp64\\www\\omh\\app\\Resources\\views\\template\\index.html.twig");
    }
}
