<?php

/* ChallenkersMainBundle:Guildes:info.html.twig */
class __TwigTemplate_eed0fde8bd41ce908d59d042fd148ebc38e30f2b81742644be7c307867b9b95a extends Twig_Template
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
        $__internal_aa00267d6b89bd3f5a01cc0b7910b02a270914c7f6148422c01f902ca01cb152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa00267d6b89bd3f5a01cc0b7910b02a270914c7f6148422c01f902ca01cb152->enter($__internal_aa00267d6b89bd3f5a01cc0b7910b02a270914c7f6148422c01f902ca01cb152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Guildes:info.html.twig"));

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
    
    <!--Recherche du maître de guilde NE MARCHE PAS--> 
    ";
        // line 16
        echo "      ";
        // line 17
        echo "        ";
        // line 18
        echo "     ";
        // line 19
        echo "    ";
        // line 20
        echo "    

<!-- Menu onglet -->
<div id=\"wrapper\">
  <div id=\"info\">
    <div id=\"info-content\" >
      <h1 style=\"background-color : black;\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guilde"]) ? $context["guilde"] : $this->getContext($context, "guilde")), "getNomGuilde", array()), "html", null, true);
        echo " <strong>Guild</strong></h1>
      
    </div>
  </div>

  <input type=\"checkbox\" id=\"menu\" name=\"menu\" class=\"menu-checkbox\">
  <div class=\"menu\">
    <label class=\"menu-toggle\" for=\"menu\"><span>Toggle</span></label>
    <ul>
      <li style=\" padding-top: 50px; \"><a href=\"..\"> <strong>Retour à la liste des serveurs </strong></a></li>
      <li><a href=\"../guild-members/";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\">Liste des membres</a></li>
      <li><a href=\"../classement/";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\">Membres les plus méritants</a></li>
      <li><a href=\"../classement-level/";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\">Membres les plus forts</a></li>
      
      <li>
        <label for=\"menu-4\">Classement par Rang</label>
        <input type=\"checkbox\" id=\"menu-4\" name=\"menu-4\" class=\"menu-checkbox\">
        <div class=\"menu\">
          <label class=\"menu-toggle\" for=\"menu-4\"><span>Toggle</span></label>
          <ul style=\"padding-left : 15px; padding-top : 50px;\">
            <li>
              <a href=\"../classement-rankS/";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> S (+ de 700pts)</a>
            </li>
            <li>
              <a href=\"../classement-rankA/";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> A (entre 500 et 699)</a>
            </li>
            <li>
              <a href=\"../classement-rankB/";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> B (entre 300 et 499)</a>
            </li>
            <li>
              <a href=\"../classement-rankC/";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> C (- de 300pts)</a>
            </li>
          </ul>
        </div>
      </li>
      
      <li>
        <label for=\"menu-5\">Classement par Classe</label>
        <input type=\"checkbox\" id=\"menu-5\" name=\"menu-5\" class=\"menu-checkbox\">
        <div class=\"menu\">
          <label class=\"menu-toggle\" for=\"menu-5\"><span>Toggle</span></label>
          <ul style=\"padding-left : 15px; padding-top : 50px;\">
            <li>
              <a href=\"../classement-classeArcher/";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Archer</a>
            </li>
            <li>
              <a href=\"../classement-classeChevalier/";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Chevalier</a>
            </li>
            <li>
              <a href=\"../classement-classeHeal/";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Heal</a>
            </li>
            <li>
              <a href=\"../classement-classeMage/";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Mage</a>
            </li>
            <li>
              <a href=\"../classement-classeTank/";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Tank</a>
            </li>
            
          </ul>
        </div>
      </li> 
    </ul>
      
  </div>
  
  ";
        // line 91
        $context["totalPoints"] = 0;
        // line 92
        echo "  ";
        $context["nbMembres"] = 0;
        // line 93
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 94
            echo "     ";
            $context["totalPoints"] = ((isset($context["totalPoints"]) ? $context["totalPoints"] : $this->getContext($context, "totalPoints")) + $this->getAttribute($context["membre"], "getPoints", array(), "method"));
            // line 95
            echo "     ";
            $context["nbMembres"] = ((isset($context["nbMembres"]) ? $context["nbMembres"] : $this->getContext($context, "nbMembres")) + 1);
            // line 96
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  
  ";
        // line 98
        $context["moyenne"] = ((isset($context["totalPoints"]) ? $context["totalPoints"] : $this->getContext($context, "totalPoints")) / (isset($context["nbMembres"]) ? $context["nbMembres"] : $this->getContext($context, "nbMembres")));
        // line 99
        echo "  

<div id=\"box1\" class=\"box blurred-bg tinted\">
  <div class=\"content\">
    <h1>Informations</h1>
\t    <h2>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guilde"]) ? $context["guilde"] : $this->getContext($context, "guilde")), "getNomGuilde", array()), "html", null, true);
        echo "</h2>
    <p class=\"related\">Total des points : ";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["totalPoints"]) ? $context["totalPoints"] : $this->getContext($context, "totalPoints")), "html", null, true);
        echo "</p>
    <p class=\"related\">Nombre de membres : ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["nbMembres"]) ? $context["nbMembres"] : $this->getContext($context, "nbMembres")), "html", null, true);
        echo "</p>
    <p class=\"related\">Moyenne de points par membre : ";
        // line 107
        echo twig_escape_filter($this->env, twig_round((isset($context["moyenne"]) ? $context["moyenne"] : $this->getContext($context, "moyenne")), 1, "floor"), "html", null, true);
        echo "</p>
  </div>
</div>


  </body>
</html>";
        
        $__internal_aa00267d6b89bd3f5a01cc0b7910b02a270914c7f6148422c01f902ca01cb152->leave($__internal_aa00267d6b89bd3f5a01cc0b7910b02a270914c7f6148422c01f902ca01cb152_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a168955eeaa140aace85e021868cbc55bdbbff32b7b2c42957a86653e40d7d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a168955eeaa140aace85e021868cbc55bdbbff32b7b2c42957a86653e40d7d2d->enter($__internal_a168955eeaa140aace85e021868cbc55bdbbff32b7b2c42957a86653e40d7d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style-info.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_a168955eeaa140aace85e021868cbc55bdbbff32b7b2c42957a86653e40d7d2d->leave($__internal_a168955eeaa140aace85e021868cbc55bdbbff32b7b2c42957a86653e40d7d2d_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Guildes:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 8,  224 => 7,  218 => 6,  204 => 107,  200 => 106,  196 => 105,  192 => 104,  185 => 99,  183 => 98,  180 => 97,  174 => 96,  171 => 95,  168 => 94,  163 => 93,  160 => 92,  158 => 91,  145 => 81,  139 => 78,  133 => 75,  127 => 72,  121 => 69,  105 => 56,  99 => 53,  93 => 50,  87 => 47,  75 => 38,  71 => 37,  67 => 36,  54 => 26,  46 => 20,  44 => 19,  42 => 18,  40 => 17,  38 => 16,  31 => 10,  29 => 6,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Challenkers/MainBundle/Resources/views/Guildes/info.html.twig #}

<html>
  <head>
        <title>Challenkers</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"{{ asset('bundles/framework/css/style-info.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
    </head>
  <body>
    
    <!--Recherche du maître de guilde NE MARCHE PAS--> 
    {#{% for membre in membres %}#}
      {#{% if membre.getId() == {{guilde.getIdMaitreGuilde}}%}#}
        {#{{ membre.getPseudo }}#}
     {# {% endif %}#}
    {#{% endfor %}#}
    

<!-- Menu onglet -->
<div id=\"wrapper\">
  <div id=\"info\">
    <div id=\"info-content\" >
      <h1 style=\"background-color : black;\">{{ guilde.getNomGuilde }} <strong>Guild</strong></h1>
      
    </div>
  </div>

  <input type=\"checkbox\" id=\"menu\" name=\"menu\" class=\"menu-checkbox\">
  <div class=\"menu\">
    <label class=\"menu-toggle\" for=\"menu\"><span>Toggle</span></label>
    <ul>
      <li style=\" padding-top: 50px; \"><a href=\"..\"> <strong>Retour à la liste des serveurs </strong></a></li>
      <li><a href=\"../guild-members/{{ idGuilde }}\">Liste des membres</a></li>
      <li><a href=\"../classement/{{ idGuilde }}\">Membres les plus méritants</a></li>
      <li><a href=\"../classement-level/{{ idGuilde }}\">Membres les plus forts</a></li>
      
      <li>
        <label for=\"menu-4\">Classement par Rang</label>
        <input type=\"checkbox\" id=\"menu-4\" name=\"menu-4\" class=\"menu-checkbox\">
        <div class=\"menu\">
          <label class=\"menu-toggle\" for=\"menu-4\"><span>Toggle</span></label>
          <ul style=\"padding-left : 15px; padding-top : 50px;\">
            <li>
              <a href=\"../classement-rankS/{{idGuilde}}\"> <strong>></strong> S (+ de 700pts)</a>
            </li>
            <li>
              <a href=\"../classement-rankA/{{idGuilde}}\"> <strong>></strong> A (entre 500 et 699)</a>
            </li>
            <li>
              <a href=\"../classement-rankB/{{idGuilde}}\"> <strong>></strong> B (entre 300 et 499)</a>
            </li>
            <li>
              <a href=\"../classement-rankC/{{idGuilde}}\"> <strong>></strong> C (- de 300pts)</a>
            </li>
          </ul>
        </div>
      </li>
      
      <li>
        <label for=\"menu-5\">Classement par Classe</label>
        <input type=\"checkbox\" id=\"menu-5\" name=\"menu-5\" class=\"menu-checkbox\">
        <div class=\"menu\">
          <label class=\"menu-toggle\" for=\"menu-5\"><span>Toggle</span></label>
          <ul style=\"padding-left : 15px; padding-top : 50px;\">
            <li>
              <a href=\"../classement-classeArcher/{{idGuilde}}\"> <strong>></strong> Archer</a>
            </li>
            <li>
              <a href=\"../classement-classeChevalier/{{idGuilde}}\"> <strong>></strong> Chevalier</a>
            </li>
            <li>
              <a href=\"../classement-classeHeal/{{idGuilde}}\"> <strong>></strong> Heal</a>
            </li>
            <li>
              <a href=\"../classement-classeMage/{{idGuilde}}\"> <strong>></strong> Mage</a>
            </li>
            <li>
              <a href=\"../classement-classeTank/{{idGuilde}}\"> <strong>></strong> Tank</a>
            </li>
            
          </ul>
        </div>
      </li> 
    </ul>
      
  </div>
  
  {% set totalPoints = 0 %}
  {% set nbMembres = 0 %}
  {% for membre in membres %}
     {% set totalPoints = totalPoints + membre.getPoints() %}
     {% set nbMembres = nbMembres + 1 %}
  {% endfor %}
  
  {% set moyenne = totalPoints/nbMembres %}
  

<div id=\"box1\" class=\"box blurred-bg tinted\">
  <div class=\"content\">
    <h1>Informations</h1>
\t    <h2>{{guilde.getNomGuilde}}</h2>
    <p class=\"related\">Total des points : {{totalPoints}}</p>
    <p class=\"related\">Nombre de membres : {{nbMembres}}</p>
    <p class=\"related\">Moyenne de points par membre : {{moyenne|round(1, 'floor')}}</p>
  </div>
</div>


  </body>
</html>", "ChallenkersMainBundle:Guildes:info.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Guildes/info.html.twig");
    }
}
