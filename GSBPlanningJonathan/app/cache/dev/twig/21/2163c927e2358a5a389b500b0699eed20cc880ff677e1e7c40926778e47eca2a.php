<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d713539ab5df34e9b2252a7526252ccd89781e3300cc4da2975f84d0879363ee extends Twig_Template
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
        $__internal_d8bd268dc130b891fe206ee03e8314e5a036e15c5771ff84d05b2fd9fbacd63b = $this->env->getExtension("native_profiler");
        $__internal_d8bd268dc130b891fe206ee03e8314e5a036e15c5771ff84d05b2fd9fbacd63b->enter($__internal_d8bd268dc130b891fe206ee03e8314e5a036e15c5771ff84d05b2fd9fbacd63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d8bd268dc130b891fe206ee03e8314e5a036e15c5771ff84d05b2fd9fbacd63b->leave($__internal_d8bd268dc130b891fe206ee03e8314e5a036e15c5771ff84d05b2fd9fbacd63b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
