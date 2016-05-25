<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_45c1cf9c52842c72627c4f52fc5789325f79b26903058329c97a95013e4f6332 extends Twig_Template
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
        $__internal_01ec4605f76ffab008ae52d69474fc22fb8957555581884109aa7f24f1be0fcb = $this->env->getExtension("native_profiler");
        $__internal_01ec4605f76ffab008ae52d69474fc22fb8957555581884109aa7f24f1be0fcb->enter($__internal_01ec4605f76ffab008ae52d69474fc22fb8957555581884109aa7f24f1be0fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_01ec4605f76ffab008ae52d69474fc22fb8957555581884109aa7f24f1be0fcb->leave($__internal_01ec4605f76ffab008ae52d69474fc22fb8957555581884109aa7f24f1be0fcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
