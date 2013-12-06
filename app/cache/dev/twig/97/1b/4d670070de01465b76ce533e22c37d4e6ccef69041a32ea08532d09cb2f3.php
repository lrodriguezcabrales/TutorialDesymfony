<?php

/* DesymfonyBundle:AdminPonencia:list.html.twig */
class __TwigTemplate_971b4d670070de01465b76ce533e22c37d4e6ccef69041a32ea08532d09cb2f3 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de ponencias";
    }

    // line 5
    public function block_pageid($context, array $blocks = array())
    {
        echo "admin";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<table>
    <thead>
        <tr>
            <th>Fecha/Hora</th>
            <th>Título</th>
            <th>Idioma</th>
            <th>Apuntados</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ponencias"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ponencia"]) {
            echo " 
        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "ponencia"), "fecha"), "d/m/Y"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ponencia_edit", array("id" => $this->getAttribute($this->getContext($context, "ponencia"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ponencia"), "title"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "idiomas"), $this->getAttribute($this->getContext($context, "ponencia"), "idioma"), array(), "array"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "ponencia"), "usuarios")), "html", null, true);
            echo "</td>            
            <td>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ponencia_apuntados", array("id" => $this->getAttribute($this->getContext($context, "ponencia"), "id"))), "html", null, true);
            echo "\">Ver apuntados</a>
                <a href=\"\">Borrar</a>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <tr>
            <td colspan=\"5\">No existe ninguna ponencia</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
</table>

<a href=\"\">Nueva ponencia</a>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:AdminPonencia:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  96 => 33,  86 => 28,  81 => 26,  77 => 25,  71 => 24,  67 => 23,  59 => 21,  45 => 9,  42 => 8,  36 => 5,  30 => 4,);
    }
}
