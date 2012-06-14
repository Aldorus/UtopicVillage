<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_53d3f24736cc2957ce99d8364f84d481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute($this->getContext($context, "admin"), "toString", array(0 => $this->getContext($context, "object")), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 25
        if (((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "show"), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "VIEW", 1 => $this->getContext($context, "object")), "method")) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "show")) > 0))) {
            // line 26
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "show", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_show", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 28
        echo "            ";
        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "history"), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 29
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "history", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_history", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 31
        echo "            ";
        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) && $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"))) {
            // line 32
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 34
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 35
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 37
        echo "        </ul>
    </div>
";
    }

    // line 41
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 43
    public function block_form($context, array $blocks = array())
    {
        // line 44
        echo "
    ";
        // line 45
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) ? ("edit") : ("create"));
        // line 46
        echo "
    ";
        // line 47
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 48
            echo "        <div>
            ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 52
            echo "        <form class=\"form-horizontal\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo " method=\"POST\">

            ";
            // line 54
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 55
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 56
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                </div>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 61
            echo "
            ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 63
                echo "                <fieldset ";
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    echo "class=\"sonata-ba-fielset-collapsed\"";
                }
                echo ">
                    <legend>
                        ";
                // line 65
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    // line 66
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 68
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 70
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 73
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 74
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 75
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"));
                        echo "
                            ";
                    }
                    // line 77
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 78
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 81
            echo "
            ";
            // line 82
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 83
            echo "
            ";
            // line 84
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

            <div class=\"form-actions\">
                ";
            // line 87
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
                // line 88
                echo "                    ";
                if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                    // line 89
                    echo "                        <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                } else {
                    // line 91
                    echo "                        <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                }
                // line 93
                echo "                ";
            } else {
                // line 94
                echo "                    ";
                if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                    // line 95
                    echo "                        <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                        ";
                    // line 96
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 97
                        echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                        echo "\"/>
                        ";
                    }
                    // line 99
                    echo "
                        ";
                    // line 100
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                        // line 101
                        echo "                            ";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
                        // line 102
                        echo "                            <a class=\"btn btn-danger\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                        echo "</a>
                        ";
                    }
                    // line 104
                    echo "                    ";
                } else {
                    // line 105
                    echo "                        <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                        <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                    // line 106
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                }
                // line 108
                echo "                ";
            }
            // line 109
            echo "            </div>
        </form>
    ";
        }
    }

    // line 60
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
    }

    // line 82
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 82,  309 => 60,  302 => 109,  299 => 108,  294 => 106,  289 => 105,  286 => 104,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  264 => 97,  262 => 96,  257 => 95,  254 => 94,  251 => 93,  245 => 91,  239 => 89,  236 => 88,  234 => 87,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  212 => 78,  206 => 77,  197 => 74,  182 => 68,  174 => 66,  172 => 65,  164 => 63,  160 => 62,  157 => 61,  155 => 60,  143 => 55,  119 => 46,  114 => 44,  105 => 41,  66 => 28,  56 => 25,  45 => 25,  21 => 12,  18 => 11,  76 => 21,  61 => 16,  36 => 14,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 59,  148 => 57,  145 => 56,  141 => 54,  134 => 50,  132 => 49,  127 => 49,  123 => 44,  109 => 39,  93 => 33,  90 => 28,  54 => 14,  133 => 52,  124 => 48,  111 => 43,  80 => 32,  60 => 16,  52 => 23,  72 => 16,  64 => 17,  53 => 13,  42 => 19,  34 => 7,  86 => 28,  79 => 40,  29 => 14,  97 => 34,  95 => 21,  92 => 39,  88 => 34,  78 => 25,  71 => 14,  25 => 4,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 75,  195 => 80,  193 => 73,  190 => 78,  188 => 70,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 56,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 45,  103 => 36,  74 => 27,  47 => 28,  32 => 15,  19 => 11,  23 => 12,  40 => 6,  24 => 14,  26 => 3,  22 => 12,  17 => 1,  69 => 29,  63 => 18,  58 => 26,  49 => 22,  43 => 26,  37 => 13,  20 => 11,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 37,  96 => 34,  91 => 35,  82 => 27,  77 => 31,  75 => 24,  57 => 15,  50 => 20,  46 => 10,  44 => 11,  39 => 23,  33 => 20,  30 => 4,  27 => 13,  135 => 50,  129 => 47,  122 => 47,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 25,  81 => 26,  73 => 21,  70 => 19,  67 => 19,  62 => 24,  59 => 23,  55 => 14,  51 => 13,  48 => 10,  41 => 18,  38 => 24,  35 => 16,  31 => 5,  28 => 3,);
    }
}
