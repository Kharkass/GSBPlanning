<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cecbf681aad30756a501cb941c8e0f163d47a851964b6977eb0ec9fcd263bc96 extends Twig_Template
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
        $__internal_36da596c444518eb514bb229ebb3ad9482b588958ce9ad062a1b6d0e161b80d1 = $this->env->getExtension("native_profiler");
        $__internal_36da596c444518eb514bb229ebb3ad9482b588958ce9ad062a1b6d0e161b80d1->enter($__internal_36da596c444518eb514bb229ebb3ad9482b588958ce9ad062a1b6d0e161b80d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_36da596c444518eb514bb229ebb3ad9482b588958ce9ad062a1b6d0e161b80d1->leave($__internal_36da596c444518eb514bb229ebb3ad9482b588958ce9ad062a1b6d0e161b80d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
