<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_869ef6e53f88ed9660b3e40009f40193f0819bac40198292f10a57eefe9cfec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae2f5948db732ec885f741e446aad242dc66a2dda0816277f168ffe3af370570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2f5948db732ec885f741e446aad242dc66a2dda0816277f168ffe3af370570->enter($__internal_ae2f5948db732ec885f741e446aad242dc66a2dda0816277f168ffe3af370570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2f5948db732ec885f741e446aad242dc66a2dda0816277f168ffe3af370570->leave($__internal_ae2f5948db732ec885f741e446aad242dc66a2dda0816277f168ffe3af370570_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_237fe790c771d39787447e8c63267669b52579ca7e485a36454d1fcee79fa523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237fe790c771d39787447e8c63267669b52579ca7e485a36454d1fcee79fa523->enter($__internal_237fe790c771d39787447e8c63267669b52579ca7e485a36454d1fcee79fa523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_237fe790c771d39787447e8c63267669b52579ca7e485a36454d1fcee79fa523->leave($__internal_237fe790c771d39787447e8c63267669b52579ca7e485a36454d1fcee79fa523_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_853da76fd422878775d0361961f3d6fb5cdf995d45e8e2ad86c8d990262f49c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853da76fd422878775d0361961f3d6fb5cdf995d45e8e2ad86c8d990262f49c6->enter($__internal_853da76fd422878775d0361961f3d6fb5cdf995d45e8e2ad86c8d990262f49c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_853da76fd422878775d0361961f3d6fb5cdf995d45e8e2ad86c8d990262f49c6->leave($__internal_853da76fd422878775d0361961f3d6fb5cdf995d45e8e2ad86c8d990262f49c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3521d2a025f5b3113ff159869a25c18ac0e908b3f5670c8885ca19aee4d49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3521d2a025f5b3113ff159869a25c18ac0e908b3f5670c8885ca19aee4d49b->enter($__internal_6f3521d2a025f5b3113ff159869a25c18ac0e908b3f5670c8885ca19aee4d49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6f3521d2a025f5b3113ff159869a25c18ac0e908b3f5670c8885ca19aee4d49b->leave($__internal_6f3521d2a025f5b3113ff159869a25c18ac0e908b3f5670c8885ca19aee4d49b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
