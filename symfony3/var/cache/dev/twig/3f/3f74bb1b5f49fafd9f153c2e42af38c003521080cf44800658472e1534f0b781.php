<?php

/* AnexaCooperadoraBundle:Usuario:login.html.twig */
class __TwigTemplate_6b878d4dcf3da81e26433fac6d6e3d06de59a8703c8d705104e86fca7ebe2c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("certificadoBundle::default.html.twig", "AnexaCooperadoraBundle:Usuario:login.html.twig", 1);
        $this->blocks = array(
            'mainnav_container' => array($this, 'block_mainnav_container'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "certificadoBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd2c92caab57f8965840bf072d3f78005eeeb799331a76b4c17639e58949b95c = $this->env->getExtension("native_profiler");
        $__internal_cd2c92caab57f8965840bf072d3f78005eeeb799331a76b4c17639e58949b95c->enter($__internal_cd2c92caab57f8965840bf072d3f78005eeeb799331a76b4c17639e58949b95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:Usuario:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2c92caab57f8965840bf072d3f78005eeeb799331a76b4c17639e58949b95c->leave($__internal_cd2c92caab57f8965840bf072d3f78005eeeb799331a76b4c17639e58949b95c_prof);

    }

    // line 2
    public function block_mainnav_container($context, array $blocks = array())
    {
        $__internal_61289f02b32087ab494ee8993fda905e749236fd229f6c3ea6bb04f60ac75dc0 = $this->env->getExtension("native_profiler");
        $__internal_61289f02b32087ab494ee8993fda905e749236fd229f6c3ea6bb04f60ac75dc0->enter($__internal_61289f02b32087ab494ee8993fda905e749236fd229f6c3ea6bb04f60ac75dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainnav_container"));

        
        $__internal_61289f02b32087ab494ee8993fda905e749236fd229f6c3ea6bb04f60ac75dc0->leave($__internal_61289f02b32087ab494ee8993fda905e749236fd229f6c3ea6bb04f60ac75dc0_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_96bcc2a26c7e9523017b5af3bf472a05a13fa801704bf38a99c1fbec41e5d1f4 = $this->env->getExtension("native_profiler");
        $__internal_96bcc2a26c7e9523017b5af3bf472a05a13fa801704bf38a99c1fbec41e5d1f4->enter($__internal_96bcc2a26c7e9523017b5af3bf472a05a13fa801704bf38a99c1fbec41e5d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <span class=\"glyphicon glyphicon-lock\"></span>Identificarse</div>
                <div class=\"panel-body\">
                    ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                        <div id=\"login-error\" class=\"alert alert-danger\">La contraseña o el nombre de usuario es incorrecto</div>
                    ";
        }
        // line 14
        echo "                    <form class=\"form-horizontal\" role=\"form\" title=\"formulario de login\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">
                            Usuario</label>
                        <div class=\"col-sm-9\">
                            <input id=\"username\" class=\"form-control\" type=\"text\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"placeholder=\"Usuario\" title=\"campo de usuario\" required >
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-3 control-label\">
                            Contraseña</label>
                        <div class=\"col-sm-9\">
                            <input  id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" title=\" campo de contraseña\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-3 col-sm-9\">
                            <div class=\"checkbox\">
                                <label title=\"recordar contraseña\">
                                    <input type=\"checkbox\" />
                                    Recordar
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group last\">
                        <div class=\"col-sm-offset-3 col-sm-9\">
                            <button type=\"submit\" class=\"btn btn-primary\" title=\"entrar\">
                                Entrar </button>
                                 <button type=\"reset\" class=\"btn btn-default\" title=\"limpiar campos\">
                                Limpiar</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class=\"panel-footer\">
                    Si no estas registrado comunicate con el administrador</div>
            </div>
        </div>
    </div>
";
        
        $__internal_96bcc2a26c7e9523017b5af3bf472a05a13fa801704bf38a99c1fbec41e5d1f4->leave($__internal_96bcc2a26c7e9523017b5af3bf472a05a13fa801704bf38a99c1fbec41e5d1f4_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  71 => 15,  66 => 14,  62 => 12,  60 => 11,  52 => 5,  46 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends "certificadoBundle::default.html.twig" %}*/
/* {% block mainnav_container %}{% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="row">*/
/*         <div class="col-md-4 col-md-offset-4">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <span class="glyphicon glyphicon-lock"></span>Identificarse</div>*/
/*                 <div class="panel-body">*/
/*                     {% if error %}*/
/*                         <div id="login-error" class="alert alert-danger">La contraseña o el nombre de usuario es incorrecto</div>*/
/*                     {% endif %}*/
/*                     <form class="form-horizontal" role="form" title="formulario de login" action="{{ path('login_check') }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <div class="form-group">*/
/*                         <label for="inputEmail3" class="col-sm-3 control-label">*/
/*                             Usuario</label>*/
/*                         <div class="col-sm-9">*/
/*                             <input id="username" class="form-control" type="text" name="_username" value="{{ last_username }}"placeholder="Usuario" title="campo de usuario" required >*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="inputPassword3" class="col-sm-3 control-label">*/
/*                             Contraseña</label>*/
/*                         <div class="col-sm-9">*/
/*                             <input  id="password" type="password" class="form-control" name="_password" placeholder="Contraseña" title=" campo de contraseña" required>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="col-sm-offset-3 col-sm-9">*/
/*                             <div class="checkbox">*/
/*                                 <label title="recordar contraseña">*/
/*                                     <input type="checkbox" />*/
/*                                     Recordar*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group last">*/
/*                         <div class="col-sm-offset-3 col-sm-9">*/
/*                             <button type="submit" class="btn btn-primary" title="entrar">*/
/*                                 Entrar </button>*/
/*                                  <button type="reset" class="btn btn-default" title="limpiar campos">*/
/*                                 Limpiar</button>*/
/*                         </div>*/
/*                     </div>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     Si no estas registrado comunicate con el administrador</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
