<?php

/* AnexaCooperadoraBundle:backend/viejo/estadistica:graficos.html.twig */
class __TwigTemplate_7c7586774ad75ee02e12ed052b47a228595d5e54f1425d27fe31167975ead2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle:backend:inicio.html.twig", "AnexaCooperadoraBundle:backend/viejo/estadistica:graficos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addJS' => array($this, 'block_addJS'),
            'addCSS' => array($this, 'block_addCSS'),
            'dataAdmin' => array($this, 'block_dataAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle:backend:inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_270edcf757f85b8c7b2c25b714c1a95904d1cbcdfd45ac28a7d58a49b8c22de6 = $this->env->getExtension("native_profiler");
        $__internal_270edcf757f85b8c7b2c25b714c1a95904d1cbcdfd45ac28a7d58a49b8c22de6->enter($__internal_270edcf757f85b8c7b2c25b714c1a95904d1cbcdfd45ac28a7d58a49b8c22de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/viejo/estadistica:graficos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_270edcf757f85b8c7b2c25b714c1a95904d1cbcdfd45ac28a7d58a49b8c22de6->leave($__internal_270edcf757f85b8c7b2c25b714c1a95904d1cbcdfd45ac28a7d58a49b8c22de6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6d9cb61f5545e8ae8c26b58ccbfa711f5031bf38381262c66fcfbeb7076efc0 = $this->env->getExtension("native_profiler");
        $__internal_e6d9cb61f5545e8ae8c26b58ccbfa711f5031bf38381262c66fcfbeb7076efc0->enter($__internal_e6d9cb61f5545e8ae8c26b58ccbfa711f5031bf38381262c66fcfbeb7076efc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración | Estadísticas ";
        
        $__internal_e6d9cb61f5545e8ae8c26b58ccbfa711f5031bf38381262c66fcfbeb7076efc0->leave($__internal_e6d9cb61f5545e8ae8c26b58ccbfa711f5031bf38381262c66fcfbeb7076efc0_prof);

    }

    // line 5
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_76ec30a2cfc927b295f26f398b1737414b625ff604a037f7574d98e8b1f187a8 = $this->env->getExtension("native_profiler");
        $__internal_76ec30a2cfc927b295f26f398b1737414b625ff604a037f7574d98e8b1f187a8->enter($__internal_76ec30a2cfc927b295f26f398b1737414b625ff604a037f7574d98e8b1f187a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        // line 6
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/Chart.js\"></script>
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/jsPDF/jspdf.js\"></script>
  <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/jsPDF/jspdf.debug.js\"></script>
  <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
        echo "js/jsPDF/libs/FileSaver.js/FileSaver.js\"></script>

";
        
        $__internal_76ec30a2cfc927b295f26f398b1737414b625ff604a037f7574d98e8b1f187a8->leave($__internal_76ec30a2cfc927b295f26f398b1737414b625ff604a037f7574d98e8b1f187a8_prof);

    }

    // line 13
    public function block_addCSS($context, array $blocks = array())
    {
        $__internal_3985e7438efa27c446643a50d84c7f0fa04231357fd261ed76204cfcb7486756 = $this->env->getExtension("native_profiler");
        $__internal_3985e7438efa27c446643a50d84c7f0fa04231357fd261ed76204cfcb7486756->enter($__internal_3985e7438efa27c446643a50d84c7f0fa04231357fd261ed76204cfcb7486756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addCSS"));

        
        $__internal_3985e7438efa27c446643a50d84c7f0fa04231357fd261ed76204cfcb7486756->leave($__internal_3985e7438efa27c446643a50d84c7f0fa04231357fd261ed76204cfcb7486756_prof);

    }

    // line 16
    public function block_dataAdmin($context, array $blocks = array())
    {
        $__internal_65f8f287999e3bd4416be9275041055816bf19976cc4b2ee65cfbea2120d8bfb = $this->env->getExtension("native_profiler");
        $__internal_65f8f287999e3bd4416be9275041055816bf19976cc4b2ee65cfbea2120d8bfb->enter($__internal_65f8f287999e3bd4416be9275041055816bf19976cc4b2ee65cfbea2120d8bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dataAdmin"));

        // line 17
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["año"] => $context["dato"]) {
            // line 18
            echo "    <div class=\"btn btn-primary botonAdd\" id=\"exportar\" anio=\"";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\">Exportar a PDF</div>
    <div class=\"panel panel-primary\">
      <div class=\"panel-heading\" id=\"name\">Estadísticas ";
            // line 20
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "</div>
      <div class=\"panel-body padding0\">
        <div style=\"width:96%; padding:2%;\">
          <canvas id=\"canvas";
            // line 23
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\" class=\"canvasImg\" height=\"400\" width=\"800\"></canvas>
        </div>
      </div>
    </div>
  <script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData";
            // line 29
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
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dato"], "mensual", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["cant"]) {
                // line 42
                echo "              ";
                echo twig_escape_filter($this->env, $context["cant"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
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
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dato"], "matricula", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["cant"]) {
                // line 56
                echo "              ";
                echo twig_escape_filter($this->env, $context["cant"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          ]
        }
      ]

    }

    function cargar";
            // line 64
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "(){
      var ctx = document.getElementById(\"canvas";
            // line 65
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "\").getContext(\"2d\");
      window.myLine = new Chart(ctx).";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
            echo "(lineChartData";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo ", {
        responsive: true
      });
    }

  </script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['año'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
  <script>
    window.onload = function(){
      ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["año"] => $context["dato"]) {
            // line 77
            echo "        cargar";
            echo twig_escape_filter($this->env, $context["año"], "html", null, true);
            echo "();
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['año'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    }
    \$('#exportar').click(function(){
      var imgData = \$('.canvasImg')[0].toDataURL();
      var doc = new jsPDF();

      doc.setFontSize(40);
      doc.text(16, 25, \"Estadísticas Anuales - \"+\$(this).attr('anio'));
      doc.setFontSize(22);
      doc.setTextColor(220,220,220);
      doc.text(20, 40, 'Mensuales');
      doc.setTextColor(151,187,205);
      doc.text(20, 49, 'Matrículas');
      doc.addImage(imgData, 'JPEG', 15, 60, 180, 90);
      doc.save(\$('#name').text());

    });
  </script>

  <div id=\"leyenda\">
    <ul>
      <li><span class=\"mensual circulo\"></span>Mensuales</li>
      <li><span class=\"matricula circulo\"></span>Matrículas</li>
    </ul>
  </div>

";
        
        $__internal_65f8f287999e3bd4416be9275041055816bf19976cc4b2ee65cfbea2120d8bfb->leave($__internal_65f8f287999e3bd4416be9275041055816bf19976cc4b2ee65cfbea2120d8bfb_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/viejo/estadistica:graficos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 79,  215 => 77,  211 => 76,  206 => 73,  191 => 66,  187 => 65,  183 => 64,  175 => 58,  166 => 56,  162 => 55,  149 => 44,  140 => 42,  136 => 41,  121 => 29,  112 => 23,  106 => 20,  100 => 18,  95 => 17,  89 => 16,  78 => 13,  68 => 9,  64 => 8,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle:backend:inicio.html.twig' %}*/
/* */
/* {% block title %} Administración | Estadísticas {% endblock %}*/
/* */
/* {% block addJS %}*/
/*   <script src="{{resource}}js/Chart.js"></script>*/
/*   <script src="{{resource}}js/jsPDF/jspdf.js"></script>*/
/*   <script src="{{resource}}js/jsPDF/jspdf.debug.js"></script>*/
/*   <script src="{{resource}}js/jsPDF/libs/FileSaver.js/FileSaver.js"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block addCSS %}*/
/* {% endblock %}*/
/* */
/* {% block dataAdmin %}*/
/*   {% for año, dato in datos %}*/
/*     <div class="btn btn-primary botonAdd" id="exportar" anio="{{año}}">Exportar a PDF</div>*/
/*     <div class="panel panel-primary">*/
/*       <div class="panel-heading" id="name">Estadísticas {{año}}</div>*/
/*       <div class="panel-body padding0">*/
/*         <div style="width:96%; padding:2%;">*/
/*           <canvas id="canvas{{año}}" class="canvasImg" height="400" width="800"></canvas>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
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
/*         responsive: true*/
/*       });*/
/*     }*/
/* */
/*   </script>*/
/*   {% endfor %}*/
/* */
/*   <script>*/
/*     window.onload = function(){*/
/*       {% for año, dato in datos %}*/
/*         cargar{{año}}();*/
/*       {% endfor %}*/
/*     }*/
/*     $('#exportar').click(function(){*/
/*       var imgData = $('.canvasImg')[0].toDataURL();*/
/*       var doc = new jsPDF();*/
/* */
/*       doc.setFontSize(40);*/
/*       doc.text(16, 25, "Estadísticas Anuales - "+$(this).attr('anio'));*/
/*       doc.setFontSize(22);*/
/*       doc.setTextColor(220,220,220);*/
/*       doc.text(20, 40, 'Mensuales');*/
/*       doc.setTextColor(151,187,205);*/
/*       doc.text(20, 49, 'Matrículas');*/
/*       doc.addImage(imgData, 'JPEG', 15, 60, 180, 90);*/
/*       doc.save($('#name').text());*/
/* */
/*     });*/
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
