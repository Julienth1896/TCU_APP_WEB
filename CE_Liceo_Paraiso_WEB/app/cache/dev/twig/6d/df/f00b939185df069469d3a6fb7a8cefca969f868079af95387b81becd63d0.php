<?php

/* CELiceoParaisoBundle:Administrator:administration.html.twig */
class __TwigTemplate_6ddff00b939185df069469d3a6fb7a8cefca969f868079af95387b81becd63d0 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        ";
        // line 7
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>CELIPA Admin</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <!-- Bootstrap core CSS     -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Animation library for notifications   -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!--  Paper Dashboard core CSS    -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/paper-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <!--  Fonts and icons-->
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!--   Core JS Files   -->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!--  Checkbox, Radio & Switch Plugins -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/bootstrap-checkbox-radio.js"), "html", null, true);
        echo "\"></script>
        <!--  Charts Plugin -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
        <!--  Notifications Plugin    -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
        <!--  Google Maps Plugin    -->
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>
        <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/paper-dashboard.js"), "html", null, true);
        echo "\"></script>
        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/functions.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div class=\"wrapper\">
            <div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">
                <div class=\"sidebar-wrapper\">
                    <div class=\"logo\">
                        <a href=\"#\" class=\"simple-text\">
                            CELIPA Admin
                        </a>
                    </div>
                    <ul class=\"nav\">
                        ";
        // line 52
        if (((isset($context["administrator"]) ? $context["administrator"] : $this->getContext($context, "administrator")) == "general")) {
            // line 53
            echo "                            <li class=\"active\">
                                <a href=\"#\">
                                    <i class=\"ti-panel\"></i>
                                    <p>Información General</p>
                                </a>
                            </li>
                        ";
        }
        // line 60
        echo "                        
                            
                        <li>
                            <a href=\"user.html\">
                                <i class=\"ti-user\"></i>
                                <p>User Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"table.html\">
                                <i class=\"ti-view-list-alt\"></i>
                                <p>Table List</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"typography.html\">
                                <i class=\"ti-text\"></i>
                                <p>Typography</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"icons.html\">
                                <i class=\"ti-pencil-alt2\"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"maps.html\">
                                <i class=\"ti-map\"></i>
                                <p>Maps</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"notifications.html\">
                                <i class=\"ti-bell\"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li class=\"active-pro\">
                            <a href=\"upgrade.html\">
                                <i class=\"ti-export\"></i>
                                <p>Upgrade to PRO</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"main-panel\">
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar bar1\"></span>
                                <span class=\"icon-bar bar2\"></span>
                                <span class=\"icon-bar bar3\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
                        </div>
                        <div class=\"collapse navbar-collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"ti-panel\"></i>
                                        <p>Stats</p>
                                    </a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"ti-bell\"></i>
                                        <p class=\"notification\">5</p>
                                        <p>Notifications</p>
                                        <b class=\"caret\"></b>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Notification 1</a></li>
                                        <li><a href=\"#\">Notification 2</a></li>
                                        <li><a href=\"#\">Notification 3</a></li>
                                        <li><a href=\"#\">Notification 4</a></li>
                                        <li><a href=\"#\">Another notification</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-settings\"></i>
                                        <p>Settings</p>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
                <div class=\"content\" style=\"background-color: #ACD2F9;\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"content\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5\">
                                                <div class=\"icon-big icon-warning text-center\">
                                                    <i class=\"ti-server\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-7\">
                                                <div class=\"numbers\">
                                                    <p>Capacity</p>
                                                    105GB
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"footer\">
                                            <hr />
                                            <div class=\"stats\">
                                                <i class=\"ti-reload\"></i> Updated now
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"content\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5\">
                                                <div class=\"icon-big icon-success text-center\">
                                                    <i class=\"ti-wallet\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-7\">
                                                <div class=\"numbers\">
                                                    <p>Revenue</p>
                                                    \$1,345
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"footer\">
                                            <hr />
                                            <div class=\"stats\">
                                                <i class=\"ti-calendar\"></i> Last day
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"content\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5\">
                                                <div class=\"icon-big icon-danger text-center\">
                                                    <i class=\"ti-pulse\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-7\">
                                                <div class=\"numbers\">
                                                    <p>Errors</p>
                                                    23
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"footer\">
                                            <hr />
                                            <div class=\"stats\">
                                                <i class=\"ti-timer\"></i> In the last hour
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"content\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-5\">
                                                <div class=\"icon-big icon-info text-center\">
                                                    <i class=\"ti-twitter-alt\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-7\">
                                                <div class=\"numbers\">
                                                    <p>Followers</p>
                                                    +45
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"footer\">
                                            <hr />
                                            <div class=\"stats\">
                                                <i class=\"ti-reload\"></i> Updated now
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">

                            <div class=\"col-md-12\">
                                <div class=\"card\">
                                    <div class=\"header\">
                                        <h4 class=\"title\">Users Behavior</h4>
                                        <p class=\"category\">24 Hours performance</p>
                                    </div>
                                    <div class=\"content\">
                                        <div id=\"chartHours\" class=\"ct-chart\"></div>
                                        <div class=\"footer\">
                                            <div class=\"chart-legend\">
                                                <i class=\"fa fa-circle text-info\"></i> Open
                                                <i class=\"fa fa-circle text-danger\"></i> Click
                                                <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                            </div>
                                            <hr>
                                            <div class=\"stats\">
                                                <i class=\"ti-reload\"></i> Updated 3 minutes ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"card\">
                                    <div class=\"header\">
                                        <h4 class=\"title\">Email Statistics</h4>
                                        <p class=\"category\">Last Campaign Performance</p>
                                    </div>
                                    <div class=\"content\">
                                        <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>

                                        <div class=\"footer\">
                                            <div class=\"chart-legend\">
                                                <i class=\"fa fa-circle text-info\"></i> Open
                                                <i class=\"fa fa-circle text-danger\"></i> Bounce
                                                <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                            </div>
                                            <hr>
                                            <div class=\"stats\">
                                                <i class=\"ti-timer\"></i> Campaign sent 2 days ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"card \">
                                    <div class=\"header\">
                                        <h4 class=\"title\">2015 Sales</h4>
                                        <p class=\"category\">All products including Taxes</p>
                                    </div>
                                    <div class=\"content\">
                                        <div id=\"chartActivity\" class=\"ct-chart\"></div>

                                        <div class=\"footer\">
                                            <div class=\"chart-legend\">
                                                <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                                <i class=\"fa fa-circle text-warning\"></i> BMW 5 Series
                                            </div>
                                            <hr>
                                            <div class=\"stats\">
                                                <i class=\"ti-check\"></i> Data information certified
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class=\"footer\">
                    <div class=\"container-fluid\">
                        <nav class=\"pull-left\">
                            <ul>

                                <li>
                                    <a href=\"http://www.creative-tim.com\">
                                        Creative Tim
                                    </a>
                                </li>
                                <li>
                                    <a href=\"http://blog.creative-tim.com\">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href=\"http://www.creative-tim.com/license\">
                                        Licenses
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"copyright pull-right\">
                            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i> by <a href=\"http://www.creative-tim.com\">Creative Tim</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 60,  113 => 53,  111 => 52,  96 => 40,  92 => 39,  87 => 37,  80 => 33,  75 => 31,  70 => 29,  65 => 27,  61 => 26,  55 => 23,  47 => 18,  42 => 16,  37 => 14,  32 => 12,  25 => 7,  19 => 1,);
    }
}
