<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ef9a68f6b6f26c1c1c4f1a652f362554 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 45,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  19 => 2,  23 => 5,  40 => 7,  24 => 6,  26 => 3,  22 => 2,  17 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 6,  43 => 15,  37 => 12,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 30,  77 => 28,  75 => 26,  57 => 22,  50 => 13,  46 => 11,  44 => 10,  39 => 15,  33 => 7,  30 => 9,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 38,  102 => 37,  94 => 31,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 26,  67 => 20,  62 => 24,  59 => 23,  55 => 8,  51 => 11,  48 => 10,  41 => 6,  38 => 8,  35 => 8,  31 => 6,  28 => 3,);
    }
}
