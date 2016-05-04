<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_15867939e37c222a7b4e748a0b51f8001662668c365b662021cadd185cab0626 extends Twig_Template
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
        $__internal_50101e27f634e9a0ee2ab155bd122e8ce57fab30f8209c32440365fa143fee0d = $this->env->getExtension("native_profiler");
        $__internal_50101e27f634e9a0ee2ab155bd122e8ce57fab30f8209c32440365fa143fee0d->enter($__internal_50101e27f634e9a0ee2ab155bd122e8ce57fab30f8209c32440365fa143fee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_50101e27f634e9a0ee2ab155bd122e8ce57fab30f8209c32440365fa143fee0d->leave($__internal_50101e27f634e9a0ee2ab155bd122e8ce57fab30f8209c32440365fa143fee0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
