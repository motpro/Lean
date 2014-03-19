<?php

/* LeanAdminBundle:Search:index.html.twig */
class __TwigTemplate_9da33fdbbf0b551ba539f6ca710089b2fbc1aea287edaf891fa971088110cc49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::template.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\"><div class=\"row\">

<div class=\"col-md-6\">

<form class=\"form-inline\" role=\"form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("search_result_return");
        echo "\" method=\"POST\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"type\">
\t\t\t<option value=\"username\">用户名</option>
\t\t\t<option value=\"email\">Email</option>
\t\t\t<option value=\"realname\">真实姓名</option>
\t\t\t<option value=\"company\">公司</option>
\t\t\t<option value=\"job\">工作</option>
\t\t\t<option value=\"city\">城市</option>
\t\t\t<option value=\"reg_first\">注册日期(早于)</option>
\t\t\t<option value=\"reg_last\">注册日期(晚于)</option>
\t\t\t<option value=\"reg_date\">注册日期(指定日期)</option>
\t\t\t<option value=\"login_first\">最后登陆(早于)</option>
\t\t\t<option value=\"login_last\">最后登陆(晚于)</option>\t
\t\t\t<option value=\"login_date\">最后登陆(指定)</option>\t\t\t
\t\t\t<option value=\"communication\">沟通记录搜索</option>
\t\t</select>
\t</div>

\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"text\" type=\"text\" placeholder=\"搜索内容\" />
\t</div>

\t<div class=\"form-group\">
\t\t<button class=\"btn btn-primary\" name=\"search\" value=\"1\">搜索</button>
\t</div>

</form>
</div>

</div></div>


";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 164,  284 => 163,  270 => 150,  197 => 114,  190 => 110,  170 => 96,  165 => 93,  110 => 51,  65 => 19,  53 => 15,  212 => 104,  195 => 89,  192 => 88,  160 => 63,  150 => 59,  23 => 4,  104 => 22,  77 => 22,  34 => 7,  129 => 60,  118 => 58,  70 => 20,  58 => 14,  153 => 50,  126 => 40,  90 => 44,  81 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 130,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 50,  128 => 49,  107 => 39,  61 => 18,  273 => 96,  269 => 94,  254 => 136,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 126,  227 => 81,  224 => 71,  221 => 77,  219 => 122,  217 => 75,  208 => 118,  204 => 72,  179 => 69,  159 => 46,  143 => 55,  135 => 43,  119 => 42,  102 => 48,  71 => 28,  67 => 19,  63 => 15,  59 => 14,  38 => 5,  94 => 23,  89 => 6,  85 => 26,  75 => 18,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 5,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 106,  171 => 61,  166 => 71,  163 => 92,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 45,  117 => 55,  105 => 49,  91 => 27,  62 => 15,  49 => 12,  24 => 7,  25 => 3,  19 => 2,  79 => 23,  72 => 22,  69 => 17,  47 => 9,  40 => 8,  37 => 8,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 32,  98 => 47,  96 => 30,  83 => 20,  74 => 21,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 12,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 74,  164 => 59,  162 => 47,  154 => 60,  149 => 48,  147 => 46,  144 => 45,  141 => 44,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 30,  109 => 29,  106 => 36,  103 => 26,  99 => 13,  95 => 28,  92 => 45,  86 => 42,  82 => 22,  80 => 19,  73 => 22,  64 => 27,  60 => 17,  57 => 11,  54 => 10,  51 => 13,  48 => 14,  45 => 11,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 3,);
    }
}
