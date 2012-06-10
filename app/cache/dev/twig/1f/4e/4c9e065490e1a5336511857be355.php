<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1f4e4c9e065490e1a5336511857be355 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,  29 => 5,  24 => 3,  26 => 3,  97 => 22,  95 => 21,  92 => 20,  88 => 19,  78 => 17,  71 => 14,  40 => 7,  25 => 4,  22 => 3,  23 => 3,  17 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 8,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 18,  77 => 27,  75 => 16,  57 => 9,  50 => 13,  46 => 11,  44 => 10,  39 => 5,  33 => 5,  30 => 4,  27 => 4,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 24,  102 => 37,  94 => 32,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 12,  62 => 16,  59 => 15,  55 => 8,  51 => 11,  48 => 10,  41 => 6,  38 => 6,  35 => 8,  31 => 5,  28 => 3,);
    }
}
