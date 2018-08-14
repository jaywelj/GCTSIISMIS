<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
if(isset($_GET['id']))
{
	$Id = $_GET['id'];

	$query = "INSERT INTO tbl_answerproblem SELECT * FROM tbl_answerproblemarchive WHERE studentNumber = '$Id'";
	$query2 = "DELETE FROM tbl_answerproblemarchive WHERE studentNumber = '$Id'";
	if(mysqli_query($connect,$query))
	{
		//echo "<script type='text/javascript'>alert('Moving to Archive Successfull');</script>";
		if(mysqli_query($connect,$query2))
		{
			echo "<script type='text/javascript'>alert('Answers Restored');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive.php';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Query Error2');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive	.php';</script>";
		}	
	}
	else
	{
		echo "<script type='text/javascript'>alert('Query Error');</script>";
		echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive.php';</script>";
	}

//redirecting to the display page (index.php in our case)
}
else
{
	echo "<script type='text/javascript'>alert('Please pick an answer');</script>";
	echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive.php';</script>";
}

?>

