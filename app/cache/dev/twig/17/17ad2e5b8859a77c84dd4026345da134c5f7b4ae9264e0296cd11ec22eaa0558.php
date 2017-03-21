<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca7e998797a93a9ac1a0169db6e340b8a6771ded54ebe4c67f45d4a122bf80e4 extends Twig_Template
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
        $__internal_4aac9467e5b9a37c1c49a0a2a30d13d0fcac6b6121065bdd9bcd70331b5225d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aac9467e5b9a37c1c49a0a2a30d13d0fcac6b6121065bdd9bcd70331b5225d4->enter($__internal_4aac9467e5b9a37c1c49a0a2a30d13d0fcac6b6121065bdd9bcd70331b5225d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4aac9467e5b9a37c1c49a0a2a30d13d0fcac6b6121065bdd9bcd70331b5225d4->leave($__internal_4aac9467e5b9a37c1c49a0a2a30d13d0fcac6b6121065bdd9bcd70331b5225d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
