<?php

/* AnexaCooperadoraBundle:responsable:new.html.twig */
class __TwigTemplate_c1b2a7fea84dc285ffb9e1ebe94d2afd8bca2b1c5ff0f09ffd409d1f14911b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:responsable:new.html.twig", 1);
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
        $__internal_7de66282db11b87f83e61bd39e966d67f0c7f12d56b9672babb19e97e5c40322 = $this->env->getExtension("native_profiler");
        $__internal_7de66282db11b87f83e61bd39e966d67f0c7f12d56b9672babb19e97e5c40322->enter($__internal_7de66282db11b87f83e61bd39e966d67f0c7f12d56b9672babb19e97e5c40322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:responsable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de66282db11b87f83e61bd39e966d67f0c7f12d56b9672babb19e97e5c40322->leave($__internal_7de66282db11b87f83e61bd39e966d67f0c7f12d56b9672babb19e97e5c40322_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_239e1a7df48d9f783d6cde41f1bdc6f48bf597e0f57ff6e99e845be93da95fad = $this->env->getExtension("native_profiler");
        $__internal_239e1a7df48d9f783d6cde41f1bdc6f48bf597e0f57ff6e99e845be93da95fad->enter($__internal_239e1a7df48d9f783d6cde41f1bdc6f48bf597e0f57ff6e99e845be93da95fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Responsables | Agregar";
        
        $__internal_239e1a7df48d9f783d6cde41f1bdc6f48bf597e0f57ff6e99e845be93da95fad->leave($__internal_239e1a7df48d9f783d6cde41f1bdc6f48bf597e0f57ff6e99e845be93da95fad_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_550a4e56263bf0a72c182e3dd4684d7f71248591a0b30a8c106939f3d9769447 = $this->env->getExtension("native_profiler");
        $__internal_550a4e56263bf0a72c182e3dd4684d7f71248591a0b30a8c106939f3d9769447->enter($__internal_550a4e56263bf0a72c182e3dd4684d7f71248591a0b30a8c106939f3d9769447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "\t<div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Agregar Responsable</div>
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
          <div class=\"col-md-4\">
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
          <div class=\"form-group col-md-12\">
              <div class=\"col-md-4\">
                  ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoResponsable", array()), 'label');
        echo "
                  ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoResponsable", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div> 
              <div class=\"col-md-4\">
                  ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'label');
        echo "
                  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
              <div class=\"col-md-4\">
                  ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "
                  ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
          </div>   
              <div class=\"col-md-4 form-group\">
                  ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alumnos", array()), 'label');
        echo "
                  ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alumnos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>                 
    
          ";
        // line 104
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), 'label');
        echo "
            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), 'widget', array("attr" => array("class" => "form-control btn btn-primary col-md-12"), "label" => "Agregar Responsable"));
        echo "

      ";
        // line 107
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>


  <script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#alumnos').selectFilter({
            filterClass: 'filter-bar form-control',
            minimumCharacters: 2,
            inputPlaceholder: 'Buscar',
            width: '100%',
            minimumSelectElementSize: 5,
            inputLocation: 'above'
        });

        \$('#add').click(function(){
          if (\$(\"#list_\"+\$(\"#alumnos\").val()).length == 0) {
            var txt = \"<li class='list-group-item' id='list_\"+\$('#alumnos').val()+\"'>\"+\$('#alumnos option:selected').text()+\" <span class='badge rmItem'>X</span><input name='alumnos[]'  type='hidden' value='\"+\$('#alumnos').val()+\"'/> </li> \";
            \$('#listAlumnos').append(txt);
            \$('.rmItem').click(function(){
              \$(this).parent().remove();
            });

          };
        });
    });
  </script>
";
        
        $__internal_550a4e56263bf0a72c182e3dd4684d7f71248591a0b30a8c106939f3d9769447->leave($__internal_550a4e56263bf0a72c182e3dd4684d7f71248591a0b30a8c106939f3d9769447_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:responsable:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 107,  205 => 105,  200 => 104,  194 => 72,  190 => 71,  183 => 67,  179 => 66,  173 => 63,  169 => 62,  163 => 59,  159 => 58,  152 => 54,  148 => 53,  142 => 50,  138 => 49,  132 => 46,  128 => 45,  120 => 40,  116 => 39,  110 => 36,  106 => 35,  100 => 32,  96 => 31,  88 => 26,  84 => 25,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  61 => 16,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Responsables | Agregar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/* 	<div class="panel panel-primary">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Agregar Responsable</div>*/
/*     <!-- Table -->*/
/*     <div class="panel-body">*/
/* */
/*        {# {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="Create" />*/
/*         {{ form_end(form) }} #}*/
/* */
/*       {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         <div class="form-group col-md-12">*/
/*           <div class="col-md-6">*/
/*               {{ form_label(form.nombre) }}*/
/*               {{ form_widget(form.nombre, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/*           <div class="col-md-6">*/
/*               {{ form_label(form.apellido) }}*/
/*               {{ form_widget(form.apellido, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*         </div>*/
/*         <div class="form-group col-md-12">*/
/*           <div class="col-md-4">*/
/*               {{ form_label(form.fechaNacimiento) }}*/
/*               {{ form_widget(form.fechaNacimiento, {'attr': {'class':'form-control'}}) }}*/
/*           </div>  */
/*           <div class="col-md-4">*/
/*               {{ form_label(form.tipoDNI) }}*/
/*               {{ form_widget(form.tipoDNI, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*           <div class="col-md-4">*/
/*               {{ form_label(form.dni) }}*/
/*               {{ form_widget(form.dni, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*         </div>*/
/*         <div class="form-group col-md-12">*/
/*           <div class="col-md-3">*/
/*               {{ form_label(form.sexo) }}*/
/*               {{ form_widget(form.sexo, {'attr': {'class':'form-control'}} )}}*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*               {{ form_label(form.telefono) }}*/
/*               {{ form_widget(form.telefono, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*           <div class="col-md-5">*/
/*               {{ form_label(form.email) }}*/
/*               {{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}*/
/*           </div>               */
/*           <div class="form-group col-md-12">*/
/*               <div class="col-md-4">*/
/*                   {{ form_label(form.tipoResponsable) }}*/
/*                   {{ form_widget(form.tipoResponsable, {'attr': {'class':'form-control'}}) }}*/
/*               </div> */
/*               <div class="col-md-4">*/
/*                   {{ form_label(form.usuario) }}*/
/*                   {{ form_widget(form.usuario, {'attr': {'class':'form-control'}}) }}*/
/*               </div>*/
/*               <div class="col-md-4">*/
/*                   {{ form_label(form.direccion) }}*/
/*                   {{ form_widget(form.direccion, {'attr': {'class':'form-control'}}) }}*/
/*               </div>*/
/*           </div>   */
/*               <div class="col-md-4 form-group">*/
/*                   {{ form_label(form.alumnos) }}*/
/*                   {{ form_widget(form.alumnos, {'attr': {'class':'form-control'}}) }}*/
/*               </div>                 */
/*     */
/*           {# <div class="col-md-6">*/
/*               {{ form_label(form.alumnos) }}*/
/*               {{ form_widget(form.alumnos, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*             */
/*               <div class="form-group">*/
/*                 <div class="col-md-5">*/
/*                   <label>Agregar Alumno</label>*/
/*                   <select class="ancho form-control" id="alumnos" size="5">*/
/*                     {% for alumno in allAlumnos %}*/
/*                       <option value="{{alumno.id}}">*/
/*                         {{alumno.nombre ~ " " ~ alumno.apellido}} | {{alumno.dni}}*/
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
/*                   <label>Alumnos Agregados</label>*/
/*                   <ul id="listAlumnos" class="list-group">*/
/*                   </ul>  */
/*                 </div>*/
/*               </div>*/
/*               #}*/
/*         {{ form_label(form.button) }}*/
/*             {{ form_widget(form.button, {'attr': {'class':'form-control btn btn-primary col-md-12'}, 'label': 'Agregar Responsable'}) }}*/
/* */
/*       {{ form_end(form) }}*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*   <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         $('#alumnos').selectFilter({*/
/*             filterClass: 'filter-bar form-control',*/
/*             minimumCharacters: 2,*/
/*             inputPlaceholder: 'Buscar',*/
/*             width: '100%',*/
/*             minimumSelectElementSize: 5,*/
/*             inputLocation: 'above'*/
/*         });*/
/* */
/*         $('#add').click(function(){*/
/*           if ($("#list_"+$("#alumnos").val()).length == 0) {*/
/*             var txt = "<li class='list-group-item' id='list_"+$('#alumnos').val()+"'>"+$('#alumnos option:selected').text()+" <span class='badge rmItem'>X</span><input name='alumnos[]'  type='hidden' value='"+$('#alumnos').val()+"'/> </li> ";*/
/*             $('#listAlumnos').append(txt);*/
/*             $('.rmItem').click(function(){*/
/*               $(this).parent().remove();*/
/*             });*/
/* */
/*           };*/
/*         });*/
/*     });*/
/*   </script>*/
/* {% endblock %}*/
/* */
