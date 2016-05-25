<?php

/* AnexaCooperadoraBundle:backend/cuota:index.html.twig */
class __TwigTemplate_3e1a62eb4254df159f95a00d63afa5d1493e01146ffecf71a28b0875dac7e295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/cuota:index.html.twig", 1);
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
        $__internal_0601f5d43b45109bd0808f3fbe7b4b7e0e821aa60bc086c6370a7a61b63b793f = $this->env->getExtension("native_profiler");
        $__internal_0601f5d43b45109bd0808f3fbe7b4b7e0e821aa60bc086c6370a7a61b63b793f->enter($__internal_0601f5d43b45109bd0808f3fbe7b4b7e0e821aa60bc086c6370a7a61b63b793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/cuota:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0601f5d43b45109bd0808f3fbe7b4b7e0e821aa60bc086c6370a7a61b63b793f->leave($__internal_0601f5d43b45109bd0808f3fbe7b4b7e0e821aa60bc086c6370a7a61b63b793f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd69878af1ac492c58185b9ee9aab7683f91b46e6a2519453232fd451e51e1e = $this->env->getExtension("native_profiler");
        $__internal_edd69878af1ac492c58185b9ee9aab7683f91b46e6a2519453232fd451e51e1e->enter($__internal_edd69878af1ac492c58185b9ee9aab7683f91b46e6a2519453232fd451e51e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cuota list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Borrado</th>
                <th>Anio</th>
                <th>Mes</th>
                <th>Numero</th>
                <th>Monto</th>
                <th>Tipo</th>
                <th>Comisioncobrador</th>
                <th>Fechaalta</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) ? $context["cuotas"] : $this->getContext($context, "cuotas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuotum"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_show", array("id" => $this->getAttribute($context["cuotum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuotum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            if ($this->getAttribute($context["cuotum"], "borrado", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuotum"], "anio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuotum"], "mes", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuotum"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuotum"], "monto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuotum"], "tipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuotum"], "comisionCobrador", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["cuotum"], "fechaAlta", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuotum"], "fechaAlta", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_show", array("id" => $this->getAttribute($context["cuotum"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_edit", array("id" => $this->getAttribute($context["cuotum"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuotum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("cuota_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_edd69878af1ac492c58185b9ee9aab7683f91b46e6a2519453232fd451e51e1e->leave($__internal_edd69878af1ac492c58185b9ee9aab7683f91b46e6a2519453232fd451e51e1e_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/cuota:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 50,  132 => 45,  120 => 39,  114 => 36,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Cuota list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Borrado</th>*/
/*                 <th>Anio</th>*/
/*                 <th>Mes</th>*/
/*                 <th>Numero</th>*/
/*                 <th>Monto</th>*/
/*                 <th>Tipo</th>*/
/*                 <th>Comisioncobrador</th>*/
/*                 <th>Fechaalta</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cuotum in cuotas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('cuota_show', { 'id': cuotum.id }) }}">{{ cuotum.id }}</a></td>*/
/*                 <td>{% if cuotum.borrado %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ cuotum.anio }}</td>*/
/*                 <td>{{ cuotum.mes }}</td>*/
/*                 <td>{{ cuotum.numero }}</td>*/
/*                 <td>{{ cuotum.monto }}</td>*/
/*                 <td>{{ cuotum.tipo }}</td>*/
/*                 <td>{{ cuotum.comisionCobrador }}</td>*/
/*                 <td>{% if cuotum.fechaAlta %}{{ cuotum.fechaAlta|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('cuota_show', { 'id': cuotum.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('cuota_edit', { 'id': cuotum.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('cuota_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
