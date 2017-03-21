<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e3518197a439225db1e8b2fe07ad77c83b32158afc6ed151639885b15c61a43c extends Twig_Template
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
        $__internal_b55845abf8e5b8ea0f0f097d7d0152aa4983a6d683faa94a85b5cec8d1c804ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55845abf8e5b8ea0f0f097d7d0152aa4983a6d683faa94a85b5cec8d1c804ee->enter($__internal_b55845abf8e5b8ea0f0f097d7d0152aa4983a6d683faa94a85b5cec8d1c804ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b55845abf8e5b8ea0f0f097d7d0152aa4983a6d683faa94a85b5cec8d1c804ee->leave($__internal_b55845abf8e5b8ea0f0f097d7d0152aa4983a6d683faa94a85b5cec8d1c804ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
