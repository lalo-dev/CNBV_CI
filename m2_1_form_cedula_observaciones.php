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
                        Detalle<small> C&eacute;dula de observaciones</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Ejecuci&oacute;n</li>
                        <li><a href="m2_2_cedula_observaciones">C&eacute;dula de observaciones</a></li>
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
                    <li class="pull-right">
                        <a href="#" title="" data-original-title="Opciones">
                            <i class="si si-settings"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <a href="#" title="" data-original-title="Opciones">
                            <i class="fa fa-minus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#g">G</a>
                    </li>
                    <li>
                        <a href="#observaci">Observación 1</a>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Info -->
                    <div class="tab-pane fade fade-up in active" id="info">
                        <!-- Inicia Segundo tab-->
                        <div class="block">
                            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                <li class="active">
                                    <a href="#dir-g1">Dirección general 1</a>
                                </li>
                                <li>
                                    <a href="#dir-g2">Dirección general 2</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content bg-white">
                                <!-- dir-g1 -->
                                <div class="tab-pane fade fade-up in active" id="dir-g1">
                                    <!-- Inicia 3er tab-->
                                    <div class="block">
                                        <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                            <li class="active">
                                                <a href="#obser1">Observación 1</a>
                                            </li>
                                            <li>
                                                <a href="#obser2">Observación 2</a>
                                            </li>
                                            <li>
                                                <a href="#obser3">Observación 3</a>
                                            </li>
                                        </ul>
                                        <div class="block-content tab-content bg-white">
                                            <!-- inicia obser1 -->
                                            <div class="tab-pane fade fade-up in active" id="obser1">
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
						                                                        <span class="h4 font-w700 text-white">Cédula</span>
						                                                        <span class="h4 text-white-op">Observaciones</span>
						                                                    </div>
						                                                </a>
						                                            </div>
						                                            <div class="col-lg-4">
						                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
						                                                    <div class="block-content block-content-full bg-primary clearfix">
						                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
						                                                        <span class="h4 font-w700 text-white">Cédula</span>
						                                                        <span class="h4 text-white-op">Observaciones</span>
						                                                    </div>
						                                                </a>
						                                            </div>
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
						                        </div>
                                            </div>
                                            <!-- termina obser1 -->
                                            <!-- Inicia dir-g2 -->
                                            <div class="tab-pane fade fade-up" id="obser2">
                                                <div class="border-b push-30">
                                                    <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-lg-offset-2">
                                                        <a class="block block-link-hover2" href="javascript:void(0)">
                                                            <div class="block-content block-content-full bg-flat clearfix">
                                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                                <span class="h4 font-w700 text-white">Cédula</span>
                                                                <span class="h4 text-white-op">Observación</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                            <div class="block-content block-content-full bg-primary clearfix">
                                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                                <span class="h4 font-w700 text-white">Cédula</span>
                                                                <span class="h4 text-white-op">Observación</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- termina obser2 -->
                                            <!-- Inicia dir-g3 -->
                                            <div class="tab-pane fade fade-up" id="obser3">
                                                <div class="border-b push-30">
                                                    <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-lg-offset-2">
                                                        <a class="block block-link-hover2" href="javascript:void(0)">
                                                            <div class="block-content block-content-full bg-flat clearfix">
                                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                                <span class="h4 font-w700 text-white">Cédula</span>
                                                                <span class="h4 text-white-op">Observación</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                            <div class="block-content block-content-full bg-primary clearfix">
                                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                                <span class="h4 font-w700 text-white">Cédula</span>
                                                                <span class="h4 text-white-op">Observación</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- termina obser3 -->
                                        </div>
                                    </div>
                                    <!-- Termina 3er tab -->
                                </div>
                                <!-- End dir-g1 -->
                                <!-- Inicia dir-g2 -->
                                <div class="tab-pane fade fade-up" id="dir-g2">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-lg-offset-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h4 font-w700 text-white">Cédula</span>
                                                    <span class="h4 text-white-op">Observación</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h4 font-w700 text-white">Cédula</span>
                                                    <span class="h4 text-white-op">Observación</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End dir-g2 -->
                            </div>
                        </div>
                        <!-- Termina Segundo tab-->
                    </div>
                    <!-- End Info -->
                    <!-- Inicia Area G -->
                    <div class="tab-pane fade fade-up" id="g">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> G</span></h2>
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
                        <div class="row">
                            <div class="col-md-3 col-md-offset-1">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="mfiscal" name="mfiscal">
                                    <label for="mfiscal">Monto fiscalizable</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="maclarar" name="maclarar">
                                    <label for="maclarar">Monto por aclarar</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="mrecuperar" name="mrecuperar">
                                    <label for="mrecuperar">Monto por recuperar</label>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-material floating">
                                    <select class="form-control" id="riesgo" name="riesgo" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Alto</option>
                                        <option value="2">Medio</option>
                                        <option value="2">Bajo</option>
                                    </select>
                                    <label for="riesgo">Riesgo</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-material floating">
                                    <select class="form-control" id="clasific" name="clasific" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Clasif 1</option>
                                        <option value="2">Clasif 2</option>
                                        <option value="2">Clasif 3</option>
                                    </select>
                                    <label for="clasific">Clasificación</label>
                                </div>
                            </div>
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="OID">
                                    <input type="checkbox"><span></span> OID
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-primary" title="PV">
                                    <input type="checkbox"><span></span> PV
                                </label>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-material floating">
                                    <select class="form-control" id="sector" name="sector" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Sector 1</option>
                                        <option value="2">Sector 2</option>
                                        <option value="2">Sector 3</option>
                                    </select>
                                    <label for="riesgo">Sector</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-material floating">
                                    <select class="form-control" id="clave" name="clave" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Clave 1</option>
                                        <option value="2">Clave 2</option>
                                        <option value="2">Clave 3</option>
                                    </select>
                                    <label for="clasific">Clave</label>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-material floating">
                                    <select class="form-control" id="hallazgo" name="hallazgo" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Hallazgo 1</option>
                                        <option value="2">Hallazgo 2</option>
                                        <option value="2">Hallazgo 3</option>
                                    </select>
                                    <label for="hallazgo">Hallazgo</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <button class="btn btn-sm btn-primary" type="button">Guardar</button>
                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                        </div>
                        <br><br><br>
                    </div>
                    <!-- End G -->
                    <!-- Inicia Area Observaciones -->
                    <div class="tab-pane fade fade-up" id="observaci">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Titulo de la observación 1</span></h2>
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
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="cuerpo" name="cuerpo" rows="2"></textarea>
                                    <label for="cuerpo">Cuerpo</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="fun-legal" name="fun-legal">
                                    <label for="fun-legal">Fundamento legal</label>
                                </div>
                            </div>

                        </div><br>
                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Recomendaciones</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <table class="table table-borderless">
                                    <thead>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">Correctivas</td>
                                        <td><input class="form-control" type="text" id="correctivas" name="correctivas"></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success" type="button">Agregar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td><input class="form-control" type="text" id="correctivas1" name="correctivas1"></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td><input class="form-control" type="text" id="correctivas2" name="correctivas2"></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Preventivas</td>
                                        <td><input class="form-control" type="text" id="preventivas" name="preventivas"></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success" type="button">Agregar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td><input class="form-control" type="text" id="preventivas1" name="preventivas1"></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td><input class="form-control" type="text" id="correctivas1" name="correctivas2"></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="ffirma" name="ffirma">
                                    <label for="ffirma">Fecha firma</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-material floating">
                                    <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="fcompromiso" name="fcompromiso">
                                    <label for="fcompromiso">Fecha compromiso</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <button class="btn btn-sm btn-primary" type="button">Guardar</button>
                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                        </div>
                        <br><br><br>
                    </div>
                    <!-- End Observacion -->
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

<!-- Page JS Code -->
<script src="assets/js/pages/base_ui_chat.js"></script>

</body>
</html>