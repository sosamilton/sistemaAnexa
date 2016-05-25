<?php

/* AnexaCooperadoraBundle:backend/cuota:edit.html.twig */
class __TwigTemplate_d3d460ab00805d97bad05ac5e9ae32416d0a84b3955b0ad9d2b3d2488654c1aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/cuota:edit.html.twig", 1);
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
        $__internal_8e8ca7808af068108137cb1c8de779f3b007d071d6d6e2ee42bf3a52bb9676d5 = $this->env->getExtension("native_profiler");
        $__internal_8e8ca7808af068108137cb1c8de779f3b007d071d6d6e2ee42bf3a52bb9676d5->enter($__internal_8e8ca7808af068108137cb1c8de779f3b007d071d6d6e2ee42bf3a52bb9676d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/cuota:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8ca7808af068108137cb1c8de779f3b007d071d6d6e2ee42bf3a52bb9676d5->leave($__internal_8e8ca7808af068108137cb1c8de779f3b007d071d6d6e2ee42bf3a52bb9676d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87f54384cf5bcb83b87e49b6e2b84d6e7ac61a36af50e7f8c20c0c5a8b41024a = $this->env->getExtension("native_profiler");
        $__internal_87f54384cf5bcb83b87e49b6e2b84d6e7ac61a36af50e7f8c20c0c5a8b41024a->enter($__internal_87f54384cf5bcb83b87e49b6e2b84d6e7ac61a36af50e7f8c20c0c5a8b41024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cuota edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("cuota_index");
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
        
        $__internal_87f54384cf5bcb83b87e49b6e2b84d6e7ac61a36af50e7f8c20c0c5a8b41024a->leave($__internal_87f54384cf5bcb83b87e49b6e2b84d6e7ac61a36af50e7f8c20c0c5a8b41024a_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/cuota:edit.html.twig";
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
/*     <h1>Cuota edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cuota_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
