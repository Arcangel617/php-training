<?php

/* AcmeDemoBundle::informatorioBase.html.twig */
class __TwigTemplate_bcc838275249ce39b5894b70dd30e2aa41e8ec8276d1972d04b7fd7e5a5e560f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'informatorio' => array($this, 'block_informatorio'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
    </head>
    <body>
        ";
        // line 8
        $this->displayBlock('informatorio', $context, $blocks);
        // line 9
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_informatorio($context, array $blocks = array())
    {
        echo "<h1>Hola pibe</h1>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::informatorioBase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 4,  34 => 9,  32 => 8,  25 => 4,  21 => 2,);
    }
}
