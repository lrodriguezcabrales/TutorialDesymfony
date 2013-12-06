<?php

/* DesymfonyBundle:Usuario:registro.html.twig */
class __TwigTemplate_795cac7ba86b25027470b876d59b4caaa0900417ad74128f63084b9f8dfa7a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DesymfonyBundle::layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesymfonyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Registro</h1>

";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("registro");
        echo "\" method=\"post\">
<input type=\"submit\" value=\"Regístrate\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Usuario:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
