<?php

/* TriebawerkeSkilleratorBundle:Home:index.html.twig */
class __TwigTemplate_a002220c2942edc8fe146d6dd45ec0fd extends Twig_Template
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
        echo "Symfony - Welcome";
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
        echo "    <h1>Welcome to the Skillerator</h1>

    <p>Start managing your skills!</p>

    <a class=\"symfony-button-grey\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home_skillerator"), "html", null, true);
        echo "\">What is a skillerator?</a>
    <a class=\"symfony-button-grey\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home_contact"), "html", null, true);
        echo "\">Contact</a></br>
    <a class=\"symfony-button-green\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_skills"), "html", null, true);
        echo "\">Skills</a>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  53 => 13,  49 => 12,  43 => 8,  40 => 7,  34 => 5,  28 => 3,);
    }
}
