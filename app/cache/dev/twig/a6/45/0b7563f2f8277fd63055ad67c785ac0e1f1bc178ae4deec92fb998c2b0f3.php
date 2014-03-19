<?php

/* ::template.html.twig */
class __TwigTemplate_a6450b7563f2f8277fd63055ad67c785ac0e1f1bc178ae4deec92fb998c2b0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/css/bootstrap.css"), "html", null, true);
        echo "\" />

    <!-- kindeditor start. -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kindeditor/themes/default/default.css"), "html", null, true);
        echo "\" />
    <script charset=\"utf-8\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kindeditor/kindeditor-min.js"), "html", null, true);
        echo "\"></script>
    <script charset=\"utf-8\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kindeditor/lang/zh_CN.js"), "html", null, true);
        echo "\"></script>
    <!-- kindeditor end-->

    <!-- datetimepicker start-->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    <script charset=\"utf-8\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- datetimepicker end-->

";
    }

    // line 20
    public function block_navbar($context, array $blocks = array())
    {
        // line 21
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">导航条</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">首页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">管理员 <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">企业列表</a></li>
                        <li><a href=\"#\">联系人列表</a></li>
                        <li><a href=\"#\">网站会员</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">废纸篓</a></li>
                        <li class=\"divider\"></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">销售 <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("corporation_home", array("page" => 1));
        echo "\">企业列表</a></li>
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("contact_home", array("page" => 1));
        echo "\">客户列表</a></li>
                        <li><a href=\"#\">沟通记录</a></li>
                        <li><a href=\"#\">销售机会</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">提醒列表</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("add_home");
        echo "\">添加数据</a></li>
                        
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">工具<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("search_home");
        echo "\">搜索</a></li>
                    </ul>
                </li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
              
              <li><a href=\"#\">
                    
              </a></li>
              
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Action</a></li>
                  <li><a href=\"#\">Another action</a></li>
                  <li><a href=\"#\">Something else here</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"#\">Separated link</a></li>
                </ul>
              </li>
            </ul>

        </div>
    </nav>

";
    }

    public function getTemplateName()
    {
        return "::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 66,  118 => 58,  70 => 20,  58 => 14,  153 => 50,  126 => 40,  90 => 27,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 34,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 46,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 39,  117 => 44,  105 => 51,  91 => 27,  62 => 15,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 25,  74 => 21,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 58,  149 => 48,  147 => 46,  144 => 45,  141 => 44,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 37,  109 => 52,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 26,  82 => 22,  80 => 19,  73 => 21,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 10,  48 => 9,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
