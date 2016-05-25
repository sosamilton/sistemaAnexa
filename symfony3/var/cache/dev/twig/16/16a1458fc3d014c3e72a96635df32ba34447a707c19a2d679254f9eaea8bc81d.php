<?php

/* AnexaCooperadoraBundle:backend/alumno:new.html.twig */
class __TwigTemplate_82ce9550f3bb8fce7779263b1572d9e0a902b5a8092f3b5b6adb3abc49c5c976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:backend/alumno:new.html.twig", 1);
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
        $__internal_ee6ce657eec0ace6a3541d5587bfe04ac2480d2d39f1e0424069574354494c67 = $this->env->getExtension("native_profiler");
        $__internal_ee6ce657eec0ace6a3541d5587bfe04ac2480d2d39f1e0424069574354494c67->enter($__internal_ee6ce657eec0ace6a3541d5587bfe04ac2480d2d39f1e0424069574354494c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/alumno:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee6ce657eec0ace6a3541d5587bfe04ac2480d2d39f1e0424069574354494c67->leave($__internal_ee6ce657eec0ace6a3541d5587bfe04ac2480d2d39f1e0424069574354494c67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a034af4f07b12a3f30b0411869ec6ca01d20e1e5a5fae9282d444775f2e9db8 = $this->env->getExtension("native_profiler");
        $__internal_1a034af4f07b12a3f30b0411869ec6ca01d20e1e5a5fae9282d444775f2e9db8->enter($__internal_1a034af4f07b12a3f30b0411869ec6ca01d20e1e5a5fae9282d444775f2e9db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Alumnos | Agregar";
        
        $__internal_1a034af4f07b12a3f30b0411869ec6ca01d20e1e5a5fae9282d444775f2e9db8->leave($__internal_1a034af4f07b12a3f30b0411869ec6ca01d20e1e5a5fae9282d444775f2e9db8_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_fa5a531183817861746cdb499d272d9ac8122202b7bff7352707dc37f00fa6a5 = $this->env->getExtension("native_profiler");
        $__internal_fa5a531183817861746cdb499d272d9ac8122202b7bff7352707dc37f00fa6a5->enter($__internal_fa5a531183817861746cdb499d272d9ac8122202b7bff7352707dc37f00fa6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "\t<div class=\"panel panel-primary\">
      <!-- Default panel contents -->
      <div class=\"panel-heading\">Agregar Alumno</div>
      <!-- Table -->
      <div class=\"panel-body\">

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_fa5a531183817861746cdb499d272d9ac8122202b7bff7352707dc37f00fa6a5->leave($__internal_fa5a531183817861746cdb499d272d9ac8122202b7bff7352707dc37f00fa6a5_prof);

    }

    // line 104
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_eb32c0dba6571193abed165b69098079b131723395007d16f0131fa67dbfce66 = $this->env->getExtension("native_profiler");
        $__internal_eb32c0dba6571193abed165b69098079b131723395007d16f0131fa67dbfce66->enter($__internal_eb32c0dba6571193abed165b69098079b131723395007d16f0131fa67dbfce66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 105
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/openlayers-master/lib/OpenLayers.js\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/jquery.select-filter.min.js\"></script>
";
        
        $__internal_eb32c0dba6571193abed165b69098079b131723395007d16f0131fa67dbfce66->leave($__internal_eb32c0dba6571193abed165b69098079b131723395007d16f0131fa67dbfce66_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/alumno:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 106,  172 => 105,  166 => 104,  71 => 15,  66 => 13,  62 => 12,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Alumnos | Agregar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/* 	<div class="panel panel-primary">*/
/*       <!-- Default panel contents -->*/
/*       <div class="panel-heading">Agregar Alumno</div>*/
/*       <!-- Table -->*/
/*       <div class="panel-body">*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*       </div>*/
/*   </div>*/
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
/* <script src="{{resource}}/js/openlayers-master/lib/OpenLayers.js"></script>*/
/* <script src="{{resource}}/js/jquery.select-filter.min.js"></script>*/
/* {% endblock %}*/
/* */
