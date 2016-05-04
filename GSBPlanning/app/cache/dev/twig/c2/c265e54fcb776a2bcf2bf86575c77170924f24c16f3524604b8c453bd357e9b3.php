<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a99cb46e13984c300b1a60ac0d9067aaee99c9be648ada25bff47a8b0431f163 extends Twig_Template
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
        $__internal_bd3229895c8c1b9cba172e833fedca2d7ecf4c295140ccfea23f552265cf86b4 = $this->env->getExtension("native_profiler");
        $__internal_bd3229895c8c1b9cba172e833fedca2d7ecf4c295140ccfea23f552265cf86b4->enter($__internal_bd3229895c8c1b9cba172e833fedca2d7ecf4c295140ccfea23f552265cf86b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bd3229895c8c1b9cba172e833fedca2d7ecf4c295140ccfea23f552265cf86b4->leave($__internal_bd3229895c8c1b9cba172e833fedca2d7ecf4c295140ccfea23f552265cf86b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
