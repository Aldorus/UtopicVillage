<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_32960975cc6d108bb38d9192f44b5e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        if (twig_test_empty($this->getContext($context, "value"))) {
            // line 5
            echo "&nbsp;";
        } else {
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), "H:i:s"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 25,  21 => 12,  18 => 11,  76 => 21,  61 => 16,  36 => 14,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 28,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 23,  60 => 16,  52 => 12,  72 => 16,  64 => 17,  53 => 13,  42 => 19,  34 => 7,  86 => 28,  79 => 40,  29 => 4,  97 => 34,  95 => 21,  92 => 39,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 28,  32 => 16,  19 => 11,  23 => 12,  40 => 6,  24 => 14,  26 => 3,  22 => 12,  17 => 1,  69 => 20,  63 => 18,  58 => 15,  49 => 29,  43 => 26,  37 => 13,  20 => 11,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 20,  46 => 10,  44 => 11,  39 => 23,  33 => 20,  30 => 4,  27 => 13,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 25,  81 => 26,  73 => 21,  70 => 19,  67 => 19,  62 => 24,  59 => 23,  55 => 14,  51 => 13,  48 => 10,  41 => 25,  38 => 24,  35 => 21,  31 => 5,  28 => 3,);
    }
}
