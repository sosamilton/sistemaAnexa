<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_93b2d9a18a3585d8cf3bae7a862ffd80c17129ef6b63d549b3dc68c57723cc8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc9a898a5d5fc87bb24c63c5c00cc07a5d797ac03f210208c22e499041757e76 = $this->env->getExtension("native_profiler");
        $__internal_bc9a898a5d5fc87bb24c63c5c00cc07a5d797ac03f210208c22e499041757e76->enter($__internal_bc9a898a5d5fc87bb24c63c5c00cc07a5d797ac03f210208c22e499041757e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc9a898a5d5fc87bb24c63c5c00cc07a5d797ac03f210208c22e499041757e76->leave($__internal_bc9a898a5d5fc87bb24c63c5c00cc07a5d797ac03f210208c22e499041757e76_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a89d385491c889245e54503997e5e2791ecba86433d3b029aa85dd076a90149 = $this->env->getExtension("native_profiler");
        $__internal_2a89d385491c889245e54503997e5e2791ecba86433d3b029aa85dd076a90149->enter($__internal_2a89d385491c889245e54503997e5e2791ecba86433d3b029aa85dd076a90149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2a89d385491c889245e54503997e5e2791ecba86433d3b029aa85dd076a90149->leave($__internal_2a89d385491c889245e54503997e5e2791ecba86433d3b029aa85dd076a90149_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
