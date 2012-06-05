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
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Welcome to the Skillerator</h1>

    <p>Start managing your skills!</p>

    <a class=\"symfony-button-grey\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home_skillerator"), "html", null, true);
        echo "\">What is a skillerator?</a>
    <a class=\"symfony-button-grey\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home_contact"), "html", null, true);
        echo "\">Contact</a></br>
    <a class=\"symfony-button-green\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_skills"), "html", null, true);
        echo "\">Skills</a>
    <a class=\"symfony-button-green\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_level"), "html", null, true);
        echo "\">Level</a>
    <a class=\"symfony-button-green\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificate"), "html", null, true);
        echo "\">Certificate</a>
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
        return array (  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  36 => 6,  33 => 5,  27 => 3,);
    }
}
