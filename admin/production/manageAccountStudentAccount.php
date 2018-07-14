<?php
if(isset($_POST['btnAdd'])) 
{
										//including the database connection file
	include_once("connectionString.php");

	$varcharStudentAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountFirstName']);

	$varcharStudentAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountLastName']);

	$varcharStudentAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountMiddleName']);

	$varcharStudentAccountNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountNumber']);

	$varcharStudentAccountPassword = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountPassword']);

	$varcharStudentAccountCourse = mysqli_real_escape_string($connect, $_POST['selectStudentAccountCourse']);

	$varcharStudentAccountYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountYear']);

	$varcharStudentAccountSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountSection']);

	$varcharStudentAccountImage = addslashes(file_get_contents($_FILES["fileStudentAccountImage"]["tmp_name"]));

	$queryGetCollege = "SELECT tbl_college.collegeCode FROM tbl_course INNER JOIN tbl_college ON tbl_course.collegeCode = tbl_college.collegeCode WHERE courseCode = '$varcharStudentAccountCourse' ;";
	$queryGetCollegeArray = mysqli_query($connect, $queryGetCollege);
	while ($row = mysqli_fetch_array($queryGetCollegeArray))
	{
		$varcharStudentAccountCollege = $row['collegeCode'];
	}
	echo "<script type='text/javascript'>alert('$varcharStudentAccountCollege');</script>";


										//first name validation if input is a space 
										// checking empty fields
	if(empty($varcharStudentAccountFirstName) || empty($varcharStudentAccountNumber)) 
	{

		if(empty($varcharStudentAccountFirstName))
		{
			$message = "Enter a First Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(empty($varcharStudentAccountNumber)) 
		{
			$message = "Enter a valid Student Number";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
												//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else if(empty($varcharStudentAccountImage))
	{
		$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`,`studentDisplayPic`) vALUES ('$varcharStudentAccountNumber', '$varcharStudentAccountFirstName', '$varcharStudentAccountMiddleName', '$varcharStudentAccountLastName', '$varcharStudentAccountPassword', NULL, NULL)";

		$queryAdd2 = "INSERT INTO `tbl_personalinfo` (`infoID`, `lastName`, `firstName`, `middleName`, `sex`, `sexuality`, `age`, `year`, `section`, `civilStatus`, `birthDate`, `height`, `weight`, `complexion`, `birthPlace`, `cityHouseNumber`, `cityProvince`, `cityName`, `cityBarangay`, `provinceHouseNumber`, `provinceProvincial`, `provinceName`, `provinceBarangay`, `telNumber`, `mobileNumber`, `email`, `hsGWA`, `religion`, `employerName`, `employerAddress`, `contactPersonName`, `cpAddress`, `cpRelationship`, `cpContactNumber`, `collegeCode`, `courseCode`, `studentNumber`) vALUES (NULL, 'Javier', 'Jaywel', 'Bisarra', 'M', 'Homosexual', '19', '$varcharStudentAccountYear', '$varcharStudentAccountSection', 'Single', '1998-08-17', '172', '54', 'Fair', 'Pasig City', '113', 'Rizal', 'Taytay', 'San Juan', '113', 'Rizal', 'Rizal', 'San Juan', '6354478', '09086966016', 'jaywelj@gmail.com', '92.5', 'Catholic', 'None', 'None', 'None', 'None', 'Tito', '090817271', '$varcharStudentAccountCollege', '$varcharStudentAccountCourse', '$varcharStudentAccountNumber')";
	} 
	else 
	{ 						//insert data to database   
		$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`,`studentDisplayPic`) vALUES ('$varcharStudentAccountNumber', '$varcharStudentAccountFirstName', '$varcharStudentAccountMiddleName', '$varcharStudentAccountLastName', '$varcharStudentAccountPassword', NULL, '$varcharStudentAccountImage')";

		$queryAdd2 = "INSERT INTO `tbl_personalinfo` (`infoID`, `lastName`, `firstName`, `middleName`, `sex`, `sexuality`, `age`, `year`, `section`, `civilStatus`, `birthDate`, `height`, `weight`, `complexion`, `birthPlace`, `cityHouseNumber`, `cityProvince`, `cityName`, `cityBarangay`, `provinceHouseNumber`, `provinceProvincial`, `provinceName`, `provinceBarangay`, `telNumber`, `mobileNumber`, `email`, `hsGWA`, `religion`, `employerName`, `employerAddress`, `contactPersonName`, `cpAddress`, `cpRelationship`, `cpContactNumber`, `collegeCode`, `courseCode`, `studentNumber`) vALUES (NULL, 'Javier', 'Jaywel', 'Bisarra', 'M', 'Homosexual', '19', '$varcharStudentAccountYear', '$varcharStudentAccountSection', 'Single', '1998-08-17', '172', '54', 'Fair', 'Pasig City', '113', 'Rizal', 'Taytay', 'San Juan', '113', 'Rizal', 'Rizal', 'San Juan', '6354478', '09086966016', 'jaywelj@gmail.com', '92.5', 'Catholic', 'None', 'None', 'None', 'None', 'Tito', '090817271', '$varcharStudentAccountCollege', '$varcharStudentAccountCourse', '$varcharStudentAccountNumber')";
	}

												//$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`, `studentDisplayPic`, `studentCoverPhoto`) VALUES ('435345643', '43534534', '345345', '3454353', '345345', NULL, NULL, NULL)";
	if(mysqli_query($connect, $queryAdd))
	{   
		if(mysqli_query($connect, $queryAdd2))
		{
			$message = "Student Account added successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
															//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
		}
	}
	else
	{
		$query = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$varcharStudentAccountNumber' ";
		$result = mysqli_query($connect, $query);

		if (mysqli_num_rows($result) == 1) {

			$message = "Student Number Already Registered";
			echo "<script type='text/javascript'>alert('$message');</script>";





			$message = "Query Error";
			
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

	<title>DataTables | Gentelella</title>

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
									<h2>Student Accounts <small>StudentAccounts</small></h2>
									<ul class="nav navbar-right">
										<button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD AN ACCOUNT</button>
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
											$queryStudent = "SELECT * FROM tbl_studentaccount";
											$resultStudent = mysqli_query($connect, $queryStudent); 
											while($row = mysqli_fetch_array($resultStudent))  
											{  
												?>  
												<tr>
													<td>

														<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>

														<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>

														<a title="Delete" class="btn btn-danger" href="manageAccountStudentAccountDelete.php?id=<?php echo $row['studentNumber']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>

													</td>
													<td> <?php echo $row['studentNumber'];?> </td>
													<td> <?php echo $row['studentFirstName'];?> </td>
													<td> <?php echo $row['studentMiddleName'];?> </td>
													<td> <?php echo $row['studentLastName'];?> </td>
													<td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['studentDisplayPic'] ).'"height="200" width="200" style="object-fit:cover;"  />';?> </td>
												</tr>  
												<?php
											}
											?> 

										</tbody>
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
			<div id="view_data_Modal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Account Details</h4>
						</div>
						<div class="modal-body">
							<form method="post" id="insert_form" style="font-size: 16px;">
								<table class="table">
									<tbody>
										<tr>
											<th scope="row">Name</th>
											<td>Jaywel Bisarra Javier</td>
										</tr>
										<tr>
											<th scope="row">Student No.</th>
											<td>2014-04778-MN-0</td>
										</tr>
										<tr>
											<th scope="row">Student Type</th>
											<td>College</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!--/Modal view-->
			<!--Modal Edit-->
			<div id="edit_data_Modal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Update Account</h4>
						</div>
						<div class="modal-body">
							<form method="post" id="insert_form">
								<label>First Name</label>
								<input type="text" name="StudentAccountFirstNameUpdate" id="StudentAccountFirstNameUpdate" value="Jaywel" class="form-control" />
								<br />
								<label>Last Name</label>
								<input type="text" name="StudentAccountLastNameUpdate" id="StudentAccountLastNameUpdate" value="Javier" class="form-control" />
								<br />
								<label>Middle Name</label>
								<input type="StudentAccountMiddleNameUpdate" name="StudentAccountMiddleNameUpdate" id="name" value="Bisarra" class="form-control" />
								<br />
								<label>Student No.</label>
								<input type="text" name="StudentAccountNumberUpdate" id="StudentAccountNumberUpdate" value="2015-04778-MN-0" class="form-control" />
								<br />
								<label>Password</label>
								<input type="password" name="name" id="name" value="" class="form-control" />
								<br />
								<label>Retype Password</label>
								<input type="password" name="name" id="name" value="" class="form-control" />
								<input type="submit" name="insert" id="insert" value="Cancel" class="btn btn-danger pull-right" />
								<input type="submit" name="insert" id="insert" value="Update" class="btn btn-success pull-right" />
							</form>
						</div>
					</div>
				</div>
			</div>
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
								<input type="text" name="txtbxStudentAccountNumber" id="txtbxStudentAccountNumber" class="form-control" />
								<br />
								<label>First Name</label>
								<input type="text" name="txtbxStudentAccountFirstName" id="txtbxStudentAccountFirstName" class="form-control" />
								<br />
								<label>Last Name</label>
								<input type="text" name="txtbxStudentAccountLastName" id="txtbxStudentAccountLastName" class="form-control" />
								<br />
								<label>Middle Name</label>
								<input type="text" name="txtbxStudentAccountMiddleName" id="txtbxStudentAccountMiddleName" class="form-control" />
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
								<select name="selectStudentAccountCourse" id="selectStudentAccountCourse" class="form-control">
									<option value="NULL" selected>Select A Course</option>
									<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
										<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
									<?php endwhile;?>
								</select>
								<br />
								<label>Year</label>
								<input type="number" name="txtbxStudentAccountYear" id="txtbxStudentAccountYear" class="form-control" />
								<br />
								<label>Section</label>
								<input type="number" name="txtbxStudentAccountSection" id="txtbxStudentAccountSection" class="form-control" />
								<br />
								<label>Password</label>
								<input type="password" name="txtbxStudentAccountPassword" id="txtbxStudentAccountPassword" class="form-control" />
								<br />
								<label>Image</label>
								<input type="file" name="fileStudentAccountImage" id="fileStudentAccountImage" class="form-control" />
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

</body>
</html>