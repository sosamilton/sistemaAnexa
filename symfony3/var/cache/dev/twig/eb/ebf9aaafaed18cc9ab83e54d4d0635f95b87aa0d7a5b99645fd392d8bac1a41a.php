<?php

/* AnexaCooperadoraBundle:backend/viejo/estadistica:index.html.twig */
class __TwigTemplate_5efd13e8b5b9b853d8461bd4c893ee9d6e64552d6c5348f111167a64a0552bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/estadistica:index.html.twig", 1);
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
        $__internal_cb94a47ae5eea9af9a4125837bb9a49c21f52672bd5248b37dbce3080ff1d2e2 = $this->env->getExtension("native_profiler");
        $__internal_cb94a47ae5eea9af9a4125837bb9a49c21f52672bd5248b37dbce3080ff1d2e2->enter($__internal_cb94a47ae5eea9af9a4125837bb9a49c21f52672bd5248b37dbce3080ff1d2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/estadistica:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb94a47ae5eea9af9a4125837bb9a49c21f52672bd5248b37dbce3080ff1d2e2->leave($__internal_cb94a47ae5eea9af9a4125837bb9a49c21f52672bd5248b37dbce3080ff1d2e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e58a314052f917c2e8b12c44598adef99fc0e2fb1e18929b830234842caacc7b = $this->env->getExtension("native_profiler");
        $__internal_e58a314052f917c2e8b12c44598adef99fc0e2fb1e18929b830234842caacc7b->enter($__internal_e58a314052f917c2e8b12c44598adef99fc0e2fb1e18929b830234842caacc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Estadísticas ";
        
        $__internal_e58a314052f917c2e8b12c44598adef99fc0e2fb1e18929b830234842caacc7b->leave($__internal_e58a314052f917c2e8b12c44598adef99fc0e2fb1e18929b830234842caacc7b_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_4ac1d52fd130dc058d1b4afad6f4bdcfc172999f1eb2701b55276322d92c1280 = $this->env->getExtension("native_profiler");
        $__internal_4ac1d52fd130dc058d1b4afad6f4bdcfc172999f1eb2701b55276322d92c1280->enter($__internal_4ac1d52fd130dc058d1b4afad6f4bdcfc172999f1eb2701b55276322d92c1280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "  <div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Estadística de ingresos por año</div>
    <!-- Table -->
    <div class=\"panel-body\" id=\"paginacion\">                                 
      <div class=\"col-md-4\"> Seleccione un año para ver los ingresos totales por mes</div>
      <div class=\"col-md-8\"> 
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_estadistica_graficos", array()), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"col-md-4\">
            <label for=\"anio\"> Año</label>
            <select class=\"form-control\" name=\"anio\" id=\"anio\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anios"]) ? $context["anios"] : $this->getContext($context, "anios")));
        foreach ($context['_seq'] as $context["_key"] => $context["año"]) {
            // line 18
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['año'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </select>
          </div>
            
        <div class=\"col-md-4\">
            <label for=\"anio\"> Tipo de Gráfico </label>
            <select class=\"form-control\" name=\"grafico\" required>
                <option value=\"lineal\">Lineal</option>
                <option value=\"barra\">Barra</option>
          </select>
          </div>
          <div class=\"col-md-4\">
            <label for=\"buscar\">Ver Gráfico</label>
            <button type=\"submit\" class=\"btn btn-primary col-md-12\" id=\"buscar\"><span class=\"glyphicon glyphicon-search\"></span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
";
        
        $__internal_4ac1d52fd130dc058d1b4afad6f4bdcfc172999f1eb2701b55276322d92c1280->leave($__internal_4ac1d52fd130dc058d1b4afad6f4bdcfc172999f1eb2701b55276322d92c1280_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/estadistica:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  73 => 18,  69 => 17,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administración | Estadísticas {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*   <div class="panel panel-primary">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Estadística de ingresos por año</div>*/
/*     <!-- Table -->*/
/*     <div class="panel-body" id="paginacion">                                 */
/*       <div class="col-md-4"> Seleccione un año para ver los ingresos totales por mes</div>*/
/*       <div class="col-md-8"> */
/*         <form action="{{URL.backend_estadistica_graficos}}" method="post">*/
/*           <div class="col-md-4">*/
/*             <label for="anio"> Año</label>*/
/*             <select class="form-control" name="anio" id="anio">*/
/*                 {% for año in anios %}*/
/*                   <option value="{{año}}">{{año}}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*             */
/*         <div class="col-md-4">*/
/*             <label for="anio"> Tipo de Gráfico </label>*/
/*             <select class="form-control" name="grafico" required>*/
/*                 <option value="lineal">Lineal</option>*/
/*                 <option value="barra">Barra</option>*/
/*           </select>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <label for="buscar">Ver Gráfico</label>*/
/*             <button type="submit" class="btn btn-primary col-md-12" id="buscar"><span class="glyphicon glyphicon-search"></span></button>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
