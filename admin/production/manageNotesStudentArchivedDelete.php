 <?php
//including the database connection file
 include("connectionString.php");

//getting id of the data from url
 if (isset($_GET['id'])) {
 $noteID = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 

 $querydeleting = "DELETE FROM `tbl_significantnotesarchive` WHERE `tbl_significantnotesarchive`.`noteID` = '$noteID'";


 if ($resultdeleting = mysqli_query($connect, $querydeleting))
 {
 	echo "<script type='text/javascript'>location.href = 'manageNotesStudentArchived.php';</script>";
 }
 else{
 	$message = "Error Deleting";
 	echo "<script type='text/javascript'>alert('$message');</script>";
 	echo "<script type='text/javascript'>location.href = 'manageNotesStudentArchived.php';</script>";
 }
}
else
{
	echo "<script type='text/javascript'>location.href = 'manageNotesStudentArchived.php';</script>";
}

//redirecting to the display page (index.php in our case)

 ?>

