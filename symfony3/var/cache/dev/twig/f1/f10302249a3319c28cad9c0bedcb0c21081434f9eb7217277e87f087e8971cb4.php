<?php

/* AnexaCooperadoraBundle:backend:nav.html.twig */
class __TwigTemplate_5a38c36e959b7c59170fc3483041c96eb79acac10f42f410195ddc58f705e8db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8a5c60d0f3405692969749fa9f40221a55df3a0125970816ce01a271d90061a = $this->env->getExtension("native_profiler");
        $__internal_e8a5c60d0f3405692969749fa9f40221a55df3a0125970816ce01a271d90061a->enter($__internal_e8a5c60d0f3405692969749fa9f40221a55df3a0125970816ce01a271d90061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend:nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 10
        echo "\">Panel de Administraci&oacute;n</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "   <span class=\"caret\"></span></a>
          <span class=\"rol\">Rol:";
        // line 17
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), array("ROLE_SUPER_ADMIN" => "Administrador", "ROLE_ADMIN" => "Gestion", "ROLE_USER" => "Consulta")), "html", null, true);
        echo "</span>
          <ul class=\"dropdown-menu\">
";
        // line 20
        echo "            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_e8a5c60d0f3405692969749fa9f40221a55df3a0125970816ce01a271d90061a->leave($__internal_e8a5c60d0f3405692969749fa9f40221a55df3a0125970816ce01a271d90061a_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  45 => 17,  41 => 16,  33 => 10,  22 => 1,);
    }
}
/* <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="{# URL.backend_index #}">Panel de Administraci&oacute;n</a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*           {{app.user.username}}   <span class="caret"></span></a>*/
/*           <span class="rol">Rol:{{ app.user.roles[0] |replace({'ROLE_SUPER_ADMIN': "Administrador", 'ROLE_ADMIN': "Gestion", 'ROLE_USER': "Consulta"}) }}</span>*/
/*           <ul class="dropdown-menu">*/
/* {#             <li><a href="#">Perfil</a></li>*/
/*  #}            <li><a href="{{ path('fos_user_security_logout') }}">Salir</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
