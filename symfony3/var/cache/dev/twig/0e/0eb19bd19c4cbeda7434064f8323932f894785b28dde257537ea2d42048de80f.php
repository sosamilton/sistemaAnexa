<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0426d8606f96fc8f979804fba478ee2ef3ffa81c872b0a0f4c12ecfa62bfeedb extends Twig_Template
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
        $__internal_3e8f63c9a0d25986750429bc5fffeaf39276dc7d5c880b0f4c02d51374895738 = $this->env->getExtension("native_profiler");
        $__internal_3e8f63c9a0d25986750429bc5fffeaf39276dc7d5c880b0f4c02d51374895738->enter($__internal_3e8f63c9a0d25986750429bc5fffeaf39276dc7d5c880b0f4c02d51374895738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3e8f63c9a0d25986750429bc5fffeaf39276dc7d5c880b0f4c02d51374895738->leave($__internal_3e8f63c9a0d25986750429bc5fffeaf39276dc7d5c880b0f4c02d51374895738_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
