<?php

/* recurrence.twig */
class __TwigTemplate_dc78b950182efb8f436b144938fb0dc48cf395d7daabe20293234dbcf2b26545 extends Twig_Template
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
        if ((!twig_test_empty((isset($context["recurrence"]) ? $context["recurrence"] : null)))) {
            // line 2
            echo "\t<div class=\"ai1ec-recurrence ai1ec-btn-group\">
\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs
\t\t\tai1ec-tooltip-trigger ai1ec-disabled ai1ec-text-muted\"
\t\t\tdata-html=\"true\"
\t\t\ttitle=\"";
            // line 6
            ob_start();
            // line 7
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["recurrence"]) ? $context["recurrence"] : null)), "html_attr");
            echo "
\t\t\t\t";
            // line 8
            if ((!twig_test_empty((isset($context["exclude"]) ? $context["exclude"] : null)))) {
                // line 9
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, ((("<div class=\"ai1ec-recurrence-exclude\">" . Ai1ec_I18n::__("Excludes: ")) . (isset($context["exclude"]) ? $context["exclude"] : null)) . "</div>"), "html_attr");
                echo "
\t\t\t\t";
            }
            // line 11
            echo "\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-repeat\"></i>
\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Repeats"), "html", null, true);
            echo "
\t\t</button>

\t\t";
            // line 16
            if ((!twig_test_empty((isset($context["edit_instance_url"]) ? $context["edit_instance_url"] : null)))) {
                // line 17
                echo "\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-tooltip-trigger
\t\t\t\tai1ec-text-muted\"
\t\t\t\ttitle=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["edit_instance_text"]) ? $context["edit_instance_text"] : null), "html_attr");
                echo "\"
\t\t\t\thref=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["edit_instance_url"]) ? $context["edit_instance_url"] : null), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i>
\t\t\t</a>
\t\t";
            }
            // line 24
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "recurrence.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  64 => 20,  60 => 19,  56 => 17,  48 => 13,  36 => 9,  218 => 86,  206 => 79,  204 => 78,  195 => 72,  190 => 70,  184 => 69,  176 => 64,  171 => 62,  165 => 61,  162 => 60,  160 => 59,  153 => 55,  148 => 53,  142 => 52,  134 => 47,  123 => 44,  110 => 37,  104 => 36,  91 => 29,  85 => 28,  73 => 23,  65 => 19,  59 => 17,  53 => 15,  50 => 14,  42 => 11,  27 => 6,  25 => 4,  23 => 3,  21 => 2,  465 => 183,  460 => 180,  457 => 176,  454 => 175,  452 => 174,  449 => 173,  446 => 171,  444 => 170,  441 => 168,  439 => 167,  436 => 166,  433 => 165,  423 => 161,  419 => 160,  414 => 158,  410 => 157,  406 => 156,  403 => 155,  398 => 154,  396 => 153,  393 => 152,  389 => 150,  379 => 147,  375 => 146,  370 => 144,  366 => 143,  362 => 142,  359 => 141,  354 => 140,  352 => 139,  349 => 138,  342 => 134,  338 => 133,  333 => 131,  328 => 129,  325 => 128,  323 => 127,  316 => 123,  310 => 119,  303 => 115,  299 => 114,  294 => 112,  289 => 110,  286 => 109,  284 => 108,  281 => 107,  273 => 104,  267 => 103,  264 => 102,  262 => 101,  259 => 100,  256 => 99,  251 => 96,  247 => 95,  242 => 93,  238 => 92,  235 => 91,  233 => 90,  230 => 89,  223 => 85,  219 => 84,  213 => 83,  210 => 81,  208 => 81,  205 => 80,  198 => 76,  194 => 75,  188 => 74,  185 => 73,  183 => 72,  177 => 69,  173 => 68,  170 => 67,  167 => 66,  164 => 65,  158 => 63,  152 => 61,  149 => 60,  147 => 59,  143 => 58,  139 => 57,  133 => 56,  129 => 45,  122 => 50,  118 => 48,  115 => 39,  112 => 46,  108 => 44,  105 => 43,  102 => 42,  100 => 41,  96 => 31,  90 => 37,  88 => 36,  84 => 34,  81 => 33,  78 => 25,  75 => 24,  68 => 20,  61 => 18,  54 => 16,  52 => 14,  45 => 10,  34 => 8,  30 => 4,  26 => 3,  47 => 12,  44 => 12,  37 => 7,  31 => 5,  29 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
