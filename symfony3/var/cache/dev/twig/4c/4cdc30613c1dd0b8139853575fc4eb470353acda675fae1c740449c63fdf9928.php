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
        $__internal_10315a5387e0fcff7478a1d45e8563eaa84df69d4992da92aa505d4289b16d41 = $this->env->getExtension("native_profiler");
        $__internal_10315a5387e0fcff7478a1d45e8563eaa84df69d4992da92aa505d4289b16d41->enter($__internal_10315a5387e0fcff7478a1d45e8563eaa84df69d4992da92aa505d4289b16d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:alumno:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10315a5387e0fcff7478a1d45e8563eaa84df69d4992da92aa505d4289b16d41->leave($__internal_10315a5387e0fcff7478a1d45e8563eaa84df69d4992da92aa505d4289b16d41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94cebc045e5029f01ecf59a40f8267e31a3400695510d79720839007a182a80e = $this->env->getExtension("native_profiler");
        $__internal_94cebc045e5029f01ecf59a40f8267e31a3400695510d79720839007a182a80e->enter($__internal_94cebc045e5029f01ecf59a40f8267e31a3400695510d79720839007a182a80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Alumnos | Listado";
        
        $__internal_94cebc045e5029f01ecf59a40f8267e31a3400695510d79720839007a182a80e->leave($__internal_94cebc045e5029f01ecf59a40f8267e31a3400695510d79720839007a182a80e_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_7677440a15c9d7b4c83d4048d13efffcb832fa17de906e0d840c411025b25663 = $this->env->getExtension("native_profiler");
        $__internal_7677440a15c9d7b4c83d4048d13efffcb832fa17de906e0d840c411025b25663->enter($__internal_7677440a15c9d7b4c83d4048d13efffcb832fa17de906e0d840c411025b25663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "      <a class=\"btn btn-primary botonAdd\" href=\"";
            echo $this->env->getExtension('routing')->getPath("alumno_new");
            echo "\">Agregar Alumno</a>
    ";
        }
        // line 9
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 73
            echo "                        <tr>
                                                       
                          <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
                          <td class=\"dni\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</td>
                          <td class=\"apellido\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
            echo "</td>
                          <td class=\"nombre\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                          <td>
                              <div class=\"\">
                                  
                                <a class=\"btn btn-success\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_show", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
            echo "\" title=\"Ver\"><span class='glyphicon glyphicon-eye-open'></span></a>

                                ";
            // line 84
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION"))) {
                // line 85
                echo "                                  <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_edit", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                echo "\" title=\"Editar\"><span class='glyphicon glyphicon-pencil' ></span></a>
                                  ";
                // line 86
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 87
                    echo "                                    <a class=\"btn btn-danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_delete", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                    echo "\" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>
                                  ";
                }
                // line 88
                echo "   
                                ";
            }
            // line 89
            echo "   
                              </div>

                          </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
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
        // line 107
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
        
        $__internal_7677440a15c9d7b4c83d4048d13efffcb832fa17de906e0d840c411025b25663->leave($__internal_7677440a15c9d7b4c83d4048d13efffcb832fa17de906e0d840c411025b25663_prof);

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
        return array (  203 => 107,  189 => 95,  178 => 89,  174 => 88,  168 => 87,  166 => 86,  161 => 85,  159 => 84,  154 => 82,  147 => 78,  143 => 77,  139 => 76,  135 => 75,  131 => 73,  127 => 72,  62 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Alumnos | Listado{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
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
