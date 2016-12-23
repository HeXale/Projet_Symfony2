<?php

/* SeveinfoFrontCarteBundle:Default:index.html.twig */
class __TwigTemplate_5362b28929e893119a81027e945a77099229fdc4b016b9b6db267113569cc02c extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!";
    }

    public function getTemplateName()
    {
        return "SeveinfoFrontCarteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
