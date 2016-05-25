<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagas.html.twig */
class __TwigTemplate_d7e410abc46cb60e92a37ff2ac51a6620c53af049b7b24110ca4688751d3797e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagas.html.twig", 1);
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
        $__internal_c2b86dec134aec2b6cddf282c94abde4a1f78a57f24ed3241b8be19657aa65b3 = $this->env->getExtension("native_profiler");
        $__internal_c2b86dec134aec2b6cddf282c94abde4a1f78a57f24ed3241b8be19657aa65b3->enter($__internal_c2b86dec134aec2b6cddf282c94abde4a1f78a57f24ed3241b8be19657aa65b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b86dec134aec2b6cddf282c94abde4a1f78a57f24ed3241b8be19657aa65b3->leave($__internal_c2b86dec134aec2b6cddf282c94abde4a1f78a57f24ed3241b8be19657aa65b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cfb82c0113edd5ce757d7f2cb2179af9dfa0cda011bdb429f89b3f00fe855e2 = $this->env->getExtension("native_profiler");
        $__internal_5cfb82c0113edd5ce757d7f2cb2179af9dfa0cda011bdb429f89b3f00fe855e2->enter($__internal_5cfb82c0113edd5ce757d7f2cb2179af9dfa0cda011bdb429f89b3f00fe855e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administraci&oacute;n | Cuotas Pagas ";
        
        $__internal_5cfb82c0113edd5ce757d7f2cb2179af9dfa0cda011bdb429f89b3f00fe855e2->leave($__internal_5cfb82c0113edd5ce757d7f2cb2179af9dfa0cda011bdb429f89b3f00fe855e2_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_3d5b76209a3081936d0388fb919d2ade6d227c9914026ed4a6badd99b6c75c3f = $this->env->getExtension("native_profiler");
        $__internal_3d5b76209a3081936d0388fb919d2ade6d227c9914026ed4a6badd99b6c75c3f->enter($__internal_3d5b76209a3081936d0388fb919d2ade6d227c9914026ed4a6badd99b6c75c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "
  \t";
        // line 7
        if (array_key_exists("msj", $context)) {
            // line 8
            echo "
        <div class=\"alert alert-";
            // line 9
            if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
                echo "success";
            } else {
                echo "danger";
            }
            echo " alert-dismissible fade in\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          <strong>Atenci&oacute;n! </strong>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>

    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((isset($context["hayPagos"]) ? $context["hayPagos"] : $this->getContext($context, "hayPagos"))) {
            // line 17
            echo "        ";
            if (array_key_exists("gestionId", $context)) {
                // line 18
                echo "            <a class=\"btn btn-primary botonAdd\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_cuotasPagasPDF", array()), "html", null, true);
                echo "?anio=";
                echo twig_escape_filter($this->env, (isset($context["anio"]) ? $context["anio"] : $this->getContext($context, "anio")), "html", null, true);
                echo "&mes=";
                echo twig_escape_filter($this->env, (isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "html", null, true);
                echo "&userId=";
                echo twig_escape_filter($this->env, (isset($context["gestionId"]) ? $context["gestionId"] : $this->getContext($context, "gestionId")), "html", null, true);
                echo "\">Exportar a PDF</a>
        ";
            } else {
                // line 20
                echo "            <a class=\"btn btn-primary botonAdd\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_cuotasPagasPDF", array()), "html", null, true);
                echo "?anio=";
                echo twig_escape_filter($this->env, (isset($context["anio"]) ? $context["anio"] : $this->getContext($context, "anio")), "html", null, true);
                echo "&mes=";
                echo twig_escape_filter($this->env, (isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "html", null, true);
                echo "\">Exportar a PDF</a>
        ";
            }
            // line 22
            echo "        <div class=\"panel panel-primary\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "html", null, true);
            echo "</div>
                <!-- Table -->
                <div class=\"panel-body\" id=\"paginacion\">
                     <div class=\"input-group col-md-12\">
                    <div class=\"input-group-addon\">
                      <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                        <span class=\"glyphicon glyphicon-filter\"></span>
                      </button>
                      <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"opcionesDeFiltrado\" style=\"padding:10px;\">
                        <li role=\"presentation\">
                            <input type=\"checkbox\" name=\"busqueda\" value=\"dni\" checked> 
                            <label>DNI</label>
                        </li>
                        <li role=\"presentation\">
                            <input type=\"checkbox\" name=\"busqueda\" value=\"nombre\" checked> 
                            <label>Nombre</label>
                        </li>
                        <li role=\"presentation\">
                            <input type=\"checkbox\" name=\"busqueda\" value=\"apellido\" checked> 
                            <label>Apellido</label>
                        </li>
                      </ul>
                    </div>
                    <input type=\"text\" class=\"input-busqueda form-control\" placeholder=\"Inicie su búsqueda aquí\" />
                    <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-search\"></span></div>

                </div>           

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

                        <tbody class=\"list\">
                            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
            foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
                // line 97
                echo "                                <tr>
                                    <th scope=\"row\" class=\"id\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "id", array()), "html", null, true);
                echo "</th>
                                    <td class=\"dni\">";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "dni", array()), "html", null, true);
                echo "</td>
                                    <td class=\"nombre\">";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "nombre", array()), "html", null, true);
                echo "</td>
                                    <td class=\"apellido\">";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "data", array()), "apellido", array()), "html", null, true);
                echo "</td>
                                    <td class=\"becado\">";
                // line 102
                if ($this->getAttribute($this->getAttribute($context["alumno"], "beca", array()), "becado", array())) {
                    echo " si ";
                } else {
                    echo " no ";
                }
                echo "</td>
                                    <td class=\"cobrador\">";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "user", array()), "username", array()), "html", null, true);
                echo "</td>

                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                        </tbody>
                    </table>

                    <div class=\"col-md-4 col-md-offset-4\">
                        <ul class=\"pagination\"></ul>
                    </div>
                </div>
        </div>
    ";
        }
        // line 116
        echo "    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var monkeyList = new List('paginacion', {
              \tvalueNames: ['nombre','apellido','dni'],
              \tpage: ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")), "html", null, true);
        echo ",
              \tplugins: [ ListPagination({}) ] 
          \t});

          \t\$(\".input-busqueda\").keyup(function(){
              \tfiltros = [];
              \t\$(\"input[name='busqueda']:checked\").each(function() {
                  \tfiltros.push(\$(this).val());
              \t});
              \tmonkeyList.search(\$(this).val(), filtros)
          \t});
        });
        
    </script>
";
        
        $__internal_3d5b76209a3081936d0388fb919d2ade6d227c9914026ed4a6badd99b6c75c3f->leave($__internal_3d5b76209a3081936d0388fb919d2ade6d227c9914026ed4a6badd99b6c75c3f_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:cuotasPagas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 120,  238 => 116,  227 => 107,  217 => 103,  209 => 102,  205 => 101,  201 => 100,  197 => 99,  193 => 98,  190 => 97,  186 => 96,  111 => 24,  107 => 22,  97 => 20,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  70 => 11,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administraci&oacute;n | Cuotas Pagas {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/* */
/*   	{% if msj is defined %}*/
/* */
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atenci&oacute;n! </strong>{{msj}}*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% if hayPagos %}*/
/*         {% if gestionId is defined %}*/
/*             <a class="btn btn-primary botonAdd" href="{{URL.backend_listado_cuotasPagasPDF}}?anio={{anio}}&mes={{mes}}&userId={{gestionId}}">Exportar a PDF</a>*/
/*         {% else %}*/
/*             <a class="btn btn-primary botonAdd" href="{{URL.backend_listado_cuotasPagasPDF}}?anio={{anio}}&mes={{mes}}">Exportar a PDF</a>*/
/*         {% endif %}*/
/*         <div class="panel panel-primary">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading">{{info}}</div>*/
/*                 <!-- Table -->*/
/*                 <div class="panel-body" id="paginacion">*/
/*                      <div class="input-group col-md-12">*/
/*                     <div class="input-group-addon">*/
/*                       <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/*                         <span class="glyphicon glyphicon-filter"></span>*/
/*                       </button>*/
/*                       <ul class="dropdown-menu" role="menu" aria-labelledby="opcionesDeFiltrado" style="padding:10px;">*/
/*                         <li role="presentation">*/
/*                             <input type="checkbox" name="busqueda" value="dni" checked> */
/*                             <label>DNI</label>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <input type="checkbox" name="busqueda" value="nombre" checked> */
/*                             <label>Nombre</label>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <input type="checkbox" name="busqueda" value="apellido" checked> */
/*                             <label>Apellido</label>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/*                     <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/* */
/*                 </div>           */
/* */
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="id">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                 #*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="dni">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     DNI*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="nombre">*/
/*                                         <span class="glyphicon glyphicon-sort"></span> */
/*                                     </button>*/
/*                                     Nombre*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="apellido">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     Apellido*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="becado">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     Becado*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <button class="sort btn" data-sort="cobrador">*/
/*                                         <span class="glyphicon glyphicon-sort"></span>*/
/*                                     </button>*/
/*                                     Cobrador*/
/*                                 </th>*/
/* */
/*                             </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody class="list">*/
/*                             {% for alumno in alumnos %}*/
/*                                 <tr>*/
/*                                     <th scope="row" class="id">{{alumno.data.id}}</th>*/
/*                                     <td class="dni">{{alumno.data.dni}}</td>*/
/*                                     <td class="nombre">{{alumno.data.nombre}}</td>*/
/*                                     <td class="apellido">{{alumno.data.apellido}}</td>*/
/*                                     <td class="becado">{% if alumno.beca.becado %} si {% else %} no {% endif %}</td>*/
/*                                     <td class="cobrador">{{alumno.user.username}}</td>*/
/* */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                     <div class="col-md-4 col-md-offset-4">*/
/*                         <ul class="pagination"></ul>*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     <script type="text/javascript">*/
/*         $( document ).ready(function() {*/
/*             var monkeyList = new List('paginacion', {*/
/*               	valueNames: ['nombre','apellido','dni'],*/
/*               	page: {{paginacion}},*/
/*               	plugins: [ ListPagination({}) ] */
/*           	});*/
/* */
/*           	$(".input-busqueda").keyup(function(){*/
/*               	filtros = [];*/
/*               	$("input[name='busqueda']:checked").each(function() {*/
/*                   	filtros.push($(this).val());*/
/*               	});*/
/*               	monkeyList.search($(this).val(), filtros)*/
/*           	});*/
/*         });*/
/*         */
/*     </script>*/
/* {% endblock %}*/
