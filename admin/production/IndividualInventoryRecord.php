<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="assets/img/GCTS LOGO1.png">
	<title>Individual Inventory | OCPS</title>

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
							<h3>Individual Inventory Records<small></small></h3>
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
						<?php	
						$college = $_GET['id']; 
						$course = $_GET['course'];
						$query = "SELECT * FROM tbl_college WHERE collegeCode = '$college'";
						$queryArray = mysqli_query($connect,$query);
						while ($row = mysqli_fetch_array($queryArray)) {
							$collegeName = $row['collegeName'];
						}	
						?>
						<div class="col-md-12 col-sm-12 col-xs-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2><?php echo"$collegeName"; ?><small><?php echo"$college"; ?></small></h2>
									<div class="form-group col-md-5 col-sm-5 col-xs-5 pull-right">
										<form method="post">
											<select class="form-control" id="selectCourse" name="selectCourse" onchange="course()">
												<option value="all">------------- All Course ----------------</option>
												<?php 
												$query = "SELECT * FROM tbl_course WHERE collegeCode = '$college'";
												$queryArray = mysqli_query($connect, $query);
												while($row = mysqli_fetch_array($queryArray))
												{
													echo "<option name=".$row['courseCode']." id=".$row['courseCode']." value=".$row['courseCode']." >".$row['courseCode']." | ".$row['courseName']."</option>";
												}
												?>
											</select>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
										<!--<p class="text-muted font-13 m-b-30">
											The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
										</p>-->
										<table id="datatable-buttons" class="table table-striped table-bordered" style="width: 100%">
											<thead>
												<tr>
													<th></th>
													<th>Student Number</th>
													<th>First Name</th>
													<th>Middle Name</th>
													<th>Last Name</th>
													<th>Course</th>
													<th>Year</th>
													<th>Section</th>
												</tr>
											</thead>

											<tbody>
												<?php  
												include("connectionString.php");
												if($course == "all"){
													$queryStudent = "SELECT * FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE collegeCode = '$college'";
												}
												else{
													$queryStudent = "SELECT * FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE collegeCode = '$college' AND courseCode = '$course'";
												}
												$resultStudent = mysqli_query($connect, $queryStudent); 



												while($row = mysqli_fetch_array($resultStudent))  
												{  
													?>  
													<tr >
														<td width="110px">
															<?php 
															// if($row['age'] == 0 AND $row['sexuality'] == "Not Set")
															// {
															// 	echo "<div class='btn-group  btn-group-sm' >
															// 	<a href='IndividualInventoryRecordForm.php?id=".$row['studentNumber']."' class='btn btn-primary btn-sm '><i class='fa fa-pencil'></i></a>
															// 	</div>";	
															// }
															// else
															// {	
															echo "<div class='btn-group  btn-group-sm' >
															<a href='IndividualInventoryRecordFormEdit.php?id=".$row['studentNumber']."'class='btn btn-primary btn-sm '><i class='fa fa-pencil'></i></a>
															</div>";
															// }
															?>
															<!-- <div class="btn-group  btn-group-sm" >
																<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_note_Modal">
																	<i class="fa fa-edit"></i>
																</button>
															</div> -->


															<div class="btn-group  btn-group-sm" >
																<a href="individualInventoryRecordView.php?id=<?php echo $row['studentNumber'];?>" class="btn btn-info btn-sm "><i class="fa fa-list"></i></a>
															</div>

															

														</td>
														<td> <?php echo $row['studentNumber'];?> </td>
														<td> <?php echo $row['firstName'];?> </td>
														<td> <?php echo $row['middleName'];?> </td>
														<td> <?php echo $row['lastName'];?> </td>
														<td> <?php echo $row['courseCode'];?> </td>
														<td> <?php echo $row['year'];?> </td>
														<td> <?php echo $row['section'];?> </td>

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
													<th>Course</th>
													<th>Year</th>
													<th>Section</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
							<!--Extra Tables here-->
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
												<th scope="row">Address</th>
												<td>Taytay, Rizal, Philippines</td>
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
												<td>jaywelj@gmail.com</td>
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
									<input type="text" name="name" id="name" value="Jaywel" class="form-control" />
									<br />
									<label>Last Name</label>
									<input type="text" name="name" id="name" value="Javier" class="form-control" />
									<br />
									<label>Middle Name</label>
									<input type="text" name="name" id="name" value="Bisarra" class="form-control" />
									<br />
									<label>Student No.</label>
									<input type="text" name="name" id="name" value="2015-04778-MN-0" class="form-control" />
									<br />
									<label>Email</label>
									<input type="email" name="name" id="name" value="jaywelj@gmail.com" class="form-control" />
									<br />
									<label>Address</label>
									<textarea name="address" id="address" class="form-control">Taytay, Rizal, Philippines</textarea>
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
						</div>
					</div>
				</div>
				<!--/Modal Edit-->
				<!--Modal Add-->
				<div id="add_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Add Account</h4>
							</div>
							<div class="modal-body">
								<form method="post" id="insert_form">
									<label>First Name</label>
									<input type="text" name="name" id="name" class="form-control" />
									<br />
									<label>Last Name</label>
									<input type="text" name="name" id="name" class="form-control" />
									<br />
									<label>Middle Name</label>
									<input type="text" name="name" id="name" class="form-control" />
									<br />
									<label>Student Number</label>
									<input type="text" name="name" id="name" class="form-control" />
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
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--/Modal Add-->
				<!--Modal Add note-->
				<div id="add_note_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Add Notes</h4>
							</div>
							<div class="modal-body">
								<form method="post" id="insert_form">
									<label>Student Name</label>
									<input type="text" disabled="disabled" name="name" id="name" value="Jaywel Bisarra Javier" class="form-control" />
									<br />
									<label>Student No</label>
									<input type="text" disabled="disabled" name="name" id="name" value="2015-04778-MN-0" class="form-control" />
									<br />
									<label>Date</label>
									<input type="date" name="name" id="name" class="form-control" />
									<br />
									<label>Incident</label>
									<textarea name="address" id="address" class="form-control"></textarea>
									<br />
									<label>Remarks</label>
									<textarea name="address" id="address" class="form-control"></textarea>
									<br />

									<input type="submit" name="insert" id="insert" value="Cancel" class="btn btn-danger pull-right" />
									<input type="submit" name="insert" id="insert" value="Submit" class="btn btn-success pull-right" />
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--/Modal Add-->

				<!-- footer content -->
				<footer>
					<div class="pull-right">
						Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
					</div>
					<div class="clearfix">

					</div>
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
		<script type="text/javascript">
			function course(){
				var url = window.location.href;
				var url = new URL(url);
				var college = url.searchParams.get("id");
				var selected = document.getElementById('selectCourse').value;
				window.location.replace('IndividualInventoryRecord.php?id='+college+'&course='+selected);
			}
			var temp="<?php echo $course;?>"; 
			$("#selectCourse").val(temp);
		</script>

	</body>
	</html>