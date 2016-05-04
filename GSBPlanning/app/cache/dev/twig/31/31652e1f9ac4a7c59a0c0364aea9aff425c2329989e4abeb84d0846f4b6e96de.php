<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3ee80ec25c8ad608017ae593dc653e40bbaa26cce3506b69d23d8f9758601b19 extends Twig_Template
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
        $__internal_2d145335f3c65cae4cd9ad4d3daab29e28d05a8d9954eff4bfc8bd4413d29a07 = $this->env->getExtension("native_profiler");
        $__internal_2d145335f3c65cae4cd9ad4d3daab29e28d05a8d9954eff4bfc8bd4413d29a07->enter($__internal_2d145335f3c65cae4cd9ad4d3daab29e28d05a8d9954eff4bfc8bd4413d29a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2d145335f3c65cae4cd9ad4d3daab29e28d05a8d9954eff4bfc8bd4413d29a07->leave($__internal_2d145335f3c65cae4cd9ad4d3daab29e28d05a8d9954eff4bfc8bd4413d29a07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
