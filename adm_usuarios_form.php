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
                                Crear/Editar usuario<small></small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Administrar</li>
                                <li><a class="link-effect" href="adm_usuarios.php">Usuarios</a></li>
                                <li>Crear/Editar usuario</li>
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
                                <a href="#search-datos">Datos generales</a>
                            </li>
                            <li>
                                <a href="#search-escolaridad">Escolaridad</a>
                            </li>
                            <li>
                                <a href="#search-habilidades">Habilidades</a>
                            </li>
                            <li>
                                <a href="#search-certificaciones">Certificaciones</a>
                            </li>
                            <li>
                                <a href="#search-cursos">Cursos</a>
                            </li>
                            <li>
                                <a href="#search-exp">Experiencia profesional</a>
                            </li>
                            <li>
                                <a href="#search-areas">Áreas de experiencia</a>
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
                            <!-- Usuario generales -->
                            <div class="tab-pane fade fade-up in active" id="search-datos">
                                <div class="bg-image" style="background-image: url('assets/img/photos/photo6@2x.jpg');">
                                    <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                                        <div class="push-30-t push animated fadeInDown">
                                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar4.jpg" alt="">
                                        </div>
                                        <div class="push-30 animated fadeInUp">
                                            <h2 class="h4 font-w600 text-white push-5">PAKAL AI</h2>
                                            <h3 class="h5 text-gray">CNBV OIC</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">&nbsp;</div>
                    
                                <form class="js-validation-material form-horizontal push-10-t" action="#" method="post">
                                    <fieldset>
                                        <legend>Datos generales</legend>

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="civil">
                                                        <option></option>
                                                        <option value="1">Administrador</option>
                                                        <option value="2">Coordinador</option>
                                                        <option value="3">Jefe de grupo</option>
                                                        <option value="4">Contralor</option>
                                                        <option value="5">Consulta</option>
                                                    </select>
                                                    <label for="civil">Rol</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" value="nombreUsuario">
                                                    <label for="val1">Usuario</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="password" value="12345678">
                                                    <label for="val1">Contraseña</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="val4" name="val4">
                                                    <label for="val4">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="val5" name="val5">
                                                    <label for="val5">Apellido Paterno</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="val6" name="val6">
                                                    <label for="val6">Apellido Materno</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <label for="fdn">Fecha de nacimiento</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="dia" name="dia">
                                                        <option></option>
                                                        <option value="e1">1</option>
                                                        <option value="e2">2</option>
                                                        <option value="e3">3</option>
                                                        <option value="e4">4</option>
                                                        <option value="e5">5</option>
                                                        <option value="e6">6</option>
                                                        <option value="e7">7</option>
                                                        <option value="e8">8</option>
                                                        <option value="e9">9</option>
                                                        <option value="e10">10</option>
                                                    </select>
                                                    <label for="dia">Día</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="mes" name="mes">
                                                        <option></option>
                                                        <option value="f1">1</option>
                                                        <option value="f2">2</option>
                                                        <option value="f3">3</option>
                                                        <option value="f4">4</option>
                                                        <option value="f5">5</option>
                                                        <option value="f6">6</option>
                                                        <option value="f7">7</option>
                                                        <option value="f8">8</option>
                                                        <option value="f9">9</option>
                                                        <option value="f10">10</option>
                                                        <option value="f11">11</option>
                                                        <option value="f12">Diciembre</option>
                                                    </select>
                                                    <label for="mes">Mes</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="ona" name="ona">
                                                        <option></option>
                                                        <option value="g1">2000</option>
                                                        <option value="g2">1999</option>
                                                        <option value="g3">1998</option>
                                                        <option value="g4">1997</option>
                                                        <option value="g5">1996</option>
                                                        <option value="g6">1995</option>
                                                        <option value="g7">1994</option>
                                                        <option value="g8">1993</option>
                                                        <option value="g9">1992</option>
                                                        <option value="g10">1991</option>
                                                        <option value="g11">1990</option>
                                                        <option value="g12">1989</option>
                                                    </select>
                                                    <label for="ona">Año</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="sexo" name="sexo">
                                                        <option></option>
                                                        <option value="c1">Femenino</option>
                                                        <option value="c2">Masculino</option>
                                                    </select>
                                                    <label for="sexo">Sexo</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="civil">
                                                        <option></option>
                                                        <option value="1">Casado(a)</option>
                                                        <option value="2">Soltero(a)</option>
                                                        <option value="3">Viudo(a)</option>
                                                        <option value="4">Divorciado(a)</option>
                                                        <option value="5">Union libre</option>
                                                    </select>
                                                    <label for="civil">Estado civil</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="curp" name="curp">
                                                    <label for="curp">CURP</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="lugar" name="lugar">
                                                    <label for="lugar">Lugar de nacimiento</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="nacionalidad" name="nacionalidad">
                                                        <option></option>
                                                        <option value="mex">Mexicano</option>
                                                        <option value="can">Candiense</option>
                                                    </select>
                                                    <label for="nacionalidad">Nacionalidad</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Datos laborales</legend>

                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label class="css-input switch switch-primary">
                                                    <input type="checkbox" checked><span></span> Estructura
                                                </label>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="val2" name="val2" value="6">
                                                    <label for="val2">No. Expediente</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val3" name="val3">
                                                        <option></option>
                                                        <option selected value="oic">Organo Interno de Control</option>
                                                        <option value="aai">Área de Auditoria Interna</option>
                                                        <option value="aadmgp">AADMGP</option>
                                                        <option value="aqyr">AQyR</option>
                                                    </select>
                                                    <label for="val3">Área</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val7" name="val7">
                                                        <option></option>
                                                        <option selected value="toic">Titular del OIC</option>
                                                        <option value="ad">Apoyo administrativo</option>
                                                    </select>
                                                    <label for="val7">Cargo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="val8" name="val8">
                                                    <option></option>
                                                    <option value="a1">Presidente</option>
                                                    <option selected value="a2">Vicepresidente</option>
                                                    <option value="a3">Director general adjunto</option>
                                                    <option value="a4">Director de área</option>
                                                    <option value="a5">Subdirector de área</option>
                                                    <option value="a6">Jefe de departamento</option>
                                                    <option value="a7">Operativo</option>
                                                    <option value="a8">Honorarios</option>
                                                </select>
                                                <label for="val8">Nivel</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="NA1">
                                                <label for="val9">Código</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="val10" name="val10">
                                                    <option></option>
                                                    <option value="h1">Operativo</option>
                                                    <option selected value="h2">SPC</option>
                                                    <option value="h3">Nombramiento directo</option>
                                                </select>
                                                <label for="val10">Estatus</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="codigopuesto" name="codigopuesto">
                                                    <option></option>
                                                    <option selected value="i1">xxxxxxx</option>
                                                    <option value="i2">xxxxxxx</option>
                                                    <option value="i3">xxxxxxx</option>
                                                </select>
                                                <label for="codigopuesto">Codigo puesto</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nivel" name="nivel">
                                                    <option></option>
                                                    <option selected value="b1">Licenciatura</option>
                                                    <option value="b2">Maestría</option>
                                                    <option value="b3">Doctorado</option>
                                                </select>
                                                <label for="nivel">Grado</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="Lic" id="codnivel" name="codnivel">
                                                <label for="codnivel">Código</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="1234567890">
                                                <label for="ced">Cedula</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="EMM">
                                                <label for="ini">Iniciales</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="eduardo.martinez@cnbv.com">
                                                <label for="ccnbv">Correo electronico CNBV</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="cpersonal" name="cpersonal">
                                                <label for="cpersonal">Correo electronico personal</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="celular" name="celular">
                                                <label for="celular">Celular</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="tel" name="tel">
                                                <label for="tel">Teléfono</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="ext" name="ext">
                                                <label for="ext">Extención</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="dir" name="dir">
                                                <label for="dir">Dirección</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="torre" name="torre">
                                                <label for="torre">Torre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="piso" name="piso">
                                                <label for="piso">Piso</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="coo" name="coo">
                                                <label for="coo">Coordenada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <legend>Cédula</legend>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <div class="form-material form-material-primary floating">
                                                            <input class="form-control input-sm" type="text" id="cedula">
                                                            <label for="cedula">No. Cédula</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button class="btn btn-info btn-sm" type="button">
                                                            <i class="fa fa-download"></i> Descargar
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <label class="col-sm-12" for="example-file-input">Archivo adjunto</label>
                                                        <div class="col-sm-12">
                                                            <input type="file" id="example-file-input" name="example-file-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend>Currículum</legend>
                                                <div class="form-group">
                                                    <div class="col-sm-2">
                                                        <button class="btn btn-info btn-sm" type="button">
                                                            <i class="fa fa-download"></i> Descargar
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="col-sm-12" for="example-file-input">Archivo adjunto</label>
                                                        <div class="col-sm-12">
                                                            <input type="file" id="example-file-input" name="example-file-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend>Perfil de puesto</legend>
                                                <div class="form-group">
                                                    <div class="col-sm-2">
                                                        <button class="btn btn-info btn-sm" type="button">
                                                            <i class="fa fa-download"></i> Descargar
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="col-sm-12" for="example-file-input">Archivo adjunto</label>
                                                        <div class="col-sm-12">
                                                            <input type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <legend>Desempeño</legend>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <button class="btn btn-info btn-sm" type="button">
                                                        <i class="fa fa-download"></i> Descargar
                                                    </button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-12" for="example-file-input">Archivo adjunto</label>
                                                    <div class="col-sm-12">
                                                        <input type="file">
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <legend>Fotografía</legend>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <button class="btn btn-info btn-sm" type="button">
                                                        <i class="fa fa-download"></i> Descargar
                                                    </button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-12" for="example-file-input">Archivo adjunto</label>
                                                    <div class="col-sm-12">
                                                        <input type="file">
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <legend>Asiganción - Otras actividades</legend>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span> Adquisiciones
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span> COMSOC
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span> Actas de entrega
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span> Auditores externos
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span> ASF
                                                    </label>
                                                </div>
                                            </div>
                                            </fieldset>
                                        </div>                                        
                                    </div>

                                    <div class="row">&nbsp;</div>
                                    <div class="row">&nbsp;</div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Usuario generales -->
                            <!-- Escolaridad -->
                            <div class="tab-pane fade fade-up" id="search-escolaridad">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar escolaridad</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="institucion" name="institucion">
                                                            <option></option>
                                                            <option value="unam">UNAM</option>
                                                            <option value="ipn">IPN</option>
                                                            <option value="uam">UAM</option>
                                                        </select>
                                                        <label for="institucion">Institución</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="titulo" name="titulo">
                                                            <option></option>
                                                            <option value="1">Doctorado en XXXXX</option>
                                                            <option value="2">Maestría en XXXXX</option>
                                                            <option value="3">Licenciatura en XXXXX</option>
                                                        </select>
                                                        <label for="titulo">Título</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Desde</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia" name="dia">
                                                            <option></option>
                                                            <option value="e1">1</option>
                                                            <option value="e2">2</option>
                                                            <option value="e3">3</option>
                                                            <option value="e4">4</option>
                                                            <option value="e5">5</option>
                                                            <option value="e6">6</option>
                                                            <option value="e7">7</option>
                                                            <option value="e8">8</option>
                                                            <option value="e9">9</option>
                                                            <option value="e10">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes" name="mes">
                                                            <option></option>
                                                            <option value="f1">1</option>
                                                            <option value="f2">2</option>
                                                            <option value="f3">3</option>
                                                            <option value="f4">4</option>
                                                            <option value="f5">5</option>
                                                            <option value="f6">6</option>
                                                            <option value="f7">7</option>
                                                            <option value="f8">8</option>
                                                            <option value="f9">9</option>
                                                            <option value="f10">10</option>
                                                            <option value="f11">11</option>
                                                            <option value="f12">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="ona" name="ona">
                                                            <option></option>
                                                            <option value="g1">2000</option>
                                                            <option value="g2">1999</option>
                                                            <option value="g3">1998</option>
                                                            <option value="g4">1997</option>
                                                            <option value="g5">1996</option>
                                                            <option value="g6">1995</option>
                                                            <option value="g7">1994</option>
                                                            <option value="g8">1993</option>
                                                            <option value="g9">1992</option>
                                                            <option value="g10">1991</option>
                                                            <option value="g11">1990</option>
                                                            <option value="g12">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia" name="dia">
                                                            <option></option>
                                                            <option value="e1">1</option>
                                                            <option value="e2">2</option>
                                                            <option value="e3">3</option>
                                                            <option value="e4">4</option>
                                                            <option value="e5">5</option>
                                                            <option value="e6">6</option>
                                                            <option value="e7">7</option>
                                                            <option value="e8">8</option>
                                                            <option value="e9">9</option>
                                                            <option value="e10">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes" name="mes">
                                                            <option></option>
                                                            <option value="f1">1</option>
                                                            <option value="f2">2</option>
                                                            <option value="f3">3</option>
                                                            <option value="f4">4</option>
                                                            <option value="f5">5</option>
                                                            <option value="f6">6</option>
                                                            <option value="f7">7</option>
                                                            <option value="f8">8</option>
                                                            <option value="f9">9</option>
                                                            <option value="f10">10</option>
                                                            <option value="f11">11</option>
                                                            <option value="f12">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="ona" name="ona">
                                                            <option></option>
                                                            <option value="g1">2000</option>
                                                            <option value="g2">1999</option>
                                                            <option value="g3">1998</option>
                                                            <option value="g4">1997</option>
                                                            <option value="g5">1996</option>
                                                            <option value="g6">1995</option>
                                                            <option value="g7">1994</option>
                                                            <option value="g8">1993</option>
                                                            <option value="g9">1992</option>
                                                            <option value="g10">1991</option>
                                                            <option value="g11">1990</option>
                                                            <option value="g12">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="val10" name="val10">
                                                            <option></option>
                                                            <option value="1">10</option>
                                                            <option value="2">9</option>
                                                            <option value="3">8</option>
                                                            <option value="4">7</option>
                                                            <option value="5">6</option>
                                                            <option value="6">5</option>
                                                            <option value="7">4</option>
                                                            <option value="8">3</option>
                                                            <option value="9">2</option>
                                                            <option value="10">1</option>
                                                        </select>
                                                        <label for="val10">Años</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="doc" name="doc">
                                                            <option></option>
                                                            <option value="i1">Título</option>
                                                            <option value="i2">Cédula</option>
                                                            <option value="i3">Otro</option>
                                                        </select>
                                                        <label for="doc">Documento obtenido</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="estatus" name="estatus">
                                                            <option></option>
                                                            <option value="b1">Terminado</option>
                                                            <option value="b2">En curso</option>
                                                            <option value="b3">Otro</option>
                                                        </select>
                                                        <label for="estatus">Estatus</label>
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
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Institución</th>
                                                <th class="text-left">Título</th>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años en la carrera">Años</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="Documento obtenido">Documento</th>
                                                <th class="text-center">Estatus</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="text-left">UNAM</td>
                                                <td class="text-left">Doctorado en XXXXX</td>
                                                <td class="text-center">12/12/2005</td>
                                                <td class="text-center">12/12/2008</td>
                                                <td class="text-center">3</td>
                                                <td class="text-left">Título</td>
                                                <td class="text-center">Terminado</td>
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
                                                <td class="text-left">UNAM</td>
                                                <td class="text-left">Maestría en XXXXX</td>
                                                <td class="text-center">12/12/2003</td>
                                                <td class="text-center">12/12/2005</td>
                                                <td class="text-center">2</td>
                                                <td class="text-left">Título</td>
                                                <td class="text-left">Terminado</td>
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
                            <!-- Habilidades -->
                            <div class="tab-pane fade fade-up" id="search-habilidades">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar habilidad</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="hab1" name="hab1">
                                                        <label for="hab1">Habilidad</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="hab2" name="hab2">
                                                            <option></option>
                                                            <option value="1">Conocimiento de las regulaciones estatales y federales</option>
                                                            <option value="2">Administración de información</option>
                                                            <option value="3">Políticas y planeamiento</option>
                                                        </select>
                                                        <label for="hab2">Habilidad</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="nivel1" name="nivel1">
                                                            <option></option>
                                                            <option value="1">Básico</option>
                                                            <option value="2">Intermedio</option>
                                                            <option value="3">Experto</option>
                                                        </select>
                                                        <label for="nivel1">Nivel</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="val10" name="val10">
                                                            <option></option>
                                                            <option value="1">10</option>
                                                            <option value="2">9</option>
                                                            <option value="3">8</option>
                                                            <option value="4">7</option>
                                                            <option value="5">6</option>
                                                            <option value="6">5</option>
                                                            <option value="7">4</option>
                                                            <option value="8">3</option>
                                                            <option value="9">2</option>
                                                            <option value="10">1</option>
                                                        </select>
                                                        <label for="val10">Años</label>
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
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Habilidad</th>
                                                <th class="text-center">Nivel</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años de experiencia">Años</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Conocimiento de las regulaciones estatales y federales</td>
                                                <td class="text-center">Básico</td>
                                                <td class="text-center">3</td>
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
                                                <td class="text-left">Administración de información</td>
                                                <td class="text-center">Intermedio</td>
                                                <td class="text-center">5</td>
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
                            <!-- End Habilidades -->
                            <!-- Certificaciones -->
                            <div class="tab-pane fade fade-up" id="search-certificaciones">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar certificación</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="cer1" name="cer1">
                                                        <label for="cer1">Certificación</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cer2" name="cer2">
                                                            <option></option>
                                                            <option value="1">ITIL</option>
                                                            <option value="2">COBIT 5</option>
                                                        </select>
                                                        <label for="cer2">Certificación</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="val10" name="val10">
                                                            <option></option>
                                                            <option value="1">2015</option>
                                                            <option value="2">2014</option>
                                                            <option value="3">2013</option>
                                                            <option value="4">2012</option>
                                                            <option value="5">2011</option>
                                                            <option value="6">2010</option>
                                                            <option value="7">2009</option>
                                                            <option value="8">2008</option>
                                                            <option value="9">2007</option>
                                                            <option value="10">2006</option>
                                                        </select>
                                                        <label for="val10">Año</label>
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
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Certificación</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años de certificación">Año</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">ITIL</td>
                                                <td class="text-center">2010</td>
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
                                                <td class="text-center">2</td>
                                                <td class="text-left">COBYT 5</td>
                                                <td class="text-center">2014</td>
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
                            <!-- End Certificaciones -->
                            <!-- Cursos -->
                            <div class="tab-pane fade fade-up" id="search-cursos">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar curso</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="cur1" name="cur1">
                                                        <label for="cur1">Curso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur2" name="cur2">
                                                            <option></option>
                                                            <option value="1">Curso en XXXXXXXX</option>
                                                            <option value="2">Curso en XXXXXXXX</option>
                                                        </select>
                                                        <label for="cur2">Curso</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Inicio</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia1" name="dia1">
                                                            <option></option>
                                                            <option value="e1">1</option>
                                                            <option value="e2">2</option>
                                                            <option value="e3">3</option>
                                                            <option value="e4">4</option>
                                                            <option value="e5">5</option>
                                                            <option value="e6">6</option>
                                                            <option value="e7">7</option>
                                                            <option value="e8">8</option>
                                                            <option value="e9">9</option>
                                                            <option value="e10">10</option>
                                                        </select>
                                                        <label for="dia1">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes1" name="mes1">
                                                            <option></option>
                                                            <option value="f1">1</option>
                                                            <option value="f2">2</option>
                                                            <option value="f3">3</option>
                                                            <option value="f4">4</option>
                                                            <option value="f5">5</option>
                                                            <option value="f6">6</option>
                                                            <option value="f7">7</option>
                                                            <option value="f8">8</option>
                                                            <option value="f9">9</option>
                                                            <option value="f10">10</option>
                                                            <option value="f11">11</option>
                                                            <option value="f12">12</option>
                                                        </select>
                                                        <label for="mes1">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="ona1" name="ona1">
                                                            <option></option>
                                                            <option value="g1">2000</option>
                                                            <option value="g2">1999</option>
                                                            <option value="g3">1998</option>
                                                            <option value="g4">1997</option>
                                                            <option value="g5">1996</option>
                                                            <option value="g6">1995</option>
                                                            <option value="g7">1994</option>
                                                            <option value="g8">1993</option>
                                                            <option value="g9">1992</option>
                                                            <option value="g10">1991</option>
                                                            <option value="g11">1990</option>
                                                            <option value="g12">1989</option>
                                                        </select>
                                                        <label for="ona1">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Fin</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia2" name="dia2">
                                                            <option></option>
                                                            <option value="e1">1</option>
                                                            <option value="e2">2</option>
                                                            <option value="e3">3</option>
                                                            <option value="e4">4</option>
                                                            <option value="e5">5</option>
                                                            <option value="e6">6</option>
                                                            <option value="e7">7</option>
                                                            <option value="e8">8</option>
                                                            <option value="e9">9</option>
                                                            <option value="e10">10</option>
                                                        </select>
                                                        <label for="dia2">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes2" name="mes2">
                                                            <option></option>
                                                            <option value="f1">1</option>
                                                            <option value="f2">2</option>
                                                            <option value="f3">3</option>
                                                            <option value="f4">4</option>
                                                            <option value="f5">5</option>
                                                            <option value="f6">6</option>
                                                            <option value="f7">7</option>
                                                            <option value="f8">8</option>
                                                            <option value="f9">9</option>
                                                            <option value="f10">10</option>
                                                            <option value="f11">11</option>
                                                            <option value="f12">12</option>
                                                        </select>
                                                        <label for="mes2">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="ona2" name="ona2">
                                                            <option></option>
                                                            <option value="g1">2000</option>
                                                            <option value="g2">1999</option>
                                                            <option value="g3">1998</option>
                                                            <option value="g4">1997</option>
                                                            <option value="g5">1996</option>
                                                            <option value="g6">1995</option>
                                                            <option value="g7">1994</option>
                                                            <option value="g8">1993</option>
                                                            <option value="g9">1992</option>
                                                            <option value="g10">1991</option>
                                                            <option value="g11">1990</option>
                                                            <option value="g12">1989</option>
                                                        </select>
                                                        <label for="ona2">Año</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="duracion1" name="duracion1">
                                                            <option></option>
                                                            <option value="1">120</option>
                                                            <option value="2">100</option>
                                                            <option value="3">80</option>
                                                            <option value="4">60</option>
                                                            <option value="5">40</option>
                                                            <option value="6">20</option>
                                                            <option value="7">10</option>
                                                        </select>
                                                        <label for="duracion1">Duración (Horas)</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="imparte" name="imparte">
                                                            <option></option>
                                                            <option value="1">Institución XXXXXXXX</option>
                                                            <option value="2">Institución XXXXXXXX</option>
                                                            <option value="3">Institución XXXXXXXX</option>
                                                        </select>
                                                        <label for="imparte">Institución que imparte el curso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="calificacion" name="calificacion">
                                                            <option></option>
                                                            <option value="np">No Aplica</option>
                                                            <option value="1">Acreditado</option>
                                                            <option value="1">No Acreditado</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                            <option value="51">51</option>
                                                            <option value="52">52</option>
                                                            <option value="53">53</option>
                                                            <option value="54">54</option>
                                                            <option value="55">55</option>
                                                            <option value="56">56</option>
                                                            <option value="57">57</option>
                                                            <option value="58">58</option>
                                                            <option value="59">59</option>
                                                            <option value="60">60</option>
                                                            <option value="61">61</option>
                                                            <option value="62">62</option>
                                                            <option value="63">63</option>
                                                            <option value="64">64</option>
                                                            <option value="65">65</option>
                                                            <option value="66">66</option>
                                                            <option value="67">67</option>
                                                            <option value="68">68</option>
                                                            <option value="69">69</option>
                                                            <option value="70">70</option>
                                                            <option value="71">71</option>
                                                            <option value="72">72</option>
                                                            <option value="73">73</option>
                                                            <option value="74">74</option>
                                                            <option value="75">75</option>
                                                            <option value="76">76</option>
                                                            <option value="77">77</option>
                                                            <option value="78">78</option>
                                                            <option value="79">79</option>
                                                            <option value="80">80</option>
                                                            <option value="81">81</option>
                                                            <option value="82">82</option>
                                                            <option value="83">83</option>
                                                            <option value="84">84</option>
                                                            <option value="85">85</option>
                                                            <option value="86">86</option>
                                                            <option value="87">87</option>
                                                            <option value="88">88</option>
                                                            <option value="89">89</option>
                                                            <option value="90">90</option>
                                                            <option value="91">91</option>
                                                            <option value="92">92</option>
                                                            <option value="93">93</option>
                                                            <option value="94">94</option>
                                                            <option value="95">95</option>
                                                            <option value="96">96</option>
                                                            <option value="97">97</option>
                                                            <option value="98">98</option>
                                                            <option value="99">99</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                        <label for="cur2">Calificación</label>
                                                    </div>
                                                </div>
                                            <!--</div>

                                            <div class="form-group">
                                                <div class="col-sm-7">
                                                </div>-->
                                                <div class="col-sm-5">
                                                    <label class="col-sm-12" for="example-file-input">Documento obtenido</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" id="example-file-input" name="example-file-input">
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
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Curso</th>
                                                <th class="text-center">Inicio</th>
                                                <th class="text-center">Fin</th>
                                                <th class="text-center">Duración</th>
                                                <th class="text-left">Institución</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Curso en XXXXXXXX</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">30 Hrs</td>
                                                <td class="text-left">Institución XXXXXXXX</td>
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
                                                <td class="text-center">2</td>
                                                <td class="text-left">Curso en XXXXXXXX</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">30 Hrs</td>
                                                <td class="text-left">Institución XXXXXXXX</td>
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
                            <!-- End Cursos -->
                            <!-- Experiencia profesional -->
                            <div class="tab-pane fade fade-up" id="search-exp">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar experiencia profesional</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="empresa" name="empresa">
                                                        <label for="empresa">Empresa</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="giro" name="giro">
                                                        <label for="giro">Giro</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="puesto" name="puesto">
                                                        <label for="puesto">Puesto</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Desde</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia" name="dia">
                                                            <option></option>
                                                            <option value="e1">1</option>
                                                            <option value="e2">2</option>
                                                            <option value="e3">3</option>
                                                            <option value="e4">4</option>
                                                            <option value="e5">5</option>
                                                            <option value="e6">6</option>
                                                            <option value="e7">7</option>
                                                            <option value="e8">8</option>
                                                            <option value="e9">9</option>
                                                            <option value="e10">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes" name="mes">
                                                            <option></option>
                                                            <option value="f1">1</option>
                                                            <option value="f2">2</option>
                                                            <option value="f3">3</option>
                                                            <option value="f4">4</option>
                                                            <option value="f5">5</option>
                                                            <option value="f6">6</option>
                                                            <option value="f7">7</option>
                                                            <option value="f8">8</option>
                                                            <option value="f9">9</option>
                                                            <option value="f10">10</option>
                                                            <option value="f11">11</option>
                                                            <option value="f12">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="ona" name="ona">
                                                            <option></option>
                                                            <option value="g1">2000</option>
                                                            <option value="g2">1999</option>
                                                            <option value="g3">1998</option>
                                                            <option value="g4">1997</option>
                                                            <option value="g5">1996</option>
                                                            <option value="g6">1995</option>
                                                            <option value="g7">1994</option>
                                                            <option value="g8">1993</option>
                                                            <option value="g9">1992</option>
                                                            <option value="g10">1991</option>
                                                            <option value="g11">1990</option>
                                                            <option value="g12">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia" name="dia">
                                                            <option></option>
                                                            <option value="e1">1</option>
                                                            <option value="e2">2</option>
                                                            <option value="e3">3</option>
                                                            <option value="e4">4</option>
                                                            <option value="e5">5</option>
                                                            <option value="e6">6</option>
                                                            <option value="e7">7</option>
                                                            <option value="e8">8</option>
                                                            <option value="e9">9</option>
                                                            <option value="e10">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes" name="mes">
                                                            <option></option>
                                                            <option value="f1">1</option>
                                                            <option value="f2">2</option>
                                                            <option value="f3">3</option>
                                                            <option value="f4">4</option>
                                                            <option value="f5">5</option>
                                                            <option value="f6">6</option>
                                                            <option value="f7">7</option>
                                                            <option value="f8">8</option>
                                                            <option value="f9">9</option>
                                                            <option value="f10">10</option>
                                                            <option value="f11">11</option>
                                                            <option value="f12">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="ona" name="ona">
                                                            <option></option>
                                                            <option value="g1">2000</option>
                                                            <option value="g2">1999</option>
                                                            <option value="g3">1998</option>
                                                            <option value="g4">1997</option>
                                                            <option value="g5">1996</option>
                                                            <option value="g6">1995</option>
                                                            <option value="g7">1994</option>
                                                            <option value="g8">1993</option>
                                                            <option value="g9">1992</option>
                                                            <option value="g10">1991</option>
                                                            <option value="g11">1990</option>
                                                            <option value="g12">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="form-material form-material-primary floating">
                                                        <textarea class="form-control input-sm" id="actividades" name="actividades" rows="6"></textarea>
                                                        <label for="actividades">Actividades</label>
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
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Empresa</th>
                                                <th class="text-left">Giro</th>
                                                <th class="text-left">Puesto</th>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>
                                                <th class="text-left">Actividades</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Empresa XXXXXXXX</td>
                                                <td class="text-left">Giro</td>
                                                <td class="text-left">Puesto</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">12-12-2015</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                <td class="text-center">2</td>
                                                <td class="text-left">Empresa XXXXXXXX</td>
                                                <td class="text-left">Giro</td>
                                                <td class="text-left">Puesto</td>
                                                <td class="text-center">12-12-2010</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                            <!-- End Experiencia profesional -->
                            <!-- Áreas de experiencia -->
                            <div class="tab-pane fade fade-up" id="search-areas">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar área de experiencia</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="area1" name="area1">
                                                            <option></option>
                                                            <option value="1">Administrativos</option>
                                                        </select>
                                                        <label for="area1">Área</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="subarea1" name="subarea1">
                                                            <option></option>
                                                            <option value="1">Administración de oficina</option>
                                                            <option value="2">Administración de riesgo</option>
                                                            <option value="3">Administración de seguros y fianzas</option>
                                                            <option value="4">Administración General</option>
                                                        </select>
                                                        <label for="subarea1">Subárea</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="tiempo1" name="tiempo1">
                                                            <option></option>
                                                            <option value="1">Menos de 1 año</option>
                                                            <option value="2">De 1 a 3 años</option>
                                                            <option value="3">De 4 a 5 años</option>
                                                            <option value="4">De 6 a 8 años</option>
                                                            <option value="5">De 9 a 15 años</option>
                                                            <option value="6">Más de 15 años</option>
                                                        </select>
                                                        <label for="tiempo1">Tiempo</label>
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
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Área</th>
                                                <th class="text-left">Subárea</th>
                                                <th class="text-left">Tiempo</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Administrativos</td>
                                                <td class="text-left">Administración de oficina</td>
                                                <td class="text-left">De 1 a 3 años</td>
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
                                                <td class="text-center">2</td>
                                                <td class="text-left">Administrativos</td>
                                                <td class="text-left">Administración de riesgo</td>
                                                <td class="text-left">De 4 a 5 años</td>
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
                            <!-- End Certificaciones -->
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