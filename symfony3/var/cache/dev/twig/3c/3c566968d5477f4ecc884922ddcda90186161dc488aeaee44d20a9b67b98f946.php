<?php

/* AnexaCooperadoraBundle:cuota:show.html.twig */
class __TwigTemplate_2143dcb9696af75468836b42ada79f31ddcc69e05eb791b9acbfb9c64f740b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:cuota:show.html.twig", 1);
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
        $__internal_456099f5d6d2eb24bb0ca19ce03ab60406868fbac16348b4fe3d4849bcfdeb52 = $this->env->getExtension("native_profiler");
        $__internal_456099f5d6d2eb24bb0ca19ce03ab60406868fbac16348b4fe3d4849bcfdeb52->enter($__internal_456099f5d6d2eb24bb0ca19ce03ab60406868fbac16348b4fe3d4849bcfdeb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:cuota:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_456099f5d6d2eb24bb0ca19ce03ab60406868fbac16348b4fe3d4849bcfdeb52->leave($__internal_456099f5d6d2eb24bb0ca19ce03ab60406868fbac16348b4fe3d4849bcfdeb52_prof);

    }

    // line 3
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_4d712a6785174278238abed57a43a196a4aad2f6a29f002ace1a87d1b42c9d6c = $this->env->getExtension("native_profiler");
        $__internal_4d712a6785174278238abed57a43a196a4aad2f6a29f002ace1a87d1b42c9d6c->enter($__internal_4d712a6785174278238abed57a43a196a4aad2f6a29f002ace1a87d1b42c9d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 4
        echo "    <div class=\"panel panel-primary\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">Detalles del Responsable</div>
        <!-- Table -->
        <div class=\"panel-body\">
            <div class=\"form-group col-md-12\">
                
                <div class=\"col-md-6\">
                    <label for=\"nombre\">Nombre</label>
                    <div class=\"form-control\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "nombre", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-6\">
                    <label for=\"apellido\">Apellido</label>
                    <div class=\"form-control\" > ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "apellido", array()), "html", null, true);
        echo "</div>
                </div>
                
            </div>
            <div class=\"form-group col-md-12\">
                
                <div class=\"col-md-4\">
                    <label for=\"fechaNac\">Fecha de Nacimiento</label>
                    <div class=\"form-control\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "fechaNacimiento", array()), "d-m-Y"), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"tipoDNI\">Tipo de Documento</label>
                    <div class=\"form-control\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoDni", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"dni\">Nro Documento</label>
                    <div class=\"form-control\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "dni", array()), "html", null, true);
        echo "</div>
                </div>
                
            </div>
            <div class=\"form-group col-md-12\"> 
                 
                <div class=\"col-md-3\">
                    <label for=\"sexo\">Sexo</label>          
                    <div class=\"form-control\" >";
        // line 41
        if (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "sexo", array()) == "F")) {
            echo " Femenino ";
        } elseif (($this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "sexo", array()) == "M")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "telefono", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-5\">
                    <label for=\"email\">Email</label>
                    <div class=\"form-control\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "email", array()), "html", null, true);
        echo "</div>
                </div>
                
            </div>

            <div class=\"form-group col-md-12\"> 
                 
                <div class=\"col-md-3\">
                    <label for=\"direccion\">Dirección</label>          
                    <div class=\"form-control\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "direccion", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-5\">
                    <label for=\"user\">Usuario</label>
                    <div class=\"form-control\" >";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</div>
                </div>
            </div>         
            
            <div class=\"form-group\">
                <div class=\"col-md-5 col-offset-md-2\">
                  <label>Alumnos Agregados</label>
                  <ul id=\"listResponsables\" class=\"list-group\">
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 71
            echo "                      <li class='list-group-item'>
                        ";
            // line 72
            echo twig_escape_filter($this->env, (($this->getAttribute($context["alumno"], "nombre", array()) . " ") . $this->getAttribute($context["alumno"], "apellido", array())), "html", null, true);
            echo "
                        <span class=\"badge\">DNI: ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</span>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    
                  </ul>  
                </div>
              </div>
        </div>
    </div>
";
        
        $__internal_4d712a6785174278238abed57a43a196a4aad2f6a29f002ace1a87d1b42c9d6c->leave($__internal_4d712a6785174278238abed57a43a196a4aad2f6a29f002ace1a87d1b42c9d6c_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:cuota:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 76,  155 => 73,  151 => 72,  148 => 71,  144 => 70,  133 => 62,  126 => 58,  114 => 49,  107 => 45,  94 => 41,  83 => 33,  76 => 29,  69 => 25,  58 => 17,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block dataAdmin %}*/
/*     <div class="panel panel-primary">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Detalles del Responsable</div>*/
/*         <!-- Table -->*/
/*         <div class="panel-body">*/
/*             <div class="form-group col-md-12">*/
/*                 */
/*                 <div class="col-md-6">*/
/*                     <label for="nombre">Nombre</label>*/
/*                     <div class="form-control">{{responsable.nombre}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <label for="apellido">Apellido</label>*/
/*                     <div class="form-control" > {{responsable.apellido}}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="form-group col-md-12">*/
/*                 */
/*                 <div class="col-md-4">*/
/*                     <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                     <div class="form-control">{{responsable.fechaNacimiento | date("d-m-Y") }}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="tipoDNI">Tipo de Documento</label>*/
/*                     <div class="form-control">{{responsable.tipoDni}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="dni">Nro Documento</label>*/
/*                     <div class="form-control">{{responsable.dni}}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="form-group col-md-12"> */
/*                  */
/*                 <div class="col-md-3">*/
/*                     <label for="sexo">Sexo</label>          */
/*                     <div class="form-control" >{% if responsable.sexo == 'F' %} Femenino {% elseif  responsable.sexo == 'M'%} Masculino {% else %} Otro {% endif %}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label for="telefono">Teléfono</label>*/
/*                     <div class="form-control">{{responsable.telefono}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                     <label for="email">Email</label>*/
/*                     <div class="form-control" >{{responsable.email}}</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/* */
/*             <div class="form-group col-md-12"> */
/*                  */
/*                 <div class="col-md-3">*/
/*                     <label for="direccion">Dirección</label>          */
/*                     <div class="form-control">{{responsable.direccion}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                     <label for="user">Usuario</label>*/
/*                     <div class="form-control" >{{usuario.username}}</div>*/
/*                 </div>*/
/*             </div>         */
/*             */
/*             <div class="form-group">*/
/*                 <div class="col-md-5 col-offset-md-2">*/
/*                   <label>Alumnos Agregados</label>*/
/*                   <ul id="listResponsables" class="list-group">*/
/*                     {% for alumno in alumnos %}*/
/*                       <li class='list-group-item'>*/
/*                         {{alumno.nombre ~ " " ~ alumno.apellido}}*/
/*                         <span class="badge">DNI: {{alumno.dni}}</span>*/
/*                       </li>*/
/*                     {% endfor %}*/
/*                     */
/*                   </ul>  */
/*                 </div>*/
/*               </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
