<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_adf59d67fede53d4bbb46600b14a94af43da98c5c3815e4064f4c81f1c3b0af4 extends Twig_Template
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
        $__internal_4d14759d4369c030af5c002ea33d9a0b9e3ac82841905ccba8649d1a1beed3b3 = $this->env->getExtension("native_profiler");
        $__internal_4d14759d4369c030af5c002ea33d9a0b9e3ac82841905ccba8649d1a1beed3b3->enter($__internal_4d14759d4369c030af5c002ea33d9a0b9e3ac82841905ccba8649d1a1beed3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4d14759d4369c030af5c002ea33d9a0b9e3ac82841905ccba8649d1a1beed3b3->leave($__internal_4d14759d4369c030af5c002ea33d9a0b9e3ac82841905ccba8649d1a1beed3b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
