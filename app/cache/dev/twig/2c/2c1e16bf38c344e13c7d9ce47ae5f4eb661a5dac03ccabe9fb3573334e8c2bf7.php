<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d4b0ddc8beb5f54404659dfe052ae69490bbe7543a89475540b9e38e8e0fd225 extends Twig_Template
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
        $__internal_5db7ab0b2b814c24ae93c7dc570e8dee15121dafe10d5e79b24d2dac9d74e46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db7ab0b2b814c24ae93c7dc570e8dee15121dafe10d5e79b24d2dac9d74e46d->enter($__internal_5db7ab0b2b814c24ae93c7dc570e8dee15121dafe10d5e79b24d2dac9d74e46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_5db7ab0b2b814c24ae93c7dc570e8dee15121dafe10d5e79b24d2dac9d74e46d->leave($__internal_5db7ab0b2b814c24ae93c7dc570e8dee15121dafe10d5e79b24d2dac9d74e46d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
