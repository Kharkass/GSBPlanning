<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d0a0ee37db7e716ade271ef303b6a45619bd745451a77b87921bdc8f238c486a extends Twig_Template
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
        $__internal_cb96af30b3d0ad9607805eac47d5957f02ca17bd300bc7e67de19c34db71a8c8 = $this->env->getExtension("native_profiler");
        $__internal_cb96af30b3d0ad9607805eac47d5957f02ca17bd300bc7e67de19c34db71a8c8->enter($__internal_cb96af30b3d0ad9607805eac47d5957f02ca17bd300bc7e67de19c34db71a8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_cb96af30b3d0ad9607805eac47d5957f02ca17bd300bc7e67de19c34db71a8c8->leave($__internal_cb96af30b3d0ad9607805eac47d5957f02ca17bd300bc7e67de19c34db71a8c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
