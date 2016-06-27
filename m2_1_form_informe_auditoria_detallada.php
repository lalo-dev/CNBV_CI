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
                        Detalle<small> Informe de auditoría</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Cierre</li>
                        <li><a href="m2_2_informe_auditoria">Informe de auditoría</a></li>
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
                        <a href="#info">Info</a>
                    </li>
                    <li>
                        <a href="#oficio">Oficio</a>
                    </li>
                    <li>
                        <a href="#observa1">Observación 1</a>
                    </li>
                    <li>
                        <a href="#observa2">Observación 2</a>
                    </li>
                    <li>
                        <a href="#inform">Informe</a>
                    </li>
                    <li>
                        <a href="#i1">I.1</a>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Info -->
                    <div class="tab-pane fade fade-up in active" id="info">

                        <div class="border-b push-30">
                            <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-2">
                                <a class="block block-link-hover2" href="javascript:void(0)">
                                    <div class="block-content block-content-full bg-flat clearfix">
                                        <i class="si si-eye fa-2x text-white pull-right"></i>
                                        <span class="h4 font-w700 text-white">Informe</span>
                                        <span class="h4 text-white-op">Auditoría</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                    <div class="block-content block-content-full bg-primary clearfix">
                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                        <span class="h4 font-w700 text-white">Informe</span>
                                        <span class="h4 text-white-op">Auditoría</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Info -->

                    <!-- Inicia oficio -->
                    <div class="tab-pane fade fade-up" id="oficio">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Oficio</span></h2>
                        </div>

                        <div class="row">
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

                        <div class="row">
                            <div class="col-md-3 col-md-offset-1">
                                <div class="form-material floating open">
                                    <select class="form-control" id="clasifica" name="clasifica" size="1">
                                        <option> --- </option><!-- Empty value for demostrating material select box -->
                                        <option value="1">OIC</option>
                                        <option value="2">AA</option>
                                    </select>
                                    <label for="clasifica">Clasificación</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-material floating">
                                    <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="fecha" name="fecha">
                                    <label for="fecha">Fecha</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="verificar" name="verificar">
                                    <label for="verificar">Verificar</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <label>Periodo:</label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-material floating">
                                    <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="fdesde" name="fdesde">
                                    <label for="fdesde">Desde</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-material floating">
                                    <input type="text" class="js-datepicker form-control" data-date-format="dd/mm/yyyy" id="fhasta" name="fhasta">
                                    <label for="fhasta">Hasta</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-material floating open">
                                    <select class="form-control" id="para" name="para" size="1">
                                        <option> --- </option><!-- Empty value for demostrating material select box -->
                                        <option value="1">El</option>
                                        <option value="2">Los</option>
                                    </select>
                                    <label for="para">Para</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- fin oficio -->
                    <!-- Observacion 1 -->
                    <div class="tab-pane fade fade-up" id="observa1">
                        <div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Observacion 1</span></h2>
                        </div>
                        <div class="row">
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
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="titulo1" name="titulo1" disabled>
                                    <label for="titulo1">Titulo</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="cuerpo" rows="3"></textarea>
                                    <label for="cuerpo">Cuerpo</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="conclusion" rows="3"></textarea>
                                    <label for="conclusion">Conclusion</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Observacion 1-->

                    <!-- observacion 2 -->
                    <div class="tab-pane fade fade-up" id="observa2">

                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Observación 2</span></h2>
                        </div>
                        <div class="row">
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
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="titulo2" name="titulo2" disabled>
                                    <label for="titulo2">Titulo</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="cuerpo2" rows="3"></textarea>
                                    <label for="cuerpo2">Cuerpo</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="conclusion2" rows="3"></textarea>
                                    <label for="conclusio2n">Conclusion</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Observacion 2 -->

                    <!-- Inicia Informe  -->
                    <div class="tab-pane fade fade-up" id="inform">
                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Informe</span></h2>
                        </div>
                        <div class="row">
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
                        <div class="row">

                            <div class="col-md-3 col-md-offset-1">
                               <label for="satisfactorio">Unidades auditadas : </label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="unidaudi1" name="unidaudi1">
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="unidaudi2" name="unidaudi2">
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="unidaudi3" name="unidaudi3">
                                </div>
                            </div>
                            <div class="col-md-9 col-md-offset-1">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="decgeneral" rows="3"></textarea>
                                    <label for="decgeneral">Descripción general:</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Informe -->

                    <!-- I.1 -->
                    <div class="tab-pane fade fade-up" id="i1">
                        <div class="border-b push-30">
                            <h2 class="push-10">*<span class="h5 font-w400 text-muted"> Antecedentes I.1 </span></h2>
                        </div>
                        <div class="row">
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
                        <div class="row">
                            <div class="col-md-12">
                                <h5>De la Comisión Nacional Bancaria y de Valores (CNBV)</h5>
                            </div>
                            <div class="col-md-12">&nbsp;</div>
                            <div class="col-md-3 col-md-offset-1">
                                <label>a) Misión de la CNBV </label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="mision" rows="3"></textarea>
                                    <label for="mision">Misión:</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <label>b) Visión de la CNBV </label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="vision" rows="3"></textarea>
                                    <label for="vision">Visión:</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <label>c) Objetivos estrategicos de la CNBV </label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="objetivos" rows="3"></textarea>
                                    <label for="objetivos">Objetivos:</label>
                                </div>
                            </div>
                            <div class="col-md-12">&nbsp;</div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END I.1 -->

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