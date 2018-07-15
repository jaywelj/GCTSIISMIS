<?php
if(empty($_SESSION['sessionAdminName']))
{
	header("Location: logout.php");
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
							<h3>Manage Admin Accounts<small></small></h3>
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
									<h2>Accounts <small>Admin</small></h2>
									<ul class="nav navbar-right">
										<button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD ANOTHER ADMIN</button>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Username</th>
												<th>First Name</th>
												<th>Middle Name</th>
												<th>Last Name</th>
												<th>Birthdate</th>
												<th>Image</th>
											</tr>
										</thead>


										<tbody>
											<?php  
											include("connectionString.php");  
											$queryCourse = "SELECT * FROM tbl_adminaccount WHERE adminAccessLevel = 'Admin'";
											$resultCourse = mysqli_query($connect, $queryCourse); 
											while($row = mysqli_fetch_array($resultCourse))  
											{  
												?>  
												<tr>
													<td>

														<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>

														<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>

														<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>

													</td>
													<td> <?php echo $row['adminUserName'];?> </td>
													<td> <?php echo $row['adminFirstName'];?> </td>
													<td> <?php echo $row['adminMiddleName'];?> </td>
													<td> <?php echo $row['adminLastName'];?> </td>
													<td> <?php echo $row['adminBirthDate'];?> </td>
													<td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['adminImage'] ).'"width="200" />';?> </td>
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
											<td>TIger Nixon</td>
										</tr>
										<tr>
											<th scope="row">Username</th>
											<td>nexTiger</td>
										</tr>
										<tr>
											<th scope="row">Account No.</th>
											<td>08-001-A</td>
										</tr>
										<tr>
											<th scope="row">Address</th>
											<td>Manila, Philippines</td>
										</tr>
										<tr>
											<th scope="row">Gender</th>
											<td>Male</td>
										</tr>
										<tr>
											<th scope="row">Date of Birth</th>
											<td>2011/04/25</td>
										</tr>
										<tr>
											<th scope="row">Contact No.</th>
											<td>09778711191</td>
										</tr>
										<tr>
											<th scope="row">Email</th>
											<td>NixonT@gmail.com</td>
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
								<label>Username</label>
								<input type="text" name="name" id="name" value="Tiger" class="form-control" />
								<br />
								<label>Last Name</label>
								<input type="text" name="name" id="name" value="Nixon" class="form-control" />
								<br />
								<label>Middle Name</label>
								<input type="text" name="name" id="name" value="" class="form-control" />
								<br />
								<label>Username</label>
								<input type="text" name="name" id="name" value="NexTiger" class="form-control" />
								<br />
								<label>Email</label>
								<input type="email" name="name" id="name" value="NixonT@gmail.com" class="form-control" />
								<br />
								<label>Address</label>
								<textarea name="address" id="address" class="form-control">Manila, Philippines</textarea>
								<br />
								<label>Select Gender</label>
								<select name="gender" id="gender" class="form-control">
									<option value="Male">Male</option>  
									<option value="Female">Female</option>
								</select>
								<br />
								<label>Date of Birth</label>
								<input type="Date" name="name" id="name" value="" class="form-control" />
								<br />  
								<label>Contact No</label>
								<input type="text" name="designation" value="09778711191" id="designation" class="form-control" />
								<br />
								<input type="submit" name="insert" id="insert" value="Cancel" class="btn btn-danger pull-right" />
								<input type="submit" name="insert" id="insert" value="Update" class="btn btn-success pull-right" />
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!--/Modal Edit-->
			<!--Modal Edit-->
			<div id="add_data_Modal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add Account</h4>
						</div>
						<div class="modal-body">
							<form method="post" id="insert_form" enctype="multipart/form-data">
								<label>Username</label>
								<input type="text" name="txtbxAdminAccountUsername" id="txtbxAdminAccountUsername" class="form-control" />
								<br />
								<label>First Name</label>
								<input type="text" name="txtbxAdminAccountFirstName" id="txtbxAdminAccountFirstName" class="form-control" />
								<br />
								<label>Last Name</label>
								<input type="text" name="txtbxAdminAccountLastName" id="txtbxAdminAccountLastName" class="form-control" />
								<br />
								<label>Middle Name</label>
								<input type="text" name="txtbxAdminAccountMiddleName" id="txtbxAdminAccountMiddleName" class="form-control" />
								<br />
								<label>Birthdate</label>
								<input type="date" name="dateAdminAccountBirthdate" id="dateAdminAccountBirthdate" class="form-control" />
								<br />
								<label>Password</label>
								<input type="password" name="txtbxAdminAccountPassword" id="txtbxAdminAccountPassword" class="form-control" />
								<br />
								<label>Image</label>
								<input type="file" name="fileAdminAccountImage" id="fileAdminAccountImage" class="form-control" />
								<br />
								<input type="submit" name="btnAdd" id="btnAdd" value="Add Account" class="btn btn-success pull-right" />
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						<?php
						if(isset($_POST['btnAdd'])) 
						{
					//including the database connection file
							include_once("connectionString.php");

							$VarcharAdminAccountUsername = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountUsername']);

							$VarcharAdminAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountFirstName']);

							$VarcharAdminAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountLastName']);

							$VarcharAdminAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountMiddleName']);

							$VarcharAdminAccountPassword = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountPassword']);

							$VarcharAdminAccountBirthdate = mysqli_real_escape_string($connect, $_POST['dateAdminAccountBirthdate']);

							$VarcharAdminAccountImage = addslashes(file_get_contents($_FILES["fileAdminAccountImage"]["tmp_name"]));



					//first name validation if input is a space 
					// checking empty fields
							if(empty($VarcharAdminAccountFirstName) || empty($VarcharAdminAccountUsername)) 
							{

								if(empty($VarcharAdminAccountFirstName))
								{
									$message = "Enter a First Name";
									echo "<script type='text/javascript'>alert('$message');</script>";
								}
								if(empty($VarcharAdminAccountUsername)) 
								{
									$message = "Enter a valid Admin Username";
									echo "<script type='text/javascript'>alert('$message');</script>";
								}
						//link to the previous page
								echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
							} 
							else 
							{ 
						// if all the fields are filled (not empty) 
						//insert data to database   

								if (!empty($VarcharAdminAccountImage)) {
									$queryAdd = "INSERT INTO `tbl_adminaccount` (`adminUserName`, `adminFirstName`, `adminMiddleName`, `adminLastName`, `adminBirthDate`, `adminPassword`, `adminImage`, `adminAccessLevel`) VALUES ('$VarcharAdminAccountUsername', '$VarcharAdminAccountFirstName', '$VarcharAdminAccountMiddleName', '$VarcharAdminAccountLastName', '$VarcharAdminAccountBirthdate', '$VarcharAdminAccountPassword', '$VarcharAdminAccountImage', 'Admin')";
								}
								else{
									$queryAdd = "INSERT INTO `tbl_adminaccount` (`adminUserName`, `adminFirstName`, `adminMiddleName`, `adminLastName`, `adminBirthDate`, `adminPassword`, `adminImage`, `adminAccessLevel`) VALUES ('$VarcharAdminAccountUsername', '$VarcharAdminAccountFirstName', '$VarcharAdminAccountMiddleName', '$VarcharAdminAccountLastName', '$VarcharAdminAccountBirthdate', '$VarcharAdminAccountPassword', NULL, 'Admin')";
								}
						//$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`, `studentDisplayPic`, `studentCoverPhoto`) VALUES ('435345643', '43534534', '345345', '3454353', '345345', NULL, NULL, NULL)";
								if(mysqli_query($connect, $queryAdd))
								{
									$message = "Student Account added successfully!";
									echo "<script type='text/javascript'>alert('$message');</script>";
							//redirectig to the display page. In our case, it is index.php
									echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";

								}
								else
								{
									$query = "SELECT * FROM tbl_adminaccount WHERE adminUserName='$VarcharAdminAccountUsername' ";
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
						}

						?>
					</div>
				</div>
			</div>
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