<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_10d31b3f3869426f565e764fda3aee92c4a4667272d4863901b55cc6f051ab63 extends Twig_Template
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
        $__internal_1a2ccf2696905bcb9c60268ecb247db55343d90b8b196a4348dc960e49fe6f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2ccf2696905bcb9c60268ecb247db55343d90b8b196a4348dc960e49fe6f0c->enter($__internal_1a2ccf2696905bcb9c60268ecb247db55343d90b8b196a4348dc960e49fe6f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1a2ccf2696905bcb9c60268ecb247db55343d90b8b196a4348dc960e49fe6f0c->leave($__internal_1a2ccf2696905bcb9c60268ecb247db55343d90b8b196a4348dc960e49fe6f0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
