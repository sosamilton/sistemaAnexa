<?php

/* AnexaCooperadoraBundle:backend/responsable:edit.html.twig */
class __TwigTemplate_7912fc275abf4f6b109be5d4556dfd10f689d635c14332485809a9c446e2be32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/responsable:edit.html.twig", 1);
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
        $__internal_b5f8372dce8b694f6366ca932044f714c74c3d8af3bbb617178b2d7028653f66 = $this->env->getExtension("native_profiler");
        $__internal_b5f8372dce8b694f6366ca932044f714c74c3d8af3bbb617178b2d7028653f66->enter($__internal_b5f8372dce8b694f6366ca932044f714c74c3d8af3bbb617178b2d7028653f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/responsable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f8372dce8b694f6366ca932044f714c74c3d8af3bbb617178b2d7028653f66->leave($__internal_b5f8372dce8b694f6366ca932044f714c74c3d8af3bbb617178b2d7028653f66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabc4f96d995e86be7ecd7722f115304c443d072b336d73c859a086fe1ae7644 = $this->env->getExtension("native_profiler");
        $__internal_dabc4f96d995e86be7ecd7722f115304c443d072b336d73c859a086fe1ae7644->enter($__internal_dabc4f96d995e86be7ecd7722f115304c443d072b336d73c859a086fe1ae7644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Responsable edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("responsable_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dabc4f96d995e86be7ecd7722f115304c443d072b336d73c859a086fe1ae7644->leave($__internal_dabc4f96d995e86be7ecd7722f115304c443d072b336d73c859a086fe1ae7644_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/responsable:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Responsable edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('responsable_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
