<?php

/* ChallenkersMainBundle:Guildes:info.html.twig */
class __TwigTemplate_3f2c8fcfd8c2b93d8e72c211e58200d69ef1e76292d5d15f4f3ad741d91489e7 extends Twig_Template
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
        $__internal_bedc4bc6c9b5fc4402269097d6af3cb90e0e3744e83e42aab079b2c9e88cc571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedc4bc6c9b5fc4402269097d6af3cb90e0e3744e83e42aab079b2c9e88cc571->enter($__internal_bedc4bc6c9b5fc4402269097d6af3cb90e0e3744e83e42aab079b2c9e88cc571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Guildes:info.html.twig"));

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
    <div id=\"info-content\">
      <h1>";
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
              <a href=\"#\"> <strong>></strong> S (+ de 700pts)</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> A (entre 500 et 699)</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> B (entre 300 et 499)</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> C (- de 300pts)</a>
            </li>
          </ul>
        </div>
      </li>
      
      <li>
        <label for=\"menu-4\">Classement par Classe</label>
        <input type=\"checkbox\" id=\"menu-4\" name=\"menu-4\" class=\"menu-checkbox\">
        <div class=\"menu\">
          <label class=\"menu-toggle\" for=\"menu-4\"><span>Toggle</span></label>
          <ul style=\"padding-left : 15px; padding-top : 50px;\">
            <li>
              <a href=\"#\"> <strong>></strong> Archer</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Chevalier</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Heal</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Mage</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Tank</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Autres</a>
            </li>
          </ul>
        </div>
      </li> 
    </ul>
      
  </div><




  </body>
</html>";
        
        $__internal_bedc4bc6c9b5fc4402269097d6af3cb90e0e3744e83e42aab079b2c9e88cc571->leave($__internal_bedc4bc6c9b5fc4402269097d6af3cb90e0e3744e83e42aab079b2c9e88cc571_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce4bdc07aa178e2d3a545e8b09db07c117d76100334c9b27112422f2268607cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4bdc07aa178e2d3a545e8b09db07c117d76100334c9b27112422f2268607cc->enter($__internal_ce4bdc07aa178e2d3a545e8b09db07c117d76100334c9b27112422f2268607cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style-info.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_ce4bdc07aa178e2d3a545e8b09db07c117d76100334c9b27112422f2268607cc->leave($__internal_ce4bdc07aa178e2d3a545e8b09db07c117d76100334c9b27112422f2268607cc_prof);

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
        return array (  151 => 8,  148 => 7,  142 => 6,  75 => 38,  71 => 37,  67 => 36,  54 => 26,  46 => 20,  44 => 19,  42 => 18,  40 => 17,  38 => 16,  31 => 10,  29 => 6,  23 => 2,);
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
        <title>Main Page</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"{{ asset('bundles/framework/css/style-info.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
    </head>
  <body style=\"color:white;\">
    
    <!--Recherche du maître de guilde NE MARCHE PAS--> 
    {#{% for membre in membres %}#}
      {#{% if membre.getId() == {{guilde.getIdMaitreGuilde}}%}#}
        {#{{ membre.getPseudo }}#}
     {# {% endif %}#}
    {#{% endfor %}#}
    

<!-- Menu onglet -->
<div id=\"wrapper\">
  <div id=\"info\">
    <div id=\"info-content\">
      <h1>{{ guilde.getNomGuilde }} <strong>Guild</strong></h1>
      
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
              <a href=\"#\"> <strong>></strong> S (+ de 700pts)</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> A (entre 500 et 699)</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> B (entre 300 et 499)</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> C (- de 300pts)</a>
            </li>
          </ul>
        </div>
      </li>
      
      <li>
        <label for=\"menu-4\">Classement par Classe</label>
        <input type=\"checkbox\" id=\"menu-4\" name=\"menu-4\" class=\"menu-checkbox\">
        <div class=\"menu\">
          <label class=\"menu-toggle\" for=\"menu-4\"><span>Toggle</span></label>
          <ul style=\"padding-left : 15px; padding-top : 50px;\">
            <li>
              <a href=\"#\"> <strong>></strong> Archer</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Chevalier</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Heal</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Mage</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Tank</a>
            </li>
            <li>
              <a href=\"#\"> <strong>></strong> Autres</a>
            </li>
          </ul>
        </div>
      </li> 
    </ul>
      
  </div><




  </body>
</html>", "ChallenkersMainBundle:Guildes:info.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Guildes/info.html.twig");
    }
}
