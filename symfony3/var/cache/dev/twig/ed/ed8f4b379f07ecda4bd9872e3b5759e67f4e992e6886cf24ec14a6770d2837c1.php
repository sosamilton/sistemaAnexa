<?php

/* AnexaCooperadoraBundle:backend/viejo/estadistica:graficoPDF.html.twig */
class __TwigTemplate_4bbf917928143afbdf99b10ed70343b5932452abd11f3b6ac762e088d0881025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle:backend/viejo/estadistica:graficoPDF.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'addJS' => array($this, 'block_addJS'),
            'addCSS' => array($this, 'block_addCSS'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46443d5b468e08a28709054cc5600b13f1af8dc1cae362603e74eb40a76a6b53 = $this->env->getExtension("native_profiler");
        $__internal_46443d5b468e08a28709054cc5600b13f1af8dc1cae362603e74eb40a76a6b53->enter($__internal_46443d5b468e08a28709054cc5600b13f1af8dc1cae362603e74eb40a76a6b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/estadistica:graficoPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46443d5b468e08a28709054cc5600b13f1af8dc1cae362603e74eb40a76a6b53->leave($__internal_46443d5b468e08a28709054cc5600b13f1af8dc1cae362603e74eb40a76a6b53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d37b5ae25d2cec039e437ec59a61e6414c1e706eb285292733422411e10e4178 = $this->env->getExtension("native_profiler");
        $__internal_d37b5ae25d2cec039e437ec59a61e6414c1e706eb285292733422411e10e4178->enter($__internal_d37b5ae25d2cec039e437ec59a61e6414c1e706eb285292733422411e10e4178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d37b5ae25d2cec039e437ec59a61e6414c1e706eb285292733422411e10e4178->leave($__internal_d37b5ae25d2cec039e437ec59a61e6414c1e706eb285292733422411e10e4178_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_dbcc37c6d403ab169005ff37830aff41e372ad93cc1f9d7955f103d89afcb590 = $this->env->getExtension("native_profiler");
        $__internal_dbcc37c6d403ab169005ff37830aff41e372ad93cc1f9d7955f103d89afcb590->enter($__internal_dbcc37c6d403ab169005ff37830aff41e372ad93cc1f9d7955f103d89afcb590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    
      <h2>Escuela Anexa - Estadísticas</h2>

";
        
        $__internal_dbcc37c6d403ab169005ff37830aff41e372ad93cc1f9d7955f103d89afcb590->leave($__internal_dbcc37c6d403ab169005ff37830aff41e372ad93cc1f9d7955f103d89afcb590_prof);

    }

    // line 11
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_5da769fb882c43b85a861533f6cf19e908edabc941ecbae7ec04af2a499e6e25 = $this->env->getExtension("native_profiler");
        $__internal_5da769fb882c43b85a861533f6cf19e908edabc941ecbae7ec04af2a499e6e25->enter($__internal_5da769fb882c43b85a861533f6cf19e908edabc941ecbae7ec04af2a499e6e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 12
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "/js/Chart.js\"></script>
";
        
        $__internal_5da769fb882c43b85a861533f6cf19e908edabc941ecbae7ec04af2a499e6e25->leave($__internal_5da769fb882c43b85a861533f6cf19e908edabc941ecbae7ec04af2a499e6e25_prof);

    }

    // line 15
    public function block_addCSS($context, array $blocks = array())
    {
        $__internal_6d71cae0732534401d065c3f614749c1480e5910e02da1b94b2708a770add404 = $this->env->getExtension("native_profiler");
        $__internal_6d71cae0732534401d065c3f614749c1480e5910e02da1b94b2708a770add404->enter($__internal_6d71cae0732534401d065c3f614749c1480e5910e02da1b94b2708a770add404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addCSS"));

        
        $__internal_6d71cae0732534401d065c3f614749c1480e5910e02da1b94b2708a770add404->leave($__internal_6d71cae0732534401d065c3f614749c1480e5910e02da1b94b2708a770add404_prof);

    }

    // line 18
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_8187d7e26173ae8ffbceb1ec559d2c3cb14b09b98dcff518610fee9268d15dbd = $this->env->getExtension("native_profiler");
        $__internal_8187d7e26173ae8ffbceb1ec559d2c3cb14b09b98dcff518610fee9268d15dbd->enter($__internal_8187d7e26173ae8ffbceb1ec559d2c3cb14b09b98dcff518610fee9268d15dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 19
        echo "  <div class=\"col-md-11\">
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["año"] => $context["dato"]) {
            // line 21
            echo "    <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">Estadísticas ";
            // line 22
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "</div>
      <div class=\"panel-body padding0\">
        <div style=\"width:96%; padding:2%; min-height:500px;\" id=\"canvas";
            // line 24
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "_div\">
          <canvas id=\"canvas";
            // line 25
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\" height=\"300\" width=\"600\"></canvas>
        </div>
      </div>
    </div>

  <script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData";
            // line 32
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo " = {
      labels : [\"Enero\",\"Febrero\",\"Marzo\",\"Abril\",\"Mayo\",\"Junio\",\"Julio\",\"Agosto\",\"Septiembre\",\"Octubre\",\"Noviembre\",\"Diciembre\",\"\"],
      datasets : [
        {
          label: \"Mensual\",
          fillColor : \"rgba(220,220,220,0.2)\",
          strokeColor : \"rgba(220,220,220,1)\",
          pointColor : \"rgba(220,220,220,1)\",
          pointStrokeColor : \"#fff\",
          pointHighlightFill : \"#fff\",
          pointHighlightStroke : \"rgba(220,220,220,1)\",
          data : [
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dato"], "mensual", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["cant"]) {
                // line 45
                echo "              ";
                echo twig_escape_filter($this->env, $context["cant"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "          ]
        },
        {
          label: \"Matrícula\",
          fillColor : \"rgba(151,187,205,0.2)\",
          strokeColor : \"rgba(151,187,205,1)\",
          pointColor : \"rgba(151,187,205,1)\",
          pointStrokeColor : \"#fff\",
          pointHighlightFill : \"#fff\",
          pointHighlightStroke : \"rgba(151,187,205,1)\",
          data : [
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dato"], "matricula", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["cant"]) {
                // line 59
                echo "              ";
                echo twig_escape_filter($this->env, $context["cant"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          ]
        }
      ]

    }

    function cargar";
            // line 67
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "(){
      var ctx = document.getElementById(\"canvas";
            // line 68
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\").getContext(\"2d\");
      window.myLine = new Chart(ctx).";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
            echo "(lineChartData";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo ", {
        responsive: true,
        animation: false
      });

    }

  </script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['año'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "  </div>

  <script>
    window.onload = function(){
      ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["año"] => $context["dato"]) {
            // line 83
            echo "        cargar";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "();

        var can = document.getElementById('canvas";
            // line 85
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "');
        var ctx = can.getContext('2d');
        ctx.fillRect(50,50,50,50);
        var img = new Image();
        img.src = can.toDataURL();
        img.className=\"imagenFull\"
        \$('#canvas";
            // line 91
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "_div').append(img);
        \$('#canvas";
            // line 92
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "').remove();
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['año'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    }
  </script>

  <div id=\"leyenda\">
    <ul>
      <li><span class=\"mensual circulo\"></span>Mensuales</li>
      <li><span class=\"matricula circulo\"></span>Matrículas</li>
    </ul>
  </div>

";
        
        $__internal_8187d7e26173ae8ffbceb1ec559d2c3cb14b09b98dcff518610fee9268d15dbd->leave($__internal_8187d7e26173ae8ffbceb1ec559d2c3cb14b09b98dcff518610fee9268d15dbd_prof);

    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8ee4c2beb9678e6002c6e3ebbe8b5dac78c77443436fd3602249845b75d5bcd5 = $this->env->getExtension("native_profiler");
        $__internal_8ee4c2beb9678e6002c6e3ebbe8b5dac78c77443436fd3602249845b75d5bcd5->enter($__internal_8ee4c2beb9678e6002c6e3ebbe8b5dac78c77443436fd3602249845b75d5bcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8ee4c2beb9678e6002c6e3ebbe8b5dac78c77443436fd3602249845b75d5bcd5->leave($__internal_8ee4c2beb9678e6002c6e3ebbe8b5dac78c77443436fd3602249845b75d5bcd5_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/estadistica:graficoPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 106,  252 => 94,  244 => 92,  240 => 91,  231 => 85,  225 => 83,  221 => 82,  215 => 78,  198 => 69,  194 => 68,  190 => 67,  182 => 61,  173 => 59,  169 => 58,  156 => 47,  147 => 45,  143 => 44,  128 => 32,  118 => 25,  114 => 24,  109 => 22,  106 => 21,  102 => 20,  99 => 19,  93 => 18,  82 => 15,  72 => 12,  66 => 11,  56 => 6,  50 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block header %}*/
/*     */
/*       <h2>Escuela Anexa - Estadísticas</h2>*/
/* */
/* {% endblock %}*/
/* */
/* {% block addJS %}*/
/*   <script src="{{resource}}/js/Chart.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block addCSS %}*/
/* {% endblock %}*/
/* */
/* {% block cuerpo %}*/
/*   <div class="col-md-11">*/
/*   {% for año, dato in datos %}*/
/*     <div class="panel panel-primary">*/
/*       <div class="panel-heading">Estadísticas {{año}}</div>*/
/*       <div class="panel-body padding0">*/
/*         <div style="width:96%; padding:2%; min-height:500px;" id="canvas{{año}}_div">*/
/*           <canvas id="canvas{{año}}" height="300" width="600"></canvas>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*   <script>*/
/*     var randomScalingFactor = function(){ return Math.round(Math.random()*100)};*/
/*     var lineChartData{{año}} = {*/
/*       labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre",""],*/
/*       datasets : [*/
/*         {*/
/*           label: "Mensual",*/
/*           fillColor : "rgba(220,220,220,0.2)",*/
/*           strokeColor : "rgba(220,220,220,1)",*/
/*           pointColor : "rgba(220,220,220,1)",*/
/*           pointStrokeColor : "#fff",*/
/*           pointHighlightFill : "#fff",*/
/*           pointHighlightStroke : "rgba(220,220,220,1)",*/
/*           data : [*/
/*             {% for cant in dato['mensual'] %}*/
/*               {{cant}},*/
/*             {% endfor %}*/
/*           ]*/
/*         },*/
/*         {*/
/*           label: "Matrícula",*/
/*           fillColor : "rgba(151,187,205,0.2)",*/
/*           strokeColor : "rgba(151,187,205,1)",*/
/*           pointColor : "rgba(151,187,205,1)",*/
/*           pointStrokeColor : "#fff",*/
/*           pointHighlightFill : "#fff",*/
/*           pointHighlightStroke : "rgba(151,187,205,1)",*/
/*           data : [*/
/*             {% for cant in dato['matricula'] %}*/
/*               {{cant}},*/
/*             {% endfor %}*/
/*           ]*/
/*         }*/
/*       ]*/
/* */
/*     }*/
/* */
/*     function cargar{{año}}(){*/
/*       var ctx = document.getElementById("canvas{{año}}").getContext("2d");*/
/*       window.myLine = new Chart(ctx).{{tipo}}(lineChartData{{año}}, {*/
/*         responsive: true,*/
/*         animation: false*/
/*       });*/
/* */
/*     }*/
/* */
/*   </script>*/
/*   {% endfor %}*/
/*   </div>*/
/* */
/*   <script>*/
/*     window.onload = function(){*/
/*       {% for año, dato in datos %}*/
/*         cargar{{año}}();*/
/* */
/*         var can = document.getElementById('canvas{{año}}');*/
/*         var ctx = can.getContext('2d');*/
/*         ctx.fillRect(50,50,50,50);*/
/*         var img = new Image();*/
/*         img.src = can.toDataURL();*/
/*         img.className="imagenFull"*/
/*         $('#canvas{{año}}_div').append(img);*/
/*         $('#canvas{{año}}').remove();*/
/*       {% endfor %}*/
/*     }*/
/*   </script>*/
/* */
/*   <div id="leyenda">*/
/*     <ul>*/
/*       <li><span class="mensual circulo"></span>Mensuales</li>*/
/*       <li><span class="matricula circulo"></span>Matrículas</li>*/
/*     </ul>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
/* */
