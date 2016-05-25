<?php

/* AnexaCooperadoraBundle:Profile:edit_content.html.twig */
class __TwigTemplate_1c32bf2146f9c362854f67501c27372d2e409d2fc79ff91e1ee0dc559fd79073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5079cfbf0122060f49939945a002ccb2009e9f67a2dac707a26ea582679859ac = $this->env->getExtension("native_profiler");
        $__internal_5079cfbf0122060f49939945a002ccb2009e9f67a2dac707a26ea582679859ac->enter($__internal_5079cfbf0122060f49939945a002ccb2009e9f67a2dac707a26ea582679859ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:Profile:edit_content.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5079cfbf0122060f49939945a002ccb2009e9f67a2dac707a26ea582679859ac->leave($__internal_5079cfbf0122060f49939945a002ccb2009e9f67a2dac707a26ea582679859ac_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_a9416ed342f2f8d314fe8949c6a66933ecc4874166912203808da58d545cb25d = $this->env->getExtension("native_profiler");
        $__internal_a9416ed342f2f8d314fe8949c6a66933ecc4874166912203808da58d545cb25d->enter($__internal_a9416ed342f2f8d314fe8949c6a66933ecc4874166912203808da58d545cb25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal fos_user_profile_edit", "role" => "form")));
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 9
            echo "            <span class=\"help-block\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 13
        echo "        </div>
    </div>
        
    <div class=\"form-group";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 21
            echo "            <span class=\"help-block\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 25
        echo "        </div>
    </div>
           
    <div class=\"form-group";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellido", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellido", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 33
            echo "            <span class=\"help-block\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 37
        echo "        </div>
    </div>
             
    <div class=\"form-group";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 45
            echo "            <span class=\"help-block\">
                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 49
        echo "        </div>
    </div>
     
    <div class=\"form-group";
        // line 52
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 56
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 57
            echo "            <span class=\"help-block\">
                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 61
        echo "        </div>
    </div>
             
    <div class=\"form-group";
        // line 64
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaNacimiento", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 68
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaNacimiento", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 69
            echo "            <span class=\"help-block\">
                ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 73
        echo "        </div>
    </div>
          
    <div class=\"form-group";
        // line 76
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "carrera", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrera", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrera", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "carrera", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 81
            echo "            <span class=\"help-block\">
                ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrera", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 85
        echo "        </div>
    </div>
          
    <div class=\"form-group";
        // line 88
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 92
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 93
            echo "            <span class=\"help-block\">
                ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 97
        echo "        </div>
    </div>
          
    <div class=\"form-group";
        // line 100
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 104
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 105
            echo "            <span class=\"help-block\">
                ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 109
        echo "        </div>
    </div>
     
    <div class=\"form-group";
        // line 112
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 116
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 117
            echo "            <span class=\"help-block\">
                ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 121
        echo "        </div>
    </div>
    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    <a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">
        <div class=\"btn btn-primary dropdown-toggle distanciaa\">
            <span class=\"glyphicon glyphicon-share-alt\"></span>
        </div>
    </a>
";
        // line 129
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a9416ed342f2f8d314fe8949c6a66933ecc4874166912203808da58d545cb25d->leave($__internal_a9416ed342f2f8d314fe8949c6a66933ecc4874166912203808da58d545cb25d_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:Profile:edit_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  364 => 129,  356 => 124,  352 => 123,  348 => 121,  342 => 118,  339 => 117,  337 => 116,  333 => 115,  328 => 113,  322 => 112,  317 => 109,  311 => 106,  308 => 105,  306 => 104,  302 => 103,  297 => 101,  291 => 100,  286 => 97,  280 => 94,  277 => 93,  275 => 92,  271 => 91,  266 => 89,  260 => 88,  255 => 85,  249 => 82,  246 => 81,  244 => 80,  240 => 79,  235 => 77,  229 => 76,  224 => 73,  218 => 70,  215 => 69,  213 => 68,  209 => 67,  204 => 65,  198 => 64,  193 => 61,  187 => 58,  184 => 57,  182 => 56,  178 => 55,  173 => 53,  167 => 52,  162 => 49,  156 => 46,  153 => 45,  151 => 44,  147 => 43,  142 => 41,  136 => 40,  131 => 37,  125 => 34,  122 => 33,  120 => 32,  116 => 31,  111 => 29,  105 => 28,  100 => 25,  94 => 22,  91 => 21,  89 => 20,  85 => 19,  80 => 17,  74 => 16,  69 => 13,  63 => 10,  60 => 9,  58 => 8,  54 => 7,  49 => 5,  43 => 4,  39 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block content -%}*/
/* {{ form_start(form, {'attr': {'class': 'form-horizontal fos_user_profile_edit', 'role': 'form'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="form-group{% if form.username.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.username, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.username.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.username.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*         */
/*     <div class="form-group{% if form.nombre.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.nombre, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.nombre, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.nombre.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.nombre.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*            */
/*     <div class="form-group{% if form.apellido.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.apellido, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.apellido, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.apellido.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.apellido.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*              */
/*     <div class="form-group{% if form.dni.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.dni, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.dni, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.dni.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.dni.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*      */
/*     <div class="form-group{% if form.email.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.email, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.email.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.email.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*              */
/*     <div class="form-group{% if form.fechaNacimiento.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.fechaNacimiento, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.fechaNacimiento, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.fechaNacimiento.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.fechaNacimiento.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*           */
/*     <div class="form-group{% if form.carrera.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.carrera, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.carrera, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.carrera.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.carrera.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*           */
/*     <div class="form-group{% if form.direccion.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.direccion, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.direccion, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.direccion.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.direccion.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*           */
/*     <div class="form-group{% if form.telefono.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.telefono, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.telefono, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.telefono.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.telefono.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*      */
/*     <div class="form-group{% if form.current_password.vars.errors[0].message is defined %} has-error{% endif %}">*/
/*         {{ form_label(form.current_password, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}*/
/*             {% if form.current_password.vars.errors[0].message is defined %}*/
/*             <span class="help-block">*/
/*                 {{ form.current_password.vars.errors[0].message }}*/
/*             </span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <button class="btn btn-primary" type="submit">{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*     <a href="{{path('fos_user_profile_show')}}">*/
/*         <div class="btn btn-primary dropdown-toggle distanciaa">*/
/*             <span class="glyphicon glyphicon-share-alt"></span>*/
/*         </div>*/
/*     </a>*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
