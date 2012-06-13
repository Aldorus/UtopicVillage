<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_9330978fe0c01a06912cb8fd4d12ec47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'form_label' => array($this, 'block_form_label'),
            'field_row' => array($this, 'block_field_row'),
            'field_errors' => array($this, 'block_field_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('field_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 61
        echo "
";
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('field_row', $context, $blocks);
        // line 75
        echo "
";
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('field_errors', $context, $blocks);
        // line 97
        echo "
";
    }

    // line 3
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 6
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " class=\"inputs-list\">
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                echo "            <li>
                ";
                // line 9
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"), null, array("in_list_checkbox" => true, "widget" => $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "        </ul>
    ";
        } else {
            // line 14
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 15
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 16
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 18
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 19
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 20
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 21
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 22
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 26
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_field_widget($context, array $blocks = array())
    {
        // line 33
        ob_start();
        // line 34
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 35
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    ";
        if ((!$this->getContext($context, "compound"))) {
            // line 44
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("for" => $this->getContext($context, "id")));
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 47
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 50
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 51
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 57
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 64
    public function block_field_row($context, array $blocks = array())
    {
        // line 65
        ob_start();
        // line 66
        echo "    <div class=\"control-group ";
        echo (((0 < twig_length_filter($this->env, $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"))))) ? ("error") : (""));
        echo " \">
        ";
        // line 67
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null)));
        echo "
        <div class=\"controls\">
            ";
        // line 69
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            ";
        // line 70
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 78
    public function block_field_errors($context, array $blocks = array())
    {
        // line 79
        ob_start();
        // line 80
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 81
            echo "        ";
            if (((!$this->getAttribute($this->getContext($context, "form"), "hasParent")) || twig_in_filter("repeated", $this->getAttribute($this->getContext($context, "form"), "get", array(0 => "types"), "method")))) {
                // line 82
                echo "            <div class=\"control-group error\">
        ";
            }
            // line 84
            echo "        <span class=\"help-inline\">
            ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 86
                echo "                ";
                if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                    // line 87
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                    echo "
                ";
                }
                // line 89
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 90
            echo "        </span>
        ";
            // line 91
            if (((!$this->getAttribute($this->getContext($context, "form"), "hasParent")) || twig_in_filter("repeated", $this->getAttribute($this->getContext($context, "form"), "get", array(0 => "types"), "method")))) {
                // line 92
                echo "            </div>
        ";
            }
            // line 94
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  336 => 94,  313 => 89,  307 => 87,  304 => 86,  287 => 85,  284 => 84,  280 => 82,  277 => 81,  274 => 80,  260 => 70,  256 => 69,  246 => 66,  244 => 65,  241 => 64,  207 => 51,  191 => 50,  173 => 44,  168 => 42,  150 => 34,  628 => 193,  625 => 192,  620 => 137,  616 => 134,  610 => 133,  601 => 130,  596 => 129,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 91,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 83,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 73,  486 => 45,  482 => 44,  478 => 43,  468 => 39,  464 => 38,  459 => 37,  456 => 36,  446 => 32,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 186,  404 => 185,  400 => 183,  394 => 180,  388 => 177,  385 => 176,  383 => 175,  380 => 174,  372 => 171,  369 => 170,  361 => 167,  358 => 166,  352 => 164,  347 => 162,  341 => 160,  339 => 159,  334 => 157,  330 => 91,  325 => 152,  308 => 150,  281 => 146,  269 => 78,  267 => 140,  261 => 137,  255 => 125,  252 => 124,  248 => 122,  216 => 115,  208 => 113,  187 => 111,  184 => 110,  170 => 43,  138 => 68,  98 => 57,  118 => 50,  83 => 35,  144 => 72,  130 => 50,  110 => 18,  100 => 43,  65 => 30,  112 => 44,  101 => 58,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 41,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 27,  431 => 128,  422 => 121,  414 => 119,  412 => 118,  409 => 187,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 172,  371 => 107,  366 => 106,  363 => 168,  355 => 102,  353 => 101,  350 => 163,  342 => 98,  340 => 97,  332 => 92,  329 => 91,  327 => 90,  322 => 151,  320 => 86,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 138,  253 => 74,  250 => 73,  247 => 72,  242 => 120,  235 => 67,  226 => 65,  222 => 117,  219 => 57,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 79,  140 => 40,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 148,  299 => 147,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 144,  273 => 143,  270 => 99,  264 => 97,  262 => 96,  257 => 135,  254 => 94,  251 => 67,  245 => 91,  239 => 119,  236 => 118,  234 => 87,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  212 => 53,  206 => 77,  197 => 55,  182 => 47,  174 => 66,  172 => 65,  164 => 100,  160 => 62,  157 => 97,  155 => 81,  143 => 41,  119 => 46,  114 => 29,  105 => 60,  66 => 5,  56 => 97,  45 => 17,  21 => 11,  18 => 11,  76 => 33,  61 => 3,  36 => 16,  209 => 60,  205 => 112,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 45,  165 => 41,  161 => 99,  152 => 80,  148 => 33,  145 => 32,  141 => 54,  134 => 38,  132 => 25,  127 => 49,  123 => 22,  109 => 39,  93 => 132,  90 => 12,  54 => 78,  133 => 55,  124 => 48,  111 => 43,  80 => 35,  60 => 26,  52 => 22,  72 => 15,  64 => 4,  53 => 35,  42 => 19,  34 => 15,  86 => 38,  79 => 40,  29 => 12,  97 => 42,  95 => 41,  92 => 38,  88 => 34,  78 => 8,  71 => 27,  25 => 3,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 75,  195 => 80,  193 => 73,  190 => 52,  188 => 49,  185 => 48,  179 => 46,  177 => 107,  171 => 67,  162 => 63,  158 => 46,  156 => 60,  153 => 35,  146 => 73,  142 => 54,  137 => 52,  126 => 53,  120 => 51,  117 => 30,  103 => 44,  74 => 7,  47 => 24,  32 => 38,  19 => 2,  23 => 12,  40 => 61,  24 => 11,  26 => 11,  22 => 2,  17 => 1,  69 => 6,  63 => 24,  58 => 47,  49 => 19,  43 => 63,  37 => 16,  20 => 2,  139 => 26,  131 => 48,  128 => 64,  125 => 63,  121 => 21,  115 => 45,  107 => 46,  99 => 37,  96 => 40,  91 => 39,  82 => 19,  77 => 16,  75 => 54,  57 => 27,  50 => 24,  46 => 64,  44 => 20,  39 => 19,  33 => 13,  30 => 32,  27 => 31,  135 => 26,  129 => 24,  122 => 62,  116 => 20,  113 => 19,  108 => 30,  104 => 16,  102 => 15,  94 => 14,  89 => 37,  87 => 22,  84 => 37,  81 => 9,  73 => 31,  70 => 32,  67 => 51,  62 => 49,  59 => 27,  55 => 22,  51 => 77,  48 => 75,  41 => 4,  38 => 41,  35 => 40,  31 => 16,  28 => 12,);
    }
}
