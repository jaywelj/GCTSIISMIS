<?php 
include("connectionString.php");
$selections = array();
$columns = array();
$whereValues = array();
$whereClause = "";
$groupByValues = array();
$groupByClause ="";
$concatClause="";

if(isset($_POST['dropdownCivilStatus']))
{
	if(isset($_POST['checkStudentNumber']))
	{
		array_push($selections, "tbl_studentaccount.studentNumber");
		array_push($columns, "Student Number");
	}
	if(isset($_POST['checkFullName']))
	{
		array_push($selections, "CONCAT(firstName,' ',lastName) AS fullName");
		array_push($columns, "Full Name");
	}
	if($_POST['dropdownGender']<>"None")
	{
		array_push($selections, "sex");
		array_push($columns, "Gender");
		array_push($groupByValues, "sex");
		if($_POST['dropdownGender']<>"All")
			array_push($whereValues, "sex = '".$_POST['dropdownGender']."'");
	}
	if($_POST['dropdownSexuality']<>"None")
	{
		array_push($selections, "sexuality");
		array_push($columns, "Sexuality");
		array_push($groupByValues, "sexuality");
		if($_POST['dropdownSexuality']<>"All")
			array_push($whereValues, "sexuality = '".$_POST['dropdownSexuality']."'");
	}
	if($_POST['dropdownCivilStatus']<>"None")
	{
		array_push($selections, "civilStatus");
		array_push($columns, "Civil Status");
		array_push($groupByValues, "civilStatus");
		if($_POST['dropdownCivilStatus']<>"All")
			array_push($whereValues, "civilStatus = '".$_POST['dropdownCivilStatus']."'");
	}
	$value1 = $_POST['dropdownMinAge'];
	$value2 = $_POST['dropdownMaxAge'];
	if($value1 <> "None" || $value2 <> "None")
	{
		array_push($selections, "age");
		array_push($columns, "Age");
		array_push($groupByValues, "age");

		if($value1<>"All"&&$value1<>"None")
			array_push($whereValues, "age >= '".$value1."'");
		if($value2<>"All"&&$value2<>"None")
			array_push($whereValues, "age <= '".$value2."'");
	}
	if(isset($_POST['checkBirthDate']))
	{
		array_push($selections, "birthDate");
		array_push($columns, "BirthDate");
	}
	$value = $_POST['dropdownCityAddress'];
	if($value <> "None")
	{
		array_push($selections, "cityName");
		array_push($columns, "City Address");
		array_push($groupByValues, "cityName");
		if($value <> "All")
			array_push($whereValues, "cityName = '".$value."'");
	}
	$value = $_POST['dropdownProvincialAddress'];
	if($value <> "None")
	{
		array_push($selections, "provinceProvincial");
		array_push($columns, "Provincial Address");
		array_push($groupByValues, "provinceProvincial");
		if($value <> "All")
			array_push($whereValues, "provinceProvincial = '".$value."'");
	}
	$value = $_POST['dropdownReligion'];
	if($value <> "None")
	{
		array_push($selections, "religion");
		array_push($columns, "Religion");
		array_push($groupByValues, "religion");
		if($value <> "All")
			array_push($whereValues, "religion = '".$value."'");
	}
	$value = $_POST['dropdownComplexion'];
	if($value <> "None")
	{
		array_push($selections, "complexion");
		array_push($columns, "Complexion");
		array_push($groupByValues, "complexion");
		if($value <> "All")
			array_push($whereValues, "complexion = '".$value."'");
	}
	$value = $_POST['dropdownStudentCourse'];
	if($value <> "None")
	{
		array_push($selections, "courseCode");
		array_push($columns, "Course");
		array_push($groupByValues, "courseCode");
		if($value <> "All")
			array_push($whereValues, "courseCode = '".$value."'");
	}
	$value = $_POST['dropdownStudentCollege'];
	if($value <> "None")
	{
		array_push($selections, "collegeCode");
		array_push($columns, "College");
		array_push($groupByValues, "collegeCode");
		if($value <> "All")
			array_push($whereValues, "collegeCode = '".$value."'");
	}
	$value = $_POST['dropdownYear'];
	if($value <> "None")
	{
		array_push($selections, "year");
		array_push($columns, "Year");
		array_push($groupByValues, "year");
		if($value <> "All")
			array_push($whereValues, "year = '".$value."'");
	}
	$value = $_POST['dropdownSection'];
	if($value <> "None")
	{
		array_push($selections, "section");
		array_push($columns, "Section");
		array_push($groupByValues, "section");
		if($value <> "All")
			array_push($whereValues, "section = '".$value."'");
	}
	$value = $_POST['dropdownPElemSchoolType'];
	if($value <> "None")
	{
		array_push($selections, "prepType");
		array_push($columns, "Pre-Elem School Type");
		array_push($groupByValues, "prepType");
		if($value <> "All")
			array_push($whereValues, "prepType = '".$value."'");
	}
	$value = $_POST['dropdownElemSchoolType'];
	if($value <> "None")
	{
		array_push($selections, "elemType");
		array_push($columns, "Elementary School Type");
		array_push($groupByValues, "elemType");
		if($value <> "All")
			array_push($whereValues, "elemType = '".$value."'");
	}
	$value = $_POST['dropdownHSchoolType'];
	if($value <> "None")
	{
		array_push($selections, "hsType");
		array_push($columns, "High School School Type");
		array_push($groupByValues, "hsType");
		if($value <> "All")
			array_push($whereValues, "hsType = '".$value."'");
	}
	$value = $_POST['dropdownVocationalSchoolType'];
	if($value <> "None")
	{
		array_push($selections, "vocType");
		array_push($columns, "Vocational School Type");
		array_push($groupByValues, "vocType");
		if($value <> "All")
			array_push($whereValues, "vocType = '".$value."'");
	}
	$value = $_POST['dropdownCollegeSchoolType'];
	if($value <> "None")
	{
		array_push($selections, "collegeType");
		array_push($columns, "College School Type");
		array_push($groupByValues, "collegeType");
		if($value <> "All")
			array_push($whereValues, "collegeType = '".$value."'");
	}
	$value = $_POST['dropdownNatureOfSchooling'];
	if($value <> "None")
	{
		array_push($selections, "natureOfSchooling");
		array_push($columns, "Nature of Schooling");
		array_push($groupByValues, "natureOfSchooling");
		if($value == "Interrupted(show reason)")
		{
			array_push($selections, "interruptedWhy");
			array_push($columns, "Reason Why");
			$value = "Interrupted";
		}
		if($value <> "All")
			array_push($whereValues, "natureOfSchooling = '".$value."'");
	}
	$value = $_POST['dropdownMotherStatus'];
	if($value <> "None")
	{
		array_push($selections, "motherStatus");
		array_push($columns, "Mother Status");
		array_push($groupByValues, "motherStatus");
		if($value <> "All")
			array_push($whereValues, "motherStatus = '".$value."'");
	}
	$value = $_POST['dropdownMotherEducationalAttainment'];
	if($value <> "None")
	{
		array_push($selections, "motherEducation");
		array_push($columns, "Mother Educational Attainment");
		array_push($groupByValues, "motherEducation");
		if($value <> "All")
			array_push($whereValues, "motherEducation = '".$value."'");
	}
	$value = $_POST['dropdownMotherOccupationType'];
	if($value <> "None")
	{
		array_push($selections, "motherOccupationType");
		array_push($columns, "Mother Occupation Type");
		array_push($groupByValues, "motherOccupationType");
		if($value <> "All")
			array_push($whereValues, "motherOccupationType = '".$value."'");
	}
	$value = $_POST['dropdownFatherStatus'];
	if($value <> "None")
	{
		array_push($selections, "fatherStatus");
		array_push($columns, "Father Status");
		array_push($groupByValues, "fatherStatus");
		if($value <> "All")
			array_push($whereValues, "fatherStatus = '".$value."'");
	}
	$value = $_POST['dropdownFatherEducationalAttainment'];
	if($value <> "None")
	{
		array_push($selections, "fatherEducation");
		array_push($columns, "Father Educational Attainment");
		array_push($groupByValues, "fatherEducation");
		if($value <> "All")
			array_push($whereValues, "fatherEducation = '".$value."'");
	}
	$value = $_POST['dropdownFatherOccupationType'];
	if($value <> "None")
	{
		array_push($selections, "fatherOccupationType");
		array_push($columns, "Father Occupation Type");
		array_push($groupByValues, "fatherOccupationType");
		if($value <> "All")
			array_push($whereValues, "fatherOccupationType = '".$value."'");
	}
	$value = $_POST['dropdownGuardianRelationship'];
	if($value <> "None")
	{
		array_push($selections, "guardianRelation");
		array_push($columns, "Gardian Relationship");
		array_push($groupByValues, "guardianRelation");
		if($value <> "All")
			array_push($whereValues, "guardianRelation = '".$value."'");
	}
	$value = $_POST['dropdownGuardianEducationalAttainment'];
	if($value <> "None")
	{
		array_push($selections, "guardianEducation");
		array_push($columns, "Guardian Educational Attainment");
		array_push($groupByValues, "guardianEducation");
		if($value <> "All")
			array_push($whereValues, "guardianEducation = '".$value."'");
	}
	$value = $_POST['dropdownGuardianOccupationType'];
	if($value <> "None")
	{
		array_push($selections, "guardianOccupationType");
		array_push($columns, "Guardian Occupation Type");
		array_push($groupByValues, "guardianOccupationType");
		if($value <> "All")
			array_push($whereValues, "guardianOccupationType = '".$value."'");
	}
	$value = $_POST['dropdownParentsMaritalRelationship'];
	if($value <> "None")
	{
		array_push($selections, "parentsmaritalRelation");
		array_push($columns, "Parent's Marital Relationship");
		array_push($groupByValues, "parentsmaritalRelation");
		if($value <> "All")
			array_push($whereValues, "parentsmaritalRelation = '".$value."'");
	}
	$value1 = $_POST['dropdownMinChild'];
	$value2 = $_POST['dropdownMaxChild'];
	if($value1 <> "None" || $value2 <> "None")
	{
		array_push($selections, "noOfChildren");
		array_push($columns, "No Of Children");
		array_push($groupByValues, "noOfChildren");
		if($value1<>"All"&&$value1<>"None")
			array_push($whereValues, "noOfChildren >= '".$value1."'");
		if($value2<>"All"&&$value2<>"None")
			array_push($whereValues, "noOfChildren <= '".$value2."'");
	}
	$value = $_POST['dropdownOrdinalPosition'];
	if($value <> "None")
	{
		array_push($selections, "ordinalPosition");
		array_push($columns, "Ordinal Position");
		array_push($groupByValues, "ordinalPosition");
		if($value <> "All")
			array_push($whereValues, "ordinalPosition = '".$value."'");
	}
	$value = $_POST['dropdownSchoolFinancer'];
	if($value <> "None")
	{
		array_push($selections, "schoolFinancer");
		array_push($columns, "School Financer");
		array_push($groupByValues, "schoolFinancer");
		if($value <> "All")
			array_push($whereValues, "schoolFinancer = '".$value."'");
	}
	$value = $_POST['dropdownWeeklyAllowance'];
	if($value <> "None")
	{
		array_push($selections, "weeklyAllowance");
		array_push($columns, "Weekly Allowance");
		array_push($groupByValues, "weeklyAllowance");
		if($value <> "All")
		{
			if($value == "Below or equal to 100")
				array_push($whereValues, "weeklyAllowance <=  '100'");
			else if($value == "101-500")
				array_push($whereValues, "weeklyAllowance >  '100' AND weeklyAllowance <=  '500'");
			else if($value == "501-1000")
				array_push($whereValues, "weeklyAllowance >  '500' AND weeklyAllowance <=  '1000'");
			else if($value == "Above 1000")
				array_push($whereValues, "weeklyAllowance >  '1000'");
		}
	}
	$value = $_POST['dropdownParentsMonthlyIncome'];
	if($value <> "None")
	{
		array_push($selections, "totalMonthlyIncome");
		array_push($columns, "Parent's Income");
		array_push($groupByValues, "totalMonthlyIncome");
		if($value <> "All")
			array_push($whereValues, "totalMonthlyIncome = '".$value."'");
	}
	$value = $_POST['dropdownQuietPlace'];
	if($value <> "None")
	{
		array_push($selections, "studyPlace");
		array_push($columns, "Quiet Place to Study");
		array_push($groupByValues, "studyPlace");
		if($value <> "All")
			array_push($whereValues, "studyPlace = '".$value."'");
	}
	$value = $_POST['dropdownRoomSharing'];
	if($value <> "None")
	{
		array_push($selections, "roomSharing");
		array_push($columns, "Room Sharing");
		array_push($groupByValues, "roomSharing");
		if($value <> "All")
		{
			if($value == "Yes")
				array_push($whereValues, "roomSharing != 'No'");
			else
				array_push($whereValues, "roomSharing = 'No'");
		}
	}
	$value = $_POST['dropdownNatureOfResidence'];
	if($value <> "None")
	{
		array_push($selections, "natureOfResidence");
		array_push($columns, "Nature Of Residence");
		array_push($groupByValues, "natureOfResidence");
		if($value <> "All")
			array_push($whereValues, "natureOfResidence = '".$value."'");
	}
	$value = $_POST['dropdownVisionProblem'];
	if($value <> "None")
	{
		array_push($selections, "visionProblem");
		array_push($columns, "Vision Problem");
		array_push($groupByValues, "visionProblem");
		if($value <> "All")
		{
			if($value == "Yes")
				array_push($whereValues, "visionProblem != ''");
			else
				array_push($whereValues, "visionProblem = ''");
		}
	}
	$value = $_POST['dropdownHearingProblem'];
	if($value <> "None")
	{
		array_push($selections, "hearingProblem");
		array_push($columns, "Hearing Problem");
		array_push($groupByValues, "hearingProblem");
		if($value <> "All")
		{
			if($value == "Yes")
				array_push($whereValues, "hearingProblem != ''");
			else
				array_push($whereValues, "hearingProblem = ''");
		}
	}
	$value = $_POST['dropdownSpeechProblem'];
	if($value <> "None")
	{
		array_push($selections, "speechProblem");
		array_push($columns, "Speech Problem");
		array_push($groupByValues, "speechProblem");
		if($value <> "All")
		{
			if($value == "Yes")
				array_push($whereValues, "speechProblem != ''");
			else
				array_push($whereValues, "speechProblem = ''");
		}
	}
	$value = $_POST['dropdownGeneralHealthProblem'];
	if($value <> "None")
	{
		array_push($selections, "generalHealth");
		array_push($columns, "General Health Problem");
		array_push($groupByValues, "generalHealth");
		if($value <> "All")
		{
			if($value == "Yes")
				array_push($whereValues, "generalHealth != ''");
			else
				array_push($whereValues, "generalHealth = ''");
		}
	}
	$value = $_POST['dropdownCounselorVisit'];
	if($value <> "None")
	{
		array_push($selections, "counselorConsult");
		array_push($columns, "Consulted A Counselor");
		array_push($groupByValues, "counselorConsult");
		if($value == "Yes(With Reason)")
		{
			array_push($selections, "counselorReason");
			array_push($columns, "Reason for Visit");
			$value = "Yes";
		}
		if($value <> "All")
			array_push($whereValues, "counselorConsult = '".$value."'");
	}
	$value = $_POST['dropdownPsychologistVisit'];
	if($value <> "None")
	{
		array_push($selections, "PsychologistConsult");
		array_push($columns, "Consulted A Psychologist");
		array_push($groupByValues, "PsychologistConsult");
		if($value == "Yes(With Reason)")
		{
			array_push($selections, "PsychologistReason");
			array_push($columns, "Reason for Visit");
			$value = "Yes";
		}
		if($value <> "All")
			array_push($whereValues, "PsychologistConsult = '".$value."'");
	}
	$value = $_POST['dropdownPsychiatristVisit'];
	if($value <> "None")
	{
		array_push($selections, "PsychiatristConsult");
		array_push($columns, "Consulted A Psychiatrist");
		array_push($groupByValues, "PsychiatristConsult");
		if($value == "Yes(With Reason)")
		{
			array_push($selections, "PsychiatristReason");
			array_push($columns, "Reason for Visit");
			$value = "Yes";
		}
		if($value <> "All")
			array_push($whereValues, "PsychiatristConsult = '".$value."'");
	}
	$value = $_POST['dropdownClubInterest'];
	if($value <> "None")
	{
		array_push($selections, "clubName");
		array_push($columns, "Club Interest");
		array_push($groupByValues, "clubName");
		if($value == "No Interest")
		{
			array_push($whereValues, "clubName = '".$value."'");
		}
		else if($value == "Club Interest")
		{
			array_push($whereValues, "clubName != 'No Interest'");
		}
	}
	$value = $_POST['dropdownOrganizationInterest'];
	if($value <> "None")
	{
		array_push($selections, "interestOrganization");
		array_push($columns, "Organization Interest");
		array_push($groupByValues, "interestOrganization");
		if($value == "No Interest")
		{
			array_push($whereValues, "interestOrganization = '".$value."'");
		}
		else if($value == "Organization Interest")
		{
			array_push($whereValues, "interestOrganization != 'No Interest'");
		}
	}
	if(isset($_POST['checkEmail']))
	{
		array_push($selections, "email");
		array_push($columns, "Email");
	}
	if(isset($_POST['checkMobileNumber']))
	{
		array_push($selections, "mobileNumber");
		array_push($columns, "Mobile Number");
	}
	if(isset($_POST['checkTelephoneNumber']))
	{
		array_push($selections, "telNumber");
		array_push($columns, "Telephone Number");
	}










	//creation of query
	$selectionArray = $selections;
	$selections = implode(", ", $selections);
	if(!empty($groupByValues))
	{
		$groupByClause = "GROUP BY ".implode(", ", $groupByValues);
		$concatClause = "CONCAT(".implode(",' ',", $groupByValues)."),";	
	}
	echo $groupByClause;
	$whereValues = implode(" AND ", $whereValues);
	if(!empty($whereValues))
	{
		$whereClause = "WHERE ".$whereValues;
		// $whereClause2 = mysqli_escape_string($connect,$whereClause);
		// echo "<script>alert('$whereClause2');</script>";
	}
	
}
else
{
}
?>
<br>
<br>
<hr>
<center><h1>Query Result</h1></center>
<hr>
<table id="datatable-buttons" class="table table-striped table-bordered">
	<thead>
		<tr>
			<?php
			foreach($columns as $i => $value)
			{
				echo"<th>".$value."</th>";
			}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		if(!empty($selections))
		{
			$query = "
			SELECT $selections FROM tbl_studentaccount
			INNER JOIN tbl_personalinfo on tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber
			INNER JOIN tbl_educationalbackground on tbl_studentaccount.studentNumber = tbl_educationalbackground.studentNumber
			INNER JOIN tbl_familybackground on tbl_studentaccount.studentNumber = tbl_familybackground.studentNumber
			INNER JOIN tbl_healthinfo on tbl_studentaccount.studentNumber = tbl_healthinfo.studentNumber
			INNER JOIN tbl_interesthobbies on tbl_studentaccount.studentNumber = tbl_interesthobbies.studentNumber
			INNER JOIN tbl_testrecord on tbl_studentaccount.studentNumber = tbl_testrecord.studentNumber $whereClause
			";
			$query2 = "
			SELECT $concatClause $selections, COUNT(*) AS counts FROM tbl_studentaccount
			INNER JOIN tbl_personalinfo on tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber
			INNER JOIN tbl_educationalbackground on tbl_studentaccount.studentNumber = tbl_educationalbackground.studentNumber
			INNER JOIN tbl_familybackground on tbl_studentaccount.studentNumber = tbl_familybackground.studentNumber
			INNER JOIN tbl_healthinfo on tbl_studentaccount.studentNumber = tbl_healthinfo.studentNumber
			INNER JOIN tbl_interesthobbies on tbl_studentaccount.studentNumber = tbl_interesthobbies.studentNumber
			INNER JOIN tbl_testrecord on tbl_studentaccount.studentNumber = tbl_testrecord.studentNumber $whereClause $groupByClause";
			
			if(!($queryResult = mysqli_query($connect, $query)))
			{
				echo mysqli_error($connect);
			}
			else 
			{
				while($row = mysqli_fetch_array($queryResult))
				{
					echo "<tr>";
					foreach($selectionArray as $i => $value)
					{
						if($value == 'tbl_studentaccount.studentNumber')
						{
							$value = 'studentNumber';
						}
						else if($value == "CONCAT(firstName,' ',lastName) AS fullName")
						{
							$value = 'fullName';
						}
						echo"<td>".$row[$value]."</td>";
					}
					echo "</tr>";
				}
			}
			
		}
		else
		{
			echo "<script>alert('Please Make a selection');</script>";
		}
		
		?>
	</tbody>
	<tfoot>
		<?php
		foreach($columns as $i => $value)
		{
			echo"<th>".$value."</th>";
		}
		?>
	</tfoot>
</table>
<?php
if(count($groupByValues) !=0)
{ 
	echo '<!-- pie chart -->
	<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="x_panel" style="margin-top: 40px;">
	<div class="x_title">
	<h2>Result Summary<small>Pie Chart</small></h2>
	<div class="clearfix"></div>
	</div>
	<div class="x_content2">
	<div id="summary_donut" style="width:100%; height:300px;"></div>
	</div>
	</div>
	</div>
	<!-- /Pie chart -->';
	echo '<!-- pie chart -->
	<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="x_panel" style="margin-top: 24px;">
	<div class="x_title">
	<h2>Overall Comparison<small>Pie Chart</small></h2>
	<div class="clearfix"></div>
	</div>
	<div class="x_content2">
	<div id="overall_donut" style="width:100%; height:300px;"></div>
	</div>
	</div>
	</div>
	<!-- /Pie chart -->';
}
else
{
}
?>
<script type="text/javascript">
	
	function init_morris_charts() {
		if ($('#summary_donut').length ){

			Morris.Donut({
				element: 'summary_donut',
				data: [
				<?php

				if(!($queryResult2 = mysqli_query($connect, $query2)))
				{
					echo mysqli_error($connect);
				}
				while($row = mysqli_fetch_array($queryResult2))
				{
					echo "{label: '".$row[0]."', value: ".$row['counts']."},";
					$total = $row['counts'];
				}
				?>
				],
				<?php
				$total = 0;
				if(!($queryResult2 = mysqli_query($connect, $query2)))
				{
					echo mysqli_error($connect);
				}
				while($row = mysqli_fetch_array($queryResult2))
				{
					$total += $row['counts'];
				}
				?>
				colors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
				formatter: function (y) {
					return y + '(' + Math.round(y/<?php echo $total;?> * 100) + '%)' ;

				},
				resize: true
			});

		}
		if ($('#overall_donut').length ){

			Morris.Donut({
				element: 'overall_donut',
				data: [
				<?php

				if(!($queryResult = mysqli_query($connect, $query)))
				{
					echo mysqli_error($connect);
				}
				else
				{
					
					$num = mysqli_num_rows($queryResult);
					$queryResult3 = mysqli_query($connect, "SELECT studentNumber FROM tbl_studentaccount");
					$otherHalf = mysqli_num_rows($queryResult3) - $num;
					$total = mysqli_num_rows($queryResult3);
					echo "{label: 'Result Total', value: '".$num."'},";
					echo "{label: 'Other Students', value: '".$otherHalf."'}";
				}
				
				?>
				],
				<?php
				
				
				?>
				colors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
				formatter: function (y) {
					return y + '(' + Math.round(y/<?php echo $total;?> * 100) + '%)' ;

				},
				resize: true
			});

		}
	}
	
</script>


