<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_3cb983e596aba4942b5da9c373f05518 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardGroups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        <table class=\"table table-bordered table-striped sonata-ba-list\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
            echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 25
                echo "                    ";
                if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                    // line 26
                    echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</td>
                            <td>
                                ";
                    // line 29
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 30
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">
                                        <img src=\"";
                        // line 31
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                        echo "\"  alt=\"";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                        echo "\" />";
                        // line 32
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                        // line 33
                        echo "</a>
                                ";
                    }
                    // line 35
                    echo "                            </td>
                            <td>
                                ";
                    // line 37
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 38
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">
                                        <img src=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                        echo "\" alt=\"";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                        echo "\" />";
                        // line 40
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                        // line 41
                        echo "</a>
                                ";
                    }
                    // line 43
                    echo "                            </td>
                        </tr>
                    ";
                }
                // line 46
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 47
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  118 => 50,  83 => 35,  144 => 54,  130 => 50,  110 => 46,  100 => 43,  65 => 30,  112 => 44,  101 => 42,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 181,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 148,  470 => 147,  458 => 135,  455 => 134,  450 => 161,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 132,  431 => 128,  422 => 121,  414 => 119,  412 => 118,  409 => 117,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 108,  371 => 107,  366 => 106,  363 => 104,  355 => 102,  353 => 101,  350 => 100,  342 => 98,  340 => 97,  332 => 92,  329 => 91,  327 => 90,  322 => 87,  320 => 86,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 76,  253 => 74,  250 => 73,  247 => 72,  242 => 69,  235 => 67,  226 => 65,  222 => 64,  219 => 63,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 43,  140 => 40,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 109,  299 => 108,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  264 => 97,  262 => 96,  257 => 75,  254 => 94,  251 => 93,  245 => 91,  239 => 89,  236 => 88,  234 => 87,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  212 => 61,  206 => 77,  197 => 55,  182 => 68,  174 => 66,  172 => 65,  164 => 63,  160 => 62,  157 => 61,  155 => 45,  143 => 41,  119 => 46,  114 => 29,  105 => 40,  66 => 28,  56 => 23,  45 => 17,  21 => 11,  18 => 1,  76 => 33,  61 => 28,  36 => 14,  209 => 60,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 47,  152 => 44,  148 => 57,  145 => 56,  141 => 54,  134 => 38,  132 => 49,  127 => 49,  123 => 52,  109 => 39,  93 => 132,  90 => 39,  54 => 26,  133 => 55,  124 => 48,  111 => 43,  80 => 35,  60 => 26,  52 => 22,  72 => 15,  64 => 30,  53 => 22,  42 => 16,  34 => 16,  86 => 38,  79 => 40,  29 => 15,  97 => 42,  95 => 41,  92 => 38,  88 => 34,  78 => 33,  71 => 27,  25 => 14,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 75,  195 => 80,  193 => 73,  190 => 52,  188 => 70,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 46,  156 => 60,  153 => 59,  146 => 42,  142 => 54,  137 => 52,  126 => 53,  120 => 51,  117 => 30,  103 => 44,  74 => 32,  47 => 24,  32 => 15,  19 => 2,  23 => 12,  40 => 17,  24 => 11,  26 => 14,  22 => 12,  17 => 1,  69 => 31,  63 => 24,  58 => 25,  49 => 19,  43 => 26,  37 => 16,  20 => 2,  139 => 26,  131 => 48,  128 => 34,  125 => 33,  121 => 32,  115 => 45,  107 => 46,  99 => 37,  96 => 40,  91 => 39,  82 => 19,  77 => 16,  75 => 28,  57 => 27,  50 => 24,  46 => 21,  44 => 19,  39 => 19,  33 => 13,  30 => 16,  27 => 12,  135 => 50,  129 => 49,  122 => 47,  116 => 46,  113 => 47,  108 => 30,  104 => 43,  102 => 43,  94 => 33,  89 => 37,  87 => 22,  84 => 37,  81 => 35,  73 => 31,  70 => 32,  67 => 26,  62 => 29,  59 => 27,  55 => 22,  51 => 25,  48 => 20,  41 => 4,  38 => 17,  35 => 24,  31 => 16,  28 => 15,);
    }
}
