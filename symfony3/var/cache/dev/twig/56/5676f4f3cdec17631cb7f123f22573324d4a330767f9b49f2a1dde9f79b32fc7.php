<?php

/* AnexaCooperadoraBundle:backend/viejo/usuario:editar.html.twig */
class __TwigTemplate_7db3a49e49a27355245ba74e12e0bf168f35e8483010f2de3bb8bba492ca0298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/usuario:editar.html.twig", 1);
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
        $__internal_ccab987bec9152cb72f8a63379f30241001d8382b29bfec4e9b54ad10bc60a24 = $this->env->getExtension("native_profiler");
        $__internal_ccab987bec9152cb72f8a63379f30241001d8382b29bfec4e9b54ad10bc60a24->enter($__internal_ccab987bec9152cb72f8a63379f30241001d8382b29bfec4e9b54ad10bc60a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/usuario:editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccab987bec9152cb72f8a63379f30241001d8382b29bfec4e9b54ad10bc60a24->leave($__internal_ccab987bec9152cb72f8a63379f30241001d8382b29bfec4e9b54ad10bc60a24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6342e8e1d7492776fafb97e088b810ad016c39a28ddc71f2722f2b370dbabfa4 = $this->env->getExtension("native_profiler");
        $__internal_6342e8e1d7492776fafb97e088b810ad016c39a28ddc71f2722f2b370dbabfa4->enter($__internal_6342e8e1d7492776fafb97e088b810ad016c39a28ddc71f2722f2b370dbabfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administraci&oacute;n | Usuario | Editar";
        
        $__internal_6342e8e1d7492776fafb97e088b810ad016c39a28ddc71f2722f2b370dbabfa4->leave($__internal_6342e8e1d7492776fafb97e088b810ad016c39a28ddc71f2722f2b370dbabfa4_prof);

    }

    // line 5
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_af35479364987bbda09bbf435d8ea4b47c51445dd591342e49953149b8cd82ef = $this->env->getExtension("native_profiler");
        $__internal_af35479364987bbda09bbf435d8ea4b47c51445dd591342e49953149b8cd82ef->enter($__internal_af35479364987bbda09bbf435d8ea4b47c51445dd591342e49953149b8cd82ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 6
        echo "      <div class=\"panel panel-primary\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Editar Usuario</div>
          <!-- Table -->
          <div class=\"panel-body\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["URL"]) ? $context["URL"] : $this->getContext($context, "URL")), "backend_usuario_editar", array()), "html", null, true);
        echo "?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
              <div class=\"form-group\">
                <div class=\"col-md-4\">
                  <label for=\"username\">Nombre de Usuario</label>
                  <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" placeholder=\"Nombre de Usuario\" required value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-4\">
                  <label for=\"password\">Nueva Contraseña</label>
                  <input type=\"password\" class=\"form-control\" id=\"password\" name=\"pass\" placeholder=\"Contraseña\" >
                </div>
                <div class=\"col-md-4\">
                  <label for=\"rol\">Rol</label>
                  <select class=\"form-control\" name=\"rol\" required>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 26
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol", array()), "id", array()) == $this->getAttribute($context["rol"], "id", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "nombre", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                  </select>
                </div>
              </div>
              <button type=\"submit\" class=\"btn btn-primary col-md-12\">Editar Usuario</button>
            </form>
          </div>
      </div>
      <script type=\"text/javascript\">
      </script>
";
        
        $__internal_af35479364987bbda09bbf435d8ea4b47c51445dd591342e49953149b8cd82ef->leave($__internal_af35479364987bbda09bbf435d8ea4b47c51445dd591342e49953149b8cd82ef_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/usuario:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  89 => 26,  85 => 25,  73 => 16,  66 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administraci&oacute;n | Usuario | Editar{% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*       <div class="panel panel-primary">*/
/*           <!-- Default panel contents -->*/
/*           <div class="panel-heading">Editar Usuario</div>*/
/*           <!-- Table -->*/
/*           <div class="panel-body">*/
/*             <form action="{{URL.backend_usuario_editar}}?id={{usuario.id}}" method="post">*/
/*               <input type="hidden" name="token" value="{{token}}">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-4">*/
/*                   <label for="username">Nombre de Usuario</label>*/
/*                   <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" required value="{{usuario.username}}">*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="password">Nueva Contraseña</label>*/
/*                   <input type="password" class="form-control" id="password" name="pass" placeholder="Contraseña" >*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <label for="rol">Rol</label>*/
/*                   <select class="form-control" name="rol" required>*/
/*                     {% for rol in roles %}*/
/*                       <option value="{{rol.id}}" {% if usuario.rol.id == rol.id %}selected{% endif %}>{{rol.nombre}}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <button type="submit" class="btn btn-primary col-md-12">Editar Usuario</button>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/*       <script type="text/javascript">*/
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
