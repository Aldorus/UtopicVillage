<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_136b6242f0b6dfe455ac5230c64e84f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img width=\"15\" height=\"28\" alt=\"Logs\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAcCAYAAAC+lOV/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQVJREFUeNpi/P//PwO5gImBAjBwmlm8vLyOf/v2zYJYDVxcXCe2bdvmeu7cuS+M9vb2ZIWYoKDgUrKcvWLFipWfP38OYcEmeeDAgQtA6gMQCzg4OBigy0tISHxhYmJiYMFh+EIgBhlgAMXo4DEwffzH5ewLwAA5ADUAG/g7lBMJNkFgCO8fGJsJxTNezUTEM15nE4rnAQ4wkjVraWm9BlK/wc62tLR8fOXKFZmmpqYHhoaGT4Fif/Do/Q7Ep/bt28fz+/dvDkZgKdI4ZcqUmMOHD0t8+vSJi1gXKCgoPGQE5ixTIBuExUjwKsiSpyDNnECGOBCLAjEnkeEA8vMbxqFZ6AMEGADoe2NON2x5yQAAAABJRU5ErkJggg==\"/>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 12
            echo "    ";
        }
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 20
            echo "        <span class=\"count\">
            <span>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 24
        echo "</span>
";
    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        // line 28
        echo "    <h2>Logs</h2>

    ";
        // line 30
        if ($this->getAttribute($this->getContext($context, "collector"), "logs")) {
            // line 31
            echo "        <ul class=\"alt\">
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "logs"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 33
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                if ((("ERR" == $this->getAttribute($this->getContext($context, "log"), "priorityName")) || ("ERROR" == $this->getAttribute($this->getContext($context, "log"), "priorityName")))) {
                    echo " error";
                }
                echo "\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                echo "
                    ";
                // line 35
                if (($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "log"), "context"))))) {
                    // line 36
                    echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "log"), "context")), "html", null, true);
                    echo "
                        </small>
                    ";
                }
                // line 41
                echo "                </li>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "        </ul>
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 134,  310 => 132,  306 => 130,  301 => 128,  296 => 126,  238 => 99,  231 => 95,  229 => 94,  217 => 87,  213 => 85,  201 => 80,  183 => 69,  180 => 68,  271 => 114,  258 => 110,  214 => 95,  154 => 45,  151 => 53,  463 => 139,  457 => 136,  452 => 135,  418 => 132,  403 => 128,  397 => 126,  395 => 125,  392 => 124,  379 => 117,  377 => 116,  365 => 93,  359 => 91,  323 => 135,  318 => 99,  297 => 87,  288 => 124,  282 => 121,  279 => 83,  276 => 117,  266 => 76,  233 => 65,  221 => 99,  167 => 48,  159 => 46,  336 => 94,  313 => 97,  307 => 87,  304 => 129,  287 => 85,  284 => 84,  280 => 82,  277 => 81,  274 => 80,  260 => 74,  256 => 69,  246 => 66,  244 => 69,  241 => 68,  207 => 83,  191 => 50,  173 => 44,  168 => 42,  150 => 43,  628 => 193,  625 => 192,  620 => 137,  616 => 134,  610 => 133,  601 => 130,  596 => 129,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 91,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 83,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 73,  486 => 45,  482 => 44,  478 => 43,  468 => 39,  464 => 38,  459 => 137,  456 => 36,  446 => 32,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 129,  404 => 185,  400 => 127,  394 => 180,  388 => 177,  385 => 176,  383 => 119,  380 => 174,  372 => 114,  369 => 113,  361 => 167,  358 => 166,  352 => 164,  347 => 87,  341 => 160,  339 => 159,  334 => 106,  330 => 91,  325 => 152,  308 => 150,  281 => 146,  269 => 78,  267 => 140,  261 => 137,  255 => 109,  252 => 71,  248 => 107,  216 => 115,  208 => 113,  187 => 50,  184 => 110,  170 => 56,  138 => 68,  98 => 23,  118 => 36,  83 => 26,  144 => 72,  130 => 48,  110 => 18,  100 => 39,  65 => 18,  112 => 44,  101 => 58,  68 => 20,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 41,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 133,  431 => 128,  422 => 121,  414 => 131,  412 => 118,  409 => 130,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 115,  371 => 107,  366 => 106,  363 => 168,  355 => 102,  353 => 89,  350 => 88,  342 => 98,  340 => 108,  332 => 137,  329 => 136,  327 => 90,  322 => 151,  320 => 100,  315 => 83,  312 => 82,  298 => 127,  272 => 79,  268 => 78,  265 => 77,  263 => 75,  253 => 74,  250 => 108,  247 => 70,  242 => 120,  235 => 107,  226 => 65,  222 => 90,  219 => 57,  203 => 81,  194 => 76,  186 => 51,  181 => 50,  175 => 66,  163 => 48,  149 => 79,  140 => 52,  106 => 35,  85 => 28,  314 => 133,  309 => 60,  302 => 95,  299 => 94,  294 => 106,  289 => 80,  286 => 123,  278 => 102,  275 => 144,  273 => 143,  270 => 99,  264 => 97,  262 => 111,  257 => 135,  254 => 72,  251 => 67,  245 => 91,  239 => 119,  236 => 98,  234 => 87,  228 => 103,  225 => 64,  223 => 82,  220 => 81,  212 => 59,  206 => 77,  197 => 55,  182 => 49,  174 => 66,  172 => 65,  164 => 59,  160 => 62,  157 => 55,  155 => 81,  143 => 49,  119 => 34,  114 => 34,  105 => 26,  66 => 19,  56 => 14,  45 => 9,  21 => 11,  18 => 11,  76 => 20,  61 => 17,  36 => 5,  209 => 58,  205 => 57,  196 => 77,  192 => 53,  189 => 73,  178 => 71,  176 => 45,  165 => 41,  161 => 58,  152 => 80,  148 => 33,  145 => 49,  141 => 54,  134 => 35,  132 => 43,  127 => 49,  123 => 35,  109 => 36,  93 => 132,  90 => 36,  54 => 13,  133 => 49,  124 => 48,  111 => 33,  80 => 25,  60 => 16,  52 => 13,  72 => 17,  64 => 16,  53 => 35,  42 => 8,  34 => 5,  86 => 27,  79 => 28,  29 => 5,  97 => 38,  95 => 30,  92 => 37,  88 => 34,  78 => 8,  71 => 21,  25 => 3,  224 => 91,  215 => 62,  211 => 88,  204 => 84,  200 => 87,  195 => 54,  193 => 73,  190 => 52,  188 => 49,  185 => 75,  179 => 46,  177 => 67,  171 => 67,  162 => 47,  158 => 57,  156 => 56,  153 => 35,  146 => 39,  142 => 48,  137 => 51,  126 => 39,  120 => 37,  117 => 30,  103 => 28,  74 => 21,  47 => 11,  32 => 6,  19 => 2,  23 => 12,  40 => 61,  24 => 3,  26 => 3,  22 => 2,  17 => 11,  69 => 21,  63 => 24,  58 => 16,  49 => 12,  43 => 12,  37 => 53,  20 => 2,  139 => 47,  131 => 48,  128 => 64,  125 => 36,  121 => 21,  115 => 45,  107 => 46,  99 => 37,  96 => 40,  91 => 31,  82 => 27,  77 => 24,  75 => 24,  57 => 27,  50 => 12,  46 => 13,  44 => 10,  39 => 81,  33 => 7,  30 => 32,  27 => 13,  135 => 41,  129 => 38,  122 => 62,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 15,  94 => 32,  89 => 30,  87 => 22,  84 => 29,  81 => 28,  73 => 23,  70 => 18,  67 => 25,  62 => 22,  59 => 21,  55 => 15,  51 => 77,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
