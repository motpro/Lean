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
Fill the blank
<div class=\"panel panel-default\">
  \t<div class=\"panel-body\">
\t\t
\t\t";
        // line 27
        if (array_key_exists("type", $context)) {
            // line 28
            echo "
\t\t\t";
            // line 29
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "post", "class" => "form-horizontal"));
            echo "

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label for=\"\">";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入名字")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
            echo "</labe>
\t\t\t\t    ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入用户名")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入邮箱")));
            echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"\">";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
            echo "</label>
\t\t\t\t    ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "placeholder" => "输入密码")));
            echo "
\t\t\t\t</div>

\t\t\t";
            // line 51
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t";
        }
        // line 53
        echo "
\t</div>
</div>
</div>

</div></div>
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
        return array (  132 => 53,  127 => 51,  121 => 48,  117 => 47,  110 => 43,  106 => 42,  99 => 38,  95 => 37,  88 => 33,  84 => 32,  78 => 29,  75 => 28,  73 => 27,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 3,);
    }
}