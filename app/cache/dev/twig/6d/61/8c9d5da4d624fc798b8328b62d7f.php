<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_6d618c9d5da4d624fc798b8328b62d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  24 => 3,  26 => 3,  22 => 2,  17 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 6,  43 => 15,  37 => 12,  20 => 2,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 30,  77 => 27,  75 => 26,  57 => 15,  50 => 13,  46 => 11,  44 => 10,  39 => 5,  33 => 5,  30 => 4,  27 => 6,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 38,  102 => 37,  94 => 32,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 20,  62 => 16,  59 => 15,  55 => 8,  51 => 11,  48 => 10,  41 => 6,  38 => 8,  35 => 8,  31 => 4,  28 => 3,);
    }
}
