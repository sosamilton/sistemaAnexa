<?php

/* AnexaCooperadoraBundle:Usuario:index.html.twig */
class __TwigTemplate_dd1c3b706ea12d38cbec249f7b7031dd32274603a98080da8d43ab0dc0505426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InicioBundle:Admin:index.html.twig", "AnexaCooperadoraBundle:Usuario:index.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InicioBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dc8604433f9ffbcae71b098565847cd4b9504c455639c3af42da466abdf29b7 = $this->env->getExtension("native_profiler");
        $__internal_5dc8604433f9ffbcae71b098565847cd4b9504c455639c3af42da466abdf29b7->enter($__internal_5dc8604433f9ffbcae71b098565847cd4b9504c455639c3af42da466abdf29b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:Usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dc8604433f9ffbcae71b098565847cd4b9504c455639c3af42da466abdf29b7->leave($__internal_5dc8604433f9ffbcae71b098565847cd4b9504c455639c3af42da466abdf29b7_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_890496c511b30106dccf963ab8ebf0e76aa0d3ea60ddca95c3a997cbd1f3b303 = $this->env->getExtension("native_profiler");
        $__internal_890496c511b30106dccf963ab8ebf0e76aa0d3ea60ddca95c3a997cbd1f3b303->enter($__internal_890496c511b30106dccf963ab8ebf0e76aa0d3ea60ddca95c3a997cbd1f3b303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "     <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
            <div class=\"btn btn-primary dropdown-toggle margin-top1\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                Registrar un Nuevo Usuario
            </div>
        </a>
    <h1>Lista de Usuarios</h1>

    <div class=\"table-responsive\">
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Ultimo Acceso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            ";
            if ($this->getAttribute($context["entity"], "enabled", array())) {
                // line 25
                echo "            <tr>
                <td><a href=\"#\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 29
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["entity"], "lastLogin", array()))) ? ("Nunca") : (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "lastLogin", array()), "m/d/Y"))), "html", null, true);
                echo "</td>
                <td>
                    <a onclick=\"return confirm('¿Está seguro de eliminar este Usuario?')\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarioBorrar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Borrar\">
                        <span class=\"glyphicon glyphicon-trash margin-der1\" style=\"color: rgb(156, 0, 0);\"></span>
                    </a>
                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarioEditar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <span class=\"glyphicon glyphicon-pencil margin-der1\" title=\"Editar\"></span>
                    </a>
                </td>
            </tr>
            ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    ";
        
        $__internal_890496c511b30106dccf963ab8ebf0e76aa0d3ea60ddca95c3a997cbd1f3b303->leave($__internal_890496c511b30106dccf963ab8ebf0e76aa0d3ea60ddca95c3a997cbd1f3b303_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  106 => 40,  97 => 34,  91 => 31,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  71 => 25,  68 => 24,  64 => 23,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'InicioBundle:Admin:index.html.twig' %} */
/* {% block form %}*/
/*      <a href="{{ path('fos_user_registration_register') }}">*/
/*             <div class="btn btn-primary dropdown-toggle margin-top1">*/
/*                 <span class="glyphicon glyphicon-plus"></span>*/
/*                 Registrar un Nuevo Usuario*/
/*             </div>*/
/*         </a>*/
/*     <h1>Lista de Usuarios</h1>*/
/* */
/*     <div class="table-responsive">*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>#</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Email</th>*/
/*                 <th>Ultimo Acceso</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in data %}*/
/*             {% if entity.enabled %}*/
/*             <tr>*/
/*                 <td><a href="#">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.username }}</td>*/
/*                 <td>{{ entity.email }}</td>*/
/*                 <td>{{ entity.lastLogin is null ? "Nunca" : entity.lastLogin|date("m/d/Y") }}</td>*/
/*                 <td>*/
/*                     <a onclick="return confirm('¿Está seguro de eliminar este Usuario?')" href="{{ path('usuarioBorrar', { 'id': entity.id }) }}" title="Borrar">*/
/*                         <span class="glyphicon glyphicon-trash margin-der1" style="color: rgb(156, 0, 0);"></span>*/
/*                     </a>*/
/*                     <a href="{{ path('usuarioEditar', { 'id': entity.id }) }}">*/
/*                         <span class="glyphicon glyphicon-pencil margin-der1" title="Editar"></span>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     {% endblock %}*/
/* */
