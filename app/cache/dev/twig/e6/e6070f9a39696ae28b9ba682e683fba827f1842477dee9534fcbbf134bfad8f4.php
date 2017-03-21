<?php

/* ChallenkersMainBundle:Default:index.html.twig */
class __TwigTemplate_34a463e335931cb9c05338ee44256094d725fd1a55667fbb2d6700dc484aec3e extends Twig_Template
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
        $__internal_aa3b2ba50b5612cd987a19f92d7411c12d79fc6085a6e656a7ae4b68c55b6e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3b2ba50b5612cd987a19f92d7411c12d79fc6085a6e656a7ae4b68c55b6e61->enter($__internal_aa3b2ba50b5612cd987a19f92d7411c12d79fc6085a6e656a7ae4b68c55b6e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Default:index.html.twig"));

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
    <input type=\"checkbox\" id=\"op\"></input>
<div class=\"lower\">
  <label for=\"op\">Liste des serveurs</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t  <!--Liste de tous les serveurs contenus dans la BDD-->
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : $this->getContext($context, "serveurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 23
            echo "            <li><a href=\"../app_dev.php/guild-list/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "getNomServeur", array(), "method"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            <li><a href=\"../app_dev.php/all-members\">Liste de tous les membres</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t
\t\t\t
</div>

  </body>
</html>";
        
        $__internal_aa3b2ba50b5612cd987a19f92d7411c12d79fc6085a6e656a7ae4b68c55b6e61->leave($__internal_aa3b2ba50b5612cd987a19f92d7411c12d79fc6085a6e656a7ae4b68c55b6e61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af6fdefbe59b7434f583f72965e8b1e87667db71afe29a25c7ec5ce80a5c3833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6fdefbe59b7434f583f72965e8b1e87667db71afe29a25c7ec5ce80a5c3833->enter($__internal_af6fdefbe59b7434f583f72965e8b1e87667db71afe29a25c7ec5ce80a5c3833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_af6fdefbe59b7434f583f72965e8b1e87667db71afe29a25c7ec5ce80a5c3833->leave($__internal_af6fdefbe59b7434f583f72965e8b1e87667db71afe29a25c7ec5ce80a5c3833_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 8,  81 => 7,  75 => 6,  60 => 25,  49 => 23,  45 => 22,  31 => 10,  29 => 6,  23 => 2,);
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
    <input type=\"checkbox\" id=\"op\"></input>
<div class=\"lower\">
  <label for=\"op\">Liste des serveurs</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t  <!--Liste de tous les serveurs contenus dans la BDD-->
\t\t\t\t\t{% for serveur in serveurs %}
            <li><a href=\"../app_dev.php/guild-list/{{serveur.getId()}}\">{{ serveur.getNomServeur() }}</a></li>
          {% endfor %}
            <li><a href=\"../app_dev.php/all-members\">Liste de tous les membres</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t
\t\t\t
</div>

  </body>
</html>", "ChallenkersMainBundle:Default:index.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Default/index.html.twig");
    }
}
