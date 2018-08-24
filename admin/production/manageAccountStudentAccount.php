<?php
$ArchivedStudentNumber = "";
$ActiveStudentNumber = "";

if(isset($_POST['btnAdd'])) 
{
	include_once("connectionString.php");
										//including the database connection file
	$varcharStudentNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumber']);

	$varcharStudentFirstName = mysqli_real_escape_string($connect, $_POST['txtbxStudentFirstName']);

	$varcharStudentLastName = mysqli_real_escape_string($connect, $_POST['txtbxStudentLastName']);

	$varcharStudentMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxStudentMiddleName']);

	$varcharStudentCourse = mysqli_real_escape_string($connect, $_POST['selectStudentCourse']);

	$varcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentYear']);

	$varcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentSection']);

	if(!empty(["fileStudentImage"]))
	{
		// echo "<script type='text/javascript'>alert('meron');</script>";
		$varcharStudentImage =  addslashes(file_get_contents($_FILES["fileStudentImage"]["tmp_name"]));
	}
	else
	{
		// echo "<script type='text/javascript'>alert('wala');</script>";
		$varcharStudentImage = NULL;
	}


	$varcharStudentPassword= mysqli_real_escape_string($connect, $_POST['txtbxStudentPassword']);
	$varcharStudentCPassword= mysqli_real_escape_string($connect, $_POST['txtbxStudentCPassword']);

	$queryGetCollege = "SELECT tbl_college.collegeCode FROM tbl_course INNER JOIN tbl_college ON tbl_course.collegeCode = tbl_college.collegeCode WHERE courseCode = '$varcharStudentCourse' ";
	$queryGetCollegeArray = mysqli_query($connect, $queryGetCollege);
	while ($row = mysqli_fetch_array($queryGetCollegeArray))
	{
		$varcharStudentCollege = $row['collegeCode'];
	}

	$queryGetArchivedAccount = "SELECT * FROM tbl_personalinfoarchive WHERE `studentNumber` = '$varcharStudentNumber' ";
	$resultGetArchivedAccount = mysqli_query($connect, $queryGetArchivedAccount);

	while ($res = mysqli_fetch_array($resultGetArchivedAccount)) {
		$ArchivedStudentNumber = $res['studentNumber'];
	}

	$queryGetAccount = "SELECT * FROM tbl_personalinfo WHERE `studentNumber` = '$varcharStudentNumber' ";
	$resultGetAccount = mysqli_query($connect, $queryGetAccount);

	while ($res2 = mysqli_fetch_array($resultGetAccount)) {
		$ActiveStudentNumber = $res2['studentNumber'];
	}

	if ($ArchivedStudentNumber == $varcharStudentNumber OR $ActiveStudentNumber == $varcharStudentNumber )
	{
		if ($ArchivedStudentNumber == $varcharStudentNumber) 
		{
			$message = "Existing Account In Archive Delete It First";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if ($ActiveStudentNumber == $varcharStudentNumber) 
		{
			$message = "Existing Account";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		// echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else
	{
		if(empty($varcharStudentFirstName) || empty($varcharStudentNumber)) 
		{

			if(empty($varcharStudentFirstName))
			{
				$message = "Enter a First Name";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			if(empty($varcharStudentNumber)) 
			{
				$message = "Enter a valid Student Number";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else if($varcharStudentCPassword<>$varcharStudentPassword)
		{
			$message = "Password does not match";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			if(!empty($varcharStudentImage))
			{ 						  				

				$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentPassword`, `aboutStudent`, `studentDisplayPic`) VALUES ('$varcharStudentNumber', '$varcharStudentPassword', 'Not Interested', '$varcharStudentImage')";
			}
			else
			{
				$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentPassword`, `aboutStudent`, `studentDisplayPic`) VALUES ('$varcharStudentNumber', '$varcharStudentPassword', 'Not Interested', NULL)";
			}
			$queryAdd2 = "INSERT INTO `tbl_personalinfo` (`infoID`, `firstName`, `lastName`, `middleName`, `sex`, `sexuality`, `age`, `year`, `section`, `civilStatus`, `birthDate`, `height`, `weight`, `complexion`, `birthPlace`, `cityHouseNumber`,  `cityName`, `cityBarangay`, `provinceHouseNumber`, `provinceProvincial`, `provinceName`, `provinceBarangay`, `telNumber`, `mobileNumber`, `email`, `hsGWA`, `religion`, `employerName`, `employerAddress`, `contactPersonName`, `cpAddress`, `cpRelationship`, `cpContactNumber`, `collegeCode`, `courseCode`, `studentNumber`) VALUES (NULL, '$varcharStudentFirstName', '$varcharStudentLastName', '$varcharStudentMiddleName', '', '', '0', '$varcharStudentYear', '$varcharStudentSection', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', NULL, '', '', '$varcharStudentCollege', '$varcharStudentCourse', '$varcharStudentNumber')";
			$queryAdd3 = "INSERT INTO `tbl_educationalbackground` (`educationID`, `prepSchoolName`, `prepSchoolAddress`, `prepType`, `prepYearAttended`, `prepAwards`, `elemSchoolName`, `elemSchoolAddress`, `elemType`, `elemYearAttended`, `elemAwards`, `hsSchoolName`, `hsSchoolAddress`, `hsType`, `hsYearAttended`, `hsAwards`, `vocSchoolName`, `vocSchoolAddress`, `vocType`, `vocYearAttended`, `vocAwards`, `collegeSchoolName`, `collegeSchoolAddress`, `collegeType`, `collegeYearAttended`, `collegeAwards`, `natureOfSchooling`, `interruptedWhy`, `studentNumber`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '$varcharStudentNumber')";
			$queryAdd5 = "INSERT INTO `tbl_familybackground` (`familyID`, `fatherName`, `fatherAge`, `fatherStatus`, `fatherEducation`, `fatherOccupationType`, `fatherOccupation`, `fatherEmployerName`, `fatherEmployerAdd`, `motherName`, `motherAge`, `motherStatus`, `motherEducation`, `motherOccupationType`, `motherOccupation`, `motherEmployerName`, `motherEmployerAdd`, `guardianName`, `guardianAge`, `guardianRelation`, `guardianEducation`, `guardianOccupationType`, `guardianOccupation`, `guardianEmployerName`, `guardianEmployerAdd`, `parentsMaritalRelation`, `noOfChildren`, `noOfBrother`, `noOfSister`, `broSisEmployed`, `ordinalPosition`, `supportedByYourSibling`, `schoolFinancer`, `weeklyAllowance`, `totalMonthlyIncome`, `studyPlace`, `roomSharing`, `natureOfResidence`, `studentNumber`) VALUES (NULL, '', NULL, '', '', '', '', NULL, NULL, '', NULL, '', '', '', '', NULL, NULL, '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '$varcharStudentNumber')";
			$queryAdd6 = "INSERT INTO `tbl_healthinfo` (`healthID`, `visionProblem`, `hearingProblem`, `speechProblem`, `generalHealth`, `psychiatristConsult`, `psychiatristWhen`, `psychiatristReason`, `psychologistConsult`, `psychologistWhen`, `psychologistReason`, `counselorConsult`, `counselorWhen`, `counselorReason`, `studentNumber`) VALUES (NULL, '', '', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '$varcharStudentNumber')";
			$queryAdd7 = "INSERT INTO `tbl_interesthobbies` (`interestID`, `clubName`, `favSubject`, `leastFavSubject`, `hobby1`, `hobby2`, `hobby3`, `hobby4`, `interestOrganization`, `organizationPosition`, `studentNumber`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$varcharStudentNumber')";
			$queryAdd8 = "INSERT INTO `tbl_testrecord` (`testID`, `testDate`, `testName`, `testRawScore`, `testPercentile`, `testDescription`, `studentNumber`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, '$varcharStudentNumber')";
			if(mysqli_query($connect, $queryAdd))
			{   
				if(mysqli_query($connect, $queryAdd2))
				{
					if(mysqli_query($connect, $queryAdd3))
					{
						if(mysqli_query($connect, $queryAdd5))
						{
							if(mysqli_query($connect, $queryAdd6))
							{
								if(mysqli_query($connect, $queryAdd7))
								{
									if(mysqli_query($connect, $queryAdd8))
									{
										$message = "Student Account added successfully!";
										echo "<script type='text/javascript'>alert('$message');</script>";
								//redirectig to the display page. In our case, it is index.php
										echo "<script type='text/javascript'>location.href = 
										'manageAccountStudentAccount.php';</script>";
									}
									else
									{
										// $message = "7";
										// echo "<script type='text/javascript'>alert('$message');</script>";
										// echo("Error description7: " . mysqli_error($connect));
										echo "<script type='text/javascript'>location.href = 
										'manageAccountStudentAccount.php';</script>";
									}
								}
								else
								{
									// $message = "6";
									// echo "<script type='text/javascript'>alert('$message');</script>";
									// echo("Error description6: " . mysqli_error($connect));
								}
							}
							else
							{
								// $message = "5";
								// echo "<script type='text/javascript'>alert('$message');</script>";
								// echo("Error description5: " . mysqli_error($connect));
							}

						}
						else
						{
							// $message = "3";
							// echo "<script type='text/javascript'>alert('$message');</script>";
							// echo("Error description4: " . mysqli_error($connect));
						}
					}
					else
					{
						// $message = "2";
						// echo "<script type='text/javascript'>alert('$message');</script>";
						// echo("Error description3: " . mysqli_error($connect));
					}

				}
				else
				{
					// $message = "1";
					// echo "<script type='text/javascript'>alert('$message');</script>";
					// echo("Error description2: " . mysqli_error($connect));
				}
			}
			else
			{
				$query = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$varcharStudentNumber' ";
				$result = mysqli_query($connect, $query);

				if (mysqli_num_rows($result) == 1) {
					$message = "Student Number Already Registered";
					echo "<script type='text/javascript'>alert('$message');</script>";
					// $message = "Query Error";

					// echo "<script type='text/javascript'>alert('$message');</script>";
														//redirectig to the display page. In our case, it is index.php
					echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
				}
				else
				{
					// $message = "Query Error";

					// echo "<script type='text/javascript'>alert('$message');</script>";
														//redirectig to the display page. In our case, it is index.php
					echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
				}
			}
		}
	}
}



if(isset($_POST['btnUpdate']))
{
	include_once("connectionString.php");

	$varcharStudentNumber	= mysqli_real_escape_string($connect, $_POST['txtbxEditStudentNumber']);

	$varcharStudentFirstName = mysqli_real_escape_string($connect, $_POST['txtbxEditStudentFirstName']);

	$varcharStudentMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxEditStudentMiddleName']);

	$varcharStudentLastName = mysqli_real_escape_string($connect, $_POST['txtbxEditStudentLastName']);

	$varcharStudentCourse = mysqli_real_escape_string($connect, $_POST['optionStudentCourse']);

	$varcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxEditStudentYear']);

	$varcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxEditStudentSection']);

	$queryGetCollege = "SELECT tbl_college.collegeCode FROM tbl_course INNER JOIN tbl_college ON tbl_course.collegeCode = tbl_college.collegeCode WHERE courseCode = '$varcharStudentCourse' ;";
	$queryGetCollegeArray = mysqli_query($connect, $queryGetCollege);
	while ($row = mysqli_fetch_array($queryGetCollegeArray))
	{
		$varcharStudentCollege = $row['collegeCode'];
	}
	if(!empty($_FILES['fileEditStudentImage']['tmp_name']) && file_exists($_FILES['fileEditStudentImage']['tmp_name'])) 
	{
		$varcharStudentImage = addslashes(file_get_contents($_FILES["fileEditStudentImage"]["tmp_name"]));
	}
	else
	{
		$varcharStudentImage = "";
	}
	// checking empty fields
	if(empty($varcharStudentFirstName)) 
	{

		if(empty($varcharStudentFirstName))
		{
			$message = "Enter a First Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		//link to the previous page
		// echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	{ 
		// if all the fields are filled (not empty) 
		//insert data to database   
		if (!empty($varcharStudentImage)) 
		{
			$queryEdit = "
			UPDATE `tbl_studentaccount` AS A
			INNER JOIN tbl_personalinfo AS B 
			ON A.studentNumber = B.studentNumber 
			SET `firstName` = '$varcharStudentFirstName', `middleName` = '$varcharStudentMiddleName', `lastName` = '$varcharStudentLastName', courseCode = '$varcharStudentCourse', collegeCode = '$varcharStudentCollege', year = '$varcharStudentYear', section = '$varcharStudentSection',`studentDisplayPic` = '$varcharStudentImage' 
			WHERE A.studentNumber = '$varcharStudentNumber'";
			// $message = "0";
			// echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$queryEdit = "
			UPDATE `tbl_studentaccount` AS A
			INNER JOIN tbl_personalinfo AS B 
			ON A.studentNumber = B.studentNumber 
			SET `firstName` = '$varcharStudentFirstName', `middleName` = '$varcharStudentMiddleName', `lastName` = '$varcharStudentLastName', courseCode = '$varcharStudentCourse', collegeCode = '$varcharStudentCollege', year = '$varcharStudentYear', section = '$varcharStudentSection'
			WHERE A.studentNumber = '$varcharStudentNumber'";
			// $message = "1";
			// echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(!mysqli_query($connect, $queryEdit))
		{
			// $message = "Query Error" ;
			// echo "<script type='text/javascript'>alert('$message');</script>";
			// echo("Error description: " . mysqli_error($connect));
		}
		else
		{
			$message = "Student Account Updated Successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";	
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="assets/img/GCTS LOGO1.png">
	<title>Student Account | OCPS</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- Datatables -->
	<link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
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
							<h3>Manage Accounts<small></small></h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Student Accounts <small>StudentAccounts</small></h2>
									<ul class="nav navbar-right">
										<button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD STUDENT ACCOUNT</button>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Student Number</th>
												<th>First Name</th>
												<th>Middle Name</th>
												<th>Last Name</th>
												<th>Image</th>
											</tr>
										</thead>


										<tbody>
											<?php  
											include("connectionString.php");  
											$queryStudent = "SELECT * FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber ORDER BY tbl_studentaccount.studentNumber ASC";
											$resultStudent = mysqli_query($connect, $queryStudent); 
											while($row = mysqli_fetch_array($resultStudent))  
											{  
												?>  
												<tr>
													<td width="14%" >
														<center>
															<button class="btn btn-default btn-info btn-view" type="button" title="View" id=<?php echo $row['studentNumber'];?>><i class="fa fa-list"></i></button>

															<button class="btn btn-default btn-warning btn-edit" type="button" title="Edit" id=<?php echo $row['studentNumber'];?>> <i class="fa fa-edit"></i></button>

															<a title="Delete" class="btn btn-danger" title="Delete" href="manageAccountStudentAccountDelete.php?id=<?php echo $row['studentNumber']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
														</center>
													</td>
													<td> <?php echo $row['studentNumber'];?> </td>
													<td> <?php echo $row['firstName'];?> </td>
													<td> <?php echo $row['middleName'];?> </td>
													<td> <?php echo $row['lastName'];?> </td>
													<td> 
														<center>	
															<?php


															$VarcharStudentProfileImage = $row['studentDisplayPic'];
															if(empty($VarcharStudentProfileImage))
															{
																echo '
																<img src="assets/img/default-user.png" height="200" width="200" style="object-fit:cover;">
																';
															}
															else{
																echo '<img src="data:image/jpeg;base64,'.base64_encode($row['studentDisplayPic'] ).'" height="200" width="200" style="object-fit:cover;" />';
															}

															?> 
														</td>
													</center>
												</tr>  
												<?php
											}
											?> 
										</tbody>
										<tfoot>
											<tr>
												<th></th>
												<th>Student Number</th>
												<th>First Name</th>
												<th>Middle Name</th>
												<th>Last Name</th>
												<th>Image</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
						<!--Other Tables othertables/-->
					</div>
				</div>
			</div>
			<!-- /page content -->
			<!--Modal view-->
			<form method="post" enctype="multipart/form-data">
				<div id="view_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">STUDENT ACCOUNT DETAILS</h4>
							</div>
							<div class="modal-body" id="studentAccountDetails"    style=" padding: 5px 50px 5px 50px;">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal view-->
			<!--Modal Edit-->
			<form method="post" enctype="multipart/form-data">
				<div id="edit_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">EDIT STUDENT ACCOUNT DETAILS</h4>
							</div>
							<div class="modal-body" id="editStudentAccountDetails"    style=" padding: 25px 50px 5px 50px;">

							</div>
							<div class="modal-footer">
								<input type="submit" name="btnUpdate" id="btnUpdate" value="Update" class="btn btn-success"/>
								<button type="button" class="btn btn-danger  pull-right" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal Edit-->
			<!--Modal Add-->
			<form method="post" enctype="multipart/form-data">
				<div id="add_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">ADD NEW ACCOUNT</h4>
							</div>
							<div class="modal-body" style=" padding: 25px 50px 5px 50px;">
								<label>Student Number</label>
								<input type="text" name="txtbxStudentNumber" id="txtbxStudentNumber" class="form-control" required="required" />
								<br />
								<label>First Name</label>
								<input type="text" name="txtbxStudentFirstName" id="txtbxStudentFirstName" class="form-control" required="required" pattern="[a-zA-Z0-9\s]+"/>
								<br />
								<label>Middle Name</label>
								<input type="text" name="txtbxStudentMiddleName" id="txtbxStudentMiddleName" class="form-control" />
								<br />
								<label>Last Name</label>
								<input type="text" name="txtbxStudentLastName" id="txtbxStudentLastName" class="form-control" required="required" pattern="[a-zA-Z0-9\s]+"/>
								<br />
								<?php

								// php select option value from database
								include("connectionString.php");

								// mysql select query
								$queryCourse2 = "SELECT * FROM tbl_course";

								// for method 1/
								$resultCourse2 = mysqli_query($connect, $queryCourse2);

								?>
								<label>Course</label>
								<select name="selectStudentCourse" id="selectStudentCourse" class="form-control">
									<option value="NULL" selected>Select A Course</option>
									<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
										<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
									<?php endwhile;?>
								</select>
								<br />
								<label>Year</label>
								<input type="number" name="txtbxStudentYear" id="txtbxStudentYear" class="form-control" required min="1" max="6" />
								<br />
								<label>Section</label>
								<input type="number" name="txtbxStudentSection" id="txtbxStudentSection" class="form-control" required="" />
								<br />
								<label>Password</label>
								<input type="password" name="txtbxStudentPassword" id="txtbxStudentPassword" class="form-control" required="" />
								<br />
								<label>Confirm Password</label>
								<input type="password" name="txtbxStudentCPassword" id="txtbxStudentCPassword" class="form-control" required="" />
								<div id="divCheckPasswordMatch">
								</div>
								<br />
								<label>Image</label>
								<input type="file" name="fileStudentImage" id="fileStudentImage" class="form-control" />
								<br />
								
							</div>
							<div class="modal-footer">
								<input type="submit" name="btnAdd" id="btnAdd" value="Add Account" class="btn btn-success " />
								<button type="button" class="btn btn-danger  pull-right" data-dismiss="modal">Close</button> 
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal Edit-->
			<!-- MODAL FOR MESSAGE -->
			<?php 
			require 'viewMessageModal.php';
			?>
			<!-- /MODAL FOR MESSAGE -->
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
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- Datatables -->
	<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	<script src="../vendors/jszip/dist/jszip.min.js"></script>
	<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
	<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

	<script>
		$(document).ready(function(){
			$(document).on('click','.message-view',function(){
				var messageID = $(this).attr("id");
				$.ajax({
					url:"viewMessage.php",
					method:"post",
					data:{messageID:messageID},
					success:function(data){
						$('#messageDetails').html(data);
						$('#view_message_Modal').modal('show');
					}
				});
			});

		});
	</script>
	

	<script>
		$(document).ready(function(){
			$(document).on('click','.btn-view',function(){
				var studentNumber = $(this).attr("id");
				$.ajax({
					url:"viewStudentAccountDetails.php",
					method:"post",
					data:{studentNumber:studentNumber},
					success:function(data){
						$('#studentAccountDetails').html(data);
						$('#view_data_Modal').modal('show');
					}
				});
			});
			$(document).on('click','.btn-edit',function(){
				var studentNumber = $(this).attr("id");
				$.ajax({
					url:"editStudentAccountDetails.php",
					method:"post",
					data:{studentNumber:studentNumber},
					success:function(data){
						$('#editStudentAccountDetails').html(data);
						$('#edit_data_Modal').modal('show');
					}
				});
			});
		});
	</script>
	<script type="text/javascript">
		document.getElementById("txtbxStudentCPassword").onkeyup = function(){
			checkPassword();
		};
		document.getElementById("txtbxStudentPassword").onkeyup = function(){
			checkPassword();
		};
		function checkPassword(){
			var password = document.getElementById("txtbxStudentPassword").value;
			var cpassword = document.getElementById("txtbxStudentCPassword").value;
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
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#editProfilePicture')
					.attr('src', e.target.result)
				};

				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

</body>
</html>