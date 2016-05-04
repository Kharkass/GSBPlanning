<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d9f2f263669161b799b060b1c3d2d36e76f647d01057935bf8cf57b7ac15239c extends Twig_Template
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
        $__internal_8dcae799d6fb6fcc459ffac49ad364c8f9e5d4ab078d21d72eda9d3fddb2eb81 = $this->env->getExtension("native_profiler");
        $__internal_8dcae799d6fb6fcc459ffac49ad364c8f9e5d4ab078d21d72eda9d3fddb2eb81->enter($__internal_8dcae799d6fb6fcc459ffac49ad364c8f9e5d4ab078d21d72eda9d3fddb2eb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8dcae799d6fb6fcc459ffac49ad364c8f9e5d4ab078d21d72eda9d3fddb2eb81->leave($__internal_8dcae799d6fb6fcc459ffac49ad364c8f9e5d4ab078d21d72eda9d3fddb2eb81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
