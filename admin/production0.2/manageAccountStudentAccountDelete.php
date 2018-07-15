<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$studentNumber = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 



$querymovingtoarchive = "INSERT INTO tbl_studentaccountarchive select * from tbl_studentaccount where studentNumber = '$studentNumber'";
$querydeleting = "DELETE FROM `tbl_studentaccount` WHERE `tbl_studentaccount`.`studentNumber` = '$studentNumber'";

if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
{
	if ($resultdeleting = mysqli_query($connect, $querydeleting))
    {
    header("Location:manageAccountStudentAccount.php");
    }
    else{
    $message = "Error Deleting";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:manageAccountStudentAccount.php");
    }
    
}
else{
	$message = "Error Moving";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:manageAccountStudentAccount.php");
}
 
//redirecting to the display page (index.php in our case)

?>

