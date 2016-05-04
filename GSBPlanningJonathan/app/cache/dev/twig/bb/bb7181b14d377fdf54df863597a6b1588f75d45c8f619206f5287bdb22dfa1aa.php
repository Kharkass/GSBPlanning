<?php

/* base.html.twig */
class __TwigTemplate_1aefdcdb20babcca4e0491022e5567b16bf174f1eaee9a76857f103ed91b343d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8a7e9fd1bf04f0386046885a7cd1ad7017a96dc53faea358b9ad93b17df2c74 = $this->env->getExtension("native_profiler");
        $__internal_e8a7e9fd1bf04f0386046885a7cd1ad7017a96dc53faea358b9ad93b17df2c74->enter($__internal_e8a7e9fd1bf04f0386046885a7cd1ad7017a96dc53faea358b9ad93b17df2c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e8a7e9fd1bf04f0386046885a7cd1ad7017a96dc53faea358b9ad93b17df2c74->leave($__internal_e8a7e9fd1bf04f0386046885a7cd1ad7017a96dc53faea358b9ad93b17df2c74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b17489d39766ab4971262888c4b3ea9919ea280746655d80c7104d3243ed97b5 = $this->env->getExtension("native_profiler");
        $__internal_b17489d39766ab4971262888c4b3ea9919ea280746655d80c7104d3243ed97b5->enter($__internal_b17489d39766ab4971262888c4b3ea9919ea280746655d80c7104d3243ed97b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b17489d39766ab4971262888c4b3ea9919ea280746655d80c7104d3243ed97b5->leave($__internal_b17489d39766ab4971262888c4b3ea9919ea280746655d80c7104d3243ed97b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba26e9ed666ca5ebec98bf5dfaf78c10e2dd281c940a8c865fa632b053236fa6 = $this->env->getExtension("native_profiler");
        $__internal_ba26e9ed666ca5ebec98bf5dfaf78c10e2dd281c940a8c865fa632b053236fa6->enter($__internal_ba26e9ed666ca5ebec98bf5dfaf78c10e2dd281c940a8c865fa632b053236fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba26e9ed666ca5ebec98bf5dfaf78c10e2dd281c940a8c865fa632b053236fa6->leave($__internal_ba26e9ed666ca5ebec98bf5dfaf78c10e2dd281c940a8c865fa632b053236fa6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aeaa67dc87315226d3de86d23c80ad79cc577afd4eabf3c80a27a0e14766bc3 = $this->env->getExtension("native_profiler");
        $__internal_7aeaa67dc87315226d3de86d23c80ad79cc577afd4eabf3c80a27a0e14766bc3->enter($__internal_7aeaa67dc87315226d3de86d23c80ad79cc577afd4eabf3c80a27a0e14766bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7aeaa67dc87315226d3de86d23c80ad79cc577afd4eabf3c80a27a0e14766bc3->leave($__internal_7aeaa67dc87315226d3de86d23c80ad79cc577afd4eabf3c80a27a0e14766bc3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4adc3d45d9f923d2fa07a32111f33812980d2b65b28e2642aead0004c1d69eec = $this->env->getExtension("native_profiler");
        $__internal_4adc3d45d9f923d2fa07a32111f33812980d2b65b28e2642aead0004c1d69eec->enter($__internal_4adc3d45d9f923d2fa07a32111f33812980d2b65b28e2642aead0004c1d69eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4adc3d45d9f923d2fa07a32111f33812980d2b65b28e2642aead0004c1d69eec->leave($__internal_4adc3d45d9f923d2fa07a32111f33812980d2b65b28e2642aead0004c1d69eec_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
