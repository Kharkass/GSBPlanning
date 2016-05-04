<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_03e3abb359f30941dfb845c3c570fcc911ed33782acbb2362b4e9d7e194c0661 extends Twig_Template
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
        $__internal_b764839824afa93059905133c64fea713d65571ad6656f7bd7235dcfbd566f5e = $this->env->getExtension("native_profiler");
        $__internal_b764839824afa93059905133c64fea713d65571ad6656f7bd7235dcfbd566f5e->enter($__internal_b764839824afa93059905133c64fea713d65571ad6656f7bd7235dcfbd566f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b764839824afa93059905133c64fea713d65571ad6656f7bd7235dcfbd566f5e->leave($__internal_b764839824afa93059905133c64fea713d65571ad6656f7bd7235dcfbd566f5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
