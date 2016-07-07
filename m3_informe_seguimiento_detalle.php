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
                        Detalle<small> Informde de seguimiento</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Seguimiento</li>
                        <li><a href="m3_informe_seguimiento">Informe de seguimiento</a></li>
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
                        <a href="#informe-seguimiento">Informe de seguimiento</a>
                    </li>
                    <li>
                        <a href="#informe-titular">Informe al Titular</a>
                    </li>
                    <li>
                        <a href="#informe-enlace">Informe al Enlace</a>
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
                                            <div class="col-md-4 col-md-offset-2">
                                                <a class="block block-link-hover2" href="javascript:void(0)">
                                                    <div class="block-content block-content-full bg-flat clearfix">
                                                        <i class="si si-eye fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Informe </span>
                                                        <span class="h4 text-white-op">Seguimiento detalle</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                    <div class="block-content block-content-full bg-primary clearfix">
                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Informe </span>
                                                        <span class="h4 text-white-op">Seguimiento detalle</span>
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
                    <!-- Informe Seguimiento -->
                    <div class="tab-pane fade fade-up" id="informe-seguimiento">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Informe de seguimiento</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-md-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox"><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox"><span></span> Validado
                                </label>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">Clasifico</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="example-select" name="example-select" size="1">
                                                <option value="0">Clasifico...</option>
                                                <option value="1">Clasifico 1</option>
                                                <option value="2">Clasifico 2</option>
                                                <option value="3">Clasifico 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="orden">Fecha Informe</label>
                                        <div class="col-md-3">
                                            <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real">Trimestre</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Tiempo real">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real"># Observaciones</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Observaciones">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real"># Auditories</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Auditories">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real"># Observaciones del trimestre actual</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Observaciones del trimestre actual">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">Respecto de:</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_cuerpo" name="txa_cuerpo" rows="6" placeholder="Respecto de..."></textarea>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">#</th>
                                                        <th>Instancia fiscalizadora</th>
                                                        <th class="hidden-xs" style="width: 15%;">Saldo inicial</th>
                                                        <th class="hidden-xs" style="width: 15%;">Solventados</th>
                                                        <th class="hidden-xs" style="width: 15%;">No solventados</th>
                                                        <th class="hidden-xs" style="width: 15%;">Determinadas en el trimestre</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Organo Interno de Control</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>ASF</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>AUG</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td>Auditor externo</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td>Otras instancias</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"></td>
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content col-md-7">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 10%;">#</th>
                                                        <th class="hidden-xs" style="width: 30%;">Atendidas</th>
                                                        <th class="hidden-xs" style="width: 30%;">SAC</th>
                                                        <th class="hidden-xs" style="width: 30%;">Saldo final</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="<cuer></cuer>po">Clasificación</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="example-select" name="example-select" size="1">
                                                    <option value="0">Clasificación...</option>
                                                    <option value="1">Clasificación 1</option>
                                                    <option value="2">Clasificación 2</option>
                                                    <option value="3">Clasificación 3</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 control-label" for="Total">Total</label>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="Total" name="Total" placeholder="Total">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="<cuer></cuer>po">Antiguedad</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="example-select" name="example-select" size="1">
                                                    <option value="0">Antiguedad...</option>
                                                    <option value="1">Antiguedad 1</option>
                                                    <option value="2">Antiguedad 2</option>
                                                    <option value="3">Antiguedad 3</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 control-label" for="Total">Total</label>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="Total" name="Total" placeholder="Total">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 10%;">#</th>
                                                        <th class="text-center" style="width: 18%;">Instancia fiscalizadora</th>
                                                        <th class="text-center" style="width: 18%;">Número de Auditoría</th>
                                                        <th class="text-center" style="width: 18%;">Clasificación de Riesgo</th>
                                                        <th class="text-center" style="width: 26%;">Observación</th>
                                                        <th class="text-center" style="width: 10%;">Antiguedad en meses</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"></td>
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="SAC">SAC</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="SAC" name="SAC" placeholder="SAC">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="Nota">Nota:</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="Nota" name="Nota" placeholder="Nota">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">&nbsp;</div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <label class="col-md-7 control-label" for="Nota">Texto de ayuda: Al respecto...</label>
                                            <label class="css-input switch switch-success" title="Ayuda">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">&nbsp;</div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <label class="col-md-7 control-label" for="Nota">Texto de ayuda: Al respecto...</label>
                                            <label class="css-input switch switch-success" title="Ayuda">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Informe Seguimiento -->
                    
                    <!-- Informe al Titular -->
                    <div class="tab-pane fade fade-up" id="informe-titular">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Informe al titular</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-md-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox"><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox"><span></span> Validado
                                </label>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">

                                    <div class="block">
                                        <div class="block-content">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">#</th>
                                                        <th>Instancia fiscalizadora</th>
                                                        <th class="hidden-xs" style="width: 15%;">Saldo inicial</th>
                                                        <th class="hidden-xs" style="width: 15%;">Solventados</th>
                                                        <th class="hidden-xs" style="width: 15%;">No solventados</th>
                                                        <th class="hidden-xs" style="width: 15%;">Determinadas en el trimestre</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Organo Interno de Control</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"></td>
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 10%;">#</th>
                                                        <th class="text-center" style="width: 18%;">Días desde la observación</th>
                                                        <th class="text-center" style="width: 18%;">Fecha de confrontar</th>
                                                        <th class="text-center" style="width: 18%;">Inst Fisc</th>
                                                        <th class="text-center" style="width: 26%;">Unidad Auditada</th>
                                                        <th class="text-center" style="width: 10%;">No. Obs</th>
                                                        <th class="text-center" style="width: 10%;">Descripción de la observación</th>
                                                        <th class="text-center" style="width: 10%;">Área responsable de solventar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content col-md-7">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 10%;">#</th>
                                                        <th class="hidden-xs" style="width: 30%;">Fecha compromiso de solventación</th>
                                                        <th class="hidden-xs" style="width: 30%;">% de avance</th>
                                                        <th class="hidden-xs" style="width: 30%;">Importe</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Informe al Titular -->

                    <!-- Informe al Enlace -->
                    <div class="tab-pane fade fade-up" id="informe-enlace">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Informe de seguimiento</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-md-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox"><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox"><span></span> Validado
                                </label>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">Clasifico</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="example-select" name="example-select" size="1">
                                                <option value="0">Clasifico...</option>
                                                <option value="1">Clasifico 1</option>
                                                <option value="2">Clasifico 2</option>
                                                <option value="3">Clasifico 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="orden">Fecha Informe</label>
                                        <div class="col-md-3">
                                            <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real">Trimestre</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Tiempo real">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real"># Observaciones</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Observaciones">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real"># Auditories</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Auditories">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real"># Observaciones del trimestre actual</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Observaciones del trimestre actual">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">Respecto de:</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_cuerpo" name="txa_cuerpo" rows="6" placeholder="Respecto de..."></textarea>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">#</th>
                                                        <th>Instancia fiscalizadora</th>
                                                        <th class="hidden-xs" style="width: 15%;">Saldo inicial</th>
                                                        <th class="hidden-xs" style="width: 15%;">Solventados</th>
                                                        <th class="hidden-xs" style="width: 15%;">No solventados</th>
                                                        <th class="hidden-xs" style="width: 15%;">Determinadas en el trimestre</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Organo Interno de Control</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    -->
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>ASF</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <!--
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>AUG</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td>Auditor externo</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td>Otras instancias</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"></td>
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content col-md-7">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 10%;">#</th>
                                                        <th class="hidden-xs" style="width: 30%;">Atendidas</th>
                                                        <th class="hidden-xs" style="width: 30%;">SAC</th>
                                                        <th class="hidden-xs" style="width: 30%;">Saldo final</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="<cuer></cuer>po">Clasificación</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="example-select" name="example-select" size="1">
                                                    <option value="0">Clasificación...</option>
                                                    <option value="1">Clasificación 1</option>
                                                    <option value="2">Clasificación 2</option>
                                                    <option value="3">Clasificación 3</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 control-label" for="Total">Total</label>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="Total" name="Total" placeholder="Total">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="<cuer></cuer>po">Antiguedad</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="example-select" name="example-select" size="1">
                                                    <option value="0">Antiguedad...</option>
                                                    <option value="1">Antiguedad 1</option>
                                                    <option value="2">Antiguedad 2</option>
                                                    <option value="3">Antiguedad 3</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 control-label" for="Total">Total</label>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="Total" name="Total" placeholder="Total">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block">
                                        <div class="block-content">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 10%;">#</th>
                                                        <th class="text-center" style="width: 18%;">Instancia fiscalizadora</th>
                                                        <th class="text-center" style="width: 18%;">Número de Auditoría</th>
                                                        <th class="text-center" style="width: 18%;">Clasificación de Riesgo</th>
                                                        <th class="text-center" style="width: 26%;">Observación</th>
                                                        <th class="text-center" style="width: 10%;">Antiguedad en meses</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"></td>
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="SAC">SAC</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="SAC" name="SAC" placeholder="SAC">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="Nota">Nota:</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="Nota" name="Nota" placeholder="Nota">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">&nbsp;</div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <label class="col-md-7 control-label" for="Nota">Texto de ayuda: Al respecto...</label>
                                            <label class="css-input switch switch-success" title="Ayuda">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">&nbsp;</div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <label class="col-md-7 control-label" for="Nota">Texto de ayuda: Al respecto...</label>
                                            <label class="css-input switch switch-success" title="Ayuda">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Informe al Enlace -->

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
</script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_ui_chat.js"></script>
</body>
</html>