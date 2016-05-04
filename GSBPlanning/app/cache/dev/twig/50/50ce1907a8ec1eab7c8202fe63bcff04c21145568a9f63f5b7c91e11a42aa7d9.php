<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0f9ce66ae7a084ab920f57cf51916beeb04dd5dee5a4510f09ca768692aa6415 extends Twig_Template
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
        $__internal_2d288c84b4c4a95944c535a42b026d857c74049fad75801e5d6a9cf0ec2a2562 = $this->env->getExtension("native_profiler");
        $__internal_2d288c84b4c4a95944c535a42b026d857c74049fad75801e5d6a9cf0ec2a2562->enter($__internal_2d288c84b4c4a95944c535a42b026d857c74049fad75801e5d6a9cf0ec2a2562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2d288c84b4c4a95944c535a42b026d857c74049fad75801e5d6a9cf0ec2a2562->leave($__internal_2d288c84b4c4a95944c535a42b026d857c74049fad75801e5d6a9cf0ec2a2562_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
