<?php

/* AnexaCooperadoraBundle:alumno:edit.html.twig */
class __TwigTemplate_eb3503bea16ba19e5f4acce86f7b072e86804a633ddae42dbb323dcfb0358716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:alumno:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
            'addJS' => array($this, 'block_addJS'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12516175441b3e9bf58cfd3b7705e4d9e8860ca8625d5ab4d31e6be93457fe7f = $this->env->getExtension("native_profiler");
        $__internal_12516175441b3e9bf58cfd3b7705e4d9e8860ca8625d5ab4d31e6be93457fe7f->enter($__internal_12516175441b3e9bf58cfd3b7705e4d9e8860ca8625d5ab4d31e6be93457fe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:alumno:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12516175441b3e9bf58cfd3b7705e4d9e8860ca8625d5ab4d31e6be93457fe7f->leave($__internal_12516175441b3e9bf58cfd3b7705e4d9e8860ca8625d5ab4d31e6be93457fe7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ebf21f291cc31a3e3721a2edd26d675bfa10cf191d440ba99ecfec2dd8b300 = $this->env->getExtension("native_profiler");
        $__internal_68ebf21f291cc31a3e3721a2edd26d675bfa10cf191d440ba99ecfec2dd8b300->enter($__internal_68ebf21f291cc31a3e3721a2edd26d675bfa10cf191d440ba99ecfec2dd8b300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Alumnos | Editar";
        
        $__internal_68ebf21f291cc31a3e3721a2edd26d675bfa10cf191d440ba99ecfec2dd8b300->leave($__internal_68ebf21f291cc31a3e3721a2edd26d675bfa10cf191d440ba99ecfec2dd8b300_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_803857b898e1d67fbda229089c5bc0625ed673d2c73cbed52dec0d70d517a032 = $this->env->getExtension("native_profiler");
        $__internal_803857b898e1d67fbda229089c5bc0625ed673d2c73cbed52dec0d70d517a032->enter($__internal_803857b898e1d67fbda229089c5bc0625ed673d2c73cbed52dec0d70d517a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    <div class=\"panel panel-primary\">
      <!-- Default panel contents -->
        <div class=\"panel-heading\">Editar Alumno ~ ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellido", array()), "html", null, true);
        echo "</div>
      <!-- Table -->
        <div class=\"panel-body\">

   ";
        // line 16
        echo "
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
     
                    <div class=\"col-md-6\">
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'label');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'label');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoDNI", array()), 'label');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoDNI", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dni", array()), 'label');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-3\">
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexo", array()), 'label');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'label');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-5\">
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAlta", array()), 'label');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAlta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4\">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaIngreso", array()), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaIngreso", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4\">
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaEgreso", array()), 'label');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaEgreso", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                     
                    <div class=\"col-md-4 form-group\">
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "calle", array()), 'label');
        echo "
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "calle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 

                    <div class=\"col-md-4 form-group\">
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numero", array()), 'label');
        echo "
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numero", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4 form-group\">
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "codigoPostal", array()), 'label');
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "codigoPostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4 form-group\">
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ciudad", array()), 'label');
        echo "
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4 form-group\">
                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "provincia", array()), 'label');
        echo "
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "provincia", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-4 form-group\">
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais", array()), 'label');
        echo "
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>   
            
                    <div class=\"col-md-6\">
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitud", array()), 'label');
        echo "
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitud", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    <div class=\"col-md-6\">
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitud", array()), 'label');
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitud", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div> 
                    ";
        // line 104
        echo "
    
                    <div class=\"form-group col-md-12\">
                        <div class=\"col-md-5\">
                          <label>Agregar responsables</label>
                          <select class=\"ancho form-control\" id=\"responsables\" size=\"5\">
                            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allResponsables"]) ? $context["allResponsables"] : $this->getContext($context, "allResponsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 111
            echo "                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "\">
                                ";
            // line 112
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
        // line 115
        echo "                          </select>
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
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
        foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
            // line 127
            echo "                                  <li class='list-group-item' id='list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "id", array()), "html", null, true);
            echo "'>
                                    ";
            // line 128
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tutor"], "nombre", array()) . " ") . $this->getAttribute($context["tutor"], "apellido", array())), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "dni", array()), "html", null, true);
            echo " 
                                    <span resp-id=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "id", array()), "html", null, true);
            echo "\" class='badge rmItem remove'>X</span>
                                  </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                            </ul>  
                        </div>
                    </div>

                    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button", array()), 'label');
        echo "
                    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button", array()), 'widget', array("attr" => array("class" => "form-control btn btn-primary col-md-12"), "label" => "Editar Alumno"));
        echo "
   
            ";
        // line 139
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

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
        
        $__internal_803857b898e1d67fbda229089c5bc0625ed673d2c73cbed52dec0d70d517a032->leave($__internal_803857b898e1d67fbda229089c5bc0625ed673d2c73cbed52dec0d70d517a032_prof);

    }

    // line 229
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_0ba6a23b879cd9cf2331362201cb43d9a3127dabb0e0be1ae61ce5953b9e6801 = $this->env->getExtension("native_profiler");
        $__internal_0ba6a23b879cd9cf2331362201cb43d9a3127dabb0e0be1ae61ce5953b9e6801->enter($__internal_0ba6a23b879cd9cf2331362201cb43d9a3127dabb0e0be1ae61ce5953b9e6801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 230
        echo "
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/openlayers-master/lib/OpenLayers.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.select-filter.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0ba6a23b879cd9cf2331362201cb43d9a3127dabb0e0be1ae61ce5953b9e6801->leave($__internal_0ba6a23b879cd9cf2331362201cb43d9a3127dabb0e0be1ae61ce5953b9e6801_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:alumno:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 232,  458 => 231,  455 => 230,  449 => 229,  353 => 139,  348 => 137,  344 => 136,  338 => 132,  329 => 129,  323 => 128,  318 => 127,  314 => 126,  301 => 115,  290 => 112,  285 => 111,  281 => 110,  273 => 104,  268 => 98,  264 => 97,  258 => 94,  254 => 93,  247 => 89,  243 => 88,  237 => 85,  233 => 84,  227 => 81,  223 => 80,  217 => 77,  213 => 76,  207 => 73,  203 => 72,  196 => 68,  192 => 67,  185 => 63,  181 => 62,  175 => 59,  171 => 58,  165 => 55,  161 => 54,  155 => 51,  151 => 50,  145 => 47,  141 => 46,  134 => 42,  130 => 41,  124 => 38,  120 => 37,  114 => 34,  110 => 33,  104 => 30,  100 => 29,  94 => 26,  90 => 25,  84 => 22,  80 => 21,  74 => 18,  70 => 17,  67 => 16,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Alumnos | Editar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     <div class="panel panel-primary">*/
/*       <!-- Default panel contents -->*/
/*         <div class="panel-heading">Editar Alumno ~ {{alumno.nombre}} {{alumno.apellido}}</div>*/
/*       <!-- Table -->*/
/*         <div class="panel-body">*/
/* */
/*    {# {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(edit_form) }} #}*/
/* */
/*             {{ form_start(edit_form) }}*/
/*                 {{ form_errors(edit_form) }}*/
/*      */
/*                     <div class="col-md-6">*/
/*                         {{ form_label(edit_form.nombre) }}*/
/*                         {{ form_widget(edit_form.nombre, {'attr': {'class':'form-control'}}) }}*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         {{ form_label(edit_form.apellido) }}*/
/*                         {{ form_widget(edit_form.apellido, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4">*/
/*                         {{ form_label(edit_form.fechaNacimiento) }}*/
/*                         {{ form_widget(edit_form.fechaNacimiento, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4">*/
/*                         {{ form_label(edit_form.tipoDNI) }}*/
/*                         {{ form_widget(edit_form.tipoDNI, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4">*/
/*                         {{ form_label(edit_form.dni) }}*/
/*                         {{ form_widget(edit_form.dni, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-3">*/
/*                         {{ form_label(edit_form.sexo) }}*/
/*                         {{ form_widget(edit_form.sexo, {'attr': {'class':'form-control'}} )}}*/
/*                     </div>*/
/* */
/*                     <div class="col-md-4">*/
/*                         {{ form_label(edit_form.telefono) }}*/
/*                         {{ form_widget(edit_form.telefono, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-5">*/
/*                         {{ form_label(edit_form.email) }}*/
/*                         {{ form_widget(edit_form.email, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4">*/
/*                         {{ form_label(edit_form.fechaAlta) }}*/
/*                         {{ form_widget(edit_form.fechaAlta, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4">*/
/*                         {{ form_label(edit_form.fechaIngreso) }}*/
/*                         {{ form_widget(edit_form.fechaIngreso, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4">*/
/*                         {{ form_label(edit_form.fechaEgreso) }}*/
/*                         {{ form_widget(edit_form.fechaEgreso, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                      */
/*                     <div class="col-md-4 form-group">*/
/*                         {{ form_label(edit_form.calle) }}*/
/*                         {{ form_widget(edit_form.calle, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/* */
/*                     <div class="col-md-4 form-group">*/
/*                         {{ form_label(edit_form.numero) }}*/
/*                         {{ form_widget(edit_form.numero, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4 form-group">*/
/*                         {{ form_label(edit_form.codigoPostal) }}*/
/*                         {{ form_widget(edit_form.codigoPostal, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4 form-group">*/
/*                         {{ form_label(edit_form.ciudad) }}*/
/*                         {{ form_widget(edit_form.ciudad, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4 form-group">*/
/*                         {{ form_label(edit_form.provincia) }}*/
/*                         {{ form_widget(edit_form.provincia, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-4 form-group">*/
/*                         {{ form_label(edit_form.pais) }}*/
/*                         {{ form_widget(edit_form.pais, {'attr': {'class':'form-control'}}) }}*/
/*                     </div>   */
/*             */
/*                     <div class="col-md-6">*/
/*                         {{ form_label(edit_form.latitud) }}*/
/*                         {{ form_widget(edit_form.latitud, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     <div class="col-md-6">*/
/*                         {{ form_label(edit_form.longitud) }}*/
/*                         {{ form_widget(edit_form.longitud, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> */
/*                     {# <div class="col-md-6">*/
/*                         {{ form_label(edit_form.responsables) }}*/
/*                         {{ form_widget(edit_form.responsables, {'attr': {'class':'form-control'}}) }}*/
/*                     </div> #}*/
/* */
/*     */
/*                     <div class="form-group col-md-12">*/
/*                         <div class="col-md-5">*/
/*                           <label>Agregar responsables</label>*/
/*                           <select class="ancho form-control" id="responsables" size="5">*/
/*                             {% for responsable in allResponsables %}*/
/*                               <option value="{{responsable.id}}">*/
/*                                 {{responsable.nombre ~ " " ~ responsable.apellido}} | {{responsable.dni}}*/
/*                               </option>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                         </div>*/
/*                         <div class="col-md-1 margin-top1">*/
/*                           <div id="add" class="btn btn-chico btn-primary btn-chico margin-top1">*/
/*                             <span class="glyphicon glyphicon-plus"></span>*/
/*                             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="col-md-5">*/
/*                             <label>Responsables Agregados</label>*/
/*                             <ul id="listResponsables" class="list-group">*/
/*                                 {% for tutor in responsables %}*/
/*                                   <li class='list-group-item' id='list_{{tutor.id}}'>*/
/*                                     {{tutor.nombre ~ " " ~ tutor.apellido }} | {{tutor.dni}} */
/*                                     <span resp-id="{{tutor.id}}" class='badge rmItem remove'>X</span>*/
/*                                   </li>*/
/*                                 {% endfor %}*/
/*                             </ul>  */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {{ form_label(edit_form.button) }}*/
/*                     {{ form_widget(edit_form.button, {'attr': {'class':'form-control btn btn-primary col-md-12'}, 'label' : 'Editar Alumno'}) }}*/
/*    */
/*             {{ form_end(edit_form) }}*/
/* */
/*         </div>*/
/*     </div>*/
/*     */
/*   <script type="text/javascript">*/
/*   $(document).ready(function() {*/
/*       $('#responsables').selectFilter({*/
/*           filterClass: 'filter-bar form-control',*/
/*           minimumCharacters: 2,*/
/*           inputPlaceholder: 'Buscar',*/
/*           width: '100%',*/
/*           minimumSelectElementSize: 5,*/
/*           inputLocation: 'above'*/
/*       });*/
/* */
/*       $('#add').click(function(){*/
/*         if ($("#list_"+$("#responsables").val()).length == 0) {*/
/*           var txt = "<li class='list-group-item' id='list_"+$('#responsables').val()+"'>"+$('#responsables option:selected').text()+" <span class='badge rmItem rmItem'>X</span><input name='responsables[]'  type='hidden' value='"+$('#responsables').val()+"'/> </li> ";*/
/*           $('#listResponsables').append(txt);*/
/*           $('.rmItem').click(function(){*/
/*             $(this).parent().remove();*/
/*           });*/
/* */
/*         };*/
/*       });*/
/* */
/*       function loadMaps(){*/
/*         var lat            = -34.920797;*/
/*         var lon            =  -57.953198;*/
/*         var zoom           = 14;*/
/* */
/*         var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984*/
/*         var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection*/
/*         var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);*/
/* */
/*         map = new OpenLayers.Map("Map");*/
/*         var mapnik         = new OpenLayers.Layer.OSM();*/
/*         map.addLayer(mapnik);*/
/* */
/* */
/*         var markers = new OpenLayers.Layer.Markers( "Markers" );*/
/*         map.addLayer(markers);*/
/*         //markers.addMarker(new OpenLayers.Marker(position));*/
/*         map.setCenter(position, zoom);*/
/*       }*/
/* */
/*       loadMaps();*/
/*       $('.direccion').change(function(){*/
/*         var numero=$('#numero').val();*/
/*         var calle=$('#calle').val();*/
/*         var ciudad = $('#ciudad').val();*/
/*         var codigoPostal = $('#codigoPostal').val();*/
/*         var provincia = $('#provincia').val();*/
/*         var pais=$('#pais').val();*/
/*         var dir = numero + ", " + calle + ", " + ciudad + ", " + provincia + ", " + codigoPostal + ", " + pais;*/
/*         $.ajax({*/
/*           url : ' http://nominatim.openstreetmap.org/search?q='+dir+'&format=json&polygon=1&addressdetails=1',*/
/*           cache: false*/
/*         })*/
/*           .done(function( direcciones ) {*/
/*             if (!direcciones.length == 0){*/
/*               $('.opcion').remove();*/
/*               $(direcciones).each(function(index, dir){*/
/*                  $('#resultados').append('<option class="opcion" value="'+dir['place_id']+'" id="'+dir['place_id']+'" lat="'+dir['lat']+'" long="'+dir['lon']+'">'+dir['display_name']+'</option>');*/
/*               });*/
/*             }*/
/* */
/*           });*/
/*       });*/
/*       $('#resultados').change(function(){*/
/*         var option = $("#resultados option:selected");*/
/*         $('#long').val(option.attr('long'));*/
/*         $('#lat').val(option.attr('lat'));*/
/*         $('#direccion').val(option.text());*/
/*         var position       = new OpenLayers.LonLat(option.attr('long'), option.attr('lat'))*/
/*                               .transform(*/
/*                                 new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984*/
/*                                 map.getProjectionObject() // to Spherical Mercator Projection*/
/*                               );*/
/*         var markers = new OpenLayers.Layer.Markers( "Markers" );*/
/*         map.addLayer(markers);*/
/*         markers.addMarker(new OpenLayers.Marker(position));*/
/*         map.setCenter(position, 15);*/
/*       });*/
/*   });*/
/* */
/*   </script>*/
/* {% endblock %}*/
/* */
/* {% block addJS %}*/
/* */
/* <script src="{{asset("/js/openlayers-master/lib/OpenLayers.js")}}"></script>*/
/* <script src="{{asset("/js/jquery.select-filter.min.js")}}"></script>*/
/* {% endblock %}*/
/* */
/* */
