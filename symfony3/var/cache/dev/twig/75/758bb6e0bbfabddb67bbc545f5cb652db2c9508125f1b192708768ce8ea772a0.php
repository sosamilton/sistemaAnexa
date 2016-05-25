<?php

/* AnexaCooperadoraBundle:backend/viejo/cuota:agregar.html.twig */
class __TwigTemplate_a75da9e0d98eb4a71b0724fe7237961f30bff485ac67abe62529c8c3bdcf6c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/cuota:agregar.html.twig", 1);
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
        $__internal_948edb84a25f8f99842a7e536d0f64df62bbf8a2ce976222107a6daa9f932fe9 = $this->env->getExtension("native_profiler");
        $__internal_948edb84a25f8f99842a7e536d0f64df62bbf8a2ce976222107a6daa9f932fe9->enter($__internal_948edb84a25f8f99842a7e536d0f64df62bbf8a2ce976222107a6daa9f932fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/cuota:agregar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948edb84a25f8f99842a7e536d0f64df62bbf8a2ce976222107a6daa9f932fe9->leave($__internal_948edb84a25f8f99842a7e536d0f64df62bbf8a2ce976222107a6daa9f932fe9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaceb2c3fe74aca1fb556839306e3eed396943c1d15b1733999d4432ddfd6fdf = $this->env->getExtension("native_profiler");
        $__internal_eaceb2c3fe74aca1fb556839306e3eed396943c1d15b1733999d4432ddfd6fdf->enter($__internal_eaceb2c3fe74aca1fb556839306e3eed396943c1d15b1733999d4432ddfd6fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Cuotas | Agregar";
        
        $__internal_eaceb2c3fe74aca1fb556839306e3eed396943c1d15b1733999d4432ddfd6fdf->leave($__internal_eaceb2c3fe74aca1fb556839306e3eed396943c1d15b1733999d4432ddfd6fdf_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_09abd54251def3af9af447d1689199e2616dad7bacc86f955bf0951437f02c68 = $this->env->getExtension("native_profiler");
        $__internal_09abd54251def3af9af447d1689199e2616dad7bacc86f955bf0951437f02c68->enter($__internal_09abd54251def3af9af447d1689199e2616dad7bacc86f955bf0951437f02c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Agregar Cuota</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_cuota_agregar", array()), "html", null, true);
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
              <div class=\"form-group\">
                <div class=\"col-md-6\">
                  <label for=\"nombre\">N&uacute;mero</label>
                  <input type=\"number\" class=\"form-control\" id=\"numero\" name=\"numero\" placeholder=\"N&uacute;mero\" required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"anio\">A&ntilde;o</label>
                  <input type=\"number\" class=\"form-control\" id=\"anio\" name=\"anio\" placeholder=\"A&ntilde;o\" required>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-6\">
                  <label for=\"mes\">Mes</label>
                  <input type=\"number\" class=\"form-control\" id=\"mes\" name=\"mes\" placeholder= \"Mes\" required>
                </div>

                <div class=\"col-md-3\">
                  <label for=\"tipo\">Tipo Cuota</label>
                  <select class=\"form-control\" name=\"tipo\" required>
                    <option value=\"mensual\">Mensual</option>
                    <option value=\"matricula\">Matricula</option>
                  </select>
                </div>
                <div class=\"col-md-5\">
                  <label for=\"monto\">Monto</label>
                  <input type=\"number\" class=\"form-control\" name=\"monto\" id=\"monto\" placeholder=\"Monto\" required>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-5\">
                  <label for=\"comision\">Comisi&oacute;n Cobrador</label>
                  <input type=\"number\" class=\"form-control\" name=\"comision\" id=\"comision\" placeholder=\"Comisi&oacute;n Cobrador\" required>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"fecha\">Fecha de Alta</label>
                  <input type=\"date\" class=\"form-control\" id=\"fecha\" name=\"fecha\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y/m/d"), "html", null, true);
        echo "\" required>
                </div>

              </div>

              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Agregar Cuota</button>
            </form>
          </div>
      </div>

";
        
        $__internal_09abd54251def3af9af447d1689199e2616dad7bacc86f955bf0951437f02c68->leave($__internal_09abd54251def3af9af447d1689199e2616dad7bacc86f955bf0951437f02c68_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/cuota:agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 48,  64 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Cuotas | Agregar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Agregar Cuota</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{URL.backend_cuota_agregar}}" method="post">*/
/*               <input type="hidden" name="token" value="{{token}}">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-6">*/
/*                   <label for="nombre">N&uacute;mero</label>*/
/*                   <input type="number" class="form-control" id="numero" name="numero" placeholder="N&uacute;mero" required>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="anio">A&ntilde;o</label>*/
/*                   <input type="number" class="form-control" id="anio" name="anio" placeholder="A&ntilde;o" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-6">*/
/*                   <label for="mes">Mes</label>*/
/*                   <input type="number" class="form-control" id="mes" name="mes" placeholder= "Mes" required>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3">*/
/*                   <label for="tipo">Tipo Cuota</label>*/
/*                   <select class="form-control" name="tipo" required>*/
/*                     <option value="mensual">Mensual</option>*/
/*                     <option value="matricula">Matricula</option>*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label for="monto">Monto</label>*/
/*                   <input type="number" class="form-control" name="monto" id="monto" placeholder="Monto" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-5">*/
/*                   <label for="comision">Comisi&oacute;n Cobrador</label>*/
/*                   <input type="number" class="form-control" name="comision" id="comision" placeholder="Comisi&oacute;n Cobrador" required>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="fecha">Fecha de Alta</label>*/
/*                   <input type="date" class="form-control" id="fecha" name="fecha" value="{{"now" | date("Y/m/d")}}" required>*/
/*                 </div>*/
/* */
/*               </div>*/
/* */
/*               <button type="submit" class="btn btn-primary col-md-12">Agregar Cuota</button>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/* */
/* {% endblock %}*/
/* */
