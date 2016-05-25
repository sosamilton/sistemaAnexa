<?php

/* AnexaCooperadoraBundle:backend/viejo/usuario:ver.html.twig */
class __TwigTemplate_488bb8dc266a34c2b23c519d66bd719c8fd79fab5cb5e278dcc51d5c3234ad80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/usuario:ver.html.twig", 1);
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
        $__internal_039d9074bbb6be54b1e8a11e06c0cf4db4224feb461f870aaadf0e3808ee6190 = $this->env->getExtension("native_profiler");
        $__internal_039d9074bbb6be54b1e8a11e06c0cf4db4224feb461f870aaadf0e3808ee6190->enter($__internal_039d9074bbb6be54b1e8a11e06c0cf4db4224feb461f870aaadf0e3808ee6190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/usuario:ver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039d9074bbb6be54b1e8a11e06c0cf4db4224feb461f870aaadf0e3808ee6190->leave($__internal_039d9074bbb6be54b1e8a11e06c0cf4db4224feb461f870aaadf0e3808ee6190_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81f120063188d453440c45a91beb3939d69ce91048710fc614186948c39bbcb5 = $this->env->getExtension("native_profiler");
        $__internal_81f120063188d453440c45a91beb3939d69ce91048710fc614186948c39bbcb5->enter($__internal_81f120063188d453440c45a91beb3939d69ce91048710fc614186948c39bbcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administracion | Usuario | Ver";
        
        $__internal_81f120063188d453440c45a91beb3939d69ce91048710fc614186948c39bbcb5->leave($__internal_81f120063188d453440c45a91beb3939d69ce91048710fc614186948c39bbcb5_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_0bd2e48fefaab7194a1a8133fc03c134815bf493e7df49d241794bf2c6eb7284 = $this->env->getExtension("native_profiler");
        $__internal_0bd2e48fefaab7194a1a8133fc03c134815bf493e7df49d241794bf2c6eb7284->enter($__internal_0bd2e48fefaab7194a1a8133fc03c134815bf493e7df49d241794bf2c6eb7284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "      <div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Ver Usuario: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <div>
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"username\">Nombre de Usuario</label>
                  <div class=\"form-control\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"password\">Contraseña</label>
                  <div class=\"form-control\">*********</div>
                </div>
                <div class=\"col-md-4\">
                  <label for=\"rol\">Rol</label>
                  <div class=\"form-control\" > ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol", array()), "html", null, true);
        echo "</div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <script type=\"text/javascript\">
      </script>
";
        
        $__internal_0bd2e48fefaab7194a1a8133fc03c134815bf493e7df49d241794bf2c6eb7284->leave($__internal_0bd2e48fefaab7194a1a8133fc03c134815bf493e7df49d241794bf2c6eb7284_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/usuario:ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  67 => 15,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administracion | Usuario | Ver{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       <div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Ver Usuario: {{usuario.nombre}}</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <div>*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="username">Nombre de Usuario</label>*/
/*                   <div class="form-control" >{{usuario.username}}</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="password">Contraseña</label>*/
/*                   <div class="form-control">*********</div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="rol">Rol</label>*/
/*                   <div class="form-control" > {{usuario.rol}}</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*       </div>*/
/*       <script type="text/javascript">*/
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
