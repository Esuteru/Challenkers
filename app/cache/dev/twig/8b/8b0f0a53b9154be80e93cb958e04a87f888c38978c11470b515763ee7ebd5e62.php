<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a54a24dee81a804be19b0ba28d686bd1473259d45e9696107902a252684db37b extends Twig_Template
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
        $__internal_7b0c79d514a3bfe6d64d0fc6c1c887b537ad5ee10df6d4dbec7e358017d049c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0c79d514a3bfe6d64d0fc6c1c887b537ad5ee10df6d4dbec7e358017d049c9->enter($__internal_7b0c79d514a3bfe6d64d0fc6c1c887b537ad5ee10df6d4dbec7e358017d049c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7b0c79d514a3bfe6d64d0fc6c1c887b537ad5ee10df6d4dbec7e358017d049c9->leave($__internal_7b0c79d514a3bfe6d64d0fc6c1c887b537ad5ee10df6d4dbec7e358017d049c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
