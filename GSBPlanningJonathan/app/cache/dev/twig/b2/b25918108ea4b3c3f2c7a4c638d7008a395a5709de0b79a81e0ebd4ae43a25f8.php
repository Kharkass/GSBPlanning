<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e0d3e0f9bd84c0a44a07ba4664aaa2ab6554e5d89d9a3197d5f4d2f24696d6cc extends Twig_Template
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
        $__internal_0bf091f4e250fb5a8dec0515db64007d3c5d1c98033526ddf69111b61a08de89 = $this->env->getExtension("native_profiler");
        $__internal_0bf091f4e250fb5a8dec0515db64007d3c5d1c98033526ddf69111b61a08de89->enter($__internal_0bf091f4e250fb5a8dec0515db64007d3c5d1c98033526ddf69111b61a08de89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf091f4e250fb5a8dec0515db64007d3c5d1c98033526ddf69111b61a08de89->leave($__internal_0bf091f4e250fb5a8dec0515db64007d3c5d1c98033526ddf69111b61a08de89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f08c0e837db75b627d6c1b8a9772b11547c8d681c21ede4150ff77fb924f210 = $this->env->getExtension("native_profiler");
        $__internal_6f08c0e837db75b627d6c1b8a9772b11547c8d681c21ede4150ff77fb924f210->enter($__internal_6f08c0e837db75b627d6c1b8a9772b11547c8d681c21ede4150ff77fb924f210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f08c0e837db75b627d6c1b8a9772b11547c8d681c21ede4150ff77fb924f210->leave($__internal_6f08c0e837db75b627d6c1b8a9772b11547c8d681c21ede4150ff77fb924f210_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18558644a4e0d2336926f7d36c97e707a5cc2e31b756a85608787bb1d3fa8f23 = $this->env->getExtension("native_profiler");
        $__internal_18558644a4e0d2336926f7d36c97e707a5cc2e31b756a85608787bb1d3fa8f23->enter($__internal_18558644a4e0d2336926f7d36c97e707a5cc2e31b756a85608787bb1d3fa8f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18558644a4e0d2336926f7d36c97e707a5cc2e31b756a85608787bb1d3fa8f23->leave($__internal_18558644a4e0d2336926f7d36c97e707a5cc2e31b756a85608787bb1d3fa8f23_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_423ed0f8c01fcff03244dde3eb73d5db335437fa9af260b8b727d0bab1d6e085 = $this->env->getExtension("native_profiler");
        $__internal_423ed0f8c01fcff03244dde3eb73d5db335437fa9af260b8b727d0bab1d6e085->enter($__internal_423ed0f8c01fcff03244dde3eb73d5db335437fa9af260b8b727d0bab1d6e085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_423ed0f8c01fcff03244dde3eb73d5db335437fa9af260b8b727d0bab1d6e085->leave($__internal_423ed0f8c01fcff03244dde3eb73d5db335437fa9af260b8b727d0bab1d6e085_prof);

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
