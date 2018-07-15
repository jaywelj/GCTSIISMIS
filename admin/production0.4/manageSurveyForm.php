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
<div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:5px; padding:7px;" >
	<image class="navbar-left" src="images/PUPLogo88x88.png"></image>
	<div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
		<h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
		<p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
		<h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNSELING AND TESTING SERVICES</h4>
	</div>
</div>
<body class="nav-md">
	<div class="container body" id="div1">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div style="border-bottom:5px solid #9a3532;">
						<div class="clearfix"></div>
						<!-- menu profile quick info -->
						<div class="profile clearfix">
							<div class="profile_pic">
								<img src="images/img.jpg" alt="..." class="img-circle profile_img"  style="margin-left:100%; width:75%; margin-top:10px; ">
							</div>
							<div class="profile_info"  style="width:100%;">
								<center>
									<span>Welcome,</span>
									<h2><strong>Jaywel B Javier</strong></h2>
								</center>
							</div>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="index.php">Dashboard</a></li>
										<li><a href="index2.php">Dashboard2</a></li>
										<li><a href="index3.php">Dashboard3</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Individual Inventory <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php
										include("connectionString.php");  
										$queryCollege = "SELECT * FROM tbl_college";
										$resultCollege = mysqli_query($connect, $queryCollege); 
										while($row = mysqli_fetch_array($resultCollege))  
										{  
											$collegeCode = $row['collegeCode'];
											$collegeName = $row['collegeName'];
											?>

											<li><a href="IndividualInventoryRecord.php?id=<?php echo $collegeCode; ?>"><?php echo $collegeName; ?> (<?php echo $collegeCode; ?>)</a></li>
											<?php  
										}

										?>
									</ul>
								</li>
								<li><a><i class="fa fa-bar-chart-o"></i>Tally<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php
										include("connectionString.php");  
										$queryCollege = "SELECT * FROM tbl_college";
										$resultCollege = mysqli_query($connect, $queryCollege); 
										while($row = mysqli_fetch_array($resultCollege))  
										{  
											$collegeCode = $row['collegeCode'];
											$collegeName = $row['collegeName'];
											?>

											<li><a href="Tallytables.php?id=<?php echo $collegeCode; ?>"><?php echo $collegeName; ?> (<?php echo $collegeCode; ?>)</a></li>


											<?php  
										}

										?>
									</ul>
								</li>
								<li><a><i class="fa fa-list"></i> Survey <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="manageSurveyForm.php">Manage Survey Form</a></li>
										<li><a href="surveyForms.php">Survey Forms</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Accounts <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="manageAccountAdminAccount.php">Admin Account</a></li>
										<li><a href="manageAccountStaffAccount.php">Staff Account</a></li>
										<li><a href="manageAccountStudentAccount.php">Student Account</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-institution"></i> Course And College <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="manageCourse.php">Course</a></li>
										<li><a href="manageCollege.php">College</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="images/img.jpg" alt="">John Doe
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="AdminProfile.php"> Profile</a></li>
									<li>
										<a href="javascript:;">
											<span class="badge bg-red pull-right">50%</span>
											<span>Settings</span>
										</a>
									</li>
									<li><a href="javascript:;">Help</a></li>
									<li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
								</ul>
							</li>

							<li role="presentation" class="dropdown">
								<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
									<li>
										<a>
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li>
										<a>
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li>
										<a>
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li>
										<a>
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li>
										<div class="text-center">
											<a>
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
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
									<div id="stage1" class="build-wrap"></div>
									<form class="render-wrap">
									</form>
									<button id="edit-form">Edit Form</button>
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
									</div>
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
</body>
</html>
