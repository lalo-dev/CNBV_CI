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
                                ASF <small>Otras actividades</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Otras actividades</li>
                                <li>ASF</li>
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
                                <a href="#search-escolaridad">Lista de temas</a>
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
                                <!-- Agregar termino -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar tema</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="estatus" name="estatus">
                                                            <option></option>
                                                            <option value="1">Tema 01</option>
                                                            <option value="2">Tema 02</option>
                                                            <option value="3">Tema 03</option>
                                                            <option value="4">Tema 04</option>
                                                            <option value="5">Tema 05</option>
                                                        </select>
                                                        <label for="estatus">Tema</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="nombre" name="nombre">
                                                        <label for="nombre">Tema</label>
                                                        <div class="help-block text-right">Agregar nuevo tema si no existe</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="responsable" name="responsable">
                                                            <option></option>
                                                            <option value="1">Cristian Vazquez Hernandez</option>
                                                            <option value="2">Juan Esteban Alcantara Contreras</option>
                                                            <option value="3">Elena Domingez Quintana</option>
                                                            <option value="4">Carlos Buendia Salazar</option>
                                                            <option value="5">Carmen Estrada Quintero</option>
                                                        </select>
                                                        <label for="estatus">Responsable</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="normativa" name="normativa">
                                                            <option></option>
                                                            <option value="1">Normativa AAAAA</option>
                                                            <option value="2">Normativa BBBBB</option>
                                                            <option value="3">Normativa CCCCC</option>
                                                            <option value="4">Normativa DDDDD</option>
                                                            <option value="5">Normativa EEEEE</option>
                                                        </select>
                                                        <label for="normativa">Normativa</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
	                                                <label class="col-sm-12" for="example-file-input">Archivo adjunto</label>
	                                                <div class="col-sm-12">
	                                                    <input type="file" id="example-file-input" name="example-file-input">
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

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar termino -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Elementos encontrados</span> Tema 1</h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="4">#</th>
                                                <th class="text-left" width="8%">Tema</th>
                                                <th class="text-left" width="30%">Descripción</th>
                                                <th class="text-left" width="20%">Responsable</th>
                                                <th class="text-left" width="20%">Normativa</th>
                                                <th class="text-left" width="10%">Archivo</th>
                                                <th class="text-center" width="10%">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="text-left">Tema 01</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa CCCCC</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td class="text-left">Tema 02</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa AAAAA</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td class="text-left">Tema 03</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa EEEEE</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td>4</td>
                                                <td class="text-left">Tema 04</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa BBBBB</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td>5</td>
                                                <td class="text-left">Tema 05</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa DDDDD</td>
                                                <td class="text-left">Archivo...</td>
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
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">3 <span class="h5 font-w400 text-muted">Elementos encontrados</span> Tema 1</h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="4">#</th>
                                                <th class="text-left" width="8%">Tema</th>
                                                <th class="text-left" width="30%">Descripción</th>
                                                <th class="text-left" width="20%">Responsable</th>
                                                <th class="text-left" width="20%">Normativa</th>
                                                <th class="text-left" width="10%">Archivo</th>
                                                <th class="text-center" width="10%">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="text-left">Tema 01</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa BBBBB</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td class="text-left">Tema 02</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa AAAAA</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td class="text-left">Tema 03</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa EEEEE</td>
                                                <td class="text-left">Archivo...</td>
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
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">8 <span class="h5 font-w400 text-muted">Elementos encontrados</span> Tema 1</h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="4">#</th>
                                                <th class="text-left" width="8%">Tema</th>
                                                <th class="text-left" width="30%">Descripción</th>
                                                <th class="text-left" width="20%">Responsable</th>
                                                <th class="text-left" width="20%">Normativa</th>
                                                <th class="text-left" width="10%">Archivo</th>
                                                <th class="text-center" width="10%">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="text-left">Tema 01</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa CCCCC</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td class="text-left">Tema 02</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa AAAAA</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td class="text-left">Tema 03</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa BBBBB</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td>4</td>
                                                <td class="text-left">Tema 04</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa EEEEE</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td>5</td>
                                                <td class="text-left">Tema 05</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa AAAAA</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td>6</td>
                                                <td class="text-left">Tema 06</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa CCCCC</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td>7</td>
                                                <td class="text-left">Tema 07</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa BBBBB</td>
                                                <td class="text-left">Archivo...</td>
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
                                                <td>8</td>
                                                <td class="text-left">Tema 08</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                </td>
                                                <td class="text-left">Juan Pérez León</td>
                                                <td class="text-left">Normativa AAAAA</td>
                                                <td class="text-left">Archivo...</td>
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
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                
                <div class="pull-left">
                    <a class="font-w600" href="" target="_blank">CNBV</a> &copy; <span class="js-year-copy"></span>
                </div>
            </footer>
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
    </body>
</html>