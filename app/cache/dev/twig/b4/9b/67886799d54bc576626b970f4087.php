<?php

/* WebProfilerBundle:Profiler:notfound.html.twig */
class __TwigTemplate_b49b67886799d54bc576626b970f4087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"resume\">
            <p>
                <strong>No request matching the token \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\".</strong>
            </p>
        </div>

        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 17
        $this->displayBlock('panel', $context, $blocks);
        // line 23
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 26
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => $this->getContext($context, "token")), array());
        // line 27
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, "token")));
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>

";
    }

    // line 17
    public function block_panel($context, array $blocks = array())
    {
        // line 18
        echo "                            <h2>Token not found</h2>
                            <p>
                                <em>No request matching the token \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\".</em>
                            </p>
                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:notfound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  66 => 21,  56 => 17,  83 => 21,  76 => 19,  65 => 16,  45 => 8,  36 => 6,  136 => 40,  114 => 30,  85 => 43,  61 => 23,  21 => 3,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 33,  90 => 45,  54 => 19,  133 => 39,  124 => 41,  111 => 29,  80 => 26,  60 => 27,  52 => 12,  72 => 17,  64 => 21,  53 => 23,  34 => 11,  26 => 3,  42 => 10,  97 => 34,  95 => 47,  88 => 32,  78 => 25,  71 => 14,  40 => 9,  22 => 3,  25 => 4,  23 => 29,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 15,  32 => 8,  17 => 1,  92 => 20,  86 => 28,  79 => 20,  29 => 4,  24 => 9,  19 => 2,  69 => 17,  63 => 28,  58 => 26,  49 => 12,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 28,  77 => 25,  75 => 18,  57 => 14,  50 => 14,  46 => 11,  44 => 14,  39 => 10,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 19,  62 => 24,  59 => 22,  55 => 19,  51 => 17,  48 => 10,  41 => 11,  38 => 12,  35 => 6,  31 => 10,  28 => 3,);
    }
}
