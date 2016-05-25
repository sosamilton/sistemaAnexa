<?php

/* AnexaCooperadoraBundle:backend/configuracion:show.html.twig */
class __TwigTemplate_13a10ff1d8a7a72242d432b7c21044b72195786109fb83765e66490bcaebd3f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/configuracion:show.html.twig", 1);
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
        $__internal_e34cd3eeb2a1b0b22fd90ef83f291c8f76ee74ca1ebb03c3f61cf9025014f1b9 = $this->env->getExtension("native_profiler");
        $__internal_e34cd3eeb2a1b0b22fd90ef83f291c8f76ee74ca1ebb03c3f61cf9025014f1b9->enter($__internal_e34cd3eeb2a1b0b22fd90ef83f291c8f76ee74ca1ebb03c3f61cf9025014f1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/configuracion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34cd3eeb2a1b0b22fd90ef83f291c8f76ee74ca1ebb03c3f61cf9025014f1b9->leave($__internal_e34cd3eeb2a1b0b22fd90ef83f291c8f76ee74ca1ebb03c3f61cf9025014f1b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc66a0cca4d679612d5c114713fe7d3780039c53a0bb80439801856d2757731a = $this->env->getExtension("native_profiler");
        $__internal_bc66a0cca4d679612d5c114713fe7d3780039c53a0bb80439801856d2757731a->enter($__internal_bc66a0cca4d679612d5c114713fe7d3780039c53a0bb80439801856d2757731a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Configuracion</h1>

    <table>
        <tbody>
            <tr>
                <th>Clave</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuracion"]) ? $context["configuracion"] : $this->getContext($context, "configuracion")), "clave", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valornumerico</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuracion"]) ? $context["configuracion"] : $this->getContext($context, "configuracion")), "valorNumerico", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valortextual</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuracion"]) ? $context["configuracion"] : $this->getContext($context, "configuracion")), "valorTextual", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("configuracion_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuracion_edit", array("id" => $this->getAttribute((isset($context["configuracion"]) ? $context["configuracion"] : $this->getContext($context, "configuracion")), "clave", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bc66a0cca4d679612d5c114713fe7d3780039c53a0bb80439801856d2757731a->leave($__internal_bc66a0cca4d679612d5c114713fe7d3780039c53a0bb80439801856d2757731a_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/configuracion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Configuracion</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Clave</th>*/
/*                 <td>{{ configuracion.clave }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valornumerico</th>*/
/*                 <td>{{ configuracion.valorNumerico }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valortextual</th>*/
/*                 <td>{{ configuracion.valorTextual }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('configuracion_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('configuracion_edit', { 'id': configuracion.clave }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
