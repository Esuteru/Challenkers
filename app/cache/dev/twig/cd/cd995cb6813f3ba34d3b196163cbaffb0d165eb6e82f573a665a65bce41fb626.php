<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7347a84d2a6d98262757ae75c2f70a1263322dd4c836a09b4457a90097665e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_529413855a80a3769320de2424d1f08300746ba26ffbd17328a3724481b420ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529413855a80a3769320de2424d1f08300746ba26ffbd17328a3724481b420ad->enter($__internal_529413855a80a3769320de2424d1f08300746ba26ffbd17328a3724481b420ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529413855a80a3769320de2424d1f08300746ba26ffbd17328a3724481b420ad->leave($__internal_529413855a80a3769320de2424d1f08300746ba26ffbd17328a3724481b420ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee4aad585ef24db7ada1e4b4647d463fbce7360440ad97b8fe14569fe91b478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4aad585ef24db7ada1e4b4647d463fbce7360440ad97b8fe14569fe91b478a->enter($__internal_ee4aad585ef24db7ada1e4b4647d463fbce7360440ad97b8fe14569fe91b478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ee4aad585ef24db7ada1e4b4647d463fbce7360440ad97b8fe14569fe91b478a->leave($__internal_ee4aad585ef24db7ada1e4b4647d463fbce7360440ad97b8fe14569fe91b478a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9bf5bc24c4825f34438f84f662b1ba7fe86a9aee0b3f8c241810d770246e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9bf5bc24c4825f34438f84f662b1ba7fe86a9aee0b3f8c241810d770246e9e->enter($__internal_be9bf5bc24c4825f34438f84f662b1ba7fe86a9aee0b3f8c241810d770246e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_be9bf5bc24c4825f34438f84f662b1ba7fe86a9aee0b3f8c241810d770246e9e->leave($__internal_be9bf5bc24c4825f34438f84f662b1ba7fe86a9aee0b3f8c241810d770246e9e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
