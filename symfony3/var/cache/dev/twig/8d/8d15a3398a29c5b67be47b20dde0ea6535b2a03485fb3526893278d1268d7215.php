<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagasPDF.html.twig */
class __TwigTemplate_f9d682faaa728445cd3675b7610c2fd17518a0059d5ba977df3700b9cbbb90b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePdf.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagasPDF.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basePdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4dc86fbc8c7a3596f175edb48f2702df5f173a9c9f6afe633fe8c49870fb3b5 = $this->env->getExtension("native_profiler");
        $__internal_a4dc86fbc8c7a3596f175edb48f2702df5f173a9c9f6afe633fe8c49870fb3b5->enter($__internal_a4dc86fbc8c7a3596f175edb48f2702df5f173a9c9f6afe633fe8c49870fb3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagasPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4dc86fbc8c7a3596f175edb48f2702df5f173a9c9f6afe633fe8c49870fb3b5->leave($__internal_a4dc86fbc8c7a3596f175edb48f2702df5f173a9c9f6afe633fe8c49870fb3b5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_411f419455afda3a8d5e45deb1728fcc3c1a62d6c460a247634562781a0b75d1 = $this->env->getExtension("native_profiler");
        $__internal_411f419455afda3a8d5e45deb1728fcc3c1a62d6c460a247634562781a0b75d1->enter($__internal_411f419455afda3a8d5e45deb1728fcc3c1a62d6c460a247634562781a0b75d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cuotas Pagas";
        
        $__internal_411f419455afda3a8d5e45deb1728fcc3c1a62d6c460a247634562781a0b75d1->leave($__internal_411f419455afda3a8d5e45deb1728fcc3c1a62d6c460a247634562781a0b75d1_prof);

    }

    // line 3
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_7c5304f6080d00dd89a3a23fffbf57666e9bac8ed0f3124f99707cd3d68415d1 = $this->env->getExtension("native_profiler");
        $__internal_7c5304f6080d00dd89a3a23fffbf57666e9bac8ed0f3124f99707cd3d68415d1->enter($__internal_7c5304f6080d00dd89a3a23fffbf57666e9bac8ed0f3124f99707cd3d68415d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 4
        echo "  <div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "html", null, true);
        echo "</div>
        <!-- Table -->
        <div class=\"panel-body\" id=\"paginacion\">
          

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>
                            <button class=\"sort btn\" data-sort=\"id\">
                                <span class=\"glyphicon glyphicon-sort\"></span>
                            </button>
                        #
                        </th>
                        <th>
                            <button class=\"sort btn\" data-sort=\"dni\">
                                <span class=\"glyphicon glyphicon-sort\"></span>
                            </button>
                            DNI
                        </th>
                        <th>
                            <button class=\"sort btn\" data-sort=\"nombre\">
                                <span class=\"glyphicon glyphicon-sort\"></span> 
                            </button>
                            Nombre
                        </th>
                        <th>
                            <button class=\"sort btn\" data-sort=\"apellido\">
                                <span class=\"glyphicon glyphicon-sort\"></span>
                            </button>
                            Apellido
                        </th>
                        <th>
                            <button class=\"sort btn\" data-sort=\"becado\">
                                <span class=\"glyphicon glyphicon-sort\"></span>
                            </button>
                            Becado
                        </th>
                        <th>
                            <button class=\"sort btn\" data-sort=\"cobrador\">
                                <span class=\"glyphicon glyphicon-sort\"></span>
                            </button>
                            Cobrador
                        </th>

                    </tr>
                </thead>

                <tbody>
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 56
            echo "                        <tr>
                            <th scope=\"row\" class=\"id\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "id", array()), "html", null, true);
            echo "</th>
                            <td class=\"dni\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "dni", array()), "html", null, true);
            echo "</td>
                            <td class=\"nombre\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"apellido\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "apellido", array()), "html", null, true);
            echo "</td>
                            <td class=\"becado\">";
            // line 61
            if ($this->getAttribute($this->getAttribute($context["alumno"], "beca", array()), "becado", array())) {
                echo " si ";
            } else {
                echo " no ";
            }
            echo "</td>
                            <td class=\"cobrador\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "user", array()), "username", array()), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
            </table>
        </div>
</div>
";
        
        $__internal_7c5304f6080d00dd89a3a23fffbf57666e9bac8ed0f3124f99707cd3d68415d1->leave($__internal_7c5304f6080d00dd89a3a23fffbf57666e9bac8ed0f3124f99707cd3d68415d1_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagasPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 66,  140 => 62,  132 => 61,  128 => 60,  124 => 59,  120 => 58,  116 => 57,  113 => 56,  109 => 55,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'basePdf.html.twig' %}*/
/* {% block title %}Cuotas Pagas{% endblock %}*/
/* {% block dataAdmin %}*/
/*   <div class="panel panel-primary">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">{{info}}</div>*/
/*         <!-- Table -->*/
/*         <div class="panel-body" id="paginacion">*/
/*           */
/* */
/*             <table class="table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>*/
/*                             <button class="sort btn" data-sort="id">*/
/*                                 <span class="glyphicon glyphicon-sort"></span>*/
/*                             </button>*/
/*                         #*/
/*                         </th>*/
/*                         <th>*/
/*                             <button class="sort btn" data-sort="dni">*/
/*                                 <span class="glyphicon glyphicon-sort"></span>*/
/*                             </button>*/
/*                             DNI*/
/*                         </th>*/
/*                         <th>*/
/*                             <button class="sort btn" data-sort="nombre">*/
/*                                 <span class="glyphicon glyphicon-sort"></span> */
/*                             </button>*/
/*                             Nombre*/
/*                         </th>*/
/*                         <th>*/
/*                             <button class="sort btn" data-sort="apellido">*/
/*                                 <span class="glyphicon glyphicon-sort"></span>*/
/*                             </button>*/
/*                             Apellido*/
/*                         </th>*/
/*                         <th>*/
/*                             <button class="sort btn" data-sort="becado">*/
/*                                 <span class="glyphicon glyphicon-sort"></span>*/
/*                             </button>*/
/*                             Becado*/
/*                         </th>*/
/*                         <th>*/
/*                             <button class="sort btn" data-sort="cobrador">*/
/*                                 <span class="glyphicon glyphicon-sort"></span>*/
/*                             </button>*/
/*                             Cobrador*/
/*                         </th>*/
/* */
/*                     </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                     {% for alumno in alumnos %}*/
/*                         <tr>*/
/*                             <th scope="row" class="id">{{alumno.data.id}}</th>*/
/*                             <td class="dni">{{alumno.data.dni}}</td>*/
/*                             <td class="nombre">{{alumno.data.nombre}}</td>*/
/*                             <td class="apellido">{{alumno.data.apellido}}</td>*/
/*                             <td class="becado">{% if alumno.beca.becado %} si {% else %} no {% endif %}</td>*/
/*                             <td class="cobrador">{{alumno.user.username}}</td>*/
/* */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* </div>*/
/* {% endblock %}*/
