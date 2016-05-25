<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_308cd680f1141aa2d53eda5192f7e042b517978a321146767d15db42ce99605b extends Twig_Template
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
        $__internal_db95a6b0812febb229a61c9f8a1b476174d443a120ca7e00182cda80973f415b = $this->env->getExtension("native_profiler");
        $__internal_db95a6b0812febb229a61c9f8a1b476174d443a120ca7e00182cda80973f415b->enter($__internal_db95a6b0812febb229a61c9f8a1b476174d443a120ca7e00182cda80973f415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db95a6b0812febb229a61c9f8a1b476174d443a120ca7e00182cda80973f415b->leave($__internal_db95a6b0812febb229a61c9f8a1b476174d443a120ca7e00182cda80973f415b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
