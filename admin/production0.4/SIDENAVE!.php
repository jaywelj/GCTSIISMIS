<!--side navigation-->

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
					<li><a href="manageSurveyForm.php">Manage Survey Form</a></li>
					<li><a href="surveyForms.php">Survey Forms</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-desktop"></i> Accounts <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li>										<a href="manageAccountAdminAccount.php">Admin Account</a></li>
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
		<!--/side navigation-->