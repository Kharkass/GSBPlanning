<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_da7e726d81d3d1f355f6c54462de7cc7e3bf464cd3d0112a9cf4dd716f73bb42 extends Twig_Template
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
        $__internal_47608950ceaa5bc9188230fe82095cff9242c788075193f27dfdb082bc4c8d0a = $this->env->getExtension("native_profiler");
        $__internal_47608950ceaa5bc9188230fe82095cff9242c788075193f27dfdb082bc4c8d0a->enter($__internal_47608950ceaa5bc9188230fe82095cff9242c788075193f27dfdb082bc4c8d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_47608950ceaa5bc9188230fe82095cff9242c788075193f27dfdb082bc4c8d0a->leave($__internal_47608950ceaa5bc9188230fe82095cff9242c788075193f27dfdb082bc4c8d0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
