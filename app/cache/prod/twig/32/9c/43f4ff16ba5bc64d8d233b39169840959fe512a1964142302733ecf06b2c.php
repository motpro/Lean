<?php

/* ::layout.html.twig */
class __TwigTemplate_329c43f4ff16ba5bc64d8d233b39169840959fe512a1964142302733ecf06b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" ng-app>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angularjs/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://libs.baidu.com/jquery/1.9.0/jquery.js\"></script>
    ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body style=\"padding-top: 70px;\">

";
        // line 13
        $this->displayBlock('navbar', $context, $blocks);
        // line 14
        echo "
<div id=\"content\">
    <div class=\"header-logo\">

    </div>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>
    </div>
</div>


<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 29
        $this->displayBlock('javascript', $context, $blocks);
        // line 32
        echo "<script type=\"text/javascript\" charset=\"utf-8\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/jquery.contextmenu.r2.packed.js"), "html", null, true);
        echo "\"></script>


</script>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  109 => 29,  104 => 22,  99 => 13,  94 => 9,  89 => 6,  75 => 29,  71 => 28,  64 => 23,  62 => 22,  50 => 13,  45 => 10,  43 => 9,  34 => 6,  24 => 1,  127 => 48,  122 => 46,  117 => 44,  113 => 43,  107 => 40,  103 => 39,  97 => 36,  93 => 35,  87 => 32,  83 => 31,  77 => 32,  74 => 27,  72 => 26,  60 => 17,  56 => 16,  52 => 14,  48 => 14,  38 => 7,  35 => 5,  29 => 4,);
    }
}
