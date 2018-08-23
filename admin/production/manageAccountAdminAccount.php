<?php
include("connectionString.php");

// include("errorReport.php");
if(isset($_POST['btnAddAccount'])) 
{
	//including the database connection file

	$VarcharAdminAccountEmail = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountEmail']);

	$VarcharAdminAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountFirstName']);

	$VarcharAdminAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountLastName']);

	$VarcharAdminAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountMiddleName']);

	$VarcharAdminAccountPassword = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountPassword']);

	$VarcharAdminAccountBirthdate = mysqli_real_escape_string($connect, $_POST['dateAdminAccountBirthdate']);

	$VarcharAdminAccountImage = addslashes(file_get_contents($_FILES["fileAdminAccountImage"]["tmp_name"]));

	$VarcharAdminAccountGender = mysqli_real_escape_string($connect, $_POST['optionAdminAccountGender']);

	$VarcharAdminAccountAddress = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountAddress']);

	$VarcharAdminAccountContactNo = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountContactNumber']);

	$VarcharAdminAccountDescription = mysqli_real_escape_string($connect, $_POST['txtareaAdminDescription']);

	//first name validation if input is a space 
	// checking empty fields
	if(empty($VarcharAdminAccountFirstName) || empty($VarcharAdminAccountEmail)) 
	{

		if(empty($VarcharAdminAccountFirstName))
		{
			$message = "Enter a First Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(empty($VarcharAdminAccountEmail)) 
		{
			$message = "Enter a valid Email";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	} 
	else 
	{ 
		// if all the fields are filled (not empty) 
		//insert data to database   
		if (!empty($VarcharAdminAccountImage)) {
			$message = "May Laman Na Image";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$queryAdd = "INSERT INTO `tbl_adminaccount` (`adminId`, `adminEmail`, `adminFirstName`, `adminMiddleName`, `adminLastName`, `adminBirthDate`, `adminPassword`, `adminImage`, `adminGender`, `adminContactNo`, `adminAddress`, `adminDescription`) VALUES (NULL, '$VarcharAdminAccountEmail', '$VarcharAdminAccountFirstName', '$VarcharAdminAccountMiddleName', '$VarcharAdminAccountLastName', '$VarcharAdminAccountBirthdate', '$VarcharAdminAccountPassword', '$VarcharAdminAccountImage', '$VarcharAdminAccountGender', '$VarcharAdminAccountContactNo', '$VarcharAdminAccountAddress', '$VarcharAdminAccountDescription')";
		}
		else{
			$message = "Walang Laman Na Image";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$queryAdd = "INSERT INTO `tbl_adminaccount` (`adminId`, `adminEmail`, `adminFirstName`, `adminMiddleName`, `adminLastName`, `adminBirthDate`, `adminPassword`, `adminImage`, `adminGender`, `adminContactNo`, `adminAddress`, `adminDescription`) VALUES (NULL, '$VarcharAdminAccountEmail', '$VarcharAdminAccountFirstName', '$VarcharAdminAccountMiddleName', '$VarcharAdminAccountLastName', '$VarcharAdminAccountBirthdate', '$VarcharAdminAccountPassword', NULL, '$VarcharAdminAccountGender', '$VarcharAdminAccountContactNo', '$VarcharAdminAccountAddress', '$VarcharAdminAccountDescription')";
		}

		$query = "SELECT * FROM tbl_adminaccount WHERE adminEmail='$VarcharAdminAccountEmail' ";
		$result = mysqli_query($connect, $query);

		if (mysqli_num_rows($result) == 1) {

			$message = "Student Number Already Registered";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$message = "Query Error " . mysqli_connect_error();
			echo "<script type='text/javascript'>alert('$message');</script>";
				//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";
		}
		else
		{
			if(mysqli_query($connect, $queryAdd))
			{
				$message = "Admin Account added successfully!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			//redirectig to the display page. In our case, it is index.php
				echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";
			}
			else
			{

				$message = "Admin Account query error";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo("Error description: " . mysqli_error($connect));
			// //redirectig to the display page. In our case, it is index.php
			// 	echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";
			}

		}
		
	}
}
if(isset($_POST['btnUpdate']))
{
	include_once("connectionString.php");

	$varcharAdminAccountEmail = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountEmail']);

	$varcharAdminAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountFirstName']);

	$varcharAdminAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountLastName']);

	$varcharAdminAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountMiddleName']);

	$varcharAdminAccountContactNo = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountContactNo']);

	$varcharAdminAccountAddress = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountAddress']);

	$varcharAdminAccountGender = mysqli_real_escape_string($connect, $_POST['optionEditAdminAccountGender']);

	$varcharAdminAccountBirthdate = mysqli_real_escape_string($connect, $_POST['dateEditAdminAccountBirthdate']);

	$varcharAdminAccountDescription = mysqli_real_escape_string($connect, $_POST['txtareaEditAdminDescription']);
	
	if(!empty($_FILES['fileEditAdminAccountImage']['tmp_name']) && file_exists($_FILES['fileEditAdminAccountImage']['tmp_name'])) 
	{
		$varcharAdminAccountImage = addslashes(file_get_contents($_FILES["fileEditAdminAccountImage"]["tmp_name"]));
	}
	else
	{
		$varcharAdminAccountImage = "";
	}
	// checking empty fields
	if(empty($varcharAdminAccountFirstName)) 
	{

		if(empty($varcharAdminAccountFirstName))
		{
			$message = "Enter a First Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	} 
	else 
	{ 
		// if all the fields are filled (not empty) 
		//insert data to database   
		if (!empty($varcharAdminAccountImage)) 
		{
			$queryEdit = "UPDATE `tbl_adminaccount` SET `adminFirstName` = '$varcharAdminAccountFirstName', `adminMiddleName` = '$varcharAdminAccountMiddleName', `adminLastName` = '$varcharAdminAccountLastName', `adminBirthDate` = '$varcharAdminAccountBirthdate', `adminGender` = '$varcharAdminAccountGender', `adminContactNo` = '$varcharAdminAccountContactNo', `adminImage` = '$varcharAdminAccountImage', `adminAddress` = '$varcharAdminAccountAddress',`adminDescription` = '$varcharAdminAccountDescription' WHERE `adminEmail` = '$varcharAdminAccountEmail' ";
			$message = "0";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$queryEdit = "UPDATE `tbl_adminaccount` SET `adminFirstName` = '$varcharAdminAccountFirstName', `adminMiddleName` = '$varcharAdminAccountMiddleName', `adminLastName` = '$varcharAdminAccountLastName', `adminBirthDate` = '$varcharAdminAccountBirthdate', `adminGender` = '$varcharAdminAccountGender', `adminContactNo` = '$varcharAdminAccountContactNo', `adminAddress` = '$varcharAdminAccountAddress',`adminDescription` = '$varcharAdminAccountDescription' WHERE `tbl_adminaccount`.`adminEmail` = '$varcharAdminAccountEmail'";
			$message = "1";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(!mysqli_query($connect, $queryEdit))
		{
			$message = "Query Error" ;
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo("Error description: " . mysqli_error($connect));
		}
		else
		{
			$message = "Admin Account Updated Successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";	
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
	<title>Admin Account | OCPS</title>

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
	<link href="assets/css/demo.css" rel="stylesheet">
	<link href="assets/css/demoRender.css" rel="stylesheet">
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
										<button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD ADMIN ACCOUNT</button>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Admin ID</th>
												<th>First Name</th>
												<th>Middle Name</th>
												<th>Last Name</th>
												<th>Image</th>
											</tr>
										</thead>


										<tbody>
											<?php  
											include("connectionString.php");  
											$queryCourse = "SELECT * FROM tbl_adminaccount ORDER BY adminId ASC";
											$resultCourse = mysqli_query($connect, $queryCourse); 
											while($row = mysqli_fetch_array($resultCourse))  
											{  
												?>  
												<tr>
													<td width="14%" >
														<center>
															<button class="btn btn-default btn-info btn-view"  type="button" title="View" id=<?php echo $row['adminEmail'];?>><i class="fa fa-list"></i></button>

															<button class="btn btn-default btn-warning btn-edit" type="button"  title="Edit" id=<?php echo $row['adminEmail'];?>> <i class="fa fa-edit"></i></button>

															<a title="Delete" class="btn btn-danger" title="Delete" href="manageAccountAdminAccountDelete.php?id=<?php echo $row['adminEmail']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
														</center>
													</td>
													<td> <?php echo $row['adminId'];?> </td>
													<td> <?php echo $row['adminFirstName'];?> </td>
													<td> <?php echo $row['adminMiddleName'];?> </td>
													<td> <?php echo $row['adminLastName'];?> </td>
													<td> 
														<center>
															<?php


															$VarcharStudentProfileImage = $row['adminImage'];
															if(empty($VarcharStudentProfileImage))
															{
																echo '
																<img src="assets/img/default-user.png" height="200" width="200" style="object-fit:cover;">
																';
															}
															else{
																echo '<img src="data:image/jpeg;base64,'.base64_encode($row['adminImage'] ).'" height="200" width="200" style="object-fit:cover;" />';
															}

															?>
														</center>
													</td>
												</tr>  
												<?php
											}
											?> 

										</tbody>
										<tfoot>
											<tr>
												<th></th>
												<th>Admin ID</th>
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
							<div class="modal-header" style="background: #800; color:#fff">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">ACCOUNT DETAILS</h4>
							</div>
							<div class="modal-body" id="accountDetails"    style=" padding: 5px 50px 5px 50px;">

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
								<h4 class="modal-title text-center">EDIT ACCOUNT DETAILS</h4>
							</div>
							<div class="modal-body" id="editAccountDetails"    style=" padding: 25px 50px 5px 50px;">

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
								<label>First Name</label>
								<input type="text" name="txtbxAdminAccountFirstName" id="txtbxAdminAccountFirstName" class="form-control" />
								<br />
								<label>Last Name</label>
								<input type="text" name="txtbxAdminAccountLastName" id="txtbxAdminAccountLastName" class="form-control" />
								<br />
								<label>Middle Name</label>
								<input type="text" name="txtbxAdminAccountMiddleName" id="txtbxAdminAccountMiddleName" class="form-control" />
								<br />
								<label>Select Gender</label>
								<select name="optionAdminAccountGender" id="optionAdminAccountGender" class="form-control">
									<option value="NA" disabled>NA</option>  
									<option value="M">Male</option>  
									<option value="F">Female</option>
								</select>
								<br />
								<label>Email</label>
								<input type="email" name="txtbxAdminAccountEmail" id="txtbxAdminAccountEmail" class="form-control" />
								<br />
								<label>Address</label>
								<input type="text" name="txtbxAdminAccountAddress" id="txtbxAdminAccountAddress" class="form-control" />
								<br />
								<label>Contact Number</label>
								<input type="number" name="txtbxAdminAccountContactNumber" id="txtbxAdminAccountContactNumber" class="form-control" />
								<br />
								<label>Birthdate</label>
								<input type="date" name="dateAdminAccountBirthdate" id="dateAdminAccountBirthdate" class="form-control" />
								<br />
								<label>Password</label>
								<input type="password" name="txtbxAdminAccountPassword" id="txtbxAdminAccountPassword" class="form-control" />
								<br />
								<label>Confirm Password</label>
								<input type="password" name="txtbxAdminAccountConfirmPassword" id="txtbxAdminAccountConfirmPassword" class="form-control" />
								<br />
								<label>Image</label>
								<input type="file" name="fileAdminAccountImage" id="fileAdminAccountImage" class="form-control" />
								<br />
								<label>Brief Introduction</label>
								<br />
								<textarea name="txtareaAdminDescription" id="txtareaAdminDescription" ></textarea>
								<br />

							</div>
							<div class="modal-footer">
								<input type="submit" name="btnAddAccount" id="btnAddAccount" value="Add Account" class="btn btn-success " />
								<button type="button" class="btn btn-danger  pull-right" data-dismiss="modal">Close</button> 
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal Edit-->
			<!--Modal Change Password-->
			<form method="post" enctype="multipart/form-data">
				<div id="change_password_Modal" class="modal fade">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">CHANGE PASSWORD</h4>
							</div>
							<div class="modal-body" style=" padding: 25px 50px 5px 50px;">
								<label>Password</label>
								<input type="password" name="txtbxAdminAccountPassword" id="txtbxAdminAccountPassword" class="form-control" />
								<br />
								<label>Password</label>
								<input type="password" name="txtbxAdminAccountPassword" id="txtbxAdminAccountPassword" class="form-control" />
								<br />
								<label>Confirm Password</label>
								<input type="password" name="txtbxAdminAccountConfirmPassword" id="txtbxAdminAccountConfirmPassword" class="form-control" />
								<br />
							</div>
							<div class="modal-footer">
								<input type="submit" name="btnAdd" id="btnChangePassword" value="Confirm" class="btn btn-success "  />
								<button type="button" class="btn btn-danger  pull-right" data-dismiss="modal">Close</button> 
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal Change Password-->
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
				var adminEmail = $(this).attr("id");
				$.ajax({
					url:"viewAccountDetails.php",
					method:"post",
					data:{adminEmail:adminEmail},
					success:function(data){
						$('#accountDetails').html(data);
						$('#view_data_Modal').modal('show');
					}
				});
			});
			$(document).on('click','.btn-edit',function(){
				var adminEmail = $(this).attr("id");
				$.ajax({
					url:"editAccountDetails.php",
					method:"post",
					data:{adminEmail:adminEmail},
					success:function(data){
						$('#editAccountDetails').html(data);
						$('#edit_data_Modal').modal('show');
					}
				});
			});
			$(document).on('click','.btn-change-password',function(){
				var adminEmail = $(this).attr("id");
				$('#change_password_Modal').modal('show');
			});
		});
	</script>


</body>
</html>