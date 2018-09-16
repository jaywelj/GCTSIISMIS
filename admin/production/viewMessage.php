<?php

if(isset($_POST["messageID"]))
{	
	$output = '';
	$varcharMessageID = $_POST["messageID"];
	include('connectionString.php');
	$queryView = "SELECT * FROM `tbl_message` WHERE `messageID` = '$varcharMessageID' ";
	$queryViewArray=mysqli_query($connect,$queryView);

	$output .= '
	<table class="table" >
	<tbody>';
	while($row = mysqli_fetch_array($queryViewArray))
	{
		$messageStatus = $row['messageStatus'];
		if ($messageStatus == "Unread") {
			$querySettingRead = "UPDATE `tbl_message` SET `messageStatus` = 'Read' WHERE `tbl_message`.`messageID` = '$varcharMessageID'";
			$resultSettingRead = mysqli_query($connect,$querySettingRead);
		}

		$varcharSubCategoryID = $row['subCategoryID'];
		$querySubCategoryID = "SELECT * FROM tbl_incidentsubcategory WHERE `subCategoryID` = '$varcharSubCategoryID'";
		$resultSubCategoryID = mysqli_query($connect, $querySubCategoryID);
		while ($res = mysqli_fetch_array($resultSubCategoryID)) 
		{
			if(!empty($row['studentNumber']))
			{
				$studentNumber = $row['studentNumber'];
				$queryGettingCollege = "SELECT * FROM tbl_personalinfo WHERE `studentNumber` = '$studentNumber'";
				$resultGettingCollege = mysqli_query($connect, $queryGettingCollege);
				while ($res = mysqli_fetch_array($resultGettingCollege)) {
					$collegeCode = $res['collegeCode'];
				}

				$queryGettingCollegeName = "SELECT * FROM tbl_college WHERE `collegeCode` = '$collegeCode'";
				$resultGettingCollegeName = mysqli_query($connect, $queryGettingCollegeName);
				while ($res2 = mysqli_fetch_array($resultGettingCollegeName)) {
					$collegeName = $res2['collegeName'];
				}
			}
			else
			{
				$studentNumber = "No Student Number Associated With";
				$collegeCode = "No College Available";
				$collegeName = "No College Available";
			}

			?>


			<?php
			$output .= '
			<tr>
			<th scope="row">Message ID</th>
			<td>'.$row["messageID"].'</td>
			</tr>
			<tr>
			<th scope="row">Name Of Sender</th>
			<td>'.$row["senderName"].'</td>
			</tr>
			<tr>
			<th scope="row">Email</th>
			<td>'.$row["senderEmail"].'</td>
			</tr>
			<tr>
			<th scope="row">Subject</th>
			<td>'.$res["subCategoryName"].'</td>
			</tr>
			<tr>
			<th scope="row">Message</th>
			<td>'.$row["messageContent"].'</td>
			</tr>
			<tr>
			<th scope="row">Date and time sent</th>
			<td>'.$row["messageDateSent"].'</td>
			</tr>
			<tr>
			<th scope="row">Student Number Associated With</th>
			<td>'.$studentNumber.'</td>
			</tr>	
			<th scope="row">College Student Associated With</th>
			<td>'.$collegeCode.' - '.$collegeName.'</td>
			</tr>
			<a href="individualInventoryRecordView.php?id='.$studentNumber.'" class="btn btn-info btn-sm " title="View">View Individual Inventory</a>
			';
		}
	}
	$output .= '
	</tbody>
	</table>
	';
	echo $output;
}
else
	echo '<script> altert("empty string");</script>';
?>	