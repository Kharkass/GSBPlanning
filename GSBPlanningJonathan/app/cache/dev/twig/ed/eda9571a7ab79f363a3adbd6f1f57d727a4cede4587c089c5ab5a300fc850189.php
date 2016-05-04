<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ba1da0ecc1a189c9526f4a98debc80e610d10b2ae3dd13990e59e73cd3cf7716 extends Twig_Template
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
        $__internal_0a72847858dc1152cd65ecdc61a85b2902cdb5005f80b6b6fc75e79dab977905 = $this->env->getExtension("native_profiler");
        $__internal_0a72847858dc1152cd65ecdc61a85b2902cdb5005f80b6b6fc75e79dab977905->enter($__internal_0a72847858dc1152cd65ecdc61a85b2902cdb5005f80b6b6fc75e79dab977905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0a72847858dc1152cd65ecdc61a85b2902cdb5005f80b6b6fc75e79dab977905->leave($__internal_0a72847858dc1152cd65ecdc61a85b2902cdb5005f80b6b6fc75e79dab977905_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
