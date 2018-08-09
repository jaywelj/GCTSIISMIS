<?php
if(isset($_POST['btnAdd'])) 
{
										//including the database connection file
	include_once("connectionString.php");

	$VarcharCourseCollege = mysqli_real_escape_string($connect, $_POST['selectCourseCollege']);

	$VarcharCourseCode = mysqli_real_escape_string($connect, $_POST['txtbxCourseCode']);

	$VarcharCourseName = mysqli_real_escape_string($connect, $_POST['txtbxCourseName']);



										//first name validation if input is a space 
										// checking empty fields
	if(empty($VarcharCourseCode) || empty($VarcharCourseName)) 
	{

		if(empty($VarcharCourseCode))
		{
			$message = "Enter a Course Code";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(empty($VarcharCourseName)) 
		{
			$message = "Enter a Course Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
												//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	{ 
												// if all the fields are filled (not empty) 
												//insert data to database   

		$queryAdd = "INSERT INTO `tbl_course` (`courseCode`, `courseName`, `collegeCode`) VALUES ('$VarcharCourseCode', '$VarcharCourseName', '$VarcharCourseCollege');";
		if(mysqli_query($connect, $queryAdd))
		{
			$message = "Student Account added successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
														//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'manageCourse.php';</script>";

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
				echo "<script type='text/javascript'>location.href = 'manageAccountCourse.php';</script>";
				echo ("Error description: " . mysqli_error($connect));

			}
		}
	}
}
if(isset($_POST['btnUpdate']))
{
	include_once("connectionString.php");

	$varcharCourseCode = mysqli_real_escape_string($connect, $_POST['txtbxEditCourseCode']);

	$varcharCourseCode2 = mysqli_real_escape_string($connect, $_POST['txtbxCourseCode']);

	$varcharCourseName = mysqli_real_escape_string($connect, $_POST['txtbxEditCourseName']);

	$varcharCourseCollege = mysqli_real_escape_string($connect, $_POST['selectCourseCollege']);



	
	
	// checking empty fields
	if(empty($varcharCourseCode)) 
	{
		$message = "Enter a Course Code";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else if(empty($varcharCourseName))
	{
		$message = "Enter a Course Name";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else 
	{ 
		$queryEdit = "UPDATE `tbl_course` SET `courseCode` = '$varcharCourseCode', `courseName` = '$varcharCourseName', `collegeCode` = '$varcharCourseCollege' WHERE courseCode = '$varcharCourseCode2' ";
		$message = "0";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
		if(!mysqli_query($connect, $queryEdit))
		{
			$message = "Query Error" ;
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo ("Error description: " . mysqli_error($connect));
		}
		else
		{
			echo ("Error description: " . mysqli_error($connect));
			$message = "Course Updated Successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>location.href = 'manageCourse.php';</script>";	
			echo ("Error description: " . mysqli_error($connect));

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
	<title>Course | OCPS</title>

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
							<h3>Manage Course<small></small></h3>
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
									<h2>Course <small>Code And Name</small></h2>
									<ul class="nav navbar-right">
										<button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD COURSE</button>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Course Code</th>
												<th>Course Name</th>
												<th>College</th>
											</tr>
										</thead>
										<tbody>
											<?php  
											include("connectionString.php");  
											$queryCourse = "SELECT * FROM tbl_course";
											$resultCourse = mysqli_query($connect, $queryCourse); 
											while($row = mysqli_fetch_array($resultCourse))  
											{  
												?>  
												<tr>
													<td width="9%" >
														<center>
															<button class="btn btn-default btn-warning btn-edit" type="button"  title="Edit" id=<?php echo $row['courseCode'];?>> <i class="fa fa-edit"></i></button>
															<a title="Delete" class="btn btn-default btn-danger" href="manageCourseDelete.php?id=<?php echo $row['courseCode']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="fa fa-trash"></span></a>	
														</center>
													</td>
													<td> <?php echo $row['courseCode'];?> </td>
													<td> <?php echo $row['courseName'];?> </td>
													<td> <?php echo $row['collegeCode'];?> </td>
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
			<!--Modal Edit-->
			<form method="post" enctype="multipart/form-data">
				<div id="edit_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">EDIT COURSE DETAILS</h4>
							</div>
							<div class="modal-body" id="editCourseDetails"    style=" padding: 25px 50px 5px 50px;">

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
								<h4 class="modal-title text-center">ADD NEW COURSE</h4>
							</div>
							<div class="modal-body" style=" padding: 25px 50px 5px 50px;">
								<?php

								// php select option value from database
								include("connectionString.php");

									// mysql select query
								$queryFromCollege = "SELECT * FROM `tbl_college`";

								// for method 1/
								$resultFromCollege = mysqli_query($connect, $queryFromCollege);


								?>
								<label>College</label>
								<select name="selectCourseCollege" id="selectCourseCollege" class="form-control">
									<option value="NULL" selected>select a college </option>
									<?php while($row = mysqli_fetch_array($resultFromCollege)):;?>
										<option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
									<?php endwhile;?>
								</select>
								<br />
								

								<label>Course Code</label>
								<input type="text" name="txtbxCourseCode" id="txtbxCourseCode" class="form-control" />
								<br />

								<label>Course Name</label>
								<input type="text" name="txtbxCourseName" id="txtbxCourseName" class="form-control" />
								<br />
								


							</div>
							<div class="modal-footer">
								<input type="submit" name="btnAdd" id="btnAdd" value="Add Course" class="btn btn-success" />
								<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
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

	<script>
		$(document).on('click','.btn-edit',function(){
			var courseCode = $(this).attr("id");
			$.ajax({
				url:"editCourseDetails.php",
				method:"post",
				data:{courseCode:courseCode},
				success:function(data){
					$('#editCourseDetails').html(data);
					$('#edit_data_Modal').modal('show');
				}
			});
		});
	</script>
</body>
</html>