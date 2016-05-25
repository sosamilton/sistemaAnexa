<?php

/* AnexaCooperadoraBundle:backend/viejo/recorrido:index.html.twig */
class __TwigTemplate_1c8e41cfe3c38084a6d1e9af79d938feb81297dc6e90dba17b7875baeb115905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/recorrido:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addCSS' => array($this, 'block_addCSS'),
            'addJS' => array($this, 'block_addJS'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15a345f063213abaa26cc4e554ccba4a2f719b241ffa0b092657778eae3e1878 = $this->env->getExtension("native_profiler");
        $__internal_15a345f063213abaa26cc4e554ccba4a2f719b241ffa0b092657778eae3e1878->enter($__internal_15a345f063213abaa26cc4e554ccba4a2f719b241ffa0b092657778eae3e1878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/recorrido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a345f063213abaa26cc4e554ccba4a2f719b241ffa0b092657778eae3e1878->leave($__internal_15a345f063213abaa26cc4e554ccba4a2f719b241ffa0b092657778eae3e1878_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cfaaf6b6e0c5acf88a44b50b843a610ae71153f4702a9546485b005943e4b1d = $this->env->getExtension("native_profiler");
        $__internal_6cfaaf6b6e0c5acf88a44b50b843a610ae71153f4702a9546485b005943e4b1d->enter($__internal_6cfaaf6b6e0c5acf88a44b50b843a610ae71153f4702a9546485b005943e4b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Recorrido";
        
        $__internal_6cfaaf6b6e0c5acf88a44b50b843a610ae71153f4702a9546485b005943e4b1d->leave($__internal_6cfaaf6b6e0c5acf88a44b50b843a610ae71153f4702a9546485b005943e4b1d_prof);

    }

    // line 11
    public function block_addCSS($context, array $blocks = array())
    {
        $__internal_aa2d6b45a0d81745d0aa3d2a14d81bfa462bb9f1eaaf0a71cb04d986b11ecae8 = $this->env->getExtension("native_profiler");
        $__internal_aa2d6b45a0d81745d0aa3d2a14d81bfa462bb9f1eaaf0a71cb04d986b11ecae8->enter($__internal_aa2d6b45a0d81745d0aa3d2a14d81bfa462bb9f1eaaf0a71cb04d986b11ecae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addCSS"));

        // line 12
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "css/leaflet.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "css/leaflet-routing-machine.css\">
";
        
        $__internal_aa2d6b45a0d81745d0aa3d2a14d81bfa462bb9f1eaaf0a71cb04d986b11ecae8->leave($__internal_aa2d6b45a0d81745d0aa3d2a14d81bfa462bb9f1eaaf0a71cb04d986b11ecae8_prof);

    }

    // line 16
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_a768cae29156bdade087ae057d006562781e8745625b9b255901cd7ab0e07a41 = $this->env->getExtension("native_profiler");
        $__internal_a768cae29156bdade087ae057d006562781e8745625b9b255901cd7ab0e07a41->enter($__internal_a768cae29156bdade087ae057d006562781e8745625b9b255901cd7ab0e07a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 17
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/list.js\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/list.pagination.js\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/jquery.select-filter.min.js\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/leaflet.js\"></script>
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/leaflet-routing-machine.js\"></script>
  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/jquery-2.1.4.js\"></script>
";
        
        $__internal_a768cae29156bdade087ae057d006562781e8745625b9b255901cd7ab0e07a41->leave($__internal_a768cae29156bdade087ae057d006562781e8745625b9b255901cd7ab0e07a41_prof);

    }

    // line 25
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_11b476a24c960ed3e4cb66006274c01647a5681c80de5e2bd8b48497a03e0b7d = $this->env->getExtension("native_profiler");
        $__internal_11b476a24c960ed3e4cb66006274c01647a5681c80de5e2bd8b48497a03e0b7d->enter($__internal_11b476a24c960ed3e4cb66006274c01647a5681c80de5e2bd8b48497a03e0b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 26
        echo "  <div class=\"panel panel-primary\">
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
                <button class=\"sort btn\" data-sort=\"nombre\">
                    <span class=\"glyphicon glyphicon-sort\"></span> 
                </button>
                Nombre
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
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 73
            echo "              <tr>
                <td class=\"nombre\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo " </td>
                <td class=\"dni\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"\">
                        <span class=\"btn btn-success add\" lat=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "latitud", array()), "html", null, true);
            echo "\" lng=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "longitud", array()), "html", null, true);
            echo "\" title='Agregar'>
                            <span class='glyphicon glyphicon-plus'></span>
                        </span>
                    </div>               
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "          </tbody>
        </table>
        <div class=\"col-md-4 col-md-offset-4\">
            <ul class=\"pagination\"></ul>
        </div>
      </div>
    <script type=\"text/javascript\">
      \$( document ).ready(function() {
          var monkeyList = new List('paginacion', {
            valueNames: ['id', 'nombre','apellido','dni'],
            page: ";
        // line 95
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
  </div>
  <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">Mapa del Recorrido</div>
    <div class=\"panel-body padding0\" id=\"paginacion\">
      <div id=\"map\" style=\"width: auto; height: 500px; position: relative;\"></div>
    </div>
  </div>

<script type=\"text/javascript\">
  \$( document ).ready(function() {

    var map = L.map('map', {
      center: [-34.921387, -57.954695],
      zoom: 14,
    });

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap - Grupo 57 - Proyecto de Software 2015 - Facultad De Informática de la UNLP'
        }).addTo(map);

    var anterior;
    var actual;
    map.locate();
    map.on('locationfound', onLocationFound);
    map.on('locationerror', function(){
      alert('No se pudo encontrar su ubicación');
    });
    function onLocationFound(e) {
      anterior = e.latlng;
      L.marker(anterior,{
        draggable: false,
        title: \"Aca esta Usted!\",
        alt: \"Aca esta Usted!\"
      }).addTo(map)
      map.panTo(anterior);
    }

    \$('.add').click(function(){
      if (\$(this).attr('lat') != 0) {
        actual = L.latLng(\$(this).attr('lat'), \$(this).attr('lng'));
        \$(this).toggleClass('add remove');
        \$(this).toggleClass('btn-success btn-default');
        \$(this).children().toggleClass('glyphicon-plus glyphicon-map-marker');
        \$(this).attr('disabled', 'disabled');
        L.Routing.control({
            waypoints: [
                L.latLng(anterior),
                L.latLng(actual)
            ],
            autoRoute: true,
            draggableWaypoints: false
        }).addTo(map).hide();
      }else{
        alert('El Alumno seleccionado no tiene cargado una dirección ');
      };
    });

  });
  
  </script>
";
        
        $__internal_11b476a24c960ed3e4cb66006274c01647a5681c80de5e2bd8b48497a03e0b7d->leave($__internal_11b476a24c960ed3e4cb66006274c01647a5681c80de5e2bd8b48497a03e0b7d_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/recorrido:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 95,  193 => 85,  178 => 78,  172 => 75,  166 => 74,  163 => 73,  159 => 72,  111 => 26,  105 => 25,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  75 => 17,  69 => 16,  60 => 13,  55 => 12,  49 => 11,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Recorrido{% endblock %}*/
/*   {# <select id="alums">*/
/*           <option value="-34.9425087142857,-57.9822199938775"> tito molina </option>*/
/*           <option value="-34.8828151,-57.8450451"> lucassssss gauna </option>*/
/*         </select>*/
/* */
/*   <button id="agregar">Agregar recorrido</button> #}*/
/* */
/* {% block addCSS %}*/
/*   <link rel="stylesheet" href="{{resource}}css/leaflet.css">*/
/*   <link rel="stylesheet" href="{{resource}}css/leaflet-routing-machine.css">*/
/* {% endblock %}*/
/* */
/* {% block addJS %}*/
/*   <script src="{{resource}}js/list.js"></script>*/
/*   <script src="{{resource}}js/list.pagination.js"></script>*/
/*   <script src="{{resource}}js/jquery.select-filter.min.js"></script>*/
/*   <script src="{{resource}}js/leaflet.js"></script>*/
/*   <script src="{{resource}}js/leaflet-routing-machine.js"></script>*/
/*   <script src="{{resource}}js/jquery-2.1.4.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*   <div class="panel panel-primary">*/
/*       <!-- Default panel contents -->*/
/*       <div class="panel-heading">Listado de Alumnos</div>*/
/*       <!-- Table -->*/
/*       <div class="panel-body" id="paginacion">*/
/* */
/*         <div class="input-group col-md-12">*/
/*             <div class="input-group-addon">*/
/*               <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/*                 <span class="glyphicon glyphicon-filter"></span>*/
/*               </button>*/
/*               <ul class="dropdown-menu" role="menu" aria-labelledby="opcionesDeFiltrado" style="padding:10px;">*/
/*                 <li role="presentation">*/
/*                     <input type="checkbox" name="busqueda" value="nombre" checked> */
/*                     <label>Nombre</label>*/
/*                 </li>*/
/*                 <li role="presentation">*/
/*                     <input type="checkbox" name="busqueda" value="dni" checked> */
/*                     <label>DNI</label>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/*             <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/*             <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/* */
/*         </div>                                      */
/* */
/*         <table class="table">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>*/
/*                 <button class="sort btn" data-sort="nombre">*/
/*                     <span class="glyphicon glyphicon-sort"></span> */
/*                 </button>*/
/*                 Nombre*/
/*               </th>*/
/*               <th>*/
/*                 <button class="sort btn" data-sort="dni">*/
/*                     <span class="glyphicon glyphicon-sort"></span>*/
/*                 </button>*/
/*                 DNI*/
/*               </th>*/
/*               <th>Acciones</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody class="list">*/
/*             {% for alumno in alumnos %}*/
/*               <tr>*/
/*                 <td class="nombre">{{alumno.apellido}}, {{alumno.nombre}} </td>*/
/*                 <td class="dni">{{alumno.dni}}</td>*/
/*                 <td>*/
/*                     <div class="">*/
/*                         <span class="btn btn-success add" lat="{{alumno.latitud}}" lng="{{alumno.longitud}}" title='Agregar'>*/
/*                             <span class='glyphicon glyphicon-plus'></span>*/
/*                         </span>*/
/*                     </div>               */
/*                 </td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*         <div class="col-md-4 col-md-offset-4">*/
/*             <ul class="pagination"></ul>*/
/*         </div>*/
/*       </div>*/
/*     <script type="text/javascript">*/
/*       $( document ).ready(function() {*/
/*           var monkeyList = new List('paginacion', {*/
/*             valueNames: ['id', 'nombre','apellido','dni'],*/
/*             page: {{paginacion}},*/
/*             plugins: [ ListPagination({}) ] */
/*         });*/
/* */
/*         $(".input-busqueda").keyup(function(){*/
/*             filtros = [];*/
/*             $("input[name='busqueda']:checked").each(function() {*/
/*                 filtros.push($(this).val());*/
/*             });*/
/*             monkeyList.search($(this).val(), filtros)*/
/*         });*/
/*       });*/
/*         */
/*     </script>*/
/*   </div>*/
/*   <div class="panel panel-primary">*/
/*     <div class="panel-heading">Mapa del Recorrido</div>*/
/*     <div class="panel-body padding0" id="paginacion">*/
/*       <div id="map" style="width: auto; height: 500px; position: relative;"></div>*/
/*     </div>*/
/*   </div>*/
/* */
/* <script type="text/javascript">*/
/*   $( document ).ready(function() {*/
/* */
/*     var map = L.map('map', {*/
/*       center: [-34.921387, -57.954695],*/
/*       zoom: 14,*/
/*     });*/
/* */
/*     L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {*/
/*             attribution: '© OpenStreetMap - Grupo 57 - Proyecto de Software 2015 - Facultad De Informática de la UNLP'*/
/*         }).addTo(map);*/
/* */
/*     var anterior;*/
/*     var actual;*/
/*     map.locate();*/
/*     map.on('locationfound', onLocationFound);*/
/*     map.on('locationerror', function(){*/
/*       alert('No se pudo encontrar su ubicación');*/
/*     });*/
/*     function onLocationFound(e) {*/
/*       anterior = e.latlng;*/
/*       L.marker(anterior,{*/
/*         draggable: false,*/
/*         title: "Aca esta Usted!",*/
/*         alt: "Aca esta Usted!"*/
/*       }).addTo(map)*/
/*       map.panTo(anterior);*/
/*     }*/
/* */
/*     $('.add').click(function(){*/
/*       if ($(this).attr('lat') != 0) {*/
/*         actual = L.latLng($(this).attr('lat'), $(this).attr('lng'));*/
/*         $(this).toggleClass('add remove');*/
/*         $(this).toggleClass('btn-success btn-default');*/
/*         $(this).children().toggleClass('glyphicon-plus glyphicon-map-marker');*/
/*         $(this).attr('disabled', 'disabled');*/
/*         L.Routing.control({*/
/*             waypoints: [*/
/*                 L.latLng(anterior),*/
/*                 L.latLng(actual)*/
/*             ],*/
/*             autoRoute: true,*/
/*             draggableWaypoints: false*/
/*         }).addTo(map).hide();*/
/*       }else{*/
/*         alert('El Alumno seleccionado no tiene cargado una dirección ');*/
/*       };*/
/*     });*/
/* */
/*   });*/
/*   */
/*   </script>*/
/* {% endblock %}        */
/* */
