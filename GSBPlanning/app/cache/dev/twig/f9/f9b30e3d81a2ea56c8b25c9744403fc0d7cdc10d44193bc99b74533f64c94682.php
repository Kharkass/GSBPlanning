<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_68fe06bf69c75f5c32072c99851ab05e7eddac2ab0409a696feef40b9ecb444c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_742049d115cbbbceb22bc132f5128fd1d203053472472ec8d0070c155fbdadf3 = $this->env->getExtension("native_profiler");
        $__internal_742049d115cbbbceb22bc132f5128fd1d203053472472ec8d0070c155fbdadf3->enter($__internal_742049d115cbbbceb22bc132f5128fd1d203053472472ec8d0070c155fbdadf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_742049d115cbbbceb22bc132f5128fd1d203053472472ec8d0070c155fbdadf3->leave($__internal_742049d115cbbbceb22bc132f5128fd1d203053472472ec8d0070c155fbdadf3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d360b9c26e2cf25b8dafbbd7082cd0ce1dc4058ec0f885326db71d2afaaf25dd = $this->env->getExtension("native_profiler");
        $__internal_d360b9c26e2cf25b8dafbbd7082cd0ce1dc4058ec0f885326db71d2afaaf25dd->enter($__internal_d360b9c26e2cf25b8dafbbd7082cd0ce1dc4058ec0f885326db71d2afaaf25dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d360b9c26e2cf25b8dafbbd7082cd0ce1dc4058ec0f885326db71d2afaaf25dd->leave($__internal_d360b9c26e2cf25b8dafbbd7082cd0ce1dc4058ec0f885326db71d2afaaf25dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35fbab5d5a1209c6d23cbd48326a1f03d81733d6636b891ba8945deb35dedb27 = $this->env->getExtension("native_profiler");
        $__internal_35fbab5d5a1209c6d23cbd48326a1f03d81733d6636b891ba8945deb35dedb27->enter($__internal_35fbab5d5a1209c6d23cbd48326a1f03d81733d6636b891ba8945deb35dedb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_35fbab5d5a1209c6d23cbd48326a1f03d81733d6636b891ba8945deb35dedb27->leave($__internal_35fbab5d5a1209c6d23cbd48326a1f03d81733d6636b891ba8945deb35dedb27_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
