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
                        Detalle<small> Cedula trabajo</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Ejecuci&oacute;n</li>
                        <li><a href="m2_2_cedula_trabajo">Cedula de trabajo</a></li>
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
                        <a href="#a">A</a>
                    </li>
                    <li>
                        <a href="#b">B</a>
                    </li>
                    <li>
                        <a href="#c">C</a>
                    </li>
                    <li>
                        <a href="#d">D</a>
                    </li>
                    <li>
                        <a href="#e">E</a>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Info -->
                    <div class="tab-pane fade fade-up in active" id="info">
                        <div class="block"> <!-- INICIA SEGUNDO BLOCK-->
                            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                <li class="active">
                                    <a href="#aa">A</a>
                                </li>
                                <li>
                                    <a href="#bb">B</a>
                                </li>
                                <li>
                                    <a href="#cc">C</a>
                                </li>
                                <li>
                                    <a href="#dd">D</a>
                                </li>
                                <li>
                                    <a href="#ee">E</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content bg-white">
                                <!-- Inicia Area aa -->
                                <div class="tab-pane fade fade-up in active" id="aa">
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
			                                                        <span class="h4 text-white-op">de Trabajo</span>
			                                                    </div>
			                                                </a>
			                                            </div>
			                                            <div class="col-lg-4">
			                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
			                                                    <div class="block-content block-content-full bg-primary clearfix">
			                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
			                                                        <span class="h4 font-w700 text-white">Cédula</span>
			                                                        <span class="h4 text-white-op">de Trabajo</span>
			                                                    </div>
			                                                </a>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </div>
                                <!-- Inicia Area aa -->
                                <div class="tab-pane fade fade-up" id="bb">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-lg-offset-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h4 font-w700 text-white">Cedula</span>
                                                    <span class="h4 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h4 font-w700 text-white">Cedula</span>
                                                    <span class="h4 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End bb -->
                                <!-- Inicia Area cc -->
                                <div class="tab-pane fade fade-up" id="cc">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-lg-offset-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h4 font-w700 text-white">Cedula</span>
                                                    <span class="h4 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h4 font-w700 text-white">Cedula</span>
                                                    <span class="h4 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End cc -->


                                <!-- Inicia Area dd -->
                                <div class="tab-pane fade fade-up" id="dd">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Sumaria</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>D</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Analitica</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <H5>D-1</H5>
                                        </div>
                                        <div class="col-md-2">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Sub analitica</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>D-1/1</h5>
                                        </div>
                                        <div class="col-md-2">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-2">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End dd -->
                                <!-- Inicia Area ee -->
                                <div class="tab-pane fade fade-up" id="ee">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Sumari</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>E</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Analitica</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>E-1</h5>
                                        </div>
                                        <div class="col-md-2 col-md-offset-2">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Sub analitica</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>E-1/1</h5>
                                        </div>
                                        <div class="col-md-2 col-md-offset-4">
                                            <a class="block block-link-hover2" href="javascript:void(0)">
                                                <div class="block-content block-content-full bg-flat clearfix">
                                                    <i class="si si-eye fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                <div class="block-content block-content-full bg-primary clearfix">
                                                    <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                    <span class="h5 font-w700 text-white">Cedula</span>
                                                    <span class="h5 text-white-op">Trabajo</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End ee -->

                            </div>
                        </div><!--TERMINA SEGUNDO BLOCK -->
                    </div>
                    <!-- End Info -->
                    <!-- Inicia Area A -->
                    <div class="tab-pane fade fade-up" id="a">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> A</span></h2>
                        </div>
                    </div>
                    <!-- End A -->
                    <!-- Inicia Area B -->
                    <div class="tab-pane fade fade-up" id="b">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> B</span></h2>
                        </div>
                    </div>
                    <!-- End B -->
                    <!-- Inicia Area C -->
                    <div class="tab-pane fade fade-up" id="c">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> C</span></h2>
                        </div>
                    </div>
                    <!-- End C -->
                    <!-- Inicia Area D -->
                    <div class="tab-pane fade fade-up" id="d">
                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Cedula de trabajo</span></h2>
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
                        <div class="block-content">
                            <table class="js-table-sections table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 1%;"></th>
                                    <th style="width: 3%;">#</th>
                                    <th style="width: 3%;">#</th>
                                    <th style="width: 5%;">Cedula</th>
                                    <th style="width: 5%;">Word</th>
                                    <th style="width: 5%;">Adj.</th>
                                    <th style="width: 5%;">Avance</th>
                                    <th style="width: 30%;">Comentario</th>
                                    <th style="width: 5%;"> Acción </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">
                                        <i class="fa fa-angle-right"></i>
                                    </td>
                                    <td class="font-w600 text-center">1</td>
                                    <td class="font-w600 text-center">1</td>
                                    <td class="font-w600 text-center"><span class="label label-default">A-1</span></td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Descargar Word"><i class="fa fa-file-word-o"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">

                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Adjunar Doc."><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material floating open">
                                                    <select class="form-control" id="material-select2" name="material-select2" size="1">
                                                        <option>----</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">10%</option>
                                                        <option value="2">20%</option>
                                                        <option value="3">30%</option>
                                                        <option value="3">40%</option>
                                                        <option value="3">50%</option>
                                                        <option value="3">60%</option>
                                                        <option value="3">70%</option>
                                                        <option value="3">80%</option>
                                                        <option value="3">90%</option>
                                                        <option value="3">100%</option>
                                                    </select>
                                                    <label for="material-select2">Avance</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="material-textarea-small" name="material-textarea-small" rows="1"></textarea>
                                                    <label for="material-textarea-small">Comentario</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Eliminar">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                            <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                </tbody>
                                <tbody class="js-table-sections-header">
                                <tr>
                                    <td class="text-center">
                                        <i class="fa fa-angle-right"></i>
                                    </td>
                                    <td class="font-w600 text-center">2</td>
                                    <td class="font-w600 text-center">1</td>
                                    <td class="font-w600 text-center"><span class="label label-default">A-2</span></td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Descargar Word"><i class="fa fa-file-word-o"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Adjunar Doc."><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material floating open">
                                                    <select class="form-control" id="avanc2" name="avanc2" size="1">
                                                        <option>----</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">10%</option>
                                                        <option value="2">20%</option>
                                                        <option value="3">30%</option>
                                                        <option value="3">40%</option>
                                                        <option value="3">50%</option>
                                                        <option value="3">60%</option>
                                                        <option value="3">70%</option>
                                                        <option value="3">80%</option>
                                                        <option value="3">90%</option>
                                                        <option value="3">100%</option>
                                                    </select>
                                                    <label for="avanc2">Avance</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="comen2" name="comen2" rows="1"></textarea>
                                                    <label for="comen2">Comentario</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Eliminar">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                            <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"><small>2</small></td>
                                    <td class="text-center"><small><span class="label label-default">A-2/1</span></small></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Descargar Word"><i class="fa fa-file-word-o"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Adjunar Doc."><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material floating open">
                                                    <select class="form-control" id="avanc3" name="avanc3" size="1">
                                                        <option>----</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">10%</option>
                                                        <option value="2">20%</option>
                                                        <option value="3">30%</option>
                                                        <option value="3">40%</option>
                                                        <option value="3">50%</option>
                                                        <option value="3">60%</option>
                                                        <option value="3">70%</option>
                                                        <option value="3">80%</option>
                                                        <option value="3">90%</option>
                                                        <option value="3">100%</option>
                                                    </select>
                                                    <label for="avanc3"><small>Avance</small></label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="com3" name="com3" rows="1"></textarea>
                                                    <label for="com3"><small>Comentario</small></label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                    </div>
                    <!-- End D -->
                    <!-- Inicia Area E -->
                    <div class="tab-pane fade fade-up" id="e">
                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Cedula de trabajo</span></h2>
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
                        <div class="block-content">
                            <table class="js-table-sections table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 1%;"></th>
                                    <th style="width: 3%;">#</th>
                                    <th style="width: 3%;">#</th>
                                    <th style="width: 5%;">Cedula</th>
                                    <th style="width: 5%;">Word</th>
                                    <th style="width: 5%;">Adj.</th>
                                    <th style="width: 5%;">Avance</th>
                                    <th style="width: 30%;">Comentario</th>
                                    <th style="width: 5%;"> Acción </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">
                                        <i class="fa fa-angle-right"></i>
                                    </td>
                                    <td class="font-w600 text-center">1</td>
                                    <td class="font-w600 text-center">1</td>
                                    <td class="font-w600 text-center"><span class="label label-default">A-1</span></td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Descargar Word"><i class="fa fa-file-word-o"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">

                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Adjunar Doc."><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material floating open">
                                                    <select class="form-control" id="material-select2" name="material-select2" size="1">
                                                        <option>----</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">10%</option>
                                                        <option value="2">20%</option>
                                                        <option value="3">30%</option>
                                                        <option value="3">40%</option>
                                                        <option value="3">50%</option>
                                                        <option value="3">60%</option>
                                                        <option value="3">70%</option>
                                                        <option value="3">80%</option>
                                                        <option value="3">90%</option>
                                                        <option value="3">100%</option>
                                                    </select>
                                                    <label for="material-select2">Avance</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="material-textarea-small" name="material-textarea-small" rows="1"></textarea>
                                                    <label for="material-textarea-small">Comentario</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Eliminar">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                            <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                </tbody>
                                <tbody class="js-table-sections-header">
                                <tr>
                                    <td class="text-center">
                                        <i class="fa fa-angle-right"></i>
                                    </td>
                                    <td class="font-w600 text-center">2</td>
                                    <td class="font-w600 text-center">1</td>
                                    <td class="font-w600 text-center"><span class="label label-default">A-2</span></td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Descargar Word"><i class="fa fa-file-word-o"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Adjunar Doc."><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material floating open">
                                                    <select class="form-control" id="avanc2" name="avanc2" size="1">
                                                        <option>----</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">10%</option>
                                                        <option value="2">20%</option>
                                                        <option value="3">30%</option>
                                                        <option value="3">40%</option>
                                                        <option value="3">50%</option>
                                                        <option value="3">60%</option>
                                                        <option value="3">70%</option>
                                                        <option value="3">80%</option>
                                                        <option value="3">90%</option>
                                                        <option value="3">100%</option>
                                                    </select>
                                                    <label for="avanc2">Avance</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="comen2" name="comen2" rows="1"></textarea>
                                                    <label for="comen2">Comentario</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Eliminar">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                            <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"><small>2</small></td>
                                    <td class="text-center"><small><span class="label label-default">A-2/1</span></small></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Descargar Word"><i class="fa fa-file-word-o"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title="Adjunar Doc."><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material floating open">
                                                    <select class="form-control" id="avanc3" name="avanc3" size="1">
                                                        <option>----</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">10%</option>
                                                        <option value="2">20%</option>
                                                        <option value="3">30%</option>
                                                        <option value="3">40%</option>
                                                        <option value="3">50%</option>
                                                        <option value="3">60%</option>
                                                        <option value="3">70%</option>
                                                        <option value="3">80%</option>
                                                        <option value="3">90%</option>
                                                        <option value="3">100%</option>
                                                    </select>
                                                    <label for="avanc3"><small>Avance</small></label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-w600 text-center">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="com3" name="com3" rows="1"></textarea>
                                                    <label for="com3"><small>Comentario</small></label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                    </div>
                    <!-- End E -->

                    <!-- Area auditada 2 -->
                    <div class="tab-pane fade fade-up" id="area-auditada2">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> &Aacute;rea auditada2</span></h2>
                        </div>
                    </div>
                    <!-- END Area 2 -->
                    <!-- Area auditada 3 -->
                    <div class="tab-pane fade fade-up" id="area-auditada3">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> &Aacute;rea auditada3</span></h2>
                        </div>
                    </div>
                    <!-- END Area 3 -->
                    <!-- Area auditada 4 -->
                    <div class="tab-pane fade fade-up" id="area-auditada4">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> &Aacute;rea auditada4</span></h2>
                        </div>
                    </div>
                    <!-- END Area 4 -->

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