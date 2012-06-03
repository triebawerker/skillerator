<?php

/* TriebawerkeSkilleratorBundle:Skills:create.html.twig */
class __TwigTemplate_12f47922c5a460402e600ba10e0ef6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TriebawerkeSkilleratorBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Skills</h1>

<p>You just created a new skill</p>
<ul>
    <li>id: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "skill_id"), "html", null, true);
        echo "</li>
    <li>name: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "skill_name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Skills:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  36 => 6,  33 => 5,  27 => 3,);
    }
}
