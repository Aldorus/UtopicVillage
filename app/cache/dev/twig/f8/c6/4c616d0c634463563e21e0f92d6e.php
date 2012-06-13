<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_f8c64c616d0c634463563e21e0f92d6e extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != $this->getContext($context, "position"))) {
            // line 3
            echo "    <div style=\"clear: both; height: 40px;\"></div>
";
        }
        // line 5
        echo "
<div class=\"sf-toolbarreset\"
    ";
        // line 7
        if (("normal" != $this->getContext($context, "position"))) {
            // line 8
            echo "    style=\"position: ";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo ";
        background-color: #f7f7f7;
            background-image: -moz-linear-gradient(-90deg, #e4e4e4, #ffffff);
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
            bottom: 0;
            left:0;
            margin:0;
            padding: 0;
            z-index: 6000000;
            width: 100%;
            border-top: 1px solid #bbb;
            font: 11px Verdana, Arial, sans-serif;
            text-align: left;
            color: #2f2f2f;\"
    ";
        }
        // line 23
        echo ">

    <span style=\"display: inline-block; min-height: 24px; width: 40px; float: right;\">&nbsp;</span>

    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"), "profiler_url" => $this->getContext($context, "profiler_url"), "token" => $this->getAttribute($this->getContext($context, "profile"), "token"), "name" => $this->getContext($context, "name"), "verbose" => $this->getContext($context, "verbose"))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != $this->getContext($context, "position"))) {
            // line 39
            echo "        <span style=\"display:block; position:absolute; top:12px; right:10px; width:14px; height:14px; cursor: pointer;\">
            <img width=\"15\" height=\"15\" alt=\"Hide Toolbar\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1Mjc0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1Mjg0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3Q0Q5NTUyNTQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyNjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjHyj8cAAAFiSURBVHjajJPNSsNAFIVvfpZNFwXBkBACcdcqiFASNz6A4FYR4lYUX8ONb6C4EwRXvoFY4rYotCRLQwgk4CZSl/nx3mFSplmUHvjIzJk5YW5yRwqCADo6Rk6QA2QXmXJekTdxoyqMDeSeh0V5nBvkGblGfsXwNvKJbMF6nSNjZB/5k7n5uEGw1Q5yRwMKn4pHtSwLPM+Dfr/P5r1eD1zXZb6gKyqFwn7rSJIEuq6DoigwGo3YmJ6qqoJhGGxdkC/zj8HUNA2EYQhlWYIsy+A4DgvWdQ1RFLF1QWMKD0RnsVhAHMcrRSZJAkVRdGsfUPhHdDRNA9u2V3aZpsn8jnIKT8Sah8Ph8qh0AnrSnPxOzR8y//HLmrMsYzXPZjNI0xTm8zlUVQV5nndrfpF4e74jR7C5npCLtknOkO8Ng1PeotCGc2QPeVgTqpBb5JBas3sxyLjkR/L5rWo14f6X+LZ/AQYA+DZpzJCnQZ0AAAAASUVORK5CYII=\" onclick=\"this.parentNode.parentNode.style.display = 'none'; (this.parentNode.parentNode.previousElementSibling || this.parentNode.parentNode.previousSibling).style.display = 'none';\" />
        </span>
    ";
        }
        // line 43
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 134,  310 => 132,  306 => 130,  301 => 128,  296 => 126,  238 => 99,  231 => 95,  229 => 94,  217 => 87,  213 => 85,  201 => 80,  183 => 69,  180 => 68,  271 => 114,  258 => 110,  214 => 95,  154 => 45,  151 => 53,  463 => 139,  457 => 136,  452 => 135,  418 => 132,  403 => 128,  397 => 126,  395 => 125,  392 => 124,  379 => 117,  377 => 116,  365 => 93,  359 => 91,  323 => 135,  318 => 99,  297 => 87,  288 => 124,  282 => 121,  279 => 83,  276 => 117,  266 => 76,  233 => 65,  221 => 99,  167 => 48,  159 => 46,  336 => 94,  313 => 97,  307 => 87,  304 => 129,  287 => 85,  284 => 84,  280 => 82,  277 => 81,  274 => 80,  260 => 74,  256 => 69,  246 => 66,  244 => 69,  241 => 68,  207 => 83,  191 => 50,  173 => 44,  168 => 42,  150 => 43,  628 => 193,  625 => 192,  620 => 137,  616 => 134,  610 => 133,  601 => 130,  596 => 129,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 91,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 83,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 73,  486 => 45,  482 => 44,  478 => 43,  468 => 39,  464 => 38,  459 => 137,  456 => 36,  446 => 32,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 129,  404 => 185,  400 => 127,  394 => 180,  388 => 177,  385 => 176,  383 => 119,  380 => 174,  372 => 114,  369 => 113,  361 => 167,  358 => 166,  352 => 164,  347 => 87,  341 => 160,  339 => 159,  334 => 106,  330 => 91,  325 => 152,  308 => 150,  281 => 146,  269 => 78,  267 => 140,  261 => 137,  255 => 109,  252 => 71,  248 => 107,  216 => 115,  208 => 113,  187 => 50,  184 => 110,  170 => 56,  138 => 68,  98 => 23,  118 => 36,  83 => 26,  144 => 72,  130 => 48,  110 => 18,  100 => 39,  65 => 18,  112 => 44,  101 => 58,  68 => 22,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 41,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 133,  431 => 128,  422 => 121,  414 => 131,  412 => 118,  409 => 130,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 115,  371 => 107,  366 => 106,  363 => 168,  355 => 102,  353 => 89,  350 => 88,  342 => 98,  340 => 108,  332 => 137,  329 => 136,  327 => 90,  322 => 151,  320 => 100,  315 => 83,  312 => 82,  298 => 127,  272 => 79,  268 => 78,  265 => 77,  263 => 75,  253 => 74,  250 => 108,  247 => 70,  242 => 120,  235 => 107,  226 => 65,  222 => 90,  219 => 57,  203 => 81,  194 => 76,  186 => 51,  181 => 50,  175 => 66,  163 => 48,  149 => 79,  140 => 52,  106 => 35,  85 => 28,  314 => 133,  309 => 60,  302 => 95,  299 => 94,  294 => 106,  289 => 80,  286 => 123,  278 => 102,  275 => 144,  273 => 143,  270 => 99,  264 => 97,  262 => 111,  257 => 135,  254 => 72,  251 => 67,  245 => 91,  239 => 119,  236 => 98,  234 => 87,  228 => 103,  225 => 64,  223 => 82,  220 => 81,  212 => 59,  206 => 77,  197 => 55,  182 => 49,  174 => 66,  172 => 65,  164 => 59,  160 => 62,  157 => 55,  155 => 81,  143 => 49,  119 => 34,  114 => 34,  105 => 26,  66 => 21,  56 => 14,  45 => 9,  21 => 3,  18 => 11,  76 => 39,  61 => 28,  36 => 6,  209 => 58,  205 => 57,  196 => 77,  192 => 53,  189 => 73,  178 => 71,  176 => 45,  165 => 41,  161 => 58,  152 => 80,  148 => 33,  145 => 49,  141 => 54,  134 => 35,  132 => 43,  127 => 49,  123 => 35,  109 => 36,  93 => 132,  90 => 36,  54 => 19,  133 => 49,  124 => 48,  111 => 33,  80 => 25,  60 => 20,  52 => 13,  72 => 17,  64 => 35,  53 => 23,  42 => 10,  34 => 11,  86 => 27,  79 => 20,  29 => 4,  97 => 38,  95 => 30,  92 => 37,  88 => 32,  78 => 8,  71 => 37,  25 => 5,  224 => 91,  215 => 62,  211 => 88,  204 => 84,  200 => 87,  195 => 54,  193 => 73,  190 => 52,  188 => 49,  185 => 75,  179 => 46,  177 => 67,  171 => 67,  162 => 47,  158 => 57,  156 => 56,  153 => 35,  146 => 39,  142 => 48,  137 => 51,  126 => 39,  120 => 37,  117 => 30,  103 => 28,  74 => 38,  47 => 17,  32 => 8,  19 => 2,  23 => 12,  40 => 8,  24 => 3,  26 => 5,  22 => 3,  17 => 1,  69 => 21,  63 => 28,  58 => 26,  49 => 12,  43 => 12,  37 => 53,  20 => 2,  139 => 47,  131 => 48,  128 => 64,  125 => 36,  121 => 21,  115 => 45,  107 => 46,  99 => 37,  96 => 40,  91 => 31,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 14,  39 => 12,  33 => 6,  30 => 7,  27 => 6,  135 => 41,  129 => 38,  122 => 62,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 15,  94 => 32,  89 => 30,  87 => 22,  84 => 29,  81 => 28,  73 => 23,  70 => 18,  67 => 25,  62 => 22,  59 => 21,  55 => 19,  51 => 23,  48 => 10,  41 => 9,  38 => 11,  35 => 7,  31 => 10,  28 => 7,);
    }
}
