<?php

/* ChallenkersMainBundle:Default:index.html.twig */
class __TwigTemplate_51189b50e8b95586a62e0f4c4ebffe3f6001fce2a049af2f31fbe9e13cf710c2 extends Twig_Template
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
        $__internal_2352cfbe5c28d28b22ab527523a229a05c3779cff39f79972949f61abbea4cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2352cfbe5c28d28b22ab527523a229a05c3779cff39f79972949f61abbea4cf1->enter($__internal_2352cfbe5c28d28b22ab527523a229a05c3779cff39f79972949f61abbea4cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Default:index.html.twig"));

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
  <body>
    <input type=\"checkbox\" id=\"op\"></input>
<div class=\"lower\">
  <label for=\"op\">Choose a server</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t  <!--
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/1\">Server 1</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/2\">Server 2</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/3\">Server 3</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/4\">Server 4</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/5\">Server 5</a></li>
\t\t\t\t\t-->
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : $this->getContext($context, "serveurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 29
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
        // line 31
        echo "            <li><a href=\"../app_dev.php/all-members\">Liste de tous les membres</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t
\t\t\t
</div>

  </body>
</html>";
        
        $__internal_2352cfbe5c28d28b22ab527523a229a05c3779cff39f79972949f61abbea4cf1->leave($__internal_2352cfbe5c28d28b22ab527523a229a05c3779cff39f79972949f61abbea4cf1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d166197e3044b38742aaed5a5217cd0e8729813d0236f31bd2035596806a774f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d166197e3044b38742aaed5a5217cd0e8729813d0236f31bd2035596806a774f->enter($__internal_d166197e3044b38742aaed5a5217cd0e8729813d0236f31bd2035596806a774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_d166197e3044b38742aaed5a5217cd0e8729813d0236f31bd2035596806a774f->leave($__internal_d166197e3044b38742aaed5a5217cd0e8729813d0236f31bd2035596806a774f_prof);

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
        return array (  90 => 8,  87 => 7,  81 => 6,  66 => 31,  55 => 29,  51 => 28,  31 => 10,  29 => 6,  23 => 2,);
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
  <body>
    <input type=\"checkbox\" id=\"op\"></input>
<div class=\"lower\">
  <label for=\"op\">Choose a server</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t  <!--
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/1\">Server 1</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/2\">Server 2</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/3\">Server 3</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/4\">Server 4</a></li>
\t\t\t\t\t<li><a href=\"../app_dev.php/guild-list/5\">Server 5</a></li>
\t\t\t\t\t-->
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
