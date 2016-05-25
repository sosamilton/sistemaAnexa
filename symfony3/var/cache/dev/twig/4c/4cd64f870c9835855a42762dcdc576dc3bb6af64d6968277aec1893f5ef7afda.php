<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_09731142bc79dffc6d2f0ca54c164c8f5fbf1d4d49098aaa4ec6e513dd88447b extends Twig_Template
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
        $__internal_33e80e1e8ec327e56dc4328f5d7c8e4bb3f68060796687ec3eb77abf98898cb0 = $this->env->getExtension("native_profiler");
        $__internal_33e80e1e8ec327e56dc4328f5d7c8e4bb3f68060796687ec3eb77abf98898cb0->enter($__internal_33e80e1e8ec327e56dc4328f5d7c8e4bb3f68060796687ec3eb77abf98898cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_33e80e1e8ec327e56dc4328f5d7c8e4bb3f68060796687ec3eb77abf98898cb0->leave($__internal_33e80e1e8ec327e56dc4328f5d7c8e4bb3f68060796687ec3eb77abf98898cb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
