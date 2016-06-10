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
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            
                            <a class="h5 text-white" href="dashboard">
                                <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">PAKAL AI</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li>
                                    <a class="" href="dashboard">
                                        <i class="si si-speedometer"></i>
                                        <span class="sidebar-mini-hide">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-hide">Actividades</span></li>
                                <li class="open">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Planeación anual</span></a>
                                    <ul>
                                        <li>
                                            <a class="active" href="m1_0_pat_completo">PAT</a>
                                        </li>
                                        <li>
                                            <a class="submenuCnbv" href="m1_3_presentacion_ejecutiva">Presentación ejecutiva</a>
                                        </li>
                                        <li>
                                            <a class="submenuCnbv" href="m1_4_mapa_riesgos">Mapa de riesgos</a>
                                        </li>
                                        <li>
                                            <a class="submenuCnbv" href="m1_5_semanas_hombre">Semanas hombre</a>
                                        </li>
                                        <li>
                                            <a class="submenuCnbv" href="m1_6_equipo_trabajo">Equipo de trabajo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Auditoría</span></a>
                                    <ul>
                                        <li>
                                            <a href="m2_1_planeacaion_detallada">Planeación detallada</a>
                                        </li>
                                        <li>
                                            <a href="m2_2_ejecucion">Ejecución</a>
                                        </li>
                                        <li>
                                            <a href="m2_3_informe">Informe</a>
                                        </li>
                                        <li>
                                            <a href="m2_4_cierre">Cierre</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Seguimiento</span></a>
                                    <ul>
                                        <li>
                                            <a href="m3_1_ejecucion">Ejecución</a>
                                        </li>
                                        <li>
                                            <a href="m3_2_informe">Informe</a>
                                        </li>
                                        <li>
                                            <a href="m3_3_cierre">Cierre</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">PRAS</span></a>
                                    <ul>
                                        <li>
                                            <a href="m4_1_informe_pra">Informe de PRAS</a>
                                        </li>
                                        <li>
                                            <a href="m4_2_solicitud_asesor">Solicitud asesor</a>
                                        </li>
                                        <li>
                                            <a href="m4_3_informe_invio">Informe de envío</a>
                                        </li>
                                        <li>
                                            <a href="m4_4_requerimiento">Requerimiento información</a>
                                        </li>
                                        <li>
                                            <a href="m4_5_anexos">Anexos al informe de PRAS</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bar-chart"></i><span class="sidebar-mini-hide">Reportes</span></a>
                                    <ul>
                                        <li>
                                            <a href="m5_1_reporte_auditorias">Auditorías</a>
                                        </li>
                                        <li>
                                            <a href="">Seguimientos</a>
                                        </li>
                                        <li>
                                            <a href="">Auditores</a>
                                        </li>
                                        <li>
                                            <a href="">PRAS</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bar-chart"></i><span class="sidebar-mini-hide">Estadísticas</span></a>
                                    <ul>
                                        <li>
                                            <a href="m6_1_estadistica_auditorias">Auditorías ?</a>
                                        </li>
                                        <li>
                                            <a href="">Seguimientos ?</a>
                                        </li>
                                        <li>
                                            <a href="">Auditores ?</a>
                                        </li>
                                        <li>
                                            <a href="">PRAS ?</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-calendar"></i><span class="sidebar-mini-hide">Actividades</span></a>
                                    <ul>
                                        <li>
                                            <a href="registro_actividades">Registrar</a>
                                        </li>
                                        <li>
                                            <a href="consultar_actividades">Consultar</a>
                                        </li>
                                        <li>
                                            <a href="actividades_generales">General</a>
                                        </li>
                                        <li>
                                            <a href="configurar_actividades">Configuración</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-hide">Extras</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-docs"></i><span class="sidebar-mini-hide">Normativa</span></a>
                                    <ul>
                                        <li>
                                            <a href="m7_1_normativa_aai">AAI</a>
                                        </li>
                                        <li>
                                            <a href="m7_2_normativa_cnbv">CNBV</a>
                                        </li>
                                        <li>
                                            <a href="m7_3_plantillas">Plantillas</a>
                                        </li>
                                        <li>
                                            <a href="m7_4_glosario">Glosario</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-docs"></i><span class="sidebar-mini-hide">Otras actividades</span></a>
                                    <ul>
                                        <li>
                                            <a href="m8_1_adquisiciones">Adquisiciones</a>
                                        </li>
                                        <li>
                                            <a href="m8_2_comsoc">COMSOC</a>
                                        </li>
                                        <li>
                                            <a href="m8_3_actas_entrega">Actas de entrega</a>
                                        </li>
                                        <li>
                                            <a href="m8_4_auditores_externos">Auditores externos</a>
                                        </li>
                                        <li>
                                            <a href="m8_5_asf">ASF</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-hide">Administración</span></li>
                                <li>
                                    <a href="adm_usuarios"><i class="si si-users"></i><span class="sidebar-mini-hide">Usuarios</span></a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-list"></i><span class="sidebar-mini-hide">Catálogos</span></a>
                                    <ul>
                                        <li>
                                            <a href="cat_riesgos">Riesgos</a>
                                        </li>
                                        <li>
                                            <a href="cat_clave">Clave de programa</a>
                                        </li>
                                        <li>
                                            <a href="cat_areas">Áreas</a>
                                        </li>
                                        <li>
                                            <a href="cat_empleados">Empleados</a>
                                        </li>
                                        <li>
                                            <a href="cat_estatus">Estatus documentos</a>
                                        </li>
                                        <li>
                                            <a href="cat_criterios">Criterios para las cédulas</a>
                                        </li>
                                        <li>
                                            <a href="cat_empleados">Empleados</a>
                                        </li>
                                        <li>
                                            <a href="cat_mapa">Mapa de riesgos</a>
                                        </li>
                                        <li>
                                            <a href="cat_justificacion">Justificación ?</a>
                                        </li>
                                        <li>
                                            <a href="cat_calendario">Calendario</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog"><i class="si si-speech"></i><span class="sidebar-mini-hide">Blog</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
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
                                PAT Completo <small>Listado de PATs cargados en el sistema</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
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
                                <a href="#search-projects">PATs</a>
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
                                    <h2 class="push-10">7 <span class="h5 font-w400 text-muted">PAT encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;"><i class="fa fa-folder-open-o text-gray"></i> PAT</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Auditorias</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Seguimientos</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Observaciones</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> PRAS</th>
                                            <th class="text-center" style=""><i class="fa fa-warning text-gray"></i> Autorizado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="m1_0_0_form_pat_completo.php">Programa Anual de Trabajo 2016</a>
                                                </h3>
                                                <div class="push-10">    
                                                    <span class="label label-primary"><i class="fa fa-check"></i> Programado</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="javascript:void(0)">Programa Anual de Trabajo 2015</a>
                                                </h3>
                                                <div class="push-10">
                                                    <span class="label label-warning"><i class="fa fa-refresh fa-spin"></i> En proceso</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="javascript:void(0)">Programa Anual de Trabajo 2014</a>
                                                </h3>
                                                <div class="push-10">
                                                    <span class="label label-success"><i class="fa fa-check"></i> Completado</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="javascript:void(0)">Programa Anual de Trabajo 2013</a>
                                                </h3>
                                                <div class="push-10">
                                                    <span class="label label-success"><i class="fa fa-check"></i> Completado</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="javascript:void(0)">Programa Anual de Trabajo 2012</a>
                                                </h3>
                                                <div class="push-10">
                                                    <span class="label label-success"><i class="fa fa-check"></i> Completado</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="javascript:void(0)">Programa Anual de Trabajo 2011</a>
                                                </h3>
                                                <div class="push-10">
                                                    <span class="label label-success"><i class="fa fa-check"></i> Completado</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="javascript:void(0)">Programa Anual de Trabajo 2010</a>
                                                </h3>
                                                <div class="push-10">
                                                    <span class="label label-success"><i class="fa fa-check"></i> Completado</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
                                            <td class="h3 text-center">-</td>
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
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-folder fa-4x text-success"></i>
                                                <div class="font-w600 push-15-t">Nuevo PAT</div>
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
            <?php include_once('footer.php'); ?>
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