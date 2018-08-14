<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
if (isset($_GET['id'])) {
$id = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
$archivingquery = "INSERT INTO `tbl_coursearchive` SELECT * FROM `tbl_course` WHERE `courseCode` = '$id'";
$deletingquery = "DELETE FROM `tbl_course` WHERE `tbl_course`.`courseCode` = '$id'";

if (mysqli_query($connect, $archivingquery))
{
	$message = "Success Moving";
	echo "<script type='text/javascript'>alert('$message');</script>";
	if (mysqli_query($connect, $deletingquery)) 
	{
	$message = "Success Deleting";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageCourse.php';</script>";
	}
	else
	{
	$message = "Query Error Deleting";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageCourse.php';</script>";
	}
}
else
{
	$message = "Query Error Moving";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageCourse.php';</script>";
}
}
else
{
	echo "<script type='text/javascript'>location.href = 'manageCourse.php';</script>";
}
//Clearing Tour Package dependencies 



		
//redirecting to the display page (index.php in our case)

?>

