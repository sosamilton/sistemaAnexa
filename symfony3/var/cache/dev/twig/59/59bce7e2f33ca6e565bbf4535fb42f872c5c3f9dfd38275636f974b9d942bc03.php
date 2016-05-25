<?php

/* AnexaCooperadoraBundle:backend/viejo/cuota:editar.html.twig */
class __TwigTemplate_b596e1609182517cf050ece372a17d0fd681fba11b826ffafc0179abc7f2eb8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/cuota:editar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_474201a779bc389a51b5a473c983432c6f92c59ef64105e516cd67b226302840 = $this->env->getExtension("native_profiler");
        $__internal_474201a779bc389a51b5a473c983432c6f92c59ef64105e516cd67b226302840->enter($__internal_474201a779bc389a51b5a473c983432c6f92c59ef64105e516cd67b226302840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/cuota:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_474201a779bc389a51b5a473c983432c6f92c59ef64105e516cd67b226302840->leave($__internal_474201a779bc389a51b5a473c983432c6f92c59ef64105e516cd67b226302840_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a94f36a5afb5907293029ffee8a2d8540e1981d102d58869b62efe04b71b65ae = $this->env->getExtension("native_profiler");
        $__internal_a94f36a5afb5907293029ffee8a2d8540e1981d102d58869b62efe04b71b65ae->enter($__internal_a94f36a5afb5907293029ffee8a2d8540e1981d102d58869b62efe04b71b65ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Cuotas | Editar";
        
        $__internal_a94f36a5afb5907293029ffee8a2d8540e1981d102d58869b62efe04b71b65ae->leave($__internal_a94f36a5afb5907293029ffee8a2d8540e1981d102d58869b62efe04b71b65ae_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_76ccb999c6d210b2b56e07b6b2781f0f81aca32761f3dbd4cdcb5b50cd476eaa = $this->env->getExtension("native_profiler");
        $__internal_76ccb999c6d210b2b56e07b6b2781f0f81aca32761f3dbd4cdcb5b50cd476eaa->enter($__internal_76ccb999c6d210b2b56e07b6b2781f0f81aca32761f3dbd4cdcb5b50cd476eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Editar Cuota ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "numero", array()), "html", null, true);
        echo "</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_cuota_editar", array()), "html", null, true);
        echo "?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "id", array()), "html", null, true);
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
              <div class=\"form-group\">
                <div class=\"col-md-6\">
                  <label for=\"numero\">Número</label>
                  <input type=\"number\" class=\"form-control\" id=\"numero\" name=\"numero\" placeholder=\"Número\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "numero", array()), "html", null, true);
        echo "\" required >
                </div>
                <div class=\"col-md-6\">
                  <label for=\"anio\">Año</label>
                  <input type=\"number\" class=\"form-control\" id=\"anio\" name=\"anio\" placeholder=\"Año\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "anio", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"mes\">Mes</label>
                  <input type=\"number\" class=\"form-control\" id=\"mes\" name=\"mes\" placeholder=\"Mes\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "mes", array()), "html", null, true);
        echo "\" required>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-3\">
                  <label for=\"tipo\">Tipo Cuota</label>
                  <select class=\"form-control\" name=\"tipo\" required>
                    <option value=\"mensual\">Mensual</option>
                    <option value=\"matricula\">Matrícula</option>
                  </select>
                </div>
                <div class=\"col-md-5\">
                  <label for=\"monto\">Monto</label>
                  <input type=\"number\" class=\"form-control\" name=\"monto\" id=\"monto\" placeholder=\"Monto\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "monto", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-5\">
                  <label for=\"comision\">Porcentaje de Comisión Cobrador</label>
                  <input type=\"number\" class=\"form-control\" name=\"comision\" id=\"comision\" placeholder=\"Comisión Cobrador\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "comisionCobrador", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"fecha\">Fecha de Alta</label>
                  <input type=\"date\" class=\"form-control\" id=\"fecha\" name=\"fecha\" placeholder=\"Fecha de Alta\"
                  value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "\" required>
                </div>
              </div>
              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Editar Cuota</button>
            </form>
          </div>
      </div>
";
        
        $__internal_76ccb999c6d210b2b56e07b6b2781f0f81aca32761f3dbd4cdcb5b50cd476eaa->leave($__internal_76ccb999c6d210b2b56e07b6b2781f0f81aca32761f3dbd4cdcb5b50cd476eaa_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/cuota:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 46,  113 => 41,  106 => 37,  90 => 24,  83 => 20,  76 => 16,  69 => 12,  63 => 11,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Cuotas | Editar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Editar Cuota {{cuota.numero}}</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{URL.backend_cuota_editar}}?id={{cuota.id}}" method="post">*/
/*               <input type="hidden" name="token" value="{{token}}">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-6">*/
/*                   <label for="numero">Número</label>*/
/*                   <input type="number" class="form-control" id="numero" name="numero" placeholder="Número" value="{{cuota.numero}}" required >*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="anio">Año</label>*/
/*                   <input type="number" class="form-control" id="anio" name="anio" placeholder="Año" value="{{cuota.anio}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="mes">Mes</label>*/
/*                   <input type="number" class="form-control" id="mes" name="mes" placeholder="Mes" value="{{cuota.mes}}" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-3">*/
/*                   <label for="tipo">Tipo Cuota</label>*/
/*                   <select class="form-control" name="tipo" required>*/
/*                     <option value="mensual">Mensual</option>*/
/*                     <option value="matricula">Matrícula</option>*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label for="monto">Monto</label>*/
/*                   <input type="number" class="form-control" name="monto" id="monto" placeholder="Monto" value="{{cuota.monto}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label for="comision">Porcentaje de Comisión Cobrador</label>*/
/*                   <input type="number" class="form-control" name="comision" id="comision" placeholder="Comisión Cobrador" value="{{cuota.comisionCobrador}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="fecha">Fecha de Alta</label>*/
/*                   <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha de Alta"*/
/*                   value="{{cuota.fecha | date("Y-m-d")}}" required>*/
/*                 </div>*/
/*               </div>*/
/*               <button type="submit" class="btn btn-primary col-md-12">Editar Cuota</button>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/* {% endblock %}*/
/* */
