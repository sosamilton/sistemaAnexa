<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_18c305d7d9a7078ccb7974b966256ee8d1399c73d1cba759fa97afbe065d0538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_96f27af0e8d8b8c168afcac5c63f8b9147d7621e1ae83e0e99c56370ad3503ff = $this->env->getExtension("native_profiler");
        $__internal_96f27af0e8d8b8c168afcac5c63f8b9147d7621e1ae83e0e99c56370ad3503ff->enter($__internal_96f27af0e8d8b8c168afcac5c63f8b9147d7621e1ae83e0e99c56370ad3503ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f27af0e8d8b8c168afcac5c63f8b9147d7621e1ae83e0e99c56370ad3503ff->leave($__internal_96f27af0e8d8b8c168afcac5c63f8b9147d7621e1ae83e0e99c56370ad3503ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c018f66014f2996fd3ea5238df604804573a5021aabaf5a7e41cd4cf2ec2a527 = $this->env->getExtension("native_profiler");
        $__internal_c018f66014f2996fd3ea5238df604804573a5021aabaf5a7e41cd4cf2ec2a527->enter($__internal_c018f66014f2996fd3ea5238df604804573a5021aabaf5a7e41cd4cf2ec2a527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c018f66014f2996fd3ea5238df604804573a5021aabaf5a7e41cd4cf2ec2a527->leave($__internal_c018f66014f2996fd3ea5238df604804573a5021aabaf5a7e41cd4cf2ec2a527_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
