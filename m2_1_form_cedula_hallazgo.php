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
                        Detalle<small> Cedula de hallazgos</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Ejecuci&oacute;n</li>
                        <li><a href="m2_2_cedula_hallazgos">Cedula de hallazgos</a></li>
						<li>Detalle</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                    <li class="active">
                        <a href="#info">Info</a>
                    </li>
                    <li>
                        <a href="#captura">Captura</a>
                    </li>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Info -->
                    <div class="tab-pane fade fade-up in active" id="info">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="block block-themed">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Estatus</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-0 fa-2x text-success"></i>
                                                    <div class="font-w600 push-8-t">En desarrollo</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-1 fa-2x text-muted"></i>
                                                    <div class="font-w600 push-8-t">Enviado a revisión</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-2 fa-2x text-muted"></i>
                                                    <div class="font-w600 push-8-t">En revisión</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-4 fa-2x text-muted"></i>
                                                    <div class="font-w600 push-8-t">Validado</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="block block-themed">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Comentarios</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="js-chat-container content content-narrow" data-chat-mode="fixed" data-chat-height="300">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- Single Chat (Chat Window 3) -->
                                                    <div class="block">
                                                        <div class="block">
                                                            <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                                                <!-- Messages -->
                                                                <div class="font-s12 text-muted text-center push-20-t push-15"><em>Yesterday</em></div>
                                                                <div class="block block-rounded block-transparent push-15 push-50-l">
                                                                    <div class="block-content block-content-full block-content-mini bg-gray-lighter">Hi there!</div>
                                                                </div>
                                                                <div class="font-s12 text-muted text-center push-20-t push-10"><em>Today</em></div>
                                                                <div class="block block-rounded block-transparent push-15 push-50-r">
                                                                    <div class="block-content block-content-full block-content-mini bg-gray-light">Hi!!!</div>
                                                                </div>
                                                                <!-- END Messages -->
                                                            </div>
                                                            <div class="js-chat-form block-content block-content-full block-content-mini">
                                                                <form action="base_ui_chat.html" method="post">
                                                                    <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END Single Chat (Chat Window 3) -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="block block-themed">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Opciones</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="row">
                                            <div class="col-lg-4 col-lg-offset-2">
                                                <a class="block block-link-hover2" href="javascript:void(0)">
                                                    <div class="block-content block-content-full bg-flat clearfix">
                                                        <i class="si si-eye fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Cédula </span>
                                                        <span class="h4 text-white-op">de Hallazgos</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                    <div class="block-content block-content-full bg-primary clearfix">
                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Cédula </span>
                                                        <span class="h4 text-white-op">de Hallazgos</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Info -->
                    <!-- Inicia Area A -->
                    <div class="tab-pane fade fade-up" id="captura">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Captura</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox"><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox"><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <!-- Simple Classic Progress Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
                            <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                            <div class="js-wizard-simple block">
                                <!-- Step Tabs -->
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a href="#simple-classic-progress-step1" data-toggle="tab" aria-expanded="true">1. Titulo</a>
                                    </li>
                                    <li class="">
                                        <a href="#simple-classic-progress-step2" data-toggle="tab" aria-expanded="false">2. Cuerpo</a>
                                    </li>
                                    <li>
                                        <a href="#simple-classic-progress-step3" data-toggle="tab">3. Firmas</a>
                                    </li>
                                    <li>
                                        <a href="#simple-classic-progress-step4" data-toggle="tab">4. Enlace</a>
                                    </li>
                                </ul>
                                <!-- END Step Tabs -->

                                <!-- Form -->
                                <form class="form-horizontal" action="#" method="post">
                                    <!-- Steps Progress -->
                                    <div class="block-content block-content-mini block-content-full border-b">
                                        <div class="wizard-progress progress progress-mini remove-margin-b">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 33.3333%;"></div>
                                        </div>
                                    </div>
                                    <!-- END Steps Progress -->

                                    <!-- Steps Content -->
                                    <div class="block-content tab-content">
                                        <!-- Step 1 -->
                                        <div class="tab-pane fade fade-up push-25-t push-50 active in" id="simple-classic-progress-step1">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="simple-classic-progress-firstname">Titulo</label>
                                                    <input class="form-control" type="text" id="titulo" name="titulo">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Step 1 -->

                                        <!-- Step 2 -->
                                        <div class="tab-pane fade fade-up push-30-t push-50" id="simple-classic-progress-step2">
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <label for="cuerpo">Cuerpo</label>
                                                    <select class="form-control" id="cuerpo" name="cuerpo" size="1">
                                                        <option value="">-----</option>
                                                        <option value="1">Texto</option>
                                                        <option value="2">Tabla</option>
                                                        <option value="3">Imagenes</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="push-15">Texto</h4><p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante..</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>A</th>
                                                            <th>B</th>
                                                            <th>C</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>Adam Hall</td>
                                                            <td class="hidden-xs">
                                                                <span class="label label-danger">Disabled</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Vincent Sims</td>
                                                            <td class="hidden-xs">
                                                                <span class="label label-primary">Personal</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">3</td>
                                                            <td>Laura Bell</td>
                                                            <td class="hidden-xs">
                                                                <span class="label label-danger">Disabled</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="img-container fx-img-rotate-r">
                                                        <img class="img-responsive" src="assets/img/photos/photo5.jpg" alt="">
                                                        <div class="img-options">
                                                            <div class="img-options-content">
                                                                <h3 class="font-w400 text-white push-5">Imagenes</h3>
                                                                <h4 class="h6 font-w400 text-white-op push-15">Información</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane fade fade-up push-30-t push-50" id="simple-classic-progress-step3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nombres">Firmas</label>
                                                    <select class="form-control" id="nombres" name="nombres" size="1">
                                                        <option value=""> ------- </option>
                                                        <option value="1">Name 1</option>
                                                        <option value="2">Name 2</option>
                                                        <option value="3">Name 3</option>
                                                        <option value="4">Name 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>NOMBRE</th>
                                                        <th>ELIMINAR</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Said Alarcon</td>
                                                        <td class="hidden-xs">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-minus"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Delfino Ruiz Sal.</td>
                                                        <td class="hidden-xs">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-minus"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>Eduardo Martinez</td>
                                                        <td class="hidden-xs">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-minus"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Step 3 -->

                                        <!-- Step 4 -->
                                        <div class="tab-pane fade fade-up push-30-t push-50" id="simple-classic-progress-step4">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="form-group">
                                                    <label for="nombres">Enlace</label>
                                                    <select class="form-control" id="enlace" name="enlace" size="1">
                                                        <option value=""> ------- </option>
                                                        <option value="1">Name 1</option>
                                                        <option value="2">Name 2</option>
                                                        <option value="3">Name 3</option>
                                                        <option value="4">Name 4</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- END Step 4 -->
                                    </div>
                                    <!-- END Steps Content -->

                                    <!-- Steps Navigation -->
                                    <div class="block-content block-content-mini block-content-full border-t">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="wizard-prev btn btn-default disabled" type="button"><i class="fa fa-arrow-left"></i> Atras</button>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <button class="wizard-next btn btn-default" type="button">Siguiente <i class="fa fa-arrow-right"></i></button>
                                                <button class="wizard-finish btn btn-default" type="button" style="display: none;"> Cancelar</button>
                                                <button class="wizard-finish btn btn-primary" type="button" style="display: none;"><i class="fa fa-check"></i> Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Steps Navigation -->
                                </form>
                                <!-- END Form -->
                            </div>
                            <!-- END Simple Classic Progress Wizard -->
                        </div>
                    </div>
                    <!-- End A -->

                        <!-- Validaciones -->
                    <div class="tab-pane fade fade-up" id="search-validaciones">
                        <div class="border-b push-30">
                            <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Validaciones encontrados</span></h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="No. Revisión">#</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Tipo de revisión">Tipo</th>
                                    <th class="text-left" data-toggle="tooltip" data-placement="top" title="Programada / Adicional">P/A</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Clave Programa">Clave</th>
                                    <th class="text-center">Instancia</th>
                                    <th class="text-left">Justificación</th>
                                    <th class="text-left" data-toggle="tooltip" data-placement="top" title="Área a Revisar">Área</th>
                                    <th class="text-left">Descripción</th>
                                    <th class="text-left">Objetivo</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Semana Programada de Inicio">S.P.I.</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Semanan Programada de Término">S.P.T.</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Total Semanas Revisión">T.S.R.</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Total Semanas Hombre">T.S.H.</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Periodo de Revisión Inicio">P.R.I.</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Periodo de Revisión Fin">P.R.F.</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Auditoria Procedente">A.P.</th>
                                    <th class="text-center">Muestra</th>
                                    <th class="text-center">Universo</th>
                                    <th class="text-left">Riesgos</th>
                                    <th class="text-left">Cuadrante</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Revisado">R</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Validado">V</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="Comentarios">C</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="info">
                                    <td class="text-center">1</td>
                                    <td class="text-center">Auditoria</td>
                                    <td class="text-center">P</td>
                                    <td class="text-center">700</td>
                                    <td class="text-center">OIC</td>
                                    <td class="text-left">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                    <td class="text-left">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</td>
                                    <td class="text-left">
                                        Evaluar que el control interno establecido en las áreas sustantivas de la CNBV respecto a los procesos de la supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión ; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, se haya efectuado de conformidad con el marco legal aplicable y que los resultados hayan sido debidamente informados.
                                    </td>
                                    <td class="text-left">
                                        Verificar el cumplimiento de los procesos de supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, conforme al marco legal aplicable y que los resultados hayan sido informados.
                                    </td>
                                    <td>1</td>
                                    <td>26</td>
                                    <td>26</td>
                                    <td>193</td>
                                    <td>01/01/2013</td>
                                    <td>31/12/2013</td>
                                    <td>0/0</td>
                                    <td>Se determinará en la auditoría.</td>
                                    <td>100%</td>
                                    <td>
                                        <p>1.2 Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</p>
                                        <p>1.3 Autorizaciones otorgadas en forma deficiente.</p>
                                    </td>
                                    <td class="text-center">
                                        <p>1</p>
                                        <p>1</p>
                                    </td>
                                    <td class="text-center">
                                        <label class="css-input switch switch-primary">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="css-input switch switch-primary">
                                            <input type="checkbox" checked><span></span>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-small">
                                            <i class="fa fa-commenting-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">Auditoria</td>
                                    <td class="text-center">P</td>
                                    <td class="text-center">700</td>
                                    <td class="text-center">OIC</td>
                                    <td class="text-left">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                    <td class="text-left">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</td>
                                    <td class="text-left">
                                        Evaluar que el control interno establecido en las áreas sustantivas de la CNBV respecto a los procesos de la supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión ; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, se haya efectuado de conformidad con el marco legal aplicable y que los resultados hayan sido debidamente informados.
                                    </td>
                                    <td class="text-left">
                                        Verificar el cumplimiento de los procesos de supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, conforme al marco legal aplicable y que los resultados hayan sido informados.
                                    </td>
                                    <td>1</td>
                                    <td>26</td>
                                    <td>26</td>
                                    <td>193</td>
                                    <td>01/01/2013</td>
                                    <td>31/12/2013</td>
                                    <td>0/0</td>
                                    <td>Se determinará en la auditoría.</td>
                                    <td>100%</td>
                                    <td>
                                        <p>1.2 Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</p>
                                        <p>1.3 Autorizaciones otorgadas en forma deficiente.</p>
                                    </td>
                                    <td class="text-center">
                                        <p>1</p>
                                        <p>1</p>
                                    </td>
                                    <td class="text-center">
                                        <label class="css-input switch switch-primary">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <label class="css-input switch switch-primary">
                                            <input type="checkbox" checked><span></span>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-sm">
                                            <i class="fa fa-commenting-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- END Revisiones -->
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
    App.initHelper('table-tools');
</script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_ui_chat.js"></script>
</body>
</html>