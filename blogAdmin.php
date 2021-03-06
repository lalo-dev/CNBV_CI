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

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">
    <link rel="stylesheet" href="assets/js/plugins/magnific-popup/magnific-popup.min.css">

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
                        Blog <small>Administración</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Administración</li>
                        <li>Blog</li>
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
                        <a href="#search-escolaridad">Lista</a>
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
                        <div class="block block-themed block-opt-hidden">
                            <div class="block-header bg-primary">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Agregar</h3>
                            </div>
                            <div class="block-content">
                                <form class="form-horizontal push-10-t" action="#" method="post">

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="titulo" name="titulo">
                                                <label for="titulo">Título</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="form-material form-material-primary floating">
                                                <textarea class="form-control input-sm" id="actividades" name="actividades" rows="4"></textarea>
                                                <label for="actividades">Descripción</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <fieldset>
                                                <legend>Tipo</legend>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-primary floating">
                                                            <select class="form-control input-sm" id="estatus" name="estatus">
                                                                <option></option>
                                                                <option value="1">Info</option>
                                                                <option value="2">Noticia</option>
                                                                <option value="3">Fecha limite de entrega</option>
                                                                <option value="4">Documentos entregados</option>
                                                                <option value="5">Actualización del sistema</option>
                                                                <option value="6">Cumpleaños</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                        </div>
                                        <div class="col-md-3">
                                            <fieldset>
                                                <legend>URL's</legend>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-primary floating">
                                                            <input class="form-control input-sm" type="text" id="url">
                                                            <label for="url">1</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-primary floating">
                                                            <input class="form-control input-sm" type="text" id="url">
                                                            <label for="url">2</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-primary floating">
                                                            <input class="form-control input-sm" type="text" id="url">
                                                            <label for="url">3</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-primary floating">
                                                            <input class="form-control input-sm" type="text" id="url">
                                                            <label for="url">4</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend>Imagenes</legend>
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <img class="img-responsive" src="assets/img/photos/photo19.jpg" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-sm-12">
                                                            <input type="file" id="imagen1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <img class="img-responsive" src="assets/img/photos/photo18.jpg" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-sm-12">
                                                            <input type="file" id="imagen1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <img class="img-responsive" src="assets/img/photos/photo17.jpg" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-sm-12">
                                                            <input type="file" id="imagen1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <img class="img-responsive" src="assets/img/photos/photo16.jpg" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-sm-12">
                                                            <input type="file" id="imagen1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
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
                        <!-- End Agregar -->
                        <div class="row">&nbsp;</div>
                        <!-- Lista -->
                        <div class="table-responsive">
                            <div class="border-b push-30">
                                <h2 class="push-10">3 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                            </div>
                            <table class="table table-striped table-vcenter table-condensed">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Tipo</th>
                                        <th class="text-left">Título</th>
                                        <th class="text-left">Contenido</th>
                                        <th class="text-left">Links</th>
                                        <th class="text-center">Imagenes</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Noticia</td>
                                        <td class="text-left">Título de la noticia</td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </td>
                                        <td style="width: 200px;">
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                        </td>
                                        <td style="width: 100px;">

                                                <div class="row js-gallery">
                                                    <div class="col-xs-12">
                                                        <a class="img-link" href="assets/img/photos/photo19@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo19.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <a class="img-link" href="assets/img/photos/photo20@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo20.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <a class="img-link" href="assets/img/photos/photo21@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo21.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <a class="img-link" href="assets/img/photos/photo22@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo22.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>

                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Actualización del sistema</td>
                                        <td class="text-left">Título de la noticia</td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </td>
                                        <td style="width: 200px;">
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                        </td>
                                        <td style="width: 100px;">

                                            <div class="row js-gallery">
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo19@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo19.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo20@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo20.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo21@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo21.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo22@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo22.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Fechas de entrega</td>
                                        <td class="text-left">Título de la noticia</td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </td>
                                        <td style="width: 200px;">
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                            <p><a href="#">Link a alguna página</a></p>
                                        </td>
                                        <td style="width: 100px;">

                                            <div class="row js-gallery">
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo19@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo19.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo20@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo20.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo21@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo21.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <a class="img-link" href="assets/img/photos/photo22@2x.jpg">
                                                        <img class="img-responsive" src="assets/img/photos/photo22.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Lista -->
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

<!-- Page JS Code -->
<script>
    $(function () {
        // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>

<!-- Page Plugins -->
<script src="assets/js/plugins/slick/slick.min.js"></script>
<script src="assets/js/plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Slick Slider + Magnific Popup plugins)
        App.initHelpers(['slick', 'magnific-popup']);
    });
</script>
</body>
</html>