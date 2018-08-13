<?php
session_start();
include ("connectionString.php");
$sessionEmail = $_SESSION['sessionAdminEmail'];
$queryGettingAdmin = "SELECT * FROM tbl_adminaccount WHERE `adminEmail` = '$sessionEmail' LIMIT 1";
$resultGettingAdmin = mysqli_query($connect, $queryGettingAdmin); 



while($row = mysqli_fetch_array($resultGettingAdmin))  
{

	$LoggedInAdminEmail = $row['adminEmail'];
	$LoggedInAdminID = $row['adminId'];
	$LoggedInAdminFirstName = $row['adminFirstName'];
	$LoggedInAdminMiddleName = $row['adminMiddleName'];
	$LoggedInAdminLastName = $row['adminLastName'];

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
	<title>Significant Notes Archive | OCPS</title>

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
							<h3>Manage Notes<small></small></h3>
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
									<h2>Significant Notes <small>Archived</small></h2>
									<ul class="nav navbar-right">
										<!-- <button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD NEW NOTE</button> -->
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Note ID</th>
												<th>Student</th>
												<th>Date</th>
												<th>Type Of Visitation</th>
												<th>Added by</th>
											</tr>
										</thead>


										<tbody>
											
											<?php  
											include("connectionString.php");  
											$querySignificantNotesOnly = "SELECT * FROM tbl_significantnotesarchive INNER JOIN tbl_personalinfo ON tbl_significantnotesarchive.studentNumber = tbl_personalinfo.studentNumber";

											$resultSignificantNotesOnly = mysqli_query($connect, $querySignificantNotesOnly);
											
											while($row = mysqli_fetch_array($resultSignificantNotesOnly))  
											{  
												
													?>  
													<tr>
														<td width="14%" >
															<center>
																<?php
																
																echo '<a title="Revive" class="btn btn-info" href="manageNotesStudentReturn.php?id='.$row["noteID"].'" onClick="return confirm("Are you sure you want to restore?")"><span class="fa fa-share-square"></span></a>
																';
																

																?>

																<?php

																echo '<a title="Delete" class="btn btn-danger" title="Delete" href="manageNotesStudentDelete.php?id='.$row["noteID"].'" onClick="return confirm("Are you sure you want to delete?")"><span class="glyphicon glyphicon-trash"></span></a>
																';


																?>

															</center>
														</td>
														<td>
															<?php
															echo $row['noteID'];
															?>
														</td>
														<td> 
															<?php
															echo $row['studentNumber']; echo "&nbsp; &nbsp;"; echo $row['firstName']; echo $row['lastName'];
															?>

														</td>
														<td> 
															<?php
															echo $row['noteDate'];
															?>
														</td>

														<?php
														$TableCategoryID = $row['categoryID'];
														$queryGettingCategoryName = "SELECT * FROM tbl_incidentcategory WHERE `categoryID` = ".$TableCategoryID." ";
														$resultGettingCategoryName = mysqli_query($connect, $queryGettingCategoryName); 
														while($res = mysqli_fetch_array($resultGettingCategoryName))  
														{ 
															?>
															<td> <?php echo $res['categoryName'];?> </td>
															<?php 
														}
														?>
														<?php 
														$VarcharAdminID = $row['adminId'];
														$TableAdminID = $row['adminId'];
														$queryGettingAdminID = "SELECT * FROM tbl_adminaccount WHERE `adminId` = ".$TableAdminID." ";
														$resultGettingAdminID = mysqli_query($connect, $queryGettingAdminID); 
														while($res2 = mysqli_fetch_array($resultGettingAdminID))  
														{ 


															?>
															<td> <?php echo $res2['adminFirstName']; ?> <?php echo $res2['adminLastName'];  ?></td>

															<?php
														}
													}

												?> 
											</tbody>
											<tfoot>
												<tr>
													<th></th>
													<th>Note ID</th>
													<th>Student</th>
													<th>Date</th>
													<th>Type Of Visitation</th>
													<th>Added by</th>
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

				<!--/Modal view-->
				<!--Modal Edit-->

				<!--/Modal Edit-->
				<!--Modal Add-->

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