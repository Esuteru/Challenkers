<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_1c62ba25a5f7df78b05773ce877cbc94e43795cb5735e947eee1b8f00870c953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37f45997eff854a14c698ab8f7ebbd08ff4bad18246bdbec3f02bce6e47bbcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f45997eff854a14c698ab8f7ebbd08ff4bad18246bdbec3f02bce6e47bbcf9->enter($__internal_37f45997eff854a14c698ab8f7ebbd08ff4bad18246bdbec3f02bce6e47bbcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f45997eff854a14c698ab8f7ebbd08ff4bad18246bdbec3f02bce6e47bbcf9->leave($__internal_37f45997eff854a14c698ab8f7ebbd08ff4bad18246bdbec3f02bce6e47bbcf9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d71f3e99b7ebf34ffbd4beb583499a2e26a3c35d91746a67d19d165f3f62d08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71f3e99b7ebf34ffbd4beb583499a2e26a3c35d91746a67d19d165f3f62d08c->enter($__internal_d71f3e99b7ebf34ffbd4beb583499a2e26a3c35d91746a67d19d165f3f62d08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d71f3e99b7ebf34ffbd4beb583499a2e26a3c35d91746a67d19d165f3f62d08c->leave($__internal_d71f3e99b7ebf34ffbd4beb583499a2e26a3c35d91746a67d19d165f3f62d08c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9edf33522c250f0bde395bb7bd7374e4ba50c1739789a1453b0fef20acfe818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9edf33522c250f0bde395bb7bd7374e4ba50c1739789a1453b0fef20acfe818->enter($__internal_a9edf33522c250f0bde395bb7bd7374e4ba50c1739789a1453b0fef20acfe818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a9edf33522c250f0bde395bb7bd7374e4ba50c1739789a1453b0fef20acfe818->leave($__internal_a9edf33522c250f0bde395bb7bd7374e4ba50c1739789a1453b0fef20acfe818_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb9f5f02a3452f6f018c1cefd89d7593aa25eb11b860fd8f590cd654dd3211f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9f5f02a3452f6f018c1cefd89d7593aa25eb11b860fd8f590cd654dd3211f9->enter($__internal_cb9f5f02a3452f6f018c1cefd89d7593aa25eb11b860fd8f590cd654dd3211f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_cb9f5f02a3452f6f018c1cefd89d7593aa25eb11b860fd8f590cd654dd3211f9->leave($__internal_cb9f5f02a3452f6f018c1cefd89d7593aa25eb11b860fd8f590cd654dd3211f9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_13921085980f7f425fc4f4a5a6a42496e3b0d4f0df09414a3ec757b15b1a6be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13921085980f7f425fc4f4a5a6a42496e3b0d4f0df09414a3ec757b15b1a6be2->enter($__internal_13921085980f7f425fc4f4a5a6a42496e3b0d4f0df09414a3ec757b15b1a6be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_13921085980f7f425fc4f4a5a6a42496e3b0d4f0df09414a3ec757b15b1a6be2->leave($__internal_13921085980f7f425fc4f4a5a6a42496e3b0d4f0df09414a3ec757b15b1a6be2_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle:Configurator:layout.html.twig", "/home/ubuntu/workspace/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
