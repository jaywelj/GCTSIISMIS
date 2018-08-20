<?php

if(isset($_POST["noteID"]))
{	
	$output = '';
	$varcharNoteID = $_POST["noteID"];
	include('connectionString.php');
	$queryView = "SELECT * from tbl_significantnotes inner join tbl_personalinfo on tbl_significantnotes.studentNumber = tbl_personalinfo.studentNumber inner join tbl_studentaccount on tbl_personalinfo.studentNumber = tbl_studentaccount.studentNumber  WHERE `noteID` = '$varcharNoteID' ";
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


					?>


					<?php




					$output .= '
					<tr>
					<img src="data:image/jpeg;base64,'.base64_encode($row['studentDisplayPic']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover; display: block; margin-left: auto; margin-right: auto; border-radius:50%">
					</tr>
					<tr>
					<th scope="row">studentNumber</th>
					<td>'.$row["studentNumber"].'</td>
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
					</tr>
					<tr>
					<th scope="row">Gender</th>
					<td>'.$row["sex"].'</td>
					</tr>
					<tr>	
					<tr>
					<th scope="row">Address</th>
					<td>'.$row["cityName"].'</td>
					</tr>
					<tr>
					<th scope="row">Contact No.</th>
					<td>'.$row["cpContactNumber"].'</td>
					</tr>
					<tr>
					<th scope="row">Email</th>
					<td>'.$row["email"].'</td>
					</tr>
					<tr>
					<th scope="row">Date Note Created</th>
					<td>'.$row["noteDate"].'</td>
					</tr>
					<tr>
					<th scope="row">Type of visitation</th>
					<td>'.$res["categoryName"].'</td>
					</tr>
					<th scope="row">Reason for visitation</th>
					<td>'.$res2["subCategoryName"].'</td>
					</tr>
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