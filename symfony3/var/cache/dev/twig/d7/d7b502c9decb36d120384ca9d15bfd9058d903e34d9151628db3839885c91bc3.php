<?php

/* AnexaCooperadoraBundle::base.html.twig */
class __TwigTemplate_6ce7ff911fb5700f2e0a502851ab3ad81dd26d7c24a1490b84ab1d5df099d810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addCSS' => array($this, 'block_addCSS'),
            'page' => array($this, 'block_page'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'footer' => array($this, 'block_footer'),
            'addJS' => array($this, 'block_addJS'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fa3bf5d8775d6ee4346aef5fe43a36d6fa5a723cbc9fdfff9070033405ce511 = $this->env->getExtension("native_profiler");
        $__internal_5fa3bf5d8775d6ee4346aef5fe43a36d6fa5a723cbc9fdfff9070033405ce511->enter($__internal_5fa3bf5d8775d6ee4346aef5fe43a36d6fa5a723cbc9fdfff9070033405ce511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Anexa | ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 11
        $this->displayBlock('addCSS', $context, $blocks);
        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>

  </head>
  <body>
    ";
        // line 16
        $this->displayBlock('page', $context, $blocks);
        // line 37
        echo "  </body>
</html>
";
        
        $__internal_5fa3bf5d8775d6ee4346aef5fe43a36d6fa5a723cbc9fdfff9070033405ce511->leave($__internal_5fa3bf5d8775d6ee4346aef5fe43a36d6fa5a723cbc9fdfff9070033405ce511_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ba4b851ac499c4d63da68f5f347c4986d9f22437569d958a8b62e53ad5b2313 = $this->env->getExtension("native_profiler");
        $__internal_1ba4b851ac499c4d63da68f5f347c4986d9f22437569d958a8b62e53ad5b2313->enter($__internal_1ba4b851ac499c4d63da68f5f347c4986d9f22437569d958a8b62e53ad5b2313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1ba4b851ac499c4d63da68f5f347c4986d9f22437569d958a8b62e53ad5b2313->leave($__internal_1ba4b851ac499c4d63da68f5f347c4986d9f22437569d958a8b62e53ad5b2313_prof);

    }

    // line 11
    public function block_addCSS($context, array $blocks = array())
    {
        $__internal_834dc96450494e70571177c41414e2498fe707be53c274aede454635f3581fad = $this->env->getExtension("native_profiler");
        $__internal_834dc96450494e70571177c41414e2498fe707be53c274aede454635f3581fad->enter($__internal_834dc96450494e70571177c41414e2498fe707be53c274aede454635f3581fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addCSS"));

        
        $__internal_834dc96450494e70571177c41414e2498fe707be53c274aede454635f3581fad->leave($__internal_834dc96450494e70571177c41414e2498fe707be53c274aede454635f3581fad_prof);

    }

    // line 16
    public function block_page($context, array $blocks = array())
    {
        $__internal_189b1174b3f0fbe8d32e7ef113574677c20da8855310589f9b2af61c1c431d11 = $this->env->getExtension("native_profiler");
        $__internal_189b1174b3f0fbe8d32e7ef113574677c20da8855310589f9b2af61c1c431d11->enter($__internal_189b1174b3f0fbe8d32e7ef113574677c20da8855310589f9b2af61c1c431d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 17
        echo "      ";
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "
      ";
        // line 19
        $this->displayBlock('menu', $context, $blocks);
        // line 20
        echo "
      <div class=\"container\">
        <div class=\"row\">
          ";
        // line 23
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 24
        echo "        </div>
      </div>
      ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 33
        echo "
      <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 35
        $this->displayBlock('addJS', $context, $blocks);
        // line 36
        echo "    ";
        
        $__internal_189b1174b3f0fbe8d32e7ef113574677c20da8855310589f9b2af61c1c431d11->leave($__internal_189b1174b3f0fbe8d32e7ef113574677c20da8855310589f9b2af61c1c431d11_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_724a2c523d081259f178e39cf78e9e51969e8001f26047ab12c5b54cc7b02e43 = $this->env->getExtension("native_profiler");
        $__internal_724a2c523d081259f178e39cf78e9e51969e8001f26047ab12c5b54cc7b02e43->enter($__internal_724a2c523d081259f178e39cf78e9e51969e8001f26047ab12c5b54cc7b02e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_724a2c523d081259f178e39cf78e9e51969e8001f26047ab12c5b54cc7b02e43->leave($__internal_724a2c523d081259f178e39cf78e9e51969e8001f26047ab12c5b54cc7b02e43_prof);

    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6bb89a2fa007da313faa6e9d18f8b084d487e92838b456f8684be1c141cf4643 = $this->env->getExtension("native_profiler");
        $__internal_6bb89a2fa007da313faa6e9d18f8b084d487e92838b456f8684be1c141cf4643->enter($__internal_6bb89a2fa007da313faa6e9d18f8b084d487e92838b456f8684be1c141cf4643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_6bb89a2fa007da313faa6e9d18f8b084d487e92838b456f8684be1c141cf4643->leave($__internal_6bb89a2fa007da313faa6e9d18f8b084d487e92838b456f8684be1c141cf4643_prof);

    }

    // line 23
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_e44dfe262190cfad9e541baef0f66cde089a50e61a3d3a29bc0db9e04eceb56f = $this->env->getExtension("native_profiler");
        $__internal_e44dfe262190cfad9e541baef0f66cde089a50e61a3d3a29bc0db9e04eceb56f->enter($__internal_e44dfe262190cfad9e541baef0f66cde089a50e61a3d3a29bc0db9e04eceb56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        
        $__internal_e44dfe262190cfad9e541baef0f66cde089a50e61a3d3a29bc0db9e04eceb56f->leave($__internal_e44dfe262190cfad9e541baef0f66cde089a50e61a3d3a29bc0db9e04eceb56f_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dd20d78e23033ce87d870a619064364bdf5cf8bee2587cd9903920c4d8288447 = $this->env->getExtension("native_profiler");
        $__internal_dd20d78e23033ce87d870a619064364bdf5cf8bee2587cd9903920c4d8288447->enter($__internal_dd20d78e23033ce87d870a619064364bdf5cf8bee2587cd9903920c4d8288447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 27
        echo "        <div>
          <footer class=\"footer\">
            <p class=\"text-muted text-center\">Grupo 57 - Proyecto de Software 2015</p>
          </footer>
        </div>
      ";
        
        $__internal_dd20d78e23033ce87d870a619064364bdf5cf8bee2587cd9903920c4d8288447->leave($__internal_dd20d78e23033ce87d870a619064364bdf5cf8bee2587cd9903920c4d8288447_prof);

    }

    // line 35
    public function block_addJS($context, array $blocks = array())
    {
        $__internal_e4f984e1fe6c8620ffa3cbc9b984f8290583cb884a1a538bbbfdd0bfb9093eba = $this->env->getExtension("native_profiler");
        $__internal_e4f984e1fe6c8620ffa3cbc9b984f8290583cb884a1a538bbbfdd0bfb9093eba->enter($__internal_e4f984e1fe6c8620ffa3cbc9b984f8290583cb884a1a538bbbfdd0bfb9093eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addJS"));

        
        $__internal_e4f984e1fe6c8620ffa3cbc9b984f8290583cb884a1a538bbbfdd0bfb9093eba->leave($__internal_e4f984e1fe6c8620ffa3cbc9b984f8290583cb884a1a538bbbfdd0bfb9093eba_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 35,  176 => 27,  170 => 26,  159 => 23,  148 => 19,  137 => 17,  130 => 36,  128 => 35,  124 => 34,  121 => 33,  119 => 26,  115 => 24,  113 => 23,  108 => 20,  106 => 19,  103 => 18,  100 => 17,  94 => 16,  83 => 11,  72 => 7,  63 => 37,  61 => 16,  53 => 12,  51 => 11,  47 => 10,  43 => 9,  38 => 7,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Anexa | {% block title %}{% endblock %}</title>*/
/* */
/*     <link href="{{ asset('bundles/css/bootstrap.css')}}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/css/custom.css')}}" rel="stylesheet">*/
/*     {% block addCSS %}{% endblock %}*/
/*     <script src="{{ asset('bundles/js/jquery-1.10.2.js')}}"></script>*/
/* */
/*   </head>*/
/*   <body>*/
/*     {% block page %}*/
/*       {% block header %}{% endblock %}*/
/* */
/*       {% block menu %}{% endblock %}*/
/* */
/*       <div class="container">*/
/*         <div class="row">*/
/*           {% block cuerpo %}{% endblock %}*/
/*         </div>*/
/*       </div>*/
/*       {% block footer %}*/
/*         <div>*/
/*           <footer class="footer">*/
/*             <p class="text-muted text-center">Grupo 57 - Proyecto de Software 2015</p>*/
/*           </footer>*/
/*         </div>*/
/*       {% endblock %}*/
/* */
/*       <script src="{{ asset('bundles/js/bootstrap.min.js')}}"></script>*/
/*       {% block addJS %}{% endblock %}*/
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
