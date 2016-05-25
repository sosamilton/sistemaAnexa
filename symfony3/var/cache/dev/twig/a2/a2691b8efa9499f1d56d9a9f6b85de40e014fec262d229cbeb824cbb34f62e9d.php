<?php

/* AnexaCooperadoraBundle:cuota:index.html.twig */
class __TwigTemplate_ae3ff6d01869315ba51be66c48089b849ed93eb161f58afdee74cb4752795864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:base.html.twig", "AnexaCooperadoraBundle:cuota:index.html.twig", 1);
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
        $__internal_03457c559d86b519d4a8d7f2f41c167305ba7f8fed70a778f97dc764a449542f = $this->env->getExtension("native_profiler");
        $__internal_03457c559d86b519d4a8d7f2f41c167305ba7f8fed70a778f97dc764a449542f->enter($__internal_03457c559d86b519d4a8d7f2f41c167305ba7f8fed70a778f97dc764a449542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:cuota:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03457c559d86b519d4a8d7f2f41c167305ba7f8fed70a778f97dc764a449542f->leave($__internal_03457c559d86b519d4a8d7f2f41c167305ba7f8fed70a778f97dc764a449542f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fe5590d162c48763c3aa07c679cfdbf0c1e2fdb019b06daff93f8032b76ed7a = $this->env->getExtension("native_profiler");
        $__internal_5fe5590d162c48763c3aa07c679cfdbf0c1e2fdb019b06daff93f8032b76ed7a->enter($__internal_5fe5590d162c48763c3aa07c679cfdbf0c1e2fdb019b06daff93f8032b76ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Cuotas | Listado ";
        
        $__internal_5fe5590d162c48763c3aa07c679cfdbf0c1e2fdb019b06daff93f8032b76ed7a->leave($__internal_5fe5590d162c48763c3aa07c679cfdbf0c1e2fdb019b06daff93f8032b76ed7a_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_f329bbbfc8eae48891d6584dfb3c571c4b70e4550af5e24ba35740200ea85bbb = $this->env->getExtension("native_profiler");
        $__internal_f329bbbfc8eae48891d6584dfb3c571c4b70e4550af5e24ba35740200ea85bbb->enter($__internal_f329bbbfc8eae48891d6584dfb3c571c4b70e4550af5e24ba35740200ea85bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "        <a class=\"btn btn-primary botonAdd\" href=\"";
            echo $this->env->getExtension('routing')->getPath("cuota_new");
            echo "\">Agregar Cuota</a>
    ";
        }
        // line 9
        echo "
    <div class=\"panel panel-primary\">
      <!-- Default panel contents -->
      <div class=\"panel-heading\">Listado de Cuotas</div>
      <!-- Table -->
      <div class=\"panel-body\"> 

        <table class=\"table\">
          <thead>
            <tr>
                <th>
                  <button class=\"sort btn\" data-sort=\"anio\">
                      <span class=\"glyphicon glyphicon-sort\"></span>
                  </button>
                    Año
                </th>
                <th>
                  <button class=\"sort btn\" data-sort=\"mes\">
                      <span class=\"glyphicon glyphicon-sort\"></span>
                  </button>
                  Mes
                </th>
                <th>
                  <button class=\"sort btn\" data-sort=\"numero\">
                      <span class=\"glyphicon glyphicon-sort\"></span>
                  </button>
                  Número
                </th>
                <th>
                  <button class=\"sort btn\" data-sort=\"tipo\">
                      <span class=\"glyphicon glyphicon-sort\"></span>
                  </button>
                  Tipo
                </th>
                <th>
                  <button class=\"sort btn\" data-sort=\"monto\">
                      <span class=\"glyphicon glyphicon-sort\"></span> 
                  </button>
                  Monto
                </th> 
                <th>
                  <button class=\"sort btn\" data-sort=\"comision\">
                      <span class=\"glyphicon glyphicon-sort\"></span> 
                  </button>
                  Comisión Cobrador
                </th>
                <th>
                  <button class=\"sort btn\" data-sort=\"fechaAlta\">
                      <span class=\"glyphicon glyphicon-sort\"></span> 
                  </button>
                  Fecha de Alta
                </th>                   
                <th>Acciones</th>
            </tr>
          </thead>
              <tbody>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) ? $context["cuotas"] : $this->getContext($context, "cuotas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 66
            echo "                    <tr>                           
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "anio", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "mes", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "numero", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "tipo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "monto", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuota"], "comisionCobrador", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuota"], "fechaAlta", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"\">

                              ";
            // line 77
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION"))) {
                // line 78
                echo "                                  <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_edit", array("id" => $this->getAttribute($context["cuota"], "id", array()))), "html", null, true);
                echo "\" title=\"Editar\"><span class='glyphicon glyphicon-pencil' ></span></a>
                                ";
                // line 79
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 80
                    echo "                                    <a class=\"btn btn-danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuota_delete", array("id" => $this->getAttribute($context["cuota"], "id", array()))), "html", null, true);
                    echo "\" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>
                                ";
                }
                // line 82
                echo "                              ";
            }
            // line 83
            echo "                              
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </tbody>
            </table>
        </div>
    </div>

";
        
        $__internal_f329bbbfc8eae48891d6584dfb3c571c4b70e4550af5e24ba35740200ea85bbb->leave($__internal_f329bbbfc8eae48891d6584dfb3c571c4b70e4550af5e24ba35740200ea85bbb_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:cuota:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 88,  176 => 83,  173 => 82,  167 => 80,  165 => 79,  160 => 78,  158 => 77,  151 => 73,  147 => 72,  143 => 71,  139 => 70,  135 => 69,  131 => 68,  127 => 67,  124 => 66,  120 => 65,  62 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:base.html.twig' %}*/
/* */
/* {% block title %} Administración | Cuotas | Listado {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*         <a class="btn btn-primary botonAdd" href="{{ path('cuota_new') }}">Agregar Cuota</a>*/
/*     {% endif %}*/
/* */
/*     <div class="panel panel-primary">*/
/*       <!-- Default panel contents -->*/
/*       <div class="panel-heading">Listado de Cuotas</div>*/
/*       <!-- Table -->*/
/*       <div class="panel-body"> */
/* */
/*         <table class="table">*/
/*           <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="anio">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                     Año*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="mes">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                   Mes*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="numero">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                   Número*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="tipo">*/
/*                       <span class="glyphicon glyphicon-sort"></span>*/
/*                   </button>*/
/*                   Tipo*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="monto">*/
/*                       <span class="glyphicon glyphicon-sort"></span> */
/*                   </button>*/
/*                   Monto*/
/*                 </th> */
/*                 <th>*/
/*                   <button class="sort btn" data-sort="comision">*/
/*                       <span class="glyphicon glyphicon-sort"></span> */
/*                   </button>*/
/*                   Comisión Cobrador*/
/*                 </th>*/
/*                 <th>*/
/*                   <button class="sort btn" data-sort="fechaAlta">*/
/*                       <span class="glyphicon glyphicon-sort"></span> */
/*                   </button>*/
/*                   Fecha de Alta*/
/*                 </th>                   */
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*           </thead>*/
/*               <tbody>*/
/*                 {% for cuota in cuotas %}*/
/*                     <tr>                           */
/*                         <td>{{ cuota.anio }}</td>*/
/*                         <td>{{ cuota.mes }}</td>*/
/*                         <td>{{ cuota.numero }}</td>*/
/*                         <td>{{ cuota.tipo }}</td>*/
/*                         <td>{{ cuota.monto }}</td>*/
/*                         <td>{{ cuota.comisionCobrador }}</td>*/
/*                         <td>{{ cuota.fechaAlta | date("d-m-Y") }}</td>*/
/*                         <td>*/
/*                             <div class="">*/
/* */
/*                               {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION') %}*/
/*                                   <a class="btn btn-primary" href="{{ path('cuota_edit', { 'id': cuota.id }) }}" title="Editar"><span class='glyphicon glyphicon-pencil' ></span></a>*/
/*                                 {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                     <a class="btn btn-danger" href="{{path('cuota_delete', { 'id':  cuota.id })}}" title='Eliminar'><span class='glyphicon glyphicon-remove'></span></a>*/
/*                                 {% endif %}*/
/*                               {% endif %}*/
/*                               */
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
