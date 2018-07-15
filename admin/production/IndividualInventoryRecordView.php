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
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	
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
							<h3>User Profile</h3>
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
									<h2>User Report <small>Personal Information</small></h2>
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
									<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
										<div class="profile_img">
											<div id="crop-avatar">
												<!-- Current avatar -->
												<img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
											</div>
										</div>
										<h3>Jaywel Javier</h3>

										<ul class="list-unstyled user_data">
											<li><i class="fa fa-map-marker user-profile-icon"></i> Taytay, Rizal
											</li>
										</ul>

										<a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
										<br />

										
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12" style="margin-left: -30px;">
										<div class="" role="tabpanel" data-example-id="togglable-tabs">
											<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
												<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal</a>
												</li>
												<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Educational</a>
												</li>
												<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Home and Family</a>
												</li>
												<li role="presentation" class=""  ><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Health</a>
												</li>
												<li role="presentation" class=""  ><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Hobbies and Interests</a>
												</li>
												<li role="presentation" class=""  ><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Test Results</a>
												</li>
											</ul>
											<div id="myTabContent" class="tab-content">
												<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
													<!-- start recent activity -->
													<ul class="messages">
														<li>
															<div class="message_wrapper">
																<h4 class="heading">I. Basic Information</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Full Name</th>
																			<td>Jaywel Bisarra Javier</td>
																		</tr>
																		<tr>
																			<th scope="row">Gender</th>
																			<td>Male</td>
																		</tr>
																		<tr>
																			<th scope="row">Sexuality</th>
																			<td>Homosexual</td>
																		</tr>
																		<tr>
																			<th scope="row">Age</th>
																			<td>19</td>
																		</tr>
																		<tr>
																			<th scope="row">Birthday</th>
																			<td>August 17, 1998</td>
																		</tr>
																		<tr>
																			<th scope="row">Place of Birth</th>
																			<td>Pasig City</td>
																		</tr>
																		<tr>
																			<th scope="row">Religion</th>
																			<td>Catholic</td>
																		</tr>
																		<tr>
																			<th scope="row">Civil Status</th>
																			<td>Single</td>
																		</tr>
																		<tr>
																			<th scope="row">Height</th>
																			<td>5'6</td>
																		</tr>
																		<tr>
																			<th scope="row">Weight</th>
																			<td>52kg</td>
																		</tr>
																		<tr>
																			<th scope="row">Complexion</th>
																			<td>Medium Skin</td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">II. School Information</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Student Number</th>
																			<td>2015-04778-MN-0</td>
																		</tr>
																		<tr>
																			<th scope="row">Course</th>
																			<td>BSIT</td>
																		</tr>
																		<tr>
																			<th scope="row">Year</th>
																			<td>3</td>
																		</tr>
																		<tr>
																			<th scope="row">Section</th>
																			<td>2</td>
																		</tr>
																		<tr>
																			<th scope="row">Student Type</th>
																			<td>College</td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">III. Contact Information</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">City Address</th>
																			<td>Metro Manila~Manila</td>
																		</tr>
																		<tr>
																			<th scope="row">Provincial Address</th>
																			<td>Male</td>
																		</tr>
																		<tr>
																			<th scope="row">Email</th>
																			<td>jaywelj@gmail.com</td>
																		</tr>
																		<tr>
																			<th scope="row">Mobile No.</th>
																			<td>09086966016</td>
																		</tr>
																		<tr>
																			<th scope="row">Telephone No.</th>
																			<td>642-1191</td>
																		</tr>
																	</tbody>
																</table>
																<br/>
															</div>
														</li>
													</ul>
													<!-- end recent activity -->

												</div>
												<div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="home-tab">
													<!-- start recent activity -->
													<ul class="messages">
														<li>
															<div class="message_wrapper">
																<h4 class="heading">I. Pre-elementary</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">School Graduated</th>
																			<td>Rosario Ocampo Elementary School</td>
																		</tr>
																		<tr>
																			<th scope="row">School Address</th>
																			<td>Taytay, Rizal</td>
																		</tr>
																		<tr>
																			<th scope="row">Type of School</th>
																			<td>Public</td>
																		</tr>
																		<tr>
																			<th scope="row">Year Attended</th>
																			<td>2003-2005</td>
																		</tr>
																		<tr>
																			<th scope="row">Honors Recieved/Special Awards</th>
																			<td>Pinakamasipag sa Klase</td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">II. Elementary</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">School Graduated</th>
																			<td>Rosario Ocampo Elementary School</td>
																		</tr>
																		<tr>
																			<th scope="row">School Address</th>
																			<td>Taytay, Rizal</td>
																		</tr>
																		<tr>
																			<th scope="row">Type of School</th>
																			<td>Public</td>
																		</tr>
																		<tr>
																			<th scope="row">Year Attended</th>
																			<td>2005-20011</td>
																		</tr>
																		<tr>
																			<th scope="row">Honors Recieved/Special Awards</th>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">III. High School</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">School Graduated</th>
																			<td>Manuel I Santos Memorial National High School</td>
																		</tr>
																		<tr>
																			<th scope="row">School Address</th>
																			<td>Taytay, Rizal</td>
																		</tr>
																		<tr>
																			<th scope="row">Type of School</th>
																			<td>Public</td>
																		</tr>
																		<tr>
																			<th scope="row">Year Attended</th>
																			<td>20011-2015</td>
																		</tr>
																		<tr>
																			<th scope="row">Honors Recieved/Special Awards</th>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">IV. Vocational</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">School Graduated</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">School Address</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Type of School</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Year Attended</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Honors Recieved/Special Awards</th>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">V. College</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">School Graduated</th>
																			<td>Polytechnic University of the Philippines</td>
																		</tr>
																		<tr>
																			<th scope="row">School Address</th>
																			<td>Sta Mesa, Manila</td>
																		</tr>
																		<tr>
																			<th scope="row">Type of School</th>
																			<td>Public</td>
																		</tr>
																		<tr>
																			<th scope="row">Year Attended</th>
																			<td>20015-2019</td>
																		</tr>
																		<tr>
																			<th scope="row">Honors Recieved/Special Awards</th>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
																<br/>
															</div>
														</li>
													</ul>
													<!-- end recent activity -->
												</div>
												<div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="home-tab">
													<!-- start recent activity -->
													<ul class="messages">
														<li>
															<div class="message_wrapper">
																<h4 class="heading">I. Mother</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Name</th>
																			<td>Winnie Bisarra Javier</td>
																		</tr>
																		<tr>
																			<th scope="row">Age</th>
																			<td>42</td>
																		</tr>
																		<tr>
																			<th scope="row"></th>
																			<td>Living</td>
																		</tr>
																		<tr>
																			<th scope="row">Educational Attainment</th>
																			<td>College Undergradate</td>
																		</tr>
																		<tr>
																			<th scope="row">Occupation Type</th>
																			<td>Self-Employed</td>
																		</tr>
																		<tr>
																			<th scope="row">Occupation</th>
																			<td>Garments Supplier and Whole Saler</td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">II. Father</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Name</th>
																			<td>Jesus Nueva Javier</td>
																		</tr>
																		<tr>
																			<th scope="row">Age</th>
																			<td>44</td>
																		</tr>
																		<tr>
																			<th scope="row"></th>
																			<td>Living</td>
																		</tr>
																		<tr>
																			<th scope="row">Educational Attainment</th>
																			<td>College Undergradate</td>
																		</tr>
																		<tr>
																			<th scope="row">Occupation Type</th>
																			<td>Self-Employed</td>
																		</tr>
																		<tr>
																			<th scope="row">Occupation</th>
																			<td>Jeepney Operator</td>
																		</tr>
																	</tbody>
																</table><h4 class="heading">III. Guardian</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Name</th>
																			<td>Pepito Lazano</td>
																		</tr>
																		<tr>
																			<th scope="row">Age</th>
																			<td>48</td>
																		</tr>
																		<tr>
																			<th scope="row">Relationship</th>
																			<td>Land Lord</td>
																		</tr>
																		<tr>
																			<th scope="row">Educational Attainment</th>
																			<td>College Undergradate</td>
																		</tr>
																		<tr>
																			<th scope="row">Occupation Type</th>
																			<td>Unemployed</td>
																		</tr>
																		<tr>
																			<td><br></td><td><br></td>
																		</tr>
																		<tr>
																			<th scope="row">Parent's Marital Relationship</th>
																			<td>Married but separated</td>
																		</tr>
																		<tr>
																			<th scope="row">Number of children in the family including yourself</th>
																			<td>3</td>
																		</tr>
																		<tr>
																			<th scope="row">No. of Brothers</th>
																			<td>2</td>
																		</tr>
																		<tr>
																			<th scope="row">No. of Sisters</th>
																			<td>0</td>
																		</tr>
																		<tr>
																			<th scope="row">No of brothers/sisters gainfully employed</th>
																			<td>0</td>
																		</tr>
																		<tr>
																			<th scope="row">Ordinal position</th>
																			<td>First</td>
																		</tr>
																		<tr>
																			<th scope="row">Who finances your schooling</th>
																			<td>Parents</td>
																		</tr>
																		<tr>
																			<th scope="row">How much is your weekly allowance</th>
																			<td>1500</td>
																		</tr>
																		<tr>
																			<th scope="row">Parent's total monthly income</th>
																			<td>Above 50,001</td>
																		</tr>
																		<tr>
																			<th scope="row">Has a quite place to study?</th>
																			<td>No</td>
																		</tr>
																		<tr>
																			<th scope="row">Shares a room with someone</th>
																			<td>Yes, with friends</td>
																		</tr>
																		<tr>
																			<th scope="row">Nature of Residence while attending school</th>
																			<td>Shares appartment with friends</td>
																		</tr>
																	</tbody>
																</table>
																
																<br/>
															</div>
														</li>
													</ul>
													<!-- end recent activity -->
												</div>
												<div role="tabpanel" class="tab-pane fade active in" id="tab_content4" aria-labelledby="home-tab">
													<!-- start recent activity -->
													<ul class="messages">
														<li>
															<div class="message_wrapper">
																<h4 class="heading">I. Physical</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Problems with the ff:</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Vision</th>
																			<td>Yes, Nearsightedness</td>
																		</tr>
																		<tr>
																			<th scope="row">Hearing</th>
																			<td>No</td>
																		</tr>
																		<tr>
																			<th scope="row">Speach</th>
																			<td>No</td>
																		</tr>
																		<tr>
																			<th scope="row">Your general health</th>
																			<td>No</td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">II. Psychological</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Consulted any of the ff</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Psychiatrist</th>
																			<td>No</td>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">Consulted any of the ff</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Psychologist</th>
																			<td>No</td>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">Consulted any of the ff</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Counselor</th>
																			<td>No</td>
																		</tr>
																	</tbody>
																</table>
																<br/>
															</div>
														</li>
													</ul>
													<!-- end recent activity -->
												</div>
												<div role="tabpanel" class="tab-pane fade active in" id="tab_content5" aria-labelledby="home-tab">
													<!-- start recent activity -->
													<ul class="messages">
														<li>
															<div class="message_wrapper">
																<h4 class="heading">I. Academic</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Club most likely to join</th>
																			<td>Astronomy, Science</td>
																		</tr>
																		<tr>
																			<th scope="row">Favorite subjects</th>
																			<td>Logic, Programming</td>
																		</tr>
																		<tr>
																			<th scope="row">Least favorite Subjects</th>
																			<td>Math</td>
																		</tr>
																		<tr>
																			<th scope="row">Speach</th>
																			<td>No</td>
																		</tr>
																		<tr>
																			<th scope="row">Your general health</th>
																			<td>No</td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">II. Extra-curricular</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Hobbies according to preference</th>
																			<td>Computer/Console Gaming</td>
																		</tr>
																		<tr>
																			<th scope="row"></th>
																			<td>Watching Movies/Anime</td>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;"></th>
																			<td>Collecting Pokemon Stuffs</td>
																		</tr>
																		<tr>
																			<th scope="row"></th>
																			<td>Cosplaying</td>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">Organization most likely to join</th>
																			<td></td>
																		</tr>
																		<tr>
																			<th scope="row">Drama Club</th>
																			<td>No</td>
																		</tr>
																	</tbody>
																</table>
																<br/>
															</div>
														</li>
													</ul>
													<!-- end recent activity -->
												</div>
												<div role="tabpanel" class="tab-pane fade active in" id="tab_content6" aria-labelledby="home-tab">
													<!-- start recent activity -->
													<ul class="messages">
														<li>
															<div class="message_wrapper">
																<h4 class="heading">Test Result 1</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Date</th>
																			<td>March 17, 2018</td>
																		</tr>
																		<tr>
																			<th scope="row">Name of Test</th>
																			<td>PUPCET</td>
																		</tr>
																		<tr>
																			<th scope="row">Raw Score</th>
																			<td>84</td>
																		</tr>
																		<tr>
																			<th scope="row">Percentage Rating</th>
																			<td>80%</td>
																		</tr>
																		<tr>
																			<th scope="row">Description</th>
																			<td>Polytechnic University of the Philippines College Entrance Test</td>
																		</tr>
																	</tbody>
																</table>
																<h4 class="heading">Test Result 2</h4>
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Date</th>
																			<td>March 17, 2014</td>
																		</tr>
																		<tr>
																			<th scope="row">Name of Test</th>
																			<td>PUPLHSEE</td>
																		</tr>
																		<tr>
																			<th scope="row">Raw Score</th>
																			<td>101</td>
																		</tr>
																		<tr>
																			<th scope="row">Percentage Rating</th>
																			<td>93%</td>
																		</tr>
																		<tr>
																			<th scope="row">Description</th>
																			<td>Polytechnic University of the Philippines Laboratory High School Entrance Test</td>
																		</tr>
																	</tbody>
																</table>
																<br/>
															</div>
														</li>
													</ul>
													<!-- end recent activity -->
												</div>
											</div>
										</div>
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
	<!-- morris.js -->
	<script src="../vendors/raphael/raphael.min.js"></script>
	<script src="../vendors/morris.js/morris.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

</body>
</html>