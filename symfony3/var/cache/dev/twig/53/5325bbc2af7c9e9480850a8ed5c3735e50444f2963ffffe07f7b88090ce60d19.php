<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a39e1660f1333817e8ba22fa0f58e8973c66cf0ffad712755ff945d3b06b343e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3eaf9cd22099693277ce260246c8fe388cb690887f5cf79f727df27b1fcc8164 = $this->env->getExtension("native_profiler");
        $__internal_3eaf9cd22099693277ce260246c8fe388cb690887f5cf79f727df27b1fcc8164->enter($__internal_3eaf9cd22099693277ce260246c8fe388cb690887f5cf79f727df27b1fcc8164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eaf9cd22099693277ce260246c8fe388cb690887f5cf79f727df27b1fcc8164->leave($__internal_3eaf9cd22099693277ce260246c8fe388cb690887f5cf79f727df27b1fcc8164_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aae4801e490ee568e7dcc4d1e28455ab80ff18ee22a4739c3bdaf2423d0de48c = $this->env->getExtension("native_profiler");
        $__internal_aae4801e490ee568e7dcc4d1e28455ab80ff18ee22a4739c3bdaf2423d0de48c->enter($__internal_aae4801e490ee568e7dcc4d1e28455ab80ff18ee22a4739c3bdaf2423d0de48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_aae4801e490ee568e7dcc4d1e28455ab80ff18ee22a4739c3bdaf2423d0de48c->leave($__internal_aae4801e490ee568e7dcc4d1e28455ab80ff18ee22a4739c3bdaf2423d0de48c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
