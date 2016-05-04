<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_eadfee443c4469f9522bbebc3839336eac48f95a45b183aebac775a3e4f58f6e extends Twig_Template
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
        $__internal_75580cd5bb36ea424c53b98e2a543248141c5e54833bc13dafb55d63515bc52f = $this->env->getExtension("native_profiler");
        $__internal_75580cd5bb36ea424c53b98e2a543248141c5e54833bc13dafb55d63515bc52f->enter($__internal_75580cd5bb36ea424c53b98e2a543248141c5e54833bc13dafb55d63515bc52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_75580cd5bb36ea424c53b98e2a543248141c5e54833bc13dafb55d63515bc52f->leave($__internal_75580cd5bb36ea424c53b98e2a543248141c5e54833bc13dafb55d63515bc52f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
