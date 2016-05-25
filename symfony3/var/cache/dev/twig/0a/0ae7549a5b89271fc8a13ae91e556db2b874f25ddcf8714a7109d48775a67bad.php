<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d83e2c5f15ae49dd371114a4aaab9c86021b77bb51a4235b6e84a7fe606db1df extends Twig_Template
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
        $__internal_d57bb1252cd1c52805dbd548064ab5f92e1d128996c9159004536f8fa0732f70 = $this->env->getExtension("native_profiler");
        $__internal_d57bb1252cd1c52805dbd548064ab5f92e1d128996c9159004536f8fa0732f70->enter($__internal_d57bb1252cd1c52805dbd548064ab5f92e1d128996c9159004536f8fa0732f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d57bb1252cd1c52805dbd548064ab5f92e1d128996c9159004536f8fa0732f70->leave($__internal_d57bb1252cd1c52805dbd548064ab5f92e1d128996c9159004536f8fa0732f70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
