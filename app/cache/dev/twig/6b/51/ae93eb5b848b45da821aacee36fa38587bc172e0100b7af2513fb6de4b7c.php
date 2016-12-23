<?php

/* SeveinfoFrontCarteBundle:Default:listeclient.html.twig */
class __TwigTemplate_6b51ae93eb5b848b45da821aacee36fa38587bc172e0100b7af2513fb6de4b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SeveinfoFrontCarteBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SeveinfoFrontCarteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 5
            echo "\t\t
\t\t<strong>Client Id</strong>&nbsp; ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "<br>
\t\t<strong>Client Nom Prénom</strong>&nbsp; ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo " 
\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "prenom", array()), "html", null, true);
            echo "<br>
\t\t<strong>Client Mail</strong>&nbsp; ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "mail", array()), "html", null, true);
            echo "<br><br><br>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SeveinfoFrontCarteBundle:Default:listeclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
