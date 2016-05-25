<?php

/* AnexaCooperadoraBundle:backend/configuracion:new.html.twig */
class __TwigTemplate_e9cc5b4edf0302995df42f9d556fc3476ce12bab95faf527be830662fb232f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/configuracion:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_865f8f21819ef1b07b01285c23450e428fd25c354cb74486bea4b4c29508bca7 = $this->env->getExtension("native_profiler");
        $__internal_865f8f21819ef1b07b01285c23450e428fd25c354cb74486bea4b4c29508bca7->enter($__internal_865f8f21819ef1b07b01285c23450e428fd25c354cb74486bea4b4c29508bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/configuracion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865f8f21819ef1b07b01285c23450e428fd25c354cb74486bea4b4c29508bca7->leave($__internal_865f8f21819ef1b07b01285c23450e428fd25c354cb74486bea4b4c29508bca7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8553414f4a71ee8fb0ad1674a71ba9ecc5e5c8bac5111f3e1d3ad2fa79d171f = $this->env->getExtension("native_profiler");
        $__internal_f8553414f4a71ee8fb0ad1674a71ba9ecc5e5c8bac5111f3e1d3ad2fa79d171f->enter($__internal_f8553414f4a71ee8fb0ad1674a71ba9ecc5e5c8bac5111f3e1d3ad2fa79d171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Configuracion creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("configuracion_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f8553414f4a71ee8fb0ad1674a71ba9ecc5e5c8bac5111f3e1d3ad2fa79d171f->leave($__internal_f8553414f4a71ee8fb0ad1674a71ba9ecc5e5c8bac5111f3e1d3ad2fa79d171f_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/configuracion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Configuracion creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('configuracion_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
