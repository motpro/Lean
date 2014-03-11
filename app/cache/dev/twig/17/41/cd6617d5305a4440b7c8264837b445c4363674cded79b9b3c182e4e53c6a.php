<?php

/* LeanAdminBundle:Default:query.html.twig */
class __TwigTemplate_1741cd6617d5305a4440b7c8264837b445c4363674cded79b9b3c182e4e53c6a extends Twig_Template
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
        height: '240px',
        width: '100%' ,
    });
});


</script>

<div class=\"container\">
<div class=\"row\">
    <div class=\"col-md-6\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">

                 ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name"), "html", null, true);
        echo "的沟通记录

            </h3>
        </div>
        <div class=\"panel-body\">
        <table class=\"table table-condensed\">
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["one"]) {
            if ($this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "recordText")) {
                // line 32
                echo "            <tr>
                <td></td>
                <td class=\"col-md-3\">";
                // line 34
                if ($this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "remindeddate")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "remindeddate"), "Y-m-d h:i"), "html", null, true);
                }
                echo " | 
                ";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "date"), "Y-m-d h:i"), "html", null, true);
                echo "
                </td>
            </tr>
            <tr>
                <td class=\"col-md-2\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "id"), "html", null, true);
                echo "</td>
                <td class=\"col-md-10\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")), "recordText"), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
            <form action=\"\" method=\"post\">
            <textarea id=\"content1\" name=\"content\" style=\"width:700px;height:200px;visibility:hidden;\"></textarea>
            
            <div class=\"form-group\">
                <label>时间</label>
                <input class=\"form-control\" type=\"text\" value=\"2012-05-15 21:05\" id=\"datetimepicker\">
            </div>
            <div class=\"form-group\">
                <input class=\"btn btn-primary\" type=\"button\" value=\"更新\" />
            </div>
            </form>
        </div>
    </div>
</div>

<hr/>

<div class=\"row\">
    <div class=\"col-md-6\">

        ";
        // line 75
        if ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "uid")) {
            // line 76
            echo "
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "username"), "html", null, true);
            echo "的会员资料</h3>
            </div>
        <div class=\"panel-body\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <div class=\"row\"><div class=\"col-md-6\">网站账号</div> <div class=\"col-md-6\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "username"), "html", null, true);
            echo "</div></div>
                </li>
                <li class=\"list-group-item\">
                    <div class=\"row\"><div class=\"col-md-6\">邮箱</div> <div class=\"col-md-6\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "email"), "html", null, true);
            echo "</div></div>
                </li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Morbi leo risus</li>
                <li class=\"list-group-item\">Porta ac consectetur ac</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

        ";
        } else {
            // line 97
            echo "
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">他/她不是网站会员</h3>
                </div>
            </div>
        
        ";
        }
        // line 105
        echo "    </div>

    <div class=\"col-md-6\">
    </div>
</div>


</div>
";
    }

    // line 116
    public function block_javascript($context, array $blocks = array())
    {
        // line 117
        echo "<script>
\$('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd hh:ii'
});
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
        return array (  200 => 117,  197 => 116,  185 => 105,  175 => 97,  162 => 87,  156 => 84,  148 => 79,  143 => 76,  141 => 75,  107 => 43,  97 => 40,  93 => 39,  86 => 35,  80 => 34,  76 => 32,  71 => 31,  62 => 25,  41 => 6,  38 => 5,  30 => 3,);
    }
}
