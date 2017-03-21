<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_43e2fc56d54cbc5adce4aaf63f234e1c75cc7101b9d9b9ce26c8f7935f96034f extends Twig_Template
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
        $__internal_57979721b887d212878cb778fbb90be307ddd69f81ee0e7120e9a77cc85b0a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57979721b887d212878cb778fbb90be307ddd69f81ee0e7120e9a77cc85b0a4c->enter($__internal_57979721b887d212878cb778fbb90be307ddd69f81ee0e7120e9a77cc85b0a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_57979721b887d212878cb778fbb90be307ddd69f81ee0e7120e9a77cc85b0a4c->leave($__internal_57979721b887d212878cb778fbb90be307ddd69f81ee0e7120e9a77cc85b0a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
