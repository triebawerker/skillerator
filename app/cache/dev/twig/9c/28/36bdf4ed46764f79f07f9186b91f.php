<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_9c2836bdf4ed46764f79f07f9186b91f extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "class"), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "message"), "html", null, true);
            echo "\">
";
            // line 6
            $this->env->loadTemplate("TwigBundle:Exception:traces.xml.twig")->display(array("exception" => $this->getContext($context, "e")));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</error>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  86 => 6,  79 => 40,  19 => 1,  29 => 4,  24 => 4,  26 => 3,  97 => 22,  95 => 21,  92 => 39,  88 => 19,  78 => 17,  71 => 14,  40 => 6,  25 => 4,  22 => 3,  23 => 3,  17 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 9,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 18,  77 => 39,  75 => 16,  57 => 22,  50 => 13,  46 => 14,  44 => 8,  39 => 5,  33 => 5,  30 => 4,  27 => 3,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 24,  102 => 37,  94 => 32,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 12,  62 => 16,  59 => 15,  55 => 8,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 8,  31 => 6,  28 => 3,);
    }
}
