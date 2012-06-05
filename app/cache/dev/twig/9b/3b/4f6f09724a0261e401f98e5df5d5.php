<?php

/* TriebawerkeSkilleratorBundle:Level:create.html.twig */
class __TwigTemplate_9b3b4f6f09724a0261e401f98e5df5d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TriebawerkeSkilleratorBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Level</h1>

<p>You just created/updated a level</p>
<ul>
    <ul>
    <li>id: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "level_id"), "html", null, true);
        echo "</li>
    <li>name: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "level_name"), "html", null, true);
        echo "</li>
    <li>description: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "level_description"), "html", null, true);
        echo "</li>
</ul>
</ul>

<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_level_update", array("id" => $this->getContext($context, "level_id"))), "html", null, true);
        echo "\">update</a>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Level:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  44 => 11,  40 => 10,  36 => 9,  29 => 4,  26 => 3,);
    }
}
