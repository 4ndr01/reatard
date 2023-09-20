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

/* security/login.html.twig */
class __TwigTemplate_121dcecafd8029808cc4ce7abaeda7a5 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

        font-family: sans-serif;
    }

    .form-container{
        width: 100%;
        height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form{
        height: 40%;

        display: flex;
        flex-direction: column;
    }
    .form-title{
        font-size: 1.5em;
        font-weight: 500;

        color: #05192e;
    }

    .form-content{
        height: 60%;

        display: flex;
        flex-direction: column;
        justify-content: space-evenly;

        .email,
        .passsword{
            margin-bottom: 1em;
            width: 20em;

            display: flex;
            flex-direction: column;

            > input{
                margin-top: 0.5em;
                height: 2em;
                
                border: 1px solid #e0e5ed;
                border-radius: 5px
            }
        }

        .btn{
            width: 10em;
            height: 2em;

            border: none;
            border-radius:5px;
            background-color: #2b68da;
            color: #fff;

            align-self: flex-end;
        }
        .btn:hover{
            cursor: pointer;
        }
    }

    .alert{
        color: red;
    }
</style>

<div class=\"form-container\">
    <form method=\"post\" class=\"form\">
        ";
        // line 84
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 84, $this->source); })())) {
            // line 85
            echo "            <div class=\"alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 85, $this->source); })()), "messageKey", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 85, $this->source); })()), "messageData", [], "any", false, false, false, 85), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 87
        echo "
        ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88)) {
            // line 89
            echo "            <div class=\"mb-3\">
                Vous êtes connecté(e) comme ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "username", [], "any", false, false, false, 90), "html", null, true);
            echo ", 
                <a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
            </div>
        ";
        }
        // line 94
        echo "
        <h1 class=\"form-title\">Connextez-vous</h1>
        
        <div class=\"form-content\">
            <div class=\"email\">
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"exemple@exemple.com\" required autofocus>
            </div>
            
            <div class=\"passsword\">
                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"Votre mot de passe\" required>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

            <button class=\"btn\" type=\"submit\">Connexion</button>
        </div>
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 108,  202 => 100,  194 => 94,  188 => 91,  184 => 90,  181 => 89,  179 => 88,  176 => 87,  170 => 85,  168 => 84,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<style>
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

        font-family: sans-serif;
    }

    .form-container{
        width: 100%;
        height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form{
        height: 40%;

        display: flex;
        flex-direction: column;
    }
    .form-title{
        font-size: 1.5em;
        font-weight: 500;

        color: #05192e;
    }

    .form-content{
        height: 60%;

        display: flex;
        flex-direction: column;
        justify-content: space-evenly;

        .email,
        .passsword{
            margin-bottom: 1em;
            width: 20em;

            display: flex;
            flex-direction: column;

            > input{
                margin-top: 0.5em;
                height: 2em;
                
                border: 1px solid #e0e5ed;
                border-radius: 5px
            }
        }

        .btn{
            width: 10em;
            height: 2em;

            border: none;
            border-radius:5px;
            background-color: #2b68da;
            color: #fff;

            align-self: flex-end;
        }
        .btn:hover{
            cursor: pointer;
        }
    }

    .alert{
        color: red;
    }
</style>

<div class=\"form-container\">
    <form method=\"post\" class=\"form\">
        {% if error %}
            <div class=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        {% if app.user %}
            <div class=\"mb-3\">
                Vous êtes connecté(e) comme {{ app.user.username }}, 
                <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
            </div>
        {% endif %}

        <h1 class=\"form-title\">Connextez-vous</h1>
        
        <div class=\"form-content\">
            <div class=\"email\">
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"exemple@exemple.com\" required autofocus>
            </div>
            
            <div class=\"passsword\">
                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"Votre mot de passe\" required>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            <button class=\"btn\" type=\"submit\">Connexion</button>
        </div>
    </form>
</div>
{% endblock %}
", "security/login.html.twig", "/Users/anselme/Documents/Cours/MyDigitalSchool/reatard/retard/templates/security/login.html.twig");
    }
}
