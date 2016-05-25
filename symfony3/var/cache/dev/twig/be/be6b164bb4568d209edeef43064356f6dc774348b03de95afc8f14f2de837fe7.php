<?php

/* AnexaCooperadoraBundle:backend/responsable:new.html.twig */
class __TwigTemplate_bf78fa3015aa6b4bf110c3316ecd3a2617fd0e022dcd38dd92e9e274750b0e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/responsable:new.html.twig", 1);
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
        $__internal_6f919500440882d2ba3f18a2b89cd95459ec9185dd2ff0ac164b9f773e606a21 = $this->env->getExtension("native_profiler");
        $__internal_6f919500440882d2ba3f18a2b89cd95459ec9185dd2ff0ac164b9f773e606a21->enter($__internal_6f919500440882d2ba3f18a2b89cd95459ec9185dd2ff0ac164b9f773e606a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/responsable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f919500440882d2ba3f18a2b89cd95459ec9185dd2ff0ac164b9f773e606a21->leave($__internal_6f919500440882d2ba3f18a2b89cd95459ec9185dd2ff0ac164b9f773e606a21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92da0b670fcd045832a9905bf45b76b98e153c7e32efccaae11e676bdad2ddbf = $this->env->getExtension("native_profiler");
        $__internal_92da0b670fcd045832a9905bf45b76b98e153c7e32efccaae11e676bdad2ddbf->enter($__internal_92da0b670fcd045832a9905bf45b76b98e153c7e32efccaae11e676bdad2ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Responsable creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("responsable_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_92da0b670fcd045832a9905bf45b76b98e153c7e32efccaae11e676bdad2ddbf->leave($__internal_92da0b670fcd045832a9905bf45b76b98e153c7e32efccaae11e676bdad2ddbf_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/responsable:new.html.twig";
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
/*     <h1>Responsable creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('responsable_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
