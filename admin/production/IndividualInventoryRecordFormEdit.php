<!DOCTYPE html>
<?php
include("errorReport.php");
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
		if($varcharStudentBirthdate == "0")
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

	<link rel="shortcut icon" href="assets/img/GCTS LOGO1.png">
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
														<label class="control-label col-md-3 col-sm-3">First Name <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxFirstName" name="txtbxFirstName" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharFirstName; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required">
														</div>	
													</div>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3" >Middle Name</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxMiddleName" name="txtbxMiddleName" value="<?php echo $varcharMiddleName; ?>" data-max-words="2" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" optional="optional">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Last Name <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxLastName" name="txtbxLastName" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharLastName; ?>" data-max-words="2" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Gender</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentSexFull == 'Male')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGender" id="radioMale" value="M" <?php echo ($varcharStudentSexFull =='Male')?'checked':'' ?> required > Male 
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentSexFull =='Female')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGender" id="radioFemale" value="F" <?php echo ($varcharStudentSexFull =='Female')?'checked':'' ?> required > Female
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Sexuality(Sexual Orientation) <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownSexuality" id="dropdownSexuality" required="required">
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
														<label class="control-label col-md-1 col-sm-1"  >Others:
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersSexuality" name="txtbxOthersSexuality" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentSexuality; ?>" data-max-words="1" style="text-transform:capitalize;" pattern="^[A-Za-z]+$"  required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Date Of Birth <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="date-picker form-control col-md-7 col-xs-12" type="date" id="dateDateOfBirth" name="dateDateOfBirth" value="<?php echo $varcharStudentBirthdate; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Age</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxAge" name="txtbxAge" value="<?php echo $varcharStudentAge; ?>" readonly="readonly" required="required" placeholder="Invalid Date of Birth" data-validate-minmax="13,115">
														</div>  
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Place of Birth</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPlaceOfBirth" name="txtbxPlaceOfBirth" value="<?php echo $varcharStudentBirthplace; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownCivilStatus" id="dropdownCivilStatus" >
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
															<input type="text" id="txtbxOthersCivilStatus" name="txtbxOthersCivilStatus" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentCivilStatus; ?>" data-max-words="1" style="text-transform:capitalize;" pattern="^[A-Za-z]+$"  required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Religion <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownReligion" id="dropdownReligion" >
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
														<label class="control-label col-md-1 col-sm-1"  >Others:</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersReligion" name="txtbxOthersReligion" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentReligion; ?>"  style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z()-:',.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Height(cm)</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxHeight" name="txtbxHeight" value="<?php echo $varcharStudentHeight;  ?>" data-validate-minmax="50,300">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Weight(kg)</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxWeight" name="txtbxWeight" value="<?php echo $varcharStudentWeight;  ?>" data-validate-minmax="1,500">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Complexion</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownComplexion" id="dropdownComplexion">
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
														<label class="control-label col-md-1 col-sm-1"  >Others:
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersComplexion" name="txtbxOthersComplexion" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentComplexion; ?>" style="text-transform:capitalize;" pattern="^[A-Za-z()-:',.\s]+$"  required="required">
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
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Course <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select required="required" name="selectStudentCourse" id="selectStudentCourse" class="form-control" >
																<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
																	<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
																<?php endwhile;?>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Year <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxYear" name="txtbxYear" value="<?php echo $varcharStudentYear; ?>"  required="required" data-validate-minmax="1,5">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Section <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxSection" name="txtbxSection" value="<?php echo $varcharStudentSection; ?>" style="text-transform:uppercase;" pattern="^[\u00F1A-Za-z0-9]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Highschool General Average</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxHSGWA" name="txtbxHSGWA" value="<?php echo $varcharStudentHSGWA;  ?>" data-validate-minmax="1,100" step=".25">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. Contact Informaltion</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">City Address</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" id="dropdownCityAddress" name="dropdownCityAddress">
																<option>None</option>
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
														<label class="control-label col-md-3 col-sm-3 col-xs-12">City: House Number</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCityHouseNumber" name="txtbxCityHouseNumber" value="<?php echo $varcharStudentCityHouseNumber;  ?>" style="text-transform:uppercase;" pattern="^[\u00F1A-Za-z0-9-]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">City: Barangay</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCityBarangay" name="txtbxCityBarangay" value="<?php echo $varcharStudentCityBarangay;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Provincial Address</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" id="dropdownProvincialAddress" name="dropdownProvincialAddress" >
																<option>None</option>
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
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceHouseNumber" name="txtbxProvinceHouseNumber" value="<?php echo $varcharStudentProvinceHouseNumber;  ?>" style="text-transform:uppercase;" pattern="^[\u00F1A-Za-z0-9-]+$" disabled="true">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Province: Barangay</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceBarangay" name="txtbxProvinceBarangay" value="<?php echo $varcharStudentProvinceBarangay;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$" disabled="true">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Province: Municipality/City</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceCity" name="txtbxProvinceCity" value="<?php echo $varcharStudentProvinceCity;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-.'()\s]+$" disabled="true">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Email Address <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="email" id="txtbxEmailAddress" name="txtbxEmailAddress" value="<?php echo $varcharStudentEmail;  ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Mobile No.</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="tel" id="txtbxMobileNum" name="txtbxMobileNum" value="<?php echo $varcharStudentMobileNum;  ?>" pattern="(0)(9)[0-9]{9}" placeholder="09XXXXXXXXX" maxlength="11">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Telephone No.</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="tel" id="txtbxTelNum" name="txtbxTelNum" value="<?php echo $varcharStudentTelNum;  ?>" pattern="[0-9]{2}[0-9]{7}" placeholder="XXXXXXXXX" maxlength="9">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Who to contact in case of emergency? <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonName" name="txtbxContactPersonName" value="<?php echo $varcharStudentContactPersonName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Contact Person Address <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonAddress" name="txtbxContactPersonAddress" value="<?php echo $varcharStudentContactPersonAdress;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Person Relationship <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownContactPersonRelationship" id="dropdownContactPersonRelationship" >
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
														<label class="control-label col-md-1 col-sm-1"  >Others:</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxContactPersonOthersRelationship" id="txtbxContactPersonOthersRelationship" value="<?php echo $varcharStudentContactPersonRelationship; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z()-:',.\s]+$" required="required">
														</div>
													</div>

													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Contact Person Contact Number <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="tel" id="txtbxContactPersonNumber" name="txtbxContactPersonNumber" value="<?php echo $varcharStudentContactPersonContactNumber;  ?>" pattern="((0)(9)[0-9]{9})||([0-9]{2}[0-9]{7})" placeholder="Mobile No: 09XXXXXXXXX/Telephone No: XXXXXXXXX" maxlength="11" required="required">
														</div>
													</div>

													<span class="section" style="margin-left:90px;">IV. If You Are Working</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Name Of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxNameOfEmployer" name="txtbxNameOfEmployer" value="<?php echo $varcharStudentEmployerName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$"> 
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Address Of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxAddressOfEmployer" name="txtbxAddressOfEmployer" value="<?php echo $varcharStudentEmployerAddress;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
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
														<label class="control-label col-md-3 col-sm-3"  >School Graduated <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxPreElemSchoolGraduated" name="txtbxPreElemSchoolGraduated" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentPreSchoolName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-.'(),\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >School Address</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxPreElemSchoolAddress" name="txtbxPreElemSchoolAddress" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentPreSchoolAddress;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentPreSchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPreElemTypeOfSchool" id="radioPreElemTypeOfSchoolPub" value="Public" <?php echo ($varcharStudentPreSchoolType =='Public')?'checked':'' ?>> Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentPreSchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPreElemTypeOfSchool" id="radioPreElemTypeOfSchoolPri" value="Private" <?php echo ($varcharStudentPreSchoolType =='Private')?'checked':'' ?>> Private
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxPreElemYearAttended1" name="txtbxPreElemYearAttended1" value="<?php echo $varcharStudentPreSchoolYearAttended1;  ?>" required="required" data-validate-minmax="1960,2050">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxPreElemYearAttended2" name="txtbxPreElemYearAttended2" value="<?php echo $varcharStudentPreSchoolYearAttended2;  ?>" required="required" data-validate-minmax="1961,2050">
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
														<label class="control-label col-md-3 col-sm-3">School Graduated <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxElementarySchoolGraduated" name="txtbxElementarySchoolGraduated" value="<?php echo $varcharStudentElementarySchoolName;  ?> " style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-.'(),\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address</label>
														<div class="col-md-6 col-sm-6">
															<input type="text"  class="form-control col-md-7 col-xs-12" id="txtbxElementarySchoolAddress" name="txtbxElementarySchoolAddress" value="<?php echo $varcharStudentElementarySchoolAddress;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3" >Type of School <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentElementarySchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioElementaryTypeOfSchool" id="radioElementaryTypeOfSchoolPub" value="Public" <?php echo ($varcharStudentElementarySchoolType =='Public')?'checked':'' ?> > Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentElementarySchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioElementaryTypeOfSchool" id="radioElementaryTypeOfSchoolPri" value="Private" <?php echo ($varcharStudentElementarySchoolType =='Private')?'checked':'' ?> > Private
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxElementaryYearAttended1" name="txtbxElementaryYearAttended1" value="<?php echo $varcharStudentElementarySchoolYearAttended1;  ?>" required="required" data-validate-minmax="1961,2050">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxElementaryYearAttended2" name="txtbxElementaryYearAttended2" value="<?php echo $varcharStudentElementarySchoolYearAttended2;  ?>" required="required" data-validate-minmax="1967,2050">
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
														<label class="control-label col-md-3 col-sm-3" >School Graduated <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxHighschoolSchoolGraduated" name="txtbxHighschoolSchoolGraduated" value="<?php echo $varcharStudentHSSchoolName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-.'(),\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxHighschoolSchoolAddress" name="txtbxHighschoolSchoolAddress" value="<?php echo $varcharStudentHSSchoolAddress;  ?> " style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$"> 
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentHSSchoolType =='Public')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHighschoolTypeOfSchool" id="radioHighschoolTypeOfSchoolPub" value="Public" <?php echo ($varcharStudentHSSchoolType =='Public')?'checked':'' ?>> Public
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentHSSchoolType =='Private')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHighschoolTypeOfSchool" id="radioHighschoolTypeOfSchoolPri" value="Private" <?php echo ($varcharStudentHSSchoolType =='Private')?'checked':'' ?>> Private
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">From Year <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxHighschoolYearAttended1" name="txtbxHighschoolYearAttended1" value="<?php echo $varcharStudentHSSchoolYearAttended1;  ?>" required="required" data-validate-minmax="1967,2050">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxHighschoolYearAttended2" name="txtbxHighschoolYearAttended2" value="<?php echo $varcharStudentHSSchoolYearAttended2;  ?>"required="required" data-validate-minmax="1971,2050">
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
														<label class="control-label col-md-3 col-sm-3" >School Graduated
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVocationalSchoolGraduated" id="txtbxVocationalSchoolGraduated" value="<?php echo $varcharStudentVocationalSchoolName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-.'(),\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVocationalSchoolAddress" id="txtbxVocationalSchoolAddress" value="<?php echo $varcharStudentVocationalSchoolAddress;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3" >Type of School</label>
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
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxVocationalYearAttended1" name="txtbxVocationalYearAttended1" value="<?php echo $varcharStudentVocationalSchoolYearAttended1;  ?>" data-validate-minmax="1971,2050">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12 " type="number" id="txtbxVocationalYearAttended2" name="txtbxVocationalYearAttended2" value="<?php echo $varcharStudentVocationalSchoolYearAttended2;  ?>" data-validate-minmax="1973,2050">
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
														<label class="control-label col-md-3 col-sm-3">School Graduated</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxCollegeSchoolGraduated" id="txtbxCollegeSchoolGraduated" value="<?php echo $varcharStudentCollegeSchoolName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-.'(),\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">School Address
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxCollegeSchoolAddress" id="txtbxCollegeSchoolAddress" value="<?php echo $varcharStudentCollegeSchoolAddress;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Type of School</label>
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
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxCollegeYearAttended1" name="txtbxCollegeYearAttended1" value="<?php echo $varcharStudentCollegeSchoolYearAttended1;  ?>" data-validate-minmax="1971,2050">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">To Year</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxCollegeYearAttended2" name="txtbxCollegeYearAttended2" value="<?php echo $varcharStudentCollegeSchoolYearAttended2;  ?>" data-validate-minmax="1973,2050">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxCollegeHonors" id="txtbxCollegeHonors" value="<?php echo $varcharStudentCollegeSchoolAwards;  ?>">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Nature of Schooling <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<div class="btn-group" data-toggle="buttons" >
																<label class="btn btn-default <?php echo ($varcharStudentNatureOfSchooling =='Continuous')?'active':''?>" data-toggle-class="btn-primary " style="padding-left: 22px; padding-right:22px;" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioNatureOfSchooling" id="radioNatureOfSchoolingC" value="Continuous" <?php echo ($varcharStudentNatureOfSchooling =='Continuous')?'checked':''?>> Continuous
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentNatureOfSchooling =='Interrupted')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" style="padding-left: 23px; padding-right:23px;">
																	<input type="radio" name="radioNatureOfSchooling" id="radioNatureOfSchoolingI" value="Interrupted" <?php echo ($varcharStudentNatureOfSchooling =='Interrupted')?'checked':''; ?> > Interrupted
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">If interrupted, why?</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxNatureOfSchoolingInterruptedReason" id="txtbxNatureOfSchoolingInterruptedReason" value="<?php echo $varcharStudentInterruptedWhy;  ?>" <?php echo ($varcharStudentNatureOfSchooling =='Continuous')?'disabled':''; ?> requried="required">
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
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxMotherName" name="txtbxMotherName" value="<?php echo $varcharStudentMotherName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required">
														</div>

													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age</label>
														<div class="col-md-3 col-sm-3">
															<input type="number" class="form-control col-md-7 col-xs-12" name="txtbxMotherAge" id="txtbxMotherAge" value="<?php echo $varcharStudentMotherAge;  ?>" data-validate-minmax="18,123">
														</div>
														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-default <?php echo ($varcharStudentMotherStatus =='Living')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input checked="checked" type="radio" name="radioMotherState" id="radioMotherStateL" value="Living" <?php echo ($varcharStudentMotherStatus =='Living')?'checked':'' ?>> Living 
															</label>
															<label class="btn btn-default <?php echo ($varcharStudentMotherStatus =='Deceased')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioMotherState" id="radioMotherStateD" value="Deceased" <?php echo ($varcharStudentMotherStatus =='Deceased')?'checked':'' ?>> Deceased
															</label>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownMotherEducationalAttainment" id="dropdownMotherEducationalAttainment">
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
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-12">
															<select required="required" class="select2_group form-control" name="dropdownMotherOccupationType" id="dropdownMotherOccupationType" ="">
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed" selected="selected">Unemployed</option>
																<option>Unknown</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Occupation
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherOccupation" id="txtbxMotherOccupation" value="<?php echo $varcharStudentMotherOccupation;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z()-:',.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherNameOfEmployer" id="txtbxMotherNameOfEmployer" value="<?php echo $varcharStudentMotherEmployerName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherAddressOfEmployer" id="txtbxMotherAddressOfEmployer" value="<?php echo $varcharStudentMotherEmployerAddress;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Father</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherName" id="txtbxFatherName" value="<?php echo $varcharStudentFatherName;  ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age</label>
														<div class="col-md-3 col-sm-3">
															<input type="number" class="form-control col-md-7 col-xs-12" name="txtbxFatherAge" id="txtbxFatherAge" value="<?php echo $varcharStudentFatherAge;  ?>" data-validate-minmax="18,123">
														</div>
														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-default <?php echo ($varcharStudentFatherStatus =='Living')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input checked="checked" type="radio" name="radioFatherState" id="radioFatherStateL" value="Living" <?php echo ($varcharStudentFatherStatus =='Living')?'checked':'' ?>> Living 
															</label>
															<label class="btn btn-default <?php echo ($varcharStudentFatherStatus =='Deceased')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioFatherState" id="radioFatherStateD" value="Deceased" <?php echo ($varcharStudentFatherStatus =='Deceased')?'checked':'' ?>> Deceased
															</label>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownFatherEducationalAttainment" id="dropdownFatherEducationalAttainment">
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
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-12">
															<select required="required" class="select2_group form-control" name="dropdownFatherOccupationType" id="dropdownFatherOccupationType">
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed" selected="selected">Unemployed</option>
																<option>Unknown</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Occupation:</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherOccupation" id="txtbxFatherOccupation" value="<?php echo $varcharStudentFatherOccupation ; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z()-:',.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherNameOfEmployer" id="txtbxFatherNameOfEmployer" value="<?php echo $varcharStudentFatherEmployerName; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherAddressOfEmployer" id="txtbxFatherAddressOfEmployer" value="<?php echo $varcharStudentFatherEmployerAddress; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. Guardian</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianName" id="txtbxGuardianName" value="<?php echo $varcharStudentGuardianName; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Age</label>
														<div class="col-md-6 col-sm-6">
															<input type="number" class="form-control col-md-7 col-xs-12" name="txtbxGuardianAge" id="txtbxGuardianAge" value="<?php echo $varcharStudentGuardianAge; ?>" data-validate-minmax="18,123">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Relationship <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownGuardianRelationship" id="dropdownGuardianRelationship">
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
														<label class="control-label col-md-1 col-sm-1"  >Others:</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuaridanOthersRelationship" id="txtbxGuaridanOthersRelationship" value="<?php echo $varcharStudentGuardianRelation; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z()-:',.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownGuardianEducationalAttainment" id="dropdownGuardianEducationalAttainment">
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
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-12">
															<select required="required" class="select2_group form-control" name="dropdownGuardianOccupationType" id="dropdownGuardianOccupationType">
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed" selected="selected">Unemployed</option>
																<option>Unknown</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Occupation:</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianOccupation" id="txtbxGuardianOccupation" value="<?php echo $varcharStudentFatherOccupation; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z()-:',.\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianNameOfEmployer" id="txtbxGuardianNameOfEmployer" value="<?php echo $varcharStudentFatherEmployerName; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianAddressOfEmployer" id="txtbxGuardianAddressOfEmployer" value="<?php echo $varcharStudentFatherEmployerAddress; ?>" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z0-9#()-:',.\s]+$">
														</div>
													</div>
													<br>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's Marital Relationship <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownParentsMaritalRelationship" id="dropdownParentsMaritalRelationship">
																<option value="Married and staying together">Married and staying together</option>
																<option value="ot married but living together">Not married but living together</option>
																<option value="Single Parent">Single Parent</option>
																<option value="Married but separated">Married but separated</option>
																<option value="Others">Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others:</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersParentsMaritalRelationship" id="txtbxOthersParentsMaritalRelationship" value="<?php echo $varcharStudentMaritalRelationship; ?>" style="text-transform:capitalize;" pattern="^[A-Za-z ]+$"  required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Number of child(ren) in the family including yourself <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfChildrenInTheFamily" id="txtbxNoOfChildrenInTheFamily" value="<?php echo $varcharStudentNumOfChildren; ?>" required="required" data-validate-minmax="1, 69">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Brother/s</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfBrothers" id="txtbxNoOfBrothers" value="<?php echo $varcharStudentNumOfBrother; ?>" data-validate-minmax="0,69">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Sister/s</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfSisters" id="txtbxNoOfSisters" value="<?php echo $varcharStudentNumOfSister; ?>" data-validate-minmax="0,69">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Ordinal Position <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownOrdinalPosition" id="dropdownOrdinalPosition">
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
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Number of brother/s or sister/s gainfully employed <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<input class="form-control col-md-1 col-xs-1" type="number" name="txtbxNoOfBrothersSistersGainfullyEmployed" id="txtbxNoOfBrothersSistersGainfullyEmployed" value="<?php echo $varcharStudentSiblingsEmployed; ?>" required="required" data-validate-minmax="0,69">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3">Is/Are your sibling/s who's gainfully employed providing support to: <span class="" style="color:red">*</span>
														</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownSupportedByYourSibling" id="dropdownSupportedByYourSibling">
																<option >Your Studies</option>
																<option >Your Family</option>
																<option >His/Her Family</option>
																<option >Does Not Give Support</option>
																<option >Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others:</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersSupportedByYourSibling" id="txtbxOthersSupportedByYourSibling" value="<?php echo $varcharStudentSiblingSupporter; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Who finance your schooling? <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownWhoFinancesYourSchooling" id="dropdownWhoFinancesYourSchooling">
																<option >Parents</option>
																<option >Brother/Sister</option>
																<option >Spouse</option>
																<option >Scholarship</option>
																<option >Relatives</option>
																<option >Self-supporting/Working student</option>
																<option >Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others:</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersWhoFinancesYourSchooling" id="txtbxOthersWhoFinancesYourSchooling" value="<?php echo $varcharStudentSchoolFinancer; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >How much is your weekly allowance(₱) <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input type="number" class="form-control col-md-7 col-xs-12" name="txtbxWeeklyAllowance" id="txtbxWeeklyAllowance" value="<?php echo $varcharStudentWeeklyAllowance; ?>" step="50" required="required" data-validate-minmax="1,99999">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's Monthly Income <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select required="required" class="select2_single form-control" name="dropdownParentsMonthlyIncome" id="dropdownParentsMonthlyIncome" tabindex="-1">
																<option >Below average</option>
																<option >Average</option>
																<option >Above average</option>
															</select>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you have a quiet place to study? <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentStudyPlace =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioQuietPlaceToSTudy" id="radioQuietPlaceToStudyYes" value="Yes" <?php echo ($varcharStudentStudyPlace =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentStudyPlace =='No')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioQuietPlaceToSTudy" id="radioQuietPlaceToStudyNo" value="No" <?php echo ($varcharStudentStudyPlace =='No')?'checked':'' ?>> No
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you share your room with anyone? <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentRoomSharing <> 'No')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioShareRoom" id="radioShareRoom" value="Yes" <?php echo ($varcharStudentRoomSharing <> 'No')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentRoomSharing =='No')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioShareRoom" id="radioShareRoom" value="No" <?php echo ($varcharStudentRoomSharing =='No')?'checked':'' ?>> No
																</label>
															</div>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >If yes, with whom?</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxWithWhom" id="txtbxWithWhom" value="<?php echo $varcharStudentRoomSharing; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Nature of residence while attending school <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select required="required" class="select2_single form-control" tabindex="-1" name="dropdownNatureOfResidence" id="dropdownNatureOfResidence">
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
														<label class="control-label col-md-1 col-sm-1"  >Others:</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersNatureOfResidence" id="txtbxOthersNatureOfResidence" value="<?php echo $varcharStudentNatureOfResidence ; ?>" required="required">
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
														<label class="control-label col-md-3 col-sm-3"  >Your Vision <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentVisionProblem <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVision" value="Yes" <?php echo ($varcharStudentVisionProblem <> "")?'checked':'' ?>>Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentVisionProblem =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioVision" value=""  <?php echo ($varcharStudentVisionProblem == "")?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes</label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVision" id="txtbxVision" value="<?php echo $varcharStudentVisionProblem ; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Hearing <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentHearingProblem <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHearing" value="Yes"<?php echo ($varcharStudentHearingProblem <> "")?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentHearingProblem =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioHearing" value="" <?php echo ($varcharStudentHearingProblem =='')?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes</label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHearing" id="txtbxHearing" value="<?php echo $varcharStudentHearingProblem ; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Speech <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentSpeechProblem <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioSpeach" value="Yes" <?php echo ($varcharStudentSpeechProblem <> "")?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentSpeechProblem =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioSpeach" value="" <?php echo ($varcharStudentSpeechProblem =='')?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes</label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxSpeach" id="txtbxSpeach" value="<?php echo $varcharStudentSpeechProblem; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your General Health <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentGeneralHealth <> "")?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGeneralHealth" value="Yes" <?php echo ($varcharStudentGeneralHealth <> "")?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentGeneralHealth =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioGeneralHealth" value="" <?php echo ($varcharStudentGeneralHealth =='')?'checked':'' ?>> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes</label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGeneralHealth" id="txtbxGeneralHealth" value="<?php echo $varcharStudentGeneralHealth; ?>" required="required">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Psychological</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Psychiatrist <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentPsychiatristConsult =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychiatrist" id="radioPsychiatrist" value="Yes" <?php echo ($varcharStudentPsychiatristConsult =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentPsychiatristConsult =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioPsychiatrist" id="radioPsychiatrist" value="" <?php echo ($varcharStudentPsychiatristConsult =='')?'checked':'' ?>> Never
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When</label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="datePsychiatrist" id="datePsychiatrist" value="<?php echo $varcharStudentPsychiatristWhen; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what?</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatPsychiatrist" id="txtareaForWhatPsychiatrist" required="required"><?php echo $varcharStudentPsychiatristReason; ?></textarea>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Psychologist <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentPsychologistConsult =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychologist" id="radioPsychologist" value="Yes" <?php echo ($varcharStudentPsychologistConsult =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentPsychologistConsult =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioPsychologist" id="radioPsychologist" value="" <?php echo ($varcharStudentPsychologistConsult =='')?'checked':'' ?>> Never
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When</label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="datePsychologist" id="datePsychologist" value="<?php echo $varcharStudentPsychologistWhen; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what?</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatPsychologist" id="txtareaForWhatPsychologist" required="required"><?php echo $varcharStudentPsychologistReason; ?></textarea>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Counselor <span class="" style="color:red">*</span></label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default <?php echo ($varcharStudentCounselorConsult =='Yes')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCounselor" id="radioCounselor" value="Yes" <?php echo ($varcharStudentCounselorConsult =='Yes')?'checked':'' ?>> Yes
																</label>
																<label class="btn btn-default <?php echo ($varcharStudentCounselorConsult =='')?'active':'' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input checked="checked" type="radio" name="radioCounselor" id="radioCounselor" value="" <?php echo ($varcharStudentCounselorConsult =='')?'checked':'' ?>> Never
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When</label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="dateCounselor" id="dateCounselor" value="<?php echo $varcharStudentCounselorWhen; ?>" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what?</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatCounselor" id="txtareaForWhatCounselor" required="required"><?php echo $varcharStudentCounselorReason; ?></textarea>
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
														<label class="control-label col-md-3 col-sm-3"  >Others, please specify:</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersClubInterest" id="txtbxOthersClubInterest" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.,\s]+$" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >What is/are your favorite subject/s?</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaFavoriteSubject" id="txtareaFavoriteSubject" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.,\s]+$"><?php echo $varcharStudentFavSubject; ?></textarea>
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >What is/are your least favorite subject/s</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaLeastFavoriteSubject" id="txtareaLeastFavoriteSubject" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.,\s]+$"><?php echo $varcharStudentLeastFavSubject; ?></textarea>
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Extra-Culicular</span>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Hobbies (according to preference)</label>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >1. <span class="" style="color:red">*</span></label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby1" id="txtbxHobby1" value="<?php echo $varcharStudentHobby1; ?>" required="required" pattern="^[\u00F1A-Za-z-'.,\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >2.</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby2" id="txtbxHobby2" value="<?php echo $varcharStudentHobby2; ?>" pattern="^[\u00F1A-Za-z-'.,\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >3.</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby3" id="txtbxHobby3" value="<?php echo $varcharStudentHobby3; ?>" pattern="^[\u00F1A-Za-z-'.,\s]+$">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >4.</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby4" id="txtbxHobby4" value="<?php echo $varcharStudentHobby4; ?>" pattern="^[\u00F1A-Za-z-'.,\s]+$">
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
														<label class="control-label col-md-3 col-sm-3"  >Others, please specify:</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersOrganizationInterest" id="txtbxOthersOrganizationInterest" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.,\s]+$" required="required">
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
													<span class="section"> <h1 class="text-center">Test Results</h1></span>
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
														<label class="control-label col-md-3 col-sm-3">Date Of Test</label>
														<div class="col-md-6 col-sm-6">
														<input id="dateTestResultDateInitial" name="dateTestResultDateInitial[]" value="'.$resu['testDate'].'" class="date-picker form-control col-md-7 col-xs-12" type="date">
														</div>
														</div>

														<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Test</label>
														<div class="col-md-6 col-sm-6">
														<input id="txtbxTestResultNameInitial" name="txtbxTestResultNameInitial[]" value="'.$resu['testName'].'" type="text" class="form-control col-md-7 col-xs-12"  style="text-transform:capitalize;">
														</div>
														</div>
														<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Raw Score(RS)</label>
														<div class="col-md-6 col-sm-6">
														<input id="txtbxTestResultRawScoreInitial" name="txtbxTestResultRawScoreInitial[]" value="'.$resu['testRawScore'].'" type="number" class="form-control col-md-7 col-xs-12" data-validate-minmax="0,9999">
														</div>
														</div>
														<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR)</label>
														<div class="col-md-6 col-sm-6">
														<input id="txtbxTestResultPercentileRatingInitial" name="txtbxTestResultPercentileRatingInitial[]" value="'.$resu['testPercentile'].'" type="number" class="form-control col-md-7 col-xs-12" step=".25" data-validate-minmax="1,100">
														</div>
														</div>
														<div class="item form-group">
														<label class="control-label col-md-3 col-sm-3"  >Description</label>
														<div class="col-md-6 col-sm-6">
														<textarea class="form-control" name="txtareaTestResultDescriptionInitial[]" id="txtareaTestResultDescriptionInitial">'.$resu['testDescription'].'</textarea>
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
				$('#dateDateOfBirth').blur(function() {
					var dateDateOfBirthday = $(this).val();
					var today = new Date();
					var birthDate = new Date(dateDateOfBirthday);
					var age = today.getFullYear() - birthDate.getFullYear();
					var m = today.getMonth() - birthDate.getMonth();
					if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
						age--;
					}
					if (age < 13 || age > 115)
					{
						age = "";
					}
					var calculatedAge = age;
					document.getElementById("txtbxAge").value = calculatedAge;
				})
				$('#txtbxHeight').blur(function() {
					var txtbxHeight = $(this).val();
					if( txtbxHeight < 50 || txtbxHeight > 300)
					{
						document.getElementById("txtbxHeight").value = "";
						document.getElementById("txtbxHeight").placeholder = "Invalid Height";
					}
				})
				$('#txtbxWeight').blur(function() {
					var txtbxWeight = $(this).val();
					if( txtbxWeight < 1 || txtbxWeight > 500)
					{
						document.getElementById("txtbxWeight").value = "";
						document.getElementById("txtbxWeight").placeholder = "Invalid Weight";
					}
				})
				$('#txtbxYear').blur(function() {
					var txtbxYear = $(this).val();
					if( txtbxYear < 1 || txtbxYear > 5)
					{
						document.getElementById("txtbxYear").value = "";
						document.getElementById("txtbxYear").placeholder = "Invalid Year";
					}
				})
				$('#txtbxHSGWA').blur(function() {
					var txtbxHSGWA = $(this).val();
					if( txtbxHSGWA < 0 || (txtbxHSGWA > 5 && txtbxHSGWA < 50) || txtbxHSGWA > 100)
					{
						document.getElementById("txtbxHSGWA").value = "";
						document.getElementById("txtbxHSGWA").placeholder = "Invalid Average";
					}
				})
				$('#txtbxMobileNum').blur(function() {
					var txtbxMobileNum = $(this).val();
					if( txtbxMobileNum < 9000000000 || txtbxMobileNum > 9999999999)
					{
						document.getElementById("txtbxMobileNum").value = "";
						document.getElementById("txtbxMobileNum").placeholder = "Invalid Mobile No.(09XXXXXXXXX)";
					}
				})
				$('#txtbxTelNum').blur(function() {
					var txtbxTelNum = $(this).val();
					if( txtbxTelNum <= 0 )
					{
						document.getElementById("txtbxTelNum").value = "";
						document.getElementById("txtbxTelNum").placeholder = "Invalid Telephone No.(XXXXXXXXX)";
					}
				})
				$('#txtbxPreElemYearAttended1').blur(function() {
					var txtbxPreElemYearAttended1 = $(this).val();
					if( txtbxPreElemYearAttended1 < 1960 || txtbxPreElemYearAttended1 > 2050)
					{
						document.getElementById("txtbxPreElemYearAttended1").value = "";
						document.getElementById("txtbxPreElemYearAttended1").placeholder = "Invalid Year";
					}
				})
				$('#txtbxPreElemYearAttended2').blur(function() {
					var txtbxPreElemYearAttended2 = $(this).val();
					if( txtbxPreElemYearAttended2 < 1961 || txtbxPreElemYearAttended2 > 2050 || txtbxPreElemYearAttended2 < $('#txtbxPreElemYearAttended1').val())
					{
						document.getElementById("txtbxPreElemYearAttended2").value = "";
						document.getElementById("txtbxPreElemYearAttended2").placeholder = "Invalid Year";
					}
				})
				$('#txtbxElementaryYearAttended1').blur(function() {
					var txtbxElementaryYearAttended1 = $(this).val();
					if( txtbxElementaryYearAttended1 < 1961 || txtbxElementaryYearAttended1 > 2050)
					{
						document.getElementById("txtbxElementaryYearAttended1").value = "";
						document.getElementById("txtbxElementaryYearAttended1").placeholder = "Invalid Year";
					}
				})
				$('#txtbxElementaryYearAttended2').blur(function() {
					var txtbxElementaryYearAttended2 = $(this).val();
					if( txtbxElementaryYearAttended2 < 1967 || txtbxElementaryYearAttended2 > 2050 || txtbxElementaryYearAttended2 < $('#txtbxElementaryYearAttended1').val())
					{
						document.getElementById("txtbxElementaryYearAttended2").value = "";
						document.getElementById("txtbxElementaryYearAttended2").placeholder = "Invalid Year";
					}
				})
				$('#txtbxHighschoolYearAttended1').blur(function() {
					var txtbxHighschoolYearAttended1 = $(this).val();
					if( txtbxHighschoolYearAttended1 < 1967 || txtbxHighschoolYearAttended1 > 2050)
					{
						document.getElementById("txtbxHighschoolYearAttended1").value = "";
						document.getElementById("txtbxHighschoolYearAttended1").placeholder = "Invalid Year";
					}
				})
				$('#txtbxHighschoolYearAttended2').blur(function() {
					var txtbxHighschoolYearAttended2 = $(this).val();
					if( txtbxHighschoolYearAttended2 < 1971 || txtbxHighschoolYearAttended2 > 2050 || txtbxHighschoolYearAttended2 < $('#txtbxHighschoolYearAttended1').val())
					{
						document.getElementById("txtbxHighschoolYearAttended2").value = "";
						document.getElementById("txtbxHighschoolYearAttended2").placeholder = "Invalid Year";
					}
				})
				$('#txtbxVocationalYearAttended1').blur(function() {
					var txtbxVocationalYearAttended1 = $(this).val();
					if( txtbxVocationalYearAttended1 < 1971 || txtbxVocationalYearAttended1 > 2050)
					{
						document.getElementById("txtbxVocationalYearAttended1").value = "";
						document.getElementById("txtbxVocationalYearAttended1").placeholder = "Invalid Year";
					}
				})
				$('#txtbxVocationalYearAttended2').blur(function() {
					var txtbxVocationalYearAttended2 = $(this).val();
					if( txtbxVocationalYearAttended2 < 1973 || txtbxVocationalYearAttended2 > 2050 || txtbxVocationalYearAttended2 < $('#txtbxVocationalYearAttended1').val())
					{
						document.getElementById("txtbxVocationalYearAttended2").value = "";
						document.getElementById("txtbxVocationalYearAttended2").placeholder = "Invalid Year";
					}
				})
				$('#txtbxCollegeYearAttended1').blur(function() {
					var txtbxCollegeYearAttended1 = $(this).val();
					if( txtbxCollegeYearAttended1 < 1971 || txtbxCollegeYearAttended1 > 2050)
					{
						document.getElementById("txtbxCollegeYearAttended1").value = "";
						document.getElementById("txtbxCollegeYearAttended1").placeholder = "Invalid Year";
					}
				})
				$('#txtbxCollegeYearAttended2').blur(function() {
					var txtbxCollegeYearAttended2 = $(this).val();
					if( txtbxCollegeYearAttended2 < 1973 || txtbxCollegeYearAttended2 > 2050 || txtbxCollegeYearAttended2 < $('#txtbxCollegeYearAttended1').val())
					{
						document.getElementById("txtbxCollegeYearAttended2").value = "";
						document.getElementById("txtbxCollegeYearAttended2").placeholder = "Invalid Year";
					}
				})
				$('#txtbxWeeklyAllowance').blur(function() {
					var txtbxWeeklyAllowance = $(this).val();
					if( txtbxWeeklyAllowance < 1 || txtbxWeeklyAllowance > 99999)
					{
						document.getElementById("txtbxWeeklyAllowance").value = "";
						document.getElementById("txtbxWeeklyAllowance").placeholder = "Invalid Amount";
					}
				})
				$('#txtbxMotherAge').blur(function() {
					var txtbxMotherAge = $(this).val();
					if( txtbxMotherAge < 18 || txtbxMotherAge > 123)
					{
						document.getElementById("txtbxMotherAge").value = "";
						document.getElementById("txtbxMotherAge").placeholder = "Invalid Age";
					}
				})
				$('#txtbxFatherAge').blur(function() {
					var txtbxFatherAge = $(this).val();
					if( txtbxFatherAge < 18 || txtbxFatherAge > 123)
					{
						document.getElementById("txtbxFatherAge").value = "";
						document.getElementById("txtbxFatherAge").placeholder = "Invalid Age";
					}
				})
				$('#txtbxGuardianAge').blur(function() {
					var txtbxGuardianAge = $(this).val();
					if( txtbxGuardianAge < 13 || txtbxGuardianAge > 123)
					{
						document.getElementById("txtbxGuardianAge").value = "";
						document.getElementById("txtbxGuardianAge").placeholder = "Invalid Age";
					}
				})
				$('#txtbxTestResultRawScoreInitial').blur(function() {
					var txtbxTestResultRawScoreInitial = $(this).val();
					if( txtbxTestResultRawScoreInitial < 0 || txtbxTestResultRawScoreInitial > 9999)
					{
						document.getElementById("txtbxTestResultRawScoreInitial").value = "";
						document.getElementById("txtbxTestResultRawScoreInitial").placeholder = "Invalid Rating";
					}
				})
				$('#txtbxTestResultPercentileRatingInitial').blur(function() {
					var txtbxTestResultPercentileRatingInitial = $(this).val();
					if( txtbxTestResultPercentileRatingInitial < 1 || (txtbxTestResultPercentileRatingInitial > 5 && txtbxTestResultPercentileRatingInitial < 50) || txtbxTestResultPercentileRatingInitial > 100)
					{
						document.getElementById("txtbxTestResultPercentileRatingInitial").value = "";
						document.getElementById("txtbxTestResultPercentileRatingInitial").placeholder = "Invalid Score";
					}
				})
				//Dynamic
				// $('#txtbxTestResultRawScoreNew').blur(function() {
				// 	var txtbxTestResultRawScoreNew = $(this).val();
				// 	if( txtbxTestResultRawScoreNew < 0 || txtbxTestResultRawScoreNew > 9999)
				// 	{
				// 		document.getElementById("txtbxTestResultRawScoreNew").value = "";
				// 		document.getElementById("txtbxTestResultRawScoreNew").placeholder = "Invalid Rating";
				// 	}
				// })
				// $('#txtbxTestResultPercentileRatingNew').blur(function() {
				// 	var txtbxTestResultPercentileRatingNew = $(this).val();
				// 	if( txtbxTestResultPercentileRatingNew < 1 || (txtbxTestResultPercentileRatingNew > 5 && txtbxTestResultPercentileRatingNew < 50) || txtbxTestResultPercentileRatingNew > 100)
				// 	{
				// 		document.getElementById("txtbxTestResultPercentileRatingNew").value = "";
				// 		document.getElementById("txtbxTestResultPercentileRatingNew").placeholder = "Invalid Score";
				// 	}
				// })
				// $('#dateTestResultDateNew').blur(function() {
				// 	var dateString = $(this).val();
				// 	var myDate = new Date(dateString);
				// 	var today = new Date();
				// 	var test = today.getFullYear() - myDate.getFullYear();
				// 	var m = today.getMonth() - myDate.getMonth();
				// 	if (m < 0 || (m === 0 && today.getDate() < myDate.getDate())) {
				// 		test--;
				// 	}
				// 	if (test > 115 || myDate > today )
				// 	{
				// 		document.getElementById("dateTestResultDateNew").value = "";
				// 	}
				// })
				
				$('#datePsychiatrist').blur(function() {
					var dateString = $(this).val();
					var myDate = new Date(dateString);
					var today = new Date();
					var test = today.getFullYear() - myDate.getFullYear();
					var m = today.getMonth() - myDate.getMonth();
					if (m < 0 || (m === 0 && today.getDate() < myDate.getDate())) {
						test--;
					}
					if (test > 115 || myDate > today )
					{
						document.getElementById("datePsychiatrist").value = "";
					}
				})
				$('#datePsychologist').blur(function() {
					var dateString = $(this).val();
					var myDate = new Date(dateString);
					var today = new Date();
					var test = today.getFullYear() - myDate.getFullYear();
					var m = today.getMonth() - myDate.getMonth();
					if (m < 0 || (m === 0 && today.getDate() < myDate.getDate())) {
						test--;
					}
					if (test > 115 || myDate > today )
					{
						document.getElementById("datePsychologist").value = "";
					}
				})
				$('#dateCounselor').blur(function() {
					var dateString = $(this).val();
					var myDate = new Date(dateString);
					var today = new Date();
					var test = today.getFullYear() - myDate.getFullYear();
					var m = today.getMonth() - myDate.getMonth();
					if (m < 0 || (m === 0 && today.getDate() < myDate.getDate())) {
						test--;
					}
					if (test > 115 || myDate > today )
					{
						document.getElementById("dateCounselor").value = "";
					}
				})
				$('#dateTestResultDateInitial').blur(function() {
					var dateString = $(this).val();
					var myDate = new Date(dateString);
					var today = new Date();
					var test = today.getFullYear() - myDate.getFullYear();
					var m = today.getMonth() - myDate.getMonth();
					if (m < 0 || (m === 0 && today.getDate() < myDate.getDate())) {
						test--;
					}
					if (test > 115 || myDate > today )
					{
						document.getElementById("dateTestResultDateInitial").value = "";
					}
				})
				$('#txtbxNoOfBrothers, #txtbxNoOfSisters').blur(function() {
					var txtbxNoOfBrothers = $('#txtbxNoOfBrothers').val();
					var txtbxNoOfSisters = $('#txtbxNoOfSisters').val();
					if( txtbxNoOfBrothers < 0 || txtbxNoOfBrothers > 69)
					{
						document.getElementById("txtbxNoOfBrothers").value = "";
						document.getElementById("txtbxNoOfBrothers").placeholder = "Invalid No. Of Brother/s";
					}
					if( txtbxNoOfSisters < 0 || txtbxNoOfSisters > 69)
					{
						document.getElementById("txtbxNoOfSisters").value = "";
						document.getElementById("txtbxNoOfSisters").placeholder = "Invalid No. Of Sister/s";
					}
					var NoOfSiblings = Number(txtbxNoOfBrothers) + (Number(txtbxNoOfSisters) + 1);
					var txtbxNoOfChildrenInTheFamily = $('#txtbxNoOfChildrenInTheFamily').val();
					//if(NoOfSiblings != txtbxNoOfChildrenInTheFamily)
					//{
					//	alert("Invalid No. of Brother/s or Sister/s");
					//}
				})
				$('#txtbxNoOfBrothersSistersGainfullyEmployed').blur(function() {
					var txtbxNoOfBrothers = $('#txtbxNoOfBrothers').val();
					var txtbxNoOfSisters = $('#txtbxNoOfSisters').val();
					var NoOfSiblings = Number(txtbxNoOfBrothers) + Number(txtbxNoOfSisters);
					var txtbxNoOfBrothersSistersGainfullyEmployed = $('#txtbxNoOfBrothersSistersGainfullyEmployed').val();
					if(txtbxNoOfBrothersSistersGainfullyEmployed > NoOfSiblings || txtbxNoOfBrothersSistersGainfullyEmployed < 0 || txtbxNoOfBrothersSistersGainfullyEmployed > 69 )
					{
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").value = "";
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").placeholder = "Invalid No. Of Brother/s or Sister/s";
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").value = "";
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").value = true;
						document.getElementById("dropdownSupportedByYourSibling").disabled = true;
						document.getElementById("txtbxOthersSupportedByYourSibling").disabled = true;
						document.getElementById("txtbxOthersSupportedByYourSibling").value = "";
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
				$('#dropdownCityAddress').change(function() {
					var dropdownCityAddress = $(this).val();
					if(dropdownCityAddress == 'None')
					{
						document.getElementById("txtbxCityHouseNumber").disabled = true;
						document.getElementById("txtbxCityBarangay").disabled = true;
					}
					else
					{
						document.getElementById("txtbxCityHouseNumber").disabled = false;
						document.getElementById("txtbxCityBarangay").disabled = false;
					}
				})
				$('#dropdownProvincialAddress').change(function() {
					var dropdownProvincialAddress = $(this).val();
					if(dropdownProvincialAddress == 'None')
					{
						document.getElementById("txtbxProvinceHouseNumber").disabled = true;
						document.getElementById("txtbxProvinceBarangay").disabled = true;
						document.getElementById("txtbxProvinceCity").disabled = true;
					}
					else
					{
						document.getElementById("txtbxProvinceHouseNumber").disabled = false;
						document.getElementById("txtbxProvinceBarangay").disabled = false;
						document.getElementById("txtbxProvinceCity").disabled = false;
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
				$('input[name="radioMotherState"]').change(function() {
					var radioMotherState = $(this).val();
					if( radioMotherState == 'Deceased')
					{
						document.getElementById("dropdownMotherOccupationType").disabled = true;
						document.getElementById("txtbxMotherOccupation").disabled = true;
						document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
						document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
						document.getElementById("dropdownMotherOccupationType").value = "Unemployed";
						document.getElementById("txtbxMotherOccupation").value = "";
						document.getElementById("txtbxMotherNameOfEmployer").value = "";
						document.getElementById("txtbxMotherAddressOfEmployer").value = "";
					}
					else
					{
						document.getElementById("dropdownMotherOccupationType").disabled = false;
					}
				})
				

				$('input[name="radioFatherState"]').change(function() {
					var radioFatherState = $(this).val();
					if( radioFatherState == 'Deceased')
					{
						document.getElementById("dropdownFatherOccupationType").disabled = true;
						document.getElementById("txtbxFatherOccupation").disabled = true;
						document.getElementById("txtbxFatherNameOfEmployer").disabled = true;
						document.getElementById("txtbxFatherAddressOfEmployer").disabled = true;
						document.getElementById("dropdownFatherOccupationType").value = "Unemployed";
						document.getElementById("txtbxFatherOccupation").value = "";
						document.getElementById("txtbxFatherNameOfEmployer").value = "";
						document.getElementById("txtbxFatherAddressOfEmployer").value = "";
					}
					else
					{
						document.getElementById("dropdownFatherOccupationType").disabled = false;
					}
				})
				
				$('#dropdownMotherOccupationType').change(function() {
					if($(this).val() == 'Unemployed' || $(this).val() == 'Unknown')
					{
						document.getElementById("txtbxMotherOccupation").disabled = true;
						document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
						document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
						document.getElementById("txtbxMotherOccupation").value = "";
						document.getElementById("txtbxMotherNameOfEmployer").value = "";
						document.getElementById("txtbxMotherAddressOfEmployer").value = "";
					}
					else if($(this).val() == 'Self-Employed')
					{
						document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
						document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
						document.getElementById("txtbxMotherNameOfEmployer").value = "";
						document.getElementById("txtbxMotherAddressOfEmployer").value = "";
						document.getElementById("txtbxMotherOccupation").disabled = false;
					}
					else
					{
						document.getElementById("txtbxMotherOccupation").disabled = false;
						document.getElementById("txtbxMotherNameOfEmployer").disabled = false;
						document.getElementById("txtbxMotherAddressOfEmployer").disabled = false;
					}
				})
				if('<?php echo $varcharStudentMotherOccupationType; ?>' == 'Unemployed' || '<?php echo $varcharStudentMotherOccupationType; ?>' == 'Unknown' )
				{
					document.getElementById("txtbxMotherOccupation").disabled = true;
					document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
					document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
					document.getElementById("txtbxMotherOccupation").value = "";
					document.getElementById("txtbxMotherNameOfEmployer").value = "";
					document.getElementById("txtbxMotherAddressOfEmployer").value = "";
				}
				else if('<?php echo $varcharStudentMotherOccupationType; ?>' == 'Self-Employed')
				{
					document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
					document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
					document.getElementById("txtbxMotherNameOfEmployer").value = "";
					document.getElementById("txtbxMotherAddressOfEmployer").value = "";
					document.getElementById("txtbxMotherOccupation").disabled = false;
				}
				else
				{
					document.getElementById("txtbxMotherOccupation").disabled = false;
					document.getElementById("txtbxMotherNameOfEmployer").disabled = false;
					document.getElementById("txtbxMotherAddressOfEmployer").disabled = false;
				}
				$('#dropdownFatherOccupationType').change(function() {
					if($(this).val() == 'Unemployed' || $(this).val() == 'Unknown')
					{
						document.getElementById("txtbxFatherOccupation").disabled = true;
						document.getElementById("txtbxFatherNameOfEmployer").disabled = true;
						document.getElementById("txtbxFatherAddressOfEmployer").disabled = true;
						document.getElementById("txtbxFatherOccupation").value = "";
						document.getElementById("txtbxFatherNameOfEmployer").value = "";
						document.getElementById("txtbxFatherAddressOfEmployer").value = "";
					}
					else if($(this).val() == 'Self-Employed')
					{
						document.getElementById("txtbxFatherNameOfEmployer").disabled = true;
						document.getElementById("txtbxFatherAddressOfEmployer").disabled = true;
						document.getElementById("txtbxFatherNameOfEmployer").value = "";
						document.getElementById("txtbxFatherAddressOfEmployer").value = "";
						document.getElementById("txtbxFatherOccupation").disabled = false;
					}
					else
					{
						document.getElementById("txtbxFatherOccupation").disabled = false;
						document.getElementById("txtbxFatherNameOfEmployer").disabled = false;
						document.getElementById("txtbxFatherAddressOfEmployer").disabled = false;
					}
				})
				if('<?php echo $varcharStudentFatherOccupationType; ?>' == 'Unemployed' || '<?php echo $varcharStudentFatherOccupationType; ?>' == 'Unknown')
				{
					document.getElementById("txtbxFatherOccupation").disabled = true;
					document.getElementById("txtbxFatherNameOfEmployer").disabled = true;
					document.getElementById("txtbxFatherAddressOfEmployer").disabled = true;
					document.getElementById("txtbxFatherOccupation").value = "";
					document.getElementById("txtbxFatherNameOfEmployer").value = "";
					document.getElementById("txtbxFatherAddressOfEmployer").value = "";
				}
				else if('<?php echo $varcharStudentFatherOccupationType; ?>' == 'Self-Employed')
				{
					document.getElementById("txtbxFatherNameOfEmployer").disabled = true;
					document.getElementById("txtbxFatherAddressOfEmployer").disabled = true;
					document.getElementById("txtbxFatherNameOfEmployer").value = "";
					document.getElementById("txtbxFatherAddressOfEmployer").value = "";
					document.getElementById("txtbxFatherOccupation").disabled = false;
				}
				else
				{
					document.getElementById("txtbxFatherOccupation").disabled = false;
					document.getElementById("txtbxFatherNameOfEmployer").disabled = false;
					document.getElementById("txtbxFatherAddressOfEmployer").disabled = false;
				}
				$('#dropdownGuardianOccupationType').change(function() {
					if($(this).val() == 'Unemployed' || $(this).val() == 'Unknown')
					{
						document.getElementById("txtbxGuardianOccupation").disabled = true;
						document.getElementById("txtbxGuardianNameOfEmployer").disabled = true;
						document.getElementById("txtbxGuardianAddressOfEmployer").disabled = true;
						document.getElementById("txtbxGuardianOccupation").value = "";
						document.getElementById("txtbxGuardianNameOfEmployer").value = "";
						document.getElementById("txtbxGuardianAddressOfEmployer").value = "";
					}
					else if($(this).val() == 'Self-Employed')
					{
						document.getElementById("txtbxGuardianNameOfEmployer").disabled = true;
						document.getElementById("txtbxGuardianAddressOfEmployer").disabled = true;
						document.getElementById("txtbxGuardianNameOfEmployer").value = "";
						document.getElementById("txtbxGuardianAddressOfEmployer").value = "";
						document.getElementById("txtbxGuardianOccupation").disabled = false;
					}
					else
					{
						document.getElementById("txtbxGuardianOccupation").disabled = false;
						document.getElementById("txtbxGuardianNameOfEmployer").disabled = false;
						document.getElementById("txtbxGuardianAddressOfEmployer").disabled = false;
					}
				})
				if('<?php echo $varcharStudentGuardianOccupationType; ?>' == 'Unemployed' || '<?php echo $varcharStudentGuardianOccupationType; ?>' == 'Unknown')
				{
					document.getElementById("txtbxGuardianOccupation").disabled = true;
					document.getElementById("txtbxGuardianNameOfEmployer").disabled = true;
					document.getElementById("txtbxGuardianAddressOfEmployer").disabled = true;
					document.getElementById("txtbxGuardianOccupation").value = "";
					document.getElementById("txtbxGuardianNameOfEmployer").value = "";
					document.getElementById("txtbxGuardianAddressOfEmployer").value = "";
				}
				else if('<?php echo $varcharStudentGuardianOccupationType; ?>' == 'Self-Employed')
				{
					document.getElementById("txtbxGuardianNameOfEmployer").disabled = true;
					document.getElementById("txtbxGuardianAddressOfEmployer").disabled = true;
					document.getElementById("txtbxGuardianNameOfEmployer").value = "";
					document.getElementById("txtbxGuardianAddressOfEmployer").value = "";
					document.getElementById("txtbxGuardianOccupation").disabled = false;
				}
				else
				{
					document.getElementById("txtbxGuardianOccupation").disabled = false;
					document.getElementById("txtbxGuardianNameOfEmployer").disabled = false;
					document.getElementById("txtbxGuardianAddressOfEmployer").disabled = false;
				}
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
				$('#txtbxNoOfChildrenInTheFamily, #dropdownOrdinalPosition').change(function() {
					var txtbxNoOfChildrenInTheFamily = $('#txtbxNoOfChildrenInTheFamily').val();
					var dropdownOrdinalPosition = $('#dropdownOrdinalPosition').val();
					if( txtbxNoOfChildrenInTheFamily < 1 || txtbxNoOfChildrenInTheFamily > 69)
					{
						document.getElementById("txtbxNoOfChildrenInTheFamily").value = "";
						document.getElementById("txtbxNoOfChildrenInTheFamily").placeholder = "Invalid No. Of Child(ren)";
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
					else if( txtbxNoOfChildrenInTheFamily < 2 && txtbxNoOfChildrenInTheFamily > 0)
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
					else if( txtbxNoOfChildrenInTheFamily >= 2 && dropdownOrdinalPosition == "Only Child")
					{
						document.getElementById("dropdownOrdinalPosition").value = "First";
						document.getElementById("txtbxNoOfBrothersSistersGainfullyEmployed").disabled = false;
						document.getElementById("txtbxNoOfBrothers").disabled = false;
						document.getElementById("txtbxNoOfSisters").disabled = false;
						document.getElementById("dropdownOrdinalPosition").disabled= false;
					}
					else if( txtbxNoOfChildrenInTheFamily <= 0)
					{
						document.getElementById("txtbxNoOfChildrenInTheFamily").value = "";
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
				$('input[name="radioVision"]').change(function() 
				{
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
				var temp="<?php echo $varcharStudentCityCity;?>"; 
				$("#dropdownCityAddress").val(temp);
				var temp="<?php echo $varcharStudentProvinceProvince;?>"; 
				$("#dropdownProvincialAddress").val(temp);
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
				if( '<?php echo $varcharStudentMotherStatus; ?>' == 'Deceased')
				{
					<?php //echo"alert('".$varcharStudentMotherStatus."');"; ?>
					document.getElementById("dropdownMotherOccupationType").disabled = true;
					document.getElementById("txtbxMotherOccupation").disabled = true;
					document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
					document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
					document.getElementById("dropdownMotherOccupationType").value = "Unemployed";
					document.getElementById("txtbxMotherOccupation").value = "";
					document.getElementById("txtbxMotherNameOfEmployer").value = "";
					document.getElementById("txtbxMotherAddressOfEmployer").value = "";
				}
				if( '<?php echo $varcharStudentFatherStatus; ?>' == 'Deceased')
				{
					document.getElementById("dropdownFatherOccupationType").disabled = true;
					document.getElementById("txtbxFatherOccupation").disabled = true;
					document.getElementById("txtbxFatherNameOfEmployer").disabled = true;
					document.getElementById("txtbxFatherAddressOfEmployer").disabled = true;
					document.getElementById("dropdownFatherOccupationType").value = "Unemployed";
					document.getElementById("txtbxFatherOccupation").value = "";
					document.getElementById("txtbxFatherNameOfEmployer").value = "";
					document.getElementById("txtbxFatherAddressOfEmployer").value = "";
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
				if ("<?php echo $varcharStudentProvinceProvince?>" == "") 
				{
					document.getElementById("txtbxProvinceHouseNumber").disabled = true;
					document.getElementById("txtbxProvinceBarangay").disabled = true;
					document.getElementById("txtbxProvinceCity").disabled = true;
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
				var otherClubInterest = "";
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
				var otherOrgInterest = "";
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

document.querySelectorAll('input[data-max-words]').forEach(input => {
				// Remember the word limit for the current input
				let maxWords = parseInt(input.getAttribute('data-max-words') || 0)
			  // Add an eventlistener to test for key inputs
			  input.addEventListener('keydown', e => {
			  	let target = e.currentTarget
			    // Split the text in the input and get the current number of words
			    let words = target.value.split(/\s+/).length
			    // If the word count is > than the max amount and a space is pressed
			    // Don't allow for the space to be inserted
			    if (!target.getAttribute('data-announce'))
			      // Note: this is a shorthand if statement
			      // If the first two tests fail allow the key to be inserted
			      // Otherwise we prevent the default from happening
			      words >= maxWords && e.keyCode == 32 && e.preventDefault()
			      else
			      	words >= maxWords && e.keyCode == 32 && (e.preventDefault() || alert('Word Limit Reached'))
			  })
			})
		</script>
		
	</body>
	</html>