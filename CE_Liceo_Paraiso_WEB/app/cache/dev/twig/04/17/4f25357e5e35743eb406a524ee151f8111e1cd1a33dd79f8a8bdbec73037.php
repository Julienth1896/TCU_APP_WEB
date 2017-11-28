<?php

/* CELiceoParaisoBundle::Administrator/home.html.twig */
class __TwigTemplate_04174f25357e5e35743eb406a524ee151f8111e1cd1a33dd79f8a8bdbec73037 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        <blockquote>
            <p class=\"text-justify\" style=\"font-style: normal;\">
                <b>Bienvenido a CELIPA Admin, un sitio donde se innova la educación podrás admnistrar la información, 
                    personal y documentos de tu institución.</b>
            </p>
        </blockquote>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-2\"></div>
    <div class=\"col-sm-8\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/CELPA1.PNG"), "html", null, true);
        echo "\" alt=\"Liceo\">
                </div>

                <div class=\"item\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/CELPA2.PNG"), "html", null, true);
        echo "\" alt=\"Liceo\">
                </div>

                <div class=\"item\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/CELPA1.PNG"), "html", null, true);
        echo "\" alt=\"Liceo\">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle::Administrator/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 33,  52 => 29,  45 => 25,  19 => 1,);
    }
}
