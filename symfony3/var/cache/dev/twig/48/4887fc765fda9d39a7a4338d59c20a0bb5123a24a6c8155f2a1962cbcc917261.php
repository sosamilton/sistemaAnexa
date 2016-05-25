<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_29fcdfb3cae86da5855d8c11ff480130c9a8592a35674121f037f0f4754bad51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_7fc0381faf245c79c00f8808d983cccaaabac56825bb124edde9326001a8b6e0 = $this->env->getExtension("native_profiler");
        $__internal_7fc0381faf245c79c00f8808d983cccaaabac56825bb124edde9326001a8b6e0->enter($__internal_7fc0381faf245c79c00f8808d983cccaaabac56825bb124edde9326001a8b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc0381faf245c79c00f8808d983cccaaabac56825bb124edde9326001a8b6e0->leave($__internal_7fc0381faf245c79c00f8808d983cccaaabac56825bb124edde9326001a8b6e0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee40706521a393655a88075f19dcb29d5817a0a4208e9494e5df28ba780a6910 = $this->env->getExtension("native_profiler");
        $__internal_ee40706521a393655a88075f19dcb29d5817a0a4208e9494e5df28ba780a6910->enter($__internal_ee40706521a393655a88075f19dcb29d5817a0a4208e9494e5df28ba780a6910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ee40706521a393655a88075f19dcb29d5817a0a4208e9494e5df28ba780a6910->leave($__internal_ee40706521a393655a88075f19dcb29d5817a0a4208e9494e5df28ba780a6910_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
