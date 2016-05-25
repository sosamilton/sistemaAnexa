<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_221e26097b46b5286a51e9ea3d6172135104089221f36b692de33c19c738c716 extends Twig_Template
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
        $__internal_ff450dd9c3ebad845fc58c2ed30af696c60b434bd1e325aae3c4c142062f0fe4 = $this->env->getExtension("native_profiler");
        $__internal_ff450dd9c3ebad845fc58c2ed30af696c60b434bd1e325aae3c4c142062f0fe4->enter($__internal_ff450dd9c3ebad845fc58c2ed30af696c60b434bd1e325aae3c4c142062f0fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ff450dd9c3ebad845fc58c2ed30af696c60b434bd1e325aae3c4c142062f0fe4->leave($__internal_ff450dd9c3ebad845fc58c2ed30af696c60b434bd1e325aae3c4c142062f0fe4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
