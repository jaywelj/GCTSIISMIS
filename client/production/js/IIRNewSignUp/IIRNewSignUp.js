$(function(){
		$('#dropdownStudentSexuality').change(function() {
			var dropdownStudentSexualityChoice = $(this).val();
			if( dropdownStudentSexualityChoice == 'Others')
			{
				document.getElementById("txtbxSexualityOthers").disabled = false;
			}
			else
			{
				document.getElementById("txtbxSexualityOthers").disabled = true;
			}
		})
		$('#dropdownStudentCivilStatus').change(function() {
			var dropdownStudentCivilStatusChoice = $(this).val();
			if( dropdownStudentCivilStatusChoice == 'Others')
			{
				document.getElementById("txtbxStudentCivilStatusOthers").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentCivilStatusOthers").disabled = true;
			}
		})
		$('#dropdownStudentReligion').change(function() {
			var dropdownStudentReligionChoice = $(this).val();
			if( dropdownStudentReligionChoice == 'Others')
			{
				document.getElementById("txtbxOthersReligion").disabled = false;
			}
			else
			{
				document.getElementById("txtbxOthersReligion").disabled = true;
			}
		})
		$('#dropdownStudentNatureOfSchooling').change(function() {
			var dropdownStudentNatureOfSchoolingChoice = $(this).val();
			if( dropdownStudentNatureOfSchoolingChoice == 'Interrupted')
			{
				document.getElementById("txtbxStudentInterruptedWhy").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentInterruptedWhy").disabled = true;
			}
		})
		$('#dropdownStudentParentMaritalRelationship').change(function() {
			var dropdownStudentParentMaritalRelationshipChoice = $(this).val();
			if( dropdownStudentParentMaritalRelationshipChoice == 'Others')
			{
				document.getElementById("txtbxStudentParentMaritalRelationshipOthers").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentParentMaritalRelationshipOthers").disabled = true;
			}
		})
		$('#dropdownStudentFinancer').change(function() {
			var dropdownStudentFinancerChoice = $(this).val();
			if( dropdownStudentFinancerChoice == 'Others')
			{
				document.getElementById("txtbxStudentOthersFinancer").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentOthersFinancer").disabled = true;
			}
		})
		$('#dropdownstudentGuardianRelation').change(function() {
			var dropdownstudentGuardianRelation = $(this).val();
			if( dropdownstudentGuardianRelation == 'Others')
			{
				document.getElementById("txtbxStudentGuardianRelationOthers").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentGuardianRelationOthers").disabled = true;
			}
		})
		$('#dropdownStudentNatureOfResidence').change(function() {
			var dropdownStudentNatureOfResidenceChoice = $(this).val();
			if( dropdownStudentNatureOfResidenceChoice == 'Others')
			{
				document.getElementById("txtbxOthersResidence").disabled = false;
			}
			else
			{
				document.getElementById("txtbxOthersResidence").disabled = true;
			}
		})
		$('#txtbxStudentNumOfChildren').change(function() {
			var txtbxStudentNumOfChildrenNumber = $(this).val();
			if( txtbxStudentNumOfChildrenNumber < 2)
			{
				document.getElementById("txtbxStudentNumOfBrothers").disabled = true;
				document.getElementById("txtbxStudentNumOfSisters").disabled = true;
				document.getElementById("txtbxStudentNumOfSiblingsEmployed").disabled = true;
				document.getElementById("dropdownStudentProvidingSupport").disabled = true;
				document.getElementById("txtbxOthersStudentProvidingSupport").disabled = true;
			}
			else
			{
				document.getElementById("txtbxStudentNumOfBrothers").disabled = false;
				document.getElementById("txtbxStudentNumOfSisters").disabled = false;
				document.getElementById("txtbxStudentNumOfSiblingsEmployed").disabled = false;
				document.getElementById("dropdownStudentProvidingSupport").disabled = false; 
				document.getElementById("txtbxOthersStudentProvidingSupport").disabled = false;		
			}
		})
		$('#dropdownStudentComplexion').change(function() {
			var dropdownComplexionChoice = $(this).val();
			if( dropdownComplexionChoice == 'Others')
			{
				document.getElementById("txtbxOthersComplexion").disabled = false;
			}
			else
			{
				document.getElementById("txtbxOthersComplexion").disabled = true;
			}
		})
		$('input[name="radioStudentShareRoom"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentWithWhom").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentWithWhom").disabled = true;
			}
		})
		$('input[name="radioStudentVision"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentVisionSpecify").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentVisionSpecify").disabled = true;
			}
		})
		$('input[name="radioStudentHearing"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentHearingSpecify").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentHearingSpecify").disabled = true;
			}
		})
		$('input[name="radioStudentSpeech"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentSpeechSpecify").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentSpeechSpecify").disabled = true;
			}
		})
		$('input[name="radioStudentGeneralHealth"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentGeneralHealthSpecify").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentGeneralHealthSpecify").disabled = true;
			}
		})
		$('input[name="radioStudentPsychiatrist"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentPsychiatristWhen").disabled = false;
				document.getElementById("txtbxStudentPsychiatristWhat").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentPsychiatristWhen").disabled = true;
				document.getElementById("txtbxStudentPsychiatristWhat").disabled = true;
			}
		})
		$('input[name="radioStudentPsychologist"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentPsychologistWhen").disabled = false;
				document.getElementById("txtbxStudentPsychologistWhat").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentPsychologistWhen").disabled = true;
				document.getElementById("txtbxStudentPsychologistWhat").disabled = true;
			}
		})    
		$('input[name="radioStudentCounselor"]').change(function() {
			if( $(this).val() == 'Yes')
			{
				document.getElementById("txtbxStudentCounselorWhen").disabled = false;
				document.getElementById("txtbxStudentCounselorWhat").disabled = false;
			}
			else
			{
				document.getElementById("txtbxStudentCounselorWhen").disabled = true;
				document.getElementById("txtbxStudentCounselorWhat").disabled = true;
			}
		})
		$('#checkStudentClubNoInterest').click(function() {
			if($("#checkStudentClubNoInterest").is(":checked")){
				document.getElementById("txtbxStudentClubOthers").disabled = true;
				document.getElementById("checkStudentClubMath").disabled = true;
				document.getElementById("checkStudentClubScience").disabled = true;
				document.getElementById("checkStudentClubEnglish").disabled = true;
				document.getElementById("checkStudentClubQuizzer").disabled = true;
				document.getElementById("checkStudentClubFilipino").disabled = true;
				document.getElementById("checkStudentClubAstronomy").disabled = true;
				document.getElementById("checkStudentClubSocialStudies").disabled = true;
				document.getElementById("checkStudentClubStatistics").disabled = true;
				document.getElementById("checkStudentClubDebating").disabled = true;
				document.getElementById("checkStudentClubOthers").disabled = true;
			}
			else
			{
				document.getElementById("txtbxStudentClubOthers").disabled = false;
				document.getElementById("checkStudentClubMath").disabled = false;
				document.getElementById("checkStudentClubScience").disabled = false;
				document.getElementById("checkStudentClubEnglish").disabled = false;
				document.getElementById("checkStudentClubQuizzer").disabled = false;
				document.getElementById("checkStudentClubFilipino").disabled = false;
				document.getElementById("checkStudentClubAstronomy").disabled = false;
				document.getElementById("checkStudentClubSocialStudies").disabled = false;
				document.getElementById("checkStudentClubStatistics").disabled = false;
				document.getElementById("checkStudentClubDebating").disabled = false;
				document.getElementById("checkStudentClubOthers").disabled = false;
				if($("#checkStudentClubOthers").is(":checked"))
				{
					document.getElementById("txtbxStudentClubOthers").disabled = false;
				}
				else
				{
					document.getElementById("txtbxStudentClubOthers").disabled = true;
				}
			}
			$('#checkStudentClubOthers').click(function() {
				if($("#checkStudentClubOthers").is(":checked")){
					document.getElementById("txtbxStudentClubOthers").disabled = false;
				}
				else
				{
					document.getElementById("txtbxStudentClubOthers").disabled = true;
				}
			})
		})
		$('#checkStudentOrganizationNoInterest').click(function() {
			if($("#checkStudentOrganizationNoInterest").is(":checked")){
				document.getElementById("txtbxOrganizationOthers").disabled = true;
				document.getElementById("checkStudentOrganizationAthletics").disabled = true;
				document.getElementById("checkStudentOrganizationScouting").disabled = true;
				document.getElementById("checkStudentOrganizationGlee").disabled = true;
				document.getElementById("checkStudentOrganizationReligion").disabled = true;
				document.getElementById("checkStudentOrganizationDramatics").disabled = true;
				document.getElementById("checkStudentOrganizationOthers").disabled = true;
				document.getElementById("checkStudentOrganizationChess").disabled = true;
				document.getElementById("txtbxOrganizationPosition").disabled = true;

			}
			else
			{
				document.getElementById("txtbxOrganizationOthers").disabled = false;
				document.getElementById("checkStudentOrganizationAthletics").disabled = false;
				document.getElementById("checkStudentOrganizationScouting").disabled = false;
				document.getElementById("checkStudentOrganizationGlee").disabled = false;
				document.getElementById("checkStudentOrganizationReligion").disabled = false;
				document.getElementById("checkStudentOrganizationDramatics").disabled = false;
				document.getElementById("checkStudentOrganizationOthers").disabled = false;
				document.getElementById("checkStudentOrganizationChess").disabled = false;
				document.getElementById("txtbxOrganizationPosition").disabled = false;

				if($("#checkStudentOrganizationOthers").is(":checked"))
				{
					document.getElementById("txtbxOrganizationOthers").disabled = false;
				}
				else
				{
					document.getElementById("txtbxOrganizationOthers").disabled = true;
				}
			}
			$('#checkStudentOrganizationOthers').click(function() {
				if($("#checkStudentOrganizationOthers").is(":checked")){
					document.getElementById("txtbxOrganizationOthers").disabled = false;
				}
				else
				{
					document.getElementById("txtbxOrganizationOthers").disabled = true;
				}
			})
		})
	});