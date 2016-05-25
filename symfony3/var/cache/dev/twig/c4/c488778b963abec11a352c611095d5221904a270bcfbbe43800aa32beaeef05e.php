<?php

/* AnexaCooperadoraBundle:frontend:login.html.twig */
class __TwigTemplate_918e590e121ef9727e2e2afe4a2d42dd047fea20b5e300c93150b56fc7abdd48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle:frontend:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_febf65000ace7cf0187d9c405a5fa0c2026367d6808cc39a86878e0b07a352b7 = $this->env->getExtension("native_profiler");
        $__internal_febf65000ace7cf0187d9c405a5fa0c2026367d6808cc39a86878e0b07a352b7->enter($__internal_febf65000ace7cf0187d9c405a5fa0c2026367d6808cc39a86878e0b07a352b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:frontend:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_febf65000ace7cf0187d9c405a5fa0c2026367d6808cc39a86878e0b07a352b7->leave($__internal_febf65000ace7cf0187d9c405a5fa0c2026367d6808cc39a86878e0b07a352b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1283b919628d9d4b9567ce342f182a2b0d53122a0f471d7283bd2eb7ea3c340e = $this->env->getExtension("native_profiler");
        $__internal_1283b919628d9d4b9567ce342f182a2b0d53122a0f471d7283bd2eb7ea3c340e->enter($__internal_1283b919628d9d4b9567ce342f182a2b0d53122a0f471d7283bd2eb7ea3c340e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_1283b919628d9d4b9567ce342f182a2b0d53122a0f471d7283bd2eb7ea3c340e->leave($__internal_1283b919628d9d4b9567ce342f182a2b0d53122a0f471d7283bd2eb7ea3c340e_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_0a563e59ebb3313500fd8b818a6e2bc4ff661971644de45968564ef41a01d9e0 = $this->env->getExtension("native_profiler");
        $__internal_0a563e59ebb3313500fd8b818a6e2bc4ff661971644de45968564ef41a01d9e0->enter($__internal_0a563e59ebb3313500fd8b818a6e2bc4ff661971644de45968564ef41a01d9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "  <div class=\"margin-top2 margin-left\">
    <div class=\"col-md-5 col-md-offset-3\">
     <div class=\"panel panel-default\">
       <div class=\"panel-heading\">
         <span class=\"glyphicon glyphicon-lock\">
           Identificarse
         </span>
       </div>
       <div class=\"panel-body\">
        ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "          <div id=\"login-error\" class=\"alert alert-danger\">
            La contraseña o el nombre de usuario es incorrecto
          </div>
        ";
        }
        // line 19
        echo "        <form class=\"form-horizontal\" role=\"form\" title=\"formulario de login\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\"method=\"post\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">
              Usuario
            </label>
            <div class=\"col-sm-9\">
              <input id=\"username\" class=\"form-control\" type=\"text\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" title=\"campo de usuario\" required >
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-3 control-label\">
              Contraseña
            </label>
            <div class=\"col-sm-9\">
              <input  id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" title=\" campo de contraseña\" required>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-3 col-sm-9\">
              <button type=\"submit\" class=\"btn btn-primary\" title=\"entrar\">
                Entrar
              </button>
              <button type=\"reset\" class=\"btn btn-default\" title=\"limpiar campos\">
                Limpiar
              </button>
            </div>
          </div>
        </form>
        <div class=\"login-custom-message\">Si no estas registrado comunicate con el administrador
        </div>
      </div>
      <div class=\"login-custom-footer\">
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_0a563e59ebb3313500fd8b818a6e2bc4ff661971644de45968564ef41a01d9e0->leave($__internal_0a563e59ebb3313500fd8b818a6e2bc4ff661971644de45968564ef41a01d9e0_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:frontend:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  77 => 20,  72 => 19,  66 => 15,  64 => 14,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle::base.html.twig' %}*/
/* */
/* {% block title %} Login {% endblock %}*/
/*   {% block cuerpo %}*/
/*   <div class="margin-top2 margin-left">*/
/*     <div class="col-md-5 col-md-offset-3">*/
/*      <div class="panel panel-default">*/
/*        <div class="panel-heading">*/
/*          <span class="glyphicon glyphicon-lock">*/
/*            Identificarse*/
/*          </span>*/
/*        </div>*/
/*        <div class="panel-body">*/
/*         {% if error %}*/
/*           <div id="login-error" class="alert alert-danger">*/
/*             La contraseña o el nombre de usuario es incorrecto*/
/*           </div>*/
/*         {% endif %}*/
/*         <form class="form-horizontal" role="form" title="formulario de login" action="{{ path('login_check') }}"method="post">*/
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*           <div class="form-group">*/
/*             <label for="inputEmail3" class="col-sm-3 control-label">*/
/*               Usuario*/
/*             </label>*/
/*             <div class="col-sm-9">*/
/*               <input id="username" class="form-control" type="text" name="_username" value="{{ last_username }}" placeholder="Usuario" title="campo de usuario" required >*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="inputPassword3" class="col-sm-3 control-label">*/
/*               Contraseña*/
/*             </label>*/
/*             <div class="col-sm-9">*/
/*               <input  id="password" type="password" class="form-control" name="_password" placeholder="Contraseña" title=" campo de contraseña" required>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <div class="col-sm-offset-3 col-sm-9">*/
/*               <button type="submit" class="btn btn-primary" title="entrar">*/
/*                 Entrar*/
/*               </button>*/
/*               <button type="reset" class="btn btn-default" title="limpiar campos">*/
/*                 Limpiar*/
/*               </button>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*         <div class="login-custom-message">Si no estas registrado comunicate con el administrador*/
/*         </div>*/
/*       </div>*/
/*       <div class="login-custom-footer">*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
