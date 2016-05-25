<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_2a6ca9eb07f9fc3529279c1519896ac164004e48db06907faa5b70dc645da227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0295b1c6ac7c57b2e232c1b44fbb9dabcf536946b6bbec4455830711f5ce2d5a = $this->env->getExtension("native_profiler");
        $__internal_0295b1c6ac7c57b2e232c1b44fbb9dabcf536946b6bbec4455830711f5ce2d5a->enter($__internal_0295b1c6ac7c57b2e232c1b44fbb9dabcf536946b6bbec4455830711f5ce2d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0295b1c6ac7c57b2e232c1b44fbb9dabcf536946b6bbec4455830711f5ce2d5a->leave($__internal_0295b1c6ac7c57b2e232c1b44fbb9dabcf536946b6bbec4455830711f5ce2d5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6ccb32535fb078334fddf62f624ff267d124902da51bde9d4b5059c08661daf = $this->env->getExtension("native_profiler");
        $__internal_c6ccb32535fb078334fddf62f624ff267d124902da51bde9d4b5059c08661daf->enter($__internal_c6ccb32535fb078334fddf62f624ff267d124902da51bde9d4b5059c08661daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c6ccb32535fb078334fddf62f624ff267d124902da51bde9d4b5059c08661daf->leave($__internal_c6ccb32535fb078334fddf62f624ff267d124902da51bde9d4b5059c08661daf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
