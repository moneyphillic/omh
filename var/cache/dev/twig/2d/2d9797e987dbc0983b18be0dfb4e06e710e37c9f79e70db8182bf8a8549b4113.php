<?php

/* template/projectsingle.html.twig */
class __TwigTemplate_9aa0ef127e912a4029360044b069bd51b4502823c6ab451e45ebcd4c7c53152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "template/projectsingle.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/projectsingle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/projectsingle.html.twig"));

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
        <section class=\"nmb behind-header\">
            <div class=\"hero\">
                <div style=\"background-image: url(";
        // line 6
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "backgroundImg", array())), "html", null, true);
        echo ");\" class=\"bg faded\"></div>
                <div class=\"vcenter\">
                    <div class=\"container mb-xl\">
                        <div class=\"grid\">
                            <div class=\"col-1\" style=\"visibility: hidden;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</div>
                            <div class=\"col-7\">
                                <h1 class=\"animatedText\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"mb-xl\">
            <div class=\"container\">
                <div class=\"grid content\">
                    <div class=\"col-offset-1 col-3\">
                        <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-offset-1 col-1\">
                        <div class=\"project-data\">
                            <div class=\"title\">Client</div>
                            <div class=\"desc\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "client", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"project-data\">
                            <div class=\"title\">Type</div>
                            <div class=\"desc\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "types", array()), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col-1\">
                        <div class=\"project-data\">
                            <div class=\"title\">Year</div>
                            <div class=\"desc\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "year", array()), "html", null, true);
        echo "</div>
                        </div>
                        ";
        // line 40
        if ((($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "agency", array()) != null) && ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "agency", array()) != ""))) {
            // line 41
            echo "                        <div class=\"project-data\">
                            <div class=\"title\">Agency</div>
                            <div class=\"desc\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "agency", array()), "html", null, true);
            echo "</div>
                        </div>
                        ";
        }
        // line 46
        echo "                    </div>
                </div>
            </div>
        </section>
        <section class=\"mb-xl\">
            <div class=\"container\">
                <div class=\"grid content\">
                    <div id=\"img-carousel\" class=\"titanSlider\">
                        <ul class=\"slides\">
                            <li class=\"slide\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "portfolioImg", array())), "html", null, true);
        echo "\" class=\"fw\"></li>
                            <li class=\"slide\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "portfolioImg", array())), "html", null, true);
        echo "\" class=\"fw\"></li>
                            <li class=\"slide\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "portfolioImg", array())), "html", null, true);
        echo "\" class=\"fw\"></li>
                            <li class=\"slide\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "portfolioImg", array())), "html", null, true);
        echo "\" class=\"fw\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"mb-xl\" style=\"margin-top: 40px;\">
            <div class=\"container\">
                <ul class=\"accordion\">
                    <li class=\"active\">
                        <div class=\"head\" style=\"text-align: center;\">
                            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactme");
        echo "\" onclick=\"console.log('hello'); window.location = '/contact-me'\" style=\"text-decoration: none; text-align: center;\">Contact me</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class=\"prev-next-container mb-xl\" style=\"margin-top: -160px\">
            <div class=\"container\">
                <div class=\"grid content\">
                    ";
        // line 78
        if ((array_key_exists("projectbefore", $context) && ($context["projectbefore"] ?? $this->getContext($context, "projectbefore")))) {
            // line 79
            echo "                    <div class=\"col-4\">
                        <div class=\"vcenter link-container\"><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("singleproject", array("id" => $this->getAttribute(($context["projectbefore"] ?? $this->getContext($context, "projectbefore")), "id", array()))), "html", null, true);
            echo "\" class=\"prev-link\">
                            <div class=\"project-title\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute(($context["projectbefore"] ?? $this->getContext($context, "projectbefore")), "name", array()), "html", null, true);
            echo "</div>
                            <div class=\"link-title\">Previous project</div></a>
                        </div>
                    </div>
                    ";
        }
        // line 86
        echo "                    ";
        if ((array_key_exists("projectbefore", $context) && ($context["projectbefore"] ?? $this->getContext($context, "projectbefore")))) {
            // line 87
            echo "                    <div class=\"col-4\">
                        <div class=\"vcenter link-container text-right\"><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("singleproject", array("id" => $this->getAttribute(($context["projectafter"] ?? $this->getContext($context, "projectafter")), "id", array()))), "html", null, true);
            echo "\" class=\"next-link\">
                            <div class=\"project-title\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["projectafter"] ?? $this->getContext($context, "projectafter")), "name", array()), "html", null, true);
            echo "</div>
                            <div class=\"link-title\">Next project</div></a>
                        </div>
                    </div>
                    ";
        }
        // line 94
        echo "                </div>
            </div>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template/projectsingle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 94,  197 => 89,  193 => 88,  190 => 87,  187 => 86,  179 => 81,  175 => 80,  172 => 79,  170 => 78,  158 => 69,  144 => 58,  140 => 57,  136 => 56,  132 => 55,  121 => 46,  115 => 43,  111 => 41,  109 => 40,  104 => 38,  95 => 32,  88 => 28,  80 => 23,  66 => 12,  61 => 10,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <section class=\"nmb behind-header\">
            <div class=\"hero\">
                <div style=\"background-image: url({{ asset('upload/') ~ project.backgroundImg }});\" class=\"bg faded\"></div>
                <div class=\"vcenter\">
                    <div class=\"container mb-xl\">
                        <div class=\"grid\">
                            <div class=\"col-1\" style=\"visibility: hidden;\">{{ project.name }}</div>
                            <div class=\"col-7\">
                                <h1 class=\"animatedText\">{{ project.name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"mb-xl\">
            <div class=\"container\">
                <div class=\"grid content\">
                    <div class=\"col-offset-1 col-3\">
                        <p>{{ project.description }}</p>
                    </div>
                    <div class=\"col-offset-1 col-1\">
                        <div class=\"project-data\">
                            <div class=\"title\">Client</div>
                            <div class=\"desc\">{{ project.client }}</div>
                        </div>
                        <div class=\"project-data\">
                            <div class=\"title\">Type</div>
                            <div class=\"desc\">{{ project.types }}</div>
                        </div>
                    </div>
                    <div class=\"col-1\">
                        <div class=\"project-data\">
                            <div class=\"title\">Year</div>
                            <div class=\"desc\">{{ project.year }}</div>
                        </div>
                        {% if project.agency != null and project.agency != '' %}
                        <div class=\"project-data\">
                            <div class=\"title\">Agency</div>
                            <div class=\"desc\">{{ project.agency }}</div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </section>
        <section class=\"mb-xl\">
            <div class=\"container\">
                <div class=\"grid content\">
                    <div id=\"img-carousel\" class=\"titanSlider\">
                        <ul class=\"slides\">
                            <li class=\"slide\"><img src=\"{{ asset('upload/') ~ project.portfolioImg }}\" class=\"fw\"></li>
                            <li class=\"slide\"><img src=\"{{ asset('upload/') ~ project.portfolioImg }}\" class=\"fw\"></li>
                            <li class=\"slide\"><img src=\"{{ asset('upload/') ~ project.portfolioImg }}\" class=\"fw\"></li>
                            <li class=\"slide\"><img src=\"{{ asset('upload/') ~ project.portfolioImg }}\" class=\"fw\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"mb-xl\" style=\"margin-top: 40px;\">
            <div class=\"container\">
                <ul class=\"accordion\">
                    <li class=\"active\">
                        <div class=\"head\" style=\"text-align: center;\">
                            <a href=\"{{ path('contactme') }}\" onclick=\"console.log('hello'); window.location = '/contact-me'\" style=\"text-decoration: none; text-align: center;\">Contact me</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class=\"prev-next-container mb-xl\" style=\"margin-top: -160px\">
            <div class=\"container\">
                <div class=\"grid content\">
                    {% if projectbefore is defined and projectbefore %}
                    <div class=\"col-4\">
                        <div class=\"vcenter link-container\"><a href=\"{{ path('singleproject', {'id': projectbefore.id}) }}\" class=\"prev-link\">
                            <div class=\"project-title\">{{ projectbefore.name }}</div>
                            <div class=\"link-title\">Previous project</div></a>
                        </div>
                    </div>
                    {% endif %}
                    {% if projectbefore is defined and projectbefore %}
                    <div class=\"col-4\">
                        <div class=\"vcenter link-container text-right\"><a href=\"{{ path('singleproject', {'id': projectafter.id}) }}\" class=\"next-link\">
                            <div class=\"project-title\">{{ projectafter.name }}</div>
                            <div class=\"link-title\">Next project</div></a>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </section>
    </div>
{% endblock %}", "template/projectsingle.html.twig", "C:\\wamp64\\www\\omh\\app\\Resources\\views\\template\\projectsingle.html.twig");
    }
}
