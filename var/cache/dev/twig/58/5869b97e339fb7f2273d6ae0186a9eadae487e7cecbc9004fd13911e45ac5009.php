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

/* quiz/show.html.twig */
class __TwigTemplate_92a9043154c2a3031c599fb464e15a600415318d8786bc56db0886580e944d7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Quizz!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <style>
        :checked+label #border {
            transform: scale(1.04);
            box-shadow: 0 0 5px #333;
            z-index: -1;
            border-color: #f9fafb;
            border-color: rgba(249, 250, 251, var(1));
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"py-6 flex flex-col justify-center sm:py-12\">
        <div class=\"flex space-x-4 px-4 justify-around\">
            <!-- CARD -->
            <div class=\"bg-gradient-to-t from-black via-red-900 to-red-700  h-72 w-28 md:w-96 md:rounded-3xl rounded-full shadow-md relative flex flex-col items-center justify-between md:items-start py-5 md:p-5 transition-all duration-150\">
                <!-- TEXTS -->
                <div class=\" transform -rotate-90 md:rotate-0 align-middle text-2xl font-semibold text-gray-200 text-center m-auto md:m-0 md:mt-8 w-full\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "
                </div>
                <div>
                    <h3 class=\"text-lg text-gray-300 font-light text-center hidden md:block\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "question", [], "any", false, false, false, 29), "html", null, true);
        echo "
                    </h3>

                    ";
        // line 32
        if ((isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                        <h2 class=\"text-gray-50 tracking-wider text-lg text-center\">
                            La bonne réponse est : ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "
                        </h2>

                        ";
            // line 37
            if ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 37, $this->source); })())) {
                // line 38
                echo "                            <h3 class=\"text-gray-50 tracking-wider text-lg text-center -pb-3\">
                                ah ouais t'es chaud
                            </h3>
                        ";
            } else {
                // line 42
                echo "                            <h3 class=\"text-gray-50 tracking-wider text-lg text-center -pb-3\">
                                t'es mauvais !!
                                ";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44) == "Harry Potter")) {
                    // line 45
                    echo "                                    retourne a poudlard
                                ";
                }
                // line 47
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47) == "Sigles Français")) {
                    // line 48
                    echo "                                    moi c'est mj (machael jackson)
                                ";
                }
                // line 50
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50) == "Les spécialités culinaires")) {
                    // line 51
                    echo "                                    LLOOLL c'etait pas toi le cordon bleu ?
                                ";
                }
                // line 53
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53) == "Définitions de mots")) {
                    // line 54
                    echo "                                    moi aussi je suis nul sur cette categorie
                                ";
                }
                // line 56
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56) == "Séries TV : les simpson - partie 1")) {
                    // line 57
                    echo "                                    TOH (j'espere ta la ref)
                                ";
                }
                // line 59
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59) == "Séries TV : les simpson - partie 2")) {
                    // line 60
                    echo "                                    TOH x2 (si ta pas la ref regarde le prime)
                                ";
                }
                // line 62
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62) == "Séries TV : Stargate SG1")) {
                    // line 63
                    echo "                                    j'y connais un beignet perso ...
                                ";
                }
                // line 65
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65) == "Séries TV : NCIS")) {
                    // line 66
                    echo "                                    je suis plus serie romantique <3
                                ";
                }
                // line 67
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67) == "Jeux de société")) {
                    // line 68
                    echo "                                    je suis plus jeu video ...
                                ";
                }
                // line 70
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70) == "Programmation")) {
                    // line 71
                    echo "                                    toute façon la programmation c'est pour les looser
                                ";
                }
                // line 73
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73) == "Sigles informatiques")) {
                    // line 74
                    echo "                                    tu dois être meilleur en politique
                                ";
                }
                // line 76
                echo "                            </h3>
                        ";
            }
            // line 78
            echo "                    ";
        }
        // line 79
        echo "                </div>

                <!-- BUTTONS -->
                ";
        // line 82
        if ( !(isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "                    <form action=\"\" method=\"POST\" >
                        <div class=\"flex w-full justify-around\">
                            ";
            // line 85
            $context["value"] = 1;
            // line 86
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 86, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 87
                echo "                                <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 87), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })()), "html", null, true);
                echo "\" name=\"reponse\" class=\"hidden\">
                                <label for=\"";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "\" class=\"flex flex-col justify-center items-center\">
                                    <div id=\"border\" class=\"rounded-md w-full h-full shadow-sm bg-red-400 bg-opacity-40 backdrop-blur-lg\">
                                        <p class=\" text-gray-200 mt-5 ml-4\">
                                            ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 91), "html", null, true);
                echo "
                                        </p>
                                    </div>
                                </label>
";
                // line 98
                echo "
                                ";
                // line 99
                $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 99, $this->source); })()) + 1);
                // line 100
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                        </div>
                    <div class=\"flex justify-center mt-8\">
                        <button type=\"submit\" class=\"border-2 border-gray-800 rounded-lg px-3 py-2 text-gray-400 cursor-pointer hover:bg-gray-800 hover:text-gray-200\">
                            VALIDER
                        </button>
                    </div>
                        ";
        } else {
            // line 108
            echo "                            <div class=\"flex justify-center mt-8\">
                                <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109), "number" => (isset($context["nextQuestion"]) || array_key_exists("nextQuestion", $context) ? $context["nextQuestion"] : (function () { throw new RuntimeError('Variable "nextQuestion" does not exist.', 109, $this->source); })())]), "html", null, true);
            echo "\" class=\"border-2 border-gray-800 rounded-lg px-3 py-2 text-gray-400 cursor-pointer hover:bg-gray-800 hover:text-gray-200\">
                                    suivant
                                </a>
                            </div>
                    </form>
                ";
        }
        // line 115
        echo "            </div>
        </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 115,  305 => 109,  302 => 108,  293 => 101,  287 => 100,  285 => 99,  282 => 98,  275 => 91,  269 => 88,  262 => 87,  257 => 86,  255 => 85,  251 => 83,  249 => 82,  244 => 79,  241 => 78,  237 => 76,  233 => 74,  230 => 73,  226 => 71,  223 => 70,  219 => 68,  217 => 67,  213 => 66,  210 => 65,  206 => 63,  203 => 62,  199 => 60,  196 => 59,  192 => 57,  189 => 56,  185 => 54,  182 => 53,  178 => 51,  175 => 50,  171 => 48,  168 => 47,  164 => 45,  162 => 44,  158 => 42,  152 => 38,  150 => 37,  144 => 34,  141 => 33,  139 => 32,  133 => 29,  126 => 25,  118 => 19,  108 => 18,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Quizz!{% endblock %}

{% block stylesheets %}
    <style>
        :checked+label #border {
            transform: scale(1.04);
            box-shadow: 0 0 5px #333;
            z-index: -1;
            border-color: #f9fafb;
            border-color: rgba(249, 250, 251, var(1));
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"py-6 flex flex-col justify-center sm:py-12\">
        <div class=\"flex space-x-4 px-4 justify-around\">
            <!-- CARD -->
            <div class=\"bg-gradient-to-t from-black via-red-900 to-red-700  h-72 w-28 md:w-96 md:rounded-3xl rounded-full shadow-md relative flex flex-col items-center justify-between md:items-start py-5 md:p-5 transition-all duration-150\">
                <!-- TEXTS -->
                <div class=\" transform -rotate-90 md:rotate-0 align-middle text-2xl font-semibold text-gray-200 text-center m-auto md:m-0 md:mt-8 w-full\">
                    {{ categorie.name }}
                </div>
                <div>
                    <h3 class=\"text-lg text-gray-300 font-light text-center hidden md:block\">
                        {{ question.question }}
                    </h3>

                    {% if reponse %}
                        <h2 class=\"text-gray-50 tracking-wider text-lg text-center\">
                            La bonne réponse est : {{ reponse }}
                        </h2>

                        {% if result %}
                            <h3 class=\"text-gray-50 tracking-wider text-lg text-center -pb-3\">
                                ah ouais t'es chaud
                            </h3>
                        {% else %}
                            <h3 class=\"text-gray-50 tracking-wider text-lg text-center -pb-3\">
                                t'es mauvais !!
                                {% if categorie.name == 'Harry Potter'%}
                                    retourne a poudlard
                                {% endif %}
                                {% if categorie.name == 'Sigles Français'%}
                                    moi c'est mj (machael jackson)
                                {% endif %}
                                {% if categorie.name == 'Les spécialités culinaires'%}
                                    LLOOLL c'etait pas toi le cordon bleu ?
                                {% endif %}
                                {% if categorie.name == 'Définitions de mots'%}
                                    moi aussi je suis nul sur cette categorie
                                {% endif %}
                                {% if categorie.name == 'Séries TV : les simpson - partie 1'%}
                                    TOH (j'espere ta la ref)
                                {% endif %}
                                {% if categorie.name == 'Séries TV : les simpson - partie 2'%}
                                    TOH x2 (si ta pas la ref regarde le prime)
                                {% endif %}
                                {% if categorie.name == 'Séries TV : Stargate SG1'%}
                                    j'y connais un beignet perso ...
                                {% endif %}
                                {% if categorie.name == 'Séries TV : NCIS'%}
                                    je suis plus serie romantique <3
                                {% endif %}{% if categorie.name == 'Jeux de société'%}
                                    je suis plus jeu video ...
                                {% endif %}
                                {% if categorie.name == 'Programmation'%}
                                    toute façon la programmation c'est pour les looser
                                {% endif %}
                                {% if categorie.name == 'Sigles informatiques'%}
                                    tu dois être meilleur en politique
                                {% endif %}
                            </h3>
                        {% endif %}
                    {% endif %}
                </div>

                <!-- BUTTONS -->
                {% if not reponse %}
                    <form action=\"\" method=\"POST\" >
                        <div class=\"flex w-full justify-around\">
                            {% set value = 1 %}
                            {% for reponse in reponses %}
                                <input type=\"radio\" value=\"{{ reponse.id }}\" id=\"{{ value }}\" name=\"reponse\" class=\"hidden\">
                                <label for=\"{{ value }}\" class=\"flex flex-col justify-center items-center\">
                                    <div id=\"border\" class=\"rounded-md w-full h-full shadow-sm bg-red-400 bg-opacity-40 backdrop-blur-lg\">
                                        <p class=\" text-gray-200 mt-5 ml-4\">
                                            {{ reponse.reponse }}
                                        </p>
                                    </div>
                                </label>
{#                                <button class=\" rounded-md w-24 h-16 shadow-sm bg-red-400 bg-opacity-40 backdrop-blur-lg text-gray-200\">#}
{#                                    {{ reponse.reponse }}#}
{#                                </button>#}

                                {% set value = value + 1 %}
                            {% endfor %}
                        </div>
                    <div class=\"flex justify-center mt-8\">
                        <button type=\"submit\" class=\"border-2 border-gray-800 rounded-lg px-3 py-2 text-gray-400 cursor-pointer hover:bg-gray-800 hover:text-gray-200\">
                            VALIDER
                        </button>
                    </div>
                        {% else %}
                            <div class=\"flex justify-center mt-8\">
                                <a href=\"{{ path('quizz.show', { 'id': categorie.id, 'number': nextQuestion }) }}\" class=\"border-2 border-gray-800 rounded-lg px-3 py-2 text-gray-400 cursor-pointer hover:bg-gray-800 hover:text-gray-200\">
                                    suivant
                                </a>
                            </div>
                    </form>
                {% endif %}
            </div>
        </div>



{% endblock %}", "quiz/show.html.twig", "/Users/maxencejoly/Desktop/W-PHP-502-MAR-2-2-Quiz-hugo.ribaud/my_quiz/templates/quiz/show.html.twig");
    }
}
