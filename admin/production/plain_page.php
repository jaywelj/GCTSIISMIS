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
							<h3>Plain Page</h3>
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
									<h2>Plain Page</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="tab-pane" role="tabpanel" id="complete">
										<h3 class="text-center">Step 6</h3>
										<div class="form-horizontal form-label-left">
											<div class="x_panel">
												<span class="section" style="margin-left:90px;">Test Result '.$i.'</span>
												<div class="form-group ">
													<label class="control-label col-md-3 col-sm-3">Date Of Test<span class="">*</span>
													</label>
													<div class="col-md-6 col-sm-6">
														<input id="dateTestResultDateInitial" name="dateTestResultDateInitial[]" value="'.$resu['testDate'].'" class="date-picker form-control col-md-7 col-xs-12" type="date">
													</div>
												</div>

												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3"  >Name of Test <span class="">*</span></label>
													<div class="col-md-6 col-sm-6">
														<input id="txtbxTestResultNameInitial" name="txtbxTestResultNameInitial[]" value="'.$resu['testName'].'" type="text" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3"  >Raw Score(RS) <span class="">*</span>
													</label>
													<div class="col-md-6 col-sm-6">
														<input id="txtbxTestResultRawScoreInitial" name="txtbxTestResultRawScoreInitial[]" value="'.$resu['testRawScore'].'" type="text" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR) <span class="">*</span>
													</label>
													<div class="col-md-6 col-sm-6">
														<input id="txtbxTestResultPercentileRatingInitial" name="txtbxTestResultPercentileRatingInitial[]" value="'.$resu['testPercentile'].'" type="text" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3"  >Description<span class="">*</span>
													</label>
													<div class="col-md-6 col-sm-6">
														<textarea class="form-control" name="txtareaTestResultDescriptionInitial[]" id="txtareaTestResultDescriptionInitial" ="" placeholder = "'.$resu['testDescription'].'"	>'.$resu['testDescription'].'</textarea>
													</div>
													<input type="hidden" id="testID" name="testID[]" value="'.$resu['testID'].'">
												</div>
											</div>
											<!--NEW FIELDS HERE-->
											<div id="newTestFields">

											</div>
											<!--END OF NEW FIELDS-->
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3"></label>
												<button class="btn btn-success col-md-6 col-sm-6" type="button"  onclick="education_fields();" >
													<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Test Result
												</button>
											</div>
										</div>
										<ul class="list-inline pull-right">
											<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
											<li><input type="submit" name="btnFinish" class="btn btn-primary next-step" value="Finish" ></li>
										</ul>
									</div>
									<div class="clearfix">
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
	</body>
	</html>
