<?php

if(isset($_POST["noteID"]))
{	
	$output = '';
	$varcharNoteID = $_POST["noteID"];
	include('connectionString.php');
	$queryView = "SELECT * from tbl_significantnotes inner join tbl_personalinfo on tbl_significantnotes.studentNumber = tbl_personalinfo.studentNumber inner join tbl_studentaccount on tbl_personalinfo.studentNumber = tbl_studentaccount.studentNumber  WHERE `noteID` = '$varcharNoteID'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
	<table class="table" >
	<tbody>';
	while($row = mysqli_fetch_array($queryViewArray))
	{
		$queryGettingCategoryName = "SELECT * FROM tbl_incidentcategory WHERE `categoryID` = ".$row['categoryID']." ";
		$resultGettingCategoryName = mysqli_query($connect, $queryGettingCategoryName); 
		while($res = mysqli_fetch_array($resultGettingCategoryName))  
		{ 
			$queryGettingSubCategoryName = "SELECT * FROM tbl_incidentsubcategory WHERE `subCategoryID` = ".$row['subCategoryID']." ";
			$resultGettingSubCategoryName = mysqli_query($connect, $queryGettingSubCategoryName); 
			while($res2 = mysqli_fetch_array($resultGettingSubCategoryName))  
			{ 
				$queryGettingAdminID = "SELECT * FROM tbl_adminaccount WHERE `adminId` = ".$row['adminId']." ";
				$resultGettingAdminID = mysqli_query($connect, $queryGettingAdminID); 
				while($res3 = mysqli_fetch_array($resultGettingAdminID))  
				{ 
					$output .= '
					<label>Student Number - '.$row['studentNumber'].'</label>
					<br />
					<label>'.$row["firstName"].' '.$row["middleName"].' '.$row["lastName"].'</label>
					<br />
					<label>Date Of Visitation</label>
					<input type="date" name="dateEditNoteDate" id="dateEditNoteDate" value="'.$row["noteDate"].'" class="form-control" />
					<br />
					';
							// mysql select query
					$queryCategory = "SELECT * FROM tbl_incidentcategory";

							// for method 1/
					$resultCategory = mysqli_query($connect, $queryCategory);

					?>
					<script>
						var categoryID = '<?php echo $res["categoryID"];?>';
						$("#optionEditNoteCategory").val(categoryID).change();
					</script>
					<?php
					$output .= '<label>Visitation Type</label>
					<select name="optionEditNoteCategory" id="optionEditNoteCategory" class="form-control">
					<option value="NULL" selected>Select A Course</option>';?>
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
					<script>
						var subCategoryID = '<?php echo $res2["subCategoryID"];?>';
						$("#optionEditNoteSubCategory").val(subCategoryID).change();
					</script>
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
					<textarea name="txtareaEditNoteRemarks" name="txtareaEditNoteRemarks" class="form-control">'.$row['noteRemarks'].'</textarea>
					<br />

					<input type="hidden" name="hiddenEditNoteID" id="hiddenEditNoteID" value="'.$row["noteID"].'"/>

					<input type="hidden" name="hiddenEditCollege" id="hiddenEditCollege" value="'.$row["collegeCode"].'"/>
					';
				}
			}
		}
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
		
