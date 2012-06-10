<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_35a07f0f577cafa175ddbc855b30d9a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  64 => 15,  53 => 13,  34 => 7,  42 => 10,  86 => 6,  79 => 40,  19 => 2,  29 => 5,  24 => 4,  26 => 3,  97 => 22,  95 => 21,  92 => 39,  88 => 19,  78 => 17,  71 => 14,  40 => 6,  25 => 4,  22 => 3,  23 => 4,  17 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 12,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 19,  77 => 39,  75 => 16,  57 => 22,  50 => 13,  46 => 14,  44 => 11,  39 => 9,  33 => 5,  30 => 4,  27 => 3,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 24,  102 => 37,  94 => 32,  89 => 20,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 12,  62 => 16,  59 => 15,  55 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 8,  31 => 6,  28 => 3,);
    }
}
