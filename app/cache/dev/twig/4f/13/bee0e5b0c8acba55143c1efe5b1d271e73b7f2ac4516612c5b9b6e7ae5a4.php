<?php

/* monProjetBundle:Default:listeidentite.html.twig */
class __TwigTemplate_4f13bee0e5b0c8acba55143c1efe5b1d271e73b7f2ac4516612c5b9b6e7ae5a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content_header', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Liste des personnes";
    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<html style=\"background-color:blue; color:#fff; height:100%; width:100%; font-size:35px; text-align:center; padding-top:20px;\">
<div>
<br><br>
<ul style=\"font-size:20px;\">
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 11
            echo "\t\t<li style=\"list-style:none;\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo "</strong>&nbsp;-&nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "mail", array()), "html", null, true);
            echo "</li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "\t\t<li>pas de client</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>


<br><br><br><quote>Par Richard Meunier</quote>

</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "monProjetBundle:Default:listeidentite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  74 => 13,  62 => 11,  57 => 10,  51 => 6,  48 => 5,  42 => 3,  36 => 1,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
