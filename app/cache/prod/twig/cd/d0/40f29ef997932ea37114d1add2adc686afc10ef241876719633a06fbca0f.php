<?php

/* LeanAdminBundle:Adminlist:index.html.twig */
class __TwigTemplate_cdd040f29ef997932ea37114d1add2adc686afc10ef241876719633a06fbca0f extends Twig_Template
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
        echo "LeanAdminBundle:Adminlist:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>member list</h1>

<table class=\"table\">
\t<tr>
\t\t<td>ID</td>
\t\t<td></td>
\t\t<td></td>
\t\t<td></td>
\t\t<td>最后登录</td>
\t</tr>
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 17
            echo "\t<tr>

\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "username"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "email"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 22
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "locked") == 1)) {
                // line 23
                echo "\t\t\t\t<span class=\"label label-default\">锁定</span>
\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t<span class=\"label label-success\">可用</span>
\t\t\t";
            }
            // line 27
            echo "\t\t</td>
\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastLogin")), "html", null, true);
            echo "</td>
\t\t
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Adminlist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  83 => 28,  80 => 27,  76 => 25,  72 => 23,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  54 => 17,  50 => 16,  38 => 6,  35 => 5,  29 => 3,);
    }
}
