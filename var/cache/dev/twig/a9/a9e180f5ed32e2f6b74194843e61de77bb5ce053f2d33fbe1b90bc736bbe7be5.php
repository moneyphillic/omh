<?php

/* project/edit.html.twig */
class __TwigTemplate_7f6ce98d6761e485a455facbef2db8cdb86051fe057000ac49f5c6088d6ec07a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "project/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

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
    <h2 class=\"headline\">Add project
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_delete", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary\" style=\"float: right;\">Delete</a>
    </h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "backgroundImg", array())), "html", null, true);
        echo "\" alt=\"\" style=\"width: 50px;\">
            <label for=\"project-bg-image\" style=\"padding: 0px 0px 15px 15px\">Background image</label>
            <input type=\"file\" name=\"project[background_img]\" id=\"project-bg-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "background_img", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "portfolioImg", array())), "html", null, true);
        echo "\" alt=\"\" style=\"width: 50px;\">
            <label for=\"project-portfolio-image\" style=\"padding: 0px 0px 15px 15px\">Portfolio image</label>
            <input type=\"file\" name=\"project[portfolio_img]\" id=\"project-portfolio-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "portfolio_img", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectname\">Project name</label>
            <input type=\"text\" name=\"project[name]\" class=\"form-control\" id=\"projectname\" placeholder=\"Project name\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "\">
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
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? $this->getContext($context, "categories")))) {
            // line 35
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 36
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                echo "\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                echo "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                ";
        }
        // line 41
        echo "            </select>
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectdescription\">Project description</label>
            <textarea class=\"form-control\" name=\"project[description]\" rows=\"5\" id=\"projectdescription\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectclient\">Client</label>
            <input type=\"text\" name=\"project[client]\" class=\"form-control\" id=\"projectclient\" placeholder=\"Project client\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "client", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectyear\">Year</label>
            <input type=\"text\" name=\"project[year]\" class=\"form-control\" id=\"projectyear\" placeholder=\"Project year\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "year", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projecttypes\">Types</label>
            <input type=\"text\" name=\"project[types]\" class=\"form-control\" id=\"projecttypes\" placeholder=\"Project types\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "types", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "types", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectagency\">Agency</label>
            <input type=\"text\" name=\"project[agency]\" class=\"form-control\" id=\"projectagency\" placeholder=\"Project agency\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "agency", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "types", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"divider\"></div>
        ";
        // line 83
        echo "        ";
        // line 84
        echo "        ";
        // line 85
        echo "        ";
        // line 86
        echo "        ";
        // line 87
        echo "        ";
        // line 88
        echo "        ";
        // line 89
        echo "        <button type=\"submit\" value=\"submit\" name=\"submit\" class=\"btn btn-primary\">Save</button>
    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    <div class=\"bottom-divider\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 90,  218 => 89,  216 => 88,  214 => 87,  212 => 86,  210 => 85,  208 => 84,  206 => 83,  199 => 78,  194 => 76,  186 => 71,  181 => 69,  173 => 64,  168 => 62,  160 => 57,  155 => 55,  147 => 50,  142 => 48,  134 => 43,  130 => 41,  127 => 40,  118 => 37,  113 => 36,  108 => 35,  106 => 34,  97 => 28,  92 => 26,  84 => 21,  77 => 17,  70 => 13,  63 => 9,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <h2 class=\"headline\">Add project
        <a href=\"{{ path('project_delete', {'id': project.id}) }}\" class=\"btn btn-secondary\" style=\"float: right;\">Delete</a>
    </h2>
    {{ form_start(form) }}
        <div class=\"form-group\">
            <img src=\"{{ asset('upload/') ~ project.backgroundImg }}\" alt=\"\" style=\"width: 50px;\">
            <label for=\"project-bg-image\" style=\"padding: 0px 0px 15px 15px\">Background image</label>
            <input type=\"file\" name=\"project[background_img]\" id=\"project-bg-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.background_img) }}
            </div>
        </div>
        <div class=\"form-group\">
            <img src=\"{{ asset('upload/') ~ project.portfolioImg }}\" alt=\"\" style=\"width: 50px;\">
            <label for=\"project-portfolio-image\" style=\"padding: 0px 0px 15px 15px\">Portfolio image</label>
            <input type=\"file\" name=\"project[portfolio_img]\" id=\"project-portfolio-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.portfolio_img) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectname\">Project name</label>
            <input type=\"text\" name=\"project[name]\" class=\"form-control\" id=\"projectname\" placeholder=\"Project name\" value=\"{{ project.name }}\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.name) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectcategory\">Category</label>
            <select class=\"form-control\" name=\"project[category]\" id=\"projectcategory\">
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
            <textarea class=\"form-control\" name=\"project[description]\" rows=\"5\" id=\"projectdescription\">{{ project.description }}</textarea>
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.description) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectclient\">Client</label>
            <input type=\"text\" name=\"project[client]\" class=\"form-control\" id=\"projectclient\" placeholder=\"Project client\" value=\"{{ project.client }}\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.client) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectyear\">Year</label>
            <input type=\"text\" name=\"project[year]\" class=\"form-control\" id=\"projectyear\" placeholder=\"Project year\" value=\"{{ project.year }}\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.year) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projecttypes\">Types</label>
            <input type=\"text\" name=\"project[types]\" class=\"form-control\" id=\"projecttypes\" placeholder=\"Project types\" value=\"{{ project.types }}\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.types) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"projectagency\">Agency</label>
            <input type=\"text\" name=\"project[agency]\" class=\"form-control\" id=\"projectagency\" placeholder=\"Project agency\" value=\"{{ project.agency }}\">
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
{% endblock %}", "project/edit.html.twig", "C:\\wamp64\\www\\omh\\app\\Resources\\views\\project\\edit.html.twig");
    }
}
