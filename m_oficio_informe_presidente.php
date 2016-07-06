<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>CNBV</title>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    <?php include_once('sideContent.php'); ?>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <?php include_once('menu.php'); ?>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <?php include_once('headerNavigation.php'); ?>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>

        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        Oficio de informe<small> Cierre</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Cierre</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#search-projects">Auditorías</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-alt-static-settings" data-toggle="tooltip" title="Opciones"><i class="si si-settings"></i></a>
                    </li>
                    <li class="pull-right">
                        <ul class="block-options push-10-t push-10-r">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Projects -->
                    <div class="tab-pane fade fade-up in active" id="search-projects">
                        <div class="border-b push-30">
                            <h2 class="push-10">4 <span class="h5 font-w400 text-muted">Auditorías encontradas</span></h2>
                        </div>
                        <table class="table table-striped table-vcenter table-condensed">
                            <thead>
                            <tr>
                                <th style="width: 30%;"><i class="fa fa-folder-open-o text-gray"></i> Auditoría</th>
                                <th class="text-left" style=""><i class="fa fa-file-o text-gray"></i> Dirección General</th>
                                <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Auditores</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <h3 class="h5 font-w600 push-10">
                                        <a class="link-effect" href="m_oficio_informe_presidente_detalle">Auditoría XXXX XXXXX</a>
                                    </h3>
                                </td>
                                <td class="text-left">Dirección general auditada</td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="h5 font-w600 push-10">
                                        <a class="link-effect" href="#">Auditoría XXXX XXXXX</a>
                                    </h3>
                                </td>
                                <td class="text-left">Dirección general auditada</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="h5 font-w600 push-10">
                                        <a class="link-effect" href="#">Auditoría XXXX XXXXX</a>
                                    </h3>
                                </td>
                                <td class="text-left">Dirección general auditada</td>
                                <td class="text-center">6</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="h5 font-w600 push-10">
                                        <a class="link-effect" href="#">Auditoría XXXX XXXXX</a>
                                    </h3>
                                </td>
                                <td class="text-left">Dirección general auditada</td>
                                <td class="text-center">2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END Projects -->
                    <div class="tab-pane" id="btabs-alt-static-settings">
                        <h4 class="font-w300 push-15">Opciones</h4>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-lg-2 col-lg-offset-4">
                                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full">
                                        <i class="si si-printer fa-4x text-primary"></i>
                                        <div class="font-w600 push-15-t">Imprimir lista</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">

        <div class="pull-left">
            <a class="font-w600" href="" target="_blank">CNBV</a> &copy; <span class="js-year-copy"></span>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>