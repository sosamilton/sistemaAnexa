<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ac6c8a56b0a6c2c7441ac4732ae162aad2f13e247843c27b388f61c1750fa83b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_137e9811d9d89a0d137cfafc338a480fe795b38a44da1ec17f1c6b458b639fc4 = $this->env->getExtension("native_profiler");
        $__internal_137e9811d9d89a0d137cfafc338a480fe795b38a44da1ec17f1c6b458b639fc4->enter($__internal_137e9811d9d89a0d137cfafc338a480fe795b38a44da1ec17f1c6b458b639fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137e9811d9d89a0d137cfafc338a480fe795b38a44da1ec17f1c6b458b639fc4->leave($__internal_137e9811d9d89a0d137cfafc338a480fe795b38a44da1ec17f1c6b458b639fc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_228b5773ea490a44bce5014d030d199957913dc4e6dc5fcf546ffb8c0d135642 = $this->env->getExtension("native_profiler");
        $__internal_228b5773ea490a44bce5014d030d199957913dc4e6dc5fcf546ffb8c0d135642->enter($__internal_228b5773ea490a44bce5014d030d199957913dc4e6dc5fcf546ffb8c0d135642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_228b5773ea490a44bce5014d030d199957913dc4e6dc5fcf546ffb8c0d135642->leave($__internal_228b5773ea490a44bce5014d030d199957913dc4e6dc5fcf546ffb8c0d135642_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3739f3640dfeff803ec08b542559ef42aad3782574d4ee80b0b8584cef5bb451 = $this->env->getExtension("native_profiler");
        $__internal_3739f3640dfeff803ec08b542559ef42aad3782574d4ee80b0b8584cef5bb451->enter($__internal_3739f3640dfeff803ec08b542559ef42aad3782574d4ee80b0b8584cef5bb451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3739f3640dfeff803ec08b542559ef42aad3782574d4ee80b0b8584cef5bb451->leave($__internal_3739f3640dfeff803ec08b542559ef42aad3782574d4ee80b0b8584cef5bb451_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
