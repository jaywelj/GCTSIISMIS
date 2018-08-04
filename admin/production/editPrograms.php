<?php

if(isset($_POST["programID"]))
{	
	$output = '';
	$varcharProgramID = $_POST["programID"];
	include('connectionString.php');
	$queryView = "SELECT * FROM `tbl_recommendedprogram` WHERE `programID` = '$varcharProgramID'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
	<table class="table" >
	<tbody>';
	while($row = mysqli_fetch_array($queryViewArray))
	{
		$output .= '
		<label for="fileEditProgramImage" class="btn btn-default" style="border-radius:50%; margin-left:25%;" title="CHANGE PROFILE PICTURE">
		<img src="data:image/jpeg;base64,'.base64_encode($row['programImage']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover;  border-radius:50%">
		</label>
		<i class="fa fa-pencil" style="margin-left:46%;"></i>
		<input type="file" id="fileEditProgramImage" name="fileEditProgramImage" accept="image/*" style="display:none" value="">
		<br />
		<label>Program ID - '.$row['programID'].'</label>
		<input type="hidden" name="hiddenEditProgramID" id="hiddenEditProgramID" value="'.$row["programID"].'" class="form-control" />
		<br />
		<label>Program Name</label>
		<input type="text" name="txtbxEditProgramName" id="txtbxEditProgramName" value="'.$row["programName"].'" class="form-control" />
		<br />
		';
		?>
		<?php

		$output .= '
		<label>Program Description</label>
		<textarea name="txtareaEditProgramDescription" name="txtareaEditProgramDescription" class="form-control">'.$row['programDescription'].'</textarea>
		<br />		
		<label>Sub Category</label>';
		$tempProgramName2 = $row['programName'];
		$queryProgram2 = "SELECT * FROM tbl_programcategory WHERE `programName` = '$tempProgramName2'";
		$resultProgram2 = mysqli_query($connect, $queryProgram2); 
		
		$output .='
		<textarea name="txtareaEditProgramSubCategory" class="form-control" placeholder="Type Topics It Covers">';while($res = mysqli_fetch_array($resultProgram2))  
		{
			$output .=''.$res['subCategoryName'].'';
			$output .=',';  
		} 
		$output.='</textarea>
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
	echo '<script> alert("emplty string");</script>';
?>	