<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_db1436eaf7df9c7a328f430403f003b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("SensioDistributionBundle::Configurator/form.html.twig", ));
        // line 7
        echo "    ";
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 8
        echo "
    <h1>Configure your Database</h1>
    <p>If your website needs a database connection, please configure it here.</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"symfony-form-column\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "driver"));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "host"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
        </div>
        <div class=\"symfony-form-column\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "user"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "
        </div>

        ";
        // line 24
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 134,  310 => 132,  306 => 130,  301 => 128,  296 => 126,  238 => 99,  217 => 87,  271 => 114,  258 => 110,  214 => 95,  151 => 53,  166 => 71,  136 => 60,  389 => 154,  378 => 148,  356 => 140,  354 => 139,  349 => 138,  345 => 136,  326 => 126,  305 => 118,  291 => 111,  237 => 86,  229 => 94,  213 => 85,  210 => 75,  183 => 69,  180 => 68,  169 => 75,  154 => 45,  147 => 53,  631 => 382,  622 => 376,  618 => 374,  606 => 367,  592 => 361,  585 => 354,  581 => 353,  575 => 350,  565 => 346,  555 => 339,  537 => 327,  517 => 314,  484 => 294,  460 => 280,  451 => 277,  434 => 268,  428 => 265,  423 => 263,  416 => 258,  408 => 253,  398 => 159,  375 => 232,  373 => 231,  368 => 144,  303 => 182,  295 => 177,  283 => 168,  231 => 95,  201 => 80,  463 => 139,  457 => 136,  452 => 135,  418 => 132,  403 => 128,  397 => 126,  395 => 125,  392 => 242,  379 => 117,  377 => 236,  365 => 93,  359 => 141,  323 => 135,  318 => 124,  297 => 87,  288 => 124,  282 => 121,  279 => 167,  276 => 117,  266 => 76,  233 => 65,  221 => 99,  167 => 48,  159 => 58,  336 => 94,  313 => 97,  307 => 87,  304 => 129,  287 => 85,  284 => 84,  280 => 106,  277 => 81,  274 => 165,  260 => 157,  256 => 93,  246 => 89,  244 => 69,  241 => 87,  207 => 83,  191 => 50,  173 => 44,  168 => 42,  150 => 43,  628 => 193,  625 => 192,  620 => 137,  616 => 370,  610 => 133,  601 => 365,  596 => 363,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 334,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 317,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 299,  486 => 45,  482 => 44,  478 => 43,  468 => 283,  464 => 38,  459 => 137,  456 => 279,  446 => 275,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 129,  404 => 252,  400 => 127,  394 => 180,  388 => 240,  385 => 152,  383 => 119,  380 => 174,  372 => 114,  369 => 113,  361 => 167,  358 => 222,  352 => 219,  347 => 87,  341 => 160,  339 => 133,  334 => 106,  330 => 91,  325 => 152,  308 => 184,  281 => 146,  269 => 163,  267 => 100,  261 => 137,  255 => 109,  252 => 92,  248 => 107,  216 => 115,  208 => 113,  187 => 50,  184 => 110,  170 => 56,  138 => 68,  98 => 66,  118 => 36,  83 => 26,  144 => 72,  130 => 48,  110 => 50,  100 => 39,  65 => 17,  112 => 44,  101 => 49,  68 => 22,  582 => 196,  577 => 194,  571 => 349,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 323,  523 => 319,  515 => 313,  512 => 173,  509 => 310,  503 => 159,  499 => 303,  497 => 156,  491 => 152,  480 => 292,  476 => 149,  473 => 285,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 133,  431 => 128,  422 => 121,  414 => 131,  412 => 118,  409 => 130,  401 => 160,  399 => 114,  396 => 158,  390 => 112,  382 => 237,  374 => 147,  371 => 107,  366 => 106,  363 => 142,  355 => 102,  353 => 89,  350 => 88,  342 => 135,  340 => 210,  332 => 137,  329 => 136,  327 => 200,  322 => 125,  320 => 100,  315 => 83,  312 => 82,  298 => 127,  272 => 79,  268 => 78,  265 => 77,  263 => 75,  253 => 74,  250 => 108,  247 => 70,  242 => 120,  235 => 107,  226 => 82,  222 => 90,  219 => 78,  203 => 81,  194 => 76,  186 => 82,  181 => 50,  175 => 66,  163 => 73,  149 => 67,  140 => 52,  106 => 35,  85 => 28,  314 => 133,  309 => 60,  302 => 95,  299 => 94,  294 => 106,  289 => 80,  286 => 123,  278 => 102,  275 => 144,  273 => 102,  270 => 101,  264 => 98,  262 => 111,  257 => 135,  254 => 72,  251 => 67,  245 => 91,  239 => 149,  236 => 98,  234 => 87,  228 => 103,  225 => 64,  223 => 82,  220 => 138,  212 => 59,  206 => 73,  197 => 55,  182 => 79,  174 => 62,  172 => 65,  164 => 59,  160 => 72,  157 => 55,  155 => 81,  143 => 49,  119 => 34,  114 => 34,  105 => 26,  66 => 21,  56 => 14,  45 => 9,  21 => 3,  18 => 11,  76 => 39,  61 => 16,  36 => 6,  209 => 58,  205 => 129,  196 => 77,  192 => 53,  189 => 73,  178 => 71,  176 => 45,  165 => 60,  161 => 58,  152 => 80,  148 => 64,  145 => 49,  141 => 54,  134 => 48,  132 => 43,  127 => 49,  123 => 35,  109 => 36,  93 => 64,  90 => 36,  54 => 19,  133 => 49,  124 => 56,  111 => 33,  80 => 25,  60 => 20,  52 => 13,  72 => 17,  64 => 35,  53 => 23,  42 => 8,  34 => 11,  86 => 27,  79 => 20,  29 => 4,  97 => 38,  95 => 30,  92 => 37,  88 => 32,  78 => 37,  71 => 20,  25 => 5,  224 => 91,  215 => 136,  211 => 88,  204 => 84,  200 => 87,  195 => 54,  193 => 73,  190 => 84,  188 => 69,  185 => 75,  179 => 115,  177 => 67,  171 => 67,  162 => 59,  158 => 57,  156 => 56,  153 => 66,  146 => 64,  142 => 48,  137 => 51,  126 => 39,  120 => 37,  117 => 56,  103 => 28,  74 => 38,  47 => 17,  32 => 8,  19 => 2,  23 => 12,  40 => 8,  24 => 3,  26 => 5,  22 => 3,  17 => 1,  69 => 21,  63 => 28,  58 => 26,  49 => 12,  43 => 12,  37 => 18,  20 => 2,  139 => 47,  131 => 61,  128 => 46,  125 => 36,  121 => 55,  115 => 45,  107 => 51,  99 => 45,  96 => 40,  91 => 31,  82 => 43,  77 => 25,  75 => 21,  57 => 15,  50 => 12,  46 => 13,  44 => 14,  39 => 7,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 58,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 15,  94 => 32,  89 => 30,  87 => 41,  84 => 29,  81 => 24,  73 => 23,  70 => 25,  67 => 33,  62 => 22,  59 => 21,  55 => 19,  51 => 23,  48 => 12,  41 => 9,  38 => 11,  35 => 7,  31 => 10,  28 => 7,);
    }
}
