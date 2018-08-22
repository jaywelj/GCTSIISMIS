<?php
session_start();
//$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
//$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];


$varcharStudentAccountNumber = $_GET['id'];
?>
<?php
include("connectionString.php");

$result = mysqli_query($connect,"SELECT * FROM `tbl_studentaccount`WHERE studentNumber = '$varcharStudentAccountNumber'");
																		//$res = mysqli_fetch_assoc($result);
																		//$varcharAccountImage = $res['admin_image'];
while($res = mysqli_fetch_array($result))
{

	$varcharStudentNumber = $res['studentNumber'];
	$varcharStudentAbout = $res['aboutStudent'];
	$varcharStudentDisplayPic = $res['studentDisplayPic'];

}
$result2 = mysqli_query($connect, "SELECT * FROM `tbl_personalinfo` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `infoID` DESC LIMIT 1");

while($res2 = mysqli_fetch_array($result2))
{

	$varcharStudentFirstName = $res2['firstName'];
	$varcharStudentMiddleName = $res2['middleName'];
	$varcharStudentLastName = $res2['lastName'];
	$varcharStudentCollege = $res2['collegeCode'];
	$varcharStudentCourse = $res2['courseCode'];
	$varcharStudentSex = $res2['sex'];
	$varcharStudentSexuality = $res2['sexuality'];
	$varcharStudentAge = $res2['age'];
	$varcharStudentYear = $res2['year'];
	$varcharStudentSection = $res2['section'];
	$varcharStudentCivilStatus = $res2['civilStatus'];
	$varcharStudentBirthdate = $res2['birthDate'];
	$varcharStudentHeight = $res2['height'];
	$varcharStudentWeight = $res2['weight'];
	$varcharStudentComplexion = $res2['complexion'];
	$varcharStudentBirthplace = $res2['birthPlace'];
	$varcharStudentCityHouseNumber = $res2['cityHouseNumber'];
	$varcharStudentCityCity = $res2['cityName'];
	$varcharStudentCityBarangay = $res2['cityBarangay'];

	$tempStudentCityAddress = $varcharStudentCityHouseNumber .' '. $varcharStudentCityCity .' '. $varcharStudentCityBarangay; 

	$varcharStudentProvinceHouseNumber = $res2['provinceHouseNumber'];
	$varcharStudentProvinceProvince = $res2['provinceProvincial'];
	$varcharStudentProvinceCity = $res2['provinceName'];
	$varcharStudentProvinceBarangay = $res2['provinceBarangay'];

	$tempStudentProvinceAddress = $varcharStudentProvinceHouseNumber .' '.  $varcharStudentProvinceProvince . ' ' . $varcharStudentProvinceCity . ' ' .  $varcharStudentProvinceBarangay;

	$varcharStudentEmail = $res2['email'];
	$varcharStudentMobileNum = $res2['mobileNumber'];
	$varcharStudentTelNum = $res2['telNumber'];
	$varcharStudentHSGWA = $res2['hsGWA'];
	$varcharStudentReligion = $res2['religion'];
	$varcharStudentEmployerName = $res2['employerName'];
	$varcharStudentEmployerAddress = $res2['employerAddress'];
	$varcharStudentContactPersonName = $res2['contactPersonName'];
	$varcharStudentContactPersonAdress = $res2['cpAddress'];
	$varcharStudentContactPersonRelationship = $res2['cpRelationship'];
	$varcharStudentContactPersonContactNumber = $res2['cpContactNumber'];
}

$result2point5 = mysqli_query($connect, "SELECT * FROM `tbl_educationalbackground` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `educationID` DESC LIMIT 1");
while($res2point5 = mysqli_fetch_array($result2point5)){
	$varcharStudentPreSchoolName = $res2point5['prepSchoolName'];
	$varcharStudentPreSchoolAddress = $res2point5['prepSchoolAddress'];
	$varcharStudentPreSchoolType = $res2point5['prepType'];
	$varcharStudentPreSchoolYearAttended = $res2point5['prepYearAttended'];
	$varcharStudentPreSchoolAwards = $res2point5['prepAwards'];
	$varcharStudentPreSchoolImage = $res2point5['prepImage'];
	$varcharStudentElementarySchoolName = $res2point5['elemSchoolName'];
	$varcharStudentElementarySchoolAddress = $res2point5['elemSchoolAddress'];
	$varcharStudentElementarySchoolType = $res2point5['elemType'];
	$varcharStudentElementarySchoolYearAttended = $res2point5['elemYearAttended'];
	$varcharStudentElementarySchoolAwards = $res2point5['elemAwards'];
	$varcharStudentELemntarySchoolImage = $res2point5['elemImage'];
	$varcharStudentHSSchoolName = $res2point5['hsSchoolName'];
	$varcharStudentHSSchoolAddress = $res2point5['hsSchoolAddress'];
	$varcharStudentHSSchoolType = $res2point5['hsType'];
	$varcharStudentHSSchoolYearAttended = $res2point5['hsYearAttended'];
	$varcharStudentHSSchoolAwards = $res2point5['hsAwards'];
	$varcharStudentHSSchoolImage = $res2point5['hsImage'];
	$varcharStudentVocationalSchoolName = $res2point5['vocSchoolName'];
	$varcharStudentVocationalSchoolAddress = $res2point5['vocSchoolAddress'];
	$varcharStudentVocationalSchoolType = $res2point5['vocType'];
	$varcharStudentVocationalSchoolYearAttended = $res2point5['vocYearAttended'];
	$varcharStudentVocationalAwards = $res2point5['vocAwards'];
	$varcharStudentVocationalImage = $res2point5['vocImage'];
	$varcharStudentCollegeSchoolName = $res2point5['collegeSchoolName'];
	$varcharStudentCollegeSchoolAddress = $res2point5['collegeSchoolAddress'];
	$varcharStudentCollegeSchoolType = $res2point5['collegeType'];
	$varcharStudentCollegeSchoolYearAttended = $res2point5['collegeYearAttended'];
	$varcharStudentCollegeSchoolAwards = $res2point5['collegeAwards'];
	$varcharStudentCollegeSchoolImage = $res2point5['collegeImage'];
	$varcharStudentNatureOfSchooling = $res2point5['natureOfSchooling'];
	$varcharStudentInterruptedWhy = $res2point5['interruptedWhy'];

}


$result3 = mysqli_query($connect, "SELECT * FROM `tbl_familybackground` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `familyID` DESC LIMIT 1");
while($res3 = mysqli_fetch_array($result3)){
	$varcharStudentFatherName = $res3['fatherName'];
	$varcharStudentFatherAge = $res3['fatherAge'];
	$varcharStudentFatherStatus = $res3['fatherStatus'];
	$varcharStudentFatherEducation = $res3['fatherEducation'];
	$varcharStudentFatherOccupationType = $res3['fatherOccupationType'];
	$varcharStudentFatherOccupation = $res3['fatherOccupation'];
	$varcharStudentFatherEmployerName = $res3['fatherEmployerName'];
	$varcharStudentFatherEmployerAddress = $res3['fatherEmployerAdd'];

	$varcharStudentMotherName = $res3['motherName'];
	$varcharStudentMotherAge = $res3['motherAge'];
	$varcharStudentMotherStatus = $res3['motherStatus'];
	$varcharStudentMotherEducation = $res3['motherEducation'];
	$varcharStudentMotherOccupationType = $res3['motherOccupationType'];
	$varcharStudentMotherOccupation = $res3['motherOccupation'];
	$varcharStudentMotherEmployerName = $res3['motherEmployerName'];
	$varcharStudentMotherEmployerAddress = $res3['motherEmployerAdd'];

	$varcharStudentGuardianName = $res3['guardianName'];
	$varcharStudentGuardianAge = $res3['guardianAge'];
	$varcharStudentGuardianRelation = $res3['guardianRelation'];
	$varcharStudentGuardianEducation = $res3['guardianEducation'];
	$varcharStudentGuardianOccupationType = $res3['guardianOccupationType'];
	$varcharStudentGuardianOccupation = $res3['guardianOccupation'];
	$varcharStudentGuardianEmployerName = $res3['guardianEmployerName'];
	$varcharStudentGuardianEmployerAddress = $res3['guardianEmployerAdd'];

	$varcharStudentMaritalRelationship = $res3['parentsMaritalRelation'];
	$varcharStudentNumOfChildren = $res3['noOfChildren'];
	$varcharStudentNumOfBrother = $res3['noOfBrother'];
	$varcharStudentNumOfSister = $res3['noOfSister'];
	$varcharStudentSiblingsEmployed = $res3['broSisEmployed'];
	$varcharStudentOrdinalPosition = $res3['ordinalPosition'];
	$varcharStudentSiblingSupporter = $res3['supportedByYourSibling'];
	$varcharStudentSchoolFinancer = $res3['schoolFinancer'];
	$varcharStudentWeeklyAllowance = $res3['weeklyAllowance'];
	$varcharStudentMonthlyIncome = $res3['totalMonthlyIncome'];
	$varcharStudentStudyPlace = $res3['studyPlace'];
	$varcharStudentRoomSharing = $res3['roomSharing'];
	$varcharStudentNatureOfResidence = $res3['natureOfResidence'];
}

$result4 = mysqli_query($connect, "SELECT * FROM `tbl_healthinfo` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `healthID` DESC LIMIT 1");
while($res4 = mysqli_fetch_array($result4)){
	$varcharStudentHealthID = $res4['healthID'];
	$varcharStudentVisionProblem = $res4['visionProblem'];
	$varcharStudentHearingProblem = $res4['hearingProblem'];
	$varcharStudentSpeechProblem = $res4['speechProblem'];
	$varcharStudentGeneralHealth = $res4['generalHealth'];
	$varcharStudentPsychiatristConsult = $res4['psychiatristConsult'];
	$varcharStudentPsychiatristWhen = $res4['psychiatristWhen'];
	$varcharStudentPsychiatristReason  = $res4['psychiatristReason'];
	$varcharStudentPsychologistConsult = $res4['psychologistConsult'];
	$varcharStudentPsychologistWhen = $res4['psychologistWhen'];
	$varcharStudentPsychologistReason = $res4['psychologistReason'];
	$varcharStudentCounselorConsult = $res4['counselorConsult'];
	$varcharStudentCounselorWhen = $res4['counselorWhen'];
	$varcharStudentCounselorReason = $res4['counselorReason'];


}
$result5 = mysqli_query($connect, "SELECT * FROM `tbl_interesthobbies` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `interestID` DESC LIMIT 1");
while($res5 = mysqli_fetch_array($result5)){
	$varcharStudentInterestID = $res5['interestID'];
	$varcharStudentClubName = $res5['clubName'];
	$varcharStudentFavSubject = $res5['favSubject'];
	$varcharStudentLeastFavSubject = $res5['leastFavSubject'];
	$varcharStudentHobby1 = $res5['hobby1'];
	$varcharStudentHobby2 = $res5['hobby2'];
	$varcharStudentHobby3 = $res5['hobby3'];
	$varcharStudentHobby4 = $res5['hobby4'];
	$varcharStudentInterestOrganization = $res5['interestOrganization'];
	$varcharStudentOrganizationPosition = $res5['organizationPosition'];

}



if($varcharStudentSex = "F"){
	$varcharStudentSex = "Female";
}
else if($varcharStudentSex = "M"){
	$varcharStudentSex = "Male";
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

	<link rel="shortcut icon" href="assets/img/GCTS LOGO1.png">
	<title>IIR View | OCPS</title>

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
									<h2> <?php echo $varcharStudentNumber; ?>  <small>Personal Information</small></h2>
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
									<div class="col-md-2 col-sm-2 col-xs-6 profile_left" style="z-index:  2; ">
									<div class="profile_img" style="width:200px;">
										<div id="crop-avatar" >

											<?php

											$result = mysqli_query($connect,"SELECT * FROM `tbl_studentaccount` WHERE `studentNumber` = '$varcharStudentAccountNumber'");

											while($res = mysqli_fetch_array($result))
											{
												$VarcharStudentProfileImage = $res['studentDisplayPic'];
												if(empty($VarcharStudentProfileImage))
												{
													echo '
													<img class="img-responsive avatar-view" src="assets/img/default-user.png">
													';
												}
												else{
													echo '
													<img class="img-responsive avatar-view" src="data:image/jpeg;base64,'.base64_encode($res['studentDisplayPic']).'"  alt="Avatar" title='.$res['studentNumber'].' >
													';
												}
											}
											?>
										</div>
									</div>
									<h3><?php echo $varcharStudentFirstName.' '.$varcharStudentLastName;  ?></h3>

									<ul class="list-unstyled user_data">
										<li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $varcharStudentCityCity ;?></li>
									</ul>

									<!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> -->
									<br />


								</div>
								<div class="col-md-10 col-sm-10 col-xs-12" >
									<div class="" role="tabpanel" data-example-id="togglable-tabs">
										<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
											<li role="presentation" class="active in"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal</a>
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
											<li role="presentation" class=""  ><a href="#tab_content7" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Significant Notes</a>
											</li>
										</ul>
										<div id="myTabContent" class="tab-content">
											<div role="tabpanel" class="tab-pane fade active in" id="tab_content1"aria-labelledby="home-tab">
												<!-- start recent activity -->
												<ul class="messages">
													<li>
														<div class="message_wrapper">
															<h4 class="heading">I. Basic Information</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">Full Name</th>
																		<td><?php echo $varcharStudentFirstName." ".$varcharStudentMiddleName." ".$varcharStudentLastName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Gender</th>
																		<td><?php echo $varcharStudentSex; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Sexuality</th>
																		<td><?php echo $varcharStudentSexuality; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Age</th>
																		<td><?php echo $varcharStudentAge; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Birthday</th>
																		<td><?php echo $varcharStudentBirthdate; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Place of Birth</th>
																		<td><?php echo $varcharStudentBirthplace; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Religion</th>
																		<td><?php echo $varcharStudentReligion; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Civil Status</th>
																		<td><?php echo $varcharStudentCivilStatus; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Height</th>
																		<td><?php echo $varcharStudentHeight; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Weight</th>
																		<td><?php echo $varcharStudentWeight; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Complexion</th>
																		<td><?php echo $varcharStudentComplexion; ?></td>
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">II. School Information</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">Student Number</th>
																		<td><?php echo $varcharStudentNumber; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Course</th>
																		<td><?php echo $varcharStudentCourse; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Year</th>
																		<td><?php echo $varcharStudentYear; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Section</th>
																		<td><?php echo $varcharStudentSection; ?></td>
																	</tr>

																</tbody>
															</table>
															<h4 class="heading">III. Contact Information</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">City Address</th>
																		<td><?php echo $varcharStudentCityHouseNumber. $varcharStudentCityCity.$varcharStudentCityBarangay; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Provincial Address</th>
																		<td><?php echo $varcharStudentProvinceHouseNumber.$varcharStudentProvinceProvince.$varcharStudentProvinceCity.$varcharStudentProvinceBarangay; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Email</th>
																		<td><?php echo $varcharStudentEmail; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Mobile No.</th>
																		<td><?php echo $varcharStudentMobileNum; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Telephone No.</th>
																		<td><?php echo $varcharStudentTelNum; ?></td>
																	</tr>
																</tbody>
															</table>
															<br/>
														</div>
													</li>
												</ul>
												<!-- end recent activity -->

											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="home-tab">
												<!-- start recent activity -->
												<ul class="messages">
													<li>
														<div class="message_wrapper">
															<h4 class="heading">I. Pre-elementary</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">School Graduated</th>
																		<td><?php echo $varcharStudentPreSchoolName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">School Address</th>
																		<td><?php echo $varcharStudentPreSchoolAddress; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Type of School</th>
																		<td><?php echo $varcharStudentPreSchoolType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Year Attended</th>
																		<td><?php echo $varcharStudentPreSchoolYearAttended; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Honors Recieved/Special Awards</th>
																		<td><?php echo $varcharStudentPreSchoolAwards; ?></td>
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">II. Elementary</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">School Graduated</th>
																		<td><?php echo $varcharStudentElementarySchoolName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">School Address</th>
																		<td><?php echo $varcharStudentElementarySchoolAddress; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Type of School</th>
																		<td><?php echo $varcharStudentElementarySchoolType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Year Attended</th>
																		<td><?php echo $varcharStudentElementarySchoolYearAttended; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Honors Recieved/Special Awards</th>
																		<td><?php echo $varcharStudentElementarySchoolAwards; ?></td>
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">III. High School</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">School Graduated</th>
																		<td><?php echo $varcharStudentHSSchoolName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">School Address</th>
																		<td><?php echo $varcharStudentHSSchoolAddress; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Type of School</th>
																		<td><?php echo $varcharStudentHSSchoolType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Year Attended</th>
																		<td><?php echo $varcharStudentHSSchoolYearAttended; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Honors Recieved/Special Awards</th>
																		<td><?php echo $varcharStudentHSSchoolAwards; ?></td>
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">IV. Vocational</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">School Graduated</th>
																		<td><?php echo $varcharStudentVocationalSchoolName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">School Address</th>
																		<td><?php echo $varcharStudentVocationalSchoolAddress; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Type of School</th>
																		<td><?php echo $varcharStudentVocationalSchoolType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Year Attended</th>
																		<td><?php echo $varcharStudentVocationalSchoolYearAttended; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Honors Recieved/Special Awards</th>
																		<td><?php echo $varcharStudentVocationalAwards; ?></td>
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">V. College</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">School Graduated</th>
																		<td><?php echo $varcharStudentCollegeSchoolName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">School Address</th>
																		<td><?php echo $varcharStudentCollegeSchoolAddress; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Type of School</th>
																		<td><?php echo $varcharStudentCollegeSchoolType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Year Attended</th>
																		<td><?php echo $varcharStudentCollegeSchoolYearAttended; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Honors Recieved/Special Awards</th>
																		<td><?php echo $varcharStudentCollegeSchoolAwards; ?></td>
																	</tr>
																</tbody>
															</table>
															<br/>
														</div>
													</li>
												</ul>
												<!-- end recent activity -->
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="home-tab">
												<!-- start recent activity -->
												<ul class="messages">
													<li>
														<div class="message_wrapper">
															<h4 class="heading">I. Father</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">Name</th>
																		<td><?php echo $varcharStudentFatherName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Age</th>
																		<td><?php echo $varcharStudentFatherAge; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">State</th>
																		<td><?php echo $varcharStudentFatherStatus; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Educational Attainment</th>
																		<td><?php echo $varcharStudentFatherEducation; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Occupation Type</th>
																		<td><?php echo $varcharStudentFatherOccupationType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Occupation</th>
																		<td><?php echo $varcharStudentFatherOccupation; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Employer</th>
																		<td><?php echo $varcharStudentFatherEmployerName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Address of Employer</th>
																		<td><?php echo $varcharStudentFatherEmployerAddress; ?></td> 
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">II. Mother</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">Name</th>
																		<td><?php echo $varcharStudentMotherName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Age</th>
																		<td><?php echo $varcharStudentMotherAge; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">State</th>
																		<td><?php echo $varcharStudentMotherStatus; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Educational Attainment</th>
																		<td><?php echo $varcharStudentMotherEducation; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Occupation Type</th>
																		<td><?php echo $varcharStudentMotherOccupationType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Occupation</th>
																		<td><?php echo $varcharStudentMotherOccupation; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Employer</th>
																		<td><?php echo $varcharStudentMotherEmployerName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Address of Employer</th>
																		<td><?php echo $varcharStudentMotherEmployerAddress; ?></td> 
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">III. Guardian</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">Name</th>
																		<td><?php echo $varcharStudentGuardianName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Age</th>
																		<td><?php echo $varcharStudentGuardianAge; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Relationship</th>
																		<td><?php echo $varcharStudentGuardianRelation; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Educational Attainment</th>
																		<td><?php echo $varcharStudentGuardianEducation; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Occupation Type</th>
																		<td><?php echo $varcharStudentGuardianOccupationType; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Employer</th>
																		<td><?php echo $varcharStudentGuardianEmployerName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Address of Employer</th>
																		<td><?php echo $varcharStudentGuardianEmployerAddress; ?></td> 
																	</tr>
																	<tr>
																		<td><br></td><td><br></td>
																	</tr>
																	<tr>
																		<th scope="row">Parent's Marital Relationship</th>
																		<td><?php echo $varcharStudentMaritalRelationship; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Number of children in the family including yourself</th>
																		<td><?php echo $varcharStudentNumOfChildren; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Number of Brothers</th>
																		<td><?php echo $varcharStudentNumOfBrother; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Number of Sisters</th>
																		<td><?php echo $varcharStudentNumOfSister; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Number of brothers/sisters gainfully employed</th>
																		<td><?php echo $varcharStudentSiblingsEmployed; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">He/She is providing unto</th>
																		<td><?php echo $varcharStudentSiblingSupporter; ?></td>
																	</tr> 
																	<tr>
																		<th scope="row">Ordinal position</th>
																		<td><?php echo $varcharStudentOrdinalPosition; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Who finances your schooling</th>
																		<td><?php echo $varcharStudentSchoolFinancer; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">How much is your weekly allowance</th>
																		<td><?php echo $varcharStudentWeeklyAllowance; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Parent's total monthly income</th>
																		<td><?php echo $varcharStudentMonthlyIncome; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Has a quite place to study?</th>
																		<td><?php echo $varcharStudentStudyPlace; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Shares a room with someone</th>
																		<td><?php echo $varcharStudentRoomSharing; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Nature of Residence while attending school</th>
																		<td><?php echo $varcharStudentNatureOfResidence; ?></td>
																	</tr>
																</tbody>
															</table>

															<br/>
														</div>
													</li>
												</ul>
												<!-- end recent activity -->
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="home-tab">
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
																		<td><?php echo $varcharStudentVisionProblem; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Hearing</th>
																		<td><?php echo $varcharStudentHearingProblem; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Speach</th>
																		<td><?php echo $varcharStudentSpeechProblem; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Your general health</th>
																		<td><?php echo $varcharStudentGeneralHealth; ?></td>
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
																		<td><?php echo $varcharStudentPsychiatristConsult; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">When</th>
																		<td><?php echo $varcharStudentPsychiatristWhen; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">For What</th>
																		<td><?php echo $varcharStudentPsychiatristReason; ?></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;">Consulted any of the ff</th>
																		<td></td>
																	</tr>
																	<tr>
																		<th scope="row">Psychologist</th>
																		<td><?php echo $varcharStudentPsychologistConsult; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">When</th>
																		<td><?php echo $varcharStudentPsychologistWhen; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">For What</th>
																		<td><?php echo $varcharStudentPsychologistReason; ?></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;">Consulted any of the ff</th>
																		<td></td>
																	</tr>
																	<tr>
																		<th scope="row">Counselor</th>
																		<td><?php echo $varcharStudentCounselorConsult; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">When</th>
																		<td><?php echo $varcharStudentCounselorWhen; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">For What</th>
																		<td><?php echo $varcharStudentCounselorReason; ?></td>
																	</tr>
																</tbody>
															</table>
															<br/>
														</div>
													</li>
												</ul>
												<!-- end recent activity -->
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="home-tab">
												<!-- start recent activity -->
												<ul class="messages">
													<li>
														<div class="message_wrapper">
															<h4 class="heading">I. Academic</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">Club most likely to join</th>
																		<td><?php echo $varcharStudentClubName; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Favorite subjects</th>
																		<td><?php echo $varcharStudentFavSubject; ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Least favorite Subjects</th>
																		<td><?php echo $varcharStudentLeastFavSubject; ?></td>
																	</tr>
																</tbody>
															</table>
															<h4 class="heading">II. Extra-curricular</h4>
															<table class="table">
																<tbody>
																	<tr>
																		<th scope="row" style="width: 400px;">Hobbies according to preference</th>
																		<td></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;">1.</th>
																		<td><?php echo $varcharStudentHobby1; ?></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;">2.</th>
																		<td><?php echo $varcharStudentHobby2; ?></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;">3.</th>
																		<td><?php echo $varcharStudentHobby3; ?></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;"></th>
																		<td><?php echo $varcharStudentHobby4; ?></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;">Organization Interest</th>
																		<td><?php echo $varcharStudentInterestOrganization; ?></td>
																	</tr>
																	<tr>
																		<th scope="row" style="width: 400px;">Organization Position</th>
																		<td><?php echo $varcharStudentOrganizationPosition; ?></td>
																	</tr>
																</tbody>
															</table>
															<br/>
														</div>
													</li>
												</ul>
												<!-- end recent activity -->
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="home-tab">
												<!-- start recent activity -->
												<ul class="messages">
													<li>
														<div class="message_wrapper">

															<h4 class="heading">Test Results</h4>
															<table class="table">
																<?php
																$result6 = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC");
																$i = 0;
																while($res6 = mysqli_fetch_array($result6)){

																	$varcharStudentTestID = $res6['testID'];
																	$varcharStudentTestDate = $res6['testDate'];
																	$varcharStudentTestName = $res6['testName'];
																	$varcharStudentTestRawScore = $res6['testRawScore']; 
																	$varcharStudentTestPercentile = $res6['testPercentile'];
																	$varcharStudentTestDescription = $res6['testDescription'];
																	$i = $i + 1 ;
																	?>
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Test <?php echo $i; ?></th>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">  </th>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">Date</th>
																			<td><?php echo $varcharStudentTestDate; ?></td>
																		</tr>
																		<tr>
																			<th scope="row">Name of Test</th>
																			<td><?php echo $varcharStudentTestName; ?></td>
																		</tr>
																		<tr>
																			<th scope="row">Raw Score</th>
																			<td><?php echo $varcharStudentTestRawScore; ?></td>
																		</tr>
																		<tr>
																			<th scope="row">Percentage Rating</th>
																			<td><?php echo $varcharStudentTestPercentile; ?></td>
																		</tr>
																		<tr>
																			<th scope="row">Description</th>
																			<td><?php echo $varcharStudentTestDescription; ?></td>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">  </th>
																		</tr>
																		<?php
																	}
																	?>
																</tbody>
															</table>
															<br/>
														</div>
													</li>
												</ul>
												<!-- end recent activity -->
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="home-tab">
												<!-- start recent activity -->
												<ul class="messages">
													<li>
														<div class="message_wrapper">

															<h4 class="heading">Significant Notes</h4>
															<table class="table">
																<?php
																$result7 = mysqli_query($connect, "SELECT * FROM tbl_significantnotes INNER JOIN tbl_personalinfo ON tbl_significantnotes.studentNumber = tbl_personalinfo.studentNumber WHERE tbl_personalinfo.studentNumber = '$varcharStudentAccountNumber'");
																$i = 0;
																while($res7 = mysqli_fetch_array($result7)){

																	$varcharStudentNoteID = $res7['noteID'];
																	$varcharStudentNoteDate = $res7['noteDate'];
																	$varcharStudentCategoryID = $res7['categoryID'];
																	$varcharStudentSubCategoryID = $res7['subCategoryID'];
																	$varcharStudentNoteRemarks = $res7['noteRemarks'];
																	$varcharStudentAdminAddedBy = $res7['adminId'];



																	$i = $i + 1 ;
																	?>
																	<tbody>
																		<tr>
																			<th scope="row" style="width: 400px;">Note ID <?php echo $varcharStudentNoteID; ?></th>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">  </th>
																		</tr>
																		<tr>
																			<th scope="row" style="width: 400px;">Date Note Created</th>
																			<td><?php echo $varcharStudentNoteDate; ?></td>
																		</tr>
																		<?php
																		$queryGettingCategoryName = "SELECT * FROM tbl_incidentcategory WHERE `categoryID` = '$varcharStudentCategoryID' ";
																		$resultGettingCategoryName = mysqli_query($connect, $queryGettingCategoryName); 
																		while($res = mysqli_fetch_array($resultGettingCategoryName))  
																		{ 
																			$varcharStudentCategoryName = $res['categoryName'];



																			?>
																			<tr>
																				<th scope="row">Type Of visitation</th>
																				<td><?php echo $varcharStudentCategoryName; ?></td>
																			</tr>
																			<?php
																		}
																		?>
																		<?php
																		$queryGettingSubCategoryName = "SELECT * FROM tbl_incidentsubcategory WHERE `subCategoryID` = '$varcharStudentSubCategoryID' ";
																		$resultGettingSubCategoryName = mysqli_query($connect, $queryGettingSubCategoryName); 
																		while($res2 = mysqli_fetch_array($resultGettingCategoryName))  
																		{ 
																			$varcharStudentSubCategoryName = $res2['subCategoryName'];
																			?>
																			<tr>
																				<th scope="row">Reason for visitation</th>
																				<td><?php echo $varcharStudentSubCategoryName; ?></td>
																			</tr>
																			<?php
																		}
																		?>
																		<tr>
																			<th scope="row">Remarks</th>
																			<td><?php echo $varcharStudentNoteRemarks; ?></td>
																		</tr>
																		<?php
																		$queryGettingAdminID = "SELECT * FROM tbl_adminaccount WHERE `adminId` = '$varcharStudentAdminAddedBy' ";
																		$resultGettingAdminID = mysqli_query($connect, $queryGettingAdminID); 
																		while($res3 = mysqli_fetch_array($resultGettingAdminID))  
																		{ 
																			$varcharStudentAdminFirstName = $res3['adminFirstName']; 
																			$varcharStudentAdminLastName = $res3['adminLastName'];
																			?>
																			<tr>
																				<th scope="row">Added by</th>
																				<td><?php echo $varcharStudentFirstName; ?> <?php echo $varcharStudentLastName; ?> </td>
																			</tr>
																			<?php 
																		}
																		?>
																		<tr>
																			<th scope="row" style="width: 400px;">  </th>
																		</tr>
																		<?php

																	}
																	?>
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