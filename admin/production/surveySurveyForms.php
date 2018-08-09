<?php

include("connectionString.php");
if(isset($_POST['btnCreate']))
{
	header("location: surveyManageSurveyForm.php");
}
if(isset($_POST['btnConfirmChange']))
{
	$surveyId = $_POST['idHidden'];
	$surveyStatus = $_POST['statusHidden'];
	$query="UPDATE `tbl_surveyform` SET `surveyFormStatus` = '$surveyStatus', `surveyFormIsDeployed` = '1' WHERE `tbl_surveyform`.`surveyFormId` = '$surveyId'";
	if(mysqli_query($connect,$query))
	{
		echo "<script>alert('$surveyId');</script>";
		echo "<script>alert('$surveyStatus');</script>";
	}
	else
	{
		echo "<script>alert('ERROR');</script>";
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
	<title>Survey Form | OCPS</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">

	<!-- Form builder Style-->
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
							<h3>Survey</h3>
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
								<form method = "post">
									<div class="x_title">
										<h2>Survey Forms</h2>
										<ul class="nav navbar-right">
											<input type="submit" value="Create Survey Form" name="btnCreate" id="btnCreate" class="btn btn-default btn-info"/>
										</ul>
										<div class="clearfix"></div>
									</div>
								</form>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Survey Form ID</th>
												<th>Survey Form Name</th>
												<th>Survey Form Details</th>
												<th>Survey Form Status</th>

											</tr>
										</thead>


										<tbody>
											<?php 
											include("connectionString.php");
											$queryCourse = "SELECT * FROM tbl_surveyform ORDER BY surveyFormId DESC";
											$resultCourse = mysqli_query($connect, $queryCourse);
											while ($row = mysqli_fetch_array($resultCourse)) {
												?>  
												<tr>
													<td width="14%" >
														<center>
															<button class="btn btn-default btn-info btn-view"  type="button" title="View" id=<?php echo $row['surveyFormId']; ?>><i class="fa fa-list"></i></button>
															<?php
															if($row['surveyFormIsDeployed'] == "0")
															{
																echo'
																<a title="Edit" class="btn btn-warning" href=surveyEditSurveyForm.php?id='.$row['surveyFormXML'].'><span class="fa fa-edit"></span></a>';
															}
															else
															{
																echo'
																<button class="btn btn-default" data-toggle="modal" data-target="#cant_edit_Modal" type="button"><span class="fa fa-edit"></span></button>';
															}
															?>
															<button class="btn btn-default btn-danger" type="button" title="Delete"><i class="fa fa-trash"></i></button>
														</center>
													</td>
													<td> <?php echo $row['surveyFormId']; ?> </td>
													<td> <?php echo $row['surveyFormName']; ?> </td>
													<td> <?php echo $row['surveyFormDetails']; ?> </td>

													
													<td>
														<center>
															<div class="form-group">
																<select class="form-control selectStatus" id="<?php echo $row['surveyFormId']; ?>" name="selectSurveyFormStatus">
																	<option style="color:blue;" 
																	<?php 
																	if($row['surveyFormStatus']=="Deployed")
																	{
																		echo "selected = ''";
																	} 
																	?>
																	>Deployed</option>
																	<option style="color:green;" 
																	<?php 
																	if($row['surveyFormStatus']=="Active")
																	{
																		echo "selected = ''";
																	} 
																	?>
																	>Active</option>
																	<option style="color:red;" 
																	<?php 
																	if($row['surveyFormStatus']=="Inactive")
																	{
																		echo "selected = ''";
																	} 
																	?>
																	>Inactive</option>
																</select>
															</div>
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
												<th>Survey Form ID</th>
												<th>Survey Form Name</th>
												<th>Survey Form Details</th>
												<th>Survey Form Status</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- /page content -->
			<!--Modal view-->
			<form method="post" enctype="multipart/form-data">
				<div id="view_data_Modal" class="modal fade">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right:-1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">Survey Form</h4>
							</div>
							<div class="modal-body" id="formRendered" style=" padding: 45px 90px 25px 90px;">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal view-->
			<!--Modal confirm status change-->
			<form method="post" enctype="multipart/form-data">
				<div id="confirm_data_Modal" class="modal fade" data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right:-1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h5 class="modal-title text-center">Confirm Survey Status Change</h5>
							</div>
							<center>
								<div class="modal-body" id="modalBody" style=" padding: 5px 15px 15px 15px;">

								</div>
							</center>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal-->
			<!--Modal cant edit survey form-->
			<form method="post" enctype="multipart/form-data">
				<div id="cant_edit_Modal" class="modal fade" data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right:-1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h5 class="modal-title text-center">Notice</h5>
							</div>
							<center>
								<div class="modal-body" id="modalBody" style=" padding: 5px 15px 15px 15px;">
									<hr>
									<h4>You cannot edit this survey form because it's already been set <strong> deployed/active</strong> ?</h4>
									<hr>

								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</center>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal-->

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
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>
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

	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/form-builder.min.js"></script>
	<script src="assets/js/form-render.min.js"></script>
	<script>
		$(document).ready(function(){
			$(document).on('click','.btn-view',function(){
				var surveyFormId = $(this).attr("id");
				$.ajax({
					url:"surveyRenderSurveyForm.php",
					method:"post",
					data:{surveyFormId:surveyFormId},
					success:function(data){
						$('#formRendered').html(data);
						$('#view_data_Modal').modal('show');
					}
				});
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$(document).on('change','.selectStatus',function(){
				var surveyFormId2 = $(this).attr("id");
				var statusSelected = $(this).find(":selected").text();
				if(statusSelected == "Deployed" || statusSelected == "Active")
				{
					$.ajax({
						url:"surveyConfirmChangeStatus.php",
						method:"post",
						data:{surveyFormId2:surveyFormId2,
							statusSelected:statusSelected},
							success:function(data){
								$('#modalBody').html(data);
								$('#confirm_data_Modal').modal('show');
							}
						});
				}
			});
			$(document).on('change','.selectStatus',function(){
				var surveyFormId2 = $(this).attr("id");
				var statusSelected = $(this).find(":selected").text();
				if(statusSelected == "Inactive")
				{
					$.ajax({
						url:"surveyConfirmChangeStatusInactive.php",
						method:"post",
						data:{surveyFormId2:surveyFormId2,
							statusSelected:statusSelected},
							success:function(data){
								$('#modalBody').html(data);
								$('#confirm_data_Modal').modal('show');
							}
						});
				}
			});
		});
	</script>
</body>
</html>
