<?php

/* AnexaCooperadoraBundle::error.html.twig */
class __TwigTemplate_8de4ab355d2cf820b41b4faa435214f1850a5e9b85cad24cf5d7bfb08229e550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle::error.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8294cd96d8f96b07349f656a2c622df9d5be4f567959429a9486a2fb22730346 = $this->env->getExtension("native_profiler");
        $__internal_8294cd96d8f96b07349f656a2c622df9d5be4f567959429a9486a2fb22730346->enter($__internal_8294cd96d8f96b07349f656a2c622df9d5be4f567959429a9486a2fb22730346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle::error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8294cd96d8f96b07349f656a2c622df9d5be4f567959429a9486a2fb22730346->leave($__internal_8294cd96d8f96b07349f656a2c622df9d5be4f567959429a9486a2fb22730346_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_e80cca90521ad6548eda9741e400d3484eeea6c9a5debc14e17996c99965f9b1 = $this->env->getExtension("native_profiler");
        $__internal_e80cca90521ad6548eda9741e400d3484eeea6c9a5debc14e17996c99965f9b1->enter($__internal_e80cca90521ad6548eda9741e400d3484eeea6c9a5debc14e17996c99965f9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "<div id=\"login-error\" class=\"alert alert-danger\">
\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
</div>
";
        
        $__internal_e80cca90521ad6548eda9741e400d3484eeea6c9a5debc14e17996c99965f9b1->leave($__internal_e80cca90521ad6548eda9741e400d3484eeea6c9a5debc14e17996c99965f9b1_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle::error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle::base.html.twig' %}*/
/* */
/* {% block page %}*/
/* <div id="login-error" class="alert alert-danger">*/
/* 	{{error}}*/
/* </div>*/
/* {% endblock %}*/
/* */
