<?php

/* AcmeDemoBundle:Demo:informatorio.html.twig */
class __TwigTemplate_0646af7c849bd8d2804e8d4fde1fc40d338e8d319dcdb08911af29255a8e5dc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::informatorioBase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'informatorio' => array($this, 'block_informatorio'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::informatorioBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Informatorio";
    }

    // line 6
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 8
    public function block_informatorio($context, array $blocks = array())
    {
        // line 9
        echo "    
    ";
        // line 10
        $this->displayParentBlock("informatorio", $context, $blocks);
        echo "
    <h1 class=\"title\">Hello <b>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "</b></h1>
    
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:informatorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  45 => 9,  42 => 8,  36 => 6,  30 => 4,);
    }
}
