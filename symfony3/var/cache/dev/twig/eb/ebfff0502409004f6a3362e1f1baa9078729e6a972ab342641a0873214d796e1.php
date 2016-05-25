<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1b2482c91e1318bb91ddc384c95c5fc2fbc51fba63fe9b6c05bdebc136e82839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d4aacee56db111098cf9f1b1d4c6b86238ff97221e93d1a87d1f26256e2edbc = $this->env->getExtension("native_profiler");
        $__internal_7d4aacee56db111098cf9f1b1d4c6b86238ff97221e93d1a87d1f26256e2edbc->enter($__internal_7d4aacee56db111098cf9f1b1d4c6b86238ff97221e93d1a87d1f26256e2edbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4aacee56db111098cf9f1b1d4c6b86238ff97221e93d1a87d1f26256e2edbc->leave($__internal_7d4aacee56db111098cf9f1b1d4c6b86238ff97221e93d1a87d1f26256e2edbc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37250571fdc1836bd11caea1261e23aa66da44425e1b0ebcbfcc2a5530543ab0 = $this->env->getExtension("native_profiler");
        $__internal_37250571fdc1836bd11caea1261e23aa66da44425e1b0ebcbfcc2a5530543ab0->enter($__internal_37250571fdc1836bd11caea1261e23aa66da44425e1b0ebcbfcc2a5530543ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37250571fdc1836bd11caea1261e23aa66da44425e1b0ebcbfcc2a5530543ab0->leave($__internal_37250571fdc1836bd11caea1261e23aa66da44425e1b0ebcbfcc2a5530543ab0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be0b6c9a7d1a79c72da9f6ad219a6ce7e4d0cfbe5a636f712ee16b6a7cbf010e = $this->env->getExtension("native_profiler");
        $__internal_be0b6c9a7d1a79c72da9f6ad219a6ce7e4d0cfbe5a636f712ee16b6a7cbf010e->enter($__internal_be0b6c9a7d1a79c72da9f6ad219a6ce7e4d0cfbe5a636f712ee16b6a7cbf010e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be0b6c9a7d1a79c72da9f6ad219a6ce7e4d0cfbe5a636f712ee16b6a7cbf010e->leave($__internal_be0b6c9a7d1a79c72da9f6ad219a6ce7e4d0cfbe5a636f712ee16b6a7cbf010e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_965737406f724f6943ea6f1a2d7e0c52a427e6e20f46aeaae0a306278375c05f = $this->env->getExtension("native_profiler");
        $__internal_965737406f724f6943ea6f1a2d7e0c52a427e6e20f46aeaae0a306278375c05f->enter($__internal_965737406f724f6943ea6f1a2d7e0c52a427e6e20f46aeaae0a306278375c05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_965737406f724f6943ea6f1a2d7e0c52a427e6e20f46aeaae0a306278375c05f->leave($__internal_965737406f724f6943ea6f1a2d7e0c52a427e6e20f46aeaae0a306278375c05f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
