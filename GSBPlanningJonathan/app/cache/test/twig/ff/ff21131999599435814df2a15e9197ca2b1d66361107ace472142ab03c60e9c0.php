<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3a90d25e3d50a5ae0c4d6e0181054e9fe769ea1483b04c028a585c1a8fb994eb extends Twig_Template
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
        $__internal_d9beba3c4e5a59e1e18981c4a24a52eb1cb2ecba68f13901b67e95d19a197b00 = $this->env->getExtension("native_profiler");
        $__internal_d9beba3c4e5a59e1e18981c4a24a52eb1cb2ecba68f13901b67e95d19a197b00->enter($__internal_d9beba3c4e5a59e1e18981c4a24a52eb1cb2ecba68f13901b67e95d19a197b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9beba3c4e5a59e1e18981c4a24a52eb1cb2ecba68f13901b67e95d19a197b00->leave($__internal_d9beba3c4e5a59e1e18981c4a24a52eb1cb2ecba68f13901b67e95d19a197b00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a3c06d78077eecceb0957015796b85ee1bade627a48e0f7e3754e2a36b94b23 = $this->env->getExtension("native_profiler");
        $__internal_0a3c06d78077eecceb0957015796b85ee1bade627a48e0f7e3754e2a36b94b23->enter($__internal_0a3c06d78077eecceb0957015796b85ee1bade627a48e0f7e3754e2a36b94b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a3c06d78077eecceb0957015796b85ee1bade627a48e0f7e3754e2a36b94b23->leave($__internal_0a3c06d78077eecceb0957015796b85ee1bade627a48e0f7e3754e2a36b94b23_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52eff447457019c87949e0f1366ded8b66111bc63476b641ad91c8c74a13b690 = $this->env->getExtension("native_profiler");
        $__internal_52eff447457019c87949e0f1366ded8b66111bc63476b641ad91c8c74a13b690->enter($__internal_52eff447457019c87949e0f1366ded8b66111bc63476b641ad91c8c74a13b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52eff447457019c87949e0f1366ded8b66111bc63476b641ad91c8c74a13b690->leave($__internal_52eff447457019c87949e0f1366ded8b66111bc63476b641ad91c8c74a13b690_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_585094e114af98326e09834940a85bbc104073703019f470b397172ee7bc9107 = $this->env->getExtension("native_profiler");
        $__internal_585094e114af98326e09834940a85bbc104073703019f470b397172ee7bc9107->enter($__internal_585094e114af98326e09834940a85bbc104073703019f470b397172ee7bc9107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_585094e114af98326e09834940a85bbc104073703019f470b397172ee7bc9107->leave($__internal_585094e114af98326e09834940a85bbc104073703019f470b397172ee7bc9107_prof);

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
