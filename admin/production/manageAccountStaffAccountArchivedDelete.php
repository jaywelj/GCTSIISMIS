 <?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$adminUserName = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 


$querydeleting = "DELETE FROM `tbl_adminaccountarchive` WHERE `tbl_adminaccountarchive`.`adminEmail` = '$adminUserName'";


  if ($resultdeleting = mysqli_query($connect, $querydeleting))
  {
    header("Location:manageAccountStaffAccountArchived.php");
}
else{
    $message = "Error Deleting";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:manageAccountStaffAccountArchived.php");
}


//redirecting to the display page (index.php in our case)

?>

