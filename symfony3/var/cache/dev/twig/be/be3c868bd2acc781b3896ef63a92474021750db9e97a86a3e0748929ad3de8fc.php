<?php

/* AnexaCooperadoraBundle:backend/viejo/pago:listarPagos.html.twig */
class __TwigTemplate_1476ba1974195646135552741b375fb30951808927f19ac25dee63575f14ea83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/pago:listarPagos.html.twig", 1);
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
        $__internal_fbc0795e2804715989eeddf7078e816dba7f37b549212c720fa8d7b1addab4d8 = $this->env->getExtension("native_profiler");
        $__internal_fbc0795e2804715989eeddf7078e816dba7f37b549212c720fa8d7b1addab4d8->enter($__internal_fbc0795e2804715989eeddf7078e816dba7f37b549212c720fa8d7b1addab4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/pago:listarPagos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc0795e2804715989eeddf7078e816dba7f37b549212c720fa8d7b1addab4d8->leave($__internal_fbc0795e2804715989eeddf7078e816dba7f37b549212c720fa8d7b1addab4d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89320533fa1b399783a873a83cbe511e140cc9784215d734c63e521825e33809 = $this->env->getExtension("native_profiler");
        $__internal_89320533fa1b399783a873a83cbe511e140cc9784215d734c63e521825e33809->enter($__internal_89320533fa1b399783a873a83cbe511e140cc9784215d734c63e521825e33809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Cuotas | Ver";
        
        $__internal_89320533fa1b399783a873a83cbe511e140cc9784215d734c63e521825e33809->leave($__internal_89320533fa1b399783a873a83cbe511e140cc9784215d734c63e521825e33809_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_bceede1d80e9eaea8dbd2a88a918017bb91b0e2e1bb0428abe6284a043ab96fc = $this->env->getExtension("native_profiler");
        $__internal_bceede1d80e9eaea8dbd2a88a918017bb91b0e2e1bb0428abe6284a043ab96fc->enter($__internal_bceede1d80e9eaea8dbd2a88a918017bb91b0e2e1bb0428abe6284a043ab96fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    ";
        if (array_key_exists("msjImpagas", $context)) {
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
            echo twig_escape_filter($this->env, (isset($context["msjImpagas"]) ? $context["msjImpagas"] : $this->getContext($context, "msjImpagas")), "html", null, true);
            echo "           
        </div>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (array_key_exists("msjPagas", $context)) {
            // line 14
            echo "        <div class=\"alert alert-";
            if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
                echo "success";
            } else {
                echo "danger";
            }
            echo " alert-dismissible fade in\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          <strong>Atenci&oacute;n! </strong>";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["msjPagas"]) ? $context["msjPagas"] : $this->getContext($context, "msjPagas")), "html", null, true);
            echo "           
        </div>
    ";
        }
        // line 19
        echo "    
    ";
        // line 20
        if ((isset($context["tieneCuotasImpagas"]) ? $context["tieneCuotasImpagas"] : $this->getContext($context, "tieneCuotasImpagas"))) {
            // line 21
            echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Listado de Cuotas Impagas | ";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()) . " ") . $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellido", array())), "html", null, true);
            echo "</div>
          <!-- Table -->
          <div class=\"panel-body\" id=\"paginacion\">

            <div class=\"input-group col-md-12\">
                <div class=\"input-group-addon\">
                  <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                    <span class=\"glyphicon glyphicon-filter\"></span>
                  </button>
                  <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"opcionesDeFiltrado\" style=\"padding:10px;\">
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"numero\" checked> 
                        <label>N&uacute;mero</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"anio\" checked> 
                        <label>A&ntilde;o</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"mes\" checked> 
                        <label>Mes</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"tipo\" checked> 
                        <label>Tipo</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"monto\" checked> 
                        <label>Monto</label>
                    </li>
                  </ul>
                </div>
                <input type=\"text\" class=\"input-busqueda form-control\" placeholder=\"Inicie su búsqueda aquí\" />
                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-search\"></span></div>
            </div> 
              
            
              
              
            <table class=\"table table-hover\">
              <thead>
                <tr>
                  
                  <th>
                    <button class=\"sort btn\" data-sort=\"anio\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    A&ntilde;o
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"mes\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Mes
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"numero\">
                        <span class=\"glyphicon glyphicon-sort\"></span> 
                    </button>
                    N&uacute;mero
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
                  
                  <th>Pagar</th>
                  <th>Becar</th>
                </tr>
              </thead>
              <tbody class=\"list\">
  \t            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cuotasImpagas"]) ? $context["cuotasImpagas"] : $this->getContext($context, "cuotasImpagas")));
            foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
                // line 103
                echo "  \t              <tr>
  \t                <td class=\"anio\">";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "anio", array()), "html", null, true);
                echo "</td>
  \t                <td class=\"mes\">";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "mes", array()), "html", null, true);
                echo "</td>
                    <td class=\"numero\">";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "numero", array()), "html", null, true);
                echo "</td>
                    <td class=\"tipo\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "tipo", array()), "html", null, true);
                echo "</td>
                    <td class=\"monto\">";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "monto", array()), "html", null, true);
                echo "</td>
                    <td>
                        <div class=\"pagar btn btn-primary\" id=\"pagar_";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "id", array()), "html", null, true);
                echo "\" cuota-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "id", array()), "html", null, true);
                echo "\" title='pagar'>
                            <span class='glyphicon glyphicon-ok' ></span>
                        </div>      
                    </td>
                    <td>
                        <div class=\"becar btn btn-primary\" id=\"becar_";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "id", array()), "html", null, true);
                echo "\" cuota-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "id", array()), "html", null, true);
                echo "\" title='becar'>
                            <span class='glyphicon glyphicon-ok' ></span>
                        </div>      
                    </td>
  \t              </tr>
  \t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "              </tbody>
            </table>
            <div class=\"col-md-4 col-md-offset-4\">
                <ul class=\"pagination\"></ul>
            </div>
          </div>
          <div class=\"panel-footer\">

            <div class=\"col-md-4\">
                Total a Pagar <span class=\"label label-danger\" id=\"totalAPagar\">0</span>
            </div>

            <div class=\"col-md-4\">
                Total Seleccionado<span class=\"label label-success\" id=\"totalSeleccionado\">0</span>
            </div>

            <div class=\"col-md-4\">
                <div class=\"btn-group btn-group-sm col-md-12\" role=\"group\" >
                  <button type=\"button\" id=\"pagarSeleccion\" class=\"btn btn-danger col-md-12\">Pagar</button>
                </div>
            </div>
          </div>
          <form id=\"formulario\" action=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_pago_seleccionado", array()), "html", null, true);
            echo "\" method=\"post\">
              
              ";
            // line 145
            if ((isset($context["is_admin"]) ? $context["is_admin"] : $this->getContext($context, "is_admin"))) {
                // line 146
                echo "                <div class=\"form-group\">
                    <div class=\"col-md-4\">
                          <label for=\"user\">Usuarios de Gesti&oacute;n</label>
                          <select class=\"form-control\" name=\"userId\" required>
                            ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["usuariosGestion"]) ? $context["usuariosGestion"] : $this->getContext($context, "usuariosGestion")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 151
                    echo "                              <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                          </select>
                    </div>
                </div>
            ";
            }
            // line 157
            echo "             
            <input type=\"hidden\" name=\"alumnoId\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "id", array()), "html", null, true);
            echo "\">
            <div id=\"inputs\">
               
            </div>
          </form>
      </div>
    ";
        }
        // line 165
        echo "    
<!-- ##################################### cuotas pagas ################################### -->
    
    ";
        // line 168
        if ((isset($context["tieneCuotasPagas"]) ? $context["tieneCuotasPagas"] : $this->getContext($context, "tieneCuotasPagas"))) {
            // line 169
            echo "      <div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Listado de Cuotas Pagas | ";
            // line 171
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()) . " ") . $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellido", array())), "html", null, true);
            echo "</div>
          <!-- Table -->
          <div class=\"panel-body\" id=\"paginacion\">
              <div class=\"input-group col-md-12\">
                <div class=\"input-group-addon\">
                  <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                    <span class=\"glyphicon glyphicon-filter\"></span>
                  </button>
                  <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"opcionesDeFiltrado\" style=\"padding:10px;\">
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"numero\" checked> 
                        <label>Numero</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"anio\" checked> 
                        <label>Añoo</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"mes\" checked> 
                        <label>Mes</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"tipo\" checked> 
                        <label>Tipo</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"monto\" checked> 
                        <label>Monto</label>
                    </li>
                  </ul>
                </div>
                <input type=\"text\" class=\"input-busqueda form-control\" placeholder=\"Inicie su búsqueda aquí\" />
                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-search\"></span></div>

            </div>       
                                    

            <table class=\"table table-hover\">
              <thead>
                <tr>                
                  <th>
                    <button class=\"sort btn\" data-sort=\"anio\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    A&ntilde;o
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"mes\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Mes
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"numero\">
                        <span class=\"glyphicon glyphicon-sort\"></span> 
                    </button>
                    N&uacute;mero
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"tipo\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Tipo
                  </th>
                    <th>
                    <button class=\"sort btn\" data-sort=\"becado\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Becado
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"monto\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Monto
                  </th>
                  
                </tr>
              </thead>
              <tbody class=\"list\">
                ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cuotasPagas"]) ? $context["cuotasPagas"] : $this->getContext($context, "cuotasPagas")));
            foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
                // line 252
                echo "                  <tr>                 
                    <td class=\"anio\">";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "anio", array()), "html", null, true);
                echo "</td>
                    <td class=\"mes\">";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "mes", array()), "html", null, true);
                echo "</td>
                    <td class=\"numero\">";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "numero", array()), "html", null, true);
                echo "</td>
                    <td class=\"tipo\">";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "tipo", array()), "html", null, true);
                echo "</td>
                    <td class=\"becado\">";
                // line 257
                if ($this->getAttribute($context["cuota"], "beca", array())) {
                    echo " si ";
                } else {
                    echo " no ";
                }
                echo "</td>
                    <td class=\"monto\">";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "monto", array()), "html", null, true);
                echo "</td>                    
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "              </tbody>
            </table>
            <div class=\"col-md-4 col-md-offset-4\">
                <ul class=\"pagination\"></ul>
            </div>
          </div>
      </div>
    ";
        }
        // line 269
        echo "
      <script type=\"text/javascript\">
        \$( document ).ready(function() {

          var total=0;
          \$(\".monto\").each(function() {
            total += parseFloat(\$(this).text());
          });

          \$('#totalAPagar').text('\$ '+ total);

          \$('.pagar').click(function(){
            \$(this).toggleClass(\"btn-primary btn-danger\");
            \$(this).children().toggleClass(\"glyphicon-ok glyphicon-remove\");
            var id = \$(this).attr('cuota-id');
            var monto = \$(this).parent().parent().find('.monto').text();
            if (\$('#beca_'+id).length){
              \$('#beca_'+id).remove();
            }
            if (\$('#cuota_'+id).length){
              \$('#cuota_'+id).remove();
            }else{
              var text = \"<input type='hidden' name='coutas[]' class='cuotaAPagar' id='cuota_\"+id+\"'' monto='\"+monto+\"' value='\"+id+\"'>\";
              \$('#inputs').append(text);
            }
            actualizarSubtotal();
          });

          \$('.becar').click(function(){
            \$(this).toggleClass(\"btn-primary btn-danger\");
            \$(this).children().toggleClass(\"glyphicon-ok glyphicon-remove\");
            var id = \$(this).attr('cuota-id');
            var monto = \$(this).parent().parent().find('.monto').text();
            console.log(\$('#pagar_'+id));
            \$('#pagar_'+id).toggleClass(\"btn-primary btn-danger\");
            \$('#pagar_'+id).children().toggleClass(\"glyphicon-ok glyphicon-remove\");
            if (\$('#cuota_'+id).length){
              \$('#cuota_'+id).remove();
            }
            if (\$('#beca_'+id).length){
              \$('#beca_'+id).remove();
            }else{
              var text = \"<input type='hidden' name='becas[]' class='cuotaABecar' id='beca_\"+id+\"'' monto='\"+monto+\"' value='\"+id+\"'>\";
              \$('#inputs').append(text);
            }
            actualizarSubtotal();
          });

          \$('#pagarSeleccion').click(function(){
            var r = confirm(\"Está seguro que desea realizar el pago?\");
            if (r == true) {
                \$('#formulario').submit();
            }
          });

          var monkeyList = new List('paginacion', {
              valueNames: [ 'anio','mes','numero','tipo', 'monto', \"comision\", \"fechaAlta\"],
              page: ";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")), "html", null, true);
        echo ",
              plugins: [ ListPagination({}) ] 
          });

          \$(\".input-busqueda\").keyup(function(){
              filtros = [];
              \$(\"input[name='busqueda']:checked\").each(function() {
                  filtros.push(\$(this).val());
              });
              monkeyList.search(\$(this).val(), filtros)
          });
        

        });
        
        function actualizarSubtotal(){
          var total=0;
          \$(\".cuotaAPagar\").each(function() {
            total += parseFloat(\$(this).attr('monto'));
          });
          \$('#totalSeleccionado').text('\$ '+ total);
        }
        
    </script>
";
        
        $__internal_bceede1d80e9eaea8dbd2a88a918017bb91b0e2e1bb0428abe6284a043ab96fc->leave($__internal_bceede1d80e9eaea8dbd2a88a918017bb91b0e2e1bb0428abe6284a043ab96fc_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/pago:listarPagos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 326,  451 => 269,  441 => 261,  432 => 258,  424 => 257,  420 => 256,  416 => 255,  412 => 254,  408 => 253,  405 => 252,  401 => 251,  318 => 171,  314 => 169,  312 => 168,  307 => 165,  297 => 158,  294 => 157,  288 => 153,  277 => 151,  273 => 150,  267 => 146,  265 => 145,  260 => 143,  236 => 121,  222 => 115,  212 => 110,  207 => 108,  203 => 107,  199 => 106,  195 => 105,  191 => 104,  188 => 103,  184 => 102,  102 => 23,  98 => 21,  96 => 20,  93 => 19,  87 => 16,  77 => 14,  75 => 13,  72 => 12,  66 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administración | Cuotas | Ver{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     {% if msjImpagas is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atenci&oacute;n! </strong>{{msjImpagas}}           */
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if msjPagas is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atenci&oacute;n! </strong>{{msjPagas}}           */
/*         </div>*/
/*     {% endif %}*/
/*     */
/*     {% if tieneCuotasImpagas %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Listado de Cuotas Impagas | {{alumno.nombre ~ " " ~ alumno.apellido}}</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body" id="paginacion">*/
/* */
/*             <div class="input-group col-md-12">*/
/*                 <div class="input-group-addon">*/
/*                   <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/*                     <span class="glyphicon glyphicon-filter"></span>*/
/*                   </button>*/
/*                   <ul class="dropdown-menu" role="menu" aria-labelledby="opcionesDeFiltrado" style="padding:10px;">*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="numero" checked> */
/*                         <label>N&uacute;mero</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="anio" checked> */
/*                         <label>A&ntilde;o</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="mes" checked> */
/*                         <label>Mes</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="tipo" checked> */
/*                         <label>Tipo</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="monto" checked> */
/*                         <label>Monto</label>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/*                 <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/*             </div> */
/*               */
/*             */
/*               */
/*               */
/*             <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   */
/*                   <th>*/
/*                     <button class="sort btn" data-sort="anio">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     A&ntilde;o*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="mes">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Mes*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="numero">*/
/*                         <span class="glyphicon glyphicon-sort"></span> */
/*                     </button>*/
/*                     N&uacute;mero*/
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
/*                   */
/*                   <th>Pagar</th>*/
/*                   <th>Becar</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="list">*/
/*   	            {% for cuota in cuotasImpagas %}*/
/*   	              <tr>*/
/*   	                <td class="anio">{{cuota.anio}}</td>*/
/*   	                <td class="mes">{{cuota.mes}}</td>*/
/*                     <td class="numero">{{cuota.numero}}</td>*/
/*                     <td class="tipo">{{cuota.tipo}}</td>*/
/*                     <td class="monto">{{cuota.monto}}</td>*/
/*                     <td>*/
/*                         <div class="pagar btn btn-primary" id="pagar_{{cuota.id}}" cuota-id="{{cuota.id}}" title='pagar'>*/
/*                             <span class='glyphicon glyphicon-ok' ></span>*/
/*                         </div>      */
/*                     </td>*/
/*                     <td>*/
/*                         <div class="becar btn btn-primary" id="becar_{{cuota.id}}" cuota-id="{{cuota.id}}" title='becar'>*/
/*                             <span class='glyphicon glyphicon-ok' ></span>*/
/*                         </div>      */
/*                     </td>*/
/*   	              </tr>*/
/*   	            {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <ul class="pagination"></ul>*/
/*             </div>*/
/*           </div>*/
/*           <div class="panel-footer">*/
/* */
/*             <div class="col-md-4">*/
/*                 Total a Pagar <span class="label label-danger" id="totalAPagar">0</span>*/
/*             </div>*/
/* */
/*             <div class="col-md-4">*/
/*                 Total Seleccionado<span class="label label-success" id="totalSeleccionado">0</span>*/
/*             </div>*/
/* */
/*             <div class="col-md-4">*/
/*                 <div class="btn-group btn-group-sm col-md-12" role="group" >*/
/*                   <button type="button" id="pagarSeleccion" class="btn btn-danger col-md-12">Pagar</button>*/
/*                 </div>*/
/*             </div>*/
/*           </div>*/
/*           <form id="formulario" action="{{URL.backend_pago_seleccionado}}" method="post">*/
/*               */
/*               {% if is_admin %}*/
/*                 <div class="form-group">*/
/*                     <div class="col-md-4">*/
/*                           <label for="user">Usuarios de Gesti&oacute;n</label>*/
/*                           <select class="form-control" name="userId" required>*/
/*                             {% for user in usuariosGestion %}*/
/*                               <option value="{{user.id}}">{{user.username}}</option>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*              */
/*             <input type="hidden" name="alumnoId" value="{{alumno.id}}">*/
/*             <div id="inputs">*/
/*                */
/*             </div>*/
/*           </form>*/
/*       </div>*/
/*     {% endif %}*/
/*     */
/* <!-- ##################################### cuotas pagas ################################### -->*/
/*     */
/*     {% if tieneCuotasPagas %}*/
/*       <div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Listado de Cuotas Pagas | {{alumno.nombre ~ " " ~ alumno.apellido}}</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body" id="paginacion">*/
/*               <div class="input-group col-md-12">*/
/*                 <div class="input-group-addon">*/
/*                   <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/*                     <span class="glyphicon glyphicon-filter"></span>*/
/*                   </button>*/
/*                   <ul class="dropdown-menu" role="menu" aria-labelledby="opcionesDeFiltrado" style="padding:10px;">*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="numero" checked> */
/*                         <label>Numero</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="anio" checked> */
/*                         <label>Añoo</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="mes" checked> */
/*                         <label>Mes</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="tipo" checked> */
/*                         <label>Tipo</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="monto" checked> */
/*                         <label>Monto</label>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/*                 <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/* */
/*             </div>       */
/*                                     */
/* */
/*             <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr>                */
/*                   <th>*/
/*                     <button class="sort btn" data-sort="anio">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     A&ntilde;o*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="mes">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Mes*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="numero">*/
/*                         <span class="glyphicon glyphicon-sort"></span> */
/*                     </button>*/
/*                     N&uacute;mero*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="tipo">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Tipo*/
/*                   </th>*/
/*                     <th>*/
/*                     <button class="sort btn" data-sort="becado">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Becado*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="monto">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Monto*/
/*                   </th>*/
/*                   */
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="list">*/
/*                 {% for cuota in cuotasPagas %}*/
/*                   <tr>                 */
/*                     <td class="anio">{{cuota.data.anio}}</td>*/
/*                     <td class="mes">{{cuota.data.mes}}</td>*/
/*                     <td class="numero">{{cuota.data.numero}}</td>*/
/*                     <td class="tipo">{{cuota.data.tipo}}</td>*/
/*                     <td class="becado">{% if cuota.beca %} si {% else %} no {% endif %}</td>*/
/*                     <td class="monto">{{cuota.data.monto}}</td>                    */
/*                   </tr>*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <ul class="pagination"></ul>*/
/*             </div>*/
/*           </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*       <script type="text/javascript">*/
/*         $( document ).ready(function() {*/
/* */
/*           var total=0;*/
/*           $(".monto").each(function() {*/
/*             total += parseFloat($(this).text());*/
/*           });*/
/* */
/*           $('#totalAPagar').text('$ '+ total);*/
/* */
/*           $('.pagar').click(function(){*/
/*             $(this).toggleClass("btn-primary btn-danger");*/
/*             $(this).children().toggleClass("glyphicon-ok glyphicon-remove");*/
/*             var id = $(this).attr('cuota-id');*/
/*             var monto = $(this).parent().parent().find('.monto').text();*/
/*             if ($('#beca_'+id).length){*/
/*               $('#beca_'+id).remove();*/
/*             }*/
/*             if ($('#cuota_'+id).length){*/
/*               $('#cuota_'+id).remove();*/
/*             }else{*/
/*               var text = "<input type='hidden' name='coutas[]' class='cuotaAPagar' id='cuota_"+id+"'' monto='"+monto+"' value='"+id+"'>";*/
/*               $('#inputs').append(text);*/
/*             }*/
/*             actualizarSubtotal();*/
/*           });*/
/* */
/*           $('.becar').click(function(){*/
/*             $(this).toggleClass("btn-primary btn-danger");*/
/*             $(this).children().toggleClass("glyphicon-ok glyphicon-remove");*/
/*             var id = $(this).attr('cuota-id');*/
/*             var monto = $(this).parent().parent().find('.monto').text();*/
/*             console.log($('#pagar_'+id));*/
/*             $('#pagar_'+id).toggleClass("btn-primary btn-danger");*/
/*             $('#pagar_'+id).children().toggleClass("glyphicon-ok glyphicon-remove");*/
/*             if ($('#cuota_'+id).length){*/
/*               $('#cuota_'+id).remove();*/
/*             }*/
/*             if ($('#beca_'+id).length){*/
/*               $('#beca_'+id).remove();*/
/*             }else{*/
/*               var text = "<input type='hidden' name='becas[]' class='cuotaABecar' id='beca_"+id+"'' monto='"+monto+"' value='"+id+"'>";*/
/*               $('#inputs').append(text);*/
/*             }*/
/*             actualizarSubtotal();*/
/*           });*/
/* */
/*           $('#pagarSeleccion').click(function(){*/
/*             var r = confirm("Está seguro que desea realizar el pago?");*/
/*             if (r == true) {*/
/*                 $('#formulario').submit();*/
/*             }*/
/*           });*/
/* */
/*           var monkeyList = new List('paginacion', {*/
/*               valueNames: [ 'anio','mes','numero','tipo', 'monto', "comision", "fechaAlta"],*/
/*               page: {{paginacion}},*/
/*               plugins: [ ListPagination({}) ] */
/*           });*/
/* */
/*           $(".input-busqueda").keyup(function(){*/
/*               filtros = [];*/
/*               $("input[name='busqueda']:checked").each(function() {*/
/*                   filtros.push($(this).val());*/
/*               });*/
/*               monkeyList.search($(this).val(), filtros)*/
/*           });*/
/*         */
/* */
/*         });*/
/*         */
/*         function actualizarSubtotal(){*/
/*           var total=0;*/
/*           $(".cuotaAPagar").each(function() {*/
/*             total += parseFloat($(this).attr('monto'));*/
/*           });*/
/*           $('#totalSeleccionado').text('$ '+ total);*/
/*         }*/
/*         */
/*     </script>*/
/* {% endblock %}*/
/* */
