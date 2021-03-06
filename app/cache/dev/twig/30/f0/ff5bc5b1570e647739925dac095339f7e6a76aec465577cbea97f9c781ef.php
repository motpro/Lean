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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "name"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["one"]) {
            if ($this->getAttribute($this->getContext($context, "one"), "recordText")) {
                // line 42
                echo "            <tr>
                <td>
                    ";
                // line 44
                if ($this->getAttribute($this->getContext($context, "one"), "remindeddate")) {
                    // line 45
                    echo "                    <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "one"), "remindeddate"), "Y-m-d h:i"), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "one"), "date"), "Y-m-d h:i"), "html", null, true);
                echo "
                </td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "one"), "id"), "html", null, true);
                echo "</td>
            </tr>
            <tr>

                <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "one"), "recordText"), "html", null, true);
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
        if ($this->getAttribute($this->getContext($context, "account", true), "id", array(), "any", true, true)) {
            // line 93
            echo "
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "name"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "account"), "email"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>登录账户</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "account"), "username"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>真实姓名</td>
                    <td>";
            // line 114
            if ($this->getAttribute($this->getContext($context, "webprofile", true), "name", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "webprofile"), "name"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>
                <tr>
                    <td>联系方式</td>
                    <td>";
            // line 118
            if ($this->getAttribute($this->getContext($context, "webprofile", true), "phone", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "webprofile"), "phone"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>   
                <tr>
                    <td>公司</td>
                    <td>";
            // line 122
            if ($this->getAttribute($this->getContext($context, "webprofile", true), "company", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "webprofile"), "company"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>
                <tr>
                    <td>工作</td>
                    <td>";
            // line 126
            if ($this->getAttribute($this->getContext($context, "webprofile", true), "job", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "webprofile"), "job"), "html", null, true);
            } else {
                echo "未填写";
            }
            echo "</td>
                </tr>
                <tr>
                    <td>城市</td>
                    <td>";
            // line 130
            if ($this->getAttribute($this->getContext($context, "webprofile", true), "city", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "webprofile"), "city"), "html", null, true);
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
        return array (  287 => 164,  284 => 163,  270 => 150,  197 => 114,  190 => 110,  170 => 96,  165 => 93,  110 => 51,  65 => 19,  53 => 15,  212 => 104,  195 => 89,  192 => 88,  160 => 63,  150 => 59,  23 => 4,  104 => 22,  77 => 22,  34 => 7,  129 => 60,  118 => 58,  70 => 20,  58 => 14,  153 => 50,  126 => 40,  90 => 44,  81 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 130,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 50,  128 => 49,  107 => 39,  61 => 18,  273 => 96,  269 => 94,  254 => 136,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 126,  227 => 81,  224 => 71,  221 => 77,  219 => 122,  217 => 75,  208 => 118,  204 => 72,  179 => 69,  159 => 46,  143 => 55,  135 => 43,  119 => 42,  102 => 48,  71 => 28,  67 => 19,  63 => 15,  59 => 14,  38 => 5,  94 => 23,  89 => 6,  85 => 26,  75 => 18,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 5,  44 => 8,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 106,  171 => 61,  166 => 71,  163 => 92,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 45,  117 => 55,  105 => 49,  91 => 27,  62 => 15,  49 => 12,  24 => 7,  25 => 3,  19 => 2,  79 => 23,  72 => 22,  69 => 17,  47 => 9,  40 => 8,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 32,  98 => 47,  96 => 30,  83 => 20,  74 => 21,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 12,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 74,  164 => 59,  162 => 47,  154 => 60,  149 => 48,  147 => 46,  144 => 45,  141 => 44,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 30,  109 => 29,  106 => 36,  103 => 26,  99 => 13,  95 => 28,  92 => 45,  86 => 42,  82 => 22,  80 => 19,  73 => 22,  64 => 27,  60 => 17,  57 => 11,  54 => 10,  51 => 13,  48 => 14,  45 => 11,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 3,);
    }
}
