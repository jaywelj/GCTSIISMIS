<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
if(isset($_GET['id']))
{
	$Id = $_GET['id'];

	$query = "DELETE FROM tbl_answerproblemarchive WHERE studentNumber = '$Id'";
		if(mysqli_query($connect,$query))
		{
			echo "<script type='text/javascript'>alert('Answers Successfully Deleted');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive.php';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Query Error');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive	.php';</script>";
		}	
	

//redirecting to the display page (index.php in our case)
}
else
{
	echo "<script type='text/javascript'>alert('Please pick an answer');</script>";
	echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswerArchive.php';</script>";
}

?>

