<?php

/* TriebawerkeSkilleratorBundle:Level:update.html.twig */
class __TwigTemplate_902fb3180048479d69485a0c3943b344 extends Twig_Template
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
        echo "    <h1>Update level</h1>

    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_level_update", $this->getAttribute($this->getContext($context, "level"), "id")), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo "> 
      ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo " 
      <input type=\"submit\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Level:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
