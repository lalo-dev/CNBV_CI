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
                                Reportes <small>Hallazgos</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Hallazgos</li>
                                <li>Reportes</li>
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
                                <a href="#search-en-curso">En curso</a>
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
                            <!-- En curso -->
                            <div class="tab-pane active fade fade-up in active" id="search-en-curso">
                                <div class="border-b push-30">
                                    <h2 class="push-10">10 <span class="h5 font-w400 text-muted">Actividades</span></h2>
                                </div>
                                <div class="table-responsive">
									<table class="table table-striped table-vcenter table-condensed table-header-bg">
										<thead>
											<tr>
												<th class="text-center" colspan="13">2016</br>XXXXXXXXXX Trimestre</br>Reporte de Observaciones</th>
											</tr>
											<tr>
												<th class="text-center">No. de Auditoría</th>
												<th class="text-center">No. de Obs</th>
												<th class="text-center">Área auditada</th>
												<th class="text-center">Titulo de la Observación</th>
												<th class="text-center">Recomendación(es) Correctiva(s)</th>
												<th class="text-center">Recomendación(es) Preventiva(s)</th>
												<th class="text-center">Auditor que la Origina</th>
												<th class="text-center">Jefe de Grupo</th>
												<th class="text-center">Fecha de Firma</th>
												<th class="text-center">Fecha de compromiso de Solventación</th>
												<th class="text-center">Liga del Documento</th>
												<th class="text-center">Número de Hallazgos del que proviene</th>
												<th class="text-center">Liga al Hallazgo de que proviene</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-center">01/16</td>
												<th class="text-center">1</td>
												<th class="text-center">DGSUC</td>
												<th class="text-center">Debilidad en la oportuna presentación de SS</td>
												<th class="text-center">XXXXX</td>
												<th class="text-center">XXXXXXXX</td>
												<th class="text-center">VMM/FMZA</td>
												<th class="text-center">SCLG</td>
												<th class="text-center">15/03/2016</td>
												<th class="text-center">30/05/2016</td>
												<th class="text-center">X</td>
												<th class="text-center">1</td>
												<th class="text-center">X</td>
											</tr>
											<tr>
												<th class="text-center">01/16</td>
												<th class="text-center">2</td>
												<th class="text-center">DGSUC</td>
												<th class="text-center">Retrasos en SS</td>
												<th class="text-center">XXXXX</td>
												<th class="text-center">XXXXXXXX</td>
												<th class="text-center">MFZA</td>
												<th class="text-center">SCLG</td>
												<th class="text-center">15/03/2016</td>
												<th class="text-center">30/05/2016</td>
												<th class="text-center">X</td>
												<th class="text-center">2</td>
												<th class="text-center">X</td>
											</tr>
											
											
											<tr>
												<th class="text-center">02/16</td>
												<th class="text-center">2</td>
												<th class="text-center">DGSSFP</td>
												<th class="text-center">Diferencias en Reportes</td>
												<th class="text-center">XXXXX</td>
												<th class="text-center">XXXXXXXX</td>
												<th class="text-center">MFZA</td>
												<th class="text-center">ICM</td>
												<th class="text-center">16/03/2016</td>
												<th class="text-center">01/06/2016</td>
												<th class="text-center">X</td>
												<th class="text-center">1</td>
												<th class="text-center">X</td>
											</tr>
											<tr>
												<th class="text-center">03/16</td>
												<th class="text-center">2</td>
												<th class="text-center">DGSCAP</td>
												<th class="text-center">Diferencias en Reportes</td>
												<th class="text-center">XXXXXX</td>
												<th class="text-center">XXXXXXXX</td>
												<th class="text-center">JCDLG</td>
												<th class="text-center">SCLG</td>
												<th class="text-center">17/03/2016</td>
												<th class="text-center">02/06/2016</td>
												<th class="text-center">X</td>
												<th class="text-center">1</td>
												<th class="text-center">X</td>
											</tr>
											
											
											<tr>
												<th class="text-center">04/16</td>
												<th class="text-center">2</td>
												<th class="text-center">DGSSFP</td>
												<th class="text-center">Diferencias en plazas vacantes</td>
												<th class="text-center">XXXXX</td>
												<th class="text-center">XXXXXXXX</td>
												<th class="text-center">MFZA</td>
												<th class="text-center">ICM</td>
												<th class="text-center">16/03/2016</td>
												<th class="text-center">01/06/2016</td>
												<th class="text-center">X</td>
												<th class="text-center">1</td>
												<th class="text-center">X</td>
											</tr>
											<tr>
												<th class="text-center">05/16</td>
												<th class="text-center">2</td>
												<th class="text-center">DGSCAP</td>
												<th class="text-center">Fundamentos legales insuficientes</td>
												<th class="text-center">XXXXXX</td>
												<th class="text-center">XXXXXXXX</td>
												<th class="text-center">JCDLG</td>
												<th class="text-center">SCLG</td>
												<th class="text-center">17/03/2016</td>
												<th class="text-center">02/06/2016</td>
												<th class="text-center">X</td>
												<th class="text-center">1</td>
												<th class="text-center">X</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
                            <!-- END En Curso -->
                            
                            
                            <div class="block">
								<div class="col-lg-3">
		                            <!-- Header BG Table -->
		                            <div class="block">
		                                <div class="block-header">
		                                	&nbsp;
		                                </div>
		                                <div class="block-content">
		                                    <table class="table table-striped table-borderless table-header-bg">
		                                        <thead>
		                                            <tr>
		                                                <th class="text-center" style="width: 50px;">No. Auditoría</th>
		                                                <th>Numero de Observaciones</th>
		                                            </tr>
		                                        </thead>
		                                        <tbody>
		                                            <tr>
		                                                <td class="text-center">01/15</td>
		                                                <td class="text-center">2</td>
		                                            </tr>
		                                            <tr>
		                                                <td class="text-center">02/15</td>
		                                                <td class="text-center">1</td>
		                                            </tr>
		                                            <tr>
		                                                <td class="text-center">03/15</td>
		                                                <td class="text-center">1</td>
		                                            </tr>
		                                            <tr>
		                                                <td class="text-center">01/15</td>
		                                                <td class="text-center">1</td>
		                                            </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                            </div>
		                            <!-- END Header BG Table -->
		                        </div>
		                        <div class="col-lg-9">
		                            <!-- Header BG Table -->
		                            <div class="block">
		                                <div class="block-header">
		                                	&nbsp;
		                                </div>
		                                <div class="block-content">
		                                
		                                	<div class="col-lg-6">
					                            <!-- Bars Chart -->
					                            <div class="block">
					                                <div class="block-header">
<!-- 					                                    <ul class="block-options"> -->
<!-- 					                                        <li> -->
<!-- 					                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button> -->
<!-- 					                                        </li> -->
<!-- 					                                    </ul> -->
					                                    <h3 class="block-title">Número de observaciones por auditoría</h3>
					                                </div>
<!-- 					                                <div class="block-content block-content-full text-center"> -->
					                                    <!-- Bars Chart Container -->
					                                    <div style="height: 330px;"><canvas class="js-chartjs-bars"></canvas></div>
<!-- 					                                </div> -->
					                            </div>
					                            <!-- END Bars Chart -->
					                        </div>
					                        
					                        <div class="col-lg-6">
					                            <!-- Pie Chart -->
					                            <div class="block">
					                                <div class="block-header">
<!-- 					                                    <ul class="block-options"> -->
<!-- 					                                        <li> -->
<!-- 					                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button> -->
<!-- 					                                        </li> -->
<!-- 					                                    </ul> -->
					                                    <h3 class="block-title">Pie</h3>
					                                </div>
					                                <div class="block-content block-content-full">
					                                    <!-- Pie Chart Container -->
					                                    <div class="js-flot-pie" style="height: 330px;"></div>
					                                </div>
					                            </div>
					                            <!-- END Pie Chart -->
					                        </div>
<!-- 		                                    <table class="table table-striped table-borderless table-header-bg"> -->
<!-- 		                                        <thead> -->
<!-- 		                                            <tr> -->
<!--		                                                <th class="text-center" style="width: 50px;">No. Auditoría</th> -->
<!-- 		                                                <th>Numero de Observaciones</th> -->
<!-- 		                                            </tr> -->
<!-- 		                                        </thead> -->
<!-- 		                                        <tbody> -->
<!-- 		                                            <tr> -->
<!-- 		                                                <td class="text-center">01/15</td> -->
<!-- 		                                                <td class="text-center">2</td> -->
<!-- 		                                            </tr> -->
<!-- 		                                            <tr> -->
<!-- 		                                                <td class="text-center">02/15</td> -->
<!-- 		                                                <td class="text-center">1</td> -->
<!-- 		                                            </tr> -->
<!-- 		                                            <tr> -->
<!-- 		                                                <td class="text-center">03/15</td> -->
<!-- 		                                                <td class="text-center">1</td> -->
<!-- 		                                            </tr> -->
<!-- 		                                            <tr> -->
<!-- 		                                                <td class="text-center">01/15</td> -->
<!-- 		                                                <td class="text-center">1</td> -->
<!-- 		                                            </tr> -->
<!-- 		                                        </tbody> -->
<!-- 		                                    </table> -->
		                                </div>
		                            </div>
		                            <!-- END Header BG Table -->
		                        </div>
                            </div>
                            
                            
                            
                            
                            
                            <div class="block">
								<div class="col-lg-3">
		                            <!-- Header BG Table -->
		                            <div class="block">
		                                <div class="block-header">
		                                	&nbsp;
		                                </div>
		                                <div class="block-content">
		                                    <table class="table table-striped table-borderless table-header-bg">
		                                        <thead>
		                                            <tr>
		                                                <th class="text-center" style="width: 50px;">No. Auditoría</th>
		                                                <th>Numero de Observaciones</th>
		                                            </tr>
		                                        </thead>
		                                        <tbody>
		                                            <tr>
		                                                <td class="text-center">01/15</td>
		                                                <td class="text-center">2</td>
		                                            </tr>
		                                            <tr>
		                                                <td class="text-center">02/15</td>
		                                                <td class="text-center">1</td>
		                                            </tr>
		                                            <tr>
		                                                <td class="text-center">03/15</td>
		                                                <td class="text-center">1</td>
		                                            </tr>
		                                            <tr>
		                                                <td class="text-center">01/15</td>
		                                                <td class="text-center">1</td>
		                                            </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                            </div>
		                            <!-- END Header BG Table -->
		                        </div>
		                        <div class="col-lg-9">
		                            <!-- Header BG Table -->
		                            <div class="block">
		                                <div class="block-header">
		                                	&nbsp;
		                                </div>
		                                <div class="block-content">
		                                
		                                	<div class="col-lg-6">
					                            <!-- Bars Chart -->
					                            <div class="block">
					                                <div class="block-header">
					                                    <h3 class="block-title">Número de observaciones por auditoría</h3>
					                                </div>
					                                    <!-- Bars Chart Container -->
					                                    <div style="height: 330px;"><canvas class="js-chartjs-bars"></canvas></div>
					                            </div>
					                            <!-- END Bars Chart -->
					                        </div>
					                        
					                        <div class="col-lg-6">
					                            <!-- Pie Chart -->
					                            <div class="block">
					                                <div class="block-header">
					                                    <h3 class="block-title">Pie</h3>
					                                </div>
					                                <div class="block-content block-content-full">
					                                    <!-- Pie Chart Container -->
					                                    <div class="js-flot-pie" style="height: 330px;"></div>
					                                </div>
					                            </div>
					                            <!-- END Pie Chart -->
					                        </div>
		                                </div>
		                            </div>
		                            <!-- END Header BG Table -->
		                        </div>
                            </div>
                            
                            
                            <!-- Settings -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-2 col-lg-2 col-lg-offset-3">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-list fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Ordenar</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="m1_0_0_form_pat_agregar.php">
                                            <div class="block-content block-content-full">
                                                <i class="si si-doc fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Agregar Revisión</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Settings -->
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

        <!-- Small Modal -->
        <div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Comentarios</h3>
                        </div>
                        <div class="block-content">
                            <!-- Single Chat (Chat Window 3) -->
                            <div class="block">
                                <div class="block">
                                    <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                                        <div class="block-content block-content-full bg-black-op text-center">
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar9.jpg" alt="">
                                            </div>
                                            <h3 class="h4"><span class="text-white">Coordinador</span></h3>
                                        </div>
                                    </div>
                                    <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                        <!-- Messages -->
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                        </div>
                                        <div class="font-s12 text-muted text-center push-20-t push-10"><em>Hoy</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-r">
                                            <div class="block-content block-content-full block-content-mini bg-gray-light">Todo OK</div>
                                        </div>
                                        <!-- END Messages -->
                                    </div>
                                    <div class="js-chat-form block-content block-content-full block-content-mini">
                                        <form action="m1_0_0_form_pat_completo.php" method="post">
                                            <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END Single Chat (Chat Window 3) -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Small Modal -->

        <!-- Small Modal -->
        <div class="modal" id="modal-small2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Comentarios</h3>
                        </div>
                        <div class="block-content">
                            <!-- Single Chat (Chat Window 3) -->
                            <div class="block">
                                <div class="block">
                                    <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                                        <div class="block-content block-content-full bg-black-op text-center">
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar9.jpg" alt="">
                                            </div>
                                            <h3 class="h4"><span class="text-white">Titular</span></h3>
                                        </div>
                                    </div>
                                    <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                        <!-- Messages -->
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                        </div>
                                        <!-- END Messages -->
                                    </div>
                                    <div class="js-chat-form block-content block-content-full block-content-mini">
                                        <form action="m1_0_0_form_pat_completo.php" method="post">
                                            <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END Single Chat (Chat Window 3) -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Small Modal -->

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

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_forms_wizard.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_forms_validation.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
        <script src="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_ui_chat.js"></script>
        
        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_comp_charts_3.js"></script>
        
        <script>
            jQuery(function () {
                // Init page helpers (Easy Pie Chart plugin)
                App.initHelpers('easy-pie-chart');
            });
        </script>
    </body>
</html>