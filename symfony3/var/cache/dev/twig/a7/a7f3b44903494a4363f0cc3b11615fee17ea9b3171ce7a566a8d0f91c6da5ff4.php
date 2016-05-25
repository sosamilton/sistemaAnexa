<?php

/* AnexaCooperadoraBundle:cuota:edit.html.twig */
class __TwigTemplate_50fc0c378fc9b804a53c93baf287e80b0aba5fc0efc548ea177884305ba56351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:cuota:edit.html.twig", 1);
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
        $__internal_715ae08bfedc2dcdb825b63376325c1a2d868bae9a53aab3cfcaae49bd9195d6 = $this->env->getExtension("native_profiler");
        $__internal_715ae08bfedc2dcdb825b63376325c1a2d868bae9a53aab3cfcaae49bd9195d6->enter($__internal_715ae08bfedc2dcdb825b63376325c1a2d868bae9a53aab3cfcaae49bd9195d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:cuota:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715ae08bfedc2dcdb825b63376325c1a2d868bae9a53aab3cfcaae49bd9195d6->leave($__internal_715ae08bfedc2dcdb825b63376325c1a2d868bae9a53aab3cfcaae49bd9195d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ae4fdbadd973760238e60dfd9b8b15b2357e752ad2a39b471c462a148e16f41 = $this->env->getExtension("native_profiler");
        $__internal_2ae4fdbadd973760238e60dfd9b8b15b2357e752ad2a39b471c462a148e16f41->enter($__internal_2ae4fdbadd973760238e60dfd9b8b15b2357e752ad2a39b471c462a148e16f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Cuota | Editar ";
        
        $__internal_2ae4fdbadd973760238e60dfd9b8b15b2357e752ad2a39b471c462a148e16f41->leave($__internal_2ae4fdbadd973760238e60dfd9b8b15b2357e752ad2a39b471c462a148e16f41_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_309e4a7328f579c2479292468102a7d10e166692538670539f46262883bcada8 = $this->env->getExtension("native_profiler");
        $__internal_309e4a7328f579c2479292468102a7d10e166692538670539f46262883bcada8->enter($__internal_309e4a7328f579c2479292468102a7d10e166692538670539f46262883bcada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    <div class=\"panel panel-primary\">
      <!-- Default panel contents -->
        <div class=\"panel-heading\">Editar Cuota ~ Año: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "anio", array()), "html", null, true);
        echo " Mes: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuota"]) ? $context["cuota"] : $this->getContext($context, "cuota")), "mes", array()), "html", null, true);
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
                <div class=\"form-group col-md-12\">
                  <div class=\"col-md-4\">
                      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "anio", array()), 'label');
        echo "
                      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "anio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                  <div class=\"col-md-4\">
                      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mes", array()), 'label');
        echo "
                      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-4\">
                      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numero", array()), 'label');
        echo "
                      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numero", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                </div>

                <div class=\"form-group col-md-12\">
                  <div class=\"col-md-4\">
                      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipo", array()), 'label');
        echo "
                      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-4\">
                      ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'label');
        echo "
                      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div> 
                  <div class=\"col-md-3\">
                      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comisionCobrador", array()), 'label');
        echo "
                      ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comisionCobrador", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>
                <div class=\"form-group col-md-12\">
                  <div class=\"col-md-4 form-group\">
                      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAlta", array()), 'label');
        echo "
                      ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAlta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>   
                </div>                  

                  ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button", array()), 'label');
        echo "
                  ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button", array()), 'widget', array("attr" => array("class" => "form-control btn btn-primary col-md-12"), "label" => "Editar Cuota"));
        echo "
 
          ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

        </div>
    </div>
    
  
";
        
        $__internal_309e4a7328f579c2479292468102a7d10e166692538670539f46262883bcada8->leave($__internal_309e4a7328f579c2479292468102a7d10e166692538670539f46262883bcada8_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:cuota:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 53,  156 => 51,  152 => 50,  145 => 46,  141 => 45,  133 => 40,  129 => 39,  123 => 36,  119 => 35,  113 => 32,  109 => 31,  100 => 25,  96 => 24,  90 => 21,  86 => 20,  80 => 17,  76 => 16,  70 => 13,  66 => 12,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Cuota | Editar {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     <div class="panel panel-primary">*/
/*       <!-- Default panel contents -->*/
/*         <div class="panel-heading">Editar Cuota ~ Año: {{cuota.anio}} Mes: {{cuota.mes}}</div>*/
/*       <!-- Table -->*/
/*         <div class="panel-body">*/
/* */
/*           {{ form_start(edit_form) }}*/
/*               {{ form_errors(edit_form) }}*/
/*                 <div class="form-group col-md-12">*/
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.anio) }}*/
/*                       {{ form_widget(edit_form.anio, {'attr': {'class':'form-control'}}) }}*/
/*                   </div>*/
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.mes) }}*/
/*                       {{ form_widget(edit_form.mes, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.numero) }}*/
/*                       {{ form_widget(edit_form.numero, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                 </div>*/
/* */
/*                 <div class="form-group col-md-12">*/
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.tipo) }}*/
/*                       {{ form_widget(edit_form.tipo, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-4">*/
/*                       {{ form_label(edit_form.monto) }}*/
/*                       {{ form_widget(edit_form.monto, {'attr': {'class':'form-control'}}) }}*/
/*                   </div> */
/*                   <div class="col-md-3">*/
/*                       {{ form_label(edit_form.comisionCobrador) }}*/
/*                       {{ form_widget(edit_form.comisionCobrador, {'attr': {'class':'form-control'}} )}}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group col-md-12">*/
/*                   <div class="col-md-4 form-group">*/
/*                       {{ form_label(edit_form.fechaAlta) }}*/
/*                       {{ form_widget(edit_form.fechaAlta, {'attr': {'class':'form-control'}}) }}*/
/*                   </div>   */
/*                 </div>                  */
/* */
/*                   {{ form_label(edit_form.button) }}*/
/*                   {{ form_widget(edit_form.button, {'attr': {'class':'form-control btn btn-primary col-md-12'}, 'label' : 'Editar Cuota'}) }}*/
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
