<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f9f27dae3d5030f6d0fb5cbc9b3ff0d62325020dbc1e4ed2dfff30511a96e576 extends Twig_Template
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
        $__internal_bc0391f97632d3d7bea88c3ecd07a47734881ceeb30042330442e8709f154200 = $this->env->getExtension("native_profiler");
        $__internal_bc0391f97632d3d7bea88c3ecd07a47734881ceeb30042330442e8709f154200->enter($__internal_bc0391f97632d3d7bea88c3ecd07a47734881ceeb30042330442e8709f154200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bc0391f97632d3d7bea88c3ecd07a47734881ceeb30042330442e8709f154200->leave($__internal_bc0391f97632d3d7bea88c3ecd07a47734881ceeb30042330442e8709f154200_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
