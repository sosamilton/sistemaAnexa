<?php

/* AnexaCooperadoraBundle:backend/responsable:show.html.twig */
class __TwigTemplate_838c92a8185d8ebeae6cccbb31f5cabc4f78ebc77e46ad9d2fe0b50d11c23716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/responsable:show.html.twig", 1);
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
        $__internal_f07300697392fa501a60f09bbd03a6803e4b0501e58235b830509051767915eb = $this->env->getExtension("native_profiler");
        $__internal_f07300697392fa501a60f09bbd03a6803e4b0501e58235b830509051767915eb->enter($__internal_f07300697392fa501a60f09bbd03a6803e4b0501e58235b830509051767915eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/responsable:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f07300697392fa501a60f09bbd03a6803e4b0501e58235b830509051767915eb->leave($__internal_f07300697392fa501a60f09bbd03a6803e4b0501e58235b830509051767915eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e70d7730c011c9a3fa003636c6d645782d95f214e68f1fff8f5cf2ffa2438923 = $this->env->getExtension("native_profiler");
        $__internal_e70d7730c011c9a3fa003636c6d645782d95f214e68f1fff8f5cf2ffa2438923->enter($__internal_e70d7730c011c9a3fa003636c6d645782d95f214e68f1fff8f5cf2ffa2438923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Responsable</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Borrado</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "borrado", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Tipodni</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoDNI", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "dni", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tiporesponsable</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoResponsable", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechanacimiento</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "fechaNacimiento", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "sexo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("responsable_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responsable_edit", array("id" => $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e70d7730c011c9a3fa003636c6d645782d95f214e68f1fff8f5cf2ffa2438923->leave($__internal_e70d7730c011c9a3fa003636c6d645782d95f214e68f1fff8f5cf2ffa2438923_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/responsable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 69,  151 => 67,  145 => 64,  139 => 61,  129 => 54,  122 => 50,  115 => 46,  108 => 42,  101 => 38,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  66 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Responsable</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ responsable.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Borrado</th>*/
/*                 <td>{% if responsable.borrado %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipodni</th>*/
/*                 <td>{{ responsable.tipoDNI }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dni</th>*/
/*                 <td>{{ responsable.dni }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tiporesponsable</th>*/
/*                 <td>{{ responsable.tipoResponsable }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellido</th>*/
/*                 <td>{{ responsable.apellido }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ responsable.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechanacimiento</th>*/
/*                 <td>{{ responsable.fechaNacimiento }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexo</th>*/
/*                 <td>{{ responsable.sexo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ responsable.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ responsable.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccion</th>*/
/*                 <td>{{ responsable.direccion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('responsable_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('responsable_edit', { 'id': responsable.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
