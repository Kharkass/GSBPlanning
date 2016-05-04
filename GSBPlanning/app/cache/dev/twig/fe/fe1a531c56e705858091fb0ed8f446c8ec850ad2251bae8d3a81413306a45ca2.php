<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f961e84e341d51674c112567de84f7627488b7b5d8789fde8aebc0d460c0b059 extends Twig_Template
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
        $__internal_e1a58435b24979807afc5b2e1142708cdd1bf4fe231e80d0f009f7a4d2cc4f43 = $this->env->getExtension("native_profiler");
        $__internal_e1a58435b24979807afc5b2e1142708cdd1bf4fe231e80d0f009f7a4d2cc4f43->enter($__internal_e1a58435b24979807afc5b2e1142708cdd1bf4fe231e80d0f009f7a4d2cc4f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a58435b24979807afc5b2e1142708cdd1bf4fe231e80d0f009f7a4d2cc4f43->leave($__internal_e1a58435b24979807afc5b2e1142708cdd1bf4fe231e80d0f009f7a4d2cc4f43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f06fecd9d929656877a9f24128f524264843483a8af9b64ce3392e691dbfab5 = $this->env->getExtension("native_profiler");
        $__internal_4f06fecd9d929656877a9f24128f524264843483a8af9b64ce3392e691dbfab5->enter($__internal_4f06fecd9d929656877a9f24128f524264843483a8af9b64ce3392e691dbfab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f06fecd9d929656877a9f24128f524264843483a8af9b64ce3392e691dbfab5->leave($__internal_4f06fecd9d929656877a9f24128f524264843483a8af9b64ce3392e691dbfab5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c5797fdeb8f325f9f047727033a5106248d4d7326138bea3e31a7a39497ccc4 = $this->env->getExtension("native_profiler");
        $__internal_7c5797fdeb8f325f9f047727033a5106248d4d7326138bea3e31a7a39497ccc4->enter($__internal_7c5797fdeb8f325f9f047727033a5106248d4d7326138bea3e31a7a39497ccc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c5797fdeb8f325f9f047727033a5106248d4d7326138bea3e31a7a39497ccc4->leave($__internal_7c5797fdeb8f325f9f047727033a5106248d4d7326138bea3e31a7a39497ccc4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_029905e0329a85ea8eef7eea2c6476004570dd70090b25739c2192b481b22c0e = $this->env->getExtension("native_profiler");
        $__internal_029905e0329a85ea8eef7eea2c6476004570dd70090b25739c2192b481b22c0e->enter($__internal_029905e0329a85ea8eef7eea2c6476004570dd70090b25739c2192b481b22c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_029905e0329a85ea8eef7eea2c6476004570dd70090b25739c2192b481b22c0e->leave($__internal_029905e0329a85ea8eef7eea2c6476004570dd70090b25739c2192b481b22c0e_prof);

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
