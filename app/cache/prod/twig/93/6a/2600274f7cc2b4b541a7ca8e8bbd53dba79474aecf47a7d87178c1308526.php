<?php

/* LeanAdminBundle:add:index.html.twig */
class __TwigTemplate_936a2600274f7cc2b4b541a7ca8e8bbd53dba79474aecf47a7d87178c1308526 extends Twig_Template
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
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "contact"))) {
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
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "user"))) {
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
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "company"))) {
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
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "opportunity"))) {
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
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "user"))) {
            // line 39
            echo "\t\t<div class=\"col-md-6\" ng-controller=\"add_user\">

\t\t\t";
            // line 41
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "post", "class" => "form-horizontal"));
            echo "

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label for=\"\">";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入名字")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入用户名", "ng-keyup" => "username_exist(e)", "ng-model" => "username")));
            echo "


\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入邮箱")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "输入密码")));
            echo "
\t\t\t\t</div>

\t\t\t";
            // line 65
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t</div>

\t\t<div class=\"col-md-6\">

\t\t ";
            // line 76
            echo " 
\t\t \t{{data.username}}

\t\t \t{{data.username}}

\t\t \t{{data.username}}
\t\t ";
            echo " 

\t\t</div>

\t\t";
        }
        // line 81
        echo "
\t</div>
</div>
</div>

</div></div>
";
    }

    // line 90
    public function block_javascript($context, array $blocks = array())
    {
        // line 91
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
        // line 106
        echo $this->env->getExtension('routing')->getUrl("rest_add_user_");
        echo "\" ,
\t\t\tdata : \$.param( data) , 
\t\t\tmethod : \"POST\" ,  
\t\t\theaders : {
\t\t\t\t'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
\t\t\t},
\t\t}).success(function(data ,status) {

\t\t\t

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
        return "LeanAdminBundle:add:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 106,  197 => 91,  194 => 90,  184 => 81,  170 => 76,  162 => 65,  156 => 62,  152 => 61,  145 => 57,  141 => 56,  132 => 50,  128 => 49,  121 => 45,  117 => 44,  111 => 41,  107 => 39,  105 => 38,  91 => 27,  85 => 26,  79 => 23,  73 => 22,  67 => 19,  61 => 18,  55 => 15,  49 => 14,  39 => 6,  36 => 5,  30 => 3,);
    }
}
