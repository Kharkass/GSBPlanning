<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a791007dc5124e377c344333eaf93093a20075ad8fba1548833347b1dfb90623 extends Twig_Template
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
        $__internal_9acce7ed30c0e6e7a41e91cd98404ea2b92d7fc5537cb4d385b0000b97064e57 = $this->env->getExtension("native_profiler");
        $__internal_9acce7ed30c0e6e7a41e91cd98404ea2b92d7fc5537cb4d385b0000b97064e57->enter($__internal_9acce7ed30c0e6e7a41e91cd98404ea2b92d7fc5537cb4d385b0000b97064e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9acce7ed30c0e6e7a41e91cd98404ea2b92d7fc5537cb4d385b0000b97064e57->leave($__internal_9acce7ed30c0e6e7a41e91cd98404ea2b92d7fc5537cb4d385b0000b97064e57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
