<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3691c439070362c2ae6e14af5e1ad4090d55f11b0eaf0f7af76954b6da2c15d6 extends Twig_Template
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
        $__internal_c12872110ca82293cd2f3183f90382e485a6d9eb3edebfb0d235e208914b555f = $this->env->getExtension("native_profiler");
        $__internal_c12872110ca82293cd2f3183f90382e485a6d9eb3edebfb0d235e208914b555f->enter($__internal_c12872110ca82293cd2f3183f90382e485a6d9eb3edebfb0d235e208914b555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c12872110ca82293cd2f3183f90382e485a6d9eb3edebfb0d235e208914b555f->leave($__internal_c12872110ca82293cd2f3183f90382e485a6d9eb3edebfb0d235e208914b555f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
