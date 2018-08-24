 <?php
//including the database connection file
 include("connectionString.php");

//getting id of the data from url
 if(isset($_GET['id'])) {
 	$adminUserName = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 

 	$querydeleting = "DELETE FROM `tbl_adminaccountarchive` WHERE `tbl_adminaccountarchive`.`adminEmail` = '$adminUserName'";


 	if ($resultdeleting = mysqli_query($connect, $querydeleting))
 	{
 		echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccountArchived.php';</script>";	
 	}
 	else{
 		// $message = "Error Deleting";
 		// echo "<script type='text/javascript'>alert('$message');</script>";
 		echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccountArchived.php';</script>";	
 	}
 }
 else
 {
 	echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccountArchived.php';</script>";	
 }


//redirecting to the display page (index.php in our case)

 ?>

