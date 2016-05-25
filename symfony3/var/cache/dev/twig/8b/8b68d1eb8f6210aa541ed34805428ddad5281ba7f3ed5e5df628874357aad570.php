<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_28314ce345b3cf5a714c913c7a3ffbb3486641dc015f9978d85c8ead0813b3af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16b7a0fc1b5c9961bbb96b69fdefa5245a9743f9940ce4e8e07808d54f1c417e = $this->env->getExtension("native_profiler");
        $__internal_16b7a0fc1b5c9961bbb96b69fdefa5245a9743f9940ce4e8e07808d54f1c417e->enter($__internal_16b7a0fc1b5c9961bbb96b69fdefa5245a9743f9940ce4e8e07808d54f1c417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_16b7a0fc1b5c9961bbb96b69fdefa5245a9743f9940ce4e8e07808d54f1c417e->leave($__internal_16b7a0fc1b5c9961bbb96b69fdefa5245a9743f9940ce4e8e07808d54f1c417e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3738019d34f73b9cdf1c52c68dc5ab2f6ccbcdd6a681e0872fb894e42d30ab38 = $this->env->getExtension("native_profiler");
        $__internal_3738019d34f73b9cdf1c52c68dc5ab2f6ccbcdd6a681e0872fb894e42d30ab38->enter($__internal_3738019d34f73b9cdf1c52c68dc5ab2f6ccbcdd6a681e0872fb894e42d30ab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3738019d34f73b9cdf1c52c68dc5ab2f6ccbcdd6a681e0872fb894e42d30ab38->leave($__internal_3738019d34f73b9cdf1c52c68dc5ab2f6ccbcdd6a681e0872fb894e42d30ab38_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
