<?php

/* AnexaCooperadoraBundle:backend/viejo/responsable:editar.html.twig */
class __TwigTemplate_532ba883c1bda426e3e28c87b7cbc1f76b85312addaf62493a6e6356f5629886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/responsable:editar.html.twig", 1);
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
        $__internal_2e22f051c61fd800e24198a80fa51a063b21caa56a57566aebeb696fc7e6a1b7 = $this->env->getExtension("native_profiler");
        $__internal_2e22f051c61fd800e24198a80fa51a063b21caa56a57566aebeb696fc7e6a1b7->enter($__internal_2e22f051c61fd800e24198a80fa51a063b21caa56a57566aebeb696fc7e6a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/responsable:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e22f051c61fd800e24198a80fa51a063b21caa56a57566aebeb696fc7e6a1b7->leave($__internal_2e22f051c61fd800e24198a80fa51a063b21caa56a57566aebeb696fc7e6a1b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e45fcd3149d68bd2efd2d273c23309c5db174c418e163e819e7972e7e4f2ab61 = $this->env->getExtension("native_profiler");
        $__internal_e45fcd3149d68bd2efd2d273c23309c5db174c418e163e819e7972e7e4f2ab61->enter($__internal_e45fcd3149d68bd2efd2d273c23309c5db174c418e163e819e7972e7e4f2ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Responsables | Editar";
        
        $__internal_e45fcd3149d68bd2efd2d273c23309c5db174c418e163e819e7972e7e4f2ab61->leave($__internal_e45fcd3149d68bd2efd2d273c23309c5db174c418e163e819e7972e7e4f2ab61_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_2851ef0afdba963240eec126fd0662428b5175faef23b1b2e4fc5ac158f57ced = $this->env->getExtension("native_profiler");
        $__internal_2851ef0afdba963240eec126fd0662428b5175faef23b1b2e4fc5ac158f57ced->enter($__internal_2851ef0afdba963240eec126fd0662428b5175faef23b1b2e4fc5ac158f57ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "      <div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Editar Responsable: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "nombre", array()), "html", null, true);
        echo "</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_responsable_editar", array()), "html", null, true);
        echo "?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "id", array()), "html", null, true);
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"nombre\">Nombre</label>
                  <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" required value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "nombre", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-4\">
                  <label for=\"apellido\">Apellido</label>
                  <input type=\"text\" class=\"form-control\" id=\"apellido\" name=\"apellido\" placeholder=\"Apellido\" required value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "apellido", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-4\">
                  <label for=\"tipoResponsable\">Tipo de Responsable</label>
                  <select class=\"form-control\" name=\"tipoResponsable\" required>
                    <option value=\"Padre\"  ";
        // line 25
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoResponsable", array()) == "Padre")) {
            echo "selected";
        }
        echo " >Padre</option>
                    <option value=\"Madre\" ";
        // line 26
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoResponsable", array()) == "Madre")) {
            echo "selected";
        }
        echo ">Madre</option>
                    <option value=\"Tutor\" ";
        // line 27
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoResponsable", array()) == "Tutor")) {
            echo "selected";
        }
        echo ">Tutor</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"fechaNac\">Fecha de Nacimiento</label>
                  <input type=\"date\" class=\"form-control\" id=\"fechaNac\" name=\"fechaNac\" required value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        echo "\" >
                </div>

                <div class=\"col-md-3\">
                  <label for=\"tipoDNI\">Tipo DNI</label>
                  <select class=\"form-control\" name=\"tipoDNI\" required>
                    <option value=\"DNI\" ";
        // line 40
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoDni", array()) == "DNI")) {
            echo "selected";
        }
        echo ">DNI</option>
                    <option value=\"CI\" ";
        // line 41
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoDni", array()) == "CI")) {
            echo "selected";
        }
        echo ">Cedula de Identidad</option>
                    <option value=\"LC\" ";
        // line 42
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoDni", array()) == "LC")) {
            echo "selected";
        }
        echo ">Libreta de Civica</option>
                    <option value=\"LE\" ";
        // line 43
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoDni", array()) == "LE")) {
            echo "selected";
        }
        echo ">Libreta de Enrolamiento </option>>
                  </select>
                </div>
                <div class=\"col-md-5\">
                  <label for=\"dni\">DNI</label>
                  <input type=\"number\" class=\"form-control\" name=\"dni\" id=\"dni\" placeholder=\"N° DNI\" required value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "dni", array()), "html", null, true);
        echo "\">
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-3\">
                  <label for=\"sexo\">Sexo</label>
                   <select  class=\"form-control\"  id=\"sexo\" name=\"sexo\" required>
                      <option value=\"M\" ";
        // line 55
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "sexo", array()) == "M")) {
            echo "selected";
        }
        echo ">Masculino</option>
                      <option value=\"F\" ";
        // line 56
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "sexo", array()) == "F")) {
            echo "selected";
        }
        echo ">Femenino</option>
                      <option value=\"O\" ";
        // line 57
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "sexo", array()) == "O")) {
            echo "selected";
        }
        echo ">Otro</option>
                  </select>
                </div>
                <div class=\"col-md-3\">
                  <label for=\"telefono\">Telefono</label>
                  <input type=\"number\" class=\"form-control\" id=\"telefono\" name =\"telefono\" placeholder=\"N° Telefonico\" required value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "telefono", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"direccion\">Direccion</label>
                  <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" placeholder=\"Direccion\" required value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "direccion", array()), "html", null, true);
        echo "\">
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-6\">
                  <label for=\"email\">Email</label>
                  <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "email", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-3\">
                  <label for=\"username\">Usuario</label>
                  <input type=\"text\" class=\"form-control\" id=\"fechaIngreso\" name=\"username\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-3\">
                  <label for=\"pass\">Contraseña</label>
                  <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"password\">
                </div>


              </div>
              <div class=\"form-group\">
                <div class=\"col-md-5\">
                  <label>Agregar Alumnos</label>
                  <select class=\"ancho form-control\" id=\"alumnos\" size=\"5\">
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allAlumnos"]) ? $context["allAlumnos"] : $this->getContext($context, "allAlumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 90
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 91
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
        // line 94
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
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 106
            echo "                      <li class='list-group-item' id='list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "'>
                        ";
            // line 107
            echo twig_escape_filter($this->env, (($this->getAttribute($context["alumno"], "nombre", array()) . " ") . $this->getAttribute($context["alumno"], "apellido", array())), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "
                        <span alum-id=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\" class='badge rmItem remove'>X</span>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                  </ul>  
                </div>
              </div>
              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Editar Responsable</button>
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

            \$('.remove').click(function(){
              \$('#listAlumnos').append('<input name=\"alumnosRemove[]\"\"  type=\"hidden\" value=\"'+\$(this).attr('alum-id')+'\"/>');
              \$(this).parent().remove();
            });
        });
      </script>
";
        
        $__internal_2851ef0afdba963240eec126fd0662428b5175faef23b1b2e4fc5ac158f57ced->leave($__internal_2851ef0afdba963240eec126fd0662428b5175faef23b1b2e4fc5ac158f57ced_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/responsable:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 111,  271 => 108,  265 => 107,  260 => 106,  256 => 105,  243 => 94,  232 => 91,  227 => 90,  223 => 89,  207 => 76,  200 => 72,  191 => 66,  184 => 62,  174 => 57,  168 => 56,  162 => 55,  152 => 48,  142 => 43,  136 => 42,  130 => 41,  124 => 40,  115 => 34,  103 => 27,  97 => 26,  91 => 25,  83 => 20,  76 => 16,  69 => 12,  63 => 11,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Responsables | Editar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       <div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Editar Responsable: {{responsable.nombre}}</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{URL.backend_responsable_editar}}?id={{responsable.id}}" method="post">*/
/*               <input type="hidden" name="token" value="{{token}}">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="nombre">Nombre</label>*/
/*                   <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required value="{{responsable.nombre}}">*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="apellido">Apellido</label>*/
/*                   <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required value="{{responsable.apellido}}">*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="tipoResponsable">Tipo de Responsable</label>*/
/*                   <select class="form-control" name="tipoResponsable" required>*/
/*                     <option value="Padre"  {% if responsable.tipoResponsable == "Padre" %}selected{% endif %} >Padre</option>*/
/*                     <option value="Madre" {% if responsable.tipoResponsable == "Madre" %}selected{% endif %}>Madre</option>*/
/*                     <option value="Tutor" {% if responsable.tipoResponsable == "Tutor" %}selected{% endif %}>Tutor</option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                   <input type="date" class="form-control" id="fechaNac" name="fechaNac" required value="{{responsable.fechaNacimiento | date("Y-m-d") }}" >*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3">*/
/*                   <label for="tipoDNI">Tipo DNI</label>*/
/*                   <select class="form-control" name="tipoDNI" required>*/
/*                     <option value="DNI" {% if responsable.tipoDni == "DNI" %}selected{% endif %}>DNI</option>*/
/*                     <option value="CI" {% if responsable.tipoDni == "CI" %}selected{% endif %}>Cedula de Identidad</option>*/
/*                     <option value="LC" {% if responsable.tipoDni == "LC" %}selected{% endif %}>Libreta de Civica</option>*/
/*                     <option value="LE" {% if responsable.tipoDni == "LE" %}selected{% endif %}>Libreta de Enrolamiento </option>>*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label for="dni">DNI</label>*/
/*                   <input type="number" class="form-control" name="dni" id="dni" placeholder="N° DNI" required value="{{responsable.dni}}">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-3">*/
/*                   <label for="sexo">Sexo</label>*/
/*                    <select  class="form-control"  id="sexo" name="sexo" required>*/
/*                       <option value="M" {% if responsable.sexo == "M" %}selected{% endif %}>Masculino</option>*/
/*                       <option value="F" {% if responsable.sexo == "F" %}selected{% endif %}>Femenino</option>*/
/*                       <option value="O" {% if responsable.sexo == "O" %}selected{% endif %}>Otro</option>*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="telefono">Telefono</label>*/
/*                   <input type="number" class="form-control" id="telefono" name ="telefono" placeholder="N° Telefonico" required value="{{responsable.telefono}}">*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="direccion">Direccion</label>*/
/*                   <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required value="{{responsable.direccion}}">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-6">*/
/*                   <label for="email">Email</label>*/
/*                   <input type="email" class="form-control" id="email" name="email" required value="{{responsable.email}}">*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="username">Usuario</label>*/
/*                   <input type="text" class="form-control" id="fechaIngreso" name="username" value="{{usuario.username}}">*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="pass">Contraseña</label>*/
/*                   <input type="password" class="form-control" id="pass" name="password">*/
/*                 </div>*/
/* */
/* */
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-5">*/
/*                   <label>Agregar Alumnos</label>*/
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
/*                     {% for alumno in alumnos %}*/
/*                       <li class='list-group-item' id='list_{{alumno.id}}'>*/
/*                         {{alumno.nombre ~ " " ~ alumno.apellido }} | {{alumno.dni}}*/
/*                         <span alum-id="{{alumno.id}}" class='badge rmItem remove'>X</span>*/
/*                       </li>*/
/*                     {% endfor %}*/
/*                   </ul>  */
/*                 </div>*/
/*               </div>*/
/*               <button type="submit" class="btn btn-primary col-md-12">Editar Responsable</button>*/
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
/* */
/*             $('.remove').click(function(){*/
/*               $('#listAlumnos').append('<input name="alumnosRemove[]""  type="hidden" value="'+$(this).attr('alum-id')+'"/>');*/
/*               $(this).parent().remove();*/
/*             });*/
/*         });*/
/*       </script>*/
/* {% endblock %}*/
/* */
