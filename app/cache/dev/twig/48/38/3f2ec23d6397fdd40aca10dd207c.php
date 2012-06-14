<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_48383f2ec23d6397fdd40aca10dd207c extends Twig_Template
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

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "field_description"), "hasassociationadmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "element")), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                echo "</a>";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 18
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 21
                echo "            ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 22
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 139,  457 => 136,  452 => 135,  418 => 132,  403 => 128,  397 => 126,  395 => 125,  392 => 124,  379 => 117,  377 => 116,  365 => 93,  359 => 91,  323 => 101,  318 => 99,  297 => 87,  288 => 86,  282 => 84,  279 => 83,  276 => 82,  266 => 76,  233 => 65,  221 => 62,  167 => 48,  159 => 46,  336 => 94,  313 => 97,  307 => 87,  304 => 86,  287 => 85,  284 => 84,  280 => 82,  277 => 81,  274 => 80,  260 => 74,  256 => 69,  246 => 66,  244 => 69,  241 => 68,  207 => 51,  191 => 50,  173 => 44,  168 => 42,  150 => 34,  628 => 193,  625 => 192,  620 => 137,  616 => 134,  610 => 133,  601 => 130,  596 => 129,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 91,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 83,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 73,  486 => 45,  482 => 44,  478 => 43,  468 => 39,  464 => 38,  459 => 137,  456 => 36,  446 => 32,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 129,  404 => 185,  400 => 127,  394 => 180,  388 => 177,  385 => 176,  383 => 119,  380 => 174,  372 => 114,  369 => 113,  361 => 167,  358 => 166,  352 => 164,  347 => 87,  341 => 160,  339 => 159,  334 => 106,  330 => 91,  325 => 152,  308 => 150,  281 => 146,  269 => 78,  267 => 140,  261 => 137,  255 => 125,  252 => 71,  248 => 122,  216 => 115,  208 => 113,  187 => 50,  184 => 110,  170 => 43,  138 => 68,  98 => 23,  118 => 50,  83 => 35,  144 => 72,  130 => 50,  110 => 18,  100 => 22,  65 => 30,  112 => 44,  101 => 58,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 41,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 133,  431 => 128,  422 => 121,  414 => 131,  412 => 118,  409 => 130,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 115,  371 => 107,  366 => 106,  363 => 168,  355 => 102,  353 => 89,  350 => 88,  342 => 98,  340 => 108,  332 => 105,  329 => 104,  327 => 90,  322 => 151,  320 => 100,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 75,  253 => 74,  250 => 73,  247 => 70,  242 => 120,  235 => 66,  226 => 65,  222 => 117,  219 => 57,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 79,  140 => 37,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 95,  299 => 94,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 144,  273 => 143,  270 => 99,  264 => 97,  262 => 96,  257 => 135,  254 => 72,  251 => 67,  245 => 91,  239 => 119,  236 => 118,  234 => 87,  228 => 84,  225 => 64,  223 => 82,  220 => 81,  212 => 59,  206 => 77,  197 => 55,  182 => 49,  174 => 66,  172 => 65,  164 => 100,  160 => 62,  157 => 97,  155 => 81,  143 => 41,  119 => 46,  114 => 23,  105 => 26,  66 => 5,  56 => 13,  45 => 17,  21 => 11,  18 => 11,  76 => 20,  61 => 15,  36 => 17,  209 => 58,  205 => 57,  196 => 79,  192 => 53,  189 => 77,  178 => 71,  176 => 45,  165 => 41,  161 => 99,  152 => 80,  148 => 33,  145 => 32,  141 => 54,  134 => 35,  132 => 34,  127 => 49,  123 => 22,  109 => 39,  93 => 132,  90 => 12,  54 => 78,  133 => 55,  124 => 48,  111 => 30,  80 => 35,  60 => 23,  52 => 20,  72 => 15,  64 => 16,  53 => 35,  42 => 82,  34 => 52,  86 => 38,  79 => 21,  29 => 15,  97 => 42,  95 => 41,  92 => 38,  88 => 34,  78 => 8,  71 => 27,  25 => 3,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 56,  195 => 54,  193 => 73,  190 => 52,  188 => 49,  185 => 48,  179 => 46,  177 => 107,  171 => 67,  162 => 47,  158 => 46,  156 => 45,  153 => 35,  146 => 39,  142 => 54,  137 => 52,  126 => 53,  120 => 51,  117 => 30,  103 => 25,  74 => 7,  47 => 113,  32 => 16,  19 => 2,  23 => 12,  40 => 61,  24 => 11,  26 => 14,  22 => 2,  17 => 11,  69 => 6,  63 => 24,  58 => 47,  49 => 123,  43 => 63,  37 => 53,  20 => 2,  139 => 26,  131 => 48,  128 => 64,  125 => 63,  121 => 21,  115 => 45,  107 => 46,  99 => 37,  96 => 40,  91 => 39,  82 => 22,  77 => 16,  75 => 54,  57 => 27,  50 => 17,  46 => 64,  44 => 19,  39 => 81,  33 => 13,  30 => 32,  27 => 13,  135 => 26,  129 => 24,  122 => 62,  116 => 33,  113 => 19,  108 => 28,  104 => 16,  102 => 15,  94 => 21,  89 => 37,  87 => 22,  84 => 37,  81 => 9,  73 => 19,  70 => 18,  67 => 25,  62 => 49,  59 => 18,  55 => 22,  51 => 77,  48 => 75,  41 => 18,  38 => 41,  35 => 40,  31 => 16,  28 => 12,);
    }
}
