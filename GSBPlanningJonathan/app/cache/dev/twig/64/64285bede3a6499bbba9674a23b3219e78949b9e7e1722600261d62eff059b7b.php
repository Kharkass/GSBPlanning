<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_25b984ea3ff0a07d626c4b3e42db00f50bfcb66a730ca478b732cb7b10778b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_706bff10cd06326fa28106c2b10f39a7d062bec0dbe508d4dfc67b2e66aa063a = $this->env->getExtension("native_profiler");
        $__internal_706bff10cd06326fa28106c2b10f39a7d062bec0dbe508d4dfc67b2e66aa063a->enter($__internal_706bff10cd06326fa28106c2b10f39a7d062bec0dbe508d4dfc67b2e66aa063a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_706bff10cd06326fa28106c2b10f39a7d062bec0dbe508d4dfc67b2e66aa063a->leave($__internal_706bff10cd06326fa28106c2b10f39a7d062bec0dbe508d4dfc67b2e66aa063a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_870ac9aefc6d96cb78f7ce4bb998b91aa3c9bf8daf6b6d1ae79ba769d5f34554 = $this->env->getExtension("native_profiler");
        $__internal_870ac9aefc6d96cb78f7ce4bb998b91aa3c9bf8daf6b6d1ae79ba769d5f34554->enter($__internal_870ac9aefc6d96cb78f7ce4bb998b91aa3c9bf8daf6b6d1ae79ba769d5f34554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_870ac9aefc6d96cb78f7ce4bb998b91aa3c9bf8daf6b6d1ae79ba769d5f34554->leave($__internal_870ac9aefc6d96cb78f7ce4bb998b91aa3c9bf8daf6b6d1ae79ba769d5f34554_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f51f11fe7e1d66af7e85d7f29aff6a59da909ab7530f3f8a2fec94e890218ce0 = $this->env->getExtension("native_profiler");
        $__internal_f51f11fe7e1d66af7e85d7f29aff6a59da909ab7530f3f8a2fec94e890218ce0->enter($__internal_f51f11fe7e1d66af7e85d7f29aff6a59da909ab7530f3f8a2fec94e890218ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f51f11fe7e1d66af7e85d7f29aff6a59da909ab7530f3f8a2fec94e890218ce0->leave($__internal_f51f11fe7e1d66af7e85d7f29aff6a59da909ab7530f3f8a2fec94e890218ce0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cb878e3aa6ebf619466c8535854b44adedaee4fabee67f8d6bde6795fd90c81 = $this->env->getExtension("native_profiler");
        $__internal_1cb878e3aa6ebf619466c8535854b44adedaee4fabee67f8d6bde6795fd90c81->enter($__internal_1cb878e3aa6ebf619466c8535854b44adedaee4fabee67f8d6bde6795fd90c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1cb878e3aa6ebf619466c8535854b44adedaee4fabee67f8d6bde6795fd90c81->leave($__internal_1cb878e3aa6ebf619466c8535854b44adedaee4fabee67f8d6bde6795fd90c81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
