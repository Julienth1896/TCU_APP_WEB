<?php

/* CELiceoParaisoBundle:Administrator:sections.html.twig */
class __TwigTemplate_ac3d318c233acff1354e1cfe9264ce3adc79805d5fc6fe10576a76e70cd8265d extends Twig_Template
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
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_admin");
        echo "\">
            <i class=\"ti-panel\"></i>
            <p>Institución</p>
        </a>
    </li>
    <li class=\"active\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_sections");
        echo "\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Área Nocturna</p>
        </a>
    </li>
    <li class=\"active\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_sections");
        echo "\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Plan Nacional</p>
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

    // line 53
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        echo "  
    <div class=\"col-md-12\">
        <div class=\"card\">
            <div class=\"content table-responsive table-full-width\">
                <table class=\"table table-striped\">
                    <thead>
                    <th>Área</th>
                    <th>Descripción</th>
                    <th>Encagado</th>
                    <th></th>
                    </thead>
                    <tbody>
                        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 68
            echo "                            ";
            if (($this->getAttribute($context["area"], "getCodigo", array(), "method") == 3)) {
                // line 69
                echo "                                <tr>
                                    <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getNombre", array(), "method"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getDescripcion", array(), "method"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["area"], "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getNombre", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["area"], "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getApellidos", array(), "method"), "html", null, true);
                echo "</td>
                                    <td></td>
                                </tr>
                            ";
            } else {
                // line 76
                echo "                                <tr>
                                    <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getNombre", array(), "method"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getDescripcion", array(), "method"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["area"], "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getNombre", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["area"], "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getApellidos", array(), "method"), "html", null, true);
                echo "</td>
                                    <td><a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal\" data-toggle=\"modal\">Administrar</a></td>
                                </tr>
                            ";
            }
            // line 83
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 90
    public function block_modals($context, array $blocks = array())
    {
        // line 91
        echo "    <div class=\"modal fade\" id=\"modal\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Asignar responsable</strong>
                    </h4>
                </div>
                <form action=\"#\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">

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
        return "CELiceoParaisoBundle:Administrator:sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 91,  189 => 90,  180 => 84,  174 => 83,  165 => 79,  161 => 78,  157 => 77,  154 => 76,  145 => 72,  141 => 71,  137 => 70,  134 => 69,  131 => 68,  127 => 67,  111 => 55,  103 => 53,  63 => 17,  54 => 11,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
