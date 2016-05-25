<?php

/* AnexaCooperadoraBundle:responsable:edit.html.twig */
class __TwigTemplate_f2b37adb77ad3d947756e19959906d63ce64447e1638f16e26ccf65e735b92cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:responsable:edit.html.twig", 1);
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
        $__internal_310be22d152f1b24feb73fcccc8790cd4e5cfbb64d0ea8de098594df12a60da8 = $this->env->getExtension("native_profiler");
        $__internal_310be22d152f1b24feb73fcccc8790cd4e5cfbb64d0ea8de098594df12a60da8->enter($__internal_310be22d152f1b24feb73fcccc8790cd4e5cfbb64d0ea8de098594df12a60da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:responsable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_310be22d152f1b24feb73fcccc8790cd4e5cfbb64d0ea8de098594df12a60da8->leave($__internal_310be22d152f1b24feb73fcccc8790cd4e5cfbb64d0ea8de098594df12a60da8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a99fc8bb2c48fb26babfb1a74968afc570a308a421d6fa24d74f1462b264730f = $this->env->getExtension("native_profiler");
        $__internal_a99fc8bb2c48fb26babfb1a74968afc570a308a421d6fa24d74f1462b264730f->enter($__internal_a99fc8bb2c48fb26babfb1a74968afc570a308a421d6fa24d74f1462b264730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Responsable | Editar ";
        
        $__internal_a99fc8bb2c48fb26babfb1a74968afc570a308a421d6fa24d74f1462b264730f->leave($__internal_a99fc8bb2c48fb26babfb1a74968afc570a308a421d6fa24d74f1462b264730f_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_9b6ad693dc45af1c6d334742316affcd0959a3624044d3d478c825dbe10c1224 = $this->env->getExtension("native_profiler");
        $__internal_9b6ad693dc45af1c6d334742316affcd0959a3624044d3d478c825dbe10c1224->enter($__internal_9b6ad693dc45af1c6d334742316affcd0959a3624044d3d478c825dbe10c1224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    <div class=\"panel panel-primary\">
      <!-- Default panel contents -->
        <div class=\"panel-heading\">Editar Responsable ~ ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "apellido", array()), "html", null, true);
        echo "</div>
      <!-- Table -->
        <div class=\"panel-body\">

          ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
              ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
   
                  <div class=\"col-md-6\">
                      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo "
                      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                  <div class=\"col-md-6\">
                      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'label');
        echo "
                      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-4\">
                      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'label');
        echo "
                      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-4\">
                      ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoDNI", array()), 'label');
        echo "
                      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoDNI", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-4\">
                      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dni", array()), 'label');
        echo "
                      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-3\">
                      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexo", array()), 'label');
        echo "
                      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>

                  <div class=\"col-md-4\">
                      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'label');
        echo "
                      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-5\">
                      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
                      ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-4\">
                      ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'label');
        echo "
                      ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-4\">
                      ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoResponsable", array()), 'label');
        echo "
                      ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoResponsable", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                  <div class=\"col-md-4\">
                      ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'label');
        echo "
                      ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>  

                 <div class=\"col-md-6 form-group\">
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "alumnos", array()), 'label');
        echo "
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "alumnos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
                  
                    <div class=\"form-group\">
                      <div class=\"col-md-5\">
                        <label>Agregar Alumno</label>
                        <select class=\"ancho form-control\" id=\"alumnos\" size=\"5\">
                          ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allAlumnos"]) ? $context["allAlumnos"] : $this->getContext($context, "allAlumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 71
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\">
                              ";
            // line 72
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
        // line 75
        echo "                        </select>
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["misAlumnos"]) ? $context["misAlumnos"] : $this->getContext($context, "misAlumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 87
            echo "                              <li class='list-group-item' id='list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "'>
                                ";
            // line 88
            echo twig_escape_filter($this->env, (($this->getAttribute($context["alumno"], "nombre", array()) . " ") . $this->getAttribute($context["alumno"], "apellido", array())), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo " 
                                <span resp-id=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\" class='badge rmItem remove'>X</span>
                              </li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </ul>  
                      </div>
                    </div>
                    

                  ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button", array()), 'label');
        echo "
                  ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button", array()), 'widget', array("attr" => array("class" => "form-control btn btn-primary col-md-12"), "label" => "Editar Responsable"));
        echo "
 
          ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

        </div>
    </div>
    
  
";
        
        $__internal_9b6ad693dc45af1c6d334742316affcd0959a3624044d3d478c825dbe10c1224->leave($__internal_9b6ad693dc45af1c6d334742316affcd0959a3624044d3d478c825dbe10c1224_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:responsable:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 100,  270 => 98,  266 => 97,  259 => 92,  250 => 89,  244 => 88,  239 => 87,  235 => 86,  222 => 75,  211 => 72,  206 => 71,  202 => 70,  192 => 63,  188 => 62,  181 => 58,  177 => 57,  171 => 54,  167 => 53,  161 => 50,  157 => 49,  151 => 46,  147 => 45,  141 => 42,  137 => 41,  130 => 37,  126 => 36,  120 => 33,  116 => 32,  110 => 29,  106 => 28,  100 => 25,  96 => 24,  90 => 21,  86 => 20,  80 => 17,  76 => 16,  70 => 13,  66 => 12,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Responsable | Editar {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     <div class="panel panel-primary">*/
/*       <!-- Default panel contents -->*/
/*         <div class="panel-heading">Editar Responsable ~ {{responsable.nombre}} {{responsable.apellido}}</div>*/
/*       <!-- Table -->*/
/*         <div class="panel-body">*/
/* */
/*           {{ form_start(edit_form) }}*/
/*               {{ form_errors(edit_form) }}*/
/*    */
/*                   <div class="col-md-6">*/
/*                       {{ form_label(edit_form.nombre) }}*/
/*                       {{ form_widget(edit_form.nombre, {'attr': {'class':'form-control'}}) }}*/
/*                   </div>*/
/*                   <div class="col-md-6">*/
/*                       {{ form_label(edit_form.apellido) }}*/
/*                       {{ form_widget(edit_form.apellido, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.fechaNacimiento) }}*/
/*                       {{ form_widget(edit_form.fechaNacimiento, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.tipoDNI) }}*/
/*                       {{ form_widget(edit_form.tipoDNI, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.dni) }}*/
/*                       {{ form_widget(edit_form.dni, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-3">*/
/*                       {{ form_label(edit_form.sexo) }}*/
/*                       {{ form_widget(edit_form.sexo, {'attr': {'class':'form-control'}} )}}*/
/*                   </div>*/
/* */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.telefono) }}*/
/*                       {{ form_widget(edit_form.telefono, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-5">*/
/*                       {{ form_label(edit_form.email) }}*/
/*                       {{ form_widget(edit_form.email, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.direccion) }}*/
/*                       {{ form_widget(edit_form.direccion, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.tipoResponsable) }}*/
/*                       {{ form_widget(edit_form.tipoResponsable, {'attr': {'class':'form-control'}}) }}*/
/*                   </div>*/
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.usuario) }}*/
/*                       {{ form_widget(edit_form.usuario, {'attr': {'class':'form-control'}}) }}*/
/*                   </div>  */
/* */
/*                  <div class="col-md-6 form-group">*/
/*                     {{ form_label(edit_form.alumnos) }}*/
/*                     {{ form_widget(edit_form.alumnos, {'attr': {'class':'form-control'}}) }}*/
/*                 </div> */
/*                   */
/*                     <div class="form-group">*/
/*                       <div class="col-md-5">*/
/*                         <label>Agregar Alumno</label>*/
/*                         <select class="ancho form-control" id="alumnos" size="5">*/
/*                           {% for alumno in allAlumnos %}*/
/*                             <option value="{{alumno.id}}">*/
/*                               {{alumno.nombre ~ " " ~ alumno.apellido}} | {{alumno.dni}}*/
/*                             </option>*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                       <div class="col-md-1 margin-top1">*/
/*                         <div id="add" class="btn btn-chico btn-primary btn-chico margin-top1">*/
/*                           <span class="glyphicon glyphicon-plus"></span>*/
/*                           <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="col-md-5">*/
/*                         <label>Alumnos Agregados</label>*/
/*                         <ul id="listAlumnos" class="list-group">*/
/*                           {% for alumno in misAlumnos %}*/
/*                               <li class='list-group-item' id='list_{{alumno.id}}'>*/
/*                                 {{alumno.nombre ~ " " ~ alumno.apellido }} | {{alumno.dni}} */
/*                                 <span resp-id="{{alumno.id}}" class='badge rmItem remove'>X</span>*/
/*                               </li>*/
/*                           {% endfor %}*/
/*                         </ul>  */
/*                       </div>*/
/*                     </div>*/
/*                     */
/* */
/*                   {{ form_label(edit_form.button) }}*/
/*                   {{ form_widget(edit_form.button, {'attr': {'class':'form-control btn btn-primary col-md-12'}, 'label' : 'Editar Responsable'}) }}*/
/*  */
/*           {{ form_end(edit_form) }}*/
/* */
/*         </div>*/
/*     </div>*/
/*     */
/*   */
/* {% endblock %}*/
/* */
/* */
