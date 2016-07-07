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
                        Detalle<small> Informe de presunta responsabilidad</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>PRA</li>
                        <li><a href="m4_informe_presunta_responsabilidad_detalle">Informe de presunta responsabilidad</a></li>
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
                        <a href="#solicitud">Solicitud</a>
                    </li>
                    <li>
                        <a href="#anexo">Anexo</a>
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
                                                        <span class="h4 text-white-op">Presunta responsabilidad</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                    <div class="block-content block-content-full bg-primary clearfix">
                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Informe </span>
                                                        <span class="h4 text-white-op">Presunta responsabilidad</span>
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

                    <!-- Informe -->
                    <div class="tab-pane fade fade-up" id="informe">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Informe de presunta responsabilidad</span></h2>
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

                        <div class="border-b push-30">&nbsp;</div>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">Derivaron</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">Por lo anterior</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">I. Proemio</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">II. Antecedentes de la auditoria</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">III. Hechos</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">IV. Presento daño patrimonial y/o prejuicio</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">V.Presuntos responsables y presición de las irregularidades</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">VI. Conclusión del informe</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">VII. Datos de los auditores que elaboran el informe</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
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
                    <!-- End Informe -->

                    <!-- Solicitud -->
                    <div class="tab-pane fade fade-up" id="solicitud">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Informe de presunta responsabilidad</span></h2>
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

                        <div class="border-b push-30">&nbsp;</div>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">Nombre</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="example-select" name="example-select" size="1">
                                                <option value="0">Nombre...</option>
                                                <option value="1">Nombre 1</option>
                                                <option value="2">Nombre 2</option>
                                                <option value="3">Nombre 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="orden">Fecha</label>
                                        <div class="col-md-3">
                                            <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                        </div>
                                    </div><div class="form-group">
                                        <label class="col-md-2 control-label" for="tiempo_real">Días habiles</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" id="tiempo_real" name="tiempo_real" placeholder="Días habiles">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">Firma titular</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="example-select" name="example-select" size="1">
                                                <option value="0">Firma titular...</option>
                                                <option value="1">Firma 1</option>
                                                <option value="2">Firma 2</option>
                                                <option value="3">Firma 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">CCP</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="example-select" name="example-select" size="1">
                                                <option value="0">CCP...</option>
                                                <option value="1">CCP 1</option>
                                                <option value="2">CCP 2</option>
                                                <option value="3">CCP 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!--<div class="col-md-5">-->
                                            <label class="col-md-2 control-label" for="<cuer></cuer>po">CCP</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="example-select" name="example-select" size="1">
                                                    <option value="0">CCP...</option>
                                                    <option value="1">CCP 1</option>
                                                    <option value="2">CCP 2</option>
                                                    <option value="3">CCP 3</option>
                                                </select>
                                            </div>
                                        <!--</div>-->
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
                                                        <td class="text-center"><strong>Nombre</strong></td>
                                                        <td class="text-center"><strong>Eliminar</strong></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">Nombre 1</td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Nombre 2</td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Nombre 3</td>
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
                    <!-- End Solicitud -->

                    <!-- Anexo -->
                    <div class="tab-pane fade fade-up" id="anexo">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Informe de presunta responsabilidad</span></h2>
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

                        <div class="border-b push-30">&nbsp;</div>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="<cuer></cuer>po">Anexos</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="example-select" name="example-select" size="1">
                                                <option value="1">Anexo 1</option>
                                                <option value="2">Anexo 2</option>
                                                <option value="3">Anexo 3</option>
                                                <option value="4">Anexo 4</option>
                                                <option value="5">Anexo 5</option>
                                                <option value="6">Anexo 6</option>
                                                <option value="7">Anexo 7</option>
                                                <option value="8">Anexo 8</option>
                                                <option value="9">Anexo 9</option>
                                                <option value="10">Anexo 10</option>
                                                <option value="11">Anexo 11</option>
                                                <option value="12">Anexo 12</option>
                                                <option value="13">Anexo 13</option>
                                                <option value="14">Anexo 14</option>
                                                <option value="15">Anexo 15</option>
                                                <option value="16">Anexo 16</option>
                                                <option value="17">Anexo 17</option>
                                                <option value="18">Anexo 18</option>
                                                <option value="19">Anexo 19</option>
                                                <option value="20">Anexo 20</option>
                                                <option value="21">Anexo 21</option>
                                                <option value="22">Anexo 22</option>
                                                <option value="23">Anexo 23</option>
                                                <option value="24">Anexo 24</option>
                                                <option value="25">Anexo 25</option>
                                                <option value="26">Anexo 26</option>
                                                <option value="27">Anexo 27</option>
                                                <option value="28">Anexo 28</option>
                                                <option value="29">Anexo 29</option>
                                                <option value="30">Anexo 30</option>
                                                <option value="31">Anexo 31</option>
                                                <option value="32">Anexo 32</option>
                                                <option value="33">Anexo 33</option>
                                                <option value="34">Anexo 34</option>
                                                <option value="35">Anexo 35</option>
                                                <option value="36">Anexo 36</option>
                                                <option value="37">Anexo 37</option>
                                                <option value="38">Anexo 38</option>
                                                <option value="39">Anexo 39</option>
                                                <option value="40">Anexo 40</option>
                                                <option value="41">Anexo 41</option>
                                                <option value="42">Anexo 42</option>
                                                <option value="43">Anexo 43</option>
                                                <option value="44">Anexo 44</option>
                                                <option value="45">Anexo 45</option>
                                                <option value="46">Anexo 46</option>
                                                <option value="47">Anexo 47</option>
                                                <option value="48">Anexo 48</option>
                                                <option value="49">Anexo 49</option>
                                                <option value="50">Anexo 50</option>
                                                <option value="51">Anexo 51</option>
                                                <option value="52">Anexo 52</option>
                                                <option value="53">Anexo 53</option>
                                                <option value="54">Anexo 54</option>
                                                <option value="55">Anexo 55</option>
                                                <option value="56">Anexo 56</option>
                                                <option value="57">Anexo 57</option>
                                                <option value="58">Anexo 58</option>
                                                <option value="59">Anexo 59</option>
                                                <option value="60">Anexo 60</option>
                                                <option value="61">Anexo 61</option>
                                                <option value="62">Anexo 62</option>
                                                <option value="63">Anexo 63</option>
                                                <option value="64">Anexo 64</option>
                                                <option value="65">Anexo 65</option>
                                                <option value="66">Anexo 66</option>
                                                <option value="67">Anexo 67</option>
                                                <option value="68">Anexo 68</option>
                                                <option value="69">Anexo 69</option>
                                                <option value="70">Anexo 70</option>
                                                <option value="71">Anexo 71</option>
                                                <option value="72">Anexo 72</option>
                                                <option value="73">Anexo 73</option>
                                                <option value="74">Anexo 74</option>
                                                <option value="75">Anexo 75</option>
                                                <option value="76">Anexo 76</option>
                                                <option value="77">Anexo 77</option>
                                                <option value="78">Anexo 78</option>
                                                <option value="79">Anexo 79</option>
                                                <option value="80">Anexo 80</option>
                                                <option value="81">Anexo 81</option>
                                                <option value="82">Anexo 82</option>
                                                <option value="83">Anexo 83</option>
                                                <option value="84">Anexo 84</option>
                                                <option value="85">Anexo 85</option>
                                                <option value="86">Anexo 86</option>
                                                <option value="87">Anexo 87</option>
                                                <option value="88">Anexo 88</option>
                                                <option value="89">Anexo 89</option>
                                                <option value="90">Anexo 90</option>
                                                <option value="91">Anexo 91</option>
                                                <option value="92">Anexo 92</option>
                                                <option value="93">Anexo 93</option>
                                                <option value="94">Anexo 94</option>
                                                <option value="95">Anexo 95</option>
                                                <option value="96">Anexo 96</option>
                                                <option value="97">Anexo 97</option>
                                                <option value="98">Anexo 98</option>
                                                <option value="99">Anexo 99</option>
                                                <option value="100">Anexo 100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">Derivaron</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">Por lo anterior</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">I. Proemio</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">II. Antecedentes de la auditoria</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">III. Hechos</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">IV. Presento daño patrimonial y/o prejuicio</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">V.Presuntos responsables y presición de las irregularidades</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">VI. Conclusión del informe</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="txa_derivaron">VII. Datos de los auditores que elaboran el informe</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="txa_derivaron" name="txa_derivaron" rows="6" placeholder="Texto de ayuda..."></textarea>
                                        </div>
                                    </div>
                                    -->

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
                    <!-- End Anexo -->

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