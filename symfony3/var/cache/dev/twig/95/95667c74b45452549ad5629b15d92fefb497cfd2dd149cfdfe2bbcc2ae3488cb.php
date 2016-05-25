<?php

/* AnexaCooperadoraBundle:alumno:show.html.twig */
class __TwigTemplate_87d8616291ea68c92bbdada19d1e60d1e88138b103f348d3bfa42d1a490791e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:alumno:show.html.twig", 1);
        $this->blocks = array(
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85192936736a47e5509bfa53b8be55ed2b68c8a335e30f1d1dea648eece26e1c = $this->env->getExtension("native_profiler");
        $__internal_85192936736a47e5509bfa53b8be55ed2b68c8a335e30f1d1dea648eece26e1c->enter($__internal_85192936736a47e5509bfa53b8be55ed2b68c8a335e30f1d1dea648eece26e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:alumno:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85192936736a47e5509bfa53b8be55ed2b68c8a335e30f1d1dea648eece26e1c->leave($__internal_85192936736a47e5509bfa53b8be55ed2b68c8a335e30f1d1dea648eece26e1c_prof);

    }

    // line 3
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_148534d8ab665f55c137d55a70eb5608c188b6eeed48b108d561e3bc22e2b6b3 = $this->env->getExtension("native_profiler");
        $__internal_148534d8ab665f55c137d55a70eb5608c188b6eeed48b108d561e3bc22e2b6b3->enter($__internal_148534d8ab665f55c137d55a70eb5608c188b6eeed48b108d561e3bc22e2b6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 4
        echo "    <div class=\"panel panel-primary\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">Detalles del Alumno</div>
        <!-- Table -->
        <div class=\"panel-body\">
            <div class=\"form-group col-md-12\">
                
                <div class=\"col-md-6\">
                    <label for=\"nombre\">Nombre</label>
                    <div class=\"form-control\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-6\">
                    <label for=\"apellido\">Apellido</label>
                    <div class=\"form-control\" > ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellido", array()), "html", null, true);
        echo "</div>
                </div>
                
            </div>
            <div class=\"form-group col-md-12\">
                
                <div class=\"col-md-4\">
                    <label for=\"fechaNac\">Fecha de Nacimiento</label>
                    <div class=\"form-control\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaNacimiento", array()), "d-m-Y"), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"tipoDNI\">Tipo de Documento</label>
                    <div class=\"form-control\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "tipoDni", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"dni\">Nro Documento</label>
                    <div class=\"form-control\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni", array()), "html", null, true);
        echo "</div>
                </div>
                
            </div>
            <div class=\"form-group col-md-12\"> 
                 
                <div class=\"col-md-3\">
                    <label for=\"sexo\">Sexo</label>          
                    <div class=\"form-control\" >";
        // line 41
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "sexo", array()) == "F")) {
            echo " Femenino ";
        } elseif (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "sexo", array()) == "M")) {
            echo " Masculino ";
        } else {
            echo " Otro ";
        }
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"telefono\">Teléfono</label>
                    <div class=\"form-control\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefono", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-5\">
                    <label for=\"email\">Email</label>
                    <div class=\"form-control\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "email", array()), "html", null, true);
        echo "</div>
                </div>
                
            </div>
            <div class=\"col-md-12\" >
                 
                <div class=\"col-md-4\">
                    <label for=\"fechaAlta\">Fecha de Alta</label>
                    <div class=\"form-control\" >";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaAlta", array()), "d-m-Y"), "html", null, true);
        echo "</div>
                </div>          
                <div class=\"col-md-4\">
                    <label for=\"fechaIngreso\">Fecha de Ingreso</label>
                    <div class=\"form-control\" >";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaIngreso", array()), "d-m-Y"), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"fechaEgreso\">Fecha de Egreso</label>
                    <div class=\"form-control\" >";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "fechaEgreso", array()), "d-m-Y"), "html", null, true);
        echo "</div>
                </div>
                
            </div>
              
            <div class=\"form-group col-md-12\">
                
                <div class=\"col-md-4\">
                    <label for=\"calle\">Calle</label>
                    <div class=\"form-control\" id=\"calle\" >";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "calle", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"numero\">Número</label>
                    <div class=\"form-control\" id=\"numero\" >";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "numero", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"codigoPostal\">Código Postal</label>
                    <div class=\"form-control\" id=\"codigoPostal\" >";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "codigoPostal", array()), "html", null, true);
        echo "</div>
                </div>
                
            </div>
                <div class=\"form-group col-md-12\">  
                    <div class=\"col-md-4\">
                        <label for=\"ciudad\">Ciudad</label>
                        <div class=\"form-control\" id=\"ciudad\" >";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "ciudad", array()), "html", null, true);
        echo "</div>
                    </div>  
                    <div class=\"col-md-4\">
                        <label for=\"provincia\">Provincia</label>
                        <div class=\"form-control\" id=\"provincia\" >";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "provincia", array()), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"pais\">País</label>
                        <div class=\"form-control\" id=\"pais\" >";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "pais", array()), "html", null, true);
        echo "</div>
                    </div>
                </div>
            
            <div class=\"form-group col-md-12\">
            ";
        // line 115
        echo "                <div class=\"form-group col-md-7 margin-top0\">
                    <input type=\"hidden\" name=\"lat\" id=\"lat\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "latitud", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"long\" id=\"long\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "longitud", array()), "html", null, true);
        echo "\">
                    <div id=\"Map\" class=\"img-thumbnail col-md-12\" style=\"height:250px\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_148534d8ab665f55c137d55a70eb5608c188b6eeed48b108d561e3bc22e2b6b3->leave($__internal_148534d8ab665f55c137d55a70eb5608c188b6eeed48b108d561e3bc22e2b6b3_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:alumno:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 117,  200 => 116,  197 => 115,  189 => 97,  182 => 93,  175 => 89,  165 => 82,  158 => 78,  151 => 74,  139 => 65,  132 => 61,  125 => 57,  114 => 49,  107 => 45,  94 => 41,  83 => 33,  76 => 29,  69 => 25,  58 => 17,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block dataAdmin %}*/
/*     <div class="panel panel-primary">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Detalles del Alumno</div>*/
/*         <!-- Table -->*/
/*         <div class="panel-body">*/
/*             <div class="form-group col-md-12">*/
/*                 */
/*                 <div class="col-md-6">*/
/*                     <label for="nombre">Nombre</label>*/
/*                     <div class="form-control">{{alumno.nombre}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <label for="apellido">Apellido</label>*/
/*                     <div class="form-control" > {{alumno.apellido}}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="form-group col-md-12">*/
/*                 */
/*                 <div class="col-md-4">*/
/*                     <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                     <div class="form-control">{{alumno.fechaNacimiento | date("d-m-Y") }}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="tipoDNI">Tipo de Documento</label>*/
/*                     <div class="form-control">{{alumno.tipoDni}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="dni">Nro Documento</label>*/
/*                     <div class="form-control">{{alumno.dni}}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="form-group col-md-12"> */
/*                  */
/*                 <div class="col-md-3">*/
/*                     <label for="sexo">Sexo</label>          */
/*                     <div class="form-control" >{% if alumno.sexo == 'F' %} Femenino {% elseif  alumno.sexo == 'M'%} Masculino {% else %} Otro {% endif %}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="telefono">Teléfono</label>*/
/*                     <div class="form-control">{{alumno.telefono}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                     <label for="email">Email</label>*/
/*                     <div class="form-control" >{{alumno.email}}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="col-md-12" >*/
/*                  */
/*                 <div class="col-md-4">*/
/*                     <label for="fechaAlta">Fecha de Alta</label>*/
/*                     <div class="form-control" >{{alumno.fechaAlta | date("d-m-Y") }}</div>*/
/*                 </div>          */
/*                 <div class="col-md-4">*/
/*                     <label for="fechaIngreso">Fecha de Ingreso</label>*/
/*                     <div class="form-control" >{{alumno.fechaIngreso | date("d-m-Y") }}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="fechaEgreso">Fecha de Egreso</label>*/
/*                     <div class="form-control" >{{alumno.fechaEgreso | date("d-m-Y") }}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*               */
/*             <div class="form-group col-md-12">*/
/*                 */
/*                 <div class="col-md-4">*/
/*                     <label for="calle">Calle</label>*/
/*                     <div class="form-control" id="calle" >{{alumno.calle}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="numero">Número</label>*/
/*                     <div class="form-control" id="numero" >{{alumno.numero}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="codigoPostal">Código Postal</label>*/
/*                     <div class="form-control" id="codigoPostal" >{{alumno.codigoPostal}}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*                 <div class="form-group col-md-12">  */
/*                     <div class="col-md-4">*/
/*                         <label for="ciudad">Ciudad</label>*/
/*                         <div class="form-control" id="ciudad" >{{alumno.ciudad}}</div>*/
/*                     </div>  */
/*                     <div class="col-md-4">*/
/*                         <label for="provincia">Provincia</label>*/
/*                         <div class="form-control" id="provincia" >{{alumno.provincia}}</div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <label for="pais">País</label>*/
/*                         <div class="form-control" id="pais" >{{alumno.pais}}</div>*/
/*                     </div>*/
/*                 </div>*/
/*             */
/*             <div class="form-group col-md-12">*/
/*             {# */
/*                 <div class="col-md-5 col-offset-md-2">*/
/*                     <label>Responsables Agregados</label>*/
/*                     <ul id="listResponsables" class="list-group">*/
/*                         {% for responsable in responsables %}*/
/*                             <li class='list-group-item'>*/
/*                                 {{responsable.nombre ~ " " ~ responsable.apellido}}*/
/*                                 <span class="badge">DNI:{{responsable.dni}}</span>*/
/*                             </li>*/
/*                         {% endfor %}  */
/*                     </ul>  */
/*                 </div> */
/*             #}*/
/*                 <div class="form-group col-md-7 margin-top0">*/
/*                     <input type="hidden" name="lat" id="lat" value="{{alumno.latitud}}">*/
/*                     <input type="hidden" name="long" id="long" value="{{alumno.longitud}}">*/
/*                     <div id="Map" class="img-thumbnail col-md-12" style="height:250px"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
