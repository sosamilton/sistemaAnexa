<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fab0aa5b1b07f083df289ead5e5b99f314598d8d967e4f3854d1ce871c8cea20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_accacad8252bd1cd8febfc61d6f0726d160bd125232b9b6cc58678b0443a54f8 = $this->env->getExtension("native_profiler");
        $__internal_accacad8252bd1cd8febfc61d6f0726d160bd125232b9b6cc58678b0443a54f8->enter($__internal_accacad8252bd1cd8febfc61d6f0726d160bd125232b9b6cc58678b0443a54f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_accacad8252bd1cd8febfc61d6f0726d160bd125232b9b6cc58678b0443a54f8->leave($__internal_accacad8252bd1cd8febfc61d6f0726d160bd125232b9b6cc58678b0443a54f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
