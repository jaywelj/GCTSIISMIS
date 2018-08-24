<?php
session_start();
include("connectionString.php");
if(empty($_SESSION['sessionStudentAccountNumber'])||empty($_SESSION['sessionStudentAccountPassword'])){
	header("location: index.php");
}
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
$queryAccount = "SELECT * FROM tbl_personalinfo WHERE studentNumber='$varcharStudentAccountNumber'";
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link!="localhost/GCTSIISMIS/client2/individualInventory.php")
{
	if($queryArray = mysqli_query($connect, $queryAccount))
	{
		while($row=mysqli_fetch_array($queryArray))
		{
			if($row['sex']==''||$row['sex']==NULL)
			{

				$message = "Please fill up your Individual Inventory Form";
				echo "<script type='text/javascript'>alert('$message');window.location.replace('individualInventory.php');</script>";
			}
		}
	}
	else
	{
		echo mysqli_error($connect);
	}
}


if(isset($_POST['btnLogout'])){
	session_unset($_SESSION['sessionStudentAccountNumber']);
	session_unset($_SESSION['sessionStudentAccountPassword']);
	echo "<script> alert('You are now logging out');</script>";
}
?>