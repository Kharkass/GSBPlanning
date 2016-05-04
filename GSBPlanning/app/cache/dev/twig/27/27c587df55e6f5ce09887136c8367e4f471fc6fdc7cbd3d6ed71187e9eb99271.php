<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a7af89686831aecdc2745e7f92e6b408a07e0e84bf59d9b88689d634f981f362 extends Twig_Template
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
        $__internal_bcfe8d043fdcb577cd8ed6b5b50587ff51a787d95612b94998f7b67284d0a0fb = $this->env->getExtension("native_profiler");
        $__internal_bcfe8d043fdcb577cd8ed6b5b50587ff51a787d95612b94998f7b67284d0a0fb->enter($__internal_bcfe8d043fdcb577cd8ed6b5b50587ff51a787d95612b94998f7b67284d0a0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bcfe8d043fdcb577cd8ed6b5b50587ff51a787d95612b94998f7b67284d0a0fb->leave($__internal_bcfe8d043fdcb577cd8ed6b5b50587ff51a787d95612b94998f7b67284d0a0fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
