<?php

/* project/new.html.twig */
class __TwigTemplate_307f6f93bc27587657df517a8715d86ebaacb6563ec8c7ce7615bfca4b70238d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "project/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/new.html.twig"));

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
        echo "    <div class=\"divider\"></div>
    <h2 class=\"headline\">Add project</h2>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            <label for=\"project-bg-image\">Background image</label>
            <input type=\"file\" name=\"project[background_img]\" id=\"project-bg-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "background_img", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"project-portfolio-image\">Portfolio image</label>
            <input type=\"file\" name=\"project[portfolio_img]\" id=\"project-portfolio-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "portfolio_img", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectname\">Project name</label>
            <input type=\"text\" name=\"project[name]\" class=\"form-control\" id=\"projectname\" placeholder=\"Project name\"
                ";
        // line 23
        if (array_key_exists("values", $context)) {
            // line 24
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "name", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 26
        echo "            >
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectcategory\">Category</label>
            <select class=\"form-control\" name=\"project[category]\" id=\"projectcategory\">
                ";
        // line 34
        if (array_key_exists("values", $context)) {
            // line 35
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 36
                echo "                        ";
                if (($context["cat"] == $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "category", array()))) {
                    // line 37
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                    echo "</option>
                        ";
                }
                // line 39
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                ";
        }
        // line 41
        echo "                ";
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? $this->getContext($context, "categories")))) {
            // line 42
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 43
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                echo "\">
                            ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                echo "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                ";
        }
        // line 48
        echo "            </select>
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectdescription\">Project description</label>
            <textarea class=\"form-control\" name=\"project[description]\" rows=\"5\" id=\"projectdescription\">";
        // line 55
        if (array_key_exists("values", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "name", array()), "html", null, true);
        } else {
            echo "Project description";
        }
        echo "</textarea>
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectclient\">Client</label>
            <input type=\"text\" name=\"project[client]\" class=\"form-control\" id=\"projectclient\" placeholder=\"Project client\"
                ";
        // line 63
        if (array_key_exists("values", $context)) {
            // line 64
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "client", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 66
        echo "            >
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectyear\">Year</label>
            <input type=\"text\" name=\"project[year]\" class=\"form-control\" id=\"projectyear\" placeholder=\"Project year\"
                ";
        // line 74
        if (array_key_exists("values", $context)) {
            // line 75
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "year", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 77
        echo "            >
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projecttypes\">Types</label>
            <input type=\"text\" name=\"project[types]\" class=\"form-control\" id=\"projecttypes\" placeholder=\"Project types\"
                ";
        // line 85
        if (array_key_exists("values", $context)) {
            // line 86
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "types", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 88
        echo "            >
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "types", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectagency\">Agency</label>
            <input type=\"text\" name=\"project[agency]\" class=\"form-control\" id=\"projectagency\" placeholder=\"Project agency\"
                ";
        // line 96
        if (array_key_exists("values", $context)) {
            // line 97
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "agency", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 99
        echo "            >
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "types", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"divider\"></div>
        ";
        // line 106
        echo "        ";
        // line 107
        echo "            ";
        // line 108
        echo "                ";
        // line 109
        echo "                ";
        // line 110
        echo "            ";
        // line 111
        echo "        ";
        // line 112
        echo "        <button type=\"submit\" value=\"submit\" name=\"submit\" class=\"btn btn-primary\">Save</button>
    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    <div class=\"bottom-divider\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 113,  277 => 112,  275 => 111,  273 => 110,  271 => 109,  269 => 108,  267 => 107,  265 => 106,  258 => 101,  254 => 99,  248 => 97,  246 => 96,  237 => 90,  233 => 88,  227 => 86,  225 => 85,  216 => 79,  212 => 77,  206 => 75,  204 => 74,  195 => 68,  191 => 66,  185 => 64,  183 => 63,  174 => 57,  165 => 55,  157 => 50,  153 => 48,  150 => 47,  141 => 44,  136 => 43,  131 => 42,  128 => 41,  125 => 40,  119 => 39,  111 => 37,  108 => 36,  103 => 35,  101 => 34,  92 => 28,  88 => 26,  82 => 24,  80 => 23,  71 => 17,  61 => 10,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseadmin.html.twig' %}
{% block body %}
    <div class=\"divider\"></div>
    <h2 class=\"headline\">Add project</h2>
    {{ form_start(form) }}
        <div class=\"form-group\">
            <label for=\"project-bg-image\">Background image</label>
            <input type=\"file\" name=\"project[background_img]\" id=\"project-bg-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.background_img) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"project-portfolio-image\">Portfolio image</label>
            <input type=\"file\" name=\"project[portfolio_img]\" id=\"project-portfolio-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.portfolio_img) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectname\">Project name</label>
            <input type=\"text\" name=\"project[name]\" class=\"form-control\" id=\"projectname\" placeholder=\"Project name\"
                {% if values is defined %}
                    value=\"{{ values.name }}\"
                {% endif %}
            >
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.name) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectcategory\">Category</label>
            <select class=\"form-control\" name=\"project[category]\" id=\"projectcategory\">
                {% if values is defined %}
                    {% for cat in categories %}
                        {% if cat == values.category %}
                            <option value=\"{{ cat.id }}\">{{ cat.name }}</option>
                        {% endif %}
                    {% endfor %}
                {% endif %}
                {% if categories is defined and categories %}
                    {% for cat in categories %}
                        <option value=\"{{ cat.id }}\">
                            {{ cat.name }}
                        </option>
                    {% endfor %}
                {% endif %}
            </select>
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.category) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectdescription\">Project description</label>
            <textarea class=\"form-control\" name=\"project[description]\" rows=\"5\" id=\"projectdescription\">{% if values is defined %}{{ values.name }}{% else %}Project description{% endif %}</textarea>
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.description) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectclient\">Client</label>
            <input type=\"text\" name=\"project[client]\" class=\"form-control\" id=\"projectclient\" placeholder=\"Project client\"
                {% if values is defined %}
                    value=\"{{ values.client }}\"
                {% endif %}
            >
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.client) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectyear\">Year</label>
            <input type=\"text\" name=\"project[year]\" class=\"form-control\" id=\"projectyear\" placeholder=\"Project year\"
                {% if values is defined %}
                    value=\"{{ values.year }}\"
                {% endif %}
            >
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.year) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projecttypes\">Types</label>
            <input type=\"text\" name=\"project[types]\" class=\"form-control\" id=\"projecttypes\" placeholder=\"Project types\"
                {% if values is defined %}
                    value=\"{{ values.types }}\"
                {% endif %}
            >
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.types) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectagency\">Agency</label>
            <input type=\"text\" name=\"project[agency]\" class=\"form-control\" id=\"projectagency\" placeholder=\"Project agency\"
                {% if values is defined %}
                    value=\"{{ values.agency }}\"
                {% endif %}
            >
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.types) }}
            </div>
        </div>
        <div class=\"divider\"></div>
        {#<h3>Gallery</h3>#}
        {#<div class=\"row\">#}
            {#<div class=\"col-md-2 admin-gallery-img-box\">#}
                {#<label class=\"project-gallery-img-box droppable-img-zone\" for=\"projectimage\">+</label>#}
                {#<input type=\"file\" name=\"projectimage\" class=\"project-image-upload\" id=\"projectimage\">#}
            {#</div>#}
        {#</div>#}
        <button type=\"submit\" value=\"submit\" name=\"submit\" class=\"btn btn-primary\">Save</button>
    {{ form_end(form, {'render_rest': false}) }}
    <div class=\"bottom-divider\"></div>
{% endblock %}", "project/new.html.twig", "C:\\wamp64\\www\\omh\\app\\Resources\\views\\project\\new.html.twig");
    }
}
