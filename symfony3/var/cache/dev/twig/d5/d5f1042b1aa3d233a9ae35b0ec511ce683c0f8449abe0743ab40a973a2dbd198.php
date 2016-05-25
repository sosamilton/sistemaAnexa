<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bdf3b96b8b9de095c4f7de9db5aa119e7508ba658f798a330b6d68f81483ec79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8063a9f78552dd93077a66ed76c7fca0e3c3ffa69fefc729d662559141c790e = $this->env->getExtension("native_profiler");
        $__internal_a8063a9f78552dd93077a66ed76c7fca0e3c3ffa69fefc729d662559141c790e->enter($__internal_a8063a9f78552dd93077a66ed76c7fca0e3c3ffa69fefc729d662559141c790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8063a9f78552dd93077a66ed76c7fca0e3c3ffa69fefc729d662559141c790e->leave($__internal_a8063a9f78552dd93077a66ed76c7fca0e3c3ffa69fefc729d662559141c790e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ed88ea3c44349498549642f9a47b97e6f18211b913a70f23d64d844c5b6a24f = $this->env->getExtension("native_profiler");
        $__internal_0ed88ea3c44349498549642f9a47b97e6f18211b913a70f23d64d844c5b6a24f->enter($__internal_0ed88ea3c44349498549642f9a47b97e6f18211b913a70f23d64d844c5b6a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ed88ea3c44349498549642f9a47b97e6f18211b913a70f23d64d844c5b6a24f->leave($__internal_0ed88ea3c44349498549642f9a47b97e6f18211b913a70f23d64d844c5b6a24f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b744bb6cd962519608619a465015d2418bd049e25fc237e90f0b9fe78b77ab6 = $this->env->getExtension("native_profiler");
        $__internal_4b744bb6cd962519608619a465015d2418bd049e25fc237e90f0b9fe78b77ab6->enter($__internal_4b744bb6cd962519608619a465015d2418bd049e25fc237e90f0b9fe78b77ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b744bb6cd962519608619a465015d2418bd049e25fc237e90f0b9fe78b77ab6->leave($__internal_4b744bb6cd962519608619a465015d2418bd049e25fc237e90f0b9fe78b77ab6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d7a29b9fd07f20ec5752ad9eaa65da6e7efc979a856ec03011d39bb6361f904 = $this->env->getExtension("native_profiler");
        $__internal_7d7a29b9fd07f20ec5752ad9eaa65da6e7efc979a856ec03011d39bb6361f904->enter($__internal_7d7a29b9fd07f20ec5752ad9eaa65da6e7efc979a856ec03011d39bb6361f904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7d7a29b9fd07f20ec5752ad9eaa65da6e7efc979a856ec03011d39bb6361f904->leave($__internal_7d7a29b9fd07f20ec5752ad9eaa65da6e7efc979a856ec03011d39bb6361f904_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
