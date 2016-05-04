<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d3082f40128fdac3b06b827510f43856bde14656612f85a05953afe94d266e03 extends Twig_Template
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
        $__internal_e0f1b023662d0c277f576893fcdbd531bcef9b5c42f72a69264b98c77735a441 = $this->env->getExtension("native_profiler");
        $__internal_e0f1b023662d0c277f576893fcdbd531bcef9b5c42f72a69264b98c77735a441->enter($__internal_e0f1b023662d0c277f576893fcdbd531bcef9b5c42f72a69264b98c77735a441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e0f1b023662d0c277f576893fcdbd531bcef9b5c42f72a69264b98c77735a441->leave($__internal_e0f1b023662d0c277f576893fcdbd531bcef9b5c42f72a69264b98c77735a441_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
