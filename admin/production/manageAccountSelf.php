<?php
include("errorReport.php");
session_start();

$varcharAdminEmail = $_SESSION['sessionAdminEmail'];
$varcharAdminAccessLevel = $_SESSION['sessionAdminAccessLevel'];

include("connectionString.php");  


if(isset($_POST['btnAdd'])) 
{
	//including the database connection file
	include_once("connectionString.php");

	$VarcharAdminAccountEmail = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountEmail']);

	$VarcharAdminAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountFirstName']);

	$VarcharAdminAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountLastName']);

	$VarcharAdminAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountMiddleName']);

	$VarcharAdminAccountPassword = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountPassword']);

	$VarcharAdminAccountCPassword = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountCPassword']);

	$VarcharAdminAccountC2Password = mysqli_real_escape_string($connect, $_POST['txtbxAdminAccountC2Password']);

	$VarcharAdminAccountBirthdate = mysqli_real_escape_string($connect, $_POST['dateAdminAccountBirthdate']);

	$VarcharAdminAccountImage = addslashes(file_get_contents($_FILES["fileAdminAccountImage"]["tmp_name"]));




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
	else if($VarcharAdminAccountPassword <> $VarcharAdminAccountCPassword) 
	{
		$message = "New password does not match";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else if($txtbxAdminAccountC2Password <> $varcharProfileAdminPassword)
	{
		$message = "Wrong password";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else 
	{ 
		// if all the fields are filled (not empty) 
		//insert data to database   
		if (!empty($VarcharAdminAccountImage)) {
			$queryAdd = "INSERT INTO `tbl_adminaccount` (`adminEmail`, `adminFirstName`, `adminMiddleName`, `adminLastName`, `adminBirthDate`, `adminPassword`, `adminImage`, `adminAccessLevel`) VALUES ('$VarcharAdminAccountEmail', '$VarcharAdminAccountFirstName', '$VarcharAdminAccountMiddleName', '$VarcharAdminAccountLastName', '$VarcharAdminAccountBirthdate', '$VarcharAdminAccountPassword', '$VarcharAdminAccountImage', 'Admin')";
		}
		else{
			$queryAdd = "INSERT INTO `tbl_adminaccount` (`adminEmail`, `adminFirstName`, `adminMiddleName`, `adminLastName`, `adminBirthDate`, `adminPassword`, `adminImage`, `adminAccessLevel`) VALUES ('$VarcharAdminAccountEmail', '$VarcharAdminAccountFirstName', '$VarcharAdminAccountMiddleName', '$VarcharAdminAccountLastName', '$VarcharAdminAccountBirthdate', '$VarcharAdminAccountPassword', NULL, 'Admin')";
		}
		if(mysqli_query($connect, $queryAdd))
		{
			$message = "Admin Account added successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'manageAccountAdminSelf.php';</script>";

		}
		else
		{
			$query = "SELECT * FROM tbl_adminaccount WHERE adminEmail='$VarcharAdminAccountEmail' ";
			$result = mysqli_query($connect, $query);

			if (mysqli_num_rows($result) == 1) {

				$message = "Student Number Already Registered";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$message = "Query Error " . mysqli_connect_error();
				echo "<script type='text/javascript'>alert('$message');</script>";
				//redirectig to the display page. In our case, it is index.php
				echo "<script type='text/javascript'>location.href = 'manageAccountAdminSelf.php';</script>";
			}
		}
	}
}
if(isset($_POST['btnEdit']))
{
	include_once("connectionString.php");

	$varcharAdminAccountEmail = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountEmail']);

	$varcharAdminAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountFirstName']);

	$varcharAdminAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountLastName']);

	$varcharAdminAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountMiddleName']);

	$VarcharAdminAccountPassword = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountPassword']);

	$VarcharAdminAccountCPassword = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountCPassword']);

	$VarcharAdminAccountC2Password = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountC2Password']);

	$varcharAdminAccountContactNo = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountContactNo']);

	$varcharAdminAccountAddress = mysqli_real_escape_string($connect, $_POST['txtbxEditAdminAccountAddress']);

	$varcharAdminAccountGender = mysqli_real_escape_string($connect, $_POST['optionEditAdminAccountGender']);

	$varcharAdminAccountBirthdate = mysqli_real_escape_string($connect, $_POST['dateEditAdminAccountBirthdate']);

	
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
	else if($VarcharAdminAccountPassword <> $VarcharAdminAccountCPassword) 
	{
		$message = "New password does not match";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else if($txtbxAdminAccountC2Password <> $varcharProfileAdminPassword)
	{
		$message = "Wrong password";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else 
	{ 
		// if all the fields are filled (not empty) 
		//insert data to database   
		if (!empty($varcharAdminAccountImage)) 
		{
			$queryEdit = "UPDATE `tbl_adminaccount` SET `adminFirstName` = '$varcharAdminAccountFirstName', `adminMiddleName` = '$varcharAdminAccountMiddleName', `adminLastName` = '$varcharAdminAccountLastName', `adminBirthDate` = '$varcharAdminAccountBirthdate', `adminGender` = '$varcharAdminAccountGender', `adminContactNo` = '$varcharAdminAccountContactNo', `adminImage` = '$varcharAdminAccountImage', `adminAddress` = '$varcharAdminAccountAddress' WHERE `adminEmail` = '$varcharProfileAdminEmail' ";
			$message = "0";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$queryEdit = "UPDATE `tbl_adminaccount` SET `adminFirstName` = '$varcharAdminAccountFirstName', `adminMiddleName` = '$varcharAdminAccountMiddleName', `adminLastName` = '$varcharAdminAccountLastName', `adminBirthDate` = '$varcharAdminAccountBirthdate', `adminGender` = '$varcharAdminAccountGender', `adminContactNo` = '$varcharAdminAccountContactNo', `adminAddress` = '$varcharAdminAccountAddress' WHERE `tbl_adminaccount`.`adminEmail` = '$varcharProfileAdminEmail'";
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
			echo "<script type='text/javascript'>location.href = 'manageAccountSelf.php';</script>";	
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
	<title>Profile | OCPS</title>

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
			<?php
			$queryAccessingProfile = "SELECT * FROM tbl_adminaccount WHERE adminEmail = '$varcharAdminEmail' LIMIT 1";
			$resultAccessingProfile = mysqli_query($connect, $queryAccessingProfile); 
			while($row = mysqli_fetch_array($resultAccessingProfile))
			{
				$varcharProfileAdminID = $row['adminId'];
				$varcharProfileAdminEmail = $row['adminEmail'];
				$varcharProfileAdminFirstName = $row['adminFirstName'];
				$varcharProfileAdminMiddleName = $row['adminMiddleName'];
				$varcharProfileAdminLastName = $row['adminLastName'];
				$varcharProfileAdminBirthDate = $row['adminBirthDate'];
				$varcharProfileAdminPassword = $row['adminPassword'];
				$varcharProfileAdminAccessLevel = $row['adminAccessLevel'];
				$varcharProfileAdminImage = $row['adminImage'];
				$varcharProfileAdminGender = $row['adminGender'];
				$varcharProfileAdminContactNo = $row['adminContactNo'];			
				$varcharProfileAdminAddress = $row['adminAddress'];
			}  
			?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>User Profile</h3>
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
									<h2>User Report <small>Activity report</small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
										<div class="profile_img">
											<div id="crop-avatar">
												<!-- Current avatar -->
												<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($varcharProfileAdminImage).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover; display: block;">'; ?>
												<!-- <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar"> -->
											</div>
										</div>
										<h4><?php echo $varcharProfileAdminFirstName.' '.$varcharProfileAdminMiddleName.' '.$varcharProfileAdminLastName; ?></h4>

										<ul class="list-unstyled user_data">
											<li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $varcharProfileAdminAddress; ?>
										</li>

										<li>
											<i class="fa fa-phone user-profile-icon"></i> <?php echo $varcharProfileAdminContactNo; ?>
										</li>
									</ul>

									<a class="btn btn-success" data-toggle="modal" data-target="#edit_self_data_Modal"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
									<br />

								</div>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div class="" role="tabpanel" data-example-id="togglable-tabs">
										<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
											<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
											</li>
											<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
											</li>
										</ul>
										<div id="myTabContent" class="tab-content">
											<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="x_panel">
														<div class="x_title">
															<h2>SIGNIFICANT NOTES</h2>
															<div class="clearfix"></div>
														</div>
														<!-- start recent activity -->
														<ul class="messages">
															<?php 
															$query = "SELECT * FROM `tbl_significantnotes` INNER JOIN tbl_personalinfo on tbl_significantnotes.studentNumber = tbl_personalinfo.studentNumber INNER JOIN tbl_studentaccount on tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE `adminId` = '4' ORDER BY noteDate DESC LIMIT 10";
															$queryArray = mysqli_query($connect,$query);
															while($rowNotes = mysqli_fetch_array($queryArray)){
																$month = date('M',strtotime($rowNotes['noteDate']));
																$day = date('d',strtotime($rowNotes['noteDate']));
																$year = date('Y',strtotime($rowNotes['noteDate']));
																echo'
																<li>
																<img src="data:image/jpeg;base64,'.base64_encode($rowNotes['studentDisplayPic']).'" class="avatar" alt="Avatar">
																<div class="message_date">
																<h3 class="date text-info">'.$day.'</h3>
																<p class="month">'.$month.'|'.$year.'</p>
																</div>
																<div class="message_wrapper">
																<h4 class="heading">'.$rowNotes['studentNumber'].' | '.$rowNotes['firstName'].' '.$rowNotes['middleName'].' '.$rowNotes['lastName'].'</h4>
																<blockquote class="message">'.$rowNotes['noteRemarks'].'</blockquote>
																<br />
																<p class="url">
																<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
																</p>
																</div>
																</li>';
															}
															?>

														</ul>
														<!-- end recent activity -->
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
												<div class="row">

													<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="x_panel">
															<div class="x_title">
																<h2>Admin ID : <?php echo $varcharProfileAdminID ; ?></h2>
																<div class="clearfix"></div>
															</div>

															<table id="datatable-buttons" class="table table-striped table-bordered">
																<?php 
																echo '

																<tbody>
																<tr>
																<th scope="row">Name</th>
																<td>'.$varcharProfileAdminFirstName.' '.$varcharProfileAdminMiddleName.' '.$varcharProfileAdminLastName.'</td>
																</tr>
																<tr>
																<th scope="row">Access Level</th>
																<td>'.$varcharProfileAdminAccessLevel.'</td>
																</tr>
																<tr>
																<th scope="row">Gender</th>
																<td>'.$varcharProfileAdminGender.'</td>
																</tr>
																<tr>
																<th scope="row">Birth Date</th>
																<td>'.$varcharProfileAdminBirthDate.'</td>
																</tr>	
																<tr>
																<th scope="row">Address</th>
																<td>'.$varcharProfileAdminAddress.'</td>
																</tr>
																<tr>
																<th scope="row">Contact No.</th>
																<td>'.$varcharProfileAdminContactNo.'</td>
																</tr>
																<tr>
																<th scope="row">Email</th>
																<td>'.$varcharProfileAdminEmail.'</td>
																</tr>';
																?>


															</tbody>

														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content -->
	<!-- page content -->
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Manage Your Profile, <?php echo $varcharProfileAdminFirstName ; ?> <small></small></h3>
				</div>

				<div class="title_right">
					<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
						<div class="input-group">
							<!-- <input type="text" class="form-control" placeholder="Search for..."> -->
													<!-- 	<span class="input-group-btn">
													<button class="btn btn-default" type="button">Go!</button>
												</span> -->
											</div>
										</div>
									</div>
								</div>

								<div class="clearfix"></div>

								<div class="row">

									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="x_panel">
											<div class="x_title">
												<h2>Admin ID : <?php echo $varcharProfileAdminID ; ?> <small> Access Level : <?php echo $varcharProfileAdminAccessLevel ; ?></small></h2>
												<ul class="nav navbar-right">
													<button class="btn btn-default btn-info" data-toggle="modal" data-target="#edit_self_data_Modal" type="button">Edit Your Account</button>
												</ul>
												<div class="clearfix"></div>
											</div>

											<table id="datatable-buttons" class="table table-striped table-bordered">
												<?php 
												echo '

												<tbody>


												<tr>
												<img src="data:image/jpeg;base64,'.base64_encode($varcharProfileAdminImage).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover; display: block; margin-left: auto; margin-right: auto;">
												</tr>
												<tr>
												<th scope="row">Name</th>
												<td>'.$varcharProfileAdminFirstName.' '.$varcharProfileAdminMiddleName.' '.$varcharProfileAdminLastName.'</td>
												</tr>
												<tr>
												<th scope="row">Access Level</th>
												<td>'.$varcharProfileAdminAccessLevel.'</td>
												</tr>
												<tr>
												<th scope="row">Gender</th>
												<td>'.$varcharProfileAdminGender.'</td>
												</tr>
												<tr>
												<th scope="row">Birth Date</th>
												<td>'.$varcharProfileAdminBirthDate.'</td>
												</tr>	
												<tr>
												<th scope="row">Address</th>
												<td>'.$varcharProfileAdminAddress.'</td>
												</tr>
												<tr>
												<th scope="row">Contact No.</th>
												<td>'.$varcharProfileAdminContactNo.'</td>
												</tr>
												<tr>
												<th scope="row">Email</th>
												<td>'.$varcharProfileAdminEmail.'</td>
												</tr>';
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
				<!--Modal Edit Self-->
				<form method="post" enctype="multipart/form-data">
					<div id="edit_self_data_Modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
									<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
									<h4 class="modal-title text-center">Edit your account, <?php echo $varcharProfileAdminFirstName ; ?></h4>
								</div>
								<div class="modal-body" style=" padding: 25px 50px 5px 50px;">

									<?php
									$queryEdit = "SELECT * FROM tbl_adminaccount WHERE adminEmail = '$varcharAdminEmail' LIMIT 1";
									$resultEdit = mysqli_query($connect, $queryEdit); 
									while($row = mysqli_fetch_array($resultEdit))
									{

										?>
										<?php 
										echo '
										<label for="fileEditAdminAccountImage" class="btn btn-default" style="border-radius:50%; margin-left:25%;" title="CHANGE PROFILE PICTURE">
										<img src="data:image/jpeg;base64,'.base64_encode($row['adminImage']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover;  border-radius:50%">
										</label>
										<br>
										<input type="text" name="txtbxEditAdminAccountEmail" id="txtbxEditAdminAccountEmail"  value="'.$row["adminEmail"].'" class="form-control" style="display:none;" />

										<i class="fa fa-pencil" style="margin-left:46%;"></i>
										<input type="file" id="fileEditAdminAccountImage" name="fileEditAdminAccountImage" accept="image/*" style="display:none" value="">
										<br />
										<label>First Name</label>
										<input type="text" name="txtbxEditAdminAccountFirstName" id="txtbxEditAdminAccountFirstName"  value="'.$row["adminFirstName"].'" class="form-control" />
										<br />
										<label>Middle Name</label>
										<input type="text" name="txtbxEditAdminAccountMiddleName" id="txtbxEditAdminAccountMiddleName" value="'.$row["adminMiddleName"].'" class="form-control" />
										<br />
										<label>Last Name</label>
										<input type="text" name="txtbxEditAdminAccountLastName" id="txtbxEditAdminAccountLastName"  value="'.$row["adminLastName"].'" class="form-control" />
										<br />
										<label>Address</label>
										<textarea name="txtbxEditAdminAccountAddress" id="txtbxEditAdminAccountAddress" class="form-control">'.$row["adminAddress"].'</textarea>
										<br />';
										?>
										<script>
											var gender = '<?php echo $row["adminGender"];?>';
											$("#optionEditAdminAccountGender").val(gender).change();
										</script>
										<?php 
										echo '
										<label>Select Gender</label>
										<select name="optionEditAdminAccountGender" id="optionEditAdminAccountGender" class="form-control">
										<option value="NA" disabled>NA</option>  
										<option value="M">Male</option>  
										<option value="F">Female</option>
										</select>
										<br />
										<label>Date of Birth</label>
										<input type="date" name="dateEditAdminAccountBirthdate" id="dateEditAdminAccountBirthdate" value="'.$row["adminBirthDate"].'" class="form-control" />
										<br />  
										<label>Contact No</label>
										<input type="number" name="txtbxEditAdminAccountContactNo" value="'.$row["adminContactNo"]. '" id="txtbxEditAdminAccountContactNo" class="form-control" />
										<br />
										<label>Password</label>
										<input type="password" name="txtbxEditAdminAccountPassword" value="'.$row["adminPassword"]. '" id="txtbxEditAdminAccountPassword" class="form-control" />
										<br />
										<label>Password Confirm New</label>
										<input type="password" name="txtbxEditAdminAccountCPassword" value="'.$row["adminPassword"]. '" id="txtbxEditAdminAccountCPassword" class="form-control" />

										<div id="divCheckPasswordMatch">
										</div>
										<br />
										<label>Enter Current Password</label>
										<input type="password" name="txtbxEditAdminAccountC2Password" id="txtbxEditAdminAccountC2Password" class="form-control" required/>
										<br />';';
										';

										?>
										<?php 
									}

									?>

								</div>
								<div class="modal-footer">
									<input type="submit" name="btnEdit" id="btnEdit" value="Edit Your Account" class="btn btn-success " />
									<button type="button" class="btn btn-danger  pull-right" data-dismiss="modal">Close</button> 
								</div>
							</div>
						</div>
					</div>
				</form>
				<!--/Modal Edit Self-->
<<<<<<< HEAD
				
				<!-- MODAL FOR MESSAGE -->
				<?php 
				require 'viewMessageModal.php';
				?>
				<!-- /MODAL FOR MESSAGE -->
=======
>>>>>>> cc1ba8941d3bb9ebd9b314cc71642e8c98a2752e


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
<<<<<<< HEAD

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
=======

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
>>>>>>> cc1ba8941d3bb9ebd9b314cc71642e8c98a2752e
		<script type="text/javascript">
			document.getElementById("txtbxEditAdminAccountPassword").onkeyup = function(){
				checkPassword();
			};
			document.getElementById("txtbxEditAdminAccountCPassword").onkeyup = function(){
				checkPassword();
			};
			function checkPassword(){
				var password = document.getElementById("txtbxEditAdminAccountPassword").value;
				var cpassword = document.getElementById("txtbxEditAdminAccountCPassword").value;
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