<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_48145c457584c0e67afa73d99620dbf8cb445c291472324f6f3355b69f36c4aa extends Twig_Template
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
        $__internal_288f6798ea44722f06920f77a8a9e8248fe91bec21c0de64c2496b6f6d6f0cf3 = $this->env->getExtension("native_profiler");
        $__internal_288f6798ea44722f06920f77a8a9e8248fe91bec21c0de64c2496b6f6d6f0cf3->enter($__internal_288f6798ea44722f06920f77a8a9e8248fe91bec21c0de64c2496b6f6d6f0cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288f6798ea44722f06920f77a8a9e8248fe91bec21c0de64c2496b6f6d6f0cf3->leave($__internal_288f6798ea44722f06920f77a8a9e8248fe91bec21c0de64c2496b6f6d6f0cf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c91d89e49e667699ab03b7165b85ea8d7b43b98756b8b4c1f8b404820a3d929 = $this->env->getExtension("native_profiler");
        $__internal_8c91d89e49e667699ab03b7165b85ea8d7b43b98756b8b4c1f8b404820a3d929->enter($__internal_8c91d89e49e667699ab03b7165b85ea8d7b43b98756b8b4c1f8b404820a3d929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c91d89e49e667699ab03b7165b85ea8d7b43b98756b8b4c1f8b404820a3d929->leave($__internal_8c91d89e49e667699ab03b7165b85ea8d7b43b98756b8b4c1f8b404820a3d929_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8357c48f04676ed4a63f0359e772e08c0274b78f37623af7fae8671e5da18b5d = $this->env->getExtension("native_profiler");
        $__internal_8357c48f04676ed4a63f0359e772e08c0274b78f37623af7fae8671e5da18b5d->enter($__internal_8357c48f04676ed4a63f0359e772e08c0274b78f37623af7fae8671e5da18b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8357c48f04676ed4a63f0359e772e08c0274b78f37623af7fae8671e5da18b5d->leave($__internal_8357c48f04676ed4a63f0359e772e08c0274b78f37623af7fae8671e5da18b5d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31f8cec995119173e01bd842695c96a2a703e8d3d8cf5ed97350e111f504743f = $this->env->getExtension("native_profiler");
        $__internal_31f8cec995119173e01bd842695c96a2a703e8d3d8cf5ed97350e111f504743f->enter($__internal_31f8cec995119173e01bd842695c96a2a703e8d3d8cf5ed97350e111f504743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31f8cec995119173e01bd842695c96a2a703e8d3d8cf5ed97350e111f504743f->leave($__internal_31f8cec995119173e01bd842695c96a2a703e8d3d8cf5ed97350e111f504743f_prof);

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
