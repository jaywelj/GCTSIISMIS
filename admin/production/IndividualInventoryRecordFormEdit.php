<!DOCTYPE html>
<?php

if(isset($_GET["id"]))
{
	include("connectionString.php");

	$VarcharStudentNumber = $_GET["id"];
	$queryStudentAccount = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$VarcharStudentNumber'";
	$arrayStudentAccount = mysqli_query($connect, $queryStudentAccount);
	while ($res = mysqli_fetch_array($arrayStudentAccount)) {

	}
	$queryPersonalInfo = "SELECT * FROM tbl_personalinfo WHERE studentNumber='$VarcharStudentNumber'";
	$arrayPersonalInfo = mysqli_query($connect, $queryPersonalInfo);
	while ($res = mysqli_fetch_array($arrayPersonalInfo)) {
		$varcharYear= $res['year'];
		$varcharSection = $res['section'];
		$varcharCourse = $res['courseCode'];
		$varcharFirstName = $res['firstName'];
		$varcharMiddleName = $res['middleName'];
		$varcharLastName = $res['lastName'];
		$varcharCourseCode = $res['courseCode'];
		$varcharCollegeCode = $res['collegeCode'];
	}
	?>
	<?php
	$varcharStudentAccountNumber = $_GET['id'];
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
		if(isset($varcharStudentPreSchoolYearAttended))
		{
			$varcharStudentPreSchoolYearAttendedArray = explode('-', $varcharStudentPreSchoolYearAttended);
			$varcharStudentPreSchoolYearAttended1 = $varcharStudentPreSchoolYearAttendedArray[0];
			$varcharStudentPreSchoolYearAttended2 = $varcharStudentPreSchoolYearAttendedArray[1];
		}
		else
		{
			$varcharStudentPreSchoolYearAttended1 = NULL;
			$varcharStudentPreSchoolYearAttended2 = NULL;
		}
		$varcharStudentPreSchoolAwards = $res2point5['prepAwards'];
		$varcharStudentPreSchoolImage = $res2point5['prepImage'];
		$varcharStudentElementarySchoolName = $res2point5['elemSchoolName'];
		$varcharStudentElementarySchoolAddress = $res2point5['elemSchoolAddress'];
		$varcharStudentElementarySchoolType = $res2point5['elemType'];
		$varcharStudentElementarySchoolYearAttended = $res2point5['elemYearAttended'];
		if(isset($varcharStudentElementarySchoolYearAttended)&&($varcharStudentElementarySchoolYearAttended <> ""))
		{
			$varcharStudentElementarySchoolYearAttendedArray = explode('-', $varcharStudentElementarySchoolYearAttended);
			$varcharStudentElementarySchoolYearAttended1 = $varcharStudentElementarySchoolYearAttendedArray[0];
			$varcharStudentElementarySchoolYearAttended2 = $varcharStudentElementarySchoolYearAttendedArray[1];
		}
		else
		{
			$varcharStudentElementarySchoolYearAttended1 = NULL;
			$varcharStudentElementarySchoolYearAttended2 = NULL;
		}
		$varcharStudentElementarySchoolAwards = $res2point5['elemAwards'];
		$varcharStudentELemntarySchoolImage = $res2point5['elemImage'];
		$varcharStudentHSSchoolName = $res2point5['hsSchoolName'];
		$varcharStudentHSSchoolAddress = $res2point5['hsSchoolAddress'];
		$varcharStudentHSSchoolType = $res2point5['hsType'];
		$varcharStudentHSSchoolYearAttended = $res2point5['hsYearAttended'];
		if(isset($varcharStudentHSSchoolYearAttended)&&($varcharStudentHSSchoolYearAttended <> ""))
		{

			$varcharStudentHSSchoolYearAttendedArray = explode('-', $varcharStudentHSSchoolYearAttended);
			$varcharStudentHSSchoolYearAttended1 = $varcharStudentHSSchoolYearAttendedArray[0];
			$varcharStudentHSSchoolYearAttended2 = $varcharStudentHSSchoolYearAttendedArray[1];
		}
		else
		{

			$varcharStudentHSSchoolYearAttended1 = NULL;
			$varcharStudentHSSchoolYearAttended2 = NULL;
		}
		$varcharStudentHSSchoolAwards = $res2point5['hsAwards'];
		$varcharStudentHSSchoolImage = $res2point5['hsImage'];
		$varcharStudentVocationalSchoolName = $res2point5['vocSchoolName'];
		$varcharStudentVocationalSchoolAddress = $res2point5['vocSchoolAddress'];
		$varcharStudentVocationalSchoolType = $res2point5['vocType'];
		$varcharStudentVocationalSchoolYearAttended = $res2point5['vocYearAttended'];
		if(isset($varcharStudentVocationalSchoolYearAttended))
		{

			$varcharStudentVocationalSchoolYearAttendedArray = explode('-', $varcharStudentVocationalSchoolYearAttended);
			$varcharStudentVocationalSchoolYearAttended1 = $varcharStudentVocationalSchoolYearAttendedArray[0];
			$varcharStudentVocationalSchoolYearAttended2 = $varcharStudentVocationalSchoolYearAttendedArray[1];
		}
		else
		{
			$varcharStudentVocationalSchoolYearAttended1 = NULL;
			$varcharStudentVocationalSchoolYearAttended2 = NULL;
		}
		$varcharStudentVocationalAwards = $res2point5['vocAwards'];
		$varcharStudentVocationalImage = $res2point5['vocImage'];
		$varcharStudentCollegeSchoolName = $res2point5['collegeSchoolName'];
		$varcharStudentCollegeSchoolAddress = $res2point5['collegeSchoolAddress'];
		$varcharStudentCollegeSchoolType = $res2point5['collegeType'];
		$varcharStudentCollegeSchoolYearAttended = $res2point5['collegeYearAttended'];
		if(isset($varcharStudentCollegeSchoolYearAttended))
		{
			$varcharStudentCollegeSchoolYearAttendedArray = explode('-', $varcharStudentCollegeSchoolYearAttended);
			$varcharStudentCollegeSchoolYearAttended1 = $varcharStudentCollegeSchoolYearAttendedArray[0];
			$varcharStudentCollegeSchoolYearAttended2 = $varcharStudentCollegeSchoolYearAttendedArray[1];
		}
		else
		{
			$varcharStudentCollegeSchoolYearAttended1 = NULL;
			$varcharStudentCollegeSchoolYearAttended2 = NULL;
		}
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
		// $varcharStudentClubName = $res5['clubName'];
		$varcharClubInterestName = $res5['clubName'];
		$varcharStudentClubNameArray = explode("/", $res5['clubName']);
		$varcharStudentFavSubject = $res5['favSubject'];
		$varcharStudentLeastFavSubject = $res5['leastFavSubject'];
		$varcharStudentHobby1 = $res5['hobby1'];
		$varcharStudentHobby2 = $res5['hobby2'];
		$varcharStudentHobby3 = $res5['hobby3'];
		$varcharStudentHobby4 = $res5['hobby4'];
		$varcharOrgInterestName = $res5['interestOrganization'];
		$varcharStudentInterestOrganizationArray = explode("/",$res5['interestOrganization']);
		$varcharStudentOrganizationPosition = $res5['organizationPosition'];
	}
	$result6 = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC LIMIT 1");
	while($res6 = mysqli_fetch_array($result6)){
		$varcharStudentTestID = $res6['testID'];
		$varcharStudentTestDate = $res6['testDate'];
		$varcharStudentTestName = $res6['testName'];
		$varcharStudentTestRawScore = $res6['testRawScore']; 
		$varcharStudentTestPercentile = $res6['testPercentile'];
		$varcharStudentTestDescription = $res6['testDescription'];
	}
	if($varcharStudentSex == "F"){
		$varcharStudentSexFull = "Female";
	}
	else if($varcharStudentSex == "M"){
		$varcharStudentSexFull = "Male";
	}
	else
		$varcharStudentSexFull = "NULL";
}
else
{
	header("location: Index.php");
}
?>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>IIR Form | OCPS</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
	<!--Form Wizard CSS-->
	<link href="css/wizard/wizard.css" rel="stylesheet">
	<!--Checkbox-->
	<link href="css/checkbox/checkbox.css" rel="stylesheet">
	<!--Noty-->
	<link href="assets/lib/noty.css" rel="stylesheet">
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
							<h3>Manage Individual Inventory Record</h3>
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
									<h2>Individual Inventory Record Form<small></small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="wizard">
									<div class="wizard-inner">
										<div class="connecting-line"></div>
										<ul class="nav nav-tabs" role="tablist">

											<li role="presentation" class="active">
												<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
													<span class="round-tab">
														<i class="glyphicon glyphicon-user"></i>
													</span>
												</a>
											</li>

											<li role="presentation" class="disabled">
												<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
													<span class="round-tab">
														<i class="glyphicon glyphicon-education"></i>
													</span>
												</a>
											</li>
											<li role="presentation" class="disabled">
												<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
													<span class="round-tab">
														<i class="glyphicon glyphicon-home"></i>
													</span>
												</a>
											</li>
											<li role="presentation" class="disabled">
												<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
													<span class="round-tab">
														<i class="glyphicon glyphicon-plus-sign"></i>
													</span>
												</a>
											</li>
											<li role="presentation" class="disabled">
												<a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
													<span class="round-tab">
														<i class="glyphicon glyphicon-star"></i>
													</span>
												</a>
											</li>

											<li role="presentation" class="disabled">
												<a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
													<span class="round-tab">
														<i class="glyphicon glyphicon-list-alt"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
									<form method="post" onsubmit="event.preventDefault();" id="formWizard" name="formWizard" novalidate="">
										<div class="tab-content">
											<div class="tab-pane  active" role="tabpanel" id="step1">
												<h3 class="text-center">Step 1</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> 
														<h1 class="text-center">Personal Information</h1>
													</span>
													<span class="section" style="margin-left:90px;">I. Basic Information</span>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >First Name <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxFirstName" name="txtbxFirstName" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharFirstName; ?>" >
														</div>	
													</div>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3" >Middle Name / Initial</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxMiddleName" name="txtbxMiddleName" value="<?php echo $varcharMiddleName; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Last Name <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxLastName" name="txtbxLastName" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharLastName; ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Gender</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentSexFull == 'Male')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGender" value="M" <?php echo ($varcharStudentSexFull =='Male')?'checked':'' ?>  > Male 
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentSexFull =='Female')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGender" value="F" <?php echo ($varcharStudentSexFull =='Female')?'checked':'' ?>  > Female
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Sexuality(Sexual Orientation)</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownSexuality" id="dropdownSexuality" >
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersSexuality" name="txtbxOthersSexuality" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentSexuality; ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Age</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxAge" name="txtbxAge" value="<?php echo $varcharStudentAge; ?>" >
														</div>
														<label class="control-label col-md-1 col-sm-1">Date Of Birth </label>
														<div class="col-md-3 col-sm-3">
															<input class="date-picker form-control col-md-7 col-xs-12" type="date" id="dateDateOfBirth" name="dateDateOfBirth" value="<?php echo $varcharStudentBirthdate; ?>" >
														</div>  
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Place of Birth</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPlaceOfBirth" name="txtbxPlaceOfBirth" value="<?php echo $varcharStudentBirthplace; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownCivilStatus" id="dropdownCivilStatus" >
																<option value="Single">Single</option>
																<option value="Married">Married</option>
																<option value="Separated">Separated</option>
																<option value="Widowed">Widowed</option>
																<option value="Others">Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span ></span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersCivilStatus" name="txtbxOthersCivilStatus" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentCivilStatus; ?>"  >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownReligion" id="dropdownReligion" >
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersReligion" name="txtbxOthersReligion" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentReligion; ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Height</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHeight" name="txtbxHeight" value="<?php echo $varcharStudentHeight;  ?>" >
														</div>
														<label class="control-label col-md-1 col-sm-1">Weight</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxWeight" name="txtbxWeight" value="<?php echo $varcharStudentWeight;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Complexion</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownComplexion" id="dropdownComplexion" >
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersComplexion" name="txtbxOthersComplexion" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentComplexion; ?>" >
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Student Information</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Student Number</label>
														<div class="col-md-6 col-sm-6">
															<input readonly="" class="form-control col-md-7 col-xs-12" type="text" id="txtbxStudentNumber" name="txtbxStudentNumber" value="<?php echo $VarcharStudentNumber; ?>">
														</div>
													</div>

													<div class="item form-group">
														<?php
														// php select option value from database
														include("connectionString.php");

														// mysql select query
														$queryCourse2 = "SELECT * FROM tbl_course";

														// for method 1/
														$resultCourse2 = mysqli_query($connect, $queryCourse2);

														?>
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Course</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
														<select  name="selectStudentCourse" id="selectStudentCourse" class="form-control" >
															<option value="NULL" selected>Select A Course</option>
															<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
																<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
															<?php endwhile;?>
														</select>
													</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxYear" name="txtbxYear" value="<?php echo $varcharStudentYear; ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Section</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxSection" name="txtbxSection" value="<?php echo $varcharStudentSection; ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Highschool General Average</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHSGWA" name="txtbxHSGWA" value="<?php echo $varcharStudentHSGWA;  ?>" >
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. Contact Informaltion</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">City Address</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" id="dropdownCityAddress" name="dropdownCityAddress" >
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
														<label class="control-label col-md-3 col-sm-3">City: House Number</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCityHouseNumber" name="txtbxCityHouseNumber" value="<?php echo $varcharStudentCityHouseNumber;  ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">City: Barangay</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCityBarangay" name="txtbxCityBarangay" value="<?php echo $varcharStudentCityBarangay;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Provincial Address</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" id="dropdownProvincialAddress" name="dropdownProvincialAddress" >
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
														<label class="control-label col-md-3 col-sm-3">Province: House Number</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceHouseNumber" name="txtbxProvinceHouseNumber" value="<?php echo $varcharStudentProvinceHouseNumber;  ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">Province: Barangay</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceBarangay" name="txtbxProvinceBarangay" value="<?php echo $varcharStudentProvinceBarangay;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Province: Municipality/City</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceCity" name="txtbxProvinceCity" value="<?php echo $varcharStudentProvinceCity;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Email Address</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="email" id="txtbxEmailAddress" name="txtbxEmailAddress" value="<?php echo $varcharStudentEmail;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Mobile Number</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxMobileNum" name="txtbxMobileNum" value="<?php echo $varcharStudentMobileNum;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Tel. Number</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxTelNum" name="txtbxTelNum" value="<?php echo $varcharStudentTelNum;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Who to contact in case of emergency?</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonName" name="txtbxContactPersonName" value="<?php echo $varcharStudentContactPersonName;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Contact Person Address</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonAddress" name="txtbxContactPersonAddress" value="<?php echo $varcharStudentContactPersonAdress;  ?>" >
														</div>
													</div>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Person Relationship</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownContactPersonRelationship" id="dropdownContactPersonRelationship" >
																<option value="Parent">Parent</option>
																<option value="Brother/Sister<">Brother/Sister</option>
																<option value="Aunt/Uncle">Aunt/Uncle</option>
																<option value="Relatives">Relatives</option>
																<option value="Grandparents">Grandparents</option>
																<option value="Land lady">Land lady</option>
																<option value="Step-Mother/Step-Father">Step-Mother/Step-Father</option>
																<option value="Others">Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxContactPersonOthersRelationship" id="txtbxContactPersonOthersRelationship" value="<?php echo $varcharStudentContactPersonRelationship; ?>" >
														</div>
													</div>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Contact Person Contact Number</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonNumber" name="txtbxContactPersonNumber" value="<?php echo $varcharStudentContactPersonContactNumber;  ?>" >
														</div>
													</div>	

													<span class="section" style="margin-left:90px;">IV. If You Are Working</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Name Of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxNameOfEmployer" name="txtbxNameOfEmployer" value="<?php echo $varcharStudentEmployerName;  ?>" > 
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Address Of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxAddressOfEmployer" name="txtbxAddressOfEmployer" value="<?php echo $varcharStudentEmployerAddress;  ?>" >
														</div>
													</div>
													

												</div>
												<ul class="list-inline pull-right">
													<li><button type="submit" class="btn btn-primary next-step">Save and continue</button></li>

												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step2">
												<h3 class="text-center">Step 2</h3>

												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Educational Background</h1></span>
													<span class="section" style="margin-left:90px;">I. Pre-elementary</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >School Graduated <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxPreElemSchoolGraduated" name="txtbxPreElemSchoolGraduated" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentPreSchoolName;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >School Address <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxPreElemSchoolAddress" name="txtbxPreElemSchoolAddress" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentPreSchoolAddress;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentPreSchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPreElemTypeOfSchool" value="Public" <?php echo ($varcharStudentPreSchoolType =='Public')?'checked':'' ?>> Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentPreSchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPreElemTypeOfSchool" value="Private" <?php echo ($varcharStudentPreSchoolType =='Private')?'checked':'' ?>> Private
																</label>
																<input type="radio" name="radioPreElemTypeOfSchool" value=NULL style="display: none;">
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPreElemYearAttended1" name="txtbxPreElemYearAttended1" value="<?php echo $varcharStudentPreSchoolYearAttended1;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPreElemYearAttended2" name="txtbxPreElemYearAttended2" value="<?php echo $varcharStudentPreSchoolYearAttended2;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxPreElemHonors" id="txtbxPreElemHonors" value="<?php echo $varcharStudentPreSchoolAwards;  ?>">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Elementary</span>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Graduated <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxElementarySchoolGraduated" name="txtbxElementarySchoolGraduated" value="<?php echo $varcharStudentElementarySchoolName;  ?> " >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text"  class="form-control col-md-7 col-xs-12" id="txtbxElementarySchoolAddress" name="txtbxElementarySchoolAddress" value="<?php echo $varcharStudentElementarySchoolAddress;  ?>" > 
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3" >Type of School<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentElementarySchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioElementaryTypeOfSchool" value="Public" <?php echo ($varcharStudentElementarySchoolType =='Public')?'checked':'' ?> > Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentElementarySchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioElementaryTypeOfSchool" value="Private" <?php echo ($varcharStudentElementarySchoolType =='Private')?'checked':'' ?> > Private
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxElementaryYearAttended1" name="txtbxElementaryYearAttended1" value="<?php echo $varcharStudentElementarySchoolYearAttended1;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxElementaryYearAttended2" name="txtbxElementaryYearAttended2" value="<?php echo $varcharStudentElementarySchoolYearAttended2;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxElementaryHonors" id="txtbxElementaryHonors" value="<?php echo $varcharStudentElementarySchoolAwards;  ?>">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. High School</span>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3" >School Graduated <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxHighschoolSchoolGraduated" name="txtbxHighschoolSchoolGraduated" value="<?php echo $varcharStudentHSSchoolName;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxHighschoolSchoolAddress" name="txtbxHighschoolSchoolAddress" value="<?php echo $varcharStudentHSSchoolAddress;  ?> " > 
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentHSSchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHighschoolTypeOfSchool" value="Public" <?php echo ($varcharStudentHSSchoolType =='Public')?'checked':'' ?> > Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentHSSchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHighschoolTypeOfSchool" value="Private" <?php echo ($varcharStudentHSSchoolType =='Private')?'checked':'' ?> > Private
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHighschoolYearAttended1" name="txtbxHighschoolYearAttended1" value="<?php echo $varcharStudentHSSchoolYearAttended1;  ?>" > 
														</div>
														<label class="control-label col-md-1 col-sm-1">To Year</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHighschoolYearAttended2" name="txtbxHighschoolYearAttended2" value="<?php echo $varcharStudentHSSchoolYearAttended2;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxHighschoolHonors" id="txtbxHighschoolHonors" value="<?php echo $varcharStudentHSSchoolAwards;  ?>">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">IV. Vocational</span>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3" >School Graduated <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVocationalSchoolGraduated" id="txtbxVocationalSchoolGraduated" value="<?php echo $varcharStudentVocationalSchoolName;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVocationalSchoolAddress" id="txtbxVocationalSchoolAddress" value="<?php echo $varcharStudentVocationalSchoolAddress;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentVocationalSchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVocationalTypeOfSchool" value="Public" <?php echo ($varcharStudentVocationalSchoolType =='Public')?'checked':'' ?>> Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentVocationalSchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVocationalTypeOfSchool" value="Private" <?php echo ($varcharStudentVocationalSchoolType =='Private')?'checked':'' ?>> Private
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxVocationalYearAttended1" name="txtbxVocationalYearAttended1" value="<?php echo $varcharStudentVocationalSchoolYearAttended1;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxVocationalYearAttended2" name="txtbxVocationalYearAttended2" value="<?php echo $varcharStudentVocationalSchoolYearAttended2;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxVocationalHonors" id="txtbxVocationalHonors" value="<?php echo $varcharStudentVocationalAwards ;  ?>">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">V. College</span>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Graduated <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxCollegeSchoolGraduated" id="txtbxCollegeSchoolGraduated" value="<?php echo $varcharStudentCollegeSchoolName;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxCollegeSchoolAddress" id="txtbxCollegeSchoolAddress" value="<?php echo $varcharStudentCollegeSchoolAddress;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Type of School<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentCollegeSchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCollegeTypeOfSchool" value="Public" <?php echo ($varcharStudentCollegeSchoolType =='Private')?'checked':'' ?>> Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentCollegeSchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCollegeTypeOfSchool" value="Private" <?php echo ($varcharStudentCollegeSchoolType =='Private')?'checked':'' ?>> Private
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCollegeYearAttended1" name="txtbxCollegeYearAttended1" value="<?php echo $varcharStudentCollegeSchoolYearAttended1;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCollegeYearAttended2" name="txtbxCollegeYearAttended2" value="<?php echo $varcharStudentCollegeSchoolYearAttended2;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxCollegeHonors" id="txtbxCollegeHonors" value="<?php echo $varcharStudentCollegeSchoolAwards;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Nature of schooling<span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<div class="btn-group" data-toggle="buttons" >
																<label class="btn btn-default <?php echo ($varcharStudentNatureOfSchooling =='Continuous')?'active':''?>" data-toggle-class="btn-primary " style="padding-left: 22px; padding-right:22px;" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioNatureOfSchooling" id="radioNatureOfSchooling" value="Continuous" <?php echo ($varcharStudentNatureOfSchooling =='Continuous')?'checked':''?>> Continuous
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentNatureOfSchooling =='Interrupted')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" style="padding-left: 23px; padding-right:23px;">
																	<input type="radio" name="radioNatureOfSchooling" id="radioNatureOfSchooling" value="Interrupted" <?php echo ($varcharStudentNatureOfSchooling =='Interrupted')?'checked':''; ?> > Interrupted
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">If interrupted, why?</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxNatureOfSchoolingInterruptedReason" id="txtbxNatureOfSchoolingInterruptedReason" value="<?php echo $varcharStudentInterruptedWhy;  ?>" <?php echo ($varcharStudentNatureOfSchooling =='Continuous')?'disabled':''; ?>>
														</div>
													</div>
												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="submit" class="btn btn-primary next-step">Save and continue</button></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step3">
												<h3 class="text-center">Step 3</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Home and Family Background</h1></span>
													<span class="section" style="margin-left:90px;">I. Mother</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherName" name="txtbxMotherName" value="<?php echo $varcharStudentMotherName;  ?>">
														</div>

													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age <span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherAge" id="txtbxMotherAge" value="<?php echo $varcharStudentMotherAge;  ?>"> 
														</div>
														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-default <?php echo ($varcharStudentMotherStatus =='Living')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioMotherState" value="Living" <?php echo ($varcharStudentMotherStatus =='Living')?'checked':'' ?>> Living 
															</label>
															<label class="btn btn-default <?php echo ($varcharStudentMotherStatus =='Deceased')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioMotherState" value="Deceased" <?php echo ($varcharStudentMotherStatus =='Deceased')?'checked':'' ?>> Deceased
															</label>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownMotherEducationalAttainment" id="dropdownMotherEducationalAttainment">
																<option >Elementary Undergraduate</option>
																<option >Elementary graduate</option>
																<option >High School Undergraduate</option>
																<option >High School Graduate</option>
																<option >College undergraduate</option>
																<option >Vocational Graduate</option>
																<option >Masteral Unit</option>
																<option >Doctoral Degree</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
														<div class="col-md-2 col-sm-2 col-xs-12">
															<select class="select2_group form-control" name="dropdownMotherOccupationType" id="dropdownMotherOccupationType" ="">
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed">Unemployed</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Occupation:<span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherOccupation" id="txtbxMotherOccupation" value="<?php echo $varcharStudentMotherOccupation;  ?>" >
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherNameOfEmployer" id="txtbxMotherNameOfEmployer" value="<?php echo $varcharStudentMotherEmployerName;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherAddressOfEmployer" id="txtbxMotherAddressOfEmployer" value="<?php echo $varcharStudentMotherEmployerAddress;  ?>">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Father</span>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherName" id="txtbxFatherName" value="<?php echo $varcharStudentFatherName;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age <span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherAge" id="txtbxFatherAge" value="<?php echo $varcharStudentFatherAge;  ?>">
														</div>
														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-default <?php echo ($varcharStudentFatherStatus =='Living')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioFatherState" value="Living" <?php echo ($varcharStudentFatherStatus =='Living')?'checked':'' ?>> Living 
															</label>
															<label class="btn btn-default <?php echo ($varcharStudentFatherStatus =='Deceased')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioFatherState" value="Deceased" <?php echo ($varcharStudentFatherStatus =='Deceased')?'checked':'' ?>> Deceased
															</label>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownFatherEducationalAttainment" id="dropdownFatherEducationalAttainment">
																<option >Elementary Undergraduate</option>
																<option >Elementary graduate</option>
																<option >High School Undergraduate</option>
																<option >High School Graduate</option>
																<option >College undergraduate</option>
																<option >Vocational Graduate</option>
																<option >Masteral Unit</option>
																<option >Doctoral Degree</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
														<div class="col-md-2 col-sm-2 col-xs-12">
															<select class="select2_group form-control" name="dropdownFatherOccupationType" id="dropdownFatherOccupationType">
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed">Unemployed</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Occupation:<span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherOccupation" id="txtbxFatherOccupation" value="<?php echo $varcharStudentFatherOccupation ; ?>">
														</div>
													</div> 
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherNameOfEmployer" id="txtbxFatherNameOfEmployer" value="<?php echo $varcharStudentFatherEmployerName; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherAddressOfEmployer" id="txtbxFatherAddressOfEmployer" value="<?php echo $varcharStudentFatherEmployerAddress; ?>">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. Guardian</span>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianName" id="txtbxGuardianName" value="<?php echo $varcharStudentGuardianName; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianAge" id="txtbxGuardianAge" value="<?php echo $varcharStudentGuardianAge; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Relationship</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownGuardianRelationship" id="dropdownGuardianRelationship">
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuaridanOthersRelationship" id="txtbxGuaridanOthersRelationship" value="<?php echo $varcharStudentGuardianRelation; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownGuardianEducationalAttainment" id="dropdownGuardianEducationalAttainment">
																<option >Elementary Undergraduate</option>
																<option >Elementary graduate</option>
																<option >High School Undergraduate</option>
																<option >High School Graduate</option>
																<option >College undergraduate</option>
																<option >Vocational Graduate</option>
																<option >Masteral Unit</option>
																<option >Doctoral Degree</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
														<div class="col-md-2 col-sm-2 col-xs-12">
															<select class="select2_group form-control" name="dropdownGuardianOccupationType" id="dropdownGuardianOccupationType">
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed">Unemployed</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Occupation:<span class="">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianOccupation" id="txtbxGuardianOccupation" value="<?php echo $varcharStudentFatherOccupation; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianNameOfEmployer" id="txtbxGuardianNameOfEmployer" value="<?php echo $varcharStudentFatherEmployerName; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianAddressOfEmployer" id="txtbxGuardianAddressOfEmployer" value="<?php echo $varcharStudentFatherEmployerAddress; ?>">
														</div>
													</div>
													<br>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's Marital RelationShip</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownParentsMaritalRelationship" id="dropdownParentsMaritalRelationship">
																<option value="Married and staying together">Married and staying together</option>
																<option value="ot married but living together">Not married but living together</option>
																<option value="Single Parent">Single Parent</option>
																<option value="Married but separated">Married but separated</option>
																<option value="Others">Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span ></span></label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersParentsMaritalRelationship" id="txtbxOthersParentsMaritalRelationship" value="<?php echo $varcharStudentMaritalRelationship; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Number of children in the family including yourself</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfChildrenInTheFamily" id="txtbxNoOfChildrenInTheFamily" value="<?php echo $varcharStudentNumOfChildren; ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">Brothers</label>
														<div class="col-md-1 col-sm-1">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfBrothers" id="txtbxNoOfBrothers" value="<?php echo $varcharStudentNumOfBrother; ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">Sisters</label>
														<div class="col-md-1 col-sm-1">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfSisters" id="txtbxNoOfSisters" value="<?php echo $varcharStudentNumOfSister; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Number of brother/s sisters gainfully employed</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfBrothersSistersGainfullyEmployed" id="txtbxNoOfBrothersSistersGainfullyEmployed" value="<?php echo $varcharStudentSiblingsEmployed; ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1 col-xs-12">Ordinal Position</label>
														<div class="col-md-3 col-sm-3 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownOrdinalPosition" id="dropdownOrdinalPosition">
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
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"> Is your brother/sister who's gainfully employed providing support to : <span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownSupportedByYourSibling" id="dropdownSupportedByYourSibling">
																<option >Your Studies</option>
																<option >Your Family</option>
																<option >His/Her Family</option>
																<option >Does Not Give Support</option>
																<option >Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span ></span></label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersSupportedByYourSibling" id="txtbxOthersSupportedByYourSibling" value="<?php echo $varcharStudentSiblingSupporter; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Who finance your schooling?</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownWhoFinancesYourSchooling" id="dropdownWhoFinancesYourSchooling">
																<option >Parents</option>
																<option >Brother/Sister</option>
																<option >Spouse</option>
																<option >Scholarship</option>
																<option >Relatives</option>
																<option >Self-supporting/Working student</option>
																<option >Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span ></span></label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersWhoFinancesYourSchooling" id="txtbxOthersWhoFinancesYourSchooling" value="<?php echo $varcharStudentSchoolFinancer; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >How much is your weekly allowance<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="number" class="form-control col-md-7 col-xs-12" name="txtbxWeeklyAllowance" id="txtbxWeeklyAllowance" value="<?php echo $varcharStudentWeeklyAllowance; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's monthly income</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" name="dropdownParentsMonthlyIncome" id="dropdownParentsMonthlyIncome" tabindex="-1">
																<option >Below average</option>
																<option >Average</option>
																<option >Above average</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you have a quite place to study?<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default<?php echo ($varcharStudentStudyPlace =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioQuietPlaceToSTudy" value="Yes" <?php echo ($varcharStudentStudyPlace =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentStudyPlace =='No')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioQuietPlaceToSTudy" value="No" <?php echo ($varcharStudentStudyPlace =='No')?'checked':'' ?>> No
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you share your room with anyone?<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentRoomSharing <> 'No')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioShareRoom" id="radioShareRoom" value="Yes" <?php echo ($varcharStudentRoomSharing <> 'No')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentRoomSharing =='No')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioShareRoom" id="radioShareRoom" value="No" <?php echo ($varcharStudentRoomSharing =='No')?'checked':'' ?>> No
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >If yes with whom?<span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxWithWhom" id="txtbxWithWhom">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Nature of residence while attending school</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownNatureOfResidence" id="dropdownNatureOfResidence">
																<option >Family home</option>
																<option >Relative's house</option>
																<option >Shares apartment with friends</option>
																<option >Shares apartment with relatives</option>
																<option >Bed spacer</option>
																<option >Rented apartment</option>
																<option >Dorm</option>
																<option >Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span ></span></label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersNatureOfResidence" id="txtbxOthersNatureOfResidence" value="<?php echo $varcharStudentNatureOfResidence ; ?>">
														</div>
													</div>

												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="submit" class="btn btn-primary next-step">Save and continue</button></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step4">
												<h3 class="text-center">Step 4</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Health Background</h1></span>
													<span class="section" style="margin-left:90px;">I. Physical</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you have problems with:
														</label>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Vision<span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentVisionProblem <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVision" value="Yes" <?php echo ($varcharStudentVisionProblem <> "")?'checked':'' ?>>Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentVisionProblem =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVision" value="" checked="" <?php echo ($varcharStudentVisionProblem =='')?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVision" id="txtbxVision" value="<?php echo $varcharStudentVisionProblem ; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Hearing<span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentHearingProblem <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHearing" value="Yes"<?php echo ($varcharStudentHearingProblem <> "")?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentHearingProblem =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHearing" value="" <?php echo ($varcharStudentHearingProblem =='')?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHearing" id="txtbxHearing" value=<?php echo $varcharStudentHearingProblem ; ?>>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Speach<span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentSpeechProblem <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioSpeach" value="Yes" <?php echo ($varcharStudentSpeechProblem <> "")?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentSpeechProblem =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioSpeach" value="" <?php echo ($varcharStudentSpeechProblem =='')?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxSpeach" id="txtbxSpeach" value=<?php echo $varcharStudentSpeechProblem; ?>>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your General Health<span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentGeneralHealth <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGeneralHealth" value="Yes" <?php echo ($varcharStudentGeneralHealth <> "")?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentGeneralHealth =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGeneralHealth" value="" <?php echo ($varcharStudentGeneralHealth =='')?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGeneralHealth" id="txtbxGeneralHealth" value="<?php echo $varcharStudentGeneralHealth; ?>">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Psychological</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Psychiatrist<span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentPsychiatristConsult =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychiatrist" id="radioPsychiatrist" value="Yes" <?php echo ($varcharStudentPsychiatristConsult =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentPsychiatristConsult =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychiatrist" id="radioPsychiatrist" value="" <?php echo ($varcharStudentPsychiatristConsult =='')?'checked':'' ?>> Never
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When <span class="">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="datePsychiatrist" id="datePsychiatrist" value="<?php echo $varcharStudentPsychiatristWhen; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what? <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatPsychiatrist" id="txtareaForWhatPsychiatrist"><?php echo $varcharStudentPsychiatristReason; ?></textarea>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Psychologist<span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentPsychologistConsult =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychologist" id="radioPsychologist" value="Yes" <?php echo ($varcharStudentPsychologistConsult =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentPsychologistConsult =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychologist" id="radioPsychologist" value="" <?php echo ($varcharStudentPsychologistConsult =='')?'checked':'' ?>> Never
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When <span class="">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="datePsychologist" id="datePsychologist" value="<?php echo $varcharStudentPsychologistWhen; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what? <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatPsychologist" id="txtareaForWhatPsychologist" ><?php echo $varcharStudentPsychologistReason; ?></textarea>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Counselor<span class="">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentCounselorConsult =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCounselor" id="radioCounselor" value="Yes" <?php echo ($varcharStudentCounselorConsult =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentCounselorConsult =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCounselor" id="radioCounselor" value="" <?php echo ($varcharStudentCounselorConsult =='')?'checked':'' ?>> Never
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When <span class="">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="dateCounselor" id="dateCounselor" value="<?php echo $varcharStudentCounselorWhen; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what? <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatCounselor" id="txtareaForWhatCounselor" ><?php echo $varcharStudentCounselorReason; ?></textarea>
														</div>
													</div>
												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="submit" class="btn btn-primary next-step">Save and continue</button></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step5">
												<h3 class="text-center">Step 5</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Interest and Hobbies</h1></span>
													<span class="section" style="margin-left:90px;">I. Academic</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Club Interests</label>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice1" value="Math Club" <?php if(in_array("Math Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Math Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice2" value="Science Club" <?php if(in_array("Science Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Science Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice3" value="English Club" <?php if(in_array("English Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">English Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice4" value="Filipino Club" <?php if(in_array("Filipino Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>><span class="label-text">Filipino Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice5" value="Astronomy Club" <?php if(in_array("Astronomy Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Astronomy Club</span>
															</label><br>
														</div>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice6" value="Quizzers Club" <?php if(in_array("Quizzers Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Quizzers Club</span> 
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice7" value="Social Studies Club" <?php if(in_array("Social Studies Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Social Studies Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice8" value='Statistics Club' <?php if(in_array("Statistics Club",$varcharStudentClubNameArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Statistics Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterestOthers" id="checkClubOthers" value="Others" > <span class="label-text">Others</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterestNoInterest" id="checkClubNoInterest" name="No Interest"> <span class="label-text">No Interest</span>
															</label><br>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Others, please specify: <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersClubInterest" id="txtbxOthersClubInterest">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >What is/are you favorite subject/s <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaFavoriteSubject" id="txtareaFavoriteSubject" ><?php echo $varcharStudentFavSubject; ?></textarea>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >What is/are your least favorite subject <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaLeastFavoriteSubject" id="txtareaLeastFavoriteSubject" ><?php echo $varcharStudentLeastFavSubject; ?></textarea>
														</div>
													</div>
													<span class="section" style="margin-left:90px;">Ii. Extra-Culicular</span>
													<div class="item form-group">
														<label class="control-label col-md-4 col-sm-4"  >Hobbies (according to preference) <span class="">*</span>
														</label>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >1. <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby1" id="txtbxHobby1" value="<?php echo $varcharStudentHobby1; ?>">
														</div>
													</div><div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >2. <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby2" id="txtbxHobby2" value="<?php echo $varcharStudentHobby2; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >3. <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby3" id="txtbxHobby3" value="<?php echo $varcharStudentHobby3; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >4. <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby4" id="txtbxHobby4" value="<?php echo $varcharStudentHobby4; ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Organization Interests</label>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice1" value="Athlectics" <?php if(in_array("Athlectics",$varcharStudentInterestOrganizationArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Athletics</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice2" value="Dramatics" <?php if(in_array("Dramatics",$varcharStudentInterestOrganizationArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Dramatics</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice3" value="Religious Organization" <?php if(in_array("Religious Organization",$varcharStudentInterestOrganizationArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Religious Org</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice5" value="Glee Club" <?php if(in_array("Glee Club",$varcharStudentInterestOrganizationArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">Glee Club</span>
															</label><br>
														</div>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice6" value="Scouting" <?php if(in_array("Scouting",$varcharStudentInterestOrganizationArray)) { ?> checked="checked" <?php } ?>> <span class="label-text" >Scouting</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice4" value="Chess Club" <?php if(in_array("Chess Club",$varcharStudentInterestOrganizationArray)) { ?> checked="checked" <?php } ?>><span class="label-text">Chess Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterestOthers" id="checkOrganizationOthers" value="Others"> <span class="label-text">Others</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterestNoInterest" id="checkOrganizationNoInterest" value="No Interest" <?php if(in_array("No Interest",$varcharStudentInterestOrganizationArray)) { ?> checked="checked" <?php } ?>> <span class="label-text">No Interest</span>
															</label><br>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Others, please specify: <span class="">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersOrganizationInterest" id="txtbxOthersOrganizationInterest">
														</div>
													</div>
												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="submit" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="complete">
												<h3 class="text-center">Step 6</h3>
												<div class="form-horizontal form-label-left">
													<?php
													$i = 0;
													$resultTest = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC");
													$noOfTestResults = mysqli_num_rows($resultTest);
													echo "<script>var formCount = '$noOfTestResults'</script>";
													while($resu = mysqli_fetch_array($resultTest)){

														$i ++ ;

														echo '


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
														</div>';
													}
													?>
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
									</form>
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
			<div id="insertphp"></div>
			
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
		<script src="../build/js/custom.js"></script>
		<!-- validator -->
		<script src="../vendors/validator/validator.js"></script>
		<!-- Form Wizard JS -->
		<script src="js/wizard/wizard.js"></script>
		<!-- Dynamic Form  -->
		<script src="js/dynamicForm/dynamicForm.js"></script>
		<!-- Noty -->
		<script src="assets/lib/noty.js" type="text/javascript"></script>
		<!-- mo.js -->
		<script src="assets/lib/mo.min.js" type="text/javascript"></script>
		<!-- custom noty -->
		<script src="assets/lib/custom.js" type="text/javascript"></script>



		<script>
			$(function(){
				$('#dropdownSexuality').change(function() {
					var dropdownSexualityChoice = $(this).val();
					if( dropdownSexualityChoice == 'Others')
					{
						document.getElementById("txtbxOthersSexuality").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersSexuality").disabled = true;
						document.getElementById("txtbxOthersSexuality").value = "";
					}

				})
				$('#dropdownCivilStatus').change(function() {
					var dropdownCivilStatus = $(this).val();
					if( dropdownCivilStatus == 'Others')
					{
						document.getElementById("txtbxOthersCivilStatus").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersCivilStatus").disabled = true;
						document.getElementById("txtbxOthersCivilStatus").value = "";
					}

				})
				$('#dropdownNatureOfResidence').change(function() {
					var dropdownNatureOfResidence = $(this).val();
					if( dropdownNatureOfResidence == 'Others')
					{
						document.getElementById("txtbxOthersNatureOfResidence").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersNatureOfResidence").disabled = true;
						document.getElementById("txtbxOthersNatureOfResidence").value = "";
					}
				})
				$('#dropdownReligion').change(function() {
					var dropdownReligion = $(this).val();
					if( dropdownReligion == 'Others')
					{
						document.getElementById("txtbxOthersReligion").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersReligion").disabled = true;
						document.getElementById("txtbxOthersReligion").value = "";
					}

				})
				$('#dropdownComplexion').change(function() {
					var dropdownComplexion = $(this).val();
					if( dropdownComplexion == 'Others')
					{
						document.getElementById("txtbxOthersComplexion").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersComplexion").disabled = true;
						document.getElementById("txtbxOthersComplexion").value = "";
					}
				})
				$('input[name="radioNatureOfSchooling"]').change(function() {
					var radioNatureOfSchooling = $(this).val();
					if( radioNatureOfSchooling == 'Interrupted')
					{
						document.getElementById("txtbxNatureOfSchoolingInterruptedReason").disabled = false;
					}
					else
					{
						document.getElementById("txtbxNatureOfSchoolingInterruptedReason").disabled = true;
						document.getElementById("txtbxNatureOfSchoolingInterruptedReason").value = "";
					}
				})
				$('#dropdownMotherOccupationType').change(function() {
					if( $(this).val() == 'Unemployed' || $(this).val() == 'Self-Employed')
					{
						document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
						document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
						document.getElementById("txtbxMotherNameOfEmployer").value = "";
						document.getElementById("txtbxMotherAddressOfEmployer").value = "";
					}
					else
					{
						document.getElementById("txtbxMotherNameOfEmployer").disabled = false;
						document.getElementById("txtbxMotherAddressOfEmployer").disabled = false;
					}
				})
				$('#dropdownFatherOccupationType').change(function() {
					if( $(this).val() == 'Unemployed' || $(this).val() == 'Self-Employed')
					{
						document.getElementById("txtbxFatherNameOfEmployer").disabled = true;
						document.getElementById("txtbxFatherAddressOfEmployer").disabled = true;
						document.getElementById("txtbxFatherNameOfEmployer").value = "";
						document.getElementById("txtbxFatherAddressOfEmployer").value = "";
					}
					else
					{
						document.getElementById("txtbxFatherNameOfEmployer").disabled = false;
						document.getElementById("txtbxFatherAddressOfEmployer").disabled = false;
					}
				})
				$('#dropdownGuardianOccupationType').change(function() {
					if( $(this).val() == 'Unemployed' || $(this).val() == 'Self-Employed')
					{
						document.getElementById("txtbxGuardianNameOfEmployer").disabled = true;
						document.getElementById("txtbxGuardianAddressOfEmployer").disabled = true;
						document.getElementById("txtbxGuardianNameOfEmployer").value = "";
						document.getElementById("txtbxGuardianAddressOfEmployer").value = "";
					}
					else
					{
						document.getElementById("txtbxGuardianNameOfEmployer").disabled = false;
						document.getElementById("txtbxGuardianAddressOfEmployer").disabled = false;
					}
				})
				$('#dropdownGuardianRelationship').change(function() {
					if( $(this).val() == 'Others')
					{
						document.getElementById("txtbxGuaridanOthersRelationship").disabled = false;
					}
					else
					{
						document.getElementById("txtbxGuaridanOthersRelationship").disabled = true;
						document.getElementById("txtbxGuaridanOthersRelationship").value = "";
					}
				})
				$('#dropdownContactPersonRelationship').change(function() {
					if( $(this).val() == 'Others')
					{
						document.getElementById("txtbxContactPersonOthersRelationship").disabled = false;
					}
					else
					{
						document.getElementById("txtbxContactPersonOthersRelationship").disabled = true;
						document.getElementById("txtbxContactPersonOthersRelationship").value = "";
					}
				})
				$('#dropdownSupportedByYourSibling').change(function() {
					if( $(this).val() == 'Others')
					{
						document.getElementById("txtbxOthersSupportedByYourSibling").disabled = false;
					}
					else
					{
						alert('troo');
						document.getElementById("txtbxOthersSupportedByYourSibling").disabled = true;
						document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
					}
				})
				$('#dropdownParentsMaritalRelationship').change(function() {
					if( $(this).val() == 'Others')
					{
						document.getElementById("txtbxOthersParentsMaritalRelationship").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersParentsMaritalRelationship").disabled = true;
						document.getElementById("txtbxOthersParentsMaritalRelationship").value = "";
					}
				})
				$('#txtbxNoOfChildrenInTheFamily').change(function() {
					if( $(this).val() < 2)
					{
						document.getElementById("txtbxNoOfBrothers").disabled = true;
						document.getElementById("txtbxNoOfSisters").disabled = true;
						document.getElementById("txtbxNoOfBrothers").value = 0;
						document.getElementById("txtbxNoOfSisters").value = 0;
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").value = 0;
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").disabled = true;
						document.getElementById("dropdownSupportedByYourSibling").value = "Others";
						document.getElementById("dropdownOrdinalPosition").value = "Only Child";
						document.getElementById("dropdownOrdinalPosition").disabled = "true"
						document.getElementById("dropdownSupportedByYourSibling").disabled = "true";
						document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
					}
					else
					{
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").disabled = false;
						document.getElementById("txtbxNoOfBrothers").disabled = false;
						document.getElementById("txtbxNoOfSisters").disabled = false;
						document.getElementById("dropdownOrdinalPosition").disabled= false;
					}
				})
				$('#txtbxNoOfBrothersSistersGainfullyEmployed').change(function() {
					if( $(this).val() < 1)
					{
						document.getElementById("dropdownSupportedByYourSibling").disabled= true;
						document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
						document.getElementById("txtbxOthersSupportedByYourSibling").disabled = true;
					}
					else
					{
						document.getElementById("dropdownSupportedByYourSibling").disabled= false;
						document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
						document.getElementById("txtbxOthersSupportedByYourSibling").disabled = false;
					}
				})
				$('#dropdownWhoFinancesYourSchooling').change(function() {
					if( $(this).val() == 'Others')
					{
						document.getElementById("txtbxOthersWhoFinancesYourSchooling").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersWhoFinancesYourSchooling").disabled = true;
						document.getElementById("txtbxOthersWhoFinancesYourSchooling").value = "";
					}
				})
				$('input[name="radioShareRoom"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxWithWhom").disabled = false;
					}
					else
					{
						document.getElementById("txtbxWithWhom").disabled = true;
						document.getElementById("txtbxWithWhom").value = "";
					}
				})
				$('input[name="radioVision"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxVision").disabled = false;
						document.getElementById("txtbxVision").value = "";

					}
					else
					{
						document.getElementById("txtbxVision").disabled = true;
						document.getElementById("txtbxVision").value = "";
					}
				})
				$('input[name="radioHearing"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxHearing").disabled = false;
						document.getElementById("txtbxHearing").value = "";
					}
					else
					{
						document.getElementById("txtbxHearing").disabled = true;
						document.getElementById("txtbxHearing").value = "";
					}
				})
				$('input[name="radioSpeach"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxSpeach").disabled = false;
						document.getElementById("txtbxSpeach").value = "";
					}
					else
					{
						document.getElementById("txtbxSpeach").disabled = true;
						document.getElementById("txtbxSpeach").value = "";
					}
				})
				$('input[name="radioGeneralHealth"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxGeneralHealth").disabled = false;
						document.getElementById("txtbxGeneralHealth").value = "";
					}
					else
					{
						document.getElementById("txtbxGeneralHealth").disabled = true;
						document.getElementById("txtbxGeneralHealth").value = "";
					}
				})
				$('input[name="radioPsychiatrist"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("datePsychiatrist").disabled = false;
						document.getElementById("txtareaForWhatPsychiatrist").disabled = false;
					}
					else
					{
						document.getElementById("datePsychiatrist").disabled = true;
						document.getElementById("txtareaForWhatPsychiatrist").disabled = true;
						document.getElementById("datePsychiatrist").value = "";
						document.getElementById("txtareaForWhatPsychiatrist").value = "";
					}
				})
				$('input[name="radioPsychologist"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("datePsychologist").disabled = false;
						document.getElementById("txtareaForWhatPsychologist").disabled = false;
					}
					else
					{
						document.getElementById("datePsychologist").disabled = true;
						document.getElementById("txtareaForWhatPsychologist").disabled = true;
						document.getElementById("datePsychologist").value = "";
						document.getElementById("txtareaForWhatPsychologist").value = "";
					}
				})
				$('input[name="radioCounselor"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("dateCounselor").disabled = false;
						document.getElementById("txtareaForWhatCounselor").disabled = false;
					}
					else
					{
						document.getElementById("dateCounselor").disabled = true;
						document.getElementById("txtareaForWhatCounselor").disabled = true;
						document.getElementById("dateCounselor").value = "";
						document.getElementById("txtareaForWhatCounselor").value = "";
					}
				})
				$('#checkClubOthers').click(function() {
					if($("#checkClubOthers").is(":checked")){
						document.getElementById("txtbxOthersClubInterest").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersClubInterest").disabled = true;
						document.getElementById("txtbxOthersClubInterest").value = "";
					}
				})
				$('#checkClubNoInterest').click(function() {
					if($("#checkClubNoInterest").is(":checked")){
						document.getElementById("txtbxOthersClubInterest").disabled = true;
						document.getElementById("checkClubChoice1").disabled = true;
						document.getElementById("checkClubChoice2").disabled = true;
						document.getElementById("checkClubChoice3").disabled = true;
						document.getElementById("checkClubChoice4").disabled = true;
						document.getElementById("checkClubChoice5").disabled = true;
						document.getElementById("checkClubChoice6").disabled = true;
						document.getElementById("checkClubChoice7").disabled = true;
						document.getElementById("checkClubChoice8").disabled = true;
						document.getElementById("checkClubOthers").disabled = true;
						document.getElementById("txtbxOthersClubInterest").value="";
					}
					else
					{
						document.getElementById("txtbxOthersClubInterest").disabled = false;
						document.getElementById("checkClubChoice1").disabled = false;
						document.getElementById("checkClubChoice2").disabled = false;
						document.getElementById("checkClubChoice3").disabled = false;
						document.getElementById("checkClubChoice4").disabled = false;
						document.getElementById("checkClubChoice5").disabled = false;
						document.getElementById("checkClubChoice6").disabled = false;
						document.getElementById("checkClubChoice7").disabled = false;
						document.getElementById("checkClubChoice8").disabled = false;
						document.getElementById("checkClubOthers").disabled = false;
						if($("#checkClubOthers").is(":checked"))
						{
							document.getElementById("txtbxOthersClubInterest").disabled = false;
						}
						else
						{
							document.getElementById("txtbxOthersClubInterest").disabled = true;
							document.getElementById("txtbxOthersClubInterest").value="";
						}
					}
					$('#checkClubOthers').click(function() {
						if($("#checkClubOthers").is(":checked")){
							document.getElementById("txtbxOthersClubInterest").disabled = false;
						}
						else
						{
							document.getElementById("txtbxOthersClubInterest").disabled = true;
							document.getElementById("txtbxOthersClubInterest").value="";
						}
					})
				})
				$('#checkOrganizationOthers').click(function() {
					if($("#checkOrganizationOthers").is(":checked")){
						document.getElementById("txtbxOthersOrganizationInterest").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersOrganizationInterest").disabled = true;
						document.getElementById("txtbxOthersOrganizationInterest").value="";
					}
				})    
				$('#checkOrganizationNoInterest').click(function() {
					if($("#checkOrganizationNoInterest").is(":checked")){
						document.getElementById("txtbxOthersOrganizationInterest").disabled = true;
						document.getElementById("checkOrganizationChoice1").disabled = true;
						document.getElementById("checkOrganizationChoice2").disabled = true;
						document.getElementById("checkOrganizationChoice3").disabled = true;
						document.getElementById("checkOrganizationChoice4").disabled = true;
						document.getElementById("checkOrganizationChoice5").disabled = true;
						document.getElementById("checkOrganizationChoice6").disabled = true;
						document.getElementById("checkOrganizationOthers").disabled = true;
						document.getElementById("txtbxOthersOrganizationInterest").value="";
					}
					else
					{
						document.getElementById("txtbxOthersOrganizationInterest").disabled = false;
						document.getElementById("checkOrganizationChoice1").disabled = false;
						document.getElementById("checkOrganizationChoice2").disabled = false;
						document.getElementById("checkOrganizationChoice3").disabled = false;
						document.getElementById("checkOrganizationChoice4").disabled = false;
						document.getElementById("checkOrganizationChoice5").disabled = false;
						document.getElementById("checkOrganizationChoice6").disabled = false;
						document.getElementById("checkOrganizationOthers").disabled = false;
						if($("#checkOrganizationOthers").is(":checked")){
							document.getElementById("txtbxOthersOrganizationInterest").disabled = false;
						}
						else
						{
							document.getElementById("txtbxOthersOrganizationInterest").disabled = true;
							document.getElementById("txtbxOthersOrganizationInterest").value="";
						}
					}
				})
				//var temp="<?php echo $varcharStudentSexuality;?>"; 
				//$("#dropdownSexuality").val(temp);
				//var temp="<?php echo $varcharStudentCivilStatus;?>"; 
				//$("#dropdownCivilStatus").val(temp);
				//var temp="<?php echo $varcharStudentReligion;?>"; 
				//$("#dropdownReligion").val(temp);
				// var temp="<?php echo $varcharStudentComplexion;?>"; 
				// $("#dropdownComplexion").val(temp);
				// var temp="<?php echo $varcharStudentCityCity;?>"; 
				// $("#dropdownCityAddress").val(temp);
				// var temp="<?php echo $varcharStudentProvinceCity;?>"; 
				// $("#dropdownProvincialAddress").val(temp);
				// var temp="<?php echo $varcharStudentContactPersonRelationship;?>"; 
				// $("#dropdownContactPersonRelationship").val(temp);
				var temp="<?php echo $varcharStudentMotherEducation;?>"; 
				$("#dropdownMotherEducationalAttainment").val(temp);
				var temp="<?php echo $varcharStudentMotherOccupationType;?>"; 
				$("#dropdownMotherOccupationType").val(temp);
				var temp="<?php echo $varcharStudentFatherEducation;?>"; 
				$("#dropdownFatherEducationalAttainment").val(temp);
				var temp="<?php echo $varcharStudentFatherOccupationType?>"; 
				$("#dropdownFatherOccupationType").val(temp);
				var temp="<?php echo $varcharStudentGuardianRelation?>"; 
				$("#dropdownGuardianRelationship").val(temp);
				var temp="<?php echo $varcharStudentGuardianEducation?>"; 
				$("#dropdownGuardianEducationalAttainment").val(temp);
				var temp="<?php echo $varcharStudentGuardianOccupationType?>"; 
				$("#dropdownGuardianOccupationType").val(temp);
				var temp="<?php echo $varcharStudentMonthlyIncome ?>"; 
				$("#dropdownParentsMonthlyIncome").val(temp);
				var temp="<?php echo $varcharStudentNatureOfResidence ?>"; 
				$("#dropdownNatureOfResidence").val(temp);
				var temp="<?php echo $varcharStudentCourse ?>"; 
				$("#selectStudentCourse").val(temp);

				$("#dropdownSexuality").val('Others');
				$('#dropdownSexuality option').each(function(){
					if (this.value == "<?php echo $varcharStudentSexuality;?>") {
						document.getElementById('txtbxOthersSexuality').disabled="true";
						document.getElementById('txtbxOthersSexuality').value="";
						$("#dropdownSexuality").val(this.value);
					}
				});
				$("#dropdownCivilStatus").val('Others');
				$('#dropdownCivilStatus option').each(function(){
					if (this.value == "<?php echo $varcharStudentCivilStatus;?>") {
						document.getElementById('txtbxOthersCivilStatus').disabled="true";
						document.getElementById('txtbxOthersCivilStatus').value="";
						$("#dropdownCivilStatus").val(this.value);
					}
				});
				$("#dropdownComplexion").val('Others');
				$('#dropdownComplexion option').each(function(){
					if (this.value == "<?php echo $varcharStudentComplexion;?>") {
						document.getElementById('txtbxOthersComplexion').disabled="true";
						document.getElementById('txtbxOthersComplexion').value="";
						$("#dropdownComplexion").val(this.value);
					}
				});
				$("#dropdownReligion").val('Others');
				$('#dropdownReligion option').each(function(){
					if (this.value == "<?php echo $varcharStudentReligion;?>") {
						document.getElementById('txtbxOthersReligion').disabled="true";
						document.getElementById('txtbxOthersReligion').value="";
						$("#dropdownReligion").val(this.value);
					}
				});
				$("#dropdownContactPersonRelationship").val('Others');
				$('#dropdownContactPersonRelationship option').each(function(){
					if (this.value == "<?php echo $varcharStudentContactPersonRelationship;?>") {
						document.getElementById('txtbxContactPersonOthersRelationship').disabled="true";
						document.getElementById('txtbxContactPersonOthersRelationship').value="";
						$("#dropdownContactPersonRelationship").val(this.value);
					}
				});
				if ( "<?php echo $varcharStudentMotherOccupationType;?>" == "Unemployed" || "<?php echo $varcharStudentMotherOccupationType;?>" == "Self-Employed") {
					document.getElementById('txtbxMotherNameOfEmployer').disabled = "true";
					document.getElementById('txtbxMotherAddressOfEmployer').disabled = "true";
					document.getElementById('txtbxMotherNameOfEmployer').value="";
					document.getElementById('txtbxMotherAddressOfEmployer').value="";
				}
				if ( "<?php echo $varcharStudentFatherOccupationType;?>" == "Unemployed" || "<?php echo $varcharStudentFatherOccupationType;?>" == "Self-Employed") {
					document.getElementById('txtbxFatherNameOfEmployer').disabled = "true";
					document.getElementById('txtbxFatherAddressOfEmployer').disabled = "true";
					document.getElementById('txtbxFatherNameOfEmployer').value="";
					document.getElementById('txtbxFatherAddressOfEmployer').value="";
				}
				if ( "<?php echo $varcharStudentGuardianOccupationType;?>" == "Unemployed" || "<?php echo $varcharStudentGuardianOccupationType;?>" == "Self-Employed") {
					document.getElementById('txtbxGuardianNameOfEmployer').disabled = "true";
					document.getElementById('txtbxGuardianAddressOfEmployer').disabled = "true";
					document.getElementById('txtbxGuardianNameOfEmployer').value="";
					document.getElementById('txtbxGuardianAddressOfEmployer').value="";
				}
				// if ( <?php echo $varcharStudentNumOfChildren; ?> < 2) {
				// 	document.getElementById("txtbxNoOfBrothers").disabled = true;
				// 	document.getElementById("txtbxNoOfSisters").disabled = true;
				// 	document.getElementById("txtbxNoOfBrothers").value = 0;
				// 	document.getElementById("txtbxNoOfSisters").value = 0;
				// 	document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").value = 0;
				// 	document.getElementById("dropdownSupportedByYourSibling").value = "Others";
				// 	document.getElementById("dropdownOrdinalPosition").value = "Only Child";
				// 	document.getElementById("dropdownOrdinalPosition").disabled="true";
				// 	document.getElementById("dropdownSupportedByYourSibling").disabled="true";
				// 	document.getElementById("txtbxOthersSupportedByYourSibling").disabled = false;
				// }
				// else
				// {
				// 	var temp="<?php echo $varcharStudentOrdinalPosition ?>"; 
				// 	$("#dropdownOrdinalPosition").val(temp);
				// }
				if( "<?php echo $varcharStudentNumOfChildren; ?>" < 2)
				{
					document.getElementById("txtbxNoOfBrothers").disabled = true;
					document.getElementById("txtbxNoOfSisters").disabled = true;
					document.getElementById("txtbxNoOfBrothers").value = 0;
					document.getElementById("txtbxNoOfSisters").value = 0;
					document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").value = 0;
					document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").disabled = true;
					document.getElementById("dropdownSupportedByYourSibling").value = "Others";
					document.getElementById("dropdownOrdinalPosition").value = "Only Child";
					document.getElementById("dropdownOrdinalPosition").disabled = "true"
					document.getElementById("dropdownSupportedByYourSibling").disabled = "true";
					document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
				}
				else
				{
					document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").disabled = false;
					document.getElementById("txtbxNoOfBrothers").disabled = false;
					document.getElementById("txtbxNoOfSisters").disabled = false;
					document.getElementById("dropdownOrdinalPosition").disabled= false;
				}
				if( "<?php echo $varcharStudentSiblingsEmployed; ?>" < 1)
				{
					document.getElementById("dropdownSupportedByYourSibling").disabled= true;
					document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
					document.getElementById("txtbxOthersSupportedByYourSibling").disabled = true;
				}
				else
				{
					document.getElementById("dropdownSupportedByYourSibling").disabled= false;
					document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
					document.getElementById("txtbxOthersSupportedByYourSibling").disabled = false;
				}

				$("#dropdownGuardianRelationship").val('Others');
				$('#dropdownGuardianRelationship option').each(function(){
					if (this.value == "<?php echo $varcharStudentGuardianRelation;?>") {
						document.getElementById('txtbxGuaridanOthersRelationship').disabled="true";
						document.getElementById('txtbxGuaridanOthersRelationship').value = "";
						$("#dropdownGuardianRelationship").val(this.value);
					}
				});
				$("#dropdownParentsMaritalRelationship").val('Others');
				$('#dropdownParentsMaritalRelationship option').each(function(){
					if (this.value == "<?php echo $varcharStudentMaritalRelationship;?>") {
						document.getElementById('txtbxOthersParentsMaritalRelationship').disabled="true";
						document.getElementById('txtbxOthersParentsMaritalRelationship').value="";
						$("#dropdownParentsMaritalRelationship").val(this.value);
					}
				});
				$("#dropdownSupportedByYourSibling").val('Others');
				$('#dropdownSupportedByYourSibling option').each(function(){
					if (this.value == "<?php echo $varcharStudentSiblingSupporter;?>") {
						alert('true');
						document.getElementById('txtbxOthersSupportedByYourSibling').disabled="true";
						document.getElementById('txtbxOthersSupportedByYourSibling').value="";
						$("#dropdownSupportedByYourSibling").val(this.value);
					}
				});
				$("#dropdownWhoFinancesYourSchooling").val('Others');
				$('#dropdownWhoFinancesYourSchooling option').each(function(){
					if (this.value == "<?php echo $varcharStudentSchoolFinancer;?>") {
						document.getElementById('txtbxOthersWhoFinancesYourSchooling').disabled="true";
						document.getElementById('txtbxOthersWhoFinancesYourSchooling').value="";
						$("#dropdownWhoFinancesYourSchooling").val(this.value);
					}
				});
				$("#dropdownNatureOfResidence").val('Others');
				$('#dropdownNatureOfResidence option').each(function(){
					if (this.value == "<?php echo $varcharStudentNatureOfResidence;?>") 
					{
						document.getElementById('txtbxOthersNatureOfResidence').disabled="true";
						document.getElementById('txtbxOthersNatureOfResidence').value="";
						$("#dropdownNatureOfResidence").val(this.value);
					}
				});
				if ("<?php echo $varcharStudentRoomSharing?>" == "No") 
				{
					document.getElementById('txtbxWithWhom').disabled="true";
					document.getElementById('txtbxWithWhom').value="";
				}
				if ("<?php echo $varcharStudentHearingProblem?>" == "") 
				{
					document.getElementById('txtbxHearing').disabled="true";
					document.getElementById('txtbxHearing').value="";
				}
				if ("<?php echo $varcharStudentVisionProblem?>" == "") 
				{
					document.getElementById('txtbxVision').disabled="true";
					document.getElementById('txtbxVision').value="";
				}
				if ("<?php echo $varcharStudentSpeechProblem?>" == "") 
				{
					document.getElementById('txtbxSpeach').disabled="true";
					document.getElementById('txtbxSpeach').value="";
				}
				if ("<?php echo $varcharStudentGeneralHealth?>" == "") 
				{
					document.getElementById('txtbxGeneralHealth').disabled="true";
					document.getElementById('txtbxGeneralHealth').value="";
				}
				if("<?php echo $varcharStudentPsychiatristConsult;?>" == "")
				{
					document.getElementById('datePsychiatrist').disabled = "true";
					document.getElementById('datePsychiatrist').value = "";
					document.getElementById('txtareaForWhatPsychiatrist').disabled = "true";
					document.getElementById('txtareaForWhatPsychiatrist').value = "";
				}
				if("<?php echo $varcharStudentCounselorConsult;?>" == "")
				{
					document.getElementById('dateCounselor').disabled = "true";
					document.getElementById('dateCounselor').value = "";
					document.getElementById('txtareaForWhatCounselor').disabled = "true";
					document.getElementById('txtareaForWhatCounselor').value = "";
				}
				if("<?php echo $varcharStudentPsychologistConsult;?>" == "")
				{
					document.getElementById('datePsychologist').disabled = "true";
					document.getElementById('datePsychologist').value = "";
					document.getElementById('txtareaForWhatPsychologist').disabled = "true";
					document.getElementById('txtareaForWhatPsychologist').value = "";
				}
				var purge = 0; 
				var clubInterestArray = "<?php echo $varcharClubInterestName?>";
				var clubInterestArray = clubInterestArray.split("/");
				var tags = document.getElementsByName('checkClubInterest[]');
				for (var i = 0; i < clubInterestArray.length; i++) {
					purge = 0;
					for(var j = 0; j < tags.length; j++){
						if(clubInterestArray[i] == tags[j].value){
							var purge = 1;
						}
					}
					if(purge == 0){
						otherClubInterest = clubInterestArray[i];
					}
				}
				if(otherClubInterest == "No Interest")
				{
					document.getElementById("checkClubNoInterest").checked="true";
					document.getElementById("txtbxOthersClubInterest").disabled = true;
					document.getElementById("checkClubChoice1").disabled = true;
					document.getElementById("checkClubChoice2").disabled = true;
					document.getElementById("checkClubChoice3").disabled = true;
					document.getElementById("checkClubChoice4").disabled = true;
					document.getElementById("checkClubChoice5").disabled = true;
					document.getElementById("checkClubChoice6").disabled = true;
					document.getElementById("checkClubChoice7").disabled = true;
					document.getElementById("checkClubChoice8").disabled = true;
					document.getElementById("checkClubOthers").disabled = true;
					document.getElementById("txtbxOthersClubInterest").value="";
				}
				else 
				{
					if(otherClubInterest != "")
					{
						document.getElementById("checkClubOthers").checked = true;
						document.getElementById("txtbxOthersClubInterest").disabled = false	;
						document.getElementById("txtbxOthersClubInterest").value=otherClubInterest;
					}
					else
					{
						document.getElementById("txtbxOthersClubInterest").disabled = true	;
					}
				}
				var purge = 0; 
				var orgInterestArray = "<?php echo $varcharOrgInterestName?>";
				var orgInterestArray = orgInterestArray.split("/");
				var tags = document.getElementsByName('checkOrganizationInterest[]');
				for (var i = 0; i < orgInterestArray.length; i++) 
				{
					purge = 0;
					for(var j = 0; j < tags.length; j++)
					{
						if(orgInterestArray[i] == tags[j].value)
						{
							var purge = 1;
						}
					}
					if(purge == 0)
					{
						otherOrgInterest = orgInterestArray[i];
					}
				}
				if(otherOrgInterest == "No Interest")
				{
					document.getElementById("checkOrganizationNoInterest").checked="true";
					document.getElementById("txtbxOthersOrganizationInterest").disabled = true;
					document.getElementById("checkOrganizationChoice1").disabled = true;
					document.getElementById("checkOrganizationChoice2").disabled = true;
					document.getElementById("checkOrganizationChoice3").disabled = true;
					document.getElementById("checkOrganizationChoice4").disabled = true;
					document.getElementById("checkOrganizationChoice5").disabled = true;
					document.getElementById("checkOrganizationChoice6").disabled = true;
					document.getElementById("checkOrganizationOthers").disabled = true;
					document.getElementById("txtbxOthersOrganizationInterest").value="";
				}	
				else 
				{
					if(otherOrgInterest != "")
					{
						document.getElementById("checkOrganizationOthers").checked = "true";
						document.getElementById("txtbxOthersOrganizationInterest").disabled = false;
						document.getElementById("txtbxOthersOrganizationInterest").value=otherOrgInterest;
					}	
					else
					{
						document.getElementById("txtbxOthersOrganizationInterest").disabled = true;
					}
				}
			});

		</script>
	</body>
	</html>