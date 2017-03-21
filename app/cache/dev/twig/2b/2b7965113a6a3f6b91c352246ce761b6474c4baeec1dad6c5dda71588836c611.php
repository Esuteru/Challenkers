<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_db6160e24523e59ed405e6f936a1bf3f1246c429e47fa1730a15ec01b798423e extends Twig_Template
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
        $__internal_22da1257f190ae15cb5718cb0608dd9265a307f8cf99a4694ee0174c8636271b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22da1257f190ae15cb5718cb0608dd9265a307f8cf99a4694ee0174c8636271b->enter($__internal_22da1257f190ae15cb5718cb0608dd9265a307f8cf99a4694ee0174c8636271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_22da1257f190ae15cb5718cb0608dd9265a307f8cf99a4694ee0174c8636271b->leave($__internal_22da1257f190ae15cb5718cb0608dd9265a307f8cf99a4694ee0174c8636271b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
