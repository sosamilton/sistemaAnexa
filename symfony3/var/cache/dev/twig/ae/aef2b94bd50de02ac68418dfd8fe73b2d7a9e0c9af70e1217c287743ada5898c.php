<?php

/* AnexaCooperadoraBundle:backend/cuota:show.html.twig */
class __TwigTemplate_aa063273ff0d8b767a1674985f66f8acee611f3e76ef57e633a27f7b988a05de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/cuota:show.html.twig", 1);
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
        $__internal_c6bbeb2dd597d97d21e6c1b3ecc89cb7fdc1d941bde17dd771dabf408035c26a = $this->env->getExtension("native_profiler");
        $__internal_c6bbeb2dd597d97d21e6c1b3ecc89cb7fdc1d941bde17dd771dabf408035c26a->enter($__internal_c6bbeb2dd597d97d21e6c1b3ecc89cb7fdc1d941bde17dd771dabf408035c26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/cuota:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6bbeb2dd597d97d21e6c1b3ecc89cb7fdc1d941bde17dd771dabf408035c26a->leave($__internal_c6bbeb2dd597d97d21e6c1b3ecc89cb7fdc1d941bde17dd771dabf408035c26a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_107518be527dc8803b7d51ceb08ad8d9db75ab1e059b515716c0fe1d9070cb13 = $this->env->getExtension("native_profiler");
        $__internal_107518be527dc8803b7d51ceb08ad8d9db75ab1e059b515716c0fe1d9070cb13->enter($__internal_107518be527dc8803b7d51ceb08ad8d9db75ab1e059b515716c0fe1d9070cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cuota</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Borrado</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "borrado", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Anio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "anio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mes</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "mes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Monto</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "monto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comisioncobrador</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "comisionCobrador", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaalta</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "fechaAlta", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "fechaAlta", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("cuota_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_edit", array("id" => $this->getAttribute((isset($context["cuotum"]) ? $context["cuotum"] : $this->getContext($context, "cuotum")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_107518be527dc8803b7d51ceb08ad8d9db75ab1e059b515716c0fe1d9070cb13->leave($__internal_107518be527dc8803b7d51ceb08ad8d9db75ab1e059b515716c0fe1d9070cb13_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/cuota:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  132 => 55,  126 => 52,  120 => 49,  108 => 42,  101 => 38,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  66 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Cuota</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ cuotum.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Borrado</th>*/
/*                 <td>{% if cuotum.borrado %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Anio</th>*/
/*                 <td>{{ cuotum.anio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mes</th>*/
/*                 <td>{{ cuotum.mes }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <td>{{ cuotum.numero }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Monto</th>*/
/*                 <td>{{ cuotum.monto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo</th>*/
/*                 <td>{{ cuotum.tipo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comisioncobrador</th>*/
/*                 <td>{{ cuotum.comisionCobrador }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechaalta</th>*/
/*                 <td>{% if cuotum.fechaAlta %}{{ cuotum.fechaAlta|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cuota_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('cuota_edit', { 'id': cuotum.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
