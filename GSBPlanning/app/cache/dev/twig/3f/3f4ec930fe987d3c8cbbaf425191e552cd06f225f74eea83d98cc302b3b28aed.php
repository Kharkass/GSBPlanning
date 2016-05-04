<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_61946f4b947077289e639affa890ccb4a5524a574c6e337c8da8ca651faa3a73 extends Twig_Template
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
        $__internal_f360d8249e95caf691d3adabcc0d85be221ec07720a0e2b48371df1fd7b8ad44 = $this->env->getExtension("native_profiler");
        $__internal_f360d8249e95caf691d3adabcc0d85be221ec07720a0e2b48371df1fd7b8ad44->enter($__internal_f360d8249e95caf691d3adabcc0d85be221ec07720a0e2b48371df1fd7b8ad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f360d8249e95caf691d3adabcc0d85be221ec07720a0e2b48371df1fd7b8ad44->leave($__internal_f360d8249e95caf691d3adabcc0d85be221ec07720a0e2b48371df1fd7b8ad44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
