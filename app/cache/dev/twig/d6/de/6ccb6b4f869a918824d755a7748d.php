<?php

/* TriebawerkeSkilleratorBundle:Home:skillerator.html.twig */
class __TwigTemplate_d6de6ccb6b4f869a918824d755a7748d extends Twig_Template
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
        // line 13
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>What is a Skillerator</h1>

    <ul>
      <li>Manage your skills</li>
      <li>Manage your team's skills</li>
      <li>Manage your company's skills</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Home:skillerator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  23 => 13,);
    }
}
