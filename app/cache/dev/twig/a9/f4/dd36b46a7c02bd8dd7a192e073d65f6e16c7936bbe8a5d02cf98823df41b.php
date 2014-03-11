<?php

/* ::template.html.twig */
class __TwigTemplate_a9f4dd36b46a7c02bd8dd7a192e073d65f6e16c7936bbe8a5d02cf98823df41b extends Twig_Template
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
    <!-- Chang URLs to wherever Video.js files will be hosted -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/leanyun/video-js/video-js.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- video.js must be in the <head> for older IEs to work. -->
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/leanyun/video-js/video-js.css"), "html", null, true);
        echo "\"></script>

    <!-- kindeditor start. -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kindeditor/themes/default/default.css"), "html", null, true);
        echo "\" />
    <script charset=\"utf-8\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kindeditor/kindeditor-min.js"), "html", null, true);
        echo "\"></script>
    <script charset=\"utf-8\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kindeditor/lang/zh_CN.js"), "html", null, true);
        echo "\"></script>
    <!-- kindeditor end-->

    <!-- datetimepicker start-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    <script charset=\"utf-8\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- datetimepicker end-->

";
    }

    // line 24
    public function block_navbar($context, array $blocks = array())
    {
        // line 25
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
        // line 55
        echo $this->env->getExtension('routing')->getPath("corporation_home", array("page" => 1));
        echo "\">企业列表</a></li>
                        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("contact_home", array("page" => 1));
        echo "\">客户列表</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">提醒列表</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">销售机会</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">工具<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("search_home");
        echo "\">搜索</a></li>
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
        return array (  133 => 67,  119 => 56,  115 => 55,  80 => 24,  72 => 19,  68 => 18,  61 => 14,  57 => 13,  53 => 12,  47 => 9,  42 => 7,  37 => 5,  32 => 4,  29 => 3,  145 => 78,  142 => 77,  103 => 39,  93 => 36,  87 => 35,  83 => 25,  79 => 33,  76 => 32,  71 => 31,  62 => 25,  41 => 6,  38 => 5,  30 => 3,);
    }
}
