<?php

/* LeanMobileBundle::layout.html.twig */
class __TwigTemplate_bb11f7cfd257f63bf65f8bd3ae9b880b73df0288735e60edb915c50c223c6e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/leanyun/video-js/video-js.min.css"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "精益云学院 - 手机版";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 57
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
    ";
        // line 63
        $this->displayBlock('content_header', $context, $blocks);
        // line 66
        echo "
    <div class=\"block\">
        ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "    </div>

    ";
        // line 71
        if (array_key_exists("code", $context)) {
            // line 72
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 74
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        // line 16
        echo "    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">精益云移动版</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">首页</a></li>
            <li><a href=\"#\">课程列表</a></li>
            <li class=\"dropdown\">
                <a href=\"index.php?option=com_portals\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">热门课程 <b class=\"caret\"></b></a>
            </li>
        </ul>
        <form class=\"navbar-form navbar-left\" role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"找课程\">
            </div>
            <button type=\"submit\" class=\"btn btn-default\">找课程</button>
        </form>
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">联系我们</a></li>
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
    </div><!-- /.navbar-collapse -->
    ";
    }

    // line 63
    public function block_content_header($context, array $blocks = array())
    {
        // line 64
        echo "        <div style=\"clear: both\"></div>
    ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "LeanMobileBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  165 => 64,  162 => 63,  118 => 16,  115 => 15,  107 => 74,  103 => 72,  101 => 71,  97 => 69,  95 => 68,  91 => 66,  89 => 63,  86 => 62,  77 => 59,  74 => 58,  69 => 57,  66 => 15,  63 => 14,  57 => 12,  51 => 9,  46 => 7,  41 => 5,  36 => 4,  33 => 3,);
    }
}
