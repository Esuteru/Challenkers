<?php

/* ChallenkersMainBundle:Guildes:index.html.twig */
class __TwigTemplate_c46fcb34d4d9eb91fcb7c3aa3eb0a16bdd3ee0463edce063129bee672346900f extends Twig_Template
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
        $__internal_72cf80c6eb71be700aaac3d9665fc9e97511dcfb7d4277cd91f372770e86283c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cf80c6eb71be700aaac3d9665fc9e97511dcfb7d4277cd91f372770e86283c->enter($__internal_72cf80c6eb71be700aaac3d9665fc9e97511dcfb7d4277cd91f372770e86283c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallenkersMainBundle:Guildes:index.html.twig"));

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
  <label for=\"op\">Choose a Guild</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guildes"]) ? $context["guildes"] : $this->getContext($context, "guildes")));
        foreach ($context['_seq'] as $context["_key"] => $context["guilde"]) {
            // line 22
            echo "            <li><a href=\"../guild-info/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guilde"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guilde"], "getNomGuilde", array(), "method"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guilde'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t</ul>
\t\t\t</nav>
</div>

  </body>
</html>";
        
        $__internal_72cf80c6eb71be700aaac3d9665fc9e97511dcfb7d4277cd91f372770e86283c->leave($__internal_72cf80c6eb71be700aaac3d9665fc9e97511dcfb7d4277cd91f372770e86283c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45c5423cbc8560c880050a33ff5f41fae4c609203880957d4ab61018e6b91a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c5423cbc8560c880050a33ff5f41fae4c609203880957d4ab61018e6b91a7b->enter($__internal_45c5423cbc8560c880050a33ff5f41fae4c609203880957d4ab61018e6b91a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_45c5423cbc8560c880050a33ff5f41fae4c609203880957d4ab61018e6b91a7b->leave($__internal_45c5423cbc8560c880050a33ff5f41fae4c609203880957d4ab61018e6b91a7b_prof);

    }

    public function getTemplateName()
    {
        return "ChallenkersMainBundle:Guildes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 8,  77 => 7,  71 => 6,  59 => 24,  48 => 22,  44 => 21,  31 => 10,  29 => 6,  23 => 2,);
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
  <label for=\"op\">Choose a Guild</label>
</div>
<div class=\"overlay overlay-hugeinc\">
\t\t\t<label for=\"op\"></label>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t{% for guilde in guildes %}
            <li><a href=\"../guild-info/{{guilde.getId()}}\">{{ guilde.getNomGuilde() }}</a></li>
          {% endfor %}
\t\t\t\t</ul>
\t\t\t</nav>
</div>

  </body>
</html>", "ChallenkersMainBundle:Guildes:index.html.twig", "/home/ubuntu/workspace/src/Challenkers/MainBundle/Resources/views/Guildes/index.html.twig");
    }
}
