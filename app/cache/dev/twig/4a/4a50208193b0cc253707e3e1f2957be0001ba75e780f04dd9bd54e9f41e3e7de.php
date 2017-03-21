<?php

/* ChallenkersMainBundle:Membres:index.html.twig */
class __TwigTemplate_02196b20f7a2b38eb62cdc36e2181b4281ce19db10e61834841ecfa5f15d0fa1 extends Twig_Template
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
        $__internal_043c7f7a934de64b5b24d732a6b9ddff0075241fdd08267d02b607437e89fcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043c7f7a934de64b5b24d732a6b9ddff0075241fdd08267d02b607437e89fcb1->enter($__internal_043c7f7a934de64b5b24d732a6b9ddff0075241fdd08267d02b607437e89fcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Membres:index.html.twig"));

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
           <meta name=\"viewport\" content=\"initial-scale=1.0; maximum-scale=1.0; width=device-width;\">
    </head>
  <body style=\"color:white;\">
    LISTE DES MEMBRES DE LA GUILDE ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["idGuilde"]) ? $context["idGuilde"] : $this->getContext($context, "idGuilde")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nomGuilde"]) ? $context["nomGuilde"] : $this->getContext($context, "nomGuilde")), "html", null, true);
        echo "
    
  <div class=\"table-title\">
    <h3>Membres de la guilde (par ordre alphabétique)</h3>
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 32
            echo "  <tr>
    
    <td class=\"text-left\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPseudo", array(), "method"), "html", null, true);
            echo "</td>
    <td class=\"text-left\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getClasse", array(), "method"), "html", null, true);
            echo "</td>
    <td class=\"text-left\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getLevel", array()), "html", null, true);
            echo "</td>
    <td class=\"text-left\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "getPoints", array()), "html", null, true);
            echo "</td>
  </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
  </tbody>
  </table>
  

  </body>
</html>";
        
        $__internal_043c7f7a934de64b5b24d732a6b9ddff0075241fdd08267d02b607437e89fcb1->leave($__internal_043c7f7a934de64b5b24d732a6b9ddff0075241fdd08267d02b607437e89fcb1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36e582135226987dc052b82d24c8f43059d27a439302fb843f03f9fd131381e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e582135226987dc052b82d24c8f43059d27a439302fb843f03f9fd131381e8->enter($__internal_36e582135226987dc052b82d24c8f43059d27a439302fb843f03f9fd131381e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style-tableau.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_36e582135226987dc052b82d24c8f43059d27a439302fb843f03f9fd131381e8->leave($__internal_36e582135226987dc052b82d24c8f43059d27a439302fb843f03f9fd131381e8_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Membres:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 8,  107 => 7,  101 => 6,  88 => 40,  79 => 37,  75 => 36,  71 => 35,  67 => 34,  63 => 32,  59 => 31,  37 => 14,  31 => 10,  29 => 6,  23 => 2,);
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
            <link href=\"{{ asset('bundles/framework/css/style-tableau.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
           <meta name=\"viewport\" content=\"initial-scale=1.0; maximum-scale=1.0; width=device-width;\">
    </head>
  <body style=\"color:white;\">
    LISTE DES MEMBRES DE LA GUILDE {{ idGuilde }} {{ nomGuilde }}
    
  <div class=\"table-title\">
    <h3>Membres de la guilde (par ordre alphabétique)</h3>
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
</html>", "ChallenkersMainBundle:Membres:index.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Membres/index.html.twig");
    }
}
