<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_629278d5fa3ff4bcedc2689cccdba11bec902eed06cd01bfc4805b6f0b1f45a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_47ec30f1762f26e77a08bc13811520922bb98607bb43ad9cf3014459ecd21733 = $this->env->getExtension("native_profiler");
        $__internal_47ec30f1762f26e77a08bc13811520922bb98607bb43ad9cf3014459ecd21733->enter($__internal_47ec30f1762f26e77a08bc13811520922bb98607bb43ad9cf3014459ecd21733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47ec30f1762f26e77a08bc13811520922bb98607bb43ad9cf3014459ecd21733->leave($__internal_47ec30f1762f26e77a08bc13811520922bb98607bb43ad9cf3014459ecd21733_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94c7e643cdbc19f62d26239da427a3a2f6ac2a911ccf61f9424b60fec43c8386 = $this->env->getExtension("native_profiler");
        $__internal_94c7e643cdbc19f62d26239da427a3a2f6ac2a911ccf61f9424b60fec43c8386->enter($__internal_94c7e643cdbc19f62d26239da427a3a2f6ac2a911ccf61f9424b60fec43c8386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_94c7e643cdbc19f62d26239da427a3a2f6ac2a911ccf61f9424b60fec43c8386->leave($__internal_94c7e643cdbc19f62d26239da427a3a2f6ac2a911ccf61f9424b60fec43c8386_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
