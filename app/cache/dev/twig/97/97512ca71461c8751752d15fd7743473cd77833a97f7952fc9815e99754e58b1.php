<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_3b41ed51f13858043503a6755f41529f29f3ddd2d1d15c1a8742d786124bfe87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:check.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2fe58c8a64896592e7c8164bebf2f62e92e2f67684e6943f4e14f985d0ed595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fe58c8a64896592e7c8164bebf2f62e92e2f67684e6943f4e14f985d0ed595->enter($__internal_e2fe58c8a64896592e7c8164bebf2f62e92e2f67684e6943f4e14f985d0ed595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2fe58c8a64896592e7c8164bebf2f62e92e2f67684e6943f4e14f985d0ed595->leave($__internal_e2fe58c8a64896592e7c8164bebf2f62e92e2f67684e6943f4e14f985d0ed595_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed2b0de36c1964d2ee41fe09e45f1f8533cfc23330b37a997512ed1e62a0da32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2b0de36c1964d2ee41fe09e45f1f8533cfc23330b37a997512ed1e62a0da32->enter($__internal_ed2b0de36c1964d2ee41fe09e45f1f8533cfc23330b37a997512ed1e62a0da32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ( !twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
        
        $__internal_ed2b0de36c1964d2ee41fe09e45f1f8533cfc23330b37a997512ed1e62a0da32->leave($__internal_ed2b0de36c1964d2ee41fe09e45f1f8533cfc23330b37a997512ed1e62a0da32_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  121 => 39,  119 => 38,  116 => 37,  110 => 33,  101 => 31,  97 => 30,  91 => 26,  87 => 24,  83 => 22,  81 => 21,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  58 => 12,  54 => 11,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block content %}
    {% if majors|length %}
        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>{{ majors|length }}</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            {% for message in majors %}
                <li>{{ message }}</li>
            {% endfor %}
        </ol>
    {% endif %}

    {% if minors|length %}
        <h1>Some Recommendations</h1>

        <p>
            {% if majors|length %}
            Additionally, we
            {% else %}
            We
            {% endif %}
            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                {% for message in minors %}
                    <li>{{ message }}</li>
                {% endfor %}
            </ol>
        </p>

    {% endif %}

    {% if not majors|length %}
        <ul class=\"symfony_list\">
            <li><a href=\"{{ url }}\">Configure your Symfony Application online</a></li>
        </ul>
    {% endif %}
{% endblock %}
", "SensioDistributionBundle:Configurator:check.html.twig", "/home/ubuntu/workspace/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/check.html.twig");
    }
}
