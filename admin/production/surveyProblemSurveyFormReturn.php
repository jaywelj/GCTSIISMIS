<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
if(isset($_GET['id']))
{
	$problemId = $_GET['id'];

	//deleting the row from table
	//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
	//Clearing Tour Package dependencies 
	$querymoving = "INSERT INTO `tbl_surveyofproblems` select * from tbl_surveyofproblemsarchive where `problemID` = '$problemId'";
	$querydeleting = "DELETE FROM `tbl_surveyofproblemsarchive` where `problemID` = '$problemId'";
	$querymoving2 = "INSERT INTO tbl_answerproblem SELECT * FROM tbl_answerproblemarchive WHERE  `problemID` = '$problemId'";
	$querydeleting2 = "DELETE FROM `tbl_answerproblemarchive` where `problemID` = '$problemId'";

	if ($resultmoving = mysqli_query($connect, $querymoving))
	{
		$message = "Success";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
		if($resultmoving2 = mysqli_query($connect, $querymoving2))
		{
			if ($resultdeleting = mysqli_query($connect, $querydeleting))
			{
				if($resultdeleting2 = mysqli_query($connect, $querydeleting2))
				{
					$message = "Success";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
				}
				else
				{
					$message = "Error Deleting2";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
				}
			}
			else{
				$message = "Error Deleting";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
			}
		}
		else
		{
			$message = "Error Moving2";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
		}
	}
	else{
		$message = "Error Moving";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
	}

//redirecting to the display page (index.php in our case)
}
else
{
	echo "<script type='text/javascript'>alert('Please pick a question first');</script>";
	echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyFormArchive.php';</script>";
}

?>

