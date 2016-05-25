<?php

/* AnexaCooperadoraBundle::basePdf.html.twig */
class __TwigTemplate_60ca9e8b30fcfe19c033171f17b534cf655b5c7e2b71f4b7a4498d736f7c1bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle::basePdf.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ae406c1f57003e0c5aa1bb5cc4656afa997e1bdcfa2dbe106073041525f5698 = $this->env->getExtension("native_profiler");
        $__internal_8ae406c1f57003e0c5aa1bb5cc4656afa997e1bdcfa2dbe106073041525f5698->enter($__internal_8ae406c1f57003e0c5aa1bb5cc4656afa997e1bdcfa2dbe106073041525f5698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle::basePdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae406c1f57003e0c5aa1bb5cc4656afa997e1bdcfa2dbe106073041525f5698->leave($__internal_8ae406c1f57003e0c5aa1bb5cc4656afa997e1bdcfa2dbe106073041525f5698_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0bac94eaab43e9efc9734a901d7612e67dcf0060eb32b279264c5e4806d94fe = $this->env->getExtension("native_profiler");
        $__internal_c0bac94eaab43e9efc9734a901d7612e67dcf0060eb32b279264c5e4806d94fe->enter($__internal_c0bac94eaab43e9efc9734a901d7612e67dcf0060eb32b279264c5e4806d94fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c0bac94eaab43e9efc9734a901d7612e67dcf0060eb32b279264c5e4806d94fe->leave($__internal_c0bac94eaab43e9efc9734a901d7612e67dcf0060eb32b279264c5e4806d94fe_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_02f4988aaea5a845c14ac665b3d9dec3d4a1fd60a81127d49338a5423071e42e = $this->env->getExtension("native_profiler");
        $__internal_02f4988aaea5a845c14ac665b3d9dec3d4a1fd60a81127d49338a5423071e42e->enter($__internal_02f4988aaea5a845c14ac665b3d9dec3d4a1fd60a81127d49338a5423071e42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    
      <h2>Escuela Anexa - Listados</h2>

";
        
        $__internal_02f4988aaea5a845c14ac665b3d9dec3d4a1fd60a81127d49338a5423071e42e->leave($__internal_02f4988aaea5a845c14ac665b3d9dec3d4a1fd60a81127d49338a5423071e42e_prof);

    }

    // line 11
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_1ea4f1ccd763ac874a77538b9fe4688431c9ff806f5ee9f3fb4f4ea321987613 = $this->env->getExtension("native_profiler");
        $__internal_1ea4f1ccd763ac874a77538b9fe4688431c9ff806f5ee9f3fb4f4ea321987613->enter($__internal_1ea4f1ccd763ac874a77538b9fe4688431c9ff806f5ee9f3fb4f4ea321987613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 12
        echo "    <div class=\"panel panel-primary\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">";
        // line 14
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
                     <th>
                         Becado
                     </th>
                    <th>
                         Cobrador
                     </th>

                 </tr>
               </thead>

               <tbody class=\"list\">
                   ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 40
            echo "                       <tr>
                        <!-- <th scope=\"row\" class=\"id\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</th> -->
                           <td class=\"dni\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "dni", array()), "html", null, true);
            echo "</td>
                           <td class=\"nombre\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "nombre", array()), "html", null, true);
            echo "</td>
                           <td class=\"apellido\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "apellido", array()), "html", null, true);
            echo "</td>
                           <td class=\"becado\">";
            // line 45
            if ($this->getAttribute($this->getAttribute($context["alumno"], "beca", array()), "becado", array())) {
                echo " si ";
            } else {
                echo " no ";
            }
            echo "</td>
                           <td class=\"cobrador\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "user", array()), "username", array()), "html", null, true);
            echo "</td>

                        </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "               </tbody>
           </table>
       </div>
</div>
";
        
        $__internal_1ea4f1ccd763ac874a77538b9fe4688431c9ff806f5ee9f3fb4f4ea321987613->leave($__internal_1ea4f1ccd763ac874a77538b9fe4688431c9ff806f5ee9f3fb4f4ea321987613_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle::basePdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  132 => 46,  124 => 45,  120 => 44,  116 => 43,  112 => 42,  108 => 41,  105 => 40,  101 => 39,  73 => 14,  69 => 12,  63 => 11,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block header %}*/
/*     */
/*       <h2>Escuela Anexa - Listados</h2>*/
/* */
/* {% endblock %}*/
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
/*                      </th>*/
/*                      <th>*/
/*                          Becado*/
/*                      </th>*/
/*                     <th>*/
/*                          Cobrador*/
/*                      </th>*/
/* */
/*                  </tr>*/
/*                </thead>*/
/* */
/*                <tbody class="list">*/
/*                    {% for alumno in alumnos %}*/
/*                        <tr>*/
/*                         <!-- <th scope="row" class="id">{{alumno.id}}</th> -->*/
/*                            <td class="dni">{{alumno.data.dni}}</td>*/
/*                            <td class="nombre">{{alumno.data.nombre}}</td>*/
/*                            <td class="apellido">{{alumno.data.apellido}}</td>*/
/*                            <td class="becado">{% if alumno.beca.becado %} si {% else %} no {% endif %}</td>*/
/*                            <td class="cobrador">{{alumno.user.username}}</td>*/
/* */
/*                         </tr>*/
/*                    {% endfor %}*/
/*                </tbody>*/
/*            </table>*/
/*        </div>*/
/* </div>*/
/* {% endblock %}*/
