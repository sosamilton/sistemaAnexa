<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5ed33d12e9a9422f145650d38b45702c9b4fd8d8fad779a7b518d0e345b499e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0c1328f72097a88ffd2c012e130143e5ef7e893681ab36a883df4556c3d9560a = $this->env->getExtension("native_profiler");
        $__internal_0c1328f72097a88ffd2c012e130143e5ef7e893681ab36a883df4556c3d9560a->enter($__internal_0c1328f72097a88ffd2c012e130143e5ef7e893681ab36a883df4556c3d9560a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1328f72097a88ffd2c012e130143e5ef7e893681ab36a883df4556c3d9560a->leave($__internal_0c1328f72097a88ffd2c012e130143e5ef7e893681ab36a883df4556c3d9560a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b50bc0b47c3ee8ee109b7bd8e8d2aec61886d84958d39b255ca63366a41c79c = $this->env->getExtension("native_profiler");
        $__internal_2b50bc0b47c3ee8ee109b7bd8e8d2aec61886d84958d39b255ca63366a41c79c->enter($__internal_2b50bc0b47c3ee8ee109b7bd8e8d2aec61886d84958d39b255ca63366a41c79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2b50bc0b47c3ee8ee109b7bd8e8d2aec61886d84958d39b255ca63366a41c79c->leave($__internal_2b50bc0b47c3ee8ee109b7bd8e8d2aec61886d84958d39b255ca63366a41c79c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
