<?php
session_start();
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
?>
<?php


include("connectionString.php");

$VarcharStudentNumber = $_SESSION['sessionStudentAccountNumber'];
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
if(isset($_POST['btnAdd'])) 
{	

                    						//including the database connection file
	include("connectionString.php");

	$message = "Button Is Pressed";
	echo "<script type='text/javascript'>alert('$message');</script>";

	$VarcharStudentFirstName = mysqli_real_escape_string($connect, $_POST['txtbxStudentFirstName']);

	$VarcharStudentLastName = mysqli_real_escape_string($connect, $_POST['txtbxStudentLastName']);

	$VarcharStudentMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxStudentMiddleName']);

	$VarcharStudentCourse = mysqli_real_escape_string($connect, $_POST['dropdownStudentCourse']);

	$VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentYear']);

	$VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentSection']);

	$queryCourse = "SELECT * FROM tbl_course WHERE courseCode = '$VarcharStudentCourse'";
	$resultCourse = mysqli_query($connect, $queryCourse);
	while ($res = mysqli_fetch_array($resultCourse)) {

		$VarcharStudentCourseName = $res['courseName'];
		$VarcharStudentCollegeCode = $res['collegeCode'];
	}

	$queryCollege = "SELECT * FROM tbl_college WHERE collegeCode = '$VarcharStudentCollegeCode'";
	$resultCollege = mysqli_query($connect, $queryCollege);
	while ($res1 = mysqli_fetch_array($resultCollege)) {
		$VarcharStudentCollege = $res['collegeCode'];
		$VarcharStudentCollegeName = $res['collegeName'];
	}

	$VarcharStudentGender = mysqli_real_escape_string($connect, $_POST['radioGender']);

	$VarcharStudentSexuality = mysqli_real_escape_string($connect, $_POST['dropdownStudentSexuality']);

	$VarcharOthersSexuality = mysqli_real_escape_string($connect, $_POST['txtbxSexualityOthers']);

	if($VarcharStudentSexuality == "Others")
	{
		$VarcharStudentSexuality = $VarcharOthersSexuality;
	}
	else
	{

	}

	$VarcharStudentAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentAge']);

	$VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentYear']);

	$VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentSection']);

	$VarcharStudentCivilStatus = mysqli_real_escape_string($connect, $_POST['dropdownStudentCivilStatus']);

	$VarcharStudentCivilStatusOthers = mysqli_real_escape_string($connect, $_POST['txtbxStudentCivilStatusOthers']);

	if ($VarcharStudentCivilStatus == "Others") 
	{
		$VarcharStudentCivilStatus = $VarcharStudentCivilStatusOthers;	
	}

	$VarcharStudentBirthdate = mysqli_real_escape_string($connect, $_POST['txtbxStudentBirthdate']);

	$VarcharStudentHeight = mysqli_real_escape_string($connect, $_POST['txtbxStudentHeight']);

	$VarcharStudentWeight = mysqli_real_escape_string($connect, $_POST['txtbxStudentWeight']);

	$VarcharStudentComplexion = mysqli_real_escape_string($connect, $_POST['dropdownStudentComplexion']);

	$VarcharStudentComplexionOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersComplexion']);

	if ($VarcharStudentComplexion == "Others") {

	$VarcharStudentComplexion = $VarcharStudentComplexionOthers;
}
else
{

}

$VarcharStudentBirthplace = mysqli_real_escape_string($connect, $_POST['txtbxStudentPlaceOfBirth']);

$VarcharStudentCityHouseNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityHouseNumber']);

$VarcharStudentCityProvince = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityProvince']);

$VarcharStudentCityCity = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityCity']);

$VarcharStudentCityBarangay = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityBarangay']);

$VarcharStudentProvinceHouseNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialHouseNumber']);

$VarcharStudentProvinceProvince = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialProvince']);

$VarcharStudentProvinceCity = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialCity']);

$VarcharStudentProvinceBarangay = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialBarangay']);

$VarcharStudentTelNum = mysqli_real_escape_string($connect, $_POST['txtbxStudentTelNum']);

$VarcharStudentMobileNum = mysqli_real_escape_string($connect, $_POST['txtbxStudentMobileNum']);

$VarcharStudentEmail = mysqli_real_escape_string($connect, $_POST['txtbxStudentEmail']);

$VarcharStudentHSGWA = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSGenAve']);

$VarcharStudentReligion = mysqli_real_escape_string($connect, $_POST['dropdownStudentReligion']);

$VarcharStudentReligionOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersReligion']);

if($VarcharStudentReligion == "Others")
{
	$VarcharStudentReligion = $VarcharStudentReligionOthers;
}
else
{

}

$VarcharStudentNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentNameOfEmployer']);

$VarcharStudentEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentAddressoFEmployer']);

$VarcharStudentContactPersonName = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonName']);

$VarcharStudentContactPersonAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonAddress']);

$VarcharStudentContactPersonRelationshipOthers = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonRelationOthers']);

$VarcharStudentContactPersonRelationship = mysqli_real_escape_string($connect, $_POST['dropdownstudentContactPersonRelation']);

if ($VarcharStudentContactPersonRelationship == "Others") {
$VarcharStudentContactPersonRelationship = $VarcharStudentContactPersonRelationshipOthers;
}

$VarcharStudentContactPersonContactNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonContactNumber']);
//End of the first form wizard-->

//Start of the second form wizard-->
$VarcharStudentPreSchoolName = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemGrad']);

$VarcharStudentPreSchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemAddress']);

$VarcharStudentPreSchoolType = mysqli_real_escape_string($connect, $_POST['radioPrepType']);

$VarcharStudentPreSchoolYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemNumOfAttendance1']);
$VarcharStudentPreSchoolYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemNumOfAttendance2']);

$VarcharStudentPreSchoolYearAttended = $VarcharStudentPreSchoolYearAttended1 . ' - ' . $VarcharStudentPreSchoolYearAttended2;

$VarcharStudentPreSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemHonors']);

$VarcharStudentElementarySchoolName = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemGrad']);

$VarcharStudentElementarySchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemAddress']);

$VarcharStudentElementaryType = mysqli_real_escape_string($connect, $_POST['radioElemType']);

$VarcharStudentElementaryYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemNumOfAttendance1']);
$VarcharStudentElementaryYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemNumOfAttendance2']);

$VarcharStudentElementaryYearAttended = $VarcharStudentElementaryYearAttended1 . ' - ' . $VarcharStudentElementaryYearAttended2;


$VarcharStudentElementaryHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemHonors']);

$VarcharStudentHSSchoolName = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSGrad']);

$VarcharStudentHSSchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSAddress']);

$VarcharStudentHSSchoolType = mysqli_real_escape_string($connect, $_POST['radioHSType']);

$VarcharStudentHSSchoolYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSNumOfAttendance1']);
$VarcharStudentHSSchoolYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSNumOfAttendance2']);

$VarcharStudentHSSchoolYearAttended = $VarcharStudentHSSchoolYearAttended1 . ' - ' . $VarcharStudentHSSchoolYearAttended2;


$VarcharStudentHSSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSHonors']);

$VarcharStudentCollegeName = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeGrad']);

$VarcharStudentCollegeAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeAddress']);

$VarcharStudentCollegeType = mysqli_real_escape_string($connect, $_POST['radioCollegeType']);

$VarcharStudentCollegeYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeNumofAttendance1']);
$VarcharStudentCollegeYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeNumofAttendance2']);

$VarcharStudentCollegeYearAttended = $VarcharStudentCollegeYearAttended1 . ' - ' . $VarcharStudentCollegeYearAttended2;

$VarcharStudentCollegeHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeHonors']);

$VarcharStudentVocationalName = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalGrad']);

$VarcharStudentVocationalAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalAddress']);

$VarcharStudentVocationalType = mysqli_real_escape_string($connect, $_POST['radioVocationalType']);

$VarcharStudentVocationalYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalNumOfAttendance1']);
$VarcharStudentVocationalYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalNumOfAttendance2']);

$VarcharStudentVocationalYearAttended = $VarcharStudentVocationalYearAttended1 . ' - ' . $VarcharStudentVocationalYearAttended2;

$VarcharStudentVocationalHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalHonors']);

$VarcharStudentNatureOfSchooling = mysqli_real_escape_string($connect, $_POST['dropdownStudentNatureOfSchooling']);

$VarcharStudentInterruptedWhy = mysqli_real_escape_string($connect, $_POST['txtbxStudentInterruptedWhy']);

if($VarcharStudentNatureOfSchooling == "Interrupted")
{
	$VarcharStudentNatureOfSchooling = $VarcharStudentInterruptedWhy;
}
else
{

}

//End Of part 2 of form wizard-->

//Start of part 3 of the form wizard -->

$VarcharStudentFatherName = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherName']);

$VarcharStudentFatherAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherAge']);

$VarcharStudentFatherStatus = mysqli_real_escape_string($connect, $_POST['radioStudentFatherStatus']);

$VarcharStudentFatherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownStudentFatherEducationalAttainment']);

$VarcharStudentFatherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherOccupation']);

$VarcharStudentFatherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherNameOfEmployer']);

$VarcharStudentFatherEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherEmployerAddress']);

$VarcharStudentMotherName = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherName']);

$VarcharStudentMotherAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherAge']);

$VarcharStudentMotherStatus = mysqli_real_escape_string($connect, $_POST['radioStudentMotherStatus']);

$VarcharStudentMotherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownStudentMotherEducationalAttainment']);

$VarcharStudentMotherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherOccupation']);

$VarcharStudentMotherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherNameOfEmployer']);

$VarcharStudentMotherEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherAddressOfEmployer']);

$VarcharStudentGuardianName = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianName']);

$VarcharStudentGuardianAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianAge']);

$VarcharStudentGuardianRelation = mysqli_real_escape_string($connect, $_POST['dropdownstudentGuardianRelation']);

$VarcharStudentGuardianRelationOthers = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianRelationOthers']);

if ($VarcharStudentGuardianRelation == "Others") {
$VarcharStudentGuardianRelation = $VarcharStudentGuardianRelationOthers;
}

$VarcharStudentGuardianEducationAttainment = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianEducationalAttainment']);

$VarcharStudentGuardianOccupation = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianOccupation']);

$VarcharStudentGuardianNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianNameOfEmployer']);

$VarcharStudentGuardianEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianAddressOfEmployer']);

$VarcharStudentParentMaritalRelationship = mysqli_real_escape_string($connect, $_POST['dropdownStudentParentMaritalRelationship']);

$VarcharOthersParentMaritalRelationship = mysqli_real_escape_string($connect, $_POST['txtbxStudentParentMaritalRelationshipOthers']);

if ($VarcharStudentParentMaritalRelationship == "Others") 
{
	$VarcharStudentParentMaritalRelationship = $VarcharOthersParentMaritalRelationship;
}
else
{

}

$VarcharStudentNumOfChildren = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfChildren']);

$VarcharStudentNumOfBrothers = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfBrothers']);

$VarcharStudentNumOfSisters = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfSisters']);

$VarcharStudentSiblingsEmployed = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfSiblingsEmployed']);

$VarcharStudentSiblingsEmployedMoreThan0 = mysqli_real_escape_string($connect, $_POST['dropdownStudentProvidingSupport']);


$VarcharStudentOrdinalPosition = mysqli_real_escape_string($connect, $_POST['dropdownStudentOrdinalPosition']);

$VarcharStudentSiblingSupporter = mysqli_real_escape_string($connect, $_POST['dropdownStudentProvidingSupport']);

$VarcharStudentFinancer = mysqli_real_escape_string($connect, $_POST['dropdownStudentFinancer']);

$VarcharOthersFinancer = mysqli_real_escape_string($connect, $_POST['txtbxOthersFinancer']);

if ($VarcharStudentFinancer == "Others") {
$VarcharStudentFinancer = $VarcharOthersFinancer;
}
else {
# code...
}

$VarcharStudentWeeklyAllowance = mysqli_real_escape_string($connect, $_POST['txtbxStudentWeeklyAllowance']);

$VarcharStudentMonthlyIncome = mysqli_real_escape_string($connect, $_POST['dropdownStudentTotallyMonthlyIncome']);

$VarcharStudentStudyPlace = mysqli_real_escape_string($connect, $_POST['radioStudentQuietPlace']);

$VarcharStudentRoomSharing = mysqli_real_escape_string($connect, $_POST['radioStudentShareRoom']);

$VarcharStudentRoomSharingYes = mysqli_real_escape_string($connect, $_POST['txtbxStudentWithWhom']);

if ($VarcharStudentRoomSharing == "Yes") 
{
	$VarcharStudentRoomSharing = $VarcharStudentRoomSharingYes;
}
else
{

}

$VarcharStudentNatureOfResidence = mysqli_real_escape_string($connect, $_POST['dropdownStudentNatureOfResidence']);
//End of part 3 of the form wizard 

//Start of par4 of the form wizard

$VarcharStudentVision = mysqli_real_escape_string($connect, $_POST['radioStudentVision']);

$VarcharStudentVisionSpecify = mysqli_real_escape_string($connect, $_POST['txtbxStudentSpeechSpecify']);

if ($VarcharStudentVision == "Yes") {
$VarcharStudentVision = $VarcharStudentVisionSpecify;
}
else
{

}

$VarcharStudentHearing = mysqli_real_escape_string($connect, $_POST['radioStudentHearing']);

$VarcharStudentHearingSpecify = mysqli_real_escape_string($connect, $_POST['txtbxStudentHearingSpecify']);

if ($VarcharStudentHearing == "Yes") 
{
	$VarcharStudentHearing = $VarcharStudentHearingSpecify;
}
else
{

}

$VarcharStudentSpeech = mysqli_real_escape_string($connect, $_POST['radioStudentSpeech']);

$VarcharStudentSpeechSpecify = mysqli_real_escape_string($connect, $_POST['txtbxStudentSpeechSpecify']);

if ($VarcharStudentSpeech == "Yes") 
{
	$VarcharStudentSpeech = $VarcharStudentSpeechSpecify;
}
else
{

}

$VarcharStudentGeneralHealth = mysqli_real_escape_string($connect, $_POST['radioStudentGeneralHealth']);

$VarcharStudentGeneralHealthSpecify = mysqli_real_escape_string($connect, $_POST['txtbxStudentGeneralHealthSpecify']);

if ($VarcharStudentGeneralHealth == "Yes") 
{
	$VarcharStudentGeneralHealth = $VarcharStudentGeneralHealthSpecify;
}

$VarcharStudentPsychiatristConsult = mysqli_real_escape_string($connect, $_POST['radioStudentPsychiatrist']);

$VarcharStudentPsychiatristWhen	= mysqli_real_escape_string($connect, $_POST['txtbxStudentPsychiatristWhen']);

$VarcharStudentPsychiatristWhat = mysqli_real_escape_string($connect, $_POST['txtbxStudentPsychiatristWhat']);

$VarcharStudentPsychologistConsult = mysqli_real_escape_string($connect, $_POST['radioStudentPsychologist']);

$VarcharStudentPsychologistWhen = mysqli_real_escape_string($connect, $_POST['txtbxStudentPsychologistWhen']);

$VarcharStudentPsychologistWhat = mysqli_real_escape_string($connect,$_POST['txtbxStudentPsychologistWhat']);

$VarcharStudentCounselorConsult = mysqli_real_escape_string($connect, $_POST['radioStudentCounselor']);

$VarcharStudentCounselorWhen = mysqli_real_escape_string($connect, $_POST['txtbxStudentCounselorWhen']);

$VarcharStudentCounselorWhat = mysqli_real_escape_string($connect, $_POST['txtbxStudentCounselorWhat']);

//End of Part 4 of the form wizard

//Start of part 5 of the form wizard 

$VarcharStudentClub = mysqli_real_escape_string($connect, $_POST['dropdownStudentClub']);

if (isset($_POST['checkClubInterestNoInterest'])) {
$varcharClubInterest = "No Interest";
} else {
if (isset($_POST['checkClubInterest'])) {
$varcharClubInterestArray = mysqli_real_escape_string($_POST['checkClubInterest']);
$n = count($varcharClubInterestArray);
for ($i = 0; $i < $n - 1; $i++) {
$varcharClubInterest = $varcharClubInterestArray[$i] . "/" . $varcharClubInterest;
}
$varcharClubInterest = $varcharClubInterest . $varcharClubInterestArray[$n - 1];
if (isset($_POST['checkClubInterestOthers'])) {
$varcharClubInterestOthers = mysqli_real_escape_string($_POST['txtbxOthersClubInterest']);
$varcharClubInterest = $varcharClubInterest . "/" . $varcharClubInterestOthers;
}
} else {
if (isset($_POST['checkClubInterestOthers'])) {
$varcharClubInterestOthers = mysqli_real_escape_string($_POST['txtbxOthersClubInterest']);
$varcharClubInterest = $varcharClubInterestOthers;
}
}
}


$VarcharStudentFavoriteSubject = mysqli_real_escape_string($connect, $_POST['txtbxStudentSubjectFavorite']);

$VarcharStudentLeastFavSubject = mysqli_real_escape_string($connect, $_POST['txtbxStudentSubjectLeastLike']);
$VarcharStudentHobbies1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies1']);
$VarcharStudentHobbies2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies2']);
$VarcharStudentHobbies3 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies3']);
$VarcharStudentHobbies4 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies4']);


$varcharOrganizationInterest = "";
if (isset($_POST['checkOrganizationInterestNoInterest'])) {
$varcharOrganizationInterest = "No Interest";
} else {
if (isset($_POST['checkOrganizationInterest'])) {
$varcharOrganizationInterestArray = mysqli_real_escape_string($_POST['checkOrganizationInterest']);
$n = count($varcharOrganizationInterestArray);
for ($i = 0; $i < $n - 1; $i++) {
$varcharOrganizationInterest = $varcharOrganizationInterestArray[$i] . "/" . $varcharOrganizationInterest;
}
$varcharOrganizationInterest = $varcharOrganizationInterest . $varcharOrganizationInterestArray[$n - 1];
if (isset($_POST['checkOrganizationInterestOthers'])) {
$varcharOrganizationInterestOthers = mysqli_real_escape_string($_POST['txtbxOthersOrganizationInterest']);
$varcharOrganizationInterest = $varcharOrganizationInterest . "/" . $varcharOrganizationInterestOthers;
}
} else {
if (isset($_POST['checkOrganizationInterestOthers'])) {
$varcharOrganizationInterestOthers = mysqli_real_escape_string($_POST['txtbxOthersOrganizationInterest']);
$varcharOrganizationInterest = $varcharOrganizationInterestOthers;
}
}
}

$VarcharStudentOrganizationPosition = mysqli_real_escape_string($connect, $_POST['txtbxOrganizationPosition']);
// end of part 5 form wizard 

// start of part 6 form wizard
$VarcharStudentTestDateInitial = mysqli_real_escape_string($connect, $_POST['dateTestResultDateInitial']);
$VarcharStudentTestNameInitial = mysqli_real_escape_string($connect, $_POST['txtbxTestResultNameInitial']);
$VarcharStudentTestRSInitial = mysqli_real_escape_string($connect, $_POST['txtbxTestResultRawScoreInitial']);
$VarcharStudentTestPRInitial = mysqli_real_escape_string($connect, $_POST['txtbxTestResultPercentileRatingInitial']);
$VarcharStudentTestDescriptionInitial = mysqli_real_escape_string($connect, $_POST['txtareaTestResultDescriptionInitial']);

//first name validation if input is a space 
// checking empty fields
if(empty($VarcharStudentNumber)) 
{

	if(empty($VarcharStudentNumber)) 
	{
		$message = "Enter a valid Student Number";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	//link to the previous page
	//echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
} 
else 
{ 

	$queryAddPersonalInfo = "UPDATE `tbl_personalinfo` SET `lastName` = '$VarcharStudentLastName', `firstName` = '$VarcharStudentFirstName', `middleName` = '$VarcharStudentMiddleName', `sex` = '$VarcharStudentGender', `sexuality` = '$VarcharStudentSexuality', `age` = '$VarcharStudentAge', `civilStatus` = '$VarcharStudentCivilStatus', `birthDate` = '$VarcharStudentBirthdate', `height` = '$VarcharStudentHeight', `weight` = '$VarcharStudentWeight', `complexion` = '$VarcharStudentComplexion', `birthPlace` = '$VarcharStudentBirthplace', `cityHouseNumber` = '$VarcharStudentCityHouseNumber', `cityProvince` = '$VarcharStudentCityProvince', `cityName` = '$VarcharStudentCityCity', `cityBarangay` = '$VarcharStudentCityBarangay', `provinceHouseNumber` = '$VarcharStudentProvinceHouseNumber', `provinceProvincial` = '$VarcharStudentProvinceProvince', `provinceName` = '$VarcharStudentProvinceCity', `provinceBarangay` = '$VarcharStudentProvinceBarangay', `telNumber` = '$VarcharStudentTelNum', `mobileNumber` = '$VarcharStudentMobileNum', `email` = '$VarcharStudentEmail', `hsGWA` = '$VarcharStudentHSGWA', `religion` = '$VarcharStudentReligion', `employerName` = '$VarcharStudentNameOfEmployer', `employerAddress` = '$VarcharStudentEmployerAddress', `contactPersonName` = '$VarcharStudentContactPersonName', `cpAddress` = '$VarcharStudentContactPersonAddress', `cpRelationship` = '$VarcharStudentContactPersonRelationship', `cpContactNumber` = 'VarcharStudentContactPersonContactNumber', `collegeCode` = '$VarcharStudentCollege', `courseCode` = '$VarcharStudentCourse' WHERE `tbl_personalinfo`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddEducationalBackground = "UPDATE `tbl_educationalbackground` SET `prepSchoolName` = '$VarcharStudentPreSchoolName', `prepSchoolAddress` = '$VarcharStudentPreSchoolAddress', `prepType` = '$VarcharStudentPreSchoolType', `prepYearAttended` = '$VarcharStudentPreSchoolYearAttended', `prepAwards` = '$VarcharStudentPreSchoolHonorso', `elemSchoolName` = '$VarcharStudentElementarySchoolName', `elemSchoolAddress` = '$VarcharStudentElementarySchoolAddress', `elemType` = '$VarcharStudentElementaryType', `elemYearAttended` = '$VarcharStudentElementaryYearAttended', `elemAwards` = '$VarcharStudentElementaryYearAttended', `hsSchoolName` = '$VarcharStudentHSSchoolName', `hsSchoolAddress` = '$VarcharStudentPreSchoolAddress', `hsType` = '$VarcharStudentHSSchoolType', `hsYearAttended` = '$VarcharStudentHSSchoolYearAttended', `hsAwards` = '$VarcharStudentHSSchoolHonors', `vocSchoolName` = '$VarcharStudentVocationalName', `vocSchoolAddress` = '$VarcharStudentVocationalAddress', `vocType` = '$VarcharStudentVocationalType', `vocYearAttended` = '$VarcharStudentVocationalYearAttended', `vocAwards` = '$VarcharStudentVocationalHonors', `collegeSchoolName` = '$VarcharStudentCollegeName', `collegeSchoolAddress` = '$VarcharStudentCollegeAddress', `collegeType` = '$VarcharStudentCollegeType', `collegeYearAttended` = '$VarcharStudentCollegeYearAttended', `collegeAwards` = '$VarcharStudentCollegeHonors', `natureOfSchooling` = '$VarcharStudentNatureOfSchooling', `interruptedWhy` = '$VarcharStudentInterruptedWhy' WHERE `tbl_educationalbackground`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddFamilyBackground = "UPDATE `tbl_familybackground` SET `fatherName` = '$VarcharStudentFatherName', `fatherAge` = '$VarcharStudentFatherAge', `fatherStatus` = '$VarcharStudentFatherStatus', `fatherEducation` = '$VarcharStudentFatherEducationalAttainment', `fatherOccupation` = '$VarcharStudentFatherOccupation', `fatherEmployerName` = '$VarcharStudentFatherNameOfEmployer', `fatherEmployerAdd` = '$VarcharStudentFatherEmployerAddress', `motherName` = '$VarcharStudentMotherName', `motherAge` = '$VarcharStudentMotherAge', `motherStatus` = '$VarcharStudentMotherStatus', `motherEducation` = '$VarcharStudentMotherEducationalAttainment', `motherOccupation` = '$VarcharStudentMotherOccupation', `motherEmployerName` = '$VarcharStudentMotherNameOfEmployer', `motherEmployerAdd` = '$VarcharStudentMotherEmployerAddress', `guardianName` = '$VarcharStudentGuardianName', `guardianAge` = '$VarcharStudentGuardianAge', `guardianRelation` = '$VarcharStudentGuardianRelation', `guardianEducation` = '$VarcharStudentGuardianEducationAttainment', `guardianOccupation` = '$VarcharStudentGuardianOccupation', `guardianEmployerName` = '$VarcharStudentGuardianNameOfEmployer', `guardianEmployerAdd` = '$VarcharStudentGuardianEmployerAddress', `parentsMaritalRelation` = '$VarcharStudentParentMaritalRelationship', `noOfChildren` = '$VarcharStudentNumOfChildren', `noOfBrother` = '$VarcharStudentNumOfBrothers', `noOfSister` = '$VarcharStudentNumOfSisters', `broSisEmployed` = '$VarcharStudentSiblingsEmployed', `ordinalPosition` = '$VarcharStudentOrdinalPosition', `supportedByYourSibling` = '$VarcharStudentSiblingsEmployedMoreThan0', `schoolFinancer` = '$VarcharStudentFinancer', `weeklyAllowance` = '$VarcharStudentWeeklyAllowance', `totalMonthlyIncome` = '$VarcharStudentMonthlyIncome', `studyPlace` = '$VarcharStudentStudyPlace', `roomSharing` = '$VarcharStudentRoomSharing', `natureOfResidence` = '$VarcharStudentNatureOfResidence' WHERE `tbl_familybackground`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddHealth = "UPDATE `tbl_healthinfo` SET `visionProblem` = '$VarcharStudentVision', `hearingProblem` = '$VarcharStudentHearing', `speechProblem` = '$VarcharStudentSpeech', `generalHealth` = '$VarcharStudentGeneralHealth', `psychiatristConsult` = '$VarcharStudentPsychiatristConsult', `psychiatristWhen` = '$VarcharStudentPsychiatristWhen', `psychiatristReason` = '$VarcharStudentPsychiatristWhat', `psychologistConsult` = '$VarcharStudentPsychologistConsult', `psychologistWhen` = '$VarcharStudentPsychologistWhen', `psychologistReason` = '$VarcharStudentPsychologistWhat', `counselorConsult` = '$VarcharStudentCounselorConsult', `counselorWhen` = '$VarcharStudentCounselorWhen', `counselorReason` = '$VarcharStudentCounselorWhat' WHERE `tbl_healthinfo`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddInterests = "UPDATE `tbl_interesthobbies` SET `clubName` = '$varcharClubInterest', `favSubject` = '$VarcharStudentFavoriteSubject', `leastFavSubject` = '$VarcharStudentLeastFavSubject', `hobby1` = '$VarcharStudentHobbies1', `hobby2` = '$VarcharStudentHobbies2', `hobby3` = '$VarcharStudentHobbies3', `hobby4` = '$VarcharStudentHobbies4', `interestOrganization` = '$varcharOrganizationInterest', `organizationPosition` = 'Nothing' WHERE `tbl_interesthobbies`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddTestResultInitial = "UPDATE `tbl_testrecord` SET `testDate` = '$VarcharStudentTestDateInitial', `testName` = '$VarcharStudentTestNameInitial', `testRawScore` = '$VarcharStudentTestRSInitial', `testPercentile` = '$VarcharStudentTestPRInitial', `testDescription` = '$VarcharStudentTestDescriptionInitial' WHERE `tbl_testrecord`.`studentNumber` = '$VarcharStudentNumber'";
	//$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`, `studentDisplayPic`, `studentCoverPhoto`) VALUES ('435345643',
	if (mysqli_query($connect, $queryAddPersonalInfo)) {
	$message = "Successfully Added In Personal Info";
	echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
	$message = "Query Error #2";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//redirectig to the display page. In our case, it is index.php
	echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";
}

if (mysqli_query($connect, $queryAddEducationalBackground)) {
$message = "Successfully Added In Educational Background";
echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
	$message = "Query Error #3";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//redirectig to the display page. In our case, it is index.php
	echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";
}

if (mysqli_query($connect, $queryAddFamilyBackground)) {
$message = "Successfully Added In Family Background";
echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
	$message = "Query Error #4";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//redirectig to the display page. In our case, it is index.php
	echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";
}

if (mysqli_query($connect, $queryAddHealth)) {
$message = "Successfully Added In Health";
echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
	$message = "Query Error #5";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//redirectig to the display page. In our case, it is index.php
	echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";
}

if (mysqli_query($connect, $queryAddInterests)) {
$message = "Successfully Added In Interest And Hobbies";
echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
	$message = "Query Error #6";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//redirectig to the display page. In our case, it is index.php
	echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";
}

if (mysqli_query($connect, $queryAddTestResultInitial)) {
$message = "Successfully Added In Test Results";
echo "<script type='text/javascript'>alert('$message');</script>";                         
}
else
{
	$message = "Query Error #7";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//redirectig to the display page. In our case, it is index.php
	echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";
}
for($i=0;$i<=count($_POST['txtbxTestResultName']);$i++){

echo $_POST['dateTestResultDate'][$i]; echo"<br>";
echo $_POST['txtbxTestResultName'][$i]; echo"<br>";
echo $_POST['txtbxTestResultRawScore'][$i]; echo"<br>";
echo $_POST['txtbxTestResultPercentileRating'][$i]; echo"<br>";
echo $_POST['txtareaTestResultDescription'][$i]; echo"<br>";

$InsertingTestResultDate = $_POST['dateTestResultDate'][$i];
$InsertingTestResultName = $_POST['txtbxTestResultName'][$i];
$InsertingTestRS = $_POST['txtbxTestResultRawScore'][$i];
$InsertingTestPR = $_POST['txtbxTestResultPercentileRating'][$i];
$InsertingTestResultDescription = $_POST['txtareaTestResultDescription'][$i];

$queryInsertingAdditionalTests = "INSERT INTO `tbl_testrecord` (`testID`, `testDate`, `testName`, `testRawScore`, `testPercentile`, `testDescription`, `studentNumber`) VALUES (NULL, '$InsertingTestResultDate', '$InsertingTestResultName', '$InsertingTestRS', '$InsertingTestPR', '$InsertingTestResultDescription', '$VarcharStudentNumber')";

if (mysqli_query($connect, $queryInsertingAdditionalTests)) {
$message = "Successfully Added In Test Results Additional".$i."";
echo "<script type='text/javascript'>alert('$message');</script>";

echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";                           
}
else
{
	$message = "Query Error #8";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//redirectig to the display page. In our case, it is index.php
	echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordForm.php?id=$VarcharStudentNumber';</script>";
}


$message = $_POST['txtbxTestResultName'][$i];
echo "<script type='text/javascript'>alert('$message');</script>";

}	
}



}
?>
<!doctype html>
<html lang="en">
<head>
	
	<title>Individual Inventory Record</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<style>
	h3 {color:white;}
	p {color:blue;}
</style>
<!--Bootstrap for form-->

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
<link rel="icon" type="image/png" href="assets/img/favicon.png" />

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

<!-- CSS Files -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="assets/css/demo.css" rel="stylesheet" />
<link href="assets/css/disabledtab.css" rel="stylesheet">
<link href="assets/css/buttons.css" rel="stylesheet">

<!--C:\xampp\htdocs\GCTSIISMIS\client\production\assets\css-->
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
		<!--   Creative Tim Branding   -->
		<a href="http://creative-tim.com">
			<div class="logo-container">
				<div class="logo">
					<a href="home.html">
						<img src="assets/img/pup_logo.png">
					</a>
				</div>
				<div class="brand">
					Polytechnic University Of The Philippines
				</div>
			</div>
		</a>

		<!--  Made With Material Kit  -->
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>MK</strong></div>
		</a>

		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="red" id="wizard">
							<form action="IIRNewSignUp.php" method="post" enctype="multipart/form-data">
								<!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

								<div class="wizard-header">
									<h3 class="wizard-title">
										Guidance Counseling And Testing Services
									</h3>
									<h5> Individual Inventory Record Form </h5>
								</div>
								<div class="wizard-navigation">
									<ul>
										<li class="disabledTab"><a href="#personalinformation" data-toggle="tab">I. Personal Information</a></li>
										<li class="disabledTab"><a href="#educationalbackground" data-toggle="tab">II. Educational Background</a></li>
										<li class="disabledTab"><a href="#homeandfamilybackground" data-toggle="tab">III. Home And Family Background</a></li>
										<li class="disabledTab"><a href="#health" data-toggle="tab">IV. Health</a></li>
										<li class="disabledTab"><a href="#interestsandhobbies" data-toggle="tab">V. Interests And Hobbies</a></li>
										<li class="disabledTab"><a href="#testresult" data-toggle="tab" disabled="true">VI. Test Results</a></li>
									</ul>
								</div>

								<?php
								include("connectionString.php");
								$queryStudent = "SELECT * FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE tbl_studentaccount.studentNumber = '$varcharStudentAccountNumber'";
								$resultStudent = mysqli_query($connect, $queryStudent); 
								while($row = mysqli_fetch_array($resultStudent))  
								{  

									$VarcharStudentNumber = $row['studentNumber'];
									$VarcharStudentFirstName = $row['firstName'];
									$VarcharStudentMiddleName = $row['middleName'];
									$VarcharStudentLastName = $row['lastName'];
									$VarcharStudentCourseCode = $row['courseCode'];
									$VarcharStudentYear = $row['year'];
									$VarcharStudentSection =  $row['section'];
								}

								$querySelectingCourse = "SELECT * FROM tbl_course WHERE `courseCode` = '$VarcharStudentCourseCode'";
								$resSelectingCourse = mysqli_query($connect, $querySelectingCourse);
								while($res = mysqli_fetch_array($resSelectingCourse))
								{
									$varcharStudentCourseCode = $res['courseCode'];
									$varcharStudentCourseName = $res['courseName'];
									$varcharStudentCollegeCode = $res['collegeCode'];
								}

								$querySelectingCollege = "SELECT * FROM tbl_college WHERE `collegeCode` = '$varcharStudentCollegeCode'";
								$resSelectingCollege = mysqli_query($connect, $querySelectingCollege);
								while ($res = mysqli_fetch_array($resSelectingCollege)) 
								{
									$VarcharStudentCollegeCode = $res['collegeCode'];
									$VarcharStudentCollegeName = $res['collegeName'];
								}

								?> 

								<div class="tab-content">
									<div class="tab-pane" id="personalinformation">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="info-text"> I. Personal Information </h4>
											</div>
											<!--Upper Left-->
											<div class="col-sm-5 col-sm-offset-1">
												<h4 class="info-text"> Name </h4>
												<div class="form-group label-floating">
													<label class="control-label">First Name</label>
													<input type="text" class="form-control" id="firstname" value="<?php echo $VarcharStudentFirstName ?>" name = "txtbxStudentFirstName" readonly>
												</div>
												<div class="form-group label-floating">
													<label class="control-label">Last Name</label>
													<input type="text" class="form-control" id="lastname" value="<?php echo $VarcharStudentLastName ?>" name="txtbxStudentLastName" readonly>
												</div>
												<div class="form-group label-floating">
													<label class="control-label">Middle Name</label>
													<input type="text" class="form-control" id="middlename" value="<?php echo $VarcharStudentMiddleName ?>" name="txtbxStudentMiddleName" readonly>
												</div>

												<h4 class="info-text"> Physiological Information </h4>

												<div class="form-group label-floating">
													<label class="control-label">Height</label>
													<input type="text" class="form-control" id="height" name="txtbxStudentHeight">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Weight</label>
													<input type="text" class="form-control" id="weight" name="txtbxStudentWeight">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Complexion</label>
													<select class="form-control" name="dropdownStudentComplexion" id="dropdownStudentComplexion">
														<option disabled="" selected=""></option>
														<option value="White Skin">White Skin</option>
														<option value="Fair Sin">Fair Skin</option>
														<option value="Medium Skin">Medium Skin</option>
														<option value="Olive Skin">Olive Skin</option>
														<option value="Tan Brown">Tan Brown</option>
														<option value="Black Brown">Black Brown</option>
														<option value="Dark Skin">Dark Skin</option>
														<option>Others</option>
													</select>
												</div>

												<div class="input-group">
													<input type="text" class="form-control" id="txtbxOthersComplexion" name="txtbxOthersComplexion" disabled="true">
													<span class="input-group-addon">If Others Is Selected</span>
												</div>

												<?php

       								 					// php select option value from database
												include("connectionString.php");

        												// mysql select query
												$queryCollege2 = "SELECT * FROM tbl_college";
												$queryCourse2 = "SELECT * FROM tbl_course";

        												// for method 1/
												$resultCollege2 = mysqli_query($connect, $queryCollege2);
												$resultCourse2 = mysqli_query($connect, $queryCourse2);

												?>
												<h4 class="info-text"> Course, Year and Section </h4>

												<!-- <div class="form-group label-floating">
													<label class="control-label">College</label>
													<select name="dropdownStudentCollege" class="form-control">
														<option disabled=""></option>
														<option value="<?php echo $VarcharStudentCollegeCode;?>"><?php echo $VarcharStudentCollegeCode;?> - <?php echo $VarcharStudentCollegeName;?></option>
														<?php while($row = mysqli_fetch_array($resultCollege2)):;?>
															<option value="<?php echo $row['collegeCode'];?>" disabled=""><?php echo $row['collegeCode'];?> - <?php echo $row['collegeName'];?></option>
														<?php endwhile;?>
													</select>
												</div> -->

												<div class="form-group label-floating">
													<label class="control-label">Course</label>
													<select name="dropdownStudentCourse" class="form-control">
														<option disabled=""></option>
														<option value="<?php echo $VarcharStudentCourseCode;?>"><?php echo $VarcharStudentCourseCode;?> - <?php echo $VarcharStudentCourseName;?></option>
														<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
															<option value="<?php echo $row['courseCode'];?>" disabled=""><?php echo $row['courseCode'];?> - <?php echo $row['courseName'];?></option>
														<?php endwhile;?>
													</select>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Year</label>
													<input type="text" class="form-control" id="year" value="<?php echo $VarcharStudentYear ?>" name="txtbxStudentYear"readonly>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Section</label>
													<input type="text" class="form-control" id="section" value="<?php echo $VarcharStudentSection ?>" name="txtbxStudentSection" readonly>
												</div>


											</div>
											<!--Upper Right-->
											<div class="col-sm-5">
												<h4 class="info-text"> Gender And Sexuality</h4>
												

												<div class="form-group label-floating">
													<label class="control-label">Gender</label>
													<div class="btn-group btn-group-toggle form-check" data-toggle="buttons">
														<br>
														<label class="btn btn-primary">
															<input type="radio" name="radioGender" id="radioGender" autocomplete="off" value="M"><span class="label-text">♂Male</span>
														</label>
														<label class="btn btn-primary">
															<input type="radio" name="radioGender" id="radioGender" autocomplete="off" value="F"><span class="label-text">♀Female</span>
														</label>
													</div>
												</div>


												<div class="form-group label-floating">
													<label class="control-label">Sexuality(Sexual Orientation)</label>
													<select class="form-control" name="dropdownStudentSexuality" id="dropdownStudentSexuality">
														<option disabled="" selected=""></option>
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

												<div class="input-group">
													<input type="text" class="form-control" id="txtbxSexualityOthers" name="txtbxSexualityOthers" disabled="true">
													<span class="input-group-addon">If Others Is Selected</span>
												</div>
												<h4 class="info-text">State</h4>
												<div class="form-group label-floating">
													<label class="control-label">Age</label>
													<input type="text" class="form-control" id="age" name="txtbxStudentAge">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Civil Status</label>
													<select class="form-control" name="dropdownStudentCivilStatus" id="dropdownStudentCivilStatus">
														<option disabled="" selected=""></option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Divorced">Divorced</option>
														<option value="Widowed">Widowed</option>
														<option value="Others">Others</option>
													</select>
												</div>
												<div class="input-group">
													<input type="text" class="form-control" name="txtbxStudentCivilStatusOthers" id="txtbxStudentCivilStatusOthers" disabled="true">
													<span class="input-group-addon">If Others Is Selected</span>
												</div>


												<h4 class="info-text"> Birthdate </h4>

												<div class="form-group label-floating">
													<input type = "date" name="txtbxStudentBirthdate">
												</div>

												<h4 class="info-text"> Other Basic Information </h4>
												<div class="form-group label-floating">
													<label class="control-label">Place Of Birth</label>
													<input type="text" class="form-control" id="placeofbirth" name="txtbxStudentPlaceOfBirth">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Email Address</label>
													<input type="email" class="form-control" id="emailaddress" name="txtbxStudentEmail">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Telephone Number</label>
													<input type="text" class="form-control" id="telnum" name="txtbxStudentTelNum">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Mobile Number</label>
													<input type="text" class="form-control" id="mobilenum" name="txtbxStudentMobileNum">
												</div>

											</div>


											<!--Lower Left-->


											<div class="col-sm-5 col-sm-offset-1">

												<h4 class="info-text"> Location </h4>
												<div class="form-group label-floating">
													<label class="control-label">City-House Number</label>
													<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityHouseNumber">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">City-Province</label>
													<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityProvince" value="NCR" readonly>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">City-City Name</label>
													<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityCity">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">City-City Barangay</label>
													<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityBarangay">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Provincial-Home Number</label>
													<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialHouseNumber">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Provincial-Province</label>
													<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialProvince">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Provincial-City/Municipality</label>
													<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialCity">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Provincial-Barangay</label>
													<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialBarangay">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Highschool General Average</label>
													<input type="text" class="form-control" id="hsgenave" name="txtbxStudentHSGenAve">
												</div>

												<div class="form-group label-floating">
													<label class="control-label" sel>Religion</label>
													<select class="form-control" name="dropdownStudentReligion" id="dropdownStudentReligion">
														<option disabled="" selected=""></option>
														<option>Christianity</option>
														<option>Islam</option>
														<option>Non-Religious</option>
														<option>Hinduism</option>
														<option>Chinese traditional religion</option>
														<option>Buddhism</option>
														<option>Others</option>
													</select>

												</div>

												<div class="input-group">
													<input type="text" class="form-control" id="txtbxOthersReligion" name="txtbxOthersReligion" disabled="true">
													<span class="input-group-addon">If Others Is Selected</span>
												</div>

											</div>
											<!--Lower Right-->
											<div class="col-sm-5">
												<h4 class="info-text"> If You Are Working </h4>
												<div class="form-group label-floating">
													<label class="control-label">Name Of Employer</label>
													<input type="text" class="form-control" id="txtbxStudentNameOfEmployer" name="txtbxStudentNameOfEmployer">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Address Of Employer</label>
													<input type="text" class="form-control" id="txtbxStudentAddressoFEmployer" name="txtbxStudentAddressoFEmployer">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Contact Person Name</label>
													<input type="text" class="form-control" id="txtbxStudentContactPersonName" name="txtbxStudentContactPersonName">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Contact Person Address</label>
													<input type="text" class="form-control" id="txtbxStudentContactPersonAddress" name="txtbxStudentContactPersonAddress">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Relation</label>
													<select name="dropdownstudentContactPersonRelation" id="dropdownstudentContactPersonRelation" class="form-control">
														<option disabled="" selected=""></option>
														<option value="Parent">Parent</option>
														<option value="Step-parent">Step-parent</option>
														<option value="Grandparent">Grandparent</option>
														<option value="Relative">Relative</option>
														<option value="Others">Others</option>
													</select>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Others</label>
													<div class="input-group">
														<input type="text" class="form-control" id="txtbxStudentContactPersonRelationOthers" name="txtbxStudentContactPersonRelationOthers" disabled="true">
														<span class="input-group-addon">If Others Is Selected</span>
													</div>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Contact Person Contact Num</label>
													<input type="text" class="form-control" id="txtbxStudentContactPersonContactNumber" name="txtbxStudentContactPersonContactNumber">
												</div>

											</div>
										</div>
									</div>

									<div class="tab-pane" id="educationalbackground">
										<h4 class="info-text"> II. Educational Background </h4>
										<div class="row">
											<!--Left-->
											<div class="row">
												<div class="col-sm-12">

												</div>
												<!--Upper Left-->
												<div class="col-sm-5 col-sm-offset-1">

													<h4 class="info-text"> Pre-elementary </h4>
													<div class="form-group label-floating">
														<label class="control-label">School Graduated</label>
														<input type="text" class="form-control" id="pre-elemgrad" name="txtbxStudentPre-ElemGrad">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">School Address</label>
														<input type="text" class="form-control" id="pre-elemaddress" name="txtbxStudentPre-ElemAddress">
													</div>

													<div class="form-group label-floating" form-check" data-toggle="buttons">
														<label class="control-label">Type</label>
														<div class="btn-group btn-group-toggle" data-toggle="buttons">
															<br>
															<label class="btn btn-primary">
																<input type="radio" name="radioPrepType" id="radioPrepType" autocomplete="off" value="Public"><span class="label-text">Public</span>
															</label>
															<label class="btn btn-primary">
																<input type="radio" name="radioPrepType" id="radioPrepType" autocomplete="off" value="Private"><span class="label-text">Private</span>
															</label>
														</div>
													</div>

													<div class="form-group label-floating">
														<label class="control-label">From Year</label>
														<input type="number" class="form-control" id="txtbxStudentPre-ElemNumOfAttendance" name="txtbxStudentPre-ElemNumOfAttendance1">
														<!--<span class="input-group-addon">From Year</span>-->
													</div>
													<div class="form-group label-floating">
														<label class="control-label">To Year</label>
														<input type="number" class="form-control" id="txtbxStudentPre-ElemNumOfAttendance" name="txtbxStudentPre-ElemNumOfAttendance2">
														<!--<span class="input-group-addon">To Year</span>-->
													</div>

													<div class="form-group label-floating">
														<label class="control-label">Honors Received/Special Awards</label>
														<input type="text" class="form-control" id="pre-elemhonors" name="txtbxStudentPre-ElemHonors">
													</div>
												</div>
												<!--Upper Right-->
												<div class="col-sm-5">
													<h4 class="info-text"> Elementary </h4>
													<div class="form-group label-floating">
														<label class="control-label">School Graduated</label>
														<input type="text" class="form-control" id="elemgrad" name="txtbxStudentElemGrad">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">School Address</label>
														<input type="text" class="form-control" id="elemaddress" name="txtbxStudentElemAddress">
													</div>

													<div class="form-group label-floating" form-check" data-toggle="buttons">
														<label class="control-label">Type</label>
														<div class="btn-group btn-group-toggle" data-toggle="buttons">
															<br>
															<label class="btn btn-primary">
																<input type="radio" name="radioElemType" id="radioElemType" autocomplete="off" value="Public"><span class="label-text">Public</span>
															</label>
															<label class="btn btn-primary">
																<input type="radio" name="radioElemType" id="radioElemType" autocomplete="off" value="Private"><span class="label-text">Private</span>
															</label>
														</div>
													</div>

													<div class="form-group label-floating">
														<label class="control-label">From Year</label>
														<input type="number" class="form-control" id="elemnumofattendance" name="txtbxStudentElemNumOfAttendance1">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">To Year</label>
														<input type="number" class="form-control" id="elemnumofattendance" name="txtbxStudentElemNumOfAttendance2">
													</div>


													<div class="form-group label-floating">
														<label class="control-label">Honors Received/Special Awards</label>
														<input type="text" class="form-control" id="elemhonors" name="txtbxStudentElemHonors">
													</div>
												</div>
												<!--Lower Left-->
												<div class="col-sm-5 col-sm-offset-1">
													<h4 class="info-text"> Highschool </h4>
													<div class="form-group label-floating">
														<label class="control-label">School Graduated</label>
														<input type="text" class="form-control" id="hsgrad" name="txtbxStudentHSGrad">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">School Address</label>
														<input type="text" class="form-control" id="hsaddress" name="txtbxStudentHSAddress">
													</div>



													<div class="form-group label-floating" form-check" data-toggle="buttons">
														<label class="control-label">Type</label>
														<div class="btn-group btn-group-toggle" data-toggle="buttons">
															<br>
															<label class="btn btn-primary">
																<input type="radio" name="radioHSType" id="radioHSType" autocomplete="off" value="Public"><span class="label-text">Public</span>
															</label>
															<label class="btn btn-primary">
																<input type="radio" name="radioHSType" id="radioHSType" autocomplete="off" value="Private"><span class="label-text">Private</span>
															</label>
														</div>
													</div>

													<div class="form-group label-floating">
														<label class="control-label">From Year</label>
														<input type="number" class="form-control" id="hsnumofattendance" name="txtbxStudentHSNumOfAttendance1">
													</div>
													<div class="form-group label-floating">
														<label class="control-label">To Year</label>
														<input type="number" class="form-control" id="hsnumofattendance" name="txtbxStudentHSNumOfAttendance2">
													</div>


													<div class="form-group label-floating">
														<label class="control-label">Honors Received/Special Awards</label>
														<input type="text" class="form-control" id="hshonors" name="txtbxStudentHSHonors">
													</div>

													<h4 class="info-text"> College (IF Any) </h4>
													<div class="form-group label-floating">
														<label class="control-label">School Graduated</label>
														<div class="input-group">
															<input type="text" class="form-control" id="collegegrad" name="txtbxStudentCollegeGrad">

														</div>
													</div>
													<div class="form-group label-floating">
														<label class="control-label">School Address</label>
														<input type="text" class="form-control" id="collegeaddress" name="txtbxStudentCollegeAddress">
													</div>



													<div class="form-group label-floating" form-check" data-toggle="buttons">
														<label class="control-label">Type</label>
														<div class="btn-group btn-group-toggle" data-toggle="buttons">
															<br>
															<label class="btn btn-primary">
																<input type="radio" name="radioCollegeType" id="radioCollegeType" autocomplete="off" value="Public"><span class="label-text">Public</span>
															</label>
															<label class="btn btn-primary">
																<input type="radio" name="radioCollegeType" id="radioCollegeType" autocomplete="off" value="Private"><span class="label-text">Private</span>
															</label>
														</div>
													</div>

													<div class="form-group label-floating">
														<label class="control-label">From Year</label>
														<input type="number" class="form-control" id="collegenumofattendance" name="txtbxStudentCollegeNumofAttendance1">
													</div>
													<div class="form-group label-floating">
														<label class="control-label">To Year</label>
														<input type="number" class="form-control" id="collegenumofattendance" name="txtbxStudentCollegeNumofAttendance2">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">Honors Received/Special Awards</label>
														<input type="text" class="form-control" id="collegehonors" name="txtbxStudentCollegeHonors">
													</div>



												</div>
												<!--Lower Right-->
												<div class="col-sm-5">
													<h4 class="info-text"> Vocational </h4>
													<div class="form-group label-floating">
														<label class="control-label">School Graduated</label>
														<input type="text" class="form-control" id="vocationalgrad" name="txtbxStudentVocationalGrad">
													</div>
													<div class="form-group label-floating">
														<label class="control-label">School Address</label>
														<input type="text" class="form-control" id="vocationaladdress" name="txtbxStudentVocationalAddress">
													</div>



													<div class="form-group label-floating" form-check" data-toggle="buttons">
														<label class="control-label">Type</label>
														<div class="btn-group btn-group-toggle" data-toggle="buttons">
															<br>
															<label class="btn btn-primary">
																<input type="radio" name="radioVocationalType" id="radioVocationalType" autocomplete="off" value="Public"><span class="label-text">Public</span>
															</label>
															<label class="btn btn-primary">
																<input type="radio" name="radioVocationalType" id="radioVocationalType" autocomplete="off" value="Private"><span class="label-text">Private</span>
															</label>
														</div>
													</div>

													<div class="form-group label-floating">
														<label class="control-label">From Year</label>
														<input type="number" class="form-control" id="collegenumofattendance" name="txtbxStudentCollegeNumofAttendance1">
													</div>
													<div class="form-group label-floating">
														<label class="control-label">To Year</label>
														<input type="number" class="form-control" id="collegenumofattendance" name="txtbxStudentCollegeNumofAttendance2">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">Honors Received/Special Awards</label>
														<input type="text" class="form-control" id="collegehonors" name="txtbxStudentCollegeHonors">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">From Year</label>
														<input type="text" class="form-control" id="vocationalnumofattendance" name="txtbxStudentVocationalNumOfAttendance1">
													</div>
													<div class="form-group label-floating">
														<label class="control-label">To Year</label>
														<input type="text" class="form-control" id="vocationalnumofattendance" name="txtbxStudentVocationalNumOfAttendance2">
													</div>


													<div class="form-group label-floating">
														<label class="control-label">Honors Received/Special Awards</label>
														<input type="text" class="form-control" id="vocationalhonors" name="txtbxStudentVocationalHonors">
													</div>

													<div class="form-group label-floating">
														<label class="control-label">Type Of Schooling</label>
														<select name="dropdownStudentNatureOfSchooling" id="dropdownStudentNatureOfSchooling" class="form-control">
															<option disabled="" selected=""></option>
															<option>Continuing</option>
															<option>Regular</option>
															<option>Interrupted</option>
														</select>
													</div>

													<div class="form-group label-floating">

														<input type="text" class="form-control" id="txtbxStudentInterruptedWhy" name="txtbxStudentInterruptedWhy" disabled="true">
														<span class="input-group-addon">If Interrupted Why?</span>
													</div>

												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane" id="homeandfamilybackground">
										<h4 class="info-text"> III. Home And Family Background </h4>
										<div class="row">
											<div class="col-sm-12">
											</div>
											<!--Upper Left-->
											<div class="col-sm-5 col-sm-offset-1">
												<h4 class="info-text"> Father </h4>
												<div class="form-group label-floating">
													<label class="control-label">Name</label>
													<input type="text" class="form-control" id="father_name" name="txtbxStudentFatherName">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Educational attainment</label>
													<select name="dropdownStudentFatherEducationalAttainment" class="form-control">
														<option disabled="" selected=""></option>
														<option value="Elementary Undergraduate">Elementary Undergraduate</option>
														<option value="Elementary Graduate">Elementary graduate</option>
														<option value="High School Undergraduate">High School Undergraduate</option>
														<option value="High School Graduate">High School Graduate</option>
														<option value="College Undergraduate">College undergraduate</option>
														<option value="Vocational Graduate">Vocational Graduate</option>
														<option value="Masteral Unit">Masteral Unit</option>
														<option value="Doctoral Degree">Doctoral Degree</option>
													</select>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Name Of Employer</label>
													<input type="text" class="form-control" id="father_employer" name="txtbxStudentFatherNameOfEmployer">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Age</label>
													<input type="text" class="form-control" id="father_age" name="txtbxStudentFatherAge">
												</div>

												<div class="btn-group btn-group-toggle" data-toggle="buttons">
													<br>
													<label class="btn btn-primary">
														<input type="radio" name="radioStudentFatherStatus" id="radioStudentFatherStatus" autocomplete="off" value="Living"><span class="label-text">Living</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" name="radioStudentFatherStatus" id="radioStudentFatherStatus" autocomplete="off" value="Deceased"><span class="label-text">Deceased</span>
													</label>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Occupation</label>
													<input type="text" class="form-control" id="father_occupation" name="txtbxStudentFatherOccupation">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Occupation Type</label>
													<select name="dropdownStudentFatherOccupationType" class="form-control">
														<option disabled="" selected=""></option>
														<optgroup>
															<option value="Abroad">Abroad</option>
														</optgroup>
														<optgroup label="Local">
															<option value="Government">Government</option>
															<option value="Private">Private</option>
														</optgroup>
													</select>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Address Of Employer</label>
													<input type="text" class="form-control" id="father_employeraddress" name="txtbxStudentFatherEmployerAddress">
												</div>
											</div>
											<!--Upper Right-->
											<div class="col-sm-5">
												<h4 class="info-text"> Mother </h4>
												<div class="form-group label-floating">
													<label class="control-label">Name</label>
													<input type="text" class="form-control" id="mother_name" name="txtbxStudentMotherName">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Educational attainment</label>
													<select name="dropdownStudentMotherEducationalAttainment" class="form-control">
														<option disabled="" selected=""></option>
														<option value="Elementary Undergraduate">Elementary Undergraduate</option>
														<option value="Elementary Graduate">Elementary graduate</option>
														<option value="High School Undergraduate">High School Undergraduate</option>
														<option value="High School Graduate">High School Graduate</option>
														<option value="College Undergraduate">College undergraduate</option>
														<option value="Vocational Graduate">Vocational Graduate</option>
														<option value="Masteral Unit">Masteral Unit</option>
														<option value="Doctoral Degree">Doctoral Degree</option>
													</select>
												</div>
												<div class="form-group label-floating">
													<label class="control-label">Name Of Employer</label>
													<input type="text" class="form-control" id="mother_employer" name="txtbxStudentMotherNameOfEmployer">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Age</label>
													<input type="text" class="form-control" id="mother_age" name="txtbxStudentMotherAge">
												</div>

												<div class="btn-group btn-group-toggle" data-toggle="buttons">
													<br>
													<label class="btn btn-primary">
														<input type="radio" name="radioStudentMotherStatus" id="radioStudentMotherStatus" autocomplete="off" value="Living"><span class="label-text">Living</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" name="radioStudentMotherStatus" id="radioStudentMotherStatus" autocomplete="off" value="Deceased"><span class="label-text">Deceased</span>
													</label>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Occupation</label>
													<input type="text" class="form-control" id="mother_occupation" name="txtbxStudentMotherOccupation">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Occupation Type</label>
													<select name="dropdownStudentMotherOccupationType" class="form-control">
														<option disabled="" selected=""></option>

														<optgroup>
															<option value="Abroad">Abroad</option>
														</optgroup>
														<optgroup label="Local">
															<option value="Government">Government</option>
															<option value="Private">Private</option>
														</optgroup>
													</select>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Address Of Employer</label>
													<input type="text" class="form-control" id="mother_employeraddress" name="txtbxStudentMotherAddressOfEmployer">
												</div>
											</div>
											<!--Lower Left-->
											<div class="col-sm-5 col-sm-offset-1">
												<h4 class="info-text"> Guardian </h4>
												<div class="form-group label-floating">
													<label class="control-label">Name</label>
													<input type="text" class="form-control" id="guardian_name" name="txtbxStudentGuardianName">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Educational attainment</label>
													<select name="txtbxStudentGuardianEducationalAttainment" class="form-control">
														<option disabled="" selected=""></option>
														<option value="public">Elementary Undergraduate</option>
														<option value="public">Elementary graduate</option>
														<option value="public">High School Undergraduate</option>
														<option value="public">High School Graduate</option>
														<option value="public">College undergraduate</option>
														<option value="public">Vocational Graduate</option>
														<option value="public">Masteral Unit</option>
														<option value="public">Doctoral Degree</option>
													</select>
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Name Of Employer</label>
													<input type="text" class="form-control" id="guardian_employer" name="txtbxStudentGuardianNameOfEmployer">
												</div>

												<div class="form-group label-floating">
													<label class="control-label">Age</label>
													<input type="text" class="form-control" id="guardian_age" name="txtbxStudentGuardianAge">
												</div>

		                                    	<!--<div class="form-group label-floating">
		                                        	<label class="control-label">Relation</label>
		                                        	<input type="text" class="form-control" id="guardian_relation" name="dropdownstudentGuardianRelation">
		                                        </div>-->

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">Relation</label>
		                                        	<select name="dropdownstudentGuardianRelation" id="dropdownstudentGuardianRelation" class="form-control">
		                                        		<option disabled="" selected=""></option>
		                                        		<option value="Parent">Parent</option>
		                                        		<option value="Step-parent">Step-parent</option>
		                                        		<option value="Grandparent">Grandparent</option>
		                                        		<option value="Relative">Relative</option>
		                                        		<option value="Others">Others</option>
		                                        	</select>
		                                        </div>

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">Others</label>
		                                        	<div class="input-group">
		                                        		<input type="text" class="form-control" id="txtbxStudentGuardianRelationOthers" name="txtbxStudentGuardianRelationOthers" disabled="true">
		                                        		<span class="input-group-addon">If Others Is Selected</span>
		                                        	</div>
		                                        </div>

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">Occupation</label>
		                                        	<input type="text" class="form-control" id="guardian_occupation" name="txtbxStudentGuardianOccupation">
		                                        </div>

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">Occupation Type</label>
		                                        	<select name="dropdownStudentGuardianOccupationType" class="form-control">
		                                        		<option disabled="" selected=""></option>

		                                        		<optgroup>
		                                        			<option value="Abroad">Abroad</option>
		                                        		</optgroup>
		                                        		<optgroup label="Local">
		                                        			<option value="Government">Government</option>
		                                        			<option value="Private">Private</option>
		                                        		</optgroup>
		                                        	</select>
		                                        </div>

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="guardian_employeraddress" name="txtbxStudentGuardianAddressOfEmployer">
		                                        </div>
		                                    </div>
		                                    <!--Lower Right-->
		                                    <div class="col-sm-5">
		                                    	<h4 class="info-text"> Your State At Home </h4>
		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Parent's Marital Relationship</label>
		                                    		<select name="dropdownStudentParentMaritalRelationship" id="dropdownStudentParentMaritalRelationship" class="form-control">
		                                    			<option disabled="" selected=""></option>
		                                    			<option value="Married And Staying Together">Married and staying together</option>
		                                    			<option value="Not Married But Living Together">Not married but living together</option>
		                                    			<option value="Single Parent">Single Parent</option>
		                                    			<option value="Married But Separated">Married but separated</option>
		                                    			<option value="Others">Others</option>
		                                    		</select>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Others</label>
		                                    		<div class="input-group">
		                                    			<input type="text" class="form-control" id="txtbxStudentParentMaritalRelationshipOthers" name="txtbxStudentParentMaritalRelationshipOthers" disabled="true">
		                                    			<span class="input-group-addon">If Others Is Selected</span>
		                                    		</div>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Number Of Children In The Family Including Yourself</label>
		                                    		<input type="text" class="form-control" id="txtbxStudentNumOfChildren" name="txtbxStudentNumOfChildren">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Number Of Brother/s </label>
		                                    		<input type="text" class="form-control" id="txtbxStudentNumOfBrothers" name="txtbxStudentNumOfBrothers" disabled="true">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Number Of Sister/s </label>
		                                    		<input type="text" class="form-control" id="txtbxStudentNumOfSisters" name="txtbxStudentNumOfSisters" disabled="true">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Number Of siblings gainfully employed </label>
		                                    		<input type="text" class="form-control" id="txtbxStudentNumOfSiblingsEmployed" name="txtbxStudentNumOfSiblingsEmployed" disabled="true">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Is He/She providing support to your</label>
		                                    		<select name="dropdownStudentProvidingSupport" id="dropdownStudentProvidingSupport" class="form-control" disabled="true">
		                                    			<option disabled="" selected=""></option>
		                                    			<option value="Family"> Family </option>
		                                    			<option value="Your Studies"> Your Studies </option>
		                                    			<option value="His/Her Own Family"> His/Her own family </option>
		                                    			<span class="input-group-addon">if you have atleast one</span>
		                                    		</select>
		                                    	</div>

		                                    	<div class="input-group">
		                                    		<input type="text" class="form-control" id="txtbxOthersStudentProvidingSupport" name="txtbxOthersStudentProvidingSupport" disabled="true">
		                                    		<span class="input-group-addon">If Others Is Selected</span>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Ordinal Position</label>
		                                    		<select name="dropdownStudentOrdinalPosition" class="form-control">
		                                    			<option disabled="" selected=""></option>
		                                    			<option value="Only Child">Only Child</option>
		                                    			<option value="1st">1st</option>
		                                    			<option value="2nd">2nd</option>
		                                    			<option value="3rd">3rd</option>
		                                    			<option value="4th">4th</option>
		                                    			<option value="5th">5th</option>
		                                    			<option value="6th">6th</option>
		                                    			<option value="7th">7th</option>
		                                    			<option value="8th">8th</option>
		                                    			<option value="9th">9th</option>
		                                    			<option value="10th">10th</option>
		                                    		</select>
		                                    	</div>

	                                        	<!--<div class="form-group label-floating">
		                                        	<label class="control-label">Who finances your schooling?</label>
		                                        	<input type="text" class="form-control" id="dropdownStudentFinancer" name="dropdownStudentFinancer">
		                                        </div>-->

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label" sel>Who finances your schooling?</label>
		                                        	<select class="form-control" name="dropdownStudentFinancer" id="dropdownStudentFinancer">
		                                        		<option disabled="" selected=""></option>
		                                        		<option>Parents</option>
		                                        		<option>Grandparents</option>
		                                        		<option>Scholarship</option>
		                                        		<option>Charity</option>
		                                        		<option>Spouse</option>
		                                        		<option>Part-time worker</option>
		                                        		<option>Others</option>
		                                        	</select>

		                                        </div>

		                                        <div class="input-group">
		                                        	<input type="text" class="form-control" id="txtbxStudentOthersFinancer" name="txtbxStudentOthersFinancer" disabled="true">
		                                        	<span class="input-group-addon">If Others Is Selected</span>
		                                        </div>

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">How Much is your weekly allowance?</label>
		                                        	<input type="text" class="form-control" id="weeklyallowance" name="txtbxStudentWeeklyAllowance">
		                                        </div>

		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">Parent's Total Monthly Income:</label>
		                                        	<select name="dropdownStudentTotallyMonthlyIncome" class="form-control">
		                                        		<option disabled="" selected=""></option>
		                                        		<option>Below Average</option>
		                                        		<option>Average</option>
		                                        		<option>Above Average</option>
		                                        	</select>
		                                        </div>

	                                        	<!--<div class="form-group label-floating">
		                                            <label class="control-label">Do you have a quiet place to study?</label>
	                                            	<select name="radioStudentQuietPlace" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
            											<option value="No">No</option>
            										</select>
            									</div>-->



            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">Do you have a quiet place to study?</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentQuietPlace" id="radioStudentQuietPlace" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentQuietPlace" id="radioStudentQuietPlace" autocomplete="off" value="No"><span class="label-text">No</span>
            											</label>
            										</div>
            									</div>

            									<!--<div class="form-group label-floating">
		                                            <label class="control-label">Do you share your room with anyone?</label>
	                                            	<select name="radioStudentShareRoom" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
            											<option value="No">No</option>
            										</select>
            									</div>-->

            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">Do you share your room with anyone?</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentShareRoom" id="radioStudentShareRoom" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentShareRoom" id="radioStudentShareRoom" autocomplete="off" value="No"><span class="label-text">No</span>
            											</label>
            										</div>
            									</div>

            									<div class="form-group label-floating">
            										<label class="control-label">With whom</label>
            										<input type="text" class="form-control" id="txtbxStudentWithWhom" name="txtbxStudentWithWhom" disabled="true">
            										<span class="input-group-addon">If Yes</span>
            									</div>

            									<div class="form-group label-floating">
            										<label class="control-label">Nature of residence while attending school</label>
            										<select name="dropdownStudentNatureOfResidence" id="dropdownStudentNatureOfResidence" class="form-control">
            											<option disabled="" selected=""></option>
            											<option value="Family home">Family home</option>
            											<option value="Relative's house">Relative's house</option>
            											<option value="Shares Apartment with friends and relatives">Shares apartment with friends/relatives</option>
            											<option value="Bed spacer">Bed spacer</option>
            											<option value="Rented apartment">Rented apartment</option>
            											<option value="Dorm">Dorm</option>
            											<option value="Others">Others</option>
            										</select>
            									</div>
            									<div class="input-group">
            										<input type="text" class="form-control" id="txtbxOthersResidence" name="txtbxOthersResidence" disabled="true">
            										<span class="input-group-addon">If Others Is Selected</span>
            									</div>

            								</div>
            							</div>
            						</div>


            						<div class="tab-pane" id="health">
            							<h4 class="info-text"> IV. Health </h4>
            							<div class="row">
            								<div class="col-sm-12">
            								</div>
            								<!--Upper Left-->
            								<div class="col-sm-5 col-sm-offset-1">
            									<h4 class="info-text">A. Physical </h4>
            									<h6 class="info-text">Do you have problems with</h6>



            									<div class="form-group label-floating" form-check" data-toggle="buttons"> 
            										<label class="control-label">Vision?</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentVision" id="radioStudentVision" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentVision" id="radioStudentVision" autocomplete="off" value="None"><span class="label-text">None</span>
            											</label>
            										</div>
            									</div>

            									<div class="form-group label-floating">
            										<label class="control-label">Please Specify</label>
            										<input type="text" class="form-control" id="txtbxStudentVisionSpecify" name="txtbxStudentVisionSpecify" disabled="true">
            										<span class="input-group-addon">If Any</span>
            									</div>


            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">Hearing?</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentHearing" id="radioStudentHearing" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentHearing" id="radioStudentHearing" autocomplete="off" value="None"><span class="label-text">None</span>
            											</label>
            										</div>
            									</div>

            									<div class="form-group label-floating">
            										<label class="control-label">Please Specify</label>
            										<input type="text" class="form-control" id="txtbxStudentHearingSpecify" name="txtbxStudentHearingSpecify" disabled="true">
            										<span class="input-group-addon">If Any</span>
            									</div>


            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">Speech?</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentSpeech" id="radioStudentSpeech" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentSpeech" id="radioStudentSpeech" autocomplete="off" value="None"><span class="label-text">None</span>
            											</label>
            										</div>
            									</div>

            									<div class="form-group label-floating">
            										<label class="control-label">Please Specify</label>
            										<input type="text" class="form-control" id="txtbxStudentSpeechSpecify" name="txtbxStudentSpeechSpecify" disabled="true">
            										<span class="input-group-addon">If Any</span>
            									</div>

            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">General Health?</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentGeneralHealth" id="radioStudentGeneralHealth" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentGeneralHealth" id="radioStudentGeneralHealth" autocomplete="off" value="None"><span class="label-text">None</span>
            											</label>
            										</div>
            									</div>

            									<div class="form-group label-floating">
            										<label class="control-label">Please Specify</label>
            										<input type="text" class="form-control" id="txtbxStudentGeneralHealthSpecify" name="txtbxStudentGeneralHealthSpecify" disabled="true">
            										<span class="input-group-addon">If Any</span>
            									</div>

            								</div>
            								<!--Upper Right-->
            								<div class="col-sm-5">
            									<h4 class="info-text">B. Psychological </h4>
            									<h6 class="info-text">Previous Consultations</h6>



            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">Psychiatrist</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentPsychiatrist" id="radioStudentPsychiatrist" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentPsychiatrist" id="radioStudentPsychiatrist" autocomplete="off" value="Never"><span class="label-text">Never</span>
            											</label>
            										</div>
            									</div>


            									<h6 class="info-text"> When? </h6>

            									<div class="form-group label-floating">
            										<input type = "date" id="txtbxStudentPsychiatristWhen"name="txtbxStudentPsychiatristWhen" disabled="true">
            									</div>

            									<div class="form-group label-floating">
            										<label class="control-label">For What?</label>
            										<input type="textarea" class="form-control" id="txtbxStudentPsychiatristWhat" name="txtbxStudentPsychiatristWhat" disabled="true">
            									</div>


            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">Psychologist</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentPsychologist" id="radioStudentPsychologist" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentPsychologist" id="radioStudentPsychologist" autocomplete="off" value="Never"><span class="label-text">Never</span>
            											</label>
            										</div>
            									</div>


            									<h6 class="info-text"> When? </h6>

            									<div class="form-group label-floating">
            										<input type = "date" id="txtbxStudentPsychologistWhen" name="txtbxStudentPsychologistWhen" disabled="true">
            									</div>



            									<div class="form-group label-floating">
            										<label class="control-label">For What?</label>
            										<input type="textarea" class="form-control" id="txtbxStudentPsychologistWhat" name="txtbxStudentPsychologistWhat" disabled="true">
            									</div>



            									<div class="form-group label-floating" form-check" data-toggle="buttons">
            										<label class="control-label">Counselor</label>
            										<div class="btn-group btn-group-toggle" data-toggle="buttons">
            											<br>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentCounselor" id="radioStudentCounselor" autocomplete="off" value="Yes"><span class="label-text">Yes</span>
            											</label>
            											<label class="btn btn-primary">
            												<input type="radio" name="radioStudentCounselor" id="radioStudentCounselor" autocomplete="off" value="Never"><span class="label-text">Never</span>
            											</label>
            										</div>
            									</div>

            									<h6 class="info-text"> When? </h6>

            									<div class="form-group label-floating">
            										<input type = "date" id="txtbxStudentCounselorWhen"name="txtbxStudentCounselorWhen" disabled="true">
            									</div>



            									<div class="form-group label-floating">
            										<label class="control-label">For What?</label>
            										<input type="textarea" class="form-control" id="txtbxStudentCounselorWhat" name="txtbxStudentCounselorWhat" disabled="true">
            									</div>

            								</div>
            								<!--Lower Left-->
            								<div class="col-sm-5 col-sm-offset-1">

            								</div>
            								<!--Lower Right-->
            								<div class="col-sm-5">


            								</div>

            							</div>
            						</div>

            						<div class="tab-pane" id="interestsandhobbies">
            							<div class="row">
            								<div class="col-sm-12">
            									<h4 class="info-text"> V. Interests And Hobbies</h4>
            								</div>
            								<!--Upper Left-->
            								<div class="col-sm-5 col-sm-offset-1">

            									<div class="form-group label-floating">
            										<h4 class="info-text"> A. Academic</h4>


            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestMath" value="Math club"> <span class="label-text">Math Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestScience" value="Science club"> <span class="label-text">Science Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestEnglish" value="English club"> <span class="label-text">English Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestFilipino" value="Filipino club"> <span class="label-text">Filipino Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestAstronomy" value="Astronomy club"> <span class="label-text">Astronomy Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestDebating" value="Debating club"> <span class="label-text">Debating Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestQuizzer" value="Quizzers Club"><span class="label-text">Quizzer's Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestSocialStudies" value="Social studies club"> <span class="label-text">Social Studies Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest[]" id="checkClubInterestStatistics" value="Statistics club"> <span class="label-text">Statistics Club</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterest" id="checkClubInterestOthers" value="Others"><span class="label-text">Others</span>
            											</label>
            										</div>
            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkClubInterestNoInterest" id="checkClubInterestNoInterest" value="No interest"> <span class="label-text">No Interest</span>
            											</label>
            										</div>	



            										<div class="form-group label-floating">
            											<label class="control-label">If Others</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtbxStudentClubOthers" id="txtbxStudentClubOthers" disabled="true">
            												<span class="input-group-addon">Please Specify</span>
            											</div>
            										</div>

            										<div class="form-group label-floating">
            											<label class="control-label">What is/are your favorite subjects?</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtbxStudentSubjectFavorite">

            											</div>
            										</div>

            										<div class="form-group label-floating">
            											<label class="control-label">What is/are the subjects you least like?</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtbxStudentSubjectLeastLike">
            											</div>
            										</div>

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationInterestAthletics" value="Athletics" > <span class="label-text">Athletics</span>
            											</label>
            										</div>

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationInterestDramatics" value="Dramatics" > <span class="label-text">Dramatics</span>
            											</label>
            										</div>

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationInterestReligion" value="Religious Organization"> <span class="label-text">Religious Organization</span>
            											</label>
            										</div>

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationInterestGlee" value="Glee" > <span class="label-text">Glee Club</span>
            											</label>
            										</div>

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationInterestScouting" value="Scouting"> <span class="label-text">Scouting</span>
            											</label>
            										</div>

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationInterestChess" value="Chess" > <span class="label-text">Chess 
            												club</span>
            											</label>
            										</div>

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterestOthers" id="checkOrganizationInterestOthers" value="Others" ><span class="label-text">Others</span>
            											</label>
            										</div>	

            										<div class="form-check">
            											<label>
            												<input type="checkbox" name="checkOrganizationInterestNoInterest" id="checkOrganizationInterestNoInterest" value="No Interest" > <span class="label-text">No interest</span>
            											</label>
            										</div>

            										<div class="form-group label-floating">
            											<label class="control-label">If Others</label>
            											<div class="input-group">
            												<input type="text" class="form-control" id="txtbxOrganizationOthers" name="txtbxOrganizationOthers">
            												<span class="input-group-addon">Please Specify</span>
            											</div>
            										</div>


            										<div class="form-group label-floating">
            											<label class="control-label">Position in the said organization</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtbxOrganizationPosition" id="txtbxOrganizationPosition" >
            												<span class="input-group-addon">Please Specify</span>
            											</div>
            										</div>



            									</div>

            								</div>
            								<!--Upper Right-->
            								<div class="col-sm-5">

            									<div class="form-group label-floating">
            										<h4 class="info-text"> B. Extra Curricular </h4>
            										<div class="form-group label-floating">
            											<label class="control-label">What are your hobbies?</label>
            										</div>
            										<div class="form-group label-floating">


            											<input type="text" class="form-control" name="txtbxStudentHobbies1">
            											<span class="input-group-addon">1. </span>

            										</div>
            										<div class="form-group label-floating">

            											<input type="text" class="form-control" name="txtbxStudentHobbies2">
            											<span class="input-group-addon">2. </span>

            										</div>

            										<div class="form-group label-floating">

            											<input type="text" class="form-control" name="txtbxStudentHobbies3">
            											<span class="input-group-addon">3. </span>

            										</div>
            										<div class="form-group label-floating">

            											<input type="text" class="form-control" name="txtbxStudentHobbies4">
            											<span class="input-group-addon">4. </span>

            										</div>




            									</div>
            								</div>
            								<div class="col-sm-5 col-sm-offset-1">




            								</div>


            							</div>
            						</div>

            						<div class="tab-pane" id="testresult">

            							<div class="row">


            								<div class="col-sm-12">
            									<h4 class="info-text"> VI. Test Results</h4>

            									<div class="oldTestFields">
            										<h3 class="info-text"> Test Result 1 </h3>
            										<div class="form-group label-floating">
            											<h4 class="info-text"> Date </h4>
            											<input type="date" name="dateTestResultDateInitial">
            										</div>

            										<div class="form-group label-floating">
            											<label class="control-label">Name</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtbxTestResultNameInitial">
            											</div>
            										</div>

            										<div class="form-group label-floating">
            											<label class="control-label">RS</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtbxTestResultRawScoreInitial">

            											</div>
            										</div>

            										<div class="form-group label-floating">
            											<label class="control-label">PR</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtbxTestResultPercentileRatingInitial">

            											</div>
            										</div>

            										<div class="form-group label-floating">
            											<label class="control-label">Description</label>
            											<div class="input-group">
            												<input type="text" class="form-control" name="txtareaTestResultDescriptionInitial">

            											</div>
            										</div>

            										
            									</div>
            									<div id="newTestFields">

            									</div>
            									<div class="form-group label-floating">
            										<label class="control-label"></label>
            										<button class="btn btn-success" type="button"  onclick="education_fields();" >
            											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Test Result
            										</button>
            									</div>



            								</div>
            							</div>







            							<div class="col-sm-5">

            							</div>
            						</div>
            					</div>


            					<div class="wizard-footer">
            						<div class="pull-right">
            							<input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />

            							<input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='btnAdd' value='Submit'/>
            						</div>
            					</div>

            					<div class="pull-left">
            						<input type='button' class='btn btn-previous btn-fill btn-primary btn-wd' name='previous' value='Previous' />
            					</div>
            					<div class="clearfix"></div>
            				</form>
            			</div>
            		</div> <!-- wizard container -->
            	</div>
            </div> <!-- row -->
        </div> <!--  big container -->

        <div class="footer">
        	<div class="container text-center">
        		Made with <i class="fa fa-heart heart"></i> by <a href="fb.com/alltypwen">GCTS</a>
        	</div>
        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>
<!-- Dynamic Form  -->
<script src="js/dynamicForm/dynamicForm.js"></script>

<script src="js/IIRNewSignUp/IIRNewSignUp.js"></script>


</html>
