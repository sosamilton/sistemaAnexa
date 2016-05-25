<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7c9126fdc459bb7fce16ba730abbf59921ce00a85b950cd6a264d09ce21c7f37 extends Twig_Template
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
        $__internal_b06de327c866babf1a7b1430f30a97800efb9675f02e6f9cd4446f23885bc4b0 = $this->env->getExtension("native_profiler");
        $__internal_b06de327c866babf1a7b1430f30a97800efb9675f02e6f9cd4446f23885bc4b0->enter($__internal_b06de327c866babf1a7b1430f30a97800efb9675f02e6f9cd4446f23885bc4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b06de327c866babf1a7b1430f30a97800efb9675f02e6f9cd4446f23885bc4b0->leave($__internal_b06de327c866babf1a7b1430f30a97800efb9675f02e6f9cd4446f23885bc4b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
