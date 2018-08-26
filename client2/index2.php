<?php
include("session.php");
include("iircheck.php"); 
include("connectionString.php");
$id= $_SESSION['sessionStudentAccountNumber'];
$query = "SELECT * FROM tbl_personalinfo WHERE studentNumber = '$id'";
$queryArray = mysqli_query($connect,$query);
while ($res = mysqli_fetch_array($queryArray)) {
	$name = $res['firstName'];
	$email = $res['email'];
	$lastName = $res['lastName'];
	$middleName = $res['middleName'];
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
	$queryInsertingMessage = "INSERT INTO `tbl_message` (`messageID`, `senderName`, `senderEmail`, `subCategoryID`, `messageContent`, `messageStatus`,`messageDateSent`, `studentNumber`) VALUES (NULL, '$VarcharSenderName', '$VarcharSenderEmail', '$VarcharSenderSubject', '$VarcharSenderMessage', 'Unread',CURRENT_TIMESTAMP,'$id')";

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
	<?php
	include("navbar.php");
	?>
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
								<h2 class="text-dec">OCPS</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Our Vision</p>
								<p class="small-text">This dynamic Office with a staff of professionally trained and competent counselors boasts <br> of a program designed to maximize the students’ potentials to become self-directive and productive citizens of society.</p>
								<a href="abouts2.php" class="btn get-quote">About Us</a>
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
								<h2 class="text-dec">Problem Survey</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Participate to our Problem Survey</p>
								<!-- <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p> -->
								<a href="problemSurvey.php" class="btn get-quote">Participate</a>
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
								<p class="big-text">Ask For Help</p>
								<p class="small-text"></p>
								<a href="#contact" class="btn get-quote">Message Us!</a>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
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
					$adminDescription = $row['adminDescription'];

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
						<p class="pm-staff-profile-bio">'.$adminDescription.'</p>
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
						<p class="pm-staff-profile-bio">'.$adminDescription.'</p>
						</div>
						</div>
						</div>';
					}


				}
				?>
			</div>
		</div>
	</section>
	<!--/ Faculity member-->
	
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

				$queryCheckingIfStudentNumberHasSignificantNotes = "SELECT tbl_personalinfo.studentNumber AS studentNumberMessagedButWithoutNote FROM tbl_personalinfo LEFT JOIN tbl_significantnotes ON tbl_significantnotes.studentNumber = tbl_personalinfo.studentNumber WHERE `tbl_significantnotes`.`studentNumber` IS NULL AND tbl_personalinfo.studentNumber = '$id'";
				$resultCheckingIfStudentNumberHasSignificantNotes = mysqli_query($connect, $queryCheckingIfStudentNumberHasSignificantNotes);

				if(mysqli_num_rows($resultCheckingIfStudentNumberHasSignificantNotes) == 0) {
					$queryGettingProgram = "SELECT * FROM tbl_recommendedprogram ORDER BY programImage DESC LIMIT 9";
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
							<a target="_blank" href="http://www.google.com/search?q='.$programDescription.'"></a>
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
							<a target="_blank" href="http://www.google.com/search?q='.$programDescription.'"></a>
							</figure>
							</div>';
						}
						?>
						<?php 
					}
				}
				else
				{
					$queryGettingSignificantNote = "SELECT studentNumber,tbl_significantnotes.subCategoryID,tbl_incidentsubcategory.subCategoryName, count(tbl_significantnotes.subCategoryID) AS subCategoryIDCount FROM tbl_significantnotes INNER JOIN tbl_incidentsubcategory ON tbl_significantnotes.subCategoryID = tbl_incidentsubcategory.subCategoryID WHERE studentNumber = '$id' ORDER BY subCategoryIDCount";
					$resultGettingSignificantNote = mysqli_query($connect, $queryGettingSignificantNote);
					$howManyRecommendedProgramsAvailable = 0;
					while ($row = mysqli_fetch_array($resultGettingSignificantNote)) {
						$subCategoryID = $row['subCategoryID'];
						$subCategoryName = $row['subCategoryName'];
						$subCategoryNameArray[] = $row['subCategoryName'];

						$queryGettingRecommendedPrograms = "SELECT * FROM `tbl_recommendedprogram` INNER JOIN tbl_programcategory ON tbl_programcategory.programName = tbl_recommendedprogram.programName WHERE subCategoryName = '$subCategoryName'";
						$resultGettingRecommendedPrograms = mysqli_query($connect, $queryGettingRecommendedPrograms);
						$howManyRecommendedProgramsAvailable += mysqli_num_rows($resultGettingRecommendedPrograms);
						while($row = mysqli_fetch_array($resultGettingRecommendedPrograms))  
						{  
							$programID = $row['programID'];
							$programName = $row['programName'];
							$programDescription = $row['programDescription'];
							$programImage = $row['programImage'];
							if (empty($programImage)) {

								echo '
								<div class="col-md-4 col-sm-6 padleft-right" style="overflow: hidden;height: 267px;">
								<figure class="imghvr-fold-up">
								<img src="img/noimgavailable.jpg" class="img-responsive">
								<figcaption>
								<h3>'.$programName.'</h3>
								<p>'.$programDescription.'</p>
								</figcaption>
								<a target="_blank" href="http://www.google.com/search?q='.$programDescription.'"></a>
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
								<a target="_blank" href="http://www.google.com/search?q='.$programDescription.'"></a>
								</figure>
								</div>';
							}
						}
					}
					$fillInNumberGetting = 6 - $howManyRecommendedProgramsAvailable;
					$queryGettingNotInSuggestion = "SELECT * FROM tbl_recommendedprogram WHERE programName NOT IN ( '" . implode( "', '" , $subCategoryNameArray ) . "' )ORDER BY programImage ASC LIMIT $fillInNumberGetting";
					$resultGettingNotInSuggestion = mysqli_query($connect, $queryGettingNotInSuggestion);
					while($row = mysqli_fetch_array($resultGettingNotInSuggestion))  
					{  
						$programID = $row['programID'];
						$programName = $row['programName'];
						$programDescription = $row['programDescription'];
						$programImage = $row['programImage'];
						if (empty($programImage)) {

							echo '
							<div class="col-md-4 col-sm-6 padleft-right" style="overflow: hidden;height: 267px;">
							<figure class="imghvr-fold-up">
							<img src="img/noimgavailable.jpg" class="img-responsive">
							<figcaption>
							<h3>'.$programName.'</h3>
							<p>'.$programDescription.'</p>
							</figcaption>
							<a target="_blank" href="http://www.google.com/search?q='.$programDescription.'"></a>
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
							<a target="_blank" href="http://www.google.com/search?q='.$programDescription.'"></a>
							</figure>
							</div>';
						}
						
					}



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
							<input type="text" name="txtbxSenderName" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" maxlength="20" data-msg="Please enter at least 4 chars" value="<?php echo $name ?> <?php echo $lastName ?>" />
							<div class="validation"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="txtbxSenderEmail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" value="<?php echo $email ?>" />
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

