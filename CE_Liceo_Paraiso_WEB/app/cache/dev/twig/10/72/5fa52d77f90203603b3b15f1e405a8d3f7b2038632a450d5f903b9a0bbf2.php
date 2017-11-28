<?php

/* CELiceoParaisoBundle:Administrator:comites.html.twig */
class __TwigTemplate_10725fa52d77f90203603b3b15f1e405a8d3f7b2038632a450d5f903b9a0bbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CELiceoParaisoBundle::Administrator/administration_general.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CELiceoParaisoBundle::Administrator/administration_general.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "hola";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:comites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 2,  11 => 1,);
    }
}
