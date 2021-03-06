<?php

/* admin.html */
class __TwigTemplate_63465e149c027ed993a6ed97946905d9ca706fe966fab18699a48bd031dd7fee extends Twig_Template
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
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
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
                <h4 class=\"page-head-line\">展示图片配置<button class=\"button button-large button-plain button-border button-square\" id=\"work-delete\"><i class=\"fa fa-trash-o\"></i></button></h4>

            </div>

        </div>

        <form id=\"data-form\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"direction: rtl\">
  <span class=\"button-dropdown button-dropdown-plain\" data-buttons=\"dropdown\">
    <button class=\"button button-caution button-pill\">
        <input type=\"hidden\" name=\"type\"/>
        <span id=\"type-show-text\">ALL</span> <i class=\"fa fa-caret-down\"></i>
    </button>

    <ul class=\"button-dropdown-list\">
        <li><a  data-id=\"1\" data-flag=\"typeselect\">UI</a></li>
        <li class=\"button-dropdown-divider\">
            <a  data-id=\"2\" data-flag=\"typeselect\">ANIMATION</a>
        </li>
        <li>
            <a  data-id=\"3\" data-flag=\"typeselect\">ILLUSTRATION</a>
        </li>
        <li>
            <a data-id=\"4\" data-flag=\"typeselect\">DIRECTION</a>
        </li>
        <li>
            <a  data-id=\"5\" data-flag=\"typeselect\">FINE ARTS</a>
        </li>
        <li>
            <a  data-id=\"6\" data-flag=\"typeselect\">PHOTOGRAPHY</a>
        </li>
    </ul>
  </span>
            </div>
        </div>

        <div class=\"row\" style=\"margin-top: 27px;\">
            <div class=\"col-md-3 col-sm-3 col-xs-6\" id=\"base-frame\">
                <div class=\"dashboard-div-wrapper bk-clr-one\" style=\"position: relative\">
                    <input type=\"file\" style=\"display: none\" name=\"pic\"/>
                    <img id=\"add-work\" src=\"/images/add.jpg\" style=\"width: 100%;height: 100%;\"/>
                </div>
            </div>
            <!--<div class=\"col-md-3 col-sm-3 col-xs-6\">-->
                <!--<div class=\"dashboard-div-wrapper bk-clr-four\">-->
                    <!--<i  class=\"fa fa-bell-o dashboard-div-icon\" ></i>-->
                    <!--<div class=\"progress progress-striped active\">-->
                        <!--<div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%\">-->
                        <!--</div>-->

                    <!--</div>-->
                    <!--<h5>Simple Text Here </h5>-->
                <!--</div>-->
            <!--</div>-->

        </div>
        </form>
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
<script src=\"/public/js/add_work.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
/*                 <h4 class="page-head-line">展示图片配置<button class="button button-large button-plain button-border button-square" id="work-delete"><i class="fa fa-trash-o"></i></button></h4>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <form id="data-form">*/
/*         <div class="row">*/
/*             <div class="col-md-12" style="direction: rtl">*/
/*   <span class="button-dropdown button-dropdown-plain" data-buttons="dropdown">*/
/*     <button class="button button-caution button-pill">*/
/*         <input type="hidden" name="type"/>*/
/*         <span id="type-show-text">ALL</span> <i class="fa fa-caret-down"></i>*/
/*     </button>*/
/* */
/*     <ul class="button-dropdown-list">*/
/*         <li><a  data-id="1" data-flag="typeselect">UI</a></li>*/
/*         <li class="button-dropdown-divider">*/
/*             <a  data-id="2" data-flag="typeselect">ANIMATION</a>*/
/*         </li>*/
/*         <li>*/
/*             <a  data-id="3" data-flag="typeselect">ILLUSTRATION</a>*/
/*         </li>*/
/*         <li>*/
/*             <a data-id="4" data-flag="typeselect">DIRECTION</a>*/
/*         </li>*/
/*         <li>*/
/*             <a  data-id="5" data-flag="typeselect">FINE ARTS</a>*/
/*         </li>*/
/*         <li>*/
/*             <a  data-id="6" data-flag="typeselect">PHOTOGRAPHY</a>*/
/*         </li>*/
/*     </ul>*/
/*   </span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row" style="margin-top: 27px;">*/
/*             <div class="col-md-3 col-sm-3 col-xs-6" id="base-frame">*/
/*                 <div class="dashboard-div-wrapper bk-clr-one" style="position: relative">*/
/*                     <input type="file" style="display: none" name="pic"/>*/
/*                     <img id="add-work" src="/images/add.jpg" style="width: 100%;height: 100%;"/>*/
/*                 </div>*/
/*             </div>*/
/*             <!--<div class="col-md-3 col-sm-3 col-xs-6">-->*/
/*                 <!--<div class="dashboard-div-wrapper bk-clr-four">-->*/
/*                     <!--<i  class="fa fa-bell-o dashboard-div-icon" ></i>-->*/
/*                     <!--<div class="progress progress-striped active">-->*/
/*                         <!--<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">-->*/
/*                         <!--</div>-->*/
/* */
/*                     <!--</div>-->*/
/*                     <!--<h5>Simple Text Here </h5>-->*/
/*                 <!--</div>-->*/
/*             <!--</div>-->*/
/* */
/*         </div>*/
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
/* <script src="/public/js/add_work.js"></script>*/
/* </body>*/
/* </html>*/
/* */
