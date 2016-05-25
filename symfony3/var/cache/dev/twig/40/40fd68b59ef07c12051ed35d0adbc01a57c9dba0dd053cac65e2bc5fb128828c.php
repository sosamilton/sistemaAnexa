<?php

/* AnexaCooperadoraBundle:backend:base.html.twig */
class __TwigTemplate_577a93d06f4feef2d6f57ecc95bbc159dd1083fe4d6ab79a2ceda1d37a37758a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle:backend:base.html.twig", 1);
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
        $__internal_64e5cb92e12a583e66b3eadc79391ffbaafd836866a61ebf37a2abc8796b539f = $this->env->getExtension("native_profiler");
        $__internal_64e5cb92e12a583e66b3eadc79391ffbaafd836866a61ebf37a2abc8796b539f->enter($__internal_64e5cb92e12a583e66b3eadc79391ffbaafd836866a61ebf37a2abc8796b539f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64e5cb92e12a583e66b3eadc79391ffbaafd836866a61ebf37a2abc8796b539f->leave($__internal_64e5cb92e12a583e66b3eadc79391ffbaafd836866a61ebf37a2abc8796b539f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ca5102e223c2dc4aa90e1e30083bd7f4ca890358ccad596e8f2239a4c16253f = $this->env->getExtension("native_profiler");
        $__internal_6ca5102e223c2dc4aa90e1e30083bd7f4ca890358ccad596e8f2239a4c16253f->enter($__internal_6ca5102e223c2dc4aa90e1e30083bd7f4ca890358ccad596e8f2239a4c16253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Administración
";
        
        $__internal_6ca5102e223c2dc4aa90e1e30083bd7f4ca890358ccad596e8f2239a4c16253f->leave($__internal_6ca5102e223c2dc4aa90e1e30083bd7f4ca890358ccad596e8f2239a4c16253f_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0d2548595983873115112db490d5297d5b3596778d2b8e27ec50aebfab7d233 = $this->env->getExtension("native_profiler");
        $__internal_e0d2548595983873115112db490d5297d5b3596778d2b8e27ec50aebfab7d233->enter($__internal_e0d2548595983873115112db490d5297d5b3596778d2b8e27ec50aebfab7d233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "\t";
        $this->loadTemplate("AnexaCooperadoraBundle:backend:nav.html.twig", "AnexaCooperadoraBundle:backend:base.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"nav-edit\" >
      <div class=\"well well-sm\">
        <a href=\"\" tbodyitle='Volver'>
          <span class='glyphicon glyphicon-share-alt' > Volver</span>
        </a>
      </div>
  </div>
";
        
        $__internal_e0d2548595983873115112db490d5297d5b3596778d2b8e27ec50aebfab7d233->leave($__internal_e0d2548595983873115112db490d5297d5b3596778d2b8e27ec50aebfab7d233_prof);

    }

    // line 19
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_9ed1dfab4382556b0e14da23d065b01aadefa7c978f2147ec77d53c465c985a9 = $this->env->getExtension("native_profiler");
        $__internal_9ed1dfab4382556b0e14da23d065b01aadefa7c978f2147ec77d53c465c985a9->enter($__internal_9ed1dfab4382556b0e14da23d065b01aadefa7c978f2147ec77d53c465c985a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

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
        
        $__internal_9ed1dfab4382556b0e14da23d065b01aadefa7c978f2147ec77d53c465c985a9->leave($__internal_9ed1dfab4382556b0e14da23d065b01aadefa7c978f2147ec77d53c465c985a9_prof);

    }

    // line 26
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_384355afa51a339cba9cabebe19390b71675845ce49ba8aa25972c2c74c32829 = $this->env->getExtension("native_profiler");
        $__internal_384355afa51a339cba9cabebe19390b71675845ce49ba8aa25972c2c74c32829->enter($__internal_384355afa51a339cba9cabebe19390b71675845ce49ba8aa25972c2c74c32829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
        
        $__internal_384355afa51a339cba9cabebe19390b71675845ce49ba8aa25972c2c74c32829->leave($__internal_384355afa51a339cba9cabebe19390b71675845ce49ba8aa25972c2c74c32829_prof);

    }

    // line 28
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_1655743445f2bf3b33ab9c6be7838a694effe1942124de7ac213124f570d2e09 = $this->env->getExtension("native_profiler");
        $__internal_1655743445f2bf3b33ab9c6be7838a694effe1942124de7ac213124f570d2e09->enter($__internal_1655743445f2bf3b33ab9c6be7838a694effe1942124de7ac213124f570d2e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        // line 29
        echo "      ";
        $this->loadTemplate("AnexaCooperadoraBundle:backend:menuLateral.html.twig", "AnexaCooperadoraBundle:backend:base.html.twig", 29)->display($context);
        // line 30
        echo "    ";
        
        $__internal_1655743445f2bf3b33ab9c6be7838a694effe1942124de7ac213124f570d2e09->leave($__internal_1655743445f2bf3b33ab9c6be7838a694effe1942124de7ac213124f570d2e09_prof);

    }

    // line 33
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_0828474d52a98f75297b67c0f368d7c4f938d0bc3a80b8d93f96615c7de7e1f4 = $this->env->getExtension("native_profiler");
        $__internal_0828474d52a98f75297b67c0f368d7c4f938d0bc3a80b8d93f96615c7de7e1f4->enter($__internal_0828474d52a98f75297b67c0f368d7c4f938d0bc3a80b8d93f96615c7de7e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 34
        echo "    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Panel de Administración/Consulta</div>
          <div class=\"panel-body\">
            Bienvenido al panel de Consulta / Administración.
            A la izquierda tiene el menú con la funciones necesarias
          </div>
      </div>
    ";
        
        $__internal_0828474d52a98f75297b67c0f368d7c4f938d0bc3a80b8d93f96615c7de7e1f4->leave($__internal_0828474d52a98f75297b67c0f368d7c4f938d0bc3a80b8d93f96615c7de7e1f4_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend:base.html.twig";
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
/*         <a href="" tbodyitle='Volver'>*/
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
/*           <div class="panel-heading">Panel de Administración/Consulta</div>*/
/*           <div class="panel-body">*/
/*             Bienvenido al panel de Consulta / Administración.*/
/*             A la izquierda tiene el menú con la funciones necesarias*/
/*           </div>*/
/*       </div>*/
/*     {% endblock %}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
