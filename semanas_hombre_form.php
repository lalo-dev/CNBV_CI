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
                                Agregar documento <small>AAI</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Normativa</li>
                                <li><a class="link-effect" href="m7_1_normativa_aai.php">AAI</a></li>
                                <li>Agregar documento</li>
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
                                <a href="#search-escolaridad">Lista usuarios</a>
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
                            <!-- Escolaridad -->
                            <div class="tab-pane fade fade-up in active" id="search-escolaridad">
                                <!-- Agregar -->
                                <div class="block block-themed">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <!--
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                            -->
                                        </ul>
                                        <h3 class="block-title">Agregar valores</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">
                                            <div class="form-group">
                                            	<div class="col-md-8 col-md-offset-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="usuario" name="usuario">
                                                            <option></option>
                                                            <option value="1">RONALDO JESÚS PRECIADO RUBIO</option>
                                                            <option value="2">EVANGELINA FIGUEROA COLIN</option>
                                                            <option value="3">GUILLERMO SOLIS CRUZ</option>
                                                            <option value="4">MONICA ORTEGA ALEGRIA/ JUAN MANUEL GUERRERO VAZQUEZ</option>
                                                            <option value="5">JESUS EDUARDO CAMACHO SAN ROMAN (VACANTE)</option>
                                                            <option value="6">JULIO CESAR DE LEÓN GONZÁLEZ</option>
                                                            <option value="7">SARA VALENCIA SALCEDO</option>
                                                            <option value="8">ADRIÁN SÁNCHEZ MONTALVO</option>
                                                            <option value="9">VICTOR MANZANERA MIRANDA</option>
                                                            <option value="10">BARBARA O. TERCERO ORTIZ</option>
                                                            <option value="11">PATRICIA RIVERA DÍAZ</option>
                                                            <option value="12">SUSANA CAROLINA LOPEZ GUZMAN</option>
                                                            <option value="13">MA. DEL ROCIO CABRERA</option>
                                                            <option value="14">RICARDO PELAEZ URANGA</option>
                                                            <option value="15">CLAUDIA PIFERRER CRUZ</option>
                                                            <option value="16">JOSÉ ANTONIO ORTIZ MORENO</option>
                                                            <option value="17">JESUS TORRES RAMIREZ</option>
                                                            <option value="18">ILEANA CRAVIOTO MORENO</option>
                                                            <option value="19">CINTHIA ESTRADA ROMERO</option>
                                                            <option value="19">.....</option>
                                                        </select>
                                                        <label for="usuario">Usuario</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="block">
				                                <div class="block-content block-content-narrow">
				                                    <form class="form-horizontal">
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">AUDITORIA</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">SEGUIMIENTO</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">MEJORA DE LA GESTION</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">TRANSFERENCIA, INTEGRIDAD Y PARTICIPACION CIUDADANA</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">QUEJAS Y DENUNCIAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">RESPONSABILIDADES</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">CONTROVERSIAS Y SANCIONES EN CONTRATACIONES PÚBLICAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">ACTIVIDADES QUE NO REÚNEN LOS REQUISITOS DE UNA AUDITORÍA</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">PLANEACION, DIRECCÓN Y SUPERVISIÓN</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">INFORMES A LA SFP Y OTRAS INSTANCIAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">COMITÉS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">JUNTAS Y CONSEJOS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">ACTIVIDADES ADMINISTRATIVAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">CAPACITACIÓN</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">PLAZAS VACANTES</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="example-hf-email">VACACIONES E INCAPACIDADES DEL PERSONAL</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" id="example-hf-email" name="example-hf-email">
				                                            </div>
				                                        </div>
			                                            <div class="form-group">
			                                            	&nbsp;
			                                            </div>
			                                            <div class="form-group">
			                                                <div class="col-md-3">
			                                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
			                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
			                                                </div>
			                                            </div>
				                                    </form>
				                                </div>
				                            </div>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                            </div>
                            <!-- End Escolaridad -->
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
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
    </body>
</html>