<?php

if(isset($_POST["studentNumber"]))
{	
	$output = '';
	$varcharStudentNumber = $_POST["studentNumber"];
	include('connectionString.php');
	$queryView = "SELECT * from tbl_personalinfo inner join tbl_studentaccount on tbl_personalinfo.studentNumber = tbl_studentaccount.studentNumber WHERE tbl_studentaccount.studentNumber = '$varcharStudentNumber'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
	<table class="table" >
	<tbody>';
	while($row = mysqli_fetch_array($queryViewArray))
	{
		$queryStudentAccount = "SELECT * from tbl_personalinfo inner join tbl_studentaccount on tbl_personalinfo.studentNumber = tbl_studentaccount.studentNumber ORDER BY studentDateAccountCreated DESC";
		$resultStudentAccount = mysqli_query($connect, $queryStudentAccount);
		
		date_default_timezone_set('Asia/Manila');
		$datetoday = date("Y-m-d");   





		$output .= '
		
		<label>Message Sent By Student Number - '.$row['studentNumber'].'</label>
		<br />
		<label>'.$row["firstName"].' '.$row["middleName"].' '.$row["lastName"].'</label>
		<br />
		<label>Date Note Added(Date Today By Default)</label>
		<input type="date" name="hiddenNoteDate" id="hiddenNoteDate" class="form-control" value="'.$datetoday.'" required="required"/>
		<br />
		<label>Student Number</label>
		<br />
		
		<input list="studentnumber" value="'.$row['studentNumber'].'" name="optionNoteStudentNumber">
		<datalist id="studentnumber" name = "optionNoteStudentNumber">'; ?>
		<?php 
		while($row1 = mysqli_fetch_array($resultStudentAccount)):;?>
			<?php
			$output .='<option value="'.$row1['studentNumber'].'">';
			?>
		<?php endwhile;?>

		<?php
		$output .= '
		</datalist>
		<br/>
		
		<br />
		';
							// mysql select query
		$queryCategory = "SELECT * FROM tbl_incidentcategory";

							// for method 1/
		$resultCategory = mysqli_query($connect, $queryCategory);

		?>
		<?php
		$output .= '<label>Visitation Type</label>
		<select name="optionEditNoteCategory" id="optionEditNoteCategory" class="form-control">
		<option value="NULL" selected>Visitation Type</option>';?>
		<?php 
		while($row1 = mysqli_fetch_array($resultCategory)):;?>
			<?php
			$output .='<option value="'.$row1[0].'">'.$row1[1].'</option>';
			?>
		<?php endwhile;?>
		<?php
		$output .='
		<option>Others</option>
		</select>
		<br />
		<label>If Others</label>
		<input type="text" id="txtbxEditOthersCategory" name="txtbxEditOthersCategory" class="form-control" disabled="true">
		<br />
		';

		$querySubCategory = "SELECT * FROM tbl_incidentsubcategory";

							// for method 1/
		$resultSubCategory = mysqli_query($connect, $querySubCategory);

		?>

		<?php
		$output .= '<label>Reason For Visitation</label>
		<select name="optionEditNoteSubCategory" id="optionEditNoteSubCategory" class="form-control">
		<option value="NULL" selected>Reason For Visitation</option>';?>
		<?php 
		while($row1 = mysqli_fetch_array($resultSubCategory)):;?>
			<?php
			$output .='<option value="'.$row1[0].'">'.$row1[1].'</option>';
			?>
		<?php endwhile;?>
		<?php
		$output .='
		<option>Others</option>
		</select>
		<br />
		<label>If Others</label>
		<input type="text" id="txtbxEditOthersSubCategory" name="txtbxEditOthersSubCategory" class="form-control" disabled="true">
		<br />';

		?>
		<?php

		$output .= '
		<label>Note Remarks</label>
		<textarea name="txtareaEditNoteRemarks" name="txtareaEditNoteRemarks" class="form-control"></textarea>
		<br />
		<input type="hidden" name="hiddenAdminID" id="hiddenAdminID" class="form-control" value="<?php echo $LoggedInAdminID; ?>" />
		<br />
		';


		
	}
	$output .= '
	</tbody>
	</table>
	';
	echo $output;
}
else
	echo '<script> altert("emplty string");</script>';

?>
<script>
	$(function(){
		$('#optionEditNoteCategory').change(function() {
			var optionEditNoteCategoryChoice = $(this).val();
			if( optionEditNoteCategoryChoice == 'Others')
			{
				document.getElementById("txtbxEditOthersCategory").disabled = false;
			}
			else
			{
				document.getElementById("txtbxEditOthersCategory").disabled = true;
			}

		})
	})
	$(function(){
		$('#optionEditNoteSubCategory').change(function() {
			var optionEditNoteSubCategoryChoice = $(this).val();
			if( optionEditNoteSubCategoryChoice == 'Others')
			{
				document.getElementById("txtbxEditOthersSubCategory").disabled = false;
			}
			else
			{
				document.getElementById("txtbxEditOthersSubCategory").disabled = true;
			}

		})
	})
</script>

