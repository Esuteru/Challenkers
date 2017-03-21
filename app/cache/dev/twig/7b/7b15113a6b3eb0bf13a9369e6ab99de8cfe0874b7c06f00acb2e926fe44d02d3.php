<?php

/* ChallenkersMainBundle:Classement:level.html.twig */
class __TwigTemplate_2b9ab3ce7ae85a1228eaa06f77289709254bfa358cda0dd5fd4e7cf3533a564d extends Twig_Template
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
        $__internal_1f58de09e759c06a4a7bfce7f1bf5f4dc2fdf7fbea27d51710030ecfa8404d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f58de09e759c06a4a7bfce7f1bf5f4dc2fdf7fbea27d51710030ecfa8404d57->enter($__internal_1f58de09e759c06a4a7bfce7f1bf5f4dc2fdf7fbea27d51710030ecfa8404d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Classement:level.html.twig"));

        // line 2
        echo "
<html>
  <head>
        <title>Main Page</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "         <meta charset=\"UTF-8\">
    </head>
  <body style=\"color:white;\">
    CLASSEMENT DES MEMBRES DE LA GUILDE ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nomGuilde"]) ? $context["nomGuilde"] : $this->getContext($context, "nomGuilde")), "html", null, true);
        echo " par level
    
  <ul>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 17
            echo "      <li>Pseudo : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPseudo", array(), "method"), "html", null, true);
            echo ", Classe : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getClasse", array(), "method"), "html", null, true);
            echo ", Level : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getLevel", array()), "html", null, true);
            echo ", Points de contribution : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPoints", array()), "html", null, true);
            echo " </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </ul>
    
    

  </body>
</html>";
        
        $__internal_1f58de09e759c06a4a7bfce7f1bf5f4dc2fdf7fbea27d51710030ecfa8404d57->leave($__internal_1f58de09e759c06a4a7bfce7f1bf5f4dc2fdf7fbea27d51710030ecfa8404d57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8565254a8b52e5d8f94e834fd84829b1a28bc62c7f7603ca2c1640490c652ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8565254a8b52e5d8f94e834fd84829b1a28bc62c7f7603ca2c1640490c652ff->enter($__internal_f8565254a8b52e5d8f94e834fd84829b1a28bc62c7f7603ca2c1640490c652ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_f8565254a8b52e5d8f94e834fd84829b1a28bc62c7f7603ca2c1640490c652ff->leave($__internal_f8565254a8b52e5d8f94e834fd84829b1a28bc62c7f7603ca2c1640490c652ff_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Classement:level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 8,  79 => 7,  73 => 6,  61 => 19,  46 => 17,  42 => 16,  36 => 13,  31 => 10,  29 => 6,  23 => 2,);
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
        <title>Main Page</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"{{ asset('bundles/framework/css/style.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
    </head>
  <body style=\"color:white;\">
    CLASSEMENT DES MEMBRES DE LA GUILDE {{ nomGuilde }} par level
    
  <ul>
    {% for membre in membres %}
      <li>Pseudo : {{ membre.getPseudo() }}, Classe : {{ membre.getClasse() }}, Level : {{ membre.getLevel }}, Points de contribution : {{ membre.getPoints }} </li>
    {% endfor %}
  </ul>
    
    

  </body>
</html>", "ChallenkersMainBundle:Classement:level.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Classement/level.html.twig");
    }
}
