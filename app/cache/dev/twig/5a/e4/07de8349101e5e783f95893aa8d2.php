<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_5ae407de8349101e5e783f95893aa8d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->getAttribute($this->getContext($context, "settings"), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 139,  457 => 136,  452 => 135,  418 => 132,  403 => 128,  397 => 126,  395 => 125,  392 => 124,  379 => 117,  377 => 116,  365 => 93,  359 => 91,  323 => 101,  318 => 99,  297 => 87,  288 => 86,  282 => 84,  279 => 83,  276 => 82,  266 => 76,  233 => 65,  221 => 62,  167 => 48,  159 => 46,  336 => 94,  313 => 97,  307 => 87,  304 => 86,  287 => 85,  284 => 84,  280 => 82,  277 => 81,  274 => 80,  260 => 74,  256 => 69,  246 => 66,  244 => 69,  241 => 68,  207 => 51,  191 => 50,  173 => 44,  168 => 42,  150 => 34,  628 => 193,  625 => 192,  620 => 137,  616 => 134,  610 => 133,  601 => 130,  596 => 129,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 91,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 83,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 73,  486 => 45,  482 => 44,  478 => 43,  468 => 39,  464 => 38,  459 => 137,  456 => 36,  446 => 32,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 129,  404 => 185,  400 => 127,  394 => 180,  388 => 177,  385 => 176,  383 => 119,  380 => 174,  372 => 114,  369 => 113,  361 => 167,  358 => 166,  352 => 164,  347 => 87,  341 => 160,  339 => 159,  334 => 106,  330 => 91,  325 => 152,  308 => 150,  281 => 146,  269 => 78,  267 => 140,  261 => 137,  255 => 125,  252 => 71,  248 => 122,  216 => 115,  208 => 113,  187 => 50,  184 => 110,  170 => 43,  138 => 68,  98 => 23,  118 => 50,  83 => 35,  144 => 72,  130 => 50,  110 => 18,  100 => 43,  65 => 30,  112 => 44,  101 => 58,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 41,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 133,  431 => 128,  422 => 121,  414 => 131,  412 => 118,  409 => 130,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 115,  371 => 107,  366 => 106,  363 => 168,  355 => 102,  353 => 89,  350 => 88,  342 => 98,  340 => 108,  332 => 105,  329 => 104,  327 => 90,  322 => 151,  320 => 100,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 75,  253 => 74,  250 => 73,  247 => 70,  242 => 120,  235 => 66,  226 => 65,  222 => 117,  219 => 57,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 79,  140 => 37,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 95,  299 => 94,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 144,  273 => 143,  270 => 99,  264 => 97,  262 => 96,  257 => 135,  254 => 72,  251 => 67,  245 => 91,  239 => 119,  236 => 118,  234 => 87,  228 => 84,  225 => 64,  223 => 82,  220 => 81,  212 => 59,  206 => 77,  197 => 55,  182 => 49,  174 => 66,  172 => 65,  164 => 100,  160 => 62,  157 => 97,  155 => 81,  143 => 41,  119 => 46,  114 => 29,  105 => 26,  66 => 5,  56 => 13,  45 => 17,  21 => 11,  18 => 11,  76 => 20,  61 => 15,  36 => 16,  209 => 58,  205 => 57,  196 => 79,  192 => 53,  189 => 77,  178 => 71,  176 => 45,  165 => 41,  161 => 99,  152 => 80,  148 => 33,  145 => 32,  141 => 54,  134 => 35,  132 => 34,  127 => 49,  123 => 22,  109 => 39,  93 => 132,  90 => 12,  54 => 78,  133 => 55,  124 => 48,  111 => 30,  80 => 35,  60 => 26,  52 => 124,  72 => 15,  64 => 16,  53 => 35,  42 => 82,  34 => 52,  86 => 38,  79 => 21,  29 => 15,  97 => 42,  95 => 41,  92 => 38,  88 => 34,  78 => 8,  71 => 27,  25 => 3,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 56,  195 => 54,  193 => 73,  190 => 52,  188 => 49,  185 => 48,  179 => 46,  177 => 107,  171 => 67,  162 => 47,  158 => 46,  156 => 45,  153 => 35,  146 => 39,  142 => 54,  137 => 52,  126 => 53,  120 => 51,  117 => 30,  103 => 25,  74 => 7,  47 => 113,  32 => 45,  19 => 2,  23 => 12,  40 => 61,  24 => 11,  26 => 14,  22 => 2,  17 => 11,  69 => 6,  63 => 24,  58 => 47,  49 => 123,  43 => 63,  37 => 53,  20 => 2,  139 => 26,  131 => 48,  128 => 64,  125 => 63,  121 => 21,  115 => 45,  107 => 46,  99 => 37,  96 => 40,  91 => 39,  82 => 22,  77 => 16,  75 => 54,  57 => 27,  50 => 24,  46 => 64,  44 => 112,  39 => 81,  33 => 13,  30 => 32,  27 => 13,  135 => 26,  129 => 24,  122 => 62,  116 => 33,  113 => 19,  108 => 28,  104 => 16,  102 => 15,  94 => 14,  89 => 37,  87 => 22,  84 => 37,  81 => 9,  73 => 19,  70 => 18,  67 => 17,  62 => 49,  59 => 14,  55 => 22,  51 => 77,  48 => 75,  41 => 4,  38 => 41,  35 => 40,  31 => 16,  28 => 12,);
    }
}
