<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_65b762d49872b76510f7dfe91393c563b1b6a8787d6ee7cb5f4a016d55150f74 extends Twig_Template
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
        $__internal_48e4fc86d5dc74b0b51dd23c235788341021bc9be44d863618ada64dc1001f49 = $this->env->getExtension("native_profiler");
        $__internal_48e4fc86d5dc74b0b51dd23c235788341021bc9be44d863618ada64dc1001f49->enter($__internal_48e4fc86d5dc74b0b51dd23c235788341021bc9be44d863618ada64dc1001f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_48e4fc86d5dc74b0b51dd23c235788341021bc9be44d863618ada64dc1001f49->leave($__internal_48e4fc86d5dc74b0b51dd23c235788341021bc9be44d863618ada64dc1001f49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
