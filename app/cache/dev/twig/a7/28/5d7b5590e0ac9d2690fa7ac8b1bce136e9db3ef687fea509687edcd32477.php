<?php

/* LeanAdminBundle:Add:index.html.twig */
class __TwigTemplate_a7285d7b5590e0ac9d2690fa7ac8b1bce136e9db3ef687fea509687edcd32477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::template.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "LeanAdminBundle:Add:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\"><div class=\"row\">

<div class=\"col-md-3\">
<div class=\"panel panel-default\"><div class=\"panel-body\">
<h1>选择添加类型</h1>

<ul class=\"nav nav-pills nav-stacked\">
\t<li ";
        // line 14
        if ((array_key_exists("type", $context) && ($this->getContext($context, "type") == "contact"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "contact"));
        echo "\">添加客户</a>
\t</li>
\t
\t<li ";
        // line 18
        if ((array_key_exists("type", $context) && ($this->getContext($context, "type") == "user"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "user"));
        echo "\">添加会员</a>
\t</li>
\t
\t<li ";
        // line 22
        if ((array_key_exists("type", $context) && ($this->getContext($context, "type") == "company"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "company"));
        echo "\">添加企业</a>
\t</li>
\t
\t<li ";
        // line 26
        if ((array_key_exists("type", $context) && ($this->getContext($context, "type") == "opportunity"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "opportunity"));
        echo "\">添加销售机会</a>
\t</li>
</ul>
</div></div>
</div>

<div class=\"col-md-9\">

<div class=\"panel panel-default\">
  \t<div class=\"panel-body\">
\t\t
\t\t";
        // line 38
        if ((array_key_exists("type", $context) && ($this->getContext($context, "type") == "user"))) {
            // line 39
            echo "\t\t<div class=\"col-md-6\" ng-controller=\"add_user\">

\t\t\t";
            // line 41
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("action" => "", "method" => "post", "class" => "form-horizontal"));
            echo "

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label for=\"\">";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入名字")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入用户名", "ng-keyup" => "username_exist(e)", "ng-model" => "username")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入邮箱")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入密码")));
            echo "
\t\t\t\t</div>

\t\t\t";
            // line 63
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
            echo "
\t\t</div>

\t\t<div class=\"col-md-6\">

\t\t ";
            // line 74
            echo " 
\t\t \t{{data.username}}

\t\t \t{{data.username}}

\t\t \t{{data.username}}
\t\t ";
            echo " 

\t\t</div>

\t\t";
        }
        // line 79
        echo "
\t</div>
</div>
</div>

</div></div>
";
    }

    // line 88
    public function block_javascript($context, array $blocks = array())
    {
        // line 89
        echo "<script>
function add_user( \$scope , \$http)
{


\t\t
\t
\t\$scope.username_exist = function ()
\t{
\t\tdata = {
\t\t\t'username' : \$scope.username , 
\t\t};

\t\t\$http({
\t\t
\t\t\turl : \"";
        // line 104
        echo $this->env->getExtension('routing')->getUrl("rest_add_user_");
        echo "\" ,
\t\t\tdata : \$.param( data) , 
\t\t\tmethod : \"POST\" ,  
\t\t\theaders : {
\t\t\t\t'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
\t\t\t},
\t\t}).success(function(data ,status) {

\t\t\t\$scope.data = data;
\t\t
\t\t});

\t}
}
</script>
";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Add:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 104,  195 => 89,  192 => 88,  160 => 63,  150 => 59,  23 => 4,  104 => 22,  77 => 32,  34 => 7,  129 => 66,  118 => 58,  70 => 20,  58 => 14,  153 => 50,  126 => 40,  90 => 27,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 50,  128 => 49,  107 => 39,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 46,  143 => 55,  135 => 43,  119 => 42,  102 => 32,  71 => 28,  67 => 19,  63 => 15,  59 => 14,  38 => 8,  94 => 9,  89 => 6,  85 => 26,  75 => 29,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 5,  44 => 8,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 45,  117 => 44,  105 => 38,  91 => 27,  62 => 22,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 23,  72 => 22,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 25,  74 => 21,  66 => 15,  55 => 15,  52 => 14,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 74,  164 => 59,  162 => 47,  154 => 60,  149 => 48,  147 => 46,  144 => 45,  141 => 44,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 30,  109 => 29,  106 => 36,  103 => 32,  99 => 13,  95 => 28,  92 => 21,  86 => 26,  82 => 22,  80 => 19,  73 => 22,  64 => 23,  60 => 16,  57 => 11,  54 => 10,  51 => 13,  48 => 12,  45 => 10,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 3,);
    }
}
