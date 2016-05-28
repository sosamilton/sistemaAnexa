<?php

/* AnexaCooperadoraBundle:backend/viejo/alumno:agregar.html.twig */
class __TwigTemplate_9736d588d8baf7d4425aad2235bc6f7878a99d4315b0985c298567200d1582f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/alumno:agregar.html.twig", 1);
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
        $__internal_750dd5cea870c23709579d1d6b3d416bc8923071de9438f3e5462b7886ca96d8 = $this->env->getExtension("native_profiler");
        $__internal_750dd5cea870c23709579d1d6b3d416bc8923071de9438f3e5462b7886ca96d8->enter($__internal_750dd5cea870c23709579d1d6b3d416bc8923071de9438f3e5462b7886ca96d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/alumno:agregar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750dd5cea870c23709579d1d6b3d416bc8923071de9438f3e5462b7886ca96d8->leave($__internal_750dd5cea870c23709579d1d6b3d416bc8923071de9438f3e5462b7886ca96d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78cbae6b33c2c0043eaec63f206a1373ed9cacca31ee5d87a09c69d71cb69d74 = $this->env->getExtension("native_profiler");
        $__internal_78cbae6b33c2c0043eaec63f206a1373ed9cacca31ee5d87a09c69d71cb69d74->enter($__internal_78cbae6b33c2c0043eaec63f206a1373ed9cacca31ee5d87a09c69d71cb69d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Alumnos | Agregar";
        
        $__internal_78cbae6b33c2c0043eaec63f206a1373ed9cacca31ee5d87a09c69d71cb69d74->leave($__internal_78cbae6b33c2c0043eaec63f206a1373ed9cacca31ee5d87a09c69d71cb69d74_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_48b568e7978c7e5f461d10635e055412ea3b7bf78246d09aeb0b6055d205bf52 = $this->env->getExtension("native_profiler");
        $__internal_48b568e7978c7e5f461d10635e055412ea3b7bf78246d09aeb0b6055d205bf52->enter($__internal_48b568e7978c7e5f461d10635e055412ea3b7bf78246d09aeb0b6055d205bf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Agregar Alumno</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_alumno_agregar", array()), "html", null, true);
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
              <div class=\"form-group col-md-12\">
                <div class=\"col-md-6\">
                  <label for=\"nombre\">Nombre</label>
                  <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"apellido\">Apellido</label>
                  <input type=\"text\" class=\"form-control\" id=\"apellido\" name=\"apellido\" placeholder=\"Apellido\" required>
                </div>
              </div>
              <div class=\"form-group col-md-12\">
                <div class=\"col-md-4\">
                  <label for=\"fechaNac\">Fecha de Nacimiento</label>
                  <input type=\"date\" class=\"form-control\" id=\"fechaNac\" name=\"fechaNac\" required>
                </div>
                <div class=\"col-md-3\">
                  <label for=\"tipoDNI\">Tipo DNI</label>
                  <select class=\"form-control\" name=\"tipoDNI\" required>
                    <option value=\"DNI\">DNI</option>
                    <option value=\"CI\">Cedula de Identidad</option>
                    <option value=\"LC\">Libreta de Civica</option>
                    <option value=\"LE\">Libreta de Enrolamiento </option>
                  </select>
                </div>
                <div class=\"col-md-5\">
                  <label for=\"dni\">DNI</label>
                  <input type=\"number\" class=\"form-control\" name=\"dni\" id=\"dni\" placeholder=\"N° DNI\" required>
                </div>
              </div>
              <div class=\"col-md-12\" >
                <div class=\"form-group\">
                  <div class=\"col-md-6\">
                    <label for=\"sexo\">Sexo</label>
                     <select  class=\"form-control\"  id=\"sexo\" name=\"sexo\" required>
                        <option value=\"M\">Masculino</option>
                        <option value=\"F\">Femenino</option>
                        <option value=\"O\">Otro</option>
                    </select>
                  </div>
                  <div class=\"col-md-6\">
                    <label for=\"telefono\">Telefono</label>
                    <input type=\"number\" class=\"form-control\" id=\"telefono\" name =\"telefono\" placeholder=\"N° Telefonico\" required>
                  </div>
                </div>
                <div class=\"col-md-6\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"col-md-6\"> 
                  <div class=\"col-md-6\">
                    <label for=\"fechaIngreso\">Fecha de Ingreso</label>
                    <input type=\"date\" class=\"form-control\" id=\"fechaIngreso\" name=\"fechaIngreso\" required>
                  </div>
                  <div class=\"col-md-6\">
                    <label for=\"fechaEgreso\">Fecha de Egreso</label>
                    <input type=\"date\" class=\"form-control\" id=\"fechaEgreso\" name=\"fechaEgreso\">
                  </div>
                </div>
              </div>
              <div class=\"form-group col-md-6\">
                <div class=\"col-md-8 form-group\">
                  <label for=\"calle\">Calle</label>
                  <input type=\"text\" class=\"form-control direccion\" name=\"calle\" id=\"calle\" placeholder=\"Calle\" required>
                </div>
                <div class=\"col-md-4 form-group\">
                  <label for=\"numero\">Numero</label>
                  <input type=\"text\" class=\"form-control direccion\" name=\"numero\" id=\"numero\" placeholder=\"Numero\" required>
                </div>
                <div class=\"col-md-8 form-group\">
                  <label for=\"ciudad\">Ciudad</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"ciudad\" name=\"ciudad\" value=\"La Plata\" required>
                </div>
                <div class=\"col-md-4 form-group\">
                  <label for=\"codigoPostal\">Codigo Postal</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"codigoPostal\" name=\"codigoPostal\" value=\"1900\" required>
                </div>
                <div class=\"col-md-12 form-group\">
                  <label for=\"provincia\">Provincia</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"provincia\" name=\"provincia\" value=\"Buenos Aires\" required>
                </div>
                <div class=\"col-md-12 form-group\">
                  <label for=\"pais\">Pais</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"pais\" name=\"pais\" value=\"Argentina\" required>
                </div>
              </div>
              <div class=\"form-group col-md-6 margin-top0\">
                <div class=\"col-md-12 form-group\">
                  <select class=\"form-control\" id=\"resultados\">
                    <option>Selecciones una ubicacion</option>
                  </select>
                  <input type=\"hidden\" name=\"lat\" id=\"lat\">
                  <input type=\"hidden\" name=\"long\" id=\"long\">
                  <input type=\"hidden\" name=\"direccion\" id=\"direccion\">
                </div>
                <div id=\"Map\" class=\"img-thumbnail col-md-12\" style=\"height:250px\"></div>
              </div>
               <div class=\"form-group col-md-12\">
                <div class=\"col-md-12 \">
                  <div class=\"col-md-5\">
                    <label>Agregar responsables</label>
                    <select class=\"ancho form-control\" id=\"responsables\" size=\"5\">
                      ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allResponsables"]) ? $context["allResponsables"] : $this->getContext($context, "allResponsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 115
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "\">
                          ";
            // line 116
            echo twig_escape_filter($this->env, (($this->getAttribute($context["responsable"], "nombre", array()) . " ") . $this->getAttribute($context["responsable"], "apellido", array())), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "dni", array()), "html", null, true);
            echo " 
                        </option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                    </select>
                  </div>
                  <div class=\"col-md-1 margin-top1\">
                    <div id=\"add\" class=\"btn btn-chico btn-primary btn-chico margin-top1\">
                      <span class=\"glyphicon glyphicon-plus\"></span>
                      <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    </div>
                  </div>
                  <div class=\"col-md-5\">
                    <label>Responsables Agregados</label>
                    <ul id=\"listResponsables\" class=\"list-group\">
                    </ul>  
                  </div>
                </div>
              </div>

              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Agregar Alumno</button>
            </form>
          </div>
      </div>
        <script type=\"text/javascript\">
          \$(document).ready(function() {
              \$('#responsables').selectFilter({
                  filterClass: 'filter-bar form-control',
                  minimumCharacters: 2,
                  inputPlaceholder: 'Buscar',
                  width: '100%',
                  minimumSelectElementSize: 5,
                  inputLocation: 'above'
              });

              \$('#add').click(function(){
                if (\$(\"#list_\"+\$(\"#responsables\").val()).length == 0) {
                  var txt = \"<li class='list-group-item' id='list_\"+\$('#responsables').val()+\"'>\"+\$('#responsables option:selected').text()+\" <span class='badge rmItem rmItem'>X</span><input name='responsables[]'  type='hidden' value='\"+\$('#responsables').val()+\"'/> </li> \";
                  \$('#listResponsables').append(txt);
                  \$('.rmItem').click(function(){
                    \$(this).parent().remove();
                  });

                };
              });
              
              function loadMaps(){
                var lat            = -34.920797;
                var lon            =  -57.953198;
                var zoom           = 14;
             
                var fromProjection = new OpenLayers.Projection(\"EPSG:4326\");   // Transform from WGS 1984
                var toProjection   = new OpenLayers.Projection(\"EPSG:900913\"); // to Spherical Mercator Projection
                var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);
             
                map = new OpenLayers.Map(\"Map\");
                var mapnik         = new OpenLayers.Layer.OSM();
                map.addLayer(mapnik);
              

                var markers = new OpenLayers.Layer.Markers( \"Markers\" );
                map.addLayer(markers);
                //markers.addMarker(new OpenLayers.Marker(position));
                map.setCenter(position, zoom);                
              }

              loadMaps();
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
        
        $__internal_48b568e7978c7e5f461d10635e055412ea3b7bf78246d09aeb0b6055d205bf52->leave($__internal_48b568e7978c7e5f461d10635e055412ea3b7bf78246d09aeb0b6055d205bf52_prof);

    }

    // line 224
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_ff73362279db6e9d402792718692bec2063e6ff92ee24b150051ab793733ce63 = $this->env->getExtension("native_profiler");
        $__internal_ff73362279db6e9d402792718692bec2063e6ff92ee24b150051ab793733ce63->enter($__internal_ff73362279db6e9d402792718692bec2063e6ff92ee24b150051ab793733ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 225
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/openlayers-master/lib/OpenLayers.js\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/jquery.select-filter.min.js\"></script>
";
        
        $__internal_ff73362279db6e9d402792718692bec2063e6ff92ee24b150051ab793733ce63->leave($__internal_ff73362279db6e9d402792718692bec2063e6ff92ee24b150051ab793733ce63_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/alumno:agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 226,  306 => 225,  300 => 224,  190 => 119,  179 => 116,  174 => 115,  170 => 114,  65 => 12,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Alumnos | Agregar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Agregar Alumno</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{URL.backend_alumno_agregar}}" method="post">*/
/*               <input type="hidden" name="token" value="{{token}}">*/
/*               <div class="form-group col-md-12">*/
/*                 <div class="col-md-6">*/
/*                   <label for="nombre">Nombre</label>*/
/*                   <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="apellido">Apellido</label>*/
/*                   <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group col-md-12">*/
/*                 <div class="col-md-4">*/
/*                   <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                   <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="tipoDNI">Tipo DNI</label>*/
/*                   <select class="form-control" name="tipoDNI" required>*/
/*                     <option value="DNI">DNI</option>*/
/*                     <option value="CI">Cedula de Identidad</option>*/
/*                     <option value="LC">Libreta de Civica</option>*/
/*                     <option value="LE">Libreta de Enrolamiento </option>*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label for="dni">DNI</label>*/
/*                   <input type="number" class="form-control" name="dni" id="dni" placeholder="N° DNI" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-md-12" >*/
/*                 <div class="form-group">*/
/*                   <div class="col-md-6">*/
/*                     <label for="sexo">Sexo</label>*/
/*                      <select  class="form-control"  id="sexo" name="sexo" required>*/
/*                         <option value="M">Masculino</option>*/
/*                         <option value="F">Femenino</option>*/
/*                         <option value="O">Otro</option>*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-md-6">*/
/*                     <label for="telefono">Telefono</label>*/
/*                     <input type="number" class="form-control" id="telefono" name ="telefono" placeholder="N° Telefonico" required>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <label for="email">Email</label>*/
/*                     <input type="email" class="form-control" id="email" name="email" required>*/
/*                 </div>*/
/*                 <div class="col-md-6"> */
/*                   <div class="col-md-6">*/
/*                     <label for="fechaIngreso">Fecha de Ingreso</label>*/
/*                     <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" required>*/
/*                   </div>*/
/*                   <div class="col-md-6">*/
/*                     <label for="fechaEgreso">Fecha de Egreso</label>*/
/*                     <input type="date" class="form-control" id="fechaEgreso" name="fechaEgreso">*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group col-md-6">*/
/*                 <div class="col-md-8 form-group">*/
/*                   <label for="calle">Calle</label>*/
/*                   <input type="text" class="form-control direccion" name="calle" id="calle" placeholder="Calle" required>*/
/*                 </div>*/
/*                 <div class="col-md-4 form-group">*/
/*                   <label for="numero">Numero</label>*/
/*                   <input type="text" class="form-control direccion" name="numero" id="numero" placeholder="Numero" required>*/
/*                 </div>*/
/*                 <div class="col-md-8 form-group">*/
/*                   <label for="ciudad">Ciudad</label>*/
/*                   <input type="text" class="form-control direccion" id="ciudad" name="ciudad" value="La Plata" required>*/
/*                 </div>*/
/*                 <div class="col-md-4 form-group">*/
/*                   <label for="codigoPostal">Codigo Postal</label>*/
/*                   <input type="text" class="form-control direccion" id="codigoPostal" name="codigoPostal" value="1900" required>*/
/*                 </div>*/
/*                 <div class="col-md-12 form-group">*/
/*                   <label for="provincia">Provincia</label>*/
/*                   <input type="text" class="form-control direccion" id="provincia" name="provincia" value="Buenos Aires" required>*/
/*                 </div>*/
/*                 <div class="col-md-12 form-group">*/
/*                   <label for="pais">Pais</label>*/
/*                   <input type="text" class="form-control direccion" id="pais" name="pais" value="Argentina" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group col-md-6 margin-top0">*/
/*                 <div class="col-md-12 form-group">*/
/*                   <select class="form-control" id="resultados">*/
/*                     <option>Selecciones una ubicacion</option>*/
/*                   </select>*/
/*                   <input type="hidden" name="lat" id="lat">*/
/*                   <input type="hidden" name="long" id="long">*/
/*                   <input type="hidden" name="direccion" id="direccion">*/
/*                 </div>*/
/*                 <div id="Map" class="img-thumbnail col-md-12" style="height:250px"></div>*/
/*               </div>*/
/*                <div class="form-group col-md-12">*/
/*                 <div class="col-md-12 ">*/
/*                   <div class="col-md-5">*/
/*                     <label>Agregar responsables</label>*/
/*                     <select class="ancho form-control" id="responsables" size="5">*/
/*                       {% for responsable in allResponsables %}*/
/*                         <option value="{{responsable.id}}">*/
/*                           {{responsable.nombre ~ " " ~ responsable.apellido}} | {{responsable.dni}} */
/*                         </option>*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-md-1 margin-top1">*/
/*                     <div id="add" class="btn btn-chico btn-primary btn-chico margin-top1">*/
/*                       <span class="glyphicon glyphicon-plus"></span>*/
/*                       <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="col-md-5">*/
/*                     <label>Responsables Agregados</label>*/
/*                     <ul id="listResponsables" class="list-group">*/
/*                     </ul>  */
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <button type="submit" class="btn btn-primary col-md-12">Agregar Alumno</button>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/*         <script type="text/javascript">*/
/*           $(document).ready(function() {*/
/*               $('#responsables').selectFilter({*/
/*                   filterClass: 'filter-bar form-control',*/
/*                   minimumCharacters: 2,*/
/*                   inputPlaceholder: 'Buscar',*/
/*                   width: '100%',*/
/*                   minimumSelectElementSize: 5,*/
/*                   inputLocation: 'above'*/
/*               });*/
/* */
/*               $('#add').click(function(){*/
/*                 if ($("#list_"+$("#responsables").val()).length == 0) {*/
/*                   var txt = "<li class='list-group-item' id='list_"+$('#responsables').val()+"'>"+$('#responsables option:selected').text()+" <span class='badge rmItem rmItem'>X</span><input name='responsables[]'  type='hidden' value='"+$('#responsables').val()+"'/> </li> ";*/
/*                   $('#listResponsables').append(txt);*/
/*                   $('.rmItem').click(function(){*/
/*                     $(this).parent().remove();*/
/*                   });*/
/* */
/*                 };*/
/*               });*/
/*               */
/*               function loadMaps(){*/
/*                 var lat            = -34.920797;*/
/*                 var lon            =  -57.953198;*/
/*                 var zoom           = 14;*/
/*              */
/*                 var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984*/
/*                 var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection*/
/*                 var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);*/
/*              */
/*                 map = new OpenLayers.Map("Map");*/
/*                 var mapnik         = new OpenLayers.Layer.OSM();*/
/*                 map.addLayer(mapnik);*/
/*               */
/* */
/*                 var markers = new OpenLayers.Layer.Markers( "Markers" );*/
/*                 map.addLayer(markers);*/
/*                 //markers.addMarker(new OpenLayers.Marker(position));*/
/*                 map.setCenter(position, zoom);                */
/*               }*/
/* */
/*               loadMaps();*/
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
/*               });*/
/*           });*/
/* */
/*       </script>*/
/* {% endblock %}*/
/* */
/* {% block addJS %}*/
/*     <script src="{{resource}}/js/openlayers-master/lib/OpenLayers.js"></script>*/
/*     <script src="{{resource}}/js/jquery.select-filter.min.js"></script>*/
/* {% endblock %}  */