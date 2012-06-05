<?php

/* TriebawerkeSkilleratorBundle:Skills:new.html.twig */
class __TwigTemplate_0820223fca0d6f674d1f5c8b92af4665 extends Twig_Template
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
        echo "    <h1>Enter new skill</h1>
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_skills_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo "> 
      ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
      <input type=\"submit\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Skills:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  39 => 7,  36 => 6,  33 => 5,  27 => 3,);
    }
}
