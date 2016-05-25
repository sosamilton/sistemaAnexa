<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_529c7f56fc5b57377001e82c0edca55b8945991739edfad1b335222463246adb extends Twig_Template
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
        $__internal_ccafa341c3c7486278fb6f81ee6fbf0568e7c07f19ee89539872bde9243b3344 = $this->env->getExtension("native_profiler");
        $__internal_ccafa341c3c7486278fb6f81ee6fbf0568e7c07f19ee89539872bde9243b3344->enter($__internal_ccafa341c3c7486278fb6f81ee6fbf0568e7c07f19ee89539872bde9243b3344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ccafa341c3c7486278fb6f81ee6fbf0568e7c07f19ee89539872bde9243b3344->leave($__internal_ccafa341c3c7486278fb6f81ee6fbf0568e7c07f19ee89539872bde9243b3344_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
