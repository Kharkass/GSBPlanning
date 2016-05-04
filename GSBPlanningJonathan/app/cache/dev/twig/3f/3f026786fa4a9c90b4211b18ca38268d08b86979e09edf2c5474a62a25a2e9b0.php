<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ff1a300843533ba54c7b29c65a0eb96a8775e676009e7481973fa8a2f3b07dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_856accc9685bfc89cda6a36d2bb2130fbf400542fc87e25fa6d95a3cedbe16bf = $this->env->getExtension("native_profiler");
        $__internal_856accc9685bfc89cda6a36d2bb2130fbf400542fc87e25fa6d95a3cedbe16bf->enter($__internal_856accc9685bfc89cda6a36d2bb2130fbf400542fc87e25fa6d95a3cedbe16bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_856accc9685bfc89cda6a36d2bb2130fbf400542fc87e25fa6d95a3cedbe16bf->leave($__internal_856accc9685bfc89cda6a36d2bb2130fbf400542fc87e25fa6d95a3cedbe16bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ac45e47e1791d9b197e6a656f279539c230432036d6b44bb703022048050cc7 = $this->env->getExtension("native_profiler");
        $__internal_8ac45e47e1791d9b197e6a656f279539c230432036d6b44bb703022048050cc7->enter($__internal_8ac45e47e1791d9b197e6a656f279539c230432036d6b44bb703022048050cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ac45e47e1791d9b197e6a656f279539c230432036d6b44bb703022048050cc7->leave($__internal_8ac45e47e1791d9b197e6a656f279539c230432036d6b44bb703022048050cc7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c02b860932abaf65b2c38f625f4b6eb33eff0e6a8e2c86041a08284b217e99d = $this->env->getExtension("native_profiler");
        $__internal_9c02b860932abaf65b2c38f625f4b6eb33eff0e6a8e2c86041a08284b217e99d->enter($__internal_9c02b860932abaf65b2c38f625f4b6eb33eff0e6a8e2c86041a08284b217e99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c02b860932abaf65b2c38f625f4b6eb33eff0e6a8e2c86041a08284b217e99d->leave($__internal_9c02b860932abaf65b2c38f625f4b6eb33eff0e6a8e2c86041a08284b217e99d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91787b56d432a62a62fa08b498d594470e494ae6d423c59843439085cace16b5 = $this->env->getExtension("native_profiler");
        $__internal_91787b56d432a62a62fa08b498d594470e494ae6d423c59843439085cace16b5->enter($__internal_91787b56d432a62a62fa08b498d594470e494ae6d423c59843439085cace16b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91787b56d432a62a62fa08b498d594470e494ae6d423c59843439085cace16b5->leave($__internal_91787b56d432a62a62fa08b498d594470e494ae6d423c59843439085cace16b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
