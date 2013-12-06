<?php

/* DesymfonyBundle::layout.html.twig */
class __TwigTemplate_138c9735d070d382a0c74d70694fc0bee01485aea9b330b61a0f8d617fbf7799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'lateral' => array($this, 'block_lateral'),
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
        echo "  <h1 class=\"grid_6\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("portada");
        echo "\">Jornadas Symfony 2011</a></h1>

  <nav class=\"grid_10\">
  <ul>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ponencias");
        echo "\">Ponencias</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ponentes");
        echo "\">Ponentes</a></li>

    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "contacto"));
        echo "\">Contacto</a></li>

  </ul>
  </nav>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "  <article id=\"contenido\">
    <section id=\"principal\" class=\"grid_12\">
      ";
        // line 20
        $this->displayBlock('contenido', $context, $blocks);
        // line 21
        echo "    </section>
    <section id=\"lateral\" class=\"grid_4\">
      ";
        // line 23
        $this->displayBlock('lateral', $context, $blocks);
        // line 37
        echo "    </section>
  </article>
";
    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 23
    public function block_lateral($context, array $blocks = array())
    {
        // line 24
        echo "
          <p>Las Jornadas Symfony 2011 se celebran del <strong>1 al 3 de julio</strong> de 2011 en la Universidad Jaume I de  Castellón</p>
          <p>El aforo está limitado a las 175 primeras inscripciones recibidas</p>

          <h3>Ventajas de asistir</h3>
          <ul>
              <li>1 curso de 6 horas sobre Symfony2</li>
              <li>10 sesiones prácticas</li>
              <li>Varios talleres prácticos</li>
              <li>Mesas redondas</li>
              <li>Networking</li>
          </ul>
      ";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  86 => 23,  81 => 20,  75 => 37,  73 => 23,  69 => 21,  67 => 20,  63 => 18,  60 => 17,  51 => 11,  46 => 9,  42 => 8,  34 => 4,  31 => 3,);
    }
}
