<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_40d4f6be35e18dba5db6e3be58c2708c89bd11ad044ab6effbbd110cc75280aa extends Twig_Template
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
        $__internal_5d39a9c8fbd246fe4697cc4a424ff7c3ef2f78caed25f1799447ade58c4c4c8f = $this->env->getExtension("native_profiler");
        $__internal_5d39a9c8fbd246fe4697cc4a424ff7c3ef2f78caed25f1799447ade58c4c4c8f->enter($__internal_5d39a9c8fbd246fe4697cc4a424ff7c3ef2f78caed25f1799447ade58c4c4c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5d39a9c8fbd246fe4697cc4a424ff7c3ef2f78caed25f1799447ade58c4c4c8f->leave($__internal_5d39a9c8fbd246fe4697cc4a424ff7c3ef2f78caed25f1799447ade58c4c4c8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
