<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_62d8e936895ea6106c3c8dda3cceb7b5e1f7f6dfaa261855918a3b4e0daf30a4 extends Twig_Template
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
        $__internal_9bfe7ff94266ae241ddddd5ee8a1abda454a44d2be0c6f1302f14e26d9d7fa42 = $this->env->getExtension("native_profiler");
        $__internal_9bfe7ff94266ae241ddddd5ee8a1abda454a44d2be0c6f1302f14e26d9d7fa42->enter($__internal_9bfe7ff94266ae241ddddd5ee8a1abda454a44d2be0c6f1302f14e26d9d7fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9bfe7ff94266ae241ddddd5ee8a1abda454a44d2be0c6f1302f14e26d9d7fa42->leave($__internal_9bfe7ff94266ae241ddddd5ee8a1abda454a44d2be0c6f1302f14e26d9d7fa42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
