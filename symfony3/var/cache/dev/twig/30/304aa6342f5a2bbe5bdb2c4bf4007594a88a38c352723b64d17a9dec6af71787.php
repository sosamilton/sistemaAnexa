<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_78fb657005db3c8ed3c5cc37b1f863458b78444aa9b77183da2ca5c5a55aa91a extends Twig_Template
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
        $__internal_3944df53b2bc808b2508a1c89bb0d05c4dd4e160601cc6ed0c31cc6347e2efc9 = $this->env->getExtension("native_profiler");
        $__internal_3944df53b2bc808b2508a1c89bb0d05c4dd4e160601cc6ed0c31cc6347e2efc9->enter($__internal_3944df53b2bc808b2508a1c89bb0d05c4dd4e160601cc6ed0c31cc6347e2efc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3944df53b2bc808b2508a1c89bb0d05c4dd4e160601cc6ed0c31cc6347e2efc9->leave($__internal_3944df53b2bc808b2508a1c89bb0d05c4dd4e160601cc6ed0c31cc6347e2efc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
