<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ff601410cefe6ef4e131d14b1376cc4715b24b8cb89213690f4b8013bb846d02 extends Twig_Template
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
        $__internal_d7e651a4e135d5ee4d2006b822a04397ae2dd94b0dca7b97f371df2f47d4739d = $this->env->getExtension("native_profiler");
        $__internal_d7e651a4e135d5ee4d2006b822a04397ae2dd94b0dca7b97f371df2f47d4739d->enter($__internal_d7e651a4e135d5ee4d2006b822a04397ae2dd94b0dca7b97f371df2f47d4739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d7e651a4e135d5ee4d2006b822a04397ae2dd94b0dca7b97f371df2f47d4739d->leave($__internal_d7e651a4e135d5ee4d2006b822a04397ae2dd94b0dca7b97f371df2f47d4739d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
