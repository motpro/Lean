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
        return array (  129 => 66,  118 => 58,  109 => 52,  105 => 51,  73 => 21,  70 => 20,  62 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
