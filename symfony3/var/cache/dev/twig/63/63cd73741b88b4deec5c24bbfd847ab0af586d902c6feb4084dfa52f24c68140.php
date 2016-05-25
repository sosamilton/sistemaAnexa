<?php

/* AnexaCooperadoraBundle:backend/viejo/responsable:ver.html.twig */
class __TwigTemplate_f9aba05161b916ff3b2ac49824946df3a49bb76b0ecfe2bd0897de54897536fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/responsable:ver.html.twig", 1);
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
        $__internal_6e306df42eba8757171edba40e80a1860894a1c7e59be1b7474a0f1552e2cc90 = $this->env->getExtension("native_profiler");
        $__internal_6e306df42eba8757171edba40e80a1860894a1c7e59be1b7474a0f1552e2cc90->enter($__internal_6e306df42eba8757171edba40e80a1860894a1c7e59be1b7474a0f1552e2cc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/responsable:ver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e306df42eba8757171edba40e80a1860894a1c7e59be1b7474a0f1552e2cc90->leave($__internal_6e306df42eba8757171edba40e80a1860894a1c7e59be1b7474a0f1552e2cc90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b51a21b9b854191527b0f433d75129036c00a37e8cc370c518f5c4f3f30fba7f = $this->env->getExtension("native_profiler");
        $__internal_b51a21b9b854191527b0f433d75129036c00a37e8cc370c518f5c4f3f30fba7f->enter($__internal_b51a21b9b854191527b0f433d75129036c00a37e8cc370c518f5c4f3f30fba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Responsables | Ver";
        
        $__internal_b51a21b9b854191527b0f433d75129036c00a37e8cc370c518f5c4f3f30fba7f->leave($__internal_b51a21b9b854191527b0f433d75129036c00a37e8cc370c518f5c4f3f30fba7f_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_da351e8c1bcc45bbd692008e50569215d592f802351b82e57dc593a30ca6225a = $this->env->getExtension("native_profiler");
        $__internal_da351e8c1bcc45bbd692008e50569215d592f802351b82e57dc593a30ca6225a->enter($__internal_da351e8c1bcc45bbd692008e50569215d592f802351b82e57dc593a30ca6225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "      <div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Viendo Responsable: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "nombre", array()), "html", null, true);
        echo "</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <div>
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"nombre\">Nombre</label>
                  <div class=\"form-control\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "nombre", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"apellido\">Apellido</label>
                  <div class=\"form-control\" >";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "apellido", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"tipoResponsable\">Tipo de Responsable</label>
                  <div class=\"form-control\" > ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoResponsable", array()), "html", null, true);
        echo " </div>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"fechaNac\">Fecha de Nacimiento</label>
                  <div class=\"form-control\">";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "fechaNacimiento", array()), "d/m/Y"), "html", null, true);
        echo "</div>
                </div>

                <div class=\"col-md-3\">
                  <label for=\"tipoDNI\">Tipo DNI</label>
                  <div class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "tipoDni", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-5\">
                  <label for=\"dni\">DNI</label>
                  <div class=\"form-control\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "dni", array()), "html", null, true);
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-3\">
                  <label for=\"sexo\">Sexo</label>
                   <div class=\"form-control\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "sexo", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-3\">
                  <label for=\"telefono\">Telefono</label>
                  <div class=\"form-control\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "telefono", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"direccion\">Direccion</label>
                  <div class=\"form-control\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "direccion", array()), "html", null, true);
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-6\">
                  <label for=\"email\">Email</label>
                  <div class=\"form-control\" >";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "email", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-3\">
                  <label for=\"username\">Usuario</label>
                  <div class=\"form-control\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-3\">
                  <label for=\"pass\">Contraseña</label>
                  <div class=\"form-control\" > ******* </div>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-5 col-offset-md-2\">
                  <label>Alumnos Agregados</label>
                  <ul id=\"listResponsables\" class=\"list-group\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 74
            echo "                      <li class='list-group-item'>
                        ";
            // line 75
            echo twig_escape_filter($this->env, (($this->getAttribute($context["alumno"], "nombre", array()) . " ") . $this->getAttribute($context["alumno"], "apellido", array())), "html", null, true);
            echo "
                        <span class=\"badge\">DNI: ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</span>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    
                  </ul>  
                </div>
              </div>
            </div>
          </div>
      </div>
      <script type=\"text/javascript\">

      </script>
";
        
        $__internal_da351e8c1bcc45bbd692008e50569215d592f802351b82e57dc593a30ca6225a->leave($__internal_da351e8c1bcc45bbd692008e50569215d592f802351b82e57dc593a30ca6225a_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/responsable:ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 79,  169 => 76,  165 => 75,  162 => 74,  158 => 73,  144 => 62,  137 => 58,  128 => 52,  121 => 48,  114 => 44,  105 => 38,  98 => 34,  90 => 29,  81 => 23,  74 => 19,  67 => 15,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Responsables | Ver{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       <div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Viendo Responsable: {{responsable.nombre}}</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="nombre">Nombre</label>*/
/*                   <div class="form-control" >{{responsable.nombre}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="apellido">Apellido</label>*/
/*                   <div class="form-control" >{{responsable.apellido}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="tipoResponsable">Tipo de Responsable</label>*/
/*                   <div class="form-control" > {{responsable.tipoResponsable}} </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="fechaNac">Fecha de Nacimiento</label>*/
/*                   <div class="form-control">{{responsable.fechaNacimiento | date("d/m/Y") }}</div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3">*/
/*                   <label for="tipoDNI">Tipo DNI</label>*/
/*                   <div class="form-control">{{responsable.tipoDni}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                   <label for="dni">DNI</label>*/
/*                   <div class="form-control" >{{responsable.dni}}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-3">*/
/*                   <label for="sexo">Sexo</label>*/
/*                    <div class="form-control">{{responsable.sexo}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="telefono">Telefono</label>*/
/*                   <div class="form-control">{{responsable.telefono}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <label for="direccion">Direccion</label>*/
/*                   <div class="form-control">{{responsable.direccion}}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-6">*/
/*                   <label for="email">Email</label>*/
/*                   <div class="form-control" >{{responsable.email}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="username">Usuario</label>*/
/*                   <div class="form-control">{{usuario.username}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                   <label for="pass">Contraseña</label>*/
/*                   <div class="form-control" > ******* </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
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
/*             </div>*/
/*           </div>*/
/*       </div>*/
/*       <script type="text/javascript">*/
/* */
/*       </script>*/
/* {% endblock %}*/
/* */
