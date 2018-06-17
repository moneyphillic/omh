<?php

/* profile/index.html.twig */
class __TwigTemplate_11b33d8e4946d10696f10f042e0816ddb872c8d5632265f43a536b6c4eb745d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "profile/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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
        echo "    ";
        if ((array_key_exists("errors", $context) && ($context["errors"] ?? $this->getContext($context, "errors")))) {
            // line 4
            echo "        ";
            $context["err"] = true;
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            $context["err"] = false;
            // line 7
            echo "    ";
        }
        // line 8
        echo "    <div class=\"divider\"></div>
    <h2 class=\"headline\">Profile</h2>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/") . $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "backgroundImg", array())), "html", null, true);
        echo "\" alt=\"\" style=\"width: 50px;\">
            <label for=\"project-bg-image\">Background image</label>
            <input type=\"file\" name=\"profile[background_img]\" id=\"project-bg-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "background_img", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"profileheadline\">Headline</label>
            <input type=\"text\" name=\"profile[headline]\" id=\"profileheadline\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "headline", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "headline", array()), 'errors');
        echo "</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profiledescription\">Profile description</label>
            <textarea class=\"form-control\" name=\"profile[text]\" rows=\"5\" id=\"profiledescription\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "text", array()), "html", null, true);
        echo "</textarea>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "text", array()), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"profilehobbies\">Hobbies</label>
            <input type=\"text\" name=\"profile[hobbies]\" id=\"profilehobbies\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "hobbies", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hobbies", array()), 'errors');
        echo "</div>
        </div>
        ";
        // line 39
        echo "        <div class=\"form-group\">
            <label for=\"profilefacebook\">Facebook</label>
            <input type=\"text\" name=\"profile[facebook]\" id=\"profilefacebook\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "facebook", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"profileinstagram\">Instagram</label>
            <input type=\"text\" name=\"profile[instagram]\" id=\"profileinstagram\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "instagram", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"profilelinkedin\">Linkedin</label>
            <input type=\"text\" name=\"profile[linkedin]\" id=\"profilelinkedin\" class=\"form-control\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "linkedin", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"profileclients\">Clients</label>
            <input type=\"text\" name=\"profile[clients]\" id=\"profileclients\" class=\"form-control\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "clients", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "clients", array()), 'errors');
        echo "</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profilestudios\">Studios</label>
            <input type=\"text\" name=\"profile[studios]\" id=\"profilestudios\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "studios", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "studios", array()), 'errors');
        echo "</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profiletools\">Tools</label>
            <input type=\"text\" name=\"profile[tools]\" id=\"profiletools\" class=\"form-control\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "tools", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tools", array()), 'errors');
        echo "</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profileemail\">Email</label>
            <input type=\"text\" name=\"profile[mail]\" id=\"profileemail\" class=\"form-control\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "mail", array()), "html", null, true);
        echo "\">
            <div style=\"color: red; padding: 5px 0px\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profilephone\">Phone</label>
            <input type=\"text\" name=\"profile[phone]\" id=\"profilephone\" class=\"form-control\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "phone", array()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" value=\"submit\" name=\"submit\" class=\"btn btn-primary\">Save</button>
        <div class=\"bottom-divider\"></div>
    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 77,  188 => 73,  181 => 69,  177 => 68,  170 => 64,  166 => 63,  159 => 59,  155 => 58,  148 => 54,  144 => 53,  137 => 49,  130 => 45,  123 => 41,  119 => 39,  114 => 32,  110 => 31,  103 => 27,  99 => 26,  92 => 22,  88 => 21,  80 => 16,  73 => 12,  68 => 10,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    {% if errors is defined and errors %}
        {% set err = true %}
    {% else %}
        {% set err = false %}
    {% endif %}
    <div class=\"divider\"></div>
    <h2 class=\"headline\">Profile</h2>
    {{ form_start(form) }}
        <div class=\"form-group\">
            <img src=\"{{ asset('upload/') ~ profile.backgroundImg }}\" alt=\"\" style=\"width: 50px;\">
            <label for=\"project-bg-image\">Background image</label>
            <input type=\"file\" name=\"profile[background_img]\" id=\"project-bg-image\" class=\"form-control\">
            <div style=\"color: red; padding: 5px 0px\">
                {{ form_errors(form.background_img) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"profileheadline\">Headline</label>
            <input type=\"text\" name=\"profile[headline]\" id=\"profileheadline\" class=\"form-control\" value=\"{{ profile.headline }}\">
            <div style=\"color: red; padding: 5px 0px\">{{ form_errors(form.headline) }}</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profiledescription\">Profile description</label>
            <textarea class=\"form-control\" name=\"profile[text]\" rows=\"5\" id=\"profiledescription\">{{ profile.text }}</textarea>
            {{ form_errors(form.text) }}
        </div>
        <div class=\"form-group\">
            <label for=\"profilehobbies\">Hobbies</label>
            <input type=\"text\" name=\"profile[hobbies]\" id=\"profilehobbies\" class=\"form-control\" value=\"{{ profile.hobbies }}\">
            <div style=\"color: red; padding: 5px 0px\">{{ form_errors(form.hobbies) }}</div>
        </div>
        {# <div class=\"form-group\">
            <label for=\"profilesocialchannels\">Social Media Channels</label>
            <input type=\"text\" name=\"profile[social_channels]\" id=\"profilesocialchannels\" class=\"form-control\" value=\"{{ profile.socialChannels }}\">
            <div style=\"color: red; padding: 5px 0px\">{{ form_errors(form.social_channels) }}</div>
        </div> #}
        <div class=\"form-group\">
            <label for=\"profilefacebook\">Facebook</label>
            <input type=\"text\" name=\"profile[facebook]\" id=\"profilefacebook\" class=\"form-control\" value=\"{{ profile.facebook }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"profileinstagram\">Instagram</label>
            <input type=\"text\" name=\"profile[instagram]\" id=\"profileinstagram\" class=\"form-control\" value=\"{{ profile.instagram }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"profilelinkedin\">Linkedin</label>
            <input type=\"text\" name=\"profile[linkedin]\" id=\"profilelinkedin\" class=\"form-control\" value=\"{{ profile.linkedin }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"profileclients\">Clients</label>
            <input type=\"text\" name=\"profile[clients]\" id=\"profileclients\" class=\"form-control\" value=\"{{ profile.clients }}\">
            <div style=\"color: red; padding: 5px 0px\">{{ form_errors(form.clients) }}</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profilestudios\">Studios</label>
            <input type=\"text\" name=\"profile[studios]\" id=\"profilestudios\" class=\"form-control\" value=\"{{ profile.studios }}\">
            <div style=\"color: red; padding: 5px 0px\">{{ form_errors(form.studios) }}</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profiletools\">Tools</label>
            <input type=\"text\" name=\"profile[tools]\" id=\"profiletools\" class=\"form-control\" value=\"{{ profile.tools }}\">
            <div style=\"color: red; padding: 5px 0px\">{{ form_errors(form.tools) }}</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profileemail\">Email</label>
            <input type=\"text\" name=\"profile[mail]\" id=\"profileemail\" class=\"form-control\" value=\"{{ profile.mail }}\">
            <div style=\"color: red; padding: 5px 0px\">{{ form_errors(form.mail) }}</div>
        </div>
        <div class=\"form-group\">
            <label for=\"profilephone\">Phone</label>
            <input type=\"text\" name=\"profile[phone]\" id=\"profilephone\" class=\"form-control\" value=\"{{ profile.phone }}\">
        </div>
        <button type=\"submit\" value=\"submit\" name=\"submit\" class=\"btn btn-primary\">Save</button>
        <div class=\"bottom-divider\"></div>
    {{ form_end(form, {'render_rest': false}) }}
{% endblock %}", "profile/index.html.twig", "/Users/kamenovivan/Documents/Projects/Web/omh/app/Resources/views/profile/index.html.twig");
    }
}
