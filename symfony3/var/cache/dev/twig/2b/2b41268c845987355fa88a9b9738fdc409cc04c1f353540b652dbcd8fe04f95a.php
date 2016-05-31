<?php

/* AnexaCooperadoraBundle:pago:index.html.twig */
class __TwigTemplate_30c57032fe393712f9b640a86583471fe83780efdea06dea7ddd08d4e6f6206b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:pago:index.html.twig", 1);
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
        $__internal_3a7c5fd71c37316b11e04e061be7d78ce685c31dca3639f9e6283a15c0179b67 = $this->env->getExtension("native_profiler");
        $__internal_3a7c5fd71c37316b11e04e061be7d78ce685c31dca3639f9e6283a15c0179b67->enter($__internal_3a7c5fd71c37316b11e04e061be7d78ce685c31dca3639f9e6283a15c0179b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:pago:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7c5fd71c37316b11e04e061be7d78ce685c31dca3639f9e6283a15c0179b67->leave($__internal_3a7c5fd71c37316b11e04e061be7d78ce685c31dca3639f9e6283a15c0179b67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4416f4d8d2e456d6064cfbc7c03f491186ecd14fff464ad58e8150c9a390352a = $this->env->getExtension("native_profiler");
        $__internal_4416f4d8d2e456d6064cfbc7c03f491186ecd14fff464ad58e8150c9a390352a->enter($__internal_4416f4d8d2e456d6064cfbc7c03f491186ecd14fff464ad58e8150c9a390352a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Pagos | Listado";
        
        $__internal_4416f4d8d2e456d6064cfbc7c03f491186ecd14fff464ad58e8150c9a390352a->leave($__internal_4416f4d8d2e456d6064cfbc7c03f491186ecd14fff464ad58e8150c9a390352a_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_c8c7ee1c5f345292d7f1b45cc21332f2f1b51fb88b4c984875b4da8b8e6415ff = $this->env->getExtension("native_profiler");
        $__internal_c8c7ee1c5f345292d7f1b45cc21332f2f1b51fb88b4c984875b4da8b8e6415ff->enter($__internal_c8c7ee1c5f345292d7f1b45cc21332f2f1b51fb88b4c984875b4da8b8e6415ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
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
                    </tr>
                </thead>
                <tbody class='list'>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 69
            echo "                        <tr>
                                                       
                          <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                          <td>
                              <div class=\"\">
                                  
                                <a class=\"btn btn-success\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_show", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
            echo "\" title=\"Ver\"><span class='glyphicon glyphicon-eye-open'></span></a>
                                 
                              </div>

                          </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
            page: ";
        // line 97
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
        
        $__internal_c8c7ee1c5f345292d7f1b45cc21332f2f1b51fb88b4c984875b4da8b8e6415ff->leave($__internal_c8c7ee1c5f345292d7f1b45cc21332f2f1b51fb88b4c984875b4da8b8e6415ff_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:pago:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 97,  157 => 85,  144 => 78,  137 => 74,  133 => 73,  129 => 72,  125 => 71,  121 => 69,  117 => 68,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Pagos | Listado{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
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
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class='list'>*/
/*                     {% for alumno in alumnos %}*/
/*                         <tr>*/
/*                                                        */
/*                           <td>{{ alumno.id }}</td>*/
/*                           <td>{{ alumno.dni }}</td>*/
/*                           <td>{{ alumno.apellido }}</td>*/
/*                           <td>{{ alumno.nombre }}</td>*/
/*                           <td>*/
/*                               <div class="">*/
/*                                   */
/*                                 <a class="btn btn-success" href="{{ path('alumno_show', { 'id': alumno.id }) }}" title="Ver"><span class='glyphicon glyphicon-eye-open'></span></a>*/
/*                                  */
/*                               </div>*/
/* */
/*                           </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                   <ul class="pagination"></ul>*/
/*               </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*       $( document ).ready(function() {*/
/*           var monkeyList = new List('paginacion', {*/
/*             valueNames: ['id', 'nombre','apellido','dni'],*/
/*             page: {{ paginacion}},*/
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
