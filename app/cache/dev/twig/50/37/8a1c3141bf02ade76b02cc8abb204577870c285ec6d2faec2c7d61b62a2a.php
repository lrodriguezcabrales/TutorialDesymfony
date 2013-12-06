<?php

/* DesymfonyBundle:Ponente:index.html.twig */
class __TwigTemplate_50378a1c3141bf02ade76b02cc8abb204577870c285ec6d2faec2c7d61b62a2a extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ponentes"));
        foreach ($context['_seq'] as $context["_key"] => $context["ponente"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ponente"), "nombre"), "html", null, true);
            echo "
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ponente"), "apellidos"), "html", null, true);
            echo "
    <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Ponente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  23 => 2,  19 => 1,);
    }
}
