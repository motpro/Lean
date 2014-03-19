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
        echo "
<table class=\"table table-bordered table-condensed table-hover\">

    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "
    <tr ";
            // line 13
            if ($this->getAttribute($this->getContext($context, "user"), "username")) {
                echo "class=\"active\"";
            }
            echo ">
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_query", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo "</a></td>
        <td>
            ";
            // line 17
            if ($this->getAttribute($this->getContext($context, "user"), "username")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
                echo "
            ";
            } else {
                // line 18
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_query", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
                echo "</a>
            ";
            }
            // line 20
            echo "        </td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "job"), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "mobile"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>

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
        return array (  65 => 19,  53 => 15,  212 => 104,  195 => 89,  192 => 88,  160 => 63,  150 => 59,  23 => 4,  104 => 22,  77 => 22,  34 => 7,  129 => 66,  118 => 58,  70 => 20,  58 => 14,  153 => 50,  126 => 40,  90 => 22,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 50,  128 => 49,  107 => 39,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 46,  143 => 55,  135 => 43,  119 => 42,  102 => 32,  71 => 28,  67 => 19,  63 => 15,  59 => 14,  38 => 6,  94 => 23,  89 => 6,  85 => 26,  75 => 18,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 5,  44 => 8,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 45,  117 => 44,  105 => 38,  91 => 27,  62 => 15,  49 => 12,  24 => 7,  25 => 3,  19 => 2,  79 => 23,  72 => 22,  69 => 17,  47 => 9,  40 => 8,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 20,  74 => 21,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 12,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 74,  164 => 59,  162 => 47,  154 => 60,  149 => 48,  147 => 46,  144 => 45,  141 => 44,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 30,  109 => 29,  106 => 36,  103 => 26,  99 => 13,  95 => 28,  92 => 21,  86 => 21,  82 => 22,  80 => 19,  73 => 22,  64 => 23,  60 => 17,  57 => 11,  54 => 10,  51 => 13,  48 => 14,  45 => 11,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 3,);
    }
}
