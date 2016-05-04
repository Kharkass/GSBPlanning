<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6dcfb2e93df5fd66aa8e0724e9fd60861ff7f23621b5a887e4e206a65c70d32b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a2a8c3f7e8995ba400c310f20b1166e5d1f6376f37e1a969473055347c44b3 = $this->env->getExtension("native_profiler");
        $__internal_a8a2a8c3f7e8995ba400c310f20b1166e5d1f6376f37e1a969473055347c44b3->enter($__internal_a8a2a8c3f7e8995ba400c310f20b1166e5d1f6376f37e1a969473055347c44b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a8a2a8c3f7e8995ba400c310f20b1166e5d1f6376f37e1a969473055347c44b3->leave($__internal_a8a2a8c3f7e8995ba400c310f20b1166e5d1f6376f37e1a969473055347c44b3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_27fc175da564869d38eab4a860a5d7eef4d4a3e9d183a62a3d85cc02ca699dff = $this->env->getExtension("native_profiler");
        $__internal_27fc175da564869d38eab4a860a5d7eef4d4a3e9d183a62a3d85cc02ca699dff->enter($__internal_27fc175da564869d38eab4a860a5d7eef4d4a3e9d183a62a3d85cc02ca699dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27fc175da564869d38eab4a860a5d7eef4d4a3e9d183a62a3d85cc02ca699dff->leave($__internal_27fc175da564869d38eab4a860a5d7eef4d4a3e9d183a62a3d85cc02ca699dff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
