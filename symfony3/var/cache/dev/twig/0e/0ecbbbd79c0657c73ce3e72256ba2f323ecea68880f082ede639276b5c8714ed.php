<?php

/* AnexaCooperadoraBundle:backend/viejo/usuario:index.html.twig */
class __TwigTemplate_894ba6f2fb1d79320a5f5d7ec139c5091f091a7f0839a8d11fe2cbcd513023cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/usuario:index.html.twig", 1);
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
        $__internal_4e9c9296de4b724618fcb503db30998551c78b7c72d408bd26b9975ecf8e1559 = $this->env->getExtension("native_profiler");
        $__internal_4e9c9296de4b724618fcb503db30998551c78b7c72d408bd26b9975ecf8e1559->enter($__internal_4e9c9296de4b724618fcb503db30998551c78b7c72d408bd26b9975ecf8e1559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9c9296de4b724618fcb503db30998551c78b7c72d408bd26b9975ecf8e1559->leave($__internal_4e9c9296de4b724618fcb503db30998551c78b7c72d408bd26b9975ecf8e1559_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_328ca8c4ddd7f36491e6ab8c9ff179d950ecb5d89febe641358076ffc033ad5d = $this->env->getExtension("native_profiler");
        $__internal_328ca8c4ddd7f36491e6ab8c9ff179d950ecb5d89febe641358076ffc033ad5d->enter($__internal_328ca8c4ddd7f36491e6ab8c9ff179d950ecb5d89febe641358076ffc033ad5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Usuario";
        
        $__internal_328ca8c4ddd7f36491e6ab8c9ff179d950ecb5d89febe641358076ffc033ad5d->leave($__internal_328ca8c4ddd7f36491e6ab8c9ff179d950ecb5d89febe641358076ffc033ad5d_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_8e8ddefed1134d9a0b92ac130ae5337608e64db4e3e8b0ea80813d727b216d9d = $this->env->getExtension("native_profiler");
        $__internal_8e8ddefed1134d9a0b92ac130ae5337608e64db4e3e8b0ea80813d727b216d9d->enter($__internal_8e8ddefed1134d9a0b92ac130ae5337608e64db4e3e8b0ea80813d727b216d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "      ";
        if (array_key_exists("msj", $context)) {
            // line 7
            echo "        <div class=\"alert alert-";
            if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
                echo "success";
            } else {
                echo "danger";
            }
            echo " alert-dismissible fade in\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          <strong>Atenci&oacute;n!</strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 12
        echo "      <a class=\"btn btn-primary botonAdd\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_usuario_agregar", array()), "html", null, true);
        echo "\" role=\"button\">Agregar Usuario</a>

    \t<div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Listado de Usuarios</div>
          <!-- Table -->
          <div class=\"panel-body\" id=\"paginacion\">

            <div class=\"input-group col-md-12\">
                <div class=\"input-group-addon\">
                  <button class=\"btn btn-link btn-xs dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                    <span class=\"glyphicon glyphicon-filter\"></span>
                  </button>
                  <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"opcionesDeFiltrado\" style=\"padding:10px;\">
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"username\" checked> 
                        <label>Username</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"estado\" checked> 
                        <label>Estado</label>
                    </li>
                    <li role=\"presentation\">
                        <input type=\"checkbox\" name=\"busqueda\" value=\"role\" checked> 
                        <label>Rol</label>
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
                    <button class=\"sort btn\" data-sort=\"username\">
                        <span class=\"glyphicon glyphicon-sort\"></span> 
                    </button>
                    Username
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"estado\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Estado
                  </th>
                  <th>
                    <button class=\"sort btn\" data-sort=\"role\">
                        <span class=\"glyphicon glyphicon-sort\"></span>
                    </button>
                    Rol
                  </th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody class=\"list\">
  \t            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 71
            echo "  \t              <tr ";
            if ( !$this->getAttribute($context["usuario"], "habilitado", array())) {
                echo " class=\"deshabilitado\" ";
            }
            echo ">
  \t                <td class=\"username\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
  \t                <td class=\"estado\">";
            // line 73
            if ($this->getAttribute($context["usuario"], "habilitado", array())) {
                echo " Habilitado ";
            } else {
                echo " Deshabilitado ";
            }
            echo "</td>
  \t                <td class=\"role\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rol", array()), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"\">
                            <a class=\"btn btn-success\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_usuario_ver", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "\" title='Ver'>
                                <span class='glyphicon glyphicon-eye-open'></span>
                            </a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_usuario_estado", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "\" title='Deshabilitar'>
                                <span class='glyphicon glyphicon-lock'></span>
                            </a>       
                            <a class=\"btn btn-primary\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_usuario_editar", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "\" title='Editar'>
                                <span class='glyphicon glyphicon-pencil' ></span>
                            </a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_usuario_eliminar", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "\" title='Eliminar'>
                                <span class='glyphicon glyphicon-remove'></span>
                            </a>       
                        </div>               
                    </td>
  \t              </tr>
  \t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "              </tbody>
            </table>
            <div class=\"col-md-4 col-md-offset-4\">
                <ul class=\"pagination\"></ul>
            </div>
          </div>
      </div>
      <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var monkeyList = new List('paginacion', {
              valueNames: ['username','estado','role'],
              page: ";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")), "html", null, true);
        echo ",
              plugins: [ ListPagination({}) ] 
          });

          \$(\".input-busqueda\").keyup(function(){
              filtros = [];
              \$(\"input[name='busqueda']:checked\").each(function() {
                  filtros.push(\$(this).val());
              });
              monkeyList.search(\$(this).val(), filtros)
          });
        });
        
    </script>
";
        
        $__internal_8e8ddefed1134d9a0b92ac130ae5337608e64db4e3e8b0ea80813d727b216d9d->leave($__internal_8e8ddefed1134d9a0b92ac130ae5337608e64db4e3e8b0ea80813d727b216d9d_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 104,  202 => 93,  187 => 86,  179 => 83,  171 => 80,  163 => 77,  157 => 74,  149 => 73,  145 => 72,  138 => 71,  134 => 70,  72 => 12,  66 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Usuario{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       {% if msj is defined %}*/
/*         <div class="alert alert-{% if success %}success{% else %}danger{% endif %} alert-dismissible fade in" role="alert">*/
/*           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*           <strong>Atenci&oacute;n!</strong>{{msj}}*/
/*         </div>*/
/*       {% endif %}*/
/*       <a class="btn btn-primary botonAdd" href="{{URL.backend_usuario_agregar}}" role="button">Agregar Usuario</a>*/
/* */
/*     	<div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Listado de Usuarios</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body" id="paginacion">*/
/* */
/*             <div class="input-group col-md-12">*/
/*                 <div class="input-group-addon">*/
/*                   <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/*                     <span class="glyphicon glyphicon-filter"></span>*/
/*                   </button>*/
/*                   <ul class="dropdown-menu" role="menu" aria-labelledby="opcionesDeFiltrado" style="padding:10px;">*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="username" checked> */
/*                         <label>Username</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="estado" checked> */
/*                         <label>Estado</label>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <input type="checkbox" name="busqueda" value="role" checked> */
/*                         <label>Rol</label>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <input type="text" class="input-busqueda form-control" placeholder="Inicie su búsqueda aquí" />*/
/*                 <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>*/
/* */
/*             </div>                                      */
/* */
/*             <table class="table">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="username">*/
/*                         <span class="glyphicon glyphicon-sort"></span> */
/*                     </button>*/
/*                     Username*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="estado">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Estado*/
/*                   </th>*/
/*                   <th>*/
/*                     <button class="sort btn" data-sort="role">*/
/*                         <span class="glyphicon glyphicon-sort"></span>*/
/*                     </button>*/
/*                     Rol*/
/*                   </th>*/
/*                   <th>Acciones</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="list">*/
/*   	            {% for usuario in usuarios %}*/
/*   	              <tr {% if not usuario.habilitado %} class="deshabilitado" {% endif %}>*/
/*   	                <td class="username">{{usuario.username}}</td>*/
/*   	                <td class="estado">{% if usuario.habilitado %} Habilitado {% else %} Deshabilitado {% endif %}</td>*/
/*   	                <td class="role">{{usuario.rol}}</td>*/
/*                     <td>*/
/*                         <div class="">*/
/*                             <a class="btn btn-success" href="{{URL.backend_usuario_ver}}?id={{usuario.id}}" title='Ver'>*/
/*                                 <span class='glyphicon glyphicon-eye-open'></span>*/
/*                             </a>*/
/*                             <a class="btn btn-warning" href="{{URL.backend_usuario_estado}}?id={{usuario.id}}" title='Deshabilitar'>*/
/*                                 <span class='glyphicon glyphicon-lock'></span>*/
/*                             </a>       */
/*                             <a class="btn btn-primary" href="{{URL.backend_usuario_editar}}?id={{usuario.id}}" title='Editar'>*/
/*                                 <span class='glyphicon glyphicon-pencil' ></span>*/
/*                             </a>*/
/*                             <a class="btn btn-danger" href="{{URL.backend_usuario_eliminar}}?id={{usuario.id}}" title='Eliminar'>*/
/*                                 <span class='glyphicon glyphicon-remove'></span>*/
/*                             </a>       */
/*                         </div>               */
/*                     </td>*/
/*   	              </tr>*/
/*   	            {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <ul class="pagination"></ul>*/
/*             </div>*/
/*           </div>*/
/*       </div>*/
/*       <script type="text/javascript">*/
/*         $( document ).ready(function() {*/
/*             var monkeyList = new List('paginacion', {*/
/*               valueNames: ['username','estado','role'],*/
/*               page: {{paginacion}},*/
/*               plugins: [ ListPagination({}) ] */
/*           });*/
/* */
/*           $(".input-busqueda").keyup(function(){*/
/*               filtros = [];*/
/*               $("input[name='busqueda']:checked").each(function() {*/
/*                   filtros.push($(this).val());*/
/*               });*/
/*               monkeyList.search($(this).val(), filtros)*/
/*           });*/
/*         });*/
/*         */
/*     </script>*/
/* {% endblock %}*/
/* */
