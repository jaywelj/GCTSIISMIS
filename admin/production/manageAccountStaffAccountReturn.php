 <?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$adminUserName = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 



$querymovingtoarchive = "INSERT INTO `tbl_adminaccount` select * from tbl_adminaccountarchive where `adminEmail` = '$adminUserName'";
$querydeleting = "DELETE FROM `tbl_adminaccountarchive` WHERE `tbl_adminaccountarchive`.`adminEmail` = '$adminUserName'";

if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
{
  if ($resultdeleting = mysqli_query($connect, $querydeleting))
  {
    header("Location:manageAccountStaffAccountArchived.php");
}
else{
    $message = "Error Deleting";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:manageAccountStaffAccountArchived.php");
}

}
else{
  $message = "Error Moving";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location:manageAccountStaffAccountArchived.php");
}

//redirecting to the display page (index.php in our case)

?>

