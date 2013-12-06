<?php

/* DesymfonyBundle:Usuario:login.html.twig */
class __TwigTemplate_a5d2490648c7717961ae9abf583118da05bb5339f46d90380677b128b493cdd2 extends Twig_Template
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

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Accede a tu cuenta</h1>
";
        // line 5
        if ($this->getContext($context, "error")) {
            // line 6
            echo "    E1: 
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("check_path");
        echo "\" method=\"post\">
    <div>
        <label for=\"username\">Email</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
    </div>

    <div>
        <label for=\"password\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
    </div>

    <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 10,  44 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
