<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_094770279b8391723f9e755a4e84ef6ab0e958165ffd4f52941cfa763f1f1e7d extends Twig_Template
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
        $__internal_b2bb82b31b5a5d19f853cc7d790aec02d69bb19adbd0c128a237690714f1ee86 = $this->env->getExtension("native_profiler");
        $__internal_b2bb82b31b5a5d19f853cc7d790aec02d69bb19adbd0c128a237690714f1ee86->enter($__internal_b2bb82b31b5a5d19f853cc7d790aec02d69bb19adbd0c128a237690714f1ee86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b2bb82b31b5a5d19f853cc7d790aec02d69bb19adbd0c128a237690714f1ee86->leave($__internal_b2bb82b31b5a5d19f853cc7d790aec02d69bb19adbd0c128a237690714f1ee86_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
