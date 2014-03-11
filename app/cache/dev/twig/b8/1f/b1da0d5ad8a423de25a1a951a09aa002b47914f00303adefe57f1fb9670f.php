<?php

/* LeanAdminBundle:Corporation:index.html.twig */
class __TwigTemplate_b81fb1da0d5ad8a423de25a1a951a09aa002b47914f00303adefe57f1fb9670f extends Twig_Template
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
        echo "企业列表";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<table class=\"table table-bordered table-condensed\">
\t\t<tr>
\t\t\t<td>ID</td>
\t\t\t<td>公司名</td>
\t\t\t<td>销售机会</td>
\t\t\t<td>最后更新</td>
\t\t</tr>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["corporation"]) {
            if ($this->getAttribute((isset($context["corporation"]) ? $context["corporation"] : $this->getContext($context, "corporation")), "name")) {
                // line 15
                echo "\t\t<tr>
\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["corporation"]) ? $context["corporation"] : $this->getContext($context, "corporation")), "id"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["corporation"]) ? $context["corporation"] : $this->getContext($context, "corporation")), "name"), "html", null, true);
                echo "</td>
\t\t\t<td></td>
\t\t\t<td>";
                // line 19
                if ($this->getAttribute((isset($context["corporation"]) ? $context["corporation"] : $this->getContext($context, "corporation")), "timeupdated")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["corporation"]) ? $context["corporation"] : $this->getContext($context, "corporation")), "timeupdated"), "Y-m-d h:i"), "html", null, true);
                }
                echo "</td>
\t\t</tr>
\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['corporation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</table>

";
    }

    public function getTemplateName()
    {
        return "LeanAdminBundle:Corporation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  65 => 19,  60 => 17,  56 => 16,  53 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 3,);
    }
}
