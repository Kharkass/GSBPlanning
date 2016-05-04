<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b103be3e7a2b17d6e8fa1e547dcd64e2eefac72748ac806f995b173194f3d3ba extends Twig_Template
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
        $__internal_2193158c2ea613d53abcbe3337e8521709328e31aa2db195cd2060a76e898e9d = $this->env->getExtension("native_profiler");
        $__internal_2193158c2ea613d53abcbe3337e8521709328e31aa2db195cd2060a76e898e9d->enter($__internal_2193158c2ea613d53abcbe3337e8521709328e31aa2db195cd2060a76e898e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2193158c2ea613d53abcbe3337e8521709328e31aa2db195cd2060a76e898e9d->leave($__internal_2193158c2ea613d53abcbe3337e8521709328e31aa2db195cd2060a76e898e9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
