<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e4c1c16dc5644efc362d04da2ae13898d7f596653493f8e68577ef0a5b828a45 extends Twig_Template
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
        $__internal_21324446f19be52b9de2927dd917afaf38cb662dcef38b4bf4d82a21c3bd6003 = $this->env->getExtension("native_profiler");
        $__internal_21324446f19be52b9de2927dd917afaf38cb662dcef38b4bf4d82a21c3bd6003->enter($__internal_21324446f19be52b9de2927dd917afaf38cb662dcef38b4bf4d82a21c3bd6003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_21324446f19be52b9de2927dd917afaf38cb662dcef38b4bf4d82a21c3bd6003->leave($__internal_21324446f19be52b9de2927dd917afaf38cb662dcef38b4bf4d82a21c3bd6003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
