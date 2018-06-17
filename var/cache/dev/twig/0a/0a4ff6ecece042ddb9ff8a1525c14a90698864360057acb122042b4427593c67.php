<?php

/* template/header.html.twig */
class __TwigTemplate_dded0832c77f61aa591a4998416bc729930feea3d2618bb1280e601c6d795f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/header.html.twig"));

        // line 1
        echo "<div id=\"loader\" class=\"fh\">
    <section class=\"vcenter\">
        <div class=\"container\">
            <div class=\"indicator\"> <span class=\"number\">00</span><span class=\"unit\">%</span>
                <div class=\"loadbar\">
                    <div class=\"inner\"></div>
                </div>
            </div>
            <div class=\"img-count\"><span class=\"loaded\"></span><span class=\"description\">images loaded</span></div>
        </div>
    </section>
</div>
<header id=\"main-header\">
    <div class=\"container\">
        <div class=\"grid\">
            <nav class=\"main-nav\">
                <div class=\"responsive-nav\">
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                </div>
                <ul class=\"nav-links\">
                    <li class=\"col-1 brand\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img alt=\"Peel\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.svg"), "html", null, true);
        echo "\" class=\"default\"></a></li>
                    <li class=\"col-1 has-dropdown left-arrange mobile-screen\">
                        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects");
        echo "\" class=\"nav-link undefined\">Projects</a>
                        <ul class=\"dropdown\">
                            ";
        // line 27
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? $this->getContext($context, "categories")))) {
            // line 28
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 29
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects", array("type" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
                echo "\" class=\"nav-link undefined\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                            ";
        }
        // line 32
        echo "                        </ul>
                    </li>
                    <li class=\"col-1 left-arrange mobile-screen\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\" class=\"nav-link undefined\">I'm Omar</a>
                    <li class=\"col-1 left-arrange mobile-screen\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactme");
        echo "\" class=\"nav-link undefined\">Contact me</a>

                    <li class=\"col-1 left-arrange desktop-screen\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactme");
        echo "\" class=\"nav-link undefined\">Contact me</a>
                    <li class=\"col-1 left-arrange desktop-screen\"><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\" class=\"nav-link undefined\">I'm Omar</a>
                    <li class=\"col-1 has-dropdown left-arrange desktop-screen\">
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects");
        echo "\" class=\"nav-link undefined\">Projects</a>
                        <ul class=\"dropdown\">
                            ";
        // line 42
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? $this->getContext($context, "categories")))) {
            // line 43
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 44
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects", array("type" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
                echo "\" class=\"nav-link undefined\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            ";
        }
        // line 47
        echo "                        </ul>
                    </li>
                        ";
        // line 50
        echo "                    ";
        // line 51
        echo "                        ";
        // line 52
        echo "                            ";
        // line 53
        echo "                            ";
        // line 54
        echo "                            ";
        // line 55
        echo "                            ";
        // line 56
        echo "                        ";
        // line 57
        echo "                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  150 => 58,  148 => 57,  146 => 56,  144 => 55,  142 => 54,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  130 => 47,  127 => 46,  116 => 44,  111 => 43,  109 => 42,  104 => 40,  99 => 38,  95 => 37,  90 => 35,  86 => 34,  82 => 32,  79 => 31,  68 => 29,  63 => 28,  61 => 27,  56 => 25,  49 => 23,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"loader\" class=\"fh\">
    <section class=\"vcenter\">
        <div class=\"container\">
            <div class=\"indicator\"> <span class=\"number\">00</span><span class=\"unit\">%</span>
                <div class=\"loadbar\">
                    <div class=\"inner\"></div>
                </div>
            </div>
            <div class=\"img-count\"><span class=\"loaded\"></span><span class=\"description\">images loaded</span></div>
        </div>
    </section>
</div>
<header id=\"main-header\">
    <div class=\"container\">
        <div class=\"grid\">
            <nav class=\"main-nav\">
                <div class=\"responsive-nav\">
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                </div>
                <ul class=\"nav-links\">
                    <li class=\"col-1 brand\"><a href=\"{{ path('homepage') }}\"><img alt=\"Peel\" src=\"{{ asset('images/logo.svg') }}\" class=\"default\"></a></li>
                    <li class=\"col-1 has-dropdown left-arrange mobile-screen\">
                        <a href=\"{{ path('projects') }}\" class=\"nav-link undefined\">Projects</a>
                        <ul class=\"dropdown\">
                            {% if categories is defined and categories %}
                                {% for cat in categories %}
                                    <li><a href=\"{{ path('projects', {'type': cat.id}) }}\" class=\"nav-link undefined\">{{ cat.name }}</a></li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                    </li>
                    <li class=\"col-1 left-arrange mobile-screen\"><a href=\"{{ path('profile') }}\" class=\"nav-link undefined\">I'm Omar</a>
                    <li class=\"col-1 left-arrange mobile-screen\"><a href=\"{{ path('contactme') }}\" class=\"nav-link undefined\">Contact me</a>

                    <li class=\"col-1 left-arrange desktop-screen\"><a href=\"{{ path('contactme') }}\" class=\"nav-link undefined\">Contact me</a>
                    <li class=\"col-1 left-arrange desktop-screen\"><a href=\"{{ path('profile') }}\" class=\"nav-link undefined\">I'm Omar</a>
                    <li class=\"col-1 has-dropdown left-arrange desktop-screen\">
                        <a href=\"{{ path('projects') }}\" class=\"nav-link undefined\">Projects</a>
                        <ul class=\"dropdown\">
                            {% if categories is defined and categories %}
                                {% for cat in categories %}
                                    <li><a href=\"{{ path('projects', {'type': cat.id}) }}\" class=\"nav-link undefined\">{{ cat.name }}</a></li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                    </li>
                        {#</li>#}
                    {#<li class=\"col-1 col-offset-1\"><a href=\"journal.html\" class=\"nav-link undefined\">Journal</a>#}
                        {#<ul class=\"dropdown\">#}
                            {#<li><a href=\"journal.html\" class=\"nav-link undefined\">Journal - Overview</a>#}
                            {#</li>#}
                            {#<li><a href=\"journal-single.html\" class=\"nav-link undefined\">Journal - Article</a>#}
                            {#</li>#}
                        {#</ul>#}
                    {#</li>#}
                    {#<li class=\"col-1 col-offset-1\"><a href=\"contact.html\" class=\"nav-link undefined\">Contact</a>#}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>", "template/header.html.twig", "/Users/kamenovivan/Documents/Projects/Web/omh/app/Resources/views/template/header.html.twig");
    }
}
