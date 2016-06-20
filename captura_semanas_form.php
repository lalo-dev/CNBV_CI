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
                                Agregar documento <small>AAI</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Normativa</li>
                                <li><a class="link-effect" href="m7_1_normativa_aai.php">AAI</a></li>
                                <li>Agregar documento</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    <div class="block">
                        <ul class="nav nav-tabs" data-toggle="tabs">
                            <!--<li class="active">
                                <a href="#search-semanas">Semanas</a>
                            </li>-->
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
                            <div class="tab-pane fade fade-up in active" id="search-semanas">
                                <!-- Agregar -->
                                <div class="block block-themed">
                                    <div class="block-header bg-primary">
                                        <h3 class="block-title">Captura de semanas</h3>
                                    </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                	<form>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
	                                        <tr>
	                                            <th class="text-left" data-toggle="tooltip" data-placement="top" title="#" rowspan="2">#</th>
	                                            <th rowspan="2">DESCRIPCIÓN DE ACTIVIDADES A DESARROLLAR</th>
	                                            <th class="text-center" colspan="2">FECHA PROGRAMADA</th>
	                                            <th class="text-center" rowspan="2">AVANCE</th>
	                                            <th class="text-center" colspan="3">PAPELES DE TRABAJO</th>
	                                            <th class="text-center" colspan="2">HALLAZGOS</th>
	                                        </tr>
	                                        <tr>
	                                        	
	                                            <th class="text-center">INICIO DÍA/MES/AÑO</th>
	                                            <th class="text-center">TÉRMINO DÍA/MES/AÑO</th>
	                                            
	                                            <th class="text-center">AVANCE</th>
	                                            <th class="text-center">REVISION</th>
	                                            <th class="text-center">FIRMA</th>
	                                            <th class="text-center">TOTALES</th>
	                                            <th class="text-center">DETALLE</th>
	                                        </tr>
                                        </thead>
                                        <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                            <td>Elaborar y entregar la Orden de auditoría y el Acta de inicio</td>
	                                            <td class="text-center">13/04/15</td>
	                                            <td class="text-center">14/04/15</td>
	                                            <td class="text-center">
			                                        <input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%">
	                                            </td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">3</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                            <td>Solicitar información y documentación al área auditada</td>
	                                            <td class="text-center">15/04/15</td>
	                                            <td class="text-center">02/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">1</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                            <td>Elaborar la Carta de Planeación, el Programa de Trabajo y la Programación del Cronograma de Actividades</td>
	                                            <td class="text-center">20/04/15</td>
	                                            <td class="text-center">24/04/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">2</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                            <td>Desarrollar los antecedentes de la auditoría</td>
	                                            <td class="text-center">22/04/15</td>
	                                            <td class="text-center">30/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">4</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>5</td>
	                                            <td>Elaborar la cedula del examen y evaluación del Control Interno, basado en las "Normas Generales de Control Interno</td>
	                                            <td class="text-center">1/06/15</td>
	                                            <td class="text-center">15/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">7</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>6</td>
	                                            <td>Revisar la estructura orgánica autorizada y funcional</td>
	                                            <td class="text-center">4/05/15</td>
	                                            <td class="text-center">11/05/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">4</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>7</td>
	                                            <td>Verificar el cumplimiento de metas y objetivos</td>
	                                            <td class="text-center">11/05/15</td>
	                                            <td class="text-center">13/05/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">3</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>8</td>
	                                            <td>Analizar los indicadores y medición del desempeño del área (eficiencia y eficacia)</td>
	                                            <td class="text-center">11/05/15</td>
	                                            <td class="text-center">13/05/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">4</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>9</td>
	                                            <td>Verificar la participación de la Dirección General en la Administración de Riesgos Institucionales</td>
	                                            <td class="text-center">30/04/15</td>
	                                            <td class="text-center">07/05/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">3</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>10</td>
	                                            <td>Revisar el impacto de la realizacíon de las funciones de la Dirección General para inhibir malas prácticas en las entidades financieras supervisadas (oportunidad y calidad)</td>
	                                            <td class="text-center">11/05/15</td>
	                                            <td class="text-center">03/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">5</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>11</td>
	                                            <td>Elaborar estadísticas en la atención de solicitudes de sanción</td>
	                                            <td class="text-center">18/05/15</td>
	                                            <td class="text-center">28/05/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">2</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>12</td>
	                                            <td>Identificar los controles implementados para la recepción, manejo y divulgación de la información</td>
	                                            <td class="text-center">25/05/15</td>
	                                            <td class="text-center">05/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">11</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>13</td>
	                                            <td>Verificar la coordinación entre las Direcciones Generales Adjuntas</td>
	                                            <td class="text-center">25/05/15</td>
	                                            <td class="text-center">09/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">15</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>14</td>
	                                            <td>Indicar los avances del proyecto estratégico denominado "Replanteamiento de la visión de sanciones" (4 Líneas de acción)</td>
	                                            <td class="text-center">15/04/15</td>
	                                            <td class="text-center">02/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">13</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>15</td>
	                                            <td>Comprobar en un caso, el cumplimiento de la normativa y lineamientos internos en cuanto al Proceso de Sanciones</td>
	                                            <td class="text-center">09/06/15</td>
	                                            <td class="text-center">11/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"> </td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">17</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>16</td>
	                                            <td>Elaborar en su caso, del proyecto de observaciones para revisión de Subdirector (Jefe de Grupo) y realizar la confronta con el área auditada para formalizar las cédulas de observaciones</td>
	                                            <td class="text-center">08/06/15</td>
	                                            <td class="text-center">15/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">10</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>17</td>
	                                            <td>Elaborar y revisar el Oficio de Informe de Auditoría y turnario del Titular del Área de Auditoría Interna para su autorización y emisión</td>
	                                            <td class="text-center">16/06/15</td>
	                                            <td class="text-center">22/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">3</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>18</td>
	                                            <td>Elaborar, revisar y autorizar la Cédula Única de Auditoría, la Cédula de Supervisón de Auditoría y el Cronograma (tiempos reales)</td>
	                                            <td class="text-center">23/06/15</td>
	                                            <td class="text-center">30/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">3</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
	                                        <tr>
	                                        	<td>19</td>
	                                            <td>Integrar y cerrar el Legajo de los Papeles de Trabajo de Auditoría</td>
	                                            <td class="text-center">23/06/15</td>
	                                            <td class="text-center">30/06/15</td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><input class="form-control input-sm col-md-2" type="text" id="avance" name="avance" size="1" value="100%"></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center"><label class="css-input switch switch-sm switch-primary"><input type="checkbox"><span></span></label></td>
	                                            <td class="text-center">6</td>
	                                            <td><button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#modal-popin" data-placement="top" title="Consulta"><i class="fa fa-eye"></i></button></td>
	                                            
	                                        </tr>
										</tbody>
										<!--
										<tfoot>
	                                        <tr>
	                                        	<th></th>
											</tr>
                                        </tfoot>
                                        -->
                                    </table>
                                    
			                                            <div class="form-group">
			                                                <div class="col-xs-12">
			                                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
			                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
			                                                </div>
			                                            </div>
                                    </form>
                                </div>
                                <!-- End Lista -->
                                </div>
                            </div>
                            <!-- End Escolaridad -->
                        </div>
                        
                        <!-- MODALES -->
                    	<div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-hidden="true">
				            <div class="modal-dialog modal-dialog-popin">
				                <div class="modal-content">
				                    <div class="block block-themed block-transparent remove-margin-b">
				                        <div class="block-header bg-primary-dark">
				                            <ul class="block-options">
				                                <li>
				                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
				                                </li>
				                            </ul>
				                            <h3 class="block-title">Hallazgos</h3>
				                        </div>
				                        <div class="block-content">
				                        	
				                        	
				                			<!-- AGREGAR HALLAZGO -->        	
											<div class="block block-themed block-opt-hidden">
			                                    <div class="block-header bg-primary">
			                                        <ul class="block-options">
			                                            <li>
			                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
			                                            </li>
			                                        </ul>
			                                        <h3 class="block-title">Agregar hallazgo</h3>
			                                    </div>
			                                    <div class="block-content">
			                                        <form class="form-horizontal push-10-t" action="#" method="post">
			
			                                            <div class="form-group">
<!-- 				                                            <label class="col-xs-12" for="contact1-msg">Descripcíon</label> -->
				                                            <div class="col-xs-12">
				                                                <textarea class="form-control" id="contact1-msg" name="contact1-msg" rows="7" placeholder="Ingresa un hallazgo..."></textarea>
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
				                        	<!-- AGREGAR HALLAZGO -->
				                        	
				                        	
				                        	
				                        	<div class="table-responsive">
					                        	<table class="table table-striped table-vcenter table-condensed">
			                                        <thead>
				                                        <tr>
				                                            <th class="text-left">#</th>
				                                            <th class="text-center">Descripción</th>
				                                            <th class="text-center">Acciones</th>
				                                        </tr>
			                                        </thead>
			                                        <tbody>
				                                        <tr>
				                                        	<td class="text-left">1</td>
				                                            <td class="text-left">Aqui el hallazgo uno</td>
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
				                                        	<td class="text-left">2</td>
				                                            <td class="text-left">Este es un tercer hallazgo de prueba</td>
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
				                                        	<td class="text-left">3</td>
				                                            <td class="text-left">Se necesita una prueba mas asi que esta linea gunge como un hallazgo mas esperando que ocupe mas de una línea</td>
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
				                        	
				                        	
				                        </div>
				                    </div>
				                    <div class="modal-footer">
				                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cerrar</button>
<!-- 				                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button> -->
				                    </div>
				                </div>
				            </div>
				        </div>
                    <!-- END MODALES -->
                        
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