<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_110a5bc636a1f15c596f0c9902dbb3f963c396c1cf468d0fc740098186ce68b9 extends Twig_Template
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
        $__internal_0c6ad3be725b01da7b51d6fef42df3ee0fb127b1ef6ae94e94cad36ad58f840b = $this->env->getExtension("native_profiler");
        $__internal_0c6ad3be725b01da7b51d6fef42df3ee0fb127b1ef6ae94e94cad36ad58f840b->enter($__internal_0c6ad3be725b01da7b51d6fef42df3ee0fb127b1ef6ae94e94cad36ad58f840b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0c6ad3be725b01da7b51d6fef42df3ee0fb127b1ef6ae94e94cad36ad58f840b->leave($__internal_0c6ad3be725b01da7b51d6fef42df3ee0fb127b1ef6ae94e94cad36ad58f840b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
