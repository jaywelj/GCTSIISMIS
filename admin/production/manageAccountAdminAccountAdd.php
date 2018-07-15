<?php
if(empty($_SESSION['sessionAdminName']))
{
	header("Location: logout.php");
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
							<h3>Register an Account</h3>
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
									<h2>Admin Account <small></small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Settings 1</a>
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">


									<!-- Smart Wizard -->
									<div id="wizard" class="form_wizard wizard_horizontal">
										<ul class="wizard_steps">
											<li>
												<a href="#step-1">
													<span class="step_no">1</span>
													<span class="step_descr">
														Step 1<br />
														<small>Basic Info</small>
													</span>
												</a>
											</li>
											<li>
												<a href="#step-2">
													<span class="step_no">2</span>
													<span class="step_descr">
														Step 2<br />
														<small>Email or Contact No</small>
													</span>
												</a>
											</li>
											<li>
												<a href="#step-3">
													<span class="step_no">3</span>
													<span class="step_descr">
														Step 3<br />
														<small>Username/Password</small>
													</span>
												</a>
											</li>
											<li>
												<a href="#step-4">
													<span class="step_no">4</span>
													<span class="step_descr">
														Step 4<br />
														<small>Upload a Profile Picture</small>
													</span>
												</a>
											</li>
											<li>
												<a href="#step-5">
													<span class="step_no">5</span>
													<span class="step_descr">
														Step 5<br />
														<small>Terms and Condition</small>
													</span>
												</a>
											</li>
										</ul>
										<div id="step-1">
											<form class="form-horizontal form-label-left" style="height:  280px;">

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div id="gender" class="btn-group" data-toggle="buttons">
															<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="gender" value="male">  Male 
															</label>
															<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="gender" value="female"> Female
															</label>
														</div>
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
													</div>
												</div>
											</form>
										</div>
										<div id="step-2">
											<form class="form-horizontal form-label-left" style="height:  280px;">
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="email" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Contact No. <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
											</form>
										</div>
										<div id="step-3">
											<form class="form-horizontal form-label-left" style="height:  280px;">
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="email" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="password" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Retype Password <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="password" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
											</form>
										</div>
										<div id="step-4">
											<form class="form-horizontal form-label-left" style="height:  280px;">
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profile Picture<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="file" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
											</form>
										</div>
										<div id="step-5" style="height:  280px; margin:0px 120px 0px 120px;">
											<p >
												do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
												in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<strong> Do you wish to accept the terms and condition?</strong>
											</p>
											<div class="pull-right" style="padding-top: 60px; margin-left: 200px;" >
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div id="gender" class="btn-group" data-toggle="buttons">
														<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
															<input type="radio" name="gender" value="male">  I accept
														</label>
														<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
															<input type="radio" name="gender" value="female"> I decline
														</label>
													</div>
												</div>
											</div>
										</div>

									</div>
									<!-- End SmartWizard Content -->
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
	<!-- jQuery Smart Wizard -->
	<script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

	
</body>
</html>