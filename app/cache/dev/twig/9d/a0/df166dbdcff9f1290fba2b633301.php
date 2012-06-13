<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_9da0df166dbdcff9f1290fba2b633301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
            'list_filters' => array($this, 'block_list_filters'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('preview', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 17
        echo "
    <div class=\"sonata-ba-filter\">
        ";
        // line 19
        $this->displayBlock('list_filters', $context, $blocks);
        // line 20
        echo "    </div>
    <div class=\"sonata-ba-list\">
        ";
        // line 22
        $this->displayBlock('list_table', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 13
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
    }

    // line 16
    public function block_show($context, array $blocks = array())
    {
    }

    // line 19
    public function block_list_filters($context, array $blocks = array())
    {
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  83 => 35,  144 => 54,  130 => 50,  110 => 46,  100 => 43,  65 => 30,  112 => 44,  101 => 42,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 181,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 148,  470 => 147,  458 => 135,  455 => 134,  450 => 161,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 132,  431 => 128,  422 => 121,  414 => 119,  412 => 118,  409 => 117,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 108,  371 => 107,  366 => 106,  363 => 104,  355 => 102,  353 => 101,  350 => 100,  342 => 98,  340 => 97,  332 => 92,  329 => 91,  327 => 90,  322 => 87,  320 => 86,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 76,  253 => 74,  250 => 73,  247 => 72,  242 => 69,  235 => 67,  226 => 65,  222 => 64,  219 => 63,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 43,  140 => 40,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 109,  299 => 108,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  264 => 97,  262 => 96,  257 => 75,  254 => 94,  251 => 93,  245 => 91,  239 => 89,  236 => 88,  234 => 87,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  212 => 61,  206 => 77,  197 => 55,  182 => 68,  174 => 66,  172 => 65,  164 => 63,  160 => 62,  157 => 61,  155 => 45,  143 => 41,  119 => 46,  114 => 29,  105 => 40,  66 => 28,  56 => 23,  45 => 17,  21 => 11,  18 => 11,  76 => 21,  61 => 28,  36 => 14,  209 => 60,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 47,  152 => 44,  148 => 57,  145 => 56,  141 => 54,  134 => 38,  132 => 49,  127 => 49,  123 => 52,  109 => 39,  93 => 132,  90 => 39,  54 => 18,  133 => 55,  124 => 48,  111 => 43,  80 => 34,  60 => 26,  52 => 22,  72 => 15,  64 => 25,  53 => 22,  42 => 16,  34 => 18,  86 => 36,  79 => 40,  29 => 15,  97 => 42,  95 => 41,  92 => 38,  88 => 34,  78 => 33,  71 => 29,  25 => 14,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 75,  195 => 80,  193 => 73,  190 => 52,  188 => 70,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 46,  156 => 60,  153 => 59,  146 => 42,  142 => 54,  137 => 52,  126 => 53,  120 => 51,  117 => 30,  103 => 44,  74 => 13,  47 => 21,  32 => 16,  19 => 2,  23 => 12,  40 => 26,  24 => 11,  26 => 14,  22 => 12,  17 => 1,  69 => 29,  63 => 28,  58 => 25,  49 => 19,  43 => 26,  37 => 3,  20 => 2,  139 => 26,  131 => 48,  128 => 34,  125 => 33,  121 => 32,  115 => 45,  107 => 45,  99 => 37,  96 => 40,  91 => 131,  82 => 19,  77 => 16,  75 => 28,  57 => 23,  50 => 24,  46 => 21,  44 => 20,  39 => 15,  33 => 13,  30 => 16,  27 => 12,  135 => 50,  129 => 49,  122 => 47,  116 => 46,  113 => 48,  108 => 30,  104 => 43,  102 => 26,  94 => 33,  89 => 37,  87 => 22,  84 => 36,  81 => 35,  73 => 31,  70 => 32,  67 => 14,  62 => 13,  59 => 27,  55 => 22,  51 => 20,  48 => 23,  41 => 4,  38 => 17,  35 => 24,  31 => 16,  28 => 15,);
    }
}
