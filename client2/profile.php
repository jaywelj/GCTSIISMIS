<?php
include("session.php");
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

while($res2 = mysqli_fetch_array($result2)){

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
	$varcharStudentEmail = $res2['email'];
	$varcharStudentCivilStatus = $res2['civilStatus'];
	$varcharStudentBirthdate = $res2['birthDate'];
	$varcharStudentHeight = $res2['height'];
	$varcharStudentWeight = $res2['weight'];
	$varcharStudentComplexion = $res2['complexion'];
	$varcharStudentBirthplace = $res2['birthPlace'];
	$varcharStudentCityHouseNumber = $res2['cityHouseNumber'];
	$varcharStudentCityProvince = $res2['cityProvince'];
	$varcharStudentCityCity = $res2['cityName'];
	$varcharStudentCityBarangay = $res2['cityBarangay'];

	$tempStudentCityAddress = $varcharStudentCityHouseNumber .' '. $varcharStudentCityProvince .' '. $varcharStudentCityCity .' '. $varcharStudentCityBarangay; 

	$varcharStudentProvinceHouseNumber = $res2['provinceHouseNumber'];
	$varcharStudentProvinceProvince = $res2['provinceProvincial'];
	$varcharStudentProvinceCity = $res2['provinceName'];
	$varcharStudentProvinceBarangay = $res2['provinceBarangay'];

	$tempStudentProvinceAddress = $varcharStudentProvinceHouseNumber .' '.  $varcharStudentProvinceProvince . ' ' . $varcharStudentProvinceCity . ' ' .  $varcharStudentProvinceBarangay;

	$varcharStudentTelNum = $res2['telNumber'];
	$varcharStudentMobileNum = $res2['mobileNumber'];
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
	$varcharStudentFatherOccupation = $res3['fatherOccupation'];
	$varcharStudentFatherEmployerName = $res3['fatherEmployerName'];
	$varcharStudentFatherEmployerAddress = $res3['fatherEmployerAdd'];

	$varcharStudentMotherName = $res3['motherName'];
	$varcharStudentMotherAge = $res3['motherAge'];
	$varcharStudentMotherStatus = $res3['motherStatus'];
	$varcharStudentMotherEducation = $res3['motherEducation'];
	$varcharStudentMotherOccupation = $res3['motherOccupation'];
	$varcharStudentMotherEmployerName = $res3['motherEmployerName'];
	$varcharStudentMotherEmployerAddress = $res3['motherEmployerAdd'];

	$varcharStudentGuardianName = $res3['guardianName'];
	$varcharStudentGuardianAge = $res3['guardianAge'];
	$varcharStudentGuardianRelation = $res3['guardianRelation'];
	$varcharStudentGuardianEducation = $res3['guardianEducation'];
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
	$varcharStudentJoinedOrganization = $res5['interestOrganization'];
	$varcharStudentInterestOrganization = $res5['interestOrganization'];
	$varcharStudentOrganizationPosition = $res5['organizationPosition'];

}
$result6 = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC LIMIT 1");
while($res6 = mysqli_fetch_array($result6)){

	$varcharStudentTestID = $res6['testID'];
	$varcharStudentTestName = $res6['testName'];
	$varcharStudentTestRawScore = $res6['testRawScore']; 
	$varcharStudentTestPercentile = $res6['testPercentile'];
	$varcharStudentTestDescription = $res6['testDescription'];


}


if($varcharStudentSex = "F"){
	$varcharStudentSex = "Female";
}
else if($varcharStudentSex = "M"){
	$varcharStudentSex = "Male";
}

$varcharStudentDisplayPic =  "getimage.php?id=2015-01438-MN-0";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mentor Education Bootstrap Theme</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
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
						<div class="text-border" style="border-color: white">
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
													<img src="img/user.png"  height="260" width="260" class="img-thumnail" />  
											</td>  
										</tr>  
										';  
									}
									else{
										echo '  
										<tr>  
										<td>  
										<img src="data:image/jpeg;base64,'.base64_encode($resDisplayImage['studentDisplayPic'] ).'" height="260" width="260" class="img-thumnail" />  
										</td>  
										</tr>  
										';  
									}
								}

								?>
							</figure>
						</div>
						<div class="intro-para text-center quote">
							<p class="big-text"><?php echo $varcharStudentFirstName.' '.$varcharStudentMiddleName.' '.$varcharStudentLastName ?> </p>
							<p class="small-text"><?php echo $varcharStudentAbout ?></p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ Banner-->
	
	
	<!--Footer-->
	<?php
	include("footer.php");
	?>
	<!--/ Footer-->

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>
