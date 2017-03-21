<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_37c3f71f906bbf62d4e7547f46c02873d2bce0eb65a9f9446d1114a81b6c2730 extends Twig_Template
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
        $__internal_046dcc2c1050a94d019466c0f72250d56d0be79f1e56a4a2a1b9ddc020fae44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046dcc2c1050a94d019466c0f72250d56d0be79f1e56a4a2a1b9ddc020fae44d->enter($__internal_046dcc2c1050a94d019466c0f72250d56d0be79f1e56a4a2a1b9ddc020fae44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_046dcc2c1050a94d019466c0f72250d56d0be79f1e56a4a2a1b9ddc020fae44d->leave($__internal_046dcc2c1050a94d019466c0f72250d56d0be79f1e56a4a2a1b9ddc020fae44d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
