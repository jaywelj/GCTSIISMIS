<?php
//including the database connection file
include("connectionString.php");
if(isset($_GET['id']))
{
	//getting id of the data from url
	$id = $_GET['id'];
	echo "<script type='text/javascript'>alert('$id');</script>";
	//deleting the row from table
	//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";

	$deletingquery = "DELETE FROM `tbl_surveyofproblemsarchive` WHERE `problemID` = '$id'";
	$deletingquery2 = "DELETE FROM `tbl_answerproblemarchive` WHERE `problemID` = '$id'";

	if (mysqli_query($connect, $deletingquery)) 
	{
		if(mysqli_query($connect, $deletingquery2))
		{
			$message = "Success Deleting";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
		}
		else
		{
			$message = "Query Error Deleting2";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
		}
	}
	else
	{
		$message = "Query Error Deleting";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
	}
	//Clearing Tour Package dependencies 
	//redirecting to the display page (index.php in our case)
}
else
{
	echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
}


?>

