<?php

/* TriebawerkeSkilleratorBundle:Certificate:new.html.twig */
class __TwigTemplate_3ec30ed17ba878e363db114278c2a1b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TriebawerkeSkilleratorBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TriebawerkeSkilleratorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Skillerator";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Enter new certificate</h1>

<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificate_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <button type=\"submit\">Create</button>
</form>

<ul class=\"record_actions\">
    <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificate"), "html", null, true);
        echo "\">Back to the list</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Certificate:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  53 => 11,  47 => 10,  43 => 8,  40 => 7,  34 => 5,  28 => 3,);
    }
}
