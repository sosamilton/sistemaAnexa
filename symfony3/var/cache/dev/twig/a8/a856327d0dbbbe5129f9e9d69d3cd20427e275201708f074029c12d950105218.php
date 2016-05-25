<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f5b0ccea54274c32a106de9b6c859c9b1185bfc420a242ace4f0a3c5b33f7678 extends Twig_Template
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
        $__internal_50432e41fc9e78256bcebfd1f06fee39f57b724de56026229006ff2886d2d38f = $this->env->getExtension("native_profiler");
        $__internal_50432e41fc9e78256bcebfd1f06fee39f57b724de56026229006ff2886d2d38f->enter($__internal_50432e41fc9e78256bcebfd1f06fee39f57b724de56026229006ff2886d2d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_50432e41fc9e78256bcebfd1f06fee39f57b724de56026229006ff2886d2d38f->leave($__internal_50432e41fc9e78256bcebfd1f06fee39f57b724de56026229006ff2886d2d38f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
