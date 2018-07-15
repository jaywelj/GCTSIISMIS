<!DOCTYPE html>
<?php
include("connectionString.php");
$varcharStudentNumber = $_GET["id"];
$queryStudentAccount = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$varcharStudentNumber'";
$arrayStudentAccount = mysqli_query($connect, $queryStudentAccount);
while($res = mysqli_fetch_array($arrayStudentAccount))
{
	$varcharFirstName = $res['studentFirstName'];
	$varcharMiddleName = $res['studentMiddleName'];
	$varcharLastName = $res['studentLastName'];
}
$queryPersonalInfo = "SELECT * FROM tbl_personalinfo WHERE studentNumber='$varcharStudentNumber'";
$arrayPersonalInfo = mysqli_query($connect, $queryPersonalInfo);
while($res = mysqli_fetch_array($arrayPersonalInfo))
{
	$vacharYear = $res['year'];
	$vacharSection = $res['section'];
	$vacharCourse = $res['courseCode'];
}
?>
<?php
include 'IndividualInventoryRecordFormSubmit.php';
if(isset($_POST['btnFinish']))
{
    //Get Personal Information
	$varcharFirstName = $_POST['txtbxFirstName'];
	$varcharMiddleName = $_POST['txtbxMiddleName'];
	$varcharLastName = $_POST['txtbxLastName'];
    $varcharGender = $_POST['radioGender'];
	$varcharSexuality = $_POST['dropdownSexuality'];
	if($varcharSexuality == 'Others')
	{
		$varcharSexuality = $_POST['txtbxOthersSexuality'];
	}
	$intAge = $_POST['txtbxAge'];
	$dateDateOfBirth = $_POST['dateDateOfBirth'];
	$varcharPlaceOfBirth = $_POST['txtbxPlaceOfBirth'];
	$varcharCivilStatus = $_POST['dropdownCivilStatus'];
	if($varcharCivilStatus == 'Others')
	{
		$varcharCivilStatus = $_POST['txtbxOthersCivilStatus'];
	}
	$varcharReligion = $_POST['dropdownReligion'];
	if($varcharReligion == 'Others')
	{
		$varcharReligion = $txtbxOthersReligion;
	}
	$doubleHeight = $_POST['txtbxHeight'];
	$doubleWeight = $_POST['txtbxWeight'];
	$varcharComplexion = $_POST['dropdownComplexion'];
	if($varcharComplexion == 'Others')
	{
		$varcharComplexion == $_POST['txtbxOthersComplexion'];
	}
	$varcharYear = $_POST['txtbxYear'];
	$varcharSection = $_POST['txtbxSection'];
	$varcharCityAddress = $_POST['dropdownCityAddress'];
	$varcharProvincialAddress = $_POST['dropdownProvincialAddress'];
	$vacharEmailAddress = $_POST['txtbxEmailAddress'];
	//End of Personal Info
	//Educational Background
	$varcahrPreELemSchoolGraduated=$_POST['txtbxPreElemSchoolGraduated'];
	$varcahrPreELemSchoolAddress=$_POST['txtbxPreElemSchoolAddress'];

	$varcahrPreElemYearAttended=$_POST['txtbxPreElemYearAttended'];
	$varcharPreElemHonors=$_POST['txtbxPreElemHonors'];
	$varcharElementarySchoolGraduated=$_POST['txtbxElementarySchoolGraduated'];
	$varcharElementarySchoolAddress=$_POST['txtbxElementarySchoolAddress'];
	$varcahrElementaryYearAttended=$_POST['txtbxElementaryYearAttended'];
	$varcharElementaryHonors=$_POST['txtbxElementaryHonors'];
	$varcharHighschoolSchoolGraduated=$_POST['txtbxHighschoolSchoolGraduated'];
	$varcharHighschoolSchoolAddress=$_POST['txtbxHighschoolSchoolAddress'];
	$varcharHighschoolYearAttended=$_POST['txtbxHighschoolYearAttended'];
	$varcharHighschoolHonors=$_POST['txtbxHighschoolHonors'];
	$varcharVocationalSchoolGraduated=$_POST['txtbxVocationalSchoolGraduated'];
	$varcharVocationalSchoolAddress=$_POST['txtbxVocationalSchoolAddress'];
	$varcharVocationalYearAttended=$_POST['txtbxVocationalYearAttended'];
	$varcharVocationalHonors=$_POST['txtbxVocationalHonors'];
	$varcharCollegeSchoolGraduated=$_POST['txtbxCollegeSchoolGraduated'];
	$varcharCollegeSchoolAddress=$_POST['txtbxCollegeSchoolAddress'];
	$varcharCollegeYearAttended=$_POST['txtbxCollegeYearAttended'];
	$varcharCollegeHonors=$_POST['txtbxCollegeHonors'];
	//End of Educational Background
	//Family Background
	$varcharMotherName = $_POST["txtbxMotherName"];
	$varcharMotherAge = $_POST["txtbxMotherAge"];
	$varcharMotherEducationalAttainment = $_POST["dropdownMotherEducationalAttainment"];
	$varcharMotherOccupationType = $_POST["dropdownMotherOccupationType"];
	$varcharOccupation = $_POST["txtbxMotherOccupation"];
	$varcharMotherNameOfEmployer = $_POST["txtbxMotherNameOfEmployer"];
	$varcharMotherAddressOfEmployer = $_POST["txtbxMotherAddressOfEmployer"];
	$varcharFatherName = $_POST["txtbxFatherName"];
	$varcharFatherAge = $_POST["txtbxFatherAge"];
	$varcharGuardianRelationship = $_POST["dropdownGuardianRelationship"];
	$varcharFatherEducationalAttainment = $_POST["dropdownFatherEducationalAttainment"];
	$varcharFatherOccupationType = $_POST["dropdownFatherOccupationType"];
	$varcharFatherOccupation = $_POST["txtbxFatherOccupation"];
	$varcharFatherNameOfEmployer = $_POST["txtbxFatherNameOfEmployer"];
	$varcharFatherAddressOfEmployer = $_POST["txtbxFatherAddressOfEmployer"];
	$varcharGuardianName = $_POST["txtbxGuardianName"];
	$varcharGuardianAge = $_POST["txtbxGuardianAge"];
	$varcharGuardianEducationalAttainment = $_POST["dropdownGuardianEducationalAttainment"];
	$varcharGuardianOccupationType = $_POST["dropdownGuardianOccupationType"];
	$varcharGuardianOccupation = $_POST["txtbxGuardianOccupation"];
	$varcharGuardianNameOfEmployer = $_POST["txtbxGuardianNameOfEmployer"];
	$varcharGuardianAddressOfEmployer = $_POST["txtbxGuardianAddressOfEmployer"];
	$varcharParentsMaritalRelationship = $_POST["dropdownParentsMaritalRelationship"];
	$varcharNoOfChildrenInTheFamily = $_POST["txtbxNoOfChildrenInTheFamily"];
	$varcharNoOfBrothers = $_POST["txtbxNoOfBrothers"];
	$varcharNoOfSisters = $_POST["txtbxNoOfSisters"];
	$varcharNoOfBrothersSistersGainfullyEmployed = $_POST["txtbxNoOfBrothersSistersGainfullyEmployed"];
	$varcharOrdinalPosition = $_POST["dropdownOrdinalPosition"];
	$varcharWhoFinancesYoureSchooling = $_POST["dropdownWhoFinancesYourSchooling"];
	$varcharNatureOfResidence = $_POST["dropdownNatureOfResidence"]; 
	$varcharWithWhom = $_POST["txtbxWithWhom"];
	$doubleWeeklyAllowance = $_POST["txtbxWeeklyAllowance"];
	//End Of Family Background
	//Health Background
	$varcharVisionProblem = $_POST["radioVision"];
	if($varcharVisionProblem == "Yes")
	{
		$varcharVisionProblem = $_POST["txtbxVision"];
	}
	$varcharHearingProblem = $_POST["radioHearing"];
	if($varcharHearingProblem == "Yes")
	{
		$varcharHearingProblem = $_POST["txtbxHearing"];
	}
	$varcharSpeachProblem = $_POST["radioSpeach"];
	if($varcharSpeachProblem == "Yes")
	{
		$varcharSpeachProblem = $_POST["txtbxSpeach"];
	}
	$varcharGeneralHealthProblem = $_POST["radioGeneralHealth"];
	if($varcharGeneralHealthProblem == "Yes")
	{
		$varcharGeneralHealthProblem = $_POST["txtbxGeneralHealth"];
	}

	$varcharPyschiatristConsult = $_POST["radioPsychiatrist"];
	if($varcharPyschiatristConsult == "Yes")
	{
		$datePsychiatristWhen = $_POST["datePsychiatrist"];
		$varcharPyschiatristReason = $_POST["txtareaForWhatPsychiatrist"];
	}
	else
	{
		$datePsychiatristWhen = NULL;
		$varcharPyschiatristReason = NULL;
	}
	$varcharPyschologistConsult = $_POST["radioPsychologist"];

	if($varcharPyschologistConsult == "Yes")
	{
		$datePsychologistWhen = $_POST["datePsychologist"];
		$varcharPyschologistReason = $_POST["txtareaForWhatPsychologist"];
	}
	else
	{
		$datePsychologistWhen = NULL;
		$varcharPyscologistReason = NULL;
	}
	$varcharCounselorConsult = $_POST["radioCounselor"];

	if($varcharCounselorConsult == "Yes")
	{
		$dateCounselorWhen = $_POST["datePsychiatrist"];
		$varcharCounselorReason = $_POST["txtareaForWhatCounselor"];
	}
	else
	{
		$dateCounselorWhen = NULL;
		$varcharCounselorReason = NULL;
	}

	

	//End Of Health Background

	echo "<script type='text/javascript'>alert('$varcharVisionProblem');</script>";
	echo "<script type='text/javascript'>alert('$varcharHearingProblem');</script>";
	echo "<script type='text/javascript'>alert('$varcharSpeachProblem');</script>";
	echo "<script type='text/javascript'>alert('$varcharGeneralHealthProblem');</script>";

	
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


</head>
<div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:5px; padding:7px;" >
	<image class="navbar-left" src="images/PUPLogo88x88.png"></image>
	<div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
		<h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
		<p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
		<h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNSELING AND TESTING SERVICES</p>
		</div>
	</div>
	<body class="nav-md">
		<div class="container body" id="div1">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div style="border-bottom:5px solid #9a3532;">
						<div class="clearfix"></div>
						<!-- menu profile quick info -->
						<div class="profile clearfix">
							<div class="profile_pic">
								<img src="images/img.jpg" alt="..." class="img-circle profile_img"  style="margin-left:100%; width:75%; margin-top:10px; ">
							</div>
							<div class="profile_info"  style="width:100%;">
								<center>
									<span>Welcome,</span>
									<h2><strong>Jaywel B Javier</strong></h2>
									<center>
									</div>
								</div>
							</div>
							<!-- /menu profile quick info -->

							<br />

							<!-- sidebar menu -->
							<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
								<div class="menu_section">
									<h3>General</h3>
									<ul class="nav side-menu">
										<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu">
												<li><a href="index.php">Dashboard</a></li>
												<li><a href="index2.php">Dashboard2</a></li>
												<li><a href="index3.php">Dashboard3</a></li>
											</ul>
											<li><a><i class="fa fa-table"></i> Individual Inventory Record <span class="fa fa-chevron-down"></span></a>
												<ul class="nav child_menu">
													<?php
													include("connectionString.php");  
													$queryCollege = "SELECT * FROM tbl_college";
													$resultCollege = mysqli_query($connect, $queryCollege); 
													while($row = mysqli_fetch_array($resultCollege))  
													{  
														$collegeCode = $row['collegeCode'];
														$collegeName = $row['collegeName'];
														?>

														<li><a href="IndividualInventoryRecord.php?id=<?php echo $collegeCode; ?>"><?php echo $collegeName; ?> (<?php echo $collegeCode; ?>)</a></li>

														
														<?php  
													}

													?>
												</ul>
											</li>
											<li><a><i class="fa fa-bar-chart-o"></i>Tally<span class="fa fa-chevron-down"></span></a>
												<ul class="nav child_menu">
													<?php
													include("connectionString.php");  
													$queryCollege = "SELECT * FROM tbl_college";
													$resultCollege = mysqli_query($connect, $queryCollege); 
													while($row = mysqli_fetch_array($resultCollege))  
													{  
														$collegeCode = $row['collegeCode'];
														$collegeName = $row['collegeName'];
														?>

														<li><a href="Tallytables.php?id=<?php echo $collegeCode; ?>"><?php echo $collegeName; ?> (<?php echo $collegeCode; ?>)</a></li>

														
														<?php  
													}

													?>
												</ul>
											</li>
                  <!--<li><a><i class="fa fa-edit"></i> IIR Form <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.php">General Form</a></li>
                      <li><a href="form_advanced.php">Advanced Components</a></li>
                      <li><a href="form_validation.php">Form Validation</a></li>
                      <li><a href="form_wizards.php">Form Wizard</a></li>
                      <li><a href="form_upload.php">Form Upload</a></li>
                      <li><a href="form_buttons.php">Form Buttons</a></li>
                    </ul>
                </li>-->
                <li><a><i class="fa fa-desktop"></i> Manage Accounts <span class="fa fa-chevron-down"></span></a>
                	<ul class="nav child_menu">
                		<li><a href="manageAccountAdminAccount.php">Admin Account</a></li>
                		<li><a href="manageAccountStaffAccount.php">Staff Account</a></li>
                		<li><a href="manageAccountStudentAccount.php">Student Account</a></li>
                      <!--<li><a href="general_elements.php">General Elements</a></li>
                      <li><a href="media_gallery.php">Media Gallery</a></li>
                      <li><a href="typography.php">Typography</a></li>
                      <li><a href="icons.php">Icons</a></li>
                      <li><a href="glyphicons.php">Glyphicons</a></li>
                      <li><a href="widgets.php">Widgets</a></li>
                      <li><a href="invoice.php">Invoice</a></li>
                      <li><a href="inbox.php">Inbox</a></li>
                      <li><a href="calendar.php">Calendar</a></li>-->
                  </ul>
              </li>
              <li><a><i class="fa fa-institution"></i> Manage Course And College <span class="fa fa-chevron-down"></span></a>
              	<ul class="nav child_menu">
              		<li><a href="manageCourse.php">Course</a></li>
              		<li><a href="manageCollege.php">College</a></li>
                      <!--<li><a href="general_elements.php">General Elements</a></li>
                      <li><a href="media_gallery.php">Media Gallery</a></li>
                      <li><a href="typography.php">Typography</a></li>
                      <li><a href="icons.php">Icons</a></li>
                      <li><a href="glyphicons.php">Glyphicons</a></li>
                      <li><a href="widgets.php">Widgets</a></li>
                      <li><a href="invoice.php">Invoice</a></li>
                      <li><a href="inbox.php">Inbox</a></li>
                      <li><a href="calendar.php">Calendar</a></li>-->
                  </ul>
              </li>
          </ul>
      </div>
              <!--
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.php">E-commerce</a></li>
                      <li><a href="projects.php">Projects</a></li>
                      <li><a href="project_detail.php">Project Detail</a></li>
                      <li><a href="contacts.php">Contacts</a></li>
                      <li><a href="profile.php">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.php">403 Error</a></li>
                      <li><a href="page_404.php">404 Error</a></li>
                      <li><a href="page_500.php">500 Error</a></li>
                      <li><a href="plain_page.php">Plain Page</a></li>
                      <li><a href="login.php">Login Page</a></li>
                      <li><a href="pricing_tables.php">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.php">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
            </div>-->
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
        	<a data-toggle="tooltip" data-placement="top" title="Settings">
        		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        	</a>
        	<a data-toggle="tooltip" data-placement="top" title="FullScreen">
        		<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        	</a>
        	<a data-toggle="tooltip" data-placement="top" title="Lock">
        		<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        	</a>
        	<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
        		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        	</a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="images/img.jpg" alt="">John Doe
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="AdminProfile.php"> Profile</a></li>
						<li>
							<a href="javascript:;">
								<span class="badge bg-red pull-right">50%</span>
								<span>Settings</span>
							</a>
						</li>
						<li><a href="javascript:;">Help</a></li>
						<li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">6</span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<div class="text-center">
								<a>
									<strong>See All Alerts</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
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
														<input type="radio" name="radioGender" value="Male"> Male 
													</label>
													<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="radioGender" value="female" checked=""> Female
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Sexuality(Sexual Orientation)</label>
											<div class="col-md-2 col-sm-2 col-xs-2">
												<select class="select2_single form-control" tabindex="-1" name="dropdownSexuality" id="dropdownSexuality" >
													<option></option>
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
												<input class="form-control col-md-7 col-xs-12" type="number" id="txtbxAge" name="txtbxAge">
											</div>
											<label class="control-label col-md-1 col-sm-1">Date Of Birth </label>
											<div class="col-md-3 col-sm-3">
												<input class="date-picker form-control col-md-7 col-xs-12" type="date" id="dateDateOfBirth" name="dateDateOfBirth">
											</div>  
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3">Place of Birth</label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPlaceOfBirth" name="txtbxPlaceOfBirth">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
											<div class="col-md-2 col-sm-2 col-xs-2">
												<select class="select2_single form-control" tabindex="-1" name="dropdownCivilStatus" id="dropdownCivilStatus">
													<option></option>
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
												<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxHeight" name="txtbxHeight" >
											</div>
											<label class="control-label col-md-1 col-sm-1">Weight</label>
											<div class="col-md-2 col-sm-2">
												<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxWeight" name="txtbxWeight" >
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Complexion</label>
											<div class="col-md-2 col-sm-2 col-xs-2">
												<select class="select2_single form-control" tabindex="-1" name="dropdownComplexion" id="dropdownComplexion">
													<option></option>
													<option  selected=""></option>
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
												<input disabled="disabled" class="form-control col-md-7 col-xs-12" type="text" id="txtbxStudentNumber" name="txtbxStudentNumber" value="<?php echo $varcharStudentNumber; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3">Year</label>
											<div class="col-md-2 col-sm-2">
												<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxYear" name="txtbxYear" value="<?php echo $vacharYear; ?>">
											</div>
											<label class="control-label col-md-1 col-sm-1">Section</label>
											<div class="col-md-3 col-sm-3">
												<input class="form-control col-md-7 col-xs-12" type="text" id="txtbxSection" name="txtbxSection" value="<?php echo $vacharSection; ?>">
											</div>
										</div>
										<span class="section" style="margin-left:90px;">III. Contact Informaltion</span>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">City Address</label>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<select class="select2_single form-control" tabindex="-1" id="dropdownCityAddress" name="dropdownCityAddress" >
													<option  selected=""></option>
													<option value="8262">Metro Manila~Caloocan</option>
													<option value="22722">Metro Manila~Las Pinas</option>
													<option value="24972">Metro Manila~Makati</option>
													<option value="25007">Metro Manila~Malabon</option>
													<option value="25030">Metro Manila~Mandaluyong</option>
													<option value="88">Metro Manila~Manila</option>
													<option value="25059">Metro Manila~Marikina</option>
													<option value="27973">Metro Manila~Muntinlupa</option>
													<option value="27984">Metro Manila~Navotas</option>
													<option value="34589">Metro Manila~Paranaque</option>
													<option value="34607">Metro Manila~Pasay</option>
													<option value="34810">Metro Manila~Pasig</option>
													<option value="34842">Metro Manila~Pateros</option>
													<option value="36138">Metro Manila~Quezon City</option>
													<option value="36861">Metro Manila~San Juan</option>
													<option value="39826">Metro Manila~Taguig</option>
													<option value="40599">Metro Manila~Valenzuela</option>
												</select>
											</div>
										</div>
										<div>
											<div class="col-md-4">
												<h2>1. Customs Checkboxes</h2>
												<div class="form-check">
													<label>
														<input type="checkbox" name="check" checked> <span class="label-text">Option 01</span>
													</label>
												</div>
												<div class="form-check">
													<label>
														<input type="checkbox" name="check"> <span class="label-text">Option 02</span>
													</label>
												</div>
												<div class="form-check">
													<label>
														<input type="checkbox" name="check"> <span class="label-text">Option 03</span>
													</label>
												</div>
												<div class="form-check">
													<label>
														<input type="checkbox" name="check" disabled> <span class="label-text">Option 04</span>
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<h2>2. Customs Radios</h2>
												<div class="form-check">
													<label>
														<input type="radio" name="radio" checked> <span class="label-text">Option 01</span>
													</label>
												</div>
												<div class="form-check">
													<label>
														<input type="radio" name="radio"> <span class="label-text">Option 02</span>
													</label>
												</div>
												<div class="form-check">
													<label>
														<input type="radio" name="radio"> <span class="label-text">Option 03</span>
													</label>
												</div>
												<div class="form-check">
													<label>
														<input type="radio" name="radio" disabled> <span class="label-text">Option 04</span>
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<h2>3.Radios Toggles</h2>
												<div class="form-check">
													<label class="toggle">
														<input type="radio" name="toggle" checked> <span class="label-text">Option 01</span>
													</label>
												</div>
												<div class="form-check">
													<label class="toggle">
														<input type="radio" name="toggle"> <span class="label-text">Option 02</span>
													</label>
												</div>
												<div class="form-check">
													<label class="toggle">
														<input type="radio" name="toggle"> <span class="label-text">Option 03</span>
													</label>
												</div>
												<div class="form-check">
													<label class="toggle">
														<input type="radio" name="toggle" disabled> <span class="label-text">Option 04</span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Provincial Address</label>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<select class="select2_single form-control" tabindex="-1" id="dropdownProvincialAddress" name="dropdownProvincialAddress" >
													<option  selected=""></option>
													<option value="42">Abra</option>
													<option value="43">Agusan Del Norte</option>
													<option value="44">Agusan Del Sur</option>
													<option value="45">Aklan</option>
													<option value="46">Albay</option>
													<option value="47">Antique</option>
													<option value="2990">Aurora</option>
													<option value="50">Basilan</option>
													<option value="3372">Bataan</option>
													<option value="53">Batangas</option>
													<option value="54">Benguet</option>
													<option value="55">Biliran</option>
													<option value="56">Bohol</option>
													<option value="57">Bukidnon</option>
													<option value="6819">Bulacan</option>
													<option value="7412">Cagayan</option>
													<option value="60">Camarines Norte</option>
													<option value="61">Camarines Sur</option>
													<option value="62">Camiguin</option>
													<option value="63">Capiz</option>
													<option value="64">Catanduanes</option>
													<option value="65">Cavite</option>
													<option value="66">Cebu</option>
													<option value="12832">Compostela Valley</option>
													<option value="68">Cotabato</option>
													<option value="69">Davao Del Norte</option>
													<option value="70">Davao Del Sur</option>
													<option value="71">Davao Oriental</option>
													<option value="221">Dinagat Islands</option>
													<option value="72">Eastern Samar</option>
													<option value="73">Guimaras</option>
													<option value="74">Ifugao</option>
													<option value="75">Ilocos Norte</option>
													<option value="76">Ilocos Sur</option>
													<option value="77">Iloilo</option>
													<option value="78">Isabela</option>
													<option value="79">Kalinga</option>
													<option value="19693">La Union</option>
													<option value="20290">Laguna</option>
													<option value="82">Lanao Del Norte</option>
													<option value="83">Lanao Del Sur</option>
													<option value="43805">Lazada Office</option>
													<option value="84">Leyte</option>
													<option value="24428">Maguindanao</option>
													<option value="86">Marinduque</option>
													<option value="87">Masbate</option>
													<option value="91">Misamis Occidental</option>
													<option value="92">Misamis Oriental</option>
													<option value="93">Mountain Province</option>
													<option value="94">Negros Occidental</option>
													<option value="95">Negros Oriental</option>
													<option value="29275">North Cotabato</option>
													<option value="96">Northern Samar</option>
													<option value="97">Nueva Ecija</option>
													<option value="98">Nueva Vizcaya</option>
													<option value="89">Occidental Mindoro</option>
													<option value="90">Oriental Mindoro</option>
													<option value="32177">Palawan</option>
													<option value="32616">Pampanga</option>
													<option value="101">Pangasinan</option>
													<option value="34854">Quezon</option>
													<option value="36282">Quirino</option>
													<option value="36421">Rizal</option>
													<option value="36624">Romblon</option>
													<option value="36884">Sarangani</option>
													<option value="108">Siquijor</option>
													<option value="109">Sorsogon</option>
													<option value="110">South Cotabato</option>
													<option value="111">Southern Leyte</option>
													<option value="38453">Sultan Kudarat</option>
													<option value="113">Sulu</option>
													<option value="114">Surigao Del Norte</option>
													<option value="115">Surigao Del Sur</option>
													<option value="116">Tarlac</option>
													<option value="40384">Tawi~Tawi</option>
													<option value="40634">Western Samar</option>
													<option value="118">Zambales</option>
													<option value="119">Zamboanga Del Norte</option>
													<option value="120">Zamboanga Del Sur</option>
													<option value="121">Zamboanga Sibugay</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3">Email Address</label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control col-md-7 col-xs-12" type="email" id="txtbxEmailAddress" name="txtbxEmailAddress">
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
												<input type="text" id="txtbxPreElemSchoolGraduated" name="txtbxPreElemSchoolGraduated" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >School Address <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" id="txtbxPreElemSchoolAddress" name="txtbxPreElemSchoolAddress" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Type of School<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<div class="btn-group" data-toggle="buttons">
													<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="radioPreElemTypeOfSchool" value="Public"> Public
													</label>
													<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="radioPreElemTypeOfSchool" value="Private"> Private
													</label>
													<input type="radio" name="radioPreElemTypeOfSchool" value=NULL checked="true" style="display: none;">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3">Year Attended</label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxPreElemYearAttended" Id="txtbxPreElemYearAttended">
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
											<label class="control-label col-md-3 col-sm-3">Year Attended</label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control col-md-7 col-xs-12" type="text"  id="txtbxElementaryYearAttended" name="txtbxElementaryYearAttended" >
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
											<label class="control-label col-md-3 col-sm-3">Year Attended</label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxHighschoolYearAttended" id="txtbxHighschoolYearAttended">
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
											<label class="control-label col-md-3 col-sm-3">Year Attended</label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxVocationalYearAttended" id="txtbxVocationalYearAttended" >
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
											<label class="control-label col-md-3 col-sm-3">Year Attended</label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control col-md-7 col-xs-12" type="text" name="txtbxCollegeYearAttended" id="txtbxCollegeYearAttended" >
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
												<select class="select2_single form-control" tabindex="-1">
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
														<input type="radio" name="gender" value="male"> Yes
													</label>
													<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="gender" value="female" checked=""> No
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
											<div class="col-md-6 col-sm-6 col-xs-6">
												<select class="select2_single form-control" tabindex="-1" name="dropdownClubInterest" id="dropdownClubInterest">
													<option></option>
													<option  selected=""></option>
													<option >Math Club</option>
													<option >Science Club</option>
													<option >English Club</option>
													<option >Filipino Club</option>
													<option >Astronomy Club</option>
													<option >Quizzers Club</option>
													<option >Scoial Studies Club</option>
													<option >Statistics Club</option>
													<option >Geometry Club</option>
													<option >Others</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Others, please specify: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12" disabled="true">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >What is/are you favorite subject/s <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<textarea class="form-control" name="txtarea" id="txtarea" ></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >What is/are your least favorite subject <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<textarea class="form-control" name="txtarea" id="txtarea" ></textarea>
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
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div><div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >2. <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >3. <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >4. <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Organization of your interest<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<select class="select2_single form-control" tabindex="-1" name="dropdownOrganizationInterest" id="dropdownOrganizationInterest">
													<option></option>
													<option  selected=""></option>
													<option >Athletics Club</option>
													<option >Religious Organization</option>
													<option >Glee Club</option>
													<option >Scouting</option>
													<option >Praternity</option>
													<option >Dramitics</option>
													<option >Chess Club</option>
													<option >College Organization</option>
													<option >Activist Organization</option>
													<option >Others</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Others, please specify: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12" disabled="true">
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
										<span class="section" style="margin-left:90px;">Test Result 1</span>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3">Date Of Test<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" type="date">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Name of Test <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Raw Score(RS) <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR) <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Description<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<textarea class="form-control" name="txtarea" id="txtarea" ></textarea>
											</div>
										</div>
										<span class="section" style="margin-left:90px;">Test Result 2</span>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3">Date Of Test <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" type="date">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Name of Test <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Raw Score(RS) <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR) <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3"  >Description<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<textarea class="form-control" name="txtarea" id="txtarea" ></textarea>
											</div>
										</div>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
										<li><input type="submit" name="btnFinish" class="btn btn-primary next-step" value="Finish" ></li>
									</ul>
								</div>
								<div class="clearfix"></div>
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

	});
</script>



</body>
</html>