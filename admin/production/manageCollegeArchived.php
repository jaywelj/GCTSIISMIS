
<?php
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
	<title>College Archive | OCPS</title>

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
							<h3>Manage Archived College<small></small></h3>
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
									<h2>College(Archived) <small>Code And Name</small></h2>
									<ul class="nav navbar-right">
										<!-- <button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD COLLEGE</button> -->
									</ul>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>College Code</th>
												<th>College Name</th>
											</tr>
										</thead>


										<tbody>
											<?php  
											include("connectionString.php");  
											$queryCollege = "SELECT * FROM tbl_collegearchive";
											$resultCollege = mysqli_query($connect, $queryCollege); 
											while($row = mysqli_fetch_array($resultCollege))  
											{  
												?>  
												<tr>
													<td width="9%" >
														<center>
															<a title="Revive" class="btn btn-info" href="manageCollegeReturn.php?id=<?php echo$row['collegeCode']; ?>" onClick="return confirm('Are you sure you want to restore?')"><span class="fa fa-share-square"></span></a>

															<!-- <a title="Delete" class="btn btn-default btn-danger" href="manageCollegeArchivedDelete.php?id=<?php echo$row['collegeCode']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="fa fa-trash"></span></a>		 -->	

														</center>
													</td>
													<td> <?php echo $row['collegeCode'];?> </td>
													<td> <?php echo $row['collegeName'];?> </td>
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
			
			<!--/Modal Edit-->
			<!--Modal Add-->
			
			<!--/Modal Add-->
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
		$(document).on('click','.btn-edit',function(){
			var collegeCode = $(this).attr("id");
			$.ajax({
				url:"editCollegeDetails.php",
				method:"post",
				data:{collegeCode:collegeCode},
				success:function(data){
					$('#editCollegeDetails').html(data);
					$('#edit_data_Modal').modal('show');
				}
			});
		});
	</script>

</body>
</html>