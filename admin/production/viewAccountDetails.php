<?php

if(isset($_POST["adminEmail"]))
{	
	$output = '';
	$varcharAdminEmail = $_POST["adminEmail"];
	include('connectionString.php');
	$queryView = "SELECT * FROM tbl_adminaccount WHERE adminEmail = '$varcharAdminEmail'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
			 		<table class="table" >
						<tbody>';
						while($row = mysqli_fetch_array($queryViewArray))
						{
							$output .= '
							<tr>
								<img src="data:image/jpeg;base64,'.base64_encode($row['adminImage']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover; display: block; margin-left: auto; margin-right: auto; border-radius:50%">
							</tr>
							<tr>
								<th scope="row">Name</th>
								<td>'.$row["adminFirstName"].' '.$row["adminMiddleName"].' '.$row["adminLastName"].'</td>
							</tr>
							<tr>
								<th scope="row">Gender</th>
								<td>'.$row["adminGender"].'</td>
							</tr>
							<tr>
								<th scope="row">Birth Date</th>
								<td>'.$row["adminBirthDate"].'</td>
							</tr>	
							<tr>
								<th scope="row">Address</th>
								<td>'.$row["adminAddress"].'</td>
							</tr>
							<tr>
								<th scope="row">Contact No.</th>
								<td>'.$row["adminContactNo"].'</td>
							</tr>
							<tr>
								<th scope="row">Email</th>
								<td>'.$row["adminEmail"].'</td>
							</tr>
							<tr>
								<th scope="row">Brief Introduction</th>
								<td>'.$row["adminDescription"].'</td>
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