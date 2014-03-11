<?php

/* LeanAdminBundle:Search:index.html.twig */
class __TwigTemplate_ea9a7bf4c79e75e9ee225feac06abbbc586e77e5ae703adc5df81cd0d9ad4a43 extends Twig_Template
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
        return array (  37 => 8,  31 => 4,  28 => 3,);
    }
}
