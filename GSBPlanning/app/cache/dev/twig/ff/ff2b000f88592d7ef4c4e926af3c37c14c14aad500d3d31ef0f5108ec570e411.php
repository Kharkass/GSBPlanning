<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4957c4ff05d650821a388dda2c7beca3bb67396ee9364eb6f32420310d7d07e5 extends Twig_Template
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
        $__internal_3ccec9253ea9e20bd527ed6db6d88b80581bc9b78da6cdd9fb55ec904c00a24e = $this->env->getExtension("native_profiler");
        $__internal_3ccec9253ea9e20bd527ed6db6d88b80581bc9b78da6cdd9fb55ec904c00a24e->enter($__internal_3ccec9253ea9e20bd527ed6db6d88b80581bc9b78da6cdd9fb55ec904c00a24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3ccec9253ea9e20bd527ed6db6d88b80581bc9b78da6cdd9fb55ec904c00a24e->leave($__internal_3ccec9253ea9e20bd527ed6db6d88b80581bc9b78da6cdd9fb55ec904c00a24e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
