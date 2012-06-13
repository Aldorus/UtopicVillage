<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_69935618b82f9e0a36be83f64e34a4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        ";
        // line 16
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 17
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_edit", array(), "SonataAdminBundle");
            echo "</a>
        ";
        }
        // line 19
        echo "
        ";
        // line 20
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 21
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a>
        ";
        }
        // line 23
        echo "    </div>
";
    }

    // line 26
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "    <div class=\"sonata-ba-delete\">

        <h1>";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_delete", array(), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("message_delete_confirmation", array("%object%" => $this->getContext($context, "object")), "SonataAdminBundle");
        // line 34
        echo "
        <div class=\"well form-actions\">
            <form method=\"POST\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
        echo "\">
                <input type=\"hidden\" value=\"DELETE\" name=\"_method\" />

                <input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("btn_delete", array(), "SonataAdminBundle");
        echo "\" />

                ";
        // line 41
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 42
            echo "                    ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
            // line 43
            echo "
                    <a class=\"btn btn-success\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_edit", array(), "SonataAdminBundle");
            echo "</a>
                ";
        }
        // line 46
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  100 => 43,  65 => 24,  112 => 45,  101 => 42,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 181,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 148,  470 => 147,  458 => 135,  455 => 134,  450 => 161,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 132,  431 => 128,  422 => 121,  414 => 119,  412 => 118,  409 => 117,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 108,  371 => 107,  366 => 106,  363 => 104,  355 => 102,  353 => 101,  350 => 100,  342 => 98,  340 => 97,  332 => 92,  329 => 91,  327 => 90,  322 => 87,  320 => 86,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 76,  253 => 74,  250 => 73,  247 => 72,  242 => 69,  235 => 67,  226 => 65,  222 => 64,  219 => 63,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 43,  140 => 40,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 109,  299 => 108,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  264 => 97,  262 => 96,  257 => 75,  254 => 94,  251 => 93,  245 => 91,  239 => 89,  236 => 88,  234 => 87,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  212 => 61,  206 => 77,  197 => 55,  182 => 68,  174 => 66,  172 => 65,  164 => 63,  160 => 62,  157 => 61,  155 => 45,  143 => 41,  119 => 46,  114 => 29,  105 => 41,  66 => 28,  56 => 25,  45 => 20,  21 => 12,  18 => 11,  76 => 21,  61 => 18,  36 => 24,  209 => 60,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 47,  152 => 44,  148 => 57,  145 => 56,  141 => 54,  134 => 38,  132 => 49,  127 => 49,  123 => 44,  109 => 39,  93 => 132,  90 => 39,  54 => 18,  133 => 52,  124 => 48,  111 => 43,  80 => 34,  60 => 26,  52 => 22,  72 => 16,  64 => 17,  53 => 13,  42 => 19,  34 => 17,  86 => 36,  79 => 40,  29 => 15,  97 => 42,  95 => 41,  92 => 39,  88 => 34,  78 => 33,  71 => 29,  25 => 14,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 75,  195 => 80,  193 => 73,  190 => 52,  188 => 70,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 46,  156 => 60,  153 => 59,  146 => 42,  142 => 54,  137 => 39,  126 => 46,  120 => 39,  117 => 30,  103 => 44,  74 => 27,  47 => 21,  32 => 16,  19 => 11,  23 => 12,  40 => 26,  24 => 14,  26 => 14,  22 => 12,  17 => 1,  69 => 29,  63 => 25,  58 => 17,  49 => 15,  43 => 26,  37 => 25,  20 => 11,  139 => 26,  131 => 48,  128 => 34,  125 => 33,  121 => 32,  115 => 39,  107 => 36,  99 => 164,  96 => 163,  91 => 131,  82 => 35,  77 => 59,  75 => 29,  57 => 15,  50 => 20,  46 => 10,  44 => 20,  39 => 16,  33 => 16,  30 => 16,  27 => 15,  135 => 50,  129 => 49,  122 => 47,  116 => 46,  113 => 40,  108 => 44,  104 => 43,  102 => 37,  94 => 33,  89 => 20,  87 => 129,  84 => 36,  81 => 26,  73 => 31,  70 => 19,  67 => 20,  62 => 24,  59 => 23,  55 => 23,  51 => 13,  48 => 16,  41 => 19,  38 => 17,  35 => 24,  31 => 15,  28 => 15,);
    }
}
