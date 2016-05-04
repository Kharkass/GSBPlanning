<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bf5fb11e3231edfefb36de68fe5dd524296591b22178304837b3f50aebb3f86b extends Twig_Template
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
        $__internal_6aed3235f573a6c1fa5f21e6fc5bd13c4d4f71d3ef4eeb3102ee99ce3cb3c6cc = $this->env->getExtension("native_profiler");
        $__internal_6aed3235f573a6c1fa5f21e6fc5bd13c4d4f71d3ef4eeb3102ee99ce3cb3c6cc->enter($__internal_6aed3235f573a6c1fa5f21e6fc5bd13c4d4f71d3ef4eeb3102ee99ce3cb3c6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6aed3235f573a6c1fa5f21e6fc5bd13c4d4f71d3ef4eeb3102ee99ce3cb3c6cc->leave($__internal_6aed3235f573a6c1fa5f21e6fc5bd13c4d4f71d3ef4eeb3102ee99ce3cb3c6cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
