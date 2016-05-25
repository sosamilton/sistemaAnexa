<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagas.html.twig */
class __TwigTemplate_55cc762e2aa211092b521ec090ff53956ecbae8bc08837ebfe20c15a377c899c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagas.html.twig", 1);
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
        $__internal_d03fca4bc399ab1c0a93db595e0bfad8496566bd1457f0b44cb2a97a120d6ad3 = $this->env->getExtension("native_profiler");
        $__internal_d03fca4bc399ab1c0a93db595e0bfad8496566bd1457f0b44cb2a97a120d6ad3->enter($__internal_d03fca4bc399ab1c0a93db595e0bfad8496566bd1457f0b44cb2a97a120d6ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03fca4bc399ab1c0a93db595e0bfad8496566bd1457f0b44cb2a97a120d6ad3->leave($__internal_d03fca4bc399ab1c0a93db595e0bfad8496566bd1457f0b44cb2a97a120d6ad3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_565c0553ddec219d23f8d255984303bcd49ddc00d730a786073e7f9a450f007f = $this->env->getExtension("native_profiler");
        $__internal_565c0553ddec219d23f8d255984303bcd49ddc00d730a786073e7f9a450f007f->enter($__internal_565c0553ddec219d23f8d255984303bcd49ddc00d730a786073e7f9a450f007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Cuotas Impagas";
        
        $__internal_565c0553ddec219d23f8d255984303bcd49ddc00d730a786073e7f9a450f007f->leave($__internal_565c0553ddec219d23f8d255984303bcd49ddc00d730a786073e7f9a450f007f_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_2e34b75c4477cf7ccb7e3720c4ae62a30ab721e0d1969b12cdbd88b7cfd176d6 = $this->env->getExtension("native_profiler");
        $__internal_2e34b75c4477cf7ccb7e3720c4ae62a30ab721e0d1969b12cdbd88b7cfd176d6->enter($__internal_2e34b75c4477cf7ccb7e3720c4ae62a30ab721e0d1969b12cdbd88b7cfd176d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

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
        if ((isset($context["hayCuotasImpagas"]) ? $context["hayCuotasImpagas"] : $this->getContext($context, "hayCuotasImpagas"))) {
            // line 17
            echo "        <a class=\"btn btn-primary botonAdd\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_cuotasImpagasPDF", array()), "html", null, true);
            echo "?anio=";
            echo twig_escape_filter($this->env, (isset($context["anio"]) ? $context["anio"] : $this->getContext($context, "anio")), "html", null, true);
            echo "&mes=";
            echo twig_escape_filter($this->env, (isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "html", null, true);
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
                            <input type=\"checkbox\" name=\"busqueda\" value=\"dni\" checked> 
                            <label>DNI</label>
                        </li>
                        <li role=\"presentation\">
                            <input type=\"checkbox\" name=\"busqueda\" value=\"nombre\" checked> 
                            <label>Nombre</label>
                        </li>
                        <li role=\"presentation\">
                            <input type=\"checkbox\" name=\"busqueda\" value=\"apellido\" checked> 
                            <label>Apellido</label>
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
                                    <button class=\"sort btn\" data-sort=\"id\">
                                        <span class=\"glyphicon glyphicon-sort\"></span>
                                    </button>
                                #
                                </th>
                                <th>
                                    <button class=\"sort btn\" data-sort=\"dni\">
                                        <span class=\"glyphicon glyphicon-sort\"></span>
                                    </button>
                                    DNI
                                </th>
                                <th>
                                    <button class=\"sort btn\" data-sort=\"nombre\">
                                        <span class=\"glyphicon glyphicon-sort\"></span> 
                                    </button>
                                    Nombre
                                </th>
                                <th>
                                    <button class=\"sort btn\" data-sort=\"apellido\">
                                        <span class=\"glyphicon glyphicon-sort\"></span>
                                    </button>
                                    Apellido
                                </th>


                            </tr>
                        </thead>

                        <tbody class=\"list\">
                            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
            foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
                // line 83
                echo "                                <tr>
                                    <th scope=\"row\" class=\"id\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
                echo "</th>
                                    <td class=\"dni\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
                echo "</td>
                                    <td class=\"nombre\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
                echo "</td>
                                    <td class=\"apellido\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
                echo "</td>

                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                        </tbody>
                    </table>

                    <div class=\"col-md-4 col-md-offset-4\">
                        <ul class=\"pagination\"></ul>
                    </div>
                </div>
        </div>
    ";
        }
        // line 100
        echo "    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var monkeyList = new List('paginacion', {
              \tvalueNames: ['nombre','apellido','dni'],
              \tpage: ";
        // line 104
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
        
        $__internal_2e34b75c4477cf7ccb7e3720c4ae62a30ab721e0d1969b12cdbd88b7cfd176d6->leave($__internal_2e34b75c4477cf7ccb7e3720c4ae62a30ab721e0d1969b12cdbd88b7cfd176d6_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 104,  198 => 100,  187 => 91,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  162 => 83,  158 => 82,  94 => 21,  82 => 17,  80 => 16,  77 => 15,  70 => 11,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Cuotas Impagas{% endblock %}*/
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
/*     */
/*     {% if hayCuotasImpagas %}*/
/*         <a class="btn btn-primary botonAdd" href="{{URL.backend_listado_cuotasImpagasPDF}}?anio={{anio}}&mes={{mes}}">Exportar a PDF</a>*/
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
/*                             <input type="checkbox" name="busqueda" value="dni" checked> */
/*                             <label>DNI</label>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <input type="checkbox" name="busqueda" value="nombre" checked> */
/*                             <label>Nombre</label>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <input type="checkbox" name="busqueda" value="apellido" checked> */
/*                             <label>Apellido</label>*/
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
/*                                     <button class="sort btn" data-sort="id">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                 #*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="dni">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     DNI*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="nombre">*/
/*                                         <span class="glyphicon glyphicon-sort"></span> */
/*                                     </button>*/
/*                                     Nombre*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="apellido">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     Apellido*/
/*                                 </th>*/
/* */
/* */
/*                             </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody class="list">*/
/*                             {% for alumno in alumnos %}*/
/*                                 <tr>*/
/*                                     <th scope="row" class="id">{{alumno.id}}</th>*/
/*                                     <td class="dni">{{alumno.dni}}</td>*/
/*                                     <td class="nombre">{{alumno.nombre}}</td>*/
/*                                     <td class="apellido">{{alumno.apellido}}</td>*/
/* */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                     <div class="col-md-4 col-md-offset-4">*/
/*                         <ul class="pagination"></ul>*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
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
