<?php

/* AnexaCooperadoraBundle:Profile:show.html.twig */
class __TwigTemplate_9564bf72f6481673d8f8c10fa68fbdcfaab4acbb401fe68853171b2dba985aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("certificadoBundle:Admin:index.html.twig", "AnexaCooperadoraBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "certificadoBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6aaaa14b034fdd876ce34dd9153bbc3e5a82e9f677ec8e8658318eaecb6b91d = $this->env->getExtension("native_profiler");
        $__internal_e6aaaa14b034fdd876ce34dd9153bbc3e5a82e9f677ec8e8658318eaecb6b91d->enter($__internal_e6aaaa14b034fdd876ce34dd9153bbc3e5a82e9f677ec8e8658318eaecb6b91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6aaaa14b034fdd876ce34dd9153bbc3e5a82e9f677ec8e8658318eaecb6b91d->leave($__internal_e6aaaa14b034fdd876ce34dd9153bbc3e5a82e9f677ec8e8658318eaecb6b91d_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_b6eb1c27309c67c669d7e396c1f338d1c02cae4d53e09a55f2fb6a6efa357b8b = $this->env->getExtension("native_profiler");
        $__internal_b6eb1c27309c67c669d7e396c1f338d1c02cae4d53e09a55f2fb6a6efa357b8b->enter($__internal_b6eb1c27309c67c669d7e396c1f338d1c02cae4d53e09a55f2fb6a6efa357b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        $this->loadTemplate("certificadoBundle:Profile:show_content.html.twig", "AnexaCooperadoraBundle:Profile:show.html.twig", 3)->display($context);
        
        $__internal_b6eb1c27309c67c669d7e396c1f338d1c02cae4d53e09a55f2fb6a6efa357b8b->leave($__internal_b6eb1c27309c67c669d7e396c1f338d1c02cae4d53e09a55f2fb6a6efa357b8b_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'certificadoBundle:Admin:index.html.twig' %}*/
/* {% block main %}*/
/* {% include "certificadoBundle:Profile:show_content.html.twig" %}*/
/* {% endblock main %}*/
/* */
/* */
