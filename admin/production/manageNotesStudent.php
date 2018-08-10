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

if(isset($_POST['btnAdd']))
{
	$dateNoteDate = mysqli_real_escape_string($connect, $_POST['hiddenNoteDate']);
	$varcharNoteStudentNumber = mysqli_real_escape_string($connect, $_POST['dropdownStudentNumber']);
	$varcharNoteCategory = mysqli_real_escape_string($connect, $_POST['dropdownCategory']);
	
	$varcharNoteSubCategory = mysqli_real_escape_string($connect, $_POST['dropdownSubCategory']);
	
	$varcharNoteAdminID = mysqli_real_escape_string($connect, $_POST['hiddenAdminID']);
	$varcharNoteRemarks = mysqli_real_escape_string($connect, $_POST['txtareaRemarks']);

	if(empty($varcharNoteStudentNumber)) 
	{

		if(empty($varcharNoteStudentNumber))
		{
			$message = "No Student Number Detected";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}

	else
	{


		if ($varcharNoteCategory == "Others") 
		{
			$varcharNoteCategoryOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersCategory']);
			$queryOtherCategory = "INSERT INTO `tbl_incidentcategory` (`categoryID`, `categoryName`) VALUES (NULL, '$varcharNoteCategoryOthers')";
			if(mysqli_query($connect, $queryOtherCategory))
			{
				$message = "Incident Category added successfully!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$queryOtherCategoryID = "SELECT * FROm tbl_incidentcategory WHERE `categoryName` =  '$varcharNoteCategoryOthers' ";
				$resultOtherCategoryID = mysqli_query($connect, $queryOtherCategoryID);
				while ($row = mysqli_fetch_array($resultOtherCategoryID)) {
					$varcharNoteCategory = $row['categoryID']; 
				}
			}
			else
			{
				$message = "Incident Category Error";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{

		}

		if ($varcharNoteSubCategory == "Others") 
		{
			$varcharNoteSubCategoryOthers = mysqli_real_escape_string($connect, $_POST['txtbxOthersSubCategory']);
			$queryOtherSubCategory = "INSERT INTO `tbl_incidentsubcategory` (`subCategoryID`, `subCategoryName`) VALUES (NULL, '$varcharNoteSubCategoryOthers')";
			if(mysqli_query($connect, $queryOtherSubCategory))
			{
				$message = "Incident Sub Category added successfully!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$queryOtherSubCategoryID = "SELECT * FROM tbl_incidentsubcategory WHERE `subCategoryName` = '$varcharNoteSubCategoryOthers'";
				$resultOtherSubCategoryID = mysqli_query($connect, $queryOtherSubCategoryID);
				while ($row = mysqli_fetch_array($resultOtherSubCategoryID)) {
					$varcharNoteSubCategory = $row['subCategoryID']; 
				}
			}
			else
			{
				$message = "Incident Sub Category Error";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{

		}

		$queryInsertingNote = "INSERT INTO `tbl_significantnotes` (`noteID`, `noteDate`, `categoryID`, `subCategoryID`, `noteRemarks`, `studentNumber`, `adminId`) VALUES (NULL, '$dateNoteDate', '$varcharNoteCategory', '$varcharNoteSubCategory', '$varcharNoteRemarks', '$varcharNoteStudentNumber', '$varcharNoteAdminID')";
		if(mysqli_query($connect, $queryInsertingNote))
		{
			$message = "Significant Notes added successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";

		}
		else
		{
			$message = "Significant Notes Error";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		}


	}
}


if(isset($_POST['btnUpdate']))
{
	include_once("connectionString.php");

	$varcharEditNoteDate = mysqli_real_escape_string($connect, $_POST['dateEditNoteDate']);

	$varcharEditNoteCategory = mysqli_real_escape_string($connect, $_POST['optionEditNoteCategory']);

	$varcharEditNoteSubCategory = mysqli_real_escape_string($connect, $_POST['optionEditNoteSubCategory']);

	$varcharEditNoteRemarks = mysqli_real_escape_string($connect, $_POST['txtareaEditNoteRemarks']);

	$varcharEditNoteID = mysqli_real_escape_string($connect, $_POST['hiddenEditNoteID']);

	$varcharEditCollege = mysqli_real_escape_string($connect, $_POST['hiddenEditCollege']);

	// checking empty fields
	if(empty($varcharEditNoteRemarks) OR (empty($varcharEditNoteDate))) 
	{

		if(empty($varcharEditNoteRemarks))
		{
			$message = "Empty Note Remarks";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

		if (empty($varcharEditNoteDate)) 
		{
			$message = "Empty Date";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	{ 
		// if all the fields are filled (not empty) 
		//insert data to database   
		$queryEdit = "UPDATE `tbl_significantnotes` SET `noteDate` = '$varcharEditNoteDate', `categoryID` = '$varcharEditNoteCategory', `subCategoryID` = '$varcharEditNoteSubCategory', `noteRemarks` = '$varcharEditNoteRemarks' WHERE `tbl_significantnotes`.`noteID` = '$varcharEditNoteID'";
		if(!mysqli_query($connect, $queryEdit))
		{
			$message = "Query Error" ;
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo("Error description: " . mysqli_error($connect));
		}
		else
		{
			$message = "Student Account Updated Successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//redirectig to the display page. In our case, it is index.php
			echo "<script type='text/javascript'>location.href = 'manageNotesStudentDate.php?id='$varcharEditCollege';</script>";	
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
	<title>Significant Notes | OCPS</title>

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
						<?php
						$college = $_GET['id']; 
						?>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Significant Notes <small><?php echo $college; ?></small></h2>
									<ul class="nav navbar-right">
										<button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD NEW NOTE</button>
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
											$queryStudent = "SELECT * FROM tbl_significantnotes INNER JOIN tbl_personalinfo ON tbl_significantnotes.studentNumber = tbl_personalinfo.studentNumber WHERE `collegeCode` = '$college'";
											$resultStudent = mysqli_query($connect, $queryStudent); 
											while($row = mysqli_fetch_array($resultStudent))  
											{  
												?>  
												<tr>
													<td width="14%" >
														<center>
															<button class="btn btn-default btn-info btn-view" type="button" title="View" id=<?php echo $row['noteID'];?>><i class="fa fa-list"></i></button>

															<button class="btn btn-default btn-warning btn-edit" type="button" title="Edit" id=<?php echo $row['noteID'];?>> <i class="fa fa-edit"></i></button>

															<a title="Delete" class="btn btn-danger" title="Delete" href="manageNotesStudentDelete.php?id=<?php echo $row['noteID']; ?>&college=<?php echo $college; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
														</center>
													</td>
													<td> <?php echo $row['noteID'];?> </td>
													<td> <?php echo $row['studentNumber'];?> &nbsp; &nbsp; <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?></td>
													<td> <?php echo $row['noteDate'];?> </td>
													
													<?php 
													
													$queryGettingCategoryName = "SELECT * FROM tbl_incidentcategory WHERE `categoryID` = ".$row['categoryID']." ";
													$resultGettingCategoryName = mysqli_query($connect, $queryGettingCategoryName); 
													while($res = mysqli_fetch_array($resultGettingCategoryName))  
													{ 


														?>
														<td> <?php echo $res['categoryName'];?> </td>
														<?php 
													}
													?>
													<?php 
													
													$queryGettingAdminID = "SELECT * FROM tbl_adminaccount WHERE `adminId` = ".$row['adminId']." ";
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
					<form method="post" enctype="multipart/form-data">
						<div id="view_data_Modal" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="background: #800; color:#fff; margin-right: -1px;">
										<button type="button" class="close" data-dismiss="modal" style="color: #fff" >&times;</button>
										<h4 class="modal-title text-center">STUDENT SIGNIFICANT NOTES</h4>
									</div>
									<div class="modal-body" id="studentNoteDetails"    style=" padding: 5px 50px 5px 50px;">

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
									<div class="modal-body" id="editNoteDetails"    style=" padding: 25px 50px 5px 50px;">

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
										<h4 class="modal-title text-center">ADD NEW NOTE</h4>
									</div>
									<div class="modal-body" style=" padding: 25px 50px 5px 50px;">
										<?php 
										date_default_timezone_set('Asia/Manila');
										$datetoday = date("Y-m-d");   

										?>
										<label>Date Note Added(Date Today By Default)</label>
										<input type="date" name="hiddenNoteDate" id="hiddenNoteDate" class="form-control" value="<?php echo $datetoday; ?>" />
										<br />

										<?php 
										include("connectionString.php");
										$queryStudentAccount = "SELECT * FROM tbl_personalinfo WHERE `collegeCode` = '$college'";
										$resultStudentAccount = mysqli_query($connect, $queryStudentAccount);


										?>
										<label>Student Number</label>
										<select name="dropdownStudentNumber" id="dropdownStudentNumber" class="form-control">
											<option value="NULL" selected>Select Student</option>
											<?php while($row = mysqli_fetch_array($resultStudentAccount)):;?>
												<option value="<?php echo $row['studentNumber'];?>"><?php echo $row['studentNumber'];?> - <?php echo $row['firstName'];?> <?php echo $row['lastName']; ?></option>
											<?php endwhile;?>
										</select>
										<br />
										<?php 
										include("connectionString.php");
										$queryIncidentCategory = "SELECT * FROM tbl_incidentcategory";
										$resultIncidentCategory = mysqli_query($connect, $queryIncidentCategory);


										?>
										<label>Category</label>
										<select name="dropdownCategory" id="dropdownCategory" class="form-control">
											<option value="NULL" selected disabled="">Visitation Category</option>
											<?php while($row = mysqli_fetch_array($resultIncidentCategory)):;?>
												<option value="<?php echo $row['categoryID'];?>"><?php echo $row['categoryName'];?></option>
											<?php endwhile;?>
											<option>Others</option>
										</select>
										<br />
										<label>If Others</label>
										<input type="text" id="txtbxOthersCategory" name="txtbxOthersCategory" class="form-control" disabled="true">
										<br />

										<?php 
										include("connectionString.php");
										$queryIncidentSubCategory = "SELECT * FROM tbl_incidentsubcategory";
										$resultIncidentSubCategory = mysqli_query($connect, $queryIncidentSubCategory);


										?>
										<label>Sub Category</label>
										<select name="dropdownSubCategory" id="dropdownSubCategory" class="form-control">
											<option value="NULL" selected disabled="">Reason for visitation?</option>
											<?php while($row = mysqli_fetch_array($resultIncidentSubCategory)):;?>
												<option value="<?php echo $row['subCategoryID'];?>"><?php echo $row['subCategoryName'];?></option>
											<?php endwhile;?>
											<option>Others</option>
										</select>
										<br />
										<label>If Others</label>
										<input type="text" id="txtbxOthersSubCategory" name="txtbxOthersSubCategory" class="form-control" disabled="true">
										<br />
										<label>Remarks</label>
										<textarea name="txtareaRemarks" class="form-control"></textarea>
										<br />
										<input type="hidden" name="hiddenAdminID" id="hiddenAdminID" class="form-control" value="<?php echo $LoggedInAdminID; ?>" />
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
					<!-- Modal Message -->
					<?php 
					require 'viewMessageModal.php';
					?>
					<!-- /Modal Message -->
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
					$(document).on('click','.btn-view',function(){
						var noteID = $(this).attr("id");
						$.ajax({
							url:"viewNotes.php",
							method:"post",
							data:{noteID:noteID},
							success:function(data){
								$('#studentNoteDetails').html(data);
								$('#view_data_Modal').modal('show');
							}
						});
					});
					$(document).on('click','.btn-edit',function(){
						var noteID = $(this).attr("id");
						$.ajax({
							url:"editNotes.php",
							method:"post",
							data:{noteID:noteID},
							success:function(data){
								$('#editNoteDetails').html(data);
								$('#edit_data_Modal').modal('show');
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

			</script>
		</body>
		</html>