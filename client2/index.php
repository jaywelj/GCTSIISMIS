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

		$queryAddStudentAccount = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentPassword`, `aboutStudent`, `studentDisplayPic`) VALUES ('$VarcharStudentAccountNumber', '$VarcharStudentAccountPassword', 'Not Interested', NULL)";

		$queryAddPersonalInfo = "INSERT INTO `tbl_personalinfo` (`infoID`, `lastName`, `firstName`, `middleName`, `sex`, `sexuality`, `age`, `year`, `section`, `civilStatus`, `birthDate`, `height`, `weight`, `complexion`, `birthPlace`, `cityHouseNumber`, `cityName`, `cityBarangay`, `provinceHouseNumber`, `provinceProvincial`, `provinceName`, `provinceBarangay`, `telNumber`, `mobileNumber`, `email`, `hsGWA`, `religion`, `employerName`, `employerAddress`, `contactPersonName`, `cpAddress`, `cpRelationship`, `cpContactNumber`, `collegeCode`, `courseCode`, `studentNumber`) VALUES (NULL, '$VarcharStudentAccountLastName', '$VarcharStudentAccountFirstName', '$VarcharStudentAccountMiddleName', '', '', '0', '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', NULL, '', '', '$VarcharStudentAccountCollege', '$VarcharStudentAccountCourse', '$VarcharStudentAccountNumber')";

		$queryAddEducationalBackground = "INSERT INTO `tbl_educationalbackground` (`educationID`, `prepSchoolName`, `prepSchoolAddress`, `prepType`, `prepYearAttended`, `prepAwards`, `prepImage`, `elemSchoolName`, `elemSchoolAddress`, `elemType`, `elemYearAttended`, `elemAwards`, `elemImage`, `hsSchoolName`, `hsSchoolAddress`, `hsType`, `hsYearAttended`, `hsAwards`, `hsImage`, `vocSchoolName`, `vocSchoolAddress`, `vocType`, `vocYearAttended`, `vocAwards`, `vocImage`, `collegeSchoolName`, `collegeSchoolAddress`, `collegeType`, `collegeYearAttended`, `collegeAwards`, `collegeImage`, `natureOfSchooling`, `interruptedWhy`, `studentNumber`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '$VarcharStudentAccountNumber')
		";

		$queryAddFamilyBackground = "INSERT INTO `tbl_familybackground` (`familyID`, `fatherName`, `fatherAge`, `fatherStatus`, `fatherEducation`, `fatherOccupationType`, `fatherOccupation`, `fatherEmployerName`, `fatherEmployerAdd`, `motherName`, `motherAge`, `motherStatus`, `motherEducation`, `motherOccupationType`, `motherOccupation`, `motherEmployerName`, `motherEmployerAdd`, `guardianName`, `guardianAge`, `guardianRelation`, `guardianEducation`, `guardianOccupationType`, `guardianOccupation`, `guardianEmployerName`, `guardianEmployerAdd`, `parentsMaritalRelation`, `noOfChildren`, `noOfBrother`, `noOfSister`, `broSisEmployed`, `ordinalPosition`, `supportedByYourSibling`, `schoolFinancer`, `weeklyAllowance`, `totalMonthlyIncome`, `studyPlace`, `roomSharing`, `natureOfResidence`, `studentNumber`) VALUES (NULL, '', NULL, '', '', '', '', NULL, NULL, '', NULL, '', '', '', '', NULL, NULL, '', NULL, '', '', '', '', NULL, NULL, '', '0', NULL, NULL, '', '', '', '', '', '', '', '', '', '$VarcharStudentAccountNumber')";

		$queryAddHealth = "INSERT INTO `tbl_healthinfo` (`healthID`, `visionProblem`, `hearingProblem`, `speechProblem`, `generalHealth`, `psychiatristConsult`, `psychiatristWhen`, `psychiatristReason`, `psychologistConsult`, `psychologistWhen`, `psychologistReason`, `counselorConsult`, `counselorWhen`, `counselorReason`, `studentNumber`) VALUES (NULL, '', '', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '$VarcharStudentAccountNumber')";

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

if(isset($_POST['btnEmailSend'])) 
{

	include_once("connectionString.php");

	$VarcharSenderName = mysqli_real_escape_string($connect, $_POST['txtbxSenderName']);
	$VarcharSenderEmail = mysqli_real_escape_string($connect, $_POST['txtbxSenderEmail']);
	$VarcharSenderSubject = mysqli_real_escape_string($connect, $_POST['dropdownSenderSubject']);
	$VarcharSenderMessage = mysqli_real_escape_string($connect, $_POST['txtbxSenderMessage']);

	if(empty($VarcharSenderName) || empty($VarcharSenderEmail) || empty($VarcharSenderMessage)) 
	{

		if(empty($VarcharSenderName))
		{
			$message = "Enter Your Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(empty($VarcharSenderEmail)) 
		{
			$message = "Enter Your Email";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(empty($VarcharSenderMessage)) 
		{
			$message = "Message field empty";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

	}
	$queryInsertingMessage = "INSERT INTO `tbl_message` (`messageID`, `senderName`, `senderEmail`, `subCategoryID`, `messageContent`, `messageStatus`, `messageDateSent`,`studentNumber`) VALUES (NULL, '$VarcharSenderName', '$VarcharSenderEmail', '$VarcharSenderSubject', '$VarcharSenderMessage', 'Unread', CURRENT_TIMESTAMP,NULL)";

	if(mysqli_query($connect, $queryInsertingMessage))
	{   
		$message = "Successfully Added Message";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
		$message = "Message Not Sent Due To Wrong Information";
		echo "<script type='text/javascript'>alert('$message');</script>";

	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/GCTS LOGO1.png">
	<title>Home | OCPS</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
	<div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:5px; padding:7px; margin-top: 70px;" >
		<image class="navbar-left" src="img/PUPLogo88x88.png"></image>
		<div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
			<h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
			<p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
			<h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNSELLING AND TESTING SERVICES</h4>
		</div>
	</div>
	<!--/ Navigation bar-->


	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/bg1.jpg" alt="" width="100%" style="height:650px; filter: brightness(40%);">
				<div class="carousel-caption">
					<div class="row">
						<div class="banner-text text-center">
							<div class="text-border">
								<h2 class="text-dec">GCTS</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Our Vision</p>
								<p class="small-text">This dynamic Office with a staff of professionally trained and competent counselors boasts <br> of a program designed to maximize the students’ potentials to become self-directive and productive citizens of society.</p>
								<a href="#footer" class="btn get-quote">GET A QUOTE</a>
							</div><br><br><br><br><br>
							<a href="#feature" class="mouse-hover">
								<div class="mouse"></div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="img/bg2.jpg" alt="" width="100%" style="height:650px; filter: brightness(40%);">
				<div class="carousel-caption">
					<div class="row">
						<div class="banner-text text-center">
							<div class="text-border">
								<h2 class="text-dec">IIR</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Fill-up your individual inventory record now!</p>
								<!-- <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p> -->
								<a href="#footer" class="btn get-quote">GET A QUOTE</a>
							</div><br><br><br><br><br>
							<a href="#feature" class="mouse-hover">
								<div class="mouse"></div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="img/bg3.jpg" alt="" width="100%" style="height:650px; filter: brightness(40%);">
				<div class="carousel-caption">
					<div class="row">
						<div class="banner-text text-center">
							<div class="text-border">
								<h2 class="text-dec">Need Help and Guidance?</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Learning Today . . . Leading Tomorrow.</p>
								<p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p>
								<a href="#footer" class="btn get-quote">GET A QUOTE</a>
							</div><br><br><br><br><br>
							<a href="#feature" class="mouse-hover">
								<div class="mouse"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- / Carousel -->
	<!--Feature-->
	<section id="feature" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Our Services</h2>
					<p>Here are some of the service we provide</p>
					<hr class="bottom-line">
				</div>
				<div class="feature-info">
					<div class="fea">
						<div class="col-md-4">
							<div class="heading pull-right">
								<h4>Counselling</h4>
								<p>This is the heart of Guidance. It aims to assist the student to make a realistic appraisal of his interest, abilities and aptitudes as gathered from preliminary interviews and to arrive at an educational adjustment or solution to his problems.</p>
							</div>
							<div class="fea-img pull-left">
								<i class="fa fa-comment"> </i>
							</div>
						</div>
					</div>
					<div class="fea">
						<div class="col-md-4">
							<div class="heading pull-right">
								<h4>Individual Inventory</h4>
								<p>Orientation and information are given to help the students get acquainted with their new school environment, the school staff, the demands of college life, and the nature and requirements of the course. </p>
							</div>
							<div class="fea-img pull-left">
								<i class="fa fa-list"></i>
							</div>
						</div>
					</div>
					<div class="fea">
						<div class="col-md-4">
							<div class="heading pull-right">
								<h4>Research and Evaluation Service</h4>
								<p>This part of the program helps the unit in identifying the services or activities that require attention to be strengthened or to be offered. Likewise, it facilitates evaluation of the unit progress and services.</p>
							</div>
							<div class="fea-img pull-left">
								<i class="fa fa-search"></i>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/ feature-->
	
	<!--Cta-->
	<!-- <section id="cta-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">Subscribe Now</h2>
					<p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
					<div class="cta-2-form text-center">
						<form action="#" method="post" id="workshop-newsletter-form">
							<input name="" placeholder="Enter Your Email Address" type="email">
							<input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--/ Cta-->
	<!--work-shop-->
	<!-- <section id="work-shop" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Upcoming Workshop</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
					<hr class="bottom-line">
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box text-center">
						<div class="icon-box">
							<i class="fa fa-html5 color-green"></i>
						</div>
						<div class="icon-text">
							<h4 class="ser-text">Mentor HTML5 Workshop</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box text-center">
						<div class="icon-box">
							<i class="fa fa-css3 color-green"></i>
						</div>
						<div class="icon-text">
							<h4 class="ser-text">Mentor CSS3 Workshop</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box text-center">
						<div class="icon-box">
							<i class="fa fa-joomla color-green"></i>
						</div>
						<div class="icon-text">
							<h4 class="ser-text">Mentor Joomla Workshop</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--/ work-shop-->
	<!--Faculity member-->
	<section id="faculity-member" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Meet Our Faculty Member</h2>
					<p>Here Is The Administrators Of OCPS</p>
					<hr class="bottom-line">
				</div>
				<?php
				include_once("connectionString.php");
				$queryGettingAdmin = "SELECT * FROM `tbl_adminaccount` ORDER BY rand()  LIMIT 6";
				$resultGettingAdmin = mysqli_query($connect, $queryGettingAdmin);
				while ($row = mysqli_fetch_array($resultGettingAdmin)) 
				{
					$adminFirstName = $row['adminFirstName'];
					$adminMiddleName = $row['adminMiddleName'];
					$adminLastName = $row['adminLastName'];
					$adminEmail = $row['adminEmail'];
					$adminGender = $row['adminGender'];

					if($adminGender == "M")
					{
						$adminGender = "Male";
					}
					else if($adminGender == "F")
					{
						$adminGender = "Female";
					}

					$adminContactNo = $row['adminContactNo'];
					$adminAddress = $row['adminAddress'];


					?>
					<?php

					$VarcharStudentProfileImage = $row['adminImage'];
					if(empty($VarcharStudentProfileImage))
					{
						echo ' 
						<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="pm-staff-profile-container">
						<div class="pm-staff-profile-image-wrapper text-center">
						<div class="">
						<img class="img-circle" src="img/default-user.png" height="200" width="200" style="object-fit:cover;" />
						</div>
						</div>
						<div class="pm-staff-profile-details text-center">
						<p class="pm-staff-profile-name">'.$adminFirstName.' '.$adminMiddleName.' '.$adminLastName.'</p>
						<p class="pm-staff-profile-title">'.$adminEmail.'</p>
						<p class="pm-staff-profile-bio">'.$adminGender.' '.$adminContactNo.' '.$adminAddress.'</p>
						</div>
						</div>
						</div>';
					}
					else{
						echo ' 
						<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="pm-staff-profile-container">
						<div class="pm-staff-profile-image-wrapper text-center">
						<div class="">
						<img class="img-circle" src="data:image/jpeg;base64,'.base64_encode($row['adminImage'] ).'" height="200" width="200" style="object-fit:cover;" />
						</div>
						</div>
						<div class="pm-staff-profile-details text-center">
						<p class="pm-staff-profile-name">'.$adminFirstName.' '.$adminMiddleName.' '.$adminLastName.'</p>
						<p class="pm-staff-profile-title">'.$adminEmail.'</p>
						<p class="pm-staff-profile-bio">'.$adminGender.' '.$adminContactNo.' '.$adminAddress.'</p>
						</div>
						</div>
						</div>';
					}


				}
				?>
<!-- 					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="pm-staff-profile-container">
							<div class="pm-staff-profile-image-wrapper text-center">
								<div class="pm-staff-profile-image">
									<img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
								</div>
							</div>
							<div class="pm-staff-profile-details text-center">
								<p class="pm-staff-profile-name">Bryan Johnson</p>
								<p class="pm-staff-profile-title">Lead Software Engineer</p>

								<p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!--/ Faculity member-->
		<!--Testimonial
		<section id="testimonial" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="header-section text-center">
						<h2 class="white">See What Our Customer Are Saying?</h2>
						<p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
						<hr class="bottom-line bg-white">
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="text-comment">
							<p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
							<p class="text-name">Abraham Doe - Creative Dırector</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="text-comment">
							<p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
							<p class="text-name">Abraham Doe - Creative Dırector</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		/ Testimonial-->
		<!--Courses-->
		<section id="courses" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="header-section text-center">
						<h2>Programs Offered</h2>
						<p></p>
						<hr class="bottom-line">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php 
					include("connectionString.php");  
					$queryGettingProgram = "SELECT * FROM tbl_recommendedprogram ORDER BY `tbl_recommendedprogram`.`programImage` DESC LIMIT 6";
					$resultGettingProgram = mysqli_query($connect, $queryGettingProgram); 
					while($row = mysqli_fetch_array($resultGettingProgram))  
					{  
						$programID = $row['programID'];
						$programName = $row['programName'];
						$programDescription = $row['programDescription'];
						$programImage = $row['programImage'];
						?>
						<?php
						if (empty($programImage)) {
							
							echo '
							<div class="col-md-4 col-sm-6 padleft-right" style="overflow: hidden;height: 267px;">
							<figure class="imghvr-fold-up">
							<img src="img/noimgavailable.jpg" class="img-responsive">
							<figcaption>
							<h3>'.$programName.'</h3>
							<p>'.$programDescription.'</p>
							</figcaption>
							<a target="_blank" href="http://www.google.com/search?q=Google+tutorial+create+link"></a>
							</figure>
							</div>';
						}
						else
						{
							echo '
							<div class="col-md-4 col-sm-6 padleft-right" style="overflow: hidden;height: 267px;" >
							<figure class="imghvr-fold-up">
							<img src="data:image/jpeg;base64,'.base64_encode($row['programImage'] ).'" class="img-responsive">
							<figcaption>
							<h3>'.$programName.'</h3>
							<p>'.$programDescription.'</p>
							</figcaption>
							<a target="_blank" href="http://www.google.com/search?q=Google+tutorial+create+link"></a>
							</figure>
							</div>';
						}
						?>
						<?php 
					}
					?>
				</div>
			</div>
		</section>
		<!--/ Courses-->
		<!--Contact-->
		<section id="contact" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="header-section text-center">
						<h2>Message Us</h2>
						<p>If you have any concerns, message us! It could be a really big help for someone who needs help :) <br> </p>
						<hr class="bottom-line">
					</div>
					<div id="sendmessage">Your message has been sent. Thank you!</div>
					<div id="errormessage"></div>
					<form method="post">
						<div class="col-md-6 col-sm-6 col-xs-12 left">
							<div class="form-group">
								<input type="text" name="txtbxSenderName" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="txtbxSenderEmail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
						<div class="form-group"><!-- 
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" /> -->
							<?php 
							include("connectionString.php");
							$queryIncidentSubCategory = "SELECT * FROM tbl_incidentsubcategory";
							$resultIncidentSubCategory = mysqli_query($connect, $queryIncidentSubCategory);
							?> 
							<select name="dropdownSenderSubject" id="dropdownSenderSubject" class="form-control">
								<option value="NULL" selected disabled="">Subject</option>
								<?php while($row = mysqli_fetch_array($resultIncidentSubCategory)):;?>
									<option value="<?php echo $row['subCategoryID'];?>"><?php echo $row['subCategoryName'];?></option>
								<?php endwhile;?>
							</select>
							<div class="validation"></div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 right">
						<div class="form-group">
							<textarea class="form-control" name="txtbxSenderMessage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
							<div class="validation"></div>
						</div>
					</div>

					<div class="col-xs-12">
						<!-- Button --><!-- 
						<button type="submit" id="btnEmailSend" name="btnEmailSend" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button> -->
						<input type="submit" name="btnEmailSend" id="btnEmailSend" class="light-form-button oswald light">
					</div>
				</form>

			</div>
		</div>
	</section>
	<!--/ Contact-->
	<!-- Login Modal -->
	<?php
	include("login.php");
	?>
	<!-- / Login Modal -->
	
	<!--Footer-->
	<footer id="footer" class="footer" style="padding:20px; margin-top:50px; ">
		<div class="container text-center">


			<!-- End newsletter-form -->
			<ul class="social-links" style="padding:0;margin-top:0;">
				<li id="footerHome"><a href="home.php" style="font-size: 15px ">Home</a></li>
				<!-- <li id="footerProfile"><a href="profile.php" style="font-size: 15px ">Profile</a></li> -->
				<!-- <li id="footerSurvey"><a href="surveys.php" style="font-size: 15px ">Surveys</a></li> -->
				<li id="footerAbouts"><a href="abouts.php" style="font-size: 15px ">About Us</a></li>
			</ul>
			©2018 GCTS All rights reserved
		</div>
	</footer>
	<!--/ Footer-->

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
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
