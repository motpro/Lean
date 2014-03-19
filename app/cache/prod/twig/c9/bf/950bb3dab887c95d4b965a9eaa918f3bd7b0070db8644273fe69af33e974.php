<?php

/* LeanAdminBundle:Default:index.html.twig */
class __TwigTemplate_c9bf950bb3dab887c95d4b965a9eaa918f3bd7b0070db8644273fe69af33e974 extends Twig_Template
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
        // line 4
        echo "    客户列表
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div ng-controller=\"search_controller\">

<p>";
        // line 10
        echo " {{hello}} ";
        echo "</p>

<table class=\"table table-bordered table-condensed table-hover\">
    <tr>
        <td width=\"5%\">id</td>
        <td width=\"15%\"></td>
        <td width=\"15%\"></td>
        <td width=\"15%\"></td>
        <td width=\"25%\"></td>
        <td width=\"25%\"></td>
    </tr>
    <tr>
        <td><input class=\"form-control\" type=\"text\" style=\"width:50px;\" ng-keyup=\"search_id()\" ng-model=\"id\" /></td>
        <td>
            <input class=\"form-control\" type=\"text\" style=\"width:150px;\" ng-keyup=\"search('username')\" ng-model=\"value\" />
        </td>
        <td><input class=\"form-control\" type=\"text\" style=\"width:150px;\" ng-keyup=\"search('name')\" ng-model=\"name\" /></td>
        <td><input class=\"form-control\" type=\"text\" style=\"width:150px;\" ng-keyup=\"search('email')\" ng-model=\"email\" /></td>
        <td><input class=\"form-control\" type=\"text\" style=\"width:150px;\" ng-keyup=\"search('job')\" ng-model=\"job\" /></td>
        <td><input class=\"form-control\" type=\"text\" style=\"width:150px;\" ng-keyup=\"search('mobile')\" ng-model=\"mobile\" /></td>
    </tr>

    ";
        // line 41
        echo " 
    <tr ng-repeat=\"p in profile\">
        <td>{{p.id}}</td>
        <td>{{p.username}}</td>
        <td><a href=\"/query/{{p.id}}\">{{p.name}}</a></td>
        <td>{{p.email}}</td>
        <td>{{p.job}}</td>
        <td>{{p.mobile}}</td>
    </tr>
    ";
        echo "

    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "
    <tr ";
            // line 45
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")) {
                echo "class=\"active\"";
            }
            echo " ";
            echo "style=\"{{style}}\"";
            echo ">
        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_query", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a></td>
        <td>
            ";
            // line 49
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name"), "html", null, true);
                echo "
            ";
            } else {
                // line 50
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_query", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name"), "html", null, true);
                echo "</a>
            ";
            }
            // line 52
            echo "        </td>
        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</td>
        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job"), "html", null, true);
            echo "</td>
        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobile"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</table>
</div>

";
    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        // line 65
        echo "<script>
function search_controller( \$scope , \$http)
{
    \$scope.search_id = function()
    {

        data = {
            'key'   : 'id' ,
            'value' : \$scope.id ,  
            'limit' : 50 , 
            'startFrom': 0,
        };

        \$http({
        
            url : \"";
        // line 80
        echo $this->env->getExtension('routing')->getUrl("rest_search_contact");
        echo "\" ,
            data : \$.param( data) , 
            method : \"POST\" ,  
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },
        }).success(function(data ,status) {

            \$scope.profile = data;

            if( \$scope.id == '' )
                \$scope.style = \"\";
            else
                \$scope.style = \"display:none;\";
        
        });
    }

    \$scope.search = function( \$key)
    {
        data = {
            'key'   : \$key ,
            'value' : eval('\$scope.'+\$key) , 
            'limit' : 50 , 
            'startFrom': 0,
        };

        \$http({
        
            url : \"";
        // line 109
        echo $this->env->getExtension('routing')->getUrl("rest_search_contact");
        echo "\" ,
            data : \$.param( data) , 
            method : \"POST\" ,  
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },
        }).success(function(data ,status) {

            \$scope.profile = data;

            if( \$scope.id == '' )
                \$scope.style = \"\";
            else
                \$scope.style = \"display:none;\";
        
        });
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 109,  171 => 80,  154 => 65,  151 => 64,  144 => 58,  135 => 55,  131 => 54,  127 => 53,  124 => 52,  116 => 50,  110 => 49,  103 => 47,  99 => 46,  91 => 45,  88 => 44,  84 => 43,  70 => 41,  45 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
