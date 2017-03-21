<?php

/* ChallenkersMainBundle:Membres:allMembers.html.twig */
class __TwigTemplate_e969357539f5eee9538418e612fe8fdb3a006f5c40aa6d870c97acce92b5b490 extends Twig_Template
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
        $__internal_d6bbb442a921c30d5ceb4c918ea1255e6ebf47cdde7f08bc376084919db3c554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bbb442a921c30d5ceb4c918ea1255e6ebf47cdde7f08bc376084919db3c554->enter($__internal_d6bbb442a921c30d5ceb4c918ea1255e6ebf47cdde7f08bc376084919db3c554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Membres:allMembers.html.twig"));

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
    LISTE DE TOUS LES JOUEURS
    
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
        
        $__internal_d6bbb442a921c30d5ceb4c918ea1255e6ebf47cdde7f08bc376084919db3c554->leave($__internal_d6bbb442a921c30d5ceb4c918ea1255e6ebf47cdde7f08bc376084919db3c554_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06164c14419406ee4ca4d5443adc8591c01dab771bec2f8c497d390571a762de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06164c14419406ee4ca4d5443adc8591c01dab771bec2f8c497d390571a762de->enter($__internal_06164c14419406ee4ca4d5443adc8591c01dab771bec2f8c497d390571a762de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_06164c14419406ee4ca4d5443adc8591c01dab771bec2f8c497d390571a762de->leave($__internal_06164c14419406ee4ca4d5443adc8591c01dab771bec2f8c497d390571a762de_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Membres:allMembers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 8,  76 => 7,  70 => 6,  58 => 19,  43 => 17,  39 => 16,  31 => 10,  29 => 6,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Challenkers/MainBundle/Resources/views/Default/allMembers.html.twig #}

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
    LISTE DE TOUS LES JOUEURS
    
  <ul>
    {% for membre in membres %}
      <li>Pseudo : {{ membre.getPseudo() }}, Classe : {{ membre.getClasse() }}, Level : {{ membre.getLevel }}, Points de contribution : {{ membre.getPoints }} </li>
    {% endfor %}
  </ul>
    
    

  </body>
</html>", "ChallenkersMainBundle:Membres:allMembers.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Membres/allMembers.html.twig");
    }
}
