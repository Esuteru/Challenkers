<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa03e9e4bb75e7f2b627d6cfb18dd5f533ecc4cd4f4140ad242f3416b9f178ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9def5caa52d5f3b5a24ba85987e75e9a82e034ccba981701352656940643507a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9def5caa52d5f3b5a24ba85987e75e9a82e034ccba981701352656940643507a->enter($__internal_9def5caa52d5f3b5a24ba85987e75e9a82e034ccba981701352656940643507a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9def5caa52d5f3b5a24ba85987e75e9a82e034ccba981701352656940643507a->leave($__internal_9def5caa52d5f3b5a24ba85987e75e9a82e034ccba981701352656940643507a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c1c52f352b6e9339f25b86a4155d10e81469f6b0a47e87d61fb7124f1970130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1c52f352b6e9339f25b86a4155d10e81469f6b0a47e87d61fb7124f1970130->enter($__internal_8c1c52f352b6e9339f25b86a4155d10e81469f6b0a47e87d61fb7124f1970130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c1c52f352b6e9339f25b86a4155d10e81469f6b0a47e87d61fb7124f1970130->leave($__internal_8c1c52f352b6e9339f25b86a4155d10e81469f6b0a47e87d61fb7124f1970130_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca910e7a0fb9628e0315dab7f3f23e71e932982d28ca1f7254a1142f1a600989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca910e7a0fb9628e0315dab7f3f23e71e932982d28ca1f7254a1142f1a600989->enter($__internal_ca910e7a0fb9628e0315dab7f3f23e71e932982d28ca1f7254a1142f1a600989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca910e7a0fb9628e0315dab7f3f23e71e932982d28ca1f7254a1142f1a600989->leave($__internal_ca910e7a0fb9628e0315dab7f3f23e71e932982d28ca1f7254a1142f1a600989_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d738e905c3c0564dac925c00614ce927d31c8965350861a3e899dc41c5b9e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d738e905c3c0564dac925c00614ce927d31c8965350861a3e899dc41c5b9e41->enter($__internal_1d738e905c3c0564dac925c00614ce927d31c8965350861a3e899dc41c5b9e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1d738e905c3c0564dac925c00614ce927d31c8965350861a3e899dc41c5b9e41->leave($__internal_1d738e905c3c0564dac925c00614ce927d31c8965350861a3e899dc41c5b9e41_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
