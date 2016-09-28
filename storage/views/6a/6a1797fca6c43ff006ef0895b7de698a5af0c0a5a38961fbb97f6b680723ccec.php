<?php

/* master.html */
class __TwigTemplate_385a95c0c66cf7bda347187deac60b2f28f9bf890d56828561863cba96751810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'function' => array($this, 'block_function'),
            'contentwrap' => array($this, 'block_contentwrap'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <!--[if IE]>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href=\"/public/assets/css/bootstrap.css\" rel=\"stylesheet\" />
    <!-- FONT AWESOME ICONS  -->
    <link href=\"/public/assets/css/font-awesome.css\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE  -->
    <link href=\"/public/assets/css/style.css\" rel=\"stylesheet\" />
    <link href=\"/public/assets/css/buttons.css\" rel=\"stylesheet\" />
    <link href=\"/public/css/spinners.css\" rel=\"stylesheet\">
    <style>
        .dashboard-div-wrapper{
            padding: 0 !important;
        }
    </style>
    ";
        // line 25
        $this->displayBlock('style', $context, $blocks);
        // line 27
        echo "    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <strong>Email: </strong>info@yourdomain.com
                &nbsp;&nbsp;
                <strong>Support: </strong>+90-897-678-44
            </div>

        </div>
    </div>
</header>
<!-- HEADER END-->
<div class=\"navbar navbar-inverse set-radius-zero\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">

                <img src=\"/public/assets/img/logo.png\" />
            </a>

        </div>

        <div class=\"left-div\">
            <div class=\"user-settings-wrapper\">
                <ul class=\"nav\">

                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-user\" style=\"font-size: 25px;\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-settings\">
                            <div class=\"media\">
                                <a class=\"media-left\" href=\"#\">
                                    <img src=\"/public/assets/img/64-64.jpg\" alt=\"\" class=\"img-rounded\" />
                                </a>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading\">Jhon Deo Alex </h4>
                                    <h5>Developer & Designer</h5>

                                </div>
                            </div>
                            <hr />
                            <h5><strong>Personal Bio : </strong></h5>
                            Anim pariatur cliche reprehen derit.
                            <hr />
                            <a href=\"#\" class=\"btn btn-info btn-sm\">Full Profile</a>&nbsp; <a href=\"login.html\" class=\"btn btn-danger btn-sm\">Logout</a>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class=\"menu-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"navbar-collapse collapse \">
                    <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                        <li><a class=\"menu-top-active\" href=\"index.html\">Dashboard</a></li>
                        <li><a href=\"ui.html\">UI Elements</a></li>
                        <li><a href=\"table.html\">Data Tables</a></li>
                        <li><a href=\"forms.html\">Forms</a></li>
                        <li><a href=\"login.html\">Login Page</a></li>
                        <li><a href=\"blank.html\">Blank Page</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- MENU SECTION END-->
<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"page-head-line\">";
        // line 123
        $this->displayBlock('function', $context, $blocks);
        echo "</h4>

            </div>

        </div>

        <form id=\"data-form\">
            ";
        // line 130
        $this->displayBlock('contentwrap', $context, $blocks);
        // line 131
        echo "        </form>
    </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                &copy; 2015 YourCompany | By : <a href=\"http://www.designbootstrap.com/\" target=\"_blank\">DesignBootstrap</a>
            </div>

        </div>
    </div>
</footer>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY SCRIPTS -->
<script src=\"/public/assets/js/jquery-1.11.1.js\"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src=\"/public/assets/js/bootstrap.js\"></script>
<script src=\"/public/assets/js/buttons.js\"></script>
<script src=\"/public/js/veil.js\"></script>
";
        // line 153
        $this->displayBlock('script', $context, $blocks);
        // line 155
        echo "</body>
</html>
";
    }

    // line 25
    public function block_style($context, array $blocks = array())
    {
        // line 26
        echo "    ";
    }

    // line 123
    public function block_function($context, array $blocks = array())
    {
    }

    // line 130
    public function block_contentwrap($context, array $blocks = array())
    {
    }

    // line 153
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html";
    }

    public function getDebugInfo()
    {
        return array (  210 => 153,  205 => 130,  200 => 123,  196 => 26,  193 => 25,  187 => 155,  185 => 153,  161 => 131,  159 => 130,  149 => 123,  51 => 27,  49 => 25,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/*     <meta name="description" content="" />*/
/*     <meta name="author" content="" />*/
/*     <!--[if IE]>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <![endif]-->*/
/*     <title>Free Responsive Admin Theme - ZONTAL</title>*/
/*     <!-- BOOTSTRAP CORE STYLE  -->*/
/*     <link href="/public/assets/css/bootstrap.css" rel="stylesheet" />*/
/*     <!-- FONT AWESOME ICONS  -->*/
/*     <link href="/public/assets/css/font-awesome.css" rel="stylesheet" />*/
/*     <!-- CUSTOM STYLE  -->*/
/*     <link href="/public/assets/css/style.css" rel="stylesheet" />*/
/*     <link href="/public/assets/css/buttons.css" rel="stylesheet" />*/
/*     <link href="/public/css/spinners.css" rel="stylesheet">*/
/*     <style>*/
/*         .dashboard-div-wrapper{*/
/*             padding: 0 !important;*/
/*         }*/
/*     </style>*/
/*     {% block style %}*/
/*     {% endblock %}*/
/*     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <header>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <strong>Email: </strong>info@yourdomain.com*/
/*                 &nbsp;&nbsp;*/
/*                 <strong>Support: </strong>+90-897-678-44*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </header>*/
/* <!-- HEADER END-->*/
/* <div class="navbar navbar-inverse set-radius-zero">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="index.html">*/
/* */
/*                 <img src="/public/assets/img/logo.png" />*/
/*             </a>*/
/* */
/*         </div>*/
/* */
/*         <div class="left-div">*/
/*             <div class="user-settings-wrapper">*/
/*                 <ul class="nav">*/
/* */
/*                     <li class="dropdown">*/
/*                         <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>*/
/*                         </a>*/
/*                         <div class="dropdown-menu dropdown-settings">*/
/*                             <div class="media">*/
/*                                 <a class="media-left" href="#">*/
/*                                     <img src="/public/assets/img/64-64.jpg" alt="" class="img-rounded" />*/
/*                                 </a>*/
/*                                 <div class="media-body">*/
/*                                     <h4 class="media-heading">Jhon Deo Alex </h4>*/
/*                                     <h5>Developer & Designer</h5>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             <hr />*/
/*                             <h5><strong>Personal Bio : </strong></h5>*/
/*                             Anim pariatur cliche reprehen derit.*/
/*                             <hr />*/
/*                             <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>*/
/* */
/*                         </div>*/
/*                     </li>*/
/* */
/* */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- LOGO HEADER END-->*/
/* <section class="menu-section">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="navbar-collapse collapse ">*/
/*                     <ul id="menu-top" class="nav navbar-nav navbar-right">*/
/*                         <li><a class="menu-top-active" href="index.html">Dashboard</a></li>*/
/*                         <li><a href="ui.html">UI Elements</a></li>*/
/*                         <li><a href="table.html">Data Tables</a></li>*/
/*                         <li><a href="forms.html">Forms</a></li>*/
/*                         <li><a href="login.html">Login Page</a></li>*/
/*                         <li><a href="blank.html">Blank Page</a></li>*/
/* */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <!-- MENU SECTION END-->*/
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="page-head-line">{% block function %}{% endblock%}</h4>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <form id="data-form">*/
/*             {% block contentwrap %}{% endblock %}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* <!-- CONTENT-WRAPPER SECTION END-->*/
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <!-- FOOTER SECTION END-->*/
/* <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->*/
/* <!-- CORE JQUERY SCRIPTS -->*/
/* <script src="/public/assets/js/jquery-1.11.1.js"></script>*/
/* <!-- BOOTSTRAP SCRIPTS  -->*/
/* <script src="/public/assets/js/bootstrap.js"></script>*/
/* <script src="/public/assets/js/buttons.js"></script>*/
/* <script src="/public/js/veil.js"></script>*/
/* {% block script %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
