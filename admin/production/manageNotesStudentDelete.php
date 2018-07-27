 <?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$noteID = $_GET['id'];
$college = $_GET['college'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 



$querymovingtoarchive = "INSERT INTO `tbl_significantnotesarchive` select * from tbl_significantnotes where `noteID` = '$noteID'";
$querydeleting = "DELETE FROM `tbl_significantnotes` WHERE `tbl_significantnotes`.`noteID` = '$noteID'";

if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
{
  if ($resultdeleting = mysqli_query($connect, $querydeleting))
  {
    header("Location:manageNotesStudent.php?id=$college");
}
else{
    $message = "Error Deleting";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:manageNotesStudent.php?id=$college");
}

}
else{
  $message = "Error Moving";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location:manageNotesStudent.php?id=$college");
}

//redirecting to the display page (index.php in our case)

?>

