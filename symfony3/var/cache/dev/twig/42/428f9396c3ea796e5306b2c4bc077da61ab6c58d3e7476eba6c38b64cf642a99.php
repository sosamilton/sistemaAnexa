<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_eacded163f0179a7676b900affb8eaadbf71bf808af223dccf0798422f6614b6 extends Twig_Template
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
        $__internal_014b1e780d59a22208f8a743dcd0fe209f93f38fcd0c05b6f7e6ef0c3e36bb68 = $this->env->getExtension("native_profiler");
        $__internal_014b1e780d59a22208f8a743dcd0fe209f93f38fcd0c05b6f7e6ef0c3e36bb68->enter($__internal_014b1e780d59a22208f8a743dcd0fe209f93f38fcd0c05b6f7e6ef0c3e36bb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_014b1e780d59a22208f8a743dcd0fe209f93f38fcd0c05b6f7e6ef0c3e36bb68->leave($__internal_014b1e780d59a22208f8a743dcd0fe209f93f38fcd0c05b6f7e6ef0c3e36bb68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
