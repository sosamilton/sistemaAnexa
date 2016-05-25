<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d105455120f312a41a22c9cf643b4ffabacd71076199d0e83952656896885c03 extends Twig_Template
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
        $__internal_ed168e9e73eb7914219c41e4f85001967cde28f64e8c5daa8773d0de401af771 = $this->env->getExtension("native_profiler");
        $__internal_ed168e9e73eb7914219c41e4f85001967cde28f64e8c5daa8773d0de401af771->enter($__internal_ed168e9e73eb7914219c41e4f85001967cde28f64e8c5daa8773d0de401af771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed168e9e73eb7914219c41e4f85001967cde28f64e8c5daa8773d0de401af771->leave($__internal_ed168e9e73eb7914219c41e4f85001967cde28f64e8c5daa8773d0de401af771_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
