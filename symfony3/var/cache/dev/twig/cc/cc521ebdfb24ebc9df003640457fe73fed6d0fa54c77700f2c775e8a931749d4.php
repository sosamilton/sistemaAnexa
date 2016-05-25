<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_90a9ed07080356028b19757d971760be20caa0082fddba60d4e6058edf421f12 extends Twig_Template
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
        $__internal_9832186b7f0b64c324fa355bbb147f5d486ade19363d8717e908cb4b48f73ab4 = $this->env->getExtension("native_profiler");
        $__internal_9832186b7f0b64c324fa355bbb147f5d486ade19363d8717e908cb4b48f73ab4->enter($__internal_9832186b7f0b64c324fa355bbb147f5d486ade19363d8717e908cb4b48f73ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9832186b7f0b64c324fa355bbb147f5d486ade19363d8717e908cb4b48f73ab4->leave($__internal_9832186b7f0b64c324fa355bbb147f5d486ade19363d8717e908cb4b48f73ab4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
