<?php

/* subscribe-buttons.twig */
class __TwigTemplate_2715acf678c380d630c83d3a7e40c2555c0b4cb21a16d95a1cc06a601f043e45 extends Twig_Template
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
        $context["alignment"] = (((isset($context["alignment"]) ? $context["alignment"] : null)) ? ((isset($context["alignment"]) ? $context["alignment"] : null)) : ("left"));
        // line 2
        $context["placement"] = (((isset($context["placement"]) ? $context["placement"] : null)) ? ((isset($context["placement"]) ? $context["placement"] : null)) : ("down"));
        // line 3
        $context["alignment2"] = ((("left" == (isset($context["alignment"]) ? $context["alignment"] : null))) ? ("right") : ("left"));
        // line 4
        $context["button_classes"] = (((isset($context["button_classes"]) ? $context["button_classes"] : null)) ? ((isset($context["button_classes"]) ? $context["button_classes"] : null)) : ("ai1ec-btn-sm"));
        // line 5
        echo "<div class=\"ai1ec-subscribe-dropdown ai1ec-dropdown";
        if (((isset($context["placement"]) ? $context["placement"] : null) == "up")) {
            echo " ai1ec-dropup";
        }
        echo " ai1ec-btn
\tai1ec-btn-default ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
        echo "\">
\t<span role=\"button\" class=\"ai1ec-dropdown-toggle ai1ec-subscribe\"
\t\t\tdata-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t";
        // line 11
        if ((!twig_test_empty((isset($context["subscribe_label"]) ? $context["subscribe_label"] : null)))) {
            // line 12
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["subscribe_label"]) ? $context["subscribe_label"] : null), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t";
            if ((isset($context["is_filtered"]) ? $context["is_filtered"] : null)) {
                // line 15
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_filtered"]) ? $context["text_filtered"] : null), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t</span>
\t</span>
\t";
        // line 23
        $context["url"] = (strtr((isset($context["export_url"]) ? $context["export_url"] : null), array("webcal://" => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null));
        // line 24
        echo "\t";
        $context["url_no_html"] = ((strtr((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null), array("webcal://" => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null)) . "&");
        // line 25
        echo "\t<ul class=\"ai1ec-dropdown-menu ai1ec-pull-";
        echo twig_escape_filter($this->env, (isset($context["alignment2"]) ? $context["alignment2"] : null), "html", null, true);
        echo "\" role=\"menu\">
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t\tdata-placement=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "timely"), "html", null, true);
        echo "\"
\t\t\t\thref=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely\"></i>
\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "timely"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "google"), "html", null, true);
        echo "\"
\t\t\t  href=\"http://www.google.com/calendar/render?cid=";
        // line 37
        echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["url_no_html"]) ? $context["url_no_html"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "google"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "outlook"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 45
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "outlook"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "apple"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 53
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "apple"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t";
        // line 59
        $context["export_url_no_html_http"] = strtr((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null), array("webcal://" => "http://"));
        // line 60
        echo "\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t  data-placement=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "plaintext"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 62
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html_http"]) ? $context["export_url_no_html_http"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "plaintext"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t  data-placement=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "xml"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
        echo "&xml=true\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-file-text ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "xml"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</div>

";
        // line 78
        if ((isset($context["show_get_calendar"]) ? $context["show_get_calendar"] : null)) {
            // line 79
            echo "\t<a href=\"http://time.ly\" target=\"_blank\"
\t\tclass=\"ai1ec-btn ai1ec-btn-default ai1ec-get-calendar
\t\t\t";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
            echo "\">
\t\t<small class=\"ai1ec-fa-stack ai1ec-text-info ai1ec-fa-fw\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-square ai1ec-fa-stack-2x\"></i>
\t\t\t<i class=\"ai1ec-fa ai1ec-icon-timely ai1ec-fa-stack-1x ai1ec-fa-inverse ai1ec-fa-lg\"></i>
\t\t</small>
\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["text_get_calendar"]) ? $context["text_get_calendar"] : null), "html", null, true);
            echo "</span>
\t</a>
";
        }
    }

    public function getTemplateName()
    {
        return "subscribe-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 86,  206 => 79,  204 => 78,  195 => 72,  190 => 70,  184 => 69,  176 => 64,  171 => 62,  165 => 61,  162 => 60,  160 => 59,  153 => 55,  148 => 53,  142 => 52,  134 => 47,  123 => 44,  110 => 37,  104 => 36,  91 => 29,  85 => 28,  73 => 23,  65 => 19,  59 => 17,  53 => 15,  50 => 14,  42 => 11,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  465 => 183,  460 => 180,  457 => 176,  454 => 175,  452 => 174,  449 => 173,  446 => 171,  444 => 170,  441 => 168,  439 => 167,  436 => 166,  433 => 165,  423 => 161,  419 => 160,  414 => 158,  410 => 157,  406 => 156,  403 => 155,  398 => 154,  396 => 153,  393 => 152,  389 => 150,  379 => 147,  375 => 146,  370 => 144,  366 => 143,  362 => 142,  359 => 141,  354 => 140,  352 => 139,  349 => 138,  342 => 134,  338 => 133,  333 => 131,  328 => 129,  325 => 128,  323 => 127,  316 => 123,  310 => 119,  303 => 115,  299 => 114,  294 => 112,  289 => 110,  286 => 109,  284 => 108,  281 => 107,  273 => 104,  267 => 103,  264 => 102,  262 => 101,  259 => 100,  256 => 99,  251 => 96,  247 => 95,  242 => 93,  238 => 92,  235 => 91,  233 => 90,  230 => 89,  223 => 85,  219 => 84,  213 => 83,  210 => 81,  208 => 81,  205 => 80,  198 => 76,  194 => 75,  188 => 74,  185 => 73,  183 => 72,  177 => 69,  173 => 68,  170 => 67,  167 => 66,  164 => 65,  158 => 63,  152 => 61,  149 => 60,  147 => 59,  143 => 58,  139 => 57,  133 => 56,  129 => 45,  122 => 50,  118 => 48,  115 => 39,  112 => 46,  108 => 44,  105 => 43,  102 => 42,  100 => 41,  96 => 31,  90 => 37,  88 => 36,  84 => 34,  81 => 33,  78 => 25,  75 => 24,  68 => 20,  61 => 18,  54 => 15,  52 => 14,  45 => 10,  34 => 6,  30 => 4,  26 => 3,  47 => 12,  44 => 12,  37 => 7,  31 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
