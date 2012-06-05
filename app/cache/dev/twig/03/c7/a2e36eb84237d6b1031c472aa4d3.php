<?php

/* TriebawerkeSkilleratorBundle:Skills:index.html.twig */
class __TwigTemplate_03c7a2e36eb84237d6b1031c472aa4d3 extends Twig_Template
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
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_skills_new"), "html", null, true);
        echo "\">new Skill</a></li>
    </ul>

    <ul>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "skills"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 13
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "skill"), "name"), "html", null, true);
            echo "</li>
        <li>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "skill"), "description"), "html", null, true);
            echo "</li>
        <li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_skills_edit", array("id" => $this->getAttribute($this->getContext($context, "skill"), "id"))), "html", null, true);
            echo "\">edit</a></li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <li>No skills found</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Skills:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  68 => 17,  61 => 15,  57 => 14,  52 => 13,  47 => 12,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
