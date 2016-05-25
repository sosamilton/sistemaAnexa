<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:comisionCobrada.html.twig */
class __TwigTemplate_c7bb437e88b892045ada00f73cd8dd346747730e1249d23498a0eaea4ad6db8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:comisionCobrada.html.twig", 1);
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
        $__internal_398b3856a5eab58cdaf4ea63f0e177365c79915144fafc402d8036135d196620 = $this->env->getExtension("native_profiler");
        $__internal_398b3856a5eab58cdaf4ea63f0e177365c79915144fafc402d8036135d196620->enter($__internal_398b3856a5eab58cdaf4ea63f0e177365c79915144fafc402d8036135d196620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:comisionCobrada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398b3856a5eab58cdaf4ea63f0e177365c79915144fafc402d8036135d196620->leave($__internal_398b3856a5eab58cdaf4ea63f0e177365c79915144fafc402d8036135d196620_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89fc4e5805e3465b78fe80c5c94fe12d9be5f4827977359f6a6dbbf00845f6ea = $this->env->getExtension("native_profiler");
        $__internal_89fc4e5805e3465b78fe80c5c94fe12d9be5f4827977359f6a6dbbf00845f6ea->enter($__internal_89fc4e5805e3465b78fe80c5c94fe12d9be5f4827977359f6a6dbbf00845f6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gesti&oacute;n | Comisi&oacute;n cobrada";
        
        $__internal_89fc4e5805e3465b78fe80c5c94fe12d9be5f4827977359f6a6dbbf00845f6ea->leave($__internal_89fc4e5805e3465b78fe80c5c94fe12d9be5f4827977359f6a6dbbf00845f6ea_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_75902f65a75ca25bfe04fbf8eabdaafd8c1724dd580bc791978f4f5d75b30b76 = $this->env->getExtension("native_profiler");
        $__internal_75902f65a75ca25bfe04fbf8eabdaafd8c1724dd580bc791978f4f5d75b30b76->enter($__internal_75902f65a75ca25bfe04fbf8eabdaafd8c1724dd580bc791978f4f5d75b30b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "
  \t";
        // line 7
        if (array_key_exists("msj", $context)) {
            // line 8
            echo "
        <div class=\"alert alert-";
            // line 9
            if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
                echo "success";
            } else {
                echo "danger";
            }
            echo " alert-dismissible fade in\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          <strong>Atenci&oacute;n! </strong>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>

    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((isset($context["hayCuotasCobradas"]) ? $context["hayCuotasCobradas"] : $this->getContext($context, "hayCuotasCobradas"))) {
            // line 17
            echo "        <a class=\"btn btn-primary botonAdd\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_comisionCobradaPDF", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">Exportar a PDF</a>

        <div class=\"panel panel-primary\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "html", null, true);
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
                            <input type=\"checkbox\" name=\"busqueda\" value=\"año\" checked> 
                            <label>An&ntilde;o</label>
                        </li>
                        <li role=\"presentation\">
                            <input type=\"checkbox\" name=\"busqueda\" value=\"mes\" checked> 
                            <label>Mes</label>
                        </li>
                      </ul>
                    </div>
                    <input type=\"text\" class=\"input-busqueda form-control\" placeholder=\"Inicie su búsqueda aquí\" />
                    <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-search\"></span></div>

                </div>           

                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>
                                    <button class=\"sort btn\" data-sort=\"año\">
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
                                    <button class=\"sort btn\" data-sort=\"montoCuota\">
                                        <span class=\"glyphicon glyphicon-sort\"></span>
                                    </button>
                                    Monto Cuota
                                </th>
                                <th>
                                    <button class=\"sort btn\" data-sort=\"comision\">
                                        <span class=\"glyphicon glyphicon-sort\"></span> 
                                    </button>
                                    Porcentaje Comisi&oacute;n
                                </th>
                                <th>
                                    <button class=\"sort btn\" data-sort=\"monto\">
                                        <span class=\"glyphicon glyphicon-sort\"></span>
                                    </button>
                                    Monto Cobrado
                                </th>
                            </tr>
                        </thead>

                        <tbody class=\"list\">
                            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) ? $context["cuotas"] : $this->getContext($context, "cuotas")));
            foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
                // line 83
                echo "                                <tr>
                                    
                                    <td class=\"año\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "anio", array()), "html", null, true);
                echo "</td>
                                    <td class=\"mes\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "mes", array()), "html", null, true);
                echo "</td>
                                    <td class=\"montoCuota\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "monto", array()), "html", null, true);
                echo "</td> 
                                    <td class=\"comision\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "comisionCobrador", array()), "html", null, true);
                echo "</td>
                                    <td class=\"monto\">";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "montoCobrado", array()), "html", null, true);
                echo "</td> 
                                                                     
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </tbody>
                    </table>

                    <div class=\"col-md-4 col-md-offset-4\">
                        <ul class=\"pagination\"></ul>
                    </div>
                </div>
            <div class=\"panel-footer\">          
                <div class=\"col-md-4 col-md-offset-4\">
                    <div class=\"label-group label-group-sm col-md-32\" role=\"group\" >
                      Total Cobrado <span class=\"label label-success col-md-32\">";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</button>
                    </div>
                </div>                   
            </div>
    </div>
    ";
        }
        // line 109
        echo "    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var monkeyList = new List('paginacion', {
              \tvalueNames: ['nombre','apellido','dni'],
              \tpage: ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")), "html", null, true);
        echo ",
              \tplugins: [ ListPagination({}) ] 
          \t});

          \t\$(\".input-busqueda\").keyup(function(){
              \tfiltros = [];
              \t\$(\"input[name='busqueda']:checked\").each(function() {
                  \tfiltros.push(\$(this).val());
              \t});
              \tmonkeyList.search(\$(this).val(), filtros)
          \t});
        });
        
    </script>
";
        
        $__internal_75902f65a75ca25bfe04fbf8eabdaafd8c1724dd580bc791978f4f5d75b30b76->leave($__internal_75902f65a75ca25bfe04fbf8eabdaafd8c1724dd580bc791978f4f5d75b30b76_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:comisionCobrada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 113,  211 => 109,  202 => 103,  190 => 93,  180 => 89,  176 => 88,  172 => 87,  168 => 86,  164 => 85,  160 => 83,  156 => 82,  92 => 21,  82 => 17,  80 => 16,  77 => 15,  70 => 11,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Gesti&oacute;n | Comisi&oacute;n cobrada{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/* */
/*   	{% if msj is defined %}*/
/* */
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atenci&oacute;n! </strong>{{msj}}*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% if hayCuotasCobradas %}*/
/*         <a class="btn btn-primary botonAdd" href="{{URL.backend_listado_comisionCobradaPDF}}?id={{id}}">Exportar a PDF</a>*/
/* */
/*         <div class="panel panel-primary">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading">{{info}}</div>*/
/*                 <!-- Table -->*/
/*                 <div class="panel-body" id="paginacion">*/
/*                      <div class="input-group col-md-12">*/
/*                     <div class="input-group-addon">*/
/*                       <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/*                         <span class="glyphicon glyphicon-filter"></span>*/
/*                       </button>*/
/*                       <ul class="dropdown-menu" role="menu" aria-labelledby="opcionesDeFiltrado" style="padding:10px;">*/
/*                         <li role="presentation">*/
/*                             <input type="checkbox" name="busqueda" value="año" checked> */
/*                             <label>An&ntilde;o</label>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <input type="checkbox" name="busqueda" value="mes" checked> */
/*                             <label>Mes</label>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/*                     <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/* */
/*                 </div>           */
/* */
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="año">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                 A&ntilde;o*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="mes">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     Mes*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="montoCuota">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     Monto Cuota*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="comision">*/
/*                                         <span class="glyphicon glyphicon-sort"></span> */
/*                                     </button>*/
/*                                     Porcentaje Comisi&oacute;n*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="monto">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     Monto Cobrado*/
/*                                 </th>*/
/*                             </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody class="list">*/
/*                             {% for cuota in cuotas %}*/
/*                                 <tr>*/
/*                                     */
/*                                     <td class="año">{{cuota.data.anio}}</td>*/
/*                                     <td class="mes">{{cuota.data.mes}}</td>*/
/*                                     <td class="montoCuota">{{cuota.data.monto}}</td> */
/*                                     <td class="comision">{{cuota.data.comisionCobrador}}</td>*/
/*                                     <td class="monto">{{cuota.montoCobrado}}</td> */
/*                                                                      */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                     <div class="col-md-4 col-md-offset-4">*/
/*                         <ul class="pagination"></ul>*/
/*                     </div>*/
/*                 </div>*/
/*             <div class="panel-footer">          */
/*                 <div class="col-md-4 col-md-offset-4">*/
/*                     <div class="label-group label-group-sm col-md-32" role="group" >*/
/*                       Total Cobrado <span class="label label-success col-md-32">{{total}}</button>*/
/*                     </div>*/
/*                 </div>                   */
/*             </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     <script type="text/javascript">*/
/*         $( document ).ready(function() {*/
/*             var monkeyList = new List('paginacion', {*/
/*               	valueNames: ['nombre','apellido','dni'],*/
/*               	page: {{paginacion}},*/
/*               	plugins: [ ListPagination({}) ] */
/*           	});*/
/* */
/*           	$(".input-busqueda").keyup(function(){*/
/*               	filtros = [];*/
/*               	$("input[name='busqueda']:checked").each(function() {*/
/*                   	filtros.push($(this).val());*/
/*               	});*/
/*               	monkeyList.search($(this).val(), filtros)*/
/*           	});*/
/*         });*/
/*         */
/*     </script>*/
/* {% endblock %}*/
