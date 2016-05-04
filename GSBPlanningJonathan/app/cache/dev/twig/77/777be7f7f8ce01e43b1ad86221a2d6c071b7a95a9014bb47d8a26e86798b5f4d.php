<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e58ad466739f728c9f6effe5a0afd2a29c205b5b6ac302a6ac99d7d05236b775 extends Twig_Template
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
        $__internal_7ba0a1fdb3efbc528964258d8eeaed231627c742c9ae5f6605198b7a4912ba4d = $this->env->getExtension("native_profiler");
        $__internal_7ba0a1fdb3efbc528964258d8eeaed231627c742c9ae5f6605198b7a4912ba4d->enter($__internal_7ba0a1fdb3efbc528964258d8eeaed231627c742c9ae5f6605198b7a4912ba4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7ba0a1fdb3efbc528964258d8eeaed231627c742c9ae5f6605198b7a4912ba4d->leave($__internal_7ba0a1fdb3efbc528964258d8eeaed231627c742c9ae5f6605198b7a4912ba4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
