<?php

/* CELiceoParaisoBundle:Administrator:administration_area.html.twig */
class __TwigTemplate_2be6707d5e2caea19d2c21d8755e6509139197cf62e704a78380cf0c05d7985a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CELiceoParaisoBundle::administration_view.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CELiceoParaisoBundle::administration_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <li class=\"active\">
        <a href=\"#\">
            <i class=\"ti-panel\"></i>
            <p>Departamentos</p>
        </a>
    </li>
    <li>
        <a href=\"table.html\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Personal</p>
        </a>
    </li>
    <li>
        <a href=\"typography.html\">
            <i class=\"ti-text\"></i>
            <p>Servicios</p>
        </a>
    </li>
    <li>
        <a href=\"icons.html\">
            <i class=\"ti-pencil-alt2\"></i>
            <p>Perfil</p>
        </a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:administration_area.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
