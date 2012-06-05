<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_04612af55706c6d03a9f781f6af1bddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "message"));
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  130 => 48,  150 => 43,  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  170 => 56,  118 => 36,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  154 => 54,  151 => 53,  143 => 49,  140 => 52,  119 => 47,  106 => 35,  100 => 39,  68 => 20,  66 => 23,  56 => 14,  83 => 26,  76 => 27,  65 => 22,  45 => 9,  36 => 6,  136 => 40,  114 => 30,  85 => 31,  61 => 20,  21 => 1,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 55,  134 => 50,  132 => 43,  127 => 46,  123 => 30,  109 => 36,  93 => 33,  90 => 45,  54 => 13,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 15,  72 => 17,  64 => 24,  53 => 23,  34 => 5,  26 => 3,  42 => 10,  97 => 38,  95 => 47,  88 => 32,  78 => 25,  71 => 21,  40 => 7,  22 => 3,  25 => 5,  23 => 29,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 51,  126 => 31,  120 => 37,  117 => 44,  103 => 28,  74 => 21,  47 => 10,  32 => 6,  17 => 1,  92 => 37,  86 => 27,  79 => 39,  29 => 3,  24 => 9,  19 => 2,  69 => 21,  63 => 28,  58 => 16,  49 => 12,  43 => 8,  37 => 8,  20 => 2,  139 => 47,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 27,  77 => 24,  75 => 37,  57 => 13,  50 => 10,  46 => 9,  44 => 10,  39 => 12,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 46,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 6,  94 => 32,  89 => 30,  87 => 44,  84 => 29,  81 => 41,  73 => 28,  70 => 24,  67 => 19,  62 => 22,  59 => 19,  55 => 12,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 5,  31 => 6,  28 => 3,);
    }
}
