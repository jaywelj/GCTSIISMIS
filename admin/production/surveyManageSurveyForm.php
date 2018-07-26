<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">

	<!-- Form builder Style-->
	<link href="assets/css/demo.css" rel="stylesheet">
	<link href="assets/css/demoRender.css" rel="stylesheet">
	

</head>
<?php
require 'header.php';
?>
<body class="nav-md">
	<div class="container body" id="div1">
		<div class="main_container">
			<!-- side navigation -->
			<?php 
			require 'sidebar.php';
			?>
			<!-- /side navigation -->
			<!-- top navigation -->
			<?php 
			require 'navbar.php';
			?>
			<!-- /top navigation -->
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Survey</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Survey Management</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div id="stage1" class="build-wrap">

									</div>
									<form class="render-wrap">

									</form>
									<button id="edit-form" class="btn btn-primary edit-form pull-right">Edit Form</button>
									<div class="action-buttons">
										<h2>Actions</h2>
										<button id="showData" type="button">Show Data</button>
										<button id="clearFields" type="button">Clear All Fields</button>
										<button id="getData" type="button">Get Data</button>
										<button id="getXML" type="button">Get XML Data</button>
										<button id="getJSON" type="button">Get JSON Data</button>
										<button id="getJS" type="button">Get JS Data</button>
										<button id="setData" type="button">Set Data</button>
										<button id="addField" type="button">Add Field</button>
										<button id="removeField" type="button">Remove Field</button>
										<button id="testSubmit" type="submit">Test Submit</button>
										<button id="resetDemo" type="button">Reset Demo</button>
										<button id="saveData" type="button">saveData</button>
									</div>
									<div id="xmldatadiv"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

	<script src="assets/js/demo.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/form-builder.min.js"></script>
	<script src="assets/js/form-render.min.js"></script>
	<script src="assets/js/jquery.rateyo.min.js"></script>
	
</body>
</html>
