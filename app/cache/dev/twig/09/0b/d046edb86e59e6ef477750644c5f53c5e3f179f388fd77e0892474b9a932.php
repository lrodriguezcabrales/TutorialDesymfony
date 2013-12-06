<?php

/* DesymfonyBundle:AdminPonencia:show.html.twig */
class __TwigTemplate_090bd046edb86e59e6ef477750644c5f53c5e3f179f388fd77e0892474b9a932 extends Twig_Template
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
        echo "Usuarios apuntados a la ponencia ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ponencia"), "title"), "html", null, true);
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
        echo "
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "ponencia"), "usuarios"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "usuario"), "dni"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "usuario"), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "usuario"), "apellidos"), "html", null, true);
            echo " </td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "usuario"), "telefono"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "usuario"), "email"), "html", null, true);
            echo "</td>
        </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 29
            echo "        <tr>
            <td colspan=\"5\">No hay ningún usuario apuntado</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:AdminPonencia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  116 => 29,  100 => 26,  96 => 25,  90 => 24,  86 => 23,  82 => 22,  79 => 21,  61 => 20,  46 => 7,  43 => 6,  37 => 4,  30 => 3,);
    }
}
