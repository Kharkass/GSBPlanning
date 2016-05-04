<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5f4f50bec23bd652bdeff7dca76c413d4e56a16a397055ed196714be93c7e2bb extends Twig_Template
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
        $__internal_944c0c7c7285b2ca52be8b93241202b1d36f74e0559575cd07512d4f7d16cd80 = $this->env->getExtension("native_profiler");
        $__internal_944c0c7c7285b2ca52be8b93241202b1d36f74e0559575cd07512d4f7d16cd80->enter($__internal_944c0c7c7285b2ca52be8b93241202b1d36f74e0559575cd07512d4f7d16cd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_944c0c7c7285b2ca52be8b93241202b1d36f74e0559575cd07512d4f7d16cd80->leave($__internal_944c0c7c7285b2ca52be8b93241202b1d36f74e0559575cd07512d4f7d16cd80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
