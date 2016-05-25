<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_69824b31c0e19092ee9ab2031f3426c8421625deee5911b7c6573c1830de2b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_fae8a2a7d5695e83b1203174657fd640dfe8d2fda3684cfec695eb289bc81e8d = $this->env->getExtension("native_profiler");
        $__internal_fae8a2a7d5695e83b1203174657fd640dfe8d2fda3684cfec695eb289bc81e8d->enter($__internal_fae8a2a7d5695e83b1203174657fd640dfe8d2fda3684cfec695eb289bc81e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae8a2a7d5695e83b1203174657fd640dfe8d2fda3684cfec695eb289bc81e8d->leave($__internal_fae8a2a7d5695e83b1203174657fd640dfe8d2fda3684cfec695eb289bc81e8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e440126685d505db9f7e1178be8944fd17e73388b1b83a7448a06580e0188595 = $this->env->getExtension("native_profiler");
        $__internal_e440126685d505db9f7e1178be8944fd17e73388b1b83a7448a06580e0188595->enter($__internal_e440126685d505db9f7e1178be8944fd17e73388b1b83a7448a06580e0188595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e440126685d505db9f7e1178be8944fd17e73388b1b83a7448a06580e0188595->leave($__internal_e440126685d505db9f7e1178be8944fd17e73388b1b83a7448a06580e0188595_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
