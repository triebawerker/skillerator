<?php

/* TriebawerkeSkilleratorBundle:Certificate:new.html.twig */
class __TwigTemplate_3ec30ed17ba878e363db114278c2a1b9 extends Twig_Template
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
        echo "Skillerator";
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
        echo "<h1>Enter new certificate</h1>

<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificate_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <button type=\"submit\">Create</button>
</form>

<ul class=\"record_actions\">
    <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificate"), "html", null, true);
        echo "\">Back to the list</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TriebawerkeSkilleratorBundle:Certificate:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  65 => 22,  76 => 25,  36 => 6,  136 => 40,  114 => 30,  85 => 43,  61 => 16,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 33,  90 => 45,  54 => 19,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 12,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 26,  47 => 10,  32 => 11,  72 => 24,  64 => 19,  53 => 11,  34 => 5,  42 => 10,  86 => 28,  79 => 39,  19 => 2,  29 => 3,  24 => 9,  26 => 4,  97 => 34,  95 => 40,  92 => 35,  88 => 29,  78 => 25,  71 => 14,  40 => 7,  25 => 4,  22 => 4,  23 => 13,  17 => 1,  69 => 20,  63 => 21,  58 => 18,  49 => 11,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 40,  96 => 34,  91 => 39,  82 => 27,  77 => 25,  75 => 29,  57 => 20,  50 => 18,  46 => 11,  44 => 11,  39 => 15,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 22,  62 => 24,  59 => 22,  55 => 14,  51 => 14,  48 => 10,  41 => 9,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
