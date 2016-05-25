<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagasPDF.html.twig */
class __TwigTemplate_611b071d7bc54be5de65a9ad4e4eba199ddd56e079e7fb138606594bd05ef2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePdf.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagasPDF.html.twig", 1);
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
        $__internal_b9df2ee9368c9c0e9b5db82ca92fc95a8f47e503896246f7603893eea1cc2ab6 = $this->env->getExtension("native_profiler");
        $__internal_b9df2ee9368c9c0e9b5db82ca92fc95a8f47e503896246f7603893eea1cc2ab6->enter($__internal_b9df2ee9368c9c0e9b5db82ca92fc95a8f47e503896246f7603893eea1cc2ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagasPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9df2ee9368c9c0e9b5db82ca92fc95a8f47e503896246f7603893eea1cc2ab6->leave($__internal_b9df2ee9368c9c0e9b5db82ca92fc95a8f47e503896246f7603893eea1cc2ab6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a6d94b406f987b2c82902c9299cc8b770771bd8e60ef00b03d938ee26c4fbd9 = $this->env->getExtension("native_profiler");
        $__internal_5a6d94b406f987b2c82902c9299cc8b770771bd8e60ef00b03d938ee26c4fbd9->enter($__internal_5a6d94b406f987b2c82902c9299cc8b770771bd8e60ef00b03d938ee26c4fbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cuotas Impagas";
        
        $__internal_5a6d94b406f987b2c82902c9299cc8b770771bd8e60ef00b03d938ee26c4fbd9->leave($__internal_5a6d94b406f987b2c82902c9299cc8b770771bd8e60ef00b03d938ee26c4fbd9_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_cc103e5cd878fea0cc9a570f8bd54c7afbb852de71c4ac1629b6d9446bcbe8da = $this->env->getExtension("native_profiler");
        $__internal_cc103e5cd878fea0cc9a570f8bd54c7afbb852de71c4ac1629b6d9446bcbe8da->enter($__internal_cc103e5cd878fea0cc9a570f8bd54c7afbb852de71c4ac1629b6d9446bcbe8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
                        DNI
                     </th>
                     <th>
                        Nombre
                     </th>
                     <th>
                        Apellido
                     </th>             
                 </tr>
               </thead>

               <tbody class=\"list\">
                   ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 26
            echo "                       <tr>
                        <!-- <th scope=\"row\" class=\"id\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</th> -->
                           <td class=\"dni\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</td>
                           <td class=\"nombre\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                           <td class=\"apellido\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
            echo "</td>
                           
                        </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "               </tbody>
           </table>
       </div>
</div>
";
        
        $__internal_cc103e5cd878fea0cc9a570f8bd54c7afbb852de71c4ac1629b6d9446bcbe8da->leave($__internal_cc103e5cd878fea0cc9a570f8bd54c7afbb852de71c4ac1629b6d9446bcbe8da_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:cuotasImpagasPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  82 => 26,  78 => 25,  57 => 7,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'basePdf.html.twig' %}*/
/* {% block title %}Cuotas Impagas{% endblock %}*/
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
/*                         DNI*/
/*                      </th>*/
/*                      <th>*/
/*                         Nombre*/
/*                      </th>*/
/*                      <th>*/
/*                         Apellido*/
/*                      </th>             */
/*                  </tr>*/
/*                </thead>*/
/* */
/*                <tbody class="list">*/
/*                    {% for alumno in alumnos %}*/
/*                        <tr>*/
/*                         <!-- <th scope="row" class="id">{{alumno.id}}</th> -->*/
/*                            <td class="dni">{{alumno.dni}}</td>*/
/*                            <td class="nombre">{{alumno.nombre}}</td>*/
/*                            <td class="apellido">{{alumno.apellido}}</td>*/
/*                            */
/*                         </tr>*/
/*                    {% endfor %}*/
/*                </tbody>*/
/*            </table>*/
/*        </div>*/
/* </div>*/
/* {% endblock %}*/
