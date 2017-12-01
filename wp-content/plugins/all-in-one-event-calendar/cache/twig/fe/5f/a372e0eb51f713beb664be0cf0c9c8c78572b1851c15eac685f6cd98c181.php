<?php

/* calendar.twig */
class __TwigTemplate_fe5fa372e0eb51f713beb664be0cf0c9c8c78572b1851c15eac685f6cd98c181 extends Twig_Template
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
        // line 2
        echo "<!-- START All-in-One Event Calendar Plugin - Version ";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " -->
<div id=\"ai1ec-container\"
\t class=\"ai1ec-main-container ";
        // line 4
        echo (isset($context["ai1ec_calendar_classes"]) ? $context["ai1ec_calendar_classes"] : null);
        echo "\">
\t<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->
\t<div id=\"ai1ec-calendar\" class=\"timely ai1ec-calendar\">
\t\t";
        // line 7
        if (array_key_exists("ai1ec_above_calendar", $context)) {
            // line 8
            echo "\t\t\t";
            echo (isset($context["ai1ec_above_calendar"]) ? $context["ai1ec_above_calendar"] : null);
            echo "
\t\t";
        }
        // line 10
        echo "\t\t";
        echo (isset($context["filter_menu"]) ? $context["filter_menu"] : null);
        echo "
\t\t<div id=\"ai1ec-calendar-view-container\"
\t\t\t class=\"ai1ec-calendar-view-container\">
\t\t\t<div id=\"ai1ec-calendar-view-loading\"
\t\t\t\t class=\"ai1ec-loading ai1ec-calendar-view-loading\"></div>
\t\t\t<div id=\"ai1ec-calendar-view\" class=\"ai1ec-calendar-view\">
\t\t\t\t";
        // line 16
        echo (isset($context["view"]) ? $context["view"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-subscribe-container ai1ec-pull-right ai1ec-btn-group\">
\t\t\t";
        // line 20
        echo (isset($context["subscribe_buttons"]) ? $context["subscribe_buttons"] : null);
        echo "
\t\t</div>
\t\t";
        // line 22
        echo (isset($context["after_view"]) ? $context["after_view"] : null);
        echo "
\t</div><!-- /.timely -->
</div>
";
        // line 25
        if ((!twig_test_empty((isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null)))) {
            // line 26
            echo "\t<script type=\"text/javascript\">";
            echo (isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null);
            echo "</script>
";
        }
        // line 28
        echo "<!-- END All-in-One Event Calendar Plugin -->
";
        // line 30
        echo "

";
    }

    public function getTemplateName()
    {
        return "calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  67 => 25,  61 => 22,  49 => 16,  165 => 86,  156 => 80,  147 => 74,  138 => 68,  125 => 60,  123 => 59,  120 => 58,  111 => 52,  102 => 46,  84 => 34,  80 => 32,  78 => 30,  71 => 26,  65 => 24,  59 => 21,  53 => 19,  33 => 8,  30 => 5,  356 => 125,  351 => 122,  349 => 121,  342 => 120,  340 => 119,  333 => 118,  331 => 117,  327 => 116,  325 => 115,  320 => 113,  313 => 111,  307 => 109,  305 => 108,  300 => 106,  295 => 104,  291 => 103,  284 => 99,  280 => 97,  274 => 94,  270 => 93,  267 => 92,  265 => 91,  261 => 89,  256 => 87,  253 => 86,  251 => 85,  246 => 83,  241 => 81,  236 => 79,  232 => 77,  226 => 75,  224 => 74,  220 => 72,  216 => 71,  214 => 70,  210 => 69,  206 => 68,  202 => 67,  197 => 64,  191 => 61,  188 => 60,  186 => 59,  181 => 57,  176 => 55,  171 => 53,  161 => 49,  157 => 48,  153 => 47,  149 => 46,  142 => 43,  137 => 41,  133 => 40,  129 => 62,  124 => 38,  122 => 37,  117 => 36,  113 => 35,  107 => 32,  103 => 31,  99 => 30,  93 => 40,  90 => 25,  88 => 24,  85 => 23,  82 => 22,  73 => 19,  63 => 23,  56 => 20,  51 => 18,  42 => 9,  38 => 8,  25 => 4,  52 => 12,  47 => 17,  41 => 8,  35 => 12,  27 => 4,  60 => 15,  48 => 8,  40 => 6,  34 => 5,  29 => 5,  22 => 2,  44 => 10,  28 => 4,  24 => 3,  86 => 26,  75 => 28,  70 => 18,  66 => 17,  62 => 17,  58 => 14,  54 => 11,  50 => 11,  43 => 16,  39 => 10,  31 => 7,  26 => 3,  21 => 2,  19 => 2,);
    }
}
