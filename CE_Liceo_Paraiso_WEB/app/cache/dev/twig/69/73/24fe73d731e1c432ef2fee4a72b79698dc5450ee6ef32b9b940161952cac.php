<?php

/* CELiceoParaisoBundle:Administrator:section.html.twig */
class __TwigTemplate_697324fe73d731e1c432ef2fee4a72b79698dc5450ee6ef32b9b940161952cac extends Twig_Template
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
            'scripts' => array($this, 'block_scripts'),
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
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_admin");
        echo "\">
            <i class=\"ti-panel\"></i>
            <p>Institución</p>
        </a>
    </li>
    ";
        // line 10
        if (($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method") == 1)) {
            // line 11
            echo "        <li class=\"active\">
            <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_area_nocturn");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Área Nocturna</p>
            </a>
        </li>
        <li>
            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_plan_national");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Plan Nacional</p>
            </a>
        </li>
    ";
        } else {
            // line 24
            echo "        <li>
            <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_area_nocturn");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Área Nocturna</p>
            </a>
        </li>
        <li class=\"active\">
            <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_plan_national");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Plan Nacional</p>
            </a>
        </li>
    ";
        }
        // line 37
        echo "    <li>
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

    // line 68
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        echo "  
    <div class=\"nav-tabs-navigation\">
        <div class=\"nav-tabs-wrapper\">
            <ul id=\"tabs\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
                <li class=\"active\"><a href=\"#information\" data-toggle=\"tab\">Información General</a></li>
                <li><a href=\"#departaments\" data-toggle=\"tab\">Departamentos</a></li>
                <li><a href=\"#personal\" data-toggle=\"tab\">Personal</a></li>
                <li><a href=\"#services\" data-toggle=\"tab\">Servicios</a></li>
                <li><a href=\"#gallery\" data-toggle=\"tab\">Galería</a></li>
            </ul>
        </div>
    </div>
    ";
        // line 82
        if (array_key_exists("alert", $context)) {
            // line 83
            echo "        ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "success")) {
                // line 84
                echo "            <div class=\"alert alert-success text-center\" id=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>
                    <img src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/img.png"), "html", null, true);
                echo "\"/> 
                    Informaci&oacute;n actualizada
                </strong>
            </div>
        ";
            }
            // line 92
            echo "        ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "error")) {
                // line 93
                echo "            <div class=\"alert alert-warning text-center\" id=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>
                    <img src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/cancel.png"), "html", null, true);
                echo "\"/> 
                    Ha ocurrido un error intentelo m&aacute;s tarde!
                </strong>
            </div>
        ";
            }
            // line 101
            echo "    ";
        }
        // line 102
        echo "    <div id=\"my-tab-content\" class=\"tab-content text-center\">
        <div class=\"tab-pane active\" id=\"information\">
            <legend></legend>
            <blockquote>
                <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                    ";
        // line 107
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getDescripcion", array(), "method"), "html", null, true));
        echo "
                </p>
            </blockquote>
            ";
        // line 110
        if (array_key_exists("administrator", $context)) {
            echo " 
                <div class=\"col-sm-12\" id=\"divButton\" style=\"text-align: right;\">
                    <a class=\"btn btn-round btn-fill btn-success\" onclick=\"showTable();\">Actualizar Reseña</a>
                </div>
            ";
        }
        // line 115
        echo "            <hr>
            <h4 style=\"text-align: left;\">Administrador:</h4>
            <blockquote>
                <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                    ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getNombre", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getApellidos", array(), "method"), "html", null, true);
        echo "
                </p>
                <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                    Teléfono: ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getAdministrador", array(), "method"), "getTelefono", array(), "method"), "html", null, true);
        echo "
                </p>
                <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                    Correo: ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getCorreo", array(), "method"), "html", null, true);
        echo "
                </p>
            </blockquote>
            <div class=\"col-sm-12\" id=\"divButton\" style=\"text-align: right;\">
                <a class=\"btn btn-round btn-fill btn-success\" onclick=\"showTable();\">Cambiar Administrador</a>
            </div>

            <div id=\"divTable\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Asignar Responsable de Área</h4>
                                <p class=\"category\">Lista de los docentes activos de la institución</p>
                            </div>
                            <div class=\"content table-responsive table-full-width\">
                                <table class=\"table table-striped table-hover\">
                                    <thead>
                                    <th></th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Teléfono</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                        ";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 151
            echo "                                            <tr>
                                                <td id=\"codTeacher\" name=\"codTeacher\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCodigo", array(), "method"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getApellidos", array(), "method"), "html", null, true);
            echo "</td>
                                                <td><a role=\"button\" onclick=\"showFormSet('";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCodigo", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getNombre", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getApellidos", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCorreo", array(), "method"), "html", null, true);
            echo "');\" class=\"btn btn-success\">Asignar</a></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                                    </tbody>
                                </table>
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <div class=\"row\" style=\"text-align: right;\">
                    <button type=\"button\" class=\"btn btn-danger\" onclick=\"hideTable();\">Cancelar</button>
                </div>
            </div>
            <div class=\"row\" id=\"divForm\">
                <div class=\"col-sm-3\"></div>
                <div class=\"col-sm-6\">
                    <form action=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_responsable_area", array("code" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title text-center\">Detalle del Docente</h4>
                                <hr>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"codeTeacher\" class=\"control-label col-sm-4\">C&oacute;digo:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"codeTeacher\" 
                                           name=\"codeTeacher\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"nameTeacher\" class=\"control-label col-sm-4\">Nombre:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"nameTeacher\" 
                                           name=\"nameTeacher\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"lastNameTeacher\" class=\"control-label col-sm-4\">Apellidos:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"lastNameTeacher\" 
                                           name=\"lastNameTeacher\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"emailTeacher\" class=\"control-label col-sm-4\">Correo:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"email\" class=\"form-control \" id=\"emailTeacher\" 
                                           name=\"emailTeacher\" required/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"telephoneTeacher\" class=\"control-label col-sm-4\">Teléfono:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"telephoneTeacher\" 
                                           name=\"telephoneTeacher\" required/>
                                </div>
                            </div>
                            <br>
                            <div class=\"form-group text-center\">
                                <button type=\"submit\" class=\"btn btn-round btn-fill btn-success\">Guardar Administrador</button>
                                <a class=\"btn btn-round btn-fill btn-danger\" onclick=\"showTable();\">Lista de Doncentes</a>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"tab-pane\" id=\"departaments\">

        </div>
        <div class=\"tab-pane\" id=\"personal\">

        </div>
        <div class=\"tab-pane\" id=\"services\">

        </div>
        <div class=\"tab-pane\" id=\"gallery\">

        </div>
    </div>
";
    }

    // line 242
    public function block_modals($context, array $blocks = array())
    {
        // line 243
        echo "
";
    }

    // line 246
    public function block_scripts($context, array $blocks = array())
    {
        // line 247
        echo "    <script text=\"text/javascript\">
        document.getElementById('divTable').style.display = \"none\";
        document.getElementById('divForm').style.display = \"none\";
        function showTable() {
            document.getElementById('divTable').style.display = \"block\";
            document.getElementById('divButton').style.display = \"none\";
            document.getElementById('divForm').style.display = \"none\";
            scroll(0, 100);
        }
        function hideTable() {
            document.getElementById('divTable').style.display = \"none\";
            document.getElementById('divButton').style.display = \"block\";
            document.getElementById('divForm').style.display = \"none\";
        }
        function showFormSet(codTeacher, name, lastName, email) {
            document.getElementById('divTable').style.display = \"none\";
            document.getElementById('divButton').style.display = \"none\";

            document.getElementById('codeTeacher').value = codTeacher;
            document.getElementById('nameTeacher').value = name;
            document.getElementById('lastNameTeacher').value = lastName;
            document.getElementById('emailTeacher').value = email;
            document.getElementById('divForm').style.display = \"block\";
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 247,  394 => 246,  389 => 243,  386 => 242,  311 => 171,  296 => 158,  281 => 155,  277 => 154,  273 => 153,  269 => 152,  266 => 151,  262 => 150,  234 => 125,  228 => 122,  220 => 119,  214 => 115,  206 => 110,  200 => 107,  193 => 102,  190 => 101,  182 => 96,  177 => 93,  174 => 92,  166 => 87,  161 => 84,  158 => 83,  156 => 82,  140 => 70,  132 => 68,  98 => 37,  89 => 31,  80 => 25,  77 => 24,  68 => 18,  59 => 12,  56 => 11,  54 => 10,  46 => 5,  43 => 4,  40 => 3,  11 => 1,);
    }
}
