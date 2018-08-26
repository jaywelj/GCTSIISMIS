<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="assets/img/GCTS LOGO1.png">
	<title>IIR Tally | OCPS</title>

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
							<h3>Individual Inventory Record Tally<small></small></h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<?php	
						$college = $_GET['id']; 
						$course = $_GET['course'];
						$query = "SELECT * FROM tbl_college WHERE collegeCode = '$college'";
						$queryArray = mysqli_query($connect,$query);
						while ($row = mysqli_fetch_array($queryArray)) {
							$collegeName = $row['collegeName'];
						}	
						?>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2><?php echo"$collegeName"; ?><small><?php echo"$college"; ?></small></h2>
									<div class="form-group col-md-5 col-sm-5 col-xs-5 pull-right">
										<form method="post">
											<select class="form-control" id="selectCourse" name="selectCourse" onchange="course()">
												<option value="all">------------- All Course ----------------</option>
												<?php 
												$query = "SELECT * FROM tbl_course WHERE collegeCode = '$college'";
												$queryArray = mysqli_query($connect, $query);
												while($row = mysqli_fetch_array($queryArray))
												{
													echo "<option name=".$row['courseCode']." id=".$row['courseCode']." value=".$row['courseCode']." >".$row['courseCode']." | ".$row['courseName']."</option>";
												}
												?>
											</select>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>								
								<div class="x_content">
									<!-- <p class="text-muted font-13 m-b-30">
										<b>Student Individual Inventory Tally of Records</b>
									</p>-->
									
									<table id="datatable-buttons" class="table table-striped table-bordered">
										<?php  
										include("connectionString.php");
										if($course == "all"){

											$queryStudent = "SELECT DISTINCT courseCode, year, section FROM tbl_personalinfo WHERE collegeCode = '$college' GROUP BY courseCode,year,section ASC";
										}
										else{
											$queryStudent = "SELECT DISTINCT courseCode, year, section FROM tbl_personalinfo WHERE collegeCode = '$college' AND courseCode = '$course' GROUP BY courseCode,year,section ASC";
										}

										?> 
										<thead>
											<tr>
												<th>I. Personal Info</th>
												<?php
												$resultStudent = mysqli_query($connect, $queryStudent); 


												while($row = mysqli_fetch_array($resultStudent))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													?>

													<th><?php echo $row['courseCode']; ?> <?php echo $row['year']; ?>-<?php echo $row['section']; ?></th>;
													<?php
												}
												?>												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Male</td>
												<?php
												$resultStudentMale = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentMale))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingMale = "SELECT sex, count(*) AS NumberOfMales FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND sex = 'M' ";

													$resultCountingMale = mysqli_query($connect,$queryCountingMale);
													while ($row = mysqli_fetch_array($resultCountingMale)) {
														echo "<td>".$row['NumberOfMales']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Female</td>
												<?php 
												$resultStudentFemale = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFemale))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingFemale = "SELECT sex, count(*) AS NumberOfemales FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND sex = 'F' ";

													$resultCountingFemale = mysqli_query($connect,$queryCountingFemale);
													while ($row = mysqli_fetch_array($resultCountingFemale)) {
														echo "<td>".$row['NumberOfemales']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentSexTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSexTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingAll = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingAll = mysqli_query($connect,$queryCountingAll);
													while ($row = mysqli_fetch_array($resultCountingAll)) {
														echo "<td>".$row['NumberOfAll']."</td>";
													}
												}
												?>

											</tr>
											<tr>
												<th><strong>Age</strong></th>
												<?php 
												$resultStudentSpaceForAge = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForAge))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForAge = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForAge = mysqli_query($connect,$queryCountingSpacesForAge);
													while ($row = mysqli_fetch_array($resultCountingSpacesForAge)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>15</td>
												<?php 
												$resultStudentAge15 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAge15))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAge15 = "SELECT age, count(*) AS NumberOf15YearsOld FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND age = 15 ";

													$resultCountingAge15 = mysqli_query($connect,$queryCountingAge15);
													while ($row = mysqli_fetch_array($resultCountingAge15)) {
														$NumberOf15YearsOld = $row['NumberOf15YearsOld'];
														echo "<td>".$row['NumberOf15YearsOld']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>16</td>
												<?php 
												$resultStudentAge16 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAge16))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAge16 = "SELECT age, count(*) AS NumberOf16YearsOld FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND age = 16 ";

													$resultCountingAge16 = mysqli_query($connect,$queryCountingAge16);
													while ($row = mysqli_fetch_array($resultCountingAge16)) {
														$NumberOf16YearsOld = $row['NumberOf16YearsOld'];
														echo "<td>".$row['NumberOf16YearsOld']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>17</td>
												<?php 
												$resultStudentAge17 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAge17))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAge17 = "SELECT age, count(*) AS NumberOf17YearsOld FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND age = 17 ";

													$resultCountingAge17 = mysqli_query($connect,$queryCountingAge17);
													while ($row = mysqli_fetch_array($resultCountingAge17)) {
														$NumberOf17YearsOld = $row['NumberOf17YearsOld'];
														echo "<td>".$row['NumberOf17YearsOld']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>18</td>
												<?php 
												$resultStudentAge18 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAge18))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAge18 = "SELECT age, count(*) AS NumberOf18YearsOld FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND age = 18 ";

													$resultCountingAge18 = mysqli_query($connect,$queryCountingAge18);
													while ($row = mysqli_fetch_array($resultCountingAge18)) {
														$NumberOf18YearsOld = $row['NumberOf18YearsOld'];
														echo "<td>".$row['NumberOf18YearsOld']."</td>";
													}
												}
												?>												
											</tr>
											<tr>
												<td>19</td>
												<?php 
												$resultStudentAge19 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAge19))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAge19 = "SELECT age, count(*) AS NumberOf19YearsOld FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND age = 19 ";

													$resultCountingAge19 = mysqli_query($connect,$queryCountingAge19);
													while ($row = mysqli_fetch_array($resultCountingAge19)) {
														$NumberOf19YearsOld = $row['NumberOf19YearsOld'];
														echo "<td>".$row['NumberOf19YearsOld']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>20 and above</td>
												<?php 
												$resultStudentAge20 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAge20))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAge20 = "SELECT age, count(*) AS NumberOf20YearsOld FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND age > 19 ";

													$resultCountingAge20 = mysqli_query($connect,$queryCountingAge20);
													while ($row = mysqli_fetch_array($resultCountingAge20)) {
														$NumberOf20YearsOld = $row['NumberOf20YearsOld'];
														echo "<td>".$row['NumberOf20YearsOld']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentAgeNATotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAgeNATotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAgeNATotal = "SELECT age, count(*) AS NumberOfAgeNotIndicated FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND age != '19' AND age != '18' AND age != '17'AND age != '16' AND age != '15' AND age < 20";

													$resultCountingAgeNATotal = mysqli_query($connect,$queryCountingAgeNATotal);
													while ($row = mysqli_fetch_array($resultCountingAgeNATotal)) {
														$NumberOfAgeNotIndicated = $row['NumberOfAgeNotIndicated'];
														echo "<td>".$row['NumberOfAgeNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentAgeTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentAgeTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingAgeTotal = "SELECT age, count(*) AS NumberOfAgeTotal FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingAgeTotal = mysqli_query($connect,$queryCountingAgeTotal);
													while ($row = mysqli_fetch_array($resultCountingAgeTotal)) {
														$NumberOfAgeTotal = $row['NumberOfAgeTotal'];
														echo "<td>".$row['NumberOfAgeTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Civil Status</th>
												<?php 
												$resultStudentSpaceForCivilStatus = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCivilStatus))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCivilStatus = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCivilStatus = mysqli_query($connect,$queryCountingSpacesForCivilStatus);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCivilStatus)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Single</td>
												<?php 
												$resultStudentCivilStatusSingle = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCivilStatusSingle))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCivilStatusSingle = "SELECT civilStatus, count(*) AS NumberOfCivilStatusSingle FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND civilStatus = 'Single'";

													$resultCountingCivilStatusSingle = mysqli_query($connect,$queryCountingCivilStatusSingle);
													while ($row = mysqli_fetch_array($resultCountingCivilStatusSingle)) {
														$NumberOfCivilStatusSingle = $row['NumberOfCivilStatusSingle'];
														echo "<td>".$row['NumberOfCivilStatusSingle']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Married</td>
												<?php 
												$resultStudentCivilStatusMarried = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCivilStatusMarried))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCivilStatusMarried = "SELECT civilStatus, count(*) AS NumberOfCivilStatusMarried FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND civilStatus = 'Married'";

													$resultCountingCivilStatusMarried = mysqli_query($connect,$queryCountingCivilStatusMarried);
													while ($row = mysqli_fetch_array($resultCountingCivilStatusMarried)) {
														$NumberOfCivilStatusMarried = $row['NumberOfCivilStatusMarried'];
														echo "<td>".$row['NumberOfCivilStatusMarried']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Widowed</td>
												<?php 
												$resultStudentCivilStatusWidowed = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCivilStatusWidowed))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCivilStatusWidowed = "SELECT civilStatus, count(*) AS NumberOfCivilStatusWidowed FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND civilStatus = 'Widowed'";

													$resultCountingCivilStatusWidowed = mysqli_query($connect,$queryCountingCivilStatusWidowed);
													while ($row = mysqli_fetch_array($resultCountingCivilStatusWidowed)) {
														$NumberOfCivilStatusWidowed = $row['NumberOfCivilStatusWidowed'];
														echo "<td>".$row['NumberOfCivilStatusWidowed']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Divorced</td>
												<?php 
												$resultStudentCivilStatusDivorced = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCivilStatusDivorced))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCivilStatusDivorced = "SELECT civilStatus, count(*) AS NumberOfCivilStatusDivorced FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND civilStatus = 'Divorced'";

													$resultCountingCivilStatusDivorced = mysqli_query($connect,$queryCountingCivilStatusDivorced);
													while ($row = mysqli_fetch_array($resultCountingCivilStatusDivorced)) {
														$NumberOfCivilStatusDivorced = $row['NumberOfCivilStatusDivorced'];
														echo "<td>".$row['NumberOfCivilStatusDivorced']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentCivilStatusNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCivilStatusNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCivilStatusNA = "SELECT civilStatus, count(*) AS NumberOfCivilStatusNA FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND civilStatus != 'Divorced' AND civilStatus != 'Single' AND civilStatus != 'Married' AND civilStatus != 'Widowed' ";

													$resultCountingCivilStatusNA = mysqli_query($connect,$queryCountingCivilStatusNA);
													while ($row = mysqli_fetch_array($resultCountingCivilStatusNA)) {
														$NumberOfCivilStatusNA = $row['NumberOfCivilStatusNA'];
														echo "<td>".$row['NumberOfCivilStatusNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentCivilStatusTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCivilStatusTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCivilStatusTotal = "SELECT civilStatus, count(*) AS NumberOfCivilStatusTotal FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingCivilStatusTotal = mysqli_query($connect,$queryCountingCivilStatusTotal);
													while ($row = mysqli_fetch_array($resultCountingCivilStatusTotal)) {
														$NumberOfCivilStatusTotal = $row['NumberOfCivilStatusTotal'];
														echo "<td>".$row['NumberOfCivilStatusTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>City Address</th>
												<?php 
												$resultStudentSpaceForCityAddress = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress = "SELECT count(*) AS NumberOfAllCityAddress FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress = mysqli_query($connect,$queryCountingSpacesForCityAddress);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Caloocan</td>
												<?php 
												$resultStudentCityAddressCaloocan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressCaloocan))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressCaloocan = "SELECT cityName, count(*) AS NumberOfCityAddressCaloocan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Caloocan'";

													$resultCountingCityAddressCaloocan = mysqli_query($connect,$queryCountingCityAddressCaloocan);
													while ($row = mysqli_fetch_array($resultCountingCityAddressCaloocan)) {
														$NumberOfCityAddressCaloocan = $row['NumberOfCityAddressCaloocan'];
														echo "<td>".$row['NumberOfCityAddressCaloocan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Las Piñas</td>
												<?php 
												$resultStudentCityAddressLasPinas = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressLasPinas))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressLasPinas = "SELECT cityName, count(*) AS NumberOfCityAddressLasPinas FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Las Pinas'";

													$resultCountingCityAddressLasPinas = mysqli_query($connect,$queryCountingCityAddressLasPinas);
													while ($row = mysqli_fetch_array($resultCountingCityAddressLasPinas)) {
														$NumberOfCityAddressLasPinas = $row['NumberOfCityAddressLasPinas'];
														echo "<td>".$row['NumberOfCityAddressLasPinas']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Mandaluyong</td>
												<?php 
												$resultStudentCityAddressMandaluyong = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressMandaluyong))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressMandaluyong = "SELECT cityName, count(*) AS NumberOfCityAddressMandaluyong FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Mandaluyong'";

													$resultCountingCityAddressMandaluyong = mysqli_query($connect,$queryCountingCityAddressMandaluyong);
													while ($row = mysqli_fetch_array($resultCountingCityAddressMandaluyong)) {
														$NumberOfCityAddressMandaluyong = $row['NumberOfCityAddressMandaluyong'];
														echo "<td>".$row['NumberOfCityAddressMandaluyong']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Makati</td>
												<?php 
												$resultStudentCityAddressMakati = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressMakati))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressMakati = "SELECT cityName, count(*) AS NumberOfCityAddressMakati FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Makati'";

													$resultCountingCityAddressMakati = mysqli_query($connect,$queryCountingCityAddressMakati);
													while ($row = mysqli_fetch_array($resultCountingCityAddressMakati)) {
														$NumberOfCityAddressMakati = $row['NumberOfCityAddressMakati'];
														echo "<td>".$row['NumberOfCityAddressMakati']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Malabon</td>
												<?php 
												$resultStudentCityAddressMalabon = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressMalabon))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressMalabon = "SELECT cityName, count(*) AS NumberOfCityAddressMalabon FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Malabon'";

													$resultCountingCityAddressMalabon = mysqli_query($connect,$queryCountingCityAddressMalabon);
													while ($row = mysqli_fetch_array($resultCountingCityAddressMalabon)) {
														$NumberOfCityAddressMalabon = $row['NumberOfCityAddressMalabon'];
														echo "<td>".$row['NumberOfCityAddressMalabon']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Marikina</td>
												<?php 
												$resultStudentCityAddressMarikina = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressMarikina))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressMarikina = "SELECT cityName, count(*) AS NumberOfCityAddressMarikina FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Marikina'";

													$resultCountingCityAddressMarikina = mysqli_query($connect,$queryCountingCityAddressMarikina);
													while ($row = mysqli_fetch_array($resultCountingCityAddressMarikina)) {
														$NumberOfCityAddressMarikina = $row['NumberOfCityAddressMarikina'];
														echo "<td>".$row['NumberOfCityAddressMarikina']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Manila</td>
												<?php 
												$resultStudentCityAddressManila = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressManila))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressManila = "SELECT cityName, count(*) AS NumberOfCityAddressManila FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Manila'";

													$resultCountingCityAddressManila = mysqli_query($connect,$queryCountingCityAddressManila);
													while ($row = mysqli_fetch_array($resultCountingCityAddressManila)) {
														$NumberOfCityAddressManila = $row['NumberOfCityAddressManila'];
														echo "<td>".$row['NumberOfCityAddressManila']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Muntinlupa</td>
												<?php 
												$resultStudentCityAddressMuntinlupa = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressMuntinlupa))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressMuntinlupa = "SELECT cityName, count(*) AS NumberOfCityAddressMuntinlupa FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Muntinlupa'";

													$resultCountingCityAddressMuntinlupa = mysqli_query($connect,$queryCountingCityAddressMuntinlupa);
													while ($row = mysqli_fetch_array($resultCountingCityAddressMuntinlupa)) {
														$NumberOfCityAddressMuntinlupa = $row['NumberOfCityAddressMuntinlupa'];
														echo "<td>".$row['NumberOfCityAddressMuntinlupa']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Navotas</td>
												<?php 
												$resultStudentCityAddressNavotas = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressNavotas))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressNavotas = "SELECT cityName, count(*) AS NumberOfCityAddressNavotas FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Navotas'";

													$resultCountingCityAddressNavotas = mysqli_query($connect,$queryCountingCityAddressNavotas);
													while ($row = mysqli_fetch_array($resultCountingCityAddressNavotas)) {
														$NumberOfCityAddressNavotas = $row['NumberOfCityAddressNavotas'];
														echo "<td>".$row['NumberOfCityAddressNavotas']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Parañaque</td>
												<?php 
												$resultStudentCityAddressParanaque = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressParanaque))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressParanaque = "SELECT cityName, count(*) AS NumberOfCityAddressParanaque FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Paranaque'";

													$resultCountingCityAddressParanaque = mysqli_query($connect,$queryCountingCityAddressParanaque);
													while ($row = mysqli_fetch_array($resultCountingCityAddressParanaque)) {
														$NumberOfCityAddressParanaque = $row['NumberOfCityAddressParanaque'];
														echo "<td>".$row['NumberOfCityAddressParanaque']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Pasay</td>
												<?php 
												$resultStudentCityAddressPasay = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressPasay))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressPasay = "SELECT cityName, count(*) AS NumberOfCityAddressPasay FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Pasay'";

													$resultCountingCityAddressPasay = mysqli_query($connect,$queryCountingCityAddressPasay);
													while ($row = mysqli_fetch_array($resultCountingCityAddressPasay)) {
														$NumberOfCityAddressPasay = $row['NumberOfCityAddressPasay'];
														echo "<td>".$row['NumberOfCityAddressPasay']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Pasig</td>
												<?php 
												$resultStudentCityAddressPasig = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressPasig))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressPasig = "SELECT cityName, count(*) AS NumberOfCityAddressPasig FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Pasig'";

													$resultCountingCityAddressPasig = mysqli_query($connect,$queryCountingCityAddressPasig);
													while ($row = mysqli_fetch_array($resultCountingCityAddressPasig)) {
														$NumberOfCityAddressPasig = $row['NumberOfCityAddressPasig'];
														echo "<td>".$row['NumberOfCityAddressPasig']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Pateros</td>
												<?php 
												$resultStudentCityAddressPateros = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressPateros))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressPateros = "SELECT cityName, count(*) AS NumberOfCityAddressPateros FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Pateros'";

													$resultCountingCityAddressPateros = mysqli_query($connect,$queryCountingCityAddressPateros);
													while ($row = mysqli_fetch_array($resultCountingCityAddressPateros)) {
														$NumberOfCityAddressPateros = $row['NumberOfCityAddressPateros'];
														echo "<td>".$row['NumberOfCityAddressPateros']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Quezon City</td>
												<?php 
												$resultStudentCityAddressQuezonCity = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressQuezonCity))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressQuezonCity = "SELECT cityName, count(*) AS NumberOfCityAddressQuezonCity FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Quezon City'";

													$resultCountingCityAddressQuezonCity = mysqli_query($connect,$queryCountingCityAddressQuezonCity);
													while ($row = mysqli_fetch_array($resultCountingCityAddressQuezonCity)) {
														$NumberOfCityAddressQuezonCity = $row['NumberOfCityAddressQuezonCity'];
														echo "<td>".$row['NumberOfCityAddressQuezonCity']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>San Juan</td>
												<?php 
												$resultStudentCityAddressSanJuan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressSanJuan))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressSanJuan = "SELECT cityName, count(*) AS NumberOfCityAddressSanJuan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~San Juan'";

													$resultCountingCityAddressSanJuan = mysqli_query($connect,$queryCountingCityAddressSanJuan);
													while ($row = mysqli_fetch_array($resultCountingCityAddressSanJuan)) {
														$NumberOfCityAddressSanJuan = $row['NumberOfCityAddressSanJuan'];
														echo "<td>".$row['NumberOfCityAddressSanJuan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Taguig</td>
												<?php 
												$resultStudentCityAddressTaguig = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressTaguig))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressTaguig = "SELECT cityName, count(*) AS NumberOfCityAddressTaguig FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Taguig'";

													$resultCountingCityAddressTaguig = mysqli_query($connect,$queryCountingCityAddressTaguig);
													while ($row = mysqli_fetch_array($resultCountingCityAddressTaguig)) {
														$NumberOfCityAddressTaguig = $row['NumberOfCityAddressTaguig'];
														echo "<td>".$row['NumberOfCityAddressTaguig']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Valenzuela</td>
												<?php 
												$resultStudentCityAddressValenzuela = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressValenzuela))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressValenzuela = "SELECT cityName, count(*) AS NumberOfCityAddressValenzuela FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND cityName = 'Metro Manila~Valenzuela'";

													$resultCountingCityAddressValenzuela = mysqli_query($connect,$queryCountingCityAddressValenzuela);
													while ($row = mysqli_fetch_array($resultCountingCityAddressValenzuela)) {
														$NumberOfCityAddressValenzuela = $row['NumberOfCityAddressValenzuela'];
														echo "<td>".$row['NumberOfCityAddressValenzuela']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentCityAddressNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressNA = "SELECT cityName, courseCode, count(*) AS NumberOfCityAddressNA FROM tbl_personalinfo WHERE courseCode='$currentCourse' AND year='$currentYear' AND section='$currentSection' AND cityName != 'Metro Manila~Valenzuela' AND cityName != 'Metro Manila~Manila' AND cityName != 'Metro Manila~Navotas' AND cityName != 'Metro Manila~Taguig' AND cityName != 'Metro Manila~San Juan' AND cityName != 'Metro Manila~Quezon City' AND cityName != 'Metro Manila~Pateros' AND cityName != 'Metro Manila~Pasig' AND cityName != 'Metro Manila~Pasay' AND cityName != 'Metro Manila~Parañaque' AND cityName != 'Metro Manila~Muntinlupa' AND cityName != 'Metro Manila~Marikina' AND cityName != 'Metro Manila~Makati'AND cityName != 'Metro Manila~Mandaluyong' AND cityName != 'Metro Manila~Malabon' AND cityName != 'Metro Manila~Las Piñas' AND cityName != 'Metro Manila~Mandaluyong' AND cityName != 'Metro Manila~Caloocan' ";

													$resultCountingCityAddressNA = mysqli_query($connect,$queryCountingCityAddressNA);
													while ($row = mysqli_fetch_array($resultCountingCityAddressNA)) {
														$NumberOfCityAddressNA = $row['NumberOfCityAddressNA'];
														echo "<td>".$row['NumberOfCityAddressNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentCityAddressTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressTotal = "SELECT cityName, count(*) AS NumberOfCityAddressTotal FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingCityAddressTotal = mysqli_query($connect,$queryCountingCityAddressTotal);
													while ($row = mysqli_fetch_array($resultCountingCityAddressTotal)) {
														$NumberOfCityAddressTotal = $row['NumberOfCityAddressTotal'];
														echo "<td>".$row['NumberOfCityAddressTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Provincial Address</th>
												<?php 
												$resultStudentSpaceForProvincialAddress = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForProvincialAddress))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForProvincialAddress = "SELECT provinceProvincial,count(*) AS NumberOfAllProvincialAddress FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForProvincialAddress = mysqli_query($connect,$queryCountingSpacesForProvincialAddress);
													while ($row = mysqli_fetch_array($resultCountingSpacesForProvincialAddress)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region I. Ilocos Region</th>
												<?php 
												$resultStudentSpaceForProvincialAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForProvincialAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForProvincialAddress2 = "SELECT provinceProvincial,count(*) AS NumberOfAllProvincialAddress FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForProvincialAddress2 = mysqli_query($connect,$queryCountingSpacesForProvincialAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForProvincialAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Ilocos Norte</td>
												<?php 
												$resultStudentProvincialAddressIlocosNorte = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressIlocosNorte))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressIlocosNorte = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressIlocosNorte FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Ilocos Norte' ";

													$resultProvincialAddressIlocosNorte = mysqli_query($connect,$queryProvincialAddressIlocosNorte);
													while ($row = mysqli_fetch_array($resultProvincialAddressIlocosNorte)) {
														echo "<td>".$row['NumberOfProvincialAddressIlocosNorte']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Ilocos Sur</td>
												<?php 
												$resultStudentProvincialAddressIlocosSur = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressIlocosSur))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressIlocosSur = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressIlocosSur FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Ilocos Sur' ";

													$resultProvincialAddressIlocosSur = mysqli_query($connect,$queryProvincialAddressIlocosSur);
													while ($row = mysqli_fetch_array($resultProvincialAddressIlocosSur)) {
														echo "<td>".$row['NumberOfProvincialAddressIlocosSur']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>La Union</td>
												<?php 
												$resultStudentProvincialAddressLaUnion = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressLaUnion))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressLaUnion = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressLaUnion FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'La Union' ";

													$resultProvincialAddressLaUnion = mysqli_query($connect,$queryProvincialAddressLaUnion);
													while ($row = mysqli_fetch_array($resultProvincialAddressLaUnion)) {
														echo "<td>".$row['NumberOfProvincialAddressLaUnion']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Pangasinan</td>
												<?php 
												$resultStudentProvincialAddressPangasinan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressPangasinan))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressPangasinan = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressPangasinan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Pangasinan' ";

													$resultProvincialAddressPangasinan = mysqli_query($connect,$queryProvincialAddressPangasinan);
													while ($row = mysqli_fetch_array($resultProvincialAddressPangasinan)) {
														echo "<td>".$row['NumberOfProvincialAddressPangasinan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region II. Cagayan Valley</th>
												<?php 
												$resultStudentSpaceForProvincialAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForProvincialAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForProvincialAddress2 = "SELECT provinceProvincial,count(*) AS NumberOfAllProvincialAddress FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForProvincialAddress2 = mysqli_query($connect,$queryCountingSpacesForProvincialAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForProvincialAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Quirino</td>
												<?php 
												$resultStudentProvincialAddressQuirino = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressQuirino))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressQuirino = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressQuirino FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Quirino' ";

													$resultProvincialAddressQuirino = mysqli_query($connect,$queryProvincialAddressQuirino);
													while ($row = mysqli_fetch_array($resultProvincialAddressQuirino)) {
														echo "<td>".$row['NumberOfProvincialAddressQuirino']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Cagayan</td>
												<?php 
												$resultStudentProvincialAddressCagayan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCagayan))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCagayan = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCagayan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Cagayan' ";

													$resultProvincialAddressCagayan = mysqli_query($connect,$queryProvincialAddressCagayan);
													while ($row = mysqli_fetch_array($resultProvincialAddressCagayan)) {
														echo "<td>".$row['NumberOfProvincialAddressCagayan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Isabela</td>
												<?php 
												$resultStudentProvincialAddressIsabela = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressIsabela))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressIsabela = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressIsabela FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Isabela' ";

													$resultProvincialAddressIsabela = mysqli_query($connect,$queryProvincialAddressIsabela);
													while ($row = mysqli_fetch_array($resultProvincialAddressIsabela)) {
														echo "<td>".$row['NumberOfProvincialAddressIsabela']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region III. Central Luzon</th>
												<?php 
												$resultStudentProvincialAddressCagayan2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCagayan2))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCagayan2 = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCagayan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Pangasinan' ";

													$resultProvincialAddressCagayan2 = mysqli_query($connect,$queryProvincialAddressCagayan);
													while ($row = mysqli_fetch_array($resultProvincialAddressCagayan2)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Bataan</td>
												<?php 
												$resultStudentProvincialAddressBataan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBataan))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBataan = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBataan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Bataan' ";

													$resultProvincialAddressBataan = mysqli_query($connect,$queryProvincialAddressBataan);
													while ($row = mysqli_fetch_array($resultProvincialAddressBataan)) {
														echo "<td>".$row['NumberOfProvincialAddressBataan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Bulacan</td>
												<?php 
												$resultStudentProvincialAddressBulacan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBulacan))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBulacan = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBulacan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Bulacan' ";

													$resultProvincialAddressBulacan = mysqli_query($connect,$queryProvincialAddressBulacan);
													while ($row = mysqli_fetch_array($resultProvincialAddressBulacan)) {
														echo "<td>".$row['NumberOfProvincialAddressBulacan']."</td>";
													}
												}
												?>

											</tr>
											<tr>
												<td>Nueva Ecija</td>
												<?php 
												$resultStudentProvincialAddressNuevaEcija = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressNuevaEcija))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressNuevaEcija = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressNuevaEcija FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Nueva Ecija' ";

													$resultProvincialAddressNuevaEcija = mysqli_query($connect,$queryProvincialAddressNuevaEcija);
													while ($row = mysqli_fetch_array($resultProvincialAddressNuevaEcija)) {
														echo "<td>".$row['NumberOfProvincialAddressNuevaEcija']."</td>";
													}
												}
												?>

											</tr>
											<tr>
												<td>Pampanga</td>
												<?php 
												$resultStudentProvincialAddressPampanga = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressPampanga))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressPampanga = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressPampanga FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Pampanga' ";

													$resultProvincialAddressPampanga = mysqli_query($connect,$queryProvincialAddressPampanga);
													while ($row = mysqli_fetch_array($resultProvincialAddressPampanga)) {
														echo "<td>".$row['NumberOfProvincialAddressPampanga']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Tarlac</td>
												<?php 
												$resultStudentProvincialAddressTarlac = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressTarlac))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressTarlac = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressTarlac FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Tarlac' ";

													$resultProvincialAddressTarlac = mysqli_query($connect,$queryProvincialAddressTarlac);
													while ($row = mysqli_fetch_array($resultProvincialAddressTarlac)) {
														echo "<td>".$row['NumberOfProvincialAddressTarlac']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Zambales</td>
												<?php 
												$resultStudentProvincialAddressZambales = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressZambales))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressZambales = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressZambales FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Zambales' ";

													$resultProvincialAddressZambales = mysqli_query($connect,$queryProvincialAddressZambales);
													while ($row = mysqli_fetch_array($resultProvincialAddressZambales)) {
														echo "<td>".$row['NumberOfProvincialAddressZambales']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Aurora</td>
												<?php 
												$resultStudentProvincialAddressAurora = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressAurora))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressAurora = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressAurora FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Aurora' ";

													$resultProvincialAddressAurora = mysqli_query($connect,$queryProvincialAddressAurora);
													while ($row = mysqli_fetch_array($resultProvincialAddressAurora)) {
														echo "<td>".$row['NumberOfProvincialAddressAurora']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region IV-A CALABARZON</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Batangas</td>
												<?php 
												$resultStudentProvincialAddressBatangas = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBatangas))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBatangas = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBatangas FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Batangas' ";

													$resultProvincialAddressBatangas = mysqli_query($connect,$queryProvincialAddressBatangas);
													while ($row = mysqli_fetch_array($resultProvincialAddressBatangas)) {
														echo "<td>".$row['NumberOfProvincialAddressBatangas']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Cavite</td>
												<?php 
												$resultStudentProvincialAddressCavite = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCavite))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCavite = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCavite FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Cavite' ";

													$resultProvincialAddressCavite = mysqli_query($connect,$queryProvincialAddressCavite);
													while ($row = mysqli_fetch_array($resultProvincialAddressCavite)) {
														echo "<td>".$row['NumberOfProvincialAddressCavite']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Laguna</td>
												<?php 
												$resultStudentProvincialAddressLaguna = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressLaguna))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressLaguna = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressLaguna FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Laguna' ";

													$resultProvincialAddressLaguna = mysqli_query($connect,$queryProvincialAddressLaguna);
													while ($row = mysqli_fetch_array($resultProvincialAddressLaguna)) {
														echo "<td>".$row['NumberOfProvincialAddressLaguna']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Quezon</td>
												<?php 
												$resultStudentProvincialAddressQuezon = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressQuezon))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressQuezon = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressQuezon FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Quezon' ";

													$resultProvincialAddressQuezon = mysqli_query($connect,$queryProvincialAddressQuezon);
													while ($row = mysqli_fetch_array($resultProvincialAddressQuezon)) {
														echo "<td>".$row['NumberOfProvincialAddressQuezon']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Rizal</td>
												<?php 
												$resultStudentProvincialAddressRizal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressRizal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressRizal = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressRizal FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Rizal' ";

													$resultProvincialAddressRizal = mysqli_query($connect,$queryProvincialAddressRizal);
													while ($row = mysqli_fetch_array($resultProvincialAddressRizal)) {
														echo "<td>".$row['NumberOfProvincialAddressRizal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region IV-B MIMAROPA</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Mindoro Occidental</td>
												<?php 
												$resultStudentProvincialAddressMindoroOccidental = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressMindoroOccidental))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressMindoroOccidental = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressMindoroOccidental FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Mindoro Occidental' ";

													$resultProvincialAddressMindoroOccidental = mysqli_query($connect,$queryProvincialAddressMindoroOccidental);
													while ($row = mysqli_fetch_array($resultProvincialAddressMindoroOccidental)) {
														echo "<td>".$row['NumberOfProvincialAddressMindoroOccidental']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Mindoro Oriental</td>
												<?php 
												$resultStudentProvincialAddressMindoroOriental = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressMindoroOriental))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressMindoroOriental = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressMindoroOriental FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Mindoro Oriental' ";

													$resultProvincialAddressMindoroOriental = mysqli_query($connect,$queryProvincialAddressMindoroOriental);
													while ($row = mysqli_fetch_array($resultProvincialAddressMindoroOriental)) {
														echo "<td>".$row['NumberOfProvincialAddressMindoroOriental']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Marinduque</td>
												<?php 
												$resultStudentProvincialAddressMarinduque = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressMarinduque))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressMarinduque = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressMarinduque FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Marinduque' ";

													$resultProvincialAddressMarinduque = mysqli_query($connect,$queryProvincialAddressMarinduque);
													while ($row = mysqli_fetch_array($resultProvincialAddressMarinduque)) {
														echo "<td>".$row['NumberOfProvincialAddressMarinduque']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Romblon</td>
												<?php 
												$resultStudentProvincialAddressRomblon = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressRomblon))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressRomblon = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressRomblon FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Romblon' ";

													$resultProvincialAddressRomblon = mysqli_query($connect,$queryProvincialAddressRomblon);
													while ($row = mysqli_fetch_array($resultProvincialAddressRomblon)) {
														echo "<td>".$row['NumberOfProvincialAddressRomblon']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Palawan</td>
												<?php 
												$resultStudentProvincialAddressPalawan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressPalawan))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressPalawan = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressPalawan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Palawan' ";

													$resultProvincialAddressPalawan = mysqli_query($connect,$queryProvincialAddressPalawan);
													while ($row = mysqli_fetch_array($resultProvincialAddressPalawan)) {
														echo "<td>".$row['NumberOfProvincialAddressPalawan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region V: Bicol Region</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Albay</td>
												<?php 
												$resultStudentProvincialAddressAlbay = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressAlbay))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressAlbay = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressAlbay FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Albay' ";

													$resultProvincialAddressAlbay = mysqli_query($connect,$queryProvincialAddressAlbay);
													while ($row = mysqli_fetch_array($resultProvincialAddressAlbay)) {
														echo "<td>".$row['NumberOfProvincialAddressAlbay']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Camarines Norte</td>
												<?php 
												$resultStudentProvincialAddressCamarinesNorte = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCamarinesNorte))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCamarinesNorte = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCamarinesNorte FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Camarines Norte' ";

													$resultProvincialAddressCamarinesNorte = mysqli_query($connect,$queryProvincialAddressCamarinesNorte);
													while ($row = mysqli_fetch_array($resultProvincialAddressCamarinesNorte)) {
														echo "<td>".$row['NumberOfProvincialAddressCamarinesNorte']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Camarines Sur</td>
												<?php 
												$resultStudentProvincialAddressCamarinesSur = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCamarinesSur))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCamarinesSur = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCamarinesSur FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Camarines Sur' ";

													$resultProvincialAddressCamarinesSur = mysqli_query($connect,$queryProvincialAddressCamarinesSur);
													while ($row = mysqli_fetch_array($resultProvincialAddressCamarinesSur)) {
														echo "<td>".$row['NumberOfProvincialAddressCamarinesSur']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Catanduanes</td>
												<?php 
												$resultStudentProvincialAddressCatanduanes = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCatanduanes))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCatanduanes = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCatanduanes FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Catanduanes' ";

													$resultProvincialAddressCatanduanes = mysqli_query($connect,$queryProvincialAddressCatanduanes);
													while ($row = mysqli_fetch_array($resultProvincialAddressCatanduanes)) {
														echo "<td>".$row['NumberOfProvincialAddressCatanduanes']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Masbate</td>
												<?php 
												$resultStudentProvincialAddressMasbate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressMasbate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressMasbate = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressMasbate FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Masbate' ";

													$resultProvincialAddressMasbate = mysqli_query($connect,$queryProvincialAddressMasbate);
													while ($row = mysqli_fetch_array($resultProvincialAddressMasbate)) {
														echo "<td>".$row['NumberOfProvincialAddressMasbate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Sorsogon</td>
												<?php 
												$resultStudentProvincialAddressSorsogon = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressSorsogon))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressSorsogon = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressSorsogon FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Sorsogon' ";

													$resultProvincialAddressSorsogon = mysqli_query($connect,$queryProvincialAddressSorsogon);
													while ($row = mysqli_fetch_array($resultProvincialAddressSorsogon)) {
														echo "<td>".$row['NumberOfProvincialAddressSorsogon']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region IV: Western Visayas</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Aklan</td>
												<?php 
												$resultStudentProvincialAddressAklan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressAklan))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressAklan = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressAklan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Aklan' ";

													$resultProvincialAddressAklan = mysqli_query($connect,$queryProvincialAddressAklan);
													while ($row = mysqli_fetch_array($resultProvincialAddressAklan)) {
														echo "<td>".$row['NumberOfProvincialAddressAklan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Antique</td>
												<?php 
												$resultStudentProvincialAddressAntique = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressAntique))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressAntique = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressAntique FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Antique' ";

													$resultProvincialAddressAntique = mysqli_query($connect,$queryProvincialAddressAntique);
													while ($row = mysqli_fetch_array($resultProvincialAddressAntique)) {
														echo "<td>".$row['NumberOfProvincialAddressAntique']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Capiz</td>
												<?php 
												$resultStudentProvincialAddressCapiz = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCapiz))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCapiz = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCapiz FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Capiz' ";

													$resultProvincialAddressCapiz = mysqli_query($connect,$queryProvincialAddressCapiz);
													while ($row = mysqli_fetch_array($resultProvincialAddressCapiz)) {
														echo "<td>".$row['NumberOfProvincialAddressCapiz']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Iloilo</td>
												<?php 
												$resultStudentProvincialAddressIloilo = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressIloilo))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressIloilo = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressIloilo FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Iloilo' ";

													$resultProvincialAddressIloilo = mysqli_query($connect,$queryProvincialAddressIloilo);
													while ($row = mysqli_fetch_array($resultProvincialAddressIloilo)) {
														echo "<td>".$row['NumberOfProvincialAddressIloilo']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Negros Occidental</td>
												<?php 
												$resultStudentProvincialAddressNegrosOccidental = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressNegrosOccidental))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressNegrosOccidental = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressNegrosOccidental FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Negros Occidental' ";

													$resultProvincialAddressNegrosOccidental = mysqli_query($connect,$queryProvincialAddressNegrosOccidental);
													while ($row = mysqli_fetch_array($resultProvincialAddressNegrosOccidental)) {
														echo "<td>".$row['NumberOfProvincialAddressNegrosOccidental']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Negros Oriental</td>
												<?php 
												$resultStudentProvincialAddressNegrosOriental = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressNegrosOriental))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressNegrosOriental = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressNegrosOriental FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Negros Oriental' ";

													$resultProvincialAddressNegrosOriental = mysqli_query($connect,$queryProvincialAddressNegrosOriental);
													while ($row = mysqli_fetch_array($resultProvincialAddressNegrosOriental)) {
														echo "<td>".$row['NumberOfProvincialAddressNegrosOriental']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region VII: Central Visayas</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Bohol</td>
												<?php 
												$resultStudentProvincialAddressBohol = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBohol))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBohol = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBohol FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Bohol' ";

													$resultProvincialAddressBohol = mysqli_query($connect,$queryProvincialAddressBohol);
													while ($row = mysqli_fetch_array($resultProvincialAddressBohol)) {
														echo "<td>".$row['NumberOfProvincialAddressBohol']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Cebu</td>
												<?php 
												$resultStudentProvincialAddressCebu = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressCebu))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressCebu = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressCebu FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Cebu' ";

													$resultProvincialAddressCebu = mysqli_query($connect,$queryProvincialAddressCebu);
													while ($row = mysqli_fetch_array($resultProvincialAddressCebu)) {
														echo "<td>".$row['NumberOfProvincialAddressCebu']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Siquijor</td>
												<?php 
												$resultStudentProvincialAddressSiquijor = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressSiquijor))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressSiquijor = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressSiquijor FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Siquijor' ";

													$resultProvincialAddressSiquijor = mysqli_query($connect,$queryProvincialAddressSiquijor);
													while ($row = mysqli_fetch_array($resultProvincialAddressSiquijor)) {
														echo "<td>".$row['NumberOfProvincialAddressSiquijor']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region VIII: Eastern Visayas</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Eastern Samar</td>
												<?php 
												$resultStudentProvincialAddressEasternSamar = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressEasternSamar))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressEasternSamar = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressEasternSamar FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Eastern Samar' ";

													$resultProvincialAddressEasternSamar = mysqli_query($connect,$queryProvincialAddressEasternSamar);
													while ($row = mysqli_fetch_array($resultProvincialAddressEasternSamar)) {
														echo "<td>".$row['NumberOfProvincialAddressEasternSamar']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Northern Samar</td>
												<?php 
												$resultStudentProvincialAddressNorthernSamar = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressNorthernSamar))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressNorthernSamar = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressNorthernSamar FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Northern Samar' ";

													$resultProvincialAddressNorthernSamar = mysqli_query($connect,$queryProvincialAddressNorthernSamar);
													while ($row = mysqli_fetch_array($resultProvincialAddressNorthernSamar)) {
														echo "<td>".$row['NumberOfProvincialAddressNorthernSamar']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Samar</td>
												<?php 
												$resultStudentProvincialAddressSamar = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressSamar))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressSamar = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressSamar FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Samar' ";

													$resultProvincialAddressSamar = mysqli_query($connect,$queryProvincialAddressSamar);
													while ($row = mysqli_fetch_array($resultProvincialAddressSamar)) {
														echo "<td>".$row['NumberOfProvincialAddressSamar']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Biliran</td>
												<?php 
												$resultStudentProvincialAddressBiliran = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBiliran))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBiliran = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBiliran FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Biliran' ";

													$resultProvincialAddressBiliran = mysqli_query($connect,$queryProvincialAddressBiliran);
													while ($row = mysqli_fetch_array($resultProvincialAddressBiliran)) {
														echo "<td>".$row['NumberOfProvincialAddressBiliran']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Leyte</td>
												<?php 
												$resultStudentProvincialAddressLeyte = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressLeyte))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressLeyte = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressLeyte FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Leyte' ";

													$resultProvincialAddressLeyte = mysqli_query($connect,$queryProvincialAddressLeyte);
													while ($row = mysqli_fetch_array($resultProvincialAddressLeyte)) {
														echo "<td>".$row['NumberOfProvincialAddressLeyte']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Region IX: Western Mindanao</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Basilan</td>
												<?php 
												$resultStudentProvincialAddressBasilan = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBasilan))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBasilan = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBasilan FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Basilan' ";

													$resultProvincialAddressBasilan = mysqli_query($connect,$queryProvincialAddressBasilan);
													while ($row = mysqli_fetch_array($resultProvincialAddressBasilan)) {
														echo "<td>".$row['NumberOfProvincialAddressBasilan']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Zamboanga Del Norte</td>
												<?php 
												$resultStudentProvincialAddressZamboangaDelNorte = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressZamboangaDelNorte))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressZamboangaDelNorte = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressZamboangaDelNorte FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Zamboanga Del Norte' ";

													$resultProvincialAddressZamboangaDelNorte = mysqli_query($connect,$queryProvincialAddressZamboangaDelNorte);
													while ($row = mysqli_fetch_array($resultProvincialAddressZamboangaDelNorte)) {
														echo "<td>".$row['NumberOfProvincialAddressZamboangaDelNorte']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Zamboanga Del Sur</td>
												<?php 
												$resultStudentProvincialAddressZamboangaDelSur = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressZamboangaDelSur))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressZamboangaDelSur = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressZamboangaDelSur FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Zamboanga Del Sur' ";

													$resultProvincialAddressZamboangaDelSur = mysqli_query($connect,$queryProvincialAddressZamboangaDelSur);
													while ($row = mysqli_fetch_array($resultProvincialAddressZamboangaDelSur)) {
														echo "<td>".$row['NumberOfProvincialAddressZamboangaDelSur']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Zambaonga Sibugay</td>
												<?php 
												$resultStudentProvincialAddressZamboangaSibugay = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressZamboangaSibugay))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressZamboangaSibugay = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressZamboangaSibugay FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Zamboanga Sibugay' ";

													$resultProvincialAddressZamboangaSibugay = mysqli_query($connect,$queryProvincialAddressZamboangaSibugay);
													while ($row = mysqli_fetch_array($resultProvincialAddressZamboangaSibugay)) {
														echo "<td>".$row['NumberOfProvincialAddressZamboangaSibugay']."</td>";
													}
												}
												?>
											</tr>
											<tr>

												<th>Region X: Northern Mindanao</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Bukidnon</td>
												<?php 
												$resultStudentProvincialAddressBukidnon = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBukidnon))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBukidnon = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBukidnon FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Bukidnon' ";

													$resultProvincialAddressBukidnon = mysqli_query($connect,$queryProvincialAddressBukidnon);
													while ($row = mysqli_fetch_array($resultProvincialAddressBukidnon)) {
														echo "<td>".$row['NumberOfProvincialAddressBukidnon']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>ARMM</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>

											</tr>
											<tr>
												<td>Maguindanao</td>
												<?php 
												$resultStudentProvincialAddressMaguindanao = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressMaguindanao))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressMaguindanao = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressMaguindanao FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Maguindanao' ";

													$resultProvincialAddressMaguindanao = mysqli_query($connect,$queryProvincialAddressMaguindanao);
													while ($row = mysqli_fetch_array($resultProvincialAddressMaguindanao)) {
														echo "<td>".$row['NumberOfProvincialAddressMaguindanao']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Sulu</td>
												<?php 
												$resultStudentProvincialAddressSulu = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressSulu))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressSulu = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressSulu FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Sulu' ";

													$resultProvincialAddressSulu = mysqli_query($connect,$queryProvincialAddressSulu);
													while ($row = mysqli_fetch_array($resultProvincialAddressSulu)) {
														echo "<td>".$row['NumberOfProvincialAddressSulu']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Tawi Tawi</td>
												<?php 
												$resultStudentProvincialAddressTawitawi = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressTawitawi))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressTawitawi = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressTawitawi FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Tawi Tawi' ";

													$resultProvincialAddressTawitawi = mysqli_query($connect,$queryProvincialAddressTawitawi);
													while ($row = mysqli_fetch_array($resultProvincialAddressTawitawi)) {
														echo "<td>".$row['NumberOfProvincialAddressTawitawi']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>CAR</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Benguet</td>
												<?php 
												$resultStudentProvincialAddressBenguet = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressBenguet))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressBenguet = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressBenguet FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Benguet' ";

													$resultProvincialAddressBenguet = mysqli_query($connect,$queryProvincialAddressBenguet);
													while ($row = mysqli_fetch_array($resultProvincialAddressBenguet)) {
														echo "<td>".$row['NumberOfProvincialAddressBenguet']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Mt. Province</td>
												<?php 
												$resultStudentProvincialAddressMtProvince = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressMtProvince))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressMtProvince = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressMtProvince FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Mt. Province' ";

													$resultProvincialAddressMtProvince = mysqli_query($connect,$queryProvincialAddressMtProvince);
													while ($row = mysqli_fetch_array($resultProvincialAddressMtProvince)) {
														echo "<td>".$row['NumberOfProvincialAddressMtProvince']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Abra</td>
												<?php 
												$resultStudentProvincialAddressAbra = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressAbra))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressAbra = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressAbra FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Abra' ";

													$resultProvincialAddressAbra = mysqli_query($connect,$queryProvincialAddressAbra);
													while ($row = mysqli_fetch_array($resultProvincialAddressAbra)) {
														echo "<td>".$row['NumberOfProvincialAddressAbra']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Apayao</td>
												<?php 
												$resultStudentProvincialAddressApayao = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressApayao))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressApayao = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressApayao FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = ' Apayao' ";

													$resultProvincialAddressApayao = mysqli_query($connect,$queryProvincialAddressApayao);
													while ($row = mysqli_fetch_array($resultProvincialAddressApayao)) {
														echo "<td>".$row['NumberOfProvincialAddressApayao']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Kalinga</td>
												<?php 
												$resultStudentProvincialAddressKalinga = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressKalinga))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressKalinga = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressKalinga FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = ' Kalinga' ";

													$resultProvincialAddressKalinga = mysqli_query($connect,$queryProvincialAddressKalinga);
													while ($row = mysqli_fetch_array($resultProvincialAddressKalinga)) {
														echo "<td>".$row['NumberOfProvincialAddressKalinga']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Ifugao</td>
												<?php 
												$resultStudentProvincialAddressIfugao = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressIfugao))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressIfugao = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressIfugao FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Ifugao' ";

													$resultProvincialAddressIfugao = mysqli_query($connect,$queryProvincialAddressIfugao);
													while ($row = mysqli_fetch_array($resultProvincialAddressIfugao)) {
														echo "<td>".$row['NumberOfProvincialAddressIfugao']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>CARAGA</th>
												<?php 
												$resultStudentSpaceForCityAddress2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForCityAddress2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForCityAddress2 = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForCityAddress2 = mysqli_query($connect,$queryCountingSpacesForCityAddress2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForCityAddress2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Davao</td>
												<?php 
												$resultStudentProvincialAddressDavao = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressDavao))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressDavao = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressDavao FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Davao' ";

													$resultProvincialAddressDavao = mysqli_query($connect,$queryProvincialAddressDavao);
													while ($row = mysqli_fetch_array($resultProvincialAddressDavao)) {
														echo "<td>".$row['NumberOfProvincialAddressDavao']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Surigao Del Sur</td>
												<?php 
												$resultStudentProvincialAddressSurigaoDelSur = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressSurigaoDelSur))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressSurigaoDelSur = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressSurigaoDelSur FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Surigao Del Sur' ";

													$resultProvincialAddressSurigaoDelSur = mysqli_query($connect,$queryProvincialAddressSurigaoDelSur);
													while ($row = mysqli_fetch_array($resultProvincialAddressSurigaoDelSur)) {
														echo "<td>".$row['NumberOfProvincialAddressSurigaoDelSur']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Surigao Del Norte</td>
												<?php 
												$resultStudentProvincialAddressSurigaoDelNorte = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressSurigaoDelNorte))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryProvincialAddressSurigaoDelNorte = "SELECT provinceProvincial,count(*) AS NumberOfProvincialAddressSurigaoDelNorte FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceProvincial = 'Surigao Del Norte' ";

													$resultProvincialAddressSurigaoDelNorte = mysqli_query($connect,$queryProvincialAddressSurigaoDelNorte);
													while ($row = mysqli_fetch_array($resultProvincialAddressSurigaoDelNorte)) {
														echo "<td>".$row['NumberOfProvincialAddressSurigaoDelNorte']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentCityAddressNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentCityAddressNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingCityAddressNA = "SELECT provinceName, count(*) AS NumberOfProvincialAddressNA FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND provinceName != 'Ilocos Norte' AND provinceName != 'Ilocos Sur' AND provinceName != 'La Union' AND provinceName != 'Pangasinan' AND provinceName != 'Quirino' AND provinceName != 'Cagayan' AND provinceName != 'Isabela' AND provinceName != 'Bataan' AND provinceName != 'Bulacan' AND provinceName != 'Nueva Ecija' AND provinceName != 'Pampanga' AND provinceName != 'Tarlac' AND provinceName != 'Zambales' AND provinceName != 'Aurora' AND provinceName != 'Batangas' AND provinceName != 'Cavite' AND provinceName != 'Laguna' AND provinceName != 'Quezon'  AND provinceName != 'Rizal' AND provinceName != 'Mindoro Oriental' AND provinceName != 'Marinduque' AND provinceName != 'Romblon' AND provinceName != 'Palawan' AND provinceName != 'Albay' AND provinceName != 'Camarines Norte' AND provinceName != 'Camarines Sur' AND provinceName != 'Catanduanes' AND provinceName != 'Masbate' AND provinceName != 'Sorsogon' AND provinceName != 'Aklan' AND provinceName != 'Antique' AND provinceName != 'Capiz' AND provinceName != 'Iloilo' AND provinceName != 'Negros Occidental' AND provinceName != 'Negros Oriental' AND provinceName != 'Bohol' AND provinceName != 'Cebu' AND provinceName != 'Siquijor' AND provinceName != 'Eastern Samar' AND provinceName != 'Northern Samar' AND provinceName != 'Samar' AND provinceName != 'Biliran' AND provinceName != 'Leyte' AND provinceName != 'Basilan' AND provinceName != 'Zamboanga Del Norte' AND provinceName != 'Zamboanga Del Sur' AND provinceName != 'Zamboanga Sibugay' AND provinceName != 'Bukidnon' AND provinceName != 'Maguindanao' AND provinceName != 'Sulu' AND provinceName != 'Tawi Tawi' AND provinceName != 'Benguet' AND provinceName != 'Mt. Province' AND provinceName != 'Abra' AND provinceName != 'Apayao' AND provinceName != 'Kalinga' AND provinceName != 'Ifugao' AND provinceName != 'Davao' AND provinceName != 'Surigao Del Sur' AND provinceName != 'Surigao Del Norte' ";

													$resultCountingCityAddressNA = mysqli_query($connect,$queryCountingCityAddressNA);
													while ($row = mysqli_fetch_array($resultCountingCityAddressNA)) {
														$NumberCountingCityAddressNA = $row['NumberOfProvincialAddressNA'];
														echo "<td>".$row['NumberOfProvincialAddressNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentProvincialAddressTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentProvincialAddressTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryProvincialAddressTotal = "SELECT provinceName, count(*) AS NumberOfProvincialAddressTotal FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingProvincialAddressTotal = mysqli_query($connect,$queryProvincialAddressTotal);
													while ($row = mysqli_fetch_array($resultCountingProvincialAddressTotal)) {
														$NumberOfProvincialAddressTotal = $row['NumberOfProvincialAddressTotal'];
														echo "<td>".$row['NumberOfProvincialAddressTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>II. Educational Background</th>
												<?php 
												$resultStudentSpaceForEducationalBackground = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForEducationalBackground))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForEducationalBackground = "SELECT count(*) AS NumberOfAll FROM tbl_educationalbackground INNER JOIN tbl_personalinfo ON tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForEducationalBackground = mysqli_query($connect,$queryCountingSpacesForEducationalBackground);
													while ($row = mysqli_fetch_array($resultCountingSpacesForEducationalBackground)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Elementary</th>
												<?php 
												$resultStudentSpaceForEducationalBackgroundElementary = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForEducationalBackgroundElementary))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForEducationalBackgroundElementary = "SELECT count(*) AS NumberOfAll FROM tbl_educationalbackground INNER JOIN tbl_personalinfo ON tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForEducationalBackgroundElementary = mysqli_query($connect,$queryCountingSpacesForEducationalBackgroundElementary);
													while ($row = mysqli_fetch_array($resultCountingSpacesForEducationalBackgroundElementary)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Public</td>
												<?php 
												$resultStudentEducationalBackgroundElementaryPublic = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundElementaryPublic))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryEducationalBackgroundElementaryPublic = "SELECT elemType,count(elemType) AS TotalPublicElementarySchool FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND elemType = 'Public' ";

													$resultEducationalBackgroundElementaryPublic = mysqli_query($connect,$queryEducationalBackgroundElementaryPublic);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundElementaryPublic)) {
														echo "<td>".$row['TotalPublicElementarySchool']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Private</td>
												<?php 
												$resultStudentEducationalBackgroundElementaryPrivate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundElementaryPrivate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryEducationalBackgroundElementaryPrivate = "SELECT elemType,count(elemType) AS TotalPrivateElementarySchool FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND elemType = 'Private' ";

													$resultEducationalBackgroundElementaryPrivate = mysqli_query($connect,$queryEducationalBackgroundElementaryPrivate);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundElementaryPrivate)) {
														echo "<td>".$row['TotalPrivateElementarySchool']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentEducationalBackgroundElementaryNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundElementaryNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingEducationalBackgroundElementaryNA = "SELECT elemType, count(*) AS NumberOfEducationalBackgroundElementaryNA FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND elemType != 'Public' AND elemType != 'Private' ";

													$resultEducationalBackgroundElementaryNA = mysqli_query($connect,$queryCountingEducationalBackgroundElementaryNA);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundElementaryNA)) {
														$NumberOfEducationalBackgroundElementaryNA = $row['NumberOfEducationalBackgroundElementaryNA'];
														echo "<td>".$row['NumberOfEducationalBackgroundElementaryNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentEducationalBackgroundElementaryTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundElementaryTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryEducationalBackgroundElementaryTotal = "SELECT elemType, count(elemType) AS NumberOfEducationalBackgroundElementaryTotal FROM tbl_educationalbackground inner join tbl_personalinfo ON tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingEducationalBackgroundElementaryTotal = mysqli_query($connect,$queryEducationalBackgroundElementaryTotal);
													while ($row = mysqli_fetch_array($resultCountingEducationalBackgroundElementaryTotal)) {
														$NumberOfEducationalBackgroundElementaryTotal = $row['NumberOfEducationalBackgroundElementaryTotal'];
														echo "<td>".$row['NumberOfEducationalBackgroundElementaryTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>High School</th>
												<?php 
												$resultStudentSpaceForEducationalBackgroundHighSchool = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForEducationalBackgroundHighSchool))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForEducationalBackgroundHighSchool = "SELECT count(*) AS NumberOfAll FROM tbl_educationalbackground INNER JOIN tbl_personalinfo ON tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForEducationalBackgroundHighSchool = mysqli_query($connect,$queryCountingSpacesForEducationalBackgroundHighSchool);
													while ($row = mysqli_fetch_array($resultCountingSpacesForEducationalBackgroundHighSchool)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Public</td>
												<?php 
												$resultStudentEducationalBackgroundHighSchoolPublic = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundHighSchoolPublic))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryEducationalBackgroundHighSchoolPublic = "SELECT hsType,count(hsType) AS TotalPublicHighSchool FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND hsType = 'Public' ";

													$resultEducationalBackgroundHighSchoolPublic = mysqli_query($connect,$queryEducationalBackgroundHighSchoolPublic);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundHighSchoolPublic)) {
														echo "<td>".$row['TotalPublicHighSchool']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Private</td>
												<?php 
												$resultStudentEducationalBackgroundHighSchoolPrivate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundHighSchoolPrivate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryEducationalBackgroundHighSchoolPrivate = "SELECT hsType,count(hsType) AS TotalPrivateHighSchool FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND hsType = 'Private' ";

													$resultEducationalBackgroundHighSchoolPrivate = mysqli_query($connect,$queryEducationalBackgroundHighSchoolPrivate);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundHighSchoolPrivate)) {
														echo "<td>".$row['TotalPrivateHighSchool']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentEducationalBackgroundHighSchoolNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundHighSchoolNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingEducationalBackgroundHighSchoolNA = "SELECT hsType, count(hsType) AS NumberOfEducationalBackgroundHighSchoolNA FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND elemType != 'Public' AND elemType != 'Private' ";

													$resultEducationalBackgroundHighSchoolNA = mysqli_query($connect,$queryCountingEducationalBackgroundHighSchoolNA);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundHighSchoolNA)) {
														$NumberOfEducationalBackgroundHighSchoolNA = $row['NumberOfEducationalBackgroundHighSchoolNA'];
														echo "<td>".$row['NumberOfEducationalBackgroundHighSchoolNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentEducationalBackgroundHighSchoolTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundHighSchoolTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryEducationalBackgroundHighSchoolTotal = "SELECT hsType, count(hsType) AS NumberOfEducationalBackgroundHighSchoolTotal FROM tbl_educationalbackground inner join tbl_personalinfo ON tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingEducationalBackgroundHighSchoolTotal = mysqli_query($connect,$queryEducationalBackgroundHighSchoolTotal);
													while ($row = mysqli_fetch_array($resultCountingEducationalBackgroundHighSchoolTotal)) {
														$NumberOfEducationalBackgroundHighSchoolTotal = $row['NumberOfEducationalBackgroundHighSchoolTotal'];
														echo "<td>".$row['NumberOfEducationalBackgroundHighSchoolTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Continuous</td>
												<?php 
												$resultStudentEducationalBackgroundContinuous = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundContinuous))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryEducationalBackgroundContinuous = "SELECT natureOfSchooling,count(natureOfSchooling) AS TotalContinuousSchooling FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfSchooling = 'Continuous' ";

													$resultEducationalBackgroundContinuous = mysqli_query($connect,$queryEducationalBackgroundContinuous);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundContinuous)) {
														echo "<td>".$row['TotalContinuousSchooling']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Interrupted</td>
												<?php 
												$resultStudentEducationalBackgroundInterrupted = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundInterrupted))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryEducationalBackgroundInterrupted = "SELECT natureOfSchooling,count(natureOfSchooling) AS TotalInterruptedSchooling FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfSchooling = 'Interrupted' ";

													$resultEducationalBackgroundInterrupted = mysqli_query($connect,$queryEducationalBackgroundInterrupted);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundInterrupted)) {
														echo "<td>".$row['TotalInterruptedSchooling']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentEducationalBackgroundNatureOfSchoolingNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundNatureOfSchoolingNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingEducationalBackgroundNatureOfSchoolingNA = "SELECT natureOfSchooling, count(natureOfSchooling) AS NumberOfEducationalBackgroundNatureOfSchoolingNA FROM tbl_educationalbackground inner join tbl_personalinfo on tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfSchooling != 'Continuous' AND natureOfSchooling != 'Interrupted' ";

													$resultEducationalBackgroundNatureOfSchoolingNA = mysqli_query($connect,$queryCountingEducationalBackgroundNatureOfSchoolingNA);
													while ($row = mysqli_fetch_array($resultEducationalBackgroundNatureOfSchoolingNA)) {
														$NumberOfEducationalBackgroundHighSchoolNA = $row['NumberOfEducationalBackgroundNatureOfSchoolingNA'];
														echo "<td>".$row['NumberOfEducationalBackgroundNatureOfSchoolingNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentEducationalBackgroundNatureOfSchoolingTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentEducationalBackgroundNatureOfSchoolingTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryEducationalBackgroundNatureOfSchoolingTotal = "SELECT natureOfSchooling, count(natureOfSchooling) AS NumberOfEducationalBackgroundNatureOfSchoolingTotal FROM tbl_educationalbackground inner join tbl_personalinfo ON tbl_educationalbackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingEducationalBackgroundNatureOfSchoolingTotal = mysqli_query($connect,$queryEducationalBackgroundNatureOfSchoolingTotal);
													while ($row = mysqli_fetch_array($resultCountingEducationalBackgroundNatureOfSchoolingTotal)) {
														$NumberOfEducationalBackgroundNatureOfSchoolingTotal = $row['NumberOfEducationalBackgroundNatureOfSchoolingTotal'];
														echo "<td>".$row['NumberOfEducationalBackgroundNatureOfSchoolingTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>III. Home And Family Background</th>
												<?php 
												$resultStudentSpaceForFamilyBackground = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForFamilyBackground))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForFamilyBackground = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForFamilyBackground = mysqli_query($connect,$queryCountingSpacesForFamilyBackground);
													while ($row = mysqli_fetch_array($resultCountingSpacesForFamilyBackground)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Father</th>
												<?php 
												$resultStudentSpaceForFather = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForFather))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForFather = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForFather = mysqli_query($connect,$queryCountingSpacesForFather);
													while ($row = mysqli_fetch_array($resultCountingSpacesForFather)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Living</td>
												<?php 
												$resultStudentFatherStatusLiving = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherStatusLiving))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherStatusLiving = "SELECT fatherStatus,count(*) AS NumberOfFatherStatusLiving FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherStatus = 'Living'";

													$resultCountingStudentFatherStatusLiving = mysqli_query($connect,$queryCountingStudentFatherStatusLiving);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherStatusLiving)) {
														echo "<td>".$row['NumberOfFatherStatusLiving']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Deceased</td>
												<?php 
												$resultStudentFatherStatusDeceased = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherStatusDeceased))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherStatusDeceased = "SELECT fatherStatus,count(*) AS NumberOfFatherStatusDeceased FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherStatus = 'Deceased'";

													$resultCountingStudentFatherStatusDeceased = mysqli_query($connect,$queryCountingStudentFatherStatusDeceased);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherStatusDeceased)) {
														echo "<td>".$row['NumberOfFatherStatusDeceased']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentFatherStatusNotIndicated = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherStatusNotIndicated))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingStudentFatherStatusNotIndicated = "SELECT fatherStatus,count(*) AS NumberOfFatherStatusNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherStatus != 'Living' AND fatherStatus != 'Deceased'";

													$resultCountingStudentFatherStatusNotIndicated = mysqli_query($connect,$queryCountingStudentFatherStatusNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherStatusNotIndicated)) {
														echo "<td>".$row['NumberOfFatherStatusNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentFatherStatusTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherStatusTotal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherStatusTotal = "SELECT fatherStatus,count(*) AS NumberOfFatherStatusTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingStudentFatherStatusTotal = mysqli_query($connect,$queryCountingStudentFatherStatusTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherStatusTotal)) {
														echo "<td>".$row['NumberOfFatherStatusTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Father's Educational Attainment</th>
												<?php 
												$resultStudentSpaceForFatherEducation = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForFatherEducation))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForFatherEducation = "SELECT fatherStatus,count(*) AS NumberOfFatherStatusTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingSpacesForFatherEducation = mysqli_query($connect,$queryCountingSpacesForFatherEducation);
													while ($row = mysqli_fetch_array($resultCountingSpacesForFatherEducation)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Doctoral Degree</td>
												<?php 
												$resultStudentFatherEducationDoctoralDegree = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationDoctoralDegree))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationDoctoralDegree = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationDoctoralDegree FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Doctoral Degree'";

													$resultCountingStudentFatherEducationDoctoralDegree = mysqli_query($connect,$queryCountingStudentFatherEducationDoctoralDegree);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationDoctoralDegree)) {
														echo "<td>".$row['NumberOfFatherEducationDoctoralDegree']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Masteral Degree</td>
												<?php 
												$resultStudentFatherEducationMasteralDegree = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationMasteralDegree))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationMasteralDegree = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationMasteralDegree FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Masteral Degree'";

													$resultCountingStudentFatherEducationMasteralDegree = mysqli_query($connect,$queryCountingStudentFatherEducationMasteralDegree);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationMasteralDegree)) {
														echo "<td>".$row['NumberOfFatherEducationMasteralDegree']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Masteral Unit</td>
												<?php 
												$resultStudentFatherEducationMasteralUnit = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationMasteralUnit))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationMasteralUnit = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationMasteralUnit FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Masteral Unit'";

													$resultCountingStudentFatherEducationMasteralUnit = mysqli_query($connect,$queryCountingStudentFatherEducationMasteralUnit);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationMasteralUnit)) {
														echo "<td>".$row['NumberOfFatherEducationMasteralUnit']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Vocational Graduate</td>
												<?php 
												$resultStudentFatherEducationVocationalGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationVocationalGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationVocationalGraduate = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationVocationalGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Vocational Graduate'";

													$resultCountingStudentFatherEducationVocationalGraduate = mysqli_query($connect,$queryCountingStudentFatherEducationVocationalGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationVocationalGraduate)) {
														echo "<td>".$row['NumberOfFatherEducationVocationalGraduate']."</td>";
													}
												}
												?>	
											</tr>
											<tr>
												<td>College Graduate</td>
												<?php 
												$resultStudentFatherEducationCollegeGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationCollegeGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationCollegeGraduate = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationCollegeGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'College Graduate'";

													$resultCountingStudentFatherEducationCollegeGraduate = mysqli_query($connect,$queryCountingStudentFatherEducationCollegeGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationCollegeGraduate)) {
														echo "<td>".$row['NumberOfFatherEducationCollegeGraduate']."</td>";
													}
												}
												?>	
											</tr>
											<tr>
												<td>College Undergraduate</td>
												<?php 
												$resultStudentFatherEducationCollegeUndergraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationCollegeUndergraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationCollegeUndergraduate = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationCollegeUndergraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'College Undergraduate'";

													$resultCountingStudentFatherEducationCollegeUndergraduate = mysqli_query($connect,$queryCountingStudentFatherEducationCollegeUndergraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationCollegeUndergraduate)) {
														echo "<td>".$row['NumberOfFatherEducationCollegeUndergraduate']."</td>";
													}
												}
												?>	
											</tr>
											<tr>
												<td>Highschool Graduate</td>
												<?php 
												$resultStudentFatherEducationHighschoolGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationHighschoolGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationHighschoolGraduate = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationHighschoolGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Highschool Graduate'";

													$resultCountingStudentFatherEducationHighschoolGraduate = mysqli_query($connect,$queryCountingStudentFatherEducationHighschoolGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationHighschoolGraduate)) {
														echo "<td>".$row['NumberOfFatherEducationHighschoolGraduate']."</td>";
													}
												}
												?>	
											</tr>
											<tr>
												<td>Highschool Undergraduate</td>
												<?php 
												$resultStudentFatherEducationHighschoolUndergraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationHighschoolUndergraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationHighschoolUndergraduate = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationHighschoolUndergraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Highschool Undergraduate'";

													$resultCountingStudentFatherEducationHighschoolUndergraduate = mysqli_query($connect,$queryCountingStudentFatherEducationHighschoolUndergraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationHighschoolUndergraduate)) {
														echo "<td>".$row['NumberOfFatherEducationHighschoolUndergraduate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Elementary Graduate</td>
												<?php 
												$resultStudentFatherEducationElementaryGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationElementaryGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationElementaryGraduate = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationElementaryGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Elementary Graduate'";

													$resultCountingStudentFatherEducationElementaryGraduate = mysqli_query($connect,$queryCountingStudentFatherEducationElementaryGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationElementaryGraduate)) {
														echo "<td>".$row['NumberOfFatherEducationElementaryGraduate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Elementary Undergraduate</td>
												<?php 
												$resultStudentFatherEducationElementaryUndergraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationElementaryUndergraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationElementaryUndergraduate = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationElementaryUndergraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation = 'Elementary Undergraduate'";

													$resultCountingStudentFatherEducationElementaryUndergraduate = mysqli_query($connect,$queryCountingStudentFatherEducationElementaryUndergraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationElementaryUndergraduate)) {
														echo "<td>".$row['NumberOfFatherEducationElementaryUndergraduate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentFatherEducationNotIndicated = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationNotIndicated))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationNotIndicated = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherEducation != 'Elementary Undergraduate' AND fatherEducation != 'Elementary Graduate' AND fatherEducation != 'Highschool Undergraduate' AND fatherEducation != 'Highschool Graduate' AND fatherEducation != 'College Undergraduate' AND fatherEducation != 'College Graduate' AND fatherEducation != 'Vocational Graduate' AND fatherEducation != 'Masteral Unit' AND fatherEducation != 'Masteral Degree' AND fatherEducation != 'Masteral Graduate' AND fatherEducation != 'Doctoral Unit' AND fatherEducation != 'Doctoral Degree' ";

													$resultCountingStudentFatherEducationNotIndicated = mysqli_query($connect,$queryCountingStudentFatherEducationNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationNotIndicated)) {
														echo "<td>".$row['NumberOfFatherEducationNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentFatherEducationTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherEducationTotal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherEducationTotal = "SELECT fatherEducation,count(*) AS NumberOfFatherEducationTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingStudentFatherEducationTotal = mysqli_query($connect,$queryCountingStudentFatherEducationTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherEducationTotal)) {
														echo "<td>".$row['NumberOfFatherEducationTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Occupation</th>
												<?php 
												$resultStudentFatherOccupation  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupation))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupation = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupation FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentFatherOccupation = mysqli_query($connect,$queryCountingStudentFatherOccupation);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupation)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Local</td>
												<?php 
												$resultStudentFatherOccupationLocal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationLocal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationLocal = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationLocal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherOccupationType = 'Government' AND fatherOccupationType = 'Private' ";
													$resultCountingStudentFatherOccupationLocal = mysqli_query($connect,$queryCountingStudentFatherOccupationLocal);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationLocal)) {
														echo "<td>".$row['NumberOfFatherOccupationLocal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Government</td>
												<?php 
												$resultStudentFatherOccupationGovernment  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationGovernment))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationGovernment = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationGovernment FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherOccupationType = 'Government' ";
													$resultCountingStudentFatherOccupationGovernment = mysqli_query($connect,$queryCountingStudentFatherOccupationGovernment);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationGovernment)) {
														echo "<td>".$row['NumberOfFatherOccupationGovernment']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Private</td>
												<?php 
												$resultStudentFatherOccupationPrivate  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationPrivate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationPrivate = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationPrivate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherOccupationType = 'Private' ";
													$resultCountingStudentFatherOccupationPrivate = mysqli_query($connect,$queryCountingStudentFatherOccupationPrivate);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationPrivate)) {
														echo "<td>".$row['NumberOfFatherOccupationPrivate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Abroad</td>
												<?php 
												$resultStudentFatherOccupationAbroad  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationAbroad))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationAbroad = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationAbroad FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherOccupationType = 'Abroad' ";
													$resultCountingStudentFatherOccupationAbroad = mysqli_query($connect,$queryCountingStudentFatherOccupationAbroad);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationAbroad)) {
														echo "<td>".$row['NumberOfFatherOccupationAbroad']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Unemployed</td>
												<?php 
												$resultStudentFatherOccupationUnemployed  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationUnemployed))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationUnemployed = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationUnemployed FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherOccupationType = 'Unemployed' ";
													$resultCountingStudentFatherOccupationUnemployed = mysqli_query($connect,$queryCountingStudentFatherOccupationUnemployed);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationUnemployed)) {
														echo "<td>".$row['NumberOfFatherOccupationUnemployed']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Self-employed</td>
												<?php 
												$resultStudentFatherOccupationUnemployed  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationUnemployed))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationUnemployed = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationUnemployed FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherOccupationType = 'Unemployed' ";
													$resultCountingStudentFatherOccupationUnemployed = mysqli_query($connect,$queryCountingStudentFatherOccupationUnemployed);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationUnemployed)) {
														echo "<td>".$row['NumberOfFatherOccupationUnemployed']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentFatherOccupationNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationNotIndicated))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationNotIndicated = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND fatherOccupationType != 'Unemployed'AND fatherOccupationType != 'Self-employed' AND fatherOccupationType != 'Abroad' AND fatherOccupationType != 'Government' ";
													$resultCountingStudentFatherOccupationNotIndicated = mysqli_query($connect,$queryCountingStudentFatherOccupationNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationNotIndicated)) {
														echo "<td>".$row['NumberOfFatherOccupationNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentFatherOccupationTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentFatherOccupationTotal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentFatherOccupationTotal = "SELECT fatherOccupationType,count(*) AS NumberOfFatherOccupationTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentFatherOccupationTotal = mysqli_query($connect,$queryCountingStudentFatherOccupationTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentFatherOccupationTotal)) {
														echo "<td>".$row['NumberOfFatherOccupationTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Mother</th>
												<?php 
												$resultStudentSpaceFormother = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceFormother))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesFormother = "SELECT count(*) AS NumberOfAll FROM tbl_personalinfo WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesFormother = mysqli_query($connect,$queryCountingSpacesFormother);
													while ($row = mysqli_fetch_array($resultCountingSpacesFormother)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Living</td>
												<?php 
												$resultStudentmotherStatusLiving = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherStatusLiving))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherStatusLiving = "SELECT motherStatus,count(*) AS NumberOfmotherStatusLiving FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherStatus = 'Living'";

													$resultCountingStudentmotherStatusLiving = mysqli_query($connect,$queryCountingStudentmotherStatusLiving);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherStatusLiving)) {
														echo "<td>".$row['NumberOfmotherStatusLiving']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Deceased</td>
												<?php 
												$resultStudentmotherStatusDeceased = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherStatusDeceased))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherStatusDeceased = "SELECT motherStatus,count(*) AS NumberOfmotherStatusDeceased FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherStatus = 'Deceased'";

													$resultCountingStudentmotherStatusDeceased = mysqli_query($connect,$queryCountingStudentmotherStatusDeceased);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherStatusDeceased)) {
														echo "<td>".$row['NumberOfmotherStatusDeceased']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentmotherStatusNotIndicated = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherStatusNotIndicated))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingStudentmotherStatusNotIndicated = "SELECT motherStatus,count(*) AS NumberOfmotherStatusNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherStatus != 'Living' AND motherStatus != 'Deceased'";

													$resultCountingStudentmotherStatusNotIndicated = mysqli_query($connect,$queryCountingStudentmotherStatusNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherStatusNotIndicated)) {
														echo "<td>".$row['NumberOfmotherStatusNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentmotherStatusTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherStatusTotal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherStatusTotal = "SELECT motherStatus,count(*) AS NumberOfmotherStatusTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingStudentmotherStatusTotal = mysqli_query($connect,$queryCountingStudentmotherStatusTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherStatusTotal)) {
														echo "<td>".$row['NumberOfmotherStatusTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Mother's Educational Attainment</th>
												<?php 
												$resultStudentSpaceFormotherEducation = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceFormotherEducation))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesFormotherEducation = "SELECT motherStatus,count(*) AS NumberOfmotherStatusTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingSpacesFormotherEducation = mysqli_query($connect,$queryCountingSpacesFormotherEducation);
													while ($row = mysqli_fetch_array($resultCountingSpacesFormotherEducation)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Doctoral Degree</td>
												<?php 
												$resultStudentmotherEducationDoctoralDegree = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationDoctoralDegree))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationDoctoralDegree = "SELECT motherEducation,count(*) AS NumberOfmotherEducationDoctoralDegree FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Doctoral Degree'";

													$resultCountingStudentmotherEducationDoctoralDegree = mysqli_query($connect,$queryCountingStudentmotherEducationDoctoralDegree);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationDoctoralDegree)) {
														echo "<td>".$row['NumberOfmotherEducationDoctoralDegree']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Masteral Degree</td>
												<?php 
												$resultStudentmotherEducationMasteralDegree = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationMasteralDegree))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationMasteralDegree = "SELECT motherEducation,count(*) AS NumberOfmotherEducationMasteralDegree FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Masteral Degree'";

													$resultCountingStudentmotherEducationMasteralDegree = mysqli_query($connect,$queryCountingStudentmotherEducationMasteralDegree);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationMasteralDegree)) {
														echo "<td>".$row['NumberOfmotherEducationMasteralDegree']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Masteral Unit</td>
												<?php 
												$resultStudentmotherEducationMasteralUnit = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationMasteralUnit))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationMasteralUnit = "SELECT motherEducation,count(*) AS NumberOfmotherEducationMasteralUnit FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Masteral Unit'";

													$resultCountingStudentmotherEducationMasteralUnit = mysqli_query($connect,$queryCountingStudentmotherEducationMasteralUnit);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationMasteralUnit)) {
														echo "<td>".$row['NumberOfmotherEducationMasteralUnit']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Vocational Graduate</td>
												<?php 
												$resultStudentmotherEducationVocationalGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationVocationalGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationVocationalGraduate = "SELECT motherEducation,count(*) AS NumberOfmotherEducationVocationalGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Vocational Graduate'";

													$resultCountingStudentmotherEducationVocationalGraduate = mysqli_query($connect,$queryCountingStudentmotherEducationVocationalGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationVocationalGraduate)) {
														echo "<td>".$row['NumberOfmotherEducationVocationalGraduate']."</td>";
													}
												}
												?>											
											</tr>
											<tr>
												<td>College Graduate</td>
												<?php 
												$resultStudentmotherEducationCollegeGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationCollegeGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationCollegeGraduate = "SELECT motherEducation,count(*) AS NumberOfmotherEducationCollegeGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'College Graduate'";

													$resultCountingStudentmotherEducationCollegeGraduate = mysqli_query($connect,$queryCountingStudentmotherEducationCollegeGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationCollegeGraduate)) {
														echo "<td>".$row['NumberOfmotherEducationCollegeGraduate']."</td>";
													}
												}
												?>	
											</tr>
											<tr>
												<td>College Undergraduate</td>
												<?php 
												$resultStudentmotherEducationCollegeUndergraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationCollegeUndergraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationCollegeUndergraduate = "SELECT motherEducation,count(*) AS NumberOfmotherEducationCollegeUndergraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'College Undergraduate'";

													$resultCountingStudentmotherEducationCollegeUndergraduate = mysqli_query($connect,$queryCountingStudentmotherEducationCollegeUndergraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationCollegeUndergraduate)) {
														echo "<td>".$row['NumberOfmotherEducationCollegeUndergraduate']."</td>";
													}
												}
												?>	
											</tr>
											<tr>
												<td>Highschool Graduate</td>
												<?php 
												$resultStudentmotherEducationHighschoolGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationHighschoolGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationHighschoolGraduate = "SELECT motherEducation,count(*) AS NumberOfmotherEducationHighschoolGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Highschool Graduate'";

													$resultCountingStudentmotherEducationHighschoolGraduate = mysqli_query($connect,$queryCountingStudentmotherEducationHighschoolGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationHighschoolGraduate)) {
														echo "<td>".$row['NumberOfmotherEducationHighschoolGraduate']."</td>";
													}
												}
												?>	
											</tr>
											<tr>
												<td>Highschool Undergraduate</td>
												<?php 
												$resultStudentmotherEducationHighschoolUndergraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationHighschoolUndergraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationHighschoolUndergraduate = "SELECT motherEducation,count(*) AS NumberOfmotherEducationHighschoolUndergraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Highschool Undergraduate'";

													$resultCountingStudentmotherEducationHighschoolUndergraduate = mysqli_query($connect,$queryCountingStudentmotherEducationHighschoolUndergraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationHighschoolUndergraduate)) {
														echo "<td>".$row['NumberOfmotherEducationHighschoolUndergraduate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Elementary Graduate</td>
												<?php 
												$resultStudentmotherEducationElementaryGraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationElementaryGraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationElementaryGraduate = "SELECT motherEducation,count(*) AS NumberOfmotherEducationElementaryGraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Elementary Graduate'";

													$resultCountingStudentmotherEducationElementaryGraduate = mysqli_query($connect,$queryCountingStudentmotherEducationElementaryGraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationElementaryGraduate)) {
														echo "<td>".$row['NumberOfmotherEducationElementaryGraduate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Elementary Undergraduate</td>
												<?php 
												$resultStudentmotherEducationElementaryUndergraduate = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationElementaryUndergraduate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationElementaryUndergraduate = "SELECT motherEducation,count(*) AS NumberOfmotherEducationElementaryUndergraduate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation = 'Elementary Undergraduate'";

													$resultCountingStudentmotherEducationElementaryUndergraduate = mysqli_query($connect,$queryCountingStudentmotherEducationElementaryUndergraduate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationElementaryUndergraduate)) {
														echo "<td>".$row['NumberOfmotherEducationElementaryUndergraduate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentmotherEducationNotIndicated = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationNotIndicated))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationNotIndicated = "SELECT motherEducation,count(*) AS NumberOfmotherEducationNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherEducation != 'Elementary Undergraduate' AND motherEducation != 'Elementary Graduate' AND motherEducation != 'Highschool Undergraduate' AND motherEducation != 'Highschool Graduate' AND motherEducation != 'College Undergraduate' AND motherEducation != 'College Graduate' AND motherEducation != 'Vocational Graduate' AND motherEducation != 'Masteral Unit' AND motherEducation != 'Masteral Degree' AND motherEducation != 'Masteral Graduate' AND motherEducation != 'Doctoral Unit' AND motherEducation != 'Doctoral Degree' ";

													$resultCountingStudentmotherEducationNotIndicated = mysqli_query($connect,$queryCountingStudentmotherEducationNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationNotIndicated)) {
														echo "<td>".$row['NumberOfmotherEducationNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentmotherEducationTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherEducationTotal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherEducationTotal = "SELECT motherEducation,count(*) AS NumberOfmotherEducationTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";

													$resultCountingStudentmotherEducationTotal = mysqli_query($connect,$queryCountingStudentmotherEducationTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherEducationTotal)) {
														echo "<td>".$row['NumberOfmotherEducationTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Occupation</th>
												<?php 
												$resultStudentmotherOccupation  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupation))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupation = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupation FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentmotherOccupation = mysqli_query($connect,$queryCountingStudentmotherOccupation);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupation)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Local</td>
												<?php 
												$resultStudentmotherOccupationLocal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationLocal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationLocal = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationLocal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherOccupationType = 'Government' AND motherOccupationType = 'Private' ";
													$resultCountingStudentmotherOccupationLocal = mysqli_query($connect,$queryCountingStudentmotherOccupationLocal);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationLocal)) {
														echo "<td>".$row['NumberOfmotherOccupationLocal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Government</td>
												<?php 
												$resultStudentmotherOccupationGovernment  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationGovernment))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationGovernment = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationGovernment FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherOccupationType = 'Government' ";
													$resultCountingStudentmotherOccupationGovernment = mysqli_query($connect,$queryCountingStudentmotherOccupationGovernment);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationGovernment)) {
														echo "<td>".$row['NumberOfmotherOccupationGovernment']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Private</td>
												<?php 
												$resultStudentmotherOccupationPrivate  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationPrivate))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationPrivate = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationPrivate FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherOccupationType = 'Private' ";
													$resultCountingStudentmotherOccupationPrivate = mysqli_query($connect,$queryCountingStudentmotherOccupationPrivate);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationPrivate)) {
														echo "<td>".$row['NumberOfmotherOccupationPrivate']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Abroad</td>
												<?php 
												$resultStudentmotherOccupationAbroad  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationAbroad))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationAbroad = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationAbroad FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherOccupationType = 'Abroad' ";
													$resultCountingStudentmotherOccupationAbroad = mysqli_query($connect,$queryCountingStudentmotherOccupationAbroad);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationAbroad)) {
														echo "<td>".$row['NumberOfmotherOccupationAbroad']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Unemployed</td>
												<?php 
												$resultStudentmotherOccupationUnemployed  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationUnemployed))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationUnemployed = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationUnemployed FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherOccupationType = 'Unemployed' ";
													$resultCountingStudentmotherOccupationUnemployed = mysqli_query($connect,$queryCountingStudentmotherOccupationUnemployed);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationUnemployed)) {
														echo "<td>".$row['NumberOfmotherOccupationUnemployed']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Self-employed</td>
												<?php 
												$resultStudentmotherOccupationUnemployed  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationUnemployed))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationUnemployed = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationUnemployed FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherOccupationType = 'Unemployed' ";
													$resultCountingStudentmotherOccupationUnemployed = mysqli_query($connect,$queryCountingStudentmotherOccupationUnemployed);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationUnemployed)) {
														echo "<td>".$row['NumberOfmotherOccupationUnemployed']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentmotherOccupationNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationNotIndicated))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationNotIndicated = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND motherOccupationType != 'Unemployed'AND motherOccupationType != 'Self-employed' AND motherOccupationType != 'Abroad' AND motherOccupationType != 'Government' ";
													$resultCountingStudentmotherOccupationNotIndicated = mysqli_query($connect,$queryCountingStudentmotherOccupationNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationNotIndicated)) {
														echo "<td>".$row['NumberOfmotherOccupationNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentmotherOccupationTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentmotherOccupationTotal))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentmotherOccupationTotal = "SELECT motherOccupationType,count(*) AS NumberOfmotherOccupationTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentmotherOccupationTotal = mysqli_query($connect,$queryCountingStudentmotherOccupationTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentmotherOccupationTotal)) {
														echo "<td>".$row['NumberOfmotherOccupationTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Total Monthly Income</th>
												<?php 
												$resultStudentTotalMonthlyIncome  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalMonthlyIncome))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalMonthlyIncome = "SELECT totalMonthlyIncome,count(*) AS NumberOfTotalMonthlyIncome FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentTotalMonthlyIncome = mysqli_query($connect,$queryCountingStudentTotalMonthlyIncome);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalMonthlyIncome)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Below Average</td>
												<?php 
												$resultStudentTotalMonthlyIncomeBelowAverage  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalMonthlyIncomeBelowAverage))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalMonthlyIncomeBelowAverage = "SELECT totalMonthlyIncome,count(*) AS NumberOfTotalMonthlyIncomeBelowAverage FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND totalMonthlyIncome = 'Below Average' ";
													$resultCountingStudentTotalMonthlyIncomeBelowAverage = mysqli_query($connect,$queryCountingStudentTotalMonthlyIncomeBelowAverage);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalMonthlyIncomeBelowAverage)) {
														echo "<td>".$row['NumberOfTotalMonthlyIncomeBelowAverage']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Average</td>
												<?php 
												$resultStudentTotalMonthlyIncomeAverage  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalMonthlyIncomeAverage))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalMonthlyIncomeAverage = "SELECT totalMonthlyIncome,count(*) AS NumberOfTotalMonthlyIncomeAverage FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND totalMonthlyIncome = 'Average' ";
													$resultCountingStudentTotalMonthlyIncomeAverage = mysqli_query($connect,$queryCountingStudentTotalMonthlyIncomeAverage);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalMonthlyIncomeAverage)) {
														echo "<td>".$row['NumberOfTotalMonthlyIncomeAverage']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Above Average</td>
												<?php 
												$resultStudentTotalMonthlyIncomeAboveAverage  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalMonthlyIncomeAboveAverage))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalMonthlyIncomeAboveAverage = "SELECT totalMonthlyIncome,count(*) AS NumberOfTotalMonthlyIncomeAboveAverage FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND totalMonthlyIncome = 'Above Average' ";
													$resultCountingStudentTotalMonthlyIncomeAboveAverage = mysqli_query($connect,$queryCountingStudentTotalMonthlyIncomeAboveAverage);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalMonthlyIncomeAboveAverage)) {
														echo "<td>".$row['NumberOfTotalMonthlyIncomeAboveAverage']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Number of Children in the family</th>
												<?php 
												$resultStudentTotalNumberOfChildren  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren))
												{
													$currentCourse = $row['courseCode'];

													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentTotalNumberOfChildren = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>1</td>
												<?php 
												$resultStudentTotalNumberOfChildren1  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren1))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren1 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren1 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 1 ";
													$resultCountingStudentTotalNumberOfChildren1 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren1);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren1)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren1']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>2</td>
												<?php 
												$resultStudentTotalNumberOfChildren2  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren2))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren2 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren2 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 2 ";
													$resultCountingStudentTotalNumberOfChildren2 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren2);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren2)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren2']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>3</td>
												<?php 
												$resultStudentTotalNumberOfChildren3  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren3))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren3 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren3 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 3 ";
													$resultCountingStudentTotalNumberOfChildren3 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren3);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren3)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren3']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>4</td>
												<?php 
												$resultStudentTotalNumberOfChildren4  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren4))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren4 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren4 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 4 ";
													$resultCountingStudentTotalNumberOfChildren4 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren4);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren4)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren4']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>5</td>
												<?php 
												$resultStudentTotalNumberOfChildren5  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren5))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren5 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren5 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 5 ";
													$resultCountingStudentTotalNumberOfChildren5 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren5);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren5)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren5']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>6</td>
												<?php 
												$resultStudentTotalNumberOfChildren6  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren6))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren6 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren6 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 6 ";
													$resultCountingStudentTotalNumberOfChildren6 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren6);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren6)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren6']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>7</td>
												<?php 
												$resultStudentTotalNumberOfChildren7  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren7))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren7 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren7 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 7 ";
													$resultCountingStudentTotalNumberOfChildren7 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren7);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren7)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren7']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>8</td>
												<?php 
												$resultStudentTotalNumberOfChildren8  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren8))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren8 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren8 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 8 ";
													$resultCountingStudentTotalNumberOfChildren8 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren8);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren8)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren8']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>9</td>
												<?php 
												$resultStudentTotalNumberOfChildren9  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren9))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren9 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren9 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 9 ";
													$resultCountingStudentTotalNumberOfChildren9 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren9);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren9)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren9']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>10</td>
												<?php 
												$resultStudentTotalNumberOfChildren10  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildren10))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildren10 = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildren10 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren = 10 ";
													$resultCountingStudentTotalNumberOfChildren10 = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildren10);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildren10)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildren10']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentTotalNumberOfChildrenNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildrenNotIndicated))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildrenNotIndicated = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildrenNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND noOfChildren != 10 AND noOfChildren != 1 AND noOfChildren != 2 AND noOfChildren != 3 AND noOfChildren != 4 AND noOfChildren != 5 AND noOfChildren != 6 AND noOfChildren != 7 AND noOfChildren != 8 AND noOfChildren != 9 AND noOfChildren != 10  ";
													$resultCountingStudentTotalNumberOfChildrenNotIndicated = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildrenNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildrenNotIndicated)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildrenNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentTotalNumberOfChildrenTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentTotalNumberOfChildrenTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentTotalNumberOfChildrenTotal = "SELECT noOfChildren,count(*) AS NumberOfTotalNumberOfChildrenTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentTotalNumberOfChildrenTotal = mysqli_query($connect,$queryCountingStudentTotalNumberOfChildrenTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentTotalNumberOfChildrenTotal)) {
														echo "<td>".$row['NumberOfTotalNumberOfChildrenTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>No. of Bro/sis gainfully emplpoyed</th>
												<?php 
												$resultStudentBroSisEmployed  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployed))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployed = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployed FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentBroSisEmployed = mysqli_query($connect,$queryCountingStudentBroSisEmployed);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployed)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>0</td>
												<?php 
												$resultStudentBroSisEmployed0  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployed0))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployed0 = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployed0 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND broSisEmployed = 0 ";
													$resultCountingStudentBroSisEmployed0 = mysqli_query($connect,$queryCountingStudentBroSisEmployed0);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployed0)) {
														echo "<td>".$row['NumberOfBroSisEmployed0']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>1</td>
												<?php 
												$resultStudentBroSisEmployed1  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployed1))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployed1 = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployed1 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND broSisEmployed = 1 ";
													$resultCountingStudentBroSisEmployed1 = mysqli_query($connect,$queryCountingStudentBroSisEmployed1);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployed1)) {
														echo "<td>".$row['NumberOfBroSisEmployed1']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>2</td>
												<?php 
												$resultStudentBroSisEmployed2  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployed2))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployed2 = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployed2 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND broSisEmployed = 2 ";
													$resultCountingStudentBroSisEmployed2 = mysqli_query($connect,$queryCountingStudentBroSisEmployed2);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployed2)) {
														echo "<td>".$row['NumberOfBroSisEmployed2']."</td>";
													}
												}
												?>

											</tr>
											<tr>
												<td>3</td>
												<?php 
												$resultStudentBroSisEmployed3  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployed3))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployed3 = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployed3 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND broSisEmployed = 3 ";
													$resultCountingStudentBroSisEmployed3 = mysqli_query($connect,$queryCountingStudentBroSisEmployed3);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployed3)) {
														echo "<td>".$row['NumberOfBroSisEmployed3']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>4 and above</td>
												<?php 
												$resultStudentBroSisEmployed4  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployed4))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployed4 = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployed4 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND broSisEmployed > 3 ";
													$resultCountingStudentBroSisEmployed4 = mysqli_query($connect,$queryCountingStudentBroSisEmployed4);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployed4)) {
														echo "<td>".$row['NumberOfBroSisEmployed4']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php
												$resultStudentBroSisEmployedNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployedNotIndicated))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployedNotIndicated = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployedNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND broSisEmployed != 3 AND broSisEmployed != 3 AND broSisEmployed != 2 AND broSisEmployed != 1 AND broSisEmployed != 0";
													$resultCountingStudentBroSisEmployedNotIndicated = mysqli_query($connect,$queryCountingStudentBroSisEmployedNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployedNotIndicated)) {
														echo "<td>".$row['NumberOfBroSisEmployedNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultStudentBroSisEmployedTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentBroSisEmployedTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentBroSisEmployedTotal = "SELECT noOfChildren,count(*) AS NumberOfBroSisEmployedTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentBroSisEmployedTotal = mysqli_query($connect,$queryCountingStudentBroSisEmployedTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentBroSisEmployedTotal)) {
														echo "<td>".$row['NumberOfBroSisEmployedTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Support For</th>
												<?php
												$resultStudentSupportedByYourSibling  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSupportedByYourSibling))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentSupportedByYourSibling = "SELECT supportedByYourSibling,count(*) AS NumberOfSupportedByYourSibling FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentSupportedByYourSibling = mysqli_query($connect,$queryCountingStudentSupportedByYourSibling);
													while ($row = mysqli_fetch_array($resultCountingStudentSupportedByYourSibling)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Family</td>
												<?php
												$resultStudentSupportedByYourSiblingFamily  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSupportedByYourSiblingFamily))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentSupportedByYourSiblingFamily = "SELECT supportedByYourSibling,count(*) AS NumberOfSupportedByYourSiblingFamily FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND supportedByYourSibling = 'Your Family' ";
													$resultCountingStudentSupportedByYourSiblingFamily = mysqli_query($connect,$queryCountingStudentSupportedByYourSiblingFamily);
													while ($row = mysqli_fetch_array($resultCountingStudentSupportedByYourSiblingFamily)) {
														echo "<td>".$row['NumberOfSupportedByYourSiblingFamily']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Studies</td>
												<?php
												$resultStudentSupportedByYourSiblingStudies  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSupportedByYourSiblingStudies))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentSupportedByYourSiblingStudies = "SELECT supportedByYourSibling,count(*) AS NumberOfSupportedByYourSiblingStudies FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND supportedByYourSibling = 'Your Studies' ";
													$resultCountingStudentSupportedByYourSiblingStudies = mysqli_query($connect,$queryCountingStudentSupportedByYourSiblingStudies);
													while ($row = mysqli_fetch_array($resultCountingStudentSupportedByYourSiblingStudies)) {
														echo "<td>".$row['NumberOfSupportedByYourSiblingStudies']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Own Family</td>
												<?php
												$resultStudentSupportedByYourSiblingOwnFamily  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSupportedByYourSiblingOwnFamily))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentSupportedByYourSiblingOwnFamily = "SELECT supportedByYourSibling,count(*) AS NumberOfSupportedByYourSiblingOwnFamily FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND supportedByYourSibling = 'His/Her Family' ";
													$resultCountingStudentSupportedByYourSiblingOwnFamily = mysqli_query($connect,$queryCountingStudentSupportedByYourSiblingOwnFamily);
													while ($row = mysqli_fetch_array($resultCountingStudentSupportedByYourSiblingOwnFamily)) {
														echo "<td>".$row['NumberOfSupportedByYourSiblingOwnFamily']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php
												$resultStudentSupportedByYourSiblingNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSupportedByYourSiblingNotIndicated))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentSupportedByYourSiblingNotIndicated = "SELECT supportedByYourSibling,count(*) AS NumberOfSupportedByYourSiblingNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND supportedByYourSibling != 'His/Her Family' AND supportedByYourSibling != 'Your Family' AND supportedByYourSibling != 'Your Studies' ";
													$resultCountingStudentSupportedByYourSiblingNotIndicated = mysqli_query($connect,$queryCountingStudentSupportedByYourSiblingNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentSupportedByYourSiblingNotIndicated)) {
														echo "<td>".$row['NumberOfSupportedByYourSiblingNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultStudentSupportedByYourSiblingTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSupportedByYourSiblingTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentSupportedByYourSiblingTotal = "SELECT supportedByYourSibling,count(*) AS NumberOfSupportedByYourSiblingTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentSupportedByYourSiblingTotal = mysqli_query($connect,$queryCountingStudentSupportedByYourSiblingTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentSupportedByYourSiblingTotal)) {
														echo "<td>".$row['NumberOfSupportedByYourSiblingTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Who Support Your Schooling?</th>
												<?php
												$resultschoolFinancer  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancer))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancer = "SELECT schoolFinancer,count(*) AS NumberOfFinancer FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingschoolFinancer = mysqli_query($connect,$queryCountingschoolFinancer);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancer)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Parents</td>
												<?php
												$resultschoolFinancerParents  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancerParents))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancerParents = "SELECT schoolFinancer,count(*) AS NumberOfFinancerParents FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND schoolFinancer = 'Parents' ";
													$resultCountingschoolFinancerParents = mysqli_query($connect,$queryCountingschoolFinancerParents);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancerParents)) {
														echo "<td>".$row['NumberOfFinancerParents']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Sibling</td>
												<?php
												$resultschoolFinancerSibling  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancerSibling))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancerSibling = "SELECT schoolFinancer,count(*) AS NumberOfFinancerSibling FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND schoolFinancer = 'Brother/Sister' ";
													$resultCountingschoolFinancerSibling = mysqli_query($connect,$queryCountingschoolFinancerSibling);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancerSibling)) {
														echo "<td>".$row['NumberOfFinancerSibling']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Spouse</td>
												<?php
												$resultschoolFinancerSpouse  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancerSpouse))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancerSpouse = "SELECT schoolFinancer,count(*) AS NumberOfFinancerSpouse FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND schoolFinancer = 'Spouse' ";
													$resultCountingschoolFinancerSpouse = mysqli_query($connect,$queryCountingschoolFinancerSpouse);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancerSpouse)) {
														echo "<td>".$row['NumberOfFinancerSpouse']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Scholarship</td>
												<?php
												$resultschoolFinancerScholarship  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancerScholarship))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancerScholarship = "SELECT schoolFinancer,count(*) AS NumberOfFinancerScholarship FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND schoolFinancer = 'Scholarship' ";
													$resultCountingschoolFinancerScholarship = mysqli_query($connect,$queryCountingschoolFinancerScholarship);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancerScholarship)) {
														echo "<td>".$row['NumberOfFinancerScholarship']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Self-supporting</td>
												<?php
												$resultschoolFinancerSelfSupporting  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancerSelfSupporting))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancerSelfSupporting = "SELECT schoolFinancer,count(*) AS NumberOfFinancerSelfSupporting FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND schoolFinancer = 'Self-supporting/Working student' ";
													$resultCountingschoolFinancerSelfSupporting = mysqli_query($connect,$queryCountingschoolFinancerSelfSupporting);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancerSelfSupporting)) {
														echo "<td>".$row['NumberOfFinancerSelfSupporting']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not indicated</td>
												<?php
												$resultschoolFinancerNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancerNotIndicated))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancerNotIndicated = "SELECT schoolFinancer,count(*) AS NumberOfFinancerNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND schoolFinancer != 'Self-supporting/Working student' AND schoolFinancer != 'Self-supporting/Working student' AND schoolFinancer != 'Scholarship' AND schoolFinancer != 'Spouse' AND schoolFinancer != 'Brother/Sister' AND schoolFinancer != 'Parents' ";
													$resultCountingschoolFinancerNotIndicated = mysqli_query($connect,$queryCountingschoolFinancerNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancerNotIndicated)) {
														echo "<td>".$row['NumberOfFinancerNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultschoolFinancerTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultschoolFinancerTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingschoolFinancerTotal = "SELECT schoolFinancer,count(*) AS NumberOfFinancerTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingschoolFinancerTotal = mysqli_query($connect,$queryCountingschoolFinancerTotal);
													while ($row = mysqli_fetch_array($resultCountingschoolFinancerTotal)) {
														echo "<td>".$row['NumberOfFinancerTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Weekly Allowance</th>
												<?php
												$resultStudentWeeklyAllowance  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentWeeklyAllowance))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentWeeklyAllowance = "SELECT schoolFinancer,count(*) AS NumberOfWeeklyAllowance FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentWeeklyAllowance = mysqli_query($connect,$queryCountingStudentWeeklyAllowance);
													while ($row = mysqli_fetch_array($resultCountingStudentWeeklyAllowance)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Below and equal to 100</td>
												<?php
												$resultStudentWeeklyAllowanceBelow100  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentWeeklyAllowanceBelow100))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentWeeklyAllowanceBelow100 = "SELECT weeklyAllowance,count(*) AS NumberOfWeeklyAllowanceBelow100 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND weeklyAllowance < 101";
													$resultCountingStudentWeeklyAllowanceBelow100 = mysqli_query($connect,$queryCountingStudentWeeklyAllowanceBelow100);
													while ($row = mysqli_fetch_array($resultCountingStudentWeeklyAllowanceBelow100)) {
														echo "<td>".$row['NumberOfWeeklyAllowanceBelow100']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>101-500</td>
												<?php
												$resultStudentWeeklyAllowance101to500  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentWeeklyAllowance101to500))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentWeeklyAllowance101to500 = "SELECT weeklyAllowance,count(*) AS NumberOfWeeklyAllowance101to500 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND weeklyAllowance < 100 and weeklyAllowance > 501";
													$resultCountingStudentWeeklyAllowance101to500 = mysqli_query($connect,$queryCountingStudentWeeklyAllowance101to500);
													while ($row = mysqli_fetch_array($resultCountingStudentWeeklyAllowance101to500)) {
														echo "<td>".$row['NumberOfWeeklyAllowance101to500']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>501-1000</td>
												<?php
												$resultStudentWeeklyAllowance501to1000  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentWeeklyAllowance501to1000))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentWeeklyAllowance501to1000 = "SELECT weeklyAllowance,count(*) AS NumberOfWeeklyAllowance501to1000 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND weeklyAllowance < 500 and weeklyAllowance > 1001";
													$resultCountingStudentWeeklyAllowance501to1000 = mysqli_query($connect,$queryCountingStudentWeeklyAllowance501to1000);
													while ($row = mysqli_fetch_array($resultCountingStudentWeeklyAllowance501to1000)) {
														echo "<td>".$row['NumberOfWeeklyAllowance501to1000']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Above 1000</td>
												<?php
												$resultStudentWeeklyAllowanceAbove1000  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentWeeklyAllowanceAbove1000))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentWeeklyAllowanceAbove1000 = "SELECT weeklyAllowance,count(*) AS NumberOfWeeklyAllowanceAbove1000 FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND weeklyAllowance > 1000";
													$resultCountingStudentWeeklyAllowanceAbove1000 = mysqli_query($connect,$queryCountingStudentWeeklyAllowanceAbove1000);
													while ($row = mysqli_fetch_array($resultCountingStudentWeeklyAllowanceAbove1000)) {
														echo "<td>".$row['NumberOfWeeklyAllowanceAbove1000']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php
												$resultStudentWeeklyAllowanceNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentWeeklyAllowanceNotIndicated))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentWeeklyAllowanceNotIndicated = "SELECT weeklyAllowance,count(*) AS NumberOfWeeklyAllowanceNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND weeklyAllowance < 0";
													$resultCountingStudentWeeklyAllowanceNotIndicated = mysqli_query($connect,$queryCountingStudentWeeklyAllowanceNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentWeeklyAllowanceNotIndicated)) {
														echo "<td>".$row['NumberOfWeeklyAllowanceNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultStudentWeeklyAllowanceTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentWeeklyAllowanceTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentWeeklyAllowanceTotal = "SELECT weeklyAllowance,count(*) AS NumberOfWeeklyAllowanceTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentWeeklyAllowanceTotal = mysqli_query($connect,$queryCountingStudentWeeklyAllowanceTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentWeeklyAllowanceTotal)) {
														echo "<td>".$row['NumberOfWeeklyAllowanceTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Do you have a quiet place to study?</th>
												<?php
												$resultStudentQuietPlaceToStudy  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentQuietPlaceToStudy))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentQuietPlaceToStudy = "SELECT studyPlace,count(*) AS NumberOfQuietPlaceToStudy FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentQuietPlaceToStudy = mysqli_query($connect,$queryCountingStudentQuietPlaceToStudy);
													while ($row = mysqli_fetch_array($resultCountingStudentQuietPlaceToStudy)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Yes</td>
												<?php
												$resultStudentQuietPlaceToStudyYes  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentQuietPlaceToStudyYes))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentQuietPlaceToStudyYes = "SELECT studyPlace,count(*) AS NumberOfQuietPlaceToStudyYes FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND studyPlace = 'Yes' ";
													$resultCountingStudentQuietPlaceToStudyYes = mysqli_query($connect,$queryCountingStudentQuietPlaceToStudyYes);
													while ($row = mysqli_fetch_array($resultCountingStudentQuietPlaceToStudyYes)) {
														echo "<td>".$row['NumberOfQuietPlaceToStudyYes']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>No</td>
												<?php
												$resultStudentQuietPlaceToStudyNo  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentQuietPlaceToStudyNo))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentQuietPlaceToStudyNo = "SELECT studyPlace,count(*) AS NumberOfQuietPlaceToStudyNo FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND studyPlace = 'No' ";
													$resultCountingStudentQuietPlaceToStudyNo = mysqli_query($connect,$queryCountingStudentQuietPlaceToStudyNo);
													while ($row = mysqli_fetch_array($resultCountingStudentQuietPlaceToStudyNo)) {
														echo "<td>".$row['NumberOfQuietPlaceToStudyNo']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultStudentQuietPlaceTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentQuietPlaceTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentQuietPlaceTotal = "SELECT studyPlace,count(*) AS NumberOfQuietPlaceTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentQuietPlaceTotal = mysqli_query($connect,$queryCountingStudentQuietPlaceTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentQuietPlaceTotal)) {
														echo "<td>".$row['NumberOfQuietPlaceTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultStudentQuietPlaceTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentQuietPlaceTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentQuietPlaceTotal = "SELECT studyPlace,count(*) AS NumberOfQuietPlaceTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentQuietPlaceTotal = mysqli_query($connect,$queryCountingStudentQuietPlaceTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentQuietPlaceTotal)) {
														echo "<td>".$row['NumberOfQuietPlaceTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Do you share your room with anyone?</th>
												<?php
												$resultStudentRoomSharing  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentRoomSharing))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentRoomSharing = "SELECT roomSharing,count(*) AS NumberOfRoomSharing FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentRoomSharing = mysqli_query($connect,$queryCountingStudentRoomSharing);
													while ($row = mysqli_fetch_array($resultCountingStudentRoomSharing)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Yes</td>
												<?php
												$resultStudentRoomSharingYes  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentRoomSharingYes))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentRoomSharingYes = "SELECT roomSharing,count(*) AS NumberOfRoomSharingYes FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND roomSharing != 'No' ";
													$resultCountingStudentRoomSharingYes = mysqli_query($connect,$queryCountingStudentRoomSharingYes);
													while ($row = mysqli_fetch_array($resultCountingStudentRoomSharingYes)) {
														echo "<td>".$row['NumberOfRoomSharingYes']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>No</td>
												<?php
												$resultStudentRoomSharingNo  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentRoomSharingNo))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentRoomSharingNo = "SELECT roomSharing,count(*) AS NumberOfRoomSharingNo FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND roomSharing = 'No' ";
													$resultCountingStudentRoomSharingNo = mysqli_query($connect,$queryCountingStudentRoomSharingNo);
													while ($row = mysqli_fetch_array($resultCountingStudentRoomSharingNo)) {
														echo "<td>".$row['NumberOfRoomSharingNo']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultStudentRoomSharingTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentRoomSharingTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentRoomSharingTotal = "SELECT roomSharing,count(*) AS NumberOfRoomSharingTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentRoomSharingTotal = mysqli_query($connect,$queryCountingStudentRoomSharingTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentRoomSharingTotal)) {
														echo "<td>".$row['NumberOfRoomSharingTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Nature Of Residence</th>
												<?php
												$resultStudentNatureOfResidence  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidence))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidence = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidence FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection'";
													$resultCountingStudentNatureOfResidence = mysqli_query($connect,$queryCountingStudentNatureOfResidence);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidence)) {
														echo "<td></td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Family</td>
												<?php
												$resultStudentNatureOfResidenceFamily  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceFamily))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceFamily = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceFamily FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence = 'Family home' ";
													$resultCountingStudentNatureOfResidenceFamily = mysqli_query($connect,$queryCountingStudentNatureOfResidenceFamily);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceFamily)) {
														echo "<td>".$row['NumberOfNatureOfResidenceFamily']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Relative's house</td>
												<?php
												$resultStudentNatureOfResidenceRelative  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceRelative))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceRelative = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceRelative FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence = 'Relative`s house' ";
													$resultCountingStudentNatureOfResidenceRelative = mysqli_query($connect,$queryCountingStudentNatureOfResidenceRelative);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceRelative)) {
														echo "<td>".$row['NumberOfNatureOfResidenceRelative']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Shares Apartment With Friends</td>
												<?php
												$resultStudentNatureOfResidenceApartmentFriends  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceApartmentFriends))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceApartmentFriends = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceApartmentFriends FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence = 'Shares apartment with friends' ";
													$resultCountingStudentNatureOfResidenceApartmentFriends = mysqli_query($connect,$queryCountingStudentNatureOfResidenceApartmentFriends);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceApartmentFriends)) {
														echo "<td>".$row['NumberOfNatureOfResidenceApartmentFriends']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Shares Apartment With Relatives</td>
												<?php
												$resultStudentNatureOfResidenceApartmentRelatives  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceApartmentRelatives))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceApartmentRelatives = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceApartmentRelatives FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence = 'Shares apartment with relatives' ";
													$resultCountingStudentNatureOfResidenceApartmentRelatives = mysqli_query($connect,$queryCountingStudentNatureOfResidenceApartmentRelatives);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceApartmentRelatives)) {
														echo "<td>".$row['NumberOfNatureOfResidenceApartmentRelatives']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Bed Spacer</td>
												<?php
												$resultStudentNatureOfResidenceBedSpacer  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceBedSpacer))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceBedSpacer = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceBedSpacer FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence = 'Bed spacer' ";
													$resultCountingStudentNatureOfResidenceBedSpacer = mysqli_query($connect,$queryCountingStudentNatureOfResidenceBedSpacer);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceBedSpacer)) {
														echo "<td>".$row['NumberOfNatureOfResidenceBedSpacer']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Rented Apartment</td>
												<?php
												$resultStudentNatureOfResidenceRentedApartment  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceRentedApartment))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceRentedApartment = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceRentedApartment FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence = 'Rented apartment' ";
													$resultCountingStudentNatureOfResidenceRentedApartment = mysqli_query($connect,$queryCountingStudentNatureOfResidenceRentedApartment);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceRentedApartment)) {
														echo "<td>".$row['NumberOfNatureOfResidenceRentedApartment']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Dorm</td>
												<?php
												$resultStudentNatureOfResidenceDorm  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceDorm))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceDorm = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceDorm FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence = 'Dorm' ";
													$resultCountingStudentNatureOfResidenceDorm = mysqli_query($connect,$queryCountingStudentNatureOfResidenceDorm);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceDorm)) {
														echo "<td>".$row['NumberOfNatureOfResidenceDorm']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php
												$resultStudentNatureOfResidenceNotIndicated  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceNotIndicated))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceNotIndicated = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceNotIndicated FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND natureOfResidence != 'Dorm' AND natureOfResidence != 'Rented apartment' AND natureOfResidence != 'Bed spacer' AND natureOfResidence != 'Shares apartment with relatives' AND natureOfResidence != 'Shares apartment with friends' AND natureOfResidence != 'Shares apartment with relatives' AND natureOfResidence != 'Shares apartment with relatives' AND natureOfResidence != 'Relative`s house' AND natureOfResidence != 'Family home' ";
													$resultCountingStudentNatureOfResidenceNotIndicated = mysqli_query($connect,$queryCountingStudentNatureOfResidenceNotIndicated);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceNotIndicated)) {
														echo "<td>".$row['NumberOfNatureOfResidenceNotIndicated']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php
												$resultStudentNatureOfResidenceTotal  = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentNatureOfResidenceTotal))
												{
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingStudentNatureOfResidenceTotal = "SELECT natureOfResidence,count(*) AS NumberOfNatureOfResidenceTotal FROM tbl_familybackground INNER JOIN tbl_personalinfo ON tbl_familybackground.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";
													$resultCountingStudentNatureOfResidenceTotal = mysqli_query($connect,$queryCountingStudentNatureOfResidenceTotal);
													while ($row = mysqli_fetch_array($resultCountingStudentNatureOfResidenceTotal)) {
														echo "<td>".$row['NumberOfNatureOfResidenceTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>IV. Health Background</th>
												<?php 
												$resultStudentSpaceForHealthBackground = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackground))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackground = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackground = mysqli_query($connect,$queryCountingSpacesForHealthBackground);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackground)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<th>A. Physical</th>
												<?php 
												$resultStudentSpaceForHealthBackgroundPhysical = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackgroundPhysical))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackgroundPhysical = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackgroundPhysical = mysqli_query($connect,$queryCountingSpacesForHealthBackgroundPhysical);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackgroundPhysical)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Yes</th>
												<?php 
												$resultStudentSpaceForHealthBackgroundPhysical2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackgroundPhysical2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackgroundPhysical2 = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackgroundPhysical2 = mysqli_query($connect,$queryCountingSpacesForHealthBackgroundPhysical2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackgroundPhysical2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Vision</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalVision = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalVision))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalVision = "SELECT visionProblem ,count(visionProblem) AS TotalVisionProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND visionProblem != '' ";

													$resultHealthBackgroundPhysicalVision = mysqli_query($connect,$queryHealthBackgroundPhysicalVision);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalVision)) {
														echo "<td>".$row['TotalVisionProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Hearing</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalHearing = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalHearing))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalHearing = "SELECT hearingProblem ,count(hearingProblem) AS TotalHearingProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND hearingProblem != '' ";

													$resultHealthBackgroundPhysicalHearing = mysqli_query($connect,$queryHealthBackgroundPhysicalHearing);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalHearing)) {
														echo "<td>".$row['TotalHearingProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Speech</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalSpeech = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalSpeech))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalSpeech = "SELECT speechProblem ,count(speechProblem) AS TotalSpeechProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND speechProblem = '' ";

													$resultHealthBackgroundPhysicalSpeech = mysqli_query($connect,$queryHealthBackgroundPhysicalSpeech);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalSpeech)) {
														echo "<td>".$row['TotalSpeechProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>General Health</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalGenHealth = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalGenHealth))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalGenHealth = "SELECT generalHealth ,count(generalHealth) AS TotalGenHealthProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND generalHealth = '' ";

													$resultHealthBackgroundPhysicalGenHealth = mysqli_query($connect,$queryHealthBackgroundPhysicalGenHealth);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalGenHealth)) {
														echo "<td>".$row['TotalGenHealthProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>No</th>
												<?php 
												$resultStudentSpaceForHealthBackgroundPhysical2 = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackgroundPhysical2))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackgroundPhysical2 = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackgroundPhysical2 = mysqli_query($connect,$queryCountingSpacesForHealthBackgroundPhysical2);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackgroundPhysical2)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Vision</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalVision = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalVision))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalVision = "SELECT visionProblem ,count(visionProblem) AS TotalVisionProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND visionProblem = '' ";

													$resultHealthBackgroundPhysicalVision = mysqli_query($connect,$queryHealthBackgroundPhysicalVision);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalVision)) {
														echo "<td>".$row['TotalVisionProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Hearing</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalHearing = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalHearing))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalHearing = "SELECT hearingProblem ,count(hearingProblem) AS TotalHearingProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND hearingProblem = '' ";

													$resultHealthBackgroundPhysicalHearing = mysqli_query($connect,$queryHealthBackgroundPhysicalHearing);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalHearing)) {
														echo "<td>".$row['TotalHearingProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Speech</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalSpeech = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalSpeech))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalSpeech = "SELECT speechProblem ,count(speechProblem) AS TotalSpeechProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND speechProblem = '' ";

													$resultHealthBackgroundPhysicalSpeech = mysqli_query($connect,$queryHealthBackgroundPhysicalSpeech);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalSpeech)) {
														echo "<td>".$row['TotalSpeechProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>General Health</td>
												<?php 
												$resultStudentHealthBackgroundPhysicalGenHealth = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPhysicalGenHealth))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPhysicalGenHealth = "SELECT generalHealth ,count(generalHealth) AS TotalGenHealthProblem FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND generalHealth = '' ";

													$resultHealthBackgroundPhysicalGenHealth = mysqli_query($connect,$queryHealthBackgroundPhysicalGenHealth);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPhysicalGenHealth)) {
														echo "<td>".$row['TotalGenHealthProblem']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Psychological</th>
												<?php 
												$resultStudentSpaceForHealthBackgroundPsychological = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackgroundPsychological))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackgroundPsychological = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackgroundPsychological = mysqli_query($connect,$queryCountingSpacesForHealthBackgroundPsychological);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackgroundPsychological)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Psychiatrist</th>
												<?php 
												$resultStudentSpaceForHealthBackgroundPsychologicalPsychiatrist = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackgroundPsychologicalPsychiatrist))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackgroundPsychologicalPsychiatrist = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackgroundPsychologicalPsychiatrist = mysqli_query($connect,$queryCountingSpacesForHealthBackgroundPsychologicalPsychiatrist);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackgroundPsychologicalPsychiatrist)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Yes</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychiatrist = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychiatrist))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPsychologicalPsychiatrist = "SELECT psychiatristConsult,count(psychiatristConsult) AS TotalPsychiatristConsult FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND psychiatristConsult = 'Yes' ";

													$resultHealthBackgroundPsychologicalPsychiatrist = mysqli_query($connect,$queryHealthBackgroundPsychologicalPsychiatrist);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalPsychiatrist)) {
														echo "<td>".$row['TotalPsychiatristConsult']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>No</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychiatrist = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychiatrist))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPsychologicalPsychiatrist = "SELECT psychiatristConsult,count(psychiatristConsult) AS TotalPsychiatristConsult FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND psychiatristConsult = 'Never' ";

													$resultHealthBackgroundPsychologicalPsychiatrist = mysqli_query($connect,$queryHealthBackgroundPsychologicalPsychiatrist);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalPsychiatrist)) {
														echo "<td>".$row['TotalPsychiatristConsult']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychiatristNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychiatristNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingHealthBackgroundPsychologicalPsychiatristNA = "SELECT psychiatristConsult, count(psychiatristConsult) AS NumberOfHealthBackgroundPsychologicalPsychiatristNA FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND psychiatristConsult != 'Yes' AND psychiatristConsult != 'Never' ";

													$resultHealthBackgroundPsychologicalPsychiatristNA = mysqli_query($connect,$queryCountingHealthBackgroundPsychologicalPsychiatristNA);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalPsychiatristNA)) {
														$NumberOfHealthBackgroundPsychologicalPsychiatristNA = $row['NumberOfHealthBackgroundPsychologicalPsychiatristNA'];
														echo "<td>".$row['NumberOfHealthBackgroundPsychologicalPsychiatristNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychiatristTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychiatristTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryHealthBackgroundPsychologicalPsychiatristTotal = "SELECT psychiatristConsult, count(psychiatristConsult) AS NumberOfHealthBackgroundPsychologicalPsychiatristTotal FROM tbl_healthinfo inner join tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingHealthBackgroundPsychologicalPsychiatristTotal = mysqli_query($connect,$queryHealthBackgroundPsychologicalPsychiatristTotal);
													while ($row = mysqli_fetch_array($resultCountingHealthBackgroundPsychologicalPsychiatristTotal)) {
														$NumberOfHealthBackgroundPsychologicalPsychiatristTotal = $row['NumberOfHealthBackgroundPsychologicalPsychiatristTotal'];
														echo "<td>".$row['NumberOfHealthBackgroundPsychologicalPsychiatristTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Psychologist</th>
												<?php 
												$resultStudentSpaceForHealthBackgroundPsychologicalPsychologist = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackgroundPsychologicalPsychologist))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackgroundPsychologicalPsychologist = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackgroundPsychologicalPsychologist = mysqli_query($connect,$queryCountingSpacesForHealthBackgroundPsychologicalPsychologist);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackgroundPsychologicalPsychologist)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Yes</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychologist = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychologist))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPsychologicalPsychologist = "SELECT psychologistConsult,count(psychologistConsult) AS TotalPsychologistConsult FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND psychologistConsult = 'Yes' ";

													$resultHealthBackgroundPsychologicalPsychologist = mysqli_query($connect,$queryHealthBackgroundPsychologicalPsychologist);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalPsychologist)) {
														echo "<td>".$row['TotalPsychologistConsult']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>No</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychologist = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychologist))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPsychologicalPsychologist = "SELECT psychologistConsult,count(psychologistConsult) AS TotalPsychologistConsult FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND psychologistConsult = 'Never' ";

													$resultHealthBackgroundPsychologicalPsychologist = mysqli_query($connect,$queryHealthBackgroundPsychologicalPsychologist);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalPsychologist)) {
														echo "<td>".$row['TotalPsychologistConsult']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychologistNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychologistNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingHealthBackgroundPsychologicalPsychologistNA = "SELECT psychologistConsult, count(psychologistConsult) AS NumberOfHealthBackgroundPsychologicalPsychologistNA FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND psychologistConsult != 'Yes' AND psychologistConsult != 'Never' ";

													$resultHealthBackgroundPsychologicalPsychiatristNA = mysqli_query($connect,$queryCountingHealthBackgroundPsychologicalPsychiatristNA);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalPsychiatristNA)) {
														$NumberOfHealthBackgroundPsychologicalPsychiatristNA = $row['NumberOfHealthBackgroundPsychologicalPsychiatristNA'];
														echo "<td>".$row['NumberOfHealthBackgroundPsychologicalPsychiatristNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>TOTAL</th>
												<?php 
												$resultStudentHealthBackgroundPsychologicalPsychologistTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalPsychologistTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryHealthBackgroundPsychologicalPsychologistTotal = "SELECT psychologistConsult, count(psychologistConsult) AS NumberOfHealthBackgroundPsychologicalPsychologistTotal FROM tbl_healthinfo inner join tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingHealthBackgroundPsychologicalPsychologistTotal = mysqli_query($connect,$queryHealthBackgroundPsychologicalPsychologistTotal);
													while ($row = mysqli_fetch_array($resultCountingHealthBackgroundPsychologicalPsychologistTotal)) {
														$NumberOfHealthBackgroundPsychologicalPsychologistTotal = $row['NumberOfHealthBackgroundPsychologicalPsychologistTotal'];
														echo "<td>".$row['NumberOfHealthBackgroundPsychologicalPsychologistTotal']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<th>Counselor</th>
												<?php 
												$resultStudentSpaceForHealthBackgroundPsychologicalCounselor = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentSpaceForHealthBackgroundPsychologicalCounselor))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryCountingSpacesForHealthBackgroundPsychologicalCounselor = "SELECT count(*) AS NumberOfAll FROM tbl_healthinfo INNER JOIN tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingSpacesForHealthBackgroundPsychologicalCounselor = mysqli_query($connect,$queryCountingSpacesForHealthBackgroundPsychologicalCounselor);
													while ($row = mysqli_fetch_array($resultCountingSpacesForHealthBackgroundPsychologicalCounselor)) {
														echo "<th></th>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Yes</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalCounselor = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalCounselor))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPsychologicalCounselor = "SELECT counselorConsult,count(counselorConsult) AS TotalCounselorConsult FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND counselorConsult = 'Yes' ";

													$resultHealthBackgroundPsychologicalCounselor = mysqli_query($connect,$queryHealthBackgroundPsychologicalCounselor);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalCounselor)) {
														echo "<td>".$row['TotalCounselorConsult']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>No</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalCounselor = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalCounselor))
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];
													$queryHealthBackgroundPsychologicalCounselor = "SELECT counselorConsult,count(counselorConsult) AS TotalCounselorConsult FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND counselorConsult = 'Never' ";

													$resultHealthBackgroundPsychologicalCounselor = mysqli_query($connect,$queryHealthBackgroundPsychologicalCounselor);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalCounselor)) {
														echo "<td>".$row['TotalCounselorConsult']."</td>";
													}
												}
												?>
											</tr>
											<tr>
												<td>Not Indicated</td>
												<?php 
												$resultStudentHealthBackgroundPsychologicalCounselorNA = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalCounselorNA))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryCountingHealthBackgroundPsychologicalCounselorNA = "SELECT counselorConsult, count(counselorConsult) AS NumberOfHealthBackgroundPsychologicalCounselorNA FROM tbl_healthinfo inner join tbl_personalinfo on tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' AND counselorConsult != 'Yes' AND counselorConsult != 'Never' ";

													$resultHealthBackgroundPsychologicalCounselorNA = mysqli_query($connect,$queryCountingHealthBackgroundPsychologicalCounselorNA);
													while ($row = mysqli_fetch_array($resultHealthBackgroundPsychologicalCounselorNA)) {
														$NumberOfHealthBackgroundPsychologicalCounselorNA = $row['NumberOfHealthBackgroundPsychologicalCounselorNA'];
														echo "<td>".$row['NumberOfHealthBackgroundPsychologicalCounselorNA']."</td>";
													}
												}
												?>
											</tr>
											<tr>

												<th>TOTAL</th>
												<?php 
												$resultStudentHealthBackgroundPsychologicalCounselorTotal = mysqli_query($connect, $queryStudent); 
												while($row = mysqli_fetch_array($resultStudentHealthBackgroundPsychologicalCounselorTotal))  
												{  
													$currentCourse = $row['courseCode'];
													$currentYear = $row['year'];
													$currentSection = $row['section'];

													$queryHealthBackgroundPsychologicalCounselorTotal = "SELECT counselorConsult, count(counselorConsult) AS NumberOfHealthBackgroundPsychologicalCounselorTotal FROM tbl_healthinfo inner join tbl_personalinfo ON tbl_healthinfo.studentNumber = tbl_personalinfo.studentNumber WHERE courseCode = '$currentCourse' AND year = '$currentYear' AND section = '$currentSection' ";

													$resultCountingHealthBackgroundPsychologicalCounselorTotal = mysqli_query($connect,$queryHealthBackgroundPsychologicalCounselorTotal);
													while ($row = mysqli_fetch_array($resultCountingHealthBackgroundPsychologicalCounselorTotal)) {
														$NumberOfHealthBackgroundPsychologicalCounselorTotal = $row['NumberOfHealthBackgroundPsychologicalCounselorTotal'];
														echo "<td>".$row['NumberOfHealthBackgroundPsychologicalCounselorTotal']."</td>";
													}
												}
												?>
											</tr>



										</tbody>
										<?php

										?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->
			<?php 
			require 'viewMessageModal.php';
			?>
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
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>



	<script type="text/javascript">
		function course(){
			var url = window.location.href;
			var url = new URL(url);
			var college = url.searchParams.get("id");
			var selected = document.getElementById('selectCourse').value;
			window.location.replace('Tallytables.php?id='+college+'&course='+selected);
		}
		var temp="<?php echo $course;?>"; 
		$("#selectCourse").val(temp);
	</script>

</body>
</html>