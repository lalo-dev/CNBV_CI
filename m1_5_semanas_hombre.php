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
                                Semanas hombre <small>Planeación anual</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li>Semanas hombre</li>
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
                                <a href="#search-grafica">Gráfica</a>
                            </li>
                            <li>
                                <a href="#search-resumen">Resumen</a>
                            </li>
                            <li>
                                <a href="#search-total-nivel">Total por Nivel</a>
                            </li>
                            <li>
                                <a href="#search-total-area">Total por Área</a>
                            </li>
                            <li>
                                <a href="#search-distribucion-nivel">Distribución por Nivel</a>
                            </li>
                            <li>
                                <a href="#search-distribucion-area">Distribución por Área</a>
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
                        
                        	<!-- Grafica -->
                            <div class="tab-pane fade fade-up in active" id="search-grafica">
                                <div class="border-b push-30">
                                    <h2 class="push-10">1 <span class="h5 font-w400 text-muted">Una gráfica</span></h2>
                                </div>

                                <div class="block-header bg-primary">
                                    <h3 class="block-title">
                                        Gráfica de algo
                                    </h3>
                                </div>
                                Aquí la gráfica de algo ! ! !
                                <!--
                                <div class="table-responsive">

                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
	                                        <tr>
	                                            <th class="text-center" colspan="2">Actividad</th>
	                                            <th class="text-center"></th>
	                                            <th class="text-center">SEM - HOM 2015</th>
	                                        </tr>
                                        </thead>
                                        <tbody>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Auditoría</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">385</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">'Seguimientos de observaciones y de acciones de mejora de control interno</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">69</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Transparencia, Integridad y Participación Ciudadana</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">21</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Desarrollo y Mejora de la Gestión</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">262</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Quejas, Denuncias e investigaciones</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">56</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Responsabilidades Administrativas de los servidores públicos</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">24</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Controversias y Sanciones en Contrataciones Públicas.</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">23</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Actividades que no reúnen los requisistos de una auditoría</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">40</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Planeación, Dirección y Supervisión</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">32</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Informes a la SFP y otras instancias</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">24</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Comités</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">34</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Juntas y Consejos</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">20</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Actividades administrativas</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">45</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Capacitación</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">46</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Plazas vacantes</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">0</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Vacaciones e incapacidades del personal</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">115</td>
	                                        </tr>
                                        </tbody>
                                        <tfoot>
	                                        <tr>
	                                            <th class="text-center" colspan="2">Total</th>
	                                            <th class="text-center"></th>
	                                            <th class="text-center">1196</th>
	                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                -->
                            </div>

                            <!-- END Grafica -->
                        	<!-- Resumen -->
                            <div class="tab-pane fade fade-up" id="search-resumen">
                                <div class="border-b push-30">
                                    <h2 class="push-10">16 <span class="h5 font-w400 text-muted">Registros encontrados</span></h2>
                                </div>

                                <div class="block-header bg-primary col-lg-offset-1">
                                    <h3 class="block-title">
                                        Distribución de Semanas - Hombre por Actividad
                                    </h3>
                                </div>

                                <div class="table-responsive col-lg-offset-1">

                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
	                                        <tr>
	                                            <th class="text-center" colspan="2">Actividad</th>
	                                            <th class="text-center"></th>
	                                            <th class="text-center">SEM - HOM 2015</th>
	                                        </tr>
                                        </thead>
                                        <tbody>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Auditoría</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">385</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">'Seguimientos de observaciones y de acciones de mejora de control interno</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">69</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Transparencia, Integridad y Participación Ciudadana</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">21</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Desarrollo y Mejora de la Gestión</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">262</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Quejas, Denuncias e investigaciones</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">56</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Responsabilidades Administrativas de los servidores públicos</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">24</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Controversias y Sanciones en Contrataciones Públicas.</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">23</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Actividades que no reúnen los requisistos de una auditoría</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">40</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Planeación, Dirección y Supervisión</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">32</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Informes a la SFP y otras instancias</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">24</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Comités</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">34</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Juntas y Consejos</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">20</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Actividades administrativas</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">45</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Capacitación</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">46</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Plazas vacantes</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">0</td>
	                                        </tr>
	                                        <tr>
	                                        	<td class="text-center"></td>
	                                            <td class="text-left">Vacaciones e incapacidades del personal</td>
	                                            <td class="text-center"></td>
	                                            <td class="text-center">115</td>
	                                        </tr>
                                        </tbody>
                                        <tfoot>
	                                        <tr>
	                                            <th class="text-center" colspan="2">Total</th>
	                                            <th class="text-center"></th>
	                                            <th class="text-center">1196</th>
	                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <!-- END Resumen -->
                        	<!-- Total Nivel -->
                        	
                            <div class="tab-pane fade fade-up" id="search-total-nivel">
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Resultados encontrados</span></h2>
                                </div>

                                <div class="block-header bg-primary">
                                    <h3 class="block-title">
                                        ANÁLISIS SUMARIO 2014 POR NIVEL DEL ÓRGANO INTERNO DE CONTROL EN LA CNBV
                                    </h3>
                                </div>

                                <div class="table-responsive">

                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
	                                        <tr>
	                                            <th class="text-left">#</th>
	                                            <th>NOMBRE</th>
	                                            <th class="text-left" data-toggle="tooltip" data-placement="top" title="No. Plazas">No. Plazas</th>
	                                            <th class="text-left" data-toggle="tooltip" data-placement="top" title="AUDITORÍA">AUDITORÍA</th>
	                                            <th class="text-left" data-toggle="tooltip" data-placement="top" title="SEGUIMIENTO">SEGUIMIENTO</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="INF. REND. CUENTAS">INFORME...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="MEJORA DE LA GESTION">MEJORA...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="TRANSPARENCIA, INTEGRIDAD Y PARTICIPACIÓN CIUDADANA">TRANSPARENCIA...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="QUEJAS Y DENUNCIAS">QUEJAS...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="RESPONSABILIDADES">RESPONSABILIDADES</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="SANCIONES EN CONTRATACIONES PUBLICAS">SANCIONES...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES QUE NO REÚNEN LOS REQUISITOS DE UNA AUDITORÍA">ACTIVIDADES...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLANEACIÓN, SUPERVISIÓN Y DIRECCIÓN">PLANEACIÓN...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="INFORMES SFP Y OTRAS INST">INFORMES...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="CÓMITES">CÓMITES</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="JUNTAS Y CONSEJOS">JUNTAS...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES ADMINISTRATIVAS">ACTIVIDADES...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="CAPACITACIÓN">CAPACITACIÓN</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLAZAS VACANTES">PLAZAS...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="VACACIONES E INCAPACIDADES">VACACIONES...</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="TOTAL">TOTAL</th>
	                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="CASILLA DE VERIFICACIÓN">CASILLA...</th>
	                                        </tr>
                                        </thead>
                                        <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                            <td>TITULAR DEL OIC</td>
	                                            <td class="text-center">1.00</td>
	                                            <td class="text-center">4.00</td>
	                                            <td class="text-center">1.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">4.00</td>
	                                            <td class="text-center">1.00</td>
	                                            <td class="text-center">3.00</td>
	                                            <td class="text-center">2.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">3.00</td>
	                                            <td class="text-center">9.00</td>
	                                            <td class="text-center">6.00</td>
	                                            <td class="text-center">6.00</td>
	                                            <td class="text-center">6.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">2.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">5.00</td>
	                                            <td class="text-center">52.00</td>
	                                            <td class="text-center"></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                            <td>TITULARES DE ÁREA</td>
	                                            <td class="text-center">3.00</td>
	                                            <td class="text-center">32.00</td>
	                                            <td class="text-center">3.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">22.00</td>
	                                            <td class="text-center">3.00</td>
	                                            <td class="text-center">12.00</td>
	                                            <td class="text-center">8.00</td>
	                                            <td class="text-center">4.00</td>
	                                            <td class="text-center">6.00</td>
	                                            <td class="text-center">13.00</td>
	                                            <td class="text-center">9.00</td>
	                                            <td class="text-center">14.00</td>
	                                            <td class="text-center">9.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">6.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">15.00</td>
	                                            <td class="text-center">156.00</td>
	                                            <td class="text-center"></td>
	                                        <tr>
	                                        	<td>3</td>
	                                            <td>SUBGERENTE</td>
	                                            <td class="text-center">4.00</td>
	                                            <td class="text-center">66.00</td>
	                                            <td class="text-center">12.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">32.00</td>
	                                            <td class="text-center">3.00</td>
	                                            <td class="text-center">19.00</td>
	                                            <td class="text-center">7.00</td>
	                                            <td class="text-center">9.00</td>
	                                            <td class="text-center">4.00</td>
	                                            <td class="text-center">10.00</td>
	                                            <td class="text-center">6.00</td>
	                                            <td class="text-center">8.00</td>
	                                            <td class="text-center">4.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">8.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">20.00</td>
	                                            <td class="text-center">208.00</td>
	                                            <td class="text-center"></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                            <td>ESPECIALISTA / AUDITOR</td>
	                                            <td class="text-center">14.00</td>
	                                            <td class="text-center">283.00</td>
	                                            <td class="text-center">53.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">204.00</td>
	                                            <td class="text-center">14.00</td>
	                                            <td class="text-center">22.00</td>
	                                            <td class="text-center">7.00</td>
	                                            <td class="text-center">10.00</td>
	                                            <td class="text-center">27.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">3.00</td>
	                                            <td class="text-center">6.00</td>
	                                            <td class="text-center">1.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">28.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">70.00</td>
	                                            <td class="text-center">728.00</td>
	                                            <td class="text-center"></td>
											</tr>
	                                        <tr>
	                                        	<td>5</td>
	                                            <td>APOYO ADMINISTRATIVO</td>
	                                            <td class="text-center">1.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">45.00</td>
	                                            <td class="text-center">2.00</td>
	                                            <td class="text-center">0.00</td>
	                                            <td class="text-center">5.00</td>
	                                            <td class="text-center">52.00</td>
	                                            <td class="text-center"></td>
											</tr>
										</tbody>
										<tfoot>
	                                        <tr>
	                                        	<th></th>
	                                            <th class="text-center">TOTAL DEL OIC</th>
	                                            <th class="text-center">23.00</th>
	                                            <th class="text-center">385.00</th>
	                                            <th class="text-center">69.00</th>
	                                            <th class="text-center">0.00</th>
	                                            <th class="text-center">262.00</th>
	                                            <th class="text-center">21.00</th>
	                                            <th class="text-center">56.00</th>
	                                            <th class="text-center">24.00</th>
	                                            <th class="text-center">23.00</th>
	                                            <th class="text-center">40.00</th>
	                                            <th class="text-center">32.00</th>
	                                            <th class="text-center">24.00</th>
	                                            <th class="text-center">34.00</th>
	                                            <th class="text-center">20.00</th>
	                                            <th class="text-center">45.00</th>
	                                            <th class="text-center">46.00</th>
	                                            <th class="text-center">0.00</th>
	                                            <th class="text-center">115.00</th>
	                                            <th class="text-center">1196.00</th>
	                                            <th class="text-center"></th>
											</tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <!-- END Total Nivel -->
                            <!-- Total por Area -->
                            <div class="tab-pane fade fade-up" id="search-total-area">
                                <div class="border-b push-30">
                                    <h2 class="push-10">4 <span class="h5 font-w400 text-muted">Registros encontrados</span></h2>
                                </div>

                                <div class="block-header bg-primary">
                                    <h3 class="block-title">
                                        ANÁLISIS SUMARIO POR PERSONA Y ÁREA DEL ÓRGANO INTERNO DE CONTROL EN LA CNBV 2015 DISTRIBUCION POR AREA
                                    </h3>
                                </div>

                                <div class="table-responsive">

                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="NOMBRE">NOMBRE</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="AUDITORÍA">AUDITORÍA</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="SEGUIMIENTO">SEGUIMIENTO</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="DESARROLLO Y MEJORA DE LA GESTIÓN">DESARROLLO...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="TRANSPARENCIA, INTEGRIDAD Y PARTICIPACIÓN CIUDADANA">TRANSPARENCIA...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="QUEJAS">QUEJAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="RESPONSABILIDADES">RESPONSABILIDADES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="CONTROVERSIAS Y SANCIONES EN CONTRATACIONES PÚBLICAS">CONTROVERSIAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES QUE NO REÚNEN LOS REQUISITOS DE UNA AUDITORÍA">ACTIVIDADES...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLANEACIÓN, SUPERVISIÓN Y DORECCIÓN">PLANEACIÓN...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="INFORMES SFP Y OTRAS INSTITUCIONES">INFORMES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="CÓMITES">CÓMITES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="JUNTAS Y CONSEJOS">JUNTAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES ACTIVAS">ACTIVIDADES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="CAPACITACIÓN">CAPACITACIÓN</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLAZAS VACANTES">PLAZAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="VACACIONES E INCAPACIDADES">VACACIONES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="TOTAL">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ORGANO INTERNO DE CONTROL</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">9</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>AREA DE AUDITORIA INTERNA</td>
                                                <td class="text-center">381</td>
                                                <td class="text-center">68</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">28</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">22</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">55</td>
                                                <td class="text-center">572</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>AREA DE CONTROL Y EVALUACION</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">258</td>
                                                <td class="text-center">20</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">15</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">14</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">35</td>
                                                <td class="text-center">364</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>AREA DE QUEJAS Y RESPONSABILIDADES</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">52</td>
                                                <td class="text-center">22</td>
                                                <td class="text-center">23</td>
                                                <td class="text-center">9</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">11</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">15</td>
                                                <td class="text-center">156</td>
                                            </tr>
										</tbody>
										<tfoot>
                                            <tr>
                                                <th></th>
                                                <th class="text-center">TOTAL OIC</th>
                                                <th class="text-center">385</th>
                                                <th class="text-center">69</th>
                                                <th class="text-center">262</th>
                                                <th class="text-center">21</th>
                                                <th class="text-center">56</th>
                                                <th class="text-center">24</th>
                                                <th class="text-center">23</th>
                                                <th class="text-center">40</th>
                                                <th class="text-center">32</th>
                                                <th class="text-center">24</th>
                                                <th class="text-center">34</th>
                                                <th class="text-center">20</th>
                                                <th class="text-center">45</th>
                                                <th class="text-center">46</th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">115</th>
                                                <th class="text-center">1196</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <!-- END Total por Area -->
                            <!-- Distribucion Nivel -->

                            <div class="tab-pane fade fade-up" id="search-distribucion-nivel">
                                <div class="border-b push-30">
                                    <h2 class="push-10">23 <span class="h5 font-w400 text-muted">Registros encontrados</span></h2>
                                </div>

                                <div class="block-header bg-primary">
                                    <h3 class="block-title">
                                        ANÁLISIS SUMARIO POR NIVEL DEL ÓRGANO INTERNO DE CONTROL EN LA CNBV 2015 DISTRIBUCION POR NIVEL
                                    </h3>
                                </div>

                                <div class="table-responsive">

                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left" data-toggle="tooltip" data-placement="top" title="NOMBRE">NOMBRE</th>
                                            <th class="text-left" data-toggle="tooltip" data-placement="top" title="AUDITORIA">AUDITORIA</th>
                                            <th class="text-left" data-toggle="tooltip" data-placement="top" title="SEGUIMIENTO">SEGUIMIENTO</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="MEJORA DE LA GESTIÓN">MEJORA...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="---">---</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="QUEJAS Y DENUNCIAS">QUEJAS...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="RESPON">RESPON</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="CONTROVERSIAS Y SANCIONES EN CONTRATACIONES PÚBLICAS">CONTROVERSIAS...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES QUE NO REÚNEN LOS REQUISITOS DE UNA AUDITORÍA">ACTIVIDADES</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLANEACION, SUPERVICIÓN Y DIRECCÍON">PLANEACION...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="INFORMACIÓN SFP Y OTRAS INSTITUCIONES">INFORMACIÓN...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="CÓMITES">CÓMITES</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="JUNTAS Y CONSEJOS">JUNTAS...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES ACTIVAS">ACTIVIDADES...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="CAPACITACIÓN">CAPACITACIÓN</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLAZAS VACANTES">PLAZAS...</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="VACACIONES E INCAPACIDADES">VACACIONES</th>
                                            <th class="text-center" data-toggle="tooltip" data-placement="top" title="TOTALES">TOTALES</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>RONALDO JESÚS PRECIADO RUBIO</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr class="info">
                                            <td></td>
                                            <td>TOTAL POR NIVEL</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>GUILLERMO SOLIS CRUZ</td>
                                            <td class="text-center">32</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ricardo Pelaez Uranga</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">22</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SILVIA EUGENIA ROCHA TORRES</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">8</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr class="info">
                                            <td></td>
                                            <td>TOTAL POR NIVEL</td>
                                            <td class="text-center">32</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">22</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">8</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">13</td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">14</td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">156</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>MONICA ORTEGA ALEGRIA / JUAN MANUEL GUERRERO VAZQUEZ</td>
                                            <td class="text-center">33</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>JESUS EDUARDO CAMACHO SAN ROMAN (VACANTE)</td>
                                            <td class="text-center">33</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>CLAUDIA PIFERRER CRUZ</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">32</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>CRISTINA VILLICAÑA HERNÁNDEZ</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">19</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr class="info">
                                            <td></td>
                                            <td>TOTAL POR NIVEL</td>
                                            <td class="text-center">66</td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">32</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">19</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">10</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">8</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">8</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">20</td>
                                            <td class="text-center">208</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>JULIO CESAR DE LEÓN GONZÁLEZ</td>
                                            <td class="text-center">35</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>SARA VALENCIA SALCEDO</td>
                                            <td class="text-center">35</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>ADRIÁN SÁNCHEZ MONTALVO</td>
                                            <td class="text-center">35</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>VICTOR MANZANERA MIRANDA</td>
                                            <td class="text-center">35</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>BARBARA O. TERCERO ORTIZ</td>
                                            <td class="text-center">35</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>PATRICIA RIVERA DÍAZ</td>
                                            <td class="text-center">36</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>SUSANA CAROLINA LOPEZ GUZMAN</td>
                                            <td class="text-center">36</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>MA. DEL ROCIO CABRERA</td>
                                            <td class="text-center">36</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>JOSÉ ANTONIO ORTIZ MORENO</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">35</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>OLGA MICHELLE MEJIA SOTO</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">42</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>ILEANA CRAVIOTO MORENO</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">43</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>CINTHIA ESTRADA ROMERO</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">42</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>FLOR MA. ZAMORA ALTAMIRANO</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">42</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>BRENDA LOPEZ MUÑOZ</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">O</td>
                                            <td class="text-center">22</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">10</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr class="info">
                                            <td></td>
                                            <td>TOTAL POR NIVELES</td>
                                            <td class="text-center">283</td>
                                            <td class="text-center">53</td>
                                            <td class="text-center">204</td>
                                            <td class="text-center">14</td>
                                            <td class="text-center">22</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">10</td>
                                            <td class="text-center">27</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">6</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">28</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">728</td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>EVANGELINA FIGUEROA COLIN</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">O</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">45</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        <tr class="info">
                                            <td></td>
                                            <td>TOTAL POR NIVEL</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">O</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">45</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">52</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        	<tr>
	                                            <th></th>
	                                            <th>TOTAL OIC</th>
	                                            <th class="text-center">385</th>
	                                            <th class="text-center">69</th>
	                                            <th class="text-center">262</th>
	                                            <th class="text-center">21</th>
	                                            <th class="text-center">56</th>
	                                            <th class="text-center">24</th>
	                                            <th class="text-center">23</th>
	                                            <th class="text-center">40</th>
	                                            <th class="text-center">32</th>
	                                            <th class="text-center">24</th>
	                                            <th class="text-center">34</th>
	                                            <th class="text-center">20</th>
	                                            <th class="text-center">45</th>
	                                            <th class="text-center">46</th>
	                                            <th class="text-center">0</th>
	                                            <th class="text-center">115</th>
	                                            <th class="text-center">1196</th>
                                        	</tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <!-- END Distribucion Nivel -->
                            <!-- Distribucion Area -->
                            <div class="tab-pane fade fade-up" id="search-distribucion-area">
                                <div class="border-b push-30">
                                    <h2 class="push-10">15 <span class="h5 font-w400 text-muted">Registros encontrados</span></h2>
                                </div>

                                <div class="block-header bg-primary">
                                    <h3 class="block-title">
                                        ANÁLISIS SUMARIO POR PERSONA Y ÁREA DEL ÓRGANO INTERNO DE CONTROL EN LA CNBV 2015 DISTRIBUCION POR AREA
                                    </h3>
                                </div>

                                <div class="table-responsive">

                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="NOMBRE">NOMBRE</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="AUDITORÍA">AUDITORÍA</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="SEGUIMIENTO">SEGUIMIENTO</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="DESARROLLO Y LA MEJORA DE GESTIÓN">DESARROLLO...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="TRANSPARENCIA, INTEGRIDAD Y PARTICIPACIÓN CIUDADANA">TRANSPARENCIA...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="QUEJAS Y DENUNCIAS">QUEJAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="RESPONSABILIDADES">RESPONSABILIDADES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="CONTROVERSIAS Y SANCIONES EN CONTRATACIONES PÍBLICAS">CONTROVERSIAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES QUE NO REÚNEN LOS REQUISITOS DE UNA AUDITORÍAS">ACTIVIDADES...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLANEACIÓN, SUPERVICIÓN Y DIRECCIÓN">PLANEACIÓN...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="INFORMES SFP Y OTRAS INSTITUCIONES">INFORMES...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="CÓMITES">CÓMITES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="JUNTAS Y CONSEJOS">JUNTAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACTIVIDADES ACTIVAS">ACTIVIDADES...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="CAPACITACIÓN">CAPACITACIÓN</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="PLAZAS VACANTES">PLAZAS...</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="VACACIONES E INCAPACIDADES">VACACIONES</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="TOTAL">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>RONALDO JESÚS PRECIADO RUBIO</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">9</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>EVANGELINA FIGUEROA COLIN</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">45</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr class="info">
                                                <td></td>
                                                <td>ORGANO INTERNO DE CONTROL</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">9</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>GUILLERMO SOLIS CRUZ</td>
                                                <td class="text-center">32</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>MONICA ORTEGA ALEGRIA / JUAN MANUEL GUERRERO VAZQUEZ</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>JESUS EDUARDO CAMACHO SAN ROMAN (VACANTE)</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>JULIO CESAR DE LEÓN GONZÁLEZ</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>SARA VALENCIA SALCEDO</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>ADRIÁN SÁNCHEZ MONTALVO</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>VICTOR MANZANERA MIRANDA</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>BARBARA O. TERCERO ORTIZ</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>PATRICIA RIVERA DÍAZ</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>SUSANA CAROLINA LOPEZ GUZMAN</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>MA. DEL ROCIO CABRERA</td>
                                                <td class="text-center">33</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr class="info">
                                                <td></td>
                                                <td>AREA DE AUDITORIA INTERNA</td>
                                                <td class="text-center">381</td>
                                                <td class="text-center">68</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">28</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">22</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">55</td>
                                                <td class="text-center">572</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>RICARDO PELAEZ URANGA</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">22</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>CLAUDIA PIFERRER CRUZ</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">32</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>JOSÉ ANTONIO ORTIZ MORENO</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">35</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>JESUS TORRES RAMIREZ</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">42</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>ILEANA CRAVIOTO MORENO</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">43</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>CINTHIA ESTRADA ROMERO</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">42</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>FLOR MARIA ZAMORA ALTAMIRANO</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">42</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr class="info">
                                                <td></td>
                                                <td>AREA DE CONTROL Y EVALUACION</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">258</td>
                                                <td class="text-center">20</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">15</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">14</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">35</td>
                                                <td class="text-center">364</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>SILVIA EUGENIA ROCHA TORRES</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">43</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>CRISTINA VILLICAÑA HERNÁNDEZ</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">42</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>EDGAR ROMAN GONZALEZ, EDGAR</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">42</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">52</td>
                                            </tr>
                                            <tr class="info">
                                                <td></td>
                                                <td>AREA DE QUEJAS Y RESPONSABILIDADES</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">258</td>
                                                <td class="text-center">20</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">6</td>
                                                <td class="text-center">15</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">14</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">35</td>
                                                <td class="text-center">364</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>TOTAL OIC</th>
                                                <th class="text-center">385</th>
                                                <th class="text-center">69</th>
                                                <th class="text-center">262</th>
                                                <th class="text-center">21</th>
                                                <th class="text-center">56</th>
                                                <th class="text-center">24</th>
                                                <th class="text-center">23</th>
                                                <th class="text-center">40</th>
                                                <th class="text-center">32</th>
                                                <th class="text-center">24</th>
                                                <th class="text-center">34</th>
                                                <th class="text-center">20</th>
                                                <th class="text-center">45</th>
                                                <th class="text-center">46</th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">115</th>
                                                <th class="text-center">1196</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <!-- END Distribucion Area -->

                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4 col-md-2 col-md-offset-5">
                                        <a class="block block-link-hover3 text-center" href="semanas_hombre_form.php">
                                            <div class="block-content block-content-full">
                                                <!-- <i class="si si-paper-plane fa-4x text-primary"></i> -->
                                                <i class="si si-doc fa-4x text-primary"></i>
                                                <!-- <div class="font-w600 push-15-t">Revisión</div> -->
                                                <div class="font-w600 push-15-t">Capturar Semanas Hombre</div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
                                            </div>
                                        </a>
                                    </div>
                                    -->
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