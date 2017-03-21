<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_43cc0e1a00bcc62be58b856aa11ae7c9fd4e01b486913fbe456fa9d86a31e631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c6754e0bc2d369e7f3dc38e97703da5db4d4f56f115282d70a41fd1eda74c476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6754e0bc2d369e7f3dc38e97703da5db4d4f56f115282d70a41fd1eda74c476->enter($__internal_c6754e0bc2d369e7f3dc38e97703da5db4d4f56f115282d70a41fd1eda74c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6754e0bc2d369e7f3dc38e97703da5db4d4f56f115282d70a41fd1eda74c476->leave($__internal_c6754e0bc2d369e7f3dc38e97703da5db4d4f56f115282d70a41fd1eda74c476_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cde814dc37e0e8a46ba3ad36f66ee13444cfba0b1235ec3318c2e3d7c5afe421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde814dc37e0e8a46ba3ad36f66ee13444cfba0b1235ec3318c2e3d7c5afe421->enter($__internal_cde814dc37e0e8a46ba3ad36f66ee13444cfba0b1235ec3318c2e3d7c5afe421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cde814dc37e0e8a46ba3ad36f66ee13444cfba0b1235ec3318c2e3d7c5afe421->leave($__internal_cde814dc37e0e8a46ba3ad36f66ee13444cfba0b1235ec3318c2e3d7c5afe421_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_859a91bd0d1b62bff9d56fba8d026a8317e16431d7f72fff6072853a501c1c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859a91bd0d1b62bff9d56fba8d026a8317e16431d7f72fff6072853a501c1c28->enter($__internal_859a91bd0d1b62bff9d56fba8d026a8317e16431d7f72fff6072853a501c1c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_859a91bd0d1b62bff9d56fba8d026a8317e16431d7f72fff6072853a501c1c28->leave($__internal_859a91bd0d1b62bff9d56fba8d026a8317e16431d7f72fff6072853a501c1c28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22e3bbef42565d11e195f2d5a930705fb5b4017ce7e57cf0e64a5beaaed17889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e3bbef42565d11e195f2d5a930705fb5b4017ce7e57cf0e64a5beaaed17889->enter($__internal_22e3bbef42565d11e195f2d5a930705fb5b4017ce7e57cf0e64a5beaaed17889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22e3bbef42565d11e195f2d5a930705fb5b4017ce7e57cf0e64a5beaaed17889->leave($__internal_22e3bbef42565d11e195f2d5a930705fb5b4017ce7e57cf0e64a5beaaed17889_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
