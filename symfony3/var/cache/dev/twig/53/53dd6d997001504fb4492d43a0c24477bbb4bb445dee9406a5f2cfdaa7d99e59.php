<?php

/* AnexaCooperadoraBundle:backend/viejo/alumno:editar.html.twig */
class __TwigTemplate_ebb59fe328e1d94ea41a0fa673725ee20b115f03d0a4a97f793dc918a0c912ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/alumno:editar.html.twig", 1);
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
        $__internal_5bcf5460d7e26594283d589aa9db183174afd551d6e57aac9b825621c9395808 = $this->env->getExtension("native_profiler");
        $__internal_5bcf5460d7e26594283d589aa9db183174afd551d6e57aac9b825621c9395808->enter($__internal_5bcf5460d7e26594283d589aa9db183174afd551d6e57aac9b825621c9395808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/alumno:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcf5460d7e26594283d589aa9db183174afd551d6e57aac9b825621c9395808->leave($__internal_5bcf5460d7e26594283d589aa9db183174afd551d6e57aac9b825621c9395808_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0292acba224e598f6e95e6cde4de3f25c8f115b98dd65025c7c98cbfff7ad5f = $this->env->getExtension("native_profiler");
        $__internal_d0292acba224e598f6e95e6cde4de3f25c8f115b98dd65025c7c98cbfff7ad5f->enter($__internal_d0292acba224e598f6e95e6cde4de3f25c8f115b98dd65025c7c98cbfff7ad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Alumnos | Editar";
        
        $__internal_d0292acba224e598f6e95e6cde4de3f25c8f115b98dd65025c7c98cbfff7ad5f->leave($__internal_d0292acba224e598f6e95e6cde4de3f25c8f115b98dd65025c7c98cbfff7ad5f_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_44309bbb4a9153a805b01568b23116bb7ca6e9ce39c5aa7ecb24e9c4a0795d60 = $this->env->getExtension("native_profiler");
        $__internal_44309bbb4a9153a805b01568b23116bb7ca6e9ce39c5aa7ecb24e9c4a0795d60->enter($__internal_44309bbb4a9153a805b01568b23116bb7ca6e9ce39c5aa7ecb24e9c4a0795d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "      <div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Editar Alumno ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellido", array()), "html", null, true);
        echo "</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_alumno_editar", array()), "html", null, true);
        echo "?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "id", array()), "html", null, true);
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
              <div class=\"form-group col-md-12\">
                <div class=\"col-md-6\">
                  <label for=\"nombre\">Nombre</label>
                  <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"apellido\">Apellido</label>
                  <input type=\"text\" class=\"form-control\" id=\"apellido\" name=\"apellido\" placeholder=\"Apellido\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellido", array()), "html", null, true);
        echo "\" required>
                </div>
              </div>
              <div class=\"form-group col-md-12\">
                <div class=\"col-md-4\">
                  <label for=\"fechaNac\">Fecha de Nacimiento</label>
                  <input type=\"date\" class=\"form-control\" id=\"fechaNac\" name=\"fechaNac\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        echo "\"  required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"tipoDNI\">Tipo DNI</label>
                  <select class=\"form-control\" name=\"tipoDNI\" required>
                    <option value=\"DNI\" ";
        // line 31
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "tipoDni", array()) == "DNI")) {
            echo "selected";
        }
        echo ">DNI</option>
                    <option value=\"CI\" ";
        // line 32
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "tipoDni", array()) == "CI")) {
            echo "selected";
        }
        echo ">Cedula de Identidad</option>
                    <option value=\"LC\" ";
        // line 33
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "tipoDni", array()) == "LC")) {
            echo "selected";
        }
        echo ">Libreta Civica</option>
                    <option value=\"LE\" ";
        // line 34
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "tipoDni", array()) == "LE")) {
            echo "selected";
        }
        echo ">Libreta de Enrolamiento </option>
                  </select>
                </div>
                <div class=\"col-md-5\">
                  <label for=\"dni\">DNI</label>
                  <input type=\"number\" class=\"form-control\" name=\"dni\" id=\"dni\" placeholder=\"N° DNI\"  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni", array()), "html", null, true);
        echo "\" required>
                </div>
              </div>
              <div class=\"col-md-12\" >
                <div class=\"form-group\">
                  <div class=\"col-md-6\">
                    <label for=\"sexo\">Sexo</label>
                     <select  class=\"form-control\"  id=\"sexo\" name=\"sexo\" required>
                        <option value=\"M\" ";
        // line 47
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "sexo", array()) == "M")) {
            echo "selected";
        }
        echo ">Masculino</option>
                        <option value=\"F\" ";
        // line 48
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "sexo", array()) == "F")) {
            echo "selected";
        }
        echo ">Femenino</option>
                        <option value=\"O\" ";
        // line 49
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "sexo", array()) == "O")) {
            echo "selected";
        }
        echo ">Otro</option>
                    </select>
                  </div>
                  <div class=\"col-md-6\">
                    <label for=\"telefono\">Telefono</label>
                    <input type=\"number\" class=\"form-control\" id=\"telefono\" name =\"telefono\" placeholder=\"N° Telefonico\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefono", array()), "html", null, true);
        echo "\" required>
                  </div>
                </div>
                <div class=\"col-md-6\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "email", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-6\"> 
                  <div class=\"col-md-6\">
                    <label for=\"fechaIngreso\">Fecha de Ingreso</label>
                    <input type=\"date\" class=\"form-control\" id=\"fechaIngreso\" name=\"fechaIngreso\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaIngreso", array()), "Y-m-d"), "html", null, true);
        echo "\" required>
                  </div>
                  <div class=\"col-md-6\">
                    <label for=\"fechaEgreso\">Fecha de Egreso</label>
                    <input type=\"date\" class=\"form-control\" id=\"fechaEgreso\" name=\"fechaEgreso\"  value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaEgreso", array()), "Y-m-d"), "html", null, true);
        echo "\" >
                  </div>
                </div>
              </div>
              <div class=\"form-group col-md-6\">
                <div class=\"col-md-8 form-group\">
                  <label for=\"calle\">Calle</label>
                  <input type=\"text\" class=\"form-control direccion\" name=\"calle\" id=\"calle\" placeholder=\"Calle\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "calle", array()), "html", null, true);
        echo "\"  required>
                </div>
                <div class=\"col-md-4 form-group\">
                  <label for=\"numero\">Numero</label>
                  <input type=\"text\" class=\"form-control direccion\" name=\"numero\" id=\"numero\" placeholder=\"Numero\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "numero", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-8 form-group\">
                  <label for=\"ciudad\">Ciudad</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"ciudad\" name=\"ciudad\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "ciudad", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-4 form-group\">
                  <label for=\"codigoPostal\">Codigo Postal</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"codigoPostal\" name=\"codigoPostal\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "codigoPostal", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-12 form-group\">
                  <label for=\"provincia\">Provincia</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"provincia\" name=\"provincia\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "provincia", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"col-md-12 form-group\">
                  <label for=\"pais\">Pais</label>
                  <input type=\"text\" class=\"form-control direccion\" id=\"pais\" name=\"pais\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "pais", array()), "html", null, true);
        echo "\" required>
                </div>
              </div>
              <div class=\"form-group col-md-6 margin-top0\">
                <div class=\"col-md-12 form-group\">
                  <select class=\"form-control\" id=\"resultados\">
                    <option>Selecciones una ubicacion</option>
                  </select>
                  <input type=\"hidden\" name=\"lat\" id=\"lat\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "latitud", array()), "html", null, true);
        echo "\">
                  <input type=\"hidden\" name=\"long\" id=\"long\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "longitud", array()), "html", null, true);
        echo "\">
                </div>
                <div id=\"Map\" class=\"img-thumbnail col-md-12\" style=\"height:250px\"></div>
              </div>
              <div class=\"form-group col-md-12\">
                <div class=\"col-md-5\">
                  <label>Agregar responsables</label>
                  <select class=\"ancho form-control\" id=\"responsables\" size=\"5\">
                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allResponsables"]) ? $context["allResponsables"] : $this->getContext($context, "allResponsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 113
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 114
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
        // line 117
        echo "                  </select>
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
                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
            // line 129
            echo "                      <li class='list-group-item' id='list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "id", array()), "html", null, true);
            echo "'>
                        ";
            // line 130
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tutor"], "nombre", array()) . " ") . $this->getAttribute($context["tutor"], "apellido", array())), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "dni", array()), "html", null, true);
            echo " 
                        <span resp-id=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "id", array()), "html", null, true);
            echo "\" class='badge rmItem remove'>X</span>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                  </ul>  
                </div>
              </div>

              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Editar Alumno</button>
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

                var lat = ";
        // line 164
        if ($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "latitud", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "latitud", array()), "html", null, true);
        } else {
            echo "-34.920963";
        }
        echo ";
                var lon =  ";
        // line 165
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
              
                  var markers = new OpenLayers.Layer.Markers( \"Markers\" );
                  map.addLayer(markers);
                  markers.addMarker(new OpenLayers.Marker(position));
                map.setCenter(position, zoom);    



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
        
        $__internal_44309bbb4a9153a805b01568b23116bb7ca6e9ce39c5aa7ecb24e9c4a0795d60->leave($__internal_44309bbb4a9153a805b01568b23116bb7ca6e9ce39c5aa7ecb24e9c4a0795d60_prof);

    }

    // line 232
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_ec3a6641857e4b23244bc24b223e8ec4da3dd422fa557ae914d80c0e5a9153d2 = $this->env->getExtension("native_profiler");
        $__internal_ec3a6641857e4b23244bc24b223e8ec4da3dd422fa557ae914d80c0e5a9153d2->enter($__internal_ec3a6641857e4b23244bc24b223e8ec4da3dd422fa557ae914d80c0e5a9153d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 233
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/openlayers-master/lib/OpenLayers.js\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/jquery.select-filter.min.js\"></script>

";
        
        $__internal_ec3a6641857e4b23244bc24b223e8ec4da3dd422fa557ae914d80c0e5a9153d2->leave($__internal_ec3a6641857e4b23244bc24b223e8ec4da3dd422fa557ae914d80c0e5a9153d2_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/alumno:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 234,  439 => 233,  433 => 232,  355 => 165,  347 => 164,  315 => 134,  306 => 131,  300 => 130,  295 => 129,  291 => 128,  278 => 117,  267 => 114,  262 => 113,  258 => 112,  247 => 104,  243 => 103,  232 => 95,  225 => 91,  218 => 87,  211 => 83,  204 => 79,  197 => 75,  187 => 68,  180 => 64,  172 => 59,  164 => 54,  154 => 49,  148 => 48,  142 => 47,  131 => 39,  121 => 34,  115 => 33,  109 => 32,  103 => 31,  95 => 26,  86 => 20,  79 => 16,  72 => 12,  66 => 11,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Alumnos | Editar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       <div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Editar Alumno {{alumno.nombre}} {{alumno.apellido}}</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{URL.backend_alumno_editar}}?id={{alumno.id}}" method="post">*/
/*               <input type="hidden" name="token" value="{{token}}">*/
/*               <div class="form-group col-md-12">*/
/*                 <div class="col-md-6">*/
/*                   <label for="nombre">Nombre</label>*/
/*                   <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{alumno.nombre}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="apellido">Apellido</label>*/
/*                   <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{{alumno.apellido}}" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group col-md-12">*/
/*                 <div class="col-md-4">*/
/*                   <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                   <input type="date" class="form-control" id="fechaNac" name="fechaNac" value="{{alumno.fechaNacimiento | date("Y-m-d") }}"  required>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="tipoDNI">Tipo DNI</label>*/
/*                   <select class="form-control" name="tipoDNI" required>*/
/*                     <option value="DNI" {% if alumno.tipoDni == "DNI" %}selected{% endif %}>DNI</option>*/
/*                     <option value="CI" {% if alumno.tipoDni == "CI" %}selected{% endif %}>Cedula de Identidad</option>*/
/*                     <option value="LC" {% if alumno.tipoDni == "LC" %}selected{% endif %}>Libreta Civica</option>*/
/*                     <option value="LE" {% if alumno.tipoDni == "LE" %}selected{% endif %}>Libreta de Enrolamiento </option>*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label for="dni">DNI</label>*/
/*                   <input type="number" class="form-control" name="dni" id="dni" placeholder="N° DNI"  value="{{alumno.dni}}" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-md-12" >*/
/*                 <div class="form-group">*/
/*                   <div class="col-md-6">*/
/*                     <label for="sexo">Sexo</label>*/
/*                      <select  class="form-control"  id="sexo" name="sexo" required>*/
/*                         <option value="M" {% if alumno.sexo == "M" %}selected{% endif %}>Masculino</option>*/
/*                         <option value="F" {% if alumno.sexo == "F" %}selected{% endif %}>Femenino</option>*/
/*                         <option value="O" {% if alumno.sexo == "O" %}selected{% endif %}>Otro</option>*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-md-6">*/
/*                     <label for="telefono">Telefono</label>*/
/*                     <input type="number" class="form-control" id="telefono" name ="telefono" placeholder="N° Telefonico" value="{{alumno.telefono}}" required>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <label for="email">Email</label>*/
/*                     <input type="email" class="form-control" id="email" name="email" value="{{alumno.email}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-6"> */
/*                   <div class="col-md-6">*/
/*                     <label for="fechaIngreso">Fecha de Ingreso</label>*/
/*                     <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" value="{{alumno.fechaIngreso | date("Y-m-d") }}" required>*/
/*                   </div>*/
/*                   <div class="col-md-6">*/
/*                     <label for="fechaEgreso">Fecha de Egreso</label>*/
/*                     <input type="date" class="form-control" id="fechaEgreso" name="fechaEgreso"  value="{{alumno.fechaEgreso | date("Y-m-d") }}" >*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group col-md-6">*/
/*                 <div class="col-md-8 form-group">*/
/*                   <label for="calle">Calle</label>*/
/*                   <input type="text" class="form-control direccion" name="calle" id="calle" placeholder="Calle" value="{{alumno.calle}}"  required>*/
/*                 </div>*/
/*                 <div class="col-md-4 form-group">*/
/*                   <label for="numero">Numero</label>*/
/*                   <input type="text" class="form-control direccion" name="numero" id="numero" placeholder="Numero" value="{{alumno.numero}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-8 form-group">*/
/*                   <label for="ciudad">Ciudad</label>*/
/*                   <input type="text" class="form-control direccion" id="ciudad" name="ciudad" value="{{alumno.ciudad}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-4 form-group">*/
/*                   <label for="codigoPostal">Codigo Postal</label>*/
/*                   <input type="text" class="form-control direccion" id="codigoPostal" name="codigoPostal" value="{{alumno.codigoPostal}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-12 form-group">*/
/*                   <label for="provincia">Provincia</label>*/
/*                   <input type="text" class="form-control direccion" id="provincia" name="provincia" value="{{alumno.provincia}}" required>*/
/*                 </div>*/
/*                 <div class="col-md-12 form-group">*/
/*                   <label for="pais">Pais</label>*/
/*                   <input type="text" class="form-control direccion" id="pais" name="pais" value="{{alumno.pais}}" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group col-md-6 margin-top0">*/
/*                 <div class="col-md-12 form-group">*/
/*                   <select class="form-control" id="resultados">*/
/*                     <option>Selecciones una ubicacion</option>*/
/*                   </select>*/
/*                   <input type="hidden" name="lat" id="lat" value="{{alumno.latitud}}">*/
/*                   <input type="hidden" name="long" id="long" value="{{alumno.longitud}}">*/
/*                 </div>*/
/*                 <div id="Map" class="img-thumbnail col-md-12" style="height:250px"></div>*/
/*               </div>*/
/*               <div class="form-group col-md-12">*/
/*                 <div class="col-md-5">*/
/*                   <label>Agregar responsables</label>*/
/*                   <select class="ancho form-control" id="responsables" size="5">*/
/*                     {% for responsable in allResponsables %}*/
/*                       <option value="{{responsable.id}}">*/
/*                         {{responsable.nombre ~ " " ~ responsable.apellido}} | {{responsable.dni}}*/
/*                       </option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-1 margin-top1">*/
/*                   <div id="add" class="btn btn-chico btn-primary btn-chico margin-top1">*/
/*                     <span class="glyphicon glyphicon-plus"></span>*/
/*                     <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label>Responsables Agregados</label>*/
/*                   <ul id="listResponsables" class="list-group">*/
/*                     {% for tutor in responsables %}*/
/*                       <li class='list-group-item' id='list_{{tutor.id}}'>*/
/*                         {{tutor.nombre ~ " " ~ tutor.apellido }} | {{tutor.dni}} */
/*                         <span resp-id="{{tutor.id}}" class='badge rmItem remove'>X</span>*/
/*                       </li>*/
/*                     {% endfor %}*/
/*                   </ul>  */
/*                 </div>*/
/*               </div>*/
/* */
/*               <button type="submit" class="btn btn-primary col-md-12">Editar Alumno</button>*/
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
/*                   var markers = new OpenLayers.Layer.Markers( "Markers" );*/
/*                   map.addLayer(markers);*/
/*                   markers.addMarker(new OpenLayers.Marker(position));*/
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
