 <?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$noteID = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 



$querymovingtoarchive = "INSERT INTO `tbl_significantnotes` select * from tbl_significantnotesarchive where `noteID` = '$noteID'";
$querydeleting = "DELETE FROM `tbl_significantnotesarchive` WHERE `tbl_significantnotesarchive`.`noteID` = '$noteID'";

if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
{
  if ($resultdeleting = mysqli_query($connect, $querydeleting))
  {
    header("Location:manageNotesStudentArchived.php");
}
else{
    $message = "Error Deleting";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:manageNotesStudentArchived.php");
}

}
else{
  $message = "Error Moving";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location:manageNotesStudentArchived.php");
}

//redirecting to the display page (index.php in our case)

?>

