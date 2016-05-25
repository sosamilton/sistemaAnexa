<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4666f8ae85ce26da6b31f6d72011a253016c222fa9b34e2902e0c1814a61ea6f extends Twig_Template
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
        $__internal_894d19d074ed1a4c02e6cb0b941a6f45c07d511c42e4e1491857803d55d019f8 = $this->env->getExtension("native_profiler");
        $__internal_894d19d074ed1a4c02e6cb0b941a6f45c07d511c42e4e1491857803d55d019f8->enter($__internal_894d19d074ed1a4c02e6cb0b941a6f45c07d511c42e4e1491857803d55d019f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_894d19d074ed1a4c02e6cb0b941a6f45c07d511c42e4e1491857803d55d019f8->leave($__internal_894d19d074ed1a4c02e6cb0b941a6f45c07d511c42e4e1491857803d55d019f8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_832e00bcb4ddc532269a99054ee0510fb20d61411ae6a11b61911accdfcaeae2 = $this->env->getExtension("native_profiler");
        $__internal_832e00bcb4ddc532269a99054ee0510fb20d61411ae6a11b61911accdfcaeae2->enter($__internal_832e00bcb4ddc532269a99054ee0510fb20d61411ae6a11b61911accdfcaeae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_832e00bcb4ddc532269a99054ee0510fb20d61411ae6a11b61911accdfcaeae2->leave($__internal_832e00bcb4ddc532269a99054ee0510fb20d61411ae6a11b61911accdfcaeae2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_46e2eadde5a0a032f12f9c38d2082787b0bed5b8f260ceb13476a9a8fbf7142c = $this->env->getExtension("native_profiler");
        $__internal_46e2eadde5a0a032f12f9c38d2082787b0bed5b8f260ceb13476a9a8fbf7142c->enter($__internal_46e2eadde5a0a032f12f9c38d2082787b0bed5b8f260ceb13476a9a8fbf7142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_46e2eadde5a0a032f12f9c38d2082787b0bed5b8f260ceb13476a9a8fbf7142c->leave($__internal_46e2eadde5a0a032f12f9c38d2082787b0bed5b8f260ceb13476a9a8fbf7142c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ff8ec63a6d94c3ca5ba0708013e8528d023725a5d365ca8625f54bd8c9d27ad1 = $this->env->getExtension("native_profiler");
        $__internal_ff8ec63a6d94c3ca5ba0708013e8528d023725a5d365ca8625f54bd8c9d27ad1->enter($__internal_ff8ec63a6d94c3ca5ba0708013e8528d023725a5d365ca8625f54bd8c9d27ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ff8ec63a6d94c3ca5ba0708013e8528d023725a5d365ca8625f54bd8c9d27ad1->leave($__internal_ff8ec63a6d94c3ca5ba0708013e8528d023725a5d365ca8625f54bd8c9d27ad1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
