<?php

if(isset($_POST["studentNumber"]))
{	
	$output = '';
	$varcharStudentNumber = $_POST["studentNumber"];
	include('connectionString.php');
	$queryView = "SELECT * FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE tbl_studentaccount.studentNumber = '$varcharStudentNumber'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
			 		<table class="table" >
						<tbody>';
						while($row = mysqli_fetch_array($queryViewArray))
						{
							$output .= '
							<tr>
								<img src="data:image/jpeg;base64,'.base64_encode($row['studentDisplayPic']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover; display: block; margin-left: auto; margin-right: auto; border-radius:50%">
							</tr>
							<tr>
								<th scope="row">Name</th>
								<td>'.$row["firstName"].' '.$row["middleName"].' '.$row["lastName"].'</td>
							</tr>
							<tr>
								<th scope="row">Course</th>
								<td>'.$row["courseCode"].'</td>
							</tr>
							<tr>
								<th scope="row">College</th>
								<td>'.$row["collegeCode"].'</td>
							</tr>
							<tr>
								<th scope="row">Year and Section</th>
								<td>'.$row["year"]." - ".$row["section"].'</td>
							</tr>';
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