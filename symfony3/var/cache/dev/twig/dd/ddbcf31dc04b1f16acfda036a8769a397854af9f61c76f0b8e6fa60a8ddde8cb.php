<?php

/* AnexaCooperadoraBundle:backend/viejo/configuracion:index.html.twig */
class __TwigTemplate_52af877558a30c29812281cbb7d9e705ac4839705ddd77039481be344fdd2cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/configuracion:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addJS' => array($this, 'block_addJS'),
            'addCSS' => array($this, 'block_addCSS'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84770cda4bb6937070c1d116d0c829249f0fd2f92f21089cbbe4b247f2bf5d28 = $this->env->getExtension("native_profiler");
        $__internal_84770cda4bb6937070c1d116d0c829249f0fd2f92f21089cbbe4b247f2bf5d28->enter($__internal_84770cda4bb6937070c1d116d0c829249f0fd2f92f21089cbbe4b247f2bf5d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/configuracion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84770cda4bb6937070c1d116d0c829249f0fd2f92f21089cbbe4b247f2bf5d28->leave($__internal_84770cda4bb6937070c1d116d0c829249f0fd2f92f21089cbbe4b247f2bf5d28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_853851ea0b22cbd8a75db305a7fa198b74c9eb7266176bb514f5ab3a99f08907 = $this->env->getExtension("native_profiler");
        $__internal_853851ea0b22cbd8a75db305a7fa198b74c9eb7266176bb514f5ab3a99f08907->enter($__internal_853851ea0b22cbd8a75db305a7fa198b74c9eb7266176bb514f5ab3a99f08907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administraci&oacute;n | Configuraci&oacute;n ";
        
        $__internal_853851ea0b22cbd8a75db305a7fa198b74c9eb7266176bb514f5ab3a99f08907->leave($__internal_853851ea0b22cbd8a75db305a7fa198b74c9eb7266176bb514f5ab3a99f08907_prof);

    }

    // line 5
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_34c7dc02eea09729e95b0146bf3a3997de70ba50d30c9a2654716f058ad3c435 = $this->env->getExtension("native_profiler");
        $__internal_34c7dc02eea09729e95b0146bf3a3997de70ba50d30c9a2654716f058ad3c435->enter($__internal_34c7dc02eea09729e95b0146bf3a3997de70ba50d30c9a2654716f058ad3c435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        
        $__internal_34c7dc02eea09729e95b0146bf3a3997de70ba50d30c9a2654716f058ad3c435->leave($__internal_34c7dc02eea09729e95b0146bf3a3997de70ba50d30c9a2654716f058ad3c435_prof);

    }

    // line 8
    public function block_addCSS($context, array $blocks = array())
    {
        $__internal_eeccc1f2c64069f2f4872f637dcf04c7a7a4beae1956f4cad1cb3e2452227bc4 = $this->env->getExtension("native_profiler");
        $__internal_eeccc1f2c64069f2f4872f637dcf04c7a7a4beae1956f4cad1cb3e2452227bc4->enter($__internal_eeccc1f2c64069f2f4872f637dcf04c7a7a4beae1956f4cad1cb3e2452227bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addCSS"));

        
        $__internal_eeccc1f2c64069f2f4872f637dcf04c7a7a4beae1956f4cad1cb3e2452227bc4->leave($__internal_eeccc1f2c64069f2f4872f637dcf04c7a7a4beae1956f4cad1cb3e2452227bc4_prof);

    }

    // line 11
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_36e8462baae7f695afe4aeb32885082820de8564cbfbed91e9273b0bdbd21f24 = $this->env->getExtension("native_profiler");
        $__internal_36e8462baae7f695afe4aeb32885082820de8564cbfbed91e9273b0bdbd21f24->enter($__internal_36e8462baae7f695afe4aeb32885082820de8564cbfbed91e9273b0bdbd21f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 12
        echo "      ";
        if (array_key_exists("msj", $context)) {
            // line 13
            echo "        <div class=\"alert alert-";
            if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
                echo "success";
            } else {
                echo "danger";
            }
            echo " alert-dismissible fade in\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          <strong>Atenci&oacute;n! </strong>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 18
        echo "      <div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Configuraci&oacute;n</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_configuracion_editar", array()), "html", null, true);
        echo "\" method=\"post\">
              <div class=\"form-group\">
                <div class=\"col-md-12\">
                  <label for=\"titulo\">T&iacute;tulo del Sitio</label>
                  <input type=\"text\" class=\"form-control\" id=\"titulo\" name=\"dato[5]\" required value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 5, array(), "array"), "valorTextual", array()), "html", null, true);
        echo "\">
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-12\">
                  <label for=\"descripcion\">Descripci&oacute;n del Sitio</label>
                  <div>
                  <textarea type=\"text\" class=\"form-control\" id=\"descripcion\" name=\"dato[0]\" rows=\"5\" required>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array"), "valorTextual", array()), "html", null, true);
        echo "</textarea></div> 
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-12\">
                  <label for=\"titulo\">Email de Contacto</label>
                  <input type=\"email\" class=\"form-control\" id=\"titulo\" name=\"dato[2]\" required value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 2, array(), "array"), "valorTextual", array()), "html", null, true);
        echo "\">
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-6\">
                  <label for=\"paginacion\">Paginaci&oacute;n</label>
                  <input type=\"number\" class=\"form-control\" id=\"paginacion\" name=\"dato[4]\" required value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 4, array(), "array"), "valorNumerico", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-6\">
                  <label for=\"password\">Estado del Sitio</label>
                  <div class=\"btn-group col-md-12\" data-toggle=\"buttons\">
                    <label class=\"btn btn-primary noselect";
        // line 51
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 1, array(), "array"), "valorNumerico", array()) == 1)) {
            echo " active";
        }
        echo "\">
                      <input type=\"radio\" name=\"dato[1]\" id=\"option1\" value=\"1\" autocomplete=\"off\" ";
        // line 52
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 1, array(), "array"), "valorNumerico", array()) == 1)) {
            echo " checked ";
        }
        echo ">
                      Habilitado
                    </label>
                    <label class=\"btn btn-danger noselect ";
        // line 55
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 1, array(), "array"), "valorNumerico", array()) == 0)) {
            echo " active";
        }
        echo "\">
                      <input type=\"radio\" name=\"dato[1]\" id=\"option2\" value=\"0\" autocomplete=\"off\" ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 1, array(), "array"), "valorNumerico", array()) == 0)) {
            echo " checked ";
        }
        echo "> 
                      Deshabilitado
                    </label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"form-group\">
                  <div class=\"col-md-12\">
                    <label for=\"descripcion\">Mensaje del Sitio Deshabilitado</label>
                    <div>
                    <textarea type=\"text\" class=\"form-control\" id=\"descripcion\" name=\"dato[3]\" rows=\"5\" required>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 3, array(), "array"), "valorTextual", array()), "html", null, true);
        echo "</textarea></div> 
                  </div>
                </div>
              </div>
              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Guardar Configuraci&oacute;n</button>
            </form>
          </div>
      </div>
      <script type=\"text/javascript\">
        \$(document).ready(function() {
          \$('input[type=radio]').click(function(){
            \$('input[type=\"radio\":checked]').checked = false;
            \$(this).checked=true;
          });
        }
      </script>
";
        
        $__internal_36e8462baae7f695afe4aeb32885082820de8564cbfbed91e9273b0bdbd21f24->leave($__internal_36e8462baae7f695afe4aeb32885082820de8564cbfbed91e9273b0bdbd21f24_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/configuracion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 67,  166 => 56,  160 => 55,  152 => 52,  146 => 51,  138 => 46,  129 => 40,  120 => 34,  110 => 27,  103 => 23,  96 => 18,  90 => 15,  80 => 13,  77 => 12,  71 => 11,  60 => 8,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administraci&oacute;n | Configuraci&oacute;n {% endblock %}*/
/* */
/* {% block addJS %}*/
/* {% endblock %}*/
/* */
/* {% block addCSS %}*/
/* {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       {% if msj is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atenci&oacute;n! </strong>{{msj}}*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Configuraci&oacute;n</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{ URL.backend_configuracion_editar}}" method="post">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-12">*/
/*                   <label for="titulo">T&iacute;tulo del Sitio</label>*/
/*                   <input type="text" class="form-control" id="titulo" name="dato[5]" required value="{{data[5].valorTextual }}">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-12">*/
/*                   <label for="descripcion">Descripci&oacute;n del Sitio</label>*/
/*                   <div>*/
/*                   <textarea type="text" class="form-control" id="descripcion" name="dato[0]" rows="5" required>{{data[0].valorTextual }}</textarea></div> */
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-12">*/
/*                   <label for="titulo">Email de Contacto</label>*/
/*                   <input type="email" class="form-control" id="titulo" name="dato[2]" required value="{{data[2].valorTextual }}">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-6">*/
/*                   <label for="paginacion">Paginaci&oacute;n</label>*/
/*                   <input type="number" class="form-control" id="paginacion" name="dato[4]" required value="{{data[4].valorNumerico }}">*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="password">Estado del Sitio</label>*/
/*                   <div class="btn-group col-md-12" data-toggle="buttons">*/
/*                     <label class="btn btn-primary noselect{% if data[1].valorNumerico == 1 %} active{% endif %}">*/
/*                       <input type="radio" name="dato[1]" id="option1" value="1" autocomplete="off" {% if data[1].valorNumerico == 1 %} checked {% endif %}>*/
/*                       Habilitado*/
/*                     </label>*/
/*                     <label class="btn btn-danger noselect {% if data[1].valorNumerico == 0 %} active{% endif %}">*/
/*                       <input type="radio" name="dato[1]" id="option2" value="0" autocomplete="off" {% if data[1].valorNumerico == 0 %} checked {% endif %}> */
/*                       Deshabilitado*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="form-group">*/
/*                   <div class="col-md-12">*/
/*                     <label for="descripcion">Mensaje del Sitio Deshabilitado</label>*/
/*                     <div>*/
/*                     <textarea type="text" class="form-control" id="descripcion" name="dato[3]" rows="5" required>{{data[3].valorTextual }}</textarea></div> */
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <button type="submit" class="btn btn-primary col-md-12">Guardar Configuraci&oacute;n</button>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/*       <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/*           $('input[type=radio]').click(function(){*/
/*             $('input[type="radio":checked]').checked = false;*/
/*             $(this).checked=true;*/
/*           });*/
/*         }*/
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
