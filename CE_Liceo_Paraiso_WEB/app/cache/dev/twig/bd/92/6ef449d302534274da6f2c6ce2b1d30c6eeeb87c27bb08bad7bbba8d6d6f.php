<?php

/* CELiceoParaisoBundle:Administrator:General/institution.html.twig */
class __TwigTemplate_bd926ef449d302534274da6f2c6ce2b1d30c6eeeb87c27bb08bad7bbba8d6d6f extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'modals' => array($this, 'block_modals'),
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
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_admin");
        echo "\">
            <i class=\"ti-panel\"></i>
            <p>Institución</p>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_sections");
        echo "\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Secciones</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Personal</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Departamentos</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Comités</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Clubs</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Servicios</p>
        </a>
    </li>
";
    }

    // line 47
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        echo "  
    <div class=\"row\">
        <div class=\"nav-tabs-navigation\">
            <div class=\"nav-tabs-wrapper\">
                <ul id=\"tabs\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
                    <li class=\"active\"><a href=\"#history\" data-toggle=\"tab\">Historia</a></li>
                    <li><a href=\"#vision\" data-toggle=\"tab\">Visión</a></li>
                    <li><a href=\"#mision\" data-toggle=\"tab\">Mision</a></li>
                    <li><a href=\"#manager\" data-toggle=\"tab\">Encargados</a></li>
                    <li><a href=\"#ubication\" data-toggle=\"tab\" onclick=\"codeAddress();\">Ubicación</a></li>
                    <li><a href=\"#gallery\" data-toggle=\"tab\">Galería</a></li>
                </ul>
            </div>
        </div>
        <div id=\"my-tab-content\" class=\"tab-content text-right\">
            ";
        // line 64
        if (array_key_exists("alert", $context)) {
            // line 65
            echo "                ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "success")) {
                // line 66
                echo "                    <div class=\"alert alert-success text-center\" id=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <strong>
                            <img src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/img.png"), "html", null, true);
                echo "\"/> 
                            Informaci&oacute;n actualizada
                        </strong>
                    </div>
                ";
            }
            // line 74
            echo "                ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "error")) {
                // line 75
                echo "                    <div class=\"alert alert-warning text-center\" id=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <strong>
                            <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/cancel.png"), "html", null, true);
                echo "\"/> 
                            Ha ocurrido un error intentelo m&aacute;s tarde!
                        </strong>
                    </div>
                ";
            }
            // line 83
            echo "            ";
        }
        // line 84
        echo "            <div class=\"tab-pane active\" id=\"history\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 88
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getHistoria", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal\" data-toggle=\"modal\">Actualizar</a>
            </div>

            <div class=\"tab-pane\" id=\"vision\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 99
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getVision", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal2\" data-toggle=\"modal\">Actualizar</a>
            </div>
            <div class=\"tab-pane\" id=\"mision\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 109
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getMision", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal3\" data-toggle=\"modal\">Actualizar</a>
            </div>
            <div class=\"tab-pane\" id=\"manager\">
                <legend></legend>
                <h4 style=\"text-align: left;\">Encargados:</h4>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 120
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getEncargados", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <hr>
                <h4 style=\"text-align: left;\">Teléfono(s):</h4>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 127
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getTelefono", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal4\" data-toggle=\"modal\">Actualizar</a>
            </div>
            <div class=\"tab-pane\" id=\"ubication\">
                <legend></legend>
                <p class=\"text-justify\" id=\"address\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getUbicacion", array(), "method"), "html", null, true);
        echo "</p>
                <blockquote>
                    <div id=\"map_canvas\" style=\"width: 90%; height: 300px; margin-left: 50px;\"></div>
                    <hr>
                </blockquote>
                <br>
            </div>
            <div class=\"tab-pane\" id=\"gallery\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify\">Cargar imágenes</p>
                    <hr>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"\" data-toggle=\"modal\">Agregar</a>
            </div>
        </div>
    </div>
";
    }

    // line 155
    public function block_modals($context, array $blocks = array())
    {
        // line 156
        echo "    <div class=\"modal fade\" id=\"modal\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Historia</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_history");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <textarea class=\"form-control\" id=\"history\" name=\"history\" rows=\"8\" required>";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getHistoria", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal2\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Visión</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 188
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_vision");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <textarea class=\"form-control\" id=\"vision\" name=\"vision\" rows=\"8\" required>";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getVision", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal3\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Misión</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_mision");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <textarea class=\"form-control\" id=\"mision\" name=\"mision\" rows=\"8\" required>";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getMision", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal4\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Información General</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 232
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_management");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <label class=\"control-label col-md-3\" for=\"managers\">Encargados:</label>
                        <textarea class=\"form-control\" id=\"managers\" name=\"managers\" rows=\"8\" required>";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getEncargados", array(), "method"), "html", null, true);
        echo "</textarea>
                        <label class=\"control-label col-md-3\" for=\"telephone\">Teléfono(s):</label>
                        <textarea class=\"form-control\" id=\"telephone\" name=\"telephone\" rows=\"2\" required>";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getTelefono", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:General/institution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 237,  354 => 235,  348 => 232,  325 => 212,  320 => 210,  297 => 190,  292 => 188,  269 => 168,  264 => 166,  252 => 156,  249 => 155,  226 => 135,  215 => 127,  205 => 120,  191 => 109,  178 => 99,  164 => 88,  158 => 84,  155 => 83,  147 => 78,  142 => 75,  139 => 74,  131 => 69,  126 => 66,  123 => 65,  121 => 64,  102 => 49,  94 => 47,  54 => 11,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
