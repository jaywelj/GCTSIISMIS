<?php
//echo "<script type='text/javascript'>alert('sess');</script>";
session_start();
include("connectionString.php");
if(empty($_SESSION['sessionStudentAccountNumber'])||empty($_SESSION['sessionStudentAccountPassword'])){
	header("location: index.php");
}
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];



if(isset($_POST['btnLogout'])){
	session_unset($_SESSION['sessionStudentAccountNumber']);
	session_unset($_SESSION['sessionStudentAccountPassword']);
	echo "<script> alert('You are now logging out');</script>";
}
?>