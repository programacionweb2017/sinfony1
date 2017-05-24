<?php

/* CursoMainBundle:Default:ayuda.html.twig */
class __TwigTemplate_60ff8dc1c4422f56f3fb4c7e7519452680ecbbd65ed4cdc6c7c768ad925566a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Esta es la ayuda acerca del tema ";
        echo twig_escape_filter($this->env, (isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "html", null, true);
        echo " creada desde una plantilla twig
";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:ayuda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
