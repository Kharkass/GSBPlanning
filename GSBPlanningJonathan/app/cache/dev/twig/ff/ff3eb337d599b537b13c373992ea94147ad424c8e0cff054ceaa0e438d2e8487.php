<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b43ef075eca7fb9165359e2b787fb224297bddaff51d3ea3e4369c6f6ae0e17e extends Twig_Template
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
        $__internal_46f018d3d2ac8205f535f359f97b6613ccf2ff142d0660729aca9662cfbeb137 = $this->env->getExtension("native_profiler");
        $__internal_46f018d3d2ac8205f535f359f97b6613ccf2ff142d0660729aca9662cfbeb137->enter($__internal_46f018d3d2ac8205f535f359f97b6613ccf2ff142d0660729aca9662cfbeb137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_46f018d3d2ac8205f535f359f97b6613ccf2ff142d0660729aca9662cfbeb137->leave($__internal_46f018d3d2ac8205f535f359f97b6613ccf2ff142d0660729aca9662cfbeb137_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
