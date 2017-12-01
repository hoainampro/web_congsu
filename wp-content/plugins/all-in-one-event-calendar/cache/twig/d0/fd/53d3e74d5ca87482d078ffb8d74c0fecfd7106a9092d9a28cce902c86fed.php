<?php

/* event-single.twig */
class __TwigTemplate_d0fd53d3e74d5ca87482d078ffb8d74c0fecfd7106a9092d9a28cce902c86fed extends Twig_Template
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
        echo "<div class=\"timely ai1ec-single-event
\tai1ec-event-id-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["post_id"]) ? $context["post_id"] : null), "html", null, true);
        echo "
\tai1ec-event-instance-id-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["instance_id"]) ? $context["instance_id"] : null), "html", null, true);
        echo "
\t";
        // line 4
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
            echo "ai1ec-multiday";
        }
        // line 5
        echo "\t";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
            echo "ai1ec-allday";
        }
        echo "\">

<a id=\"ai1ec-event\"></a>
<div class=\"ai1ec-actions\">
\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t";
        // line 10
        echo (isset($context["back_to_calendar"]) ? $context["back_to_calendar"] : null);
        echo "
\t</div>

\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t";
        // line 14
        if ((!twig_test_empty((isset($context["ticket_url"]) ? $context["ticket_url"] : null)))) {
            // line 15
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["ticket_url"]) ? $context["ticket_url"] : null), "html_attr");
            echo "\" target=\"_blank\"
\t\t\t\tclass=\"ai1ec-tickets ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary
\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["tickets_url_label"]) ? $context["tickets_url_label"] : null), "html_attr");
            echo "\"
\t\t\t\t\tdata-placement=\"left\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket ai1ec-fa-fw\"></i>
\t\t\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["tickets_url_label"]) ? $context["tickets_url_label"] : null), "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</a>
\t\t";
        }
        // line 26
        echo "\t\t";
        if ((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null)) {
            // line 27
            echo "\t\t\t";
            $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("export_url" => (isset($context["subscribe_url"]) ? $context["subscribe_url"] : null), "export_url_no_html" => (isset($context["subscribe_url_no_html"]) ? $context["subscribe_url_no_html"] : null), "subscribe_label" => (isset($context["text_add_calendar"]) ? $context["text_add_calendar"] : null), "text" => (isset($context["subscribe_buttons_text"]) ? $context["subscribe_buttons_text"] : null))));
            // line 33
            echo "\t\t";
        }
        // line 34
        echo "\t</div>

\t";
        // line 36
        if ((isset($context["extra_buttons"]) ? $context["extra_buttons"] : null)) {
            // line 37
            echo "\t\t";
            echo (isset($context["extra_buttons"]) ? $context["extra_buttons"] : null);
            echo "
\t";
        }
        // line 39
        echo "</div>

";
        // line 41
        if (twig_test_empty((isset($context["map"]) ? $context["map"] : null))) {
            // line 42
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-3";
            // line 43
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-9";
            // line 44
            echo "\t<div class=\"ai1ec-event-details ai1ec-clearfix\">
";
        } else {
            // line 46
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-4 ai1ec-col-md-5";
            // line 47
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-8 ai1ec-col-md-7";
            // line 48
            echo "\t<div class=\"ai1ec-event-details ai1ec-row\">
\t\t<div class=\"ai1ec-map ai1ec-col-sm-5 ai1ec-col-sm-push-7\">
\t\t\t";
            // line 50
            echo (isset($context["map"]) ? $context["map"] : null);
            echo "
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-7 ai1ec-col-sm-pull-5\">
";
        }
        // line 54
        echo "
\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-label ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["text_when"]) ? $context["text_when"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-field-value ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
        echo " dt-duration\">
\t\t\t";
        // line 58
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "
\t\t\t";
        // line 59
        if ($this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "show_timezone")) {
            // line 60
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "using_calendar_tz")) {
                // line 61
                echo "\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "calendar_timezone"), "html", null, true);
                echo "</span>
\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "event_timezone"), "html", null, true);
                echo "</span>
\t\t\t\t";
            }
            // line 65
            echo "\t\t\t";
        }
        // line 66
        echo "\t\t\t";
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 67
        echo "\t\t</div>
\t\t<div class=\"ai1ec-hidden dt-start\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-hidden dt-end\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : null), "html", null, true);
        echo "</div>
\t</div>

\t";
        // line 72
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 73
            echo "\t\t<div class=\"ai1ec-location ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_where"]) ? $context["text_where"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " p-location\">
\t\t\t\t";
            // line 76
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 80
        echo "
\t";
        // line 81
        if ((((!twig_test_empty((isset($context["cost"]) ? $context["cost"] : null))) || $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free")) && twig_test_empty((isset($context["tickets_block"]) ? $context["tickets_block"] : null)))) {
            // line 82
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_cost"]) ? $context["text_cost"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free")) ? ((isset($context["text_free"]) ? $context["text_free"] : null)) : ((isset($context["cost"]) ? $context["cost"] : null))), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 89
        echo "
\t";
        // line 90
        if ((!twig_test_empty((isset($context["tickets_block"]) ? $context["tickets_block"] : null)))) {
            // line 91
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["text_tickets"]) ? $context["text_tickets"] : null), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 96
            echo (isset($context["tickets_block"]) ? $context["tickets_block"] : null);
            echo "
\t\t\t</div>
\t\t</div>";
            // line 99
            echo "\t";
        }
        // line 100
        echo "
\t";
        // line 101
        if ((!twig_test_empty((isset($context["contact"]) ? $context["contact"] : null)))) {
            // line 102
            echo "\t\t<div class=\"ai1ec-contact ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_contact"]) ? $context["text_contact"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "</div>
\t\t</div>
\t";
        }
        // line 107
        echo "
\t";
        // line 108
        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
            // line 109
            echo "\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 115
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 119
        echo "
\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-label ai1ec-col-sm-3\">Instructor:</div>
\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-9 dt-duration\">
\t\t\t";
        // line 123
        echo (isset($context["instructor"]) ? $context["instructor"] : null);
        echo "
\t\t</div>
\t</div>

\t";
        // line 127
        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
            // line 128
            echo "\t\t<div class=\"ai1ec-tags ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["text_tags"]) ? $context["text_tags"] : null), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 134
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 138
        echo "\t
\t";
        // line 139
        if ((!twig_test_empty((isset($context["filter_groups"]) ? $context["filter_groups"] : null)))) {
            // line 140
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
                // line 141
                echo "\t\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
                // line 142
                echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
                echo " ai1ec-col-xs-1\">
\t\t\t\t\t<i class=\"ai1ec-fa ";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "icon_name"), "html", null, true);
                echo " ai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "text"), "html_attr");
                echo "\"></i>
\t\t\t\t</div>\t\t
\t\t\t\t<div class=\"ai1ec-field-value ";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
                echo " ai1ec-col-xs-10\">
\t\t\t\t\t";
                // line 147
                echo $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "html_value");
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t
\t";
        }
        // line 152
        echo "
\t";
        // line 153
        if ((!twig_test_empty((isset($context["filter_groups"]) ? $context["filter_groups"] : null)))) {
            // line 154
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
                // line 155
                echo "\t\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
                // line 156
                echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
                echo " ai1ec-col-xs-1\">
\t\t\t\t\t<i class=\"ai1ec-fa ";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "icon_name"), "html", null, true);
                echo " ai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "text"), "html_attr");
                echo "\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-field-value ";
                // line 160
                echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
                echo " ai1ec-col-xs-10\">
\t\t\t\t\t";
                // line 161
                echo $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "html_value");
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "\t";
        }
        // line 166
        echo "
";
        // line 167
        if (twig_test_empty((isset($context["map"]) ? $context["map"] : null))) {
            // line 168
            echo "\t</div>";
        } else {
            // line 170
            echo "\t\t</div>";
            // line 171
            echo "\t</div>";
        }
        // line 173
        echo "
";
        // line 174
        if ((!(isset($context["hide_featured_image"]) ? $context["hide_featured_image"] : null))) {
            // line 175
            echo "\t";
            if (twig_test_empty((isset($context["content_img_url"]) ? $context["content_img_url"] : null))) {
                // line 176
                echo "\t\t";
                echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "location_avatar", 2 => "category_avatar"), "timely alignleft", false);
                // line 180
                echo "
\t";
            }
        }
        // line 183
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 183,  460 => 180,  457 => 176,  454 => 175,  452 => 174,  449 => 173,  446 => 171,  444 => 170,  441 => 168,  439 => 167,  436 => 166,  433 => 165,  423 => 161,  419 => 160,  414 => 158,  410 => 157,  406 => 156,  403 => 155,  398 => 154,  396 => 153,  393 => 152,  389 => 150,  379 => 147,  375 => 146,  370 => 144,  366 => 143,  362 => 142,  359 => 141,  354 => 140,  352 => 139,  349 => 138,  342 => 134,  338 => 133,  333 => 131,  328 => 129,  325 => 128,  323 => 127,  316 => 123,  310 => 119,  303 => 115,  299 => 114,  294 => 112,  289 => 110,  286 => 109,  284 => 108,  281 => 107,  273 => 104,  267 => 103,  264 => 102,  262 => 101,  259 => 100,  256 => 99,  251 => 96,  247 => 95,  242 => 93,  238 => 92,  235 => 91,  233 => 90,  230 => 89,  223 => 85,  219 => 84,  213 => 83,  210 => 82,  208 => 81,  205 => 80,  198 => 76,  194 => 75,  188 => 74,  185 => 73,  183 => 72,  177 => 69,  173 => 68,  170 => 67,  167 => 66,  164 => 65,  158 => 63,  152 => 61,  149 => 60,  147 => 59,  143 => 58,  139 => 57,  133 => 56,  129 => 54,  122 => 50,  118 => 48,  115 => 47,  112 => 46,  108 => 44,  105 => 43,  102 => 42,  100 => 41,  96 => 39,  90 => 37,  88 => 36,  84 => 34,  81 => 33,  78 => 27,  75 => 26,  68 => 22,  61 => 18,  54 => 15,  52 => 14,  45 => 10,  34 => 5,  30 => 4,  26 => 3,  47 => 12,  44 => 11,  37 => 7,  31 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
