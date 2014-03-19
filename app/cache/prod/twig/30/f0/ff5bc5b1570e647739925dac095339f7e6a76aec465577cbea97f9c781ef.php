<?php

/* LeanAdminBundle:Default:query.html.twig */
class __TwigTemplate_30f0ff5bc5b1570e647739925dac095339f7e6a76aec465577cbea97f9c781ef extends Twig_Template
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
        echo "查看";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name"), "html", null, true);
        echo "资料";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<script>
KindEditor.ready(function(K) {
    K.create('#content1', {
        themeType : 'default' , 
        height: '200px',
        width: '100%' ,
    });
});

\$('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd hh:ii'
});
</script>

<div class=\"container\">
<div class=\"row\">
    <div class=\"col-md-6\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">

                 ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name"), "html", null, true);
        echo "的沟通记录

            </h3>
        </div>
        <div class=\"panel-body\">
        <table class=\"table table-condensed\">
        <tr>
            
            <td class=\"col-md-10\"><span class=\"label label-default\">提醒时间</span> 
            | <span class=\"label label-default\">&nbsp;添加时间 &nbsp;</label>
            </td>

            <td class=\"col-md-2\"><span class=\"label label-default\">编号</span></td>
        </tr>
        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["one"]) {
            if ($this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "recordText")) {
                // line 42
                echo "            <tr>
                <td>
                    ";
                // line 44
                if ($this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "remindeddate")) {
                    // line 45
                    echo "                    <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "remindeddate"), "Y-m-d h:i"), "html", null, true);
                    echo "</span>
                    ";
                } else {
                    // line 47
                    echo "                    <span class=\"label label-info\">没有提醒</span>
                    ";
                }
                // line 48
                echo " |
                ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "date"), "Y-m-d h:i"), "html", null, true);
                echo "
                </td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "id"), "html", null, true);
                echo "</td>
            </tr>
            <tr>

                <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "recordText"), "html", null, true);
                echo "</td>
                <td></td>
                
            </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </table>
        </div>

    </div>
    </div>

    <div class=\"col-md-6\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">添加新的沟通记录</h3>
        </div>
        <div class=\"panel-body\">
            <form name=\"form\" action=\"\" method=\"post\" ng-submit=\"save()\" ng-controller=\"FormSubmit\">
            <textarea id=\"content1\" name=\"content\" style=\"width:700px;height:200px;visibility:hidden;\" ng-model=\"text\" ></textarea>
            
            <div class=\"form-group\">
                <label>时间</label>
                <input class=\"form-control\" type=\"text\" value=\"\" id=\"datetimepicker\" ng-model=\"date\" />
            </div>
            <div class=\"form-group\">
                <input class=\"btn btn-primary\" type=\"submit\" value=\"更新\" />
            </div>
            </form>
        </div>
    </div>
</div>

<hr/>

<div class=\"row\">
    <div class=\"col-md-6\">

        ";
        // line 92
        if ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "id", array(), "any", true, true)) {
            // line 93
            echo "
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name"), "html", null, true);
            echo "的会员资料</h3>
            </div>
        <div class=\"panel-body\">
            <table class=\"table table-condensed table-bordered\">
                <tr>
                    <td class=\"col-md-4\">字段</td>
                    <td class=\"col-md-8\">值</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "email"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>登录账户</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "username"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>真实姓名</td>
                    <td>";
            // line 114
            if ($this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : null), "name", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : $this->getContext($context, "webprofile")), "name"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>
                <tr>
                    <td>联系方式</td>
                    <td>";
            // line 118
            if ($this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : null), "phone", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : $this->getContext($context, "webprofile")), "phone"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>   
                <tr>
                    <td>公司</td>
                    <td>";
            // line 122
            if ($this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : null), "company", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : $this->getContext($context, "webprofile")), "company"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>
                <tr>
                    <td>工作</td>
                    <td>";
            // line 126
            if ($this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : null), "job", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : $this->getContext($context, "webprofile")), "job"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>
                <tr>
                    <td>城市</td>
                    <td>";
            // line 130
            if ($this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : null), "city", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webprofile"]) ? $context["webprofile"] : $this->getContext($context, "webprofile")), "city"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>                
            </table>
        </div>

        ";
        } else {
            // line 136
            echo "
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">他/她不是网站会员</h3>
                </div>
                <div class=\"panel-body\">

                    <p></p>

                </div>

            </div>
        
        ";
        }
        // line 150
        echo "    </div>

    <div class=\"col-md-6\">

    
    </div>
</div>


</div>
";
    }

    // line 163
    public function block_javascript($context, array $blocks = array())
    {
        // line 164
        echo "<script>
var appModule = angular.module('TestFormModule', []);

appModule.controller(\"FormSubmit\",function(\$scope){
    \$scope.save=function()
    {
        alert('done');
    }
}


</script>
";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Default:query.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 164,  284 => 163,  270 => 150,  254 => 136,  241 => 130,  230 => 126,  219 => 122,  208 => 118,  197 => 114,  190 => 110,  183 => 106,  170 => 96,  165 => 93,  163 => 92,  129 => 60,  117 => 55,  110 => 51,  105 => 49,  102 => 48,  98 => 47,  92 => 45,  90 => 44,  86 => 42,  81 => 41,  64 => 27,  41 => 6,  38 => 5,  30 => 3,);
    }
}
