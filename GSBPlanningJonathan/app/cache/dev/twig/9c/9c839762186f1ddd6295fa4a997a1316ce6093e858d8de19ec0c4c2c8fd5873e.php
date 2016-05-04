<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0cb5fd5b8e379c7f16e0d44e972c0fe42cdff304dba604899c0bf44f588c03aa extends Twig_Template
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
        $__internal_ae8492caaeb5ac51cd862648967c08346628a1b2c2ce5351df568e559b05ffd2 = $this->env->getExtension("native_profiler");
        $__internal_ae8492caaeb5ac51cd862648967c08346628a1b2c2ce5351df568e559b05ffd2->enter($__internal_ae8492caaeb5ac51cd862648967c08346628a1b2c2ce5351df568e559b05ffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ae8492caaeb5ac51cd862648967c08346628a1b2c2ce5351df568e559b05ffd2->leave($__internal_ae8492caaeb5ac51cd862648967c08346628a1b2c2ce5351df568e559b05ffd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
