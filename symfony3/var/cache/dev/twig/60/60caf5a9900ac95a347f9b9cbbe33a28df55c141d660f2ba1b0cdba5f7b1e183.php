<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_04403638d645f917713ef2248cc328e11364ec13f1f79465926e7cf10192305c extends Twig_Template
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
        $__internal_c638e2f60ca8e073df4b8b4d778cb6f55ab15772cfa4a6d6153fdcf0c8e4817b = $this->env->getExtension("native_profiler");
        $__internal_c638e2f60ca8e073df4b8b4d778cb6f55ab15772cfa4a6d6153fdcf0c8e4817b->enter($__internal_c638e2f60ca8e073df4b8b4d778cb6f55ab15772cfa4a6d6153fdcf0c8e4817b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c638e2f60ca8e073df4b8b4d778cb6f55ab15772cfa4a6d6153fdcf0c8e4817b->leave($__internal_c638e2f60ca8e073df4b8b4d778cb6f55ab15772cfa4a6d6153fdcf0c8e4817b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
