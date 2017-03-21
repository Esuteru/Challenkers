<?php

/* ChallenkersMainBundle:Classement:class.html.twig */
class __TwigTemplate_1af36144deaab7bd2bc2aa4390f7ac940cbf8d2394ec74cab924fc9acc0e28f3 extends Twig_Template
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
        $__internal_93eea0c44c87adce2fe96bf4f8996510e4b6f18eda16bfce981a57627aad383b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93eea0c44c87adce2fe96bf4f8996510e4b6f18eda16bfce981a57627aad383b->enter($__internal_93eea0c44c87adce2fe96bf4f8996510e4b6f18eda16bfce981a57627aad383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Classement:class.html.twig"));

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
      <li style=\" padding-top: 50px; \"><a href=\"..\"> <strong>Retour à la liste des serveurs </strong></a></li>
      <li><a href=\"../guild-info/";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>Guilde ";
        echo twig_escape_filter($this->env, (isset($context["nomGuilde"]) ? $context["nomGuilde"] : $this->getContext($context, "nomGuilde")), "html", null, true);
        echo " </strong></a></li>
      <li><a href=\"../guild-members/";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\">Liste des membres</a></li>
      <li><a href=\"../classement/";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\">Membres les plus méritants</a></li>
      <li><a href=\"../classement-level/";
        // line 23
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
        // line 32
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> S (+ de 700pts)</a>
            </li>
            <li>
              <a href=\"../classement-rankA/";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> A (entre 500 et 699)</a>
            </li>
            <li>
              <a href=\"../classement-rankB/";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> B (entre 300 et 499)</a>
            </li>
            <li>
              <a href=\"../classement-rankC/";
        // line 41
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
        // line 54
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Archer</a>
            </li>
            <li>
              <a href=\"../classement-classeChevalier/";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Chevalier</a>
            </li>
            <li>
              <a href=\"../classement-classeHeal/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Heal</a>
            </li>
            <li>
              <a href=\"../classement-classeMage/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Mage</a>
            </li>
            <li>
              <a href=\"../classement-classeTank/";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Tank</a>
            </li>
          </ul>
        </div>
      </li> 
    </ul>
      
  </div>
   
    <div class=\"table-title\">
      <h3>";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "html", null, true);
        echo "(s) ";
        echo twig_escape_filter($this->env, (isset($context["nomGuilde"]) ? $context["nomGuilde"] : $this->getContext($context, "nomGuilde")), "html", null, true);
        echo "</h3>
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
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 91
            echo "    <tr>
      
      <td class=\"text-left\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPseudo", array(), "method"), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getClasse", array(), "method"), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getLevel", array()), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPoints", array()), "html", null, true);
            echo "</td>
    </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
  </tbody>
  </table>
  
    ";
        // line 103
        $context["totalPoints"] = 0;
        // line 104
        echo "  ";
        $context["nbMembres"] = 0;
        // line 105
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 106
            echo "     ";
            $context["totalPoints"] = ((isset($context["totalPoints"]) ? $context["totalPoints"] : $this->getContext($context, "totalPoints")) + $this->getAttribute($context["membre"], "getPoints", array(), "method"));
            // line 107
            echo "     ";
            $context["nbMembres"] = ((isset($context["nbMembres"]) ? $context["nbMembres"] : $this->getContext($context, "nbMembres")) + 1);
            // line 108
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "  
  ";
        // line 110
        $context["moyenne"] = ((isset($context["totalPoints"]) ? $context["totalPoints"] : $this->getContext($context, "totalPoints")) / (isset($context["nbMembres"]) ? $context["nbMembres"] : $this->getContext($context, "nbMembres")));
        // line 111
        echo "  

<div class=\"box effect1\">

    <h3>Informations ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "html", null, true);
        echo "(s)</h3>
    <p class=\"related\">Total des points : ";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["totalPoints"]) ? $context["totalPoints"] : $this->getContext($context, "totalPoints")), "html", null, true);
        echo "</p>
    <p class=\"related\">Nombre de membres : ";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["nbMembres"]) ? $context["nbMembres"] : $this->getContext($context, "nbMembres")), "html", null, true);
        echo "</p>
    <p class=\"related\">Moyenne de points pour les ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "html", null, true);
        echo "s : ";
        echo twig_escape_filter($this->env, twig_round((isset($context["moyenne"]) ? $context["moyenne"] : $this->getContext($context, "moyenne")), 1, "floor"), "html", null, true);
        echo "</p>

</div>
    
    

  </body>
</html>";
        
        $__internal_93eea0c44c87adce2fe96bf4f8996510e4b6f18eda16bfce981a57627aad383b->leave($__internal_93eea0c44c87adce2fe96bf4f8996510e4b6f18eda16bfce981a57627aad383b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26a9eec6be987236956f924f85375df0924523bbcf779e4bc3f0564a67b8d01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a9eec6be987236956f924f85375df0924523bbcf779e4bc3f0564a67b8d01a->enter($__internal_26a9eec6be987236956f924f85375df0924523bbcf779e4bc3f0564a67b8d01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style-tableau.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_26a9eec6be987236956f924f85375df0924523bbcf779e4bc3f0564a67b8d01a->leave($__internal_26a9eec6be987236956f924f85375df0924523bbcf779e4bc3f0564a67b8d01a_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Classement:class.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 8,  262 => 7,  256 => 6,  239 => 118,  235 => 117,  231 => 116,  227 => 115,  221 => 111,  219 => 110,  216 => 109,  210 => 108,  207 => 107,  204 => 106,  199 => 105,  196 => 104,  194 => 103,  188 => 99,  179 => 96,  175 => 95,  171 => 94,  167 => 93,  163 => 91,  159 => 90,  140 => 76,  127 => 66,  121 => 63,  115 => 60,  109 => 57,  103 => 54,  87 => 41,  81 => 38,  75 => 35,  69 => 32,  57 => 23,  53 => 22,  49 => 21,  43 => 20,  31 => 10,  29 => 6,  23 => 2,);
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
            <link href=\"{{ asset('bundles/framework/css/style-tableau.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
    </head>
  <body>
   
   
  <input type=\"checkbox\" id=\"menu\" name=\"menu\" class=\"menu-checkbox\">
  <div class=\"menu\">
    <label class=\"menu-toggle\" for=\"menu\"><span>Toggle</span></label>
    <ul>
      <li style=\" padding-top: 50px; \"><a href=\"..\"> <strong>Retour à la liste des serveurs </strong></a></li>
      <li><a href=\"../guild-info/{{ idGuilde }}\"> <strong>Guilde {{nomGuilde}} </strong></a></li>
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
   
    <div class=\"table-title\">
      <h3>{{classe}}(s) {{ nomGuilde }}</h3>
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
  
    {% set totalPoints = 0 %}
  {% set nbMembres = 0 %}
  {% for membre in membres %}
     {% set totalPoints = totalPoints + membre.getPoints() %}
     {% set nbMembres = nbMembres + 1 %}
  {% endfor %}
  
  {% set moyenne = totalPoints/nbMembres %}
  

<div class=\"box effect1\">

    <h3>Informations {{classe}}(s)</h3>
    <p class=\"related\">Total des points : {{totalPoints}}</p>
    <p class=\"related\">Nombre de membres : {{nbMembres}}</p>
    <p class=\"related\">Moyenne de points pour les {{classe}}s : {{moyenne|round(1, 'floor')}}</p>

</div>
    
    

  </body>
</html>", "ChallenkersMainBundle:Classement:class.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Classement/class.html.twig");
    }
}
