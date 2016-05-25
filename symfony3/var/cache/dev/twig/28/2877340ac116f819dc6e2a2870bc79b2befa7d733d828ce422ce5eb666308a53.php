<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4ab8b93ec57048dc836995befc4d61383ce0fd9bad874f6c52e3b8b33eb39be8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_918e718bac526b861d2caf8581aa72d14f5afd27be1cb157bd2563a3d317c93d = $this->env->getExtension("native_profiler");
        $__internal_918e718bac526b861d2caf8581aa72d14f5afd27be1cb157bd2563a3d317c93d->enter($__internal_918e718bac526b861d2caf8581aa72d14f5afd27be1cb157bd2563a3d317c93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_918e718bac526b861d2caf8581aa72d14f5afd27be1cb157bd2563a3d317c93d->leave($__internal_918e718bac526b861d2caf8581aa72d14f5afd27be1cb157bd2563a3d317c93d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_142a24320d0d5177d122dd44da27eb517b472ca6172ec44db7598594aa1a8a40 = $this->env->getExtension("native_profiler");
        $__internal_142a24320d0d5177d122dd44da27eb517b472ca6172ec44db7598594aa1a8a40->enter($__internal_142a24320d0d5177d122dd44da27eb517b472ca6172ec44db7598594aa1a8a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_142a24320d0d5177d122dd44da27eb517b472ca6172ec44db7598594aa1a8a40->leave($__internal_142a24320d0d5177d122dd44da27eb517b472ca6172ec44db7598594aa1a8a40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
