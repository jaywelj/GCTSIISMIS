<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
$deletingquery = "DELETE FROM `tbl_collegearchive` WHERE `tbl_collegearchive`.`collegeCode` = '$id'";


	if (mysqli_query($connect, $deletingquery)) 
	{
	$message = "Success Deleting";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageCollegeArchived.php';</script>";
	}
	else
	{
	$message = "Query Error Deleting";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageCollegeArchived.php';</script>";
	}

//Clearing Tour Package dependencies 



		
//redirecting to the display page (index.php in our case)

?>

