<?php

/* LeanAdminBundle:Default:query.html.twig */
class __TwigTemplate_d932fc0c9b426ab857f47efe07454e0b3c751ede041fee6cba4361cf8da6a66b extends Twig_Template
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
        echo "查看";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name"), "html", null, true);
        echo "资料";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

<div class=\"container\">
<div class=\"row\">
    <div class=\"col-md-4\">
    <div class=\"panel panel-primary\">

        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">

                 ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name"), "html", null, true);
        echo "的资料

            </h3>
        </div>
        <div class=\"panel-body\">


            <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "html", null, true);
        echo "</p>

            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "job"), "html", null, true);
        echo "</p>


        </div>

    </div>
    </div>
</div>
</div>



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
        return array (  67 => 25,  62 => 23,  52 => 16,  40 => 6,  37 => 5,  29 => 3,);
    }
}
