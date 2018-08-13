<?php
session_start();
include("connectionString.php");
if(isset($_POST['btnFinish']))
{

	if(isset($_POST['problemInitial']))
	{
		$varcharProblemInitial = $_POST['problemInitial'];
		$varcharProblemInitial2 = $_POST['problemInitial2'];
		$intSubCategoryId = $_POST['selectSubCategoryName'];
		foreach ($varcharProblemInitial as $key => $value) {
			$query = "UPDATE `tbl_surveyofproblems` SET `problemName` = '$varcharProblemInitial[$key]', subCategoryID = '$intSubCategoryId[$key]' WHERE `tbl_surveyofproblems`.`problemname` = '$varcharProblemInitial2[$key]' ";
			if(mysqli_query($connect,$query))
			{
				//echo "<script>alert('success');</script>";
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
		$intSubCategoryIdNew = $_POST['selectSubCategoryNameNew'];
		foreach ($varcharProblemNew as $key => $value) {
			$query = "INSERT INTO tbl_surveyofproblems (`problemID`, `problemName`, `subCategoryID`) VALUES (NULL,'$varcharProblemNew[$key]','$intSubCategoryIdNew[$key]') ";
			if(mysqli_query($connect,$query))
			{
				echo "<script>alert('Successfully created note #'+'$value');</script>";
			}
			else
			{
				echo "error:". mysqli_error($connect);
			}
		}
	}
}
$query = "SELECT * FROM tbl_surveyofproblems";
$queryArray = mysqli_query($connect,$query);
$i = 1;
while($row = mysqli_fetch_array($queryArray))
{
	$intSubCategory[$i] = $row['subCategoryID'];
	//echo "<script>alert('$intSubCategory[$i]');</script>";
	$i++;
	
}
$i = 1;

$query = "SELECT * FROM tbl_incidentsubcategory";
$query = mysqli_query($connect,$query);
$optionIdArray = array();
$optionNameArray = array();
while($resu2 = mysqli_fetch_array($query))
{
	array_push($optionIdArray, $resu2['subCategoryID']);
	array_push($optionNameArray, $resu2['subCategoryName']);
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
	<style type="text/css">
	th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #800;
		color: white;
	}
</style>
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
												<table class=" table table-striped">
													<thead>
														<tr>
															<th>
																Problem Number
															</th>
															<th>
																Problem Name
															</th>
															<th>
																Category
															</th>
															<th>
															</th>
														</tr>
													</thead>
													<tbody id="newTestFields">
														

														<h1 style="margin-left:200px;"> Registered choices in the Problem Survey </h1>
														<?php
														$i = 0;
														$resultTest = mysqli_query($connect, "SELECT * FROM `tbl_surveyofproblems`");
														$noOfProblem = mysqli_num_rows($resultTest);
														echo "<script>var formCount = '$noOfProblem'</script>";
														while($resu = mysqli_fetch_array($resultTest)){

															$i ++ ;

															echo '
															<tr>
															<td>
															<label class="control-label">Problem # '.$i.':
															</label>
															</td>
															<td>
															<input id="problemInitial[]" name="problemInitial[]" value="'.$resu['problemName'].'" class="date-picker form-control col-md-7 col-xs-12" type="text">
															<input id="problemInitial2[]" name="problemInitial2[]" value="'.$resu['problemName'].'" class="date-picker form-control col-md-7 col-xs-12" type="hidden" >
															</td>
															<td>
															<select class="form-control" name="selectSubCategoryName[]" id="selectSubCategoryName'.$i.'">
															';
															$query = "SELECT * FROM tbl_incidentsubcategory";
															$query = mysqli_query($connect,$query);
															while($resu2 = mysqli_fetch_array($query))
															{
																echo '<option value='.$resu2["subCategoryID"].'>'.$resu2["subCategoryName"].'</option>';
															}
															echo '
															</select>
															</td>
															<td>
															<a class="btn btn-danger" type="button" title="Archive" href="surveyProblemSurveyFormDelete.php?id='.$resu['problemID'].'" onClick="return confirm('."'Answers associated with the question will also be moved to archive.     Do you still wish to proceed? '".')"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </a>
															</td>

															</tr>
															<script>
															</script>';
														}
														?>
														<!--NEW FIELDS HERE-->
														<tr>
															<td style="text-align: center;">
																Add New Problem Fields
															</td>
															<td>
															</td>
															<td>
															</td>
														</tr>
													</tbody>
												</table>
												<!--END OF NEW FIELDS-->
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3"></label>
													<button class="btn btn-success col-md-4 col-sm-4" type="button"  onclick="education_fields();" >
														<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Problem Field
													</button>
													<button type="submit" name="btnFinish" id="btnFinish" class="btn btn-primary col-md-4 col-sm-4">Finish</button>
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
			var divtest = document.createElement("tr");
			var rdiv = 'removeclass'+room;
			divtest.setAttribute("class", rdiv);
			divtest.innerHTML ='<tr><td><label class="control-label">Problem # '+formCount+':</label></td><td><input id="problemNew[]" name="problemNew[]" value="" class="date-picker form-control col-md-7 col-xs-12" type="text"></td><td><select class="form-control" name="selectSubCategoryNameNew[]">'
			<?php foreach ($optionIdArray as $key => $value) {
				?>+'<option value=<?php echo $value; ?>><?php echo $optionNameArray[$key]; ?></option>'<?php
			}?>
			+'<select></td></tr><td><button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus " aria-hidden="true"></span> </button></td>';

			objTo.appendChild(divtest)
		}
		function remove_education_fields(rid) {
			$('.removeclass'+rid).remove();
			formCount--;
		}
	</script>
	<?php
	$ctr = 1;
	foreach($intSubCategory as $value)
	{
			//echo "<script>alert('$value');</script>";
		echo "<script>var temp='".$value."'</script>";
		echo '<script>$("#selectSubCategoryName"+'.$ctr.').val(temp);</script>';
		$ctr++;
	}
	?>
</body>
</html>
