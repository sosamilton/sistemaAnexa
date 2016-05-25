<?php

/* AnexaCooperadoraBundle:responsable:index.html.twig */
class __TwigTemplate_8e24b8932228e4ef94ed9775819cdc65761f77980e0b4dc73545c12fee38c34f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:responsable:index.html.twig", 1);
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
        $__internal_a81d49371540f3791c21a0844fc98488a59b2a5e5e96bbb9bf5dd75f6f667163 = $this->env->getExtension("native_profiler");
        $__internal_a81d49371540f3791c21a0844fc98488a59b2a5e5e96bbb9bf5dd75f6f667163->enter($__internal_a81d49371540f3791c21a0844fc98488a59b2a5e5e96bbb9bf5dd75f6f667163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81d49371540f3791c21a0844fc98488a59b2a5e5e96bbb9bf5dd75f6f667163->leave($__internal_a81d49371540f3791c21a0844fc98488a59b2a5e5e96bbb9bf5dd75f6f667163_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9da22b9333f12e8ef8b4340c4b23572d2aa8c590e11fc9ee9b03d2ccbe78d1b1 = $this->env->getExtension("native_profiler");
        $__internal_9da22b9333f12e8ef8b4340c4b23572d2aa8c590e11fc9ee9b03d2ccbe78d1b1->enter($__internal_9da22b9333f12e8ef8b4340c4b23572d2aa8c590e11fc9ee9b03d2ccbe78d1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Responsables | Listado";
        
        $__internal_9da22b9333f12e8ef8b4340c4b23572d2aa8c590e11fc9ee9b03d2ccbe78d1b1->leave($__internal_9da22b9333f12e8ef8b4340c4b23572d2aa8c590e11fc9ee9b03d2ccbe78d1b1_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_7c2d7286e6c11ec327aaf5f4dc5ca0cdf9d66976a68374ea696378bc7a336ba1 = $this->env->getExtension("native_profiler");
        $__internal_7c2d7286e6c11ec327aaf5f4dc5ca0cdf9d66976a68374ea696378bc7a336ba1->enter($__internal_7c2d7286e6c11ec327aaf5f4dc5ca0cdf9d66976a68374ea696378bc7a336ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "        <a class=\"btn btn-primary botonAdd\" href=\"";
            echo $this->env->getExtension('routing')->getPath("responsable_new");
            echo "\">Agregar Responsable</a>
    ";
        }
        // line 9
        echo "
    <div class=\"panel panel-primary\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">Listado de Responsables</div>
        <!-- Table -->
        <div class=\"panel-body\">

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
                <tbody>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 73
            echo "                        <tr>                           
                            <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "dni", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "apellido", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"\">
                                    
                                  <a class=\"btn btn-success\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responsable_show", array("id" => $this->getAttribute($context["responsable"], "id", array()))), "html", null, true);
            echo "\" title=\"Ver\"><span class='glyphicon glyphicon-eye-open'></span></a>

                                  ";
            // line 83
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION"))) {
                // line 84
                echo "                                      <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responsable_edit", array("id" => $this->getAttribute($context["responsable"], "id", array()))), "html", null, true);
                echo "\" title=\"Editar\"><span class='glyphicon glyphicon-pencil' ></span></a>
                                      ";
                // line 85
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 86
                    echo "                                          <a class=\"btn btn-danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responsable_delete", array("id" => $this->getAttribute($context["responsable"], "id", array()))), "html", null, true);
                    echo "\" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>
                                      ";
                }
                // line 88
                echo "                                  ";
            }
            // line 89
            echo "                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </tbody>
            </table>
        </div>
    </div>

    <script type=\"text/javascript\">
        

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
        
        $__internal_7c2d7286e6c11ec327aaf5f4dc5ca0cdf9d66976a68374ea696378bc7a336ba1->leave($__internal_7c2d7286e6c11ec327aaf5f4dc5ca0cdf9d66976a68374ea696378bc7a336ba1_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:responsable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 93,  176 => 89,  173 => 88,  167 => 86,  165 => 85,  160 => 84,  158 => 83,  153 => 81,  146 => 77,  142 => 76,  138 => 75,  134 => 74,  131 => 73,  127 => 72,  62 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Responsables | Listado{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*         <a class="btn btn-primary botonAdd" href="{{ path('responsable_new') }}">Agregar Responsable</a>*/
/*     {% endif %}*/
/* */
/*     <div class="panel panel-primary">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Listado de Responsables</div>*/
/*         <!-- Table -->*/
/*         <div class="panel-body">*/
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
/*                 <tbody>*/
/*                     {% for responsable in responsables %}*/
/*                         <tr>                           */
/*                             <td>{{ responsable.id }}</td>*/
/*                             <td>{{ responsable.dni }}</td>*/
/*                             <td>{{ responsable.apellido }}</td>*/
/*                             <td>{{ responsable.nombre }}</td>*/
/*                             <td>*/
/*                                 <div class="">*/
/*                                     */
/*                                   <a class="btn btn-success" href="{{ path('responsable_show', { 'id': responsable.id }) }}" title="Ver"><span class='glyphicon glyphicon-eye-open'></span></a>*/
/* */
/*                                   {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION') %}*/
/*                                       <a class="btn btn-primary" href="{{ path('responsable_edit', { 'id': responsable.id }) }}" title="Editar"><span class='glyphicon glyphicon-pencil' ></span></a>*/
/*                                       {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                           <a class="btn btn-danger" href="{{path('responsable_delete', { 'id':  responsable.id })}}" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>*/
/*                                       {% endif %}*/
/*                                   {% endif %}*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         */
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
/* */
/* {% endblock %}*/
/* */
