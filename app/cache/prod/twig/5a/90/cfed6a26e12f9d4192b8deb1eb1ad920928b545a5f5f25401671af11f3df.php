<?php

/* ::layout.html.twig */
class __TwigTemplate_5a90cfed6a26e12f9d4192b8deb1eb1ad920928b545a5f5f25401671af11f3df extends Twig_Template
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

<script src=\"http://libs.baidu.com/jquery/1.9.0/jquery.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
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
        return array (  89 => 21,  84 => 12,  79 => 8,  74 => 6,  66 => 27,  59 => 22,  57 => 21,  47 => 13,  45 => 12,  40 => 9,  38 => 8,  33 => 6,  28 => 4,  23 => 1,);
    }
}
