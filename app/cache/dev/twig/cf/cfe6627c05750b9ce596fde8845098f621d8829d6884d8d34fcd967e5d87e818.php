<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_32a526430127f4728b75684404c257945ae256429c3c31dd020616ed14cc9ad8 extends Twig_Template
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
        $__internal_10dfc89cef48dd883cb91b0ffbf538f6ead3752e8ef713c83a0a41f5b8a3e194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dfc89cef48dd883cb91b0ffbf538f6ead3752e8ef713c83a0a41f5b8a3e194->enter($__internal_10dfc89cef48dd883cb91b0ffbf538f6ead3752e8ef713c83a0a41f5b8a3e194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_10dfc89cef48dd883cb91b0ffbf538f6ead3752e8ef713c83a0a41f5b8a3e194->leave($__internal_10dfc89cef48dd883cb91b0ffbf538f6ead3752e8ef713c83a0a41f5b8a3e194_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
