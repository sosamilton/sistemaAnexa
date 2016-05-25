<?php

/* AnexaCooperadoraBundle:frontend:index.html.twig */
class __TwigTemplate_dd7cfc678c6fe047eb47c982776ad376a83a0c08e405a48ec36a6edbb02c0563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnexaCooperadoraBundle::base.html.twig", "AnexaCooperadoraBundle:frontend:index.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'menu' => array($this, 'block_menu'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7efff18dbcc988ee71b651e4b6d931e3c2ff0a6df321edd79ff3bbb85e87f8e3 = $this->env->getExtension("native_profiler");
        $__internal_7efff18dbcc988ee71b651e4b6d931e3c2ff0a6df321edd79ff3bbb85e87f8e3->enter($__internal_7efff18dbcc988ee71b651e4b6d931e3c2ff0a6df321edd79ff3bbb85e87f8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:frontend:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7efff18dbcc988ee71b651e4b6d931e3c2ff0a6df321edd79ff3bbb85e87f8e3->leave($__internal_7efff18dbcc988ee71b651e4b6d931e3c2ff0a6df321edd79ff3bbb85e87f8e3_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_a33bde07c3e71dfbbac0a408ce6d90f3f1a13968a6ca33451d3a52b38366d4b4 = $this->env->getExtension("native_profiler");
        $__internal_a33bde07c3e71dfbbac0a408ce6d90f3f1a13968a6ca33451d3a52b38366d4b4->enter($__internal_a33bde07c3e71dfbbac0a408ce6d90f3f1a13968a6ca33451d3a52b38366d4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "\t";
        // line 5
        echo "
\t\t";
        // line 6
        $this->displayBlock('menu', $context, $blocks);
        // line 9
        echo "
\t\t";
        // line 10
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 49
        echo "\t";
        // line 62
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\tIntente ingresar más tarde
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t        </div>
\t  \t</div>
\t{ endif #}

";
        
        $__internal_a33bde07c3e71dfbbac0a408ce6d90f3f1a13968a6ca33451d3a52b38366d4b4->leave($__internal_a33bde07c3e71dfbbac0a408ce6d90f3f1a13968a6ca33451d3a52b38366d4b4_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f86d2b5006e823425b51aeecb2665bf2e28047d448d6e50cd256e018014cf6d9 = $this->env->getExtension("native_profiler");
        $__internal_f86d2b5006e823425b51aeecb2665bf2e28047d448d6e50cd256e018014cf6d9->enter($__internal_f86d2b5006e823425b51aeecb2665bf2e28047d448d6e50cd256e018014cf6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "\t\t\t";
        $this->loadTemplate("AnexaCooperadoraBundle:frontend:nav.html.twig", "AnexaCooperadoraBundle:frontend:index.html.twig", 7)->display($context);
        // line 8
        echo "\t\t";
        
        $__internal_f86d2b5006e823425b51aeecb2665bf2e28047d448d6e50cd256e018014cf6d9->leave($__internal_f86d2b5006e823425b51aeecb2665bf2e28047d448d6e50cd256e018014cf6d9_prof);

    }

    // line 10
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_40dcb58f37c8aa71ffe6b70759d7ee73cb707dcd1bbd32b5777385193ca9fd7b = $this->env->getExtension("native_profiler");
        $__internal_40dcb58f37c8aa71ffe6b70759d7ee73cb707dcd1bbd32b5777385193ca9fd7b->enter($__internal_40dcb58f37c8aa71ffe6b70759d7ee73cb707dcd1bbd32b5777385193ca9fd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 11
        echo "\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Descripción</div>
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t<p>";
        // line 15
        echo "</p>
\t\t\t\t  \t<div class=\"thumbnail\">
\t\t\t\t      <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/slider.jpg"), "html", null, true);
        echo "\" alt=\"Foto de la Anexa\">
\t\t\t\t    </div>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-offset-1 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Contacto</div>
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t\t\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sendMail");
        echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Nombre</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Nombre\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">E-Mail</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Telefono</label>
\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"(0221) - 44XXXX\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputPassword1\">Comentario</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"comentario\" rows=\"4\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\" col-md-12 btn btn-default\">Enviar</button>
\t\t\t\t\t\t</form>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        
        $__internal_40dcb58f37c8aa71ffe6b70759d7ee73cb707dcd1bbd32b5777385193ca9fd7b->leave($__internal_40dcb58f37c8aa71ffe6b70759d7ee73cb707dcd1bbd32b5777385193ca9fd7b_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:frontend:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  106 => 17,  102 => 15,  96 => 11,  90 => 10,  83 => 8,  80 => 7,  74 => 6,  56 => 62,  54 => 49,  52 => 10,  49 => 9,  47 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AnexaCooperadoraBundle::base.html.twig' %}*/
/* */
/* {% block page %}*/
/* 	{# if data.1.valorNumerico == 1 #}*/
/* */
/* 		{% block menu %}*/
/* 			{% include 'AnexaCooperadoraBundle:frontend:nav.html.twig' %}*/
/* 		{% endblock %}*/
/* */
/* 		{% block cuerpo %}*/
/* 			<div class="col-md-8">*/
/* 				<div class="panel panel-default">*/
/* 					<div class="panel-heading">Descripción</div>*/
/* 				  	<div class="panel-body">*/
/* 				  	<p>{#{data.0.valorTextual }#}</p>*/
/* 				  	<div class="thumbnail">*/
/* 				      <img src="{{asset('/img/slider.jpg')}}" alt="Foto de la Anexa">*/
/* 				    </div>*/
/* 				  	</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-offset-1 col-md-3">*/
/* 				<div class="panel panel-default">*/
/* 					<div class="panel-heading">Contacto</div>*/
/* 				  	<div class="panel-body">*/
/* 						<form action="{{path('sendMail')}}">*/
/* 							<div class="form-group">*/
/* 								<label for="exampleInputEmail1">Nombre</label>*/
/* 								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="exampleInputEmail1">E-Mail</label>*/
/* 								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="exampleInputEmail1">Telefono</label>*/
/* 								<input type="tel" class="form-control" id="exampleInputEmail1" placeholder="(0221) - 44XXXX">*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="exampleInputPassword1">Comentario</label>*/
/* 								<textarea class="form-control" name="comentario" rows="4"></textarea>*/
/* 							</div>*/
/* 							<button type="submit" class=" col-md-12 btn btn-default">Enviar</button>*/
/* 						</form>*/
/* 				  	</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endblock cuerpo%}*/
/* 	{# else %}*/
/* 		<div class="container">*/
/* 	        <div class="row">*/
/* 				<div class="margin-top2 margin-left">*/
/* 					<div class="col-md-5 col-md-offset-3">*/
/* 						<div class="panel panel-danger">*/
/* 							<div class="panel-heading">*/
/* 								<span class="glyphicon glyphicon-lock">*/
/* 									Atencion!!!*/
/* 								</span>*/
/* 							</div>*/
/* 							<div class="panel-body">*/
/* 								{#{ data.3.valorTextual }#}*/
/* 							</div>*/
/* 							<div class="panel-footer">*/
/* 								Intente ingresar más tarde*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 	        </div>*/
/* 	  	</div>*/
/* 	{ endif #}*/
/* */
/* {% endblock %}*/
/* */
