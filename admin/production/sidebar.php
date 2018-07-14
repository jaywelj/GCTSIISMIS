<?php 
include("connectionString.php");
$varcharAdminEmail = $_SESSION['sessionAdminEmail'];
$result = mysqli_query($connect,"SELECT * FROM `tbl_adminaccount` WHERE `adminEmail` = '$varcharAdminEmail'");

while($res = mysqli_fetch_array($result))
{
	$varcharAdminEmail = $res['adminEmail'];
	$varcharAdminFirstName = $res['adminFirstName'];
	$varcharAdminMiddleName = $res['adminMiddleName'];
	$varcharAdminLastName = $res['adminLastName'];
	$varcharAdminBirthDate = $res['adminBirthDate'];
	$varcharAdminPassword = $res['adminPassword'];
	$varcharAdminAccessLevel = $res['adminAccessLevel'];
	$varcharAdminImage = $res['adminImage'];

}
?>
<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<!-- menu profile quick info -->
		<div style="border-bottom:5px solid #9a3532;">
			<div class="clearfix"></div>
			<div class="profile clearfix">
				<div class="profile_pic">
					<?php

						$result = mysqli_query($connect,"SELECT * FROM `tbl_adminaccount` WHERE `adminEmail` = '$varcharAdminEmail'");

						while($res = mysqli_fetch_array($result))
						{
							$varcharAdminEmail = $res['adminEmail'];
							$varcharAdminFirstName = $res['adminFirstName'];
							$varcharAdminMiddleName = $res['adminMiddleName'];
							$varcharAdminLastName = $res['adminLastName'];
							$varcharAdminBirthDate = $res['adminBirthDate'];
							$varcharAdminPassword = $res['adminPassword'];
							$varcharAdminAccessLevel = $res['adminAccessLevel'];
							$varcharAdminImage = $res['adminImage'];
						if(empty($varcharAdminImage))
						{
							echo '
							<img src="assets/img/default-user.png" alt="..." class="img-circle profile_img" style="margin-left:100%; width:75%; margin-top:10px;">
							';
						}
						else{
							echo '
							<img src="data:image/jpeg;base64,'.base64_encode($res['adminImage']).'"  alt="..." class="img-circle profile_img" style="margin-left:100%; margin-top:10px; object-fit:cover; height: 70px; width: 85%;">
							';
						}
					}
						?>
					
				</div>
				<div class="profile_info"  style="width:100%;">
					<center>
						<span>Welcome,</span>
						<h2><strong><?php echo $varcharAdminFirstName;?></strong></h2>
					</center>
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
					</li>
					<li><a><i class="fa fa-table"></i> Individual Inventory <span class="fa fa-chevron-down"></span></a>
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
					<li><a><i class="fa fa-list"></i> Survey <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="surveyManageSurveyForm.php">Manage Survey Form</a></li>
							<li><a href="surveySurveyForms.php">Survey Forms</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-desktop"></i> Accounts <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="manageAccountAdminAccount.php">Admin Account</a></li>
							<li><a href="manageAccountStaffAccount.php">Staff Account</a></li>
							<li><a href="manageAccountStudentAccount.php">Student Account</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-institution"></i> Course And College <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="manageCourse.php">Course</a></li>
							<li><a href="manageCollege.php">College</a></li>
						</ul>
					</li>
				</ul>
			</div>
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
			<a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!--o /menu footer buttons -->
	</div>
</div>