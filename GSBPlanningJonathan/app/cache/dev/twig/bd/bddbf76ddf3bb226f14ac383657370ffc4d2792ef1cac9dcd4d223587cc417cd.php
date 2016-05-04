<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_31d6b747b19ee1fc2c82ec233cad253ec890e73fb017001b87f2536d12dfa906 extends Twig_Template
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
        $__internal_f5b84a2388ce573be20b65ea94f67e4edde82fe4c0f47ea665ca8624c6021ea4 = $this->env->getExtension("native_profiler");
        $__internal_f5b84a2388ce573be20b65ea94f67e4edde82fe4c0f47ea665ca8624c6021ea4->enter($__internal_f5b84a2388ce573be20b65ea94f67e4edde82fe4c0f47ea665ca8624c6021ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f5b84a2388ce573be20b65ea94f67e4edde82fe4c0f47ea665ca8624c6021ea4->leave($__internal_f5b84a2388ce573be20b65ea94f67e4edde82fe4c0f47ea665ca8624c6021ea4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
