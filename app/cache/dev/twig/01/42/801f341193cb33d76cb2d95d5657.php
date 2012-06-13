<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_0142801f341193cb33d76cb2d95d5657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "field_element"), array("attr" => array("class" => "title")));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 25,  21 => 12,  18 => 11,  76 => 21,  61 => 16,  36 => 14,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 28,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 23,  60 => 16,  52 => 12,  72 => 16,  64 => 17,  53 => 13,  42 => 19,  34 => 17,  86 => 28,  79 => 40,  29 => 19,  97 => 34,  95 => 21,  92 => 39,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 28,  32 => 11,  19 => 11,  23 => 12,  40 => 6,  24 => 14,  26 => 14,  22 => 12,  17 => 1,  69 => 20,  63 => 18,  58 => 15,  49 => 29,  43 => 26,  37 => 13,  20 => 11,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 20,  46 => 10,  44 => 11,  39 => 23,  33 => 20,  30 => 4,  27 => 13,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 25,  81 => 26,  73 => 21,  70 => 19,  67 => 19,  62 => 24,  59 => 23,  55 => 14,  51 => 13,  48 => 10,  41 => 25,  38 => 24,  35 => 21,  31 => 16,  28 => 3,);
    }
}
