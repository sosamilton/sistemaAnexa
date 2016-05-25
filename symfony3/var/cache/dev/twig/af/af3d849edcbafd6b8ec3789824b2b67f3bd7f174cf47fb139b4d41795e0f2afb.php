<?php

/* AnexaCooperadoraBundle:backend/viejo/cuota:index.html.twig */
class __TwigTemplate_c27f9a797405fe0b123a496a71185460d5d18b9ecc84745bb0156c77c6d89aea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/cuota:index.html.twig", 1);
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
        $__internal_83bd18e59146b1209d6095430e686455491f0b0cecedf25a833f4b1392129ea9 = $this->env->getExtension("native_profiler");
        $__internal_83bd18e59146b1209d6095430e686455491f0b0cecedf25a833f4b1392129ea9->enter($__internal_83bd18e59146b1209d6095430e686455491f0b0cecedf25a833f4b1392129ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/cuota:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83bd18e59146b1209d6095430e686455491f0b0cecedf25a833f4b1392129ea9->leave($__internal_83bd18e59146b1209d6095430e686455491f0b0cecedf25a833f4b1392129ea9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df801483b76247aee6241a59b1d4d07cc1c87ff76061c05859cf563f4e95e77f = $this->env->getExtension("native_profiler");
        $__internal_df801483b76247aee6241a59b1d4d07cc1c87ff76061c05859cf563f4e95e77f->enter($__internal_df801483b76247aee6241a59b1d4d07cc1c87ff76061c05859cf563f4e95e77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administraci&oacute;n | Cuotas";
        
        $__internal_df801483b76247aee6241a59b1d4d07cc1c87ff76061c05859cf563f4e95e77f->leave($__internal_df801483b76247aee6241a59b1d4d07cc1c87ff76061c05859cf563f4e95e77f_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_62ba2a0b00c1fb367f8f9d102c93f9aa2b11f6ffb354d73352b228088e6ef417 = $this->env->getExtension("native_profiler");
        $__internal_62ba2a0b00c1fb367f8f9d102c93f9aa2b11f6ffb354d73352b228088e6ef417->enter($__internal_62ba2a0b00c1fb367f8f9d102c93f9aa2b11f6ffb354d73352b228088e6ef417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "      ";
        if (array_key_exists("msj", $context)) {
            // line 7
            echo "        <div class=\"alert alert-";
            if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
                echo "success";
            } else {
                echo "danger";
            }
            echo " alert-dismissible fade in\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          <strong>Atenci&oacute;n! </strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 12
        echo "      <a class=\"btn btn-primary botonAdd\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_cuota_agregar", array()), "html", null, true);
        echo "\" role=\"button\">Agregar Cuota</a>

      <div class=\"panel panel-primary\" id=\"paginacion\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Listado de Cuotas</div>
          <!-- Table -->                          
            <table class=\"table\">
              <thead>
                <tr>
                  
                  <th>
                    <button class=\"sort btn\" data-sort=\"anio\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Año
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"mes\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Mes
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"tipo\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Tipo
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"monto\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Monto
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"comision\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Comisión Cobrador
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"fechaAlta\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Fecha de Alta
                  </th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody class=\"list\">
  \t            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) ? $context["cuotas"] : $this->getContext($context, "cuotas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 63
            echo "  \t              <tr>
  \t                
  \t                <td class=\"anio\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "anio", array()), "html", null, true);
            echo "</td>
  \t                <td class=\"mes\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "mes", array()), "html", null, true);
            echo "</td>
                    <td class=\"tipo\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "tipo", array()), "html", null, true);
            echo "</td>
                    <td class=\"monto\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "monto", array()), "html", null, true);
            echo "</td>
                    <td class=\"comision\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "comisionCobrador", array()), "html", null, true);
            echo "</td>
                    <td class=\"fechaAlta\">";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuota"], "fechaAlta", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"\">
                            <a class=\"btn btn-primary\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_cuota_editar", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "id", array()), "html", null, true);
            echo "\" title='Editar'>
                                <span class='glyphicon glyphicon-pencil' ></span>
                            </a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_cuota_eliminar", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "id", array()), "html", null, true);
            echo "\" title='Eliminar'>
                                <span class='glyphicon glyphicon-remove'></span>
                            </a>       
                        </div>               
                    </td>
  \t              </tr>
  \t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                 
              </tbody>
                
            </table>
            <div class=\"col-md-4 col-md-offset-4\">
                <ul class=\"pagination\"></ul>
            </div>
          
         
          </div>

      </div>

      <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var monkeyList = new List('paginacion', {
              valueNames: ['numero', 'anio','mes','tipo', 'monto', \"comision\", \"fechaAlta\"],
              page: ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")), "html", null, true);
        echo ",
              plugins: [ ListPagination({}) ] 
          });
        });
    </script>

      
";
        
        $__internal_62ba2a0b00c1fb367f8f9d102c93f9aa2b11f6ffb354d73352b228088e6ef417->leave($__internal_62ba2a0b00c1fb367f8f9d102c93f9aa2b11f6ffb354d73352b228088e6ef417_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/cuota:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 100,  183 => 83,  168 => 76,  160 => 73,  154 => 70,  150 => 69,  146 => 68,  142 => 67,  138 => 66,  134 => 65,  130 => 63,  126 => 62,  72 => 12,  66 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administraci&oacute;n | Cuotas{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       {% if msj is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atenci&oacute;n! </strong>{{msj}}*/
/*         </div>*/
/*       {% endif %}*/
/*       <a class="btn btn-primary botonAdd" href="{{URL.backend_cuota_agregar}}" role="button">Agregar Cuota</a>*/
/* */
/*       <div class="panel panel-primary" id="paginacion">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Listado de Cuotas</div>*/
/*           <!-- Table -->                          */
/*             <table class="table">*/
/*               <thead>*/
/*                 <tr>*/
/*                   */
/*                   <th>*/
/*                     <button class="sort btn" data-sort="anio">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Año*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="mes">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Mes*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="tipo">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Tipo*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="monto">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Monto*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="comision">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Comisión Cobrador*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="fechaAlta">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Fecha de Alta*/
/*                   </th>*/
/*                   <th>Acciones</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="list">*/
/*   	            {% for cuota in cuotas %}*/
/*   	              <tr>*/
/*   	                */
/*   	                <td class="anio">{{cuota.anio}}</td>*/
/*   	                <td class="mes">{{cuota.mes}}</td>*/
/*                     <td class="tipo">{{cuota.tipo}}</td>*/
/*                     <td class="monto">{{cuota.monto}}</td>*/
/*                     <td class="comision">{{cuota.comisionCobrador}}</td>*/
/*                     <td class="fechaAlta">{{cuota.fechaAlta | date("d/m/Y")}}</td>*/
/*                     <td>*/
/*                         <div class="">*/
/*                             <a class="btn btn-primary" href="{{URL.backend_cuota_editar}}?id={{cuota.id}}" title='Editar'>*/
/*                                 <span class='glyphicon glyphicon-pencil' ></span>*/
/*                             </a>*/
/*                             <a class="btn btn-danger" href="{{URL.backend_cuota_eliminar}}?id={{cuota.id}}" title='Eliminar'>*/
/*                                 <span class='glyphicon glyphicon-remove'></span>*/
/*                             </a>       */
/*                         </div>               */
/*                     </td>*/
/*   	              </tr>*/
/*   	            {% endfor %}*/
/*                  */
/*               </tbody>*/
/*                 */
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <ul class="pagination"></ul>*/
/*             </div>*/
/*           */
/*          */
/*           </div>*/
/* */
/*       </div>*/
/* */
/*       <script type="text/javascript">*/
/*         $( document ).ready(function() {*/
/*             var monkeyList = new List('paginacion', {*/
/*               valueNames: ['numero', 'anio','mes','tipo', 'monto', "comision", "fechaAlta"],*/
/*               page: {{paginacion}},*/
/*               plugins: [ ListPagination({}) ] */
/*           });*/
/*         });*/
/*     </script>*/
/* */
/*       */
/* {% endblock %}*/
/* */
