<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c127c3d3157a6ba9ba9bb7cd9f5c1d368cd655ab240d7439fd37942a71aeabf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d40294d66be558fdba908b72a4b41234dd2353e42b42b2f15e69ac24638b5d93 = $this->env->getExtension("native_profiler");
        $__internal_d40294d66be558fdba908b72a4b41234dd2353e42b42b2f15e69ac24638b5d93->enter($__internal_d40294d66be558fdba908b72a4b41234dd2353e42b42b2f15e69ac24638b5d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d40294d66be558fdba908b72a4b41234dd2353e42b42b2f15e69ac24638b5d93->leave($__internal_d40294d66be558fdba908b72a4b41234dd2353e42b42b2f15e69ac24638b5d93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30e1c48d9d057437e762898cd6fd4b24ce1b95944922c876f1148ea473c59744 = $this->env->getExtension("native_profiler");
        $__internal_30e1c48d9d057437e762898cd6fd4b24ce1b95944922c876f1148ea473c59744->enter($__internal_30e1c48d9d057437e762898cd6fd4b24ce1b95944922c876f1148ea473c59744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30e1c48d9d057437e762898cd6fd4b24ce1b95944922c876f1148ea473c59744->leave($__internal_30e1c48d9d057437e762898cd6fd4b24ce1b95944922c876f1148ea473c59744_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f70851e1612f9e8377ed4571068fc93cebfafc5f20d908e8f92ad29bafd9414c = $this->env->getExtension("native_profiler");
        $__internal_f70851e1612f9e8377ed4571068fc93cebfafc5f20d908e8f92ad29bafd9414c->enter($__internal_f70851e1612f9e8377ed4571068fc93cebfafc5f20d908e8f92ad29bafd9414c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f70851e1612f9e8377ed4571068fc93cebfafc5f20d908e8f92ad29bafd9414c->leave($__internal_f70851e1612f9e8377ed4571068fc93cebfafc5f20d908e8f92ad29bafd9414c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce125a96ecef583eec372f33b81ccb717e26385b16f0707e2a55fa7e4322cb56 = $this->env->getExtension("native_profiler");
        $__internal_ce125a96ecef583eec372f33b81ccb717e26385b16f0707e2a55fa7e4322cb56->enter($__internal_ce125a96ecef583eec372f33b81ccb717e26385b16f0707e2a55fa7e4322cb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ce125a96ecef583eec372f33b81ccb717e26385b16f0707e2a55fa7e4322cb56->leave($__internal_ce125a96ecef583eec372f33b81ccb717e26385b16f0707e2a55fa7e4322cb56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
