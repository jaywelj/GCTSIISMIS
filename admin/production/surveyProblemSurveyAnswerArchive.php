<?php
include("connectionString.php");  
if(isset($_POST['btnSubmit']))
{
	$query = "INSERT INTO tbl_answerproblem SELECT * FROM tbl_answerproblemarchive";
	$query2 = "DELETE FROM tbl_answerproblemarchive";
	if(mysqli_query($connect,$query))
	{
		echo "<script type='text/javascript'>alert('Moving to Archive Successfull');</script>";
		if(mysqli_query($connect,$query2))
		{
			echo "<script type='text/javascript'>alert('Deleted');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive.php';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Query Error2');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive	.php';</script>";
		}	
	}
	else
	{
		echo "<script type='text/javascript'>alert('Query Error');</script>";
		echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive.php';</script>";
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
	<title>Survey Answers Archive | OCPS</title>

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
							<h3>Manage Answers Archive<small></small></h3>
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
									<h2>List of students <small></small></h2>
									<ul class="nav navbar-right">
										<ul class="nav navbar-right">
											<form method="post">
												<button name="btnSubmit" title="Restore All" class="btn btn-default btn-info" type="submit" onclick="return confirm('Are you sure you want to restore all answer records from archive?')">Restore All</button>
											</form>
										</ul>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Student Number</th>
												<th>Name</th>
												<th>Answer Date</th>
											</tr>
										</thead>
										<tbody>
											<?php  
											
											$query = "SELECT DISTINCT tbl_answerproblemarchive.studentNumber,firstName,lastName,middleName,answerDate FROM tbl_answerproblemarchive INNER JOIN tbl_personalinfo on tbl_answerproblemarchive.studentNumber = tbl_personalinfo.studentNumber";
											$result = mysqli_query($connect, $query); 
											while($row = mysqli_fetch_array($result))  
											{  
												?>  
												<tr>
													<td width="9%" >
														<center>
															<a title="Restore" class="btn btn-info" href="surveyProblemSurveyAnswerReturn.php?id=<?php echo$row['studentNumber']; ?>" onClick="return confirm('Are you sure you want to restore this student's answers?')"><span class="fa fa-share-square"></span></a>	

															<a class="btn btn-danger" type="button" title="Delete" href="surveyProblemSurveyAnswerDelete.php?id=<?php echo $row['studentNumber'];?>" onClick="return confirm('Delete all survey answers associated with this student?')"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </a>
														</center>
														
													</td>
													<td> <?php echo $row['studentNumber'];?> </td>
													<td> <?php echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];?> </td>
													<td> <?php echo $row['answerDate'];?> </td>
												</tr>  
												<?php
											}
											?> 
										</tbody>
										<tfoot>
											<tr>
												<th>Student Number</th>
												<th>Name</th>
												<th>Answer Date</th>
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