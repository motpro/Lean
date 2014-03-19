<?php

/* LeanAdminBundle:Corporation:index.html.twig */
class __TwigTemplate_884c55de05996a29e7edf53b3aa298aaa82c3f0e0154f2973ee0c7bffe20dcb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::template.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "企业列表";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<table class=\"table table-bordered table-condensed\">
\t\t<tr>
\t\t\t<td>ID</td>
\t\t\t<td>公司名</td>
\t\t\t<td>销售机会</td>
\t\t\t<td>最后更新</td>
\t\t</tr>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["corporation"]) {
            if ($this->getAttribute($this->getContext($context, "corporation"), "name")) {
                // line 15
                echo "\t\t<tr>
\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "corporation"), "id"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "corporation"), "name"), "html", null, true);
                echo "</td>
\t\t\t<td></td>
\t\t\t<td>";
                // line 19
                if ($this->getAttribute($this->getContext($context, "corporation"), "timeupdated")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "corporation"), "timeupdated"), "Y-m-d h:i"), "html", null, true);
                }
                echo "</td>
\t\t</tr>
\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['corporation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</table>

";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Corporation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  53 => 15,  212 => 104,  195 => 89,  192 => 88,  160 => 63,  150 => 59,  23 => 4,  104 => 22,  77 => 22,  34 => 7,  129 => 66,  118 => 58,  70 => 20,  58 => 14,  153 => 50,  126 => 40,  90 => 27,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 50,  128 => 49,  107 => 39,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 46,  143 => 55,  135 => 43,  119 => 42,  102 => 32,  71 => 28,  67 => 19,  63 => 15,  59 => 14,  38 => 6,  94 => 9,  89 => 6,  85 => 26,  75 => 29,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 5,  44 => 8,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 45,  117 => 44,  105 => 38,  91 => 27,  62 => 22,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 23,  72 => 22,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 25,  74 => 21,  66 => 15,  55 => 15,  52 => 14,  50 => 10,  43 => 12,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 74,  164 => 59,  162 => 47,  154 => 60,  149 => 48,  147 => 46,  144 => 45,  141 => 44,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 30,  109 => 29,  106 => 36,  103 => 32,  99 => 13,  95 => 28,  92 => 21,  86 => 26,  82 => 22,  80 => 19,  73 => 22,  64 => 23,  60 => 17,  57 => 11,  54 => 10,  51 => 13,  48 => 14,  45 => 10,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 3,);
    }
}
