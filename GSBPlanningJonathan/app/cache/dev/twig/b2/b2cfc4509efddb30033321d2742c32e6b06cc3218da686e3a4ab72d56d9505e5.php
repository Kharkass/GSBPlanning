<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a860682af48a28abe6e2af9bc925f3c476be64efc221b8ae08cd964eb82a3d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d546a521b1731010faf80b4a307c02c3a92bfd7e96016de48a0da95206008ad6 = $this->env->getExtension("native_profiler");
        $__internal_d546a521b1731010faf80b4a307c02c3a92bfd7e96016de48a0da95206008ad6->enter($__internal_d546a521b1731010faf80b4a307c02c3a92bfd7e96016de48a0da95206008ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d546a521b1731010faf80b4a307c02c3a92bfd7e96016de48a0da95206008ad6->leave($__internal_d546a521b1731010faf80b4a307c02c3a92bfd7e96016de48a0da95206008ad6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83d7b4b0ed4013c611b181a2eef2a8d44e9156d1458fb4f19753814897dd9dd1 = $this->env->getExtension("native_profiler");
        $__internal_83d7b4b0ed4013c611b181a2eef2a8d44e9156d1458fb4f19753814897dd9dd1->enter($__internal_83d7b4b0ed4013c611b181a2eef2a8d44e9156d1458fb4f19753814897dd9dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83d7b4b0ed4013c611b181a2eef2a8d44e9156d1458fb4f19753814897dd9dd1->leave($__internal_83d7b4b0ed4013c611b181a2eef2a8d44e9156d1458fb4f19753814897dd9dd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d13c94b19322fb25eca61fb25f561fc0a1366f532d645af397a4aaefc70c42f = $this->env->getExtension("native_profiler");
        $__internal_4d13c94b19322fb25eca61fb25f561fc0a1366f532d645af397a4aaefc70c42f->enter($__internal_4d13c94b19322fb25eca61fb25f561fc0a1366f532d645af397a4aaefc70c42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d13c94b19322fb25eca61fb25f561fc0a1366f532d645af397a4aaefc70c42f->leave($__internal_4d13c94b19322fb25eca61fb25f561fc0a1366f532d645af397a4aaefc70c42f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc5c78d0d5d052ecbb223d3be78ae86753f34880b60300dbdb39c2b364a54009 = $this->env->getExtension("native_profiler");
        $__internal_dc5c78d0d5d052ecbb223d3be78ae86753f34880b60300dbdb39c2b364a54009->enter($__internal_dc5c78d0d5d052ecbb223d3be78ae86753f34880b60300dbdb39c2b364a54009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc5c78d0d5d052ecbb223d3be78ae86753f34880b60300dbdb39c2b364a54009->leave($__internal_dc5c78d0d5d052ecbb223d3be78ae86753f34880b60300dbdb39c2b364a54009_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
