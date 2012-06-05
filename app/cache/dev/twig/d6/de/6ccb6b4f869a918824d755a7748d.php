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
        return array (  136 => 40,  114 => 30,  85 => 43,  61 => 23,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 33,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 26,  60 => 16,  52 => 12,  72 => 16,  64 => 24,  53 => 13,  34 => 5,  26 => 4,  42 => 10,  97 => 34,  95 => 47,  88 => 29,  78 => 25,  71 => 14,  40 => 7,  22 => 3,  25 => 4,  23 => 13,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 13,  32 => 11,  17 => 1,  92 => 20,  86 => 28,  79 => 39,  29 => 5,  24 => 9,  19 => 2,  69 => 20,  63 => 18,  58 => 9,  49 => 12,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 37,  57 => 14,  50 => 13,  46 => 10,  44 => 11,  39 => 9,  33 => 7,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 19,  62 => 24,  59 => 22,  55 => 14,  51 => 13,  48 => 10,  41 => 9,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
