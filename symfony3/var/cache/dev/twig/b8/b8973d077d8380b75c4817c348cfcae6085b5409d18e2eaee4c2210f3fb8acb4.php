<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_46c25574fabbebaad259afdc7c2cd926642665c4a7d1def1d52ace9749fe3bbe extends Twig_Template
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
        $__internal_b9128717b66557f46cb45c69ef160e664a9577f7aa144c279a3f691985d21bbe = $this->env->getExtension("native_profiler");
        $__internal_b9128717b66557f46cb45c69ef160e664a9577f7aa144c279a3f691985d21bbe->enter($__internal_b9128717b66557f46cb45c69ef160e664a9577f7aa144c279a3f691985d21bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b9128717b66557f46cb45c69ef160e664a9577f7aa144c279a3f691985d21bbe->leave($__internal_b9128717b66557f46cb45c69ef160e664a9577f7aa144c279a3f691985d21bbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
