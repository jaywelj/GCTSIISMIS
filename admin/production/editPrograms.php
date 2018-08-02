<?php

if(isset($_POST["programID"]))
{	
	$output = '';
	$varcharProgramID = $_POST["programID"];
	include('connectionString.php');
	$queryView = "SELECT * FROM tbl_recommendedprogram INNER JOIN tbl_incidentsubcategory ON tbl_recommendedprogram.subCategoryID = tbl_incidentsubcategory.subCategoryID WHERE `programID` = '$varcharProgramID' ";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
	<table class="table" >
	<tbody>';
	while($row = mysqli_fetch_array($queryViewArray))
	{
		
					$output .= '
					<label>Program ID - '.$row['programID'].'</label>
					<input type="hidden" name="hiddenEditProgramID" id="hiddenEditProgramID" value="'.$row["programID"].'"/>
					<br />
					<br />
					<label>Program Name</label>
					<br />
					<input type="text" name="txtbxEditProgramName" id="txtbxEditProgramName" value="'.$row["programName"].'"/>
					<br />```````
					<br />
					<label>Program Description</label>
					<br />
					<textarea name="txtareaEditProgramDescription" name="txtareaEditProgramDescription" class="form-control">'.$row['programDescription'].'</textarea>
					<br />
					';
					$querySubCategory = "SELECT * FROM tbl_incidentsubcategory";

							// for method 1/
					$resultSubCategory = mysqli_query($connect, $querySubCategory);

					?>
					<script>
						var subCategoryID = '<?php echo $row["subCategoryID"];?>';
						$("#optionEditNoteSubCategory").val(subCategoryID).change();
					</script>
					<?php
					$output .= '<label>Reason For Visitation</label>
					<select name="optionEditProgramSubCategory" id="optionEditProgramSubCategory" class="form-control">
					<option value="NULL" selected>Select A Course</option>';?>
					<?php 
					while($row1 = mysqli_fetch_array($resultSubCategory)):;?>
						<?php
						$output .='<option value="'.$row1[0].'">'.$row1[1].'</option>';
						?>
					<?php endwhile;?>
					<?php
					$output .='</select>
					<br />';

					?>
					<?php

					$output .= '
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
