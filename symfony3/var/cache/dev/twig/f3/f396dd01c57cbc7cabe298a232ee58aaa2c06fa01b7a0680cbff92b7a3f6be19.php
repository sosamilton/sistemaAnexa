<?php

/* AnexaCooperadoraBundle:backend/configuracion:index.html.twig */
class __TwigTemplate_ea5f28dd9e8c2219ec60cd34843ecc91949585463d4fdc1d335cfe3e54add06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnexaCooperadoraBundle:backend/configuracion:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa9c38af595f85b3a3632b2cfd6b6d43f9170cc4400cd7187cf38f54a401a67d = $this->env->getExtension("native_profiler");
        $__internal_fa9c38af595f85b3a3632b2cfd6b6d43f9170cc4400cd7187cf38f54a401a67d->enter($__internal_fa9c38af595f85b3a3632b2cfd6b6d43f9170cc4400cd7187cf38f54a401a67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnexaCooperadoraBundle:backend/configuracion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9c38af595f85b3a3632b2cfd6b6d43f9170cc4400cd7187cf38f54a401a67d->leave($__internal_fa9c38af595f85b3a3632b2cfd6b6d43f9170cc4400cd7187cf38f54a401a67d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ff9613baf692502616e4e1d7b5e22255e2ef2dbdbbba06da4c42a73a73fb5e0 = $this->env->getExtension("native_profiler");
        $__internal_7ff9613baf692502616e4e1d7b5e22255e2ef2dbdbbba06da4c42a73a73fb5e0->enter($__internal_7ff9613baf692502616e4e1d7b5e22255e2ef2dbdbbba06da4c42a73a73fb5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Configuracion list</h1>

    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Valornumerico</th>
                <th>Valortextual</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configuracions"]) ? $context["configuracions"] : $this->getContext($context, "configuracions")));
        foreach ($context['_seq'] as $context["_key"] => $context["configuracion"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuracion_show", array("id" => $this->getAttribute($context["configuracion"], "clave", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["configuracion"], "clave", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["configuracion"], "valorNumerico", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["configuracion"], "valorTextual", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuracion_show", array("id" => $this->getAttribute($context["configuracion"], "clave", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuracion_edit", array("id" => $this->getAttribute($context["configuracion"], "clave", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuracion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("configuracion_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7ff9613baf692502616e4e1d7b5e22255e2ef2dbdbbba06da4c42a73a73fb5e0->leave($__internal_7ff9613baf692502616e4e1d7b5e22255e2ef2dbdbbba06da4c42a73a73fb5e0_prof);

    }

    public function getTemplateName()
    {
        return "AnexaCooperadoraBundle:backend/configuracion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Configuracion list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Clave</th>*/
/*                 <th>Valornumerico</th>*/
/*                 <th>Valortextual</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for configuracion in configuracions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('configuracion_show', { 'id': configuracion.clave }) }}">{{ configuracion.clave }}</a></td>*/
/*                 <td>{{ configuracion.valorNumerico }}</td>*/
/*                 <td>{{ configuracion.valorTextual }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('configuracion_show', { 'id': configuracion.clave }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('configuracion_edit', { 'id': configuracion.clave }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('configuracion_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
