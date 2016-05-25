<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_10fdf135a5502ef545b860bff9143bfac6484fa16b6ef3137f1dddee1a93ffc0 extends Twig_Template
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
        $__internal_f7ba64dc34d27ecec0f9ae70167ac3dc63eb992bec038755b444b75bdb843025 = $this->env->getExtension("native_profiler");
        $__internal_f7ba64dc34d27ecec0f9ae70167ac3dc63eb992bec038755b444b75bdb843025->enter($__internal_f7ba64dc34d27ecec0f9ae70167ac3dc63eb992bec038755b444b75bdb843025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f7ba64dc34d27ecec0f9ae70167ac3dc63eb992bec038755b444b75bdb843025->leave($__internal_f7ba64dc34d27ecec0f9ae70167ac3dc63eb992bec038755b444b75bdb843025_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
