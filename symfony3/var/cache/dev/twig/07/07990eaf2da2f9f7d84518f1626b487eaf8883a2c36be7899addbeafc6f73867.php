<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1065c7436361ac2fdff814b1fbac51457015ca773e1254e61c90f32da2bbe541 extends Twig_Template
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
        $__internal_84f86db7aef9b056ffba1ffb4b52e3094b0d6987d35d37b12bea97a4d9f9cecd = $this->env->getExtension("native_profiler");
        $__internal_84f86db7aef9b056ffba1ffb4b52e3094b0d6987d35d37b12bea97a4d9f9cecd->enter($__internal_84f86db7aef9b056ffba1ffb4b52e3094b0d6987d35d37b12bea97a4d9f9cecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84f86db7aef9b056ffba1ffb4b52e3094b0d6987d35d37b12bea97a4d9f9cecd->leave($__internal_84f86db7aef9b056ffba1ffb4b52e3094b0d6987d35d37b12bea97a4d9f9cecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
