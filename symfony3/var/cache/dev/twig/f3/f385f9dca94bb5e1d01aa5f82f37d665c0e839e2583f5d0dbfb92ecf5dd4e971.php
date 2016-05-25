<?php

/* AnexaCooperadoraBundle:backend:menuLateral.html.twig */
class __TwigTemplate_e087072797ee06daf432bdc80843726a636e563be81cf423c967ea0d7ae97fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cd1021001eb77d0027d072bdbc65c7789b54fd443dce78dbfdcaadef2ab7219 = $this->env->getExtension("native_profiler");
        $__internal_9cd1021001eb77d0027d072bdbc65c7789b54fd443dce78dbfdcaadef2ab7219->enter($__internal_9cd1021001eb77d0027d072bdbc65c7789b54fd443dce78dbfdcaadef2ab7219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend:menuLateral.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
  <li role=\"presentation\" ";
        // line 2
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "inicio")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("anexa_cooperadora_backend");
        echo "\">Inicio</a></li>

  <li role=\"presentation\" ";
        // line 4
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "alumno")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("alumno_index");
        echo "\">Alumnos</a></li>

  <li role=\"presentation\" ";
        // line 6
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "listado")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("listado_index");
        echo "\">Listados</a></li>

  ";
        // line 9
        echo "
    <li role=\"presentation\"  ";
        // line 10
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "pago")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pago_index");
        echo "\">Pagos</a></li>

    <li role=\"presentation\" ";
        // line 12
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "cuota")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("cuota_index");
        echo "\">Cuotas</a></li> 
    <li role=\"presentation\" ";
        // line 13
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "estadistica")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("anexa_cooperadora_backend");
        echo "\">Estadísticas</a></li>

    ";
        // line 16
        echo "    <li role=\"presentation\" ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "responsable")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("responsable_index");
        echo "\">Responsables</a></li>

      <li role=\"presentation\" ";
        // line 18
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "usuario")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("anexa_cooperadora_backend");
        echo "\">Usuarios</a></li>

      <li role=\"presentation\" ";
        // line 20
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "recorrido")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("anexa_cooperadora_backend");
        echo "\">Recorrido</a></li>

    <li role=\"presentation\" ";
        // line 22
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "configuracion")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("configuracion_index");
        echo "\">Configuración</a></li>
   ";
        // line 24
        echo "  ";
        // line 25
        echo "  

</ul>
";
        
        $__internal_9cd1021001eb77d0027d072bdbc65c7789b54fd443dce78dbfdcaadef2ab7219->leave($__internal_9cd1021001eb77d0027d072bdbc65c7789b54fd443dce78dbfdcaadef2ab7219_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend:menuLateral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  117 => 24,  109 => 22,  100 => 20,  91 => 18,  81 => 16,  72 => 13,  64 => 12,  55 => 10,  52 => 9,  43 => 6,  34 => 4,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav nav-pills nav-stacked">*/
/*   <li role="presentation" {% if menu == "inicio" %}class="active"{% endif %}><a href="{{path('anexa_cooperadora_backend')}}">Inicio</a></li>*/
/* */
/*   <li role="presentation" {% if menu == "alumno" %}class="active"{% endif %}><a href="{{path('alumno_index')}}">Alumnos</a></li>*/
/* */
/*   <li role="presentation" {% if menu == "listado" %}class="active"{% endif %}><a href="{{path('listado_index')}}">Listados</a></li>*/
/* */
/*   {# if session.rol != "Consulta" % #}*/
/* */
/*     <li role="presentation"  {% if menu == "pago" %}class="active"{% endif %}><a href="{{path('pago_index')}}">Pagos</a></li>*/
/* */
/*     <li role="presentation" {% if menu == "cuota" %}class="active"{% endif %}><a href="{{path('cuota_index')}}">Cuotas</a></li> */
/*     <li role="presentation" {% if menu == "estadistica" %}class="active"{% endif %}><a href="{{path('anexa_cooperadora_backend')}}">Estadísticas</a></li>*/
/* */
/*     {# if session.rol == "Administracion" #}*/
/*     <li role="presentation" {% if menu == "responsable" %}class="active"{% endif %}><a href="{{path('responsable_index')}}">Responsables</a></li>*/
/* */
/*       <li role="presentation" {% if menu == "usuario" %}class="active"{% endif %}><a href="{{path('anexa_cooperadora_backend')}}">Usuarios</a></li>*/
/* */
/*       <li role="presentation" {% if menu == "recorrido" %}class="active"{% endif %}><a href="{{path('anexa_cooperadora_backend')}}">Recorrido</a></li>*/
/* */
/*     <li role="presentation" {% if menu == "configuracion" %}class="active"{% endif %}><a href="{{path('configuracion_index')}}">Configuración</a></li>*/
/*    {# {% endif %} #}*/
/*   {# endif #}*/
/*   */
/* */
/* </ul>*/
/* */
