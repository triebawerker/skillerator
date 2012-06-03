<?php

/* TriebawerkeSkilleratorBundle:Home:contact.html.twig */
class __TwigTemplate_786b45a45c8b3e66ee88e50629283e81 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <ul>
        <li>Skillerator</li>
        <li>Micha Trieba</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Home:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  26 => 4,);
    }
}
