<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a052b8ba0a9297fb4c78defade59da7a374143c0a8efd337ac0e8a4ecba40826 extends Twig_Template
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
        $__internal_6a9e7745b87814512e3b5034a07f0a66423907c598f3b1bfbb17decc3ef831f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9e7745b87814512e3b5034a07f0a66423907c598f3b1bfbb17decc3ef831f8->enter($__internal_6a9e7745b87814512e3b5034a07f0a66423907c598f3b1bfbb17decc3ef831f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6a9e7745b87814512e3b5034a07f0a66423907c598f3b1bfbb17decc3ef831f8->leave($__internal_6a9e7745b87814512e3b5034a07f0a66423907c598f3b1bfbb17decc3ef831f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
