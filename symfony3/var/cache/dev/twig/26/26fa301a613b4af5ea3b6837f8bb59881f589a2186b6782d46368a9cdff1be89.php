<?php

/* AnexaCooperadoraBundle:Usuario:editar.html.twig */
class __TwigTemplate_b64705965bf7aade5ac0dae34fba32ed75a896687030c4fc6114df941e886390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InicioBundle:Admin:index.html.twig", "AnexaCooperadoraBundle:Usuario:editar.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InicioBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd2bf03a82e0dcaef785c9b2c9309edcd6291254c8d13308fc7d35444d552b55 = $this->env->getExtension("native_profiler");
        $__internal_cd2bf03a82e0dcaef785c9b2c9309edcd6291254c8d13308fc7d35444d552b55->enter($__internal_cd2bf03a82e0dcaef785c9b2c9309edcd6291254c8d13308fc7d35444d552b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:Usuario:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2bf03a82e0dcaef785c9b2c9309edcd6291254c8d13308fc7d35444d552b55->leave($__internal_cd2bf03a82e0dcaef785c9b2c9309edcd6291254c8d13308fc7d35444d552b55_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_97f0c91ff63258a8a06e668f9f6208504e99f192de04d0da7adaa03c84f758c0 = $this->env->getExtension("native_profiler");
        $__internal_97f0c91ff63258a8a06e668f9f6208504e99f192de04d0da7adaa03c84f758c0->enter($__internal_97f0c91ff63258a8a06e668f9f6208504e99f192de04d0da7adaa03c84f758c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "    <form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("usuarioUpdate");
        echo "\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"panel panel-default\">

                <input type=\"hidden\"  name=\"idUser\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\"  name=\"rolViejo\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "html", null, true);
        echo "\">
                <div class=\"panel-heading\">
                    <span class=\"glyphicon glyphicon-lock\"></span>
                    Editar Usuario ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "
                </div>    
                <div class=\"panel-body distancia\">
                    <div class=\"form-group \">
                        <label class=\"required\">Nombre de usuario:</label>
                        <input type=\"text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "\" name=\"username\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"Nombre de Usuario\">
                    </div>  
                    <div class=\"form-group \">
                        <label class=\"required\">Nombre:</label>
                        <input type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "\" name=\"nombre\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"Nombre\">
                    </div> 
                    
                    <div class=\"form-group \">
                        <label class=\"required\">Apellido:</label>
                        <input type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
        echo "\" name=\"apellido\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"Apellido\">
                    </div> 
                    
                    <div class=\"form-group \">
                        <label class=\"required\">DNI:</label>
                        <input type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dni", array()), "html", null, true);
        echo "\" name=\"dni\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"DNI\">
                    </div>  
                    
                    <div class=\"form-group \">
                        <label class=\"required\">Fecha de Nacimiento:</label>
                        <input type=\"datetime\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        echo "\" name=\"fechaNacimiento\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"Fecha de Nacimiento\">
                    </div>  
                    
                    <div class=\"form-group \">
                        <label class=\"required\">Email:</label>
                        <input type=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "\" name=\"email\" required=\"required\" class=\"form-control\" placeholder=\"Email\">
                    </div>
                    
                   <div class=\"form-group \">
                        <label class=\"required\">Teléfono:</label>
                        <input type=\"text\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefono", array()), "html", null, true);
        echo "\" name=\"telefono\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"Teléfono\">
                    </div>
                    
                    <div class=\"form-group \">
                        <label class=\"required\">Dirección:</label>
                        <input type=\"text\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "\" name=\"direccion\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"Dirección\">
                    </div>  
                    
                    <div class=\"form-group \">
                        <label class=\"required\">Carrera:</label>
                        <input type=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carrera", array()), "html", null, true);
        echo "\" name=\"carrera\" required=\"required\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"Carrera\">
                    </div>  
                    ";
        // line 57
        if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) != "ROLE_SUPER_ADMIN")) {
            // line 58
            echo "                    <div class=\"form-group\">                        
                        <label class=\"required\">Roles</label>
                        <select name=\"role\" class=\"form-control\">
                            <option value=\"ROLE_ADMIN\" ";
            // line 61
            if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "ROLE_SUPER_ADMIN")) {
                echo " selected ";
            }
            echo ">Administración</option>
                            <option value=\"ROLE_USER\" ";
            // line 62
            if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "ROLE_USER")) {
                echo " selected ";
            }
            echo ">Edición y carga</option>
                            <option value=\"ROLE_VIEW\" ";
            // line 63
            if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "ROLE_VIEW")) {
                echo " selected ";
            }
            echo ">Solo lectura</option>
                        </select>
                    </div>
                    ";
        }
        // line 67
        echo "                    <div>
                        <input type=\"submit\" value=\"Actualizar\" class=\"btn btn-primary dropdown-toggle pull-left\">
                    </div>
                </form>

                   ";
        // line 75
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
                        <div class=\"btn btn-primary dropdown-toggle distanciaa\">
                            <span class=\"glyphicon glyphicon-share-alt\"></span>
                        </div>
                    </a>
                    <a class=\"btn btn-primary\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Cambiar contraseña</a>
";
        // line 113
        echo "                </div>
            </div>
        </div>
";
        
        $__internal_97f0c91ff63258a8a06e668f9f6208504e99f192de04d0da7adaa03c84f758c0->leave($__internal_97f0c91ff63258a8a06e668f9f6208504e99f192de04d0da7adaa03c84f758c0_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:Usuario:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 113,  178 => 80,  169 => 75,  162 => 67,  153 => 63,  147 => 62,  141 => 61,  136 => 58,  134 => 57,  129 => 55,  121 => 50,  113 => 45,  105 => 40,  97 => 35,  89 => 30,  81 => 25,  73 => 20,  66 => 16,  58 => 11,  52 => 8,  48 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'InicioBundle:Admin:index.html.twig' %}*/
/* {% block form %}*/
/*     <form method="post" action="{{path('usuarioUpdate')}}">*/
/*         <div class="col-md-4 col-md-offset-4">*/
/*             <div class="panel panel-default">*/
/* */
/*                 <input type="hidden"  name="idUser" value="{{entity.id}}">*/
/*                 <input type="hidden"  name="rolViejo" value="{{rol}}">*/
/*                 <div class="panel-heading">*/
/*                     <span class="glyphicon glyphicon-lock"></span>*/
/*                     Editar Usuario {{entity.username}}*/
/*                 </div>    */
/*                 <div class="panel-body distancia">*/
/*                     <div class="form-group ">*/
/*                         <label class="required">Nombre de usuario:</label>*/
/*                         <input type="text" value="{{entity.username}}" name="username" required="required" pattern=".{2,}" class="form-control" placeholder="Nombre de Usuario">*/
/*                     </div>  */
/*                     <div class="form-group ">*/
/*                         <label class="required">Nombre:</label>*/
/*                         <input type="text" value="{{entity.nombre}}" name="nombre" required="required" pattern=".{2,}" class="form-control" placeholder="Nombre">*/
/*                     </div> */
/*                     */
/*                     <div class="form-group ">*/
/*                         <label class="required">Apellido:</label>*/
/*                         <input type="text" value="{{entity.apellido}}" name="apellido" required="required" pattern=".{2,}" class="form-control" placeholder="Apellido">*/
/*                     </div> */
/*                     */
/*                     <div class="form-group ">*/
/*                         <label class="required">DNI:</label>*/
/*                         <input type="text" value="{{entity.dni}}" name="dni" required="required" pattern=".{2,}" class="form-control" placeholder="DNI">*/
/*                     </div>  */
/*                     */
/*                     <div class="form-group ">*/
/*                         <label class="required">Fecha de Nacimiento:</label>*/
/*                         <input type="datetime" value="{{entity.fechaNacimiento | date('Y-m-d')}}" name="fechaNacimiento" required="required" pattern=".{2,}" class="form-control" placeholder="Fecha de Nacimiento">*/
/*                     </div>  */
/*                     */
/*                     <div class="form-group ">*/
/*                         <label class="required">Email:</label>*/
/*                         <input type="email" value="{{entity.email}}" name="email" required="required" class="form-control" placeholder="Email">*/
/*                     </div>*/
/*                     */
/*                    <div class="form-group ">*/
/*                         <label class="required">Teléfono:</label>*/
/*                         <input type="text" value="{{entity.telefono}}" name="telefono" required="required" pattern=".{2,}" class="form-control" placeholder="Teléfono">*/
/*                     </div>*/
/*                     */
/*                     <div class="form-group ">*/
/*                         <label class="required">Dirección:</label>*/
/*                         <input type="text" value="{{entity.direccion}}" name="direccion" required="required" pattern=".{2,}" class="form-control" placeholder="Dirección">*/
/*                     </div>  */
/*                     */
/*                     <div class="form-group ">*/
/*                         <label class="required">Carrera:</label>*/
/*                         <input type="text" value="{{entity.carrera}}" name="carrera" required="required" pattern=".{2,}" class="form-control" placeholder="Carrera">*/
/*                     </div>  */
/*                     {%if rol != 'ROLE_SUPER_ADMIN' %}*/
/*                     <div class="form-group">                        */
/*                         <label class="required">Roles</label>*/
/*                         <select name="role" class="form-control">*/
/*                             <option value="ROLE_ADMIN" {% if rol == 'ROLE_SUPER_ADMIN'%} selected {% endif %}>Administración</option>*/
/*                             <option value="ROLE_USER" {% if rol == 'ROLE_USER'%} selected {% endif %}>Edición y carga</option>*/
/*                             <option value="ROLE_VIEW" {% if rol == 'ROLE_VIEW'%} selected {% endif %}>Solo lectura</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                     <div>*/
/*                         <input type="submit" value="Actualizar" class="btn btn-primary dropdown-toggle pull-left">*/
/*                     </div>*/
/*                 </form>*/
/* */
/*                    {#  <button type="button" class="btn btn-primary pull-left dropdown-toggle distanciaa" data-toggle="modal" data-target="#myModal">*/
/*                       Cambiar Contraseña*/
/*                     </button> #}*/
/*                     <a href="{{path('user')}}">*/
/*                         <div class="btn btn-primary dropdown-toggle distanciaa">*/
/*                             <span class="glyphicon glyphicon-share-alt"></span>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a class="btn btn-primary" href="{{ path('fos_user_change_password') }}">Cambiar contraseña</a>*/
/* {# */
/*                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 12%;">*/
/*                         <div class="modal-dialog">*/
/*                             <div class="modal-content">*/
/*                               <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                 <h4 class="modal-title" id="myModalLabel">Cambiar Contraseña</h4>*/
/*                               </div>*/
/*                               <div class="modal-body">*/
/*                                     {{ form_start(form) }}*/
/*                                     {{ form_widget(form._token) }}*/
/*                                     <div class="form-group"> */
/*                                         {{ form_label(form.current_password)}}*/
/*                                         {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}*/
/*                                     </div>*/
/*                                     <div class="form-group"> */
/*                                         {{ form_label(form.new.first)}}*/
/*                                         {{ form_widget(form.new.first, {'attr': {'class': 'form-control'}}) }}*/
/*                                     </div>*/
/*                                     <div class="form-group"> */
/*                                         {{ form_label(form.new.second)}}*/
/*                                         {{ form_widget(form.new.second, {'attr': {'class': 'form-control'}}) }}*/
/*                                     </div>*/
/*                               </div>*/
/*                               <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                                 <input type="submit" class="btn btn-success" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                               </div>*/
/*                               {{ form_end(form) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> #}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
