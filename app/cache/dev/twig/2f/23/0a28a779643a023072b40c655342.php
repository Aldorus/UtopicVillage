<?php

/* form_div_layout.html.twig */
class __TwigTemplate_2f230a28a779643a023072b40c655342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'widget_choice_options' => array($this, 'block_widget_choice_options'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'generic_label' => array($this, 'block_generic_label'),
            'field_label' => array($this, 'block_field_label'),
            'form_label' => array($this, 'block_form_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'field_row' => array($this, 'block_field_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'field_enctype' => array($this, 'block_field_enctype'),
            'field_errors' => array($this, 'block_field_errors'),
            'field_rest' => array($this, 'block_field_rest'),
            'field_rows' => array($this, 'block_field_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('widget_choice_options', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('date_widget', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('time_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('number_widget', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('money_widget', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('field_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('password_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('email_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('generic_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('field_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('form_label', $context, $blocks);
        // line 217
        echo "
";
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('field_row', $context, $blocks);
        // line 235
        echo "
";
        // line 236
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 239
        echo "
";
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('field_enctype', $context, $blocks);
        // line 247
        echo "
";
        // line 248
        $this->displayBlock('field_errors', $context, $blocks);
        // line 259
        echo "
";
        // line 260
        $this->displayBlock('field_rest', $context, $blocks);
        // line 269
        echo "
";
        // line 271
        echo "
";
        // line 272
        $this->displayBlock('field_rows', $context, $blocks);
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 287
        echo "
";
        // line 288
        $this->displayBlock('widget_container_attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 15
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->env->getExtension('form')->renderRow($this->getContext($context, "prototype"))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_widget_choice_options($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["choice"] => $context["label"]) {
            // line 30
            echo "        ";
            if ($this->env->getExtension('form')->isChoiceGroup($this->getContext($context, "label"))) {
                // line 31
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "choice")), "html", null, true);
                echo "\">
                ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label"));
                foreach ($context['_seq'] as $context["nestedChoice"] => $context["nestedLabel"]) {
                    // line 33
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nestedChoice"), "html", null, true);
                    echo "\"";
                    if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, "form"), $this->getContext($context, "nestedChoice"))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "nestedLabel")), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nestedChoice'], $context['nestedLabel'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 35
                echo "            </optgroup>
        ";
            } else {
                // line 37
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "choice"), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, "form"), $this->getContext($context, "choice"))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
                echo "</option>
        ";
            }
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 44
        ob_start();
        // line 45
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 46
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 48
                echo "            ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"));
                echo "
            ";
                // line 49
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "        </div>
    ";
        } else {
            // line 53
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 54
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 55
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 57
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 58
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 59
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 60
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 61
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 63
                echo "        ";
            }
            // line 64
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 65
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 72
        ob_start();
        // line 73
        echo "    <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 77
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 78
        ob_start();
        // line 79
        echo "    <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 86
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 88
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 89
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 90
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
            ";
            // line 91
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 92
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 98
    public function block_date_widget($context, array $blocks = array())
    {
        // line 99
        ob_start();
        // line 100
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 101
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 103
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 104
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "year")), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "month")), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "day"))));
            // line 108
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        // line 115
        ob_start();
        // line 116
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 117
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 119
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 120
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "hour"), array("attr" => array("size" => "1")));
            echo ":";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "minute"), array("attr" => array("size" => "1")));
            if ($this->getContext($context, "with_seconds")) {
                echo ":";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "second"), array("attr" => array("size" => "1")));
            }
            // line 121
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 126
    public function block_number_widget($context, array $blocks = array())
    {
        // line 127
        ob_start();
        // line 128
        echo "    ";
        // line 129
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 130
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 134
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 135
        ob_start();
        // line 136
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "number")) : ("number"));
        // line 137
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 141
    public function block_money_widget($context, array $blocks = array())
    {
        // line 142
        ob_start();
        // line 143
        echo "    ";
        echo strtr($this->getContext($context, "money_pattern"), array("{{ widget }}" => $this->renderBlock("field_widget", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 147
    public function block_url_widget($context, array $blocks = array())
    {
        // line 148
        ob_start();
        // line 149
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "url")) : ("url"));
        // line 150
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        // line 155
        ob_start();
        // line 156
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "search")) : ("search"));
        // line 157
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 161
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 162
        ob_start();
        // line 163
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 164
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 168
    public function block_field_widget($context, array $blocks = array())
    {
        // line 169
        ob_start();
        // line 170
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 171
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty($this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 175
    public function block_password_widget($context, array $blocks = array())
    {
        // line 176
        ob_start();
        // line 177
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "password")) : ("password"));
        // line 178
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 182
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 183
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "hidden")) : ("hidden"));
        // line 184
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
    }

    // line 187
    public function block_email_widget($context, array $blocks = array())
    {
        // line 188
        ob_start();
        // line 189
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "email")) : ("email"));
        // line 190
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 196
    public function block_generic_label($context, array $blocks = array())
    {
        // line 197
        ob_start();
        // line 198
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 199
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 200
            echo "    ";
        }
        // line 201
        echo "    <label";
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
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 205
    public function block_field_label($context, array $blocks = array())
    {
        // line 206
        ob_start();
        // line 207
        echo "    ";
        $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("for" => $this->getContext($context, "id")));
        // line 208
        echo "    ";
        $this->displayBlock("generic_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 212
    public function block_form_label($context, array $blocks = array())
    {
        // line 213
        ob_start();
        // line 214
        echo "    ";
        $this->displayBlock("generic_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 220
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 221
        ob_start();
        // line 222
        echo "    ";
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 226
    public function block_field_row($context, array $blocks = array())
    {
        // line 227
        ob_start();
        // line 228
        echo "    <div>
        ";
        // line 229
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null)));
        echo "
        ";
        // line 230
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        ";
        // line 231
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 236
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 237
        echo "    ";
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
";
    }

    // line 242
    public function block_field_enctype($context, array $blocks = array())
    {
        // line 243
        ob_start();
        // line 244
        echo "    ";
        if ($this->getContext($context, "multipart")) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 248
    public function block_field_errors($context, array $blocks = array())
    {
        // line 249
        ob_start();
        // line 250
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 251
            echo "    <ul>
        ";
            // line 252
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 253
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 255
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 260
    public function block_field_rest($context, array $blocks = array())
    {
        // line 261
        ob_start();
        // line 262
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 263
            echo "        ";
            if ((!$this->getAttribute($this->getContext($context, "child"), "rendered"))) {
                // line 264
                echo "            ";
                echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
                echo "
        ";
            }
            // line 266
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 272
    public function block_field_rows($context, array $blocks = array())
    {
        // line 273
        ob_start();
        // line 274
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    ";
        // line 275
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 276
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 281
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 282
        ob_start();
        // line 283
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "full_name"), "html", null, true);
        echo "\"";
        if ($this->getContext($context, "read_only")) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getContext($context, "required")) {
            echo " required=\"required\"";
        }
        if ($this->getContext($context, "max_length")) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "max_length"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "pattern")) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "pattern"), "html", null, true);
            echo "\"";
        }
        // line 284
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 288
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 289
        ob_start();
        // line 290
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
    ";
        // line 291
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  658 => 163,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 149,  624 => 148,  621 => 147,  613 => 143,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  567 => 121,  559 => 120,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  525 => 103,  514 => 99,  511 => 98,  502 => 92,  498 => 91,  494 => 90,  490 => 89,  485 => 88,  479 => 86,  474 => 84,  471 => 83,  453 => 78,  434 => 73,  416 => 64,  413 => 63,  407 => 61,  405 => 60,  386 => 54,  378 => 53,  357 => 47,  349 => 45,  344 => 43,  335 => 39,  319 => 35,  300 => 32,  295 => 31,  292 => 30,  285 => 28,  259 => 17,  237 => 7,  198 => 259,  147 => 187,  321 => 134,  310 => 132,  306 => 130,  301 => 128,  296 => 126,  238 => 99,  231 => 95,  229 => 94,  217 => 87,  213 => 85,  201 => 260,  183 => 236,  180 => 235,  271 => 114,  258 => 110,  214 => 281,  154 => 45,  151 => 53,  463 => 139,  457 => 136,  452 => 135,  418 => 132,  403 => 128,  397 => 58,  395 => 125,  392 => 124,  379 => 117,  377 => 116,  365 => 93,  359 => 91,  323 => 37,  318 => 99,  297 => 87,  288 => 124,  282 => 27,  279 => 83,  276 => 117,  266 => 76,  233 => 6,  221 => 99,  167 => 217,  159 => 46,  336 => 94,  313 => 97,  307 => 87,  304 => 33,  287 => 29,  284 => 84,  280 => 82,  277 => 81,  274 => 80,  260 => 74,  256 => 16,  246 => 66,  244 => 69,  241 => 68,  207 => 83,  191 => 242,  173 => 220,  168 => 42,  150 => 43,  628 => 193,  625 => 192,  620 => 137,  616 => 134,  610 => 133,  601 => 130,  596 => 129,  591 => 128,  588 => 127,  583 => 126,  580 => 125,  574 => 126,  568 => 82,  564 => 96,  561 => 95,  553 => 92,  547 => 91,  536 => 88,  532 => 108,  527 => 85,  524 => 84,  519 => 101,  516 => 100,  513 => 81,  506 => 76,  500 => 75,  495 => 74,  492 => 73,  486 => 45,  482 => 44,  478 => 43,  468 => 39,  464 => 38,  459 => 137,  456 => 36,  446 => 32,  440 => 29,  432 => 72,  429 => 71,  421 => 197,  419 => 65,  415 => 190,  406 => 129,  404 => 185,  400 => 59,  394 => 57,  388 => 55,  385 => 176,  383 => 119,  380 => 174,  372 => 114,  369 => 113,  361 => 48,  358 => 166,  352 => 46,  347 => 44,  341 => 160,  339 => 159,  334 => 106,  330 => 91,  325 => 152,  308 => 150,  281 => 146,  269 => 78,  267 => 21,  261 => 137,  255 => 109,  252 => 71,  248 => 13,  216 => 287,  208 => 113,  187 => 50,  184 => 110,  170 => 219,  138 => 68,  98 => 23,  118 => 36,  83 => 26,  144 => 186,  130 => 48,  110 => 18,  100 => 39,  65 => 16,  112 => 141,  101 => 58,  68 => 20,  582 => 196,  577 => 127,  571 => 192,  569 => 191,  563 => 187,  554 => 119,  550 => 183,  546 => 182,  539 => 89,  535 => 180,  530 => 104,  523 => 176,  515 => 174,  512 => 173,  509 => 172,  503 => 159,  499 => 157,  497 => 156,  491 => 152,  480 => 150,  476 => 85,  473 => 41,  470 => 147,  458 => 135,  455 => 79,  450 => 77,  448 => 147,  443 => 144,  441 => 134,  438 => 133,  435 => 133,  431 => 128,  422 => 121,  414 => 131,  412 => 118,  409 => 130,  401 => 115,  399 => 114,  396 => 113,  390 => 112,  382 => 110,  374 => 51,  371 => 107,  366 => 49,  363 => 168,  355 => 102,  353 => 89,  350 => 88,  342 => 98,  340 => 108,  332 => 137,  329 => 136,  327 => 90,  322 => 151,  320 => 100,  315 => 83,  312 => 82,  298 => 127,  272 => 23,  268 => 78,  265 => 77,  263 => 75,  253 => 15,  250 => 14,  247 => 70,  242 => 120,  235 => 107,  226 => 4,  222 => 90,  219 => 288,  203 => 269,  194 => 76,  186 => 51,  181 => 50,  175 => 225,  163 => 48,  149 => 193,  140 => 52,  106 => 35,  85 => 28,  314 => 133,  309 => 60,  302 => 95,  299 => 94,  294 => 106,  289 => 80,  286 => 123,  278 => 102,  275 => 144,  273 => 143,  270 => 22,  264 => 97,  262 => 111,  257 => 135,  254 => 72,  251 => 67,  245 => 12,  239 => 119,  236 => 98,  234 => 87,  228 => 5,  225 => 64,  223 => 3,  220 => 81,  212 => 59,  206 => 271,  197 => 55,  182 => 49,  174 => 66,  172 => 65,  164 => 59,  160 => 205,  157 => 204,  155 => 196,  143 => 49,  119 => 153,  114 => 146,  105 => 26,  66 => 21,  56 => 14,  45 => 9,  21 => 3,  18 => 11,  76 => 25,  61 => 6,  36 => 6,  209 => 272,  205 => 57,  196 => 248,  192 => 53,  189 => 73,  178 => 226,  176 => 45,  165 => 212,  161 => 58,  152 => 195,  148 => 33,  145 => 49,  141 => 54,  134 => 174,  132 => 168,  127 => 161,  123 => 35,  109 => 140,  93 => 28,  90 => 36,  54 => 11,  133 => 49,  124 => 160,  111 => 33,  80 => 25,  60 => 14,  52 => 3,  72 => 43,  64 => 26,  53 => 23,  42 => 8,  34 => 5,  86 => 27,  79 => 76,  29 => 6,  97 => 114,  95 => 30,  92 => 98,  88 => 32,  78 => 8,  71 => 20,  25 => 5,  224 => 91,  215 => 62,  211 => 280,  204 => 84,  200 => 87,  195 => 54,  193 => 247,  190 => 52,  188 => 241,  185 => 239,  179 => 46,  177 => 67,  171 => 67,  162 => 211,  158 => 57,  156 => 56,  153 => 35,  146 => 39,  142 => 182,  137 => 175,  126 => 39,  120 => 37,  117 => 147,  103 => 28,  74 => 70,  47 => 15,  32 => 8,  19 => 1,  23 => 12,  40 => 8,  24 => 3,  26 => 5,  22 => 3,  17 => 1,  69 => 42,  63 => 28,  58 => 26,  49 => 2,  43 => 8,  37 => 53,  20 => 2,  139 => 181,  131 => 48,  128 => 64,  125 => 36,  121 => 21,  115 => 45,  107 => 134,  99 => 125,  96 => 40,  91 => 27,  82 => 77,  77 => 71,  75 => 21,  57 => 12,  50 => 12,  46 => 13,  44 => 14,  39 => 7,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 167,  122 => 154,  116 => 33,  113 => 43,  108 => 28,  104 => 133,  102 => 126,  94 => 113,  89 => 97,  87 => 83,  84 => 82,  81 => 24,  73 => 23,  70 => 18,  67 => 27,  62 => 21,  59 => 20,  55 => 19,  51 => 23,  48 => 12,  41 => 12,  38 => 11,  35 => 7,  31 => 4,  28 => 3,);
    }
}
