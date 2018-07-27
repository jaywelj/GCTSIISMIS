<?php
if(isset($_GET['id']))
{
	include('connectionString.php');
	$xmldata = $_GET['id'];
	echo "<script>var xmldataFileName = '$xmldata';</script>";
	$query = "SELECT * from tbl_surveyform WHERE surveyFormXML = '$xmldata'";
	$queryArray = mysqli_query($connect, $query);
	while($row = mysqli_fetch_array($queryArray))
	{
		$varcharSurveyFormName = $row['surveyFormName'];
		$varcharSurveyFormDetails = $row['surveyFormDetails'];
		$varcharSurveyFormStatus = $row['surveyFormStatus'];
	}
}
?>




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
									<div class="form-group">
										<label class="col-md-2 col-sm-2" style="margin:10px 0 0 40px;">Survey Form Name</label>
										<div class="col-md-4 col-sm-4">
											<input type="text" id="txtbxSurveyFormName" name="txtbxSurveyFormName" class="form-control col-md-7 col-xs-12" value="">
										</div>	
									</div>
									<div class="form-group">
									</label>
									<label class="control-label col-md-2 col-sm-2"  style="margin:10px 0 0 40px;">Survey Details<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6" >
										<textarea class="form-control" name="txtareaSurveyFormDetails" id="txtareaSurveyFormDetails"></textarea>
									</div>
								</div>
								<div id="stage1" class="build-wrap">

								</div>
								<form class="render-wrap">

								</form>
								<button id="edit-form" class="btn btn-primary edit-form pull-right">Edit Form</button>
								<div class="action-buttons">
									<h2>Actions</h2>
									<button id="testSubmit" type="submit">Test Submit</button>
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

<script src="assets/js/demo2.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/form-builder.min.js"></script>
<script src="assets/js/form-render.min.js"></script>
<script src="assets/js/jquery.rateyo.min.js"></script>

</body>
</html>