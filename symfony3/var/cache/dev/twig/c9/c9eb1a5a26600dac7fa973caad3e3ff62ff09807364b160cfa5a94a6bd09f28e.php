<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bc080a4e670f277ecaa0c39021b93f635cf9e2689a3d05e368fb7f6d71cc48b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff18f8b35907ef65aeb17e9c06d588ced1b3247cb574f17b4aa9c10367b17f32 = $this->env->getExtension("native_profiler");
        $__internal_ff18f8b35907ef65aeb17e9c06d588ced1b3247cb574f17b4aa9c10367b17f32->enter($__internal_ff18f8b35907ef65aeb17e9c06d588ced1b3247cb574f17b4aa9c10367b17f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ff18f8b35907ef65aeb17e9c06d588ced1b3247cb574f17b4aa9c10367b17f32->leave($__internal_ff18f8b35907ef65aeb17e9c06d588ced1b3247cb574f17b4aa9c10367b17f32_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_acdf1513d053444dd44e6d3abccb23b54d0b0a9a155e5698fd747c5d0401e90b = $this->env->getExtension("native_profiler");
        $__internal_acdf1513d053444dd44e6d3abccb23b54d0b0a9a155e5698fd747c5d0401e90b->enter($__internal_acdf1513d053444dd44e6d3abccb23b54d0b0a9a155e5698fd747c5d0401e90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_acdf1513d053444dd44e6d3abccb23b54d0b0a9a155e5698fd747c5d0401e90b->leave($__internal_acdf1513d053444dd44e6d3abccb23b54d0b0a9a155e5698fd747c5d0401e90b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0fdc6176900ae5f82ec5faedcc3ebe818320b86e933aa1787309df09c5fd3afb = $this->env->getExtension("native_profiler");
        $__internal_0fdc6176900ae5f82ec5faedcc3ebe818320b86e933aa1787309df09c5fd3afb->enter($__internal_0fdc6176900ae5f82ec5faedcc3ebe818320b86e933aa1787309df09c5fd3afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0fdc6176900ae5f82ec5faedcc3ebe818320b86e933aa1787309df09c5fd3afb->leave($__internal_0fdc6176900ae5f82ec5faedcc3ebe818320b86e933aa1787309df09c5fd3afb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8a172b5d562e6ffe28e80f6834ca8ea1b9e8e0c61bbf18801e9d87c66aebe73c = $this->env->getExtension("native_profiler");
        $__internal_8a172b5d562e6ffe28e80f6834ca8ea1b9e8e0c61bbf18801e9d87c66aebe73c->enter($__internal_8a172b5d562e6ffe28e80f6834ca8ea1b9e8e0c61bbf18801e9d87c66aebe73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8a172b5d562e6ffe28e80f6834ca8ea1b9e8e0c61bbf18801e9d87c66aebe73c->leave($__internal_8a172b5d562e6ffe28e80f6834ca8ea1b9e8e0c61bbf18801e9d87c66aebe73c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
