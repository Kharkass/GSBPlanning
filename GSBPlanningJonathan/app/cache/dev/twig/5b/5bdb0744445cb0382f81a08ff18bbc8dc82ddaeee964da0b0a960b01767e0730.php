<?php

/* ::base.html.twig */
class __TwigTemplate_b071bb2debd4b1078ffa7c90900254bcc7b8fa7a738df2816df9aa752f3fed23 extends Twig_Template
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
        $__internal_c313d98f342f9d1359afc1f9dcec30a497bb769b16008dfba1ba6bcd5fad4f7b = $this->env->getExtension("native_profiler");
        $__internal_c313d98f342f9d1359afc1f9dcec30a497bb769b16008dfba1ba6bcd5fad4f7b->enter($__internal_c313d98f342f9d1359afc1f9dcec30a497bb769b16008dfba1ba6bcd5fad4f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c313d98f342f9d1359afc1f9dcec30a497bb769b16008dfba1ba6bcd5fad4f7b->leave($__internal_c313d98f342f9d1359afc1f9dcec30a497bb769b16008dfba1ba6bcd5fad4f7b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36e008275a195e727e1413d6dd8d9f20829ebfffa0e47fbcf4b5c76dc87c21d9 = $this->env->getExtension("native_profiler");
        $__internal_36e008275a195e727e1413d6dd8d9f20829ebfffa0e47fbcf4b5c76dc87c21d9->enter($__internal_36e008275a195e727e1413d6dd8d9f20829ebfffa0e47fbcf4b5c76dc87c21d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_36e008275a195e727e1413d6dd8d9f20829ebfffa0e47fbcf4b5c76dc87c21d9->leave($__internal_36e008275a195e727e1413d6dd8d9f20829ebfffa0e47fbcf4b5c76dc87c21d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_530ee51721a0d8b163704674cd7e7c1022d0952151dcefa86c687056c27111e1 = $this->env->getExtension("native_profiler");
        $__internal_530ee51721a0d8b163704674cd7e7c1022d0952151dcefa86c687056c27111e1->enter($__internal_530ee51721a0d8b163704674cd7e7c1022d0952151dcefa86c687056c27111e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_530ee51721a0d8b163704674cd7e7c1022d0952151dcefa86c687056c27111e1->leave($__internal_530ee51721a0d8b163704674cd7e7c1022d0952151dcefa86c687056c27111e1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f88278f36d57400833138fec7fdb0836dffa43516983a5d0ae81c2701ea1fe39 = $this->env->getExtension("native_profiler");
        $__internal_f88278f36d57400833138fec7fdb0836dffa43516983a5d0ae81c2701ea1fe39->enter($__internal_f88278f36d57400833138fec7fdb0836dffa43516983a5d0ae81c2701ea1fe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f88278f36d57400833138fec7fdb0836dffa43516983a5d0ae81c2701ea1fe39->leave($__internal_f88278f36d57400833138fec7fdb0836dffa43516983a5d0ae81c2701ea1fe39_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b7915c4828cb01e6ed89b350d4061745693f29c2fa4dd3184d641e958d64898 = $this->env->getExtension("native_profiler");
        $__internal_3b7915c4828cb01e6ed89b350d4061745693f29c2fa4dd3184d641e958d64898->enter($__internal_3b7915c4828cb01e6ed89b350d4061745693f29c2fa4dd3184d641e958d64898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b7915c4828cb01e6ed89b350d4061745693f29c2fa4dd3184d641e958d64898->leave($__internal_3b7915c4828cb01e6ed89b350d4061745693f29c2fa4dd3184d641e958d64898_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
