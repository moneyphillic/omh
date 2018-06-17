<?php

/* template/header.html.twig */
class __TwigTemplate_51f53edab30547f53a44cefcc776b2714f28b9c85f296675e4639abdbecf9baa extends Twig_Template
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
                    <li class=\"col-1 has-dropdown\"><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects");
        echo "\" class=\"nav-link undefined\">Projects</a>
                        <ul class=\"dropdown\">
                            ";
        // line 26
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? $this->getContext($context, "categories")))) {
            // line 27
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 28
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
            // line 30
            echo "                            ";
        }
        // line 31
        echo "                        </ul>
                    </li>
                    <li class=\"col-1\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\" class=\"nav-link undefined\">I'm Omar</a>
                    <li class=\"col-1\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactme");
        echo "\" class=\"nav-link undefined\">Contact me</a>
                    ";
        // line 36
        echo "                    ";
        // line 37
        echo "                        ";
        // line 38
        echo "                            ";
        // line 39
        echo "                            ";
        // line 40
        echo "                            ";
        // line 41
        echo "                            ";
        // line 42
        echo "                        ";
        // line 43
        echo "                    ";
        // line 44
        echo "                    ";
        // line 45
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
        return array (  111 => 45,  109 => 44,  107 => 43,  105 => 42,  103 => 41,  101 => 40,  99 => 39,  97 => 38,  95 => 37,  93 => 36,  89 => 34,  85 => 33,  81 => 31,  78 => 30,  67 => 28,  62 => 27,  60 => 26,  55 => 24,  49 => 23,  25 => 1,);
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
                    <li class=\"col-1 has-dropdown\"><a href=\"{{ path('projects') }}\" class=\"nav-link undefined\">Projects</a>
                        <ul class=\"dropdown\">
                            {% if categories is defined and categories %}
                                {% for cat in categories %}
                                    <li><a href=\"{{ path('projects', {'type': cat.id}) }}\" class=\"nav-link undefined\">{{ cat.name }}</a></li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                    </li>
                    <li class=\"col-1\"><a href=\"{{ path('profile') }}\" class=\"nav-link undefined\">I'm Omar</a>
                    <li class=\"col-1\"><a href=\"{{ path('contactme') }}\" class=\"nav-link undefined\">Contact me</a>
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
</header>", "template/header.html.twig", "C:\\wamp64\\www\\omh\\app\\Resources\\views\\template\\header.html.twig");
    }
}
