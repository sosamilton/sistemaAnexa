<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_dd9dab04e3b4481837d7d52c0096a22260b3a4e2a5235e24cad7ea80d69faac4 extends Twig_Template
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
        $__internal_7311c18e2dee42542a265ce4bba9be219b24f2f0d3dd524234ae07eee01a8df9 = $this->env->getExtension("native_profiler");
        $__internal_7311c18e2dee42542a265ce4bba9be219b24f2f0d3dd524234ae07eee01a8df9->enter($__internal_7311c18e2dee42542a265ce4bba9be219b24f2f0d3dd524234ae07eee01a8df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7311c18e2dee42542a265ce4bba9be219b24f2f0d3dd524234ae07eee01a8df9->leave($__internal_7311c18e2dee42542a265ce4bba9be219b24f2f0d3dd524234ae07eee01a8df9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
