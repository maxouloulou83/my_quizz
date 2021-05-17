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

/* navbar.html.twig */
class __TwigTemplate_1cbebd04f85db61143ab104a8cbd3bfd6ab8725fb415c41f27356e2d06cfa170 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "
<div class=\"flex\">
    <!-- Nav -->
    <div
            class=\"flex flex-wrap justify-between w-screen h-20 text-white bg-black md:flex-nowrap\"
    >
        <!-- LOGO -->
        <div class=\"z-30 flex items-center h-full pl-3 space-x-3 bg-black\">
            <svg xmlns=\"http://www.w3.org/2000/svg\"
                 xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                 aria-hidden=\"true\"
                 role=\"img\"
                 class=\"iconify iconify--uil\"
                 width=\"32\"
                 height=\"32\"
                 preserveAspectRatio=\"xMidYMid meet\"
                 viewBox=\"0 0 24 24\">
                <path d=\"M18 5h1v1a1 1 0 0 0 2 0V5h1a1 1 0 0 0 0-2h-1V2a1 1 0 0 0-2 0v1h-1a1 1 0 0 0 0 2zM7 7v10a1 1 0 0 0 2 0V7a1 1 0 0 0-2 0zm14.6 2a1 1 0 0 0-.78 1.18a9 9 0 1 1-7-7a1 1 0 1 0 .4-2A10.8 10.8 0 0 0 12 1a11 11 0 1 0 11 11a10.8 10.8 0 0 0-.22-2.2A1 1 0 0 0 21.6 9zM11 9v1a3 3 0 0 0 .78 2a3 3 0 0 0-.78 2v1a3 3 0 0 0 3 3h1a3 3 0 0 0 3-3v-1a3 3 0 0 0-.78-2a3 3 0 0 0 .78-2V9a3 3 0 0 0-3-3h-1a3 3 0 0 0-3 3zm5 6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1zm0-6v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1z\"
                      fill=\"currentColor\">

                </path>
            </svg>

            </svg>
            <p class=\"text-2xl text-\">Spikyzz</p>
        </div>
        <!-- MenuButton -->
        <button
                class=\"z-30 flex items-center justify-end flex-grow pr-3 bg-black focus:outline-none md:hidden\"
        >
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    class=\"w-8 h-8\"
                    fill=\"none\"
                    viewBox=\"0 0 24 24\"
                    stroke=\"currentColor\"
            >
                <path
                        stroke-linecap=\"round\"
                        stroke-linejoin=\"round\"
                        stroke-width=\"2\"
                        d=\"M4 6h16M4 12h16M4 18h16\"
                />
            </svg>
        </button>

        <!-- Menu -->
        <div
                class=\"flex flex-col items-stretch w-screen text-xl text-center transform bg-black md:flex-row md:translate-y-0 md:space-x-5 md:items-center md:justify-end md:pr-3\"
        >
            ";
        // line 51
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
            // line 52
            echo "            <a
                    href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Home</a>
            <a
                    href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz");
            echo "\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Quizz</a>
            <a
                    href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none md:bg-red-600 md:rounded-full md:w-24\">Log In</a>
            <a
                    href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-red-600 md:border-solid md:border-2 md:rounded-full md:w-24 md:leading-9\">Register</a>
            ";
        } else {
            // line 65
            echo "            <a
                    href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Home</a>
            <a
                    href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz");
            echo "\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Quizz</a>
            <a
                    href=\"\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">My quizz</a>
            <a
                    href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-red-600 md:border-solid md:border-2 md:rounded-full md:w-24 md:leading-9\">logout</a>
            ";
        }
        // line 78
        echo "

        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 78,  142 => 75,  133 => 69,  127 => 66,  124 => 65,  118 => 62,  112 => 59,  106 => 56,  100 => 53,  97 => 52,  95 => 51,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"flex\">
    <!-- Nav -->
    <div
            class=\"flex flex-wrap justify-between w-screen h-20 text-white bg-black md:flex-nowrap\"
    >
        <!-- LOGO -->
        <div class=\"z-30 flex items-center h-full pl-3 space-x-3 bg-black\">
            <svg xmlns=\"http://www.w3.org/2000/svg\"
                 xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                 aria-hidden=\"true\"
                 role=\"img\"
                 class=\"iconify iconify--uil\"
                 width=\"32\"
                 height=\"32\"
                 preserveAspectRatio=\"xMidYMid meet\"
                 viewBox=\"0 0 24 24\">
                <path d=\"M18 5h1v1a1 1 0 0 0 2 0V5h1a1 1 0 0 0 0-2h-1V2a1 1 0 0 0-2 0v1h-1a1 1 0 0 0 0 2zM7 7v10a1 1 0 0 0 2 0V7a1 1 0 0 0-2 0zm14.6 2a1 1 0 0 0-.78 1.18a9 9 0 1 1-7-7a1 1 0 1 0 .4-2A10.8 10.8 0 0 0 12 1a11 11 0 1 0 11 11a10.8 10.8 0 0 0-.22-2.2A1 1 0 0 0 21.6 9zM11 9v1a3 3 0 0 0 .78 2a3 3 0 0 0-.78 2v1a3 3 0 0 0 3 3h1a3 3 0 0 0 3-3v-1a3 3 0 0 0-.78-2a3 3 0 0 0 .78-2V9a3 3 0 0 0-3-3h-1a3 3 0 0 0-3 3zm5 6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1zm0-6v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1z\"
                      fill=\"currentColor\">

                </path>
            </svg>

            </svg>
            <p class=\"text-2xl text-\">Spikyzz</p>
        </div>
        <!-- MenuButton -->
        <button
                class=\"z-30 flex items-center justify-end flex-grow pr-3 bg-black focus:outline-none md:hidden\"
        >
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    class=\"w-8 h-8\"
                    fill=\"none\"
                    viewBox=\"0 0 24 24\"
                    stroke=\"currentColor\"
            >
                <path
                        stroke-linecap=\"round\"
                        stroke-linejoin=\"round\"
                        stroke-width=\"2\"
                        d=\"M4 6h16M4 12h16M4 18h16\"
                />
            </svg>
        </button>

        <!-- Menu -->
        <div
                class=\"flex flex-col items-stretch w-screen text-xl text-center transform bg-black md:flex-row md:translate-y-0 md:space-x-5 md:items-center md:justify-end md:pr-3\"
        >
            {% if not app.user %}
            <a
                    href=\"{{ path('index') }}\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Home</a>
            <a
                    href=\"{{ path('quizz') }}\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Quizz</a>
            <a
                    href=\"{{ path('login') }}\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none md:bg-red-600 md:rounded-full md:w-24\">Log In</a>
            <a
                    href=\"{{ path('register') }}\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-red-600 md:border-solid md:border-2 md:rounded-full md:w-24 md:leading-9\">Register</a>
            {% else %}
            <a
                    href=\"{{ path('index') }}\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Home</a>
            <a
                    href=\"{{ path('quizz') }}\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">Quizz</a>
            <a
                    href=\"\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-none\">My quizz</a>
            <a
                    href=\"{{ path('app_logout') }}\"
                    class=\"h-10 leading-10 border-b-2 border-dotted md:border-red-600 md:border-solid md:border-2 md:rounded-full md:w-24 md:leading-9\">logout</a>
            {% endif %}


        </div>
    </div>
</div>
", "navbar.html.twig", "/Users/maxencejoly/Desktop/W-PHP-502-MAR-2-2-Quiz-hugo.ribaud/my_quiz/templates/navbar.html.twig");
    }
}
