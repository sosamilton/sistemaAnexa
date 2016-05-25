<?php

/* AnexaCooperadoraBundle:cuota:new.html.twig */
class __TwigTemplate_4c2c784513aafa28eff86d88746510327b5717afda1db5bac97ed302689a53a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:cuota:new.html.twig", 1);
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
        $__internal_3e875720ada2cf83c1eba5b6cf37c4159e6070906b5eaed176c4985a46228d4a = $this->env->getExtension("native_profiler");
        $__internal_3e875720ada2cf83c1eba5b6cf37c4159e6070906b5eaed176c4985a46228d4a->enter($__internal_3e875720ada2cf83c1eba5b6cf37c4159e6070906b5eaed176c4985a46228d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:cuota:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e875720ada2cf83c1eba5b6cf37c4159e6070906b5eaed176c4985a46228d4a->leave($__internal_3e875720ada2cf83c1eba5b6cf37c4159e6070906b5eaed176c4985a46228d4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_249cb30cfdc7bb69e84e497b4ef11be04268b0e7dc7ac933501bc015a0a44168 = $this->env->getExtension("native_profiler");
        $__internal_249cb30cfdc7bb69e84e497b4ef11be04268b0e7dc7ac933501bc015a0a44168->enter($__internal_249cb30cfdc7bb69e84e497b4ef11be04268b0e7dc7ac933501bc015a0a44168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Cuota | Agregar";
        
        $__internal_249cb30cfdc7bb69e84e497b4ef11be04268b0e7dc7ac933501bc015a0a44168->leave($__internal_249cb30cfdc7bb69e84e497b4ef11be04268b0e7dc7ac933501bc015a0a44168_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_68c38bc363627754827c2c8f3f52e034cb0efc1a23d00740075a6852124fd470 = $this->env->getExtension("native_profiler");
        $__internal_68c38bc363627754827c2c8f3f52e034cb0efc1a23d00740075a6852124fd470->enter($__internal_68c38bc363627754827c2c8f3f52e034cb0efc1a23d00740075a6852124fd470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "\t<div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Agregar Cuota </div>
    <!-- Table -->
    <div class=\"panel-body\">

      ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group col-md-12\">
          <div class=\"col-md-3\">
              ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'label');
        echo "
              ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"col-md-3\">
              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mes", array()), 'label');
        echo "
              ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div> 
          <div class=\"col-md-3\">
              ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero", array()), 'label');
        echo "
              ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"col-md-3\">
              ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label');
        echo "
              ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
        <div class=\"form-group col-md-12\">
           
          <div class=\"col-md-4\">
              ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'label');
        echo "
              ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div> 
          <div class=\"col-md-4\">
              ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comisionCobrador", array()), 'label');
        echo "
              ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comisionCobrador", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div> 
          <div class=\"col-md-4\">
              ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAlta", array()), 'label');
        echo "
              ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAlta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>   
             
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), 'label');
        echo "
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), 'widget', array("attr" => array("class" => "form-control btn btn-primary col-md-12"), "label" => "Agregar Cuota"));
        echo "

      ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>

";
        
        $__internal_68c38bc363627754827c2c8f3f52e034cb0efc1a23d00740075a6852124fd470->leave($__internal_68c38bc363627754827c2c8f3f52e034cb0efc1a23d00740075a6852124fd470_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:cuota:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  149 => 49,  145 => 48,  138 => 44,  134 => 43,  128 => 40,  124 => 39,  118 => 36,  114 => 35,  105 => 29,  101 => 28,  95 => 25,  91 => 24,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  65 => 13,  61 => 12,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Cuota | Agregar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/* 	<div class="panel panel-primary">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Agregar Cuota </div>*/
/*     <!-- Table -->*/
/*     <div class="panel-body">*/
/* */
/*       {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         <div class="form-group col-md-12">*/
/*           <div class="col-md-3">*/
/*               {{ form_label(form.anio) }}*/
/*               {{ form_widget(form.anio, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/*           <div class="col-md-3">*/
/*               {{ form_label(form.mes) }}*/
/*               {{ form_widget(form.mes, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*           <div class="col-md-3">*/
/*               {{ form_label(form.numero) }}*/
/*               {{ form_widget(form.numero, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/*           <div class="col-md-3">*/
/*               {{ form_label(form.tipo) }}*/
/*               {{ form_widget(form.tipo, {'attr': {'class':'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group col-md-12">*/
/*            */
/*           <div class="col-md-4">*/
/*               {{ form_label(form.monto) }}*/
/*               {{ form_widget(form.monto, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*           <div class="col-md-4">*/
/*               {{ form_label(form.comisionCobrador) }}*/
/*               {{ form_widget(form.comisionCobrador, {'attr': {'class':'form-control'}}) }}*/
/*           </div> */
/*           <div class="col-md-4">*/
/*               {{ form_label(form.fechaAlta) }}*/
/*               {{ form_widget(form.fechaAlta, {'attr': {'class':'form-control'}} )}}*/
/*           </div>*/
/*         </div>   */
/*              */
/*         {{ form_label(form.button) }}*/
/*             {{ form_widget(form.button, {'attr': {'class':'form-control btn btn-primary col-md-12'}, 'label': 'Agregar Cuota'}) }}*/
/* */
/*       {{ form_end(form) }}*/
/*     </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
