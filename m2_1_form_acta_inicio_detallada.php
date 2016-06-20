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
                        Detalle<small> Acta inicio</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Planeación detallada</li>
                        <li><a href="m2_1_acta_inicio">Acta inicio</a></li>
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
                        <a href="#search-ac-inicio">1er Acta</a>
                    </li>					
					<li>
                        <a href="#search-ac-dos">2da Acta</a>
                    </li>					
					<li>
                        <a href="#search-ac-tres">3er Acta</a>
                    </li>
					<li>
                        <a href="#search-ac-cuatro">4ta Acta</a>
                    </li>					
					<li>
                        <a href="#search-ac-cinco">5ta Acta</a>
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
                                        <span class="h4 font-w700 text-white">Acta</span>
                                        <span class="h4 text-white-op">Inicio</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2">
                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                    <div class="block-content block-content-full bg-primary clearfix">
                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                        <span class="h4 font-w700 text-white">Acta</span>
                                        <span class="h4 text-white-op">Inicio</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Info -->                    
					<!-- Acta inicio -->
                    <div class="tab-pane fade fade-up in" id="search-ac-inicio">
                        <div class="border-b push-30">
                            <h2 class="push-10">* 1er <span class="h5 font-w400 text-muted">&Aacute;rea auditada</span></h2>
                        </div>
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
                            <h2 class="push-10"><span class="h5 font-w400 text-muted"></span></h2>
                        </div>
						<div class="block-header">
							<ul class="block-options">
								<li>
									<button type="button"><i class=""></i></button>
								</li>
							</ul>
							<h3 class="block-title">General</h3>
						</div>
						<div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form class="form-horizontal push-10-t" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <div class="form-material floating">
													<input class="js-masked-time form-control" type="text" id="hora" name="hora">
													<label for="hora">Hora <small class="text-muted">00:00</small></label>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <div class="form-material">
													<input class="js-maxlength form-control" type="text" id="dia" name="dia" maxlength="20">
													<label for="dia">Día</label>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">
                                               <select class="form-control" id="area" size="1">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="3">D</option>
                                                </select>
                                                <label for="area">Area visiada</label>
                                            </div>
                                        </div>
                                    </div>
									
                                </form>
                            </div>
                        </div>
						<div class="border-b push-30">
							<h2 class="push-10"><span class="h5 font-w400 text-muted"></span></h2>
						</div>
						<div class="block-header">
							<ul class="block-options">
								<li>
									<button type="button"><i class=""></i></button>
								</li>
							</ul>
							<h3 class="block-title">Hechos</h3>
						</div>
						<div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="block-content">
                                    <form class="form-horizontal push-10-t" onsubmit="return false;">
                                        <div class="form-group">
											<div class="col-md-11">
												<div class="form-material floating">
													<select class="form-control" id="testigos" size="1">
														<option></option><!-- Empty value for demostrating material select box -->
														<option value="1">Testigo 1</option>
														<option value="2">Testigo 2</option>
														<option value="3">Testigo 3</option>
														<option value="3">Testigo 4</option>
													</select>
													<label for="testigos">Testigos</label>
												</div>
											</div>
											<div class="col-md-1">
												<div class="form-material floating">
													<button class="btn btn-sm btn-success">+</button>
												</div>
											</div>
											
											<table class="table table-condensed">
												<thead>
												<tr>
													<th class="text-center" style="width: 50px;">#</th>
													<th>TESTIGOS</th>
													<th class="text-center" style="width: 100px;">Acciones</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td class="text-center">1</td>
													<td>Testigo 1</td>
													<td class="text-center">
														<div class="btn-group">
															<button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title=""><i class="fa fa-pencil"></i></button>
															<button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title=""><i class="fa fa-times"></i></button>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>Testigo 2</td>
													<td class="text-center">
														<div class="btn-group">
															<button class="btn btn-xs btn-primary" type="button" data-toggle="tooltip" title="" data-original-title=""><i class="fa fa-pencil"></i></button>
															<button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" data-original-title=""><i class="fa fa-times"></i></button>
														</div>
													</td>
												</tr>
												</tbody>
											</table>
										
										
											<div class="col-md-6">
												<div class="form-material floating">
													<div class="form-material floating">
														<input class="js-maxlength form-control" type="text" id="rfc" name="rfc" maxlength="20">
														<label for="rfc">RFC</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<div class="form-material floating">
														<select class="form-control" id="enlace" size="1">
															<option></option><!-- Empty value for demostrating material select box -->
															<option value="1">Enlace 1</option>
															<option value="2">Enlace 2</option>
															<option value="3">Enlace 3</option>
															<option value="4">Enlace 4</option>
														</select>
														<label for="enlace">Enlace</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-material floating">
													<div class="form-material floating">
														<input class="js-maxlength form-control" type="text" id="edad" name="edad" maxlength="20">
														<label for="edad">Edad</label>
													</div>
												</div>
											</div>
										
										
											<div class="col-md-6">
												<div class="form-material floating">
													<div class="form-material floating">
														<input class="js-maxlength form-control" type="text" id="ecivil" name="ecivil" maxlength="20">
														<label for="ecivil">Estado civil</label>
													</div>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-material floating">
													<select class="form-control" id="estado" size="1">
														<option></option><!-- Empty value for demostrating material select box -->
														<option value="1">Estado 1</option>
														<option value="2">Estado 2</option>
														<option value="3">Estado 3</option>
														<option value="4">Estado 4</option>
													</select>
													<label for="estado">Estado</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-material floating">
													<div class="form-material floating">
														<input class="js-maxlength form-control" type="text" id="localidad" name="localidad" maxlength="20">
														<label for="localidad">Localidad</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-material floating">
													<div class="form-material floating">
														<input class="js-maxlength form-control" type="text" id="rfc2" name="rfc2" maxlength="20">
														<label for="rfc2">RFC 2</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-material floating">
													<div class="form-material floating">
														<input class="js-maxlength form-control" type="text" id="h-conclusion" name="h-conclusion" maxlength="20">
														<label for="h-conclusion">Hora conclusión</label>
													</div>
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
						
						

                    </div>
                    <!-- End Acta Inicio -->
					<!-- Acta segunda -->
                    <div class="tab-pane fade fade-up in" id="search-ac-dos">
                        <div class="border-b push-30">
                            <h2 class="push-10">* 2da <span class="h5 font-w400 text-muted">&Aacute;rea auditada</span></h2>
                        </div>
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

                    </div>
                    <!-- End Acta segunda -->
					<!-- Acta tercera -->
                    <div class="tab-pane fade fade-up in" id="search-ac-tres">
                        <div class="border-b push-30">
                            <h2 class="push-10">* 3ra <span class="h5 font-w400 text-muted">&Aacute;rea auditada</span></h2>
                        </div>
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
                    </div>
                    <!-- End Acta tercera -->					
					<!-- Acta 4 -->
                    <div class="tab-pane fade fade-up in" id="search-ac-cuatro">
                        <div class="border-b push-30">
                            <h2 class="push-10">* 4ta <span class="h5 font-w400 text-muted">&Aacute;rea auditada</span></h2>
                        </div>
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
                    </div>
                    <!-- End Acta 4 -->
					<!-- Acta quinta -->
                    <div class="tab-pane fade fade-up in" id="search-ac-cinco">
                        <div class="border-b push-30">
                            <h2 class="push-10">* 5ta <span class="h5 font-w400 text-muted">&Aacute;rea auditada</span></h2>
                        </div>
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
                    </div>
                    <!-- End Acta quinta -->
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