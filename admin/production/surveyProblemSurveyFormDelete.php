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
	$querymovingtoarchive = "INSERT INTO `tbl_surveyofproblemsarchive` select * from tbl_surveyofproblems where `problemID` = '$problemId'";
	$querydeleting = "DELETE FROM `tbl_surveyofproblems` where `problemID` = '$problemId'";
	$querymovingtoarchive2 = "INSERT INTO tbl_answerproblemarchive SELECT * FROM tbl_answerproblem WHERE  `problemID` = '$problemId'";
	$querydeleting2 = "DELETE FROM `tbl_answerproblem` where `problemID` = '$problemId'";

	if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
	{
		$message = "Success";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyForm.php';</script>";
		if($resultmovingtoarchive2 = mysqli_query($connect, $querymovingtoarchive2))
		{
			if ($resultdeleting = mysqli_query($connect, $querydeleting))
			{
				if($resultdeleting2 = mysqli_query($connect, $querydeleting2))
				{
					$message = "Success";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyForm.php';</script>";
				}
				else
				{
					$message = "Error Deleting2";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyForm.php';</script>";
				}
			}
			else{
				$message = "Error Deleting";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyForm.php';</script>";
			}
		}
		else
		{
			$message = "Error Moving2";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyForm.php';</script>";
		}
	}
	else{
		$message = "Error Moving";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location:surveyProblemSurveyForm.php");
	}

//redirecting to the display page (index.php in our case)
}
else
{
	echo "<script type='text/javascript'>alert('ERROR');</script>";
	echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyForm.php';</script>";
}

?>

