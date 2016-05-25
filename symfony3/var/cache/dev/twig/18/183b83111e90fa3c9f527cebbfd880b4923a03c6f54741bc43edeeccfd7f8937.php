<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_19608d8f38c6a3473f7df4699c0422f23e12b4070d1693fd83b56152df30bc37 extends Twig_Template
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
        $__internal_190325f1f0cff7129ed20eb4f6f6054e8a3c12a2bbd3a2b76609cc18f616b206 = $this->env->getExtension("native_profiler");
        $__internal_190325f1f0cff7129ed20eb4f6f6054e8a3c12a2bbd3a2b76609cc18f616b206->enter($__internal_190325f1f0cff7129ed20eb4f6f6054e8a3c12a2bbd3a2b76609cc18f616b206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_190325f1f0cff7129ed20eb4f6f6054e8a3c12a2bbd3a2b76609cc18f616b206->leave($__internal_190325f1f0cff7129ed20eb4f6f6054e8a3c12a2bbd3a2b76609cc18f616b206_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
