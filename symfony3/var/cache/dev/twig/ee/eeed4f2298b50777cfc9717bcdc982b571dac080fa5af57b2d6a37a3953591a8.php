<?php

/* AnexaCooperadoraBundle:backend/viejo/pago:index.html.twig */
class __TwigTemplate_332bdd41edfc33bb3be373b822b0ac35601552bf8d4054bf647217edd7366600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/pago:index.html.twig", 1);
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
        $__internal_8cf9ee2a5f5f1dc3c6d836b8b79a767acf0fb053019615c92ff05ac40ef123fe = $this->env->getExtension("native_profiler");
        $__internal_8cf9ee2a5f5f1dc3c6d836b8b79a767acf0fb053019615c92ff05ac40ef123fe->enter($__internal_8cf9ee2a5f5f1dc3c6d836b8b79a767acf0fb053019615c92ff05ac40ef123fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/pago:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cf9ee2a5f5f1dc3c6d836b8b79a767acf0fb053019615c92ff05ac40ef123fe->leave($__internal_8cf9ee2a5f5f1dc3c6d836b8b79a767acf0fb053019615c92ff05ac40ef123fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ac4d3a300e774d1c722575796136b71798d88b0e03fd47826c7ae34a3753573 = $this->env->getExtension("native_profiler");
        $__internal_1ac4d3a300e774d1c722575796136b71798d88b0e03fd47826c7ae34a3753573->enter($__internal_1ac4d3a300e774d1c722575796136b71798d88b0e03fd47826c7ae34a3753573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Pagos";
        
        $__internal_1ac4d3a300e774d1c722575796136b71798d88b0e03fd47826c7ae34a3753573->leave($__internal_1ac4d3a300e774d1c722575796136b71798d88b0e03fd47826c7ae34a3753573_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_ee08ae9cf67c722a34b2888c0b7bd5f16d8348d293863389945ba1a8b43c255a = $this->env->getExtension("native_profiler");
        $__internal_ee08ae9cf67c722a34b2888c0b7bd5f16d8348d293863389945ba1a8b43c255a->enter($__internal_ee08ae9cf67c722a34b2888c0b7bd5f16d8348d293863389945ba1a8b43c255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

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
          <strong>Atencion! </strong> ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>

    ";
        }
        // line 15
        echo "

\t<div class=\"panel panel-primary\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">Listado de Alumnos</div>
\t        <!-- Table -->
\t        <div class=\"panel-body\" id=\"paginacion\">

\t            <div class=\"input-group col-md-12\">
\t                <div class=\"input-group-addon\">
\t                  \t<button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t                    <span class=\"glyphicon glyphicon-filter\"></span>
\t                  \t</button>
\t                  \t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"opcionesDeFiltrado\" style=\"padding:10px;\">
\t                    \t<li role=\"presentation\">
\t                        \t<input type=\"checkbox\" name=\"busqueda\" value=\"nombre\" checked> 
\t                        \t<label>Nombre</label>
\t                    \t</li>
\t                    \t<li role=\"presentation\">
\t                        \t<input type=\"checkbox\" name=\"busqueda\" value=\"apellido\" checked> 
\t                        \t<label>Apellido</label>
\t                    \t</li>
\t                    \t<li role=\"presentation\">
\t                        \t<input type=\"checkbox\" name=\"busqueda\" value=\"dni\" checked> 
\t                        \t<label>DNI</label>
\t                    \t</li>
\t                  \t</ul>
\t                </div>
\t                <input type=\"text\" class=\"input-busqueda form-control\" placeholder=\"Inicie su búsqueda aquí\" />
\t                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-search\"></span></div>

\t            </div>                                      

\t            <table class=\"table\">
\t              \t<thead>
\t\t                <tr>
\t\t                  \t<th>
\t\t                    \t<button class=\"sort btn\" data-sort=\"id\">
\t\t                        \t<span class=\"glyphicon glyphicon-sort\"></span>
\t\t                    \t</button>
\t\t                    #
\t\t                  \t</th>
\t\t                  \t<th>
\t\t\t                    <button class=\"sort btn\" data-sort=\"nombre\">
\t\t\t                        <span class=\"glyphicon glyphicon-sort\"></span> 
\t\t\t                    </button>
\t\t                    \tNombre
\t\t\t                </th>
\t\t\t                <th>
\t\t\t                    <button class=\"sort btn\" data-sort=\"apellido\">
\t\t\t                        <span class=\"glyphicon glyphicon-sort\"></span>
\t\t\t                    </button>
\t\t\t                    Apellido
\t\t\t                </th>
\t\t\t                <th>
\t\t\t                    <button class=\"sort btn\" data-sort=\"dni\">
\t\t\t                        <span class=\"glyphicon glyphicon-sort\"></span>
\t\t\t                    </button>
\t\t\t                    DNI
\t\t\t                </th>
\t\t\t            </tr>
\t              \t</thead>

\t              \t<tbody class=\"list\">
\t\t  \t            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 80
            echo "\t\t  \t              \t<tr>
\t\t  \t                \t<th scope=\"row\" class=\"id\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</th>
\t\t  \t                \t<td class=\"nombre\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t  \t                \t<td class=\"apellido\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido", array()), "html", null, true);
            echo "</td>
\t\t  \t                \t<td class=\"dni\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "dni", array()), "html", null, true);
            echo "</td>
\t\t                    \t<td>
\t\t                        \t<div class=\"\">
\t\t\t                            <a class=\"btn btn-success\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_pago_listarPagos", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\" title='VerCuotas'>
\t\t\t                                <span class='glyphicon glyphicon-eye-open'></span>
\t\t\t                            </a>
\t\t                            \t   
\t\t                        \t</div>               
\t\t                    \t</td>
\t\t  \t              \t</tr>
\t\t  \t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t              \t</tbody>
\t            </table>

\t            <div class=\"col-md-4 col-md-offset-4\">
\t                <ul class=\"pagination\"></ul>
\t            </div>
\t        </div>
    </div>
    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var monkeyList = new List('paginacion', {
              \tvalueNames: ['nombre','apellido','dni'],
              \tpage: ";
        // line 107
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
        
        $__internal_ee08ae9cf67c722a34b2888c0b7bd5f16d8348d293863389945ba1a8b43c255a->leave($__internal_ee08ae9cf67c722a34b2888c0b7bd5f16d8348d293863389945ba1a8b43c255a_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/pago:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 107,  184 => 95,  168 => 87,  162 => 84,  158 => 83,  154 => 82,  150 => 81,  147 => 80,  143 => 79,  77 => 15,  70 => 11,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Pagos{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/* */
/*   	{% if msj is defined %}*/
/* */
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atencion! </strong> {{msj}}*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/* */
/* 	<div class="panel panel-primary">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Listado de Alumnos</div>*/
/* 	        <!-- Table -->*/
/* 	        <div class="panel-body" id="paginacion">*/
/* */
/* 	            <div class="input-group col-md-12">*/
/* 	                <div class="input-group-addon">*/
/* 	                  	<button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/* 	                    <span class="glyphicon glyphicon-filter"></span>*/
/* 	                  	</button>*/
/* 	                  	<ul class="dropdown-menu" role="menu" aria-labelledby="opcionesDeFiltrado" style="padding:10px;">*/
/* 	                    	<li role="presentation">*/
/* 	                        	<input type="checkbox" name="busqueda" value="nombre" checked> */
/* 	                        	<label>Nombre</label>*/
/* 	                    	</li>*/
/* 	                    	<li role="presentation">*/
/* 	                        	<input type="checkbox" name="busqueda" value="apellido" checked> */
/* 	                        	<label>Apellido</label>*/
/* 	                    	</li>*/
/* 	                    	<li role="presentation">*/
/* 	                        	<input type="checkbox" name="busqueda" value="dni" checked> */
/* 	                        	<label>DNI</label>*/
/* 	                    	</li>*/
/* 	                  	</ul>*/
/* 	                </div>*/
/* 	                <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/* 	                <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/* */
/* 	            </div>                                      */
/* */
/* 	            <table class="table">*/
/* 	              	<thead>*/
/* 		                <tr>*/
/* 		                  	<th>*/
/* 		                    	<button class="sort btn" data-sort="id">*/
/* 		                        	<span class="glyphicon glyphicon-sort"></span>*/
/* 		                    	</button>*/
/* 		                    #*/
/* 		                  	</th>*/
/* 		                  	<th>*/
/* 			                    <button class="sort btn" data-sort="nombre">*/
/* 			                        <span class="glyphicon glyphicon-sort"></span> */
/* 			                    </button>*/
/* 		                    	Nombre*/
/* 			                </th>*/
/* 			                <th>*/
/* 			                    <button class="sort btn" data-sort="apellido">*/
/* 			                        <span class="glyphicon glyphicon-sort"></span>*/
/* 			                    </button>*/
/* 			                    Apellido*/
/* 			                </th>*/
/* 			                <th>*/
/* 			                    <button class="sort btn" data-sort="dni">*/
/* 			                        <span class="glyphicon glyphicon-sort"></span>*/
/* 			                    </button>*/
/* 			                    DNI*/
/* 			                </th>*/
/* 			            </tr>*/
/* 	              	</thead>*/
/* */
/* 	              	<tbody class="list">*/
/* 		  	            {% for alumno in alumnos %}*/
/* 		  	              	<tr>*/
/* 		  	                	<th scope="row" class="id">{{alumno.id}}</th>*/
/* 		  	                	<td class="nombre">{{alumno.nombre}}</td>*/
/* 		  	                	<td class="apellido">{{alumno.apellido}}</td>*/
/* 		  	                	<td class="dni">{{alumno.dni}}</td>*/
/* 		                    	<td>*/
/* 		                        	<div class="">*/
/* 			                            <a class="btn btn-success" href="{{URL.backend_pago_listarPagos}}?id={{alumno.id}}" title='VerCuotas'>*/
/* 			                                <span class='glyphicon glyphicon-eye-open'></span>*/
/* 			                            </a>*/
/* 		                            	   */
/* 		                        	</div>               */
/* 		                    	</td>*/
/* 		  	              	</tr>*/
/* 		  	            {% endfor %}*/
/* 	              	</tbody>*/
/* 	            </table>*/
/* */
/* 	            <div class="col-md-4 col-md-offset-4">*/
/* 	                <ul class="pagination"></ul>*/
/* 	            </div>*/
/* 	        </div>*/
/*     </div>*/
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
