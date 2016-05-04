<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_78e823401b77e96ed24f81c9e5236c5e4d96fc25ce4131ff45a28adec4e55baf extends Twig_Template
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
        $__internal_c77a9d235a0acee7897fb8ebdaabab122becc7070e5e1dcbf7750f502337417a = $this->env->getExtension("native_profiler");
        $__internal_c77a9d235a0acee7897fb8ebdaabab122becc7070e5e1dcbf7750f502337417a->enter($__internal_c77a9d235a0acee7897fb8ebdaabab122becc7070e5e1dcbf7750f502337417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c77a9d235a0acee7897fb8ebdaabab122becc7070e5e1dcbf7750f502337417a->leave($__internal_c77a9d235a0acee7897fb8ebdaabab122becc7070e5e1dcbf7750f502337417a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
