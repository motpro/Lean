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
<html>
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
    <script src=\"http://libs.baidu.com/jquery/1.9.0/jquery.js\"></script>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "</head>
<body style=\"padding-top: 70px;\">

";
        // line 12
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "
<div id=\"content\">
    <div class=\"header-logo\">

    </div>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>
    </div>
</div>


<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 28
        $this->displayBlock('javascript', $context, $blocks);
        // line 31
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

    // line 8
    public function block_head($context, array $blocks = array())
    {
    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        // line 29
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
        return array (  108 => 29,  105 => 28,  100 => 21,  95 => 12,  90 => 8,  85 => 6,  73 => 31,  71 => 28,  67 => 27,  58 => 21,  46 => 12,  41 => 9,  39 => 8,  34 => 6,  24 => 1,  136 => 70,  119 => 56,  115 => 55,  83 => 25,  80 => 24,  72 => 19,  68 => 18,  61 => 14,  57 => 13,  47 => 9,  42 => 7,  37 => 5,  32 => 4,  77 => 22,  65 => 19,  60 => 22,  56 => 16,  53 => 12,  48 => 13,  38 => 6,  35 => 5,  29 => 4,);
    }
}
