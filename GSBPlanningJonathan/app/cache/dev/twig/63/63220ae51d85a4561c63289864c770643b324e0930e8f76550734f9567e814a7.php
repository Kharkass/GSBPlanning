<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_030ae8422d7084dd9e73a86c0025aefc45713c48c60067cb8932ef33ffb37875 extends Twig_Template
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
        $__internal_599a081969798db578fdd42319bec4b1e4501b6af98e1b07acb954de8d659411 = $this->env->getExtension("native_profiler");
        $__internal_599a081969798db578fdd42319bec4b1e4501b6af98e1b07acb954de8d659411->enter($__internal_599a081969798db578fdd42319bec4b1e4501b6af98e1b07acb954de8d659411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_599a081969798db578fdd42319bec4b1e4501b6af98e1b07acb954de8d659411->leave($__internal_599a081969798db578fdd42319bec4b1e4501b6af98e1b07acb954de8d659411_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
