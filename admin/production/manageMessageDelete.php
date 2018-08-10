
<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
$archivingquery = "INSERT INTO `tbl_messagearchive` SELECT * FROM `tbl_message` WHERE `messageID` = '$id'";
$deletingquery = "DELETE FROM `tbl_message` WHERE `tbl_message`.`messageID` = '$id'";

if (mysqli_query($connect, $archivingquery))
{
	$message = "Success Moving";
	echo "<script type='text/javascript'>alert('$message');</script>";
	if (mysqli_query($connect, $deletingquery)) 
	{
	$message = "Success Deleting";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageMessage.php';</script>";
	}
	else
	{
	$message = "Query Error Deleting";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageMessage.php';</script>";
	}
}
else
{
	$message = "Query Error Moving";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageMessage.php';</script>";
}
//Clearing Tour Package dependencies 



		
//redirecting to the display page (index.php in our case)

?>

