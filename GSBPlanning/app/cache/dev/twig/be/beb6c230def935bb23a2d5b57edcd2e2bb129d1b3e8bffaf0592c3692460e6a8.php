<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b5880f198df969d804a1e913b63d60f48a57034e5772f06ac6db940c19f11d04 extends Twig_Template
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
        $__internal_388cf56e41ddc795e1561c8be6ca1c90369e6a3f170eb974832a37e3c0652bff = $this->env->getExtension("native_profiler");
        $__internal_388cf56e41ddc795e1561c8be6ca1c90369e6a3f170eb974832a37e3c0652bff->enter($__internal_388cf56e41ddc795e1561c8be6ca1c90369e6a3f170eb974832a37e3c0652bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_388cf56e41ddc795e1561c8be6ca1c90369e6a3f170eb974832a37e3c0652bff->leave($__internal_388cf56e41ddc795e1561c8be6ca1c90369e6a3f170eb974832a37e3c0652bff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
