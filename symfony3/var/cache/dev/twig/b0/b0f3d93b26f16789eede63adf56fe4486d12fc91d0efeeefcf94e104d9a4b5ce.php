<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_75eb9c54789f95acd6199fa7bd9061d187d40445ec35d4cf96eab9bfde7c125f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecf856e0b4e9f8c3b6c0b602721bad5ae52f44effd3e4a3ea88ca1dd4d7eb8cc = $this->env->getExtension("native_profiler");
        $__internal_ecf856e0b4e9f8c3b6c0b602721bad5ae52f44effd3e4a3ea88ca1dd4d7eb8cc->enter($__internal_ecf856e0b4e9f8c3b6c0b602721bad5ae52f44effd3e4a3ea88ca1dd4d7eb8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf856e0b4e9f8c3b6c0b602721bad5ae52f44effd3e4a3ea88ca1dd4d7eb8cc->leave($__internal_ecf856e0b4e9f8c3b6c0b602721bad5ae52f44effd3e4a3ea88ca1dd4d7eb8cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3e57bc5dacf6e42c148f185c4be6b48ddadc1ac6055c8f357581a934e9a8e2d = $this->env->getExtension("native_profiler");
        $__internal_d3e57bc5dacf6e42c148f185c4be6b48ddadc1ac6055c8f357581a934e9a8e2d->enter($__internal_d3e57bc5dacf6e42c148f185c4be6b48ddadc1ac6055c8f357581a934e9a8e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d3e57bc5dacf6e42c148f185c4be6b48ddadc1ac6055c8f357581a934e9a8e2d->leave($__internal_d3e57bc5dacf6e42c148f185c4be6b48ddadc1ac6055c8f357581a934e9a8e2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
