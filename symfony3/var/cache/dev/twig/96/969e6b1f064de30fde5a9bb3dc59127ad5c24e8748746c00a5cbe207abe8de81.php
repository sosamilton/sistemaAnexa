<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_54eb5f0cbc48b0beed288126070b4ee3e0501f46b804eb25694f9bd1d782d0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_418cfcada657e8e395e9ffb0ee2c5f074ebdf478016caef17b72fb7a66ba6179 = $this->env->getExtension("native_profiler");
        $__internal_418cfcada657e8e395e9ffb0ee2c5f074ebdf478016caef17b72fb7a66ba6179->enter($__internal_418cfcada657e8e395e9ffb0ee2c5f074ebdf478016caef17b72fb7a66ba6179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_418cfcada657e8e395e9ffb0ee2c5f074ebdf478016caef17b72fb7a66ba6179->leave($__internal_418cfcada657e8e395e9ffb0ee2c5f074ebdf478016caef17b72fb7a66ba6179_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d9845af167efc0b5bb24aa3a739548190aed904ed354274b9c5d1807813d836 = $this->env->getExtension("native_profiler");
        $__internal_0d9845af167efc0b5bb24aa3a739548190aed904ed354274b9c5d1807813d836->enter($__internal_0d9845af167efc0b5bb24aa3a739548190aed904ed354274b9c5d1807813d836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0d9845af167efc0b5bb24aa3a739548190aed904ed354274b9c5d1807813d836->leave($__internal_0d9845af167efc0b5bb24aa3a739548190aed904ed354274b9c5d1807813d836_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
