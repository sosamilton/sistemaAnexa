<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3272b79c7142d53c1a0fb547047cbe18673c503189e4015b938e250bd3b216f6 extends Twig_Template
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
        $__internal_cb02b760a21466dc9d36582d94e3eedf7d5904b13a581669be04dedf07c879bd = $this->env->getExtension("native_profiler");
        $__internal_cb02b760a21466dc9d36582d94e3eedf7d5904b13a581669be04dedf07c879bd->enter($__internal_cb02b760a21466dc9d36582d94e3eedf7d5904b13a581669be04dedf07c879bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cb02b760a21466dc9d36582d94e3eedf7d5904b13a581669be04dedf07c879bd->leave($__internal_cb02b760a21466dc9d36582d94e3eedf7d5904b13a581669be04dedf07c879bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
