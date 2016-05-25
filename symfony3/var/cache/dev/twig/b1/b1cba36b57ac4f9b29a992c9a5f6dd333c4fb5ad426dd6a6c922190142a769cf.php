<?php

/* AnexaCooperadoraBundle:backend/configuracion:edit.html.twig */
class __TwigTemplate_1ffe6efa0c2527453df365ab694a19668abb07d0299ab26b1ad542c4f5671bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/configuracion:edit.html.twig", 1);
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
        $__internal_3ba212455c92392d2175db3ca8f1a59ddbed5dcef671c8b14e134ffb4d4c110b = $this->env->getExtension("native_profiler");
        $__internal_3ba212455c92392d2175db3ca8f1a59ddbed5dcef671c8b14e134ffb4d4c110b->enter($__internal_3ba212455c92392d2175db3ca8f1a59ddbed5dcef671c8b14e134ffb4d4c110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/configuracion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba212455c92392d2175db3ca8f1a59ddbed5dcef671c8b14e134ffb4d4c110b->leave($__internal_3ba212455c92392d2175db3ca8f1a59ddbed5dcef671c8b14e134ffb4d4c110b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d47bfc2eeed1717224a04c09e2cd59eb802f4c24f58522ecbb0db70cf99017a = $this->env->getExtension("native_profiler");
        $__internal_6d47bfc2eeed1717224a04c09e2cd59eb802f4c24f58522ecbb0db70cf99017a->enter($__internal_6d47bfc2eeed1717224a04c09e2cd59eb802f4c24f58522ecbb0db70cf99017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Configuracion edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("configuracion_index");
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
        
        $__internal_6d47bfc2eeed1717224a04c09e2cd59eb802f4c24f58522ecbb0db70cf99017a->leave($__internal_6d47bfc2eeed1717224a04c09e2cd59eb802f4c24f58522ecbb0db70cf99017a_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/configuracion:edit.html.twig";
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
/*     <h1>Configuracion edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('configuracion_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
