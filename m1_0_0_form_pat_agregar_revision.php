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
            <?php include_once ('menu.php');?>
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
                        <div class="col-sm-5">
                            <h1 class="page-heading">
                                Agregar revisión <small>Revisiones</small>
                            </h1>
                        </div>
                        <div class="col-sm-7 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li>PAT</li>
                                <li><a class="link-effect" href="m1_0_0_form_pat_2016">Revisiones</a></li>
                                <li>Agregar Revisión</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Material Forms Validation -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-material form-horizontal push-10-t" action="#" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="val-username2" name="val-username2">
                                                    <label for="val-username2">No. revisión</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill1" name="val-skill1">
                                                        <option></option>
                                                        <option value="pr">Auditoria</option>
                                                        <option value="ad">Seguimiento</option>
                                                    </select>
                                                    <label for="val-skill1">Tipo revisión</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="pro_adic" name="pro_adic">
                                                        <option></option>
                                                        <option value="pr">Programada</option>
                                                        <option value="ad">Adicional</option>
                                                    </select>
                                                    <label for="pro_adic">Prog / Adic</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="clave" name="clave">
                                                        <option></option>
                                                        <option value="100">100</option>
                                                        <option value="200">200</option>
                                                        <option value="300">300</option>
                                                        <option value="400">400</option>
                                                        <option value="500">500</option>
                                                        <option value="600">600</option>
                                                        <option value="700">700</option>
                                                        <option value="800">800</option>
                                                        <option value="900">900</option>
                                                    </select>
                                                    <label for="clave">Clave</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="instancia" name="instancia">
                                                        <option></option>
                                                        <option value="oic">OIC</option>
                                                        <option value="otro">Otro</option>
                                                    </select>
                                                    <label for="instancia">Instancia</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="justificacion" name="justificacion">
                                                        <option></option>
                                                        <option value="j1">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</option>
                                                        <option value="j2">CANTIDAD DE OBSERVACIONES Y/O ACCIONES DE MEJORA DE CONTROL INTERNO</option>
                                                        <option value="j3">AREA O RUBRO NO REVISADO CON ANTIGÜEDAD MAYOR A UN AÑO</option>
                                                    </select>
                                                    <label for="justificacion">Justificación</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="area_revisar" name="area_revisar">
                                                        <option></option>
                                                        <option value="a1">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</option>
                                                        <option value="a2">Áreas involucradas (seguimiento)</option>
                                                        <option value="a3">DG de Prevención de Operaciones con Recursos de Procedencia Ilícita A y B (Proceso de Supervisión)</option>
                                                        <option value="a4">DG de Visitas de Investigación (Proceso de Soporte Legal)</option>
                                                        <option value="a5">DG de Normatividad  (Proceso Soporte Legal)</option>
                                                        <option value="a6">DG de Desarrollo Regulatorio (Proceso de Regulacion)</option>
                                                    </select>
                                                    <label for="area_revisar">Área a revisar</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <textarea class="form-control input-sm" id="val-suggestions2" name="val-suggestions2" rows="6"></textarea>
                                                    <label for="val-suggestions2">Descripción</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <textarea class="form-control input-sm" id="val-suggestions2" name="val-suggestions2" rows="6"></textarea>
                                                    <label for="val-suggestions2">Objetivo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="sem_inicio" name="sem_inicio">
                                                        <option></option>
                                                        <option value="1">Semana 1</option>
                                                        <option value="2">Semana 2</option>
                                                        <option value="3">Semana 3</option>
                                                        <option value="4">Semana 4</option>
                                                        <option value="5">Semana 5</option>
                                                        <option value="6">Semana 6</option>
                                                        <option value="7">Semana 7</option>
                                                        <option value="8">Semana 8</option>
                                                        <option value="9">Semana 9</option>
                                                        <option value="10">Semana 10</option>
                                                        <option value="11">Semana 11</option>
                                                        <option value="12">Semana 12</option>
                                                        <option value="13">Semana 13</option>
                                                        <option value="14">Semana 14</option>
                                                        <option value="15">Semana 15</option>
                                                        <option value="16">Semana 16<</option>
                                                        <option value="17">Semana 17</option>
                                                        <option value="18">Semana 18</option>
                                                        <option value="19">Semana 19</option>
                                                        <option value="20">Semana 20</option>
                                                        <option value="21">Semana 21</option>
                                                        <option value="22">Semana 22</option>
                                                        <option value="23">Semana 23</option>
                                                        <option value="24">Semana 24</option>
                                                        <option value="25">Semana 25</option>
                                                        <option value="26">Semana 26</option>
                                                        <option value="27">Semana 27</option>
                                                        <option value="28">Semana 28</option>
                                                        <option value="29">Semana 29</option>
                                                        <option value="30">Semana 30</option>
                                                        <option value="31">Semana 31</option>
                                                        <option value="32">Semana 32</option>
                                                        <option value="33">Semana 33</option>
                                                        <option value="34">Semana 34</option>
                                                        <option value="35">Semana 35</option>
                                                        <option value="36">Semana 36</option>
                                                        <option value="37">Semana 37</option>
                                                        <option value="38">Semana 38</option>
                                                        <option value="39">Semana 39</option>
                                                        <option value="40">Semana 40</option>
                                                        <option value="41">Semana 41</option>
                                                        <option value="42">Semana 42</option>
                                                        <option value="43">Semana 43</option>
                                                        <option value="44">Semana 44</option>
                                                        <option value="45">Semana 45</option>
                                                        <option value="46">Semana 46</option>
                                                        <option value="47">Semana 47</option>
                                                        <option value="48">Semana 48</option>
                                                        <option value="49">Semana 49</option>
                                                        <option value="50">Semana 50</option>
                                                        <option value="51">Semana 51</option>
                                                        <option value="52">Semana 52</option>
                                                    </select>
                                                    <label for="sem_inicio">Semana Inicio</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="sem_fin" name="sem_fin">
                                                        <option></option>
                                                        <option value="1">Semana 1</option>
                                                        <option value="2">Semana 2</option>
                                                        <option value="3">Semana 3</option>
                                                        <option value="4">Semana 4</option>
                                                        <option value="5">Semana 5</option>
                                                        <option value="6">Semana 6</option>
                                                        <option value="7">Semana 7</option>
                                                        <option value="8">Semana 8</option>
                                                        <option value="9">Semana 9</option>
                                                        <option value="10">Semana 10</option>
                                                        <option value="11">Semana 11</option>
                                                        <option value="12">Semana 12</option>
                                                        <option value="13">Semana 13</option>
                                                        <option value="14">Semana 14</option>
                                                        <option value="15">Semana 15</option>
                                                        <option value="16">Semana 16<</option>
                                                        <option value="17">Semana 17</option>
                                                        <option value="18">Semana 18</option>
                                                        <option value="19">Semana 19</option>
                                                        <option value="20">Semana 20</option>
                                                        <option value="21">Semana 21</option>
                                                        <option value="22">Semana 22</option>
                                                        <option value="23">Semana 23</option>
                                                        <option value="24">Semana 24</option>
                                                        <option value="25">Semana 25</option>
                                                        <option value="26">Semana 26</option>
                                                        <option value="27">Semana 27</option>
                                                        <option value="28">Semana 28</option>
                                                        <option value="29">Semana 29</option>
                                                        <option value="30">Semana 30</option>
                                                        <option value="31">Semana 31</option>
                                                        <option value="32">Semana 32</option>
                                                        <option value="33">Semana 33</option>
                                                        <option value="34">Semana 34</option>
                                                        <option value="35">Semana 35</option>
                                                        <option value="36">Semana 36</option>
                                                        <option value="37">Semana 37</option>
                                                        <option value="38">Semana 38</option>
                                                        <option value="39">Semana 39</option>
                                                        <option value="40">Semana 40</option>
                                                        <option value="41">Semana 41</option>
                                                        <option value="42">Semana 42</option>
                                                        <option value="43">Semana 43</option>
                                                        <option value="44">Semana 44</option>
                                                        <option value="45">Semana 45</option>
                                                        <option value="46">Semana 46</option>
                                                        <option value="47">Semana 47</option>
                                                        <option value="48">Semana 48</option>
                                                        <option value="49">Semana 49</option>
                                                        <option value="50">Semana 50</option>
                                                        <option value="51">Semana 51</option>
                                                        <option value="52">Semana 52</option>
                                                    </select>
                                                    <label for="sem_fin">Semana Fin</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="xyz" name="xyz">
                                                        <option></option>
                                                        <option value="1">21</option>
                                                        <option value="2">22</option>
                                                        <option value="3">23</option>
                                                        <option value="4">24</option>
                                                        <option value="5">25</option>
                                                        <option value="6">26</option>
                                                        <option value="7">27</option>
                                                        <option value="8">28</option>
                                                        <option value="9">29</option>
                                                        <option value="10">30</option>
                                                    </select>
                                                    <label for="xyz">TS. Revisión</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">191</option>
                                                        <option value="2">192</option>
                                                        <option value="3">193</option>
                                                        <option value="4">194</option>
                                                        <option value="5">195</option>
                                                        <option value="6">196</option>
                                                        <option value="7">197</option>
                                                        <option value="8">198</option>
                                                        <option value="9">199</option>
                                                        <option value="10">200</option>
                                                    </select>
                                                    <label for="val-skill4">TS. Hombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="js-datepicker form-control input-sm" type="text" id="periodo_revision_inicio" name="periodo_revision_inicio" data-date-format="mm/dd/yy">
                                                    <label for="periodo_revision_inicio">Periodo Revisión Inicio</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="js-datepicker form-control input-sm" type="text" id="periodo_revision_fin" name="periodo_revision_fin" data-date-format="mm/dd/yy">
                                                    <label for="periodo_revision_fin">Periodo Revisión Fin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="oic">1/2014</option>
                                                        <option value="otro">2/2014</option>
                                                        <option value="otro">3/2014</option>
                                                        <option value="otro">4/2014</option>
                                                        <option value="otro">5/2014</option>
                                                        <option value="otro">6/2014</option>
                                                        <option value="otro">7/2014</option>
                                                        <option value="otro">8/2014</option>
                                                        <option value="otro">9/2014</option>
                                                        <option value="otro">10/2014</option>
                                                        <option value="otro">11/2014</option>
                                                        <option value="otro">12/2014</option>
                                                        <option value="otro">13/2014</option>
                                                        <option value="otro">14/2014</option>
                                                    </select>
                                                    <label for="val-skill4">Auditoría precedente</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="oic">Se determinará en la auditoría.</option>
                                                        <option value="otro">100%</option>
                                                    </select>
                                                    <label for="val-skill4">Muestra</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="oic">100%</option>
                                                        <option value="otro">90%</option>
                                                        <option value="otro">80%</option>
                                                        <option value="otro">70%</option>
                                                        <option value="otro">60%</option>
                                                        <option value="otro">50%</option>
                                                    </select>
                                                    <label for="val-skill4">Universo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-9">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</option>
                                                        <option value="2">Autorizaciones otorgadas en forma deficiente.</option>
                                                        <option value="3">Denuncias de captacion irregular por entidades no autorizadas atendida inoportunamente.</option>
                                                        <option value="4">Informacion incorrecta de emisoras bursatiles detectada inoportunamente.</option>
                                                    </select>
                                                    <label for="val-skill4">Riesgo</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-material form-material-primary">
                                                    <button class="btn btn-success btn-sm push-5-r push-10" type="button"><i class="fa fa-plus"></i></button>
                                                    <label for="val-skill4">&nbsp;</label>
                                                </div>
                                            </div>
                                            <!--<div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                    <label for="val-skill4">Cuadrante</label>
                                                </div>
                                            </div>-->

                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="cuadrante" name="cuadrante">
                                                    <label for="cuadrante">Cuadrante</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <table class="table table-striped table-vcenter table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="text-left">Riesgo</th>
                                                        <th class="text-left">Cuadrante</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.2</td>
                                                        <td>Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</td>
                                                        <td rowspan="3" class="text-center">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.4</td>
                                                        <td>Autorizaciones otorgadas en forma deficiente.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.5</td>
                                                        <td>Denuncias de captacion irregular por entidades no autorizadas atendida inoportunamente.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                            <!-- END Material Forms Validation -->
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