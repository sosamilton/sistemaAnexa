<?php

/* AnexaCooperadoraBundle:frontend:error.html.twig */
class __TwigTemplate_5964e273591f5f27d2e255f13c784b0b9a2a53af47d2d7767a0e4f0ac402f7de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle:frontend:error.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e40371569eab4a3a91fc0ccb66a130bdab5fcbc12f5ba4d900a4e294b4df1773 = $this->env->getExtension("native_profiler");
        $__internal_e40371569eab4a3a91fc0ccb66a130bdab5fcbc12f5ba4d900a4e294b4df1773->enter($__internal_e40371569eab4a3a91fc0ccb66a130bdab5fcbc12f5ba4d900a4e294b4df1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:frontend:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40371569eab4a3a91fc0ccb66a130bdab5fcbc12f5ba4d900a4e294b4df1773->leave($__internal_e40371569eab4a3a91fc0ccb66a130bdab5fcbc12f5ba4d900a4e294b4df1773_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_a23799a97cdb5583f58a7bc3b5c4814ad09395a7134564d77a729ee5768d1b43 = $this->env->getExtension("native_profiler");
        $__internal_a23799a97cdb5583f58a7bc3b5c4814ad09395a7134564d77a729ee5768d1b43->enter($__internal_a23799a97cdb5583f58a7bc3b5c4814ad09395a7134564d77a729ee5768d1b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        
        $__internal_a23799a97cdb5583f58a7bc3b5c4814ad09395a7134564d77a729ee5768d1b43->leave($__internal_a23799a97cdb5583f58a7bc3b5c4814ad09395a7134564d77a729ee5768d1b43_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:frontend:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle::base.html.twig' %}*/
/* */
/* {% block page %}*/
/* {% endblock %}*/
/* */
