<?php

/* SeveinfoFrontCarteBundle:Default:date.html.twig */
class __TwigTemplate_8f7f354819a760f38d9d0248c02ede34b85463905b57144a58da636984f6ba79 extends Twig_Template
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
        echo "Voici la date  ";
        echo twig_escape_filter($this->env, (isset($context["laDate"]) ? $context["laDate"] : $this->getContext($context, "laDate")), "html", null, true);
        echo "<br/> <br/>

Voici l'heure ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["lheure"]) ? $context["lheure"] : $this->getContext($context, "lheure")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SeveinfoFrontCarteBundle:Default:date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
