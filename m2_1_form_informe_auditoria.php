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
                        Detalle<small> Informe de auditoría</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Cierre</li>
                        <li><a href="m2_2_cierre_informe_auditoria">Informe de auditoría</a></li>
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
                        <a href="#search-info">Info</a>
                    </li>
                    <li>
                        <a href="#informe">Informe</a>
                    </li>
                    <li>
                        <a href="#antecedentes">Antecedentes</a>
                    </li>
                    <li>
                        <a href="#mapa-riesgos">Mapa de riesgos</a>
                    </li>
                    <li>
                        <a href="#objet">Objeto</a>
                    </li>
                    <li>
                        <a href="#resultados">Resultados</a>
                    </li>
                    <li>
                        <a href="#trabajos-realizados">Trabajos realizados</a>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Info -->
                    <div class="tab-pane fade fade-up in active" id="search-info">
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
                                                        <span class="h4 font-w700 text-white">Requerimiento </span>
                                                        <span class="h4 text-white-op">Información 1</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                    <div class="block-content block-content-full bg-primary clearfix">
                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Requerimiento </span>
                                                        <span class="h4 text-white-op">Información 1</span>
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
                    <!-- Area Informe -->
                    <div class="tab-pane fade fade-up" id="informe">
                        <form class="form-horizontal push-10-t" onsubmit="return false;">
                            <div class="form-group">
                                <div class="col-md-12">
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
                                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                                <div class="col-md-3">
                                    <div class="form-material floating">
                                        <!--<input class="js-datepicker form-control" type="text" id="hinicio" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">-->
                                        <input class="js-datepicker form-control" type="text" id="fecha">
                                        <label for="fecha">Fecha</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-material floating open">
                                        <select class="form-control" id="clasifica" name="clasifica" size="1">
                                            <option>&nbsp;</option>
                                            <option value="1">Clasifica #1</option>
                                            <option value="2">Clasifica #2</option>
                                            <option value="3">Clasifica #3</option>
                                        </select>
                                        <label for="clasifica">Clasifica</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-material floating open">
                                        <select class="form-control" id="per-reserva" name="per-reserva" size="1">
                                            <option>&nbsp;</option>
                                            <option value="1">Periodo reserva #1</option>
                                            <option value="2">Periodo reserva #2</option>
                                            <option value="3">Periodo reserva #3</option>
                                        </select>
                                        <label for="per-reserva">Periodo reserva</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-material floating">
                                        <!--<input class="js-datepicker form-control" type="text" id="hinicio" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">-->
                                        <input class="js-datepicker form-control" type="text" id="f-creacion">
                                        <label for="f-creacion">Fecha creación</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-material floating open">
                                        <select class="form-control" id="no-oficio" name="no-oficio" size="1">
                                            <option>&nbsp;</option>
                                            <option value="1">No Oficio #1</option>
                                            <option value="2">No Oficio #2</option>
                                            <option value="3">No Oficio #3</option>
                                        </select>
                                        <label for="no-oficio">No. Oficio</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-material floating open">
                                        <select class="form-control" id="unidad-auditada" name="unidad-auditada" size="1">
                                            <option>&nbsp;</option>
                                            <option value="1">Unidad auditada #1</option>
                                            <option value="2">Unidad auditada #2</option>
                                            <option value="3">Unidad auditada #3</option>
                                        </select>
                                        <label for="unidad-auditada">Unidad Auditada</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-condensed" style="font-size: 10px;">
                                            <thead>
                                            <tr>
                                                <td class="text-center"><strong>#</strong></td>
                                                <td><strong>Nombre</strong></td>
                                                <td class="text-center"><strong>Eliminar</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Unidad auditada #1</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Unidad auditada #2</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Unidad auditada #3</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <blockquote>
                                <div class="form-group">
                                    <fielset>
                                        <legend>Observaciones</legend>
                                        <div class="col-md-3">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="numero">
                                                <label for="numero">Fecha</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="titulo">
                                                <label for="titulo">Titulo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <textarea class="form-control" id="cuerpo" name="cuerpo" rows="3"></textarea>
                                                <label for="cuerpo">Cuerpo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <textarea class="form-control" id="recomendo" name="recomendo" rows="3"></textarea>
                                                <label for="recomendo">Se recomendó</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <textarea class="form-control" id="conclusion" name="conclusion" rows="3"></textarea>
                                                <label for="conclusion">Conclusión</label>
                                            </div>
                                        </div>

                                    </fielset>
                                </div>
                            </blockquote>

                            <blockquote>
                                <div class="form-group">
                                    <fielset>
                                        <legend>CCP</legend>
                                        <div class="col-md-6">
                                            <div class="form-material floating open">
                                                <select class="form-control" id="nomb" name="nomb" size="1">
                                                    <option>&nbsp;</option>
                                                    <option value="1">Nombre #1</option>
                                                    <option value="2">Nombre #2</option>
                                                    <option value="3">Nombre #3</option>
                                                </select>
                                                <label for="nomb">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="table-responsive">
                                                <table class="table table-condensed" style="font-size: 10px;">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center"><strong>#</strong></td>
                                                        <td><strong>Nombre</strong></td>
                                                        <td class="text-center"><strong>Eliminar</strong></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Unidad auditada #1</td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Unidad auditada #2</td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>Unidad auditada #3</td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </fielset>
                                </div>
                            </blockquote>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Area informe -->
                    <!-- Antecedentes -->
                    <div class="tab-pane fade fade-up" id="antecedentes">
                        <form class="form-horizontal push-10-t" onsubmit="return false;">
                            <div class="form-group">
                                <div class="col-md-12">
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
                                <div class="col-md-5">
                                    <div class="form-material floating open">
                                        <select class="form-control" id="uni-a" name="uni-a" size="1">
                                            <option>&nbsp;</option>
                                            <option value="1">Unidad A. #1</option>
                                            <option value="2">Unidad A. #2</option>
                                            <option value="3">Unidad A. #3</option>
                                        </select>
                                        <label for="uni-a">Unidad auditada</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-material floating">
                                        <button class="btn btn-sm btn-success">+</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-responsive border">
                                        <table class="table table-condensed" style="font-size: 10px;">
                                            <thead>
                                            <tr>
                                                <td class="text-center"><strong>Unidad</strong></td>
                                                <td><strong>Objetivos</strong></td>
                                                <td class="text-center"><strong>Eliminar</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">Unidad A. #1</td>
                                                <td>Objetivo 1</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Unidad A. #2</td>
                                                <td>Objetivo 2</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Unidad A. #3</td>
                                                <td>Objetivo 3</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-material">
                                        <textarea class="form-control" id="objetivo" name="objetivo" rows="3"></textarea>
                                        <label for="objetivo">Objetivo</label>
                                    </div>
                                </div>
                                <div class="col-md-12">&nbsp;</div>
                                <div class="col-md-12">
                                    <div class="table-responsive border">
                                        <table class="table table-condensed" style="font-size: 10px;">
                                            <thead>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td colspan="2" class="text-center"><strong>No. Plazas</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center"><strong>Puesto</strong></td>
                                                <td class="text-center"><strong>DG Auditada</strong></td>
                                                <td class="text-center"><strong>DG Auditada</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Puesto x</td>
                                                <td class="text-center">
                                                    <input class="text-center" value="8" />
                                                </td>
                                                <td class="text-center">
                                                    <input class="text-center" value="1" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Puesto y</td>
                                                <td class="text-center">
                                                    <input class="text-center" value="1" />
                                                </td>
                                                <td class="text-center">
                                                    <input class="text-center" value="3" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Puesto z</td>
                                                <td class="text-center">
                                                    <input class="text-center" value="2" />
                                                </td>
                                                <td class="text-center">
                                                    <input class="text-center" value="3" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Total</td>
                                                <td class="text-center">
                                                    <input class="text-center" value="11" />
                                                </td>
                                                <td class="text-center">
                                                    <input class="text-center" value="6" />
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <blockquote>
                                <div class="form-group">
                                    <div class="col-md-12">&nbsp;</div>

                                    <div class="col-sm-1 col-sm-offset-1">
                                        <label class="css-input switch switch-primary" title="Verificado">
                                            <input type="checkbox"><span></span> Respectivamente
                                        </label>
                                    </div>
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="form-material floating">
                                            <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="f-dof" name="f-dof">
                                            <label for="f-dof">Fecha de DOF</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="form-material floating">
                                            <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="f-reforma" name="f-reforma">
                                            <label for="f-reforma">Fecha reforma</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="form-material floating">
                                            <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="f-publicado" name="f-publicado">
                                            <label for="f-publicado">Fecha publicada</label>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                            <blockquote>
                                <fieldset>
                                    <legend>Mapas de proceso</legend>
                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <div class="form-material floating open">
                                                <select class="form-control" id="uni-aa" name="uni-aa" size="1">
                                                    <option>&nbsp;</option>
                                                    <option value="1">Unidad A. #1</option>
                                                    <option value="2">Unidad A. #2</option>
                                                    <option value="3">Unidad A. #3</option>
                                                </select>
                                                <label for="uni-aa">Unidad auditada</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-material floating">
                                                <button class="btn btn-sm btn-success">+</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="table-responsive border">
                                                <table class="table table-condensed" style="font-size: 10px;">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center"><strong>Unidad</strong></td>
                                                        <td class="text-center"><strong>Descripción</strong></td>
                                                        <td class="text-center"><strong>Imagen</strong></td>
                                                        <td class="text-center"><strong>Elimiar</strong></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">Unidad x</td>
                                                        <td class="text-center">
                                                            Descripción x
                                                        </td>
                                                        <td class="text-center">
                                                            Imagen
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Unidad y</td>
                                                        <td class="text-center">
                                                            Descripción y
                                                        </td>
                                                        <td class="text-center">
                                                            Imagen
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Unidad z</td>
                                                        <td class="text-center">
                                                            Descripción z
                                                        </td>
                                                        <td class="text-center">
                                                            Imagen
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="col-xs-12" for="example-file-input">Imagen</label>
                                                <div class="col-xs-12">
                                                    <input type="file" id="imagen" name="imagen">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">&nbsp;</div>
                                        <div class="col-md-5">
                                            <div class="form-material">
                                                <textarea class="form-control" id="objetivo" name="descripcion" rows="3"></textarea>
                                                <label for="descripcion">Descripción</label>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>
                            </blockquote>
                            <blockquote>
                                <fieldset>
                                    <legend>Auditores anteriores</legend>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Observaciones</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="titulo" name="titulo">
                                                <label for="titulo">Titulo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <textarea class="form-control" id="material3" rows="3"></textarea>
                                                <label for="material-textarea-small2">Diagnosticos:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Mejoras</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="titulo" name="titulo">
                                                <label for="titulo">Titulo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <textarea class="form-control" id="material3" rows="3"></textarea>
                                                <label for="material-textarea-small2">Diagnosticos:</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </blockquote>
                        </form>
                        <div class="col-md-10">
                            <div class="form-group">
                                <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    <!-- Antecedentes -->
                    <!-- Mapa de riesgos -->
                    <div class="tab-pane fade fade-up" id="mapa-riesgos">
                        <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                            <div class="form-group">
                                <fieldset>
                                    <legend>Mapa de riesgos</legend>
                                    <div class="col-md-12">
                                        <div class="table-responsive border">
                                            <table class="table table-condensed" style="font-size: 10px;">
                                                <thead>
                                                <tr>
                                                    <td class="text-center">No de riesgo</td>
                                                    <td class="text-center">Descripción del riesgo</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center"><strong>1</strong></td>
                                                    <td class="text-center"><strong>Datos de riesgo</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><strong>2</strong></td>
                                                    <td class="text-center"><strong>Datos de riesgo xx</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                                <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                    <!-- END Mapa de riesgos -->
                    <!-- Objeto -->
                    <div class="tab-pane fade fade-up" id="objet">
                        <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                            <div class="form-group">
                                <fieldset>
                                    <legend>Objeto</legend>
                                    <div class="col-md-12">

                                        <div class="form-material">
                                            <textarea class="form-control" id="objeto" name="objeto" rows="3"></textarea>
                                            <label for="objeto">Objeto</label>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                                <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                    <!-- END Objeto -->
                    <!-- Resultados -->
                    <div class="tab-pane fade fade-up" id="resultados">
                        <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                            <div class="form-group">
                                <fieldset>
                                    <legend>Resultados</legend>
                                    <div class="col-md-12">
                                        <div class="form-material">
                                            <textarea class="form-control" id="a-control" name="a-control" rows="3"></textarea>
                                            <label for="a-control">Ambiente de contról</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-material">
                                            <textarea class="form-control" id="a-riesgos" name="a-riesgos" rows="3"></textarea>
                                            <label for="a-riesgos">Administración de riesgos</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-material">
                                            <textarea class="form-control" id="a-control-inter" name="a-control-inter" rows="3"></textarea>
                                            <label for="a-control-inter">A control-intenor</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-material">
                                            <textarea class="form-control" id="i-comunica" name="i-comunica" rows="3"></textarea>
                                            <label for="i-comunica">Información y comunicación</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-material">
                                            <textarea class="form-control" id="super-mejora" name="super-mejora" rows="3"></textarea>
                                            <label for="super-mejora">Supervisión y mejora continua</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                        </form>
                    </div>
                    <!-- END Resultados -->
                    <!-- Trabajos realizados -->
                    <div class="tab-pane fade fade-up" id="trabajos-realizados">
                        <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                            <div class="form-group">
                                <fieldset>
                                    <legend>Trabajos realizados</legend>
                                    <div class="col-md-12">
                                        <label>Dirección general A</label>
                                    </div>
                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-11">
                                        <label>Observaciones</label>
                                    </div>
                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-1">
                                        <span class="h4 font-w700">1</span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-material floating">
                                            <input class="form-control" type="text" id="titulo" name="titulo">
                                            <label for="titulo">Titulo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-material">
                                            <textarea class="form-control" id="cuerpo" name="cuerpo" rows="2"></textarea>
                                            <label for="cuerpo">Cuerpo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-1">
                                        <span class="h4 font-w700">2</span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-material floating">
                                            <input class="form-control" type="text" id="titulo2" name="titulo2">
                                            <label for="titulo2">Titulo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-material">
                                            <textarea class="form-control" id="cuerpo2" name="cuerpo2" rows="2"></textarea>
                                            <label for="cuerpo2">Cuerpo</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-11">
                                        <label>Recomendaciones</label>
                                    </div>
                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-1">
                                        <span class="h4 font-w700">1</span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-material">
                                            <textarea class="form-control" id="cuerpo3" name="cuerpo3" rows="3"></textarea>
                                            <label for="cuerpo3">Cuerpo</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-11">
                                        <label>Recomendaciones</label>
                                    </div>
                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-1">
                                        <span class="h4 font-w700">2</span>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-material">
                                            <textarea class="form-control" id="cuerpo4" name="cuerpo4" rows="3"></textarea>
                                            <label for="cuerpo4">Cuerpo</label>
                                        </div>
                                    </div>

                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                        </form>
                    </div>
                    <!-- END Trabajos realizados -->

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