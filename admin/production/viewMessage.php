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