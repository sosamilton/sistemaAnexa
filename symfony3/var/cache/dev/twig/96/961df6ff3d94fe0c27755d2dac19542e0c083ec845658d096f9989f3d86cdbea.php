<?php

/* AnexaCooperadoraBundle:backend/viejo/alumno:ver.html.twig */
class __TwigTemplate_1af57b13801cbe9034132b4eeadef478663603675bceb919d0d6b5f23e160aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/alumno:ver.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
            'addJS' => array($this, 'block_addJS'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10a842423d94573593e4ab89e6a776ce4eccad49a54357c4a29cf71a17520794 = $this->env->getExtension("native_profiler");
        $__internal_10a842423d94573593e4ab89e6a776ce4eccad49a54357c4a29cf71a17520794->enter($__internal_10a842423d94573593e4ab89e6a776ce4eccad49a54357c4a29cf71a17520794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/alumno:ver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a842423d94573593e4ab89e6a776ce4eccad49a54357c4a29cf71a17520794->leave($__internal_10a842423d94573593e4ab89e6a776ce4eccad49a54357c4a29cf71a17520794_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d63aacae185bee5092dca46d214253f4b11dcd84329eecd5d677bc598a4a8c76 = $this->env->getExtension("native_profiler");
        $__internal_d63aacae185bee5092dca46d214253f4b11dcd84329eecd5d677bc598a4a8c76->enter($__internal_d63aacae185bee5092dca46d214253f4b11dcd84329eecd5d677bc598a4a8c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Alumnos | Ver";
        
        $__internal_d63aacae185bee5092dca46d214253f4b11dcd84329eecd5d677bc598a4a8c76->leave($__internal_d63aacae185bee5092dca46d214253f4b11dcd84329eecd5d677bc598a4a8c76_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_01cf916906bc4e92d8d3fc6dc9ae5aa394cfd8414795f0d9d6d28350fb72aef4 = $this->env->getExtension("native_profiler");
        $__internal_01cf916906bc4e92d8d3fc6dc9ae5aa394cfd8414795f0d9d6d28350fb72aef4->enter($__internal_01cf916906bc4e92d8d3fc6dc9ae5aa394cfd8414795f0d9d6d28350fb72aef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Detalles del Alumno</div>
          <!-- Table -->
          <div class=\"panel-body\">
              <div class=\"form-group col-md-12\">
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"nombre\">Nombre</label>
                  <div class=\"form-control\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"apellido\">Apellido</label>
                  <div class=\"form-control\" > ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellido", array()), "html", null, true);
        echo "</div>
                </div>
                  <div class=\"col-md-4\">
                  <label for=\"fechaNac\">Fecha de Nacimiento</label>
                  <div class=\"form-control\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        echo "</div>
                </div>
              </div>
              </div>
              <div class=\"form-group col-md-12\">
                <div class=\"col-md-2\">
                  <label for=\"tipoDNI\">Tipo DNI</label>
                  <div class=\"form-control\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "tipoDni", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"dni\">DNI</label>
                  <div class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni", array()), "html", null, true);
        echo "</div>
                </div>
                  <div class=\"col-md-2\">
                  <label for=\"sexo\">Sexo</label>
                   <div class=\"form-control\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "sexo", array()), "html", null, true);
        echo "</div>
                </div>
                  <div class=\"col-md-3\">
                  <label for=\"telefono\">Teléfono</label>
                  <div class=\"form-control\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefono", array()), "html", null, true);
        echo "</div>
                </div>
              </div>
              <div class=\"col-md-12\" >
                  <div class=\"form-group\">
                      <div class=\"col-md-6\">
                          <label for=\"email\">Email</label>
                          <div class=\"form-control\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "email", array()), "html", null, true);
        echo "</div>
                     </div>
                      <div class=\"col-md-3\">
                          <label for=\"fechaIngreso\">Fecha de Ingreso</label>
                          <div class=\"form-control\" >";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaIngreso", array()), "Y-m-d"), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-md-3\">
                          <label for=\"fechaEgreso\">Fecha de Egreso</label>
                          <div class=\"form-control\" >";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaEgreso", array()), "Y-m-d"), "html", null, true);
        echo "</div>
                        </div>
                  </div>
              </div>
              
              <div class=\"form-group col-md-12\">
                <div class=\"form-group\">  
                  <div class=\"col-md-4\">
                  <label for=\"calle\">Calle</label>
                  <div class=\"form-control\" id=\"calle\" >";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "calle", array()), "html", null, true);
        echo "</div>
                </div>
                  <div class=\"col-md-4\">
                  <label for=\"numero\">Número</label>
                  <div class=\"form-control\" id=\"numero\" >";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "numero", array()), "html", null, true);
        echo "</div>
                </div>
                  <div class=\"col-md-4\">
                      <label for=\"codigoPostal\">Código Postal</label>
                      <div class=\"form-control\" id=\"codigoPostal\" >";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "codigoPostal", array()), "html", null, true);
        echo "</div>
                </div>
                </div> 
              </div>
                <div class=\"form-group col-md-12\">    
                  <div class=\"col-md-5\">
                    <label for=\"provincia\">Provincia</label>
                    <div class=\"form-control\" id=\"provincia\" >";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "provincia", array()), "html", null, true);
        echo "</div>
                  </div>
                <div class=\"col-md-5\">
                        <label for=\"pais\">País</label>
                        <div class=\"form-control\" id=\"pais\" >";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "pais", array()), "html", null, true);
        echo "</div>
                    </div>
              </div>
                  <div class=\"form-group col-md-12\">
                      <div class=\"col-md-5 col-offset-md-2\">
                        <label>Responsables Agregados</label>
                        <ul id=\"listResponsables\" class=\"list-group\">
                          ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 93
            echo "                            <li class='list-group-item'>
                              ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($context["responsable"], "nombre", array()) . " ") . $this->getAttribute($context["responsable"], "apellido", array())), "html", null, true);
            echo "
                              <span class=\"badge\">DNI:";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "dni", array()), "html", null, true);
            echo "</span>
                            </li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  
                        </ul>  
                      </div>
                      <div class=\"form-group col-md-7 margin-top0\">
                      <input type=\"hidden\" name=\"lat\" id=\"lat\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "latitud", array()), "html", null, true);
        echo "\">
                      <input type=\"hidden\" name=\"long\" id=\"long\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "longitud", array()), "html", null, true);
        echo "\">
                    <div id=\"Map\" class=\"img-thumbnail col-md-12\" style=\"height:250px\"></div>
                </div>
              </div>
          </div>
      </div>
     
    <script type=\"text/javascript\">
          \$(document).ready(function() {
             

                var lat = ";
        // line 113
        if ($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "latitud", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "latitud", array()), "html", null, true);
        } else {
            echo "-34.920963";
        }
        echo ";
                var lon =  ";
        // line 114
        if ($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "longitud", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "longitud", array()), "html", null, true);
            echo " ";
        } else {
            echo "-57.954847";
        }
        echo ";
                var zoom = 14;
             
                var fromProjection = new OpenLayers.Projection(\"EPSG:4326\");   // Transform from WGS 1984
                var toProjection   = new OpenLayers.Projection(\"EPSG:900913\"); // to Spherical Mercator Projection
                var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);
             
                map = new OpenLayers.Map(\"Map\");
                var mapnik         = new OpenLayers.Layer.OSM();
                map.addLayer(mapnik);
              
                ";
        // line 125
        if ($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "longitud", array())) {
            // line 126
            echo "                var markers = new OpenLayers.Layer.Markers( \"Markers\" );
                map.addLayer(markers);
                markers.addMarker(new OpenLayers.Marker(position));
                ";
        }
        // line 130
        echo "                map.setCenter(position, zoom);    



              \$('.direccion').change(function(){
                var numero=\$('#numero').val();
                var calle=\$('#calle').val();
                var ciudad = \$('#ciudad').val();
                var codigoPostal = \$('#codigoPostal').val();
                var provincia = \$('#provincia').val();
                var pais=\$('#pais').val();
                var dir = numero + \", \" + calle + \", \" + ciudad + \", \" + provincia + \", \" + codigoPostal + \", \" + pais;
                \$.ajax({
                  url : ' http://nominatim.openstreetmap.org/search?q='+dir+'&format=json&polygon=1&addressdetails=1',
                  cache: false
                })
                  .done(function( direcciones ) {
                    if (!direcciones.length == 0){
                      \$('.opcion').remove();
                      \$(direcciones).each(function(index, dir){
                         \$('#resultados').append('<option class=\"opcion\" value=\"'+dir['place_id']+'\" id=\"'+dir['place_id']+'\" lat=\"'+dir['lat']+'\" long=\"'+dir['lon']+'\">'+dir['display_name']+'</option>');
                      }); 
                    }

                  });
              });
              \$('#resultados').change(function(){
                \$.each( map.layers[1].markers, function( key, value ) {
                  map.layers[1].removeMarker(value);
                });
                for (index = 0; index < map.layers[1].markers.length; index++) {
                  map.layers[1].removeMarker(map.layers[1].markers[index]);
                }
                var option = \$(\"#resultados option:selected\");
                \$('#long').val(option.attr('long'));
                \$('#lat').val(option.attr('lat'));
                \$('#direccion').val(option.text());
                var position       = new OpenLayers.LonLat(option.attr('long'), option.attr('lat'))
                                      .transform(
                                        new OpenLayers.Projection(\"EPSG:4326\"), // transform from WGS 1984
                                        map.getProjectionObject() // to Spherical Mercator Projection
                                      );
                var markers = new OpenLayers.Layer.Markers( \"Markers\" );
                map.addLayer(markers);
                markers.addMarker(new OpenLayers.Marker(position));
                map.setCenter(position, 15);
                });
          });

      </script>
";
        
        $__internal_01cf916906bc4e92d8d3fc6dc9ae5aa394cfd8414795f0d9d6d28350fb72aef4->leave($__internal_01cf916906bc4e92d8d3fc6dc9ae5aa394cfd8414795f0d9d6d28350fb72aef4_prof);

    }

    // line 183
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_3a4c9ebfaaa3ebe74e4cb2536515bb20431fb61371a83194ceafeafe22a184eb = $this->env->getExtension("native_profiler");
        $__internal_3a4c9ebfaaa3ebe74e4cb2536515bb20431fb61371a83194ceafeafe22a184eb->enter($__internal_3a4c9ebfaaa3ebe74e4cb2536515bb20431fb61371a83194ceafeafe22a184eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 184
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/openlayers-master/lib/OpenLayers.js\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/jquery.select-filter.min.js\"></script>

";
        
        $__internal_3a4c9ebfaaa3ebe74e4cb2536515bb20431fb61371a83194ceafeafe22a184eb->leave($__internal_3a4c9ebfaaa3ebe74e4cb2536515bb20431fb61371a83194ceafeafe22a184eb_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/alumno:ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 185,  330 => 184,  324 => 183,  267 => 130,  261 => 126,  259 => 125,  239 => 114,  231 => 113,  217 => 102,  213 => 101,  207 => 97,  198 => 95,  194 => 94,  191 => 93,  187 => 92,  177 => 85,  170 => 81,  160 => 74,  153 => 70,  146 => 66,  134 => 57,  127 => 53,  120 => 49,  110 => 42,  103 => 38,  96 => 34,  89 => 30,  79 => 23,  72 => 19,  65 => 15,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administración | Alumnos | Ver{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Detalles del Alumno</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*               <div class="form-group col-md-12">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="nombre">Nombre</label>*/
/*                   <div class="form-control">{{alumno.nombre}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="apellido">Apellido</label>*/
/*                   <div class="form-control" > {{alumno.apellido}}</div>*/
/*                 </div>*/
/*                   <div class="col-md-4">*/
/*                   <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                   <div class="form-control">{{alumno.fechaNacimiento | date("Y-m-d") }}</div>*/
/*                 </div>*/
/*               </div>*/
/*               </div>*/
/*               <div class="form-group col-md-12">*/
/*                 <div class="col-md-2">*/
/*                   <label for="tipoDNI">Tipo DNI</label>*/
/*                   <div class="form-control">{{alumno.tipoDni}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="dni">DNI</label>*/
/*                   <div class="form-control">{{alumno.dni}}</div>*/
/*                 </div>*/
/*                   <div class="col-md-2">*/
/*                   <label for="sexo">Sexo</label>*/
/*                    <div class="form-control" >{{alumno.sexo}}</div>*/
/*                 </div>*/
/*                   <div class="col-md-3">*/
/*                   <label for="telefono">Teléfono</label>*/
/*                   <div class="form-control">{{alumno.telefono}}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-md-12" >*/
/*                   <div class="form-group">*/
/*                       <div class="col-md-6">*/
/*                           <label for="email">Email</label>*/
/*                           <div class="form-control" >{{alumno.email}}</div>*/
/*                      </div>*/
/*                       <div class="col-md-3">*/
/*                           <label for="fechaIngreso">Fecha de Ingreso</label>*/
/*                           <div class="form-control" >{{alumno.fechaIngreso | date("Y-m-d") }}</div>*/
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                           <label for="fechaEgreso">Fecha de Egreso</label>*/
/*                           <div class="form-control" >{{alumno.fechaEgreso | date("Y-m-d") }}</div>*/
/*                         </div>*/
/*                   </div>*/
/*               </div>*/
/*               */
/*               <div class="form-group col-md-12">*/
/*                 <div class="form-group">  */
/*                   <div class="col-md-4">*/
/*                   <label for="calle">Calle</label>*/
/*                   <div class="form-control" id="calle" >{{alumno.calle}}</div>*/
/*                 </div>*/
/*                   <div class="col-md-4">*/
/*                   <label for="numero">Número</label>*/
/*                   <div class="form-control" id="numero" >{{alumno.numero}}</div>*/
/*                 </div>*/
/*                   <div class="col-md-4">*/
/*                       <label for="codigoPostal">Código Postal</label>*/
/*                       <div class="form-control" id="codigoPostal" >{{alumno.codigoPostal}}</div>*/
/*                 </div>*/
/*                 </div> */
/*               </div>*/
/*                 <div class="form-group col-md-12">    */
/*                   <div class="col-md-5">*/
/*                     <label for="provincia">Provincia</label>*/
/*                     <div class="form-control" id="provincia" >{{alumno.provincia}}</div>*/
/*                   </div>*/
/*                 <div class="col-md-5">*/
/*                         <label for="pais">País</label>*/
/*                         <div class="form-control" id="pais" >{{alumno.pais}}</div>*/
/*                     </div>*/
/*               </div>*/
/*                   <div class="form-group col-md-12">*/
/*                       <div class="col-md-5 col-offset-md-2">*/
/*                         <label>Responsables Agregados</label>*/
/*                         <ul id="listResponsables" class="list-group">*/
/*                           {% for responsable in responsables %}*/
/*                             <li class='list-group-item'>*/
/*                               {{responsable.nombre ~ " " ~ responsable.apellido}}*/
/*                               <span class="badge">DNI:{{responsable.dni}}</span>*/
/*                             </li>*/
/*                           {% endfor %}  */
/*                         </ul>  */
/*                       </div>*/
/*                       <div class="form-group col-md-7 margin-top0">*/
/*                       <input type="hidden" name="lat" id="lat" value="{{alumno.latitud}}">*/
/*                       <input type="hidden" name="long" id="long" value="{{alumno.longitud}}">*/
/*                     <div id="Map" class="img-thumbnail col-md-12" style="height:250px"></div>*/
/*                 </div>*/
/*               </div>*/
/*           </div>*/
/*       </div>*/
/*      */
/*     <script type="text/javascript">*/
/*           $(document).ready(function() {*/
/*              */
/* */
/*                 var lat = {% if alumno.latitud %}{{alumno.latitud}}{% else %}-34.920963{% endif %};*/
/*                 var lon =  {% if alumno.longitud %} {{alumno.longitud}} {% else %}-57.954847{% endif %};*/
/*                 var zoom = 14;*/
/*              */
/*                 var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984*/
/*                 var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection*/
/*                 var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);*/
/*              */
/*                 map = new OpenLayers.Map("Map");*/
/*                 var mapnik         = new OpenLayers.Layer.OSM();*/
/*                 map.addLayer(mapnik);*/
/*               */
/*                 {% if alumno.longitud %}*/
/*                 var markers = new OpenLayers.Layer.Markers( "Markers" );*/
/*                 map.addLayer(markers);*/
/*                 markers.addMarker(new OpenLayers.Marker(position));*/
/*                 {% endif %}*/
/*                 map.setCenter(position, zoom);    */
/* */
/* */
/* */
/*               $('.direccion').change(function(){*/
/*                 var numero=$('#numero').val();*/
/*                 var calle=$('#calle').val();*/
/*                 var ciudad = $('#ciudad').val();*/
/*                 var codigoPostal = $('#codigoPostal').val();*/
/*                 var provincia = $('#provincia').val();*/
/*                 var pais=$('#pais').val();*/
/*                 var dir = numero + ", " + calle + ", " + ciudad + ", " + provincia + ", " + codigoPostal + ", " + pais;*/
/*                 $.ajax({*/
/*                   url : ' http://nominatim.openstreetmap.org/search?q='+dir+'&format=json&polygon=1&addressdetails=1',*/
/*                   cache: false*/
/*                 })*/
/*                   .done(function( direcciones ) {*/
/*                     if (!direcciones.length == 0){*/
/*                       $('.opcion').remove();*/
/*                       $(direcciones).each(function(index, dir){*/
/*                          $('#resultados').append('<option class="opcion" value="'+dir['place_id']+'" id="'+dir['place_id']+'" lat="'+dir['lat']+'" long="'+dir['lon']+'">'+dir['display_name']+'</option>');*/
/*                       }); */
/*                     }*/
/* */
/*                   });*/
/*               });*/
/*               $('#resultados').change(function(){*/
/*                 $.each( map.layers[1].markers, function( key, value ) {*/
/*                   map.layers[1].removeMarker(value);*/
/*                 });*/
/*                 for (index = 0; index < map.layers[1].markers.length; index++) {*/
/*                   map.layers[1].removeMarker(map.layers[1].markers[index]);*/
/*                 }*/
/*                 var option = $("#resultados option:selected");*/
/*                 $('#long').val(option.attr('long'));*/
/*                 $('#lat').val(option.attr('lat'));*/
/*                 $('#direccion').val(option.text());*/
/*                 var position       = new OpenLayers.LonLat(option.attr('long'), option.attr('lat'))*/
/*                                       .transform(*/
/*                                         new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984*/
/*                                         map.getProjectionObject() // to Spherical Mercator Projection*/
/*                                       );*/
/*                 var markers = new OpenLayers.Layer.Markers( "Markers" );*/
/*                 map.addLayer(markers);*/
/*                 markers.addMarker(new OpenLayers.Marker(position));*/
/*                 map.setCenter(position, 15);*/
/*                 });*/
/*           });*/
/* */
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block addJS %}*/
/*     <script src="{{resource}}/js/openlayers-master/lib/OpenLayers.js"></script>*/
/*     <script src="{{resource}}/js/jquery.select-filter.min.js"></script>*/
/* */
/* {% endblock %}*/
/* */
/* */
