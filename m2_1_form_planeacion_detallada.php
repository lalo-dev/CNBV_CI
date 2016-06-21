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
                        Detalle<small> Carta de planeación</small>
						
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Planeación detallada</li>
                        <li><a href="m2_1_planeacion_detallada">Carta de planeación</a></li>
						<li>Detalle</li>
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
                        <a href="#search-info">Info</a>
                    </li>
                    <li>
                        <a href="#search-anterior">Anterior</a>
                    </li>
                    <li>
                        <a href="#search-dm">D & M</a>
                    </li>
                    <li>
                        <a href="#search-estructura">Estructura</a>
                    </li>
                    <li>
                        <a href="#search-marco">Marco</a>
                    </li>
                    <li>
                        <a href="#search-manual">Manual</a>
                    </li>
                    <li>
                        <a href="#search-mapa">Mapa</a>
                    </li>
                    <li>
                        <a href="#search-proceso">Proceso</a>
                    </li>
                    <li>
                        <a href="#search-alcance">Alcance</a>
                    </li>
                    <li>
                        <a href="#search-problematica">Problematica</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-alt-static-settings" data-toggle="tooltip" title="Opciones"><i class="si si-settings"></i></a>
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
                    <!-- Info -->
                    <div class="tab-pane fade fade-up in active" id="search-info">
                        
                        <div class="border-b push-30">
                            <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-4">
                                <a class="block block-link-hover2" href="javascript:void(0)">
                                    <div class="block-content block-content-full bg-flat clearfix">
                                        <i class="si si-eye fa-2x text-white pull-right"></i>
                                        <span class="h4 font-w700 text-white">Carta</span>
                                        <span class="h4 text-white-op">Planeación</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2">
                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                    <div class="block-content block-content-full bg-primary clearfix">
                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                        <span class="h4 font-w700 text-white">Carta</span>
                                        <span class="h4 text-white-op">Planeación</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Info -->
                    <!-- Anterior -->
                    <div class="tab-pane fade fade-up" id="search-anterior">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">3 <span class="h5 font-w400 text-muted">Observaciones</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-left">
                                        <div class="ribbon-box font-w600">
                                            <i class="">1</i>
                                        </div>
                                        <div class="block-content block-content-narrow">
                                            <form class="form-horizontal push-10-t" action="base_forms_elements_modern.html" method="post" onsubmit="return false;">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-info floating">
                                                            <textarea class="form-control" id="material-textarea-small2" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dignissimos ex ipsam, maiores neque similique. Blanditiis dolorem earum, natus necessitatibus perferendis qui quidem rem rerum velit. Nobis perferendis quibusdam quo.</textarea>
                                                            <label for="material-color-info2">Modificar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-left">
                                        <div class="ribbon-box font-w600">
                                            <i class="">2</i>
                                        </div>
                                        <div class="block-content block-content-narrow">
                                            <form class="form-horizontal push-10-t" action="base_forms_elements_modern.html" method="post" onsubmit="return false;">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-info floating">
                                                            <textarea class="form-control" id="material-textarea-small2" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias eius excepturi modi odit possimus quisquam ut! Consequuntur earum eius error fugiat ipsum maxime mollitia nisi, rem repellendus sint tenetur!</textarea>
                                                            <label for="material-color-info2">Modificar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-left">
                                        <div class="ribbon-box font-w600">
                                            <i class="">3</i>
                                        </div>
                                        <div class="block-content block-content-narrow">
                                            <form class="form-horizontal push-10-t" action="base_forms_elements_modern.html" method="post" onsubmit="return false;">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-info floating">
                                                            <textarea class="form-control" id="material-textarea-small2" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, aut beatae consequuntur dignissimos ducimus ea eligendi exercitationem impedit ipsum libero magnam minus modi natus nesciunt quam quibusdam, ullam!</lore></textarea>
                                                            <label for="material-color-info2">Modificar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b push-30">
                            <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Mejoras</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-left">
                                        <div class="ribbon-box font-w600">
                                            <i class="">1</i>
                                        </div>
                                        <div class="block-content block-content-narrow">
                                            <form class="form-horizontal push-10-t" onsubmit="return false;">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-info floating">
                                                            <textarea class="form-control" id="material-textarea-small2" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aperiam asperiores culpa deserunt necessitatibus nihil quisquam. Accusantium aliquam dolore minima provident, quae quia repellendus repudiandae vero. Facere, nisi, pariatur!</textarea>
                                                            <label for="material-color-info2">Modificar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-left">
                                        <div class="ribbon-box font-w600">
                                            <i class="">2</i>
                                        </div>
                                        <div class="block-content block-content-narrow">
                                            <form class="form-horizontal push-10-t" action="base_forms_elements_modern.html" method="post" onsubmit="return false;">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-material form-material-info floating">
                                                            <textarea class="form-control" id="material-textarea-small2" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda, cumque facilis harum iste magni minus officiis qui quibusdam repellat sunt suscipit! Aspernatur assumenda deserunt dignissimos dolor dolorem dolores quasi!</textarea>
                                                            <label for="material-color-info2">Modificar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                    <!-- END Anterior -->
                    <!-- D & M -->
                    <div class="tab-pane fade fade-up" id="search-dm">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Auditoría para Desarrollo y Mejora de la Gestión Pública </span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="material1" size="1">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="1">Primero</option>
                                                    <option value="2">Segundo</option>
                                                    <option value="3">Tercero</option>
                                                    <option value="3">Cuarto</option>
                                                </select>
                                                <label for="material1">Trimestre</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="material2" size="1">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="1">2016</option>
                                                    <option value="2">2015</option>
                                                    <option value="3">2014</option>
                                                    <option value="3">2013</option>
                                                </select>
                                                <label for="material2">Año</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">
                                                <textarea class="form-control" id="material3" rows="3"></textarea>
                                                <label for="material-textarea-small2">Diagnosticos:</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">
                                                <textarea class="form-control" id="material3" rows="3"></textarea>
                                                <label for="material-textarea-small2">Recomendaciones relacionadad con:</label>
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
                    <!-- END D & M -->
                    <!-- Estructura -->
                    <div class="tab-pane fade fade-up" id="search-estructura">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Estructura </span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="block-content">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Puesto</th>
                                                <th># de Plazas</th>
                                                <th># de Plazas</th>
                                                <th># de Plazas</th>
                                                <th># de Plazas</th>
                                            </tr>
                                            <tr>
                                                <th>Dirección general</th>
                                                <th>Dirección general</th>
                                                <th>Dirección general</th>
                                                <th>Dirección general</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Director General </td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                            </tr>
                                            <tr>
                                                <td>Director General Adjunto </td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                            </tr>
                                            <tr>
                                                <td>Director </td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                            </tr>
                                            <tr>
                                                <td>Subdirector </td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                            </tr>
                                            <tr>
                                                <td>Inspector</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                            </tr>
                                            <tr>
                                                <td>Analista Administrativo </td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                                <td class="text-center">X</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">
                                                <select class="form-control" id="material10" size="1">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="1">2016</option>
                                                    <option value="2">2015</option>
                                                    <option value="3">2014</option>
                                                    <option value="3">2013</option>
                                                </select>
                                                <label for="material10">Año</label>
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
                    <!-- END Estructura -->
                    <!-- Marco -->
                    <div class="tab-pane fade fade-up" id="search-marco">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Marco legal aplicable </span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <form class="form-horizontal push-10-t" onsubmit="return false;">
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="form-material floating">
                                                    <select class="form-control" id="material10" size="1">
                                                        <option></option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                    </select>
                                                    <label for="material10">Lista</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-material floating">
                                                    <button class="btn btn-sm btn-success">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">#</th>
                                            <th>Nombre</th>
                                            <th class="text-center" style="width: 100px;">Quitar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">
                                                <select class="form-control" id="material10" size="1">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="1">2016</option>
                                                    <option value="2">2015</option>
                                                    <option value="3">2014</option>
                                                    <option value="3">2013</option>
                                                </select>
                                                <label for="material10">Año</label>
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
                    <!-- END Marco -->
                    <!-- Manual -->
                    <div class="tab-pane fade fade-up" id="search-manual">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">Objetivos <span class="h5 font-w400 text-muted">Manual de Organización</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <form class="form-horizontal push-10-t" onsubmit="return false;">
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="form-material floating">
                                                    <textarea class="form-control" id="material-textarea2" rows="4"></textarea>
                                                    <label for="material-textarea2">Objetivo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-material floating">
                                                    <button class="btn btn-sm btn-success">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">#</th>
                                            <th>Nombre</th>
                                            <th class="text-center" style="width: 100px;">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">&nbsp;</div>

                        <div class="border-b push-30">
                            <h2 class="push-10">Funciones <span class="h5 font-w400 text-muted">Manual de Organización</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <form class="form-horizontal push-10-t" onsubmit="return false;">
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="form-material floating">
                                                    <textarea class="form-control" id="material-textarea2" rows="4"></textarea>
                                                    <label for="material-textarea2">Función</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-material floating">
                                                    <button class="btn btn-sm btn-success">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">#</th>
                                            <th>Nombre</th>
                                            <th class="text-center" style="width: 100px;">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                    <!-- END Manual -->
                    <!-- Mapa -->
                    <div class="tab-pane fade fade-up" id="search-mapa">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Mapa de procesos</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <ul class="nav nav-tabs" data-toggle="tabs">
                                        <li class="active">
                                            <a href="#dg-1">Dirección general ........1</a>
                                        </li>
                                        <li>
                                            <a href="#dg-2">Dirección general ........2</a>
                                        </li>
                                        <li>
                                            <a href="#dg-2">Dirección general ........2</a>
                                        </li>
                                        <li class="pull-right">
                                            <ul class="block-options push-10-t push-10-r">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="block-content tab-content">
                                        <div class="tab-pane active" id="dg-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="block-content">
                                                        <form class="form-horizontal push-10-t" onsubmit="return false;">
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <div class="form-material floating">
                                                                        <input class="form-control" type="text" id="material-text2">
                                                                        <label for="material-text2">Rubro</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-material floating">
                                                                        <input class="form-control" type="text" id="material-proceso">
                                                                        <label for="material-proceso">Proceso</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-material floating">
                                                                        <input class="form-control" type="text" id="material-objetivo">
                                                                        <label for="material-objetivo">Objetivo</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border-b push-30">
                                                                <h4 class="push-10">Agregar tabla</h4>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-4">
                                                                    <div class="form-material floating">
                                                                        <input class="form-control" type="text" id="material-objetivo">
                                                                        <label for="material-objetivo">Etapa del proceso</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-material floating">
                                                                        <textarea class="form-control" id="material-textarea2" rows="3"></textarea>
                                                                        <label for="material-objetivo">Descripción</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-material floating">
                                                                        <textarea class="form-control" id="material-textarea2" rows="3"></textarea>
                                                                        <label for="material-objetivo">Responsables</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-material floating">
                                                                        <button class="btn btn-sm btn-success">+</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="block-content">
                                                                <table class="table table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">#</th>
                                                                            <th>Etapas del proceso</th>
                                                                            <th>Descripción</th>
                                                                            <th>Responsables</th>
                                                                            <th class="text-center">Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>

                                                                            <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>

                                                                            <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">3</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>

                                                                            <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 col-md-offset-4">
                                                            <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="dg-2">
                                            <h4 class="font-w300 push-15">Profile Tab</h4>
                                            <p>...</p>
                                        </div>
                                        <div class="tab-pane" id="dg-3">
                                            <h4 class="font-w300 push-15">Profile Tab</h4>
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END Mapa -->
                    <!-- Proceso -->
                    <div class="tab-pane fade fade-up" id="search-proceso">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Manual del Proceso Integral de Supervisión</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <ul class="nav nav-tabs" data-toggle="tabs">
                                        <li class="active">
                                            <a href="#proceso-1">Dirección general ........1</a>
                                        </li>
                                        <li>
                                            <a href="#proceso-2">Dirección general ........2</a>
                                        </li>
                                        <li>
                                            <a href="#proceso-3">Dirección general ........2</a>
                                        </li>
                                        <li class="pull-right">
                                            <ul class="block-options push-10-t push-10-r">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="block-content tab-content">
                                        <div class="tab-pane active" id="proceso-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="block-content">
                                                        <form class="form-horizontal push-10-t" onsubmit="return false;">

                                                            <div class="form-group">
                                                                <div class="col-md-6">
                                                                    <div class="form-material floating">
                                                                        <input class="form-control" type="text" id="material-objetivo">
                                                                        <label for="material-objetivo">Proceso</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <label class="col-xs-12" for="example-file-input">Diagrama</label>
                                                                    <div class="col-xs-12">
                                                                        <input type="file" id="example-file-input" name="example-file-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-material floating">
                                                                        <button class="btn btn-sm btn-success">+</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="block-content">
                                                                <table class="table table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">#</th>
                                                                            <th>Proceso</th>
                                                                            <th>Diagrama</th>
                                                                            <th class="text-center">Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Diagrama.png</td>

                                                                            <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Diagrama.png</td>

                                                                            <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">3</td>
                                                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                                                            <td>Diagrama.png</td>

                                                                            <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title=""><i class="fa fa-pencil"></i></button>
                                                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 col-md-offset-4">
                                                            <form class="form-horizontal push-10-t" onsubmit="return false;">
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
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="proceso-2">
                                            <h4 class="font-w300 push-15">Profile Tab</h4>
                                            <p>...</p>
                                        </div>
                                        <div class="tab-pane" id="proceso-3">
                                            <h4 class="font-w300 push-15">Profile Tab</h4>
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Pproceso -->
                    <!-- Alcance -->
                    <div class="tab-pane fade fade-up" id="search-alcance">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Alcance </span></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <form class="form-horizontal push-10-t" onsubmit="return false;">
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="form-material floating">
                                                    <select class="form-control" id="material10" size="1">
                                                        <option></option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                    </select>
                                                    <label for="material10">Aspectos</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-material floating">
                                                    <button class="btn btn-sm btn-success">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">#</th>
                                            <th>Nombre</th>
                                            <th class="text-center" style="width: 100px;">Quitar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <form class="form-horizontal push-10-t" onsubmit="return false;">
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="form-material floating">
                                                    <select class="form-control" id="material10" size="1">
                                                        <option></option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                        <option value="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</option>
                                                    </select>
                                                    <label for="material10">Procesos</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-material floating">
                                                    <button class="btn btn-sm btn-success">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">#</th>
                                            <th>Nombre</th>
                                            <th class="text-center" style="width: 100px;">Quitar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-daterange1">Fechas</label>
                                        <div class="col-md-10">
                                            <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                                <input class="form-control" type="text" id="example-daterange1" name="example-daterange1" placeholder="Desde">
                                                <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                <input class="form-control" type="text" id="example-daterange2" name="example-daterange2" placeholder="Hasta">
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
                    <!-- END Alcance -->
                    <!-- Problematica -->
                    <div class="tab-pane fade fade-up" id="search-problematica">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" ><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" ><span></span> Validado
                                </label>
                            </div>
                        </div>

                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Problematica</span></h2>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">
                                                <textarea class="form-control" id="material-problematica" rows="8"></textarea>
                                                <label for="material10">Descripción</label>
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
                    <!-- END Problematica -->


                    <!-- Revisiones -->
                    <div class="tab-pane fade fade-up" id="search-projects">
                        <div class="border-b push-30">
                            <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Revisiones encontrados</span></h2>
                        </div>
                        <table class="table table-striped table-vcenter table-condensed">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">P/A/C</th>
                                <th class="text-center">Clave</th>
                                <th class="text-left">Área a revisar</th>
                                <th class="text-left">Inicio</th>
                                <th class="text-left">Fin</th>
                                <th class="text-left">Validar</th>
                                <th class="text-left">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-center">P</td>
                                <td class="text-center">700</td>
                                <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                <td>01/01/2013</td>
                                <td>31/12/2013</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                            <i class="fa fa-send-o"></i>
                                        </a>
                                        <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-small2">
                                            <i class="fa fa-commenting-o"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado" href="./archivos/curso_taller_SD.tiff">
                                            <i class="fa fa-cloud-download"></i>
                                        </a>
                                        <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-center">P</td>
                                <td class="text-center">700</td>
                                <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                <td>01/01/2013</td>
                                <td>31/12/2013</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                            <i class="fa fa-send-o"></i>
                                        </a>
                                        <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                            <i class="fa fa-commenting-o"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado" href="./archivos/curso_taller SD.pdf" target="_blank">
                                            <i class="fa fa-cloud-download"></i>
                                        </a>
                                        <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-center">P</td>
                                <td class="text-center">700</td>
                                <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                <td>01/01/2013</td>
                                <td>31/12/2013</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                            <i class="fa fa-send-o"></i>
                                        </a>
                                        <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                            <i class="fa fa-commenting-o"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                            <i class="fa fa-cloud-download"></i>
                                        </button>
                                        <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-center">P</td>
                                <td class="text-center">700</td>
                                <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                <td>01/01/2013</td>
                                <td>31/12/2013</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                            <i class="fa fa-send-o"></i>
                                        </a>
                                        <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                            <i class="fa fa-commenting-o"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                            <i class="fa fa-cloud-download"></i>
                                        </button>
                                        <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="text-center">P</td>
                                <td class="text-center">700</td>
                                <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                <td>01/01/2013</td>
                                <td>31/12/2013</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                            <i class="fa fa-send-o"></i>
                                        </a>
                                        <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                            <i class="fa fa-commenting-o"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                            <i class="fa fa-cloud-download"></i>
                                        </button>
                                        <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END Revisiones -->
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
</script>
</body>
</html>