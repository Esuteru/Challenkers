<?php

/* ChallenkersMainBundle:Membres:allMembers.html.twig */
class __TwigTemplate_413d974de31ce6e4fa3a1fa7242fa23f9e46ac57ee314d590184cbfa7a2ef2ed extends Twig_Template
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
        $__internal_1322e83116519eb5fd3304d3e26a622057effce98099e7e4236d4d5955639feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1322e83116519eb5fd3304d3e26a622057effce98099e7e4236d4d5955639feb->enter($__internal_1322e83116519eb5fd3304d3e26a622057effce98099e7e4236d4d5955639feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Membres:allMembers.html.twig"));

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
    
  <input type=\"checkbox\" id=\"menu\" name=\"menu\" class=\"menu-checkbox\">
  <div class=\"menu\">
    <label class=\"menu-toggle\" for=\"menu\"><span>Toggle</span></label>
    <ul>
      <li style=\" padding-top: 50px; \"><a href=\"../app_dev.php\"> <strong>Retour à la liste des serveurs </strong></a></li>
    </ul>
  </div>
    
    <div class=\"table-title\">
      <h3>Liste de tous les joueurs</h3>
    </div>
    <table class=\"table-fill\">
    <thead>
    <tr>
    
    <th class=\"text-left\">Pseudo</th>
    <th class=\"text-left\">Classe</th>
    <th class=\"text-left\">Level</th>
    <th class=\"text-left\">Points</th>
  
    </tr>
    </thead>
    <tbody class=\"table-hover\">
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 38
            echo "    <tr>
      
      <td class=\"text-left\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPseudo", array(), "method"), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getClasse", array(), "method"), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getLevel", array()), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPoints", array()), "html", null, true);
            echo "</td>
    </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
  </tbody>
  </table>
  

    

  </body>
</html>";
        
        $__internal_1322e83116519eb5fd3304d3e26a622057effce98099e7e4236d4d5955639feb->leave($__internal_1322e83116519eb5fd3304d3e26a622057effce98099e7e4236d4d5955639feb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38b718f00b87269ac060dab35825191a3377dbca1ebcbaba27e39381d70c845c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b718f00b87269ac060dab35825191a3377dbca1ebcbaba27e39381d70c845c->enter($__internal_38b718f00b87269ac060dab35825191a3377dbca1ebcbaba27e39381d70c845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style-tableau.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_38b718f00b87269ac060dab35825191a3377dbca1ebcbaba27e39381d70c845c->leave($__internal_38b718f00b87269ac060dab35825191a3377dbca1ebcbaba27e39381d70c845c_prof);

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
        return array (  113 => 8,  110 => 7,  104 => 6,  89 => 46,  80 => 43,  76 => 42,  72 => 41,  68 => 40,  64 => 38,  60 => 37,  31 => 10,  29 => 6,  23 => 2,);
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
        <title>Challenkers</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"{{ asset('bundles/framework/css/style-tableau.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
    </head>
  <body>
    
  <input type=\"checkbox\" id=\"menu\" name=\"menu\" class=\"menu-checkbox\">
  <div class=\"menu\">
    <label class=\"menu-toggle\" for=\"menu\"><span>Toggle</span></label>
    <ul>
      <li style=\" padding-top: 50px; \"><a href=\"../app_dev.php\"> <strong>Retour à la liste des serveurs </strong></a></li>
    </ul>
  </div>
    
    <div class=\"table-title\">
      <h3>Liste de tous les joueurs</h3>
    </div>
    <table class=\"table-fill\">
    <thead>
    <tr>
    
    <th class=\"text-left\">Pseudo</th>
    <th class=\"text-left\">Classe</th>
    <th class=\"text-left\">Level</th>
    <th class=\"text-left\">Points</th>
  
    </tr>
    </thead>
    <tbody class=\"table-hover\">
      {% for membre in membres %}
    <tr>
      
      <td class=\"text-left\">{{ membre.getPseudo() }}</td>
      <td class=\"text-left\">{{ membre.getClasse() }}</td>
      <td class=\"text-left\">{{ membre.getLevel }}</td>
      <td class=\"text-left\">{{ membre.getPoints }}</td>
    </tr>
      {% endfor %}

  </tbody>
  </table>
  

    

  </body>
</html>", "ChallenkersMainBundle:Membres:allMembers.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Membres/allMembers.html.twig");
    }
}
