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
						Avance semanal auditorías<small> Reportes</small>
					</h1>
				</div>
				<div class="col-sm-5 text-right hidden-xs">
					<ol class="breadcrumb push-10-t">
						<li>Administración</li>
						<li>Reportes</li>
						<li>Avance semanal auditorías</li>
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
						<a href="#search-generales">Generar</a>
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
					<div class="row">
						<div class="col-md-4">
							<div class="form-material floating">
								<select class="form-control input-lg" id="material-select2" name="material-select2" size="1">
									<option></option><!-- Empty value for demostrating material select box -->
									<option value="1">2017</option>
									<option value="2">2016</option>
									<option value="3">2015</option>
								</select>
								<label for="material-select2">Año</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-material floating">
								<select class="form-control input-lg" id="material-select2" name="material-select2" size="1">
									<option></option><!-- Empty value for demostrating material select box -->
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
								<label for="material-select2">Trimestre</label>
							</div>
						</div>
						<div class="col-md-4">
							<a class="block block-link-hover2" href="#">
								<div class="block-content block-content-full bg-primary clearfix">
									<i class="si si-cloud-download fa-2x text-white pull-right"></i>
									<span class="h4 font-w700 text-white">Reportes</span>
									<span class="h4 text-white-op"> Avance semanal</span>
								</div>
							</a>
						</div>
					</div>
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
<script src="assets/js/pages/base_ui_chat.js"></script>

<!-- Page JS Code -->
<script>
	$(function () {
		// Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
		App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
	});
</script>
</body>
</html>