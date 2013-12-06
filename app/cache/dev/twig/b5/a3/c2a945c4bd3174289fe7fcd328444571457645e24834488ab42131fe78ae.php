<?php

/* DesymfonyBundle:AdminPonencia:edit.html.twig */
class __TwigTemplate_b5a3c2a945c4bd3174289fe7fcd328444571457645e24834488ab42131fe78ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DesymfonyBundle::layout_admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageid' => array($this, 'block_pageid'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesymfonyBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " TITULO_DE_PAGINA ";
    }

    // line 4
    public function block_pageid($context, array $blocks = array())
    {
        echo "admin";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Editar ponencia</h1>
<form action=\"\" method=\"post\">
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formulario"), 'widget');
        echo "
    <input type=\"submit\" value=\"Guardar cambios\" />
</form>

<a href=\"\">Volver al listado</a>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:AdminPonencia:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
