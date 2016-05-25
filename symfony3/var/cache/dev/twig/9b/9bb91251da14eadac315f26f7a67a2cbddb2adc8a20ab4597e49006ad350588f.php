<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7a158b04f1f6828a332de448b488531823b98861cf63e47eaeb0e284b7d03d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c4687700e7bc8b8bc237ea7c20b61cbd88f57c7eb586e785353f499dae05af69 = $this->env->getExtension("native_profiler");
        $__internal_c4687700e7bc8b8bc237ea7c20b61cbd88f57c7eb586e785353f499dae05af69->enter($__internal_c4687700e7bc8b8bc237ea7c20b61cbd88f57c7eb586e785353f499dae05af69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4687700e7bc8b8bc237ea7c20b61cbd88f57c7eb586e785353f499dae05af69->leave($__internal_c4687700e7bc8b8bc237ea7c20b61cbd88f57c7eb586e785353f499dae05af69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5eb9848d5270bb4dc3628d34e887883a7d4d123df7e9e4eb7b826b97e08d793d = $this->env->getExtension("native_profiler");
        $__internal_5eb9848d5270bb4dc3628d34e887883a7d4d123df7e9e4eb7b826b97e08d793d->enter($__internal_5eb9848d5270bb4dc3628d34e887883a7d4d123df7e9e4eb7b826b97e08d793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_5eb9848d5270bb4dc3628d34e887883a7d4d123df7e9e4eb7b826b97e08d793d->leave($__internal_5eb9848d5270bb4dc3628d34e887883a7d4d123df7e9e4eb7b826b97e08d793d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
