<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:matriculadosPDF.html.twig */
class __TwigTemplate_96128458e0cf3fdde29776a0b8cda91461688d2d27167efbd37318d93d55729a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePdf.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:matriculadosPDF.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basePdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1a7232d716bb39dd570bbc7451717644ea36e1760f56e61ba1bba5d84c25288 = $this->env->getExtension("native_profiler");
        $__internal_e1a7232d716bb39dd570bbc7451717644ea36e1760f56e61ba1bba5d84c25288->enter($__internal_e1a7232d716bb39dd570bbc7451717644ea36e1760f56e61ba1bba5d84c25288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:matriculadosPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a7232d716bb39dd570bbc7451717644ea36e1760f56e61ba1bba5d84c25288->leave($__internal_e1a7232d716bb39dd570bbc7451717644ea36e1760f56e61ba1bba5d84c25288_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc466f1cf75ec3e89b782c8358d07a1685a0130481098549fd246a2fb203d096 = $this->env->getExtension("native_profiler");
        $__internal_bc466f1cf75ec3e89b782c8358d07a1685a0130481098549fd246a2fb203d096->enter($__internal_bc466f1cf75ec3e89b782c8358d07a1685a0130481098549fd246a2fb203d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Matrículas Pagas";
        
        $__internal_bc466f1cf75ec3e89b782c8358d07a1685a0130481098549fd246a2fb203d096->leave($__internal_bc466f1cf75ec3e89b782c8358d07a1685a0130481098549fd246a2fb203d096_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:matriculadosPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends 'basePdf.html.twig' %}*/
/* {% block title %}Matrículas Pagas{% endblock %}*/
/* */
