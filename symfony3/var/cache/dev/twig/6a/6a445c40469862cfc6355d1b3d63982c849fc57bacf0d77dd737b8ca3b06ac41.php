<?php

/* AnexaCooperadoraBundle:backend/viejo/responsable:index.html.twig */
class __TwigTemplate_79a82ebe5c12099a8afbe7f080242cea06554234d95eec4304853e11fc67c2db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/responsable:index.html.twig", 1);
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
        $__internal_cffa359a04fab7cb6ed91c794955acbd84925db9b5df55580283333158254a29 = $this->env->getExtension("native_profiler");
        $__internal_cffa359a04fab7cb6ed91c794955acbd84925db9b5df55580283333158254a29->enter($__internal_cffa359a04fab7cb6ed91c794955acbd84925db9b5df55580283333158254a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cffa359a04fab7cb6ed91c794955acbd84925db9b5df55580283333158254a29->leave($__internal_cffa359a04fab7cb6ed91c794955acbd84925db9b5df55580283333158254a29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9c2d3e77cc18a1b039000f89905c8e2a614d883245d42d32863b0f802646525 = $this->env->getExtension("native_profiler");
        $__internal_d9c2d3e77cc18a1b039000f89905c8e2a614d883245d42d32863b0f802646525->enter($__internal_d9c2d3e77cc18a1b039000f89905c8e2a614d883245d42d32863b0f802646525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Responsables";
        
        $__internal_d9c2d3e77cc18a1b039000f89905c8e2a614d883245d42d32863b0f802646525->leave($__internal_d9c2d3e77cc18a1b039000f89905c8e2a614d883245d42d32863b0f802646525_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_92aeccb807fc5489661e9d888e76ca9dd88128605019286b08c358b30b9e2eae = $this->env->getExtension("native_profiler");
        $__internal_92aeccb807fc5489661e9d888e76ca9dd88128605019286b08c358b30b9e2eae->enter($__internal_92aeccb807fc5489661e9d888e76ca9dd88128605019286b08c358b30b9e2eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

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
          <strong>Atencion!</strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 12
        echo "      <a class=\"btn btn-primary botonAdd\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_responsable_agregar", array()), "html", null, true);
        echo "\" role=\"button\">Agregar Responsable</a>

    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Listado de Responsables</div>
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
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 77
            echo "  \t              <tr>
  \t                <th scope=\"row\" class=\"id\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "</th>
  \t                <td class=\"nombre\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "nombre", array()), "html", null, true);
            echo "</td>
  \t                <td class=\"apellido\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "apellido", array()), "html", null, true);
            echo "</td>
  \t                <td class=\"dni\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "dni", array()), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"\">
                            <a class=\"btn btn-success\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_responsable_ver", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "\" title='Ver'>
                                <span class='glyphicon glyphicon-eye-open'></span>
                            </a>
                            <a class=\"btn btn-primary\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_responsable_editar", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "\" title='Editar'>
                                <span class='glyphicon glyphicon-pencil' ></span>
                            </a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_responsable_eliminar", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "\" title='Eliminar'>
                                <span class='glyphicon glyphicon-remove'></span>
                            </a>       
                        </div>               
                    </td>
  \t              </tr>
  \t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
        // line 108
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
        
        $__internal_92aeccb807fc5489661e9d888e76ca9dd88128605019286b08c358b30b9e2eae->leave($__internal_92aeccb807fc5489661e9d888e76ca9dd88128605019286b08c358b30b9e2eae_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/responsable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 108,  196 => 97,  181 => 90,  173 => 87,  165 => 84,  159 => 81,  155 => 80,  151 => 79,  147 => 78,  144 => 77,  140 => 76,  72 => 12,  66 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Responsables{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       {% if msj is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atencion!</strong>{{msj}}*/
/*         </div>*/
/*       {% endif %}*/
/*       <a class="btn btn-primary botonAdd" href="{{URL.backend_responsable_agregar}}" role="button">Agregar Responsable</a>*/
/* */
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Listado de Responsables</div>*/
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
/*   	            {% for responsable in responsables %}*/
/*   	              <tr>*/
/*   	                <th scope="row" class="id">{{responsable.id}}</th>*/
/*   	                <td class="nombre">{{responsable.nombre}}</td>*/
/*   	                <td class="apellido">{{responsable.apellido}}</td>*/
/*   	                <td class="dni">{{responsable.dni}}</td>*/
/*                     <td>*/
/*                         <div class="">*/
/*                             <a class="btn btn-success" href="{{URL.backend_responsable_ver}}?id={{responsable.id}}" title='Ver'>*/
/*                                 <span class='glyphicon glyphicon-eye-open'></span>*/
/*                             </a>*/
/*                             <a class="btn btn-primary" href="{{URL.backend_responsable_editar}}?id={{responsable.id}}" title='Editar'>*/
/*                                 <span class='glyphicon glyphicon-pencil' ></span>*/
/*                             </a>*/
/*                             <a class="btn btn-danger" href="{{URL.backend_responsable_eliminar}}?id={{responsable.id}}" title='Eliminar'>*/
/*                                 <span class='glyphicon glyphicon-remove'></span>*/
/*                             </a>       */
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
