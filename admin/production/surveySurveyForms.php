<?php
if(isset($_POST['btnCreate']))
{
    header("location: surveyManageSurveyForm.php");
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

	<title>Gentelella Alela! | </title>

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
                            <form method="post">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Survey Forms</h2>
                                        <ul class="nav navbar-right">
                                            <input type="submit" value="Create Survey Form" name="btnCreate" id="btnCreate" class="btn btn-default btn-info"/>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable-buttons" class="table table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Survey Form ID</th>
                                                    <th>Survey Form Name</th>
                                                    <th>Survey Form Details</th>
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
                                                            <button class="btn btn-default btn-warning btn-edit" type="button"  title="Edit" id=<?php echo $row['surveyFormId']; ?>> <i class="fa fa-edit"></i></button>
                                                            <button class="btn btn-default btn-danger" type="button" title="Delete"><i class="fa fa-trash"></i></button>
                                                        </center>
                                                    </td>
                                                    <td> <?php echo $row['surveyFormId']; ?> </td>
                                                    <td> <?php echo $row['surveyFormName']; ?> </td>
                                                    <td> <?php echo $row['surveyFormDetails']; ?> </td>
                                                </tr>  
                                                <?php
                                                    }
                                                ?> 
                                            </tbody>
                                        </table>
                                        <button id="edit-form" class="btn btn-primary edit-form pull-right">Edit Form</button>
                                    </div>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>

			<!-- /page content -->
            <!--Modal view-->
			<form method="post" enctype="multipart/form-data">
				<div id="view_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right:-1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">Survey Form</h4>
							</div>
							<div class="modal-body" id="formRendered"    style=" padding: 5px 50px 5px 50px;">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button id="edit-form" class="btn btn-primary edit-form pull-right">Edit Form</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal view-->

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
</body>
</html>
