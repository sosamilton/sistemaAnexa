<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_524c0cc7fd11b1e25f58108937ea3d37ec25f0e76dcb7d657ad8629019d6a833 extends Twig_Template
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
        $__internal_21387c1ea4e24cf925b01d2ad5f4d3077a5f01763e402bb6729ea86ae502fc06 = $this->env->getExtension("native_profiler");
        $__internal_21387c1ea4e24cf925b01d2ad5f4d3077a5f01763e402bb6729ea86ae502fc06->enter($__internal_21387c1ea4e24cf925b01d2ad5f4d3077a5f01763e402bb6729ea86ae502fc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_21387c1ea4e24cf925b01d2ad5f4d3077a5f01763e402bb6729ea86ae502fc06->leave($__internal_21387c1ea4e24cf925b01d2ad5f4d3077a5f01763e402bb6729ea86ae502fc06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
