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

/* User/inscription.html.twig */
class __TwigTemplate_137e7c03103a41297fd070608e65ef1ffcf4e4c99f4b6a09ca0b46f7eb84bba4 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription ";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<form id=\"register-form\" class=\"form\" action=\"\" method=\"POST\">
            <legend>inscription</legend>
                    <hr>
        \t<div class=\"body\">
                    
                    <label for=\"name\">Nom</label>
                    <input name=\"nom\" class=\"input-huge\" type=\"text\">
                    
                    <label for=\"surname\">Prénom</label>
                    <input name=\"prenom\" class=\"input-huge\" type=\"text\">   
                     
                    <label for=\"surname\">Email</label>
                    <input name=\"email\" class=\"input-huge\" type=\"text\">

                    <label for=\"surname\">Mot de passe</label>
                    <input name=\"tel\" class=\"input-huge\" type=\"text\">
            \t</div>
 
        \t<div class=\"footer\">
                    <button type=\"submit\"  name=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        \t</div>
                <div class=\"g-recaptcha\" data-sitekey=\"6LeDttUUAAAAAEFwEIe13cCVcZQjXM8DPDq7hTEI\"></div>
        </form>
  

";
    }

    public function getTemplateName()
    {
        return "User/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  55 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Inscription {% endblock %}
{% block body %}

<form id=\"register-form\" class=\"form\" action=\"\" method=\"POST\">
            <legend>inscription</legend>
                    <hr>
        \t<div class=\"body\">
                    
                    <label for=\"name\">Nom</label>
                    <input name=\"nom\" class=\"input-huge\" type=\"text\">
                    
                    <label for=\"surname\">Prénom</label>
                    <input name=\"prenom\" class=\"input-huge\" type=\"text\">   
                     
                    <label for=\"surname\">Email</label>
                    <input name=\"email\" class=\"input-huge\" type=\"text\">

                    <label for=\"surname\">Mot de passe</label>
                    <input name=\"tel\" class=\"input-huge\" type=\"text\">
            \t</div>
 
        \t<div class=\"footer\">
                    <button type=\"submit\"  name=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        \t</div>
                <div class=\"g-recaptcha\" data-sitekey=\"6LeDttUUAAAAAEFwEIe13cCVcZQjXM8DPDq7hTEI\"></div>
        </form>
  

{% endblock %}", "User/inscription.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\User\\inscription.html.twig");
    }
}
