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


					?>


					<?php

					$output .= '
					<tr>
					<th scope="row">Program ID</th>
					<td>'.$row["programID"].'</td>
					</tr>
					<tr>
					<th scope="row">Program Name</th>
					<td>'.$row["programName"].'</td>
					</tr>
					<tr>
					<th scope="row">Description</th>
					<td>'.$row["programDescription"].'</td>
					</tr>
					<th scope="row">Reason for visitation</th>
					<td>'.$row["subCategoryName"].'</td>
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