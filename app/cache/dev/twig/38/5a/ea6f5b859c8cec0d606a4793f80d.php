<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_385aea6f5b859c8cec0d606a4793f80d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
        <title>
            ";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Admin", array(), "SonataAdminBundle");
        // line 50
        echo "
            ";
        // line 51
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 52
            echo "                ";
            echo $this->getContext($context, "_title");
            echo "
            ";
        } else {
            // line 54
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 55
                echo "                    -
                    ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 57
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 58
                        echo "                            &gt;
                        ";
                    }
                    // line 60
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 62
                echo "                ";
            }
            // line 63
            echo "            ";
        }
        // line 64
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 66
        if (twig_test_empty($this->getContext($context, "_side_menu"))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 68
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    ";
        // line 72
        if (array_key_exists("admin_pool", $context)) {
            // line 73
            echo "                        ";
            $this->displayBlock('logo', $context, $blocks);
            // line 79
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                // line 80
                echo "                            <ul class=\"nav\">
                                ";
                // line 81
                $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
                // line 97
                echo "                            </ul>
                        ";
            }
            // line 99
            echo "
                        <p class=\"navbar-text pull-right\">";
            // line 100
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</p>
                    ";
        }
        // line 102
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 107
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 108
            echo "                <ul class=\"breadcrumb\">
                    ";
            // line 109
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 110
                echo "                        ";
                if (array_key_exists("action", $context)) {
                    // line 111
                    echo "                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 112
                        echo "                                ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 113
                            echo "                                    <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "uri"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</a><span class=\"divider\">/</span></li>
                                ";
                        } else {
                            // line 115
                            echo "                                    <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</li>
                                ";
                        }
                        // line 117
                        echo "                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 118
                    echo "                        ";
                }
                // line 119
                echo "                    ";
            } else {
                // line 120
                echo "                        ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                    ";
            }
            // line 122
            echo "                </ul>
            ";
        }
        // line 124
        echo "
            ";
        // line 125
        $this->displayBlock('notice', $context, $blocks);
        // line 135
        echo "
            <div style=\"float: right\">
                ";
        // line 137
        $this->displayBlock('actions', $context, $blocks);
        // line 138
        echo "            </div>

            ";
        // line 140
        if (((!twig_test_empty($this->getContext($context, "_title"))) || array_key_exists("action", $context))) {
            // line 141
            echo "                <div class=\"page-header\">
                    <h1>
                        ";
            // line 143
            if ((!twig_test_empty($this->getContext($context, "_title")))) {
                // line 144
                echo "                            ";
                echo $this->getContext($context, "_title");
                echo "
                        ";
            } elseif (array_key_exists("action", $context)) {
                // line 146
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 147
                    echo "                                ";
                    if ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                        // line 148
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                        echo "
                                ";
                    }
                    // line 150
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 151
                echo "                        ";
            }
            // line 152
            echo "                    </h1>
                </div>
            ";
        }
        // line 155
        echo "
            <div class=\"row-fluid\">
                <div class=\"content ";
        // line 157
        echo (((!twig_test_empty($this->getContext($context, "_side_menu")))) ? (" span10") : ("span12"));
        echo "\">

                    ";
        // line 159
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 160
            echo "                        <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                    ";
        }
        // line 162
        echo "
                    ";
        // line 163
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 164
            echo "                        <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                    ";
        }
        // line 166
        echo "
                    ";
        // line 167
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 168
            echo "                        <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                    ";
        }
        // line 170
        echo "
                    ";
        // line 171
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 172
            echo "                        <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                    ";
        }
        // line 174
        echo "
                    ";
        // line 175
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 176
            echo "                        <div class=\"sonata-ba-filter\">
                            ";
            // line 177
            echo $this->getContext($context, "_list_filters");
            echo "
                        </div>
                        <div class=\"sonata-ba-list\">
                            ";
            // line 180
            echo $this->getContext($context, "_list_table");
            echo "
                        </div>
                    ";
        }
        // line 183
        echo "                </div>

                ";
        // line 185
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 186
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 187
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                    </div>
                ";
        }
        // line 190
        echo "            </div>

            ";
        // line 192
        $this->displayBlock('footer', $context, $blocks);
        // line 197
        echo "        </div>
    </body>
</html>

";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.7.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.17.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 73
    public function block_logo($context, array $blocks = array())
    {
        // line 74
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 81
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 82
        echo "                                    ";
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 83
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 84
            echo "                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 88
                echo "                                                    ";
                if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                    // line 89
                    echo "                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a></li>
                                                    ";
                }
                // line 91
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 92
            echo "                                            </ul>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 95
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 96
        echo "                                ";
    }

    // line 82
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 95
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 125
    public function block_notice($context, array $blocks = array())
    {
        // line 126
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 127
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 128
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => $this->getContext($context, "session_var")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 129
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $this->getContext($context, "notice_level")), "html", null, true);
                echo "\">
                            ";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flash"), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 133
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 134
        echo "            ";
    }

    // line 137
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 192
    public function block_footer($context, array $blocks = array())
    {
        // line 193
        echo "                <div class=\"pull-right clearfix\">
                    <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 193,  625 => 192,  620 => 137,  616 => 134,  610 => 133,  601 => 130,  596 => 129,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 95,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 91,  536 => 88,  532 => 87,  527 => 85,  524 => 84,  519 => 83,  516 => 82,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 73,  486 => 45,  482 => 44,  478 => 43,  468 => 39,  464 => 38,  459 => 37,  456 => 36,  446 => 32,  440 => 29,  432 => 26,  429 => 25,  421 => 197,  419 => 192,  415 => 190,  406 => 186,  404 => 185,  400 => 183,  394 => 180,  388 => 177,  385 => 176,  383 => 175,  380 => 174,  372 => 171,  369 => 170,  361 => 167,  358 => 166,  352 => 164,  347 => 162,  341 => 160,  339 => 159,  334 => 157,  330 => 155,  325 => 152,  308 => 150,  281 => 146,  269 => 141,  267 => 140,  261 => 137,  255 => 125,  252 => 124,  248 => 122,  216 => 115,  208 => 113,  187 => 111,  184 => 110,  170 => 102,  138 => 68,  98 => 57,  118 => 50,  83 => 35,  144 => 72,  130 => 50,  110 => 46,  100 => 43,  65 => 30,  112 => 44,  101 => 58,  68 => 28,  582 => 196,  577 => 194,  571 => 192,  569 => 191,  563 => 187,  554 => 184,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 178,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 149,  473 => 41,  470 => 147,  458 => 135,  455 => 134,  450 => 33,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 27,  431 => 128,  422 => 121,  414 => 119,  412 => 118,  409 => 187,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 172,  371 => 107,  366 => 106,  363 => 168,  355 => 102,  353 => 101,  350 => 163,  342 => 98,  340 => 97,  332 => 92,  329 => 91,  327 => 90,  322 => 151,  320 => 86,  315 => 83,  312 => 82,  298 => 81,  272 => 79,  268 => 78,  265 => 77,  263 => 138,  253 => 74,  250 => 73,  247 => 72,  242 => 120,  235 => 67,  226 => 65,  222 => 117,  219 => 63,  203 => 56,  194 => 54,  186 => 51,  181 => 50,  175 => 49,  163 => 48,  149 => 79,  140 => 40,  106 => 167,  85 => 72,  314 => 82,  309 => 60,  302 => 148,  299 => 147,  294 => 106,  289 => 80,  286 => 104,  278 => 102,  275 => 144,  273 => 143,  270 => 99,  264 => 97,  262 => 96,  257 => 135,  254 => 94,  251 => 93,  245 => 91,  239 => 119,  236 => 118,  234 => 87,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  212 => 61,  206 => 77,  197 => 55,  182 => 109,  174 => 66,  172 => 65,  164 => 100,  160 => 62,  157 => 97,  155 => 81,  143 => 41,  119 => 46,  114 => 29,  105 => 60,  66 => 28,  56 => 36,  45 => 17,  21 => 11,  18 => 11,  76 => 33,  61 => 28,  36 => 16,  209 => 60,  205 => 112,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 99,  152 => 80,  148 => 57,  145 => 56,  141 => 54,  134 => 38,  132 => 66,  127 => 49,  123 => 52,  109 => 39,  93 => 132,  90 => 39,  54 => 26,  133 => 55,  124 => 48,  111 => 43,  80 => 35,  60 => 26,  52 => 22,  72 => 15,  64 => 50,  53 => 35,  42 => 19,  34 => 15,  86 => 38,  79 => 40,  29 => 12,  97 => 42,  95 => 41,  92 => 38,  88 => 34,  78 => 55,  71 => 27,  25 => 13,  224 => 96,  215 => 62,  211 => 88,  204 => 84,  200 => 75,  195 => 80,  193 => 73,  190 => 52,  188 => 70,  185 => 76,  179 => 108,  177 => 107,  171 => 67,  162 => 63,  158 => 46,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 52,  126 => 53,  120 => 51,  117 => 30,  103 => 44,  74 => 32,  47 => 24,  32 => 14,  19 => 2,  23 => 12,  40 => 18,  24 => 11,  26 => 11,  22 => 12,  17 => 1,  69 => 52,  63 => 24,  58 => 47,  49 => 19,  43 => 26,  37 => 16,  20 => 2,  139 => 26,  131 => 48,  128 => 64,  125 => 63,  121 => 32,  115 => 45,  107 => 46,  99 => 37,  96 => 40,  91 => 39,  82 => 19,  77 => 16,  75 => 54,  57 => 27,  50 => 24,  46 => 21,  44 => 20,  39 => 19,  33 => 13,  30 => 13,  27 => 12,  135 => 50,  129 => 49,  122 => 62,  116 => 46,  113 => 47,  108 => 30,  104 => 43,  102 => 43,  94 => 33,  89 => 37,  87 => 22,  84 => 37,  81 => 56,  73 => 31,  70 => 32,  67 => 51,  62 => 49,  59 => 27,  55 => 22,  51 => 25,  48 => 20,  41 => 4,  38 => 17,  35 => 24,  31 => 16,  28 => 12,);
    }
}
