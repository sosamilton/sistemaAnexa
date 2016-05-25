<?php

/* AnexaCooperadoraBundle:backend:index.html.twig */
class __TwigTemplate_98ffd7f502f3ffafce1de9b2b0df7cd4e70822266998dde2003e51464a1ba3f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle:backend:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'addJS' => array($this, 'block_addJS'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95493c4d1d7c7c59558e17680f2dab0c2466ccee6bbd9b284a16f4e6be30eadb = $this->env->getExtension("native_profiler");
        $__internal_95493c4d1d7c7c59558e17680f2dab0c2466ccee6bbd9b284a16f4e6be30eadb->enter($__internal_95493c4d1d7c7c59558e17680f2dab0c2466ccee6bbd9b284a16f4e6be30eadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95493c4d1d7c7c59558e17680f2dab0c2466ccee6bbd9b284a16f4e6be30eadb->leave($__internal_95493c4d1d7c7c59558e17680f2dab0c2466ccee6bbd9b284a16f4e6be30eadb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_582855cdb220b0686c7b53a2da5e4595f0a8f063ccba18259495df1af3531fe4 = $this->env->getExtension("native_profiler");
        $__internal_582855cdb220b0686c7b53a2da5e4595f0a8f063ccba18259495df1af3531fe4->enter($__internal_582855cdb220b0686c7b53a2da5e4595f0a8f063ccba18259495df1af3531fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Administración
";
        
        $__internal_582855cdb220b0686c7b53a2da5e4595f0a8f063ccba18259495df1af3531fe4->leave($__internal_582855cdb220b0686c7b53a2da5e4595f0a8f063ccba18259495df1af3531fe4_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9eb3c79463753ac43eb9cd2c06f1cbc31d643b24cea8112dad709852f231ae6d = $this->env->getExtension("native_profiler");
        $__internal_9eb3c79463753ac43eb9cd2c06f1cbc31d643b24cea8112dad709852f231ae6d->enter($__internal_9eb3c79463753ac43eb9cd2c06f1cbc31d643b24cea8112dad709852f231ae6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "\t";
        $this->loadTemplate("AnexaCooperadoraBundle:backend:nav.html.twig", "AnexaCooperadoraBundle:backend:index.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"nav-edit\" >
      <div class=\"well well-sm\">
        <a href=\"\" title='Volver'>
          <span class='glyphicon glyphicon-share-alt' > Volver</span>
        </a>
      </div>
  </div>
";
        
        $__internal_9eb3c79463753ac43eb9cd2c06f1cbc31d643b24cea8112dad709852f231ae6d->leave($__internal_9eb3c79463753ac43eb9cd2c06f1cbc31d643b24cea8112dad709852f231ae6d_prof);

    }

    // line 19
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_8499900d1942878a290f43efc08dc829758f5a31c7c44988e30a2fbc2e5bf9e7 = $this->env->getExtension("native_profiler");
        $__internal_8499900d1942878a290f43efc08dc829758f5a31c7c44988e30a2fbc2e5bf9e7->enter($__internal_8499900d1942878a290f43efc08dc829758f5a31c7c44988e30a2fbc2e5bf9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 20
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/list.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/list.pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.select-filter.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8499900d1942878a290f43efc08dc829758f5a31c7c44988e30a2fbc2e5bf9e7->leave($__internal_8499900d1942878a290f43efc08dc829758f5a31c7c44988e30a2fbc2e5bf9e7_prof);

    }

    // line 26
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_320d44aecec244e9c82e004a4892d9868845f18a010c649ef8087e3c319da71e = $this->env->getExtension("native_profiler");
        $__internal_320d44aecec244e9c82e004a4892d9868845f18a010c649ef8087e3c319da71e->enter($__internal_320d44aecec244e9c82e004a4892d9868845f18a010c649ef8087e3c319da71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 27
        echo "\t<div class=\"col-md-3\">
    ";
        // line 28
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 31
        echo "\t</div>
\t<div class=\"col-md-9\">
    ";
        // line 33
        $this->displayBlock('dataAdmin', $context, $blocks);
        // line 43
        echo "\t</div>
";
        
        $__internal_320d44aecec244e9c82e004a4892d9868845f18a010c649ef8087e3c319da71e->leave($__internal_320d44aecec244e9c82e004a4892d9868845f18a010c649ef8087e3c319da71e_prof);

    }

    // line 28
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_70d08ab8be7901b4fa96106d38f437a7e7186887811db73f2c7ab43088833989 = $this->env->getExtension("native_profiler");
        $__internal_70d08ab8be7901b4fa96106d38f437a7e7186887811db73f2c7ab43088833989->enter($__internal_70d08ab8be7901b4fa96106d38f437a7e7186887811db73f2c7ab43088833989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        // line 29
        echo "      ";
        $this->loadTemplate("AnexaCooperadoraBundle:backend:menuLateral.html.twig", "AnexaCooperadoraBundle:backend:index.html.twig", 29)->display($context);
        // line 30
        echo "    ";
        
        $__internal_70d08ab8be7901b4fa96106d38f437a7e7186887811db73f2c7ab43088833989->leave($__internal_70d08ab8be7901b4fa96106d38f437a7e7186887811db73f2c7ab43088833989_prof);

    }

    // line 33
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_e641fb7c934a124e15cdcd28762db2d4dc9b16381ec3c818a80333aef7797619 = $this->env->getExtension("native_profiler");
        $__internal_e641fb7c934a124e15cdcd28762db2d4dc9b16381ec3c818a80333aef7797619->enter($__internal_e641fb7c934a124e15cdcd28762db2d4dc9b16381ec3c818a80333aef7797619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 34
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Panel de Administraci&oacute;n/Consulta</div>
          <div class=\"panel-body\">
            Bienvenido al panel de Consulta / Administraci&oacute;n.
            A la izquierda tiene el men&uacute; con la funciones necesarias
          </div>
      </div>
    ";
        
        $__internal_e641fb7c934a124e15cdcd28762db2d4dc9b16381ec3c818a80333aef7797619->leave($__internal_e641fb7c934a124e15cdcd28762db2d4dc9b16381ec3c818a80333aef7797619_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 34,  142 => 33,  135 => 30,  132 => 29,  126 => 28,  118 => 43,  116 => 33,  112 => 31,  110 => 28,  107 => 27,  101 => 26,  91 => 22,  87 => 21,  82 => 20,  76 => 19,  62 => 10,  59 => 9,  53 => 8,  45 => 5,  39 => 4,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle::base.html.twig' %}*/
/* */
/* */
/* {% block title %}*/
/*   Administración*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* 	{% include 'AnexaCooperadoraBundle:backend:nav.html.twig' %}*/
/*     <div class="nav-edit" >*/
/*       <div class="well well-sm">*/
/*         <a href="" title='Volver'>*/
/*           <span class='glyphicon glyphicon-share-alt' > Volver</span>*/
/*         </a>*/
/*       </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block addJS %}*/
/*   <script src="{{ asset("/js/list.js") }}"></script>*/
/*   <script src="{{ asset("/js/list.pagination.js") }}"></script>*/
/*   <script src="{{ asset("/js/jquery.select-filter.min.js") }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block cuerpo %}*/
/* 	<div class="col-md-3">*/
/*     {% block menuLateral %}*/
/*       {% include 'AnexaCooperadoraBundle:backend:menuLateral.html.twig' %}*/
/*     {% endblock %}*/
/* 	</div>*/
/* 	<div class="col-md-9">*/
/*     {% block dataAdmin %}*/
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Panel de Administraci&oacute;n/Consulta</div>*/
/*           <div class="panel-body">*/
/*             Bienvenido al panel de Consulta / Administraci&oacute;n.*/
/*             A la izquierda tiene el men&uacute; con la funciones necesarias*/
/*           </div>*/
/*       </div>*/
/*     {% endblock %}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
