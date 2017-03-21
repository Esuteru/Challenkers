<?php

/* base.html.twig */
class __TwigTemplate_588badbf79315d5cfda9b6be131ca34ccc5615910243402f83dddf22bb8cf75e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2434cf411f432333a2932258139a63e811256eacb3b2d16afbef0bdaa9685542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2434cf411f432333a2932258139a63e811256eacb3b2d16afbef0bdaa9685542->enter($__internal_2434cf411f432333a2932258139a63e811256eacb3b2d16afbef0bdaa9685542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2434cf411f432333a2932258139a63e811256eacb3b2d16afbef0bdaa9685542->leave($__internal_2434cf411f432333a2932258139a63e811256eacb3b2d16afbef0bdaa9685542_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2911ccc7da3a92fec17318f5eaf3aa743d4c6c89cae7431970d4976f18f9d429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2911ccc7da3a92fec17318f5eaf3aa743d4c6c89cae7431970d4976f18f9d429->enter($__internal_2911ccc7da3a92fec17318f5eaf3aa743d4c6c89cae7431970d4976f18f9d429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2911ccc7da3a92fec17318f5eaf3aa743d4c6c89cae7431970d4976f18f9d429->leave($__internal_2911ccc7da3a92fec17318f5eaf3aa743d4c6c89cae7431970d4976f18f9d429_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c0e39a35a12db1fc1718a901c5e6ef83c0f4aa56d73ff4b6368b05ffaf0119f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0e39a35a12db1fc1718a901c5e6ef83c0f4aa56d73ff4b6368b05ffaf0119f->enter($__internal_9c0e39a35a12db1fc1718a901c5e6ef83c0f4aa56d73ff4b6368b05ffaf0119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c0e39a35a12db1fc1718a901c5e6ef83c0f4aa56d73ff4b6368b05ffaf0119f->leave($__internal_9c0e39a35a12db1fc1718a901c5e6ef83c0f4aa56d73ff4b6368b05ffaf0119f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7563f6a10edf671ffca234444a758c4a1165456981303809372959d17050c862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7563f6a10edf671ffca234444a758c4a1165456981303809372959d17050c862->enter($__internal_7563f6a10edf671ffca234444a758c4a1165456981303809372959d17050c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7563f6a10edf671ffca234444a758c4a1165456981303809372959d17050c862->leave($__internal_7563f6a10edf671ffca234444a758c4a1165456981303809372959d17050c862_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75e9e40f535680e1c9f4c1eda52c594cbe3044dff03ffcdd30aef8536c0be6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e9e40f535680e1c9f4c1eda52c594cbe3044dff03ffcdd30aef8536c0be6dd->enter($__internal_75e9e40f535680e1c9f4c1eda52c594cbe3044dff03ffcdd30aef8536c0be6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_75e9e40f535680e1c9f4c1eda52c594cbe3044dff03ffcdd30aef8536c0be6dd->leave($__internal_75e9e40f535680e1c9f4c1eda52c594cbe3044dff03ffcdd30aef8536c0be6dd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
