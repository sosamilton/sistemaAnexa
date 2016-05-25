<?php

/* AnexaCooperadoraBundle:backend/viejo/listado:index.html.twig */
class __TwigTemplate_bf56e682ab1105887b28464b8ef6366439a11b974d66505ae25608e45bfdba72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/listado:index.html.twig", 1);
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
        $__internal_dc304062a2c2ba59aaacb626907868638ecfeca274f580861ef102da043db09c = $this->env->getExtension("native_profiler");
        $__internal_dc304062a2c2ba59aaacb626907868638ecfeca274f580861ef102da043db09c->enter($__internal_dc304062a2c2ba59aaacb626907868638ecfeca274f580861ef102da043db09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/listado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc304062a2c2ba59aaacb626907868638ecfeca274f580861ef102da043db09c->leave($__internal_dc304062a2c2ba59aaacb626907868638ecfeca274f580861ef102da043db09c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b984f1ade43482f83d72cfbd24dbdefe6c56209072e3102c50e9d4820a6309c9 = $this->env->getExtension("native_profiler");
        $__internal_b984f1ade43482f83d72cfbd24dbdefe6c56209072e3102c50e9d4820a6309c9->enter($__internal_b984f1ade43482f83d72cfbd24dbdefe6c56209072e3102c50e9d4820a6309c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administraci&oacute;n | Listados";
        
        $__internal_b984f1ade43482f83d72cfbd24dbdefe6c56209072e3102c50e9d4820a6309c9->leave($__internal_b984f1ade43482f83d72cfbd24dbdefe6c56209072e3102c50e9d4820a6309c9_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_1bae8fb1b6423bcca6a52593aae629666574abdbccc9bd80c2c7aec4e20418ee = $this->env->getExtension("native_profiler");
        $__internal_1bae8fb1b6423bcca6a52593aae629666574abdbccc9bd80c2c7aec4e20418ee->enter($__internal_1bae8fb1b6423bcca6a52593aae629666574abdbccc9bd80c2c7aec4e20418ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "  <div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Listado de Matr&iacute;culas Pagas</div>
    <!-- Table -->
    <div class=\"panel-body\" id=\"paginacion\">                                 
      <div class=\"col-md-6\"> Seleccione un año para ver los alumnos que pagaron la matr&iacute;cula</div>
      <div class=\"col-md-6\"> 
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_matriculados", array()), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"col-md-6\">
            <label for=\"anio\"> Año</label>
            <select class=\"form-control\" name=\"anio\" id=\"anio\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["años_matricula"]) ? $context["años_matricula"] : $this->getContext($context, "años_matricula")));
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
          <div class=\"col-md-6\">
            <label for=\"buscar\"> Buscar</label>
            <button type=\"submit\" class=\"btn btn-primary col-md-12\" id=\"buscar\"><span class=\"glyphicon glyphicon-search\"></span></button>
          </div>
        </form>
      </div>
    </div>
  </div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">Listado de cuotas becadas o pagas</div>
        <div class=\"panel-body\" id=\"paginacion\">            
            <div class=\"col-md-4\"> Seleccione a&ntilde;o y mes para ver los alumnos con la cuota paga</div>
            <div class=\"col-md-8\"> 
                <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_cuotasPagas", array()), "html", null, true);
        echo "\" method=\"post\">
                    
                    <div class=\"col-md-4\">
                        <label for=\"anio\">Año</label>
                        <select class=\"form-control\" name=\"anio\" id=\"anio\">
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["años"]) ? $context["años"] : $this->getContext($context, "años")));
        foreach ($context['_seq'] as $context["_key"] => $context["año"]) {
            // line 42
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['año'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"mes\">Mes</label>
                        <select class=\"form-control\" name=\"mes\" id=\"mes\">
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")));
        foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
            // line 50
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "               
                        </select>
                    </div>
                     ";
        // line 54
        if ((isset($context["is_admin"]) ? $context["is_admin"] : $this->getContext($context, "is_admin"))) {
            // line 55
            echo "                        <div class=\"col-md-4\">
                            <label for=\"user\">Usuarios de Gesti&oacute;n</label>
                            <select class=\"form-control\" id=\"user\" name=\"userId\" required>
                                <option value=\"0\">Todos</option>
                                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuariosGestion"]) ? $context["usuariosGestion"] : $this->getContext($context, "usuariosGestion")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "    
                                    <option value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                            </select>
                        </div> 
                    ";
        }
        // line 65
        echo "            
                    <div class=\"col-md-4\">
                        <label for=\"buscar\">Buscar</label>
                        <button type=\"submit\" class=\"btn btn-primary col-md-12\" id=\"buscar\"><span class=\"glyphicon glyphicon-search\"></span></button>
                    </div>
                   
            </form>
        </div>
    </div>
</div>

  <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">Listado de cuotas impagas</div>
    <div class=\"panel-body\" id=\"paginacion\">                                 
      <div class=\"col-md-6\"> Seleccione un a&ntilde;o y mes para ver los alumnos que no pagaron la cuota</div>
      <div class=\"col-md-6\"> 
        <form action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_cuotasImpagas", array()), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"col-md-4\">
            <label for=\"anio\">Año</label>
            <select class=\"form-control\" name=\"anio\" id=\"anio\">
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["años"]) ? $context["años"] : $this->getContext($context, "años")));
        foreach ($context['_seq'] as $context["_key"] => $context["año"]) {
            // line 86
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
        // line 88
        echo "            </select>
          </div>
          <div class=\"col-md-4\">
            <label for=\"mes\">Mes</label>
            <select class=\"form-control\" name=\"mes\" id=\"mes\">
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")));
        foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
            // line 94
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </select>
          </div>
          <div class=\"col-md-4\">
            <label for=\"buscar\">Buscar</label>
            <button type=\"submit\" class=\"btn btn-primary col-md-12\" id=\"buscar\"><span class=\"glyphicon glyphicon-search\"></span></button>
          </div>
        </form>
      </div>
    </div>
  </div>

    ";
        // line 107
        if ((isset($context["is_gestion"]) ? $context["is_gestion"] : $this->getContext($context, "is_gestion"))) {
            // line 108
            echo "       <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Listado de comisi&oacute;n </div>
        <div class=\"panel-body\" id=\"paginacion\">                                 
          <div class=\"col-md-6\"> Seleccione un a&ntilde;o y mes para ver el monto total de comisi&oacute;n</div>
          <div class=\"col-md-6\"> 
            <form action=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_listado_comisionCobrada", array()), "html", null, true);
            echo "\" method=\"post\">
              <div class=\"col-md-4\">
                <label for=\"buscar\">Ver</label>
                <button type=\"submit\" class=\"btn btn-primary col-md-12\" id=\"buscar\"><span class=\"glyphicon glyphicon-search\"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    ";
        }
        
        $__internal_1bae8fb1b6423bcca6a52593aae629666574abdbccc9bd80c2c7aec4e20418ee->leave($__internal_1bae8fb1b6423bcca6a52593aae629666574abdbccc9bd80c2c7aec4e20418ee_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/listado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 113,  258 => 108,  256 => 107,  243 => 96,  232 => 94,  228 => 93,  221 => 88,  210 => 86,  206 => 85,  199 => 81,  181 => 65,  176 => 62,  166 => 60,  160 => 59,  154 => 55,  152 => 54,  147 => 51,  136 => 50,  132 => 49,  125 => 44,  114 => 42,  110 => 41,  102 => 36,  84 => 20,  73 => 18,  69 => 17,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administraci&oacute;n | Listados{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*   <div class="panel panel-primary">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Listado de Matr&iacute;culas Pagas</div>*/
/*     <!-- Table -->*/
/*     <div class="panel-body" id="paginacion">                                 */
/*       <div class="col-md-6"> Seleccione un año para ver los alumnos que pagaron la matr&iacute;cula</div>*/
/*       <div class="col-md-6"> */
/*         <form action="{{URL.backend_listado_matriculados}}" method="post">*/
/*           <div class="col-md-6">*/
/*             <label for="anio"> Año</label>*/
/*             <select class="form-control" name="anio" id="anio">*/
/*                 {% for año in años_matricula %}*/
/*                   <option value="{{año}}">{{año}}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="col-md-6">*/
/*             <label for="buscar"> Buscar</label>*/
/*             <button type="submit" class="btn btn-primary col-md-12" id="buscar"><span class="glyphicon glyphicon-search"></span></button>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* <div class="panel panel-primary">*/
/*     <div class="panel-heading">Listado de cuotas becadas o pagas</div>*/
/*         <div class="panel-body" id="paginacion">            */
/*             <div class="col-md-4"> Seleccione a&ntilde;o y mes para ver los alumnos con la cuota paga</div>*/
/*             <div class="col-md-8"> */
/*                 <form action="{{URL.backend_listado_cuotasPagas}}" method="post">*/
/*                     */
/*                     <div class="col-md-4">*/
/*                         <label for="anio">Año</label>*/
/*                         <select class="form-control" name="anio" id="anio">*/
/*                             {% for año in años %}*/
/*                                 <option value="{{año}}">{{año}}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <label for="mes">Mes</label>*/
/*                         <select class="form-control" name="mes" id="mes">*/
/*                             {% for mes in meses %}*/
/*                                 <option value="{{mes}}">{{mes}}</option>*/
/*                             {% endfor %}               */
/*                         </select>*/
/*                     </div>*/
/*                      {% if is_admin %}*/
/*                         <div class="col-md-4">*/
/*                             <label for="user">Usuarios de Gesti&oacute;n</label>*/
/*                             <select class="form-control" id="user" name="userId" required>*/
/*                                 <option value="0">Todos</option>*/
/*                                 {% for user in usuariosGestion %}    */
/*                                     <option value="{{user.id}}">{{user.username}}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div> */
/*                     {% endif %}*/
/*             */
/*                     <div class="col-md-4">*/
/*                         <label for="buscar">Buscar</label>*/
/*                         <button type="submit" class="btn btn-primary col-md-12" id="buscar"><span class="glyphicon glyphicon-search"></span></button>*/
/*                     </div>*/
/*                    */
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*   <div class="panel panel-primary">*/
/*     <div class="panel-heading">Listado de cuotas impagas</div>*/
/*     <div class="panel-body" id="paginacion">                                 */
/*       <div class="col-md-6"> Seleccione un a&ntilde;o y mes para ver los alumnos que no pagaron la cuota</div>*/
/*       <div class="col-md-6"> */
/*         <form action="{{URL.backend_listado_cuotasImpagas}}" method="post">*/
/*           <div class="col-md-4">*/
/*             <label for="anio">Año</label>*/
/*             <select class="form-control" name="anio" id="anio">*/
/*                 {% for año in años %}*/
/*                   <option value="{{año}}">{{año}}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <label for="mes">Mes</label>*/
/*             <select class="form-control" name="mes" id="mes">*/
/*                 {% for mes in meses %}*/
/*                   <option value="{{mes}}">{{mes}}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <label for="buscar">Buscar</label>*/
/*             <button type="submit" class="btn btn-primary col-md-12" id="buscar"><span class="glyphicon glyphicon-search"></span></button>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*     {% if is_gestion %}*/
/*        <div class="panel panel-primary">*/
/*         <div class="panel-heading">Listado de comisi&oacute;n </div>*/
/*         <div class="panel-body" id="paginacion">                                 */
/*           <div class="col-md-6"> Seleccione un a&ntilde;o y mes para ver el monto total de comisi&oacute;n</div>*/
/*           <div class="col-md-6"> */
/*             <form action="{{URL.backend_listado_comisionCobrada}}" method="post">*/
/*               <div class="col-md-4">*/
/*                 <label for="buscar">Ver</label>*/
/*                 <button type="submit" class="btn btn-primary col-md-12" id="buscar"><span class="glyphicon glyphicon-search"></span></button>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
