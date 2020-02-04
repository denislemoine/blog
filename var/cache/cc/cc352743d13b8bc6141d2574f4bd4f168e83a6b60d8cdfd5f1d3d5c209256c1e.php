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

/* index.html.twig */
class __TwigTemplate_8ce38418174f1e9729a3fb20efeb49abb7dcdfb8fa5dc019b6cff34a0c09b7db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/main.css\">
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Rubriques
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    ";
        // line 30
        $context["articlenbre"] = [0 => "Exemple 1", 1 => "Exemple 2", 2 => "Exemple 3"];
        // line 31
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articlenbre"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 32
            echo "                    <a class=\"dropdown-item text-secondary\" href=\"/\">";
            echo twig_escape_filter($this->env, $context["article"]);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </div>
            </li>
            <li class=\"nav-item col-6\">
                <a class=\"nav-link\" href=\"/Article/Add\">Tout les Articles</a>
            </li>

            <li class=\"nav-item col-11\"></li>
            <li class=\"nav-item col-8\"></li>

            ";
        // line 43
        $context["connected"] = 1;
        // line 44
        echo "            ";
        if (0 === twig_compare(($context["connected"] ?? null), 1)) {
            // line 45
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["User"] ?? null), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo " 
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item text-success\" href=\"/dashboard\">Panel Administrateur</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                    </div>
                </li>
            ";
        }
        // line 56
        echo "
            ";
        // line 57
        if (0 === twig_compare(($context["connected"] ?? null), 0)) {
            // line 58
            echo "                <li class=\"nav-item col-2\">
                  <a type=\"button\" class=\"btn btn-light btn-sm\" href=\"/Login\">Connexion</a>
                </li>

                <li class=\"nav-item col-3\">
                  <a type=\"button\" class=\"btn btn-secondary btn-sm\" href=\"/Inscription\">S'inscrire</a>
                </li>
            ";
        }
        // line 66
        echo "        </ul>

    </div>

</nav>





";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "

";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 132
        echo "

<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
";
        // line 140
        $this->displayBlock('javascript', $context, $blocks);
        // line 141
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CESI BLOG";
    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 80
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo " 
<footer class=\"page-footer font-small pt-4 footer\">

  <!-- Footer Elements -->
  <div class=\"container\">

    <!--Grid row-->
    <div class=\"row\">

      <!--Grid column-->
      <div class=\"col-md-6 mb-4\">

        <!-- Form -->
        <form class=\"form-inline\" method=\"post\" action=\"/Article/Search/\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\" >
            <input type=\"submit\" class=\"btn btn-outline-light my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->


    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
    <a href=\"/\"> BlogCesi.fr</a>
  </div>
  <!-- Copyright -->

</footer>

<style>
html{
    overflow-x: hidden;
}
.footer {
    position: relative;
    bottom: 0;
    width: 100%;
    background: linear-gradient(-45deg, #343a40, #343a40);
    color: #b9b9b9;
  
}
</style>
";
    }

    // line 140
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 140,  203 => 81,  199 => 80,  193 => 76,  187 => 11,  180 => 5,  174 => 141,  172 => 140,  162 => 132,  160 => 80,  156 => 78,  154 => 76,  142 => 66,  132 => 58,  130 => 57,  127 => 56,  115 => 47,  111 => 45,  108 => 44,  106 => 43,  95 => 34,  86 => 32,  81 => 31,  79 => 30,  59 => 12,  57 => 11,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CESI BLOG{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/main.css\">
    {% block css %}{% endblock %}

<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Rubriques
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    {% set articlenbre = [\"Exemple 1\", \"Exemple 2\", \"Exemple 3\"] %}
                    {% for article in articlenbre %}
                    <a class=\"dropdown-item text-secondary\" href=\"/\">{{ article|e }}</a>
                    {% endfor %}
                </div>
            </li>
            <li class=\"nav-item col-6\">
                <a class=\"nav-link\" href=\"/Article/Add\">Tout les Articles</a>
            </li>

            <li class=\"nav-item col-11\"></li>
            <li class=\"nav-item col-8\"></li>

            {% set connected = 1 %}
            {% if connected == 1 %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ User.nom }} 
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item text-success\" href=\"/dashboard\">Panel Administrateur</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                    </div>
                </li>
            {% endif %}

            {% if connected == 0 %}
                <li class=\"nav-item col-2\">
                  <a type=\"button\" class=\"btn btn-light btn-sm\" href=\"/Login\">Connexion</a>
                </li>

                <li class=\"nav-item col-3\">
                  <a type=\"button\" class=\"btn btn-secondary btn-sm\" href=\"/Inscription\">S'inscrire</a>
                </li>
            {% endif %}
        </ul>

    </div>

</nav>





{% block body %}
{% endblock %}


{% block footer %}
 
<footer class=\"page-footer font-small pt-4 footer\">

  <!-- Footer Elements -->
  <div class=\"container\">

    <!--Grid row-->
    <div class=\"row\">

      <!--Grid column-->
      <div class=\"col-md-6 mb-4\">

        <!-- Form -->
        <form class=\"form-inline\" method=\"post\" action=\"/Article/Search/\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\" >
            <input type=\"submit\" class=\"btn btn-outline-light my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->


    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
    <a href=\"/\"> BlogCesi.fr</a>
  </div>
  <!-- Copyright -->

</footer>

<style>
html{
    overflow-x: hidden;
}
.footer {
    position: relative;
    bottom: 0;
    width: 100%;
    background: linear-gradient(-45deg, #343a40, #343a40);
    color: #b9b9b9;
  
}
</style>
{% endblock %}


<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
{% block javascript %}{% endblock %}
</body>
</html>
", "index.html.twig", "C:\\Users\\Ankam\\OneDrive\\Bureau\\blog\\templates\\index.html.twig");
    }
}
