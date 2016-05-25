<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_89a15b72bd2e1f90ec03f27f61b9d69306f57566333dd1419168d8891d89b079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_edaec29e8beb477ffe12fdd2c380421619e7e6f944e09d271421c312fe0d1f02 = $this->env->getExtension("native_profiler");
        $__internal_edaec29e8beb477ffe12fdd2c380421619e7e6f944e09d271421c312fe0d1f02->enter($__internal_edaec29e8beb477ffe12fdd2c380421619e7e6f944e09d271421c312fe0d1f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edaec29e8beb477ffe12fdd2c380421619e7e6f944e09d271421c312fe0d1f02->leave($__internal_edaec29e8beb477ffe12fdd2c380421619e7e6f944e09d271421c312fe0d1f02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3185425cde5959f1584974ec1d54368e81203e64ab0ce93ba8d0dd7801d756fa = $this->env->getExtension("native_profiler");
        $__internal_3185425cde5959f1584974ec1d54368e81203e64ab0ce93ba8d0dd7801d756fa->enter($__internal_3185425cde5959f1584974ec1d54368e81203e64ab0ce93ba8d0dd7801d756fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3185425cde5959f1584974ec1d54368e81203e64ab0ce93ba8d0dd7801d756fa->leave($__internal_3185425cde5959f1584974ec1d54368e81203e64ab0ce93ba8d0dd7801d756fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
