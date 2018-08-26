<?php
if(isset($_POST['btnLogin'])) 
{
	include("connectionString.php");
	$varcharStudentAccountNumber = mysqli_real_escape_string($connect, $_POST['loginid']);
	$varcharStudentAccountPassword = mysqli_real_escape_string($connect, $_POST['loginpw']);

	$queryAccount = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$varcharStudentAccountNumber' AND studentPassword='$varcharStudentAccountPassword' ";
	echo "<script type='text/javascript'>alert('$queryAccount');</script>";
	echo "<script type='text/javascript'>alert('$varcharStudentAccountNumber');</script>";

	$queryArray = mysqli_query($connect, $queryAccount);
	if (mysqli_num_rows($queryArray)>0) 
	{
		session_start();
		$_SESSION['sessionStudentAccountNumber'] = $varcharStudentAccountNumber;
		$_SESSION['sessionStudentAccountPassword'] = $varcharStudentAccountPassword;
		$message = "You will now be redirected to your account";
		echo "<script type='text/javascript'>alert('$message');window.location.replace('index2.php');</script>";
	}
	else 
	{
		$message = "No account matches the given information";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
if(isset($_POST['btnAdd'])) 
{
                    //including the database connection file
	include_once("connectionString.php");

	$VarcharStudentAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountFirstName']);

	$VarcharStudentAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountLastName']);

	$VarcharStudentAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountMiddleName']);

	$VarcharStudentAccountNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountNumber']);

	$VarcharStudentAccountPassword = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountPassword']);
	$VarcharStudentAccountCPassword = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountCPassword']);

	$VarcharStudentAccountCourse = mysqli_real_escape_string($connect, $_POST['dropdownStudentAccountCourse']);

	$VarcharStudentAccountYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountYear']);

	$VarcharStudentAccountSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountSection']);

	$dateStudentAccountDate = mysqli_real_escape_string($connect, $_POST['dateStudentAccountBirthDate']);


	$querySelectingCollege = "SELECT * FROM tbl_course WHERE `courseCode` = '$VarcharStudentAccountCourse'";
	$resSelectingCollege = mysqli_query($connect, $querySelectingCollege);
	while($res = mysqli_fetch_array($resSelectingCollege))
	{

		$varcharCourseCode = $res['courseCode'];
		$varcharCourseName = $res['courseName'];
		$varcharCollegeCode = $res['collegeCode'];

	}
	$VarcharStudentAccountCollege = $varcharCollegeCode;
                    //first name validation if input is a space 
                    // checking empty fields
	$query = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$VarcharStudentAccountNumber' ";
	$result = mysqli_query($connect, $query);

	if (mysqli_num_rows($result) == 1 )
	{

		$message = "Student Number Already Registered ";
		echo "<script type='text/javascript'>alert('$message');</script>";

		echo "<script type='text/javascript'>location.href = 'index.php';</script>";
	}


	if(empty($VarcharStudentAccountFirstName) || empty($VarcharStudentAccountNumber)) 
	{

		if(empty($VarcharStudentAccountFirstName))
		{
			$message = "Enter a First Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(empty($VarcharStudentAccountNumber)) 
		{
			$message = "Enter a valid Student Number";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
                        //link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else if($VarcharStudentAccountPassword<>$VarcharStudentAccountCPassword)
	{
		$message = "Password does not match";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

	else 
	{ 

		$queryAddStudentAccount = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentPassword`, `aboutStudent`, `studentDisplayPic`) VALUES ('$VarcharStudentAccountNumber', '$VarcharStudentAccountPassword', '', NULL)";

		$queryAddPersonalInfo = "INSERT INTO `tbl_personalinfo` (`infoID`, `lastName`, `firstName`, `middleName`, `sex`, `sexuality`, `age`, `year`, `section`, `civilStatus`, `birthDate`, `height`, `weight`, `complexion`, `birthPlace`, `cityHouseNumber`, `cityName`, `cityBarangay`, `provinceHouseNumber`, `provinceProvincial`, `provinceName`, `provinceBarangay`, `telNumber`, `mobileNumber`, `email`, `hsGWA`, `religion`, `employerName`, `employerAddress`, `contactPersonName`, `cpAddress`, `cpRelationship`, `cpContactNumber`, `collegeCode`, `courseCode`, `studentNumber`) VALUES (NULL, '$VarcharStudentAccountLastName', '$VarcharStudentAccountFirstName', '$VarcharStudentAccountMiddleName', 'NA', 'Not Set', '0', 'Not Set', 'Not Set', 'Not Set', NULL, NULL, NULL, 'Not Set', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Not Set', 'Not Set', NULL, 'Not Set', NULL, NULL, 'Not Set', NULL, 'Not Set', 'Not Set', '$VarcharStudentAccountCollege', '$VarcharStudentAccountCourse', '$VarcharStudentAccountNumber')";

		$queryAddEducationalBackground = "INSERT INTO `tbl_educationalbackground` (`educationID`, `prepSchoolName`, `prepSchoolAddress`, `prepType`, `prepYearAttended`, `prepAwards`, `elemSchoolName`, `elemSchoolAddress`, `elemType`, `elemYearAttended`, `elemAwards`, `hsSchoolName`, `hsSchoolAddress`, `hsType`, `hsYearAttended`, `hsAwards`, `vocSchoolName`, `vocSchoolAddress`, `vocType`, `vocYearAttended`, `vocAwards`, `collegeSchoolName`, `collegeSchoolAddress`, `collegeType`, `collegeYearAttended`, `collegeAwards`, `natureOfSchooling`, `interruptedWhy`, `studentNumber`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '$VarcharStudentAccountNumber')";


		$queryAddFamilyBackground = "INSERT INTO `tbl_familybackground` (`familyID`, `fatherName`, `fatherAge`, `fatherStatus`, `fatherEducation`, `fatherOccupationType`, `fatherOccupation`, `fatherEmployerName`, `fatherEmployerAdd`, `motherName`, `motherAge`, `motherStatus`, `motherEducation`, `motherOccupationType`, `motherOccupation`, `motherEmployerName`, `motherEmployerAdd`, `guardianName`, `guardianAge`, `guardianRelation`, `guardianEducation`, `guardianOccupationType`, `guardianOccupation`, `guardianEmployerName`, `guardianEmployerAdd`, `parentsMaritalRelation`, `noOfChildren`, `noOfBrother`, `noOfSister`, `broSisEmployed`, `ordinalPosition`, `supportedByYourSibling`, `schoolFinancer`, `weeklyAllowance`, `totalMonthlyIncome`, `studyPlace`, `roomSharing`, `natureOfResidence`, `studentNumber`) VALUES (NULL, 'Not Set', NULL, 'Not Set', 'Not Set', 'Not Set', 'Not Set', NULL, NULL, 'Not Set', NULL, 'Not Set', 'Not Set', 'Not Set', 'Not Set', NULL, NULL, 'Not Set', NULL, 'Not Set', 'Not Set', 'Not Set', 'Not Set', NULL, NULL, 'Not Set', '0', NULL, NULL, 'None', 'NA', 'Not Set', 'Not Set', '', 'Not Set', 'NA', 'Not Set', 'Not Set', '$VarcharStudentAccountNumber')";

		$queryAddHealth = "INSERT INTO `tbl_healthinfo` (`healthID`, `visionProblem`, `hearingProblem`, `speechProblem`, `generalHealth`, `psychiatristConsult`, `psychiatristWhen`, `psychiatristReason`, `psychologistConsult`, `psychologistWhen`, `psychologistReason`, `counselorConsult`, `counselorWhen`, `counselorReason`, `studentNumber`) VALUES (NULL, 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'NA', NULL, NULL, 'NA', NULL, NULL, 'NA', NULL, NULL, '$VarcharStudentAccountNumber')";

		$queryAddInterests = "INSERT INTO `tbl_interesthobbies` (`interestID`, `clubName`, `favSubject`, `leastFavSubject`, `hobby1`, `hobby2`, `hobby3`, `hobby4`, `interestOrganization`, `organizationPosition`, `studentNumber`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$VarcharStudentAccountNumber')";

		$queryAddTestResults = "INSERT INTO `tbl_testrecord` (`testID`, `testDate`, `testName`, `testRawScore`, `testPercentile`, `testDescription`, `studentNumber`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, '$VarcharStudentAccountNumber')";

		if(mysqli_query($connect, $queryAddStudentAccount))
		{   
			$message = "Successfully Added Student Account";
			echo "<script type='text/javascript'>alert('$message');</script>";
			if (mysqli_query($connect, $queryAddPersonalInfo)) 
			{
				$message = "Successfully Added In Personal Info";
				echo "<script type='text/javascript'>alert('$message');</script>";
				if (mysqli_query($connect, $queryAddEducationalBackground)) {
					$message = "Successfully Added In Educational Background";
					echo "<script type='text/javascript'>alert('$message');</script>";
					if (mysqli_query($connect, $queryAddFamilyBackground)) {
						$message = "Successfully Added In Family Background";
						echo "<script type='text/javascript'>alert('$message');</script>";
						if (mysqli_query($connect, $queryAddHealth)) {
							$message = "Successfully Added In Health";
							echo "<script type='text/javascript'>alert('$message');</script>";
							if (mysqli_query($connect, $queryAddInterests)) {
								$message = "Successfully Added In Interest And Hobbies";
								echo "<script type='text/javascript'>alert('$message');</script>";
								if (mysqli_query($connect, $queryAddTestResults)) {
									$message = "Successfully Added In Test Results";
									echo "<script type='text/javascript'>alert('$message');</script>";
									session_start();
									$_SESSION['sessionStudentAccountNumber'] = $VarcharStudentAccountNumber;
									$_SESSION['sessionStudentAccountPassword'] = $VarcharStudentAccountPassword;
									$message = "You will now be redirected to your account";
									echo "<script type='text/javascript'>alert('$message');</script>";
									echo "<script type='text/javascript'>location.href = 'index2.php';</script>";

								}
								else
								{
									$message = "Query Error #7";
									echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
									echo "<script type='text/javascript'>location.href = 'index.php';</script>";
								}

							}
							else
							{
								$message = "Query Error #6";
								echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
								echo "<script type='text/javascript'>location.href = 'index.php';</script>";
							}

						}
						else
						{
							$message = "Query Error #5";
							echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
							echo "<script type='text/javascript'>location.href = 'index.php';</script>";
						}

					}
					else
					{
						$message = "Query Error #4";
						echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
						echo "<script type='text/javascript'>location.href = 'index.php';</script>";
					}

				}
				else
				{
					$message = "Query Error #3";
					echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
					echo "<script type='text/javascript'>location.href = 'index.php';</script>";
				}
			}
			else
			{
				$message = "Query Error #2";
				echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
				echo "<script type='text/javascript'>location.href = 'index.php';</script>";
			}


		}
		else
		{
			$message = "Query Error #1";
			echo "<script type='text/javascript'>alert('$message');</script>";
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
	<title>About | OCPS</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.vertical-tabs.css">
  <!-- =======================================================
	Theme Name: Mentor
	Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
	Author: BootstrapMade.com
	Author URL: https://bootstrapmade.com
	======================================================= -->
	<style type="text/css">
	.tab-pane i {
		font-size: 80px;
		color: #800;
		margin-top: 7px;
	}
</style>
</head>

<body>

	<!--Navigation bar-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">
					GCT<span>S</span>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li id="home"><a href="index.php">Home</a></li>
					<!-- <li id="profile"><a href="profile.php">Profile</a></li> -->
					<!-- <li id="iir"><a href="individualInventory.php">Individual Inventory</a></li> -->
					<!-- <li id="survey"><a href="survey.php">Surveys</a></li> -->
					<li id="abouts"><a href="abouts.php">Abouts</a></li>
					<li id="log-in"><a href="#" data-target="#login" data-toggle="modal">Login</a></li>
					<li id="sign-up"><a href="#" data-target="#signup" data-toggle="modal">Sign up</a></li>
					<!-- <li id="logout"><a href="#" data-target="#login" data-toggle="modal">Logout</a></li> -->
					<!-- <li class="btn-trial"><a href="#footer">Free Trail</a></li> -->
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:0px; padding:7px; margin-top: 70px; border-bottom: solid 1px #f2dede;" >
		<image class="navbar-left" src="img/PUPLogo88x88.png"></image>
		<div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
			<h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
			<p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
			<h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNSELLING AND TESTING SERVICES</h4>
		</div>
	</div>
	<!--/ Navigation bar-->
	

	<div class="container">
		<div class="row">
			<div class="">
				<div  class="col-sm-12">
					<h3>Abouts</h3>
					<hr/>
					<div class="col-xs-9">
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="1-r">
								<div class="">
									<div class="heading pull-right">
										<h4>Office of Counseling and Psychological Services</h4>
										<p>Guidance is a vital part of education that provides assistance to students so that they would make intelligent decisions and adjustment in life. Its fundamental aim is to assist in bringing-out the best in a person – to help him responsibly adjust to situations as he progresses.<br><br>

											The role of the Guidance, Counseling and Testing Services (GCTS) is to mold the student through education with the ultimate goal of making him a better person. Through active student participation, it seeks to provide the student with the means to obtain self-direction and self-management while pursuing their chosen career in the University. It supports the Institution in its realization of the educational objectives through assisting, coordinating, and implementing relevant policies for student welfare and development.<br><br>

											To realize its objectives, Guidance Services are implemented within the school year to benefit the students and the entire academic community, as well. They are the following: counseling service, information service, individual inventory service, testing service, and research and evaluation service. Various activities are planned, organized, and implemented to help the student understand himself, improve his abilities, skills, and interests, and eventually become a well-adjusted individual. It continuously works towards its goal of maximizing students’ potentials to become self-directive.<br><br>

										Guided by the University’s Mission and Philosophy, the PUP GCTS is committed to enhance and uplift the moral, social, and spiritual development of every PUPian.</p><br><br>
									</div>
									<div class="fea-img pull-left">
										<i class="fa fa-odnoklassniki"></i>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="2-r">
								<div class="">
									<div class="heading pull-right">
										<h4>Vision</h4>
										<p>This dynamic Office with a staff of professionally trained and competent counselors boasts of a program designed to maximize the students’ potentials to become self-directive and productive citizens of society.
										</p><br><br>
										<h4>Mission</h4>
										<p>The Guidance and Counseling Office is committed to:
											<br>&#9679; Implement effective and viable guidance programs for the University;
											<br>&#9679; Maintain a close and harmonious coordination with all its units, faculty, and administration for the total development of their constituents;
											<br>&#9679; Pursue a continuing personal and professional development of its counselors and staff; and
											<br>&#9679; Establish linkages with other guidance institutions, non-government organizations and other universities with similar vision and mission.
										</p>
										<br>
										<br>
										<h4>Objectives</h4>
										<p>
											The Guidance and Counseling Office is composed of professional workers who apply modern techniques of education for the direct benefit of the students, faculty and administration in meeting their needs to maximize their development. The Office, however, does not limit its duties to this activity but is, likewise engaged in basic research designed to increase its own effectiveness in rendering services and carry out its objectives.
										</p>
										<h5>General Objectives</h5>
										Through the Guidance and Counseling Office, the University offers a broad spectrum of counseling and psychological services designed to assist students in mobilizing their creative energies and achieving more effective personal, social, emotional, spiritual, educational, and vocational development, The Office specially aims:
										<br>
										<br>&#9679; To help the students achieve the maximum level of their potentials thereby; enabling them to contribute their share to society;
										<br>&#9679; To assist the students in meeting and solving their own problems as they make correct interpretation of facts that lead to wise choices and needed adjustments;
										<br>&#9679; To enable the students to enjoy a well-balanced life in all its aspects - physical, mental, emotional and social.
										<br>
										<br>These objectives are realized in general through:
										<br>
										<br>&#9679; Securing information that the student need:
										<br>&#9679; Developing positive habits, techniques, attitudes, ideals, and interest;
										<br>&#9679; Offering wise counsel for students to make choices, adjustments and interpretations.
										<br><br>
									</div>
									<div class="fea-img pull-left">
										<i class="fa fa-eye"></i>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="3-r">
								<div class="">
									<div class="heading pull-right">
										<h4>History</h4>
										<p>
											The Guidance and Counseling Office does not claim to be as old as the university. It was initiated only in the early 50's when PUP was then the old PCC with a small enrollment. While the code identified its functions, the Office did not have any well-defined structure and program. Faculty members assigned to the Office of Student Affairs acted as counselors but lacked the training and skills necessary for the job. Much of the work they performed concerned problems on discipline, student failures and the issuance of re-admission slips for absences. Upon the declaration of Martial Law, PCC, a hotbed of student activism, was ordered closed by President Ferdinand E, Marcos. A series of seminars were conducted for the faculty and staff of the college to orient them on the thrust of the New Society and after three months, the school was allowed to re-open. The Guidance Office remained closed and the faculty counselors were put on full time teaching. Dr. Pablo T. Mateo was named Officer-in-Charge of PCC. The Guidance Office was revived with only two counselors, one of whom was assigned to the newly acquired Sta. Mesa, Campus. The head of the student affairs was concurrently designated as Chairman of the Department of Arts and Sciences. Reorganization started and the Guidance Office was placed under the Registrar’s Office.
											<br><br>
											In 1974, the individual problems of the students regarding guidance and counseling became the responsibility of their respective department heads. This was the result of the administration’s restructuring of the College organization set-up. When Isabelo T. Crisostomo was appointed Acting President in that same year, the Guidance and Counseling Office began to play a more significant role. The Office acted as adviser on student needs and problems when it was re-organized into a center directly under the Office of the President. It was when the Chief of Guidance became the Director of Guidance and Counseling that the Guidance Office gained its own identity and stood on its own ground. New counselors with the degree in psychology were designated to help the Director implement its program. This was the time that the College Entrance Test was constructed to screen an ever-growing number of freshmen applicants. New departments were created to offer relevant courses and new buildings sprouted in the Sta. Mesa Campus.
											<br><br>
											In 1977, Dr. Pablo T. Mateo replaced President Isabelo T. Crisostomo. This did not change the status of the Office, which continued its functions and extended its services to the services to the PUP Laboratory High School. It was during Dr. Mateo’s term that the PCC was converted into a University. The Guidance Office was once more placed under the Dean of Student Services.
											<br><br>
											In 1986, Dr. Nemesio E. Prudente was reinstated as PUP President after the EDSA I Revolution. His all-out support to the Guidance and Counseling Office in the University paved the way for the full existence and development of the Office. The University Guidance and Counseling Office at the Unyon ng Mag-aaral Building developed into a very significant part of the University supporting the President’s thrust to coordinate with other units and departments toward the total development of the students and the redirection of their outlook in life. The office started to organize the peer facilitators group which served as the extension arm of the guidance counselors in assisting the students in the solution of their problems.
											<br><br>
											Before Dr. Prudente’s term ended, the University Guidance and Counseling Office transferred to its new home at the South Wing’s 5th Floor. The Office also started to extend its testing services to other government agencies for the hiring of the rank-and-file and the promotion of supervisory applicants. These testing services were made possible under Memorandum of Agreements between the Bagong katipunan Foundation and government agencies such as the Department of Science and Technology (DOST), National Dairy Authority, Philippine Carabao under the Department of Agriculture and Philippine Retirement Authority. The latest addition to the list of government agencies is the Commission on Higher Education (2004).
											<br><br>
											Upon the retirement of Dr. Prudente in 1992, former Pres. Corazon C. Aquino appointed Dr. Jaime Gellor as Acting University President. Dr. Gellor appointed new sets of university officials including the chief of the Guidance and Counseling Office. However, the appointment of the Chief lasted for fiteen (15) days only due to the community protests against the appointment of Dr. Gellor.
											<br><br>
											Dr. Gellor was immediately succeeded by Dr. Zenaida A. Olonan. The then Chief of the Guidance and Counseling Office requested that the Office be transferred to the Ground Floor of North Wing facing the interfaith Chapel to reach out to more students and thus make the program available to them. The continuously promoted the different services available through Guidance Awareness Week, orientation programs, bulletin board displays and distribution of its office brochures.
											<br><br>
											The retirement of Dr. Olonan in 1998 led to the appointment of Dr. Ofelia M. Carague as the University President. It was during her term that the Guidance and Counseling Office was transferred to the 2nd Floor of the Student Development Center (Formerly Unyon ng Mag-aaral Building). The Guidance Counselors with degrees in Counseling Psychology or have earned units in guidance were hired. To enhance and update their knowledge in the field of guidance and counseling, the Guidance Counselors attend seminars, workshops, convocations and training programs sponsored by different professional organizations. As part of its student services, the Guidance and Counseling also conducts and co-sponsors seminars, workshops and training programs.
											<br><br>
											As the University celebrated its centenary, Acting President Samuel M. Salvador’s administration gave more attention and ample support to most of the projects of the Office. Likewise, under the newly installed Officer-In-Charge of PUP, Dr. Dante G. Guevarra, the Guidance and Counseling Office continues to serve not only the students, but the PUP community as a whole. The Office offers the students effective guidance and counseling by providing them a channel for expressing their difficulties and assisting them as they look for solutions to their problems. In this manner, students now find PUP a very conductive place for growth and development. It was November 2, 2006 when Dr. Dante S. Guevarra became Acting President. The Guidance and Counseling Office submitted and proposed to add the guidance fee on the miscellaneous. The said guidance fee was approved last April 19, 2007 Board Meeting held at Sulo Hotel Quezon City. This will signal the full implementation of the different guidance programs.
										</p>
										<br><br>
									</div>
									<div class="fea-img pull-left">
										<i class="fa fa-history"></i>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="4-r">
								<div class="">
									<div class="heading pull-right">
										<h4>Services</h4>
										<p>
											<h5>Counseling Service</h5>
											This is the heart of Guidance. It aims to assist the student to make a realistic appraisal of his interest, abilities and aptitudes as gathered from preliminary interviews and to arrive at an educational adjustment or solution to his problems.
											<br>
											Effective counseling makes a student adjust better in his school, home and community; thus he develops the maturity to view life objectively and gain a better insight into his own conduct so that he may solve his problem.
											<br><br>
											<h5>Information Service</h5>
											Orientation and information are given to help the students get acquainted with their new school environment, the school staff, the demands of college life, and the nature and requirements of the course. Through the dissemination of pertinent information, particularly cumulative sheets as bases for counseling, assessment and research, they may broaden their learning experiences.
											<br><br>
											<h5>Individual Inventory Service</h5>
											Collecting, recording and utilizing information about the students are done through the accomplishment of the Personal Data Sheet (PDS) or the Cumulative Record, results of psychological tests and previous interviews. The data gathered can be used as basis for counseling.
											<br><br>
											<h5>Peer-Facilitators</h5>
											This program is designed to reach out to as many students as possible. With the sound principle that students relate best with their peers, the Guidance Office utilizes students in the task of redirecting others. A number of qualified students are trained to become peer facilitators. They assist the guidance personnel in implementing the different guidance programs. The peer facilitators help facilitate growth groups or group guidance sessions.
											<br><br>
											<h5>Research and Evaluation Service</h5>
											This part of the program helps the unit in identifying the services or activities that require attention to be strengthened or to be offered. Likewise, it facilitates evaluation of the unit progress and services.
											<br><br>
											<h5>Testing Service</h5>
											Psychological tests are given to students or classes needing them. Tests help to measure a sample of students’ interest, mental ability, aptitudes, academic achievement, personality and adjustment. Tests results are interpreted to students for purposes of greater self-awareness, self-understanding and career planning.
											<br><br>
											<h5>Follow-Up Service</h5>
											The progress of the underachievers and students with failing grades are followed up in terms of their low academic performance and poor study skills. Achievers or scholars are also followed up in terms of their academic progress and personal adjustment. This service hopes to help underachievers cope with strong pressures, temporary disappointments or frustrations. Serious cases of mental and physical problems are referred to the family.
											<br><br>
											<h5>Other Services</h5>
											Seminars, workshops, lectures, training programs that will help students, faculty and administration are programmed. These services are designed for students with or without problem so that they can gain greater understanding of themselves and the world around them. Such will result in greater self-improvement and self-realization.
										</p><br><br>
									</div>
									<div class="fea-img pull-left">
										<i class="fa fa-handshake-o"></i>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="5-r">
								<div class="">
									<div class="heading pull-right">
										<h4>Guidance, Counselling, and Testing Services</h4>
										<p>Guidance is a vital part of education that provides assistance to students so that they would make intelligent decisions and adjustment in life. Its fundamental aim is to assist in bringing-out the best in a person – to help him responsibly adjust to situations as he progresses.<br><br>

											The role of the Guidance, Counseling and Testing Services (GCTS) is to mold the student through education with the ultimate goal of making him a better person. Through active student participation, it seeks to provide the student with the means to obtain self-direction and self-management while pursuing their chosen career in the University. It supports the Institution in its realization of the educational objectives through assisting, coordinating, and implementing relevant policies for student welfare and development.<br><br>

											To realize its objectives, Guidance Services are implemented within the school year to benefit the students and the entire academic community, as well. They are the following: counseling service, information service, individual inventory service, testing service, and research and evaluation service. Various activities are planned, organized, and implemented to help the student understand himself, improve his abilities, skills, and interests, and eventually become a well-adjusted individual. It continuously works towards its goal of maximizing students’ potentials to become self-directive.<br><br>

										Guided by the University’s Mission and Philosophy, the PUP GCTS is committed to enhance and uplift the moral, social, and spiritual development of every PUPian.</p><br><br>
									</div>
									<div class="fea-img pull-left">
										<i class="fa fa-building"></i>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="6-r">
								<div class="">
									<div class="heading pull-right">
										<table>
											<tr>
												<td>
													<img alt="Barbara P. Camacho" src="img/camachobp.jpg" style="width: 150px; height: 200px">
												</td>
												<td>
													<p>
														<strong>Barbara P. 
														Camacho</strong><br>
														Chief<br>Associate 
														Professor II<br>Master 
														in Psychology major in 
														Counseling Psychology 
														PUP<br>Specialization: 
														Psychology/Counseling
													</p>
												</td>
											</tr>
										</table>
										<h5>Guidance Counselors</h5>
										<p>
											<strong>Yolanda F. Rabe</strong><br>
											Faculty Assistant, Guidance 
											Counselor<br>Master of Arts in 
											Education major in Guidance and 
											Counseling PUP Lyceum 
											Specialization: 
											Psychology/Counseling
										</p>
										<p>
											<strong>Gorgonia B. Adorable</strong><br>
											Guidance Counselor<br>Master of 
											Arts in Psychology Centro 
											Escolar University<br>
											Specialization: Counseling
										</p>
										<p>
											<strong>Flordeliza E. 
											Alvendia</strong><br>
											Administrative Officer II, 
											assigned as Guidance Counselor<br>
											Master of Arts in Psychology PUP<br>
											Specialization: Psychology, 
											Counseling
										</p>
										<p>
											<strong>Cielito B. Buhain<br>
											</strong>Guidance Counselor<br>
											Master of Arts in Psychology PUP<br>
											Specialization: Psychology, 
											Counseling
										</p>
										<p>
											<strong>Jimmy P. Dollaga<br>
											</strong>Administrative Officer 
											II, designated as Guidance 
											Counselor<br>Master of Arts in 
											Psychology (18 units) PUP<br>
											Specialization : Psychology, 
											Counseling
										</p>
										<p>
											<strong>Rose Helen T. Merza</strong><br>
											Guidance Counselor, 
											Psychometrician<br>Master of 
											Arts in Guidance Manuel L. 
											Quezon University<br>
											Specialization: Counseling
										</p>
										<h5>Support Staff</h5>
										<p>
											<strong>Ma. Suraida R. Dela 
											Cruz</strong><br>Clerk</p>
											<p><strong>Leonila A. Dionisio</strong><br>
												Clerk
											</p>
										</p>
										<br><br>
									</div> 		
									<div class="fea-img pull-left">
										<i class="fa fa-users"></i>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="7-r">
								<div class="">
									<div class="heading pull-right">
										<h4>Contact Information</h4>
										<p><h5>Email</h5>
											guidance@pup.edu.ph
											<br><br>
											<h5>Postal Mail</h5>
											Guidance, Counseling and Testing Services
											2/F Charlie del Rosario Student Development Center
											PUP A. Mabini Campus, Anonas St., Sta. Mesa
											Manila, Philippines 1016
											<br><br>
											<h5>Telephone</h5>
											(63 2) 335-1PUP (335-1787) or 335-1777 local 321
										</p><br><br>
									</div>
									<div class="fea-img pull-left">
										<i class="fa fa-hashtag"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-3"> <!-- required for floating -->
						<!-- Nav tabs -->
						<ul class="nav nav-tabs tabs-right">
							<li class="active"><a href="#1-r" data-toggle="tab">Office of Counseling and Psychological Services</a></li>
							<li><a href="#2-r" data-toggle="tab">Vision, Mission and Objectives</a></li>
							<li><a href="#3-r" data-toggle="tab">History</a></li>
							<li><a href="#4-r" data-toggle="tab">Services</a></li>
							<li><a href="#5-r" data-toggle="tab">Facilities</a></li>
							<li><a href="#6-r" data-toggle="tab">Officials and staffs</a></li>
							<li><a href="#7-r" data-toggle="tab">Contact Information</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- Login Modal -->
	<?php
	include("login.php");
	?>
	<!-- / Login Modal -->

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
	<script type="text/javascript">
		jQuery('.nav-link').click( function(e) {
			jQuery('.collapse').collapse('hide');
		});
	</script>
	<script type="text/javascript">
		document.getElementById("txtbxStudentAccountCPassword").onkeyup = function(){
			checkPassword();
		};
		document.getElementById("txtbxStudentAccountPassword").onkeyup = function(){
			checkPassword();
		};
		function checkPassword(){
			var password = document.getElementById("txtbxStudentAccountPassword").value;
			var cpassword = document.getElementById("txtbxStudentAccountCPassword").value;
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
	</script>

</body>

</html>
