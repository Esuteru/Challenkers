<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5ac92adc4af5704eb0299d8144a1836a215f6408085e1f61701e45bce2be3060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_513f9a8447c8a6b8ed7c9fcfb67761333f1b79a97bf6469f384169c1a9a7730b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513f9a8447c8a6b8ed7c9fcfb67761333f1b79a97bf6469f384169c1a9a7730b->enter($__internal_513f9a8447c8a6b8ed7c9fcfb67761333f1b79a97bf6469f384169c1a9a7730b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_513f9a8447c8a6b8ed7c9fcfb67761333f1b79a97bf6469f384169c1a9a7730b->leave($__internal_513f9a8447c8a6b8ed7c9fcfb67761333f1b79a97bf6469f384169c1a9a7730b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3eadd04f3631b1b204d45e08ac3c5c18a4414488e95ac62d1fcb7461ac0cd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eadd04f3631b1b204d45e08ac3c5c18a4414488e95ac62d1fcb7461ac0cd45->enter($__internal_f3eadd04f3631b1b204d45e08ac3c5c18a4414488e95ac62d1fcb7461ac0cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3eadd04f3631b1b204d45e08ac3c5c18a4414488e95ac62d1fcb7461ac0cd45->leave($__internal_f3eadd04f3631b1b204d45e08ac3c5c18a4414488e95ac62d1fcb7461ac0cd45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbb7b9c47459380b8eb5e3bea70ca2f8a04b358a94aeda4ba66812cc45ef6d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb7b9c47459380b8eb5e3bea70ca2f8a04b358a94aeda4ba66812cc45ef6d1c->enter($__internal_dbb7b9c47459380b8eb5e3bea70ca2f8a04b358a94aeda4ba66812cc45ef6d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbb7b9c47459380b8eb5e3bea70ca2f8a04b358a94aeda4ba66812cc45ef6d1c->leave($__internal_dbb7b9c47459380b8eb5e3bea70ca2f8a04b358a94aeda4ba66812cc45ef6d1c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec36d9c28b2e0dae7d6e0047af126df218d9057e1262b645f0a763f95a7478ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec36d9c28b2e0dae7d6e0047af126df218d9057e1262b645f0a763f95a7478ef->enter($__internal_ec36d9c28b2e0dae7d6e0047af126df218d9057e1262b645f0a763f95a7478ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec36d9c28b2e0dae7d6e0047af126df218d9057e1262b645f0a763f95a7478ef->leave($__internal_ec36d9c28b2e0dae7d6e0047af126df218d9057e1262b645f0a763f95a7478ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
