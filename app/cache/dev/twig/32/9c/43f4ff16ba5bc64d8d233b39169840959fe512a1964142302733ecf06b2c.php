<?php

/* ::layout.html.twig */
class __TwigTemplate_329c43f4ff16ba5bc64d8d233b39169840959fe512a1964142302733ecf06b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" ng-app>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angularjs/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://libs.baidu.com/jquery/1.9.0/jquery.js\"></script>
    ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body style=\"padding-top: 70px;\">

";
        // line 13
        $this->displayBlock('navbar', $context, $blocks);
        // line 14
        echo "
<div id=\"content\">
    <div class=\"header-logo\">

    </div>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>
    </div>
</div>


<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 29
        $this->displayBlock('javascript', $context, $blocks);
        // line 32
        echo "<script type=\"text/javascript\" charset=\"utf-8\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/jquery.contextmenu.r2.packed.js"), "html", null, true);
        echo "\"></script>


</script>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  77 => 32,  34 => 6,  129 => 66,  118 => 58,  70 => 20,  58 => 14,  153 => 50,  126 => 40,  90 => 27,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 34,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 46,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 28,  67 => 15,  63 => 15,  59 => 14,  38 => 7,  94 => 9,  89 => 6,  85 => 25,  75 => 29,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 39,  117 => 44,  105 => 51,  91 => 27,  62 => 22,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 25,  74 => 21,  66 => 15,  55 => 15,  52 => 14,  50 => 13,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 58,  149 => 48,  147 => 46,  144 => 45,  141 => 44,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 30,  109 => 29,  106 => 36,  103 => 32,  99 => 13,  95 => 28,  92 => 21,  86 => 26,  82 => 22,  80 => 19,  73 => 21,  64 => 23,  60 => 6,  57 => 11,  54 => 10,  51 => 10,  48 => 9,  45 => 10,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
