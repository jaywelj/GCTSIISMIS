<?php
session_start();
include ("connectionString.php");
$sessionEmail = $_SESSION['sessionAdminEmail'];
$queryGettingAdmin = "SELECT * FROM tbl_adminaccount WHERE `adminEmail` = '$sessionEmail' LIMIT 1";
$resultGettingAdmin = mysqli_query($connect, $queryGettingAdmin); 

if(isset($_POST['btnAdd']))
{	
	$varcharProgramImage = "";
	$varcharProgramName = mysqli_real_escape_string($connect, $_POST['txtbxProgramName']);
	$varcharProgramDescription = mysqli_real_escape_string($connect, $_POST['txtareaProgramDescription']);
	$varcharProgramSubCategory = $_POST['txtareaProgramSubCategory'];
	if($_FILES["fileProgramImage"]==NULL)
	{
		
	}
	else
	{
		$varcharProgramImage =  addslashes(file_get_contents($_FILES["fileProgramImage"]["tmp_name"]));
	}

	$varcharProgramSubCategoryReplaced = str_replace('"', "'", $varcharProgramSubCategory);

	echo "<script type='text/javascript'>alert('$varcharProgramSubCategoryReplaced');</script>";

	$varcharProgramSubCategoryReplaced2 = str_replace("'", "", $varcharProgramSubCategoryReplaced);

	echo "<script type='text/javascript'>alert('$varcharProgramSubCategoryReplaced2');</script>";

	$varcharProgramSubCategoryArray = explode(",",$varcharProgramSubCategoryReplaced2);


	if(empty($varcharProgramName)) 
	{

		if(empty($varcharProgramName))
		{
			$message = "No Program Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	else
	{

		if (!empty($varcharProgramImage))
		{
			$queryInsertingProgram = "INSERT INTO `tbl_recommendedprogram` (`programID`, `programName`, `programDescription`, `programImage`) VALUES (NULL, '$varcharProgramName', '$varcharProgramDescription', '$varcharProgramImage')";
		}
		else	
		{
			$queryInsertingProgram = "INSERT INTO `tbl_recommendedprogram` (`programID`, `programName`, `programDescription`, `programImage`) VALUES (NULL, '$varcharProgramName', '$varcharProgramDescription', NULL)";
		}

		if(mysqli_query($connect, $queryInsertingProgram))
		{
			$message = "Program added successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";

		}
		else
		{
			$message = "Program Error";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo mysqli_error($connect); 
		}
		foreach($varcharProgramSubCategoryArray as $InsertingProgramSubCategory) 
		{

			$queryInsertingProgramSubCategory = "INSERT INTO `tbl_programcategory` (`programCategoryId`, `programName`, `subCategoryName`) VALUES (NULL, '$varcharProgramName', '$InsertingProgramSubCategory')";

			if (mysqli_query($connect, $queryInsertingProgramSubCategory)) {
				$message = "Successfully Added In Program Sub Category";
				echo "<script type='text/javascript'>alert('$message');</script>";

				echo "<script type='text/javascript'>location.href = 'managePrograms.php';</script>";                           
			}
			else
			{
				$message = "Query Error Adding Program Sub Category";
				echo "<script type='text/javascript'>alert('$message');</script>";

				echo "<script type='text/javascript'>alert('$InsertingProgramSubCategory');</script>";
													//redirectig to the display page. In our case, it is index.php
			}
		}
	}
}


if(isset($_POST['btnUpdate']))
{
	include_once("connectionString.php");

	$varcharEditProgramImage = "";

	$varcharEditProgramID = mysqli_real_escape_string($connect, $_POST['hiddenEditProgramID']);

	$varcharEditProgramName = mysqli_real_escape_string($connect, $_POST['txtbxEditProgramName']);

	$varcharEditProgramDescription = mysqli_real_escape_string($connect, $_POST['txtareaEditProgramDescription']);

	$varcharEditProgramSubCategory = $_POST['txtareaEditProgramSubCategory'];

	if($_FILES["fileProgramImage"]==NULL)
	{
		
	}
	else
	{
		$varcharEditProgramImage =  addslashes(file_get_contents($_FILES["fileEditProgramImage"]["tmp_name"]));
	}

	

	$varcharEditProgramSubCategoryReplaced = str_replace('"', "'", $varcharEditProgramSubCategory);

	echo "<script type='text/javascript'>alert('$varcharEditProgramSubCategoryReplaced');</script>";

	$varcharEditProgramSubCategoryReplaced2 = str_replace("'", "", $varcharEditProgramSubCategoryReplaced);

	echo "<script type='text/javascript'>alert('$varcharEditProgramSubCategoryReplaced2');</script>";

	$varcharEditProgramSubCategoryArray = explode(",",$varcharEditProgramSubCategoryReplaced2);


	// checking empty fields
	if(empty($varcharEditProgramName)) 
	{

		if(empty($varcharEditProgramName))
		{
			$message = "No Program Name";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else 
	{ 
		if (!empty($varcharProgramImage))
		{
			$queryInsertingProgram = "UPDATE `tbl_recommendedprogram` SET `programName` = '$varcharEditProgramName', `programDescription` = '$varcharEditProgramDescription', `programImage` = '$varcharEditProgramImage' WHERE `tbl_recommendedprogram`.`programID` = '$varcharEditProgramID'";
		}
		else
		{

			$queryInsertingProgram = "UPDATE `tbl_recommendedprogram` SET `programName` = '$varcharEditProgramName', `programDescription` = '$varcharEditProgramDescription' WHERE `tbl_recommendedprogram`.`programID` = '$varcharEditProgramID'";
		}
		if(mysqli_query($connect, $queryInsertingProgram))
		{
			$message = "Program added successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";

			$queryDeleting ="DELETE FROM `tbl_programcategory` WHERE `tbl_programcategory`.`programName` = '$varcharEditProgramName'";
			if(mysqli_query($connect, $queryInsertingProgram))
			{
				

				if (mysqli_query($connect, $queryEditInsertingProgramSubCategory)) {
					$message = "Successfully Added In Program Sub Category";
					echo "<script type='text/javascript'>alert('$message');</script>";

					echo "<script type='text/javascript'>location.href = 'managePrograms.php';</script>";                           
				}
				else
				{
					$message = "Query Error Adding Program Sub Category";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo $InsertingEditProgramSubCategory;

					echo "<script type='text/javascript'>alert('$InsertingProgramSubCategory');</script>";
													//redirectig to the display page. In our case, it is index.php
				}
				

			}
		}
		else
		{
			$message = "Program Error";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}


	}
}

?>


<?php
$SubCategoryString = "";
$queryGettingSubCategory = "SELECT * FROM tbl_incidentsubcategory";
$resultGettingSubCategory = mysqli_query($connect,$queryGettingSubCategory);
while ($row = mysqli_fetch_array($resultGettingSubCategory))
{
	$SubCategoryArray[] = $row['subCategoryName'];
}
foreach($SubCategoryArray as $SubCategoryValue) 
{
	$SubCategoryString .= '"'.$SubCategoryValue.'",' ;
} 
// echo "<script type='text/javascript'>alert('$SubCategoryString');</script>";

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
	<title>Programs | OCPS</title>

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
	<!-- Tagify CSS -->
	<link href="js/tagify/dist/tagify.css" rel="stylesheet">
	<!--Noty-->
	<link href="assets/lib/noty.css" rel="stylesheet">
	
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
							<h3>Manage Programs<small></small></h3>
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
									<h2>Manage Programs <small>Seminars and Programs</small></h2>
									<ul class="nav navbar-right">
										<button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button" onclick="AddModalScript()">ADD NEW PROGRAM</button>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Program ID</th>
												<th>Program Name</th>
												<th>Description </th>
												<th>Topic Tackling</th>
											</tr>
										</thead>


										<tbody>

											<?php  
											include("connectionString.php");  
											$queryManageProgram = "SELECT * FROM tbl_recommendedprogram";
											$resultManageProgram = mysqli_query($connect, $queryManageProgram); 
											while($row = mysqli_fetch_array($resultManageProgram))  
											{  
												?>   
												<tr>
													<td width="15%" >
														<center>
															<button class="btn btn-default btn-info btn-view" type="button" title="View" id=<?php echo $row['programID'];?>><i class="fa fa-list"></i></button>

															<button class="btn btn-default btn-warning btn-edit" type="button" title="Edit" id=<?php echo $row['programID'];?>> <i class="fa fa-edit"></i></button>

															<a title="Delete" class="btn btn-danger" title="Delete" href="manageProgramsDelete.php?id=<?php echo $row['programID']; ?>&id2=<?php echo $row['programName']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
														</center>
													</td>
													<td width="5%"> <?php echo $row['programID'];?> </td>
													<td width="20%"> <?php echo $row['programName'];?></td>
													<td width="35%"> <?php echo $row['programDescription'];?> </td>
													<?php 
													$tempProgramName = $row['programName'];
													$queryProgram = "SELECT * FROM tbl_programcategory WHERE `programName` = '$tempProgramName' ";
													$resultProgram = mysqli_query($connect, $queryProgram); 

													?>
													<td width="35%"><?php while($res = mysqli_fetch_array($resultProgram))  
													{ ?> <?php echo $res['subCategoryName'];?><?php echo " "; ?> <?php } ?></td>
													<?php
												}
												{
												}
												?>
											</tr> 
										</tbody>
										<tfoot>
											<tr>
												<th></th>
												<th>Program ID</th>
												<th>Program Name</th>
												<th>Description </th>
												<th>Topic Tackling</th>
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
			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
			<?php

			$queryGettingSuggestions = "SELECT *,tbl_incidentsubcategory.subCategoryName AS subCategoryNameWithoutProgram FROM tbl_incidentsubcategory LEFT JOIN tbl_programcategory ON tbl_programcategory.subCategoryName = tbl_incidentsubcategory.subCategoryName WHERE `tbl_programcategory`.programName IS NULL";
			
			$resultGettingSuggestions = mysqli_query($connect,$queryGettingSuggestions);

			$ProgramWithoutTopicString = "";
			$ProgramWithoutTopicArray[] = "";
			while ($row = mysqli_fetch_array($resultGettingSuggestions))
			{
				$ProgramWithoutTopicArray[] = $row['subCategoryNameWithoutProgram'];
			}
			$ProgramWithoutTopicValue = implode(",",$ProgramWithoutTopicArray);
			$ProgramWithoutTopicValue = ltrim($ProgramWithoutTopicValue, ",");
			if(mysqli_num_rows($resultGettingSuggestions) == 0) {
				$message = "All Topics Has A Program!";
				echo "<script type='text/javascript'>var notyMessageTopicStatus = '$message'; var topicFlag='true';</script>";     
			}
			else{
				$message = "There is no program assigned to ".$ProgramWithoutTopicValue."";
				echo "<script type='text/javascript'>var notyMessageTopicStatus = '$message'; var topicFlag='false';</script>";  
			}

			$queryGettingSuggestionsBasedOnNumberOfSubCategoryIDInSignificantNotes = "SELECT *,tbl_significantnotes.subCategoryID,COUNT(*) as count FROM tbl_significantnotes where noteDate > DATE_SUB(now(), INTERVAL 6 MONTH) GROUP BY subCategoryID ORDER BY count DESC";
			$resultGettingSuggestionsBasedOnNumberOfSubCategoryIDInSignificantNotes = mysqli_query($connect, $queryGettingSuggestionsBasedOnNumberOfSubCategoryIDInSignificantNotes);

			$ProgramWithoutTopicString = "";
			while ($row = mysqli_fetch_array($resultGettingSuggestionsBasedOnNumberOfSubCategoryIDInSignificantNotes))
			{
				$CountedValueArray[] = $row['count'];
				$SubCategoryIDArray[] = $row['subCategoryID'];
			}
			$CountedValueFirstElement = array_shift( $CountedValueArray );
			$CountedSubCategoryIDFirstElement = array_shift( $SubCategoryIDArray );

			$queryGettingSubCategoryName = "SELECT * FROM tbl_incidentsubcategory WHERE subCategoryID = '$CountedSubCategoryIDFirstElement'";
			$resultGettingSubCategoryName = mysqli_query($connect,$queryGettingSubCategoryName);
			while ($row = mysqli_fetch_array($resultGettingSubCategoryName))
			{
				$SubCategoryName = $row['subCategoryName'];
			}
			$message = "The most hottest topic recorded in significant notes is ".$SubCategoryName." with a total of ".$CountedValueFirstElement." records this past 6 months ";
			echo "<script>var notyMessage = '$message';</script>";
//PROBLEM
			//START
			$queryGettingSuggestionsBasedOnNumberOfSubCategoryIDInMessage = "SELECT *,tbl_message.subCategoryID,COUNT(*) as count FROM tbl_message where messageDateSent > DATE_SUB(now(), INTERVAL 6 MONTH) GROUP BY subCategoryID ORDER BY count DESC";
			$resultGettingSuggestionsBasedOnNumberOfSubCategoryIDInMessage = mysqli_query($connect, $queryGettingSuggestionsBasedOnNumberOfSubCategoryIDInMessage);

			while ($row = mysqli_fetch_array($resultGettingSuggestionsBasedOnNumberOfSubCategoryIDInMessage))
			{
				$CountedValueArray2[] = $row['count'];
				$SubCategoryIDArray2[] = $row['subCategoryID'];
			}
			$CountedValueFirstElement2 = array_shift( $CountedValueArray2 );
			$CountedSubCategoryIDFirstElement2 = array_shift( $SubCategoryIDArray2 );

			$queryGettingSubCategoryName2 = "SELECT * FROM tbl_incidentsubcategory WHERE subCategoryID = '$CountedSubCategoryIDFirstElement2'";
			$resultGettingSubCategoryName2 = mysqli_query($connect,$queryGettingSubCategoryName2);
			while ($row = mysqli_fetch_array($resultGettingSubCategoryName2))
			{
				$SubCategoryName2 = $row['subCategoryName'];
			}
			$message2 = "The most hottest topic recorded in messages is ".$SubCategoryName2." with a total of ".$CountedValueFirstElement2." records this past 6 months ";

			// echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>var notyMessage2 = '$message2';</script>";
			//End 2 
			$queryGettingSuggestionsBasedOnSurvey = "SELECT *,SUM(answerProblem) AS talliedAnswers, (SUM(answerProblem) / (SELECT COUNT(*) FROM tbl_answerproblem )) * 100 AS 'averageRating', COUNT(tbl_surveyofproblems.problemID) AS countedBiggestProblem FROM tbl_answerproblem INNER JOIN tbl_surveyofproblems ON tbl_answerproblem.problemID = tbl_surveyofproblems.problemID where answerDate > DATE_SUB(now(), INTERVAL 6 MONTH) GROUP BY tbl_answerproblem.problemID ORDER BY talliedAnswers DESC LIMIT 5";
			$resultGettingSuggestionsBasedOnSurvey = mysqli_query($connect, $queryGettingSuggestionsBasedOnSurvey);

			while ($row = mysqli_fetch_array($resultGettingSuggestionsBasedOnSurvey))
			{
				$AverageRatingArray3[] = $row['averageRating'];
				$SubCategoryIDArray3[] = $row['subCategoryID'];
				$ProblemNameArray3[] = $row['problemName'];
				// $message = $row['averageRating'];
				// echo "<script type='text/javascript'>alert('$message');</script>";
			}
			$AverageRatingFirstElement3 = array_shift( $AverageRatingArray3 );
			$CountedSubCategoryIDFirstElement3 = array_shift( $SubCategoryIDArray3 );
			$ProblemNameFirstElement3 = array_shift($ProblemNameArray3);

			$queryGettingSubCategoryName3 = "SELECT * FROM tbl_incidentsubcategory WHERE subCategoryID = '$CountedSubCategoryIDFirstElement3'";
			$resultGettingSubCategoryName3 = mysqli_query($connect,$queryGettingSubCategoryName3);
			while ($row = mysqli_fetch_array($resultGettingSubCategoryName3))
			{
				$SubCategoryName3 = $row['subCategoryName'];
			}

			
			
			$message3 = "The most severe problem in the survey is ".$ProblemNameFirstElement3." with a percentage severity of ".$AverageRatingFirstElement3."% that corresponds to the Topic ".$SubCategoryName3." this past 6 months ";

			// echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>var notyMessage3 = '$message3';</script>";

			$queryGettingSuggestionsBasedOnSurvey2 = "SELECT *,SUM(answerProblem) AS talliedAnswers, (SUM(answerProblem) / (SELECT COUNT(*) FROM tbl_answerproblem )) * 100 AS 'AverageRating', COUNT(tbl_surveyofproblems.problemID) AS countedBiggestProblem FROM tbl_answerproblem INNER JOIN tbl_surveyofproblems ON tbl_answerproblem.problemID = tbl_surveyofproblems.problemID where answerDate > DATE_SUB(now(), INTERVAL 6 MONTH) GROUP BY tbl_answerproblem.problemID ORDER BY countedBiggestProblem DESC,talliedAnswers DESC LIMIT 5";
			$resultGettingSuggestionsBasedOnSurvey2 = mysqli_query($connect, $queryGettingSuggestionsBasedOnSurvey2);

			while ($row = mysqli_fetch_array($resultGettingSuggestionsBasedOnSurvey2))
			{
				$CountedProblemNameArray4[] = $row['problemName'];
				$CountedBiggestProblemArray4[] = $row['countedBiggestProblem'];
				$SubCategoryIDArray4[] = $row['subCategoryID'];
			}
			$CountedBiggestProblemFirstElement4 = array_shift( $CountedBiggestProblemArray4 );
			$CountedSubCategoryIDFirstElement4 = array_shift( $SubCategoryIDArray4 );
			$CountedProblemNameFirstElement4 = array_shift( $CountedProblemNameArray4 );

			$queryGettingSubCategoryName4 = "SELECT * FROM tbl_incidentsubcategory WHERE subCategoryID = '$CountedSubCategoryIDFirstElement4'";
			$resultGettingSubCategoryName4 = mysqli_query($connect,$queryGettingSubCategoryName4);
			while ($row = mysqli_fetch_array($resultGettingSubCategoryName4))
			{
				$SubCategoryName4 = $row['subCategoryName'];
			}

			$message4 = "The most selected problem in the survey is ".$CountedProblemNameFirstElement4." with it being picked ".$CountedBiggestProblemFirstElement4."times that corresponds to the Topic ".$SubCategoryName4." this past 6 months ";

			// echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script>var notyMessage4 = '$message4';</script>";



			while($row = mysqli_fetch_array($resultGettingAdmin))  
			{

				$LoggedInAdminEmail = $row['adminEmail'];
				$LoggedInAdminID = $row['adminId'];
				$LoggedInAdminFirstName = $row['adminFirstName'];
				$LoggedInAdminMiddleName = $row['adminMiddleName'];
				$LoggedInAdminLastName = $row['adminLastName'];

			}
			?>
			<!--Modal view-->
			<form method="post" enctype="multipart/form-data">
				<div id="view_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">STUDENT SIGNIFICANT NOTES</h4>
							</div>
							<div class="modal-body" id="programDetails"    style=" padding: 5px 50px 5px 50px;">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal view-->
			<!--Modal Edit-->
			<form method="post" enctype="multipart/form-data">
				<div id="edit_data_Modal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
								<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
								<h4 class="modal-title text-center">EDIT STUDENT ACCOUNT DETAILS</h4>
							</div>
							<div class="modal-body" id="editPrograms"    style=" padding: 25px 50px 5px 50px;">

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
								<h4 class="modal-title text-center">ADD NEW PROGRAM</h4>
							</div>
							<div class="modal-body" style=" padding: 25px 50px 5px 50px;">
								<?php
								if(mysqli_num_rows($resultGettingSuggestions) == 0) 
								{
									$message = "All Topics Has A Program!";
									echo '
									<div class="alert alert-success fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Congratulations!</strong> '.$message.'; 
									</div>';   
								}
								else
								{
									$message = "There is no program assigned to ".$ProgramWithoutTopicValue."";
									echo '
									<div class="alert alert-warning fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Warning!</strong> There is no program assigned to <strong>'.$ProgramWithoutTopicValue.' </strong> 
									</div>';
								}
								?>
								<div class="alert alert-info fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Notice!</strong> The most hottest topic recorded in significant notes is <strong> <?php echo $SubCategoryName; ?> </strong> with a total of <strong> <?php echo $CountedValueFirstElement; ?> </strong> records this past 6 months 
								</div>

								<div class="alert alert-info fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Notice!</strong> The most hottest topic recorded in messages is <strong> <?php echo $SubCategoryName2; ?> </strong> with a total of <strong> <?php echo $CountedValueFirstElement2; ?> </strong> records this past 6 months 
								</div>

								<label>Program Name</label>
								<input type="text" id="txtbxProgramName" name="txtbxProgramName" class="form-control">
								<br />
								<label>Description</label>
								<textarea name="txtareaProgramDescription" class="form-control"></textarea>
								<br />
								<label>Topic</label>
								<br />
								<div class="container">
									<textarea name='txtareaProgramSubCategory' placeholder='Type Topics It Covers'></textarea>
								</div>
								<br />
								<label>Image</label>
								<input type="file" name="fileProgramImage" id="fileProgramImage" class="form-control" />
								<br />

								<br />


							</div>
							<div class="modal-footer">
								<input type="submit" name="btnAdd" id="btnAdd" value="Add Account" class="btn btn-success " />
								<button type="button" class="btn btn-danger  pull-right" data-dismiss="modal">Close</button> 
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--/Modal Edit-->
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
	<script src="js/tagify/dist/tagify.polyfills.js"></script>
	<script src="js/tagify/dist/tagify.js"></script>
	<script src="js/tagify/dist/jQuery.tagify.js"></script>
	<!-- Noty -->
	<script src="assets/lib/noty.js" type="text/javascript"></script>
	<!-- mo.js -->
	<script src="assets/lib/mo.min.js" type="text/javascript"></script>
	<!-- custom noty -->
	<script src="assets/lib/custom.js" type="text/javascript"></script>

	<script>
		$(document).ready(function(){
			$(document).on('click','.btn-view',function(){
				var programID = $(this).attr("id");
				$.ajax({
					url:"viewPrograms.php",
					method:"post",
					data:{programID:programID},
					success:function(data){
						$('#programDetails').html(data);
						$('#view_data_Modal').modal('show');
					}
				});
			});
			$(document).on('click','.btn-edit',function(){
				var programID = $(this).attr("id");
				$.ajax({
					url:"editPrograms.php",
					method:"post",
					data:{programID:programID},
					success:function(data){
						$('#editPrograms').html(data);
						$('#edit_data_Modal').modal('show');
						EditModalScript();
					}
				});
			});
		});
	</script>


	<script>
		$(function(){
			$('#dropdownCategory').change(function() {
				var dropdownCategoryChoice = $(this).val();
				if( dropdownCategoryChoice == 'Others')
				{
					document.getElementById("txtbxOthersCategory").disabled = false;
				}
				else
				{
					document.getElementById("txtbxOthersCategory").disabled = true;
				}

			})
		})
		$(function(){
			$('#dropdownSubCategory').change(function() {
				var dropdownSubCategoryChoice = $(this).val();
				if( dropdownSubCategoryChoice == 'Others')
				{
					document.getElementById("txtbxOthersSubCategory").disabled = false;
				}
				else
				{
					document.getElementById("txtbxOthersSubCategory").disabled = true;
				}

			})
		})
		$('#checkProgramOthers').click(function() {
			if($("#checkProgramOthers").is(":checked")){
				document.getElementById("txtbxOthersSubCategory").disabled = false;
			}
			else
			{
				document.getElementById("txtbxOthersSubCategory").disabled = true;
			}
		})


	</script>
	<script type="text/javascript">
		var input = document.querySelector('textarea[name=txtareaProgramSubCategory]'),
		// init Tagify script on the above inputs
		tagify = new Tagify(input, {
			enforceWhitelist : true,
			whitelist : [<?php echo $SubCategoryString; ?>],
			blacklist : ["Moxy, Mira"]
		});

		function AddModalScript(){
			
			// "remove all txtareaProgramSubCategory" button event listener
			document.querySelector('.txtareaProgramSubCategory--removeAllBtn')
			// Chainable event listeners
			tagify.on('add', onAddTag)
			.on('remove', onRemoveTag)
			.on('invalid', onInvalidTag);

			// tag added callback
			function onAddTag(e){
				console.log(e, e.detail);
				console.log( tagify.DOM.originalInput.value )
				tagify.off('add', onAddTag)
			 // exmaple of removing a custom Tagify event
			}

			// tag remvoed callback
			function onRemoveTag(e){
				console.log(e, e.detail);
			}

			// invalid tag added callback
			function onInvalidTag(e){
				console.log(e, e.detail);
			}
		}
	</script>

	<script type="text/javascript">
		function EditModalScript(){
			var input2 = document.querySelector('textarea[name=txtareaEditProgramSubCategory]'),
			// init Tagify script on the above inputs
			tagify = new Tagify(input2, {
				enforceWhitelist : true,
				whitelist : [<?php echo $SubCategoryString; ?>],
				blacklist : ["Moxy, Mira"]
			});

			// "remove all txtareaProgramSubCategory" button event listener
			document.querySelector('.txtareaEditProgramSubCategory--removeAllBtn')

			// Chainable event listeners
			tagify.on('add', onAddTag)
			.on('remove', onRemoveTag)
			.on('invalid', onInvalidTag);

			// tag added callback
			function onAddTag(e){
				console.log(e, e.detail);
				console.log( tagify.DOM.originalInput.value )
				tagify.off('add', onAddTag)
			 // exmaple of removing a custom Tagify event
			}

			// tag remvoed callback
			function onRemoveTag(e){
				console.log(e, e.detail);
			}

			// invalid tag added callback
			function onInvalidTag(e){
				console.log(e, e.detail);
			}
		}
		var n = new Noty({
			text: notyMessage,
			type: 'info',
			timeout: '10000'
		});
		n.show();
		var n = new Noty({
			text: notyMessage2,
			type: 'info',
			timeout: '10000'
		});
		n.show();
		var n = new Noty({
			text: notyMessage3,
			type: 'info',
			timeout: '10000'
		});
		n.show();
		var n = new Noty({
			text: notyMessage4,
			type: 'info',
			timeout: '10000'
		});
		n.show();
		if(topicFlag == "true"){
			var n = new Noty({
				text: notyMessageTopicStatus,
				type: 'success',
				timeout: '10000'
			});
			n.show();
		}
		else if(topicFlag == "false"){
			var n = new Noty({
				text: notyMessageTopicStatus,
				type: 'error',
				timeout: '10000'
			});
			n.show();
		}
	</script>

</body>
</html>