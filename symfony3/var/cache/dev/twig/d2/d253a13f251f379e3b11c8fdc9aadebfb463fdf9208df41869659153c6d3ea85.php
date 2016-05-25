<?php

/* AnexaCooperadoraBundle:backend/responsable:index.html.twig */
class __TwigTemplate_1335de608c3d318a8a83d5b5ce26aed574864f5a01a32cb1a4b8aac22365c642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/responsable:index.html.twig", 1);
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
        $__internal_638f373f3a663f275c9bf917a30131a75fb3b764c594964337e7e7e461c0048e = $this->env->getExtension("native_profiler");
        $__internal_638f373f3a663f275c9bf917a30131a75fb3b764c594964337e7e7e461c0048e->enter($__internal_638f373f3a663f275c9bf917a30131a75fb3b764c594964337e7e7e461c0048e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638f373f3a663f275c9bf917a30131a75fb3b764c594964337e7e7e461c0048e->leave($__internal_638f373f3a663f275c9bf917a30131a75fb3b764c594964337e7e7e461c0048e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_973ce7f7193f7f037691484f24131e3b813c257ac4aba0caad6ed23dbfed0ccf = $this->env->getExtension("native_profiler");
        $__internal_973ce7f7193f7f037691484f24131e3b813c257ac4aba0caad6ed23dbfed0ccf->enter($__internal_973ce7f7193f7f037691484f24131e3b813c257ac4aba0caad6ed23dbfed0ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Responsable list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Borrado</th>
                <th>Tipodni</th>
                <th>Dni</th>
                <th>Tiporesponsable</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Fechanacimiento</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responsable_show", array("id" => $this->getAttribute($context["responsable"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            if ($this->getAttribute($context["responsable"], "borrado", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "tipoDNI", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "dni", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "tipoResponsable", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "fechaNacimiento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "sexo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responsable_show", array("id" => $this->getAttribute($context["responsable"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responsable_edit", array("id" => $this->getAttribute($context["responsable"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("responsable_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_973ce7f7193f7f037691484f24131e3b813c257ac4aba0caad6ed23dbfed0ccf->leave($__internal_973ce7f7193f7f037691484f24131e3b813c257ac4aba0caad6ed23dbfed0ccf_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/responsable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  145 => 51,  133 => 45,  127 => 42,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Responsable list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Borrado</th>*/
/*                 <th>Tipodni</th>*/
/*                 <th>Dni</th>*/
/*                 <th>Tiporesponsable</th>*/
/*                 <th>Apellido</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Fechanacimiento</th>*/
/*                 <th>Sexo</th>*/
/*                 <th>Email</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Direccion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for responsable in responsables %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('responsable_show', { 'id': responsable.id }) }}">{{ responsable.id }}</a></td>*/
/*                 <td>{% if responsable.borrado %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ responsable.tipoDNI }}</td>*/
/*                 <td>{{ responsable.dni }}</td>*/
/*                 <td>{{ responsable.tipoResponsable }}</td>*/
/*                 <td>{{ responsable.apellido }}</td>*/
/*                 <td>{{ responsable.nombre }}</td>*/
/*                 <td>{{ responsable.fechaNacimiento }}</td>*/
/*                 <td>{{ responsable.sexo }}</td>*/
/*                 <td>{{ responsable.email }}</td>*/
/*                 <td>{{ responsable.telefono }}</td>*/
/*                 <td>{{ responsable.direccion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('responsable_show', { 'id': responsable.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('responsable_edit', { 'id': responsable.id }) }}">edit</a>*/
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
/*             <a href="{{ path('responsable_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
