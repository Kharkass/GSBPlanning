<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_331099669f472a0c98e6853726cf242be5e06c69343b6e3de3631a5c373196de extends Twig_Template
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
        $__internal_da1529d7f39c30a7bb1186d3f197502661866a026e355495b923c3fa83bd506f = $this->env->getExtension("native_profiler");
        $__internal_da1529d7f39c30a7bb1186d3f197502661866a026e355495b923c3fa83bd506f->enter($__internal_da1529d7f39c30a7bb1186d3f197502661866a026e355495b923c3fa83bd506f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_da1529d7f39c30a7bb1186d3f197502661866a026e355495b923c3fa83bd506f->leave($__internal_da1529d7f39c30a7bb1186d3f197502661866a026e355495b923c3fa83bd506f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
