<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_97b8b6b24e691ab8e68b4184733f59eae5b123bf873247c0cf1d947bc5b9cc4c extends Twig_Template
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
        $__internal_a08410c8e3f38148290f6321a422d97bd15becfd707c4acf3954d8a8b190dfc6 = $this->env->getExtension("native_profiler");
        $__internal_a08410c8e3f38148290f6321a422d97bd15becfd707c4acf3954d8a8b190dfc6->enter($__internal_a08410c8e3f38148290f6321a422d97bd15becfd707c4acf3954d8a8b190dfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a08410c8e3f38148290f6321a422d97bd15becfd707c4acf3954d8a8b190dfc6->leave($__internal_a08410c8e3f38148290f6321a422d97bd15becfd707c4acf3954d8a8b190dfc6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
