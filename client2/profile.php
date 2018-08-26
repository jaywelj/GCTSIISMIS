<?php
include("session.php");
include("iircheck.php"); 
?>
<?php
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
$_SESSION['sessionStudentAccountNumber'] = $varcharStudentAccountNumber;
$_SESSION['sessionStudentAccountPassword'] = $varcharStudentAccountPassword;
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

	$tempStudentCityAddress = $varcharStudentCityHouseNumber .'  '. $varcharStudentCityCity .' '. $varcharStudentCityBarangay; 

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
	$varcharStudentElementarySchoolName = $res2point5['elemSchoolName'];
	$varcharStudentElementarySchoolAddress = $res2point5['elemSchoolAddress'];
	$varcharStudentElementarySchoolType = $res2point5['elemType'];
	$varcharStudentElementarySchoolYearAttended = $res2point5['elemYearAttended'];
	$varcharStudentElementarySchoolAwards = $res2point5['elemAwards'];
	$varcharStudentHSSchoolName = $res2point5['hsSchoolName'];
	$varcharStudentHSSchoolAddress = $res2point5['hsSchoolAddress'];
	$varcharStudentHSSchoolType = $res2point5['hsType'];
	$varcharStudentHSSchoolYearAttended = $res2point5['hsYearAttended'];
	$varcharStudentHSSchoolAwards = $res2point5['hsAwards'];
	$varcharStudentVocationalSchoolName = $res2point5['vocSchoolName'];
	$varcharStudentVocationalSchoolAddress = $res2point5['vocSchoolAddress'];
	$varcharStudentVocationalSchoolType = $res2point5['vocType'];
	$varcharStudentVocationalSchoolYearAttended = $res2point5['vocYearAttended'];
	$varcharStudentVocationalAwards = $res2point5['vocAwards'];
	$varcharStudentCollegeSchoolName = $res2point5['collegeSchoolName'];
	$varcharStudentCollegeSchoolAddress = $res2point5['collegeSchoolAddress'];
	$varcharStudentCollegeSchoolType = $res2point5['collegeType'];
	$varcharStudentCollegeSchoolYearAttended = $res2point5['collegeYearAttended'];
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
	$varcharStudentSex = "Female";
}
else if($varcharStudentSex == "M"){
	$varcharStudentSex = "Male";
}

$varcharStudentDisplayPic =  "getimage.php?id=2015-01438-MN-0";

if(isset($_POST['btnUpdate']))
{
	include_once("connectionString.php");

	$varcharStudentNumber	= $varcharStudentNumber;

	$varcharStudentFirstName = mysqli_real_escape_string($connect, $_POST['txtbxStudentFirstName']);

	$varcharStudentMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxStudentMiddleName']);

	$varcharStudentLastName = mysqli_real_escape_string($connect, $_POST['txtbxStudentLastName']);

	$varcharStudentAbout = mysqli_real_escape_string($connect, $_POST['txtbxStudentAbout']);

	$varcharStudentCourse = mysqli_real_escape_string($connect, $_POST['selectStudentCourse']);

	$varcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentYear']);

	$varcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentSection']);

	$queryGetCollege = "SELECT tbl_college.collegeCode FROM tbl_course INNER JOIN tbl_college ON tbl_course.collegeCode = tbl_college.collegeCode WHERE courseCode = '$varcharStudentCourse' ;";
	$queryGetCollegeArray = mysqli_query($connect, $queryGetCollege);
	while ($row = mysqli_fetch_array($queryGetCollegeArray))
	{
		$varcharStudentCollege = $row['collegeCode'];
	}
	if(!empty($_FILES['fileEditStudentImage']['tmp_name']) && file_exists($_FILES['fileEditStudentImage']['tmp_name'])) 
	{
		$varcharStudentImage = addslashes(file_get_contents($_FILES["fileEditStudentImage"]["tmp_name"]));
	}
	else
	{
		$varcharStudentImage = NULL;
	}
	$varcharStudentPassword = mysqli_real_escape_string($connect, $_POST['txtbxStudentPassword']);
	$varcharStudentCPassword = mysqli_real_escape_string($connect, $_POST['txtbxStudentCPassword']);
	$varcharStudentCurPassword = mysqli_real_escape_string($connect, $_POST['txtbxStudentCurPassword']);
	// checking empty fields
	if(empty($varcharStudentFirstName)) 
	{

		if(empty($varcharStudentFirstName))
		{
			$message = "Enter a First Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else if($varcharStudentCPassword<>$varcharStudentPassword)
	{
		$message = "Password does not match";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else if($varcharStudentCurPassword <> $varcharStudentAccountPassword)
	{
		$message = "Wrong password";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else 
	{ 
		// if all the fields are filled (not empty) 
		//insert data to database   
		if (!empty($varcharStudentImage)) 
		{
			$queryEdit = "
			UPDATE `tbl_studentaccount` AS A
			INNER JOIN tbl_personalinfo AS B 
			ON A.studentNumber = B.studentNumber 
			SET `firstName` = '$varcharStudentFirstName', `middleName` = '$varcharStudentMiddleName', `lastName` = '$varcharStudentLastName', 'aboutStudent' = '$varcharStudentAbout', courseCode = '$varcharStudentCourse', collegeCode = '$varcharStudentCollege', year = '$varcharStudentYear', section = '$varcharStudentSection',`studentDisplayPic` = '$varcharStudentImage', studentPassword = '$varcharStudentPassword' 
			WHERE A.studentNumber = '$varcharStudentNumber'";
			$message = "0";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$queryEdit = "
			UPDATE `tbl_studentaccount` AS A
			INNER JOIN tbl_personalinfo AS B 
			ON A.studentNumber = B.studentNumber 
			SET `firstName` = '$varcharStudentFirstName', `middleName` = '$varcharStudentMiddleName', `lastName` = '$varcharStudentLastName', aboutStudent = '$varcharStudentAbout', courseCode = '$varcharStudentCourse', collegeCode = '$varcharStudentCollege', year = '$varcharStudentYear', section = '$varcharStudentSection', studentPassword = '$varcharStudentPassword'
			WHERE A.studentNumber = '$varcharStudentNumber'";
			$message = "1";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(!mysqli_query($connect, $queryEdit))
		{
			$message = "Query Error" ;
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo("Error description: " . mysqli_error($connect));
		}
		else
		{
			$_SESSION['sessionStudentAccountPassword'] = $varcharStudentPassword;
			$message = "Student Account Updated Successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'profile.php';</script>";	
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/GCTS LOGO1.png">
	<title>Profile | OCPS</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
	Theme Name: Mentor
	Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
	Author: BootstrapMade.com
	Author URL: https://bootstrapmade.com
	======================================================= -->
</head>

<body>


	<!--Navigation bar-->
	<?php
	include("navbar.php");
	?>
	<!--/ Navigation bar-->

	<!--Banner-->
	<div class="banner">
		<div class="bg-color">
			<div class="container">
				<div class="row">
					<div class="banner-text text-center" style="margin-top:-40px">
						<div class="text-border" style="border:none;">
							<figure>
								<?php
								$resultDisplayImage = mysqli_query($connect,"SELECT * FROM `tbl_studentaccount`WHERE studentNumber = '$varcharStudentNumber'");

								while($resDisplayImage = mysqli_fetch_array($resultDisplayImage))
								{
									$studentDisplayPic = $resDisplayImage['studentDisplayPic'];
									if(empty($studentDisplayPic))
									{
										echo '   
										<tr>  
										<td>  
										<label for="fileEditStudentImage"title="CHANGE PROFILE PICTURE">
										<img src="img/user.png"  height="260" width="260" class="img-thumnail"  style="margin: 10px 0 10px 0; object-fit:cover; "/>  
										</label>
										</td>  
										</tr>  
										';  
									}
									else{
										echo '  
										<tr>  
										<td>
										<label for="fileEditStudentImage" title="CHANGE PROFILE PICTURE">  
										<img src="data:image/jpeg;base64,'.base64_encode($studentDisplayPic).'" height="260" width="260" class="img-thumnail"  style="margin: 10px 0 10px 0; object-fit:cover; "/>  
										</label>
										</td>  
										</tr>  
										';  
									}
								}

								?>
								<br />
							</figure>

						</div>
						<div class="intro-para text-center quote">
							<p class="big-text"><?php echo $varcharStudentFirstName.' '.$varcharStudentMiddleName.' '.$varcharStudentLastName ?> </p>
							<p class="small-text"><?php echo $varcharStudentAbout ?></p>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_data_Modal" id="btn-edit" name="btn-edit">Edit Info</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ Banner-->
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-12 col-lg-9 col-lg-offset-2" style="">
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
													<td><?php echo $varcharStudentCityHouseNumber." ".$varcharStudentCityCity." ".$varcharStudentCityBarangay; ?></td>
												</tr>
												<tr>
													<th scope="row">Provincial Address</th>
													<td><?php echo $varcharStudentProvinceHouseNumber." ".$varcharStudentProvinceProvince." ".$varcharStudentProvinceCity." ".$varcharStudentProvinceBarangay; ?></td>
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
													<td><?php echo $varcharStudentVisionProblem; 
													echo ($varcharStudentVisionProblem =='')?'None':''; ?> </td>
												</tr>
												<tr>
													<th scope="row">Hearing</th>
													<td><?php echo $varcharStudentHearingProblem;
													echo ($varcharStudentHearingProblem =='')?'None':''; ?></td>
												</tr>
												<tr>
													<th scope="row">Speech</th>
													<td><?php echo $varcharStudentSpeechProblem;
													echo ($varcharStudentSpeechProblem =='')?'None':''; ?></td>
												</tr>
												<tr>
													<th scope="row">Your general health</th>
													<td><?php echo $varcharStudentGeneralHealth;
													echo ($varcharStudentGeneralHealth =='')?'None':''; ?></td>
												</tr>
											</tbody>
										</table>
										<h4 class="heading">II. Psychological</h4>
										<table class="table">
											<tbody>
												<tr>
													<th scope="row" style="width: 400px;">Consulted any of the ff:</th>
													<td></td>
												</tr>
												<tr>
													<th scope="row">Psychiatrist</th>
													<td><?php echo $varcharStudentPsychiatristConsult; 
													echo ($varcharStudentPsychiatristConsult =='')?'None':'';?></td>
												</tr>
												<tr>
													<th scope="row">When</th>
													<td><?php echo $varcharStudentPsychiatristWhen; ?></td>
												</tr>
												<tr>
													<th scope="row">For What</th>
													<td><?php echo $varcharStudentPsychiatristReason; 
													echo ($varcharStudentPsychiatristReason =='')?'None':'';?></td>
												</tr>
												<tr>
													<th scope="row">Psychologist</th>
													<td><?php echo $varcharStudentPsychologistConsult; 
													echo ($varcharStudentPsychologistConsult =='')?'None':'';?></td>
												</tr>
												<tr>
													<th scope="row">When</th>
													<td><?php echo $varcharStudentPsychologistWhen; ?></td>
												</tr>
												<tr>
													<th scope="row">For What</th>
													<td><?php echo $varcharStudentPsychologistReason; 
													echo ($varcharStudentPsychologistReason =='')?'None':'';?></td>
												</tr>
												<tr>
													<th scope="row">Counselor</th>
													<td><?php echo $varcharStudentCounselorConsult; 
													echo ($varcharStudentCounselorConsult =='')?'None':'';?></td>
												</tr>
												<tr>
													<th scope="row">When</th>
													<td><?php echo $varcharStudentCounselorWhen; ?></td>
												</tr>
												<tr>
													<th scope="row">For What</th>
													<td><?php echo $varcharStudentCounselorReason; 
													echo ($varcharStudentCounselorReason =='')?'None':'';?></td>
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
													<th scope="row" style="width: 400px;">4.</th>
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
										<h4 class="heading">Test Result</h4>
										<table class="table">
											<tbody>
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

	<!--Footer-->
	<?php
	include("footer.php");
	?>
	<!--/ Footer-->
	<!--Modal Add-->
	<form method="post" enctype="multipart/form-data">
		<div id="edit_data_Modal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
						<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
						<h4 class="modal-title text-center" style="color:white">EDIT ACCOUNT DETAILS</h4>
					</div>
					<div class="modal-body" style=" padding: 25px 50px 5px 50px;">
						<label for="fileEditStudentImage" class="btn btn-default" style="border-radius:50%; margin-left:25%;" title="CHANGE PROFILE PICTURE">
							<?php
							if(!empty($studentDisplayPic))
							{
								echo '<img src="data:image/jpeg;base64,'.base64_encode($studentDisplayPic).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover;  border-radius:50%" id="editProfilePicture">';
							}
							else
							{
								echo '<img src="img/default-user.png"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover;  border-radius:50%" id="editProfilePicture">';
							}
							?>
						</label>
						<br>

						<i class="fa fa-pencil" style="margin-left:46%;"></i>
						<br>
						<input type="file" id="fileEditStudentImage" name="fileEditStudentImage" accept="image/*" style="display:none" onchange="readURL(this);" accept="image/*">
						<label>First Name</label>
						<input type="text" name="txtbxStudentFirstName" id="txtbxStudentFirstName" class="form-control" value="<?php echo $varcharStudentFirstName; ?>"/>
						<br />
						<label>Middle Name</label>
						<input type="text" name="txtbxStudentMiddleName" id="txtbxStudentMiddleName" class="form-control" value="<?php echo $varcharStudentMiddleName; ?>" />
						<br />
						<label>Last Name</label>
						<input type="text" name="txtbxStudentLastName" id="txtbxStudentLastName" class="form-control" value="<?php echo $varcharStudentLastName; ?>" />
						<br />
						<label>Student Description</label>
						<input type="text" name="txtbxStudentAbout" id="txtbxStudentAbout" class="form-control" value="<?php echo $varcharStudentAbout; ?>" />
						<br />
						<?php

								// php select option value from database
						include("connectionString.php");

								// mysql select query
						$queryCourse2 = "SELECT * FROM tbl_course";

								// for method 1/
						$resultCourse2 = mysqli_query($connect, $queryCourse2);

						?>
						<label>Course</label>
						<select name="selectStudentCourse" id="selectStudentCourse" class="form-control">
							<option value="NULL" selected>Select A Course</option>
							<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
								<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
							<?php endwhile;?>
						</select>
						<br />
						<label>Year</label>
						<input type="number" name="txtbxStudentYear" id="txtbxStudentYear" class="form-control" value="<?php echo $varcharStudentYear; ?>"/>
						<br />
						<label>Section</label>
						<input type="number" name="txtbxStudentSection" id="txtbxStudentSection" class="form-control" value="<?php echo $varcharStudentSection; ?>" />
						<br />
						<label>Password</label>
						<input type="password" name="txtbxStudentPassword" id="txtbxStudentPassword" class="form-control" value="<?php echo $varcharStudentAccountPassword; ?>" />
						<br />
						<label>Confirm Password</label>
						<input type="password" name="txtbxStudentCPassword" id="txtbxStudentCPassword" class="form-control" value="<?php echo $varcharStudentAccountPassword; ?>" />
						<small>	
							<div id="divCheckPasswordMatch">
							</div>
						</small>

						<label>Enter Current Password</label>
						<input type="password" name="txtbxStudentCurPassword" id="txtbxStudentCurPassword" class="form-control" required="" />
						<small>	
							<div id="divCheckPasswordMatch">
							</div>
						</small>

					</div>
					<div class="modal-footer">
						<input type="submit" name="btnUpdate" id="btnUpdate" value="Confirm Changes" class="btn btn-warning " />
						<button type="button" class="btn btn-danger  pull-right" data-dismiss="modal">Close</button> 
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--/Modal Edit-->

	
	

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	<script type="text/javascript">
		document.getElementById("txtbxStudentCPassword").onkeyup = function(){
			checkPassword();
		};
		document.getElementById("txtbxStudentPassword").onkeyup = function(){
			checkPassword();
		};
		function checkPassword(){
			var password = document.getElementById("txtbxStudentPassword").value;
			var cpassword = document.getElementById("txtbxStudentCPassword").value;
			if(cpassword != "")
			{
				if(password == "")
				{
					document.getElementById("divCheckPasswordMatch").innerHTML = "Please input password";
				}
				else if( password != cpassword)
				{
					document.getElementById("divCheckPasswordMatch").innerHTML = "Password does not match";
				}
				else
				{
					document.getElementById("divCheckPasswordMatch").innerHTML = "Password matched";
				}
			}
			else if(cpassword == "" && password == "")
			{
				document.getElementById("divCheckPasswordMatch").innerHTML = "";
			}
			
		}
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#editProfilePicture')
					.attr('src', e.target.result)
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

	<script>
		var course = '<?php echo $varcharStudentCourse;?>';
		$("#selectStudentCourse").val(course).change();
	</script>

</body>


</html>
