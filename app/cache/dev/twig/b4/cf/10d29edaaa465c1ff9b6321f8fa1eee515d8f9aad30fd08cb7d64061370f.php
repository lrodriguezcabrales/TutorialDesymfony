<?php

/* DesymfonyBundle::layout_admin.html.twig */
class __TwigTemplate_b4cf10d29edaaa465c1ff9b6321f8fa1eee515d8f9aad30fd08cb7d64061370f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"grid_6 alpha\"><a href=\"\">Gestión de deSymfony.com</a></h1>

<nav class=\"grid_10 omega\">
    <ul>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_ponencia_list");
        echo "\">Ponencias</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("portada");
        echo "\">Sitio público</a></li>
        <li> NOMBRE_USUARIO <a href=\"\">salir</a></li>
    </ul>
</nav>

<h1> ";
        // line 14
        $this->displayBlock("title", $context, $blocks);
        echo " </h1>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
