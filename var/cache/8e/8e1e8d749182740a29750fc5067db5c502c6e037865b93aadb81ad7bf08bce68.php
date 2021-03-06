<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Dashboard/dashboard.html.twig */
class __TwigTemplate_f2518f93f845c52359a52b5b891254fb2b2216f888ed8fee08de2c3ccc81bc60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "Dashboard/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Dashboard - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  ";
        // line 9
        echo "  <div class=\"container-fluid\">
    <div class=\"row d-flex flex-wrap\">

      <div class=\"alert alert-secondary text-center p-2 col-12\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_NOM", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_PRENOM", [], "any", false, false, false, 12), "html", null, true);
        echo "   |   Email: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_EMAIL", [], "any", false, false, false, 12), "html", null, true);
        echo "   |   Vous possédez les privilèges d'un ";
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "</div>

      <section id=\"sidebar\"> 
        <div id=\"sidebar-nav\">
          <br><br>
          <ul>

            ";
        // line 20
        echo "
            <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Mon Profil</a></li>

            ";
        // line 23
        if ((0 === twig_compare(($context["role"] ?? null), "Redacteur") || 0 === twig_compare(($context["role"] ?? null), "Administrateur"))) {
            // line 24
            echo "            <li><a href=\"/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
            <li><a href=\"/Article/Add\"><i class=\"far fa-newspaper\"></i>Ajouter un article</a></li>  
            <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Liste des articles</a></li>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if (0 === twig_compare(($context["role"] ?? null), "Administrateur")) {
            // line 30
            echo "            <li><a href=\"/Listemembre\"><i class=\"fa fa-users\"></i class=\"text-center\">Utilisateurs</a></li>
            <li><a href=\"\"><i class=\"fa fa-desktop\"></i class=\"text-center\">Modfiier le CSS</a></li>
            ";
        }
        // line 33
        echo "
          </ul>
        </div>
      </section>


      <div class=\"container-fluid\">
        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "successMsg", [], "any", true, true, false, 40)) {
            // line 41
            echo "          <div class=\"row jumbotron jumbotron-fluid col-8 mx-auto\" style=\"background:#e1ffe1 !important;border-radius: 12px; margin-top: 3em;\">
            <div class=\"container\">
              <h1 class=\"display-4 text-center\">Bien joué !</h1>
              <p class=\"lead text-center \">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "successMsg", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
            </div>
          </div>
        ";
        }
        // line 48
        echo "      </div>
      
    </div>
  </div>

  <br><br><br><br><br><br>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  121 => 44,  116 => 41,  114 => 40,  105 => 33,  100 => 30,  98 => 29,  95 => 28,  89 => 24,  87 => 23,  82 => 20,  66 => 12,  61 => 9,  59 => 8,  55 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}


{% block title %} Dashboard - {{ parent() }}{% endblock %}


{% block body %}
  {# TEMPLATE DU MENU DASHBOARD liste des membres #}
  <div class=\"container-fluid\">
    <div class=\"row d-flex flex-wrap\">

      <div class=\"alert alert-secondary text-center p-2 col-12\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. {{ user.MEM_NOM }} {{ user.MEM_PRENOM }}   |   Email: {{ user.MEM_EMAIL }}   |   Vous possédez les privilèges d'un {{ role }}</div>

      <section id=\"sidebar\"> 
        <div id=\"sidebar-nav\">
          <br><br>
          <ul>

            {# PRIVILEGES DANS LE DASHBOARD #}

            <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Mon Profil</a></li>

            {% if role == \"Redacteur\" or role == \"Administrateur\" %}
            <li><a href=\"/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
            <li><a href=\"/Article/Add\"><i class=\"far fa-newspaper\"></i>Ajouter un article</a></li>  
            <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Liste des articles</a></li>
            {% endif %}

            {% if role == \"Administrateur\" %}
            <li><a href=\"/Listemembre\"><i class=\"fa fa-users\"></i class=\"text-center\">Utilisateurs</a></li>
            <li><a href=\"\"><i class=\"fa fa-desktop\"></i class=\"text-center\">Modfiier le CSS</a></li>
            {% endif %}

          </ul>
        </div>
      </section>


      <div class=\"container-fluid\">
        {% if session.successMsg is defined %}
          <div class=\"row jumbotron jumbotron-fluid col-8 mx-auto\" style=\"background:#e1ffe1 !important;border-radius: 12px; margin-top: 3em;\">
            <div class=\"container\">
              <h1 class=\"display-4 text-center\">Bien joué !</h1>
              <p class=\"lead text-center \">{{ session.successMsg }}</p>
            </div>
          </div>
        {% endif %}
      </div>
      
    </div>
  </div>

  <br><br><br><br><br><br>

{% endblock %}", "Dashboard/dashboard.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Dashboard\\dashboard.html.twig");
    }
}
