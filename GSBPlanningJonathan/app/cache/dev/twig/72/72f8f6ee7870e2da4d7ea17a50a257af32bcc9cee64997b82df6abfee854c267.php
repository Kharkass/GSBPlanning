<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ea8d481dc2577c94737691beb5fd14ccd4e4ae4e8d84850b09edb22394195c8f extends Twig_Template
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
        $__internal_fd48e7afde270f550d7e73eb630ead93baf2b639f82627b38f79121dccba51ac = $this->env->getExtension("native_profiler");
        $__internal_fd48e7afde270f550d7e73eb630ead93baf2b639f82627b38f79121dccba51ac->enter($__internal_fd48e7afde270f550d7e73eb630ead93baf2b639f82627b38f79121dccba51ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fd48e7afde270f550d7e73eb630ead93baf2b639f82627b38f79121dccba51ac->leave($__internal_fd48e7afde270f550d7e73eb630ead93baf2b639f82627b38f79121dccba51ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
