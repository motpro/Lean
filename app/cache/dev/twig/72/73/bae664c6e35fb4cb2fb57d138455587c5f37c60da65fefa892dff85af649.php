<?php

/* LeanAdminBundle:Search:result.html.twig */
class __TwigTemplate_7273bae664c6e35fb4cb2fb57d138455587c5f37c60da65fefa892dff85af649 extends Twig_Template
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
        echo "\t
\t";
        // line 5
        if (array_key_exists("result", $context)) {
            // line 6
            echo "\t\t";
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "html", null, true);
            echo "
\t";
        }
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
