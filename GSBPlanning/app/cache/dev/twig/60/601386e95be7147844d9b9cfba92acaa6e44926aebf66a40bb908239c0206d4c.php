<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5764d2f12712fb1fb1bac9e6e1bfb7057a351d359958fd0ac3fe4bb249503c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2678377664c37cfee594e97742915dfc3cc1b2aa1542120f3346df741fd927e3 = $this->env->getExtension("native_profiler");
        $__internal_2678377664c37cfee594e97742915dfc3cc1b2aa1542120f3346df741fd927e3->enter($__internal_2678377664c37cfee594e97742915dfc3cc1b2aa1542120f3346df741fd927e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2678377664c37cfee594e97742915dfc3cc1b2aa1542120f3346df741fd927e3->leave($__internal_2678377664c37cfee594e97742915dfc3cc1b2aa1542120f3346df741fd927e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7d90d9d3cb84aa8d40c00701b5b5a7d26d351019904ed7a8004d6ffce81fb28 = $this->env->getExtension("native_profiler");
        $__internal_c7d90d9d3cb84aa8d40c00701b5b5a7d26d351019904ed7a8004d6ffce81fb28->enter($__internal_c7d90d9d3cb84aa8d40c00701b5b5a7d26d351019904ed7a8004d6ffce81fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7d90d9d3cb84aa8d40c00701b5b5a7d26d351019904ed7a8004d6ffce81fb28->leave($__internal_c7d90d9d3cb84aa8d40c00701b5b5a7d26d351019904ed7a8004d6ffce81fb28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f06b8e0fde6df4e4d67b091df7f787b5d8b669c9cc4604ff4628d0f833b31a63 = $this->env->getExtension("native_profiler");
        $__internal_f06b8e0fde6df4e4d67b091df7f787b5d8b669c9cc4604ff4628d0f833b31a63->enter($__internal_f06b8e0fde6df4e4d67b091df7f787b5d8b669c9cc4604ff4628d0f833b31a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f06b8e0fde6df4e4d67b091df7f787b5d8b669c9cc4604ff4628d0f833b31a63->leave($__internal_f06b8e0fde6df4e4d67b091df7f787b5d8b669c9cc4604ff4628d0f833b31a63_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bc754402971c0272fa4398723de30f8cc11bd385a7ec9ce53dec32723dda5b8 = $this->env->getExtension("native_profiler");
        $__internal_9bc754402971c0272fa4398723de30f8cc11bd385a7ec9ce53dec32723dda5b8->enter($__internal_9bc754402971c0272fa4398723de30f8cc11bd385a7ec9ce53dec32723dda5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9bc754402971c0272fa4398723de30f8cc11bd385a7ec9ce53dec32723dda5b8->leave($__internal_9bc754402971c0272fa4398723de30f8cc11bd385a7ec9ce53dec32723dda5b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
