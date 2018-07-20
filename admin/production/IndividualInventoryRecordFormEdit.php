<!DOCTYPE html>
<?php


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
include 'IndividualInventoryRecordFormSubmit.php';
if (isset($_POST['btnFinish'])) 
{	


	$message = $VarcharStudentNumber;
	echo "<script type='text/javascript'>alert('$message');</script>";

	$VarcharStudentFirstName = mysqli_real_escape_string($connect, $_POST['txtbxFirstName']);

	$VarcharStudentLastName = mysqli_real_escape_string($connect, $_POST['txtbxLastName']);

	$VarcharStudentMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxMiddleName']);

	$VarcharStudentCourse = $varcharCourseCode;

	$VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxYear']);

	$VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxSection']);

	$VarcharStudentCollege = $varcharCollegeCode;

	$VarcharStudentGender = mysqli_real_escape_string($connect, $_POST['radioGender']);

	$VarcharStudentSexuality = mysqli_real_escape_string($connect, $_POST['dropdownSexuality']);

	$VarcharOthersSexuality = mysqli_real_escape_string($connect, $_POST['txtbxOthersSexuality']);

	if($VarcharStudentSexuality == "Others")
	{
		$VarcharStudentSexuality = $VarcharOthersSexuality;
	}
	else
	{

	}

	$VarcharStudentAge = mysqli_real_escape_string($connect, $_POST['txtbxAge']);

	$VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxYear']);

	$VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxSection']);

	$VarcharStudentCivilStatus = mysqli_real_escape_string($connect, $_POST['dropdownCivilStatus']);

	$VarcharStudentCivilStatusOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersCivilStatus']);

	if ($VarcharStudentCivilStatus == "Others") 
	{
		$VarcharStudentCivilStatus = $VarcharStudentCivilStatusOthers;	
	}

	$VarcharStudentBirthdate = mysqli_real_escape_string($connect, $_POST['dateDateOfBirth']);

	$VarcharStudentHeight = mysqli_real_escape_string($connect, $_POST['txtbxHeight']);

	$VarcharStudentWeight = mysqli_real_escape_string($connect, $_POST['txtbxWeight']);

	$VarcharStudentComplexion = mysqli_real_escape_string($connect, $_POST['dropdownComplexion']);

	$VarcharStudentComplexionOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersComplexion']);

	if ($VarcharStudentComplexion == "Others") {

		$VarcharStudentComplexion = $VarcharStudentComplexionOthers;
	}
	else
	{

	}

	$VarcharStudentBirthplace = mysqli_real_escape_string($connect, $_POST['txtbxPlaceOfBirth']);

	$VarcharStudentCity = mysqli_real_escape_string($connect, $_POST['dropdownCityAddress']);
	$VarcharStudentCityArray = explode('~', $VarcharStudentCity);

	$VarcharStudentCityHouseNumber = mysqli_real_escape_string($connect, $_POST['txtbxCityHouseNumber']);

	$VarcharStudentCityProvince = $VarcharStudentCityArray[0];

	$VarcharStudentCityCity = $VarcharStudentCityArray[1];

	$VarcharStudentCityBarangay = mysqli_real_escape_string($connect, $_POST['txtbxCityBarangay']);

	$VarcharStudentProvinceHouseNumber = mysqli_real_escape_string($connect, $_POST['txtbxProvinceHouseNumber']);

	$VarcharStudentProvinceProvince = mysqli_real_escape_string($connect, $_POST['dropdownProvincialAddress']);

	$VarcharStudentProvinceCity = mysqli_real_escape_string($connect, $_POST['txtbxProvinceCity']);

	$VarcharStudentProvinceBarangay = mysqli_real_escape_string($connect, $_POST['txtbxProvinceBarangay']);

	$VarcharStudentTelNum = mysqli_real_escape_string($connect, $_POST['txtbxTelNum']);

	$VarcharStudentMobileNum = mysqli_real_escape_string($connect, $_POST['txtbxMobileNum']);

	$VarcharStudentEmail = mysqli_real_escape_string($connect, $_POST['txtbxEmailAddress']);

	$VarcharStudentHSGWA = mysqli_real_escape_string($connect, $_POST['txtbxHSGWA']);

	$VarcharStudentReligion = mysqli_real_escape_string($connect, $_POST['dropdownReligion']);

	$VarcharStudentReligionOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersReligion']);

	if ($VarcharStudentReligion == "Others")
	{
		$VarcharStudentReligion = $VarcharStudentReligionOthers;
	}
	else
	{

	}

	$VarcharStudentNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxNameOfEmployer']);

	$VarcharStudentEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxAddressOfEmployer']);

	$VarcharStudentContactPersonName = mysqli_real_escape_string($connect, $_POST['txtbxContactPersonName']);

	$VarcharStudentContactPersonAddress = mysqli_real_escape_string($connect, $_POST['txtbxContactPersonAddress']);

	$VarcharStudentContactPersonRelationship = mysqli_real_escape_string($connect, $_POST['dropdownContactPersonRelationship']);

	$VarcharStudentContactPersonRelationshipOthers = mysqli_real_escape_string($connect, $_POST['txtbxContactPersonOthersRelationship']);

	if ($VarcharStudentContactPersonRelationship == "Others") 
	{
		$VarcharStudentContactPersonRelationship = $VarcharStudentContactPersonRelationshipOthers;
	}

	$VarcharStudentContactPersonContactNumber = mysqli_real_escape_string($connect, $_POST['txtbxContactPersonNumber']);
					//End of the first form wizard-->

					//Start of the second form wizard-->
	$VarcharStudentPreSchoolName = mysqli_real_escape_string($connect, $_POST['txtbxPreElemSchoolGraduated']);

	$VarcharStudentPreSchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxPreElemSchoolAddress']);

	$VarcharStudentPreSchoolType = mysqli_real_escape_string($connect, $_POST['radioPreElemTypeOfSchool']);

	$VarcharStudentPreSchoolYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxPreElemYearAttended1']);
	$VarcharStudentPreSchoolYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxPreElemYearAttended2']);

	$VarcharStudentPreSchoolYearAttended = $VarcharStudentPreSchoolYearAttended1 . ' - ' . $VarcharStudentPreSchoolYearAttended2;

	$VarcharStudentPreSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxPreElemHonors']);

	$VarcharStudentElementarySchoolName = mysqli_real_escape_string($connect, $_POST['txtbxElementarySchoolGraduated']);

	$VarcharStudentElementarySchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxElementarySchoolAddress']);

	$VarcharStudentElementaryType = mysqli_real_escape_string($connect, $_POST['radioElementaryTypeOfSchool']);

	$VarcharStudentElementaryYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxElementaryYearAttended1']);
	$VarcharStudentElementaryYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxElementaryYearAttended2']);

	$VarcharStudentElementaryYearAttended = $VarcharStudentElementaryYearAttended1 . ' - ' . $VarcharStudentElementaryYearAttended2;


	$VarcharStudentElementaryHonors = mysqli_real_escape_string($connect, $_POST['txtbxElementaryHonors']);

	$VarcharStudentHSSchoolName = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolSchoolGraduated']);

	$VarcharStudentHSSchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolSchoolAddress']);

	$VarcharStudentHSSchoolType = mysqli_real_escape_string($connect, $_POST['radioHighschoolTypeOfSchool']);

	$VarcharStudentHSSchoolYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolYearAttended1']);
	$VarcharStudentHSSchoolYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolYearAttended2']);

	$VarcharStudentHSSchoolYearAttended = $VarcharStudentHSSchoolYearAttended1 . ' - ' . $VarcharStudentHSSchoolYearAttended2;


	$VarcharStudentHSSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolHonors']);

	$VarcharStudentCollegeName = mysqli_real_escape_string($connect, $_POST['txtbxCollegeSchoolGraduated']);

	$VarcharStudentCollegeAddress = mysqli_real_escape_string($connect, $_POST['txtbxCollegeSchoolAddress']);

	$VarcharStudentCollegeType = mysqli_real_escape_string($connect, $_POST['radioCollegeTypeOfSchool']);

	$VarcharStudentCollegeYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxCollegeYearAttended1']);
	$VarcharStudentCollegeYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxCollegeYearAttended2']);

	$VarcharStudentCollegeYearAttended = $VarcharStudentCollegeYearAttended1 . ' - ' . $VarcharStudentCollegeYearAttended2;

	$VarcharStudentCollegeHonors = mysqli_real_escape_string($connect, $_POST['txtbxCollegeHonors']);

	$VarcharStudentVocationalName = mysqli_real_escape_string($connect, $_POST['txtbxVocationalSchoolGraduated']);

	$VarcharStudentVocationalAddress = mysqli_real_escape_string($connect, $_POST['txtbxVocationalSchoolAddress']);

	$VarcharStudentVocationalType = mysqli_real_escape_string($connect, $_POST['radioVocationalTypeOfSchool']);

	$VarcharStudentVocationalYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxVocationalYearAttended1']);
	$VarcharStudentVocationalYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxVocationalYearAttended2']);

	$VarcharStudentVocationalYearAttended = $VarcharStudentVocationalYearAttended1 . ' - ' . $VarcharStudentVocationalYearAttended2;

	$VarcharStudentVocationalHonors = mysqli_real_escape_string($connect, $_POST['txtbxVocationalHonors']);

	$VarcharStudentNatureOfSchooling = mysqli_real_escape_string($connect, $_POST['radioNatureOfSchooling']);

	$VarcharStudentInterruptedWhy = mysqli_real_escape_string($connect, $_POST['txtbxNatureOfSchoolingInterruptedReason']);

	if($VarcharStudentNatureOfSchooling == "Interrupted")
	{
		$VarcharStudentNatureOfSchooling = $VarcharStudentInterruptedWhy;
	}
	else
	{

	}

					//End Of part 2 of form wizard-->

					//Start of part 3 of the form wizard -->

	$VarcharStudentFatherName = mysqli_real_escape_string($connect, $_POST['txtbxFatherName']);

	$VarcharStudentFatherAge = mysqli_real_escape_string($connect, $_POST['txtbxFatherAge']);

	$VarcharStudentFatherStatus = mysqli_real_escape_string($connect, $_POST['radioFatherState']);

	$VarcharStudentFatherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownFatherEducationalAttainment']);

	$VarcharStudentFatherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxFatherOccupation']);

	$VarcharStudentFatherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxFatherNameOfEmployer']);

	$VarcharStudentFatherEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxFatherAddressOfEmployer']);

	$VarcharStudentMotherName = mysqli_real_escape_string($connect, $_POST['txtbxMotherName']);

	$VarcharStudentMotherAge = mysqli_real_escape_string($connect, $_POST['txtbxMotherAge']);

	$VarcharStudentMotherStatus = mysqli_real_escape_string($connect, $_POST['radioMotherState']);

	$VarcharStudentMotherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownMotherEducationalAttainment']);

	$VarcharStudentMotherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxMotherOccupation']);

	$VarcharStudentMotherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxMotherNameOfEmployer']);

	$VarcharStudentMotherEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxMotherAddressOfEmployer']);

	$VarcharStudentGuardianName = mysqli_real_escape_string($connect, $_POST['txtbxGuardianName']);

	$VarcharStudentGuardianAge = mysqli_real_escape_string($connect, $_POST['txtbxGuardianAge']);

	$VarcharStudentGuardianRelation = mysqli_real_escape_string($connect, $_POST['dropdownGuardianRelationship']);

	$VarcharStudentGuardianRelationOthers = mysqli_real_escape_string($connect, $_POST['txtbxGuaridanOthersRelationship']);

	$VarcharStudentGuardianEducationAttainment = mysqli_real_escape_string($connect, $_POST['dropdownGuardianEducationalAttainment']);

	$VarcharStudentGuardianOccupation = mysqli_real_escape_string($connect, $_POST['txtbxGuardianOccupation']);

	$VarcharStudentGuardianNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxGuardianNameOfEmployer']);

	$VarcharStudentGuardianEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxGuardianAddressOfEmployer']);

	$VarcharStudentParentMaritalRelationship = mysqli_real_escape_string($connect, $_POST['dropdownParentsMaritalRelationship']);

	$VarcharOthersParentMaritalRelationship = mysqli_real_escape_string($connect, $_POST['txtbxOthersParentsMaritalRelationship']);

	if ($VarcharStudentParentMaritalRelationship == "Others") 
	{
		$VarcharStudentParentMaritalRelationship = $VarcharOthersParentMaritalRelationship;
	}
	else
	{

	}

	$VarcharStudentNumOfChildren = mysqli_real_escape_string($connect, $_POST['txtbxNoOfChildrenInTheFamily']);

	$VarcharStudentNumOfBrothers = mysqli_real_escape_string($connect, $_POST['txtbxNoOfBrothers']);

	$VarcharStudentNumOfSisters = mysqli_real_escape_string($connect, $_POST['txtbxNoOfSisters']);

	$VarcharStudentSiblingsEmployed = mysqli_real_escape_string($connect, $_POST['txtbxNoOfBrothersSistersGainfullyEmployed']);

	//$VarcharStudentSiblingsEmployedMoreThan0 = mysqli_real_escape_string($connect, $_POST['dropdownSupportedByYourSibling']);

	$VarcharStudentOrdinalPosition = mysqli_real_escape_string($connect, $_POST['dropdownOrdinalPosition']);

	$VarcharStudentSiblingSupporter = mysqli_real_escape_string($connect, $_POST['dropdownSupportedByYourSibling']);

	$VarcharStudentFinancer = mysqli_real_escape_string($connect, $_POST['dropdownWhoFinancesYourSchooling']);

	$VarcharOthersFinancer = mysqli_real_escape_string($connect, $_POST['txtbxOthersWhoFinancesYourSchooling']);

	if ($VarcharStudentFinancer == "Others") {
		$VarcharStudentFinancer = $VarcharOthersFinancer;
	}
	else {
						# code...
	}

	$VarcharStudentWeeklyAllowance = mysqli_real_escape_string($connect, $_POST['txtbxWeeklyAllowance']);

	$VarcharStudentMonthlyIncome = mysqli_real_escape_string($connect, $_POST['dropdownParentsMonthlyIncome']);

	$VarcharStudentStudyPlace = mysqli_real_escape_string($connect, $_POST['radioQuietPlaceToSTudy']);

	$VarcharStudentRoomSharing = mysqli_real_escape_string($connect, $_POST['radioShareRoom']);

	$VarcharStudentRoomSharingYes = mysqli_real_escape_string($connect, $_POST['txtbxWithWhom']);

	if ($VarcharStudentRoomSharing == "Yes") 
	{
		$VarcharStudentRoomSharing = $VarcharStudentRoomSharingYes;
	}
	else
	{

	}

	$VarcharStudentNatureOfResidence = mysqli_real_escape_string($connect, $_POST['dropdownNatureOfResidence']);
					//End of part 3 of the form wizard 

					//Start of par4 of the form wizard

	$VarcharStudentVision = mysqli_real_escape_string($connect, $_POST['radioVision']);

	$VarcharStudentVisionSpecify = mysqli_real_escape_string($connect, $_POST['txtbxVision']);

	if ($VarcharStudentVision == "Yes") {
		$VarcharStudentVision = $VarcharStudentVisionSpecify;
	}
	else
	{

	}

	$VarcharStudentHearing = mysqli_real_escape_string($connect, $_POST['radioHearing']);

	$VarcharStudentHearingSpecify = mysqli_real_escape_string($connect, $_POST['txtbxHearing']);

	if ($VarcharStudentHearing == "Yes") 
	{
		$VarcharStudentHearing = $VarcharStudentHearingSpecify;
	}
	else
	{

	}

	$VarcharStudentSpeech = mysqli_real_escape_string($connect, $_POST['radioSpeach']);

	$VarcharStudentSpeechSpecify = mysqli_real_escape_string($connect, $_POST['txtbxSpeach']);

	if ($VarcharStudentSpeech == "Yes") 
	{
		$VarcharStudentSpeech = $VarcharStudentSpeechSpecify;
	}
	else
	{

	}

	$VarcharStudentGeneralHealth = mysqli_real_escape_string($connect, $_POST['radioGeneralHealth']);

	$VarcharStudentGeneralHealthSpecify = mysqli_real_escape_string($connect, $_POST['txtbxGeneralHealth']);

	if ($VarcharStudentGeneralHealth == "Yes") 
	{
		$VarcharStudentGeneralHealth = $VarcharStudentGeneralHealthSpecify;
	}

	$VarcharStudentPsychiatristConsult = mysqli_real_escape_string($connect, $_POST['radioPsychiatrist']);

	if ($VarcharStudentPsychiatristConsult == "Yes") 
	{
		$VarcharStudentPsychiatristWhen	= mysqli_real_escape_string($connect, $_POST['datePsychiatrist']);
		$VarcharStudentPsychiatristWhat = mysqli_real_escape_string($connect, $_POST['txtareaForWhatPsychiatrist']);
	} 
	else 
	{
		$VarcharStudentPsychiatristWhen = NULL;
		$VarcharStudentPsychiatristWhat = NULL;
	}

	$VarcharStudentPsychologistConsult = mysqli_real_escape_string($connect, $_POST['radioPsychologist']);
	if ($VarcharStudentPsychologistConsult == "Yes")
	{
		$VarcharStudentPsychologistWhen = mysqli_real_escape_string($connect, $_POST['datePsychologist']);

		$VarcharStudentPsychologistWhat = mysqli_real_escape_string($connect,$_POST['txtareaForWhatPsychologist']);
	}
	else
	{
		$VarcharStudentPsychologistWhen = NULL;

		$VarcharStudentPsychologistWhat = NULL;
	}
	$VarcharStudentCounselorConsult = mysqli_real_escape_string($connect, $_POST['radioCounselor']);

	if ($VarcharStudentCounselorConsult == "Yes") 
	{
		$VarcharStudentCounselorWhen = mysqli_real_escape_string($connect, $_POST['dateCounselor']);

		$VarcharStudentCounselorWhat = mysqli_real_escape_string($connect, $_POST['txtareaForWhatCounselor']);
	}
	else
	{
		$VarcharStudentCounselorWhen = NULL;

		$VarcharStudentCounselorWhat = NULL;
	}


					//End of Part 4 of the form wizard

					//Start of part 5 of the form wizard 
	$varchaeClubInterest ="";
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

	$VarcharStudentFavoriteSubject = mysqli_real_escape_string($connect, $_POST['txtareaFavoriteSubject']);
	$VarcharStudentLeastFavSubject = mysqli_real_escape_string($connect, $_POST['txtareaLeastFavoriteSubject']);
	$VarcharStudentHobbies1 = mysqli_real_escape_string($connect, $_POST['txtbxHobby1']);
	$VarcharStudentHobbies2 = mysqli_real_escape_string($connect, $_POST['txtbxHobby2']);
	$VarcharStudentHobbies3 = mysqli_real_escape_string($connect, $_POST['txtbxHobby3']);
	$VarcharStudentHobbies4 = mysqli_real_escape_string($connect, $_POST['txtbxHobby4']);

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
					// end of part 5 form wizard 

					// start of part 6 form wizard
	$VarcharStudentTestDateInitial = mysqli_real_escape_string($connect, $_POST['dateTestResultDateInitial']);
	$VarcharStudentTestNameInitial = mysqli_real_escape_string($connect, $_POST['txtbxTestResultNameInitial']);
	$VarcharStudentTestRSInitial = mysqli_real_escape_string($connect, $_POST['txtbxTestResultRawScoreInitial']);
	$VarcharStudentTestPRInitial = mysqli_real_escape_string($connect, $_POST['txtbxTestResultPercentileRatingInitial']);
	$VarcharStudentTestDescriptionInitial = mysqli_real_escape_string($connect, $_POST['txtareaTestResultDescriptionInitial']);

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

		$queryAddFamilyBackground = "UPDATE `tbl_familybackground` SET `fatherName` = '$VarcharStudentFatherName', `fatherAge` = '$VarcharStudentFatherAge', `fatherStatus` = '$VarcharStudentFatherStatus', `fatherEducation` = '$VarcharStudentFatherEducationalAttainment', `fatherOccupation` = '$VarcharStudentFatherOccupation', `fatherEmployerName` = '$VarcharStudentFatherNameOfEmployer', `fatherEmployerAdd` = '$VarcharStudentFatherEmployerAddress', `motherName` = '$VarcharStudentMotherName', `motherAge` = '$VarcharStudentMotherAge', `motherStatus` = '$VarcharStudentMotherStatus', `motherEducation` = '$VarcharStudentMotherEducationalAttainment', `motherOccupation` = '$VarcharStudentMotherOccupation', `motherEmployerName` = '$VarcharStudentMotherNameOfEmployer', `motherEmployerAdd` = '$VarcharStudentMotherEmployerAddress', `guardianName` = '$VarcharStudentGuardianName', `guardianAge` = '$VarcharStudentGuardianAge', `guardianRelation` = '$VarcharStudentGuardianRelation', `guardianEducation` = '$VarcharStudentGuardianEducationAttainment', `guardianOccupation` = '$VarcharStudentGuardianOccupation', `guardianEmployerName` = '$VarcharStudentGuardianNameOfEmployer', `guardianEmployerAdd` = '$VarcharStudentGuardianEmployerAddress', `parentsMaritalRelation` = '$VarcharStudentParentMaritalRelationship', `noOfChildren` = '$VarcharStudentNumOfChildren', `noOfBrother` = '$VarcharStudentNumOfBrothers', `noOfSister` = '$VarcharStudentNumOfSisters', `broSisEmployed` = '$VarcharStudentSiblingsEmployed', `ordinalPosition` = '$VarcharStudentOrdinalPosition', `supportedByYourSibling` = '$VarcharStudentSiblingsEmployedMoreThan0', `schoolFinancer` = '$VarcharStudentFinancer', `weeklyAllowance` = '$VarcharStudentWeeklyAllowance', `totalMonthlyIncome` = '$VarcharStudentMonthlyIncome', `studyPlace` = '$VarcharStudentStudyPlace', `roomSharing` = '$VarcharStudentRoomSharing', `natureOfResidence` = 'VarcharStudentNatureOfResidence' WHERE `tbl_familybackground`.`studentNumber` = '$VarcharStudentNumber'";

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
	$varcharStudentCityProvince = $res2['cityProvince'];
	$varcharStudentCityCity = $res2['cityName'];
	$varcharStudentCityBarangay = $res2['cityBarangay'];

	$tempStudentCityAddress = $varcharStudentCityHouseNumber .' '. $varcharStudentCityProvince .' '. $varcharStudentCityCity .' '. $varcharStudentCityBarangay; 

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
	$varcharStudentPreSchoolYearAttendedArray = explode('-', $varcharStudentPreSchoolYearAttended);
	$varcharStudentPreSchoolYearAttended1 = $varcharStudentPreSchoolYearAttendedArray[0];
	$varcharStudentPreSchoolYearAttended2 = $varcharStudentPreSchoolYearAttendedArray[1];
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
$result6 = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC LIMIT 1");
while($res6 = mysqli_fetch_array($result6)){

	$varcharStudentTestID = $res6['testID'];
	$varcharStudentTestDate = $res6['testDate'];
	$varcharStudentTestName = $res6['testName'];
	$varcharStudentTestRawScore = $res6['testRawScore']; 
	$varcharStudentTestPercentile = $res6['testPercentile'];
	$varcharStudentTestDescription = $res6['testDescription'];


}


if($varcharStudentSex = "F"){
	$varcharStudentSexFull = "Female";
}
else if($varcharStudentSex = "M"){
	$varcharStudentSexFull = "Male";
}

?>
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
	<!--Form Wizard CSS-->
	<link href="css/wizard/wizard.css" rel="stylesheet">
	<!--Checkbox-->
	<link href="css/checkbox/checkbox.css" rel="stylesheet">


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
									<form method="post">
										<div class="tab-content">
											<div class="tab-pane active" role="tabpanel" id="step1">
												<h3 class="text-center">Step 1</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> 
														<h1 class="text-center">Personal Information</h1>
													</span>
													<span class="section" style="margin-left:90px;">I. Basic Information</span>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >First Name <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxFirstName" name="txtbxFirstName" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharFirstName; ?>">
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3" >Middle Name / Initial</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxMiddleName" name="txtbxMiddleName" value="<?php echo $varcharMiddleName; ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Last Name <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxLastName" name="txtbxLastName" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharLastName; ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Gender</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGender" value="M" <?php echo ($varcharStudentSexFull =='Male')?'checked':'' ?> > Male 
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGender" value="F" <?php echo ($varcharStudentSexFull =='Female')?'checked':'' ?> > Female
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Sexuality(Sexual Orientation)</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownSexuality" id="dropdownSexuality" >
																<option></option>
																<option value="<?php echo $varcharStudentSexuality ?>"><?php echo $varcharStudentSexuality;?></option>
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersSexuality" name="txtbxOthersSexuality" class="form-control col-md-7 col-xs-12" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Age</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxAge" name="txtbxAge" value="<?php echo $varcharStudentAge; ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">Date Of Birth </label>
														<div class="col-md-3 col-sm-3">
															<input class="date-picker form-control col-md-7 col-xs-12" type="date" id="dateDateOfBirth" name="dateDateOfBirth" value="<?php echo $varcharStudentBirthdate; ?>">
														</div>  
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Place of Birth</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPlaceOfBirth" name="txtbxPlaceOfBirth" value="<?php echo $varcharStudentBirthplace; ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownCivilStatus" id="dropdownCivilStatus">
																<option></option>
																<option value="<?php echo $varcharStudentCivilStatus;  ?>"><?php echo $varcharStudentCivilStatus;  ?></option>
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
															<input type="text" id="txtbxOthersCivilStatus" name="txtbxOthersCivilStatus" class="form-control col-md-7 col-xs-12" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownReligion" id="dropdownReligion">
																<option></option>
																<option selected="" value=" "></option>
																<option value="<?php echo $varcharStudentReligion;  ?>"><?php echo $varcharStudentReligion;  ?></option>
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersReligion" name="txtbxOthersReligion" class="form-control col-md-7 col-xs-12" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Height</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHeight" name="txtbxHeight" value="<?php echo $varcharStudentHeight;  ?>" >
														</div>
														<label class="control-label col-md-1 col-sm-1">Weight</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxWeight" name="txtbxWeight" value="<?php echo $varcharStudentWeight;  ?>" >
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Complexion</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownComplexion" id="dropdownComplexion">
																<option></option>
																<option  selected=""></option>
																<option value="<?php echo $varcharStudentComplexion;  ?>"><?php echo $varcharStudentComplexion;  ?></option>
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" id="txtbxOthersComplexion" name="txtbxOthersComplexion" class="form-control col-md-7 col-xs-12" disabled="true">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Student Information</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Student Number</label>
														<div class="col-md-6 col-sm-6">
															<input disabled="disabled" class="form-control col-md-7 col-xs-12" type="text" id="txtbxStudentNumber" name="txtbxStudentNumber" value="<?php echo $VarcharStudentNumber; ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Year</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxYear" name="txtbxYear" value="<?php echo $varcharStudentYear; ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">Section</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxSection" name="txtbxSection" value="<?php echo $varcharStudentSection; ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Highschool General Average</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHSGWA" name="txtbxHSGWA" value="<?php echo $varcharStudentHSGWA;  ?>" >
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. Contact Informaltion</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">City Address</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" id="dropdownCityAddress" name="dropdownCityAddress" >
																<option  selected=""></option>
																<option><?php echo $varcharStudentCityProvince;  ?>~<?php echo $varcharStudentCityCity;  ?> </option>
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
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">City: House Number</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCityHouseNumber" name="txtbxCityHouseNumber" value="<?php echo $varcharStudentCityHouseNumber;  ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">City: Barangay</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCityBarangay" name="txtbxCityBarangay" value="<?php echo $varcharStudentCityBarangay;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Provincial Address</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" id="dropdownProvincialAddress" name="dropdownProvincialAddress" >
																<option  selected=""></option>
																<option><?php echo $varcharStudentProvinceProvince;  ?></option>
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
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Province: House Number</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceHouseNumber" name="txtbxProvinceHouseNumber" value="<?php echo $varcharStudentProvinceHouseNumber;  ?>">
														</div>
														<label class="control-label col-md-1 col-sm-1">Province: Barangay</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceBarangay" name="txtbxProvinceBarangay" value="<?php echo $varcharStudentProvinceBarangay;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Province: Municipality/City</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxProvinceCity" name="txtbxProvinceCity" value="<?php echo $varcharStudentProvinc;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Email Address</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="email" id="txtbxEmailAddress" name="txtbxEmailAddress" value="<?php echo $varcharStudentEmail;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Mobile Number</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxMobileNum" name="txtbxMobileNum" value="<?php echo $varcharStudentMobileNum;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Tel. Number</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxTelNum" name="txtbxTelNum" value="<?php echo $varcharStudentTelNum;  ?>">
														</div>
													</div>

													<span class="section" style="margin-left:90px;">IV. If You Are Working</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Name Of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxNameOfEmployer" name="txtbxNameOfEmployer" value="<?php echo $varcharStudentEmployerName;  ?>"> 
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Address Of Employer</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxAddressOfEmployer" name="txtbxAddressOfEmployer" value="<?php echo $varcharStudentEmployerAddress;  ?>" >
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Who to contact in case of emergency?</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonName" name="txtbxContactPersonName" value="<?php echo $varcharStudentContactPersonName;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Contact Person Address</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonAddress" name="txtbxContactPersonAddress" value="<?php echo $varcharStudentContactPersonAdress;  ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Person Relationship</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownContactPersonRelationship" id="dropdownContactPersonRelationship">
																<option></option>
																<option selected=""></option>
																<option><?php echo $varcharStudentContactPersonRelationship;  ?></option>
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" disabled="true" name="txtbxContactPersonOthersRelationship" id="txtbxContactPersonOthersRelationship" >
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Contact Person Contact Number</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxContactPersonNumber" name="txtbxContactPersonNumber" value="<?php echo $varcharStudentContactPersonContactNumber;  ?>">
														</div>
													</div>	

												</div>

												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>

												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step2">
												<h3 class="text-center">Step 2</h3>

												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Educational Background</h1></span>
													<span class="section" style="margin-left:90px;">I. Pre-elementary</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >School Graduated <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxPreElemSchoolGraduated" name="txtbxPreElemSchoolGraduated" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentPreSchoolName;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >School Address <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" id="txtbxPreElemSchoolAddress" name="txtbxPreElemSchoolAddress" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharStudentPreSchoolAddress;  ?>">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPreElemTypeOfSchool" value="Public" <?php echo ($varcharStudentPreSchoolType =='Public')?'checked':'' ?>> Public
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPreElemTypeOfSchool" value="Private" <?php echo ($varcharStudentPreSchoolType =='Private')?'checked':'' ?>> Private
																</label>
																<input type="radio" name="radioPreElemTypeOfSchool" value=NULL style="display: none;">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPreElemYearAttended1" name="txtbxPreElemYearAttended1" value="">
														</div>
														<label class="control-label col-md-1 col-sm-1">To Year</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPreElemYearAttended2" name="txtbxPreElemYearAttended2">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxPreElemHonors" id="txtbxPreElemHonors">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Elementary</span>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">School Graduated <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxElementarySchoolGraduated" name="txtbxElementarySchoolGraduated">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text"  class="form-control col-md-7 col-xs-12" id="txtbxElementarySchoolAddress" name="txtbxElementarySchoolAddress">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3" >Type of School<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioElementaryTypeOfSchool" value="Public"> Public
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioElementaryTypeOfSchool" value="Private" checked=""> Private
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxElementaryYearAttended1" name="txtbxElementaryYearAttended1">
														</div>
														<label class="control-label col-md-1 col-sm-1">To Year</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxElementaryYearAttended2" name="txtbxElementaryYearAttended2">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxElementaryHonors" id="txtbxElementaryHonors">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. High School</span>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3" >School Graduated <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxHighschoolSchoolGraduated" name="txtbxHighschoolSchoolGraduated">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" id="txtbxHighschoolSchoolAddress" name="txtbxHighschoolSchoolAddress">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHighschoolTypeOfSchool" value="Public"> Public
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHighschoolTypeOfSchool" value="Private" checked=""> Private
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHighschoolYearAttended1" name="txtbxHighschoolYearAttended1">
														</div>
														<label class="control-label col-md-1 col-sm-1">To Year</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHighschoolYearAttended2" name="txtbxHighschoolYearAttended2">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxHighschoolHonors" id="txtbxHighschoolHonors">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">IV. Vocational</span>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3" >School Graduated <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVocationalSchoolGraduated" id="txtbxVocationalSchoolGraduated" >
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVocationalSchoolAddress" id="txtbxVocationalSchoolAddress" >
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVocationalTypeOfSchool" value="Public"> Public
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVocationalTypeOfSchool" value="Private"> Private
																	<input type="radio" name="radioVocationalTypeOfSchool" value=NULL checked="true" style="display: none;">
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxVocationalYearAttended1" name="txtbxVocationalYearAttended1">
														</div>
														<label class="control-label col-md-1 col-sm-1">To Year</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxVocationalYearAttended2" name="txtbxVocationalYearAttended2">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxVocationalHonors" id="txtbxVocationalHonors" >
														</div>
													</div>
													<span class="section" style="margin-left:90px;">V. College</span>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">School Graduated <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxCollegeSchoolGraduated" id="txtbxCollegeSchoolGraduated" >
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">School Address <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxCollegeSchoolAddress" id="txtbxCollegeSchoolAddress" >
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCollegeTypeOfSchool" value="Public"> Public
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCollegeTypeOfSchool" value="Private"> Private
																</label>
																<input type="radio" name="radioCollegeTypeOfSchool" value=NULL checked="true" style="display: none;">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">From Year</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCollegeYearAttended1" name="txtbxCollegeYearAttended1">
														</div>
														<label class="control-label col-md-1 col-sm-1">To Year</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxCollegeYearAttended2" name="txtbxCollegeYearAttended2">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxCollegeHonors" id="txtbxCollegeHonors" >
														</div>
													</div>
													<br>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">HighSchool General Average</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxHighschoolGeneralAverage" id="txtbxHighschoolGeneralAverage" >
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Nature of schooling<span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<div class="btn-group" data-toggle="buttons" >
																<label class="btn btn-default" data-toggle-class="btn-primary " style="padding-left: 22px; padding-right:22px;" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioNatureOfSchooling" id="radioNatureOfSchooling" value="Continuous" checked="true"> Continuous
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" style="padding-left: 23px; padding-right:23px;">
																	<input type="radio" name="radioNatureOfSchooling" id="radioNatureOfSchooling" value="Interrupted" > Interrupted
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">If interrupted, why?</label>
														<div class="col-md-6 col-sm-6">
															<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxNatureOfSchoolingInterruptedReason" id="txtbxNatureOfSchoolingInterruptedReason" disabled="true">
														</div>
													</div>
												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
													<li><input type="submit" name="btnFinish" class="btn btn-primary next-step" value="Finish" ></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step3">
												<h3 class="text-center">Step 3</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Home and Family Background</h1></span>
													<span class="section" style="margin-left:90px;">I. Mother</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherName" name="txtbxMotherName">
														</div>

													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age <span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherAge" id="txtbxMotherAge"> 
														</div>
														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioMotherState" value="Living"> Living 
															</label>
															<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioMotherState" value="Deceased" checked=""> Deceased
															</label>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownMotherEducationalAttainment" id="dropdownMotherEducationalAttainment">
																<option></option>
																<option  selected=""></option>
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
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
														<div class="col-md-2 col-sm-2 col-xs-12">
															<select class="select2_group form-control" name="dropdownMotherOccupationType" id="dropdownMotherOccupationType">
																<option  selected=""></option>
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed">Unemployed</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Occupation:<span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherOccupation" id="txtbxMotherOccupation">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherNameOfEmployer" id="txtbxMotherNameOfEmployer">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxMotherAddressOfEmployer" id="txtbxMotherAddressOfEmployer">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Father</span>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherName" id="txtbxFatherName">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age <span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherAge" id="txtbxFatherAge">
														</div>
														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioFatherState" value="Living"> Living 
															</label>
															<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																<input type="radio" name="radioFatherState" value="Deceased" checked=""> Deceased
															</label>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownFatherEducationalAttainment" id="dropdownFatherEducationalAttainment">
																<option></option>
																<option  selected=""></option>
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
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
														<div class="col-md-2 col-sm-2 col-xs-12">
															<select class="select2_group form-control" name="dropdownFatherOccupationType" id="dropdownFatherOccupationType">
																<option  selected=""></option>
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed">Unemployed</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Occupation:<span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherOccupation" id="txtbxFatherOccupation">
														</div>
													</div> 
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherNameOfEmployer" id="txtbxFatherNameOfEmployer">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxFatherAddressOfEmployer" id="txtbxFatherAddressOfEmployer">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">III. Guardian</span>

													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianName" id="txtbxGuardianName">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Age <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianAge" id="txtbxGuardianAge">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Relationship</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownGuardianRelationship" id="dropdownGuardianRelationship">
																<option></option>
																<option selected=""></option>
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
														<label class="control-label col-md-1 col-sm-1"  >Others: <span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" disabled="true" name="txtbxGuaridanOthersRelationship" id="txtbxGuaridanOthersRelationship">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownGuardianEducationalAttainment" id="dropdownGuardianEducationalAttainment">
																<option></option>
																<option  selected=""></option>
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
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
														<div class="col-md-2 col-sm-2 col-xs-12">
															<select class="select2_group form-control" name="dropdownGuardianOccupationType" id="dropdownGuardianOccupationType">
																<option  selected=""></option>
																<optgroup label="Employed">
																	<option value="Government">Local - Government</option>
																	<option value="Private">Local - Private</option>
																	<option value="Abroad">Abroad</option>
																	<option value="Self-Employed">Self-Employed</option>
																</optgroup>
																<option value="Unemployed">Unemployed</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Occupation:<span class="required">*</span>
														</label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianOccupation" id="txtbxGuardianOccupation">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Name of Employer <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianNameOfEmployer" id="txtbxGuardianNameOfEmployer">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Address of Employer <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGuardianAddressOfEmployer" id="txtbxGuardianAddressOfEmployer">
														</div>
													</div>
													<br>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's Marital RelationShip</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownParentsMaritalRelationship" id="dropdownParentsMaritalRelationship">
																<option></option>
																<option  selected=""></option>
																<option value="Married and staying together">Married and staying together</option>
																<option value="ot married but living together">Not married but living together</option>
																<option value="Single Parent">Single Parent</option>
																<option value="Married but separated">Married but separated</option>
																<option value="Others">Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span ></span></label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" disabled="true" name="txtbxOthersParentsMaritalRelationship" id="txtbxOthersParentsMaritalRelationship">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Number of children in the family including yourself</label>
														<div class="col-md-2 col-sm-2">
															<input class="form-control col-md-1 col-xs-1" type="text" name="txtbxNoOfChildrenInTheFamily" id="txtbxNoOfChildrenInTheFamily">
														</div>
														<label class="control-label col-md-1 col-sm-1">Brothers</label>
														<div class="col-md-1 col-sm-1">
															<input class="form-control col-md-1 col-xs-1" type="text" name="txtbxNoOfBrothers" id="txtbxNoOfBrothers">
														</div>
														<label class="control-label col-md-1 col-sm-1">Sisters</label>
														<div class="col-md-1 col-sm-1">
															<input class="form-control col-md-1 col-xs-1" type="text" name="txtbxNoOfSisters" id="txtbxNoOfSisters">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3">Number of brother/s sisters gainfully employed</label>
														<div class="col-md-3 col-sm-3">
															<input class="form-control col-md-1 col-xs-1" type="text" name="txtbxNoOfBrothersSistersGainfullyEmployed" id="txtbxNoOfBrothersSistersGainfullyEmployed">
														</div>
														<label class="control-label col-md-1 col-sm-1 col-xs-12">Ordinal Position</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownOrdinalPosition" id="dropdownOrdinalPosition">
																<option  selected=""></option>
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
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"> Is your brother/sister who's gainfully employed providing support to : <span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2 col-xs-6">
															<select class="select2_single form-control" tabindex="-1" name="dropdownSupportedByYourSibling" id="dropdownSupportedByYourSibling">
																<option  selected=""></option>
																<option >Your Studies</option>
																<option >Your Family</option>
																<option >His/Her Family</option>
																<option >Does Not Give Support</option>
																<option >Others</option>
															</select>
														</div>
														<label class="control-label col-md-1 col-sm-1"  >Others: <span ></span></label>
														<div class="col-md-3 col-sm-3">
															<input type="text" class="form-control col-md-7 col-xs-12" disabled="true" name="txtbxOthersSupportedByYourSibling" id="txtbxOthersSupportedByYourSibling">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Who finance your schooling?</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownWhoFinancesYourSchooling" id="dropdownWhoFinancesYourSchooling">
																<option selected=""></option>
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
															<input type="text" class="form-control col-md-7 col-xs-12" disabled="true" name="txtbxOthersWhoFinancesYourSchooling" id="txtbxOthersWhoFinancesYourSchooling">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >How much is your weekly allowance<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxWeeklyAllowance" id="txtbxWeeklyAllowance">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's monthly income</label>
														<div class="col-md-6 col-sm-6 col-xs-6">
															<select class="select2_single form-control" name="dropdownParentsMonthlyIncome" id="dropdownParentsMonthlyIncome" tabindex="-1">
																<option  selected=""></option>
																<option >Below average</option>
																<option >Average</option>
																<option >Above average</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you have a quite place to study?<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioQuietPlaceToSTudy" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioQuietPlaceToSTudy" value="No" checked=""> No
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you share your room with anyone?<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioShareRoom" id="radioShareRoom" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioShareRoom" id="radioShareRoom" value="No" checked=""> No
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >If yes with whom?<span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxWithWhom" id="txtbxWithWhom">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Nature of residence while attending school</label>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<select class="select2_single form-control" tabindex="-1" name="dropdownNatureOfResidence" id="dropdownNatureOfResidence">
																<option selected=""></option>
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
															<input type="text" class="form-control col-md-7 col-xs-12" disabled="true" name="txtbxGuaridanOthersRelationship" id="txtbxGuaridanOthersRelationship">
														</div>
													</div>

												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step4">
												<h3 class="text-center">Step 4</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Health Background</h1></span>
													<span class="section" style="margin-left:90px;">I. Physical</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Do you have problems with:
														</label>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Vision<span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVision" value="Yes">Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioVision" value="None" checked=""> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="required">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxVision" id="txtbxVision" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Hearing<span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHearing" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioHearing" value="None" checked=""> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="required">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHearing" id="txtbxHearing" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your Speach<span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioSpeach" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioSpeach" value="None" checked=""> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="required">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxSpeach" id="txtbxSpeach" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Your General Health<span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGeneralHealth" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioGeneralHealth" value="None" checked=""> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >If yes <span class="required">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxGeneralHealth" id="txtbxGeneralHealth" disabled="true">
														</div>
													</div>
													<span class="section" style="margin-left:90px;">II. Psychological</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Psychiatrist<span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychiatrist" id="radioPsychiatrist" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychiatrist" id="radioPsychiatrist" value="Never" checked=""> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When <span class="required">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="datePsychiatrist" id="datePsychiatrist" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what? <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatPsychiatrist" id="txtareaForWhatPsychiatrist" disabled="true"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Psychologist<span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychologist" id="radioPsychologist" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioPsychologist" id="radioPsychologist" value="Never" checked=""> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When <span class="required">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="datePsychologist" id="datePsychologist" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what? <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatPsychologist" id="txtareaForWhatPsychologist" disabled="true"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Counselor<span class="required">*</span>
														</label>
														<div class="col-md-2 col-sm-2">
															<div class="btn-group" data-toggle="buttons">
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCounselor" id="radioCounselor" value="Yes"> Yes
																</label>
																<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																	<input type="radio" name="radioCounselor" id="radioCounselor" value="Never" checked=""> No
																</label>
															</div>
														</div>
														<label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;"  >When <span class="required">*</span></label>
														<div style="margin-left:-10px;" class="col-md-4 col-sm-4">
															<input type="date" class="form-control col-md-7 col-xs-12" name="dateCounselor" id="dateCounselor" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >For what? <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaForWhatCounselor" id="txtareaForWhatCounselor" disabled="true" ></textarea>
														</div>
													</div>
												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="step5">
												<h3 class="text-center">Step 5</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Interest and Hobbies</h1></span>
													<span class="section" style="margin-left:90px;">I. Academic</span>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Club Interests</label>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice1" value="Math Club"> <span class="label-text">Math Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice2" value="Science Club"> <span class="label-text">Science Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice3" value="English Club"> <span class="label-text">English Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice4" value="Filipino Club" ><span class="label-text">Filipino Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice5" value="Astronomy Club"> <span class="label-text">Astronomy Club</span>
															</label><br>
														</div>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice6" value="Quizzers Club"> <span class="label-text">Quizzers Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice7" value="Social Studies Club"> <span class="label-text">Social Studies Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterest[]" id="checkClubChoice8" value="Statistics Club"> <span class="label-text">Statistics Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterestOthers" id="checkClubOthers" value="Others"> <span class="label-text">Others</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkClubInterestNoInterest" id="checkClubNoInterest" name="No Interest"> <span class="label-text">No Interest</span>
															</label><br>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Others, please specify: <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersClubInterest" id="txtbxOthersClubInterest" disabled="true">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >What is/are you favorite subject/s <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaFavoriteSubject" id="txtareaFavoriteSubject" ></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >What is/are your least favorite subject <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<textarea class="form-control" name="txtareaLeastFavoriteSubject" id="txtareaLeastFavoriteSubject" ></textarea>
														</div>
													</div>
													<span class="section" style="margin-left:90px;">Ii. Extra-Culicular</span>
													<div class="form-group">
														<label class="control-label col-md-4 col-sm-4"  >Hobbies (according to preference) <span class="required">*</span>
														</label>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >1. <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby1" id="txtbxHobby1">
														</div>
													</div><div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >2. <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby2" id="txtbxHobby2">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >3. <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby3" id="txtbxHobby3">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >4. <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxHobby4" id="txtbxHobby4">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12">Organization Interests</label>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice1" value="Athlectics"> <span class="label-text">Athletics</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice2" value="Dramatics"> <span class="label-text">Dramatics</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice3" value="Religious Organization"> <span class="label-text">Religious Org</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice5" value="Glee Club"> <span class="label-text">Glee Club</span>
															</label><br>
														</div>
														<div class="col-md-2 col-sm-2 col-xs-2" style="padding-top :8px; ">
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice6" value="Scouting"> <span class="label-text">Scouting</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterest[]" id="checkOrganizationChoice4" value="Chess Club" ><span class="label-text">Chess Club</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterestOthers" id="checkOrganizationOthers" value="Others"> <span class="label-text">Others</span>
															</label><br>
															<label>
																<input type="checkbox" name="checkOrganizationInterestNoInterest" id="checkOrganizationNoInterest" value="No Interest"> <span class="label-text">No Interest</span>
															</label><br>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3"  >Others, please specify: <span class="required">*</span>
														</label>
														<div class="col-md-6 col-sm-6">
															<input type="text" class="form-control col-md-7 col-xs-12" name="txtbxOthersOrganizationInterest" id="txtbxOthersOrganizationInterest" disabled="true">
														</div>
													</div>
												</div>
												<ul class="list-inline pull-right">
													<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
													<li><button type="button" class="btn btn-default next-step">Skip</button></li>
													<li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
												</ul>
											</div>
											<div class="tab-pane" role="tabpanel" id="complete">
												<h3 class="text-center">Step 6</h3>
												<div class="form-horizontal form-label-left">
													<span class="section"> <h1 class="text-center">Test Results</h1></span>

													<div class="x_panel ">
														<span class="section" style="margin-left:90px;">Test Result 1</span>
														<div class="form-group ">
															<label class="control-label col-md-3 col-sm-3">Date Of Test<span class="required">*</span>
															</label>
															<div class="col-md-6 col-sm-6">
																<input id="dateTestResultDateInitial" name="dateTestResultDateInitial" value="" class="date-picker form-control col-md-7 col-xs-12" type="date">
															</div>
														</div>

														<div class="form-group">
															<label class="control-label col-md-3 col-sm-3"  >Name of Test <span class="required">*</span>
															</label>
															<div class="col-md-6 col-sm-6">
																<input id="txtbxTestResultNameInitial" name="txtbxTestResultNameInitial" value="" type="text" class="form-control col-md-7 col-xs-12">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3 col-sm-3"  >Raw Score(RS) <span class="required">*</span>
															</label>
															<div class="col-md-6 col-sm-6">
																<input id="txtbxTestResultRawScoreInitial" name="txtbxTestResultRawScoreInitial" value="" type="text" class="form-control col-md-7 col-xs-12">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR) <span class="required">*</span>
															</label>
															<div class="col-md-6 col-sm-6">
																<input id="txtbxTestResultPercentileRatingInitial" name="txtbxTestResultPercentileRatingInitial" value="" type="text" class="form-control col-md-7 col-xs-12">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3 col-sm-3"  >Description<span class="required">*</span>
															</label>
															<div class="col-md-6 col-sm-6">
																<textarea class="form-control" name="txtareaTestResultDescriptionInitial" id="txtareaTestResultDescriptionInitial" required=""></textarea>
															</div>
														</div>
													</div>
													<!--NEW FIELDS HERE-->
													<div id="newTestFields">

													</div>
													<!--END OF NEW FIELDS-->
													<div class="form-group">
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
		<script src="../build/js/custom.min.js"></script>
		<!-- Form Wizard JS -->
		<script src="js/wizard/wizard.js"></script>
		<!-- Dynamic Form  -->
		<script src="js/dynamicForm/dynamicForm.js"></script>

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
					}
				})
				$('#dropdownMotherOccupationType').change(function() {
					if( $(this).val() == 'Unemployed' || $(this).val() == 'Self-Employed')
					{
						document.getElementById("txtbxMotherNameOfEmployer").disabled = true;
						document.getElementById("txtbxMotherAddressOfEmployer").disabled = true;
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
					}
				})
				$('#txtbxNoOfChildrenInTheFamily').change(function() {
					if( $(this).val() < 2)
					{
						document.getElementById("txtbxNoOfBrothers").disabled = true;
						document.getElementById("txtbxNoOfSisters").disabled = true;
						document.getElementById("txtbxNo").disabled = true;	
					}
					else
					{
						document.getElementById("txtbxNoOfBrothers").disabled = false;
						document.getElementById("txtbxNoOfSisters").disabled = false;
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
					}
				})
				$('input[name="radioVision"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxVision").disabled = false;
					}
					else
					{
						document.getElementById("txtbxVision").disabled = true;
					}
				})
				$('input[name="radioHearing"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxHearing").disabled = false;
					}
					else
					{
						document.getElementById("txtbxHearing").disabled = true;
					}
				})
				$('input[name="radioSpeach"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxSpeach").disabled = false;
					}
					else
					{
						document.getElementById("txtbxSpeach").disabled = true;
					}
				})
				$('input[name="radioGeneralHealth"]').change(function() {
					if( $(this).val() == 'Yes')
					{
						document.getElementById("txtbxGeneralHealth").disabled = false;
					}
					else
					{
						document.getElementById("txtbxGeneralHealth").disabled = true;
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
					}
				})
				$('#checkClubOthers').click(function() {
					if($("#checkClubOthers").is(":checked")){
						document.getElementById("txtbxOthersClubInterest").disabled = false;
					}
					else
					{
						document.getElementById("txtbxOthersClubInterest").disabled = true;
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
						document.getElementById("checkOthers").disabled = true;
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
						}
					}
					$('#checkClubOthers').click(function() {
						if($("#checkClubOthers").is(":checked")){
							document.getElementById("txtbxOthersClubInterest").disabled = false;
						}
						else
						{
							document.getElementById("txtbxOthersClubInterest").disabled = true;
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
						}
					}
				})

			});
		</script>
	</body>
	</html>