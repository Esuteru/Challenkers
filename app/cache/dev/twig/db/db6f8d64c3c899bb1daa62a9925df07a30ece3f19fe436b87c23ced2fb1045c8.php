<?php

/* ChallenkersMainBundle:Guildes:index.html.twig */
class __TwigTemplate_d42f3c6ca359536f8c38eaae05ddc76d8e19b01a47d38194eaa65aa683f61d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e4b8aff30f79407dd1ea06fcd9da1603c1710e01d8d7c4f40549bbef58a181a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4b8aff30f79407dd1ea06fcd9da1603c1710e01d8d7c4f40549bbef58a181a->enter($__internal_0e4b8aff30f79407dd1ea06fcd9da1603c1710e01d8d7c4f40549bbef58a181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Guildes:index.html.twig"));

        // line 2
        echo "
<html>
  <head>
        <title>Challenkers</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "         <meta charset=\"UTF-8\">
    </head>
  <body>
    
    <h1>
      <div class=\"animated fadeInLeft\">BIENVENUE</div><div class=\"animated fadeInRight\">SUR LE SERVEUR</div>
    </h1>
    <p class=\"animated fadeInUp delay-1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serveur"]) ? $context["serveur"] : $this->getContext($context, "serveur")), "getNomServeur", array(), "method"), "html", null, true);
        echo " </p>

    <input type=\"checkbox\" id=\"op\"></input>
<div class=\"lower\" style=\"margin-top:30px;\">
  <label for=\"op\">Liste des guildes</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guildes"]) ? $context["guildes"] : $this->getContext($context, "guildes")));
        foreach ($context['_seq'] as $context["_key"] => $context["guilde"]) {
            // line 28
            echo "            <li><a href=\"../guild-info/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guilde"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guilde"], "getNomGuilde", array(), "method"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guilde'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</ul>
\t\t\t</nav>
</div>

  </body>
</html>";
        
        $__internal_0e4b8aff30f79407dd1ea06fcd9da1603c1710e01d8d7c4f40549bbef58a181a->leave($__internal_0e4b8aff30f79407dd1ea06fcd9da1603c1710e01d8d7c4f40549bbef58a181a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37735e00095a22686490494db56da9a64d191e5d5764ef62211ed63793689175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37735e00095a22686490494db56da9a64d191e5d5764ef62211ed63793689175->enter($__internal_37735e00095a22686490494db56da9a64d191e5d5764ef62211ed63793689175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_37735e00095a22686490494db56da9a64d191e5d5764ef62211ed63793689175->leave($__internal_37735e00095a22686490494db56da9a64d191e5d5764ef62211ed63793689175_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Guildes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 8,  86 => 7,  80 => 6,  68 => 30,  57 => 28,  53 => 27,  40 => 17,  31 => 10,  29 => 6,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Challenkers/MainBundle/Resources/views/Default/index.html.twig #}

<html>
  <head>
        <title>Challenkers</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"{{ asset('bundles/framework/css/style.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
    </head>
  <body>
    
    <h1>
      <div class=\"animated fadeInLeft\">BIENVENUE</div><div class=\"animated fadeInRight\">SUR LE SERVEUR</div>
    </h1>
    <p class=\"animated fadeInUp delay-1\">{{ serveur.getNomServeur() }} </p>

    <input type=\"checkbox\" id=\"op\"></input>
<div class=\"lower\" style=\"margin-top:30px;\">
  <label for=\"op\">Liste des guildes</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t{% for guilde in guildes %}
            <li><a href=\"../guild-info/{{guilde.getId()}}\">{{ guilde.getNomGuilde() }}</a></li>
          {% endfor %}
\t\t\t\t</ul>
\t\t\t</nav>
</div>

  </body>
</html>", "ChallenkersMainBundle:Guildes:index.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Guildes/index.html.twig");
    }
}
