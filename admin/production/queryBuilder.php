<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="assets/img/GCTS LOGO1.png">
	<title>Query | OCPS</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- Datatables -->
	<link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

	<!--Checkbox-->
	<link href="css/checkbox/checkbox.css" rel="stylesheet">

	<!-- ECharts -->
	<script src="../vendors/echarts/dist/echarts.min.js"></script>

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
	<style type="text/css">
	.form-horizontal .control-label {
		text-align: unset;
	}
	.form-group {
		margin-bottom: 2px;
	}
</style>
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
							<h3>Query<small></small></h3>
						</div>

						<div class="title_right">
							
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2><small></small></h2>
									<ul class="nav navbar-right">

										<!-- <button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD COURSE</button> -->
									</ul>
									<hr>
									<center><h1>Query Selections</h1></center>
									<hr>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<form method="post" id="queryForm" name="queryForm">
										

										<div class="form-horizontal form-label-left">
											<div class="item form-group text-center ">
												<h3><label class="control-label col-md-6 col-sm-6 col-xs-12" style="text-align: center">Personal Info</label></h3>
												<h3><label class="control-label col-md-6 col-sm-6 col-xs-12" style="text-align: center">Educational Background</label></h3>
											</div>
											<br>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Gender</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownGender" id="dropdownGender" required="required">
														<option >None</option>
														<option >All</option>
														<option value="M">Male</option>
														<option value="F">Female</option>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Pre-Elem School Type</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownPElemSchoolType" id="dropdownPElemSchoolType" required="required">
														<option >None</option>
														<option >All</option>
														<option >Public</option>
														<option >Private</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Sexual Orientation</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownSexuality" id="dropdownSexuality" required="required">
														<option value="None">None</option>
														<option value="All">All</option>
														<option value="Heterosexual">Heterosexual</option>
														<option value="Homosexual">Homosexual</option>
														<option value="Bisexual">Bisexual</option>
														<option value="Pansexual">Pansexual</option>
														<option value="Demisexual">Demisexual</option>
														<option value="Queer">Queer</option>
														<option value="Asexual">Asexual</option>
														<option value="Others">Others</option>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Elementary School Type</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownElemSchoolType" id="dropdownElemSchoolType" required="required">
														<option >None</option>
														<option >All</option>
														<option >Public</option>
														<option >Private</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Civil Status</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownCivilStatus" id="dropdownCivilStatus" >
														
														<option value="None">None</option>
														<option value="All">All</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Separated">Separated</option>
														<option value="Widowed">Widowed</option>
														<option value="Others">Others</option>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">High School School Type</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownHSchoolType" id="dropdownHSchoolType" required="required">
														<option >None</option>
														<option >All</option>
														<option >Public</option>
														<option >Private</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Age: Min</label>
												<div class="col-md-1 col-sm-1 col-xs-1">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMinAge" id="dropdownMinAge" >
														<option >None</option>
														<option >All</option>
														<?php
														$query = "SELECT DISTINCT age FROM tbl_personalinfo ORDER BY age";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option>".$row['age']."</option>";
														}
														?>
													</select>
												</div>

												<label class="control-label col-md-1 col-sm-1 col-xs-12">Age: Max</label>
												<div class="col-md-1 col-sm-1 col-xs-1">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMaxAge" id="dropdownMaxAge">
														<option >None</option>
														<option >All</option>
														<?php
														$query = "SELECT DISTINCT age FROM tbl_personalinfo ORDER BY age";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option>".$row['age']."</option>";
														}
														?>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Vocational School Type</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownVocationalSchoolType" id="dropdownVocationalSchoolType" required="required">
														<option >None</option>
														<option >All</option>
														<option >Public</option>
														<option >Private</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Religion</label>
												<div class="col-md-3 col-sm-3 col-xs-2">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownReligion" id="dropdownReligion" >
														<option>None</option>
														<option>All</option>
														<option value="Aglipayan">Aglipayan</option>
														<option value="Buddhism">Buddhism</option>
														<option value="Born Again Christian">Born Again Christian</option>
														<option value="Baptist">Baptist</option>
														<option value="Catholic">Catholic</option>
														<option value="Jehovas Witnesses">Jehovas Witnesses</option>
														<option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
														<option value="Islam">Islam</option>
														<option value="Protestant">Protestant</option>
														<option value="Seventh Day Adventist">Seventh Day Adventist</option>
														<option value="Mormons (Latter Day Saints)">Mormons (Latter Day Saints)</option>
														<option value="Methodist">Methodist</option>
														<option value="Others">Others</option>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">College School Type</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownCollegeSchoolType" id="dropdownCollegeSchoolType" required="required">
														<option >None</option>
														<option >All</option>
														<option >Public</option>
														<option >Private</option>
													</select>
												</div>
											</div> 
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Complexion</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownComplexion" id="dropdownComplexion">
														<option>None</option>
														<option>All</option>
														<option value="White Skin">White Skin</option>
														<option value="Fair Skin">Fair Skin</option>
														<option value="Medium Skin">Medium Skin</option>
														<option value="Olive Skin">Olive Skin</option>
														<option value="Tan Brown">Tan Brown</option>
														<option value="Black Brown">Black Brown</option>
														<option value="Dark Skin">Dark Skin</option>
														<option value="Others">Others</option>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Nature of Schooling</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" name="dropdownNatureOfSchooling" id="dropdownNatureOfSchooling" required="required">
														<option >None</option>
														<option >All</option>
														<option >Continuous</option>
														<option >Interrupted</option>
														<option >Interrupted(show reason)</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">City Address</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" id="dropdownCityAddress" name="dropdownCityAddress">
														<option>None</option>
														<option>All</option>
														<option>Metro Manila~Caloocan</option>
														<option>Metro Manila~Las Pinas</option>
														<option>Metro Manila~Makati</option>
														<option>Metro Manila~Malabon</option>
														<option>Metro Manila~Mandaluyong</option>
														<option>Metro Manila~Manila</option>
														<option>Metro Manila~Marikina</option>
														<option>Metro Manila~Muntinlupa</option>
														<option>Metro Manila~Navotas</option>
														<option>Metro Manila~Paranaque</option>
														<option>Metro Manila~Pasay</option>
														<option>Metro Manila~Pasig</option>
														<option>Metro Manila~Pateros</option>
														<option>Metro Manila~Quezon City</option>
														<option>Metro Manila~San Juan</option>
														<option>Metro Manila~Taguig</option>
														<option>Metro Manila~Valenzuela</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Provincial Address</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select class="select2_single form-control" tabindex="-1" id="dropdownProvincialAddress" name="dropdownProvincialAddress" >
														<option>None</option>
														<option>All</option>
														<option>Abra</option>
														<option>Agusan Del Norte</option>
														<option>Agusan Del Sur</option>
														<option>Aklan</option>
														<option>Albay</option>
														<option>Antique</option>
														<option>Aurora</option>
														<option>Basilan</option>
														<option>Bataan</option>
														<option>Batangas</option>
														<option>Benguet</option>
														<option>Biliran</option>
														<option>Bohol</option>
														<option>Bukidnon</option>
														<option>Bulacan</option>
														<option>Cagayan</option>
														<option>Camarines Norte</option>
														<option>Camarines Sur</option>
														<option>Camiguin</option>
														<option>Capiz</option>
														<option>Catanduanes</option>
														<option>Cavite</option>
														<option>Cebu</option>
														<option>Compostela Valley</option>
														<option>Cotabato</option>
														<option>Davao Del Norte</option>
														<option>Davao Del Sur</option>
														<option>Davao Oriental</option>
														<option>Dinagat Islands</option>
														<option>Eastern Samar</option>
														<option>Guimaras</option>
														<option>Ifugao</option>
														<option>Ilocos Norte</option>
														<option>Ilocos Sur</option>
														<option>Iloilo</option>
														<option>Isabela</option>
														<option>Kalinga</option>
														<option>La Union</option>
														<option>Laguna</option>
														<option>Lanao Del Norte</option>
														<option>Lanao Del Sur</option>
														<option>Lazada Office</option>
														<option>Leyte</option>
														<option>Maguindanao</option>
														<option>Marinduque</option>
														<option>Masbate</option>
														<option>Misamis Occidental</option>
														<option>Misamis Oriental</option>
														<option>Mountain Province</option>
														<option>Negros Occidental</option>
														<option>Negros Oriental</option>
														<option>North Cotabato</option>
														<option>Northern Samar</option>
														<option>Nueva Ecija</option>
														<option>Nueva Vizcaya</option>
														<option>Occidental Mindoro</option>
														<option>Oriental Mindoro</option>
														<option>Palawan</option>
														<option>Pampanga</option>
														<option>Pangasinan</option>
														<option>Quezon</option>
														<option>Quirino</option>
														<option>Rizal</option>
														<option>Romblon</option>
														<option>Sarangani</option>
														<option>Siquijor</option>
														<option>Sorsogon</option>
														<option>South Cotabato</option>
														<option>Southern Leyte</option>
														<option>Sultan Kudarat</option>
														<option>Sulu</option>
														<option>Surigao Del Norte</option>
														<option>Surigao Del Sur</option>
														<option>Tarlac</option>
														<option>Tawi-Tawi</option>
														<option>Western Samar</option>
														<option>Zambales</option>
														<option>Zamboanga Del Norte</option>
														<option>Zamboanga Del Sur</option>
														<option>Zamboanga Sibugay</option>
													</select>
												</div>
											</div>


											<div class="item form-group">
												<?php

														// mysql select query
												$queryCourse2 = "SELECT * FROM tbl_course";

														// for method 1/
												$resultCourse2 = mysqli_query($connect, $queryCourse2);

												?>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Course</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" name="dropdownStudentCourse" id="dropdownStudentCourse" class="form-control" >
														<option>None</option>
														<option>All</option>
														<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
															<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
														<?php endwhile;?>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<?php

														// mysql select query
												$queryCollege = "SELECT * FROM tbl_college";

														// for method 1/
												$resultCollege= mysqli_query($connect, $queryCollege);

												?>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">College</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" name="dropdownStudentCollege" id="dropdownStudentCollege" class="form-control" >
														<option>None</option>
														<option>All</option>
														<?php while($row = mysqli_fetch_array($resultCollege)):;?>
															<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
														<?php endwhile;?>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Year</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownYear" id="dropdownYear">
														<option>None</option>
														<option>All</option>
														<?php
														$query = "SELECT DISTINCT year FROM tbl_personalinfo";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option>".$row['year']."</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Section</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownSection" id="dropdownSection">
														<option>None</option>
														<option>All</option>
														<?php
														$query = "SELECT DISTINCT section FROM tbl_personalinfo";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option>".$row['section']."</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="item form-group text-center ">
												<h3><label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: center">Family Background</label></h3>
											</div>
											<br>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Mother Status</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMotherStatus" id="dropdownMotherStatus">
														<option>None</option>
														<option>All</option>
														<option>Deceased</option>
														<option>Living</option>
													</select>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Parent's Marital Relationship</label>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownParentsMaritalRelationship" id="dropdownParentsMaritalRelationship">
															<option>None</option>
															<option>All</option>
															<option value="Married and staying together">Married and staying together</option>
															<option value="ot married but living together">Not married but living together</option>
															<option value="Single Parent">Single Parent</option>
															<option value="Married but separated">Married but separated</option>
															<option value="Others">Others</option>
														</select>
													</div>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Educational Attainment</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMotherEducationalAttainment" id="dropdownMotherEducationalAttainment">
														<option>None</option>
														<option>All</option>
														<option >Elementary Undergraduate</option>
														<option >Elementary graduate</option>
														<option >High School Undergraduate</option>
														<option >High School Graduate</option>
														<option >College Undergraduate</option>
														<option >College Graduate</option>
														<option >Vocational Graduate</option>
														<option >Vocational Ungraduate</option>
														<option >Masteral Unit</option>
														<option >Masteral Degree</option>
														<option >Doctoral Unit</option>
														<option >Doctoral Degree</option>
													</select>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">No. of Children: Min</label>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMinChild" id="dropdownMinChild" >
															<option >None</option>
															<option >All</option>
															<?php
															$query = "SELECT DISTINCT noOfChildren FROM tbl_familybackground ORDER BY noOfChildren";
															$queryResult = mysqli_query($connect,$query);
															while($row = mysqli_fetch_array($queryResult))
															{
																echo "<option>".$row['noOfChildren']."</option>";
															}
															?>
														</select>
													</div>

													<label class="control-label col-md-1 col-sm-1 col-xs-12">No.C: Max</label>
													<div class="col-md-1 col-sm-1 col-xs-1">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMaxChild" id="dropdownMaxChild">
															<option >None</option>
															<option >All</option>
															<?php
															$query = "SELECT DISTINCT noOfChildren FROM tbl_familybackground ORDER BY noOfChildren";
															$queryResult = mysqli_query($connect,$query);
															while($row = mysqli_fetch_array($queryResult))
															{
																echo "<option>".$row['noOfChildren']."</option>";
															}
															?>
														</select>
													</div>
												</div>

											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Occupation Type</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_group form-control" name="dropdownMotherOccupationType" id="dropdownMotherOccupationType" ="">
														<option>None</option>
														<option>All</option>
														<optgroup label="Employed">
															<option value="Government">Local - Government</option>
															<option value="Private">Local - Private</option>
															<option value="Abroad">Abroad</option>
															<option value="Self-Employed">Self-Employed</option>
														</optgroup>
														<option value="Unemployed">Unemployed</option>
													</select>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Ordinal Position</label>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownOrdinalPosition" id="dropdownOrdinalPosition">
															<option >None</option>
															<option >All</option>
															<option >Only Child</option>
															<option >First</option>
															<option >Second</option>
															<option >Third</option>
															<option >Fourth</option>
															<option >Fifth</option>
															<option >Sixth</option>
															<option >Seventh</option>
															<option >Eight</option>
															<option >Ninth</option>
															<option >Tenth</option>
														</select>
													</div>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Father Status</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownFatherStatus" id="dropdownFatherStatus">
														<option>None</option>
														<option>All</option>
														<option>Deceased</option>
														<option>Living</option>
													</select>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">School Financer</label>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownSchoolFinancer" id="dropdownSchoolFinancer">
															<option >None</option>
															<option >All</option>
															<option >Parents</option>
															<option >Brother/Sister</option>
															<option >Spouse</option>
															<option >Scholarship</option>
															<option >Relatives</option>
															<option >Self-supporting/Working student</option>
															<option >Others</option>
														</select>
													</div>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Educational Attainment</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownFatherEducationalAttainment" id="dropdownFatherEducationalAttainment">
														<option>None</option>
														<option>All</option>
														<option >Elementary Undergraduate</option>
														<option >Elementary graduate</option>
														<option >High School Undergraduate</option>
														<option >High School Graduate</option>
														<option >College Undergraduate</option>
														<option >College Graduate</option>
														<option >Vocational Graduate</option>
														<option >Vocational Ungraduate</option>
														<option >Masteral Unit</option>
														<option >Masteral Degree</option>
														<option >Doctoral Unit</option>
														<option >Doctoral Degree</option>
													</select>
												</div>

												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Weekly Allowance</label>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownWeeklyAllowance" id="dropdownWeeklyAllowance">
															<option >None</option>
															<option >All</option>
															<option >Below or equal to 100</option>
															<option >101-500</option>
															<option >501-1000</option>
															<option >Above 1000</option>
														</select>
													</div>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Occupation Type</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_group form-control" name="dropdownFatherOccupationType" id="dropdownFatherOccupationType" ="">
														<option>None</option>
														<option>All</option>
														<optgroup label="Employed">
															<option value="Government">Local - Government</option>
															<option value="Private">Local - Private</option>
															<option value="Abroad">Abroad</option>
															<option value="Self-Employed">Self-Employed</option>
														</optgroup>
														<option value="Unemployed">Unemployed</option>
													</select>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Parent's Monthly Income</label>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownParentsMonthlyIncome" id="dropdownParentsMonthlyIncome">
															<option >None</option>
															<option >All</option>
															<option >Below average</option>
															<option >Average</option>
															<option >Above average</option>
														</select>
													</div>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Guardian Relationship</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownGuardianRelationship" id="dropdownGuardianRelationship">
														<option>None</option>
														<option>All</option>
														<option value="Parent">Parent</option>
														<option value="Brother/Sister<">Brother/Sister</option>
														<option value="Aunt/Uncle">Aunt/Uncle</option>
														<option value="Relatives">Relatives</option>
														<option value="Grandparents">Grandparents</option>
														<option value="Vocational Graduate">Vocational Graduate</option>
														<option value="Land lady">Land lady</option>
														<option value="Step-Mother/Step-Father">Step-Mother/Step-Father</option>
														<option value="Others">Others</option>
													</select>
												</div>

												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Quiet Place to Study</label>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownQuietPlace" id="dropdownQuietPlace">
															<option >None</option>
															<option >All</option>
															<option >Yes</option>
															<option >No</option>
														</select>
													</div>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Educational Attainment</label>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownGuardianEducationalAttainment" id="dropdownGuardianEducationalAttainment">
														<option>None</option>
														<option>All</option>
														<option >Elementary Undergraduate</option>
														<option >Elementary graduate</option>
														<option >High School Undergraduate</option>
														<option >High School Graduate</option>
														<option >College Undergraduate</option>
														<option >College Graduate</option>
														<option >Vocational Graduate</option>
														<option >Vocational Ungraduate</option>
														<option >Masteral Unit</option>
														<option >Masteral Degree</option>
														<option >Doctoral Unit</option>
														<option >Doctoral Degree</option>
													</select>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Room Sharing</label>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownRoomSharing" id="dropdownRoomSharing">
															<option >None</option>
															<option >All</option>
															<option >Yes</option>
															<option >No</option>
														</select>
													</div>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Occupation Type</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_group form-control" name="dropdownGuardianOccupationType" id="dropdownGuardianOccupationType" ="">
														<option>None</option>
														<option>All</option>
														<optgroup label="Employed">
															<option value="Government">Local - Government</option>
															<option value="Private">Local - Private</option>
															<option value="Abroad">Abroad</option>
															<option value="Self-Employed">Self-Employed</option>
														</optgroup>
														<option value="Unemployed">Unemployed</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Nature of Residence</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownNatureOfResidence" id="dropdownNatureOfResidence">
														<option >None</option>
														<option >All</option>
														<option >Family home</option>
														<option >Relative`s house</option>
														<option >Shares apartment with friends</option>
														<option >Shares apartment with relatives</option>
														<option >Bed spacer</option>
														<option >Rented apartment</option>
														<option >Dorm</option>
														<option >Others</option>
													</select>
												</div>
											</div>
											<div class="item form-group text-center ">
												<h3><label class="control-label col-md-6 col-sm-6 col-xs-12" style="text-align: center">Health Info</label></h3>
												<h3><label class="control-label col-md-6 col-sm-6 col-xs-12" style="text-align: center">Hobbies/Interests</label></h3>
											</div>
											<br>
											<div class="item form-group">

												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Vision Problem</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownVisionProblem" id="dropdownVisionProblem">
														<option >None</option>
														<option >All</option>
														<option >Yes</option>
														<option >No</option>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Club Interest</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownClubInterest" id="dropdownClubInterest">
														<option >None</option>
														<option >All</option>
														<option >Club Interest</option>
														<option >No Interest</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Hearing Problem</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownHearingProblem" id="dropdownHearingProblem">
														<option >None</option>
														<option >All</option>
														<option >Yes</option>
														<option >No</option>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Organization Interest</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownOrganizationInterest" id="dropdownOrganizationInterest">
														<option >None</option>
														<option >All</option>
														<option >Organization Interest</option> 	
														<option >No Interest</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Speech Problem</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownSpeechProblem" id="dropdownSpeechProblem">
														<option >None</option>
														<option >All</option>
														<option >Yes</option>
														<option >No</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">General Health Problem</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownGeneralHealthProblem" id="dropdownGeneralHealthProblem">
														<option >None</option>
														<option >All</option>
														<option >Yes</option>
														<option >No</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Counselor Visit</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownCounselorVisit" id="dropdownCounselorVisit">
														<option >None</option>
														<option >All</option>
														<option >Yes</option>
														<option >Never</option>
														<option >Yes(With Reason)</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Psychologist Visit</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownPsychologistVisit" id="dropdownPsychologistVisit">
														<option >None</option>
														<option >All</option>
														<option >Yes</option>
														<option >Never</option>
														<option >Yes(With Reason)</option>
													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-12">Psychiatrist Visit</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownPsychiatristVisit" id="dropdownPsychiatristVisit">
														<option >None</option>
														<option >All</option>
														<option >Yes</option>
														<option >Never</option>
														<option >Yes(With Reason)</option>
													</select>
												</div>
											</div>
											<div class="item form-group text-center ">
												<h3><label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: center">Significant Notes</label></h3>
											</div>
											<br>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-1 col-xs-12">Significant Notes Type</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" name="dropdownSignificantNotesType" id="dropdownSignificantNotesType"tabindex="-1" >
														<option >None</option>
														<option >All</option>
														<?php
														$query = "SELECT * FROM tbl_significantnotes INNER JOIN tbl_incidentcategory GROUP BY tbl_incidentcategory.CategoryID ORDER BY CategoryName ";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option value=".$row['categoryID'].">".$row['categoryName']."</option>";
														}
														?>
													</select>
												</div>
												<label class="control-label col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-1 col-xs-12">Significant Notes Category</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownSignificantNotes" id="dropdownSignificantNotes">
														<option >None</option>
														<option >All</option>
														<?php
														$query = "SELECT * FROM tbl_significantnotes INNER JOIN tbl_incidentsubcategory GROUP BY tbl_incidentsubcategory.subCategoryID ORDER BY subCategoryName";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option value=".$row['subCategoryID'].">".$row['subCategoryName']."</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="item form-group text-center ">
												<h3><label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: center">Messages</label></h3>
											</div>
											<br>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-1 col-xs-12">Message Category</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMessageCategory" id="dropdownMessageCategory">
														<option >None</option>
														<option >All</option>
														<?php
														$query = "SELECT * FROM tbl_message INNER JOIN tbl_incidentsubcategory GROUP BY tbl_incidentsubcategory.subCategoryID ORDER BY subCategoryName";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option value=".$row['subCategoryID'].">".$row['subCategoryName']."</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="item form-group text-center ">
												<h3><label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: center">Survey</label></h3>
											</div>
											<br>
											<div class="item form-group">
												<label class="control-label col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-1 col-xs-12">Survey Question Category</label>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownSurveyQuestionCategory" id="dropdownSurveyQuestionCategory">
														<option >None</option>
														<option >All</option>
														<?php
														$query = "SELECT * FROM tbl_message INNER JOIN tbl_incidentsubcategory GROUP BY tbl_incidentsubcategory.subCategoryID ORDER BY subCategoryName";
														$queryResult = mysqli_query($connect,$query);
														while($row = mysqli_fetch_array($queryResult))
														{
															echo "<option value=".$row['subCategoryID'].">".$row['subCategoryName']."</option>";
														}
														?>
													</select>
												</div>
											</div>
											<h3><label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: center;     margin-left: -28px;">View Data</label></h3>
											<div class="item form-group">
												<label  class="control-label col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-xs-12">
													<input type="checkbox" name="checkStudentNumber" id="check[]" value="" checked="true"> <span class="label-text" >Student Number</span>
												</label>
												<label  class="control-label col-md-2 col-sm-2  col-xs-12">
													<input type="checkbox" name="checkFullName" id="check" value=""> <span class="label-text">Full Name</span>
												</label>
												<label  class="control-label col-md-2 col-sm-2  col-xs-12">
													<input type="checkbox" name="checkBirthDate" id="check" value=""> <span class="label-text">Date of Birth</span>
												</label>
												<br>
											</div>

											<div class="item form-group">
												<label  class="control-label col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-xs-12">
													<input type="checkbox" name="checkEmail" id="check" value=""> <span class="label-text">Email Address</span>
												</label>
												<label  class="control-label col-md-2 col-sm-2  col-xs-12">
													<input type="checkbox" name="checkMobileNumber" id="check" value=""> <span class="label-text">Mobile Number</span>
												</label>
												<label  class="control-label col-md-2 col-sm-2  col-xs-12">
													<input type="checkbox" name="checkTelephoneNumber" id="check" value=""> <span class="label-text">Telephone Number</span>
												</label>
												<br>
											</div>
											<div class="item form-group">
												<button type="button" class="btn btn-success pull-right" onclick="submitForm()">Search Query</button>
											</div>
										</div>

										<div id="query-table">

										</div>

									</form>
								</div>
							</div>
						</div>
						<!--Other Tables othertables/-->
					</div>
				</div>
			</div>

			<?php 
			require 'viewMessageModal.php';
			?>
			<!-- /page content -->
			<!--Modal Edit-->

			<!--/Modal Edit-->
			<!--Modal Add-->

			<!--/Modal Edit-->

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
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- Datatables -->
	<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	<script src="../vendors/jszip/dist/jszip.min.js"></script>
	<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
	<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

	<!-- morris.js -->
	<script src="../vendors/raphael/raphael.min.js"></script>
	<script src="../vendors/morris.js/morris.min.js"></script>

	<script>
		$(document).ready(function(){
			$(document).on('click','.message-view',function(){
				var messageID = $(this).attr("id");
				$.ajax({
					url:"viewMessage.php",
					method:"post",
					data:{messageID:messageID},
					success:function(data){
						$('#messageDetails').html(data);
						$('#view_message_Modal').modal('show');
					}
				});
			});

		});
	</script>
	<script type="text/javascript">

		function submitForm(){
			var myform = document.getElementById("queryForm");
			var fd = new FormData(myform);
			$.ajax({
				url: "queryTable.php",
				data: fd,
				cache: false,
				processData: false,
				contentType: false,
				type: 'POST',
				success: function (dataofconfirm) {	
					$('#query-table').html(dataofconfirm);
					init_DataTables();
					window.scrollTo(0, 2100);
					init_morris_charts();
				}
			});
		}
		function funcCheckAge(checker){
			if(checker==true)
			{
				document.getElementById('dropdownMinAge').disabled=false;
				document.getElementById('dropdownMaxAge').disabled=false;
			}
			else
			{
				document.getElementById('dropdownMinAge').disabled=true;
				document.getElementById('dropdownMaxAge').disabled=true;
			}
		}
	</script>
	<script type="text/javascript">
		function init_DataTables() {
			const monthNames = ["January", "February", "March", "April", "May", "June",
			"July", "August", "September", "October", "November", "December"
			];

			const d = new Date();
			var monthName = monthNames[d.getMonth()];
			var year = d.getFullYear();
			console.log('run_datatables');

			if( typeof ($.fn.DataTable) === 'undefined'){ return; }
			console.log('init_DataTables');

			var handleDataTableButtons = function() {
				if ($("#datatable-buttons").length) {
					$("#datatable-buttons").DataTable({
						dom: "Blfrtip",
						buttons: [
						{
							extend: "copy",
							className: "btn-sm"
						},
						{
							extend: "csv",
							className: "btn-sm"
						},
						{
							extend: "excel",
							className: "btn-sm"
						},
						{
							extend: "pdfHtml5",
							className: "btn-sm"
						},
						{
							extend: "print",
							customize: function ( win ) {
								$(win.document.body)
								.css( 'font-size', '10pt', 'margin-left', '-500px' )
								.prepend(
									'<img src="https://image.ibb.co/fwB5qz/GCTS_LOGO1.png" style="position:absolute; top:0px; left:0;" /><h4 class="text-center">Polytechnic University of the Philippines</h4><h4 class="text-center" >OFFICE OF COUNSELING AND PSYCHOLOGICAL SERVICES</h4><h3 class="text-center" >Query Report</h3><h5 class="text-center" >'+monthName+', '+year+'</h5><img src="https://image.ibb.co/iNkFqz/PUPLogo88x88.png" style="position:absolute; top:0px; right:0;" /><h4 class="text-center" style="margin-bottom:40px;">Respondents = '+noOfRespondents+'</h4>'

									);

								$(win.document.body).find( 'table' )
								.addClass( 'compact' )
								.css( 'font-size', 'inherit');
							},
							className: "btn-sm"
						},
						],
						responsive: true
					});
				}
			};

			TableManageButtons = function() {
				"use strict";
				return {
					init: function() {
						handleDataTableButtons();
					}
				};
			}();

			$('#datatable').dataTable();

			$('#datatable-keytable').DataTable({
				keys: true
			});

			$('#datatable-responsive').DataTable();

			$('#datatable-scroller').DataTable({
				ajax: "js/datatables/json/scroller-demo.json",
				deferRender: true,
				scrollY: 380,
				scrollCollapse: true,
				scroller: true
			});

			$('#datatable-fixed-header').DataTable({
				fixedHeader: true
			});

			var $datatable = $('#datatable-checkbox');

			$datatable.dataTable({
				'order': [[ 1, 'asc' ]],
				'columnDefs': [
				{ orderable: false, targets: [0] }
				]
			});
			$datatable.on('draw.dt', function() {
				$('checkbox input').iCheck({
					checkboxClass: 'icheckbox_flat-green'
				});
			});

			TableManageButtons.init();

		};
	</script>
	
	
</body>
</html>