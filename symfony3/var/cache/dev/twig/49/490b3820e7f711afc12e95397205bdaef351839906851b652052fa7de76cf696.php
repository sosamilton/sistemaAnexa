<?php

/* AnexaCooperadoraBundle:alumno:new.html.twig */
class __TwigTemplate_7c33bcacce2426cbf7334331121f892b0eb594097ab4e6bbf1f728699141835d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:alumno:new.html.twig", 1);
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
        $__internal_cf0261dc0e3746037465859d89c8457d52f1d4616c32df8a34ffe6b69a90cb99 = $this->env->getExtension("native_profiler");
        $__internal_cf0261dc0e3746037465859d89c8457d52f1d4616c32df8a34ffe6b69a90cb99->enter($__internal_cf0261dc0e3746037465859d89c8457d52f1d4616c32df8a34ffe6b69a90cb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:alumno:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf0261dc0e3746037465859d89c8457d52f1d4616c32df8a34ffe6b69a90cb99->leave($__internal_cf0261dc0e3746037465859d89c8457d52f1d4616c32df8a34ffe6b69a90cb99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da052c2312aa9364453570dc892d4bb0d369279a14adcaa445186a6d958e02a8 = $this->env->getExtension("native_profiler");
        $__internal_da052c2312aa9364453570dc892d4bb0d369279a14adcaa445186a6d958e02a8->enter($__internal_da052c2312aa9364453570dc892d4bb0d369279a14adcaa445186a6d958e02a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Alumnos | Agregar";
        
        $__internal_da052c2312aa9364453570dc892d4bb0d369279a14adcaa445186a6d958e02a8->leave($__internal_da052c2312aa9364453570dc892d4bb0d369279a14adcaa445186a6d958e02a8_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_783315a1e29ae4fdc4c930c978e7e885c711effc8d1b2502554a462727bdb8ae = $this->env->getExtension("native_profiler");
        $__internal_783315a1e29ae4fdc4c930c978e7e885c711effc8d1b2502554a462727bdb8ae->enter($__internal_783315a1e29ae4fdc4c930c978e7e885c711effc8d1b2502554a462727bdb8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "\t<div class=\"panel panel-primary\">
      <!-- Default panel contents -->
      <div class=\"panel-heading\">Agregar Alumno</div>
      <!-- Table -->
      <div class=\"panel-body\">

   ";
        // line 16
        echo "
  ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group col-md-12\">
      <div class=\"col-md-6\">
          ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-md-6\">
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'label');
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div> 
    </div>
    <div class=\"form-group col-md-12\">
      <div class=\"col-md-4 form-group\">
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'label');
        echo "
          ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>  
      <div class=\"col-md-4\">
          ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoDNI", array()), 'label');
        echo "
          ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoDNI", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div> 
      <div class=\"col-md-4\">
          ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'label');
        echo "
          ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div> 
    </div>
    <div class=\"form-group col-md-12\">
      <div class=\"col-md-3\">
          ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'label');
        echo "
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-md-4\">
          ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label');
        echo "
          ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div> 
      <div class=\"col-md-5\">
          ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
          ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    <div class=\"form-group col-md-12\">
      <div class=\"col-md-4 form-group\">
          ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAlta", array()), 'label');
        echo "
          ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAlta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-md-4\">
          ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaIngreso", array()), 'label');
        echo "
          ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaIngreso", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div> 
      <div class=\"col-md-4\">
          ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEgreso", array()), 'label');
        echo "
          ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEgreso", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div> 
    </div>
    <div class=\"form-group col-md-12\">  
        <div class=\"col-md-4\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calle", array()), 'label');
        echo "
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 

        <div class=\"col-md-4\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero", array()), 'label');
        echo "
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 
        <div class=\"col-md-4\">
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigoPostal", array()), 'label');
        echo "
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigoPostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 
    </div>
    <div class=\"form-group col-md-12\">
        <div class=\"col-md-4\">
            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'label');
        echo "
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 
        <div class=\"col-md-4\">
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'label');
        echo "
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 
        <div class=\"col-md-4\">
            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'label');
        echo "
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 
    </div>
    
    <div class=\"form-group col-md-12\"> 
        <div class=\"col-md-6\">
            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitud", array()), 'label');
        echo "
            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitud", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 
        <div class=\"col-md-6\">
            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitud", array()), 'label');
        echo "
            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitud", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div> 
    </div>
    <div class=\"col-md-6 form-group\">
        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsables", array()), 'label');
        echo "
        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsables", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>

        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), 'label');
        echo "
        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), 'widget', array("attr" => array("class" => "form-control btn btn-primary col-md-12"), "label" => "Agregar Alumno"));
        echo "

     
";
        // line 120
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
        
        $__internal_783315a1e29ae4fdc4c930c978e7e885c711effc8d1b2502554a462727bdb8ae->leave($__internal_783315a1e29ae4fdc4c930c978e7e885c711effc8d1b2502554a462727bdb8ae_prof);

    }

    // line 209
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_9505ef4a3e460b108ff58efa4becff4b6a826f85fccb5ff77a8631d2865e5f10 = $this->env->getExtension("native_profiler");
        $__internal_9505ef4a3e460b108ff58efa4becff4b6a826f85fccb5ff77a8631d2865e5f10->enter($__internal_9505ef4a3e460b108ff58efa4becff4b6a826f85fccb5ff77a8631d2865e5f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 210
        echo "
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/openlayers-master/lib/OpenLayers.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.select-filter.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9505ef4a3e460b108ff58efa4becff4b6a826f85fccb5ff77a8631d2865e5f10->leave($__internal_9505ef4a3e460b108ff58efa4becff4b6a826f85fccb5ff77a8631d2865e5f10_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:alumno:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 212,  404 => 211,  401 => 210,  395 => 209,  300 => 120,  294 => 117,  290 => 116,  284 => 113,  280 => 112,  273 => 108,  269 => 107,  263 => 104,  259 => 103,  250 => 97,  246 => 96,  240 => 93,  236 => 92,  230 => 89,  226 => 88,  218 => 83,  214 => 82,  208 => 79,  204 => 78,  197 => 74,  193 => 73,  185 => 68,  181 => 67,  175 => 64,  171 => 63,  165 => 60,  161 => 59,  153 => 54,  149 => 53,  143 => 50,  139 => 49,  133 => 46,  129 => 45,  121 => 40,  117 => 39,  111 => 36,  107 => 35,  101 => 32,  97 => 31,  89 => 26,  85 => 25,  79 => 22,  75 => 21,  69 => 18,  65 => 17,  62 => 16,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*    {# {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }} #}*/
/* */
/*   {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="form-group col-md-12">*/
/*       <div class="col-md-6">*/
/*           {{ form_label(form.nombre) }}*/
/*           {{ form_widget(form.nombre, {'attr': {'class':'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-md-6">*/
/*           {{ form_label(form.apellido) }}*/
/*           {{ form_widget(form.apellido, {'attr': {'class':'form-control'}}) }}*/
/*       </div> */
/*     </div>*/
/*     <div class="form-group col-md-12">*/
/*       <div class="col-md-4 form-group">*/
/*           {{ form_label(form.fechaNacimiento) }}*/
/*           {{ form_widget(form.fechaNacimiento, {'attr': {'class':'form-control'}}) }}*/
/*       </div>  */
/*       <div class="col-md-4">*/
/*           {{ form_label(form.tipoDNI) }}*/
/*           {{ form_widget(form.tipoDNI, {'attr': {'class':'form-control'}}) }}*/
/*       </div> */
/*       <div class="col-md-4">*/
/*           {{ form_label(form.dni) }}*/
/*           {{ form_widget(form.dni, {'attr': {'class':'form-control'}}) }}*/
/*       </div> */
/*     </div>*/
/*     <div class="form-group col-md-12">*/
/*       <div class="col-md-3">*/
/*           {{ form_label(form.sexo) }}*/
/*           {{ form_widget(form.sexo, {'attr': {'class':'form-control'}} )}}*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*           {{ form_label(form.telefono) }}*/
/*           {{ form_widget(form.telefono, {'attr': {'class':'form-control'}}) }}*/
/*       </div> */
/*       <div class="col-md-5">*/
/*           {{ form_label(form.email) }}*/
/*           {{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group col-md-12">*/
/*       <div class="col-md-4 form-group">*/
/*           {{ form_label(form.fechaAlta) }}*/
/*           {{ form_widget(form.fechaAlta, {'attr': {'class':'form-control'}}) }}*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*           {{ form_label(form.fechaIngreso) }}*/
/*           {{ form_widget(form.fechaIngreso, {'attr': {'class':'form-control'}}) }}*/
/*       </div> */
/*       <div class="col-md-4">*/
/*           {{ form_label(form.fechaEgreso) }}*/
/*           {{ form_widget(form.fechaEgreso, {'attr': {'class':'form-control'}}) }}*/
/*       </div> */
/*     </div>*/
/*     <div class="form-group col-md-12">  */
/*         <div class="col-md-4">*/
/*             {{ form_label(form.calle) }}*/
/*             {{ form_widget(form.calle, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/* */
/*         <div class="col-md-4">*/
/*             {{ form_label(form.numero) }}*/
/*             {{ form_widget(form.numero, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/*         <div class="col-md-4">*/
/*             {{ form_label(form.codigoPostal) }}*/
/*             {{ form_widget(form.codigoPostal, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/*     </div>*/
/*     <div class="form-group col-md-12">*/
/*         <div class="col-md-4">*/
/*             {{ form_label(form.ciudad) }}*/
/*             {{ form_widget(form.ciudad, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/*         <div class="col-md-4">*/
/*             {{ form_label(form.provincia) }}*/
/*             {{ form_widget(form.provincia, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/*         <div class="col-md-4">*/
/*             {{ form_label(form.pais) }}*/
/*             {{ form_widget(form.pais, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/*     </div>*/
/*     */
/*     <div class="form-group col-md-12"> */
/*         <div class="col-md-6">*/
/*             {{ form_label(form.latitud) }}*/
/*             {{ form_widget(form.latitud, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/*         <div class="col-md-6">*/
/*             {{ form_label(form.longitud) }}*/
/*             {{ form_widget(form.longitud, {'attr': {'class':'form-control'}}) }}*/
/*         </div> */
/*     </div>*/
/*     <div class="col-md-6 form-group">*/
/*         {{ form_label(form.responsables) }}*/
/*         {{ form_widget(form.responsables, {'attr': {'class':'form-control'}}) }}*/
/*     </div>*/
/* */
/*         {{ form_label(form.button) }}*/
/*         {{ form_widget(form.button, {'attr': {'class':'form-control btn btn-primary col-md-12'}, 'label': 'Agregar Alumno'}) }}*/
/* */
/*      */
/* {{ form_end(form) }}*/
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
/* */
/* <script src="{{asset("/js/openlayers-master/lib/OpenLayers.js")}}"></script>*/
/* <script src="{{asset("/js/jquery.select-filter.min.js")}}"></script>*/
/* {% endblock %}*/
/* */
