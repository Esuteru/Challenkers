<?php

/* ChallenkersMainBundle:Classement:index.html.twig */
class __TwigTemplate_3b610ac0f18d9154deb8dbce79ff8b22e168b0232b0b619b6f5ff07d36dbb88c extends Twig_Template
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
        $__internal_a64febe8227450ce2856f13c4018bf7e6d616b733a583e383687d953c2493c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64febe8227450ce2856f13c4018bf7e6d616b733a583e383687d953c2493c8c->enter($__internal_a64febe8227450ce2856f13c4018bf7e6d616b733a583e383687d953c2493c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Classement:index.html.twig"));

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
        echo " par points de contribution
    
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
        
        $__internal_a64febe8227450ce2856f13c4018bf7e6d616b733a583e383687d953c2493c8c->leave($__internal_a64febe8227450ce2856f13c4018bf7e6d616b733a583e383687d953c2493c8c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff929023a003b50d496b156f8b671dc2765a3c38c2e75863e272f6695f048134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff929023a003b50d496b156f8b671dc2765a3c38c2e75863e272f6695f048134->enter($__internal_ff929023a003b50d496b156f8b671dc2765a3c38c2e75863e272f6695f048134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_ff929023a003b50d496b156f8b671dc2765a3c38c2e75863e272f6695f048134->leave($__internal_ff929023a003b50d496b156f8b671dc2765a3c38c2e75863e272f6695f048134_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Classement:index.html.twig";
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
    CLASSEMENT DES MEMBRES DE LA GUILDE {{ nomGuilde }} par points de contribution
    
  <ul>
    {% for membre in membres %}
      <li>Pseudo : {{ membre.getPseudo() }}, Classe : {{ membre.getClasse() }}, Level : {{ membre.getLevel }}, Points de contribution : {{ membre.getPoints }} </li>
    {% endfor %}
  </ul>
    
    

  </body>
</html>", "ChallenkersMainBundle:Classement:index.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Classement/index.html.twig");
    }
}
