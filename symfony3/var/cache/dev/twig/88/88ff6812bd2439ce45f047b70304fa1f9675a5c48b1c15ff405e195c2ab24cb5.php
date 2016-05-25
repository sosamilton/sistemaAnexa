<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_39d8cd2d1b2d8eed462cbe2c1ed179f628752141616eed006b2873bf96c51b3e extends Twig_Template
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
        $__internal_b38da6ac96b91d3ca110acc939f3fa5c0fd65d2731a239830b34a2ffe4d83b78 = $this->env->getExtension("native_profiler");
        $__internal_b38da6ac96b91d3ca110acc939f3fa5c0fd65d2731a239830b34a2ffe4d83b78->enter($__internal_b38da6ac96b91d3ca110acc939f3fa5c0fd65d2731a239830b34a2ffe4d83b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b38da6ac96b91d3ca110acc939f3fa5c0fd65d2731a239830b34a2ffe4d83b78->leave($__internal_b38da6ac96b91d3ca110acc939f3fa5c0fd65d2731a239830b34a2ffe4d83b78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
