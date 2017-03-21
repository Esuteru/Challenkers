<?php

/* ChallenkersMainBundle:Classement:index.html.twig */
class __TwigTemplate_e0d73d2cdd96b10e4e9d3cc267ca3a03bf6c4188f3308edbccb4982de07c6ad9 extends Twig_Template
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
        $__internal_4833e7d50e9ddc720ef45eaf5ec008e5473787941982f66ea50b285039b046b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4833e7d50e9ddc720ef45eaf5ec008e5473787941982f66ea50b285039b046b3->enter($__internal_4833e7d50e9ddc720ef45eaf5ec008e5473787941982f66ea50b285039b046b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Classement:index.html.twig"));

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
        // line 19
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>Guilde ";
        echo twig_escape_filter($this->env, (isset($context["nomGuilde"]) ? $context["nomGuilde"] : $this->getContext($context, "nomGuilde")), "html", null, true);
        echo " </strong></a></li>
      <li><a href=\"../guild-members/";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\">Liste des membres</a></li>
      <li><a href=\"../classement/";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\">Membres les plus méritants</a></li>
      <li><a href=\"../classement-level/";
        // line 22
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
        // line 31
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> S (+ de 700pts)</a>
            </li>
            <li>
              <a href=\"../classement-rankA/";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> A (entre 500 et 699)</a>
            </li>
            <li>
              <a href=\"../classement-rankB/";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> B (entre 300 et 499)</a>
            </li>
            <li>
              <a href=\"../classement-rankC/";
        // line 40
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
        // line 53
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Archer</a>
            </li>
            <li>
              <a href=\"../classement-classeChevalier/";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Chevalier</a>
            </li>
            <li>
              <a href=\"../classement-classeHeal/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Heal</a>
            </li>
            <li>
              <a href=\"../classement-classeMage/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Mage</a>
            </li>
            <li>
              <a href=\"../classement-classeTank/";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo "\"> <strong>></strong> Tank</a>
            </li>
          </ul>
        </div>
      </li> 
    </ul>
      
  </div>
    <div class=\"table-title\">
      <h3>Membres ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["nomGuilde"]) ? $context["nomGuilde"] : $this->getContext($context, "nomGuilde")), "html", null, true);
        echo " par points de contribution</h3></h3>
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
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 89
            echo "    <tr>
      
      <td class=\"text-left\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPseudo", array(), "method"), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getClasse", array(), "method"), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getLevel", array()), "html", null, true);
            echo "</td>
      <td class=\"text-left\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPoints", array()), "html", null, true);
            echo "</td>
    </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
  </tbody>
  </table>
  


  </body>
</html>";
        
        $__internal_4833e7d50e9ddc720ef45eaf5ec008e5473787941982f66ea50b285039b046b3->leave($__internal_4833e7d50e9ddc720ef45eaf5ec008e5473787941982f66ea50b285039b046b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e67c0f4115a2962c895b6618a78df452f11808802524ce38bc6b9ed47404a871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67c0f4115a2962c895b6618a78df452f11808802524ce38bc6b9ed47404a871->enter($__internal_e67c0f4115a2962c895b6618a78df452f11808802524ce38bc6b9ed47404a871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style-tableau.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_e67c0f4115a2962c895b6618a78df452f11808802524ce38bc6b9ed47404a871->leave($__internal_e67c0f4115a2962c895b6618a78df452f11808802524ce38bc6b9ed47404a871_prof);

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
        return array (  207 => 8,  204 => 7,  198 => 6,  184 => 97,  175 => 94,  171 => 93,  167 => 92,  163 => 91,  159 => 89,  155 => 88,  138 => 74,  126 => 65,  120 => 62,  114 => 59,  108 => 56,  102 => 53,  86 => 40,  80 => 37,  74 => 34,  68 => 31,  56 => 22,  52 => 21,  48 => 20,  42 => 19,  31 => 10,  29 => 6,  23 => 2,);
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
      <h3>Membres {{ nomGuilde }} par points de contribution</h3></h3>
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
</html>", "ChallenkersMainBundle:Classement:index.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Classement/index.html.twig");
    }
}
