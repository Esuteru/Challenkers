<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0130f11955df2e666884c3aaa31ec3d8debc3b836b445c9061414198cf9f5f0a extends Twig_Template
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
        $__internal_6fdd31c44e4179af0857a7b6bcd670e94ba5f554c1fdcec9cccd59b33fd35baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdd31c44e4179af0857a7b6bcd670e94ba5f554c1fdcec9cccd59b33fd35baa->enter($__internal_6fdd31c44e4179af0857a7b6bcd670e94ba5f554c1fdcec9cccd59b33fd35baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6fdd31c44e4179af0857a7b6bcd670e94ba5f554c1fdcec9cccd59b33fd35baa->leave($__internal_6fdd31c44e4179af0857a7b6bcd670e94ba5f554c1fdcec9cccd59b33fd35baa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
