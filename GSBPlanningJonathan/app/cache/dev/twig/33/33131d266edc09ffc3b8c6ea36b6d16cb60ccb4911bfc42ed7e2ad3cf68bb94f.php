<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4e9eade76d17282035ad366b69ac424b51801b11737d22133e690a94cdee0f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ad6b6ff52c0f08d15befee08fa4ef3300e49386a8a327fb500bf5396d1c21f = $this->env->getExtension("native_profiler");
        $__internal_81ad6b6ff52c0f08d15befee08fa4ef3300e49386a8a327fb500bf5396d1c21f->enter($__internal_81ad6b6ff52c0f08d15befee08fa4ef3300e49386a8a327fb500bf5396d1c21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_81ad6b6ff52c0f08d15befee08fa4ef3300e49386a8a327fb500bf5396d1c21f->leave($__internal_81ad6b6ff52c0f08d15befee08fa4ef3300e49386a8a327fb500bf5396d1c21f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
