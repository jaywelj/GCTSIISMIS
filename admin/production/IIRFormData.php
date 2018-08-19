<?php 	
include("connectionString.php");
$VarcharStudentNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumber']);;

if(isset($VarcharStudentNumber))
{
	$message = $VarcharStudentNumber;
	echo "<script type='text/javascript'>alert('$message');</script>";

	$VarcharStudentFirstName = mysqli_real_escape_string($connect, $_POST['txtbxFirstName']);

	$VarcharStudentLastName = mysqli_real_escape_string($connect, $_POST['txtbxLastName']);

	$VarcharStudentMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxMiddleName']);

	$VarcharStudentCourse = mysqli_real_escape_string($connect, $_POST['selectStudentCourse']);

	$queryGetCollege = "SELECT tbl_college.collegeCode FROM tbl_course INNER JOIN tbl_college ON tbl_course.collegeCode = tbl_college.collegeCode WHERE courseCode = '$VarcharStudentCourse' ";

	$queryGetCollegeArray = mysqli_query($connect, $queryGetCollege);
	while ($row = mysqli_fetch_array($queryGetCollegeArray))
	{
		$VarcharStudentCollege = $row['collegeCode'];
		echo "<script type='text/javascript'>alert('$VarcharStudentCollege');</script>";
	}

	$VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxYear']);

	$VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxSection']);

	$VarcharStudentGender = mysqli_real_escape_string($connect, $_POST['radioGender']);

	$VarcharStudentSexuality = mysqli_real_escape_string($connect, $_POST['dropdownSexuality']);

	if($VarcharStudentSexuality == "Others")
	{
		$VarcharOthersSexuality = mysqli_real_escape_string($connect, $_POST['txtbxOthersSexuality']);
		$VarcharStudentSexuality = $VarcharOthersSexuality;
	}

	$VarcharStudentAge = mysqli_real_escape_string($connect, $_POST['txtbxAge']);

	$VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxYear']);

	$VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxSection']);

	$VarcharStudentCivilStatus = mysqli_real_escape_string($connect, $_POST['dropdownCivilStatus']);


	if ($VarcharStudentCivilStatus == "Others") 
	{

		$VarcharStudentCivilStatusOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersCivilStatus']);
		$VarcharStudentCivilStatus = $VarcharStudentCivilStatusOthers;	
	}

	$VarcharStudentBirthdate = mysqli_real_escape_string($connect, $_POST['dateDateOfBirth']);

	$VarcharStudentHeight = mysqli_real_escape_string($connect, $_POST['txtbxHeight']);

	$VarcharStudentWeight = mysqli_real_escape_string($connect, $_POST['txtbxWeight']);

	$VarcharStudentComplexion = mysqli_real_escape_string($connect, $_POST['dropdownComplexion']);


	if ($VarcharStudentComplexion == "Others") {
		$VarcharStudentComplexionOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersComplexion']);
		$VarcharStudentComplexion = $VarcharStudentComplexionOthers;
	}

	$VarcharStudentBirthplace = mysqli_real_escape_string($connect, $_POST['txtbxPlaceOfBirth']);

	$VarcharStudentCityAddress = mysqli_real_escape_string($connect, $_POST['dropdownCityAddress']);

	$VarcharStudentCityHouseNumber = mysqli_real_escape_string($connect, $_POST['txtbxCityHouseNumber']);

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

	if ($VarcharStudentReligion == "Others")
	{
		$VarcharStudentReligionOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersReligion']);
		$VarcharStudentReligion = $VarcharStudentReligionOthers;
	}

	$VarcharStudentNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxNameOfEmployer']);

	$VarcharStudentEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxAddressOfEmployer']);

	$VarcharStudentContactPersonName = mysqli_real_escape_string($connect, $_POST['txtbxContactPersonName']);

	$VarcharStudentContactPersonAddress = mysqli_real_escape_string($connect, $_POST['txtbxContactPersonAddress']);

	$VarcharStudentContactPersonRelationship = mysqli_real_escape_string($connect, $_POST['dropdownContactPersonRelationship']);

	if ($VarcharStudentContactPersonRelationship == "Others") 
	{
		$VarcharStudentContactPersonRelationshipOthers = mysqli_real_escape_string($connect, $_POST['txtbxContactPersonOthersRelationship']);
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

	$VarcharStudentPreSchoolYearAttended = $VarcharStudentPreSchoolYearAttended1 . '-' . $VarcharStudentPreSchoolYearAttended2;

	$VarcharStudentPreSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxPreElemHonors']);

	$VarcharStudentElementarySchoolName = mysqli_real_escape_string($connect, $_POST['txtbxElementarySchoolGraduated']);

	$VarcharStudentElementarySchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxElementarySchoolAddress']);

	$VarcharStudentElementaryType = mysqli_real_escape_string($connect, $_POST['radioElementaryTypeOfSchool']);

	$VarcharStudentElementaryYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxElementaryYearAttended1']);
	$VarcharStudentElementaryYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxElementaryYearAttended2']);

	$VarcharStudentElementaryYearAttended = $VarcharStudentElementaryYearAttended1 . '-' . $VarcharStudentElementaryYearAttended2;


	$VarcharStudentElementaryHonors = mysqli_real_escape_string($connect, $_POST['txtbxElementaryHonors']);

	$VarcharStudentHSSchoolName = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolSchoolGraduated']);

	$VarcharStudentHSSchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolSchoolAddress']);

	$VarcharStudentHSSchoolType = mysqli_real_escape_string($connect, $_POST['radioHighschoolTypeOfSchool']);

	$VarcharStudentHSSchoolYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolYearAttended1']);
	$VarcharStudentHSSchoolYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolYearAttended2']);

	$VarcharStudentHSSchoolYearAttended = $VarcharStudentHSSchoolYearAttended1 . '-' . $VarcharStudentHSSchoolYearAttended2;

	$VarcharStudentHSSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxHighschoolHonors']);

	$VarcharStudentCollegeName = mysqli_real_escape_string($connect, $_POST['txtbxCollegeSchoolGraduated']);

	$VarcharStudentCollegeAddress = mysqli_real_escape_string($connect, $_POST['txtbxCollegeSchoolAddress']);

	if(isset($_POST['radioCollegeTypeOfSchool']))
		$VarcharStudentCollegeType = mysqli_real_escape_string($connect, $_POST['radioCollegeTypeOfSchool']);
	else
		$VarcharStudentCollegeType = NULL;	

	$VarcharStudentCollegeYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxCollegeYearAttended1']);
	$VarcharStudentCollegeYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxCollegeYearAttended2']);

	$VarcharStudentCollegeYearAttended = $VarcharStudentCollegeYearAttended1 . '-' . $VarcharStudentCollegeYearAttended2;

	$VarcharStudentCollegeHonors = mysqli_real_escape_string($connect, $_POST['txtbxCollegeHonors']);

	$VarcharStudentVocationalName = mysqli_real_escape_string($connect, $_POST['txtbxVocationalSchoolGraduated']);

	$VarcharStudentVocationalAddress = mysqli_real_escape_string($connect, $_POST['txtbxVocationalSchoolAddress']);

	if(isset($_POST['radioVocationalTypeOfSchool']))
		$VarcharStudentVocationalType = mysqli_real_escape_string($connect, $_POST['radioVocationalTypeOfSchool']);
	else
		$VarcharStudentVocationalType = NULL;

	$VarcharStudentVocationalYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxVocationalYearAttended1']);
	$VarcharStudentVocationalYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxVocationalYearAttended2']);

	$VarcharStudentVocationalYearAttended = $VarcharStudentVocationalYearAttended1 . '-' . $VarcharStudentVocationalYearAttended2;

	$VarcharStudentVocationalHonors = mysqli_real_escape_string($connect, $_POST['txtbxVocationalHonors']);

	$VarcharStudentNatureOfSchooling = mysqli_real_escape_string($connect, $_POST['radioNatureOfSchooling']);

	if($VarcharStudentNatureOfSchooling == "Interrupted")
		$VarcharStudentInterruptedWhy = mysqli_real_escape_string($connect, $_POST['txtbxNatureOfSchoolingInterruptedReason']);
	else
		$VarcharStudentInterruptedWhy = NULL;

					//End Of part 2 of form wizard-->

					//Start of part 3 of the form wizard -->

	$VarcharStudentFatherName = mysqli_real_escape_string($connect, $_POST['txtbxFatherName']);

	$VarcharStudentFatherAge = mysqli_real_escape_string($connect, $_POST['txtbxFatherAge']);

	$VarcharStudentFatherStatus = mysqli_real_escape_string($connect, $_POST['radioFatherState']);

	$VarcharStudentFatherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownFatherEducationalAttainment']);

	$VarcharStudentFatherOccupationType = mysqli_real_escape_string($connect, $_POST['dropdownFatherOccupationType']);

	$VarcharStudentFatherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxFatherOccupation']);
	if(isset($_POST['txtbxFatherNameOfEmployer']))
	{
		$VarcharStudentFatherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxFatherNameOfEmployer']);
	}
	else
	{
		$VarcharStudentFatherNameOfEmployer = NULL;
	}
	if(isset($_POST['txtbxFatherAddressOfEmployer']))
	{
		$VarcharStudentFatherAddressOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxFatherAddressOfEmployer']);
	}
	else
	{
		$VarcharStudentFatherAddressOfEmployer = NULL;
	}
	if(isset($_POST['txtbxMotherNameOfEmployer']))
	{
		$VarcharStudentMotherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxMotherNameOfEmployer']);
	}
	else
	{
		$VarcharStudentMotherNameOfEmployer = NULL;
	}
	if(isset($_POST['txtbxMotherAddressOfEmployer']))
	{
		$VarcharStudentMotherAddressOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxMotherAddressOfEmployer']);
	}
	else
	{
		$VarcharStudentMotherAddressOfEmployer = NULL;
	}
	if(isset($_POST['txtbxGuardianNameOfEmployer']))
	{
		$VarcharStudentGuardianNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxGuardianNameOfEmployer']);
	}
	else
	{
		$VarcharStudentGuardianNameOfEmployer = NULL;
	}
	if(isset($_POST['txtbxGuardianAddressOfEmployer']))
	{
		$VarcharStudentGuardianAddressOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxGuardianAddressOfEmployer']);
	}
	else
	{
		$VarcharStudentGuardianAddressOfEmployer = NULL;
	}

	$VarcharStudentMotherName = mysqli_real_escape_string($connect, $_POST['txtbxMotherName']);

	$VarcharStudentMotherAge = mysqli_real_escape_string($connect, $_POST['txtbxMotherAge']);

	$VarcharStudentMotherStatus = mysqli_real_escape_string($connect, $_POST['radioMotherState']);

	$VarcharStudentMotherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownMotherEducationalAttainment']);

	$VarcharStudentMotherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxMotherOccupation']);

	$VarcharStudentMotherOccupationType = mysqli_real_escape_string($connect, $_POST['dropdownMotherOccupationType']);

	$VarcharStudentGuardianName = mysqli_real_escape_string($connect, $_POST['txtbxGuardianName']);

	$VarcharStudentGuardianAge = mysqli_real_escape_string($connect, $_POST['txtbxGuardianAge']);

	$VarcharStudentGuardianRelation = mysqli_real_escape_string($connect, $_POST['dropdownGuardianRelationship']);

	if($VarcharStudentGuardianRelation == "Others")
	{
		$VarcharStudentGuardianRelation = mysqli_real_escape_string($connect, $_POST['txtbxGuaridanOthersRelationship']);
	}

	$VarcharStudentGuardianEducationAttainment = mysqli_real_escape_string($connect, $_POST['dropdownGuardianEducationalAttainment']);

	$VarcharStudentGuardianOccupation = mysqli_real_escape_string($connect, $_POST['txtbxGuardianOccupation']);


	$VarcharStudentGuardianOccupationType = mysqli_real_escape_string($connect, $_POST['dropdownGuardianOccupationType']);

	$VarcharStudentParentMaritalRelationship = mysqli_real_escape_string($connect, $_POST['dropdownParentsMaritalRelationship']);



	if ($VarcharStudentParentMaritalRelationship == "Others") 
	{
		$VarcharStudentParentMaritalRelationship = $VarcharOthersParentMaritalRelationship;
		$VarcharOthersParentMaritalRelationship = mysqli_real_escape_string($connect, $_POST['txtbxOthersParentsMaritalRelationship']);
	}

	$VarcharStudentNumOfChildren = mysqli_real_escape_string($connect, $_POST['txtbxNoOfChildrenInTheFamily']);

	if(isset($_POST['txtbxNoOfBrothers']))
	{
		$VarcharStudentNumOfBrothers = mysqli_real_escape_string($connect, $_POST['txtbxNoOfBrothers']);
	}
	else
	{
		$VarcharStudentNumOfBrothers = NULL;
	}

	if(isset($_POST['txtbxNoOfSisters']))
	{
		$VarcharStudentNumOfSisters = mysqli_real_escape_string($connect, $_POST['txtbxNoOfSisters']);
	}
	else
	{
		$VarcharStudentNumOfSisters = NULL;
	}


	$VarcharStudentSiblingsEmployed = mysqli_real_escape_string($connect, $_POST['txtbxNoOfBrothersSistersGainfullyEmployed']);

		//$VarcharStudentSiblingsEmployedMoreThan0 = mysqli_real_escape_string($connect, $_POST['dropdownSupportedByYourSibling']);

	if(isset($_POST['dropdownOrdinalPosition']))
	{
		$VarcharStudentOrdinalPosition = mysqli_real_escape_string($connect, $_POST['dropdownOrdinalPosition']);
	}
	else
	{
		$VarcharStudentOrdinalPosition = "Only Child";
	}


	if(isset($_POST['dropdownSupportedByYourSibling']))
	{
		if($_POST['dropdownSupportedByYourSibling'] == "Others")
		{
			$VarcharStudentSiblingSupporter = mysqli_real_escape_string($connect, $_POST['txtbxOthersSupportedByYourSibling']);
		}
		else
		{
			$VarcharStudentSiblingSupporter = mysqli_real_escape_string($connect, $_POST['dropdownSupportedByYourSibling']);
		}
	}
	else	
	{
		$VarcharStudentSiblingSupporter = "";
	}

	$VarcharStudentFinancer = mysqli_real_escape_string($connect, $_POST['dropdownWhoFinancesYourSchooling']);


	if ($VarcharStudentFinancer == "Others") {

		$VarcharOthersFinancer = mysqli_real_escape_string($connect, $_POST['txtbxOthersWhoFinancesYourSchooling']);
		$VarcharStudentFinancer = $VarcharOthersFinancer;
	}

	$VarcharStudentWeeklyAllowance = mysqli_real_escape_string($connect, $_POST['txtbxWeeklyAllowance']);

	$VarcharStudentMonthlyIncome = mysqli_real_escape_string($connect, $_POST['dropdownParentsMonthlyIncome']);

	$VarcharStudentStudyPlace = mysqli_real_escape_string($connect, $_POST['radioQuietPlaceToSTudy']);

	$VarcharStudentRoomSharing = mysqli_real_escape_string($connect, $_POST['radioShareRoom']);

	echo "<script>alert('$VarcharStudentRoomSharing');</script>";
	if ($VarcharStudentRoomSharing == "Yes") 
	{
		$VarcharStudentRoomSharingYes = mysqli_real_escape_string($connect, $_POST['txtbxWithWhom']);
		$VarcharStudentRoomSharing = $VarcharStudentRoomSharingYes;

	}

	$VarcharStudentNatureOfResidence = mysqli_real_escape_string($connect, $_POST['dropdownNatureOfResidence']);
	if($VarcharStudentNatureOfResidence	== "Others")
	{
		$VarcharStudentNatureOfResidence = mysqli_real_escape_string($connect, $_POST['txtbxOthersNatureOfResidence']);
	}
					//End of part 3 of the form wizard 

					//Start of par4 of the form wizard

	$VarcharStudentVision = mysqli_real_escape_string($connect, $_POST['radioVision']);

	echo "<script>alert('$VarcharStudentVision');</script>";
	if ($VarcharStudentVision == "Yes") {
		echo "<script>alert('$VarcharStudentVision');</script>";
		$VarcharStudentVisionSpecify = mysqli_real_escape_string($connect, $_POST['txtbxVision']);
		$VarcharStudentVision = $VarcharStudentVisionSpecify;
	}
	else
	{
		$VarcharStudentVisionSpecify = NULL;
	}
	$VarcharStudentHearing = mysqli_real_escape_string($connect, $_POST['radioHearing']);


	if ($VarcharStudentHearing == "Yes") 
	{
		$VarcharStudentHearingSpecify = mysqli_real_escape_string($connect, $_POST['txtbxHearing']);
		$VarcharStudentHearing = $VarcharStudentHearingSpecify;
	}
	else
		$VarcharStudentHearingSpecify = NULL;

	$VarcharStudentSpeech = mysqli_real_escape_string($connect, $_POST['radioSpeach']);


	if ($VarcharStudentSpeech == "Yes") 
	{
		$VarcharStudentSpeechSpecify = mysqli_real_escape_string($connect, $_POST['txtbxSpeach']);
		$VarcharStudentSpeech = $VarcharStudentSpeechSpecify;
	}
	else
		$VarcharStudentSpeechSpecify = NULL;

	$VarcharStudentGeneralHealth = mysqli_real_escape_string($connect, $_POST['radioGeneralHealth']);


	if ($VarcharStudentGeneralHealth == "Yes") 
	{
		$VarcharStudentGeneralHealthSpecify = mysqli_real_escape_string($connect, $_POST['txtbxGeneralHealth']);
		$VarcharStudentGeneralHealth = $VarcharStudentGeneralHealthSpecify;
	}
	else
		$VarcharStudentGeneralHealthSpecify = NULL;

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
	$varcharClubInterest ="";
	if (isset($_POST['checkClubInterestNoInterest'])) {
		$varcharClubInterest = "No Interest";
	} 
	else 
	{
		if (isset($_POST['checkClubInterest'])) 
		{
			$varcharClubInterestArray = $_POST['checkClubInterest'];
			$n = count($varcharClubInterestArray);
			for ($i = 0; $i < $n - 1; $i++) {
				$varcharClubInterest = $varcharClubInterestArray[$i] . "/" . $varcharClubInterest;
			}
			$varcharClubInterest = $varcharClubInterest . $varcharClubInterestArray[$n - 1];
			if (isset($_POST['checkClubInterestOthers'])) {
				$varcharClubInterestOthers = mysqli_real_escape_string($connect,$_POST['txtbxOthersClubInterest']);
				$varcharClubInterest = $varcharClubInterest . "/" . $varcharClubInterestOthers;
			}
		} 
		else {
			echo "<script>alert('2');</script>";
			if (isset($_POST['checkClubInterestOthers'])) {
				$varcharClubInterestOthers = mysqli_real_escape_string($connect,$_POST['txtbxOthersClubInterest']);
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
	if (isset($_POST['checkOrganizationInterestNoInterest'])) 
	{
		$varcharOrganizationInterest = "No Interest";
	} 
	else 
	{
		if (isset($_POST['checkOrganizationInterest'])) {
			$varcharOrganizationInterestArray = $_POST['checkOrganizationInterest'];
			$n = count($varcharOrganizationInterestArray);
			for ($i = 0; $i < $n - 1; $i++) {
				$varcharOrganizationInterest = $varcharOrganizationInterestArray[$i] . "/" . $varcharOrganizationInterest;
			}
			$varcharOrganizationInterest = $varcharOrganizationInterest . $varcharOrganizationInterestArray[$n - 1];
			if (isset($_POST['checkOrganizationInterestOthers'])) {
				$varcharOrganizationInterestOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersOrganizationInterest']);
				$varcharOrganizationInterest = $varcharOrganizationInterest . "/" . $varcharOrganizationInterestOthers;
			}
		} else {
			if (isset($_POST['checkOrganizationInterestOthers'])) {
				$varcharOrganizationInterestOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersOrganizationInterest']);
				$varcharOrganizationInterest = $varcharOrganizationInterestOthers;
			}
		}
	}
		// end of part 5 form wizard 

		// start of part 6 form wizard
	$VarcharStudentTestIdInitial = $_POST['testID'];
	$VarcharStudentTestDateInitial = $_POST['dateTestResultDateInitial'];
	$VarcharStudentTestNameInitial = $_POST['txtbxTestResultNameInitial'];
	$VarcharStudentTestRSInitial = $_POST['txtbxTestResultRawScoreInitial'];
	$VarcharStudentTestPRInitial =$_POST['txtbxTestResultPercentileRatingInitial'];
	$VarcharStudentTestDescriptionInitial = $_POST['txtareaTestResultDescriptionInitial'];

	if(isset($_POST['txtbxTestResultNameNew']))
	{
		$VarcharStudentTestDateNew = $_POST['dateTestResultDateNew'];
		$VarcharStudentTestNameNew = $_POST['txtbxTestResultNameNew'];
		$VarcharStudentTestRSNew = $_POST['txtbxTestResultRawScoreNew'];
		$VarcharStudentTestPRNew = $_POST['txtbxTestResultPercentileRatingNew'];
		$VarcharStudentTestDescriptionNew = $_POST['txtareaTestResultDescriptionNew'];
	}




	$queryAddPersonalInfo = "UPDATE `tbl_personalinfo` SET `lastName` = '$VarcharStudentLastName', `firstName` = '$VarcharStudentFirstName', `middleName` = '$VarcharStudentMiddleName', `sex` = '$VarcharStudentGender', `sexuality` = '$VarcharStudentSexuality', `age` = '$VarcharStudentAge', `civilStatus` = '$VarcharStudentCivilStatus', `birthDate` = '$VarcharStudentBirthdate', `height` = '$VarcharStudentHeight', `weight` = '$VarcharStudentWeight', `complexion` = '$VarcharStudentComplexion', `birthPlace` = '$VarcharStudentBirthplace', `cityHouseNumber` = '$VarcharStudentCityHouseNumber', `cityName` = '$VarcharStudentCityAddress', `cityBarangay` = '$VarcharStudentCityBarangay', `provinceHouseNumber` = '$VarcharStudentProvinceHouseNumber', `provinceProvincial` = '$VarcharStudentProvinceProvince', `provinceName` = '$VarcharStudentProvinceCity', `provinceBarangay` = '$VarcharStudentProvinceBarangay', `telNumber` = '$VarcharStudentTelNum', `mobileNumber` = '$VarcharStudentMobileNum', `email` = '$VarcharStudentEmail', `hsGWA` = '$VarcharStudentHSGWA', `religion` = '$VarcharStudentReligion', `employerName` = '$VarcharStudentNameOfEmployer', `employerAddress` = '$VarcharStudentEmployerAddress', `contactPersonName` = '$VarcharStudentContactPersonName', `cpAddress` = '$VarcharStudentContactPersonAddress', `cpRelationship` = '$VarcharStudentContactPersonRelationship', `cpContactNumber` = '$VarcharStudentContactPersonContactNumber', `collegeCode` = '$VarcharStudentCollege', `courseCode` = '$VarcharStudentCourse' WHERE `tbl_personalinfo`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddEducationalBackground = "UPDATE `tbl_educationalbackground` SET `prepSchoolName` = '$VarcharStudentPreSchoolName', `prepSchoolAddress` = '$VarcharStudentPreSchoolAddress', `prepType` = '$VarcharStudentPreSchoolType', `prepYearAttended` = '$VarcharStudentPreSchoolYearAttended', `prepAwards` = '$VarcharStudentPreSchoolHonors', `elemSchoolName` = '$VarcharStudentElementarySchoolName', `elemSchoolAddress` = '$VarcharStudentElementarySchoolAddress', `elemType` = '$VarcharStudentElementaryType', `elemYearAttended` = '$VarcharStudentElementaryYearAttended', `elemAwards` = '$VarcharStudentElementaryYearAttended', `hsSchoolName` = '$VarcharStudentHSSchoolName', `hsSchoolAddress` = '$VarcharStudentHSSchoolAddress', `hsType` = '$VarcharStudentHSSchoolType', `hsYearAttended` = '$VarcharStudentHSSchoolYearAttended', `hsAwards` = '$VarcharStudentHSSchoolHonors', `vocSchoolName` = '$VarcharStudentVocationalName', `vocSchoolAddress` = '$VarcharStudentVocationalAddress', `vocType` = '$VarcharStudentVocationalType', `vocYearAttended` = '$VarcharStudentVocationalYearAttended', `vocAwards` = '$VarcharStudentVocationalHonors', `collegeSchoolName` = '$VarcharStudentCollegeName', `collegeSchoolAddress` = '$VarcharStudentCollegeAddress', `collegeType` = '$VarcharStudentCollegeType', `collegeYearAttended` = '$VarcharStudentCollegeYearAttended', `collegeAwards` = '$VarcharStudentCollegeHonors', `natureOfSchooling` = '$VarcharStudentNatureOfSchooling', `interruptedWhy` = '$VarcharStudentInterruptedWhy' WHERE `tbl_educationalbackground`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddFamilyBackground = "UPDATE `tbl_familybackground` SET `fatherName` = '$VarcharStudentFatherName', `fatherAge` = '$VarcharStudentFatherAge', `fatherStatus` = '$VarcharStudentFatherStatus', `fatherEducation` = '$VarcharStudentFatherEducationalAttainment', `fatherOccupation` = '$VarcharStudentFatherOccupation', `fatherOccupationType` = '$VarcharStudentFatherOccupationType', `fatherEmployerName` = '$VarcharStudentFatherNameOfEmployer', `fatherEmployerAdd` = '$VarcharStudentFatherAddressOfEmployer', `motherName` = '$VarcharStudentMotherName', `motherAge` = '$VarcharStudentMotherAge', `motherStatus` = '$VarcharStudentMotherStatus', `motherEducation` = '$VarcharStudentMotherEducationalAttainment', `motherOccupation` = '$VarcharStudentMotherOccupation', `motherOccupationType` = '$VarcharStudentMotherOccupationType',  `motherEmployerName` = '$VarcharStudentMotherNameOfEmployer', `motherEmployerAdd` = '$VarcharStudentMotherAddressOfEmployer', `guardianName` = '$VarcharStudentGuardianName', `guardianAge` = '$VarcharStudentGuardianAge', `guardianRelation` = '$VarcharStudentGuardianRelation', `guardianEducation` = '$VarcharStudentGuardianEducationAttainment', `guardianOccupation` = '$VarcharStudentGuardianOccupation', `guardianOccupationType` = '$VarcharStudentGuardianOccupationType', `guardianEmployerName` = '$VarcharStudentGuardianNameOfEmployer', `guardianEmployerAdd` = '$VarcharStudentGuardianAddressOfEmployer', `parentsMaritalRelation` = '$VarcharStudentParentMaritalRelationship', `noOfChildren` = '$VarcharStudentNumOfChildren', `noOfBrother` = '$VarcharStudentNumOfBrothers', `noOfSister` = '$VarcharStudentNumOfSisters', `broSisEmployed` = '$VarcharStudentSiblingsEmployed', `supportedByYourSibling` = '$VarcharStudentSiblingSupporter', `ordinalPosition` = '$VarcharStudentOrdinalPosition', `schoolFinancer` = '$VarcharStudentFinancer', `weeklyAllowance` = '$VarcharStudentWeeklyAllowance', `totalMonthlyIncome` = '$VarcharStudentMonthlyIncome', `studyPlace` = '$VarcharStudentStudyPlace', `roomSharing` = '$VarcharStudentRoomSharing', `natureOfResidence` = '$VarcharStudentNatureOfResidence' WHERE `tbl_familybackground`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddHealth = "UPDATE `tbl_healthinfo` SET `visionProblem` = '$VarcharStudentVision', `hearingProblem` = '$VarcharStudentHearing', `speechProblem` = '$VarcharStudentSpeech', `generalHealth` = '$VarcharStudentGeneralHealth', `psychiatristConsult` = '$VarcharStudentPsychiatristConsult', `psychiatristWhen` = '$VarcharStudentPsychiatristWhen', `psychiatristReason` = '$VarcharStudentPsychiatristWhat', `psychologistConsult` = '$VarcharStudentPsychologistConsult', `psychologistWhen` = '$VarcharStudentPsychologistWhen', `psychologistReason` = '$VarcharStudentPsychologistWhat', `counselorConsult` = '$VarcharStudentCounselorConsult', `counselorWhen` = '$VarcharStudentCounselorWhen', `counselorReason` = '$VarcharStudentCounselorWhat' WHERE `tbl_healthinfo`.`studentNumber` = '$VarcharStudentNumber'";

	$queryAddInterests = "UPDATE `tbl_interesthobbies` SET `clubName` = '$varcharClubInterest', `favSubject` = '$VarcharStudentFavoriteSubject', `leastFavSubject` = '$VarcharStudentLeastFavSubject', `hobby1` = '$VarcharStudentHobbies1', `hobby2` = '$VarcharStudentHobbies2', `hobby3` = '$VarcharStudentHobbies3', `hobby4` = '$VarcharStudentHobbies4', `interestOrganization` = '$varcharOrganizationInterest', `organizationPosition` = 'Nothing' WHERE `tbl_interesthobbies`.`studentNumber` = '$VarcharStudentNumber'";

	foreach ($VarcharStudentTestIdInitial as $key => $value) {

		$query = "UPDATE `tbl_testrecord` SET `testDate` = '$VarcharStudentTestDateInitial[$key]', `testName` = '$VarcharStudentTestNameInitial[$key]', `testRawScore` = '$VarcharStudentTestRSInitial[$key]', `testPercentile` = '$VarcharStudentTestPRInitial[$key]', `testDescription` = '$VarcharStudentTestDescriptionInitial[$key]' WHERE `tbl_testrecord`.`testID` = '$value'";
		if(mysqli_query($connect,$query))
		{
			echo "<script>alert('Successfully updated note #'+'$value');</script>";
		}
		else
		{
			echo "error:". mysqli_error($connect);
		}
	}
	if(isset($_POST['txtbxTestResultNameNew']))
	{
		foreach ($VarcharStudentTestNameNew as $key => $value) {

			$query = "INSERT INTO tbl_testrecord (`testID`, `testDate`, `testName`, `testRawScore`, `testPercentile`, `testDescription`, `studentNumber`) VALUES (NULL,'$VarcharStudentTestDateNew[$key]','$VarcharStudentTestNameNew[$key]','$VarcharStudentTestRSNew[$key]','VarcharStudentTestPRNew[$key]','$VarcharStudentTestDescriptionNew[$key]', '$VarcharStudentNumber') ";
			if(mysqli_query($connect,$query))
			{
				echo "<script>alert('Successfully updated note #'+'$value');</script>";
			}
			else
			{
				echo "error:". mysqli_error($connect);
			}
		}
	}
	if (mysqli_query($connect, $queryAddPersonalInfo)) {
		$message = "Successfully Added In Personal Info";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
		$message = "Query Error #2" . mysqli_error($connect);
		echo "<script type='text/javascript'>alert('$message');</script>";
        //redirectig to the display page. In our case, it is index.php
		echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordFormEdit.php?id=$VarcharStudentNumber';</script>";
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
		echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordFormEdit.php?id=$VarcharStudentNumber';</script>";
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
		echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordFormEdit.php?id=$VarcharStudentNumber';</script>";
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
		echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordFormEdit.php?id=$VarcharStudentNumber';</script>";
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
		echo "<script type='text/javascript'>location.href = 'IndividualInventoryRecordFormEdit.php?id=$VarcharStudentNumber';</script>";
	}
}
?>