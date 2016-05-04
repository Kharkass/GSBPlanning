<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6b10a1e8c8884acf2c3c4b4d05fb2d73ed97cb42c0e90ab791521d59883c32e1 extends Twig_Template
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
        $__internal_e053d06784fd5340695479ec9fbdff4014d7bd55d921f05844b49d2889f13174 = $this->env->getExtension("native_profiler");
        $__internal_e053d06784fd5340695479ec9fbdff4014d7bd55d921f05844b49d2889f13174->enter($__internal_e053d06784fd5340695479ec9fbdff4014d7bd55d921f05844b49d2889f13174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e053d06784fd5340695479ec9fbdff4014d7bd55d921f05844b49d2889f13174->leave($__internal_e053d06784fd5340695479ec9fbdff4014d7bd55d921f05844b49d2889f13174_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
