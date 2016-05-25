<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5214529837d75b2e1901d1841a77a90460f6db2256f9f320b3f7b24ac57dc5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_dda93f6c72cd3d374cb0181d0d53a8187b4b8edf34aae1982c3ef81387540923 = $this->env->getExtension("native_profiler");
        $__internal_dda93f6c72cd3d374cb0181d0d53a8187b4b8edf34aae1982c3ef81387540923->enter($__internal_dda93f6c72cd3d374cb0181d0d53a8187b4b8edf34aae1982c3ef81387540923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda93f6c72cd3d374cb0181d0d53a8187b4b8edf34aae1982c3ef81387540923->leave($__internal_dda93f6c72cd3d374cb0181d0d53a8187b4b8edf34aae1982c3ef81387540923_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f3746afe2c0a3b0ea8c62407319af29919c904d67ed9985086da1a9583846e0 = $this->env->getExtension("native_profiler");
        $__internal_9f3746afe2c0a3b0ea8c62407319af29919c904d67ed9985086da1a9583846e0->enter($__internal_9f3746afe2c0a3b0ea8c62407319af29919c904d67ed9985086da1a9583846e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9f3746afe2c0a3b0ea8c62407319af29919c904d67ed9985086da1a9583846e0->leave($__internal_9f3746afe2c0a3b0ea8c62407319af29919c904d67ed9985086da1a9583846e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
