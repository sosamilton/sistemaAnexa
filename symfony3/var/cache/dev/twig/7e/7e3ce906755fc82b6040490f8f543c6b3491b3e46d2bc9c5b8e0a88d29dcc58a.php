<?php

/* AnexaCooperadoraBundle:backend/viejo/alumno:index.html.twig */
class __TwigTemplate_a6c2c3067a87edf7933a13c03e91ced005cedbd0ea39cf2bac04b8a98d3ac986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/alumno:index.html.twig", 1);
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
        $__internal_884d04396378b902c5aa7115558347bfb4690f311b27f674c837e3030d78f432 = $this->env->getExtension("native_profiler");
        $__internal_884d04396378b902c5aa7115558347bfb4690f311b27f674c837e3030d78f432->enter($__internal_884d04396378b902c5aa7115558347bfb4690f311b27f674c837e3030d78f432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/alumno:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884d04396378b902c5aa7115558347bfb4690f311b27f674c837e3030d78f432->leave($__internal_884d04396378b902c5aa7115558347bfb4690f311b27f674c837e3030d78f432_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_368271b115e77aa22d1399c966242cdd1d8dee8fba1048116d11addadde7af2e = $this->env->getExtension("native_profiler");
        $__internal_368271b115e77aa22d1399c966242cdd1d8dee8fba1048116d11addadde7af2e->enter($__internal_368271b115e77aa22d1399c966242cdd1d8dee8fba1048116d11addadde7af2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Alumnos";
        
        $__internal_368271b115e77aa22d1399c966242cdd1d8dee8fba1048116d11addadde7af2e->leave($__internal_368271b115e77aa22d1399c966242cdd1d8dee8fba1048116d11addadde7af2e_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_4a0efa8b6ab4ba4c7762d0da5b80b881a084eb2ad6707ea318dca2aa5a61bcd2 = $this->env->getExtension("native_profiler");
        $__internal_4a0efa8b6ab4ba4c7762d0da5b80b881a084eb2ad6707ea318dca2aa5a61bcd2->enter($__internal_4a0efa8b6ab4ba4c7762d0da5b80b881a084eb2ad6707ea318dca2aa5a61bcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "rol", array()) != "Consulta")) {
            // line 7
            echo "      ";
            if (array_key_exists("msj", $context)) {
                // line 8
                echo "        <div class=\"alert alert-";
                if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
                    echo "success";
                } else {
                    echo "danger";
                }
                echo " alert-dismissible fade in\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          <strong>Atención!</strong>";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 13
            echo "      ";
            if (($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "rol", array()) == "Administracion")) {
                // line 14
                echo "        <a class=\"btn btn-primary botonAdd\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_alumno_agregar", array()), "html", null, true);
                echo "\" role=\"button\">Agregar Alumno</a>
      ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Listado de Alumnos</div>
          <!-- Table -->
          <div class=\"panel-body\" id=\"paginacion\">

            <div class=\"input-group col-md-12\">
                <div class=\"input-group-addon\">
                  <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                    <span class=\"glyphicon glyphicon-filter\"></span>
                  </button>
                  <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"opcionesDeFiltrado\" style=\"padding:10px;\">
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"nombre\" checked> 
                        <label>Nombre</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"apellido\" checked> 
                        <label>Apellido</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"dni\" checked> 
                        <label>DNI</label>
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
                  <th>
                    <button class=\"sort btn\" data-sort=\"dni\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    DNI
                  </th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody class=\"list\">
  \t            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 80
            echo "  \t              <tr>
  \t                <th scope=\"row\" class=\"id\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</th>
  \t                <td class=\"nombre\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
  \t                <td class=\"apellido\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
            echo "</td>
  \t                <td class=\"dni\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"\">
                            <a class=\"btn btn-success\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_alumno_ver", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\" title='Ver'>
                                <span class='glyphicon glyphicon-eye-open'></span>
                            </a>
                            ";
            // line 90
            if (($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "rol", array()) != "Consulta")) {
                // line 91
                echo "                                <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_alumno_editar", array()), "html", null, true);
                echo "?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
                echo "\" title='Editar'>
                                    <span class='glyphicon glyphicon-pencil' ></span>
                                </a>
                                ";
                // line 94
                if (($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "rol", array()) != "Gestion")) {
                    // line 95
                    echo "                                  <a class=\"btn btn-danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_alumno_eliminar", array()), "html", null, true);
                    echo "?id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
                    echo "\" title='Eliminar'>
                                      <span class='glyphicon glyphicon-remove'></span>
                                  </a>       
                                ";
                }
                // line 98
                echo "   
                            ";
            }
            // line 99
            echo "   
                        </div>               
                    </td>
  \t              </tr>
  \t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "              </tbody>
            </table>
            <div class=\"col-md-4 col-md-offset-4\">
                <ul class=\"pagination\"></ul>
            </div>
          </div>
      </div>
      <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var monkeyList = new List('paginacion', {
              valueNames: ['id', 'nombre','apellido','dni'],
              page: ";
        // line 115
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
        
    </script>
";
        
        $__internal_4a0efa8b6ab4ba4c7762d0da5b80b881a084eb2ad6707ea318dca2aa5a61bcd2->leave($__internal_4a0efa8b6ab4ba4c7762d0da5b80b881a084eb2ad6707ea318dca2aa5a61bcd2_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/alumno:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 115,  221 => 104,  211 => 99,  207 => 98,  197 => 95,  195 => 94,  186 => 91,  184 => 90,  176 => 87,  170 => 84,  166 => 83,  162 => 82,  158 => 81,  155 => 80,  151 => 79,  87 => 17,  84 => 16,  78 => 14,  75 => 13,  69 => 10,  59 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Alumnos{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     {% if session.rol != "Consulta" %}*/
/*       {% if msj is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atención!</strong>{{msj}}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if session.rol == "Administracion" %}*/
/*         <a class="btn btn-primary botonAdd" href="{{URL.backend_alumno_agregar}}" role="button">Agregar Alumno</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Listado de Alumnos</div>*/
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
/*                         <input type="checkbox" name="busqueda" value="nombre" checked> */
/*                         <label>Nombre</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="apellido" checked> */
/*                         <label>Apellido</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="dni" checked> */
/*                         <label>DNI</label>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/*                 <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/* */
/*             </div>                                      */
/* */
/*             <table class="table">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="id">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     #*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="nombre">*/
/*                         <span class="glyphicon glyphicon-sort"></span> */
/*                     </button>*/
/*                     Nombre*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="apellido">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Apellido*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="dni">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     DNI*/
/*                   </th>*/
/*                   <th>Acciones</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="list">*/
/*   	            {% for alumno in alumnos %}*/
/*   	              <tr>*/
/*   	                <th scope="row" class="id">{{alumno.id}}</th>*/
/*   	                <td class="nombre">{{alumno.nombre}}</td>*/
/*   	                <td class="apellido">{{alumno.apellido}}</td>*/
/*   	                <td class="dni">{{alumno.dni}}</td>*/
/*                     <td>*/
/*                         <div class="">*/
/*                             <a class="btn btn-success" href="{{URL.backend_alumno_ver}}?id={{alumno.id}}" title='Ver'>*/
/*                                 <span class='glyphicon glyphicon-eye-open'></span>*/
/*                             </a>*/
/*                             {% if session.rol != "Consulta" %}*/
/*                                 <a class="btn btn-primary" href="{{URL.backend_alumno_editar}}?id={{alumno.id}}" title='Editar'>*/
/*                                     <span class='glyphicon glyphicon-pencil' ></span>*/
/*                                 </a>*/
/*                                 {% if session.rol != "Gestion" %}*/
/*                                   <a class="btn btn-danger" href="{{URL.backend_alumno_eliminar}}?id={{alumno.id}}" title='Eliminar'>*/
/*                                       <span class='glyphicon glyphicon-remove'></span>*/
/*                                   </a>       */
/*                                 {% endif %}   */
/*                             {% endif %}   */
/*                         </div>               */
/*                     </td>*/
/*   	              </tr>*/
/*   	            {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <ul class="pagination"></ul>*/
/*             </div>*/
/*           </div>*/
/*       </div>*/
/*       <script type="text/javascript">*/
/*         $( document ).ready(function() {*/
/*             var monkeyList = new List('paginacion', {*/
/*               valueNames: ['id', 'nombre','apellido','dni'],*/
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
/*         });*/
/*         */
/*     </script>*/
/* {% endblock %}*/
/* */
