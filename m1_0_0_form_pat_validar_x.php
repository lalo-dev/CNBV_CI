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
                                            <a href="estadisticas_semanal.php">Auditorías ?</a>
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
                                Validar revisión <small>PAT 2016</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li><a class="link-effect" href="m1_0_pat_completo.php">PAT Completo</a></li>
                                <li><a class="link-effect" href="m1_0_0_form_pat_completo.php">PAT 2016</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Material Forms Validation -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-material form-horizontal push-10-t" action="#" method="post">
                                        <div class="form-group">
                                            <table class="table table-striped table-vcenter table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="text-left">Sección</th>
                                                        <th class="text-left">Contenido</th>
                                                        <th class="text-left">Comentarios</th>
                                                        <th class="text-center">Validado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>No. Revisión</td>
                                                        <td class="text-center">
                                                            <span>1</span>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td class="text-center">
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Tipo revisión</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option value="pr" selected>Auditoria</option>
                                                                <option value="ad">Seguimiento</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="col-xs-6">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Prog / Adic</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option value="pr" selected>Programada</option>
                                                                <option value="ad">Adicional</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="col-xs-6">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Clave</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option value="100">100</option>
                                                                <option value="200">200</option>
                                                                <option value="300">300</option>
                                                                <option value="400">400</option>
                                                                <option value="500" selected>500</option>
                                                                <option value="600">600</option>
                                                                <option value="700">700</option>
                                                                <option value="800">800</option>
                                                                <option value="900">900</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="col-xs-6">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Instancia</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option value="oic" selected>OIC</option>
                                                                <option value="otro">Otro</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="col-xs-6">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                                <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Material Forms Validation -->
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