<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b79965f4bc14cc24a90f643b5d36c337a23df14b08f9d7194beee45393b5a3d3 extends Twig_Template
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
        $__internal_163a8aa852ccca6fb6dfb2760c2ac83bebabac4c97eeedad1cbc3a9889035438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163a8aa852ccca6fb6dfb2760c2ac83bebabac4c97eeedad1cbc3a9889035438->enter($__internal_163a8aa852ccca6fb6dfb2760c2ac83bebabac4c97eeedad1cbc3a9889035438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_163a8aa852ccca6fb6dfb2760c2ac83bebabac4c97eeedad1cbc3a9889035438->leave($__internal_163a8aa852ccca6fb6dfb2760c2ac83bebabac4c97eeedad1cbc3a9889035438_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
