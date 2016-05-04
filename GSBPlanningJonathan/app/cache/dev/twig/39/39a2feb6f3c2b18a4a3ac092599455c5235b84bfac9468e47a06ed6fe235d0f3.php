<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5420d90ad954828f5c6a02af10ef514d2789b3dfe5f32de00a36a37e5991a4b1 extends Twig_Template
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
        $__internal_76b229a9d17fe172eb4f01e01852c34576e30d31c55feca59c3b704e0c787981 = $this->env->getExtension("native_profiler");
        $__internal_76b229a9d17fe172eb4f01e01852c34576e30d31c55feca59c3b704e0c787981->enter($__internal_76b229a9d17fe172eb4f01e01852c34576e30d31c55feca59c3b704e0c787981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_76b229a9d17fe172eb4f01e01852c34576e30d31c55feca59c3b704e0c787981->leave($__internal_76b229a9d17fe172eb4f01e01852c34576e30d31c55feca59c3b704e0c787981_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
