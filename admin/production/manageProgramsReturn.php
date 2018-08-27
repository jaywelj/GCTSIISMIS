<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
if (isset($_GET['id']) AND isset($_GET['id2'])) {
$id = $_GET['id'];
$id2 = $_GET['id2'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
$archivingquery = "INSERT INTO `tbl_recommendedprogram` SELECT * FROM `tbl_recommendedprogramarchive` WHERE `programID` = '$id'";
$deletingquery = "DELETE FROM `tbl_recommendedprogramarchive` WHERE `tbl_recommendedprogramarchive`.`programID` = '$id'";
$archivingquery2 = "INSERT INTO `tbl_programcategory` SELECT * FROM `tbl_programcategoryarchive` WHERE `programName` = '$id2'";
$deletingquery2 = "DELETE FROM `tbl_programcategoryarchive` WHERE `tbl_programcategoryarc`.`programName` = '$id2'";


if (mysqli_query($connect, $archivingquery))
{
	// $message = "Success Moving Program";
	// echo "<script type='text/javascript'>alert('$message');</script>";	
	
	if (mysqli_query($connect, $deletingquery)) 
	{
		// $message = "Success Deleting";
		// echo "<script type='text/javascript'>alert('$message');</script>";

		if (mysqli_query($connect, $archivingquery2))
		{
			// $message = "Success Moving Program Category";
			// echo "<script type='text/javascript'>alert('$message');</script>";
			if (mysqli_query($connect, $deletingquery2))
			{
				$message = "Successfully Restored Program";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script type='text/javascript'>location.href = 'manageProgramsArchived.php';</script>";
			}
			else
			{
				$message = "Successfully Restored Program";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script type='text/javascript'>location.href = 'manageProgramsArchived.php';</script>";
			}
		}
		else
		{
			$message = "Query Error Moving Program Category";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>location.href = 'manageProgramsArchived.php';</script>";
		}

	}
	else
	{
		$message = "Query Error Deleting Recommended Program";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>location.href = 'manageProgramsArchived.php';</script>";
	}
}
else
{
	$message = "Query Error Moving";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>location.href = 'manageProgramsArchived.php';</script>";
}
}
else
{
	echo "<script type='text/javascript'>location.href = 'manageProgramsArchived.php';</script>";
}
//Clearing Tour Package dependencies 




//redirecting to the display page (index.php in our case)

?>

