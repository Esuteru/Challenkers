<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_80967220c0e95b390d2e37ed926bf0250a1d1a21fa243775435056d3a97dfe81 extends Twig_Template
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
        $__internal_ba079315efb1ba305c4004b9a93145fe790d9647ffbdcdde47c1859b3ca44bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba079315efb1ba305c4004b9a93145fe790d9647ffbdcdde47c1859b3ca44bf2->enter($__internal_ba079315efb1ba305c4004b9a93145fe790d9647ffbdcdde47c1859b3ca44bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ba079315efb1ba305c4004b9a93145fe790d9647ffbdcdde47c1859b3ca44bf2->leave($__internal_ba079315efb1ba305c4004b9a93145fe790d9647ffbdcdde47c1859b3ca44bf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
