<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5ec22d33f916465691f8d554f9ba0ef1ddb33ac8f535b13f59cefdc6130128be extends Twig_Template
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
        $__internal_c2ba1252c6511d5efae48d51c3b1199ce39c1a19d9179bda12febd3eb58b3c92 = $this->env->getExtension("native_profiler");
        $__internal_c2ba1252c6511d5efae48d51c3b1199ce39c1a19d9179bda12febd3eb58b3c92->enter($__internal_c2ba1252c6511d5efae48d51c3b1199ce39c1a19d9179bda12febd3eb58b3c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c2ba1252c6511d5efae48d51c3b1199ce39c1a19d9179bda12febd3eb58b3c92->leave($__internal_c2ba1252c6511d5efae48d51c3b1199ce39c1a19d9179bda12febd3eb58b3c92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
