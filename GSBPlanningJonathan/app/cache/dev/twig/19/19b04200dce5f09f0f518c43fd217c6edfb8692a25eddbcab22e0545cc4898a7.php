<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d95f7e1ce7ade19655b5146c9ec6deb4e4051fbcd6502799feed2cc9d71b8c96 extends Twig_Template
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
        $__internal_e738685e2da938e90072711a1e925fadee37b63a7bd3bda722f62d566ec7b538 = $this->env->getExtension("native_profiler");
        $__internal_e738685e2da938e90072711a1e925fadee37b63a7bd3bda722f62d566ec7b538->enter($__internal_e738685e2da938e90072711a1e925fadee37b63a7bd3bda722f62d566ec7b538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e738685e2da938e90072711a1e925fadee37b63a7bd3bda722f62d566ec7b538->leave($__internal_e738685e2da938e90072711a1e925fadee37b63a7bd3bda722f62d566ec7b538_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
