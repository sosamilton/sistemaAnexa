<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_70b345b3d91d6c7d11e9cd496e4cc60ecb88dbf94de11fa4999becadbb059132 extends Twig_Template
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
        $__internal_154068575f59717e5aa98f9f3b9bb3df79b03dd2346e4322131035b295cbe0f6 = $this->env->getExtension("native_profiler");
        $__internal_154068575f59717e5aa98f9f3b9bb3df79b03dd2346e4322131035b295cbe0f6->enter($__internal_154068575f59717e5aa98f9f3b9bb3df79b03dd2346e4322131035b295cbe0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_154068575f59717e5aa98f9f3b9bb3df79b03dd2346e4322131035b295cbe0f6->leave($__internal_154068575f59717e5aa98f9f3b9bb3df79b03dd2346e4322131035b295cbe0f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
