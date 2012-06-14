<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_38930e85921a25dc8d51b3a6d6cb55e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        if ((($this->getAttribute($this->getContext($context, "field_description"), "hasassociationadmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "element")), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>
                ";
                // line 25
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 28
            echo "    ";
        }
        // line 29
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 73,  136 => 60,  389 => 154,  378 => 148,  356 => 140,  354 => 139,  349 => 138,  345 => 136,  326 => 126,  305 => 118,  291 => 111,  237 => 86,  229 => 83,  213 => 76,  210 => 75,  183 => 67,  180 => 66,  169 => 61,  154 => 55,  147 => 53,  631 => 382,  622 => 376,  618 => 374,  606 => 367,  592 => 361,  585 => 354,  581 => 353,  575 => 350,  565 => 346,  555 => 339,  537 => 327,  517 => 314,  484 => 294,  460 => 280,  451 => 277,  434 => 268,  428 => 265,  423 => 263,  416 => 258,  408 => 253,  398 => 159,  375 => 232,  373 => 231,  368 => 144,  303 => 182,  295 => 177,  283 => 168,  231 => 84,  201 => 128,  463 => 139,  457 => 136,  452 => 135,  418 => 132,  403 => 128,  397 => 126,  395 => 125,  392 => 242,  379 => 117,  377 => 236,  365 => 93,  359 => 141,  323 => 101,  318 => 124,  297 => 87,  288 => 86,  282 => 84,  279 => 167,  276 => 82,  266 => 76,  233 => 65,  221 => 62,  167 => 48,  159 => 58,  336 => 94,  313 => 97,  307 => 87,  304 => 86,  287 => 85,  284 => 84,  280 => 106,  277 => 81,  274 => 165,  260 => 157,  256 => 93,  246 => 89,  244 => 69,  241 => 87,  207 => 51,  191 => 50,  173 => 44,  168 => 42,  150 => 34,  628 => 193,  625 => 192,  620 => 137,  616 => 370,  610 => 133,  601 => 365,  596 => 363,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 334,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 317,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 299,  486 => 45,  482 => 44,  478 => 43,  468 => 283,  464 => 38,  459 => 137,  456 => 279,  446 => 275,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 129,  404 => 252,  400 => 127,  394 => 180,  388 => 240,  385 => 152,  383 => 119,  380 => 174,  372 => 114,  369 => 113,  361 => 167,  358 => 222,  352 => 219,  347 => 87,  341 => 160,  339 => 133,  334 => 106,  330 => 91,  325 => 152,  308 => 184,  281 => 146,  269 => 163,  267 => 100,  261 => 137,  255 => 125,  252 => 92,  248 => 122,  216 => 115,  208 => 113,  187 => 50,  184 => 110,  170 => 43,  138 => 68,  98 => 66,  118 => 50,  83 => 38,  144 => 72,  130 => 86,  110 => 50,  100 => 22,  65 => 51,  112 => 44,  101 => 58,  68 => 28,  582 => 196,  577 => 194,  571 => 349,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 323,  523 => 319,  515 => 313,  512 => 173,  509 => 310,  503 => 159,  499 => 303,  497 => 156,  491 => 152,  480 => 292,  476 => 149,  473 => 285,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 133,  431 => 128,  422 => 121,  414 => 131,  412 => 118,  409 => 130,  401 => 160,  399 => 114,  396 => 158,  390 => 112,  382 => 237,  374 => 147,  371 => 107,  366 => 106,  363 => 142,  355 => 102,  353 => 89,  350 => 88,  342 => 135,  340 => 210,  332 => 129,  329 => 104,  327 => 200,  322 => 125,  320 => 100,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 75,  253 => 74,  250 => 73,  247 => 70,  242 => 120,  235 => 66,  226 => 82,  222 => 117,  219 => 78,  203 => 56,  194 => 87,  186 => 82,  181 => 50,  175 => 76,  163 => 48,  149 => 79,  140 => 51,  106 => 71,  85 => 59,  314 => 82,  309 => 60,  302 => 95,  299 => 94,  294 => 106,  289 => 80,  286 => 109,  278 => 102,  275 => 144,  273 => 102,  270 => 101,  264 => 98,  262 => 96,  257 => 135,  254 => 72,  251 => 67,  245 => 91,  239 => 149,  236 => 118,  234 => 87,  228 => 84,  225 => 64,  223 => 82,  220 => 138,  212 => 59,  206 => 73,  197 => 55,  182 => 80,  174 => 62,  172 => 65,  164 => 100,  160 => 62,  157 => 97,  155 => 81,  143 => 41,  119 => 43,  114 => 51,  105 => 26,  66 => 49,  56 => 23,  45 => 19,  21 => 18,  18 => 11,  76 => 29,  61 => 24,  36 => 32,  209 => 58,  205 => 129,  196 => 79,  192 => 53,  189 => 119,  178 => 71,  176 => 45,  165 => 60,  161 => 71,  152 => 80,  148 => 93,  145 => 32,  141 => 54,  134 => 48,  132 => 34,  127 => 49,  123 => 22,  109 => 39,  93 => 64,  90 => 67,  54 => 40,  133 => 55,  124 => 56,  111 => 40,  80 => 57,  60 => 30,  52 => 20,  72 => 32,  64 => 25,  53 => 22,  42 => 19,  34 => 17,  86 => 38,  79 => 21,  29 => 15,  97 => 42,  95 => 44,  92 => 43,  88 => 35,  78 => 37,  71 => 29,  25 => 3,  224 => 81,  215 => 136,  211 => 88,  204 => 84,  200 => 72,  195 => 54,  193 => 73,  190 => 52,  188 => 69,  185 => 68,  179 => 115,  177 => 63,  171 => 75,  162 => 59,  158 => 70,  156 => 69,  153 => 68,  146 => 64,  142 => 63,  137 => 52,  126 => 57,  120 => 51,  117 => 42,  103 => 25,  74 => 7,  47 => 20,  32 => 16,  19 => 12,  23 => 12,  40 => 61,  24 => 20,  26 => 14,  22 => 13,  17 => 11,  69 => 6,  63 => 31,  58 => 25,  49 => 21,  43 => 19,  37 => 18,  20 => 12,  139 => 26,  131 => 58,  128 => 46,  125 => 63,  121 => 55,  115 => 45,  107 => 46,  99 => 71,  96 => 40,  91 => 39,  82 => 62,  77 => 31,  75 => 58,  57 => 23,  50 => 21,  46 => 40,  44 => 35,  39 => 18,  33 => 16,  30 => 32,  27 => 14,  135 => 88,  129 => 24,  122 => 44,  116 => 33,  113 => 75,  108 => 28,  104 => 47,  102 => 15,  94 => 21,  89 => 37,  87 => 22,  84 => 40,  81 => 9,  73 => 28,  70 => 18,  67 => 33,  62 => 26,  59 => 18,  55 => 22,  51 => 77,  48 => 20,  41 => 19,  38 => 41,  35 => 17,  31 => 15,  28 => 15,);
    }
}