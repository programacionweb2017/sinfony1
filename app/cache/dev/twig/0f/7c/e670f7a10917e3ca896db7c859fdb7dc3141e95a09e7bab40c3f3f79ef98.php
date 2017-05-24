<?php

/* CursoMainBundle:Default:articulo.html.twig */
class __TwigTemplate_0f7ce670f7a10917e3ca896db7c859fdb7dc3141e95a09e7bab40c3f3f79ef98 extends Twig_Template
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
<h1>Articulo con ID ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "</h1>
<ul>
    <li>Titulo: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</li>
    <li>Fecha de creacion: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
        echo "</li>
</ul>
    
    

";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
