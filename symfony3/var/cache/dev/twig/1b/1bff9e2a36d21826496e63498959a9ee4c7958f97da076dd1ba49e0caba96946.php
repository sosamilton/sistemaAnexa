<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1672fc6bd719487c9f1d576d4a37b6deb4bbdeea8e893919263e4454e59358d1 extends Twig_Template
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
        $__internal_7d7de905e006fa2ce366e5ce00233b8b3fbf1476eb7b53974c492ab4fc23aea8 = $this->env->getExtension("native_profiler");
        $__internal_7d7de905e006fa2ce366e5ce00233b8b3fbf1476eb7b53974c492ab4fc23aea8->enter($__internal_7d7de905e006fa2ce366e5ce00233b8b3fbf1476eb7b53974c492ab4fc23aea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7d7de905e006fa2ce366e5ce00233b8b3fbf1476eb7b53974c492ab4fc23aea8->leave($__internal_7d7de905e006fa2ce366e5ce00233b8b3fbf1476eb7b53974c492ab4fc23aea8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
