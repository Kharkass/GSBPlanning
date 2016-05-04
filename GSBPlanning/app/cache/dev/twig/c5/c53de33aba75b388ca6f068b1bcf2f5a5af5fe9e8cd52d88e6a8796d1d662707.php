<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e1398ddfcd8a16e45bd92f1cba6ab5353d29a65f88078179e250ec3b1a445306 extends Twig_Template
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
        $__internal_b16aa20b566f115f34c7337a01b5ec97e7b46886c446764a13757ab94e6c2a9a = $this->env->getExtension("native_profiler");
        $__internal_b16aa20b566f115f34c7337a01b5ec97e7b46886c446764a13757ab94e6c2a9a->enter($__internal_b16aa20b566f115f34c7337a01b5ec97e7b46886c446764a13757ab94e6c2a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16aa20b566f115f34c7337a01b5ec97e7b46886c446764a13757ab94e6c2a9a->leave($__internal_b16aa20b566f115f34c7337a01b5ec97e7b46886c446764a13757ab94e6c2a9a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b88528bf4c27fc8735738ddc644c1953f113c4172cffa8e459c49e1e3452d6a4 = $this->env->getExtension("native_profiler");
        $__internal_b88528bf4c27fc8735738ddc644c1953f113c4172cffa8e459c49e1e3452d6a4->enter($__internal_b88528bf4c27fc8735738ddc644c1953f113c4172cffa8e459c49e1e3452d6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b88528bf4c27fc8735738ddc644c1953f113c4172cffa8e459c49e1e3452d6a4->leave($__internal_b88528bf4c27fc8735738ddc644c1953f113c4172cffa8e459c49e1e3452d6a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2449ce31b704bd01414845c621e0d26abd4d00bcc50757b9b3f7eecc056b7d4 = $this->env->getExtension("native_profiler");
        $__internal_f2449ce31b704bd01414845c621e0d26abd4d00bcc50757b9b3f7eecc056b7d4->enter($__internal_f2449ce31b704bd01414845c621e0d26abd4d00bcc50757b9b3f7eecc056b7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2449ce31b704bd01414845c621e0d26abd4d00bcc50757b9b3f7eecc056b7d4->leave($__internal_f2449ce31b704bd01414845c621e0d26abd4d00bcc50757b9b3f7eecc056b7d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab5c72801402be5c02e9e2140cfba920775f2996f2fc5f1f52d54ec04c34429b = $this->env->getExtension("native_profiler");
        $__internal_ab5c72801402be5c02e9e2140cfba920775f2996f2fc5f1f52d54ec04c34429b->enter($__internal_ab5c72801402be5c02e9e2140cfba920775f2996f2fc5f1f52d54ec04c34429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab5c72801402be5c02e9e2140cfba920775f2996f2fc5f1f52d54ec04c34429b->leave($__internal_ab5c72801402be5c02e9e2140cfba920775f2996f2fc5f1f52d54ec04c34429b_prof);

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
