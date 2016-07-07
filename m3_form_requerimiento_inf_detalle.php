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
                        Detalle<small> Requerimiento de Información</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Seguimiento</li>
                        <li><a href="m3_requerimiento_informacion">Requerimiento de Información </a></li>
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
                        <a href="#requerimiento">Requerimiento</a>
                    </li>
                    <li>
                        <a href="#requerimiento2">Requerimiento 2</a>
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
                                                        <span class="h4 font-w700 text-white">Requerimiento</span>
                                                        <span class="h4 text-white-op">Información</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                    <div class="block-content block-content-full bg-primary clearfix">
                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Requerimiento </span>
                                                        <span class="h4 text-white-op">Información</span>
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
                    <!-- Area requerimiento -->
                    <div class="tab-pane fade fade-up" id="requerimiento">
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

                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-material floating">
                                        <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="fecha" name="fecha">
                                        <label for="fecha">Fecha</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="dhabiles" name="dhabiles">
                                        <label for="dhabiles">Días habiles</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-2">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="lista" name="lista">
                                        <label for="lista">Lista</label>
                                    </div>
                                </div>
                                <div class="col-md-1 col-md-offset-1">
                                    <div class="form-material floating">
                                        <button class="btn btn-sm btn-success">+</button>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="table-responsive">
                                        <table class="table table-condensed" style="font-size: 10px;">
                                            <thead>
                                            <tr>
                                                <td class="text-center"><strong>#</strong></td>
                                                <td><strong>Elementos</strong></td>
                                                <td class="text-center"><strong>Eliminar</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Elemento #1</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Elemento #2</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Elemento #3</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5 col-sm-offset-5">
                                        <label class="css-input switch switch-primary" title="Verificado">
                                            <input type="checkbox"><span></span> Texto de ayuda
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- End Area requerimiento-->
                    <!-- Area requerimiento 2-->
                    <div class="tab-pane fade fade-up" id="requerimiento2">
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

                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-material floating">
                                        <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="fecha2" name="fecha2">
                                        <label for="fecha2">Fecha</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="dhabiles2" name="dhabiles2">
                                        <label for="dhabiles2">Días habiles</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-2">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="lista2" name="lista2">
                                        <label for="lista2">Lista</label>
                                    </div>
                                </div>
                                <div class="col-md-1 col-md-offset-1">
                                    <div class="form-material floating">
                                        <button class="btn btn-sm btn-success">+</button>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="table-responsive">
                                        <table class="table table-condensed" style="font-size: 10px;">
                                            <thead>
                                            <tr>
                                                <td class="text-center"><strong>#</strong></td>
                                                <td><strong>Elementos</strong></td>
                                                <td class="text-center"><strong>Eliminar</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Elemento #1</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Elemento #2</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Elemento #3</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5 col-sm-offset-5">
                                        <label class="css-input switch switch-primary" title="Verificado">
                                            <input type="checkbox"><span></span> Texto de ayuda
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- End Area requerimiento 2-->
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