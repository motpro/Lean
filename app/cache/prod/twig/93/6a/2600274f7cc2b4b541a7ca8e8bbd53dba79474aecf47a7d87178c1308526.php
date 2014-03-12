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
\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "contact"));
        echo "\">添加客户</a></li>
\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "user"));
        echo "\">添加会员</a></li>
\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "company"));
        echo "\">添加企业</a></li>
\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("add_data", array("type" => "opportunity"));
        echo "\">添加销售机会</a></li>
</ul>
</div></div>
</div>

<div class=\"col-md-9\">

<div class=\"panel panel-default\">
  \t<div class=\"panel-body\">
\t\t
\t\t";
        // line 27
        if (array_key_exists("type", $context)) {
            // line 28
            echo "\t\t<div class=\"col-md-6\">


\t\t\t";
            // line 31
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "post", "class" => "form-horizontal"));
            echo "

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label for=\"\">";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入名字")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\" ng-controller=\"add_user\">
\t\t\t\t    <label for=\"\">";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入用户名", "ng-keyup" => "username_exist(e)", "ng-model" => "username")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入邮箱")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入密码")));
            echo "
\t\t\t\t</div>

\t\t\t";
            // line 53
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t</div>

\t\t<div class=\"col-md-6\">



\t\t</div>

\t\t";
        }
        // line 63
        echo "
\t</div>
</div>
</div>

</div></div>
";
    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        // line 73
        echo "\t
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angular_mvc/controllers/AdminBundle/Add/index.js"), "html", null, true);
        echo "\"></script>
\t
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
        return array (  159 => 74,  156 => 73,  153 => 72,  143 => 63,  130 => 53,  124 => 50,  120 => 49,  113 => 45,  109 => 44,  102 => 40,  98 => 39,  91 => 35,  87 => 34,  81 => 31,  76 => 28,  74 => 27,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  39 => 6,  36 => 5,  30 => 3,);
    }
}
