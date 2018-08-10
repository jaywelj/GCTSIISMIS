<?php
session_start();
if(empty($_SESSION['sessionStudentAccountNumber'])||empty($_SESSION['sessionStudentAccountPassword'])){
	header("location: index.php");
}
if(isset($_POST['btnLogout'])){
	session_unset();
	session_destroy();
	echo "<script> alert('You are now logging out');</script>";
}
?>