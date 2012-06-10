<?php

/* TriebawerkeSkilleratorBundle:Level:index.html.twig */
class __TwigTemplate_6662fc05b1bb4f04a7ef960a0bdc4173 extends Twig_Template
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
        echo "    <h1>Level</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_level_new"), "html", null, true);
        echo "\">new level</a></li>
    </ul>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "levels"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
            // line 11
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "level"), "name"), "html", null, true);
            echo "</li>
        <li>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "level"), "description"), "html", null, true);
            echo "</li>
        <li><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_level_update", array("id" => $this->getAttribute($this->getContext($context, "level"), "id"))), "html", null, true);
            echo "\">update</a></li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "        <li>No level found</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Level:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  59 => 13,  55 => 12,  50 => 11,  45 => 10,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
