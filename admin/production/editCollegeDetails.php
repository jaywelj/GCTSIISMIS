<?php

if(isset($_POST["collegeCode"]))
{	
	$output = '';
	$varcharCollegeCode = $_POST["collegeCode"];
	include('connectionString.php');
	$queryView = "SELECT * FROM tbl_college WHERE collegeCode = '$varcharCollegeCode'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
			 		<table class="table" >
						<tbody>';
						while($row = mysqli_fetch_array($queryViewArray))
						{
							$output .= '
							<input type="text" name="txtbxCollegeCode" id="txtbxCollegeCode" style="display:none;"  value="'.$varcharCollegeCode.'" class="form-control"  />
							<label>College Code</label>
							<input type="text" name="txtbxEditCollegeCode" id="txtbxEditCollegeCode"  value="'.$row["collegeCode"].'" class="form-control" />
							<br />
							<label>College Name</label>
							<input type="text" name="txtbxEditCollegeName" id="txtbxEditCollegeName" value="'.$row["collegeName"].'" class="form-control" />
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
