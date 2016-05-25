<?php

/* AnexaCooperadoraBundle:backend/viejo/responsable:agregar.html.twig */
class __TwigTemplate_531686d9c55aec30a1b6bf0b8b19d4531297c94d880e400c4883b78060501d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/responsable:agregar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eba8eb4d3cdc47a2a6766e3229712db3eaff21daab3a1a618fc0c0a88b20fa6a = $this->env->getExtension("native_profiler");
        $__internal_eba8eb4d3cdc47a2a6766e3229712db3eaff21daab3a1a618fc0c0a88b20fa6a->enter($__internal_eba8eb4d3cdc47a2a6766e3229712db3eaff21daab3a1a618fc0c0a88b20fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/responsable:agregar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba8eb4d3cdc47a2a6766e3229712db3eaff21daab3a1a618fc0c0a88b20fa6a->leave($__internal_eba8eb4d3cdc47a2a6766e3229712db3eaff21daab3a1a618fc0c0a88b20fa6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba455eceadcc9a46d0262eae85ef589184244afda02d00f4e8250fa93904d80c = $this->env->getExtension("native_profiler");
        $__internal_ba455eceadcc9a46d0262eae85ef589184244afda02d00f4e8250fa93904d80c->enter($__internal_ba455eceadcc9a46d0262eae85ef589184244afda02d00f4e8250fa93904d80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Responsables | Agregar";
        
        $__internal_ba455eceadcc9a46d0262eae85ef589184244afda02d00f4e8250fa93904d80c->leave($__internal_ba455eceadcc9a46d0262eae85ef589184244afda02d00f4e8250fa93904d80c_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_2da2ca4eae0c5037f30cc4825e3ae592e2f00831eab1029645ade8ed1da125fb = $this->env->getExtension("native_profiler");
        $__internal_2da2ca4eae0c5037f30cc4825e3ae592e2f00831eab1029645ade8ed1da125fb->enter($__internal_2da2ca4eae0c5037f30cc4825e3ae592e2f00831eab1029645ade8ed1da125fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Agregar Responsable</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_responsable_agregar", array()), "html", null, true);
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"nombre\">Nombre</label>
                  <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" required>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"apellido\">Apellido</label>
                  <input type=\"text\" class=\"form-control\" id=\"apellido\" name=\"apellido\" placeholder=\"Apellido\" required>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"tipoResponsable\">Tipo de Responsable</label>
                  <select class=\"form-control\" name=\"tipoResponsable\" required>
                    <option value=\"Padre\">Padre</option>
                    <option value=\"Madre\">Madre</option>
                    <option value=\"Tutor\">Tutor</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
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
              <div class=\"form-group\">
                <div class=\"col-md-3\">
                  <label for=\"sexo\">Sexo</label>
                   <select  class=\"form-control\"  id=\"sexo\" name=\"sexo\" required>
                      <option value=\"M\">Masculino</option>
                      <option value=\"F\">Femenino</option>
                      <option value=\"O\">Otro</option>
                  </select>
                </div>
                <div class=\"col-md-3\">
                  <label for=\"telefono\">Telefono</label>
                  <input type=\"number\" class=\"form-control\" id=\"telefono\" name =\"telefono\" placeholder=\"N° Telefonico\" required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"direccion\">Direccion</label>
                  <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" placeholder=\"Direccion\" required>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-6\">
                  <label for=\"email\">Email</label>
                  <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"col-md-3\">
                  <label for=\"username\">Usuario</label>
                  <input type=\"text\" class=\"form-control\" id=\"fechaIngreso\" name=\"username\">
                </div>
                <div class=\"col-md-3\">
                  <label for=\"pass\">Contraseña</label>
                  <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"password\">
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-5\">
                  <label>Agregar Alumno</label>
                  <select class=\"ancho form-control\" id=\"alumnos\" size=\"5\">
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allAlumnos"]) ? $context["allAlumnos"] : $this->getContext($context, "allAlumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 88
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($context["alumno"], "nombre", array()) . " ") . $this->getAttribute($context["alumno"], "apellido", array())), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "
                      </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                  </select>
                </div>
                <div class=\"col-md-1 margin-top1\">
                  <div id=\"add\" class=\"btn btn-chico btn-primary btn-chico margin-top1\">
                    <span class=\"glyphicon glyphicon-plus\"></span>
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                  </div>
                </div>
                <div class=\"col-md-5\">
                  <label>Alumnos Agregados</label>
                  <ul id=\"listAlumnos\" class=\"list-group\">
                  </ul>  
                </div>
              </div>
              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Agregar Responsable</button>
            </form>
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
        
        $__internal_2da2ca4eae0c5037f30cc4825e3ae592e2f00831eab1029645ade8ed1da125fb->leave($__internal_2da2ca4eae0c5037f30cc4825e3ae592e2f00831eab1029645ade8ed1da125fb_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/responsable:agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 92,  151 => 89,  146 => 88,  142 => 87,  64 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Responsables | Agregar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Agregar Responsable</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{URL.backend_responsable_agregar}}" method="post">*/
/*               <input type="hidden" name="token" value="{{token}}">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="nombre">Nombre</label>*/
/*                   <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="apellido">Apellido</label>*/
/*                   <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="tipoResponsable">Tipo de Responsable</label>*/
/*                   <select class="form-control" name="tipoResponsable" required>*/
/*                     <option value="Padre">Padre</option>*/
/*                     <option value="Madre">Madre</option>*/
/*                     <option value="Tutor">Tutor</option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                   <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>*/
/*                 </div>*/
/* */
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
/*               <div class="form-group">*/
/*                 <div class="col-md-3">*/
/*                   <label for="sexo">Sexo</label>*/
/*                    <select  class="form-control"  id="sexo" name="sexo" required>*/
/*                       <option value="M">Masculino</option>*/
/*                       <option value="F">Femenino</option>*/
/*                       <option value="O">Otro</option>*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="telefono">Telefono</label>*/
/*                   <input type="number" class="form-control" id="telefono" name ="telefono" placeholder="N° Telefonico" required>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="direccion">Direccion</label>*/
/*                   <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-6">*/
/*                   <label for="email">Email</label>*/
/*                   <input type="email" class="form-control" id="email" name="email" required>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="username">Usuario</label>*/
/*                   <input type="text" class="form-control" id="fechaIngreso" name="username">*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="pass">Contraseña</label>*/
/*                   <input type="password" class="form-control" id="pass" name="password">*/
/*                 </div>*/
/*               </div>*/
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
/*               <button type="submit" class="btn btn-primary col-md-12">Agregar Responsable</button>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/*       <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/*             $('#alumnos').selectFilter({*/
/*                 filterClass: 'filter-bar form-control',*/
/*                 minimumCharacters: 2,*/
/*                 inputPlaceholder: 'Buscar',*/
/*                 width: '100%',*/
/*                 minimumSelectElementSize: 5,*/
/*                 inputLocation: 'above'*/
/*             });*/
/* */
/*             $('#add').click(function(){*/
/*               if ($("#list_"+$("#alumnos").val()).length == 0) {*/
/*                 var txt = "<li class='list-group-item' id='list_"+$('#alumnos').val()+"'>"+$('#alumnos option:selected').text()+" <span class='badge rmItem'>X</span><input name='alumnos[]'  type='hidden' value='"+$('#alumnos').val()+"'/> </li> ";*/
/*                 $('#listAlumnos').append(txt);*/
/*                 $('.rmItem').click(function(){*/
/*                   $(this).parent().remove();*/
/*                 });*/
/* */
/*               };*/
/*             });*/
/*         });*/
/*       </script>*/
/* {% endblock %}*/
/* */
