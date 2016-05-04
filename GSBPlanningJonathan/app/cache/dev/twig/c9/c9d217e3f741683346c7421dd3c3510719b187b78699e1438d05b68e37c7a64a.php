<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f62d2e4628ed4b6487ef1b9a9e0d19b109691329f6b955f1c5afe08659c89ab6 extends Twig_Template
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
        $__internal_762d74fe2f4f90051b48ca4c4945ad2fb1fcdebe58ef0c2a55bdb9ab26351c2a = $this->env->getExtension("native_profiler");
        $__internal_762d74fe2f4f90051b48ca4c4945ad2fb1fcdebe58ef0c2a55bdb9ab26351c2a->enter($__internal_762d74fe2f4f90051b48ca4c4945ad2fb1fcdebe58ef0c2a55bdb9ab26351c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_762d74fe2f4f90051b48ca4c4945ad2fb1fcdebe58ef0c2a55bdb9ab26351c2a->leave($__internal_762d74fe2f4f90051b48ca4c4945ad2fb1fcdebe58ef0c2a55bdb9ab26351c2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
