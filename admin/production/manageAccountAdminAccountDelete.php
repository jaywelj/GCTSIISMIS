 <?php
//including the database connection file
 include("connectionString.php");

//getting id of the data from url
 if(isset($_GET['id'])) {
 	$adminUserName = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 



 	$querymovingtoarchive = "INSERT INTO `tbl_adminaccountarchive` select * from tbl_adminaccount where `adminEmail` = '$adminUserName'";
 	$querydeleting = "DELETE FROM `tbl_adminaccount` WHERE `tbl_adminaccount`.`adminEmail` = '$adminUserName'";

 	if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
 	{
 		if ($resultdeleting = mysqli_query($connect, $querydeleting))
 		{
 			$message = "Succesfully Archived Admin Account";
 			echo "<script type='text/javascript'>alert('$message');</script>";
 			echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";
 		}
 		else{
 			// $message = "Error Deleting";
 			// echo "<script type='text/javascript'>alert('$message');</script>";
 			echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";	
 		}

 	}
 	else{
 		// $message = "Error Moving";
 		// echo "<script type='text/javascript'>alert('$message');</script>";
 		echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";	
 	}
 }
 else
 {
 	echo "<script type='text/javascript'>location.href = 'manageAccountAdminAccount.php';</script>";	
 }

//redirecting to the display page (index.php in our case)

 ?>

