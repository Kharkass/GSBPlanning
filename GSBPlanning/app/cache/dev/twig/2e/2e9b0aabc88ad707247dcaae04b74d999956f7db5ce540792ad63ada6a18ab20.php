<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1a66e15c59d040ffecb8bbffd382a13f95ea64f9f9b4781194649dfa7fc23fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ec1e2ef242d1a775abd6d83e8f3cb123735dd0a2f0738593144a81f204e941d3 = $this->env->getExtension("native_profiler");
        $__internal_ec1e2ef242d1a775abd6d83e8f3cb123735dd0a2f0738593144a81f204e941d3->enter($__internal_ec1e2ef242d1a775abd6d83e8f3cb123735dd0a2f0738593144a81f204e941d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1e2ef242d1a775abd6d83e8f3cb123735dd0a2f0738593144a81f204e941d3->leave($__internal_ec1e2ef242d1a775abd6d83e8f3cb123735dd0a2f0738593144a81f204e941d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac0b5da1acf97cc2a1b997528f2ba33ca411e401a39b6b58cd6a2854b621f67 = $this->env->getExtension("native_profiler");
        $__internal_5ac0b5da1acf97cc2a1b997528f2ba33ca411e401a39b6b58cd6a2854b621f67->enter($__internal_5ac0b5da1acf97cc2a1b997528f2ba33ca411e401a39b6b58cd6a2854b621f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5ac0b5da1acf97cc2a1b997528f2ba33ca411e401a39b6b58cd6a2854b621f67->leave($__internal_5ac0b5da1acf97cc2a1b997528f2ba33ca411e401a39b6b58cd6a2854b621f67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f45a6d64edb75f22c8c0c869bcbbf86799effedb45c6625c7124655fce66d3de = $this->env->getExtension("native_profiler");
        $__internal_f45a6d64edb75f22c8c0c869bcbbf86799effedb45c6625c7124655fce66d3de->enter($__internal_f45a6d64edb75f22c8c0c869bcbbf86799effedb45c6625c7124655fce66d3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f45a6d64edb75f22c8c0c869bcbbf86799effedb45c6625c7124655fce66d3de->leave($__internal_f45a6d64edb75f22c8c0c869bcbbf86799effedb45c6625c7124655fce66d3de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
