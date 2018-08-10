<?php
session_start();
include("connectionString.php");
if(isset($_POST['btnFinish']))
{

	if(isset($_POST['problemInitial']))
	{
		$varcharProblemInitial = $_POST['problemInitial'];
		$varcharProblemInitial2 = $_POST['problemInitial2'];
		foreach ($varcharProblemInitial as $key => $value) {
			$query = "UPDATE `tbl_surveyofproblems` SET `problemName` = '$varcharProblemInitial[$key]' WHERE `tbl_surveyofproblems`.`problemname` = '$varcharProblemInitial2[$key]'";
			if(mysqli_query($connect,$query))
			{
				echo "<script>alert('$value');</script>";
			}
			else
			{
				echo "error:". mysqli_error($connect);
			}
		}
	}
	if(isset($_POST['problemNew']))
	{
		$varcharProblemNew = $_POST['problemNew'];
		foreach ($varcharProblemNew as $key => $value) {
			$query = "INSERT INTO tbl_surveyofproblems (`problemID`, `problemName`) VALUES (NULL,'$varcharProblemNew[$key]') ";
			if(mysqli_query($connect,$query))
			{
				echo "<script>alert('Successfully updated note #'+'$value');</script>";
			}
			else
			{
				echo "error:". mysqli_error($connect);
			}
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

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

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
								<div class="x_title">
									<h2>List of Problems</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="x_panel">
										<form method="post">
											<div class="form-horizontal form-label-left">

												<h1 style="margin-left:200px;"> Registered choices in the Problem Survey </h1>
												<?php
												$i = 0;
												$resultTest = mysqli_query($connect, "SELECT * FROM `tbl_surveyofproblems`");
												$noOfProblem = mysqli_num_rows($resultTest);
												echo "<script>var formCount = '$noOfProblem'</script>";
												while($resu = mysqli_fetch_array($resultTest)){

													$i ++ ;

													echo '
													<div class="form-group ">
													<label class="control-label col-md-2 col-sm-2">Problem # '.$i.':
													</label>
													<div class="col-md-6 col-sm-6">
													<input id="problemInitial[]" name="problemInitial[]" value="'.$resu['problemName'].'" class="date-picker form-control col-md-7 col-xs-12" type="text">
													<input id="problemInitial2[]" name="problemInitial2[]" value="'.$resu['problemName'].'" class="date-picker form-control col-md-7 col-xs-12" type="hidden" >
													</div>
													<div class="col-md-2 col-sm-2">
														<select>
															<option>HAHAHAHAHAHAHAHAHA</option>
														</select>
													</div>
													</div>';
												}
												?>
												
												<!--NEW FIELDS HERE-->
												<div id="newTestFields">

												</div>
												<!--END OF NEW FIELDS-->
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3"></label>
													<button class="btn btn-success col-md-6 col-sm-6" type="button"  onclick="education_fields();" >
														<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Problem
													</button>
												</div>
												<div class="item form-group">
													<div class="control-label col-md-3 col-sm-3 col-md-offset-7" >
														<button type="submit" name="btnFinish" id="btnFinish" class="btn btn-primary  ">Finish</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

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
	<script>
		var room = 0;
		function education_fields() {
			room++;
			formCount++;
			var objTo = document.getElementById('newTestFields')
			var divtest = document.createElement("div");
			var rdiv = 'removeclass'+room;
			divtest.setAttribute("class", "form-group "+rdiv);
			divtest.innerHTML = ' <div > </div><div class="form-group "><label class="control-label col-md-3 col-sm-3">Problem # '+formCount+':</label><div class="col-md-6 col-sm-6"><input id="problemNew[]" name="problemNew[]" value="" class="date-picker form-control col-md-7 col-xs-12" type="text"></div><button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus " aria-hidden="true"></span> </button></div>';

			objTo.appendChild(divtest)
		}
		function remove_education_fields(rid) {
			$('.removeclass'+rid).remove();
			formCount--;
		}
	</script>
</body>
</html>
