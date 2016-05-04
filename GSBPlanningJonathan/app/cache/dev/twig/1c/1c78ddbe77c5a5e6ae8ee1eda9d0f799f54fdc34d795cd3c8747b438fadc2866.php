<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0219faf79ce454061a68e87f56cae056d80750f4e7925d80bd1d80622de58b12 extends Twig_Template
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
        $__internal_3b132d46ef735cf3fe5bf6b9484e196503549c3d39583b7c78fb022a3a90ff13 = $this->env->getExtension("native_profiler");
        $__internal_3b132d46ef735cf3fe5bf6b9484e196503549c3d39583b7c78fb022a3a90ff13->enter($__internal_3b132d46ef735cf3fe5bf6b9484e196503549c3d39583b7c78fb022a3a90ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3b132d46ef735cf3fe5bf6b9484e196503549c3d39583b7c78fb022a3a90ff13->leave($__internal_3b132d46ef735cf3fe5bf6b9484e196503549c3d39583b7c78fb022a3a90ff13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
