 <?php
//including the database connection file
 include("connectionString.php");

//getting id of the data from url
 if(isset($_GET['id'])) {
 	$adminUserName = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 



 	$querymovingtoarchive = "UPDATE `tbl_adminaccount` SET `adminPassword` = 'admin123' WHERE `tbl_adminaccount`.`adminEmail` = '$adminUserName'";

 	if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
 	{
 		$message = "Successfully Resetted";
     echo "<script type='text/javascript'>alert('$message');</script>";
     echo "<script type='text/javascript'>location.href = 'login.php';</script>";

 	}
 	else{
 		// $message = "Error Moving";
 		// echo "<script type='text/javascript'>alert('$message');</script>";
 		echo "<script type='text/javascript'>location.href = 'login.php';</script>";	
 	}
 }
 else
 {
 	echo "<script type='text/javascript'>location.href = 'login.php';</script>";	
 }

//redirecting to the display page (index.php in our case)

 ?>

