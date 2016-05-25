<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ff2a4bc065c0fb6219ff70d1786dd685ff7c26daeb0ecac04a10898872344337 extends Twig_Template
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
        $__internal_7157e90de38ee9bfdbfe87ef1e18150071923260b23780f64f8329a8e23149a8 = $this->env->getExtension("native_profiler");
        $__internal_7157e90de38ee9bfdbfe87ef1e18150071923260b23780f64f8329a8e23149a8->enter($__internal_7157e90de38ee9bfdbfe87ef1e18150071923260b23780f64f8329a8e23149a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7157e90de38ee9bfdbfe87ef1e18150071923260b23780f64f8329a8e23149a8->leave($__internal_7157e90de38ee9bfdbfe87ef1e18150071923260b23780f64f8329a8e23149a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
