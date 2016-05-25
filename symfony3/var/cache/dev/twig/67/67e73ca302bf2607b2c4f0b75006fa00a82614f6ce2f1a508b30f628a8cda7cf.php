<?php

/* AnexaCooperadoraBundle:Usuario:checkEmail.html.twig */
class __TwigTemplate_a8a836fa5bd4000bfda8a7d4498f072f3b04e02578c1582d17025618de64023f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InicioBundle::default.html.twig", "AnexaCooperadoraBundle:Usuario:checkEmail.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InicioBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_735ab5a0aeca0dc00698318554ad31804c4c2f062dadbe25069f341e9006ea14 = $this->env->getExtension("native_profiler");
        $__internal_735ab5a0aeca0dc00698318554ad31804c4c2f062dadbe25069f341e9006ea14->enter($__internal_735ab5a0aeca0dc00698318554ad31804c4c2f062dadbe25069f341e9006ea14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:Usuario:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735ab5a0aeca0dc00698318554ad31804c4c2f062dadbe25069f341e9006ea14->leave($__internal_735ab5a0aeca0dc00698318554ad31804c4c2f062dadbe25069f341e9006ea14_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_40bd499a8725c5df993b85f5501fa40480ddd3e2b2d5cf26cb00762e79a5cf9d = $this->env->getExtension("native_profiler");
        $__internal_40bd499a8725c5df993b85f5501fa40480ddd3e2b2d5cf26cb00762e79a5cf9d->enter($__internal_40bd499a8725c5df993b85f5501fa40480ddd3e2b2d5cf26cb00762e79a5cf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " tu registro fue exitoso
    volve al login para ingresar al sistema</p><br/>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
        <div class=\"btn btn-primary dropdown-toggle\">
            <span class=\"glyphicon glyphicon-share-alt\"></span>
            Volver al login
        </div>
    </a>
";
        
        $__internal_40bd499a8725c5df993b85f5501fa40480ddd3e2b2d5cf26cb00762e79a5cf9d->leave($__internal_40bd499a8725c5df993b85f5501fa40480ddd3e2b2d5cf26cb00762e79a5cf9d_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:Usuario:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "InicioBundle::default.html.twig" %}*/
/* */
/* {% block main %}*/
/*     <p>{{ user.username }} tu registro fue exitoso*/
/*     volve al login para ingresar al sistema</p><br/>*/
/*     <a href="{{ path('login') }}">*/
/*         <div class="btn btn-primary dropdown-toggle">*/
/*             <span class="glyphicon glyphicon-share-alt"></span>*/
/*             Volver al login*/
/*         </div>*/
/*     </a>*/
/* {% endblock %}*/
/* */
