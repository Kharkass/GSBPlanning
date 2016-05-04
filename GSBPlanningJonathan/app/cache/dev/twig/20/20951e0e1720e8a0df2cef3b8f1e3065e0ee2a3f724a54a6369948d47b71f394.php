<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_591a210c5930a2a4e1a5864fd603a51d233f74fe8f3ab2ed3d387777ceeb1328 extends Twig_Template
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
        $__internal_1ca0db2f1d51b6ab604bdcd5c6dee20a4ba0b56d33778d29e03ff2b9b5c167df = $this->env->getExtension("native_profiler");
        $__internal_1ca0db2f1d51b6ab604bdcd5c6dee20a4ba0b56d33778d29e03ff2b9b5c167df->enter($__internal_1ca0db2f1d51b6ab604bdcd5c6dee20a4ba0b56d33778d29e03ff2b9b5c167df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1ca0db2f1d51b6ab604bdcd5c6dee20a4ba0b56d33778d29e03ff2b9b5c167df->leave($__internal_1ca0db2f1d51b6ab604bdcd5c6dee20a4ba0b56d33778d29e03ff2b9b5c167df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
