<?php

/* ChallenkersMainBundle:Advert:index.html.twig */
class __TwigTemplate_3835f9f548431deee0ee4fc35a403fa9815bc8a06ab09fcac5307ab9016738d0 extends Twig_Template
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
        $__internal_b45f6d7b5a25ae08764a285481a2277bde25dfced99fd9fd77c1d8f7b8bf4f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45f6d7b5a25ae08764a285481a2277bde25dfced99fd9fd77c1d8f7b8bf4f96->enter($__internal_b45f6d7b5a25ae08764a285481a2277bde25dfced99fd9fd77c1d8f7b8bf4f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Advert:index.html.twig"));

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

<header>
  <span>Easy & Simple CSS Triangles</span>
  <small>Instructions are within the HTML & CSS</small>
</header>

<section class=\"wrapper\">
  
  <div class=\"box triangle bottom\"> <!-- Simply add \"triangle\" & the direction as classes -->
    <p>Bottom</p>
  </div>

  <div class=\"box triangle left\">
    <p>Left</p>
  </div>

  <div class=\"box triangle right\">
    <p>Right</p>
  </div>

  <div class=\"box triangle top\">
    <p>Top</p>
  </div>
  
</section>
  </body>
</html>";
        
        $__internal_b45f6d7b5a25ae08764a285481a2277bde25dfced99fd9fd77c1d8f7b8bf4f96->leave($__internal_b45f6d7b5a25ae08764a285481a2277bde25dfced99fd9fd77c1d8f7b8bf4f96_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81e7ba2cc73db9cf25e13c94ce07d27fbac1dc8010777802867043c4e190ddc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e7ba2cc73db9cf25e13c94ce07d27fbac1dc8010777802867043c4e190ddc6->enter($__internal_81e7ba2cc73db9cf25e13c94ce07d27fbac1dc8010777802867043c4e190ddc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/select_guilde.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_81e7ba2cc73db9cf25e13c94ce07d27fbac1dc8010777802867043c4e190ddc6->leave($__internal_81e7ba2cc73db9cf25e13c94ce07d27fbac1dc8010777802867043c4e190ddc6_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Advert:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  73 => 7,  67 => 6,  31 => 10,  29 => 6,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Challenkers/MainBundle/Resources/views/Advert/index.html.twig #}

<html>
  <head>
        <title>Main Page</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"{{ asset('bundles/framework/css/select_guilde.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
         <meta charset=\"UTF-8\">
    </head>
  <body>

<header>
  <span>Easy & Simple CSS Triangles</span>
  <small>Instructions are within the HTML & CSS</small>
</header>

<section class=\"wrapper\">
  
  <div class=\"box triangle bottom\"> <!-- Simply add \"triangle\" & the direction as classes -->
    <p>Bottom</p>
  </div>

  <div class=\"box triangle left\">
    <p>Left</p>
  </div>

  <div class=\"box triangle right\">
    <p>Right</p>
  </div>

  <div class=\"box triangle top\">
    <p>Top</p>
  </div>
  
</section>
  </body>
</html>", "ChallenkersMainBundle:Advert:index.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Advert/index.html.twig");
    }
}
