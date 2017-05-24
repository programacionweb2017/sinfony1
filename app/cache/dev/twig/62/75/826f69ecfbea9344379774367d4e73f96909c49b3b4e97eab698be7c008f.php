<?php

/* CursoMainBundle:Default:articulos.html.twig */
class __TwigTemplate_6275826f69ecfbea9344379774367d4e73f96909c49b3b4e97eab698be7c008f extends Twig_Template
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
        echo "
<h1>Listado de Articulos</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Fecha de Creacion</th>
    </tr>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 10
            echo "    <tr>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
    
    
    

";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  44 => 13,  40 => 12,  36 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
