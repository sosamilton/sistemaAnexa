<?php

/* AnexaCooperadoraBundle:cuota:index.html.twig */
class __TwigTemplate_ae3ff6d01869315ba51be66c48089b849ed93eb161f58afdee74cb4752795864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:cuota:index.html.twig", 1);
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
        $__internal_a7d4d218815614cc5d0d1c21dfeb6b9aced36454a315f62f32270baa650f981b = $this->env->getExtension("native_profiler");
        $__internal_a7d4d218815614cc5d0d1c21dfeb6b9aced36454a315f62f32270baa650f981b->enter($__internal_a7d4d218815614cc5d0d1c21dfeb6b9aced36454a315f62f32270baa650f981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:cuota:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7d4d218815614cc5d0d1c21dfeb6b9aced36454a315f62f32270baa650f981b->leave($__internal_a7d4d218815614cc5d0d1c21dfeb6b9aced36454a315f62f32270baa650f981b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd5f46293899c6fa914355cacff087e18354ba9cee85c3d48cf7d7750088a22 = $this->env->getExtension("native_profiler");
        $__internal_edd5f46293899c6fa914355cacff087e18354ba9cee85c3d48cf7d7750088a22->enter($__internal_edd5f46293899c6fa914355cacff087e18354ba9cee85c3d48cf7d7750088a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Cuotas | Listado ";
        
        $__internal_edd5f46293899c6fa914355cacff087e18354ba9cee85c3d48cf7d7750088a22->leave($__internal_edd5f46293899c6fa914355cacff087e18354ba9cee85c3d48cf7d7750088a22_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_0996c296b558010b579b0b986a042e85ff5e599ffe2ed68ec608cbf7a1538d25 = $this->env->getExtension("native_profiler");
        $__internal_0996c296b558010b579b0b986a042e85ff5e599ffe2ed68ec608cbf7a1538d25->enter($__internal_0996c296b558010b579b0b986a042e85ff5e599ffe2ed68ec608cbf7a1538d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "        <a class=\"btn btn-primary botonAdd\" href=\"";
            echo $this->env->getExtension('routing')->getPath("cuota_new");
            echo "\">Agregar Cuota</a>
    ";
        }
        // line 9
        echo "
    <div class=\"panel panel-primary\" id=\"paginacion\">
      <!-- Default panel contents -->
      <div class=\"panel-heading\">Listado de Cuotas</div>
      <!-- Table -->
      <div class=\"panel-body\"> 

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
                  <button class=\"sort btn\" data-sort=\"numero\">
                      <span class=\"glyphicon glyphicon-sort\"></span>
                  </button>
                  Número
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
              <tbody class='list'>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) ? $context["cuotas"] : $this->getContext($context, "cuotas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 66
            echo "                    <tr>                           
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "anio", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "mes", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "numero", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "tipo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "monto", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "comisionCobrador", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuota"], "fechaAlta", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"\">

                              ";
            // line 77
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION"))) {
                // line 78
                echo "                                  <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_edit", array("id" => $this->getAttribute($context["cuota"], "id", array()))), "html", null, true);
                echo "\" title=\"Editar\"><span class='glyphicon glyphicon-pencil' ></span></a>
                                ";
                // line 79
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 80
                    echo "                                    <a class=\"btn btn-danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_delete", array("id" => $this->getAttribute($context["cuota"], "id", array()))), "html", null, true);
                    echo "\" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>
                                ";
                }
                // line 82
                echo "                              ";
            }
            // line 83
            echo "                              
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        
        $__internal_0996c296b558010b579b0b986a042e85ff5e599ffe2ed68ec608cbf7a1538d25->leave($__internal_0996c296b558010b579b0b986a042e85ff5e599ffe2ed68ec608cbf7a1538d25_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:cuota:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 100,  186 => 88,  176 => 83,  173 => 82,  167 => 80,  165 => 79,  160 => 78,  158 => 77,  151 => 73,  147 => 72,  143 => 71,  139 => 70,  135 => 69,  131 => 68,  127 => 67,  124 => 66,  120 => 65,  62 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Cuotas | Listado {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*         <a class="btn btn-primary botonAdd" href="{{ path('cuota_new') }}">Agregar Cuota</a>*/
/*     {% endif %}*/
/* */
/*     <div class="panel panel-primary" id="paginacion">*/
/*       <!-- Default panel contents -->*/
/*       <div class="panel-heading">Listado de Cuotas</div>*/
/*       <!-- Table -->*/
/*       <div class="panel-body"> */
/* */
/*         <table class="table">*/
/*           <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="anio">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                     Año*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="mes">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                   Mes*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="numero">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                   Número*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="tipo">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                   Tipo*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="monto">*/
/*                       <span class="glyphicon glyphicon-sort"></span> */
/*                   </button>*/
/*                   Monto*/
/*                 </th> */
/*                 <th>*/
/*                   <button class="sort btn" data-sort="comision">*/
/*                       <span class="glyphicon glyphicon-sort"></span> */
/*                   </button>*/
/*                   Comisión Cobrador*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="fechaAlta">*/
/*                       <span class="glyphicon glyphicon-sort"></span> */
/*                   </button>*/
/*                   Fecha de Alta*/
/*                 </th>                   */
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*           </thead>*/
/*               <tbody class='list'>*/
/*                 {% for cuota in cuotas %}*/
/*                     <tr>                           */
/*                         <td>{{ cuota.anio }}</td>*/
/*                         <td>{{ cuota.mes }}</td>*/
/*                         <td>{{ cuota.numero }}</td>*/
/*                         <td>{{ cuota.tipo }}</td>*/
/*                         <td>{{ cuota.monto }}</td>*/
/*                         <td>{{ cuota.comisionCobrador }}</td>*/
/*                         <td>{{ cuota.fechaAlta | date("d-m-Y") }}</td>*/
/*                         <td>*/
/*                             <div class="">*/
/* */
/*                               {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION') %}*/
/*                                   <a class="btn btn-primary" href="{{ path('cuota_edit', { 'id': cuota.id }) }}" title="Editar"><span class='glyphicon glyphicon-pencil' ></span></a>*/
/*                                 {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                     <a class="btn btn-danger" href="{{path('cuota_delete', { 'id':  cuota.id })}}" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>*/
/*                                 {% endif %}*/
/*                               {% endif %}*/
/*                               */
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <ul class="pagination"></ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         $( document ).ready(function() {*/
/*             var monkeyList = new List('paginacion', {*/
/*               valueNames: ['numero', 'anio','mes','tipo', 'monto', "comision", "fechaAlta"],*/
/*               page: {{paginacion}},*/
/*               plugins: [ ListPagination({}) ] */
/*           });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
