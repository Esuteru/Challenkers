<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9f52607c932d602252017a621e231cfc03f84a5924c3e639665a48dfab00b5c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_162a1c8e6c921014e431c29dc3ee559f0697bdbbc2e079f68d88f8fa6894731e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162a1c8e6c921014e431c29dc3ee559f0697bdbbc2e079f68d88f8fa6894731e->enter($__internal_162a1c8e6c921014e431c29dc3ee559f0697bdbbc2e079f68d88f8fa6894731e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_162a1c8e6c921014e431c29dc3ee559f0697bdbbc2e079f68d88f8fa6894731e->leave($__internal_162a1c8e6c921014e431c29dc3ee559f0697bdbbc2e079f68d88f8fa6894731e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f20267bd48f44d1a9b20cf99af7ef98363c4a6edc9a559931957a8e4d7cef967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20267bd48f44d1a9b20cf99af7ef98363c4a6edc9a559931957a8e4d7cef967->enter($__internal_f20267bd48f44d1a9b20cf99af7ef98363c4a6edc9a559931957a8e4d7cef967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f20267bd48f44d1a9b20cf99af7ef98363c4a6edc9a559931957a8e4d7cef967->leave($__internal_f20267bd48f44d1a9b20cf99af7ef98363c4a6edc9a559931957a8e4d7cef967_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
