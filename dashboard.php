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

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
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
                <div class="content bg-image overflow-hidden" style="background-image: url('assets/img/various/logoGeneral.png');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">&nbsp;</h1>
                        <hr />
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Auditorías</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoy</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">300</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Seguimientos</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoy</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">100</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">PRA</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoy</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html"> 50</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Avance general</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoy</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html"> 80 %</a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- News -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"> News</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-timeline pull-t">
                                        <!-- Twitter Notification -->
                                        <li>
                                            <div class="list-timeline-time">12 Dic 2015</div>
                                            <i class="fa fa-newspaper-o list-timeline-icon bg-info"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Noticia CNBV</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="row items-push js-gallery">
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo2@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo8@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo16@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo16.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END Twitter Notification -->

                                        <!-- Generic Notification -->
                                        <li>
                                            <div class="list-timeline-time">11 Dic 2015</div>
                                            <i class="fa fa-calendar-times-o list-timeline-icon bg-city"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Fechas limite de entrega!</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END Generic Notification -->

                                        <!-- System Notification -->
                                        <li>
                                            <div class="list-timeline-time">10 Dic 2015</div>
                                            <i class="fa fa-check list-timeline-icon bg-success"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Documentos entregados!</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->

                                        <!-- Facebook Notification -->
                                        <li>
                                            <div class="list-timeline-time">09 Dic 2015</div>
                                            <i class="fa fa-newspaper-o list-timeline-icon bg-default"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Noticia CNBV</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="row items-push js-gallery">
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo2@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo8@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo16@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo16.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END Facebook Notification -->

                                        <!-- System Notification -->
                                        <li class="push-5">
                                            <div class="list-timeline-time">08 Dic 2015</div>
                                            <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Actualización del sistema</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->
                                    </ul>
                                </div>
                            </div>
                            <!-- END News -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Content Grid -->
                            <div class="content-grid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!-- Mini Stats -->
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-layers fa-3x text-primary"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t">Auditoría</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-reload fa-3x text-smooth"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t">Seguimiento</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-bar-chart fa-3x text-city"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t">Reportes</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-calendar fa-3x text-primary-dark"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t"> Calendario</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-book-open fa-3x text-success"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t"> Normativa</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <!-- END Mini Stats -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Content Grid -->
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

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            $(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>