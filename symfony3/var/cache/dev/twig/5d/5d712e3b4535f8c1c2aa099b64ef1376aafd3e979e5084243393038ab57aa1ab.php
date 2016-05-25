<?php

/* AnexaCooperadoraBundle:frontend:nav.html.twig */
class __TwigTemplate_fa4fc2938b2e9c20d1be06f4f6c2b97e442f3a508c4bd65cadf8ab5fc18496fa extends Twig_Template
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
        $__internal_415eed53835fa92243a902d7196be4cb1351bda172ac3a1b75f881a30d9fa26a = $this->env->getExtension("native_profiler");
        $__internal_415eed53835fa92243a902d7196be4cb1351bda172ac3a1b75f881a30d9fa26a->enter($__internal_415eed53835fa92243a902d7196be4cb1351bda172ac3a1b75f881a30d9fa26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:frontend:nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"\"> </a>
      <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">";
        echo "</a> ";
        // line 12
        echo "

    </div>


    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li title=\"Buscar Pagos/Impagos por Alumno\"><a href=\"https://grupo_57.proyecto2015.linti.unlp.edu.ar/consultas/consulaAlumno.html\">Info por Alumno</a></li>
        <li title=\"Buscar el Total de ingreso por Año\"><a href=\"https://grupo_57.proyecto2015.linti.unlp.edu.ar/consultas/consulaTotalAnio.html\">Ingresos Totales</a></li>
        <li title=\"Entrar\" class=\"active\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Entrar</a></li>
      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_415eed53835fa92243a902d7196be4cb1351bda172ac3a1b75f881a30d9fa26a->leave($__internal_415eed53835fa92243a902d7196be4cb1351bda172ac3a1b75f881a30d9fa26a_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:frontend:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href=""> </a>*/
/*       <a class="navbar-brand" href="{{path('inicio')}}">{#{data[5].valorTextual }#}</a> {# titulo #}*/
/* */
/* */
/*     </div>*/
/* */
/* */
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li title="Buscar Pagos/Impagos por Alumno"><a href="https://grupo_57.proyecto2015.linti.unlp.edu.ar/consultas/consulaAlumno.html">Info por Alumno</a></li>*/
/*         <li title="Buscar el Total de ingreso por Año"><a href="https://grupo_57.proyecto2015.linti.unlp.edu.ar/consultas/consulaTotalAnio.html">Ingresos Totales</a></li>*/
/*         <li title="Entrar" class="active"><a href="{{path('login')}}">Entrar</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
