<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2ed9e5cba0527aa38433b19e5694ab4aaa9b1b4845a4eff5b123647aa2e22edc extends Twig_Template
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
        $__internal_663e75004cebf94a3a013821ad47944b2c6ec588a4f81ece4aae00f595b7a67c = $this->env->getExtension("native_profiler");
        $__internal_663e75004cebf94a3a013821ad47944b2c6ec588a4f81ece4aae00f595b7a67c->enter($__internal_663e75004cebf94a3a013821ad47944b2c6ec588a4f81ece4aae00f595b7a67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_663e75004cebf94a3a013821ad47944b2c6ec588a4f81ece4aae00f595b7a67c->leave($__internal_663e75004cebf94a3a013821ad47944b2c6ec588a4f81ece4aae00f595b7a67c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
