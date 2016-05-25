<?php

/* AnexaCooperadoraBundle:backend/cuota:new.html.twig */
class __TwigTemplate_ed1bd8542bc10062901e48ebd8a7818fedb5b1539e67d6dc53972d53217989ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/cuota:new.html.twig", 1);
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
        $__internal_07dfe86c3a0128d92f40224224f13ae14570268b8bb0d1afa97852123e4ed435 = $this->env->getExtension("native_profiler");
        $__internal_07dfe86c3a0128d92f40224224f13ae14570268b8bb0d1afa97852123e4ed435->enter($__internal_07dfe86c3a0128d92f40224224f13ae14570268b8bb0d1afa97852123e4ed435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/cuota:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07dfe86c3a0128d92f40224224f13ae14570268b8bb0d1afa97852123e4ed435->leave($__internal_07dfe86c3a0128d92f40224224f13ae14570268b8bb0d1afa97852123e4ed435_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82faa44cae217edec9e8ad1cf8a0dde83fbe992b10664f4f13751d0d286b986f = $this->env->getExtension("native_profiler");
        $__internal_82faa44cae217edec9e8ad1cf8a0dde83fbe992b10664f4f13751d0d286b986f->enter($__internal_82faa44cae217edec9e8ad1cf8a0dde83fbe992b10664f4f13751d0d286b986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cuota creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("cuota_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_82faa44cae217edec9e8ad1cf8a0dde83fbe992b10664f4f13751d0d286b986f->leave($__internal_82faa44cae217edec9e8ad1cf8a0dde83fbe992b10664f4f13751d0d286b986f_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/cuota:new.html.twig";
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
/*     <h1>Cuota creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cuota_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
