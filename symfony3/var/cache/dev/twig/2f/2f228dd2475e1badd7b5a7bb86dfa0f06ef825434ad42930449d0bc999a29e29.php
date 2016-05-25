<?php

/* AnexaCooperadoraBundle:Profile:show_content.html.twig */
class __TwigTemplate_895f88fa110f684e20c683ee3aa35ca7f2ff53ca0728293eb622924cac539fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb268b796332974d5cfaf5f1d498ff1ff003fdb55e833845700a01586eefeed = $this->env->getExtension("native_profiler");
        $__internal_3bb268b796332974d5cfaf5f1d498ff1ff003fdb55e833845700a01586eefeed->enter($__internal_3bb268b796332974d5cfaf5f1d498ff1ff003fdb55e833845700a01586eefeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:Profile:show_content.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_3bb268b796332974d5cfaf5f1d498ff1ff003fdb55e833845700a01586eefeed->leave($__internal_3bb268b796332974d5cfaf5f1d498ff1ff003fdb55e833845700a01586eefeed_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_8a2f9e59590211dbc20f4cf4e444200605ae4841cc9bfd9b9528b3240d4e0a98 = $this->env->getExtension("native_profiler");
        $__internal_8a2f9e59590211dbc20f4cf4e444200605ae4841cc9bfd9b9528b3240d4e0a98->enter($__internal_8a2f9e59590211dbc20f4cf4e444200605ae4841cc9bfd9b9528b3240d4e0a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<form class=\"form-horizontal\" role=\"form\">
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Apellido", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellido", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("DNI", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dni", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fecha de Nacimiento", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teléfono", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telefono", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Carrera", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "carrera", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Direeción", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "direccion", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Rol", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
        // line 61
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), array("ROLE_SUPER_ADMIN" => "Super Administrador", "ROLE_ADMIN" => "Administrador", "ROLE_USER" => "Editor", "ROLE_VIEW" => "Veedor")), "html", null, true);
        echo "</p>
        </div>
    </div>
</form>
";
        // line 99
        echo "        
<a class=\"btn btn-primary distanciaa\" href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editar</a>
<a class=\"btn btn-primary\" href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change Password</a>
<a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">
  <div class=\"btn btn-primary dropdown-toggle distanciaa\">
      <span class=\"glyphicon glyphicon-share-alt\"></span>
  </div>
</a>
";
        
        $__internal_8a2f9e59590211dbc20f4cf4e444200605ae4841cc9bfd9b9528b3240d4e0a98->leave($__internal_8a2f9e59590211dbc20f4cf4e444200605ae4841cc9bfd9b9528b3240d4e0a98_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:Profile:show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 102,  166 => 101,  162 => 100,  159 => 99,  152 => 61,  147 => 59,  140 => 55,  135 => 53,  128 => 49,  123 => 47,  116 => 43,  111 => 41,  104 => 37,  99 => 35,  92 => 31,  87 => 29,  80 => 25,  75 => 23,  68 => 19,  63 => 17,  56 => 13,  51 => 11,  44 => 7,  39 => 5,  35 => 3,  23 => 1,);
    }
}
/* {% block content -%}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <form class="form-horizontal" role="form">*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'profile.show.username'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.username }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'profile.show.email'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.email }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'Nombre'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.nombre }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'Apellido'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.apellido }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'DNI'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.dni }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'Fecha de Nacimiento'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.fechaNacimiento | date('Y-m-d') }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'Teléfono'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.telefono }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'Carrera'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.carrera }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'Direeción'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ user.direccion }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">{{ 'Rol'|trans }}</label>*/
/*         <div class="col-sm-10">*/
/*             <p class="form-control-static">{{ app.user.roles[0] |replace({'ROLE_SUPER_ADMIN': "Super Administrador", 'ROLE_ADMIN': "Administrador", 'ROLE_USER': "Editor", 'ROLE_VIEW': "Veedor"}) }}</p>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* {#<button type="button" class="btn btn-primary pull-left dropdown-toggle distanciaa" data-toggle="modal" data-target="#myModal">*/
/* Cambiar Contraseña*/
/* </button>*/
/* <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 12%;">*/
/*   <div class="modal-dialog">*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*           <h4 class="modal-title" id="myModalLabel">Cambiar Contraseña</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*               {{ form_start(form) }}*/
/*               {{ form_widget(form._token) }}*/
/*               <div class="form-group"> */
/*                   {{ form_label(form.current_password)}}*/
/*                   {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}*/
/*               </div>*/
/*               <div class="form-group"> */
/*                   {{ form_label(form.new.first)}}*/
/*                   {{ form_widget(form.new.first, {'attr': {'class': 'form-control'}}) }}*/
/*               </div>*/
/*               <div class="form-group"> */
/*                   {{ form_label(form.new.second)}}*/
/*                   {{ form_widget(form.new.second, {'attr': {'class': 'form-control'}}) }}*/
/*               </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*           <input type="submit" class="btn btn-success" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*       </div>*/
/*   </div>*/
/* </div>#}*/
/*         */
/* <a class="btn btn-primary distanciaa" href="{{ path('fos_user_profile_edit') }}">Editar</a>*/
/* <a class="btn btn-primary" href="{{ path('fos_user_change_password') }}">Change Password</a>*/
/* <a href="{{path('inicio')}}">*/
/*   <div class="btn btn-primary dropdown-toggle distanciaa">*/
/*       <span class="glyphicon glyphicon-share-alt"></span>*/
/*   </div>*/
/* </a>*/
/* {% endblock %}*/
