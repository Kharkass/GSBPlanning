<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_96549a56f1bb4e9a1f4b11b85d72c5a3b0598f1e4831db9370768cd6515da6a4 extends Twig_Template
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
        $__internal_64242ce1c6cf0dfba491644d572357ba4569228998b052253824a8c03698e34b = $this->env->getExtension("native_profiler");
        $__internal_64242ce1c6cf0dfba491644d572357ba4569228998b052253824a8c03698e34b->enter($__internal_64242ce1c6cf0dfba491644d572357ba4569228998b052253824a8c03698e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64242ce1c6cf0dfba491644d572357ba4569228998b052253824a8c03698e34b->leave($__internal_64242ce1c6cf0dfba491644d572357ba4569228998b052253824a8c03698e34b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_faf92c7a55c838313939d6afe3734adf96b032607a5fdd0305b26867a8cdcd7b = $this->env->getExtension("native_profiler");
        $__internal_faf92c7a55c838313939d6afe3734adf96b032607a5fdd0305b26867a8cdcd7b->enter($__internal_faf92c7a55c838313939d6afe3734adf96b032607a5fdd0305b26867a8cdcd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_faf92c7a55c838313939d6afe3734adf96b032607a5fdd0305b26867a8cdcd7b->leave($__internal_faf92c7a55c838313939d6afe3734adf96b032607a5fdd0305b26867a8cdcd7b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8ddd0150c6356180ad3a046a5613c5a40bb21070d5adfa408f51c4b58d47c91 = $this->env->getExtension("native_profiler");
        $__internal_a8ddd0150c6356180ad3a046a5613c5a40bb21070d5adfa408f51c4b58d47c91->enter($__internal_a8ddd0150c6356180ad3a046a5613c5a40bb21070d5adfa408f51c4b58d47c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a8ddd0150c6356180ad3a046a5613c5a40bb21070d5adfa408f51c4b58d47c91->leave($__internal_a8ddd0150c6356180ad3a046a5613c5a40bb21070d5adfa408f51c4b58d47c91_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a1393ec310a887069c9c9cb954480f605515fa7f960f2cb0b67954309c96574 = $this->env->getExtension("native_profiler");
        $__internal_0a1393ec310a887069c9c9cb954480f605515fa7f960f2cb0b67954309c96574->enter($__internal_0a1393ec310a887069c9c9cb954480f605515fa7f960f2cb0b67954309c96574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0a1393ec310a887069c9c9cb954480f605515fa7f960f2cb0b67954309c96574->leave($__internal_0a1393ec310a887069c9c9cb954480f605515fa7f960f2cb0b67954309c96574_prof);

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
