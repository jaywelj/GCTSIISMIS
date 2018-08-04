<?php

if(isset($_POST["programID"]))
{	
	$output = '';
	$varcharProgramID = $_POST["programID"];
	include('connectionString.php');
	$queryView = "SELECT * FROM `tbl_recommendedprogram` WHERE `programID` = '$varcharProgramID' ";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
	<table class="table" >
	<tbody>';
	while($row = mysqli_fetch_array($queryViewArray))
	{
		?>
		<?php
		$output .= '	
		<tr>
		<img src="data:image/jpeg;base64,'.base64_encode($row['programImage']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover; display: block; margin-left: auto; margin-right: auto; border-radius:50%">
		</tr>
		<tr>
		<th scope="row">Program ID</th>
		<td>'.$row["programID"].'</td>
		</tr>
		<tr>
		<th scope="row">Program Name</th>
		<td>'.$row["programName"].'</td>
		</tr>
		<tr>
		<th scope="row">Program Description</th>
		<td>'.$row["programDescription"].'</td>
		</tr>
		<tr>
		<th scope="row">Topics Tackled</th>
		<td>';

		$tempProgramName3 = $row['programName'];
		$queryProgram3 = "SELECT * FROM tbl_programcategory WHERE `programName` = '$tempProgramName3'";
		$resultProgram3 = mysqli_query($connect, $queryProgram3); 
		
		while($res = mysqli_fetch_array($resultProgram3))  
		{
			$output .=''.$res['subCategoryName'].'';
			$output .=',';  
		} 

		$output.='</td>
		</tr>
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