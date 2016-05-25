<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:comisionCobradaPDF.html.twig */
class __TwigTemplate_8ba0e4954c5aa8fe48dc37b02c660790aae2bb36abc04bf635f32844b41e6349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePdf.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:comisionCobradaPDF.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basePdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1a62316c9377f04045c234927c45d9bcfbb959bcc4206c67609f7827b9ccff9 = $this->env->getExtension("native_profiler");
        $__internal_c1a62316c9377f04045c234927c45d9bcfbb959bcc4206c67609f7827b9ccff9->enter($__internal_c1a62316c9377f04045c234927c45d9bcfbb959bcc4206c67609f7827b9ccff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:comisionCobradaPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a62316c9377f04045c234927c45d9bcfbb959bcc4206c67609f7827b9ccff9->leave($__internal_c1a62316c9377f04045c234927c45d9bcfbb959bcc4206c67609f7827b9ccff9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_96637daff960ac13c23bbc437f44cab8e4037bd2928255989e79d7ec51fae187 = $this->env->getExtension("native_profiler");
        $__internal_96637daff960ac13c23bbc437f44cab8e4037bd2928255989e79d7ec51fae187->enter($__internal_96637daff960ac13c23bbc437f44cab8e4037bd2928255989e79d7ec51fae187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Comisi&oacute;n Cobrada";
        
        $__internal_96637daff960ac13c23bbc437f44cab8e4037bd2928255989e79d7ec51fae187->leave($__internal_96637daff960ac13c23bbc437f44cab8e4037bd2928255989e79d7ec51fae187_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_4942ee48d74c622be3848d672e9bf44605863ff148974b72aa76ec0c69bbc226 = $this->env->getExtension("native_profiler");
        $__internal_4942ee48d74c622be3848d672e9bf44605863ff148974b72aa76ec0c69bbc226->enter($__internal_4942ee48d74c622be3848d672e9bf44605863ff148974b72aa76ec0c69bbc226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "    <div class=\"panel panel-primary\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
            <table class=\"table\">
               <thead>
                  <tr>
                      <th>
                        Año
                     </th>
                     <th>
                        Mes
                     </th>
                     <th>
                        Monto Cuota
                     </th>
                      <th>
                        Porcentaje Comisión
                     </th>
                      <th>
                        Monto Cobrado
                     </th>
                 </tr>
               </thead>

               <tbody class=\"list\">
                   ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) ? $context["cuotas"] : $this->getContext($context, "cuotas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 32
            echo "                                <tr>                                  
                                    <td class=\"año\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "anio", array()), "html", null, true);
            echo "</td>
                                    <td class=\"mes\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "mes", array()), "html", null, true);
            echo "</td>
                                    <td class=\"montoCuota\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "monto", array()), "html", null, true);
            echo "</td> 
                                    <td class=\"comision\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cuota"], "data", array()), "comisionCobrador", array()), "html", null, true);
            echo "</td>
                                    <td class=\"monto\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "montoCobrado", array()), "html", null, true);
            echo "</td>                                                            
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "               </tbody>
           </table>
       </div>
        <div class=\"panel-footer\">          
                <div class=\"col-md-4 col-md-offset-4\">
                    <div class=\"label-group label-group-sm col-md-32\" role=\"group\" >
                      Total Cobrado <span class=\"label label-success col-md-32\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</button>
                    </div>
                </div>                   
            </div>
</div>
";
        
        $__internal_4942ee48d74c622be3848d672e9bf44605863ff148974b72aa76ec0c69bbc226->leave($__internal_4942ee48d74c622be3848d672e9bf44605863ff148974b72aa76ec0c69bbc226_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:comisionCobradaPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  116 => 40,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  88 => 32,  84 => 31,  57 => 7,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'basePdf.html.twig' %}*/
/* {% block title %}Comisi&oacute;n Cobrada{% endblock %}*/
/* */
/* {% block cuerpo %}*/
/*     <div class="panel panel-primary">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">{{info}}</div>*/
/*         <div class="panel-body">*/
/*             <table class="table">*/
/*                <thead>*/
/*                   <tr>*/
/*                       <th>*/
/*                         Año*/
/*                      </th>*/
/*                      <th>*/
/*                         Mes*/
/*                      </th>*/
/*                      <th>*/
/*                         Monto Cuota*/
/*                      </th>*/
/*                       <th>*/
/*                         Porcentaje Comisión*/
/*                      </th>*/
/*                       <th>*/
/*                         Monto Cobrado*/
/*                      </th>*/
/*                  </tr>*/
/*                </thead>*/
/* */
/*                <tbody class="list">*/
/*                    {% for cuota in cuotas %}*/
/*                                 <tr>                                  */
/*                                     <td class="año">{{cuota.data.anio}}</td>*/
/*                                     <td class="mes">{{cuota.data.mes}}</td>*/
/*                                     <td class="montoCuota">{{cuota.data.monto}}</td> */
/*                                     <td class="comision">{{cuota.data.comisionCobrador}}</td>*/
/*                                     <td class="monto">{{cuota.montoCobrado}}</td>                                                            */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                </tbody>*/
/*            </table>*/
/*        </div>*/
/*         <div class="panel-footer">          */
/*                 <div class="col-md-4 col-md-offset-4">*/
/*                     <div class="label-group label-group-sm col-md-32" role="group" >*/
/*                       Total Cobrado <span class="label label-success col-md-32">{{total}}</button>*/
/*                     </div>*/
/*                 </div>                   */
/*             </div>*/
/* </div>*/
/* {% endblock %}*/
