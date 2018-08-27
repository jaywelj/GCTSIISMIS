<?php
session_start();
unset($_SESSION['sessionStudentAccountNumber']);
unset($_SESSION['sessionStudentAccountPassword']);
echo "<script> alert('You are now logging out');</script>";
header("location: index.php");
?>