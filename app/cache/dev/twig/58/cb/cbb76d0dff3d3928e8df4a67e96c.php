<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_58cbcbb76d0dff3d3928e8df4a67e96c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute($this->getContext($context, "field_description"), "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "field_element"), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name"));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "field_element"));
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "field_element"));
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "help"), "html", null, true);
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "field_element"));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  100 => 43,  65 => 30,  112 => 45,  101 => 42,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 181,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 148,  470 => 147,  458 => 135,  455 => 134,  450 => 161,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 132,  431 => 128,  422 => 121,  414 => 119,  412 => 118,  409 => 117,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 108,  371 => 107,  366 => 106,  363 => 104,  355 => 102,  353 => 101,  350 => 100,  342 => 98,  340 => 97,  332 => 92,  329 => 91,  327 => 90,  322 => 87,  320 => 86,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 76,  253 => 74,  250 => 73,  247 => 72,  242 => 69,  235 => 67,  226 => 65,  222 => 64,  219 => 63,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 43,  140 => 40,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 109,  299 => 108,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  264 => 97,  262 => 96,  257 => 75,  254 => 94,  251 => 93,  245 => 91,  239 => 89,  236 => 88,  234 => 87,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  212 => 61,  206 => 77,  197 => 55,  182 => 68,  174 => 66,  172 => 65,  164 => 63,  160 => 62,  157 => 61,  155 => 45,  143 => 41,  119 => 46,  114 => 29,  105 => 41,  66 => 27,  56 => 25,  45 => 20,  21 => 11,  18 => 11,  76 => 21,  61 => 28,  36 => 18,  209 => 60,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 47,  152 => 44,  148 => 57,  145 => 56,  141 => 54,  134 => 38,  132 => 49,  127 => 49,  123 => 44,  109 => 39,  93 => 132,  90 => 39,  54 => 18,  133 => 52,  124 => 48,  111 => 43,  80 => 15,  60 => 26,  52 => 22,  72 => 16,  64 => 17,  53 => 25,  42 => 19,  34 => 20,  86 => 17,  79 => 40,  29 => 15,  97 => 42,  95 => 41,  92 => 19,  88 => 34,  78 => 33,  71 => 29,  25 => 14,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 75,  195 => 80,  193 => 73,  190 => 52,  188 => 70,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 46,  156 => 60,  153 => 59,  146 => 42,  142 => 54,  137 => 39,  126 => 46,  120 => 39,  117 => 30,  103 => 44,  74 => 13,  47 => 21,  32 => 13,  19 => 11,  23 => 12,  40 => 26,  24 => 12,  26 => 14,  22 => 12,  17 => 11,  69 => 28,  63 => 28,  58 => 25,  49 => 15,  43 => 26,  37 => 21,  20 => 11,  139 => 26,  131 => 48,  128 => 34,  125 => 33,  121 => 32,  115 => 39,  107 => 36,  99 => 164,  96 => 23,  91 => 131,  82 => 35,  77 => 14,  75 => 29,  57 => 15,  50 => 24,  46 => 21,  44 => 20,  39 => 16,  33 => 17,  30 => 16,  27 => 15,  135 => 50,  129 => 49,  122 => 47,  116 => 46,  113 => 40,  108 => 30,  104 => 43,  102 => 26,  94 => 33,  89 => 20,  87 => 129,  84 => 36,  81 => 35,  73 => 33,  70 => 32,  67 => 31,  62 => 24,  59 => 27,  55 => 26,  51 => 13,  48 => 23,  41 => 19,  38 => 17,  35 => 24,  31 => 16,  28 => 15,);
    }
}
