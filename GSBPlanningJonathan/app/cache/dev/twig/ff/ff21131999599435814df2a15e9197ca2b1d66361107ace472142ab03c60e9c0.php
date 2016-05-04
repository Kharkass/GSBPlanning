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
        $__internal_bedd498e95326ccb3a63d50e73071fadb7c3749b9383c68b75c86cb25615b673 = $this->env->getExtension("native_profiler");
        $__internal_bedd498e95326ccb3a63d50e73071fadb7c3749b9383c68b75c86cb25615b673->enter($__internal_bedd498e95326ccb3a63d50e73071fadb7c3749b9383c68b75c86cb25615b673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bedd498e95326ccb3a63d50e73071fadb7c3749b9383c68b75c86cb25615b673->leave($__internal_bedd498e95326ccb3a63d50e73071fadb7c3749b9383c68b75c86cb25615b673_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2111779be1bed8f997b9b410e216f186e4b71cb45c2368b72f691f00832f8deb = $this->env->getExtension("native_profiler");
        $__internal_2111779be1bed8f997b9b410e216f186e4b71cb45c2368b72f691f00832f8deb->enter($__internal_2111779be1bed8f997b9b410e216f186e4b71cb45c2368b72f691f00832f8deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2111779be1bed8f997b9b410e216f186e4b71cb45c2368b72f691f00832f8deb->leave($__internal_2111779be1bed8f997b9b410e216f186e4b71cb45c2368b72f691f00832f8deb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b923d131e84bdb70b7dad7e96174739f1b4bb317abb0f66d6b9a6a4da71643f = $this->env->getExtension("native_profiler");
        $__internal_1b923d131e84bdb70b7dad7e96174739f1b4bb317abb0f66d6b9a6a4da71643f->enter($__internal_1b923d131e84bdb70b7dad7e96174739f1b4bb317abb0f66d6b9a6a4da71643f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b923d131e84bdb70b7dad7e96174739f1b4bb317abb0f66d6b9a6a4da71643f->leave($__internal_1b923d131e84bdb70b7dad7e96174739f1b4bb317abb0f66d6b9a6a4da71643f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a8ce91291ed2e7d612ec97fd854dd57de0bf71037338580c470090077e78ab0 = $this->env->getExtension("native_profiler");
        $__internal_1a8ce91291ed2e7d612ec97fd854dd57de0bf71037338580c470090077e78ab0->enter($__internal_1a8ce91291ed2e7d612ec97fd854dd57de0bf71037338580c470090077e78ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1a8ce91291ed2e7d612ec97fd854dd57de0bf71037338580c470090077e78ab0->leave($__internal_1a8ce91291ed2e7d612ec97fd854dd57de0bf71037338580c470090077e78ab0_prof);

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
