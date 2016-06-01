<?php

/* AnexaCooperadoraBundle:alumno:index.html.twig */
class __TwigTemplate_ccde943cd270475644a2d6c2d58ca1ad949322a902d1398cf4f75c229fa1c171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:alumno:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78cb9517e38659c681a88467e358816285bdeb663831872cec8cc63d44707bcf = $this->env->getExtension("native_profiler");
        $__internal_78cb9517e38659c681a88467e358816285bdeb663831872cec8cc63d44707bcf->enter($__internal_78cb9517e38659c681a88467e358816285bdeb663831872cec8cc63d44707bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:alumno:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78cb9517e38659c681a88467e358816285bdeb663831872cec8cc63d44707bcf->leave($__internal_78cb9517e38659c681a88467e358816285bdeb663831872cec8cc63d44707bcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be74e4ff19b63e834096f0785b7cb44581f4f1b56e9df0c7e562c3bc98bfbba5 = $this->env->getExtension("native_profiler");
        $__internal_be74e4ff19b63e834096f0785b7cb44581f4f1b56e9df0c7e562c3bc98bfbba5->enter($__internal_be74e4ff19b63e834096f0785b7cb44581f4f1b56e9df0c7e562c3bc98bfbba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Alumnos | Listado";
        
        $__internal_be74e4ff19b63e834096f0785b7cb44581f4f1b56e9df0c7e562c3bc98bfbba5->leave($__internal_be74e4ff19b63e834096f0785b7cb44581f4f1b56e9df0c7e562c3bc98bfbba5_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_6a3c184dbf2cc6e96e2084031f43a64313cd27185f0ef189bc1a9a1c8ca8bf39 = $this->env->getExtension("native_profiler");
        $__internal_6a3c184dbf2cc6e96e2084031f43a64313cd27185f0ef189bc1a9a1c8ca8bf39->enter($__internal_6a3c184dbf2cc6e96e2084031f43a64313cd27185f0ef189bc1a9a1c8ca8bf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "  ";
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
          <strong>Atención!</strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>
  ";
        }
        // line 12
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 13
            echo "      <a class=\"btn btn-primary botonAdd\" href=\"";
            echo $this->env->getExtension('routing')->getPath("alumno_new");
            echo "\">Agregar Alumno</a>
    ";
        }
        // line 15
        echo "
    <div class=\"panel panel-primary\">
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
                        <button class=\"sort btn\" data-sort=\"dni\">
                            <span class=\"glyphicon glyphicon-sort\"></span>
                        </button>
                        DNI
                      </th>
                      <th>
                        <button class=\"sort btn\" data-sort=\"apellido\">
                            <span class=\"glyphicon glyphicon-sort\"></span>
                        </button>
                        Apellido
                      </th>
                      <th>
                        <button class=\"sort btn\" data-sort=\"nombre\">
                            <span class=\"glyphicon glyphicon-sort\"></span> 
                        </button>
                        Nombre
                      </th>                  
                      <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class=\"list\">
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 79
            echo "                        <tr>
                                                       
                          <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
                          <td class=\"dni\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</td>
                          <td class=\"apellido\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
            echo "</td>
                          <td class=\"nombre\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                          <td>
                              <div class=\"\">
                                  
                                <a class=\"btn btn-success\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_show", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
            echo "\" title=\"Ver\"><span class='glyphicon glyphicon-eye-open'></span></a>

                                ";
            // line 90
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION"))) {
                // line 91
                echo "                                  <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_edit", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                echo "\" title=\"Editar\"><span class='glyphicon glyphicon-pencil' ></span></a>
                                  ";
                // line 92
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 93
                    echo "                                    <a class=\"btn btn-danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_delete", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                    echo "\" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>
                                  ";
                }
                // line 94
                echo "   
                                ";
            }
            // line 95
            echo "   
                              </div>

                          </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </tbody>
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
            page: '";
        // line 113
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("paginacion"));
        echo "',
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
        
        $__internal_6a3c184dbf2cc6e96e2084031f43a64313cd27185f0ef189bc1a9a1c8ca8bf39->leave($__internal_6a3c184dbf2cc6e96e2084031f43a64313cd27185f0ef189bc1a9a1c8ca8bf39_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:alumno:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 113,  208 => 101,  197 => 95,  193 => 94,  187 => 93,  185 => 92,  180 => 91,  178 => 90,  173 => 88,  166 => 84,  162 => 83,  158 => 82,  154 => 81,  150 => 79,  146 => 78,  81 => 15,  75 => 13,  72 => 12,  66 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Alumnos | Listado{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*   {% if msj is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atención!</strong>{{msj}}*/
/*         </div>*/
/*   {% endif %}*/
/*     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*       <a class="btn btn-primary botonAdd" href="{{ path('alumno_new') }}">Agregar Alumno</a>*/
/*     {% endif %}*/
/* */
/*     <div class="panel panel-primary">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Listado de Alumnos</div>*/
/*         <!-- Table -->*/
/*         <div class="panel-body" id="paginacion">*/
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
/*             </div> */
/* */
/*             <table class="table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                       <th>*/
/*                         <button class="sort btn" data-sort="id">*/
/*                             <span class="glyphicon glyphicon-sort"></span>*/
/*                         </button>*/
/*                         #*/
/*                       </th>*/
/*                       <th>*/
/*                         <button class="sort btn" data-sort="dni">*/
/*                             <span class="glyphicon glyphicon-sort"></span>*/
/*                         </button>*/
/*                         DNI*/
/*                       </th>*/
/*                       <th>*/
/*                         <button class="sort btn" data-sort="apellido">*/
/*                             <span class="glyphicon glyphicon-sort"></span>*/
/*                         </button>*/
/*                         Apellido*/
/*                       </th>*/
/*                       <th>*/
/*                         <button class="sort btn" data-sort="nombre">*/
/*                             <span class="glyphicon glyphicon-sort"></span> */
/*                         </button>*/
/*                         Nombre*/
/*                       </th>                  */
/*                       <th>Acciones</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="list">*/
/*                     {% for alumno in alumnos %}*/
/*                         <tr>*/
/*                                                        */
/*                           <td>{{ alumno.id }}</td>*/
/*                           <td class="dni">{{ alumno.dni }}</td>*/
/*                           <td class="apellido">{{ alumno.apellido }}</td>*/
/*                           <td class="nombre">{{ alumno.nombre }}</td>*/
/*                           <td>*/
/*                               <div class="">*/
/*                                   */
/*                                 <a class="btn btn-success" href="{{ path('alumno_show', { 'id': alumno.id }) }}" title="Ver"><span class='glyphicon glyphicon-eye-open'></span></a>*/
/* */
/*                                 {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION') %}*/
/*                                   <a class="btn btn-primary" href="{{ path('alumno_edit', { 'id': alumno.id }) }}" title="Editar"><span class='glyphicon glyphicon-pencil' ></span></a>*/
/*                                   {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                     <a class="btn btn-danger" href="{{path('alumno_delete', { 'id': alumno.id })}}" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>*/
/*                                   {% endif %}   */
/*                                 {% endif %}   */
/*                               </div>*/
/* */
/*                           </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <ul class="pagination"></ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*    */
/*     <script type="text/javascript">*/
/*       $( document ).ready(function() {*/
/*           var monkeyList = new List('paginacion', {*/
/*             valueNames: ['id', 'nombre','apellido','dni'],*/
/*             page: '{{ render(url('paginacion')) }}',*/
/*             plugins: [ ListPagination({}) ] */
/*         });*/
/* */
/*       $(".input-busqueda").keyup(function(){*/
/*           filtros = [];*/
/*           $("input[name='busqueda']:checked").each(function() {*/
/*               filtros.push($(this).val());*/
/*           });*/
/*           monkeyList.search($(this).val(), filtros)*/
/*       });*/
/*     });*/
/*         */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
